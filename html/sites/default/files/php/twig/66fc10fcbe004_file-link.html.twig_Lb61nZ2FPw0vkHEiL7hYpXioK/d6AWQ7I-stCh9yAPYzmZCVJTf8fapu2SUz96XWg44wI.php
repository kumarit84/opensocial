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

/* themes/contrib/socialbase/templates/file/file-link.html.twig */
class __TwigTemplate_2b53f31c4bd56f33baf1af73969e5f32 extends Template
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
        // line 16
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/file"), "html", null, true);
        yield "
";
        // line 17
        $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 18
            yield "  <span";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 18, $this->source), "html", null, true);
            yield ">

  ";
            // line 20
            if (($context["icon_only"] ?? null)) {
                // line 21
                yield "    <span class=\"file-icon\"><img class=\"node-file__icon\" src=\"/";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["path_to_socialbase"] ?? null), 21, $this->source), "html", null, true);
                yield "/assets/images/mime-icons/icon_1_";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["node_icon"] ?? null), 21, $this->source), "html", null, true);
                yield "_x16.png\" srcset=\"/";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["path_to_socialbase"] ?? null), 21, $this->source), "html", null, true);
                yield "/assets/images/mime-icons/icon_1_";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["node_icon"] ?? null), 21, $this->source), "html", null, true);
                yield "_x32.png 2x\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["node_icon"] ?? null), 21, $this->source), "html", null, true);
                yield "\" /></span>
    <span class=\"sr-only\">
      <span class=\"file-link notranslate\">";
                // line 23
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 23, $this->source), "html", null, true);
                yield "</span>
      <span class=\"file-size\">";
                // line 24
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["file_size"] ?? null), 24, $this->source), "html", null, true);
                yield "</span>
    </span>
  ";
            } else {
                // line 27
                yield "
      <span class=\"file-icon\"><img class=\"node-file__icon\" src=\"/";
                // line 28
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["path_to_socialbase"] ?? null), 28, $this->source), "html", null, true);
                yield "/assets/images/mime-icons/icon_1_";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["node_icon"] ?? null), 28, $this->source), "html", null, true);
                yield "_x16.png\" srcset=\"/";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["path_to_socialbase"] ?? null), 28, $this->source), "html", null, true);
                yield "/assets/images/mime-icons/icon_1_";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["node_icon"] ?? null), 28, $this->source), "html", null, true);
                yield "_x32.png 2x\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["node_icon"] ?? null), 28, $this->source), "html", null, true);
                yield "\" /></span><span class=\"file-link notranslate\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 28, $this->source), "html", null, true);
                yield "</span><span class=\"file-size\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["file_size"] ?? null), 28, $this->source), "html", null, true);
                yield "</span>

  ";
            }
            // line 31
            yield "
  </span>


";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 17
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_0_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "icon_only", "path_to_socialbase", "node_icon", "link", "file_size"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/file/file-link.html.twig";
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
        return array (  107 => 17,  99 => 31,  81 => 28,  78 => 27,  72 => 24,  68 => 23,  54 => 21,  52 => 20,  46 => 18,  44 => 17,  40 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/file/file-link.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/file/file-link.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 17, "if" => 20);
        static $filters = array("escape" => 16, "spaceless" => 17);
        static $functions = array("attach_library" => 16);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'if'],
                ['escape', 'spaceless'],
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
