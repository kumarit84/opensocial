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

/* themes/contrib/socialbase/templates/system/links.html.twig */
class __TwigTemplate_0cf3efa4602dfbc803df024e7fae2a01 extends Template
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
        // line 35
        if (($context["links"] ?? null)) {
            // line 36
            if (($context["heading"] ?? null)) {
                // line 37
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["heading"] ?? null), "level", [], "any", false, false, true, 37)) {
                    // line 38
                    yield "<";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["heading"] ?? null), "level", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["heading"] ?? null), "attributes", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                    yield ">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["heading"] ?? null), "text", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                    yield "</";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["heading"] ?? null), "level", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                    yield ">";
                } else {
                    // line 40
                    yield "<h2";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["heading"] ?? null), "attributes", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                    yield ">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["heading"] ?? null), "text", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                    yield "</h2>";
                }
            }
            // line 43
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["links"] ?? null), "edit", [], "any", false, false, true, 43) || CoreExtension::getAttribute($this->env, $this->source, ($context["links"] ?? null), "report", [], "any", false, false, true, 43))) {
                // line 44
                yield "<div class=\"comment__actions pull-right\">
      <button type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\" aria-haspopup=\"true\" class=\"btn btn-icon-toggle dropdown-toggle\" aria-label=\"";
                // line 45
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("More options"));
                yield "\">
        <svg class=\"btn-icon icon-gray\" aria-hidden=\"true\">
          <title>";
                // line 47
                echo t("More options", array());
                yield "</title>
          <use xlink:href=\"#icon-expand_more\"></use>
        </svg>
      </button>
      <ul";
                // line 51
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["dropdown-menu"], "method", false, false, true, 51), 51, $this->source), "html", null, true);
                yield ">";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 52
($context["attributes"] ?? null), "hasClass", ["inline"], "method", false, false, true, 52)) {
                // line 53
                yield "<ul";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["list-inline"], "method", false, false, true, 53), 53, $this->source), "html", null, true);
                yield ">";
            } else {
                // line 55
                yield "<ul";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 55, $this->source), "html", null, true);
                yield ">";
            }
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 58
                yield "<li";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 58), "addClass", [\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($context["key"], 58, $this->source))], "method", false, false, true, 58), 58, $this->source), "html", null, true);
                yield ">";
                // line 59
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 59)) {
                    // line 60
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                } elseif (CoreExtension::getAttribute($this->env, $this->source,                 // line 61
$context["item"], "text_attributes", [], "any", false, false, true, 61)) {
                    // line 62
                    yield "<span";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text_attributes", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
                    yield ">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
                    yield "</span>";
                } elseif (CoreExtension::getAttribute($this->env, $this->source,                 // line 63
$context["item"], "disabled", [], "any", false, false, true, 63)) {
                    // line 64
                    yield "<span>";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                    yield "</span>";
                } else {
                    // line 66
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                }
                // line 68
                yield "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            yield "</ul>";
            // line 71
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["links"] ?? null), "edit", [], "any", false, false, true, 71) || CoreExtension::getAttribute($this->env, $this->source, ($context["links"] ?? null), "report", [], "any", false, false, true, 71))) {
                // line 72
                yield "</div>";
            }
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["links", "heading", "attributes"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/system/links.html.twig";
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
        return array (  136 => 72,  134 => 71,  132 => 70,  126 => 68,  123 => 66,  118 => 64,  116 => 63,  110 => 62,  108 => 61,  106 => 60,  104 => 59,  100 => 58,  96 => 57,  91 => 55,  86 => 53,  84 => 52,  81 => 51,  74 => 47,  69 => 45,  66 => 44,  64 => 43,  56 => 40,  46 => 38,  44 => 37,  42 => 36,  40 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/system/links.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/system/links.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 35, "trans" => 47, "for" => 57);
        static $filters = array("escape" => 38, "t" => 45, "clean_class" => 58);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans', 'for'],
                ['escape', 't', 'clean_class'],
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
