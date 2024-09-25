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

/* themes/contrib/socialbase/templates/form/input.html.twig */
class __TwigTemplate_8ba331fe7fa1bfb71675dca965235197 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        $context["classes"] = [((((        // line 24
($context["type"] ?? null) != "submit") && (($context["type"] ?? null) != "button"))) ? ("form-control") : ("")), (((        // line 25
($context["type"] ?? null) == "button")) ? ("btn") : ("")), (((        // line 26
($context["type"] ?? null) == "submit")) ? ("btn js-form-submit") : ("")), ((        // line 27
($context["float_right"] ?? null)) ? ("pull-right") : ("")), (((        // line 28
($context["button_level"] ?? null) == "raised")) ? ("btn-raised") : ("")), (((        // line 29
($context["button_type"] ?? null) == "default")) ? ("btn-default") : ("")), (((        // line 30
($context["button_type"] ?? null) == "flat")) ? ("btn-flat") : ("")), (((        // line 31
($context["button_type"] ?? null) == "primary")) ? ("btn-primary") : ("")), (((        // line 32
($context["button_type"] ?? null) == "accent")) ? ("btn-accent") : ("")), (((        // line 33
($context["button_size"] ?? null) == "small")) ? ("btn-sm") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 34
($context["attributes"] ?? null), "hasClass", ["crop-preview-wrapper__crop-reset"], "method", false, false, true, 34)) ? ("btn-flat") : ("")), ((((        // line 35
($context["icon"] ?? null) && ($context["icon_position"] ?? null)) &&  !($context["icon_only"] ?? null))) ? (("icon-" . $this->sandbox->ensureToStringAllowed(($context["icon_position"] ?? null), 35, $this->source))) : (""))];
        // line 38
        $___internal_parse_1_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 39
            yield "
  ";
            // line 40
            if (($context["input_group"] ?? null)) {
                // line 41
                yield "    ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/form--input-groups"), "html", null, true);
                yield "

    <div class=\"input-group\">
  ";
            }
            // line 45
            yield "
  ";
            // line 46
            if (($context["prefix"] ?? null)) {
                // line 47
                yield "    ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 47, $this->source), "html", null, true);
                yield "
  ";
            }
            // line 49
            yield "
  ";
            // line 50
            yield from $this->unwrap()->yieldBlock('input', $context, $blocks);
            // line 57
            yield "
  ";
            // line 58
            if (($context["suffix"] ?? null)) {
                // line 59
                yield "    ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 59, $this->source), "html", null, true);
                yield "
  ";
            }
            // line 61
            yield "
  ";
            // line 62
            if (($context["input_group"] ?? null)) {
                // line 63
                yield "    </div>
  ";
            }
            // line 65
            yield "
  ";
            // line 66
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 66, $this->source), "html", null, true);
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 38
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_1_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["type", "float_right", "button_level", "button_type", "button_size", "attributes", "icon", "icon_position", "icon_only", "input_group", "prefix", "suffix", "children", "simple_checkbox"]);        return; yield '';
    }

    // line 50
    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        yield "      ";
        if (($context["simple_checkbox"] ?? null)) {
            // line 52
            yield "        <input";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 52, $this->source), "html", null, true);
            yield " />
      ";
        } else {
            // line 54
            yield "        <input";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 54), 54, $this->source), "html", null, true);
            yield " />
      ";
        }
        // line 56
        yield "  ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/form/input.html.twig";
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
        return array (  140 => 56,  134 => 54,  128 => 52,  125 => 51,  121 => 50,  115 => 38,  109 => 66,  106 => 65,  102 => 63,  100 => 62,  97 => 61,  91 => 59,  89 => 58,  86 => 57,  84 => 50,  81 => 49,  75 => 47,  73 => 46,  70 => 45,  62 => 41,  60 => 40,  57 => 39,  55 => 38,  53 => 35,  52 => 34,  51 => 33,  50 => 32,  49 => 31,  48 => 30,  47 => 29,  46 => 28,  45 => 27,  44 => 26,  43 => 25,  42 => 24,  41 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/form/input.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/form/input.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 23, "apply" => 38, "if" => 40, "block" => 50);
        static $filters = array("escape" => 41, "spaceless" => 38);
        static $functions = array("attach_library" => 41);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'apply', 'if', 'block'],
                ['escape', 'spaceless'],
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
