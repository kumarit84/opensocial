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

/* node--hero--sky.html.twig */
class __TwigTemplate_1911dc974ebdfdecff0e4c120cd70e9b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'card_prefix' => [$this, 'block_card_prefix'],
            'card_title' => [$this, 'block_card_title'],
            'metainfo' => [$this, 'block_metainfo'],
            'card_suffix' => [$this, 'block_card_suffix'],
            'nodefull_specialfields' => [$this, 'block_nodefull_specialfields'],
            'metaengage' => [$this, 'block_metaengage'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        yield "
";
        // line 76
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/hero"), "html", null, true);
        yield "
";
        // line 77
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/page-node"), "html", null, true);
        yield "

";
        // line 79
        $context["classes"] = ["hero__banner", "hero__banner--static", ((        // line 82
($context["no_image"] ?? null)) ? ("no-image") : (""))];
        // line 84
        yield "
<div";
        // line 85
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 85), 85, $this->source), "html", null, true);
        yield ">
  <div class=\"container\">
    <div class=\"cover-wrap\">

      ";
        // line 89
        if (($context["node_edit_url"] ?? null)) {
            // line 90
            yield "        <div class=\"hero-action-button\">
          <a href=\"";
            // line 91
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["node_edit_url"] ?? null), 91, $this->source), "html", null, true);
            yield "\" title=\"";
            echo t("Edit content", array());
            yield "\"
             class=\"btn btn-raised btn-default btn-floating\">
            <svg class=\"icon-gray icon-medium\" aria-hidden=\"true\">
              <title>";
            // line 94
            echo t("Edit content", array());
            yield "</title>
              <use xlink:href=\"#icon-edit\"></use>
            </svg>
          </a>
        </div>
      ";
        }
        // line 100
        yield "
      ";
        // line 101
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 101), "moderation", [], "any", false, false, true, 101)) {
            // line 102
            yield "        <div class=\"metainfo card_metainfo\">
          ";
            // line 103
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 103), "moderation", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 106
        yield "
      ";
        // line 107
        yield from $this->unwrap()->yieldBlock('card_prefix', $context, $blocks);
        // line 109
        yield "
      ";
        // line 110
        yield from $this->unwrap()->yieldBlock('card_title', $context, $blocks);
        // line 117
        yield "
      ";
        // line 118
        if (($context["display_submitted"] ?? null)) {
            // line 119
            yield "        ";
            yield from $this->unwrap()->yieldBlock('metainfo', $context, $blocks);
            // line 153
            yield "      ";
        }
        // line 154
        yield "
      ";
        // line 155
        yield from $this->unwrap()->yieldBlock('card_suffix', $context, $blocks);
        // line 162
        yield "
      <div class=\"hero-footer\">

        ";
        // line 165
        yield from $this->unwrap()->yieldBlock('nodefull_specialfields', $context, $blocks);
        // line 167
        yield "
        <div class=\"hero-footer__list\">

          ";
        // line 170
        yield from $this->unwrap()->yieldBlock('metaengage', $context, $blocks);
        // line 234
        yield "
        </div>
        ";
        // line 236
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "shariff_field", [], "any", false, false, true, 236) && (($context["visibility_icon"] ?? null) == "public"))) {
            // line 237
            yield "          <div class=\"hero-footer__share\">
            <span>";
            // line 238
            echo t("Share this page", array());
            yield "</span>
            ";
            // line 239
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "shariff_field", [], "any", false, false, true, 239), 239, $this->source), "html", null, true);
            yield "
          </div>
        ";
        }
        // line 242
        yield "
      </div>
    </div>

  </div>

</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["no_image", "attributes", "node_edit_url", "content", "display_submitted", "visibility_icon", "title_prefix", "title_attributes", "url", "label", "title_suffix", "author_picture", "author", "created_date_formatted", "visibility_label", "group_link", "node_image", "comment_field_status", "comment_count", "views_count", "views_label", "users_allowed_to_invite", "invite_content"]);        return; yield '';
    }

    // line 107
    public function block_card_prefix($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "      ";
        return; yield '';
    }

    // line 110
    public function block_card_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 111, $this->source), "html", null, true);
        yield "
        <h1";
        // line 112
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 112, $this->source), "html", null, true);
        yield " class=\"teaser__title\">
          <a href=\"";
        // line 113
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 113, $this->source), "html", null, true);
        yield "\" rel=\"bookmark\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 113, $this->source), "html", null, true);
        yield "</a>
        </h1>
        ";
        // line 115
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 115, $this->source), "html", null, true);
        yield "
      ";
        return; yield '';
    }

    // line 119
    public function block_metainfo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 120
        yield "          <header class=\"metainfo\">

            <div class=\"metainfo__avatar\">
              ";
        // line 123
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 123, $this->source), "html", null, true);
        yield "
            </div>

            <div class=\"metainfo__content\">
              ";
        // line 127
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author"] ?? null), 127, $this->source), "html", null, true);
        yield "
              <span class=\"metainfo__published-date\">&bullet; ";
        // line 128
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created_date_formatted"] ?? null), 128, $this->source), "html", null, true);
        yield " </span>

              ";
        // line 130
        if ((($context["visibility_icon"] ?? null) && ($context["visibility_label"] ?? null))) {
            // line 131
            yield "                &bullet;
                <div class=\"badge badge--large\">
                  <span class=\"badge__container\">
                    <svg class=\"badge__icon\">
                      <title>";
            // line 135
            echo t("The visibility of this content is set to @visibility_label", array("@visibility_label" => ($context["visibility_label"] ?? null), ));
            yield " </title>
                      <use xlink:href=\"#icon-";
            // line 136
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["visibility_icon"] ?? null), 136, $this->source), "html", null, true);
            yield "\"></use>
                    </svg>
                    <span class=\"badge__label\">&nbsp;</span>
                    <span class=\"badge__label badge__label--description\">";
            // line 139
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["visibility_label"] ?? null), 139, $this->source)), "html", null, true);
            yield "</span>
                  </span>
                </div>
              ";
        }
        // line 143
        yield "
              <div>
                ";
        // line 145
        if (($context["group_link"] ?? null)) {
            // line 146
            yield "                  ";
            echo t("in group @group_link", array("@group_link" => ($context["group_link"] ?? null), ));
            // line 147
            yield "                ";
        }
        // line 148
        yield "              </div>
            </div>

          </header>
        ";
        return; yield '';
    }

    // line 155
    public function block_card_suffix($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 156
        yield "        ";
        if (($context["node_image"] ?? null)) {
            // line 157
            yield "          <div class=\"hero-image\">
            ";
            // line 158
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["node_image"] ?? null), 158, $this->source), "html", null, true);
            yield "
          </div>
        ";
        }
        // line 161
        yield "      ";
        return; yield '';
    }

    // line 165
    public function block_nodefull_specialfields($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "        ";
        return; yield '';
    }

    // line 170
    public function block_metaengage($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 171
        yield "            <div class=\"meta-engage\">
              <div class=\"hero-footer__list-left\">
                ";
        // line 173
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["comment_field_status"] ?? null))) {
            // line 174
            yield "                  <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 174, $this->source), "html", null, true);
            yield "#section-comments\" class=\"badge badge--large\"
                     title=\"";
            // line 175
            echo t("Total amount of comments", array());
            yield "\">
                    <span class=\"badge__container\">
                      <svg class=\"badge__icon\" aria-hidden=\"true\">
                        <title>";
            // line 178
            echo t("Total amount of comments", array());
            yield "</title>
                        <use xlink:href=\"#icon-comment\"></use>
                      </svg>
                      <span class=\"badge__label\">
                        ";
            // line 182
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_count"] ?? null), 182, $this->source), "html", null, true);
            yield "
                      </span>
                      <span class=\"badge__label badge__label--description\">
                        ";
            // line 185
            echo \Drupal::translation()->formatPlural(abs(            // line 187
($context["comment_count"] ?? null)), "comment", "comments", array());
            // line 190
            yield "                      </span>
                    </span>
                  </a>
                ";
        }
        // line 194
        yield "
                ";
        // line 195
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "like_and_dislike", [], "any", false, false, true, 195), 195, $this->source), "html", null, true);
        yield "

                ";
        // line 197
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["views_count"] ?? null)) && ($context["views_label"] ?? null))) {
            // line 198
            yield "                  <div class=\"badge badge--large\">
                    <span class=\"badge__container\">
                      <svg class=\"badge__icon\">
                        <title>";
            // line 201
            echo t("Total amount of views", array());
            yield "</title>
                        <use xlink:href=\"#icon-views\"></use>
                      </svg>
                      <span class=\"badge__label\">
                        ";
            // line 205
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["views_count"] ?? null), 205, $this->source), "html", null, true);
            yield "
                      </span>
                      <span class=\"badge__label badge__label--description\">
                        ";
            // line 208
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["views_label"] ?? null), 208, $this->source), "html", null, true);
            yield "
                      </span>
                    </span>
                  </div>
                ";
        }
        // line 213
        yield "              </div>

              ";
        // line 215
        if ( !Twig\Extension\CoreExtension::testEmpty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "flag_follow_content", [], "any", false, false, true, 215)))) {
            // line 216
            yield "                <div class=\"hero_btn-group\">
                  <div class=\"meta-follow\">
                    ";
            // line 218
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "flag_follow_content", [], "any", false, false, true, 218), 218, $this->source), "html", null, true);
            yield "
                  </div>

                  ";
            // line 221
            if (($context["users_allowed_to_invite"] ?? null)) {
                // line 222
                yield "                    <div class=\"meta-invite\">
                      <button type=\"button\" autocomplete=\"off\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"btn btn-default btn-block btn-sm dropdown-toggle\">";
                // line 223
                echo t("Invite", array());
                yield "<span class=\"caret\"></span></button>
                      <div class=\"dropdown-menu dropdown-menu--invite\">
                        ";
                // line 225
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["invite_content"] ?? null), 225, $this->source), "html", null, true);
                yield "
                      </div>
                    </div>
                  ";
            }
            // line 229
            yield "                </div>
              ";
        }
        // line 231
        yield "
            </div>
          ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "node--hero--sky.html.twig";
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
        return array (  430 => 231,  426 => 229,  419 => 225,  414 => 223,  411 => 222,  409 => 221,  403 => 218,  399 => 216,  397 => 215,  393 => 213,  385 => 208,  379 => 205,  372 => 201,  367 => 198,  365 => 197,  360 => 195,  357 => 194,  351 => 190,  349 => 187,  348 => 185,  342 => 182,  335 => 178,  329 => 175,  324 => 174,  322 => 173,  318 => 171,  314 => 170,  306 => 165,  301 => 161,  295 => 158,  292 => 157,  289 => 156,  285 => 155,  276 => 148,  273 => 147,  270 => 146,  268 => 145,  264 => 143,  257 => 139,  251 => 136,  247 => 135,  241 => 131,  239 => 130,  234 => 128,  230 => 127,  223 => 123,  218 => 120,  214 => 119,  207 => 115,  200 => 113,  196 => 112,  191 => 111,  187 => 110,  179 => 107,  166 => 242,  160 => 239,  156 => 238,  153 => 237,  151 => 236,  147 => 234,  145 => 170,  140 => 167,  138 => 165,  133 => 162,  131 => 155,  128 => 154,  125 => 153,  122 => 119,  120 => 118,  117 => 117,  115 => 110,  112 => 109,  110 => 107,  107 => 106,  101 => 103,  98 => 102,  96 => 101,  93 => 100,  84 => 94,  76 => 91,  73 => 90,  71 => 89,  64 => 85,  61 => 84,  59 => 82,  58 => 79,  53 => 77,  49 => 76,  46 => 75,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--hero--sky.html.twig", "themes/contrib/socialblue/templates/node/node--hero--sky.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 79, "if" => 89, "trans" => 91, "block" => 107);
        static $filters = array("escape" => 76, "capitalize" => 139, "render" => 215);
        static $functions = array("attach_library" => 76);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans', 'block'],
                ['escape', 'capitalize', 'render'],
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
