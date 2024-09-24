<?php

namespace Drupal\views\Form;

use Drupal\Component\Utility\Html;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Path\CurrentPathStack;
use Drupal\Core\Render\Element\Checkboxes;
use Drupal\Core\Url;
use Drupal\views\ExposedFormCache;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides the views exposed form.
 *
 * @internal
 */
class ViewsExposedForm extends FormBase {

  /**
   * The exposed form cache.
   *
   * @var \Drupal\views\ExposedFormCache
   */
  protected $exposedFormCache;


  /**
   * The current path stack.
   *
   * @var \Drupal\Core\Path\CurrentPathStack
   */
  protected $currentPathStack;

  /**
   * Constructs a new ViewsExposedForm.
   *
   * @param \Drupal\views\ExposedFormCache $exposed_form_cache
   *   The exposed form cache.
   * @param \Drupal\Core\Path\CurrentPathStack $current_path_stack
   *   The current path stack.
   */
  public function __construct(ExposedFormCache $exposed_form_cache, CurrentPathStack $current_path_stack) {
    $this->exposedFormCache = $exposed_form_cache;
    $this->currentPathStack = $current_path_stack;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('views.exposed_form_cache'),
      $container->get('path.current')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'views_exposed_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    // Make sure that we validate because this form might be submitted
    // multiple times per page.
    $form_state->setValidationEnforced();
    /** @var \Drupal\views\ViewExecutable $view */
    $view = $form_state->get('view');
    $display = &$form_state->get('display');
    // Existing arguments need to be passed as this exposed form might
    // be used in a block. Without this contextual views arguments
    // will be lost.
    /** @var \Drupal\Core\Routing\CurrentRouteMatch $route_match */
    $route_match = \Drupal::service('current_route_match');
    $route_name = $route_match->getRouteName();
    if ($route_name !== 'views.ajax' && empty($view->args)) {
      $args = $this->buildArgs();
      $view->setArguments($args);
    }

    $form_state->setUserInput($view->getExposedInput());

    // Let form plugins know this is for exposed widgets.
    $form_state->set('exposed', TRUE);
    // Check if the form was already created
    if ($cache = $this->exposedFormCache->getForm($view->storage->id(), $view->current_display)) {
      return $cache;
    }

    $form['#info'] = [];

    // Go through each handler and let it generate its exposed widget.
    foreach ($view->display_handler->handlers as $type => $value) {
      /** @var \Drupal\views\Plugin\views\ViewsHandlerInterface $handler */
      foreach ($view->$type as $id => $handler) {
        if ($handler->canExpose() && $handler->isExposed()) {
          // Grouped exposed filters have their own forms.
          // Instead of render the standard exposed form, a new Select or
          // Radio form field is rendered with the available groups.
          // When a user chooses an option the selected value is split
          // into the operator and value that the item represents.
          if ($handler->isAGroup()) {
            $handler->groupForm($form, $form_state);
            $id = $handler->options['group_info']['identifier'];
          }
          else {
            $handler->buildExposedForm($form, $form_state);
          }
          if ($info = $handler->exposedInfo()) {
            $form['#info']["$type-$id"] = $info;
          }
        }
      }
    }

    $form['actions'] = [
      '#type' => 'actions',
    ];
    $form['actions']['submit'] = [
      // Prevent from showing up in \Drupal::request()->query.
      '#name' => '',
      '#type' => 'submit',
      '#value' => $this->t('Apply'),
      '#id' => Html::getUniqueId('edit-submit-' . $view->storage->id()),
    ];

    if (!$view->hasUrl()) {
      // On any non views.ajax route, use the current route for the form action.
      if ($this->getRouteMatch()->getRouteName() !== 'views.ajax') {
        $form_action = Url::fromRoute('<current>')->toString();
      }
      else {
        // On the views.ajax route, set the action to the page we were on.
        $form_action = Url::fromUserInput($this->currentPathStack->getPath())->toString();
      }
    }
    else {
      $form_action = $view->getUrl()->toString();
    }

    $form['#action'] = $form_action;
    $form['#theme'] = $view->buildThemeFunctions('views_exposed_form');
    $form['#id'] = Html::cleanCssIdentifier('views_exposed_form-' . $view->storage->id() . '-' . $display['id']);
    // Labels are built too late for inline form errors to work, resulting
    // in duplicated messages.
    $form['#disable_inline_form_errors'] = TRUE;

    /** @var \Drupal\views\Plugin\views\exposed_form\ExposedFormPluginInterface $exposed_form_plugin */
    $exposed_form_plugin = $view->display_handler->getPlugin('exposed_form');
    $exposed_form_plugin->exposedFormAlter($form, $form_state);

    // Save the form.
    $this->exposedFormCache->setForm($view->storage->id(), $view->current_display, $form);

    return $form;
  }

  /**
   * @return array
   *
   * This code copied from \Drupal\views\Routing\ViewPageController::handle
   *
   * TODO: Don't repeat it.
   *
   * @see \Drupal\views\Routing\ViewPageController::handle
   * @see https://www.drupal.org/project/drupal/issues/2821962
   */
  protected function buildArgs() {
    /** @var \Drupal\Core\Routing\CurrentRouteMatch $route_match */
    $route_match = \Drupal::service('current_route_match');
    $args = [];
    $route = $route_match->getRouteObject();
    $map = $route->hasOption('_view_argument_map') ? $route->getOption('_view_argument_map') : [];

    foreach ($map as $attribute => $parameter_name) {
      // Allow parameters be pulled from the request.
      // The map stores the actual name of the parameter in the request. Views
      // which override existing controller, use for example 'node' instead of
      // arg_nid as name.
      if (isset($map[$attribute])) {
        $attribute = $map[$attribute];
      }
      if ($arg = $route_match->getRawParameter($attribute)) {
      }
      else {
        $arg = $route_match->getParameter($attribute);
      }

      if (isset($arg)) {
        $args[] = $arg;
      }
    }

    return $args;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    $view = $form_state->get('view');

    foreach (['field', 'filter'] as $type) {
      /** @var \Drupal\views\Plugin\views\ViewsHandlerInterface[] $handlers */
      $handlers = &$view->$type;
      foreach ($handlers as $key => $handler) {
        $handlers[$key]->validateExposed($form, $form_state);
      }
    }
    /** @var \Drupal\views\Plugin\views\exposed_form\ExposedFormPluginInterface $exposed_form_plugin */
    $exposed_form_plugin = $view->display_handler->getPlugin('exposed_form');
    $exposed_form_plugin->exposedFormValidate($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Form input keys that will not be included in $view->exposed_raw_data.
    $exclude = ['submit', 'form_build_id', 'form_id', 'form_token', 'exposed_form_plugin', 'reset'];
    $values = $form_state->getValues();
    foreach (['field', 'filter'] as $type) {
      /** @var \Drupal\views\Plugin\views\ViewsHandlerInterface[] $handlers */
      $handlers = &$form_state->get('view')->$type;
      foreach ($handlers as $key => $info) {
        if ($handlers[$key]->acceptExposedInput($values)) {
          $handlers[$key]->submitExposed($form, $form_state);
        }
        else {
          // The input from the form did not validate, exclude it from the
          // stored raw data.
          $exclude[] = $key;
        }
      }
    }

    $view = $form_state->get('view');
    $view->exposed_data = $values;
    $view->exposed_raw_input = [];

    $exclude = ['submit', 'form_build_id', 'form_id', 'form_token', 'exposed_form_plugin', 'reset'];
    /** @var \Drupal\views\Plugin\views\exposed_form\ExposedFormPluginBase $exposed_form_plugin */
    $exposed_form_plugin = $view->display_handler->getPlugin('exposed_form');
    $exposed_form_plugin->exposedFormSubmit($form, $form_state, $exclude);
    foreach ($values as $key => $value) {
      if (!empty($key) && !in_array($key, $exclude)) {
        if (is_array($value)) {
          // Handle checkboxes, we only want to include the checked options.
          // @todo revisit the need for this when
          //   https://www.drupal.org/node/342316 is resolved.
          $checked = Checkboxes::getCheckedCheckboxes($value);
          foreach ($checked as $option_id) {
            $view->exposed_raw_input[$key][$option_id] = $value[$option_id];
          }
        }
        else {
          $view->exposed_raw_input[$key] = $value;
        }
      }
    }
  }

}
