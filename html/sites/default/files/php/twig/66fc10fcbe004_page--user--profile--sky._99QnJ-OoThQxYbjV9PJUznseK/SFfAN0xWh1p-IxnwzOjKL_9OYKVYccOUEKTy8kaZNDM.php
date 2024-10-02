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

/* themes/contrib/socialblue/templates/layout/page--user--profile--sky.html.twig */
class __TwigTemplate_ae6cda91ecdc9bcb8a2bd13f9a7b4a67 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'section' => [$this, 'block_section'],
            'content' => [$this, 'block_content'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        yield "
";
        // line 36
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 36) && ($context["multi_line"] ?? null))) {
            // line 37
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            yield "
";
        }
        // line 39
        yield "
";
        // line 40
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 40)) {
            // line 41
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            yield "
";
        }
        // line 43
        yield "
<main id=\"content\" class=\"main-container\" role=\"main\">

  ";
        // line 46
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 46)) {
            // line 47
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 49
        yield "
  ";
        // line 50
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 50)) {
            // line 51
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 53
        yield "
  ";
        // line 55
        yield "  ";
        yield from $this->unwrap()->yieldBlock('section', $context, $blocks);
        // line 100
        yield "
  ";
        // line 101
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 101)) {
            // line 102
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 104
        yield "
</main>

";
        // line 107
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 107)) {
            // line 108
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            yield "
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "multi_line", "content_attributes", "display_page_title"]);        return; yield '';
    }

    // line 55
    public function block_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        yield "    <section";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 56, $this->source), "html", null, true);
        yield ">

      ";
        // line 58
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, true, 58) && ($context["display_page_title"] ?? null))) {
            // line 59
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            yield "
      ";
        }
        // line 61
        yield "
      ";
        // line 62
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_navigation", [], "any", false, false, true, 62)) {
            // line 63
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_navigation", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            yield "
      ";
        }
        // line 65
        yield "
      ";
        // line 66
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "complementary_top", [], "any", false, false, true, 66) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "complementary_bottom", [], "any", false, false, true, 66))) {
            // line 67
            yield "        <aside class=\"region--complementary\" role=\"complementary\">
          <div class=\"region--complementary-top\">
            ";
            // line 69
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "complementary_top", [], "any", false, false, true, 69)) {
                // line 70
                yield "              ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "complementary_top", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                yield "
            ";
            }
            // line 72
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "complementary_bottom", [], "any", false, false, true, 72)) {
                // line 73
                yield "              ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "complementary_bottom", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                yield "
            ";
            }
            // line 75
            yield "          </div>
        </aside>
      ";
        }
        // line 78
        yield "
      ";
        // line 79
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 83
        yield "
      ";
        // line 85
        yield "      ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 85) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "complementary_top", [], "any", false, false, true, 85)) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "complementary_bottom", [], "any", false, false, true, 85))) {
            // line 86
            yield "        ";
            yield from $this->unwrap()->yieldBlock('sidebar_first', $context, $blocks);
            // line 89
            yield "      ";
        }
        // line 90
        yield "
      ";
        // line 92
        yield "      ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 92) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "complementary_top", [], "any", false, false, true, 92)) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "complementary_bottom", [], "any", false, false, true, 92))) {
            // line 93
            yield "        ";
            yield from $this->unwrap()->yieldBlock('sidebar_second', $context, $blocks);
            // line 96
            yield "      ";
        }
        // line 97
        yield "
    </section>
  ";
        return; yield '';
    }

    // line 79
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        yield "        <a id=\"main-content\" tabindex=\"-1\"></a>
        ";
        // line 81
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
        yield "
      ";
        return; yield '';
    }

    // line 86
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        yield "          ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
        yield "
        ";
        return; yield '';
    }

    // line 93
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 94
        yield "          ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
        yield "
        ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialblue/templates/layout/page--user--profile--sky.html.twig";
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
        return array (  250 => 94,  246 => 93,  238 => 87,  234 => 86,  227 => 81,  224 => 80,  220 => 79,  213 => 97,  210 => 96,  207 => 93,  204 => 92,  201 => 90,  198 => 89,  195 => 86,  192 => 85,  189 => 83,  187 => 79,  184 => 78,  179 => 75,  173 => 73,  170 => 72,  164 => 70,  162 => 69,  158 => 67,  156 => 66,  153 => 65,  147 => 63,  145 => 62,  142 => 61,  136 => 59,  134 => 58,  128 => 56,  124 => 55,  114 => 108,  112 => 107,  107 => 104,  101 => 102,  99 => 101,  96 => 100,  93 => 55,  90 => 53,  84 => 51,  82 => 50,  79 => 49,  73 => 47,  71 => 46,  66 => 43,  60 => 41,  58 => 40,  55 => 39,  49 => 37,  47 => 36,  44 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialblue/templates/layout/page--user--profile--sky.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialblue/templates/layout/page--user--profile--sky.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 36, "block" => 55);
        static $filters = array("escape" => 37);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
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
