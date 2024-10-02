<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/socialbase/templates/form/form-element.html.twig */
class __TwigTemplate_06db58a1798a6c6cfe36f2f6749c8ade extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        $context["classes"] = ["form-item", "js-form-item", ("form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 52
($context["type"] ?? null), 52, $this->source))), ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 53
($context["type"] ?? null), 53, $this->source))), ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 54
($context["name"] ?? null), 54, $this->source))), ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 55
($context["name"] ?? null), 55, $this->source))), ((!CoreExtension::inFilter(        // line 56
($context["title_display"] ?? null), ["after", "before"])) ? ("form-no-label") : ("")), (((        // line 57
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), ((        // line 58
($context["is_form_group"] ?? null)) ? ("form-group") : ("")), (((        // line 59
($context["type"] ?? null) == "textarea")) ? ("form-group") : ("")), ((        // line 60
($context["is_radio"] ?? null)) ? ("radio form-group") : ("")), ((        // line 61
($context["is_checkbox"] ?? null)) ? ("checkbox form-group") : ("")), ((        // line 62
($context["is_autocomplete"] ?? null)) ? ("form-autocomplete") : ("")), ((        // line 63
($context["errors"] ?? null)) ? ("error has-error") : ("")), ((((        // line 64
($context["name"] ?? null) == "pass") && ($context["logged_in"] ?? null))) ? ("section-password") : ("")), (((        // line 65
($context["name"] ?? null) == "pass[pass1]")) ? ("form-group--password") : ("")), (((        // line 66
($context["name"] ?? null) == "pass[pass2]")) ? ("form-group--password form-group--confirm-password") : (""))];
        // line 69
        $context["description_classes"] = ["help-block", ((((        // line 71
($context["name"] ?? null) == "pass") && ($context["logged_in"] ?? null))) ? ("form-group--password__help-block") : ("")), (((        // line 72
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 75
        yield "
";
        // line 77
        if ((($context["name"] ?? null) == "pass")) {
            // line 78
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/form--password"), "html", null, true);
            yield "
";
        }
        // line 80
        yield "
<div";
        // line 81
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 81), "removeClass", ["form-inline"], "method", false, false, true, 81), 81, $this->source), "html", null, true);
        yield ">
  ";
        // line 82
        if (CoreExtension::inFilter(($context["label_display"] ?? null), ["before", "invisible"])) {
            // line 83
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 83, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 85
        yield "
  ";
        // line 86
        if (((($context["description_display"] ?? null) == "before") && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 86))) {
            // line 87
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
            yield ">
      ";
            // line 88
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 91
        yield "
  ";
        // line 92
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 92, $this->source), "html", null, true);
        yield "

  ";
        // line 94
        if ((($context["label_display"] ?? null) == "after")) {
            // line 95
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 95, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 97
        yield "
  ";
        // line 98
        if (($context["errors"] ?? null)) {
            // line 99
            yield "    <div class=\"form-item--error-message alert alert-danger alert-sm alert-dismissible form-control-radius\">
      ";
            // line 100
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 100, $this->source), "html", null, true);
            yield "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"";
            // line 101
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Close"));
            yield "\">
        <span aria-hidden=\"true\">&times;</span>
      </button>
    </div>
  ";
        }
        // line 106
        yield "
  ";
        // line 107
        if ((CoreExtension::inFilter(($context["description_display"] ?? null), ["after", "invisible"]) && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 107))) {
            // line 108
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 108), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 108), 108, $this->source), "html", null, true);
            yield ">
      ";
            // line 109
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 112
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["type", "name", "title_display", "disabled", "is_form_group", "is_radio", "is_checkbox", "is_autocomplete", "errors", "logged_in", "description_display", "attributes", "label_display", "label", "description", "children"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/form/form-element.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  155 => 112,  149 => 109,  144 => 108,  142 => 107,  139 => 106,  131 => 101,  127 => 100,  124 => 99,  122 => 98,  119 => 97,  113 => 95,  111 => 94,  106 => 92,  103 => 91,  97 => 88,  92 => 87,  90 => 86,  87 => 85,  81 => 83,  79 => 82,  75 => 81,  72 => 80,  66 => 78,  64 => 77,  61 => 75,  59 => 72,  58 => 71,  57 => 69,  55 => 66,  54 => 65,  53 => 64,  52 => 63,  51 => 62,  50 => 61,  49 => 60,  48 => 59,  47 => 58,  46 => 57,  45 => 56,  44 => 55,  43 => 54,  42 => 53,  41 => 52,  40 => 49,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/form/form-element.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/form/form-element.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 49, "if" => 77);
        static $filters = array("clean_class" => 52, "escape" => 78, "t" => 101);
        static $functions = array("attach_library" => 78);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 't'],
                ['attach_library'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
