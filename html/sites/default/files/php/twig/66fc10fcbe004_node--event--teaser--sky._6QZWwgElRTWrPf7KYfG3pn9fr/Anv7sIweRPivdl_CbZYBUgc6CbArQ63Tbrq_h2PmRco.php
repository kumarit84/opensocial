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

/* themes/contrib/socialblue/templates/node/event/node--event--teaser--sky.html.twig */
class __TwigTemplate_5a00c6164d83075a6e35f854c13c1ebb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'card_body' => [$this, 'block_card_body'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "node--event--teaser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--event--teaser.html.twig", "themes/contrib/socialblue/templates/node/event/node--event--teaser--sky.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);    }

    // line 3
    public function block_card_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "
  ";
        // line 5
        yield from         $this->loadTemplate("themes/contrib/socialblue/templates/node/event/node--event--teaser--sky.html.twig", "themes/contrib/socialblue/templates/node/event/node--event--teaser--sky.html.twig", 5, "2123491413")->unwrap()->yield($context);
        // line 13
        yield "
  ";
        // line 14
        if ( !Twig\Extension\CoreExtension::testEmpty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_event_location", [], "any", false, false, true, 14)))) {
            // line 15
            yield "    ";
            yield from             $this->loadTemplate("themes/contrib/socialblue/templates/node/event/node--event--teaser--sky.html.twig", "themes/contrib/socialblue/templates/node/event/node--event--teaser--sky.html.twig", 15, "1298548617")->unwrap()->yield($context);
            // line 23
            yield "  ";
        }
        // line 24
        yield "
  ";
        // line 25
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "group_name", [], "any", false, false, true, 25)) {
            // line 26
            yield "    ";
            yield from             $this->loadTemplate("themes/contrib/socialblue/templates/node/event/node--event--teaser--sky.html.twig", "themes/contrib/socialblue/templates/node/event/node--event--teaser--sky.html.twig", 26, "610013312")->unwrap()->yield($context);
            // line 34
            yield "  ";
        }
        // line 35
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialblue/templates/node/event/node--event--teaser--sky.html.twig";
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
        return array (  81 => 35,  78 => 34,  75 => 26,  73 => 25,  70 => 24,  67 => 23,  64 => 15,  62 => 14,  59 => 13,  57 => 5,  54 => 4,  50 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialblue/templates/node/event/node--event--teaser--sky.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialblue/templates/node/event/node--event--teaser--sky.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("embed" => 5, "if" => 14);
        static $filters = array("render" => 14);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['embed', 'if'],
                ['render'],
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


/* themes/contrib/socialblue/templates/node/event/node--event--teaser--sky.html.twig */
class __TwigTemplate_5a00c6164d83075a6e35f854c13c1ebb___2123491413 extends Template
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
        // line 5
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "themes/contrib/socialblue/templates/node/event/node--event--teaser--sky.html.twig", 5);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["event_date"]);    }

    // line 6
    public function block_field_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "event";
        return; yield '';
    }

    // line 7
    public function block_svg_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo t("Event date", array());
        return; yield '';
    }

    // line 8
    public function block_field_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        yield "      <span class=\"sr-only\">";
        echo t("Event date", array());
        yield " </span>
      ";
        // line 10
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["event_date"] ?? null), 10, $this->source), "html", null, true);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialblue/templates/node/event/node--event--teaser--sky.html.twig";
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
        return array (  207 => 10,  202 => 9,  198 => 8,  190 => 7,  182 => 6,  170 => 5,  81 => 35,  78 => 34,  75 => 26,  73 => 25,  70 => 24,  67 => 23,  64 => 15,  62 => 14,  59 => 13,  57 => 5,  54 => 4,  50 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialblue/templates/node/event/node--event--teaser--sky.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialblue/templates/node/event/node--event--teaser--sky.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 7);
        static $filters = array("escape" => 10);
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


/* themes/contrib/socialblue/templates/node/event/node--event--teaser--sky.html.twig */
class __TwigTemplate_5a00c6164d83075a6e35f854c13c1ebb___1298548617 extends Template
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
        // line 15
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "themes/contrib/socialblue/templates/node/event/node--event--teaser--sky.html.twig", 15);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);    }

    // line 16
    public function block_field_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "location";
        return; yield '';
    }

    // line 17
    public function block_svg_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo t("The event will take place at the", array());
        return; yield '';
    }

    // line 18
    public function block_field_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        yield "<span class=\"sr-only\">";
        echo t("The event will take place at the", array());
        yield " </span>
        ";
        // line 20
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_event_location", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialblue/templates/node/event/node--event--teaser--sky.html.twig";
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
        return array (  332 => 20,  327 => 19,  323 => 18,  315 => 17,  307 => 16,  295 => 15,  207 => 10,  202 => 9,  198 => 8,  190 => 7,  182 => 6,  170 => 5,  81 => 35,  78 => 34,  75 => 26,  73 => 25,  70 => 24,  67 => 23,  64 => 15,  62 => 14,  59 => 13,  57 => 5,  54 => 4,  50 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialblue/templates/node/event/node--event--teaser--sky.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialblue/templates/node/event/node--event--teaser--sky.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 17);
        static $filters = array("escape" => 20);
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


/* themes/contrib/socialblue/templates/node/event/node--event--teaser--sky.html.twig */
class __TwigTemplate_5a00c6164d83075a6e35f854c13c1ebb___610013312 extends Template
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
        // line 26
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "themes/contrib/socialblue/templates/node/event/node--event--teaser--sky.html.twig", 26);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);    }

    // line 27
    public function block_field_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "group";
        return; yield '';
    }

    // line 28
    public function block_svg_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo t("This event is posted in", array());
        return; yield '';
    }

    // line 29
    public function block_field_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        yield "<span class=\"sr-only\">";
        echo t("This event is posted in", array());
        yield " </span>
        ";
        // line 31
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "group_name", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialblue/templates/node/event/node--event--teaser--sky.html.twig";
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
        return array (  457 => 31,  452 => 30,  448 => 29,  440 => 28,  432 => 27,  420 => 26,  332 => 20,  327 => 19,  323 => 18,  315 => 17,  307 => 16,  295 => 15,  207 => 10,  202 => 9,  198 => 8,  190 => 7,  182 => 6,  170 => 5,  81 => 35,  78 => 34,  75 => 26,  73 => 25,  70 => 24,  67 => 23,  64 => 15,  62 => 14,  59 => 13,  57 => 5,  54 => 4,  50 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialblue/templates/node/event/node--event--teaser--sky.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialblue/templates/node/event/node--event--teaser--sky.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 28);
        static $filters = array("escape" => 31);
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
