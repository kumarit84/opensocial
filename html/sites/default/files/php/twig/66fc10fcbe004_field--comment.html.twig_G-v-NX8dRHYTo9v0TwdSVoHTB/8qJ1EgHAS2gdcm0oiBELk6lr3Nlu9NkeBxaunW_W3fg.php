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

/* themes/contrib/socialbase/templates/comment/field--comment.html.twig */
class __TwigTemplate_398c0022a3f796f13226d10b655f6d78 extends Template
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
        // line 28
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/comment"), "html", null, true);
        yield "
";
        // line 29
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/pagination"), "html", null, true);
        yield "

";
        // line 32
        if (((($context["comment_count"] ?? null) > 0) || (($context["comment_form"] ?? null) && ($context["comment_open"] ?? null)))) {
            // line 33
            yield "
  <a id=\"section-comments\"></a>
  <section";
            // line 35
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 35, $this->source), "html", null, true);
            yield ">

    ";
            // line 37
            if ( !($context["label_hidden"] ?? null)) {
                // line 38
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 38, $this->source), "html", null, true);
                yield "
      ";
                // line 40
                yield "      ";
                if (( !Twig\Extension\CoreExtension::testEmpty(($context["comment_count"] ?? null)) && (($context["comment_count"] ?? null) > 0))) {
                    // line 41
                    yield "        <h4";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["section-title"], "method", false, false, true, 41), 41, $this->source), "html", null, true);
                    yield ">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 41, $this->source), "html", null, true);
                    yield " (";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_count"] ?? null), 41, $this->source), "html", null, true);
                    yield ")</h4>
      ";
                } else {
                    // line 43
                    yield "        <h4";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["section-title"], "method", false, false, true, 43), 43, $this->source), "html", null, true);
                    yield ">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 43, $this->source), "html", null, true);
                    yield "</h4>
      ";
                }
                // line 45
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 45, $this->source), "html", null, true);
                yield "
    ";
            }
            // line 47
            yield "
    <div class=\"card\">
      <div class=\"card__block card__comment_section\">

        ";
            // line 51
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comments"] ?? null), 51, $this->source), "html", null, true);
            yield "

        ";
            // line 53
            if (($context["comment_form"] ?? null)) {
                // line 54
                yield "          ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_form"] ?? null), 54, $this->source), "html", null, true);
                yield "
        ";
            }
            // line 56
            yield "
      </div>
    </div>

  </section>

";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["comment_count", "comment_form", "comment_open", "attributes", "label_hidden", "title_prefix", "title_attributes", "label", "title_suffix", "comments"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/comment/field--comment.html.twig";
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
        return array (  113 => 56,  107 => 54,  105 => 53,  100 => 51,  94 => 47,  88 => 45,  80 => 43,  70 => 41,  67 => 40,  62 => 38,  60 => 37,  55 => 35,  51 => 33,  49 => 32,  44 => 29,  40 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/comment/field--comment.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/comment/field--comment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 32);
        static $filters = array("escape" => 28);
        static $functions = array("attach_library" => 28);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
