<?php

namespace Drupal\ginvite\Controller;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Entity\EntityFormBuilderInterface;
use Drupal\Core\Messenger\MessengerInterface;
use Drupal\Core\Url;
use Drupal\ginvite\Plugin\GroupContentEnabler\GroupInvitation;
use Drupal\group\Entity\GroupContent;
use Drupal\group\Entity\GroupContentInterface;
use Drupal\group\Entity\GroupInterface;
use Drupal\group\GroupMembershipLoader;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Handles Accept/Decline operations and Access check for them.
 */
class InvitationOperations extends ControllerBase {

  /**
   * Group membership loader service.
   *
   * @var \Drupal\group\GroupMembershipLoader
   */
  protected $membershipLoader;

  /**
   * The entity form builder.
   *
   * @var \Drupal\Core\Entity\EntityFormBuilderInterface
   */
  protected $entityFormBuilder;

  /**
   * The Messenger service.
   *
   * @var \Drupal\Core\Messenger\MessengerInterface
   */
  protected $messenger;

  /**
   * InvitationOperations constructor.
   *
   * @param \Drupal\group\GroupMembershipLoader $membershipLoader
   *   Group membership loader service.
   * @param \Drupal\Core\Entity\EntityFormBuilderInterface $entity_form_builder
   *   The entity form builder.
   * @param \Drupal\Core\Messenger\MessengerInterface $messenger
   *   The messenger service.
   */
  public function __construct(GroupMembershipLoader $membershipLoader, EntityFormBuilderInterface $entity_form_builder, MessengerInterface $messenger) {
    $this->membershipLoader = $membershipLoader;
    $this->entityFormBuilder = $entity_form_builder;
    $this->messenger = $messenger;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('group.membership_loader'),
      $container->get('entity.form_builder'),
      $container->get('messenger')
    );
  }

  /**
   * Create user membership and change invitation status.
   *
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   HTTP request.
   * @param \Drupal\group\Entity\GroupContentInterface $group_content
   *   Invitation entity.
   *
   * @return array
   *   The processed form for the given entity and operation.
   */
  public function accept(Request $request, GroupContentInterface $group_content) {
    $group = $group_content->getGroup();
    $group_type = $group->getGroupType();
    $content_type_config_id = $group_type
      ->getContentPlugin('group_membership')
      ->getContentTypeConfigId();

    // Load invitation plugin configuration.
    $invitation_plugin_configuration = $group_type
      ->getContentPlugin('group_invitation')
      ->getConfiguration();

    // Pre-populate a group membership with the current user.
    $group_membership = GroupContent::create([
      'type' => $content_type_config_id,
      'entity_id' => $group_content->get('entity_id')->getString(),
      'content_plugin' => 'group_membership',
      'gid' => $group->id(),
      'uid' => $group_content->getOwnerId(),
      'group_roles' => $group_content->get('group_roles')->getValue(),
    ]);

    if (!empty($invitation_plugin_configuration['invitation_bypass_form']) && $invitation_plugin_configuration['invitation_bypass_form'] === TRUE) {
      // Save the membership immediately.
      $group_membership->save();

      // Set a message.
      $this->messenger()->addStatus($this->t('You have accepted the invitation.'));

      // Try to honor the destination parameter, fallback to the group route.
      if ($request->query->has('destination')) {
        $destination = $request->get('destination');
        try {
          $path = Url::fromUserInput($destination)->setAbsolute()->toString();
          return new RedirectResponse($path);
        }
        catch (\InvalidArgumentException $e) {
          // We will redirect user later if it failed.
        }
      }

      // Redirect the user to its new group.
      return $this->redirect('entity.group.canonical', ['group' => $group->id()]);
    }
    else {
      // Call "join group" form here, and allow user to fill
      // additional fields if there are any.
      return $this->entityFormBuilder->getForm($group_membership, 'group-join');
    }
  }

  /**
   * Decline invitation. Change invitation status.
   *
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   HTTP request.
   * @param \Drupal\group\Entity\GroupContentInterface $group_content
   *   Invitation entity.
   *
   * @return \Symfony\Component\HttpFoundation\RedirectResponse
   *   A redirect response object that may be returned by the controller.
   *
   * @throws \Drupal\Core\Entity\EntityStorageException
   */
  public function decline(Request $request, GroupContentInterface $group_content) {
    $group_content->set('invitation_status', GroupInvitation::INVITATION_REJECTED)->save();
    $group_bundle = $group_content->getGroup()->getGroupType()->label();
    $this->messenger->addMessage($this->t('You have declined the @group_bundle invitation.', ['@group_bundle' => $group_bundle]));

    if ($request->query->has('destination')) {
      $destination = $request->get('destination');
      try {
        $path = Url::fromUserInput($destination)->setAbsolute()->toString();
        return new RedirectResponse($path);
      }
      catch (\InvalidArgumentException $e) {
        // We will redirect user later if it failed.
      }
    }

    return $this->redirect('user.page');
  }

  /**
   * Checks if this current has access to update invitation.
   *
   * @param \Drupal\group\Entity\GroupContentInterface $group_content
   *   Invitation entity.
   *
   * @return \Drupal\Core\Access\AccessResult
   *   Access check result.
   */
  public function checkAccess(GroupContentInterface $group_content) {
    $group = $group_content->getGroup();

    // Plugin is not installed.
    if (!$group->getGroupType()->hasContentPlugin('group_invitation')) {
      return AccessResult::forbidden();
    }

    $invited = $group_content->get('entity_id')->getString();
    $membership = $this->membershipLoader->load($group, $this->currentUser());
    $current_state = $group_content->get('invitation_status')->value;

    // Only allow user accept/decline own invitations.
    if ($invited == $this->currentUser()->id() && !$membership && (int) $current_state === GroupInvitation::INVITATION_PENDING) {
      return AccessResult::allowed();
    }

    return AccessResult::forbidden();
  }

  /**
   * Renders title for the group invite member route.
   *
   * @param \Drupal\group\Entity\GroupInterface $group
   *   Group entity.
   *
   * @return \Drupal\Core\StringTranslation\TranslatableMarkup
   *   Rendered translatable title.
   */
  public function invitationTitle(GroupInterface $group) {
    $title = $this->t('Invite members');

    if (NULL !== $group->label()) {
      $title = $this->t('Invite members to group: @group_title', ['@group_title' => $group->label()]);
    }

    return $title;
  }

}
