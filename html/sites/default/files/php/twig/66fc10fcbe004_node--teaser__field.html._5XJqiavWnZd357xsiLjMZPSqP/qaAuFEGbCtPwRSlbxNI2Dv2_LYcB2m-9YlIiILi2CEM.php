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

/* node--teaser__field.html.twig */
class __TwigTemplate_7958507a106328cd75a540bdbbb0866e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'svg_title' => [$this, 'block_svg_title'],
            'field_icon' => [$this, 'block_field_icon'],
            'field_value' => [$this, 'block_field_value'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"teaser__content-line\">
  <svg class=\"teaser__content-type-icon\" aria-hidden=\"true\">
    ";
        // line 3
        yield from $this->unwrap()->yieldBlock('svg_title', $context, $blocks);
        // line 4
        yield "    <use xlink:href=\"#icon-";
        yield from $this->unwrap()->yieldBlock('field_icon', $context, $blocks);
        yield "\"></use>
  </svg>
  <div class=\"teaser__content-text\">
    ";
        // line 7
        yield from $this->unwrap()->yieldBlock('field_value', $context, $blocks);
        // line 8
        yield "  </div>
</div>
";
        return; yield '';
    }

    // line 3
    public function block_svg_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield " ";
        return; yield '';
    }

    // line 4
    public function block_field_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "label";
        return; yield '';
    }

    // line 7
    public function block_field_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield " ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "node--teaser__field.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  81 => 7,  73 => 4,  65 => 3,  58 => 8,  56 => 7,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--teaser__field.html.twig", "themes/contrib/socialbase/templates/node/node--teaser__field.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 3);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block'],
                [],
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
