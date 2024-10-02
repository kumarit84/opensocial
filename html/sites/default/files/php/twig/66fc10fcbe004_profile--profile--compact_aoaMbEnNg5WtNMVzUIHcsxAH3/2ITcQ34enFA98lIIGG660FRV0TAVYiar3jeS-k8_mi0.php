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

/* themes/contrib/socialbase/templates/profile/profile--profile--compact_teaser.html.twig */
class __TwigTemplate_08589e7fbf228be462e26bd659493c1f extends Template
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
        // line 24
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/teaser"), "html", null, true);
        yield "

<div class=\"card__block card__block--list\">
  <div class=\"card__text list-item\">
    ";
        // line 28
        if ( !array_key_exists("avatar_attributes", $context)) {
            // line 29
            yield "      ";
            $context["avatar_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
            // line 30
            yield "    ";
        }
        // line 31
        yield "
    <a href=\"";
        // line 32
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_home"] ?? null), 32, $this->source), "html", null, true);
        yield "\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["avatar_attributes"] ?? null), "addClass", [["list-item__avatar", "list-item__avatar--medium"]], "method", false, false, true, 32), 32, $this->source), "html", null, true);
        yield ">
      ";
        // line 33
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_image", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        yield "
    </a>

    <div class=\"list-item__text\">
      <a href=\"";
        // line 37
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_home"] ?? null), 37, $this->source), "html", null, true);
        yield "\" title=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("View Profile"));
        yield "\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_attributes"] ?? null), 37, $this->source), "html", null, true);
        yield ">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_name"] ?? null), 37, $this->source), "html", null, true);
        yield "</a>

      ";
        // line 39
        if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_function", [], "any", false, false, true, 39)) && $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_organization", [], "any", false, false, true, 39)))) {
            yield " <br /> ";
        }
        // line 40
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_function", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
        yield "

      ";
        // line 42
        if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_function", [], "any", false, false, true, 42)) && $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_organization", [], "any", false, false, true, 42)))) {
            yield " &bullet; ";
        }
        // line 43
        yield "
      ";
        // line 44
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_organization", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        yield "

    </div>

  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["avatar_attributes", "profile_home", "content", "link_attributes", "profile_name"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/profile/profile--profile--compact_teaser.html.twig";
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
        return array (  99 => 44,  96 => 43,  92 => 42,  86 => 40,  82 => 39,  71 => 37,  64 => 33,  58 => 32,  55 => 31,  52 => 30,  49 => 29,  47 => 28,  40 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/profile/profile--profile--compact_teaser.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/profile/profile--profile--compact_teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 28, "set" => 29);
        static $filters = array("escape" => 24, "t" => 37, "render" => 39);
        static $functions = array("attach_library" => 24, "create_attribute" => 29);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 't', 'render'],
                ['attach_library', 'create_attribute'],
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
