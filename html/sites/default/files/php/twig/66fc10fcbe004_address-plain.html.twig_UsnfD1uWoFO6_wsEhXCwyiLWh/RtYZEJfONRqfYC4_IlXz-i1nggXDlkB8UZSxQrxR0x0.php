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

/* themes/contrib/socialbase/templates/field/address-plain.html.twig */
class __TwigTemplate_122c478b0cc2850055871b3ebb2075fd extends Template
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
        // line 33
        yield "
";
        // line 34
        if (($context["recipient"] ?? null)) {
            // line 35
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["recipient"] ?? null), 35, $this->source), "html", null, true);
            yield ",
";
        }
        // line 37
        yield "
";
        // line 38
        if (($context["organization"] ?? null)) {
            // line 39
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["organization"] ?? null), 39, $this->source), "html", null, true);
            yield ",
";
        }
        // line 41
        yield "
";
        // line 42
        if (($context["address_line1"] ?? null)) {
            // line 43
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address_line1"] ?? null), 43, $this->source), "html", null, true);
            yield ",
";
        }
        // line 45
        yield "
";
        // line 46
        if (($context["address_line2"] ?? null)) {
            // line 47
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address_line2"] ?? null), 47, $this->source), "html", null, true);
            yield ",
";
        }
        // line 49
        yield "
";
        // line 50
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["dependent_locality"] ?? null), "name", [], "any", false, false, true, 50)) {
            // line 51
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["dependent_locality"] ?? null), "code", [], "any", false, false, true, 51)) ?: (CoreExtension::getAttribute($this->env, $this->source, ($context["dependent_locality"] ?? null), "name", [], "any", false, false, true, 51))), "html", null, true);
            yield ",
";
        }
        // line 53
        yield "
";
        // line 54
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["locality"] ?? null), "name", [], "any", false, false, true, 54)) {
            // line 55
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["locality"] ?? null), "name", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            yield ",
";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 56
($context["locality"] ?? null), "code", [], "any", false, false, true, 56)) {
            // line 57
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["locality"] ?? null), "code", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            yield ",
";
        } elseif ( !is_iterable(        // line 58
($context["locality"] ?? null))) {
            // line 59
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["locality"] ?? null), 59, $this->source), "html", null, true);
            yield ",
";
        }
        // line 61
        yield "
";
        // line 62
        if (($context["postal_code"] ?? null)) {
            // line 63
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["postal_code"] ?? null), 63, $this->source), "html", null, true);
            yield ",
";
        }
        // line 65
        yield "
";
        // line 66
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["administrative_area"] ?? null), "name", [], "any", false, false, true, 66)) {
            // line 67
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["administrative_area"] ?? null), "code", [], "any", false, false, true, 67)) ?: (CoreExtension::getAttribute($this->env, $this->source, ($context["administrative_area"] ?? null), "name", [], "any", false, false, true, 67))), "html", null, true);
            yield ",
";
        }
        // line 70
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["country"] ?? null), "name", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["recipient", "organization", "address_line1", "address_line2", "dependent_locality", "locality", "postal_code", "administrative_area", "country"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/field/address-plain.html.twig";
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
        return array (  134 => 70,  128 => 67,  126 => 66,  123 => 65,  117 => 63,  115 => 62,  112 => 61,  107 => 59,  105 => 58,  101 => 57,  99 => 56,  95 => 55,  93 => 54,  90 => 53,  85 => 51,  83 => 50,  80 => 49,  75 => 47,  73 => 46,  70 => 45,  65 => 43,  63 => 42,  60 => 41,  55 => 39,  53 => 38,  50 => 37,  45 => 35,  43 => 34,  40 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/field/address-plain.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/field/address-plain.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 34);
        static $filters = array("escape" => 35);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
