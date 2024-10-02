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

/* themes/contrib/socialbase/templates/like/like-and-dislike-icons.html.twig */
class __TwigTemplate_43bb3e410b76468eccca0d5a0f673255 extends Template
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
<div class=\"vote-widget vote-widget--like-and-dislike\">
  <div class=\"vote__wrapper\">
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["icons"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["icon"]) {
            // line 22
            yield "
      ";
            // line 23
            $context["count"] = CoreExtension::getAttribute($this->env, $this->source, $context["icon"], "count", [], "any", false, false, true, 23);
            // line 24
            yield "
      ";
            // line 25
            if (($context["type"] == "dislike")) {
                // line 26
                yield "        <div class=\"vote-dislike type-";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entity_type"] ?? null), 26, $this->source), "html", null, true);
                yield "\" id=\"dislike-container-";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entity_type"] ?? null), 26, $this->source), "html", null, true);
                yield "-";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entity_id"] ?? null), 26, $this->source), "html", null, true);
                yield "\">
          <a ";
                // line 27
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["icon"], "attributes", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                yield " title=\"";
                echo t("Number of likes", array());
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["icon"], "label", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                yield "</a>
          <span class=\"count\">";
                // line 28
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["count"] ?? null), 28, $this->source), "html", null, true);
                yield "</span>
        </div>
      ";
            }
            // line 31
            yield "
      ";
            // line 32
            if (($context["type"] == "like")) {
                // line 33
                yield "        <div class=\"vote-like type-";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entity_type"] ?? null), 33, $this->source), "html", null, true);
                yield "\" id=\"like-container-";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entity_type"] ?? null), 33, $this->source), "html", null, true);
                yield "-";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entity_id"] ?? null), 33, $this->source), "html", null, true);
                yield "\">
          <a ";
                // line 34
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["icon"], "attributes", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                yield " title=\"";
                echo t("Number of likes", array());
                yield "\">
            <svg class=\"icon-vote\" aria-hidden=\"true\">
              <title>";
                // line 36
                echo t("Total amount of likes", array());
                yield "</title>
              <use xlink:href=\"#icon-like\"></use>
            </svg>
          </a>
        </div>

        <div class=\"vote__count\">
          ";
                // line 43
                if (($context["logged_in"] ?? null)) {
                    // line 44
                    yield "            <a class=\"use-ajax\" data-dialog-options='{\"title\":\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["modal_title"] ?? null), 44, $this->source), "html", null, true);
                    yield "\",\"width\":\"auto\"}' data-dialog-type=\"modal\" href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 44, $this->source), "html", null, true);
                    yield "\" title=\"";
                    echo t("Number of likes", array());
                    yield "\">
              ";
                    // line 45
                    echo \Drupal::translation()->formatPlural(abs(($context["count"] ?? null)), "@count like", "@count likes", array("@count" => ($context["count"] ?? null), "@count" => ($context["count"] ?? null), ));
                    // line 46
                    yield "            </a>
          ";
                } else {
                    // line 48
                    yield "            ";
                    echo \Drupal::translation()->formatPlural(abs(($context["count"] ?? null)), "@count like", "@count likes", array("@count" => ($context["count"] ?? null), "@count" => ($context["count"] ?? null), ));
                    // line 49
                    yield "          ";
                }
                // line 50
                yield "        </div>
      ";
            }
            // line 52
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['icon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["icons", "entity_type", "entity_id", "logged_in", "modal_title", "url"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/like/like-and-dislike-icons.html.twig";
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
        return array (  146 => 53,  140 => 52,  136 => 50,  133 => 49,  130 => 48,  126 => 46,  124 => 45,  115 => 44,  113 => 43,  103 => 36,  96 => 34,  87 => 33,  85 => 32,  82 => 31,  76 => 28,  68 => 27,  59 => 26,  57 => 25,  54 => 24,  52 => 23,  49 => 22,  45 => 21,  40 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/like/like-and-dislike-icons.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/like/like-and-dislike-icons.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 21, "set" => 23, "if" => 25, "trans" => 27);
        static $filters = array("escape" => 26);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if', 'trans'],
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
