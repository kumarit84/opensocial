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

/* profiles/contrib/social/modules/social_features/social_event/templates/event-date-advanced.html.twig */
class __TwigTemplate_557161845c94015a13b986a69aa5650e extends Template
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
        // line 18
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 18, $this->source), "html", null, true);
        yield ">
  ";
        // line 19
        if (($context["date"] ?? null)) {
            // line 20
            yield "    ";
            if (($context["icon_loaded"] ?? null)) {
                // line 21
                yield "      <svg class=\"icon no-b-lazy\" aria-hidden=\"true\">
        <title>";
                // line 22
                echo t("Event date", array());
                yield "</title>
        <use xlink:href=\"#icon-schedule\"></use>
      </svg>
    ";
            } else {
                // line 26
                yield "      <svg class=\"icon no-b-lazy\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
        <title>";
                // line 27
                echo t("Event date", array());
                yield "</title>
        <path d=\"M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z\"/>
      </svg>
    ";
            }
            // line 31
            yield "  ";
        }
        // line 32
        yield "  <span class=\"sr-only\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Event date"));
        yield "</span>
  <span class=\"inline-center date\">";
        // line 33
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 33, $this->source), "html", null, true);
        yield "</span>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "date", "icon_loaded"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "profiles/contrib/social/modules/social_features/social_event/templates/event-date-advanced.html.twig";
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
        return array (  78 => 33,  73 => 32,  70 => 31,  63 => 27,  60 => 26,  53 => 22,  50 => 21,  47 => 20,  45 => 19,  40 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/social/modules/social_features/social_event/templates/event-date-advanced.html.twig", "/Applications/MAMP/htdocs/opensocial/html/profiles/contrib/social/modules/social_features/social_event/templates/event-date-advanced.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19, "trans" => 22);
        static $filters = array("escape" => 18, "t" => 32);
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
