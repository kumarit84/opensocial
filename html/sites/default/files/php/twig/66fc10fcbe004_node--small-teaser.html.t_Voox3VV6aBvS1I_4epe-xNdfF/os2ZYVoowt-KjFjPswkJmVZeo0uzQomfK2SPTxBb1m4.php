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

/* node--small-teaser.html.twig */
class __TwigTemplate_871824f0368a596726c6ab1ae1949fe5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'location' => [$this, 'block_location'],
            'teaser_image' => [$this, 'block_teaser_image'],
            'text' => [$this, 'block_text'],
            'extra_text' => [$this, 'block_extra_text'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/teaser"), "html", null, true);
        yield "
";
        // line 70
        $context["classes"] = ["teaser--small", ((        // line 72
($context["location"] ?? null)) ? ("teaser--small__location") : (""))];
        // line 75
        yield "
<div ";
        // line 76
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 76), "removeAttribute", ["dir"], "method", false, false, true, 76), 76, $this->source), "html", null, true);
        yield ">

  ";
        // line 79
        yield "  ";
        yield from $this->unwrap()->yieldBlock('location', $context, $blocks);
        // line 80
        yield "
  ";
        // line 81
        if (($context["location"] ?? null)) {
            // line 82
            yield "  <div class=\"teaser--content-wrapper\">
    ";
        }
        // line 84
        yield "  ";
        yield from $this->unwrap()->yieldBlock('teaser_image', $context, $blocks);
        // line 100
        yield "
  <div class=\"teaser--small__details small\">
  ";
        // line 102
        yield from $this->unwrap()->yieldBlock('text', $context, $blocks);
        // line 109
        yield "
  ";
        // line 110
        yield from $this->unwrap()->yieldBlock('extra_text', $context, $blocks);
        // line 117
        yield "  </div>

  ";
        // line 119
        if (($context["location"] ?? null)) {
            // line 120
            yield "  </div>
  ";
        }
        // line 122
        yield "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["location", "attributes", "content", "node", "label", "topic_type_icon", "title_prefix", "title_attributes", "url", "title_suffix", "author_name", "date"]);        return; yield '';
    }

    // line 79
    public function block_location($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 84
    public function block_teaser_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        yield "    <div class=\"teaser--small__media\">
      ";
        // line 86
        if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((($__internal_compile_0 = ($context["content"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[(("field_" . CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "bundle", [], "any", false, false, true, 86)) . "_image")] ?? null) : null)), "<img>"))) {
            // line 87
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = ($context["content"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[(("field_" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "bundle", [], "any", false, false, true, 87), 87, $this->source)) . "_image")] ?? null) : null), 87, $this->source), "html", null, true);
            yield "
      ";
        } else {
            // line 89
            yield "        <svg class=\"teaser--small__type-icon\">
          <title>";
            // line 90
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "bundle", [], "any", false, false, true, 90), 90, $this->source))), "html", null, true);
            yield ": &nbsp;";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 90, $this->source)))), "html", null, true);
            yield "</title>
          ";
            // line 91
            if (($context["topic_type_icon"] ?? null)) {
                // line 92
                yield "            <use xlink:href=\"#";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topic_type_icon"] ?? null), 92, $this->source), "html", null, true);
                yield "\"></use>
          ";
            } else {
                // line 94
                yield "            <use xlink:href=\"#icon-";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "bundle", [], "any", false, false, true, 94), 94, $this->source)), "html", null, true);
                yield "\"></use>
          ";
            }
            // line 96
            yield "        </svg>
      ";
        }
        // line 98
        yield "    </div>
  ";
        return; yield '';
    }

    // line 102
    public function block_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 103
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 103, $this->source), "html", null, true);
        yield "
    <div";
        // line 104
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 104, $this->source), "html", null, true);
        yield " class=\"card__text teaser--small__title\">
      <a href=\"";
        // line 105
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 105, $this->source), "html", null, true);
        yield "\" rel=\"bookmark\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 105, $this->source), "html", null, true);
        yield "</a>
    </div>
    ";
        // line 107
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 107, $this->source), "html", null, true);
        yield "
  ";
        return; yield '';
    }

    // line 110
    public function block_extra_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        yield "    <div class=\"teaser--small__meta\">
      ";
        // line 112
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 112, $this->source), "html", null, true);
        yield " &middot; ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 112, $this->source), "html", null, true);
        yield "

      ";
        // line 114
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 114, $this->source), (("field_" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "bundle", [], "any", false, false, true, 114), 114, $this->source)) . "_image")), "html", null, true);
        yield "
    </div>
  ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "node--small-teaser.html.twig";
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
        return array (  199 => 114,  192 => 112,  189 => 111,  185 => 110,  178 => 107,  171 => 105,  167 => 104,  162 => 103,  158 => 102,  152 => 98,  148 => 96,  142 => 94,  136 => 92,  134 => 91,  128 => 90,  125 => 89,  119 => 87,  117 => 86,  114 => 85,  110 => 84,  103 => 79,  95 => 122,  91 => 120,  89 => 119,  85 => 117,  83 => 110,  80 => 109,  78 => 102,  74 => 100,  71 => 84,  67 => 82,  65 => 81,  62 => 80,  59 => 79,  54 => 76,  51 => 75,  49 => 72,  48 => 70,  44 => 68,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--small-teaser.html.twig", "themes/contrib/socialbase/templates/node/node--small-teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 70, "block" => 79, "if" => 81);
        static $filters = array("escape" => 68, "striptags" => 86, "render" => 86, "capitalize" => 90, "clean_class" => 90, "trim" => 90, "without" => 114);
        static $functions = array("attach_library" => 68);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['escape', 'striptags', 'render', 'capitalize', 'clean_class', 'trim', 'without'],
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
