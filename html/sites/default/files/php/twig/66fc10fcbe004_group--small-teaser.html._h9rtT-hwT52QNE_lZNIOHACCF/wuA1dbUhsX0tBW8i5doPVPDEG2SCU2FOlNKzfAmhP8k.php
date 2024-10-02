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

/* themes/contrib/socialbase/templates/group/group--small-teaser.html.twig */
class __TwigTemplate_ad89332ce42866b75421d9bc83be2033 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'location' => [$this, 'block_location'],
            'teaser_image' => [$this, 'block_teaser_image'],
            'extra_text' => [$this, 'block_extra_text'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "node--small-teaser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--small-teaser.html.twig", "themes/contrib/socialbase/templates/group/group--small-teaser.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["location", "content", "closed_group_lock", "secret_group_shield", "group_type", "group_members"]);    }

    // line 4
    public function block_location($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        yield "  ";
        if (($context["location"] ?? null)) {
            // line 6
            yield "    <div class=\"teaser--small__location\"> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["location"] ?? null), 6, $this->source), "html", null, true);
            yield " </div>
  ";
        }
        return; yield '';
    }

    // line 10
    public function block_teaser_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        yield "  <div class=\"teaser--small__media\">
    ";
        // line 12
        if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((($__internal_compile_0 = ($context["content"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["field_group_image"] ?? null) : null)), "<img>"))) {
            // line 13
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = ($context["content"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["field_group_image"] ?? null) : null), 13, $this->source), "html", null, true);
            yield "
    ";
        } else {
            // line 15
            yield "      <svg class=\"teaser--small__type-icon\">
        <title>";
            // line 16
            echo t("Group", array());
            yield "</title>
        <use xlink:href=\"#icon-group\"></use>
      </svg>
    ";
        }
        // line 20
        yield "  </div>
";
        return; yield '';
    }

    // line 23
    public function block_extra_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "  <div class=\"teaser--small__meta\">
    ";
        // line 25
        if (($context["closed_group_lock"] ?? null)) {
            // line 26
            yield "      <svg class=\"icon-gray icon-small\" aria-hidden=\"true\">
        <title>";
            // line 27
            echo t("Closed group", array());
            yield "</title>
        <use xlink:href=\"#icon-lock\"></use>
      </svg>
    ";
        } elseif (        // line 30
($context["secret_group_shield"] ?? null)) {
            // line 31
            yield "      <svg class=\"icon-gray icon-small\" aria-hidden=\"true\">
        <title>";
            // line 32
            echo t("Secret group", array());
            yield "</title>
        <use xlink:href=\"#icon-shield\"></use>
      </svg>
    ";
        }
        // line 36
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["group_type"] ?? null), 36, $this->source), "html", null, true);
        yield " &middot; ";
        echo \Drupal::translation()->formatPlural(abs(($context["group_members"] ?? null)), "1 member", "@count members", array());
        // line 37
        yield "  </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/group/group--small-teaser.html.twig";
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
        return array (  134 => 37,  129 => 36,  122 => 32,  119 => 31,  117 => 30,  111 => 27,  108 => 26,  106 => 25,  103 => 24,  99 => 23,  93 => 20,  86 => 16,  83 => 15,  77 => 13,  75 => 12,  72 => 11,  68 => 10,  59 => 6,  56 => 5,  52 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/group/group--small-teaser.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/group/group--small-teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 5, "trans" => 16);
        static $filters = array("escape" => 6, "striptags" => 12, "render" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 'striptags', 'render'],
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
