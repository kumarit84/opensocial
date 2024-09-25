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

/* themes/contrib/socialbase/templates/form/input--form-control.html.twig */
class __TwigTemplate_748f18f1298f732ac86b82abe2fd815c extends Template
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
        // line 1
        yield "
";
        // line 24
        $context["classes"] = ["form-control"];
        // line 28
        yield "
";
        // line 29
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/form--input-groups"), "html", null, true);
        yield "

";
        // line 31
        $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 32
            yield "  ";
            if (($context["input_group"] ?? null)) {
                // line 33
                yield "
    <div class=\"input-group\">
  ";
            }
            // line 36
            yield "
  ";
            // line 37
            if (($context["prefix"] ?? null)) {
                // line 38
                yield "    ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 38, $this->source), "html", null, true);
                yield "
  ";
            }
            // line 40
            yield "
  ";
            // line 41
            yield from $this->unwrap()->yieldBlock('input', $context, $blocks);
            // line 44
            yield "
  ";
            // line 45
            if (($context["suffix"] ?? null)) {
                // line 46
                yield "    ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 46, $this->source), "html", null, true);
                yield "
  ";
            }
            // line 48
            yield "
  ";
            // line 49
            if (($context["input_group"] ?? null)) {
                // line 50
                yield "    </div>
  ";
            }
            // line 52
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 31
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_0_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["input_group", "prefix", "suffix", "attributes"]);        return; yield '';
    }

    // line 41
    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        yield "    <input";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 42), 42, $this->source), "html", null, true);
        yield " />
  ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/form/input--form-control.html.twig";
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
        return array (  115 => 42,  111 => 41,  105 => 31,  100 => 52,  96 => 50,  94 => 49,  91 => 48,  85 => 46,  83 => 45,  80 => 44,  78 => 41,  75 => 40,  69 => 38,  67 => 37,  64 => 36,  59 => 33,  56 => 32,  54 => 31,  49 => 29,  46 => 28,  44 => 24,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/form/input--form-control.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/form/input--form-control.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 24, "apply" => 31, "if" => 32, "block" => 41);
        static $filters = array("escape" => 29, "spaceless" => 31);
        static $functions = array("attach_library" => 29);

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
