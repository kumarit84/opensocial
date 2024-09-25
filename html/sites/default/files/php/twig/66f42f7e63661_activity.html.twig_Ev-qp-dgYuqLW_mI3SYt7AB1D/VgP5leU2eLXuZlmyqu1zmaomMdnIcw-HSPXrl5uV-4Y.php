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

/* themes/contrib/socialbase/templates/activity/activity.html.twig */
class __TwigTemplate_a5837819bdc50e2bf264b7adce9037ba extends Template
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
        // line 18
        yield "
";
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/stream"), "html", null, true);
        yield "

";
        // line 22
        $context["classes"] = ["media", (((        // line 24
($context["post"] ?? null) &&  !($context["published"] ?? null))) ? ("post-unpublished") : (""))];
        // line 27
        yield "
<li class=\"stream-item\">

  <i class=\"stream-icon\"></i>

  <div class=\"card card--stream ";
        // line 32
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["extra_stream_class"] ?? null), 32, $this->source), "html", null, true);
        yield "\">

    <div class=\"card__block\">

      <div class=\"media-wrapper\">

        <div ";
        // line 38
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 38), 38, $this->source), "html", null, true);
        yield ">

          <div class=\"media-left avatar\" aria-hidden=\"true\">
            ";
        // line 41
        if (($context["actor"] ?? null)) {
            // line 42
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["actor"] ?? null), 42, $this->source), "html", null, true);
        }
        // line 44
        yield "          </div>

          <div class=\"media-body\">
            <div class=\"media-heading text-m\">
              ";
        // line 48
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_activity_output_text", [], "any", false, false, true, 48)) {
            // line 49
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_activity_output_text", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        }
        // line 51
        yield "
              <div class=\"post-date\">
                ";
        // line 53
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 53, $this->source), "html", null, true);
        yield "
                ";
        // line 54
        if ((($context["visibility_icon"] ?? null) && ($context["visibility_label"] ?? null))) {
            // line 55
            yield "                  <svg class=\"margin-left-s icon-visibility\">
                    <title>";
            // line 56
            echo t("Visibility", array());
            yield "</title>
                    <use xlink:href=\"#icon-";
            // line 57
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["visibility_icon"] ?? null), 57, $this->source), "html", null, true);
            yield "\"></use>
                  </svg>
                  <strong>";
            // line 59
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["visibility_label"] ?? null), 59, $this->source), "html", null, true);
            yield "</strong>
                ";
        }
        // line 61
        yield "                ";
        if ((($context["post"] ?? null) &&  !($context["published"] ?? null))) {
            // line 62
            yield "                  <span class=\"badge badge-default badge--pill\">
                    ";
            // line 63
            echo t("unpublished", array());
            // line 64
            yield "                  </span>
                ";
        }
        // line 66
        yield "
              </div>
            </div>

          </div>

        </div>

        ";
        // line 74
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_activity_entity", [], "any", false, false, true, 74)) {
            // line 75
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_activity_entity", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            yield "
        ";
        }
        // line 77
        yield "
      </div>

    </div>

  </div>


</li>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["post", "published", "extra_stream_class", "attributes", "actor", "content", "date", "visibility_icon", "visibility_label"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/activity/activity.html.twig";
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
        return array (  146 => 77,  140 => 75,  138 => 74,  128 => 66,  124 => 64,  122 => 63,  119 => 62,  116 => 61,  111 => 59,  106 => 57,  102 => 56,  99 => 55,  97 => 54,  93 => 53,  89 => 51,  86 => 49,  84 => 48,  78 => 44,  75 => 42,  73 => 41,  67 => 38,  58 => 32,  51 => 27,  49 => 24,  48 => 22,  43 => 19,  40 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/activity/activity.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/activity/activity.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 22, "if" => 41, "trans" => 56);
        static $filters = array("escape" => 19);
        static $functions = array("attach_library" => 19);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
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
