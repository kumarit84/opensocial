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

/* themes/contrib/socialbase/templates/views/views-view--stream.html.twig */
class __TwigTemplate_10a2027deeb47be3742b4f53b31ce902 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/stream"), "html", null, true);
        yield "
<ul";
        // line 36
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["stream"], "method", false, false, true, 36), 36, $this->source), "html", null, true);
        yield ">
  ";
        // line 37
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 37, $this->source), "html", null, true);
        yield "
  ";
        // line 38
        if (($context["title"] ?? null)) {
            // line 39
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 39, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 41
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 41, $this->source), "html", null, true);
        yield "
  ";
        // line 42
        if (($context["header"] ?? null)) {
            // line 43
            yield "    <li class=\"stream-item\">
      <i class=\"stream-icon stream-icon-new\"></i>
      ";
            // line 45
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 45, $this->source), "html", null, true);
            yield "
    </li>
  ";
        }
        // line 48
        yield "
  ";
        // line 49
        if (($context["rows"] ?? null)) {
            // line 50
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 50, $this->source), "html", null, true);
            yield "
  ";
        } elseif (        // line 51
($context["empty"] ?? null)) {
            // line 52
            yield "    <div class=\"view-empty\">
      ";
            // line 53
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 53, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 56
        yield "
  ";
        // line 57
        if (($context["pager"] ?? null)) {
            // line 58
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 58, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 60
        yield "
  ";
        // line 61
        if (($context["more"] ?? null)) {
            // line 62
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 62, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 64
        yield "  ";
        if (($context["footer"] ?? null)) {
            // line 65
            yield "    <div class=\"view-footer\">
      ";
            // line 66
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 66, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 69
        yield "
</ul>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "title_prefix", "title", "title_suffix", "header", "rows", "empty", "pager", "more", "footer"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/views/views-view--stream.html.twig";
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
        return array (  132 => 69,  126 => 66,  123 => 65,  120 => 64,  114 => 62,  112 => 61,  109 => 60,  103 => 58,  101 => 57,  98 => 56,  92 => 53,  89 => 52,  87 => 51,  82 => 50,  80 => 49,  77 => 48,  71 => 45,  67 => 43,  65 => 42,  60 => 41,  54 => 39,  52 => 38,  48 => 37,  44 => 36,  40 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/views/views-view--stream.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/views/views-view--stream.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 38);
        static $filters = array("escape" => 35);
        static $functions = array("attach_library" => 35);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
