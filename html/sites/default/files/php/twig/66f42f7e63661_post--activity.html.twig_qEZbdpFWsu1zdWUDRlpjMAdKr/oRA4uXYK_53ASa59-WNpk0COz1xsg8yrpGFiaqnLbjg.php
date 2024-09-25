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

/* themes/contrib/socialbase/templates/post/post--activity.html.twig */
class __TwigTemplate_95825a077b07c11c4b290f6b04c6b6d7 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/comment"), "html", null, true);
        yield "
";
        // line 20
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/page-node"), "html", null, true);
        yield "

";
        // line 23
        $context["classes"] = ["margin-top-m", "iframe-container", ((        // line 26
($context["logged_in"] ?? null)) ? ("margin-bottom-m") : (""))];
        // line 29
        yield "
";
        // line 30
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 30)) {
            // line 31
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            yield "
";
        }
        // line 33
        yield "
<div";
        // line 34
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 34), 34, $this->source), "html", null, true);
        yield ">

  ";
        // line 37
        yield "  <div class=\"body-text\">
    ";
        // line 38
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 38, $this->source), "links", "field_post_comments", "like_and_dislike", "field_post_image", "user_id", "field_album"), "html", null, true);
        yield "
  </div>

  ";
        // line 41
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_post_image", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        yield "

  <div class=\"clearfix\"></div>

  <div class=\"footer-post\">
    ";
        // line 46
        if ((($context["dashboard"] ?? null) && (($context["comment_count"] ?? null) > 0))) {
            // line 47
            yield "      <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_url"] ?? null), 47, $this->source), "html", null, true);
            yield "\" class=\"badge badge--pill badge--post\" title=\"";
            echo t("Total amount of comments", array());
            yield "\">
            <span class=\"badge__container\">
              <svg class=\"badge__icon\" aria-hidden=\"true\">
                <title>";
            // line 50
            echo t("Total amount of comments", array());
            yield "</title>
                <use xlink:href=\"#icon-comment\"></use>
              </svg>
              <span class=\"badge__label\">
                ";
            // line 54
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_count"] ?? null), 54, $this->source), "html", null, true);
            yield "
              </span>
            </span>
      </a>
    ";
        }
        // line 59
        yield "
    ";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "like_and_dislike", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        yield "

    ";
        // line 62
        if (($context["dashboard"] ?? null)) {
            // line 63
            yield "      <div class=\"card__link\">
        ";
            // line 64
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more_link"] ?? null), 64, $this->source), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 67
        yield "
    <div class=\"album-name\">
      ";
        // line 69
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_album", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        yield "
    </div>

    ";
        // line 72
        if (($context["share_post"] ?? null)) {
            // line 73
            yield "      <div class=\"share-button\">
        ";
            // line 74
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["share_post"] ?? null), 74, $this->source), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 77
        yield "  </div>

</div>

";
        // line 81
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_post_comments", [], "any", false, false, true, 81)) {
            // line 82
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_post_comments", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            yield "
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["logged_in", "content", "attributes", "dashboard", "comment_count", "comment_url", "more_link", "share_post"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/post/post--activity.html.twig";
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
        return array (  165 => 82,  163 => 81,  157 => 77,  151 => 74,  148 => 73,  146 => 72,  140 => 69,  136 => 67,  130 => 64,  127 => 63,  125 => 62,  120 => 60,  117 => 59,  109 => 54,  102 => 50,  93 => 47,  91 => 46,  83 => 41,  77 => 38,  74 => 37,  69 => 34,  66 => 33,  60 => 31,  58 => 30,  55 => 29,  53 => 26,  52 => 23,  47 => 20,  43 => 19,  40 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/post/post--activity.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/post/post--activity.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 23, "if" => 30, "trans" => 47);
        static $filters = array("escape" => 19, "without" => 38);
        static $functions = array("attach_library" => 19);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['escape', 'without'],
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
