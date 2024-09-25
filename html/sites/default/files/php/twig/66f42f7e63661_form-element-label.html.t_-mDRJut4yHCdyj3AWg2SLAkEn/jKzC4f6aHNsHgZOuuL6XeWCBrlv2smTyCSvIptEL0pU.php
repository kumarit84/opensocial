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

/* themes/contrib/socialbase/templates/form/form-element-label.html.twig */
class __TwigTemplate_d71609e0b8fbec774f6a2b794088f0bb extends Template
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
        // line 21
        $context["classes"] = ["control-label", (((        // line 23
($context["title_display"] ?? null) == "after")) ? ("option") : ("")), (((        // line 24
($context["title_display"] ?? null) == "invisible")) ? ("sr-only") : ("")), (((        // line 25
($context["title_display"] ?? null) == "above")) ? ("control-label--above") : ("")), ((        // line 26
($context["required"] ?? null)) ? ("js-form-required") : ("")), ((        // line 27
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 31
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 31, $this->source), "html", null, true);
        // line 32
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null))) {
            // line 33
            yield "<label";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 33), 33, $this->source), "html", null, true);
            yield ">";
            // line 34
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["icon"] ?? null))) {
                // line 35
                yield "<svg class=\"icon-small\" aria-hidden=\"true\">
        <use xlink:href=\"#icon-";
                // line 36
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 36, $this->source), "html", null, true);
                yield "\"></use>
      </svg>
      <span>";
                // line 38
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 38, $this->source), "html", null, true);
                yield "</span>";
            } else {
                // line 40
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 40, $this->source), "html", null, true);
            }
            // line 43
            if ((($context["required"] ?? null) && (($context["title_display"] ?? null) != "invisible"))) {
                // line 44
                yield "<span class=\"form-required\" title=\"";
                echo t("This field is required", array());
                yield "\">*</span>";
            }
            // line 46
            if (($context["description"] ?? null)) {
                // line 47
                yield "<p class=\"help-block\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 47, $this->source), "html", null, true);
                yield "</p>";
            }
            // line 49
            yield "</label>";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title_display", "required", "element", "title", "attributes", "icon", "description"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/form/form-element-label.html.twig";
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
        return array (  86 => 49,  81 => 47,  79 => 46,  74 => 44,  72 => 43,  69 => 40,  65 => 38,  60 => 36,  57 => 35,  55 => 34,  51 => 33,  49 => 32,  47 => 31,  45 => 27,  44 => 26,  43 => 25,  42 => 24,  41 => 23,  40 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/form/form-element-label.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/form/form-element-label.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 21, "if" => 32, "trans" => 44);
        static $filters = array("escape" => 31);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['escape'],
                [],
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
