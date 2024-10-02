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

/* themes/contrib/socialblue/templates/profile/profile--profile--teaser--sky.html.twig */
class __TwigTemplate_b247916a9f91e33f7b6d010c9a09b3a5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'card_title' => [$this, 'block_card_title'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "profile--profile--teaser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("profile--profile--teaser.html.twig", "themes/contrib/socialblue/templates/profile/profile--profile--teaser--sky.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["followers", "following", "content", "profile_home", "profile_name", "profile_name_extra"]);    }

    // line 3
    public function block_card_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "  <div class=\"teaser__header\">
    <div class=\"teaser__tag\">
      ";
        // line 6
        if (($context["followers"] ?? null)) {
            // line 7
            yield "        ";
            echo t("Follower", array());
            // line 8
            yield "      ";
        } elseif (($context["following"] ?? null)) {
            // line 9
            yield "        ";
            echo t("Following", array());
            // line 10
            yield "      ";
        } else {
            // line 11
            yield "        ";
            echo t("Member", array());
            // line 12
            yield "      ";
        }
        // line 13
        yield "    </div>

    ";
        // line 15
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "followers", [], "any", false, false, true, 15) || CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "following", [], "any", false, false, true, 15))) {
            // line 16
            yield "      <div class=\"follow-user--counter\">
        ";
            // line 17
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "followers", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            yield "
        ";
            // line 18
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "following", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 21
        yield "  </div>

  <h4 class=\"teaser__title\">
    <a href=\"";
        // line 24
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_home"] ?? null), 24, $this->source), "html", null, true);
        yield "\">
      ";
        // line 25
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_name"] ?? null), 25, $this->source), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_name_extra"] ?? null), 25, $this->source), "html", null, true);
        yield "
    </a>
  </h4>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialblue/templates/profile/profile--profile--teaser--sky.html.twig";
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
        return array (  106 => 25,  102 => 24,  97 => 21,  91 => 18,  87 => 17,  84 => 16,  82 => 15,  78 => 13,  75 => 12,  72 => 11,  69 => 10,  66 => 9,  63 => 8,  60 => 7,  58 => 6,  54 => 4,  50 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialblue/templates/profile/profile--profile--teaser--sky.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialblue/templates/profile/profile--profile--teaser--sky.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6, "trans" => 7);
        static $filters = array("escape" => 17);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
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
