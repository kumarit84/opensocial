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

/* themes/contrib/socialbase/templates/node/event/node--event--small-teaser.html.twig */
class __TwigTemplate_01d9829ba711eff7f54c688170d93244 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'extra_text' => [$this, 'block_extra_text'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "node--small-teaser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--small-teaser.html.twig", "themes/contrib/socialbase/templates/node/event/node--event--small-teaser.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["event_date", "content"]);    }

    // line 3
    public function block_extra_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "  <div class=\"card__text\">
    <span class=\"text-muted\">
      ";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["event_date"] ?? null), 6, $this->source), "html", null, true);
        yield "
      ";
        // line 7
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "ongoing", [], "any", false, false, true, 7)) {
            // line 8
            yield "        <span class=\"badge badge-primary teaser__badge\">
          ";
            // line 9
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "ongoing", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            yield "
        </span>
      ";
        }
        // line 12
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "enrolled", [], "any", false, false, true, 12)) {
            // line 13
            yield "        <span class=\"badge badge-default\">
          ";
            // line 14
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "enrolled", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            yield "
        </span>
      ";
        }
        // line 17
        yield "    </span>
  </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/node/event/node--event--small-teaser.html.twig";
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
        return array (  85 => 17,  79 => 14,  76 => 13,  73 => 12,  67 => 9,  64 => 8,  62 => 7,  58 => 6,  54 => 4,  50 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/node/event/node--event--small-teaser.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/node/event/node--event--small-teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7);
        static $filters = array("escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
