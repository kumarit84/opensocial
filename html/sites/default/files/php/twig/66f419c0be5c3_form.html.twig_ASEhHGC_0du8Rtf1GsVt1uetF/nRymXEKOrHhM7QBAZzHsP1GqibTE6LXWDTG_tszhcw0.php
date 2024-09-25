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

/* themes/contrib/socialbase/templates/form/form.html.twig */
class __TwigTemplate_629081365ea8a1207122de5019f6b647 extends Template
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
        // line 15
        yield "
";
        // line 16
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "hasClass", ["form--default"], "method", false, false, true, 16)) {
            // line 17
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/form-default"), "html", null, true);
            yield "
";
        }
        // line 19
        yield "
";
        // line 20
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "hasClass", ["card"], "method", false, false, true, 20)) {
            // line 21
            yield "  <form";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", ["card"], "method", false, false, true, 21), 21, $this->source), "html", null, true);
            yield ">
    <div class=\"card\">
      <div class=\"card__block\">
        ";
            // line 24
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 24, $this->source), "html", null, true);
            yield "
    </form>

    ";
            // line 30
            yield "
";
        } elseif (        // line 31
($context["is_search_form"] ?? null)) {
            // line 32
            yield "
  ";
            // line 33
            if (($context["in_hero_region"] ?? null)) {
                // line 34
                yield "
    <form";
                // line 35
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 35, $this->source), "html", null, true);
                yield ">
      <div class=\"form-group\">
        ";
                // line 37
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 37, $this->source), "html", null, true);
                yield "
      </div>
    </form>

  ";
            } elseif (            // line 41
($context["in_content_top_region"] ?? null)) {
                // line 42
                yield "
    <form";
                // line 43
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["search-take-over"], "method", false, false, true, 43), 43, $this->source), "html", null, true);
                yield ">
      <div class=\"form-group\">
        <button class=\"btn--close-search-take-over\" type=\"button\" title=\"";
                // line 45
                echo t("Close search window", array());
                yield "\">
          <svg class=\"icon-search-form-close\" aria-hidden=\"true\">
            <title>";
                // line 47
                echo t("Close search window", array());
                yield "</title>
            <use xlink:href=\"#icon-close\"></use>
          </svg>
        </button>
        ";
                // line 51
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 51, $this->source), "html", null, true);
                yield "
      </div>
    </form>

  ";
            } else {
                // line 56
                yield "
    <form";
                // line 57
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 57, $this->source), "html", null, true);
                yield ">
      <div class=\"form-group form--navbar-search\" id=\"navbar-search\">
        ";
                // line 59
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 59, $this->source), "html", null, true);
                yield "
      </div>
    </form>

  ";
            }
            // line 64
            yield "
";
        } else {
            // line 66
            yield "
  <form";
            // line 67
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 67, $this->source), "html", null, true);
            yield ">
    ";
            // line 68
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 68, $this->source), "html", null, true);
            yield "
  </form>

";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "children", "is_search_form", "in_hero_region", "in_content_top_region"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/form/form.html.twig";
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
        return array (  151 => 68,  147 => 67,  144 => 66,  140 => 64,  132 => 59,  127 => 57,  124 => 56,  116 => 51,  109 => 47,  104 => 45,  99 => 43,  96 => 42,  94 => 41,  87 => 37,  82 => 35,  79 => 34,  77 => 33,  74 => 32,  72 => 31,  69 => 30,  63 => 24,  56 => 21,  54 => 20,  51 => 19,  45 => 17,  43 => 16,  40 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/form/form.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/form/form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 16, "trans" => 45);
        static $filters = array("escape" => 17);
        static $functions = array("attach_library" => 17);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape'],
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
