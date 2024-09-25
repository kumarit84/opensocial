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

/* @gin/navigation/toolbar--gin--secondary.html.twig */
class __TwigTemplate_fbe48639e11d0657a8854a11f730ab9a extends Template
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
        // line 23
        yield "
";
        // line 25
        if ((($__internal_compile_0 = (($__internal_compile_1 = $context) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#secondary"] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["tabs"] ?? null) : null)) {
            // line 26
            yield "  ";
            $context["tabs"] = (($__internal_compile_2 = (($__internal_compile_3 = $context) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#secondary"] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["tabs"] ?? null) : null);
        }
        // line 28
        if ((($__internal_compile_4 = (($__internal_compile_5 = $context) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#secondary"] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["trays"] ?? null) : null)) {
            // line 29
            yield "  ";
            $context["trays"] = (($__internal_compile_6 = (($__internal_compile_7 = $context) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["#secondary"] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["trays"] ?? null) : null);
        }
        // line 31
        yield "
<div";
        // line 32
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["toolbar", "toolbar-secondary"], "method", false, false, true, 32), "setAttribute", ["id", "toolbar-administration-secondary"], "method", false, false, true, 32), 32, $this->source), "html", null, true);
        yield ">
  <nav";
        // line 33
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["toolbar_attributes"] ?? null), "addClass", ["toolbar-bar", "clearfix"], "method", false, false, true, 33), "setAttribute", ["id", "toolbar-bar"], "method", false, false, true, 33), 33, $this->source), "html", null, true);
        yield ">
    <h2 class=\"visually-hidden\">";
        // line 34
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["toolbar_heading"] ?? null), 34, $this->source), "html", null, true);
        yield "</h2>

    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["tab"]) {
            // line 37
            yield "      ";
            $context["tray"] = (($__internal_compile_8 = ($context["trays"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[$context["key"]] ?? null) : null);
            // line 38
            yield "      ";
            $context["user_menu"] = (((($__internal_compile_9 = CoreExtension::getAttribute($this->env, $this->source, ($context["tray"] ?? null), "links", [], "any", false, false, true, 38)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["user_links"] ?? null) : null)) ? ("user-menu") : (false));
            // line 39
            yield "      ";
            $context["item_id"] = [];
            // line 40
            yield "
      ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_10 = (($__internal_compile_11 = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 41)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["#attributes"] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["class"] ?? null) : null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 42
                yield "        ";
                if (CoreExtension::inFilter("icon-", $context["item"])) {
                    // line 43
                    yield "          ";
                    $context["item_id"] = Twig\Extension\CoreExtension::merge($this->sandbox->ensureToStringAllowed(($context["item_id"] ?? null), 43, $this->source), [("toolbar-id--" . $this->sandbox->ensureToStringAllowed($context["item"], 43, $this->source))]);
                    // line 44
                    yield "        ";
                }
                // line 45
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            yield "
      ";
            // line 47
            $context["tab_id"] = (((($__internal_compile_12 = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 47)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["#id"] ?? null) : null)) ? (("toolbar-tab--" . $this->sandbox->ensureToStringAllowed((($__internal_compile_13 = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 47)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["#id"] ?? null) : null), 47, $this->source))) : (""));
            // line 48
            yield "      ";
            $context["tab_classes"] = Twig\Extension\CoreExtension::merge($this->sandbox->ensureToStringAllowed(($context["item_id"] ?? null), 48, $this->source), ["toolbar-tab", ($context["user_menu"] ?? null), ($context["tab_id"] ?? null)]);
            // line 49
            yield "
      ";
            // line 50
            $context["denylist_items"] = ["toolbar-id--toolbar-icon-menu"];
            // line 53
            yield "
      ";
            // line 55
            yield "      ";
            if (!CoreExtension::inFilter((($__internal_compile_14 = ($context["item_id"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[0] ?? null) : null), ($context["denylist_items"] ?? null))) {
                // line 56
                yield "        <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, true, 56), "addClass", [($context["tab_classes"] ?? null)], "method", false, false, true, 56), 56, $this->source), "html", null, true);
                if (CoreExtension::inFilter("tour-toolbar-tab", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, true, 56), "class", [], "any", false, false, true, 56))) {
                    yield " id=\"toolbar-tab-tour\"";
                }
                yield ">
          ";
                // line 57
                if (((($__internal_compile_15 = ($context["item_id"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[0] ?? null) : null) == "toolbar-id--toolbar-icon-user")) {
                    // line 58
                    yield "            ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null), 58, $this->source), "html", null, true);
                    yield "
          ";
                } else {
                    // line 60
                    yield "            ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                    yield "
          ";
                }
                // line 62
                yield "          <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["tray"] ?? null), "attributes", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
                yield ">
            ";
                // line 63
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["tray"] ?? null), "label", [], "any", false, false, true, 63)) {
                    // line 64
                    yield "              <nav class=\"toolbar-lining clearfix\" role=\"navigation\" aria-label=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["tray"] ?? null), "label", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                    yield "\">
                <h3 class=\"toolbar-tray-name visually-hidden\">";
                    // line 65
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["tray"] ?? null), "label", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
                    yield "</h3>
            ";
                } else {
                    // line 67
                    yield "              <nav class=\"toolbar-lining clearfix\" role=\"navigation\">
            ";
                }
                // line 69
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["tray"] ?? null), "links", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                yield "
            </nav>
          </div>
        </div>
      ";
            }
            // line 74
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        yield "  </nav>
  ";
        // line 76
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["remainder"] ?? null), 76, $this->source), "html", null, true);
        yield "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_context", "attributes", "toolbar_attributes", "toolbar_heading", "user_picture", "remainder"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@gin/navigation/toolbar--gin--secondary.html.twig";
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
        return array (  186 => 76,  183 => 75,  177 => 74,  168 => 69,  164 => 67,  159 => 65,  154 => 64,  152 => 63,  147 => 62,  141 => 60,  135 => 58,  133 => 57,  125 => 56,  122 => 55,  119 => 53,  117 => 50,  114 => 49,  111 => 48,  109 => 47,  106 => 46,  100 => 45,  97 => 44,  94 => 43,  91 => 42,  87 => 41,  84 => 40,  81 => 39,  78 => 38,  75 => 37,  71 => 36,  66 => 34,  62 => 33,  58 => 32,  55 => 31,  51 => 29,  49 => 28,  45 => 26,  43 => 25,  40 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "@gin/navigation/toolbar--gin--secondary.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/gin/templates/navigation/toolbar--gin--secondary.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 25, "set" => 26, "for" => 36);
        static $filters = array("escape" => 32, "merge" => 43);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'merge'],
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
