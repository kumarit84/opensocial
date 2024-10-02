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

/* node--teaser.html.twig */
class __TwigTemplate_eb584915fd4c57a91319f24acd489c58 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'card_teaser_type' => [$this, 'block_card_teaser_type'],
            'card_image' => [$this, 'block_card_image'],
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
        // line 68
        yield "
";
        // line 69
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/teaser"), "html", null, true);
        yield "
";
        // line 70
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/page-node"), "html", null, true);
        yield "

";
        // line 73
        $context["classes"] = ["teaser", ("teaser-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 75
($context["node"] ?? null), "bundle", [], "any", false, false, true, 75), 75, $this->source))), (((        // line 76
($context["view_mode"] ?? null) == "teaser")) ? ("card") : ("")), (((        // line 77
($context["view_mode"] ?? null) == "activity")) ? ("teaser--stream") : ("")), (((        // line 78
($context["view_mode"] ?? null) == "activity_comment")) ? ("teaser--stream") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 79
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 79)) ? ("promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 80
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 80)) ? ("sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 81
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 81)) ? ("teaser--unpublished") : ("")), ((        // line 82
($context["no_image"] ?? null)) ? ("no-image") : (""))];
        // line 85
        yield "
<div";
        // line 86
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 86), "removeAttribute", ["dir"], "method", false, false, true, 86), 86, $this->source), "html", null, true);
        yield ">
  ";
        // line 87
        if (($context["status_label"] ?? null)) {
            // line 88
            yield "    <div class=\"node--unpublished__label\">
      ";
            // line 89
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["status_label"] ?? null), 89, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 92
        yield "
  <div class='teaser__image'>

    ";
        // line 95
        if (((($context["view_mode"] ?? null) == "teaser") || ($context["no_image"] ?? null))) {
            // line 96
            yield "      ";
            yield from $this->unwrap()->yieldBlock('card_teaser_type', $context, $blocks);
            // line 110
            yield "    ";
        }
        // line 111
        yield "
    ";
        // line 112
        yield from $this->unwrap()->yieldBlock('card_image', $context, $blocks);
        // line 115
        yield "
  </div>

  <div class='teaser__body'>
    <div class=\"teaser__content\">

      ";
        // line 121
        yield from $this->unwrap()->yieldBlock('card_title', $context, $blocks);
        // line 129
        yield from $this->unwrap()->yieldBlock('card_body', $context, $blocks);
        // line 173
        yield "    </div>

    <div class=\"card__actionbar\">
      ";
        // line 176
        yield from $this->unwrap()->yieldBlock('card_actionbar', $context, $blocks);
        // line 221
        yield "    </div>

  </div>

</div>

";
        // line 227
        if (((($context["view_mode"] ?? null) == "activity") && CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_book_comments", [], "any", false, false, true, 227))) {
            // line 228
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_book_comments", [], "any", false, false, true, 228), 228, $this->source), "html", null, true);
            yield "
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "no_image", "attributes", "status_label", "content", "url", "label", "topic_type_icon", "node_image", "title_prefix", "title_attributes", "title_suffix", "display_submitted", "topic_type", "visibility_icon", "visibility_label", "likes_count", "comment_count"]);        return; yield '';
    }

    // line 96
    public function block_card_teaser_type($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        yield "        <a href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 97, $this->source), "html", null, true);
        yield "\" aria-hidden=\"true\" title=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "bundle", [], "any", false, false, true, 97), 97, $this->source))), "html", null, true);
        yield ": &nbsp;";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 97, $this->source)))), "html", null, true);
        yield "\">
          <div class=\"teaser__teaser-type\">
            <svg class=\"teaser__teaser-type-icon\">
              <title>";
        // line 100
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "bundle", [], "any", false, false, true, 100), 100, $this->source))), "html", null, true);
        yield ": &nbsp;";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 100, $this->source)))), "html", null, true);
        yield "</title>
              ";
        // line 101
        if (($context["topic_type_icon"] ?? null)) {
            // line 102
            yield "                <use xlink:href=\"#";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topic_type_icon"] ?? null), 102, $this->source), "html", null, true);
            yield "\"></use>
              ";
        } else {
            // line 104
            yield "                <use xlink:href=\"#icon-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "bundle", [], "any", false, false, true, 104), 104, $this->source)), "html", null, true);
            yield "\"></use>
              ";
        }
        // line 106
        yield "            </svg>
          </div>
        </a>
      ";
        return; yield '';
    }

    // line 112
    public function block_card_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 113
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["node_image"] ?? null), 113, $this->source), "html", null, true);
        yield "
    ";
        return; yield '';
    }

    // line 121
    public function block_card_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 122
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 122, $this->source), "html", null, true);
        yield "
          <h4";
        // line 123
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 123, $this->source), "html", null, true);
        yield " class=\"teaser__title\">
            <a href=\"";
        // line 124
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 124, $this->source), "html", null, true);
        yield "\" rel=\"bookmark\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 124, $this->source), "html", null, true);
        yield "</a>
          </h4>
        ";
        // line 126
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 126, $this->source), "html", null, true);
        return; yield '';
    }

    // line 129
    public function block_card_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 130
        yield "
        ";
        // line 131
        if (($context["display_submitted"] ?? null)) {
            // line 132
            yield "          ";
            yield from             $this->loadTemplate("node--teaser.html.twig", "node--teaser.html.twig", 132, "167837113")->unwrap()->yield($context);
            // line 144
            yield "        ";
        }
        // line 145
        yield "
        ";
        // line 146
        if (($context["topic_type"] ?? null)) {
            // line 147
            yield "          ";
            yield from             $this->loadTemplate("node--teaser.html.twig", "node--teaser.html.twig", 147, "1261820328")->unwrap()->yield($context);
            // line 155
            yield "        ";
        }
        // line 156
        yield "
        ";
        // line 157
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "group_name", [], "any", false, false, true, 157)) {
            // line 158
            yield "          ";
            yield from             $this->loadTemplate("node--teaser.html.twig", "node--teaser.html.twig", 158, "1414851628")->unwrap()->yield($context);
            // line 166
            yield "        ";
        }
        // line 167
        yield "
        ";
        // line 168
        yield from         $this->loadTemplate("node--teaser.html.twig", "node--teaser.html.twig", 168, "1366424404")->unwrap()->yield($context);
        // line 171
        yield "
      ";
        return; yield '';
    }

    // line 176
    public function block_card_actionbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 177
        yield "
        ";
        // line 178
        if ((($context["visibility_icon"] ?? null) && ($context["visibility_label"] ?? null))) {
            // line 179
            yield "          <div class=\"badge teaser__badge\">
            <span class=\"badge__container\">
                <svg class=\"badge__icon\">
                  <title>";
            // line 182
            echo t("Visibility", array());
            yield "</title>
                  <use xlink:href=\"#icon-";
            // line 183
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["visibility_icon"] ?? null), 183, $this->source), "html", null, true);
            yield "\"></use>
                </svg>
                <span class=\"badge__label text-gray\">";
            // line 185
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["visibility_label"] ?? null), 185, $this->source)), "html", null, true);
            yield "</span>
            </span>
          </div>
        ";
        }
        // line 189
        yield "

        ";
        // line 191
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["likes_count"] ?? null))) {
            // line 192
            yield "          <div class=\"badge teaser__badge\">
            <span class=\"badge__container\">
              <svg class=\"badge__icon\">
                <title>";
            // line 195
            echo t("Total amount of likes", array());
            yield "</title>
                <use xlink:href=\"#icon-like\"></use>
              </svg>
              <span class=\"badge__label text-gray\">
                ";
            // line 199
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["likes_count"] ?? null), 199, $this->source), "html", null, true);
            yield "
              </span>
            </span>
          </div>
        ";
        }
        // line 204
        yield "
        ";
        // line 205
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["comment_count"] ?? null))) {
            // line 206
            yield "          <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 206, $this->source), "html", null, true);
            yield "#section-comments\" class=\"badge badge--pill teaser__badge\"
             title=\"";
            // line 207
            echo t("Total amount of comments", array());
            yield "\">
            <span class=\"badge__container\">
              <svg class=\"badge__icon\" aria-hidden=\"true\">
                <title>";
            // line 210
            echo t("Total amount of comments", array());
            yield "</title>
                <use xlink:href=\"#icon-comment\"></use>
              </svg>
              <span class=\"badge__label text-gray\">";
            // line 213
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_count"] ?? null), 213, $this->source), "html", null, true);
            yield "</span>
            </span>
          </a>
        ";
        }
        // line 217
        yield "
        ";
        // line 218
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 218), 218, $this->source), "html", null, true);
        yield "

      ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "node--teaser.html.twig";
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
        return array (  358 => 218,  355 => 217,  348 => 213,  342 => 210,  336 => 207,  331 => 206,  329 => 205,  326 => 204,  318 => 199,  311 => 195,  306 => 192,  304 => 191,  300 => 189,  293 => 185,  288 => 183,  284 => 182,  279 => 179,  277 => 178,  274 => 177,  270 => 176,  264 => 171,  262 => 168,  259 => 167,  256 => 166,  253 => 158,  251 => 157,  248 => 156,  245 => 155,  242 => 147,  240 => 146,  237 => 145,  234 => 144,  231 => 132,  229 => 131,  226 => 130,  222 => 129,  217 => 126,  210 => 124,  206 => 123,  201 => 122,  197 => 121,  189 => 113,  185 => 112,  177 => 106,  171 => 104,  165 => 102,  163 => 101,  157 => 100,  146 => 97,  142 => 96,  132 => 228,  130 => 227,  122 => 221,  120 => 176,  115 => 173,  113 => 129,  111 => 121,  103 => 115,  101 => 112,  98 => 111,  95 => 110,  92 => 96,  90 => 95,  85 => 92,  79 => 89,  76 => 88,  74 => 87,  70 => 86,  67 => 85,  65 => 82,  64 => 81,  63 => 80,  62 => 79,  61 => 78,  60 => 77,  59 => 76,  58 => 75,  57 => 73,  52 => 70,  48 => 69,  45 => 68,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--teaser.html.twig", "themes/contrib/socialbase/templates/node/node--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 73, "if" => 87, "block" => 96, "embed" => 132, "trans" => 182);
        static $filters = array("escape" => 69, "clean_class" => 75, "capitalize" => 97, "trim" => 97, "striptags" => 97, "render" => 97);
        static $functions = array("attach_library" => 69);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'embed', 'trans'],
                ['escape', 'clean_class', 'capitalize', 'trim', 'striptags', 'render'],
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


/* node--teaser.html.twig */
class __TwigTemplate_eb584915fd4c57a91319f24acd489c58___167837113 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'field_icon' => [$this, 'block_field_icon'],
            'svg_title' => [$this, 'block_svg_title'],
            'field_value' => [$this, 'block_field_value'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 132
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--teaser.html.twig", 132);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["date", "author"]);    }

    // line 133
    public function block_field_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "account_circle";
        return; yield '';
    }

    // line 134
    public function block_svg_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo t("Author name", array());
        return; yield '';
    }

    // line 135
    public function block_field_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 136
        yield "              <div class=\"teaser__published\">
                <span class=\"sr-only\">";
        // line 137
        echo t("Created on", array());
        yield " </span>
                <div class=\"teaser__published-date\">";
        // line 138
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 138, $this->source), "html", null, true);
        yield " <span aria-hidden=\"true\">&bullet;</span></div>
                <span class=\"sr-only\"> ";
        // line 139
        echo t("by", array());
        yield " </span>
                <div class=\"teaser__published-author\">";
        // line 140
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author"] ?? null), 140, $this->source), "html", null, true);
        yield "</div>
              </div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "node--teaser.html.twig";
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
        return array (  496 => 140,  492 => 139,  488 => 138,  484 => 137,  481 => 136,  477 => 135,  469 => 134,  461 => 133,  449 => 132,  358 => 218,  355 => 217,  348 => 213,  342 => 210,  336 => 207,  331 => 206,  329 => 205,  326 => 204,  318 => 199,  311 => 195,  306 => 192,  304 => 191,  300 => 189,  293 => 185,  288 => 183,  284 => 182,  279 => 179,  277 => 178,  274 => 177,  270 => 176,  264 => 171,  262 => 168,  259 => 167,  256 => 166,  253 => 158,  251 => 157,  248 => 156,  245 => 155,  242 => 147,  240 => 146,  237 => 145,  234 => 144,  231 => 132,  229 => 131,  226 => 130,  222 => 129,  217 => 126,  210 => 124,  206 => 123,  201 => 122,  197 => 121,  189 => 113,  185 => 112,  177 => 106,  171 => 104,  165 => 102,  163 => 101,  157 => 100,  146 => 97,  142 => 96,  132 => 228,  130 => 227,  122 => 221,  120 => 176,  115 => 173,  113 => 129,  111 => 121,  103 => 115,  101 => 112,  98 => 111,  95 => 110,  92 => 96,  90 => 95,  85 => 92,  79 => 89,  76 => 88,  74 => 87,  70 => 86,  67 => 85,  65 => 82,  64 => 81,  63 => 80,  62 => 79,  61 => 78,  60 => 77,  59 => 76,  58 => 75,  57 => 73,  52 => 70,  48 => 69,  45 => 68,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--teaser.html.twig", "themes/contrib/socialbase/templates/node/node--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 134);
        static $filters = array("escape" => 138);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
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


/* node--teaser.html.twig */
class __TwigTemplate_eb584915fd4c57a91319f24acd489c58___1261820328 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'field_icon' => [$this, 'block_field_icon'],
            'svg_title' => [$this, 'block_svg_title'],
            'field_value' => [$this, 'block_field_value'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 147
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--teaser.html.twig", 147);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["topic_type"]);    }

    // line 148
    public function block_field_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "label";
        return; yield '';
    }

    // line 149
    public function block_svg_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo t("Topic type:", array());
        return; yield '';
    }

    // line 150
    public function block_field_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 151
        yield "<span class=\"sr-only\">";
        echo t("Topic type:", array());
        yield "</span>
              ";
        // line 152
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topic_type"] ?? null), 152, $this->source), "html", null, true);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "node--teaser.html.twig";
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
        return array (  623 => 152,  618 => 151,  614 => 150,  606 => 149,  598 => 148,  586 => 147,  496 => 140,  492 => 139,  488 => 138,  484 => 137,  481 => 136,  477 => 135,  469 => 134,  461 => 133,  449 => 132,  358 => 218,  355 => 217,  348 => 213,  342 => 210,  336 => 207,  331 => 206,  329 => 205,  326 => 204,  318 => 199,  311 => 195,  306 => 192,  304 => 191,  300 => 189,  293 => 185,  288 => 183,  284 => 182,  279 => 179,  277 => 178,  274 => 177,  270 => 176,  264 => 171,  262 => 168,  259 => 167,  256 => 166,  253 => 158,  251 => 157,  248 => 156,  245 => 155,  242 => 147,  240 => 146,  237 => 145,  234 => 144,  231 => 132,  229 => 131,  226 => 130,  222 => 129,  217 => 126,  210 => 124,  206 => 123,  201 => 122,  197 => 121,  189 => 113,  185 => 112,  177 => 106,  171 => 104,  165 => 102,  163 => 101,  157 => 100,  146 => 97,  142 => 96,  132 => 228,  130 => 227,  122 => 221,  120 => 176,  115 => 173,  113 => 129,  111 => 121,  103 => 115,  101 => 112,  98 => 111,  95 => 110,  92 => 96,  90 => 95,  85 => 92,  79 => 89,  76 => 88,  74 => 87,  70 => 86,  67 => 85,  65 => 82,  64 => 81,  63 => 80,  62 => 79,  61 => 78,  60 => 77,  59 => 76,  58 => 75,  57 => 73,  52 => 70,  48 => 69,  45 => 68,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--teaser.html.twig", "themes/contrib/socialbase/templates/node/node--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 149);
        static $filters = array("escape" => 152);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
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


/* node--teaser.html.twig */
class __TwigTemplate_eb584915fd4c57a91319f24acd489c58___1414851628 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'field_icon' => [$this, 'block_field_icon'],
            'svg_title' => [$this, 'block_svg_title'],
            'field_value' => [$this, 'block_field_value'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 158
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--teaser.html.twig", 158);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);    }

    // line 159
    public function block_field_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "group";
        return; yield '';
    }

    // line 160
    public function block_svg_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo t("Group", array());
        return; yield '';
    }

    // line 161
    public function block_field_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 162
        yield "<span class=\"sr-only\">";
        echo t("This content is posted in", array());
        yield " </span>
              ";
        // line 163
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "group_name", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "node--teaser.html.twig";
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
        return array (  748 => 163,  743 => 162,  739 => 161,  731 => 160,  723 => 159,  711 => 158,  623 => 152,  618 => 151,  614 => 150,  606 => 149,  598 => 148,  586 => 147,  496 => 140,  492 => 139,  488 => 138,  484 => 137,  481 => 136,  477 => 135,  469 => 134,  461 => 133,  449 => 132,  358 => 218,  355 => 217,  348 => 213,  342 => 210,  336 => 207,  331 => 206,  329 => 205,  326 => 204,  318 => 199,  311 => 195,  306 => 192,  304 => 191,  300 => 189,  293 => 185,  288 => 183,  284 => 182,  279 => 179,  277 => 178,  274 => 177,  270 => 176,  264 => 171,  262 => 168,  259 => 167,  256 => 166,  253 => 158,  251 => 157,  248 => 156,  245 => 155,  242 => 147,  240 => 146,  237 => 145,  234 => 144,  231 => 132,  229 => 131,  226 => 130,  222 => 129,  217 => 126,  210 => 124,  206 => 123,  201 => 122,  197 => 121,  189 => 113,  185 => 112,  177 => 106,  171 => 104,  165 => 102,  163 => 101,  157 => 100,  146 => 97,  142 => 96,  132 => 228,  130 => 227,  122 => 221,  120 => 176,  115 => 173,  113 => 129,  111 => 121,  103 => 115,  101 => 112,  98 => 111,  95 => 110,  92 => 96,  90 => 95,  85 => 92,  79 => 89,  76 => 88,  74 => 87,  70 => 86,  67 => 85,  65 => 82,  64 => 81,  63 => 80,  62 => 79,  61 => 78,  60 => 77,  59 => 76,  58 => 75,  57 => 73,  52 => 70,  48 => 69,  45 => 68,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--teaser.html.twig", "themes/contrib/socialbase/templates/node/node--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 160);
        static $filters = array("escape" => 163);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
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


/* node--teaser.html.twig */
class __TwigTemplate_eb584915fd4c57a91319f24acd489c58___1366424404 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'field_body' => [$this, 'block_field_body'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 168
        return "node--teaser__body.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--teaser__body.html.twig", "node--teaser.html.twig", 168);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);    }

    // line 169
    public function block_field_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
        yield " ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "node--teaser.html.twig";
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
        return array (  846 => 169,  834 => 168,  748 => 163,  743 => 162,  739 => 161,  731 => 160,  723 => 159,  711 => 158,  623 => 152,  618 => 151,  614 => 150,  606 => 149,  598 => 148,  586 => 147,  496 => 140,  492 => 139,  488 => 138,  484 => 137,  481 => 136,  477 => 135,  469 => 134,  461 => 133,  449 => 132,  358 => 218,  355 => 217,  348 => 213,  342 => 210,  336 => 207,  331 => 206,  329 => 205,  326 => 204,  318 => 199,  311 => 195,  306 => 192,  304 => 191,  300 => 189,  293 => 185,  288 => 183,  284 => 182,  279 => 179,  277 => 178,  274 => 177,  270 => 176,  264 => 171,  262 => 168,  259 => 167,  256 => 166,  253 => 158,  251 => 157,  248 => 156,  245 => 155,  242 => 147,  240 => 146,  237 => 145,  234 => 144,  231 => 132,  229 => 131,  226 => 130,  222 => 129,  217 => 126,  210 => 124,  206 => 123,  201 => 122,  197 => 121,  189 => 113,  185 => 112,  177 => 106,  171 => 104,  165 => 102,  163 => 101,  157 => 100,  146 => 97,  142 => 96,  132 => 228,  130 => 227,  122 => 221,  120 => 176,  115 => 173,  113 => 129,  111 => 121,  103 => 115,  101 => 112,  98 => 111,  95 => 110,  92 => 96,  90 => 95,  85 => 92,  79 => 89,  76 => 88,  74 => 87,  70 => 86,  67 => 85,  65 => 82,  64 => 81,  63 => 80,  62 => 79,  61 => 78,  60 => 77,  59 => 76,  58 => 75,  57 => 73,  52 => 70,  48 => 69,  45 => 68,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--teaser.html.twig", "themes/contrib/socialbase/templates/node/node--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 169);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
