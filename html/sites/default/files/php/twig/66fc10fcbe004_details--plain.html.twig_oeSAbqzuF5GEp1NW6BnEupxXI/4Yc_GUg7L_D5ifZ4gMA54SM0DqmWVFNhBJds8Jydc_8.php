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

/* themes/contrib/socialbase/templates/system/details--plain.html.twig */
class __TwigTemplate_a508ea706c3cae49486ba0364e7ce5a7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'heading' => [$this, 'block_heading'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        $context["heading"] = ($context["title"] ?? null);
        // line 18
        $context["body"] = ($context["children"] ?? null);
        // line 19
        yield "
";
        // line 21
        $context["classes"] = ["panel", ((        // line 23
($context["errors"] ?? null)) ? ("panel-danger") : (("panel-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["panel_type"] ?? null), 23, $this->source)))))];
        // line 26
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 26), "removeClass", ["form-wrapper"], "method", false, false, true, 26), 26, $this->source), "html", null, true);
        yield ">
  ";
        // line 28
        yield "
  ";
        // line 29
        if (($context["heading"] ?? null)) {
            // line 30
            yield "    ";
            yield from $this->unwrap()->yieldBlock('heading', $context, $blocks);
            // line 46
            yield "  ";
        }
        // line 47
        yield "
  ";
        // line 49
        yield "  ";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 76
        yield "
  ";
        // line 78
        yield "  ";
        if (($context["footer"] ?? null)) {
            // line 79
            yield "    ";
            yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
            // line 87
            yield "  ";
        }
        // line 88
        yield "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title", "children", "errors", "panel_type", "attributes", "footer", "collapsible", "heading_attributes", "target", "collapsed", "description", "body_attributes", "footer_attributes"]);        return; yield '';
    }

    // line 30
    public function block_heading($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        yield "      <div class=\"panel-heading\">
        <header>
          ";
        // line 34
        $context["heading_classes"] = ["panel-title"];
        // line 38
        yield "          ";
        if (($context["collapsible"] ?? null)) {
            // line 39
            yield "            <a";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["heading_attributes"] ?? null), "addClass", [($context["heading_classes"] ?? null)], "method", false, false, true, 39), 39, $this->source), "html", null, true);
            yield " href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["target"] ?? null), 39, $this->source), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null), 39, $this->source), "html", null, true);
            yield "</a>
          ";
        } else {
            // line 41
            yield "            <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["heading_attributes"] ?? null), "addClass", [($context["heading_classes"] ?? null)], "method", false, false, true, 41), 41, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null), 41, $this->source), "html", null, true);
            yield "</div>
          ";
        }
        // line 43
        yield "        </header>
      </div>
    ";
        return; yield '';
    }

    // line 49
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        yield "    ";
        // line 51
        $context["body_classes"] = ["panel-body", ((        // line 53
($context["collapsible"] ?? null)) ? ("panel-collapse") : ("")), ((        // line 54
($context["collapsible"] ?? null)) ? ("collapse") : ("")), ((        // line 55
($context["collapsible"] ?? null)) ? ("fade") : ("")), (((        // line 56
($context["errors"] ?? null) || (($context["collapsible"] ?? null) &&  !($context["collapsed"] ?? null)))) ? ("in") : (""))];
        // line 59
        yield "    ";
        // line 60
        $context["description_classes"] = ["help-block", (((        // line 62
($context["description"] ?? null) && (CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "position", [], "any", false, false, true, 62) == "invisible"))) ? ("sr-only") : (""))];
        // line 65
        yield "
    <div";
        // line 66
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["body_attributes"] ?? null), "addClass", [($context["body_classes"] ?? null)], "method", false, false, true, 66), 66, $this->source), "html", null, true);
        yield ">
      ";
        // line 67
        if ((($context["description"] ?? null) && (CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "position", [], "any", false, false, true, 67) == "before"))) {
            // line 68
            yield "        <p";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 68), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 68), 68, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            yield "</p>
      ";
        }
        // line 70
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 70, $this->source), "html", null, true);
        yield "
      ";
        // line 71
        if (((($context["description"] ?? null) && (CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "position", [], "any", false, false, true, 71) == "after")) || (CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "position", [], "any", false, false, true, 71) == "invisible"))) {
            // line 72
            yield "        <p";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 72), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 72), 72, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            yield "</p>
      ";
        }
        // line 74
        yield "    </div>
  ";
        return; yield '';
    }

    // line 79
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        yield "      ";
        // line 81
        $context["footer_classes"] = ["panel-footer"];
        // line 85
        yield "      <div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["footer_attributes"] ?? null), "addClass", [($context["footer_classes"] ?? null)], "method", false, false, true, 85), 85, $this->source), "html", null, true);
        yield ">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 85, $this->source), "html", null, true);
        yield "</div>
    ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/system/details--plain.html.twig";
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
        return array (  196 => 85,  194 => 81,  192 => 80,  188 => 79,  182 => 74,  174 => 72,  172 => 71,  167 => 70,  159 => 68,  157 => 67,  153 => 66,  150 => 65,  148 => 62,  147 => 60,  145 => 59,  143 => 56,  142 => 55,  141 => 54,  140 => 53,  139 => 51,  137 => 50,  133 => 49,  126 => 43,  118 => 41,  108 => 39,  105 => 38,  103 => 34,  99 => 31,  95 => 30,  87 => 88,  84 => 87,  81 => 79,  78 => 78,  75 => 76,  72 => 49,  69 => 47,  66 => 46,  63 => 30,  61 => 29,  58 => 28,  53 => 26,  51 => 23,  50 => 21,  47 => 19,  45 => 18,  43 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/system/details--plain.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/system/details--plain.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 17, "if" => 29, "block" => 30);
        static $filters = array("clean_class" => 23, "escape" => 26);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape'],
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
