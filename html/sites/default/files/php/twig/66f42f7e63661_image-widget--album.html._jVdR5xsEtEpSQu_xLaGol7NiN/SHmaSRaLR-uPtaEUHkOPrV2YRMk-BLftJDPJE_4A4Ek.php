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

/* profiles/contrib/social/modules/social_features/social_post/modules/social_post_album/templates/image-widget--album.html.twig */
class __TwigTemplate_7270adc469312a7bcb651f726473077b extends Template
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
        if ((is_string($__internal_compile_0 = (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "upload", [], "any", false, false, true, 16)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#id"] ?? null) : null)) && is_string($__internal_compile_1 = "edit-field-post-image-0-upload") && str_starts_with($__internal_compile_0, $__internal_compile_1))) {
            // line 17
            yield "  ";
            $context["in_post"] = true;
        } else {
            // line 19
            yield "  ";
            $context["in_post"] = false;
        }
        // line 21
        yield "
";
        // line 22
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "preview", [], "any", false, false, true, 22)) {
            // line 23
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/image-widget"), "html", null, true);
            yield "
  <div";
            // line 24
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["image-widget"], "method", false, false, true, 24), "removeClass", ["clearfix"], "method", false, false, true, 24), 24, $this->source), "html", null, true);
            yield ">
    <div class=\"preview\">
      ";
            // line 26
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "preview", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            yield "
    </div>
    <div class=\"data image-widget-data\">

      ";
            // line 30
            if (($context["in_post"] ?? null)) {
                // line 31
                yield "        ";
                // line 32
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["data"] ?? null), 32, $this->source), "preview", "image_crop", ("file_" . $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "fids", [], "any", false, false, true, 32)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#value"] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null), 32, $this->source)), "remove_button"), "html", null, true);
                yield "
      ";
            } else {
                // line 34
                yield "        ";
                // line 35
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["data"] ?? null), 35, $this->source), "preview", "image_crop"), "html", null, true);
                yield "
      ";
            }
            // line 37
            yield "
    </div>
  </div>

  ";
            // line 41
            if (($context["in_post"] ?? null)) {
                // line 42
                yield "    ";
                // line 43
                yield "    <div class=\"hidden\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "remove_button", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                yield "</div>
    <button type=\"button\" id=\"post-photo-remove\" class=\"btn--post-remove-image\">
      <svg class=\"btn-icon\">
        <use id=\"btnicon\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#icon-close\"></use>
      </svg>
      <span class=\"sr-only\">
        ";
                // line 49
                echo t("Remove image", array());
                // line 50
                yield "      </span>
    </button>

  ";
            } else {
                // line 54
                yield "
    ";
                // line 55
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("image_widget_crop/cropper"), "html", null, true);
                yield "
    ";
                // line 56
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "image_crop", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                yield "

  ";
            }
            // line 59
            yield "
";
        } else {
            // line 61
            yield "
  ";
            // line 62
            if (($context["in_post"] ?? null)) {
                // line 63
                yield "
    ";
                // line 65
                yield "    <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null), "hidden"], "method", false, false, true, 65), 65, $this->source), "html", null, true);
                yield ">
      ";
                // line 66
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["data"] ?? null), 66, $this->source), "html", null, true);
                yield "
    </div>
    <button type=\"button\" id=\"post-photo-add\" class=\"btn btn-default\">
      <svg class=\"btn-icon\">
        <use id=\"btnicon\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#icon-plus\"></use>
      </svg>
      <span>
        ";
                // line 73
                echo t("Add images", array());
                // line 74
                yield "      </span>
    </button>

  ";
            } else {
                // line 78
                yield "
    <div";
                // line 79
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 79), 79, $this->source), "html", null, true);
                yield ">
      ";
                // line 80
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["data"] ?? null), 80, $this->source), "html", null, true);
                yield "
      <div class=\"add-image-help\">
        <svg><use xlink:href=\"#icon-plus\"></use></svg>
        <span class=\"text\">";
                // line 83
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Add images"));
                yield "</span>
      </div>
      <img src=\"/profiles/contrib/social/modules/social_features/social_post/modules/social_post_album/assets/images/add-image-hidden-image.png\" alt=\"";
                // line 85
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Default hidden image"));
                yield "\" aria-hidden=\"true\">
    </div>

  ";
            }
            // line 89
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
        return "profiles/contrib/social/modules/social_features/social_post/modules/social_post_album/templates/image-widget--album.html.twig";
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
        return array (  194 => 89,  187 => 85,  182 => 83,  176 => 80,  172 => 79,  169 => 78,  163 => 74,  161 => 73,  151 => 66,  146 => 65,  143 => 63,  141 => 62,  138 => 61,  134 => 59,  128 => 56,  124 => 55,  121 => 54,  115 => 50,  113 => 49,  103 => 43,  101 => 42,  99 => 41,  93 => 37,  87 => 35,  85 => 34,  79 => 32,  77 => 31,  75 => 30,  68 => 26,  63 => 24,  58 => 23,  56 => 22,  53 => 21,  49 => 19,  45 => 17,  43 => 16,  40 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/social/modules/social_features/social_post/modules/social_post_album/templates/image-widget--album.html.twig", "/Applications/MAMP/htdocs/opensocial/html/profiles/contrib/social/modules/social_features/social_post/modules/social_post_album/templates/image-widget--album.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 16, "set" => 17, "trans" => 49);
        static $filters = array("escape" => 23, "without" => 32, "t" => 83);
        static $functions = array("attach_library" => 23);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'trans'],
                ['escape', 'without', 't'],
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
