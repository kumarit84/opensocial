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

/* themes/contrib/socialbase/templates/email/email.html.twig */
class __TwigTemplate_afd768b4be2a2a17a49a7d76bba78f8a extends Template
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
        // line 14
        yield "<!doctype html>
<html>
<head>
    <meta name=\"viewport\" content=\"width=device-width\" />
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <title>Open Social</title>
    <style>
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */
        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%; }

        body {
            background-color: #f6f6f6;
            color: #4a4a4a;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%; }

        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%; }
        table td {
            font-family: sans-serif;
            font-size: 16px;
            vertical-align: top; }

        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */

        .body {
            background-color: #f6f6f6;
            width: 100%; }

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;}

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px; }

        .content-wrapper {
            width: 100%;
            background: #fff;
            box-shadow: 0 -1px 0 #e0e0e0, 0 0 2px rgba(0,0,0,0.12), 0 2px 4px rgba(0,0,0,0.24); }

        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .header {
            padding-top: 40px;
            padding-bottom: 20px;
            text-align: center;
        }

        .postheader {
            padding: 0 44px 25px;
            font-size: 16px;
        }

        .main {
            width: 100%;}

        .wrapper {
            box-sizing: border-box;
            padding: 0 44px 40px; }

        .footer {
            clear: both;
            padding-top: 30px;
            text-align: center;
            width: 100%; }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #adadad;
            font-size: 12px;
            line-height: 21px;
            text-align: center; }

        .footer .brand {
            margin-bottom: 0;
        }

        .footer .brand,
        .footer .brand a {
            font-size: 14px;
        }

        .content-block {
            padding-top: 10px;
        }
        .content-block img {
            margin: 10px 0;
        }

        .footer .powered-by {
            padding-top: 20px;
        }
        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 30px; }

        h1 {
            font-size: 35px;
            font-weight: 300;
            text-align: center;
            text-transform: capitalize; }

        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
            list-style: none;}

        p:last-child {
            margin-bottom: 0; }

        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px; }

        ul {
            padding-left: 1em;
        }

        small  {
            font-size: 12px; }

        a {
            color: ";
        // line 182
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["primary"] ?? null), 182, $this->source), "html", null, true);
        yield ";
            font-weight: 700;
            text-decoration: underline; }

        a:hover {
            text-decoration: underline; }

        .first-paragraph {
            font-size: 16px;
            margin-bottom: 20px; }

        .bottom-space {
            margin-bottom: 40px; }

        .notification {
            font-size: 18px;
            margin-bottom: 20px; }

        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%; }
        .btn > tbody > tr > td {
            padding-bottom: 15px; }
        .btn table {
            width: auto; }
        .btn table td {
            background-color: #ffffff;
            border-radius: ";
        // line 212
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["border_radius"] ?? null), 212, $this->source), "html", null, true);
        yield "px;
            text-align: center; }
        .btn a {
            background-color: #ffffff;
            border: solid 1px #784288;
            border-radius: ";
        // line 217
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_border_radius"] ?? null), 217, $this->source), "html", null, true);
        yield "px;
            box-sizing: border-box;
            color: #784288;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
            text-transform: capitalize; }

        .btn-primary table td {
            background-color: #784288; }

        .btn-primary a {
            background-color: #784288;
            border-color: #784288;
            color: #ffffff; }

        .btn-wrapp {
            margin-bottom: 25px; }

        .btn-wrapp td:nth-child(odd) {
            padding-left: 0; }

        .btn-wrapp td:nth-child(even) {
            padding-right: 0; }

        .btn-link {
            display: block;
            position: relative;
            margin-bottom: 15px;
            border-radius: ";
        // line 250
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_border_radius"] ?? null), 250, $this->source), "html", null, true);
        yield "px;
            border: 1px solid ";
        // line 251
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["primary"] ?? null), 251, $this->source), "html", null, true);
        yield ";
            color: ";
        // line 252
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["primary"] ?? null), 252, $this->source), "html", null, true);
        yield ";
            padding: 9px 25px 7px;
            text-align: center;
            text-decoration: none; }

        .btn-link:hover {
            text-decoration: none; }

        .btn-link img {
            position: absolute;
            top: 10px;
            left: 11px; }

        .btn-link-bg {
            background-color: ";
        // line 266
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["primary"] ?? null), 266, $this->source), "html", null, true);
        yield ";
            color: #ffffff; }

        /* -------------------------------------
            COMMENTS, POST, MESSAGE STYLES
        ------------------------------------- */
        .comments {
            border-radius: ";
        // line 273
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["border_radius"] ?? null), 273, $this->source), "html", null, true);
        yield "px;
            border: 1px solid #e0e0e0;
            margin-bottom: 20px;
            margin-top: 20px; }

        .comment {
            padding: 15px 20px 0;
            border-radius: ";
        // line 280
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["border_radius"] ?? null), 280, $this->source), "html", null, true);
        yield "px; }

        .reply {
            padding-bottom: 20px;
            margin: 20px 15px;
            background: #f3f3f3; }

        .post {
            padding: 15px 20px 20px;
            font-size: 16px; }

        .message {
            padding: 5px 20px; }

        .author-msg {
            margin-bottom: 10px; }

        .post p,
        .comment p {
            margin: 10px 0; }

        .post-type {
            font-weight: 700;
            margin-bottom: 5px;
            color: ";
        // line 304
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["primary"] ?? null), 304, $this->source), "html", null, true);
        yield ";
        }

        .post-title {
            margin-bottom: 10px;
        }

        .post-info {
            font-size: 14px;
        }

        .post-info span,
        .post-info strong {
            display: inline-block;
            vertical-align: sub;
        }

        .post-answer {
            background-color: #f3f3f3; }

        .middle-block {
            padding: 45px 0 0;
            margin-bottom: 30px;
            border-bottom: 2px solid #e0e0e0;
            border-top: 2px solid #e0e0e0; }

        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0; }

        .first {
            margin-top: 0; }

        .align-center {
            text-align: center; }

        .align-right {
            text-align: right; }

        .align-left {
            text-align: left; }

        .text-align-center {
            text-align: center; }

        .text-align-right {
            text-align: right; }

        .text-align-left {
            text-align: left; }

        .clear {
            clear: both; }

        .mt0 {
            margin-top: 0; }

        .mb0 {
            margin-bottom: 0; }

        .logo {
            max-height: 80px;
            max-width: 160px; }

        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0; }

        .powered-by a {
            text-decoration: none; }

        .list {
            display: flex;
            flex-direction: column; }

        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0; }

        .sr-only {
            position: absolute;
            height: 1px;
            width: 1px;
            overflow: hidden;
            word-wrap: normal;
            margin: -1px;
            padding: 0;
            clip: rect(0, 0, 0, 0);
            border: 0; }

        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table[class=body] h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important; }
            table[class=body] p,
            table[class=body] ul,
            table[class=body] ol,
            table[class=body] td,
            table[class=body] span,
            table[class=body] a {
                font-size: 16px !important; }
            table[class=body] .wrapper,
            table[class=body] .article {
                padding: 10px !important; }
            table[class=body] .content {
                padding: 0 !important; }
            table[class=body] .container {
                padding: 0 !important;
                width: 100% !important; }
            table[class=body] .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important; }
            table[class=body] .btn table {
                width: 100% !important; }
            table[class=body] .btn a {
                width: 100% !important; }
            table[class=body] .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important; }}

        /* -------------------------------------
            STYLES FOR THE NODE EMAIL
        ------------------------------------- */
        .card__node-email {
            border: 1px solid #adadad;
        }
        .card__node-email--header {
            padding-top: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #adadad;
        }
        .card__node-email--location,
        .card__node-email--addtocal,
        .card__node-email--header {
            padding-left: 20px;
            padding-right: 20px;
        }
        .card__node-email--location,
        .card__node-email--header {
            margin-bottom: 25px;
        }
        .card__node-email--header a,
        .card__node-email--title {
            font-weight: 700;
        }
        .card__node-email--title {
            margin-bottom: 4px;
            font-size: 14px;
            line-height: 21px;
            text-transform: uppercase;
            color: ";
        // line 470
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["primary"] ?? null), 470, $this->source), "html", null, true);
        yield "
        }
        .card__node-email--header a {
            font-size: 16px;
            line-height: 24px;
            color: #4d4d4d;
            text-decoration: underline;
        }
        .card__node-email--header a:hover {
            color: #4d4d4d;
            text-decoration: none;
        }
        .card__node-email--location > div {
            margin-bottom: 10px;
        }
        .card__node-email--location > div:last-child {
            margin-bottom: 0;
        }
        .add-to-calendar > span {
            display: block;
            margin-bottom: 25px;
            font-weight: 700;
        }
        .add-to-calendar > a {
            margin-bottom: 15px;
            font-size: 14px;
            font-weight: 400;
            line-height: 21px;
            color: #4d4d4d;
            text-decoration: underline;
        }
        .add-to-calendar > a:hover {
            text-decoration: none;
        }

        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%; }
            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%; }
            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important; }
            .btn-primary table td:hover {
                background-color: #34495e !important; }
            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important; } }

    </style>
</head>
<body class=\"\">

<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"body\">
    <tr>
        <td>&nbsp;</td>
        <td class=\"container\">
            <div class=\"content\">

                <!-- START CENTERED WHITE CONTAINER -->
                <span class=\"preheader\"></span>

                <div class=\"content-wrapper\">
                    <div class=\"header\">
                        <img src=\"";
        // line 546
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null), 546, $this->source), "html", null, true);
        yield "\" alt=\"Logo\" class=\"logo\" />
                    </div>

                    ";
        // line 549
        if (($context["heading"] ?? null)) {
            // line 550
            yield "                        <div class=\"postheader\">
                            ";
            // line 551
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null), 551, $this->source), "html", null, true);
            yield ",
                        </div>
                    ";
        }
        // line 554
        yield "
                    <table class=\"main\">

                        <!-- START MAIN CONTENT AREA -->
                        <tr>
                            <td class=\"wrapper\">
                                <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                    ";
        // line 561
        if (($context["header"] ?? null)) {
            // line 562
            yield "                                        <tr>
                                            <td>
                                                ";
            // line 564
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 564, $this->source), "html", null, true);
            yield "
                                            </td>
                                        </tr>
                                    ";
        }
        // line 568
        yield "                                    <tr>
                                        <td>
                                            ";
        // line 570
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 570, $this->source), "html", null, true);
        yield "
                                        </td>
                                    </tr>
                                    ";
        // line 573
        if (($context["footer"] ?? null)) {
            // line 574
            yield "                                        <tr>
                                            <td>
                                                ";
            // line 576
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 576, $this->source), "html", null, true);
            yield "
                                            </td>
                                        </tr>
                                    ";
        }
        // line 580
        yield "
                                </table>
                            </td>
                        </tr>

                        <!-- END MAIN CONTENT AREA -->
                    </table>
                </div>

                <!-- START FOOTER -->
                <div class=\"footer\">
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                        <tr>
                            <td class=\"content-block\">
                                <p class=\"brand\">
                                    <strong>
                                        ";
        // line 596
        if (($context["site_link"] ?? null)) {
            // line 597
            yield "                                            <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null), 597, $this->source), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 597, $this->source), "html", null, true);
            yield "</a>
                                        ";
        } else {
            // line 599
            yield "                                            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 599, $this->source), "html", null, true);
            yield "
                                        ";
        }
        // line 601
        yield "                                    </strong>
                                </p>
                                ";
        // line 603
        if (($context["site_slogan"] ?? null)) {
            // line 604
            yield "                                    <span class=\"tagline\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 604, $this->source), "html", null, true);
            yield "</span>
                                ";
        }
        // line 606
        yield "                                ";
        if (($context["site_sub_slogan"] ?? null)) {
            // line 607
            yield "                                    <br />
                                    <span class=\"tagline\">";
            // line 608
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_sub_slogan"] ?? null), 608, $this->source), "html", null, true);
            yield "</span>
                                ";
        }
        // line 610
        yield "                            </td>
                        </tr>
                        <tr>
                            <td class=\"content-block powered-by\">
                                Copyright &copy; ";
        // line 614
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield ".
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- END FOOTER -->
            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["primary", "border_radius", "button_border_radius", "logo", "heading", "header", "body", "footer", "site_link", "base_url", "site_name", "site_slogan", "site_sub_slogan"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/email/email.html.twig";
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
        return array (  732 => 614,  726 => 610,  721 => 608,  718 => 607,  715 => 606,  709 => 604,  707 => 603,  703 => 601,  697 => 599,  689 => 597,  687 => 596,  669 => 580,  662 => 576,  658 => 574,  656 => 573,  650 => 570,  646 => 568,  639 => 564,  635 => 562,  633 => 561,  624 => 554,  618 => 551,  615 => 550,  613 => 549,  607 => 546,  528 => 470,  359 => 304,  332 => 280,  322 => 273,  312 => 266,  295 => 252,  291 => 251,  287 => 250,  251 => 217,  243 => 212,  210 => 182,  40 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/email/email.html.twig", "/Applications/MAMP/htdocs/opensocial/html/themes/contrib/socialbase/templates/email/email.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 549);
        static $filters = array("escape" => 182, "date" => 614);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'date'],
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
