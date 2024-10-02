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

/* themes/contrib/socialbase/templates/views/views-view.html.twig */
class __TwigTemplate_c328bc139778cf6211d5e42e9326074c extends Template
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
        // line 35
        yield "
";
        // line 37
        $context["classes"] = ["view", ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 39
($context["id"] ?? null), 39, $this->source))), ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 40
($context["id"] ?? null), 40, $this->source)), ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 41
($context["display_id"] ?? null), 41, $this->source)), ((        // line 42
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 42, $this->source))) : (""))];
        // line 45
        yield "
";
        // line 47
        $context["error_classes"] = [(((        // line 48
($context["display_id"] ?? null) == "page")) ? ("alert alert-info") : ("")), (((        // line 49
($context["display_id"] ?? null) == "page_no_value")) ? ("alert alert-info") : ("")), (((        // line 50
($context["display_id"] ?? null) != "page")) ? ("small card__block") : (""))];
        // line 53
        yield "
<div";
        // line 54
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 54), 54, $this->source), "html", null, true);
        yield ">
  ";
        // line 55
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 55, $this->source), "html", null, true);
        yield "
  ";
        // line 56
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 56, $this->source), "html", null, true);
        yield "
  ";
        // line 57
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 57, $this->source), "html", null, true);
        yield "

  ";
        // line 59
        if (($context["header"] ?? null)) {
            // line 60
            yield "    <div class=\"view-header\">
      ";
            // line 61
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 61, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 64
        yield "
  ";
        // line 65
        if (($context["exposed"] ?? null)) {
            // line 66
            yield "    <div class=\"view-filters form-group\">
      ";
            // line 67
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 67, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 70
        yield "
  ";
        // line 71
        if (($context["attachment_before"] ?? null)) {
            // line 72
            yield "    <div class=\"attachment attachment-before\">
      ";
            // line 73
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 73, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 76
        yield "
  ";
        // line 77
        if ( !($context["empty"] ?? null)) {
            // line 78
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 78, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 80
        yield "
  ";
        // line 81
        if (($context["empty"] ?? null)) {
            // line 82
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [($context["error_classes"] ?? null)], "method", false, false, true, 82), 82, $this->source), "html", null, true);
            yield " role=\"alert\">
      <h4 class=\"sr-only\">";
            // line 83
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Informative message"));
            yield "</h4>
      ";
            // line 84
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 84, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 87
        yield "
  ";
        // line 88
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 88, $this->source), "html", null, true);
        yield "

  ";
        // line 90
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 90, $this->source), "html", null, true);
        yield "
  ";
        // line 91
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 91, $this->source), "html", null, true);
        yield "

  ";
        // line 93
        if (($context["footer"] ?? null)) {
            // line 94
            yield "    <div class=\"view-footer\">
      ";
            // line 95
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 95, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 98
        yield "
  ";
        // line 99
        if (($context["feed_icons"] ?? null)) {
            // line 100
            yield "    <div class=\"feed-icons\">
      ";
            // line 101
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 101, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 104
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["id", "display_id", "dom_id", "attributes", "title_prefix", "title", "title_suffix", "header", "exposed", "attachment_before", "empty", "rows", "content_attributes", "pager", "attachment_after", "more", "footer", "feed_icons"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/views/views-view.html.twig";
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
        return array (  189 => 104,  183 => 101,  180 => 100,  178 => 99,  175 => 98,  169 => 95,  166 => 94,  164 => 93,  159 => 91,  155 => 90,  150 => 88,  147 => 87,  141 => 84,  137 => 83,  132 => 82,  130 => 81,  127 => 80,  121 => 78,  119 => 77,  116 => 76,  110 => 73,  107 => 72,  105 => 71,  102 => 70,  96 => 67,  93 => 66,  91 => 65,  88 => 64,  82 => 61,  79 => 60,  77 => 59,  72 => 57,  68 => 56,  64 => 55,  60 => 54,  57 => 53,  55 => 50,  54 => 49,  53 => 48,  52 => 47,  49 => 45,  47 => 42,  46 => 41,  45 => 40,  44 => 39,  43 => 37,  40 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/views/views-view.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/views/views-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 37, "if" => 59);
        static $filters = array("clean_class" => 39, "escape" => 54, "t" => 83);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 't'],
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
