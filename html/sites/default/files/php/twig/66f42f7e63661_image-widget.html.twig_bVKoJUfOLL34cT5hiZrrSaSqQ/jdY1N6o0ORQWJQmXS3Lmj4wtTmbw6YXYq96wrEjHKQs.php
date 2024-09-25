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

/* themes/contrib/socialbase/templates/file/image-widget.html.twig */
class __TwigTemplate_a065ef8fd209073e9220c10b9e9ce361 extends Template
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
        yield "
";
        // line 16
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/image-widget"), "html", null, true);
        yield "
";
        // line 17
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("image_widget_crop/cropper"), "html", null, true);
        yield "
";
        // line 18
        $context["in_post"] = (is_string($__internal_compile_0 = (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "upload", [], "any", false, false, true, 18)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#id"] ?? null) : null)) && is_string($__internal_compile_1 = "edit-field-post-image-0-upload") && str_starts_with($__internal_compile_0, $__internal_compile_1));
        // line 19
        yield "
";
        // line 20
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "preview", [], "any", false, false, true, 20)) {
            // line 21
            yield "  <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["image-widget"], "method", false, false, true, 21), "removeClass", ["clearfix"], "method", false, false, true, 21), 21, $this->source), "html", null, true);
            yield ">
    <div class=\"preview\">
      ";
            // line 23
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "preview", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            yield "
    </div>
    <div class=\"data image-widget-data\">

      ";
            // line 27
            if (($context["in_post"] ?? null)) {
                // line 28
                yield "        ";
                // line 29
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["data"] ?? null), 29, $this->source), "preview", "image_crop", ("file_" . $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "fids", [], "any", false, false, true, 29)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#value"] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null), 29, $this->source)), "remove_button"), "html", null, true);
                yield "
      ";
            } else {
                // line 31
                yield "        ";
                // line 32
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["data"] ?? null), 32, $this->source), "preview", "image_crop"), "html", null, true);
                yield "
      ";
            }
            // line 34
            yield "
    </div>
  </div>

  ";
            // line 38
            if (($context["in_post"] ?? null)) {
                // line 39
                yield "    ";
                // line 40
                yield "    <div class=\"hidden\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "remove_button", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                yield "</div>
    <button type=\"button\" id=\"post-photo-remove\" class=\"btn--post-remove-image\" title=\"";
                // line 41
                echo t("Remove image", array());
                yield "\">
      <svg class=\"btn-icon\" aria-hidden=\"true\">
        <title>";
                // line 43
                echo t("Remove image", array());
                yield "</title>
        <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#icon-close\"></use>
      </svg>
    </button>

  ";
            } else {
                // line 49
                yield "
    ";
                // line 50
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "image_crop", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                yield "

  ";
            }
            // line 53
            yield "
";
        } else {
            // line 55
            yield "
  ";
            // line 56
            if (($context["in_post"] ?? null)) {
                // line 57
                yield "
    ";
                // line 59
                yield "    <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null), "hidden"], "method", false, false, true, 59), 59, $this->source), "html", null, true);
                yield ">
      ";
                // line 60
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["data"] ?? null), 60, $this->source), "html", null, true);
                yield "
    </div>
    <button type=\"button\" id=\"post-photo-add\" class=\"btn btn-default\">
      <svg class=\"btn-icon\" aria-hidden=\"true\">
        <title>";
                // line 64
                echo t("Add image", array());
                yield "</title>
        <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#icon-plus\"></use>
      </svg>
      <span>
        ";
                // line 68
                echo t("Add image", array());
                // line 69
                yield "      </span>
    </button>

  ";
            } else {
                // line 73
                yield "
    <div";
                // line 74
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 74), 74, $this->source), "html", null, true);
                yield ">
      ";
                // line 75
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["data"] ?? null), 75, $this->source), "html", null, true);
                yield "
    </div>

  ";
            }
            // line 79
            yield "
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["data", "attributes", "classes"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/file/image-widget.html.twig";
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
        return array (  180 => 79,  173 => 75,  169 => 74,  166 => 73,  160 => 69,  158 => 68,  151 => 64,  144 => 60,  139 => 59,  136 => 57,  134 => 56,  131 => 55,  127 => 53,  121 => 50,  118 => 49,  109 => 43,  104 => 41,  99 => 40,  97 => 39,  95 => 38,  89 => 34,  83 => 32,  81 => 31,  75 => 29,  73 => 28,  71 => 27,  64 => 23,  58 => 21,  56 => 20,  53 => 19,  51 => 18,  47 => 17,  43 => 16,  40 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/file/image-widget.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/file/image-widget.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 18, "if" => 20, "trans" => 41);
        static $filters = array("escape" => 16, "without" => 29);
        static $functions = array("attach_library" => 16);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['escape', 'without'],
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
