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

/* themes/contrib/socialblue/templates/node/event/node--event--hero--sky.html.twig */
class __TwigTemplate_467f9182fe8f7a83ee1387a6263b9586 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'metainfo' => [$this, 'block_metainfo'],
            'card_prefix' => [$this, 'block_card_prefix'],
            'card_suffix' => [$this, 'block_card_suffix'],
            'nodefull_specialfields' => [$this, 'block_nodefull_specialfields'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "node--hero--sky.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--hero--sky.html.twig", "themes/contrib/socialblue/templates/node/event/node--event--hero--sky.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["author_picture", "author", "visibility_icon", "visibility_label", "group_link", "node_image", "event_date_advanced", "event_date", "content", "logged_in", "event_location_address", "event_enrollment"]);    }

    // line 3
    public function block_metainfo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "  <header class=\"metainfo\">

    <div class=\"metainfo__avatar\">
      ";
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 7, $this->source), "html", null, true);
        yield "
    </div>

    <div class=\"metainfo__content\">
      ";
        // line 11
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author"] ?? null), 11, $this->source), "html", null, true);
        yield "

      ";
        // line 13
        if ((($context["visibility_icon"] ?? null) && ($context["visibility_label"] ?? null))) {
            // line 14
            yield "        &bullet;
        <div class=\"badge badge--large\">
            <span class=\"badge__container\">
              <svg class=\"badge__icon\">
                <title>";
            // line 18
            echo t("Visibility:", array());
            yield "</title>
                <use xlink:href=\"#icon-";
            // line 19
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["visibility_icon"] ?? null), 19, $this->source), "html", null, true);
            yield "\"></use>
              </svg>
              <span class=\"badge__label\">&nbsp;</span>
              <span class=\"badge__label badge__label--description\">";
            // line 22
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["visibility_label"] ?? null), 22, $this->source)), "html", null, true);
            yield "</span>
            </span>
        </div>
      ";
        }
        // line 26
        yield "
      <div>
        ";
        // line 28
        if (($context["group_link"] ?? null)) {
            // line 29
            yield "          ";
            echo t("in group @group_link", array("@group_link" => ($context["group_link"] ?? null), ));
            // line 30
            yield "        ";
        }
        // line 31
        yield "      </div>
    </div>

  </header>
";
        return; yield '';
    }

    // line 37
    public function block_card_prefix($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        yield "  ";
        if (($context["node_image"] ?? null)) {
            // line 39
            yield "    <div class=\"hero-image\">
      ";
            // line 40
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["node_image"] ?? null), 40, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        return; yield '';
    }

    // line 45
    public function block_card_suffix($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 48
    public function block_nodefull_specialfields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        yield "  <div class=\"hero-footer__header\">
    <div class=\"hero-footer__text\">

      <div class=\"article__special-fields\">
        ";
        // line 58
        yield "        ";
        if (array_key_exists("event_date_advanced", $context)) {
            // line 59
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["event_date_advanced"] ?? null), 59, $this->source), "html", null, true);
            yield "
        ";
        } else {
            // line 61
            yield "          <div class=\"article__special-field\">
            <svg class=\"article__special-fields-icon\" aria-hidden=\"true\">
              <title>";
            // line 63
            echo t("Event date", array());
            yield "</title>
              <use xlink:href=\"#icon-schedule\"></use>
            </svg>
            <span class=\"sr-only\">";
            // line 66
            echo t("Event date", array());
            yield "</span>
            <span class=\"inline-center\">";
            // line 67
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["event_date"] ?? null), 67, $this->source), "html", null, true);
            yield "</span>
          </div>
        ";
        }
        // line 70
        yield "
        ";
        // line 71
        if (( !Twig\Extension\CoreExtension::testEmpty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_event_addtocal", [], "any", false, false, true, 71))) && ($context["logged_in"] ?? null))) {
            // line 72
            yield "          <div class=\"article__special-field\">
            <div class=\"hero_btn-group\">
              <div class=\"meta-addtocal\">
                ";
            // line 75
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_event_addtocal", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            yield "
              </div>
            </div>
          </div>
        ";
        }
        // line 80
        yield "
        ";
        // line 81
        if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_event_address", [], "any", false, false, true, 81)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_event_location", [], "any", false, false, true, 81)))) {
            // line 82
            yield "          ";
            // line 87
            yield "          ";
            if (array_key_exists("event_location_address", $context)) {
                // line 88
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["event_location_address"] ?? null), 88, $this->source), "html", null, true);
                yield "
          ";
            } else {
                // line 90
                yield "            <div class=\"article__special-field\">
              <svg class=\"article__special-fields-icon\">
                <title>";
                // line 92
                echo t("Event location", array());
                yield "</title>
                <use xlink:href=\"#icon-location\"></use>
              </svg>
              <span class=\"sr-only\">";
                // line 95
                echo t("Event location", array());
                yield "</span>
              <span class=\"inline-center\">
                ";
                // line 97
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_event_location", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
                yield "
                ";
                // line 98
                if (( !Twig\Extension\CoreExtension::testEmpty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_event_address", [], "any", false, false, true, 98))) &&  !Twig\Extension\CoreExtension::testEmpty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_event_location", [], "any", false, false, true, 98))))) {
                    yield " &bullet; ";
                }
                // line 99
                yield "                ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_event_address", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
                yield "
              </span>
            </div>
          ";
            }
            // line 103
            yield "        ";
        }
        // line 104
        yield "
      </div>
    </div>

    <div class=\"hero-footer__cta\">
      <div class=\"btn-group\">
        ";
        // line 110
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["event_enrollment"] ?? null), 110, $this->source), "html", null, true);
        yield "
      </div>
    </div>

  </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialblue/templates/node/event/node--event--hero--sky.html.twig";
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
        return array (  261 => 110,  253 => 104,  250 => 103,  242 => 99,  238 => 98,  234 => 97,  229 => 95,  223 => 92,  219 => 90,  213 => 88,  210 => 87,  208 => 82,  206 => 81,  203 => 80,  195 => 75,  190 => 72,  188 => 71,  185 => 70,  179 => 67,  175 => 66,  169 => 63,  165 => 61,  159 => 59,  156 => 58,  150 => 49,  146 => 48,  139 => 45,  130 => 40,  127 => 39,  124 => 38,  120 => 37,  111 => 31,  108 => 30,  105 => 29,  103 => 28,  99 => 26,  92 => 22,  86 => 19,  82 => 18,  76 => 14,  74 => 13,  69 => 11,  62 => 7,  57 => 4,  53 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialblue/templates/node/event/node--event--hero--sky.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialblue/templates/node/event/node--event--hero--sky.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 13, "trans" => 18);
        static $filters = array("escape" => 7, "capitalize" => 22, "render" => 71);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 'capitalize', 'render'],
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
