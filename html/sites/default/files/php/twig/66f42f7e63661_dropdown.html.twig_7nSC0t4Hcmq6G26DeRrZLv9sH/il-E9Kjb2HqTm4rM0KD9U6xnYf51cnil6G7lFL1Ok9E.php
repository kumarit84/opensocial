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

/* themes/contrib/socialbase/templates/form/dropdown.html.twig */
class __TwigTemplate_f5b96cdc146d0636dba6e8374341d93a extends Template
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
        // line 13
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["dropdown field--name-field-post-visibility"], "method", false, false, true, 13), 13, $this->source), "html", null, true);
        yield ">
    ";
        // line 15
        yield "        <button id=\"post-visibility\" type=\"button\" ";
        if (($context["edit_mode"] ?? null)) {
            yield "disabled";
        }
        yield " data-toggle=\"dropdown\" aria-expanded=\"false\" aria-haspopup=\"true\" class=\"btn btn-default dropdown-toggle\">
          <svg class=\"icon-small\" aria-hidden=\"true\">
            <use class=\"btnicon\" xlink:href=\"#icon-";
        // line 17
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["selected_icon"] ?? null), 17, $this->source), "html", null, true);
        yield "\"></use>
          </svg>
          <span class=\"text\">";
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["selected"] ?? null), 19, $this->source), "html", null, true);
        yield " </span>
          ";
        // line 20
        if ( !($context["edit_mode"] ?? null)) {
            yield "<span class=\"caret\"></span>";
        }
        // line 21
        yield "        </button>
  ";
        // line 22
        if ( !($context["edit_mode"] ?? null)) {
            // line 23
            yield "    <ul role=\"menu\" aria-labelledby=\"post-visibility\" class=\"dropdown-menu dropdown-menu--visibility\">
      <li class=\"dropdown-header\">";
            // line 24
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 24, $this->source), "html", null, true);
            yield "</li>
      ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["child"]) {
                // line 26
                yield "        <li class=\"list-item list-item--visibility ";
                if (($context["key"] == ($context["active"] ?? null))) {
                    yield "list-item--active";
                }
                yield "\">
          <a href=\"\" role=\"button\">
            ";
                // line 28
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["child"], 28, $this->source), "html", null, true);
                yield "
          </a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            yield "    </ul>
    ";
        }
        // line 34
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "edit_mode", "selected_icon", "selected", "label", "items", "active"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/form/dropdown.html.twig";
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
        return array (  104 => 34,  100 => 32,  90 => 28,  82 => 26,  78 => 25,  74 => 24,  71 => 23,  69 => 22,  66 => 21,  62 => 20,  58 => 19,  53 => 17,  45 => 15,  40 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/form/dropdown.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/form/dropdown.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 15, "for" => 25);
        static $filters = array("escape" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
