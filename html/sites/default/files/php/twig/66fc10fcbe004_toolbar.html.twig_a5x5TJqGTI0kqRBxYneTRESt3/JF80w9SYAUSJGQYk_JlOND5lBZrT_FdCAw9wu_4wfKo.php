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

/* modules/contrib/gin_toolbar/templates/toolbar.html.twig */
class __TwigTemplate_cac4bdbd08ce9bddc26e3253b7d42285 extends Template
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
        // line 7
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate("@gin/navigation/toolbar--gin.html.twig", "modules/contrib/gin_toolbar/templates/toolbar.html.twig", 7);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            yield from $__internal_compile_0->unwrap()->yield($context);
        }
        // line 8
        if ((($context["secondary_toolbar_frontend"] ?? null) && (($context["toolbar_variant"] ?? null) != "classic"))) {
            // line 9
            yield "<div class=\"gin-secondary-toolbar gin-secondary-toolbar--frontend\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((((($context["toolbar_variant"] ?? null) == "vertical") || (($context["toolbar_variant"] ?? null) == "new"))) ? (" data-offset-top") : ("")));
            yield ">
  <div class=\"gin-secondary-toolbar__layout-container\">
    <div class=\"gin-breadcrumb-wrapper\">
      <div class=\"region-breadcrumb\">
        <nav class=\"gin-breadcrumb\" role=\"navigation\" aria-labelledby=\"gin-system-breadcrumb\">
          <h2 id=\"gin-system-breadcrumb\" class=\"visually-hidden\">";
            // line 14
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Breadcrumb"));
            yield "</h2>
          <ol class=\"gin-breadcrumb__list\">
            <li class=\"gin-breadcrumb__item\">
              ";
            // line 17
            if ((($context["entity_edit_url"] ?? null) && ($context["entity_title"] ?? null))) {
                // line 18
                yield "                <a class=\"gin-breadcrumb__link gin-back-to-admin\" href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entity_edit_url"] ?? null), 18, $this->source), "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Edit %title", ["%title" => ($context["entity_title"] ?? null)]));
                yield "</a>
              ";
            } else {
                // line 20
                yield "                <a class=\"gin-breadcrumb__link gin-back-to-admin\" href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("system.admin_content"));
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Back to Administration"));
                yield "</a>
              ";
            }
            // line 22
            yield "            </li>
          </ol>
        </nav>
      </div>
    </div>
    ";
            // line 27
            $__internal_compile_1 = null;
            try {
                $__internal_compile_1 =                 $this->loadTemplate("@gin/navigation/toolbar--gin--secondary.html.twig", "modules/contrib/gin_toolbar/templates/toolbar.html.twig", 27);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_compile_1) {
                yield from $__internal_compile_1->unwrap()->yield($context);
            }
            // line 28
            yield "  </div>
</div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["secondary_toolbar_frontend", "toolbar_variant", "entity_edit_url", "entity_title"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/gin_toolbar/templates/toolbar.html.twig";
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
        return array (  102 => 28,  92 => 27,  85 => 22,  77 => 20,  69 => 18,  67 => 17,  61 => 14,  52 => 9,  50 => 8,  40 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/gin_toolbar/templates/toolbar.html.twig", "/Applications/MAMP/htdocs/opensocial/html/modules/contrib/gin_toolbar/templates/toolbar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 7, "if" => 8);
        static $filters = array("t" => 14, "escape" => 18);
        static $functions = array("path" => 20);

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['t', 'escape'],
                ['path'],
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
