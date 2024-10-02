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

/* themes/contrib/socialbase/templates/comment/details--comment.html.twig */
class __TwigTemplate_477da1c25c8b7b1f27f89ae99368e45a extends Template
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
        // line 19
        yield "<details";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 19, $this->source), "html", null, true);
        yield ">";
        // line 20
        if (($context["title"] ?? null)) {
            // line 21
            yield "<summary";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["summary_attributes"] ?? null), "addClass", ["btn btn-link btn-flat--gray"], "method", false, false, true, 21), 21, $this->source), "html", null, true);
            yield ">
      ";
            // line 22
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 22, $this->source), "html", null, true);
            yield "
      <svg aria-hidden=\"true\" class=\"details__open-icon\" height=\"24\" viewBox=\"0 0 24 24\" width=\"24\" xmlns=\"http://www.w3.org/2000/svg\">
        <title>";
            // line 24
            echo t("Collapse in", array());
            yield "</title>
        <path d=\"M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z\"/><path d=\"M0 0h24v24H0z\" fill=\"none\"/></svg>
      <svg aria-hidden=\"true\" class=\"details__close-icon\" height=\"24\" viewBox=\"0 0 24 24\" width=\"24\" xmlns=\"http://www.w3.org/2000/svg\">
        <title>";
            // line 27
            echo t("Collapse out", array());
            yield "</title>
        <path d=\"M12 8l-6 6 1.41 1.41L12 10.83l4.59 4.58L18 14z\"/><path d=\"M0 0h24v24H0z\" fill=\"none\"/></svg>
    </summary>";
        }
        // line 31
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 31, $this->source), "html", null, true);
        yield "
  ";
        // line 32
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 32, $this->source), "html", null, true);
        yield "
  ";
        // line 33
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 33, $this->source), "html", null, true);
        yield "
  ";
        // line 34
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 34, $this->source), "html", null, true);
        yield "
</details>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "title", "summary_attributes", "errors", "description", "children", "value"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/comment/details--comment.html.twig";
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
        return array (  80 => 34,  76 => 33,  72 => 32,  68 => 31,  62 => 27,  56 => 24,  51 => 22,  46 => 21,  44 => 20,  40 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/comment/details--comment.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/comment/details--comment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20, "trans" => 24);
        static $filters = array("escape" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
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
