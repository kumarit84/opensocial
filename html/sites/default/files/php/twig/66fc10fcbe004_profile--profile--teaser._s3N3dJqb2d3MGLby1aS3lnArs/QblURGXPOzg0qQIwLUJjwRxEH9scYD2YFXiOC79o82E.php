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

/* profile--profile--teaser.html.twig */
class __TwigTemplate_f65bad0a2e0704ce063a37fa5f19f2bf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'card_image' => [$this, 'block_card_image'],
            'card_teaser_type' => [$this, 'block_card_teaser_type'],
            'card_title' => [$this, 'block_card_title'],
            'card_body' => [$this, 'block_card_body'],
            'card_actionbar' => [$this, 'block_card_actionbar'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        yield "
";
        // line 23
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/teaser"), "html", null, true);
        yield "

<div class=\"card teaser\">

  ";
        // line 27
        yield from $this->unwrap()->yieldBlock('card_image', $context, $blocks);
        // line 34
        yield "
  ";
        // line 35
        yield from $this->unwrap()->yieldBlock('card_teaser_type', $context, $blocks);
        // line 45
        yield "
  <div class=\"teaser__body\">
    <div class=\"teaser__content\">

      ";
        // line 49
        yield from $this->unwrap()->yieldBlock('card_title', $context, $blocks);
        // line 56
        yield "
      ";
        // line 57
        yield from $this->unwrap()->yieldBlock('card_body', $context, $blocks);
        // line 92
        yield "    </div>

    <div class=\"card__actionbar\">
      ";
        // line 95
        yield from $this->unwrap()->yieldBlock('card_actionbar', $context, $blocks);
        // line 120
        yield "    </div>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["profile_home", "content", "profile_name", "profile_name_extra", "badges", "attributes", "following_enabled", "profile_contact_url", "profile_contact_label", "profile_stream_url"]);        return; yield '';
    }

    // line 27
    public function block_card_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    <div class=\"teaser__image\" aria-hidden=\"true\">
      <a href=\"";
        // line 29
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_home"] ?? null), 29, $this->source), "html", null, true);
        yield "\">
        ";
        // line 30
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_image", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        yield "
      </a>
    </div>
  ";
        return; yield '';
    }

    // line 35
    public function block_card_teaser_type($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        yield "    <a href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_home"] ?? null), 36, $this->source), "html", null, true);
        yield "\" aria-hidden=\"true\" title=\"";
        echo t("Profile: &nbsp;", array());
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["profile_name"] ?? null), 36, $this->source)))), "html", null, true);
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["profile_name_extra"] ?? null), 36, $this->source)))), "html", null, true);
        yield "\">
      <div class=\"teaser__teaser-type\">
        <svg class=\"teaser__teaser-type-icon\">
          <title>";
        // line 39
        echo t("Profile: &nbsp;", array());
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["profile_name"] ?? null), 39, $this->source)))), "html", null, true);
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["profile_name_extra"] ?? null), 39, $this->source)))), "html", null, true);
        yield "</title>
          <use xlink:href=\"#icon-account_circle\"></use>
        </svg>
      </div>
    </a>
  ";
        return; yield '';
    }

    // line 49
    public function block_card_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        yield "        <h4 class=\"teaser__title\">
         <a href=\"";
        // line 51
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_home"] ?? null), 51, $this->source), "html", null, true);
        yield "\">
           ";
        // line 52
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_name"] ?? null), 52, $this->source), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_name_extra"] ?? null), 52, $this->source), "html", null, true);
        yield "
          </a>
        </h4>
      ";
        return; yield '';
    }

    // line 57
    public function block_card_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        yield "        ";
        if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_function", [], "any", false, false, true, 58)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_organization", [], "any", false, false, true, 58)))) {
            // line 59
            yield "          <div class=\"teaser__content-line\">
            <svg class=\"teaser__content-type-icon\">
              <title>";
            // line 61
            echo t("User function and organization", array());
            yield "</title>
              <use xlink:href=\"#icon-business_center\"></use>
            </svg>
            <span class=\"teaser__content-text\">
            ";
            // line 65
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_organization", [], "any", false, false, true, 65))) {
                // line 66
                yield "              ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("@function at @organization", ["@function" => $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_function", [], "any", false, false, true, 66), 66, $this->source)), "@organization" => $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_organization", [], "any", false, false, true, 66), 66, $this->source))]));
                yield "
            ";
            } else {
                // line 68
                yield "              ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_function", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                yield "
            ";
            }
            // line 70
            yield "          </span>
          </div>
        ";
        }
        // line 73
        yield "
        ";
        // line 74
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_summary", [], "any", false, false, true, 74))) {
            // line 75
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_summary", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            yield "
        ";
        } else {
            // line 77
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_self_introduction", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            yield "
        ";
        }
        // line 79
        yield "
        ";
        // line 80
        if (((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_profile_tag", [], "any", false, false, true, 80)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null) || ($context["badges"] ?? null))) {
            // line 81
            yield "          <div class=\"teaser__content--badges\" style=\"margin-bottom: 5px;\">
            ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["badges"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
                // line 83
                yield "              ";
                $context["badge_classes"] = Twig\Extension\CoreExtension::merge($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "classes", [], "any", false, false, true, 83), 83, $this->source), ["badge"]);
                // line 84
                yield "              <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["badge_classes"] ?? null)], "method", false, false, true, 84), 84, $this->source), "html", null, true);
                yield ">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "label", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                yield "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['badge'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_profile_tag", [], "any", false, false, true, 86)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#items"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 87
                yield "              <div class=\"badge badge-default\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 87), "label", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                yield "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            yield "          </div>
        ";
        }
        // line 91
        yield "      ";
        return; yield '';
    }

    // line 95
    public function block_card_actionbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "flag_follow_user", [], "any", false, false, true, 96) && ($context["following_enabled"] ?? null))) {
            // line 97
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "flag_follow_user", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
            yield "
        ";
        }
        // line 99
        yield "
        ";
        // line 100
        $context["follow_user_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        // line 101
        yield "        ";
        $context["follow_user_classes"] = [((CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "flag_follow_user", [], "any", false, false, true, 101)) ? ("btn btn-default") : ("card__link"))];
        // line 102
        yield "        <a href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_contact_url"] ?? null), 102, $this->source), "html", null, true);
        yield "\" ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["follow_user_attributes"] ?? null), "addClass", [($context["follow_user_classes"] ?? null)], "method", false, false, true, 102), 102, $this->source), "html", null, true);
        yield ">
          ";
        // line 103
        if ((($context["profile_contact_label"] ?? null) == "private_message")) {
            // line 104
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "flag_follow_user", [], "any", false, false, true, 104)) {
                // line 105
                yield "              ";
                echo t("Message", array());
                // line 106
                yield "            ";
            } else {
                // line 107
                yield "              ";
                echo t("Private message", array());
                // line 108
                yield "            ";
            }
            // line 109
            yield "          ";
        } else {
            // line 110
            yield "            ";
            echo t("View profile", array());
            // line 111
            yield "          ";
        }
        // line 112
        yield "        </a>

        ";
        // line 114
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "flag_follow_user", [], "any", false, false, true, 114)) {
            // line 115
            yield "          <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_stream_url"] ?? null), 115, $this->source), "html", null, true);
            yield "\" class=\"card__link hidden-for-phone-only\">
            ";
            // line 116
            echo t("View activities", array());
            // line 117
            yield "          </a>
        ";
        }
        // line 119
        yield "      ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "profile--profile--teaser.html.twig";
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
        return array (  335 => 119,  331 => 117,  329 => 116,  324 => 115,  322 => 114,  318 => 112,  315 => 111,  312 => 110,  309 => 109,  306 => 108,  303 => 107,  300 => 106,  297 => 105,  294 => 104,  292 => 103,  285 => 102,  282 => 101,  280 => 100,  277 => 99,  271 => 97,  268 => 96,  264 => 95,  259 => 91,  255 => 89,  246 => 87,  241 => 86,  230 => 84,  227 => 83,  223 => 82,  220 => 81,  218 => 80,  215 => 79,  209 => 77,  203 => 75,  201 => 74,  198 => 73,  193 => 70,  187 => 68,  181 => 66,  179 => 65,  172 => 61,  168 => 59,  165 => 58,  161 => 57,  150 => 52,  146 => 51,  143 => 50,  139 => 49,  126 => 39,  115 => 36,  111 => 35,  102 => 30,  98 => 29,  95 => 28,  91 => 27,  82 => 120,  80 => 95,  75 => 92,  73 => 57,  70 => 56,  68 => 49,  62 => 45,  60 => 35,  57 => 34,  55 => 27,  48 => 23,  45 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile--profile--teaser.html.twig", "themes/contrib/socialbase/templates/profile/profile--profile--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 27, "trans" => 36, "if" => 58, "for" => 82, "set" => 83);
        static $filters = array("escape" => 23, "trim" => 36, "striptags" => 36, "render" => 36, "t" => 66, "merge" => 83);
        static $functions = array("attach_library" => 23, "create_attribute" => 100);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'trans', 'if', 'for', 'set'],
                ['escape', 'trim', 'striptags', 'render', 't', 'merge'],
                ['attach_library', 'create_attribute'],
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
