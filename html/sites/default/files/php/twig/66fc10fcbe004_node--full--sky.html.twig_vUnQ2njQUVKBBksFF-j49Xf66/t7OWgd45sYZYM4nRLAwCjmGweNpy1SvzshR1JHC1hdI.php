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

/* node--full--sky.html.twig */
class __TwigTemplate_048c881487feae5d3d6f84fa39b346bc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'metainfo' => [$this, 'block_metainfo'],
            'nodefull_body' => [$this, 'block_nodefull_body'],
            'nodefull_below_content' => [$this, 'block_nodefull_below_content'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        yield "
";
        // line 76
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/page-node"), "html", null, true);
        yield "

";
        // line 78
        $context["classes"] = ["card", ((CoreExtension::getAttribute($this->env, $this->source,         // line 80
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 80)) ? ("node--promoted") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 81
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 81)) ? ("node--unpublished") : (""))];
        // line 83
        yield "
<article";
        // line 84
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 84), 84, $this->source), "html", null, true);
        yield ">
  <div";
        // line 85
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["card__body"], "method", false, false, true, 85), 85, $this->source), "html", null, true);
        yield ">

    ";
        // line 87
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "isPublished", [], "method", false, false, true, 87)) {
            // line 88
            yield "      <div class=\"node--unpublished__label\">";
            echo t("unpublished", array());
            yield "</div>
    ";
        }
        // line 90
        yield "
    ";
        // line 91
        yield from $this->unwrap()->yieldBlock('metainfo', $context, $blocks);
        // line 96
        yield "
    ";
        // line 97
        yield from $this->unwrap()->yieldBlock('nodefull_body', $context, $blocks);
        // line 100
        yield "
  </div>
</article>

";
        // line 104
        yield from $this->unwrap()->yieldBlock('nodefull_below_content', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "attributes", "content_attributes", "content", "below_content"]);        return; yield '';
    }

    // line 91
    public function block_metainfo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        yield "      <header class=\"metainfo__node\">
        ";
        // line 93
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 93), "moderation", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
        yield "
      </header>
    ";
        return; yield '';
    }

    // line 97
    public function block_nodefull_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 98, $this->source), "field_event_address", "like_and_dislike", "field_event_location", "field_event_type", "book_navigation", "flag_follow_content", "field_event_an_enroll", "field_enrollment_status", "enrolled", "enrollments_count", "links", "ongoing", "field_event_addtocal"), "html", null, true);
        yield "
    ";
        return; yield '';
    }

    // line 104
    public function block_nodefull_below_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 105
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["below_content"] ?? null), 105, $this->source), "html", null, true);
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "node--full--sky.html.twig";
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
        return array (  128 => 105,  124 => 104,  116 => 98,  112 => 97,  104 => 93,  101 => 92,  97 => 91,  91 => 104,  85 => 100,  83 => 97,  80 => 96,  78 => 91,  75 => 90,  69 => 88,  67 => 87,  62 => 85,  58 => 84,  55 => 83,  53 => 81,  52 => 80,  51 => 78,  46 => 76,  43 => 75,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--full--sky.html.twig", "themes/contrib/socialblue/templates/node/node--full--sky.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 78, "if" => 87, "trans" => 88, "block" => 91);
        static $filters = array("escape" => 76, "without" => 98);
        static $functions = array("attach_library" => 76);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans', 'block'],
                ['escape', 'without'],
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
