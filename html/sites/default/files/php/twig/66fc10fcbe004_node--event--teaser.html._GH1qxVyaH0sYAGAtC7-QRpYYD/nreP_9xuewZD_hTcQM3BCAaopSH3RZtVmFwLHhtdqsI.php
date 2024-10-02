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

/* node--event--teaser.html.twig */
class __TwigTemplate_821d28be514d36a9e6b6c07dfd155f84 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'card_teaser_type' => [$this, 'block_card_teaser_type'],
            'card_body' => [$this, 'block_card_body'],
            'card_actionbar' => [$this, 'block_card_actionbar'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "node--teaser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--teaser.html.twig", "node--event--teaser.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["url", "label", "event_type_icon", "node", "content", "event_type", "visibility_icon", "visibility_label"]);    }

    // line 3
    public function block_card_teaser_type($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "  <a href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 4, $this->source), "html", null, true);
        yield "\" aria-hidden=\"true\" title=\"";
        echo t("Event: &nbsp;", array());
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 4, $this->source)))), "html", null, true);
        yield "\">
    <div class=\"teaser__teaser-type\">
      <svg class=\"teaser__teaser-type-icon\" aria-hidden=\"true\">
        <title>";
        // line 7
        echo t("Event: &nbsp;", array());
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 7, $this->source)))), "html", null, true);
        yield "</title>
        ";
        // line 8
        if (($context["event_type_icon"] ?? null)) {
            // line 9
            yield "          <use xlink:href=\"#";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["event_type_icon"] ?? null), 9, $this->source), "html", null, true);
            yield "\"></use>
        ";
        } else {
            // line 11
            yield "          <use xlink:href=\"#icon-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "bundle", [], "any", false, false, true, 11), 11, $this->source)), "html", null, true);
            yield "\"></use>
        ";
        }
        // line 13
        yield "      </svg>
    </div>
  </a>
";
        return; yield '';
    }

    // line 18
    public function block_card_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        yield "
  ";
        // line 20
        yield from         $this->loadTemplate("node--event--teaser.html.twig", "node--event--teaser.html.twig", 20, "1195034332")->unwrap()->yield($context);
        // line 28
        yield "
  ";
        // line 29
        if ( !Twig\Extension\CoreExtension::testEmpty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_event_location", [], "any", false, false, true, 29)))) {
            // line 30
            yield "    ";
            yield from             $this->loadTemplate("node--event--teaser.html.twig", "node--event--teaser.html.twig", 30, "206735202")->unwrap()->yield($context);
            // line 38
            yield "  ";
        }
        // line 39
        yield "
  ";
        // line 40
        if (($context["event_type"] ?? null)) {
            // line 41
            yield "    ";
            yield from             $this->loadTemplate("node--event--teaser.html.twig", "node--event--teaser.html.twig", 41, "705028568")->unwrap()->yield($context);
            // line 49
            yield "  ";
        }
        // line 50
        yield "
  ";
        // line 51
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "group_name", [], "any", false, false, true, 51)) {
            // line 52
            yield "    ";
            yield from             $this->loadTemplate("node--event--teaser.html.twig", "node--event--teaser.html.twig", 52, "1664979127")->unwrap()->yield($context);
            // line 60
            yield "  ";
        }
        // line 61
        yield "
";
        return; yield '';
    }

    // line 64
    public function block_card_actionbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        yield "
  ";
        // line 66
        if ((($context["visibility_icon"] ?? null) && ($context["visibility_label"] ?? null))) {
            // line 67
            yield "    <div class=\"badge teaser__badge\">
      <span class=\"badge__container\">
        <svg class=\"badge__icon\">
           <title>";
            // line 70
            echo t("Visibility", array());
            yield "</title>
          <use xlink:href=\"#icon-";
            // line 71
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["visibility_icon"] ?? null), 71, $this->source), "html", null, true);
            yield "\"></use>
        </svg>
        <span class=\"badge__label text-gray\">";
            // line 73
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["visibility_label"] ?? null), 73, $this->source)), "html", null, true);
            yield "</span>
      </span>
    </div>
  ";
        }
        // line 77
        yield "
  ";
        // line 78
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "enrollments_count", [], "any", false, false, true, 78))) {
            // line 79
            yield "    <div class=\"badge teaser__badge\">
      <span class=\"badge__container\">
        <svg class=\"badge__icon\">
          <title>";
            // line 82
            echo t("Total amount of enrollments", array());
            yield "</title>
          <use xlink:href=\"#icon-person\"></use>
        </svg>
        <span class=\"badge__label text-gray\">
          ";
            // line 86
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "enrollments_count", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
            yield "
        </span>
      </span>
    </div>
  ";
        }
        // line 91
        yield "
  ";
        // line 92
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "ongoing", [], "any", false, false, true, 92)) {
            // line 93
            yield "    <span class=\"badge badge-primary teaser__badge\">
          ";
            // line 94
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "ongoing", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
            yield "
        </span>
  ";
        }
        // line 97
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "enrolled", [], "any", false, false, true, 97)) {
            // line 98
            yield "    <span class=\"badge badge-default teaser__badge\">
      ";
            // line 99
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "enrolled", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            yield "
    </span>
  ";
        }
        // line 102
        yield "
  ";
        // line 103
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
        yield "

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "node--event--teaser.html.twig";
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
        return array (  225 => 103,  222 => 102,  216 => 99,  213 => 98,  210 => 97,  204 => 94,  201 => 93,  199 => 92,  196 => 91,  188 => 86,  181 => 82,  176 => 79,  174 => 78,  171 => 77,  164 => 73,  159 => 71,  155 => 70,  150 => 67,  148 => 66,  145 => 65,  141 => 64,  135 => 61,  132 => 60,  129 => 52,  127 => 51,  124 => 50,  121 => 49,  118 => 41,  116 => 40,  113 => 39,  110 => 38,  107 => 30,  105 => 29,  102 => 28,  100 => 20,  97 => 19,  93 => 18,  85 => 13,  79 => 11,  73 => 9,  71 => 8,  66 => 7,  56 => 4,  52 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--event--teaser.html.twig", "themes/contrib/socialbase/templates/node/event/node--event--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 4, "if" => 8, "embed" => 20);
        static $filters = array("escape" => 4, "trim" => 4, "striptags" => 4, "render" => 4, "clean_class" => 11, "capitalize" => 73);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['trans', 'if', 'embed'],
                ['escape', 'trim', 'striptags', 'render', 'clean_class', 'capitalize'],
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


/* node--event--teaser.html.twig */
class __TwigTemplate_821d28be514d36a9e6b6c07dfd155f84___1195034332 extends Template
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
        // line 20
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--event--teaser.html.twig", 20);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["event_date"]);    }

    // line 21
    public function block_field_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "event";
        return; yield '';
    }

    // line 22
    public function block_svg_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "<title>";
        echo t("Event date", array());
        yield "</title>";
        return; yield '';
    }

    // line 23
    public function block_field_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "      <span class=\"sr-only\">";
        echo t("Event date", array());
        yield " </span>
      ";
        // line 25
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["event_date"] ?? null), 25, $this->source), "html", null, true);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "node--event--teaser.html.twig";
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
        return array (  355 => 25,  350 => 24,  346 => 23,  336 => 22,  328 => 21,  316 => 20,  225 => 103,  222 => 102,  216 => 99,  213 => 98,  210 => 97,  204 => 94,  201 => 93,  199 => 92,  196 => 91,  188 => 86,  181 => 82,  176 => 79,  174 => 78,  171 => 77,  164 => 73,  159 => 71,  155 => 70,  150 => 67,  148 => 66,  145 => 65,  141 => 64,  135 => 61,  132 => 60,  129 => 52,  127 => 51,  124 => 50,  121 => 49,  118 => 41,  116 => 40,  113 => 39,  110 => 38,  107 => 30,  105 => 29,  102 => 28,  100 => 20,  97 => 19,  93 => 18,  85 => 13,  79 => 11,  73 => 9,  71 => 8,  66 => 7,  56 => 4,  52 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--event--teaser.html.twig", "themes/contrib/socialbase/templates/node/event/node--event--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 22);
        static $filters = array("escape" => 25);
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


/* node--event--teaser.html.twig */
class __TwigTemplate_821d28be514d36a9e6b6c07dfd155f84___206735202 extends Template
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
        // line 30
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--event--teaser.html.twig", 30);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);    }

    // line 31
    public function block_field_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "location";
        return; yield '';
    }

    // line 32
    public function block_svg_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "<title>";
        echo t("Located at:", array());
        yield "</title>";
        return; yield '';
    }

    // line 33
    public function block_field_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        yield "<span class=\"sr-only\">";
        echo t("The event will take place at the", array());
        yield " </span>
        ";
        // line 35
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_event_location", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "node--event--teaser.html.twig";
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
        return array (  482 => 35,  477 => 34,  473 => 33,  463 => 32,  455 => 31,  443 => 30,  355 => 25,  350 => 24,  346 => 23,  336 => 22,  328 => 21,  316 => 20,  225 => 103,  222 => 102,  216 => 99,  213 => 98,  210 => 97,  204 => 94,  201 => 93,  199 => 92,  196 => 91,  188 => 86,  181 => 82,  176 => 79,  174 => 78,  171 => 77,  164 => 73,  159 => 71,  155 => 70,  150 => 67,  148 => 66,  145 => 65,  141 => 64,  135 => 61,  132 => 60,  129 => 52,  127 => 51,  124 => 50,  121 => 49,  118 => 41,  116 => 40,  113 => 39,  110 => 38,  107 => 30,  105 => 29,  102 => 28,  100 => 20,  97 => 19,  93 => 18,  85 => 13,  79 => 11,  73 => 9,  71 => 8,  66 => 7,  56 => 4,  52 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--event--teaser.html.twig", "themes/contrib/socialbase/templates/node/event/node--event--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 32);
        static $filters = array("escape" => 35);
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


/* node--event--teaser.html.twig */
class __TwigTemplate_821d28be514d36a9e6b6c07dfd155f84___705028568 extends Template
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
        // line 41
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--event--teaser.html.twig", 41);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["event_type"]);    }

    // line 42
    public function block_field_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "label";
        return; yield '';
    }

    // line 43
    public function block_svg_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "<title>";
        echo t("Event type", array());
        yield "</title>";
        return; yield '';
    }

    // line 44
    public function block_field_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        yield "<span class=\"sr-only\">";
        echo t("This event has type", array());
        yield " </span>
        ";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["event_type"] ?? null), 46, $this->source), "html", null, true);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "node--event--teaser.html.twig";
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
        return array (  609 => 46,  604 => 45,  600 => 44,  590 => 43,  582 => 42,  570 => 41,  482 => 35,  477 => 34,  473 => 33,  463 => 32,  455 => 31,  443 => 30,  355 => 25,  350 => 24,  346 => 23,  336 => 22,  328 => 21,  316 => 20,  225 => 103,  222 => 102,  216 => 99,  213 => 98,  210 => 97,  204 => 94,  201 => 93,  199 => 92,  196 => 91,  188 => 86,  181 => 82,  176 => 79,  174 => 78,  171 => 77,  164 => 73,  159 => 71,  155 => 70,  150 => 67,  148 => 66,  145 => 65,  141 => 64,  135 => 61,  132 => 60,  129 => 52,  127 => 51,  124 => 50,  121 => 49,  118 => 41,  116 => 40,  113 => 39,  110 => 38,  107 => 30,  105 => 29,  102 => 28,  100 => 20,  97 => 19,  93 => 18,  85 => 13,  79 => 11,  73 => 9,  71 => 8,  66 => 7,  56 => 4,  52 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--event--teaser.html.twig", "themes/contrib/socialbase/templates/node/event/node--event--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 43);
        static $filters = array("escape" => 46);
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


/* node--event--teaser.html.twig */
class __TwigTemplate_821d28be514d36a9e6b6c07dfd155f84___1664979127 extends Template
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
        // line 52
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--event--teaser.html.twig", 52);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);    }

    // line 53
    public function block_field_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "group";
        return; yield '';
    }

    // line 54
    public function block_svg_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "<title>";
        echo t("Group", array());
        yield "</title>";
        return; yield '';
    }

    // line 55
    public function block_field_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        yield "<span class=\"sr-only\">";
        echo t("This event is posted in", array());
        yield " </span>
        ";
        // line 57
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "group_name", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "node--event--teaser.html.twig";
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
        return array (  736 => 57,  731 => 56,  727 => 55,  717 => 54,  709 => 53,  697 => 52,  609 => 46,  604 => 45,  600 => 44,  590 => 43,  582 => 42,  570 => 41,  482 => 35,  477 => 34,  473 => 33,  463 => 32,  455 => 31,  443 => 30,  355 => 25,  350 => 24,  346 => 23,  336 => 22,  328 => 21,  316 => 20,  225 => 103,  222 => 102,  216 => 99,  213 => 98,  210 => 97,  204 => 94,  201 => 93,  199 => 92,  196 => 91,  188 => 86,  181 => 82,  176 => 79,  174 => 78,  171 => 77,  164 => 73,  159 => 71,  155 => 70,  150 => 67,  148 => 66,  145 => 65,  141 => 64,  135 => 61,  132 => 60,  129 => 52,  127 => 51,  124 => 50,  121 => 49,  118 => 41,  116 => 40,  113 => 39,  110 => 38,  107 => 30,  105 => 29,  102 => 28,  100 => 20,  97 => 19,  93 => 18,  85 => 13,  79 => 11,  73 => 9,  71 => 8,  66 => 7,  56 => 4,  52 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--event--teaser.html.twig", "themes/contrib/socialbase/templates/node/event/node--event--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 54);
        static $filters = array("escape" => 57);
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
