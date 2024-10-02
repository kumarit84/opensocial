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

/* profiles/contrib/social/modules/social_features/social_event/templates/event-location-address.html.twig */
class __TwigTemplate_4e7ee2ab8eb6ad1e9436410a0e958850 extends Template
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
        // line 20
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 20, $this->source), "html", null, true);
        yield ">
  ";
        // line 21
        if ((($context["location"] ?? null) || ($context["address"] ?? null))) {
            // line 22
            yield "    ";
            if (($context["icon_loaded"] ?? null)) {
                // line 23
                yield "      <svg class=\"icon no-b-lazy\" aria-hidden=\"true\">
        <title>";
                // line 24
                echo t("Event location", array());
                yield "</title>
        <use xlink:href=\"#icon-location\"></use>
      </svg>
    ";
            } else {
                // line 28
                yield "      <svg class=\"icon no-b-lazy\" width=\"14\" height=\"20\" viewBox=\"0 0 14 20\" xmlns=\"http://www.w3.org/2000/svg\">
        <title>";
                // line 29
                echo t("Event location", array());
                yield "</title>
        <path d=\"M7 0C3.13 0 0 3.13 0 7C0 12.25 7 20 7 20C7 20 14 12.25 14 7C14 3.13 10.87 0 7 0ZM7 9.5C5.62 9.5 4.5 8.38 4.5 7C4.5 5.62 5.62 4.5 7 4.5C8.38 4.5 9.5 5.62 9.5 7C9.5 8.38 8.38 9.5 7 9.5Z\"/>
      </svg>
    ";
            }
            // line 33
            yield "  ";
        }
        // line 34
        yield "  <span class=\"sr-only\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Event location"));
        yield "</span>
  <span class=\"inline-center location\">
    ";
        // line 36
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["location"] ?? null), 36, $this->source), "html", null, true);
        yield "
    ";
        // line 37
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["address"] ?? null)) &&  !Twig\Extension\CoreExtension::testEmpty(($context["location"] ?? null)))) {
            yield " • ";
        }
        // line 38
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address"] ?? null), 38, $this->source), "html", null, true);
        yield "
  </span>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "location", "address", "icon_loaded"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "profiles/contrib/social/modules/social_features/social_event/templates/event-location-address.html.twig";
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
        return array (  87 => 38,  83 => 37,  79 => 36,  73 => 34,  70 => 33,  63 => 29,  60 => 28,  53 => 24,  50 => 23,  47 => 22,  45 => 21,  40 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/social/modules/social_features/social_event/templates/event-location-address.html.twig", "/Applications/MAMP/htdocs/opensocial/html/profiles/contrib/social/modules/social_features/social_event/templates/event-location-address.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 21, "trans" => 24);
        static $filters = array("escape" => 20, "t" => 34);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 't'],
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
