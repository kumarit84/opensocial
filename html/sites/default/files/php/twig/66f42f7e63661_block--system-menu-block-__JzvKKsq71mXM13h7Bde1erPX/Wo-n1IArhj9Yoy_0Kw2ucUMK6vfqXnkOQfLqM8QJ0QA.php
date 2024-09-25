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

/* themes/contrib/socialbase/templates/block/block--system-menu-block--main.html.twig */
class __TwigTemplate_17e4c82f71b48aa27025db2ca759572c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        yield "
<button href=\"#\" data-toggle=\"collapse\" data-target=\"#main-navigation\" type=\"button\" aria-expanded=\"false\" class=\"navbar-toggle collapsed\">
  <span>";
        // line 38
        echo t("Menu", array());
        yield "</span>
  <span class=\"sr-only\">
    ";
        // line 40
        echo t("Toggle navigation", array());
        // line 41
        yield "  </span>
</button>

<div id=\"main-navigation\" class=\"collapse navbar-collapse\">
  <div class=\"navbar-search\">";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 45), "search_block", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        yield "</div>
  ";
        // line 46
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 49
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, true, true, 49), "search_block", [], "any", true, true, true, 49)) {
            // line 50
            yield "    <div class=\"navbar__open-search-control\">
      <a href=\"";
            // line 51
            yield "/search/all";
            yield "\" class=\"navbar__open-search-block\" rel=\"search\" title=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Click to open search box"));
            yield "\">
        <svg class=\"navbar-nav__icon navbar-nav__icon--search\" aria-hidden=\"true\">
          <title>";
            // line 53
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Search"));
            yield "</title>
          <use xlink:href=\"#icon-search\"></use>
        </svg>
      </a>
    </div>
  ";
        }
        // line 59
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);        return; yield '';
    }

    // line 46
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 47, $this->source), "html", null, true);
        yield "
  ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/block/block--system-menu-block--main.html.twig";
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
        return array (  97 => 47,  93 => 46,  86 => 59,  77 => 53,  70 => 51,  67 => 50,  64 => 49,  62 => 46,  58 => 45,  52 => 41,  50 => 40,  45 => 38,  41 => 36,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/block/block--system-menu-block--main.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/block/block--system-menu-block--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 38, "block" => 46, "if" => 49);
        static $filters = array("escape" => 45, "t" => 51);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['trans', 'block', 'if'],
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
