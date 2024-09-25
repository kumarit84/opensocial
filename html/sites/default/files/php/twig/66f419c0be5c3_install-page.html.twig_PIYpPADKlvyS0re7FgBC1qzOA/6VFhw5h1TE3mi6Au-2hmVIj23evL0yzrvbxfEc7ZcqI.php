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

/* core/modules/system/templates/install-page.html.twig */
class __TwigTemplate_bd69478cf4fac0b84a235da97c200c9d extends Template
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
        // line 14
        yield "  <div class=\"layout-container\">

    <header role=\"banner\">
      ";
        // line 17
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 18
            yield "        <div class=\"name-and-slogan\">
          ";
            // line 19
            if (($context["site_name"] ?? null)) {
                // line 20
                yield "            <h1>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 20, $this->source), "html", null, true);
                yield "</h1>
          ";
            }
            // line 22
            yield "          ";
            if (($context["site_slogan"] ?? null)) {
                // line 23
                yield "            <div class=\"site-slogan\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 23, $this->source), "html", null, true);
                yield "</div>
          ";
            }
            // line 25
            yield "        </div>";
            // line 26
            yield "      ";
        }
        // line 27
        yield "    </header>

    <main role=\"main\">
      ";
        // line 30
        if (($context["title"] ?? null)) {
            // line 31
            yield "        <h2>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 31, $this->source), "html", null, true);
            yield "</h2>
      ";
        }
        // line 33
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        yield "
      ";
        // line 34
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        yield "
    </main>

    ";
        // line 37
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 37)) {
            // line 38
            yield "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 39
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            yield "
      </aside>";
            // line 41
            yield "    ";
        }
        // line 42
        yield "
    ";
        // line 43
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 43)) {
            // line 44
            yield "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 45
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            yield "
      </aside>";
            // line 47
            yield "    ";
        }
        // line 48
        yield "
    ";
        // line 49
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 49)) {
            // line 50
            yield "      <footer role=\"contentinfo\">
        ";
            // line 51
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            yield "
      </footer>
    ";
        }
        // line 54
        yield "
  </div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["site_name", "site_slogan", "title", "page"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/modules/system/templates/install-page.html.twig";
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
        return array (  137 => 54,  131 => 51,  128 => 50,  126 => 49,  123 => 48,  120 => 47,  116 => 45,  113 => 44,  111 => 43,  108 => 42,  105 => 41,  101 => 39,  98 => 38,  96 => 37,  90 => 34,  85 => 33,  79 => 31,  77 => 30,  72 => 27,  69 => 26,  67 => 25,  61 => 23,  58 => 22,  52 => 20,  50 => 19,  47 => 18,  45 => 17,  40 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/modules/system/templates/install-page.html.twig", "/Applications/MAMP/htdocs/opensocial/html/core/modules/system/templates/install-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 17);
        static $filters = array("escape" => 20);
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
