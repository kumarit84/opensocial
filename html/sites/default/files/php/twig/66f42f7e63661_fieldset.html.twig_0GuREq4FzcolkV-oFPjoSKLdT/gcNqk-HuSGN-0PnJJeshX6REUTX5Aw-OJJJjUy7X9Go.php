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

/* themes/contrib/socialbase/templates/form/fieldset.html.twig */
class __TwigTemplate_41821c92387a2f87b667d6c2ce8cdb6d extends Template
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
        // line 26
        $context["classes"] = [((        // line 27
($context["form_group"] ?? null)) ? ("form-group") : ("")), (( !        // line 28
($context["form_group"] ?? null)) ? ("js-form-wrapper") : ("")), (( !        // line 29
($context["form_group"] ?? null)) ? ("form-wrapper") : (""))];
        // line 32
        yield "
";
        // line 33
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/popover"), "html", null, true);
        yield "

<fieldset";
        // line 35
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 35), 35, $this->source), "html", null, true);
        yield ">
  ";
        // line 37
        $context["label_classes"] = [((        // line 38
($context["form_group"] ?? null)) ? ("control-label") : ("")), ((        // line 39
($context["required"] ?? null)) ? ("js-form-required") : ("")), ((        // line 40
($context["required"] ?? null)) ? ("form-required") : ("")), (((        // line 41
($context["title_display"] ?? null) == "invisible")) ? ("sr-only") : (""))];
        // line 44
        yield "  ";
        // line 45
        yield "  <legend";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["legend"] ?? null), "attributes", [], "any", false, false, true, 45), "addClass", [($context["label_classes"] ?? null)], "method", false, false, true, 45), 45, $this->source), "html", null, true);
        yield ">
    <span";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["legend_span"] ?? null), "attributes", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        yield ">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["legend"] ?? null), "title", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        yield "</span>";
        // line 48
        if (($context["required"] ?? null)) {
            // line 49
            yield "<span class=\"form-required\">*</span>";
        }
        // line 52
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["popover"] ?? null))) {
            // line 53
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["popover"] ?? null), 53, $this->source), "html", null, true);
            yield "
    ";
        }
        // line 55
        yield "  </legend>

  ";
        // line 57
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 57)) {
            // line 58
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 58), "addClass", ["help-block"], "method", false, false, true, 58), 58, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            yield "</div>
  ";
        }
        // line 60
        yield "
  <div class=\"fieldset-wrapper\">
    ";
        // line 62
        if (($context["prefix"] ?? null)) {
            // line 63
            yield "      <span class=\"field-prefix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 63, $this->source), "html", null, true);
            yield "</span>
    ";
        }
        // line 65
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 65, $this->source), "html", null, true);
        yield "
    ";
        // line 66
        if (($context["suffix"] ?? null)) {
            // line 67
            yield "      <span class=\"field-suffix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 67, $this->source), "html", null, true);
            yield "</span>
    ";
        }
        // line 69
        yield "  </div>

  ";
        // line 71
        if (($context["errors"] ?? null)) {
            // line 72
            yield "    <div class=\"form-item--error-message alert alert-danger alert-sm alert-dismissible form-control-radius\">
      ";
            // line 73
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 73, $this->source), "html", null, true);
            yield "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"";
            // line 74
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Close"));
            yield "\">
        <span aria-hidden=\"true\">×</span>
      </button>
    </div>
  ";
        }
        // line 79
        yield "
";
        // line 83
        yield "
</fieldset>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["form_group", "attributes", "required", "title_display", "legend", "legend_span", "popover", "description", "prefix", "children", "suffix", "errors"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/form/fieldset.html.twig";
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
        return array (  151 => 83,  148 => 79,  140 => 74,  136 => 73,  133 => 72,  131 => 71,  127 => 69,  121 => 67,  119 => 66,  114 => 65,  108 => 63,  106 => 62,  102 => 60,  94 => 58,  92 => 57,  88 => 55,  82 => 53,  80 => 52,  77 => 49,  75 => 48,  70 => 46,  65 => 45,  63 => 44,  61 => 41,  60 => 40,  59 => 39,  58 => 38,  57 => 37,  53 => 35,  48 => 33,  45 => 32,  43 => 29,  42 => 28,  41 => 27,  40 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/form/fieldset.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/form/fieldset.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 26, "if" => 48);
        static $filters = array("escape" => 33, "t" => 74);
        static $functions = array("attach_library" => 33);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 't'],
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
