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

/* themes/contrib/socialbase/templates/card/bootstrap-panel.html.twig */
class __TwigTemplate_e08c03f372be8bc076b9f2fe14d60634 extends Template
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
        // line 1
        yield "
";
        // line 45
        yield "
";
        // line 47
        $context["classes"] = ["card", ((        // line 49
($context["collapsible"] ?? null)) ? ("panel") : ("")), (((        // line 50
($context["collapsible"] ?? null) && ($context["errors"] ?? null))) ? ("panel-danger") : (("panel-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["panel_type"] ?? null), 50, $this->source)))))];
        // line 53
        yield "
";
        // line 54
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["body"] ?? null))) {
            // line 55
            yield "  <fieldset ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 55), 55, $this->source), "html", null, true);
            yield ">

    ";
            // line 58
            yield "    ";
            if (($context["heading"] ?? null)) {
                // line 59
                yield "      ";
                yield from $this->unwrap()->yieldBlock('heading', $context, $blocks);
                // line 68
                yield "    ";
            }
            // line 69
            yield "
    ";
            // line 71
            yield "    ";
            yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
            // line 104
            yield "
    ";
            // line 106
            yield "    ";
            if (($context["footer"] ?? null)) {
                // line 107
                yield "      ";
                yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
                // line 115
                yield "    ";
            }
            // line 116
            yield "
  </fieldset>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["collapsible", "errors", "panel_type", "body", "attributes", "heading", "footer", "heading_attributes", "target", "collapsed", "description", "body_attributes", "footer_attributes"]);        return; yield '';
    }

    // line 59
    public function block_heading($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        yield "        <legend class=\"card__title card__title--underline\">
          ";
        // line 61
        if (($context["collapsible"] ?? null)) {
            // line 62
            yield "            <a";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_attributes"] ?? null), 62, $this->source), "html", null, true);
            yield " href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["target"] ?? null), 62, $this->source), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null), 62, $this->source), "html", null, true);
            yield "</a>
          ";
        } else {
            // line 64
            yield "            <span";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_attributes"] ?? null), 64, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null), 64, $this->source), "html", null, true);
            yield "</span>
          ";
        }
        // line 66
        yield "        </legend>
      ";
        return; yield '';
    }

    // line 71
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        yield "      ";
        // line 73
        $context["body_classes"] = ["card__block", ((        // line 75
($context["collapsible"] ?? null)) ? ("panel-collapse") : ("")), ((        // line 76
($context["collapsible"] ?? null)) ? ("collapse") : ("")), ((        // line 77
($context["collapsible"] ?? null)) ? ("fade") : ("")), (((        // line 78
($context["errors"] ?? null) || (($context["collapsible"] ?? null) &&  !($context["collapsed"] ?? null)))) ? ("in") : (""))];
        // line 81
        yield "      ";
        // line 82
        $context["description_classes"] = ["help-block", (((        // line 84
($context["description"] ?? null) && (CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "position", [], "any", false, false, true, 84) == "invisible"))) ? ("sr-only") : (""))];
        // line 87
        yield "
      ";
        // line 88
        if (($context["errors"] ?? null)) {
            // line 89
            yield "        <div class=\"alert alert-danger\" role=\"alert\">
          <strong>";
            // line 90
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 90, $this->source), "html", null, true);
            yield "</strong>
        </div>
      ";
        }
        // line 93
        yield "
      <div";
        // line 94
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["body_attributes"] ?? null), "addClass", [($context["body_classes"] ?? null)], "method", false, false, true, 94), 94, $this->source), "html", null, true);
        yield ">
        ";
        // line 95
        if ((($context["description"] ?? null) && (CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "position", [], "any", false, false, true, 95) == "before"))) {
            // line 96
            yield "          <p";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 96), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 96), 96, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
            yield "</p>
        ";
        }
        // line 98
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 98, $this->source), "html", null, true);
        yield "
        ";
        // line 99
        if (((($context["description"] ?? null) && (CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "position", [], "any", false, false, true, 99) == "after")) || (CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "position", [], "any", false, false, true, 99) == "invisible"))) {
            // line 100
            yield "          <p";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 100), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 100), 100, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
            yield "</p>
        ";
        }
        // line 102
        yield "      </div>
    ";
        return; yield '';
    }

    // line 107
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 108
        yield "        ";
        // line 109
        $context["footer_classes"] = ["card__actionbar"];
        // line 113
        yield "        <div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["footer_attributes"] ?? null), "addClass", [($context["footer_classes"] ?? null)], "method", false, false, true, 113), 113, $this->source), "html", null, true);
        yield ">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 113, $this->source), "html", null, true);
        yield "</div>
      ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/card/bootstrap-panel.html.twig";
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
        return array (  210 => 113,  208 => 109,  206 => 108,  202 => 107,  196 => 102,  188 => 100,  186 => 99,  181 => 98,  173 => 96,  171 => 95,  167 => 94,  164 => 93,  158 => 90,  155 => 89,  153 => 88,  150 => 87,  148 => 84,  147 => 82,  145 => 81,  143 => 78,  142 => 77,  141 => 76,  140 => 75,  139 => 73,  137 => 72,  133 => 71,  127 => 66,  119 => 64,  109 => 62,  107 => 61,  104 => 60,  100 => 59,  91 => 116,  88 => 115,  85 => 107,  82 => 106,  79 => 104,  76 => 71,  73 => 69,  70 => 68,  67 => 59,  64 => 58,  58 => 55,  56 => 54,  53 => 53,  51 => 50,  50 => 49,  49 => 47,  46 => 45,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/card/bootstrap-panel.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/card/bootstrap-panel.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 47, "if" => 54, "block" => 59);
        static $filters = array("clean_class" => 50, "render" => 54, "escape" => 55);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'render', 'escape'],
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
