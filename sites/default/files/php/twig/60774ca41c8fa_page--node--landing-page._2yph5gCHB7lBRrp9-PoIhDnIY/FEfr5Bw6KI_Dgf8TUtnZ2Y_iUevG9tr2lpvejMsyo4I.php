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

/* themes/custom/barrio_custom/templates/page--node--landing-page.html.twig */
class __TwigTemplate_70bf3acd5977b33947b036aab185c7eb88b79e38dda952b09a909713c1e789c3 extends \Twig\Template
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
        // line 112
        echo "\t\t</header>
\t\t";
        // line 113
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 113)) {
            // line 114
            echo "\t\t\t";
            $this->displayBlock('featured', $context, $blocks);
            // line 121
            echo "\t\t";
        }
        // line 122
        echo "\t\t<div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
\t\t\t";
        // line 123
        $this->displayBlock('content', $context, $blocks);
        // line 161
        echo "\t\t</div>

\t\t<footer class=\"site-footer\">
\t\t\t";
        // line 164
        $this->displayBlock('footer', $context, $blocks);
        // line 181
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "addClass", [0 => "navbar__main"], "method", false, false, true, 91), 91, $this->source), "html", null, true);
        echo ">
\t\t\t\t<a href=\"/drupal-dev/en\" class=\"navbar__main--logo\">Coffee City</a>
\t\t\t\t\t";
        // line 93
        if (($context["container_navbar"] ?? null)) {
            // line 94
            echo "\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t";
        }
        // line 96
        echo "\t\t\t\t\t\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t";
        // line 97
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 97) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 97))) {
            // line 98
            echo "\t\t\t\t\t\t\t<div class=\"collapse navbar-collapse justify-content-end\" id=\"CollapsingNavbar\">
\t\t\t\t\t\t\t\t";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t";
            // line 100
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 100)) {
                // line 101
                echo "\t\t\t\t\t\t\t\t\t<div class=\"form-inline navbar-form justify-content-end\">
\t\t\t\t\t\t\t\t\t\t";
                // line 102
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 105
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 107
        echo "\t\t\t\t\t\t";
        if (($context["container_navbar"] ?? null)) {
            // line 108
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 110
        echo "\t\t\t\t</nav>
\t\t\t";
    }

    // line 114
    public function block_featured($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        echo "\t\t\t\t<div class=\"featured-top\">
\t\t\t\t\t<aside class=\"featured-top__inner section ";
        // line 116
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 116, $this->source), "html", null, true);
        echo " clearfix\" role=\"complementary\">
\t\t\t\t\t\t";
        // line 117
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
        echo "
\t\t\t\t\t</aside>
\t\t\t\t</div>
\t\t\t";
    }

    // line 123
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 124
        echo "
\t\t\t\t";
        // line 126
        echo "\t\t\t\t<div class=\"landing-page\">
\t\t\t\t\t<div class=\"landing-page__banner--img\"></div>
\t\t\t\t\t<div class=\"landing-page__banner--text\">
\t\t\t\t\t\t<span class=\"landing-page__banner--title\">Witamy w</span>
\t\t\t\t\t\t<h1 class=\"landing-page__banner--subtitle\">Coffee City</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 134
        echo "
\t\t\t\t<div id=\"main\" class=\"\">
\t\t\t\t\t";
        // line 136
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
        echo "
\t\t\t\t\t<div class=\"row row-offcanvas row-offcanvas-left clearfix\">
\t\t\t\t\t\t<main";
        // line 138
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 138, $this->source), "html", null, true);
        echo ">
\t\t\t\t\t\t\t<section class=\"section\">
\t\t\t\t\t\t\t\t<a id=\"main-content\" tabindex=\"-1\"></a>
\t\t\t\t\t\t\t\t";
        // line 141
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</main>
\t\t\t\t\t\t";
        // line 144
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 144)) {
            // line 145
            echo "\t\t\t\t\t\t\t<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null), 145, $this->source), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t<aside class=\"section\" role=\"complementary\">
\t\t\t\t\t\t\t\t\t";
            // line 147
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 151
        echo "\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 151)) {
            // line 152
            echo "\t\t\t\t\t\t\t<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null), 152, $this->source), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t<aside class=\"section\" role=\"complementary\">
\t\t\t\t\t\t\t\t\t";
            // line 154
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 158
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
    }

    // line 164
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 165
        echo "\t\t\t\t<div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 165, $this->source), "html", null, true);
        echo "\">
\t\t\t\t\t";
        // line 166
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 166) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 166)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 166)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 166))) {
            // line 167
            echo "\t\t\t\t\t\t<div class=\"site-footer__top clearfix\">
\t\t\t\t\t\t\t";
            // line 168
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 168), 168, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
            // line 169
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
            // line 170
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
            // line 171
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 171), 171, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 174
        echo "\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 174)) {
            // line 175
            echo "\t\t\t\t\t\t<div class=\"footer-wide\">
\t\t\t\t\t\t\t";
            // line 176
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 176), 176, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 179
        echo "\t\t\t\t</div>
\t\t\t";
    }

    public function getTemplateName()
    {
        return "themes/custom/barrio_custom/templates/page--node--landing-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 179,  316 => 176,  313 => 175,  310 => 174,  304 => 171,  300 => 170,  296 => 169,  292 => 168,  289 => 167,  287 => 166,  282 => 165,  278 => 164,  272 => 158,  265 => 154,  259 => 152,  256 => 151,  249 => 147,  243 => 145,  241 => 144,  235 => 141,  229 => 138,  224 => 136,  220 => 134,  211 => 126,  208 => 124,  204 => 123,  196 => 117,  192 => 116,  189 => 115,  185 => 114,  180 => 110,  176 => 108,  173 => 107,  169 => 105,  163 => 102,  160 => 101,  158 => 100,  154 => 99,  151 => 98,  149 => 97,  144 => 96,  140 => 94,  138 => 93,  132 => 91,  128 => 89,  124 => 87,  121 => 86,  115 => 83,  112 => 82,  110 => 81,  106 => 80,  101 => 79,  97 => 77,  95 => 76,  90 => 75,  87 => 74,  83 => 73,  76 => 181,  74 => 164,  69 => 161,  67 => 123,  64 => 122,  61 => 121,  58 => 114,  56 => 113,  53 => 112,  51 => 73,  47 => 72,  43 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/barrio_custom/templates/page--node--landing-page.html.twig", "/var/www/html/famatech-drupal/themes/custom/barrio_custom/templates/page--node--landing-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 73, "if" => 113);
        static $filters = array("t" => 72, "escape" => 75);
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
