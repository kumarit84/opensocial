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

/* themes/contrib/socialbase/templates/system/container.html.twig */
class __TwigTemplate_4443e0c110d9a8a0f2e2c6b7e3aa9ae3 extends Template
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
        // line 1
        yield "
";
        // line 21
        yield "
";
        // line 23
        $context["classes"] = [(( !CoreExtension::getAttribute($this->env, $this->source,         // line 24
($context["attributes"] ?? null), "hasClass", ["toolbar-menu-administration"], "method", false, false, true, 24)) ? ("form-group") : ("")), ((        // line 25
($context["has_parent"] ?? null)) ? ("js-form-wrapper form-wrapper") : ("")), ((        // line 26
($context["exposed_form"] ?? null)) ? ("views-exposed-form__actions") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 27
($context["attributes"] ?? null), "hasClass", ["field--name-field-comment-body"], "method", false, false, true, 27)) ? ("media-body") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 28
($context["attributes"] ?? null), "hasClass", ["field--name-message"], "method", false, false, true, 28)) ? ("media-body") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 29
($context["attributes"] ?? null), "hasClass", ["more-link"], "method", false, false, true, 29)) ? ("btn btn-flat") : (""))];
        // line 32
        if (($context["bare"] ?? null)) {
            // line 33
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 33, $this->source), "html", null, true);
            yield "
";
        } else {
            // line 35
            yield "  <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 35), 35, $this->source), "html", null, true);
            yield ">
   ";
            // line 36
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 36, $this->source), "html", null, true);
            yield "
  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "has_parent", "exposed_form", "bare", "children"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/system/container.html.twig";
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
        return array (  67 => 36,  62 => 35,  56 => 33,  54 => 32,  52 => 29,  51 => 28,  50 => 27,  49 => 26,  48 => 25,  47 => 24,  46 => 23,  43 => 21,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/system/container.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/system/container.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 23, "if" => 32);
        static $filters = array("escape" => 33);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
