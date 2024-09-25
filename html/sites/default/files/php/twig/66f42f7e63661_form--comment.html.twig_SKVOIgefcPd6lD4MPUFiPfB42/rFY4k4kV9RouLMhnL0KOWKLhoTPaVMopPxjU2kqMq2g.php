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

/* themes/contrib/socialbase/templates/comment/form--comment.html.twig */
class __TwigTemplate_9c7559738150531aa32caee84642b278 extends Template
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
        // line 15
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/comment"), "html", null, true);
        yield "

";
        // line 18
        $context["classes"] = ["js-comment", "comment", "comment-form__wrapper"];
        // line 24
        yield "
";
        // line 26
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["comment_reply_form_wrapper"] ?? null))) {
            // line 27
            yield "<div ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_reply_form_wrapper"] ?? null), 27, $this->source), "html", null, true);
            yield ">
";
        }
        // line 29
        yield "
<div ";
        // line 30
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["comment_wrapper"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 30), 30, $this->source), "html", null, true);
        yield ">
  <div class=\"comment__avatar\">";
        // line 31
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_user_picture"] ?? null), 31, $this->source), "html", null, true);
        yield "</div>
  <div class=\"comment__content\">
    <form";
        // line 33
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 33, $this->source), "html", null, true);
        yield ">
      <div class=\"form-group-inline\">
        ";
        // line 35
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 35, $this->source), "html", null, true);
        yield "
      </div>
    </form>
  </div>
</div>

";
        // line 41
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["comment_reply_form_wrapper"] ?? null))) {
            // line 42
            yield "</div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["comment_reply_form_wrapper", "comment_wrapper", "current_user_picture", "attributes", "children"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/comment/form--comment.html.twig";
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
        return array (  86 => 42,  84 => 41,  75 => 35,  70 => 33,  65 => 31,  61 => 30,  58 => 29,  52 => 27,  50 => 26,  47 => 24,  45 => 18,  40 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/comment/form--comment.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/comment/form--comment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 18, "if" => 26);
        static $filters = array("escape" => 15);
        static $functions = array("attach_library" => 15);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
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
