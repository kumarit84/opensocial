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

/* themes/contrib/socialblue/templates/profile/profile--profile--statistic.html.twig */
class __TwigTemplate_ffbcb677a256066dbfcae09a46493280 extends Template
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
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/hero"), "html", null, true);
        yield "

<div class=\"card__info-user\">
  ";
        // line 4
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_image", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        yield "
  <h2 class=\"card__info-user--name\">
    ";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_name"] ?? null), 6, $this->source), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_name_extra"] ?? null), 6, $this->source), "html", null, true);
        yield "
  </h2>

  <div class=\"card__info-user--about\">
    <div class=\"card__info-user--about-job\">";
        // line 10
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_function", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        yield "</div>
    <div class=\"card__info-user--about-organization\" translate=\"no\">";
        // line 11
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_organization", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        yield "</div>
    <div class=\"card__info-user--about-address\">
      ";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 13, $this->source), "field_profile_first_name", "field_profile_last_name", "field_profile_image", "field_profile_function", "field_profile_organization", "flag_follow_user", "followers", "following"), "html", null, true);
        yield "
    </div>
  </div>
</div>

";
        // line 18
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "followers", [], "any", false, false, true, 18) || CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "following", [], "any", false, false, true, 18))) {
            // line 19
            yield "  <div class=\"follow-user--counter\">
    ";
            // line 20
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "followers", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            yield "
    ";
            // line 21
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "following", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            yield "
  </div>
";
        }
        // line 24
        yield "
";
        // line 25
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "flag_follow_user", [], "any", false, false, true, 25)) {
            // line 26
            yield "  <div class=\"follow-user-wrapper\">
    ";
            // line 27
            if (($context["following_enabled"] ?? null)) {
                // line 28
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "flag_follow_user", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                yield "
    ";
            }
            // line 30
            yield "    ";
            if ((($context["profile_contact_label"] ?? null) == "private_message")) {
                // line 31
                yield "      <div class=\"hero-footer__cta\">
        <a href=\"";
                // line 32
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_contact_url"] ?? null), 32, $this->source), "html", null, true);
                yield "\" class=\"btn btn-default\">
          ";
                // line 33
                echo t("Message", array());
                // line 34
                yield "        </a>
      </div>
    ";
            } elseif (            // line 36
($context["profile_edit_url"] ?? null)) {
                // line 37
                yield "      <div class=\"hero-footer__cta card__link\">
        <a href=\"";
                // line 38
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_edit_url"] ?? null), 38, $this->source), "html", null, true);
                yield "\" title=\"";
                echo t("Edit profile information", array());
                yield "\" class=\"btn btn-default\">
          ";
                // line 39
                echo t("Edit profile", array());
                // line 40
                yield "        </a>
      </div>
    ";
            }
            // line 43
            yield "  </div>
";
        } else {
            // line 45
            yield "  <div class=\"card__counter\">
    <ul>
      <li>
        <span class=\"card__counter-quantity\">";
            // line 48
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_events"] ?? null), 48, $this->source), "html", null, true);
            yield "</span>
        <span class=\"card__counter-text\">";
            // line 49
            echo \Drupal::translation()->formatPlural(abs(($context["profile_events"] ?? null)), "event", "events", array());
            yield "</span>
      </li>
      <li>
        <span class=\"card__counter-quantity\">";
            // line 52
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_topics"] ?? null), 52, $this->source), "html", null, true);
            yield "</span>
        <span class=\"card__counter-text\">";
            // line 53
            echo \Drupal::translation()->formatPlural(abs(($context["profile_topics"] ?? null)), "topic", "topics", array());
            yield "</span>
      </li>
      <li>
        <span class=\"card__counter-quantity\">";
            // line 56
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_groups"] ?? null), 56, $this->source), "html", null, true);
            yield "</span>
        <span class=\"card__counter-text\">";
            // line 57
            echo \Drupal::translation()->formatPlural(abs(($context["profile_groups"] ?? null)), "group", "groups", array());
            yield "</span>
      </li>
    </ul>
  </div>

  ";
            // line 62
            if ((($context["profile_contact_label"] ?? null) == "private_message")) {
                // line 63
                yield "    <div class=\"hero-footer__cta\">
      <a href=\"";
                // line 64
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_contact_url"] ?? null), 64, $this->source), "html", null, true);
                yield "\" class=\"btn btn-accent\">
        ";
                // line 65
                echo t("Private message", array());
                // line 66
                yield "      </a>
    </div>
  ";
            } elseif (            // line 68
($context["profile_edit_url"] ?? null)) {
                // line 69
                yield "    <div class=\"hero-footer__cta card__link\">
      <a href=\"";
                // line 70
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_edit_url"] ?? null), 70, $this->source), "html", null, true);
                yield "\" title=\"";
                echo t("Edit profile information", array());
                yield "\" class=\"btn btn-default\">
        ";
                // line 71
                echo t("Edit profile", array());
                // line 72
                yield "      </a>
    </div>
  ";
            }
            // line 75
            yield "
  ";
            // line 76
            if (($context["profile_info_url"] ?? null)) {
                // line 77
                yield "    <footer class=\"card__actionbar\">
      <a href=\"";
                // line 78
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_info_url"] ?? null), 78, $this->source), "html", null, true);
                yield "\" class=\"card__link\">
        ";
                // line 79
                echo t("See full profile", array());
                // line 80
                yield "      </a>
    </footer>
  ";
            }
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content", "profile_name", "profile_name_extra", "following_enabled", "profile_contact_label", "profile_contact_url", "profile_edit_url", "profile_events", "profile_topics", "profile_groups", "profile_info_url"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialblue/templates/profile/profile--profile--statistic.html.twig";
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
        return array (  230 => 80,  228 => 79,  224 => 78,  221 => 77,  219 => 76,  216 => 75,  211 => 72,  209 => 71,  203 => 70,  200 => 69,  198 => 68,  194 => 66,  192 => 65,  188 => 64,  185 => 63,  183 => 62,  175 => 57,  171 => 56,  165 => 53,  161 => 52,  155 => 49,  151 => 48,  146 => 45,  142 => 43,  137 => 40,  135 => 39,  129 => 38,  126 => 37,  124 => 36,  120 => 34,  118 => 33,  114 => 32,  111 => 31,  108 => 30,  102 => 28,  100 => 27,  97 => 26,  95 => 25,  92 => 24,  86 => 21,  82 => 20,  79 => 19,  77 => 18,  69 => 13,  64 => 11,  60 => 10,  51 => 6,  46 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialblue/templates/profile/profile--profile--statistic.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialblue/templates/profile/profile--profile--statistic.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 18, "trans" => 33);
        static $filters = array("escape" => 1, "without" => 13);
        static $functions = array("attach_library" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
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
