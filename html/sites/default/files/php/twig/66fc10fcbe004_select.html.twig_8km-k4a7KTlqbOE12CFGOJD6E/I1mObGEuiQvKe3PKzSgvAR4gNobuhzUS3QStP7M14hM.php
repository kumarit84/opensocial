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

/* themes/contrib/socialbase/templates/form/select.html.twig */
class __TwigTemplate_41bf630b7d45dad9b52bab22f2e084fa extends Template
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
        $___internal_parse_1_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 17
            yield "  ";
            if (($context["input_group"] ?? null)) {
                // line 18
                yield "  ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/form--input-groups"), "html", null, true);
                yield "
    <div class=\"input-group\">
  ";
            }
            // line 21
            yield "
  ";
            // line 22
            if (($context["prefix"] ?? null)) {
                // line 23
                yield "    ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 23, $this->source), "html", null, true);
                yield "
  ";
            }
            // line 25
            yield "
  ";
            // line 26
            if (($context["multiselect"] ?? null)) {
                // line 27
                yield "    ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/select2"), "html", null, true);
                yield "
  ";
            } else {
                // line 29
                yield "        <div class=\"select-wrapper\">
  ";
            }
            // line 35
            yield "
    ";
            // line 36
            $context["classes"] = ["form-control"];
            // line 37
            yield "    <select";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 37), 37, $this->source), "html", null, true);
            yield ">
      ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 39
                yield "        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, true, 39) == "optgroup")) {
                    // line 40
                    yield "          <optgroup label=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                    yield "\">
            ";
                    // line 41
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, true, 41));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub_option"]) {
                        // line 42
                        yield "              <option
                value=\"";
                        // line 43
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["sub_option"], "value", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                        yield "\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, $context["sub_option"], "selected", [], "any", false, false, true, 43)) ? (" selected=\"selected\"") : ("")));
                        yield ">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["sub_option"], "label", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                        yield "</option>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 45
                    yield "          </optgroup>
        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 46
$context["option"], "type", [], "any", false, false, true, 46) == "option")) {
                    // line 47
                    yield "          <option
            value=\"";
                    // line 48
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                    yield "\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "selected", [], "any", false, false, true, 48)) ? (" selected=\"selected\"") : ("")));
                    yield ">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                    yield "</option>
        ";
                }
                // line 50
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "    </select>

  ";
            // line 53
            if ( !($context["multiselect"] ?? null)) {
                // line 54
                yield "    </div>
  ";
            }
            // line 56
            yield "
  ";
            // line 57
            if (($context["suffix"] ?? null)) {
                // line 58
                yield "    ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 58, $this->source), "html", null, true);
                yield "
  ";
            }
            // line 60
            yield "
  ";
            // line 61
            if (($context["input_group"] ?? null)) {
                // line 62
                yield "    </div>
  ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_1_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["input_group", "prefix", "multiselect", "attributes", "options", "suffix"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/form/select.html.twig";
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
        return array (  174 => 16,  168 => 62,  166 => 61,  163 => 60,  157 => 58,  155 => 57,  152 => 56,  148 => 54,  146 => 53,  142 => 51,  136 => 50,  127 => 48,  124 => 47,  122 => 46,  119 => 45,  107 => 43,  104 => 42,  100 => 41,  95 => 40,  92 => 39,  88 => 38,  83 => 37,  81 => 36,  78 => 35,  74 => 29,  68 => 27,  66 => 26,  63 => 25,  57 => 23,  55 => 22,  52 => 21,  45 => 18,  42 => 17,  40 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/form/select.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/form/select.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 16, "if" => 17, "set" => 36, "for" => 38);
        static $filters = array("escape" => 18, "spaceless" => 16);
        static $functions = array("attach_library" => 18);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'if', 'set', 'for'],
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
