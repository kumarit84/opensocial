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

/* themes/contrib/socialbase/templates/block/block--views-exposed-filter-block.html.twig */
class __TwigTemplate_08db7727583f8bd01f22ada84aacc948 extends Template
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
        // line 48
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/offcanvas"), "html", null, true);
        yield "

<div";
        // line 50
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 50, $this->source), "html", null, true);
        yield " data-class=\"exposed-filter-block\">
  <div class=\"btn--offcanvas-trigger\">
    <a href=\"#block-filter\" class=\"btn btn-default btn-raised\" title=\"";
        // line 52
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Click to open filter"));
        yield "\">
      <svg class=\"btn-icon\" aria-hidden=\"true\">
        <title>";
        // line 54
        echo t("Open filter", array());
        yield "</title>
        <use xlink:href=\"#icon-filter_list\"></use>
      </svg>
      ";
        // line 57
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 57, $this->source), "html", null, true);
        yield "
    </a>
  </div>
  <div id=\"block-filter\" class=\"off-canvas off-canvas-right off-canvas-xs-only\">
    <div class=\"offcanvas-head\">

    ";
        // line 63
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 63, $this->source), "html", null, true);
        yield "
    ";
        // line 64
        if (($context["label"] ?? null)) {
            // line 65
            yield "      <h2 ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["complementary-title", "no-margin"], "method", false, false, true, 65), 65, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 65, $this->source), "html", null, true);
            yield "</h2>
    ";
        }
        // line 67
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 67, $this->source), "html", null, true);
        yield "

      <div class=\"offcanvas-tools\">
        <a href=\"#\" class=\"btn btn-icon-toggle pull-right\" title=\"";
        // line 70
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Click to close search box"));
        yield "\">
          <svg class=\"pull-left btn-icon icon-black\" aria-hidden=\"true\">
            <title>";
        // line 72
        echo t("Close filter", array());
        yield "</title>
            <use xlink:href=\"#icon-close\"></use>
          </svg>
        </a>
      </div>
    </div>

    <div class=\"offcanvas-body\">

      ";
        // line 81
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 84
        yield "
    </div>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "label", "title_prefix", "title_attributes", "title_suffix", "content"]);        return; yield '';
    }

    // line 81
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 82, $this->source), "html", null, true);
        yield "
      ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/block/block--views-exposed-filter-block.html.twig";
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
        return array (  125 => 82,  121 => 81,  111 => 84,  109 => 81,  97 => 72,  92 => 70,  85 => 67,  77 => 65,  75 => 64,  71 => 63,  62 => 57,  56 => 54,  51 => 52,  46 => 50,  41 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/block/block--views-exposed-filter-block.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/block/block--views-exposed-filter-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 54, "if" => 64, "block" => 81);
        static $filters = array("escape" => 48, "t" => 52);
        static $functions = array("attach_library" => 48);

        try {
            $this->sandbox->checkSecurity(
                ['trans', 'if', 'block'],
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
