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

/* themes/contrib/socialbase/templates/system/html.html.twig */
class __TwigTemplate_11332c2c3e45f45ac0f5715392f71c13 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'custom_css' => [$this, 'block_custom_css'],
            'svg_icons' => [$this, 'block_svg_icons'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        $context["body_classes"] = [((        // line 28
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), (( !        // line 29
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 29, $this->source))))), ((        // line 30
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 30, $this->source)))) : ("")), ((        // line 31
($context["node_edit"] ?? null)) ? ("page-node-edit") : (""))];
        // line 34
        yield "
<!DOCTYPE html>
<html";
        // line 36
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 36, $this->source), "html", null, true);
        yield ">
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1 maximum-scale=1.0, user-scalable=0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta charset=\"utf-8\">
    <head-placeholder token=\"";
        // line 42
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 42, $this->source));
        yield "\">
    <title>";
        // line 43
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 43, $this->source), " | "));
        yield "</title>
    <css-placeholder token=\"";
        // line 44
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 44, $this->source));
        yield "\">
    <js-placeholder token=\"";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 45, $this->source));
        yield "\">
    ";
        // line 46
        yield from $this->unwrap()->yieldBlock('custom_css', $context, $blocks);
        // line 47
        yield "  </head>
  <body";
        // line 48
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["body_classes"] ?? null)], "method", false, false, true, 48), 48, $this->source), "html", null, true);
        yield ">
    <div id=\"skip-link\">
      <a href=\"#main-content\" class=\"sr-only-focusable\">
        ";
        // line 51
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        yield "
      </a>
    </div>
    ";
        // line 54
        if (($context["is_front"] ?? null)) {
            // line 55
            yield "      <h1 class=\"visually-hidden\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 55, $this->source), " | "));
            yield "</h1>
    ";
        }
        // line 57
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 57, $this->source), "html", null, true);
        yield "
    ";
        // line 58
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 58, $this->source), "html", null, true);
        yield "
    ";
        // line 59
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 59, $this->source), "html", null, true);
        yield "
    <js-bottom-placeholder token=\"";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 60, $this->source));
        yield "\">
    ";
        // line 61
        yield from $this->unwrap()->yieldBlock('svg_icons', $context, $blocks);
        // line 64
        yield "  </body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["logged_in", "root_path", "node_type", "node_edit", "html_attributes", "placeholder_token", "head_title", "attributes", "is_front", "page_top", "page", "page_bottom", "svg_icons"]);        return; yield '';
    }

    // line 46
    public function block_custom_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield " ";
        return; yield '';
    }

    // line 61
    public function block_svg_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["svg_icons"] ?? null), 62, $this->source));
        yield "
    ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/system/html.html.twig";
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
        return array (  141 => 62,  137 => 61,  129 => 46,  121 => 64,  119 => 61,  115 => 60,  111 => 59,  107 => 58,  102 => 57,  96 => 55,  94 => 54,  88 => 51,  82 => 48,  79 => 47,  77 => 46,  73 => 45,  69 => 44,  65 => 43,  61 => 42,  52 => 36,  48 => 34,  46 => 31,  45 => 30,  44 => 29,  43 => 28,  42 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/system/html.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/system/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 27, "block" => 46, "if" => 54);
        static $filters = array("clean_class" => 29, "escape" => 36, "raw" => 42, "safe_join" => 43, "t" => 51);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape', 'raw', 'safe_join', 't'],
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
