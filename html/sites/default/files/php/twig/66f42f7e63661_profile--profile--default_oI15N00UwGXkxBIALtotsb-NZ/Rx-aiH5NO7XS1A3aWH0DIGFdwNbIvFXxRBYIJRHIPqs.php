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

/* themes/contrib/socialblue/templates/profile/profile--profile--default--sky.html.twig */
class __TwigTemplate_2d67e25ec0dae09a06e1024f06aeb091 extends Template
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
        // line 68
        yield "
<div class=\"card\">
  <div class=\"card__body card--content-merged\">
    ";
        // line 71
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_self_introduction", [], "any", false, false, true, 71))) {
            // line 72
            yield "      <div class=\"card--content-merged__list\">
        <div class=\"list-item__text\">
          ";
            // line 74
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_self_introduction", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
            yield "
        </div>
      </div>
    ";
        }
        // line 78
        yield "
    ";
        // line 79
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_phone_number", [], "any", false, false, true, 79))) {
            // line 80
            yield "      <div class=\"list-item card--content-merged__list\">
          <div class=\"list-item__label\">";
            // line 81
            echo t("Phone", array());
            yield "</div>
          <div class=\"list-item__text\">";
            // line 82
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_phone_number", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            yield "</div>
      </div>
    ";
        }
        // line 85
        yield "
    ";
        // line 86
        if (($context["user_mail"] ?? null)) {
            // line 87
            yield "      <div class=\"list-item card--content-merged__list\">
          <div class=\"list-item__label\">";
            // line 88
            echo t("E-mail", array());
            yield "</div>
          <div class=\"list-item__text\">";
            // line 89
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_mail"] ?? null), 89, $this->source), "html", null, true);
            yield "</a></div>
      </div>
    ";
        }
        // line 92
        yield "
    ";
        // line 93
        if (($context["user_lang"] ?? null)) {
            // line 94
            yield "      <div class=\"list-item card--content-merged__list\">
        <div class=\"list-item__label\">";
            // line 95
            echo t("Language", array());
            yield "</div>
        <div class=\"list-item__text\">";
            // line 96
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_lang"] ?? null), 96, $this->source), "html", null, true);
            yield "</a></div>
      </div>
    ";
        }
        // line 99
        yield "
    ";
        // line 100
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_address", [], "any", false, false, true, 100))) {
            // line 101
            yield "      <div class=\"list-item card--content-merged__list\">
          <div class=\"list-item__label\">";
            // line 102
            echo t("Address", array());
            yield "</div>
          <div class=\"list-item__text\">
              ";
            // line 104
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_address", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
            yield "
          </div>
      </div>
    ";
        }
        // line 108
        yield "
    ";
        // line 109
        if ((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_expertise", [], "any", false, false, true, 109)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null)) {
            // line 110
            yield "      <div class=\"card--content-merged__list\">
        <h5>";
            // line 111
            echo t("Expertise", array());
            yield "</h5>
        <div class=\"list-item__text\">
          ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_expertise", [], "any", false, false, true, 113)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#items"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 114
                yield "            <div class=\"badge badge--pill badge--large badge-default\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 114), "label", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
                yield "</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            yield "        </div>
      </div>
    ";
        }
        // line 119
        yield "
    ";
        // line 120
        if ((($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_interests", [], "any", false, false, true, 120)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#items"] ?? null) : null)) {
            // line 121
            yield "      <div class=\"card--content-merged__list\">
        <h5>";
            // line 122
            echo t("Interests", array());
            yield "</h5>
        <div class=\"list-item__text\">
          ";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_interests", [], "any", false, false, true, 124)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#items"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 125
                yield "            <div class=\"badge badge--pill badge--large badge-default\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 125), "label", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
                yield "</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            yield "        </div>
      </div>
    ";
        }
        // line 130
        yield "
    ";
        // line 131
        if (((($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_profile_tag", [], "any", false, false, true, 131)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#items"] ?? null) : null) && ($context["profile_tagging_active"] ?? null))) {
            // line 132
            yield "      ";
            if (($context["profile_tagging_allow_split"] ?? null)) {
                // line 133
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["profile_tagging_hierarchy"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 134
                    yield "          <div class=\"card--content-merged__list\">
            <h5>";
                    // line 135
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
                    yield "</h5>
            <div class=\"list-item__text\">
              ";
                    // line 137
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "tags", [], "any", false, false, true, 137));
                    foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                        // line 138
                        yield "                <a href=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "url", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
                        yield "\">
                  <div class=\"badge badge--pill badge--large badge-default\">";
                        // line 139
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
                        yield "</div>
                </a>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 142
                    yield "            </div>
          </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 145
                yield "      ";
            } else {
                // line 146
                yield "        <div class=\"card--content-merged__list\">
          <h5>";
                // line 147
                echo t("Profile tags", array());
                yield "</h5>
          <div class=\"list-item__text\">
            ";
                // line 149
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["profile_tagging_hierarchy"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 150
                    yield "              ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "tags", [], "any", false, false, true, 150));
                    foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                        // line 151
                        yield "                <a href=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "url", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
                        yield "\">
                  <div class=\"badge badge--pill badge--large badge-default\">";
                        // line 152
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, true, 152), 152, $this->source), "html", null, true);
                        yield "</div>
                </a>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 155
                    yield "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 156
                yield "          </div>
        </div>
      ";
            }
            // line 159
            yield "    ";
        }
        // line 160
        yield "
    ";
        // line 161
        if (((($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "social_tagging", [], "any", false, false, true, 161)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#items"] ?? null) : null) && ($context["social_tagging_profile_active"] ?? null))) {
            // line 162
            yield "      ";
            if (($context["social_tagging_allow_split"] ?? null)) {
                // line 163
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["social_tagging_hierarchy"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 164
                    yield "          <div class=\"card--content-merged__list\">
            <h5>";
                    // line 165
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
                    yield "</h5>
            <div class=\"list-item__text\">
              ";
                    // line 167
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "tags", [], "any", false, false, true, 167));
                    foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                        // line 168
                        yield "                <a href=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "url", [], "any", false, false, true, 168), 168, $this->source), "html", null, true);
                        yield "\">
                  <div class=\"badge badge--pill badge--large badge-default\">";
                        // line 169
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
                        yield "</div>
                </a>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 172
                    yield "            </div>
          </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 175
                yield "      ";
            } else {
                // line 176
                yield "        <div class=\"card--content-merged__list\">
          <h5>";
                // line 177
                echo t("Tags", array());
                yield "</h5>
          <div class=\"list-item__text\">
            ";
                // line 179
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["social_tagging_hierarchy"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 180
                    yield "              ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "tags", [], "any", false, false, true, 180));
                    foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                        // line 181
                        yield "                <a href=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "url", [], "any", false, false, true, 181), 181, $this->source), "html", null, true);
                        yield "\">
                  <div class=\"badge badge--pill badge--large badge-default\">";
                        // line 182
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, true, 182), 182, $this->source), "html", null, true);
                        yield "</div>
                </a>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 185
                    yield "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 186
                yield "          </div>
        </div>
      ";
            }
            // line 189
            yield "    ";
        }
        // line 190
        yield "
    ";
        // line 191
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 191, $this->source), "field_profile_phone_number", "user_mail", "field_profile_address", "field_profile_self_introduction", "field_profile_interests", "field_profile_expertise", "field_profile_profile_tag", "field_manager_notes", "social_tagging", "user_lang"), "html", null, true);
        // line 193
        yield "

    ";
        // line 195
        if (((Twig\Extension\CoreExtension::testEmpty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content"] ?? null))) && Twig\Extension\CoreExtension::testEmpty(($context["user_mail"] ?? null))) && Twig\Extension\CoreExtension::testEmpty(($context["user_lang"] ?? null)))) {
            // line 196
            yield "        ";
            echo t("@profile_name @profile_name_extra has not shared profile information.", array("@profile_name" => ($context["profile_name"] ?? null), "@profile_name_extra" => ($context["profile_name_extra"] ?? null), ));
            // line 197
            yield "    ";
        }
        // line 198
        yield "
  </div>
</div>

";
        // line 202
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_manager_notes", [], "any", false, false, true, 202))) {
            // line 203
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_manager_notes", [], "any", false, false, true, 203), 203, $this->source), "html", null, true);
            yield "
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content", "user_mail", "user_lang", "profile_tagging_active", "profile_tagging_allow_split", "profile_tagging_hierarchy", "social_tagging_profile_active", "social_tagging_allow_split", "social_tagging_hierarchy", "profile_name", "profile_name_extra"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialblue/templates/profile/profile--profile--default--sky.html.twig";
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
        return array (  409 => 203,  407 => 202,  401 => 198,  398 => 197,  395 => 196,  393 => 195,  389 => 193,  387 => 191,  384 => 190,  381 => 189,  376 => 186,  370 => 185,  361 => 182,  356 => 181,  351 => 180,  347 => 179,  342 => 177,  339 => 176,  336 => 175,  328 => 172,  319 => 169,  314 => 168,  310 => 167,  305 => 165,  302 => 164,  297 => 163,  294 => 162,  292 => 161,  289 => 160,  286 => 159,  281 => 156,  275 => 155,  266 => 152,  261 => 151,  256 => 150,  252 => 149,  247 => 147,  244 => 146,  241 => 145,  233 => 142,  224 => 139,  219 => 138,  215 => 137,  210 => 135,  207 => 134,  202 => 133,  199 => 132,  197 => 131,  194 => 130,  189 => 127,  180 => 125,  176 => 124,  171 => 122,  168 => 121,  166 => 120,  163 => 119,  158 => 116,  149 => 114,  145 => 113,  140 => 111,  137 => 110,  135 => 109,  132 => 108,  125 => 104,  120 => 102,  117 => 101,  115 => 100,  112 => 99,  106 => 96,  102 => 95,  99 => 94,  97 => 93,  94 => 92,  88 => 89,  84 => 88,  81 => 87,  79 => 86,  76 => 85,  70 => 82,  66 => 81,  63 => 80,  61 => 79,  58 => 78,  51 => 74,  47 => 72,  45 => 71,  40 => 68,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialblue/templates/profile/profile--profile--default--sky.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialblue/templates/profile/profile--profile--default--sky.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 71, "trans" => 81, "for" => 113);
        static $filters = array("render" => 71, "escape" => 74, "without" => 191);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans', 'for'],
                ['render', 'escape', 'without'],
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
