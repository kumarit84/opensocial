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

/* themes/contrib/socialbase/templates/navigation/menu--account.html.twig */
class __TwigTemplate_2f07310bc6fe58d9893e6b2077d20c94 extends Template
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
        // line 21
        yield "
";
        // line 22
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 23
        yield "
";
        // line 28
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 28, $context, $this->getSourceContext()));
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level"]);        return; yield '';
    }

    // line 30
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 31
            yield "  ";
            $macros["menus"] = $this;
            // line 32
            yield "  ";
            if (($context["items"] ?? null)) {
                // line 33
                yield "

  <ul";
                // line 35
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["nav navbar-nav navbar-user"], "method", false, false, true, 35), 35, $this->source), "html", null, true);
                yield " role=\"navigation\">

    <li class=\"dropdown profile not-logged-in\">
      <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"true\" aria-haspopup=\"true\" role=\"button\" title=\"";
                // line 38
                echo t("User menu", array());
                yield "\">
        <svg class=\"icon-medium\" aria-hidden=\"true\">
          <title>";
                // line 40
                echo t("User menu", array());
                yield "</title>
          <use xlink:href=\"#icon-account_circle\"></use>
        </svg>
        <span class=\"sr-only\">";
                // line 43
                echo t("User menu", array());
                yield "</span>
      </a>
      <ul class=\"dropdown-menu\">
        ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 47
                    yield "          <li> ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 47), 47, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 47), 47, $this->source)), "html", null, true);
                    yield "
            ";
                    // line 48
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 48)) {
                        // line 49
                        yield "              ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 49), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 49, $context, $this->getSourceContext()));
                        yield "
            ";
                    }
                    // line 51
                    yield "          </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                yield "      </ul>
    </li>

  </ul>

  ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/navigation/menu--account.html.twig";
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
        return array (  128 => 53,  121 => 51,  115 => 49,  113 => 48,  108 => 47,  104 => 46,  98 => 43,  92 => 40,  87 => 38,  81 => 35,  77 => 33,  74 => 32,  71 => 31,  57 => 30,  48 => 28,  45 => 23,  43 => 22,  40 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/navigation/menu--account.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/navigation/menu--account.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 22, "macro" => 30, "if" => 32, "trans" => 38, "for" => 46);
        static $filters = array("escape" => 35);
        static $functions = array("link" => 47);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'trans', 'for'],
                ['escape'],
                ['link'],
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
