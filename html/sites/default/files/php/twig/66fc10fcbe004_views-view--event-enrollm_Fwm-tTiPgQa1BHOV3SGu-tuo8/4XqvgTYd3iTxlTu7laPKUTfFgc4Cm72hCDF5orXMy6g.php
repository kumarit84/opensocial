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

/* themes/contrib/socialbase/templates/views/views-view--event-enrollments.html.twig */
class __TwigTemplate_36cf0a7513ac67703ba68bc5bfbd5797 extends Template
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
        // line 36
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 36, $this->source), "html", null, true);
        yield "
  ";
        // line 37
        if (($context["title"] ?? null)) {
            // line 38
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 38, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 40
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 40, $this->source), "html", null, true);
        yield "
  ";
        // line 41
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["header"] ?? null))) {
            // line 42
            yield "    <h4 class=\"card__title\"> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 42, $this->source), "html", null, true);
            yield " </h4>
  ";
        }
        // line 44
        yield "
  <div class=\"card__block text-center\">

    ";
        // line 47
        if (($context["rows"] ?? null)) {
            // line 48
            yield "      <div class=\"img-grid\">
        ";
            // line 49
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 49, $this->source), "html", null, true);
            yield "
      </div>
    ";
        } elseif (        // line 51
($context["empty"] ?? null)) {
            // line 52
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 52, $this->source), "html", null, true);
            yield "
    ";
        }
        // line 54
        yield "
    ";
        // line 55
        if (($context["pager"] ?? null)) {
            // line 56
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 56, $this->source), "html", null, true);
            yield "
    ";
        }
        // line 58
        yield "
    ";
        // line 59
        if ((($context["more"] ?? null) &&  !($context["empty"] ?? null))) {
            // line 60
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 60, $this->source), "html", null, true);
            yield "
    ";
        }
        // line 62
        yield "
    ";
        // line 63
        if (($context["feed_icons"] ?? null)) {
            // line 64
            yield "      <div class=\"feed-icons\">
        ";
            // line 65
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 65, $this->source), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 68
        yield "
  </div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title_prefix", "title", "title_suffix", "header", "rows", "empty", "pager", "more", "feed_icons"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/views/views-view--event-enrollments.html.twig";
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
        return array (  127 => 68,  121 => 65,  118 => 64,  116 => 63,  113 => 62,  107 => 60,  105 => 59,  102 => 58,  96 => 56,  94 => 55,  91 => 54,  85 => 52,  83 => 51,  78 => 49,  75 => 48,  73 => 47,  68 => 44,  62 => 42,  60 => 41,  55 => 40,  49 => 38,  47 => 37,  43 => 36,  40 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/views/views-view--event-enrollments.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/views/views-view--event-enrollments.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 37);
        static $filters = array("escape" => 36, "render" => 41);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'render'],
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
