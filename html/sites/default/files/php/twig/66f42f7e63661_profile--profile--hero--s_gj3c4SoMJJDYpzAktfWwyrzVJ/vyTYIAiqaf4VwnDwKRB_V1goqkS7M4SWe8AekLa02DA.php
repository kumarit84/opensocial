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

/* themes/contrib/socialblue/templates/profile/profile--profile--hero--sky.html.twig */
class __TwigTemplate_2dda8b7a61e6443ff0cd3ed53c7e4f62 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/hero"), "html", null, true);
        yield "

";
        // line 3
        if (($context["profile_hero_styled_image_url"] ?? null)) {
            // line 4
            yield "<div style=\"background-image: url('";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_hero_styled_image_url"] ?? null), 4, $this->source), "html", null, true);
            yield "')\" class=\"cover cover-img cover-img-gradient\">
  ";
        } else {
            // line 6
            yield "<div class=\"cover\">
  ";
        }
        // line 8
        yield "  <div class=\"hero__bgimage-overlay\"></div>
    ";
        // line 9
        if (($context["profile_edit_url"] ?? null)) {
            // line 10
            yield "      <div class=\"hero-action-button\">
        <a href=\"";
            // line 11
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_edit_url"] ?? null), 11, $this->source), "html", null, true);
            yield "\" title=\"";
            echo t("Edit profile information", array());
            yield "\"
           class=\"btn btn-raised btn-default btn-floating\">
          <svg class=\"icon-medium\" aria-hidden=\"true\">
            <title>";
            // line 14
            echo t("Edit profile information", array());
            yield "</title>
            <use xlink:href=\"#icon-edit\"></use>
          </svg>
        </a>
      </div>
    ";
        }
        // line 20
        yield "    <div class=\"cover-wrap\">
    </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["profile_hero_styled_image_url", "profile_edit_url"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialblue/templates/profile/profile--profile--hero--sky.html.twig";
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
        return array (  82 => 20,  73 => 14,  65 => 11,  62 => 10,  60 => 9,  57 => 8,  53 => 6,  47 => 4,  45 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialblue/templates/profile/profile--profile--hero--sky.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialblue/templates/profile/profile--profile--hero--sky.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "trans" => 11);
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
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
