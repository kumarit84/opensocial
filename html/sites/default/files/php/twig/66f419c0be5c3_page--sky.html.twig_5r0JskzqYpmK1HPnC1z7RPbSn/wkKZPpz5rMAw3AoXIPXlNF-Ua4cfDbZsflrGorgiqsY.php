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

/* themes/contrib/socialblue/templates/layout/page--sky.html.twig */
class __TwigTemplate_bb81973e3c3f4e194aeaa0e575e9b855 extends Template
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
        // line 37
        yield "
";
        // line 38
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 38) && ($context["multi_line"] ?? null))) {
            // line 39
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            yield "
";
        }
        // line 41
        yield "
";
        // line 42
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 42)) {
            // line 43
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            yield "
";
        }
        // line 45
        yield "
<main id=\"content\" class=\"main-container ";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_style"] ?? null)) ? ("main-container-no-padding-top") : ("")));
        yield "\" role=\"main\">

  ";
        // line 48
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 48)) {
            // line 49
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 51
        yield "
  ";
        // line 52
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 52)) {
            // line 53
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 55
        yield "
  ";
        // line 57
        yield "  ";
        yield from $this->unwrap()->yieldBlock('section', $context, $blocks);
        // line 98
        yield "
  ";
        // line 99
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 99)) {
            // line 100
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 102
        yield "
</main>

";
        // line 105
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 105)) {
            // line 106
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
            yield "
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "multi_line", "header_style", "content_attributes", "display_page_title", "not_card"]);        return; yield '';
    }

    // line 57
    public function block_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        yield "    <section";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 58, $this->source), "html", null, true);
        yield ">

      ";
        // line 60
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, true, 60) && ($context["display_page_title"] ?? null))) {
            // line 61
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
            yield "
      ";
        }
        // line 63
        yield "
      ";
        // line 64
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_navigation", [], "any", false, false, true, 64)) {
            // line 65
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_navigation", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            yield "
      ";
        }
        // line 67
        yield "
      ";
        // line 68
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "complementary_top", [], "any", false, false, true, 68) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "complementary_bottom", [], "any", false, false, true, 68))) {
            // line 69
            yield "        <aside class=\"region--complementary\" role=\"complementary\">
          ";
            // line 70
            if ( !($context["not_card"] ?? null)) {
                yield "<div class=\"content-merged--sky--complementary card\">";
            }
            // line 71
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "complementary_top", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            yield "
            ";
            // line 72
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "complementary_bottom", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            yield "
          ";
            // line 73
            if ( !($context["not_card"] ?? null)) {
                yield "</div>";
            }
            // line 74
            yield "        </aside>
      ";
        }
        // line 76
        yield "
      ";
        // line 77
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 81
        yield "
      ";
        // line 83
        yield "      ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 83) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "complementary_top", [], "any", false, false, true, 83)) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "complementary_bottom", [], "any", false, false, true, 83))) {
            // line 84
            yield "        ";
            yield from $this->unwrap()->yieldBlock('sidebar_first', $context, $blocks);
            // line 87
            yield "      ";
        }
        // line 88
        yield "
      ";
        // line 90
        yield "      ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 90) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "complementary_top", [], "any", false, false, true, 90)) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "complementary_bottom", [], "any", false, false, true, 90))) {
            // line 91
            yield "        ";
            yield from $this->unwrap()->yieldBlock('sidebar_second', $context, $blocks);
            // line 94
            yield "      ";
        }
        // line 95
        yield "
    </section>
  ";
        return; yield '';
    }

    // line 77
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        yield "        <a id=\"main-content\" tabindex=\"-1\"></a>
        ";
        // line 79
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
        yield "
      ";
        return; yield '';
    }

    // line 84
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        yield "          ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
        yield "
        ";
        return; yield '';
    }

    // line 91
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        yield "          ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
        yield "
        ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialblue/templates/layout/page--sky.html.twig";
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
        return array (  251 => 92,  247 => 91,  239 => 85,  235 => 84,  228 => 79,  225 => 78,  221 => 77,  214 => 95,  211 => 94,  208 => 91,  205 => 90,  202 => 88,  199 => 87,  196 => 84,  193 => 83,  190 => 81,  188 => 77,  185 => 76,  181 => 74,  177 => 73,  173 => 72,  168 => 71,  164 => 70,  161 => 69,  159 => 68,  156 => 67,  150 => 65,  148 => 64,  145 => 63,  139 => 61,  137 => 60,  131 => 58,  127 => 57,  117 => 106,  115 => 105,  110 => 102,  104 => 100,  102 => 99,  99 => 98,  96 => 57,  93 => 55,  87 => 53,  85 => 52,  82 => 51,  76 => 49,  74 => 48,  69 => 46,  66 => 45,  60 => 43,  58 => 42,  55 => 41,  49 => 39,  47 => 38,  44 => 37,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialblue/templates/layout/page--sky.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialblue/templates/layout/page--sky.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 38, "block" => 57);
        static $filters = array("escape" => 39);
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
