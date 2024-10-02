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

/* themes/contrib/socialbase/templates/field/flag.html.twig */
class __TwigTemplate_90b08d155e6685857dd5991331e7ca71 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        $___internal_parse_1_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 15
            yield "
";
            // line 17
            if ((($context["action"] ?? null) == "unflag")) {
                // line 18
                yield "    ";
                $context["action_class"] = "action-unflag";
            } else {
                // line 20
                yield "    ";
                $context["action_class"] = "action-flag";
            }
            // line 22
            yield "
";
            // line 24
            $context["classes"] = ["btn", ((            // line 26
($context["follow_user"] ?? null)) ? ("") : ("btn-sm")), "btn-follow", "flag", ("flag-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,             // line 29
($context["flag"] ?? null), "id", [], "method", false, false, true, 29), 29, $this->source))), ((("js-flag-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,             // line 30
($context["flag"] ?? null), "id", [], "method", false, false, true, 30), 30, $this->source))) . "-") . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["flaggable"] ?? null), "id", [], "method", false, false, true, 30), 30, $this->source)),             // line 31
($context["action_class"] ?? null)];
            // line 33
            $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 33);
            // line 34
            yield "
<a role=\"button\"";
            // line 35
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 35, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 35, $this->source), "html", null, true);
            yield "</a>

";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_1_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["action", "follow_user", "flag", "flaggable", "title"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/field/flag.html.twig";
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
        return array (  78 => 14,  69 => 35,  66 => 34,  64 => 33,  62 => 31,  61 => 30,  60 => 29,  59 => 26,  58 => 24,  55 => 22,  51 => 20,  47 => 18,  45 => 17,  42 => 15,  40 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/field/flag.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/field/flag.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 14, "if" => 17, "set" => 18);
        static $filters = array("clean_class" => 29, "escape" => 35, "spaceless" => 14);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'if', 'set'],
                ['clean_class', 'escape', 'spaceless'],
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
