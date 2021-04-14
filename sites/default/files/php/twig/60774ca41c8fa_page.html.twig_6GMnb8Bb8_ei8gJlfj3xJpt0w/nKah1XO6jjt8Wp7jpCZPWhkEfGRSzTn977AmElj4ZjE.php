<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/barrio_custom/templates/page.html.twig */
class __TwigTemplate_c454600e976f81f71707c46dec06babb604e46fc70cef7424497aa12570c26bd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'featured' => [$this, 'block_featured'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "<div id=\"page-wrapper\">
\t<div id=\"page\">
\t\t<header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
\t\t\t";
        // line 73
        $this->displayBlock('head', $context, $blocks);
        // line 119
        echo "\t\t</header>
\t\t";
        // line 120
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 120)) {
            // line 121
            echo "\t\t\t<div class=\"highlighted\">
\t\t\t\t<aside class=\"";
            // line 122
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 122, $this->source), "html", null, true);
            echo " section clearfix\" role=\"complementary\">
\t\t\t\t\t";
            // line 123
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
            echo "
\t\t\t\t</aside>
\t\t\t</div>
\t\t";
        }
        // line 127
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 127)) {
            // line 128
            echo "\t\t\t";
            $this->displayBlock('featured', $context, $blocks);
            // line 135
            echo "\t\t";
        }
        // line 136
        echo "\t\t<div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
\t\t\t";
        // line 137
        $this->displayBlock('content', $context, $blocks);
        // line 164
        echo "\t\t</div>
\t\t";
        // line 165
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 165) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 165)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 165))) {
            // line 166
            echo "\t\t\t<div class=\"featured-bottom\">
\t\t\t\t<aside class=\"";
            // line 167
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 167, $this->source), "html", null, true);
            echo " clearfix\" role=\"complementary\">
\t\t\t\t\t";
            // line 168
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 168), 168, $this->source), "html", null, true);
            echo "
\t\t\t\t\t";
            // line 169
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
            echo "
\t\t\t\t\t";
            // line 170
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
            echo "
\t\t\t\t</aside>
\t\t\t</div>
\t\t";
        }
        // line 174
        echo "\t\t<footer class=\"site-footer\">
\t\t\t";
        // line 175
        $this->displayBlock('footer', $context, $blocks);
        // line 192
        echo "\t\t</footer>
\t</div>
</div>
";
    }

    // line 73
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "\t\t\t\t";
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 74) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 74)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 74))) {
            // line 75
            echo "\t\t\t\t\t<nav";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_top_attributes"] ?? null), 75, $this->source), "html", null, true);
            echo ">
\t\t\t\t\t\t";
            // line 76
            if (($context["container_navbar"] ?? null)) {
                // line 77
                echo "\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t";
            }
            // line 79
            echo "\t\t\t\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
            // line 81
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 81)) {
                // line 82
                echo "\t\t\t\t\t\t\t\t<div class=\"form-inline navbar-form ml-auto\">
\t\t\t\t\t\t\t\t\t";
                // line 83
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 86
            echo "\t\t\t\t\t\t\t";
            if (($context["container_navbar"] ?? null)) {
                // line 87
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 89
            echo "\t\t\t\t\t</nav>
\t\t\t\t";
        }
        // line 91
        echo "\t\t\t\t<nav";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null), 91, $this->source), "html", null, true);
        echo ">
\t\t\t\t";
        // line 93
        echo "\t\t\t\t\t<a href=\"/drupal-dev/en\" class=\"navbar__main--logo\">Coffee City</a>
\t\t\t\t\t";
        // line 94
        if (($context["container_navbar"] ?? null)) {
            // line 95
            echo "\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t";
        }
        // line 97
        echo "\t\t\t\t\t\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t";
        // line 98
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 98) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 98))) {
            // line 99
            echo "\t\t\t\t\t\t\t<button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon ugabuda\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"collapse navbar-collapse justify-content-end\" id=\"CollapsingNavbar\">
\t\t\t\t\t\t\t\t";
            // line 103
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t";
            // line 104
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 104)) {
                // line 105
                echo "\t\t\t\t\t\t\t\t\t<div class=\"form-inline navbar-form justify-content-end\">
\t\t\t\t\t\t\t\t\t\t";
                // line 106
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 109
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 111
        echo "\t\t\t\t\t\t";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 112
            echo "\t\t\t\t\t\t\t<button class=\"navbar-toggler navbar-toggler-left collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
\t\t\t\t\t\t";
        }
        // line 114
        echo "\t\t\t\t\t\t";
        if (($context["container_navbar"] ?? null)) {
            // line 115
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 117
        echo "\t\t\t\t</nav>
\t\t\t";
    }

    // line 128
    public function block_featured($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 129
        echo "\t\t\t\t<div class=\"featured-top\">
\t\t\t\t\t<aside class=\"featured-top__inner section ";
        // line 130
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 130, $this->source), "html", null, true);
        echo " clearfix\" role=\"complementary\">
\t\t\t\t\t\t";
        // line 131
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
        echo "
\t\t\t\t\t</aside>
\t\t\t\t</div>
\t\t\t";
    }

    // line 137
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "\t\t\t\t<div id=\"main\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 138, $this->source), "html", null, true);
        echo "\">
\t\t\t\t\t";
        // line 139
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
        echo "
\t\t\t\t\t<div class=\"row row-offcanvas row-offcanvas-left clearfix\">
\t\t\t\t\t\t<main";
        // line 141
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 141, $this->source), "html", null, true);
        echo ">
\t\t\t\t\t\t\t<section class=\"section\">
\t\t\t\t\t\t\t\t<a id=\"main-content\" tabindex=\"-1\"></a>
\t\t\t\t\t\t\t\t";
        // line 144
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</main>
\t\t\t\t\t\t";
        // line 147
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 147)) {
            // line 148
            echo "\t\t\t\t\t\t\t<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null), 148, $this->source), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t<aside class=\"section\" role=\"complementary\">
\t\t\t\t\t\t\t\t\t";
            // line 150
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 154
        echo "\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 154)) {
            // line 155
            echo "\t\t\t\t\t\t\t<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null), 155, $this->source), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t<aside class=\"section\" role=\"complementary\">
\t\t\t\t\t\t\t\t\t";
            // line 157
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 157), 157, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 161
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
    }

    // line 175
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 176
        echo "\t\t\t\t<div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 176, $this->source), "html", null, true);
        echo "\">
\t\t\t\t\t";
        // line 177
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 177) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 177)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 177)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 177))) {
            // line 178
            echo "\t\t\t\t\t\t<div class=\"site-footer__top clearfix\">
\t\t\t\t\t\t\t";
            // line 179
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 179), 179, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
            // line 180
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 180), 180, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
            // line 181
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 181), 181, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
            // line 182
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 182), 182, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 185
        echo "\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 185)) {
            // line 186
            echo "\t\t\t\t\t\t<div class=\"footer-wide\">
\t\t\t\t\t\t\t";
            // line 187
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 187), 187, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 190
        echo "\t\t\t\t</div>
\t\t\t";
    }

    public function getTemplateName()
    {
        return "themes/custom/barrio_custom/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 190,  359 => 187,  356 => 186,  353 => 185,  347 => 182,  343 => 181,  339 => 180,  335 => 179,  332 => 178,  330 => 177,  325 => 176,  321 => 175,  315 => 161,  308 => 157,  302 => 155,  299 => 154,  292 => 150,  286 => 148,  284 => 147,  278 => 144,  272 => 141,  267 => 139,  262 => 138,  258 => 137,  250 => 131,  246 => 130,  243 => 129,  239 => 128,  234 => 117,  230 => 115,  227 => 114,  223 => 112,  220 => 111,  216 => 109,  210 => 106,  207 => 105,  205 => 104,  201 => 103,  195 => 99,  193 => 98,  188 => 97,  184 => 95,  182 => 94,  179 => 93,  174 => 91,  170 => 89,  166 => 87,  163 => 86,  157 => 83,  154 => 82,  152 => 81,  148 => 80,  143 => 79,  139 => 77,  137 => 76,  132 => 75,  129 => 74,  125 => 73,  118 => 192,  116 => 175,  113 => 174,  106 => 170,  102 => 169,  98 => 168,  94 => 167,  91 => 166,  89 => 165,  86 => 164,  84 => 137,  81 => 136,  78 => 135,  75 => 128,  72 => 127,  65 => 123,  61 => 122,  58 => 121,  56 => 120,  53 => 119,  51 => 73,  47 => 72,  43 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/barrio_custom/templates/page.html.twig", "/var/www/html/famatech-drupal/themes/custom/barrio_custom/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 73, "if" => 120);
        static $filters = array("t" => 72, "escape" => 122);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['t', 'escape'],
                []
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
