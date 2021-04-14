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

/* themes/custom/barrio_custom/templates/node--view--blog.html.twig */
class __TwigTemplate_d1d704bcbbbe15879c0d6bd8e5f550a7836df0788b501d68f2aa1b8dbef6d9c2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'submitted' => [$this, 'block_submitted'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bootstrap_barrio/node"), "html", null, true);
        echo "

";
        // line 65
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 67
($context["node"] ?? null), "bundle", [], "any", false, false, true, 67), 67, $this->source))), 2 => ((twig_get_attribute($this->env, $this->source,         // line 68
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 68)) ? ("node--promoted") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 69
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 69)) ? ("node--sticky") : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 70
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 70)) ? ("node--unpublished") : ("")), 5 => "clearfix"];
        // line 74
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 74), 74, $this->source), "html", null, true);
        echo ">
\t<header>
\t\t";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 76, $this->source), "html", null, true);
        echo "
\t\t";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 77, $this->source), "html", null, true);
        echo "
\t\t";
        // line 78
        if (($context["display_submitted"] ?? null)) {
            // line 79
            echo "\t\t\t<div class=\"node__meta\">
\t\t\t\t";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 80, $this->source), "html", null, true);
            echo "
\t\t\t\t";
            // line 81
            $this->displayBlock('submitted', $context, $blocks);
            // line 89
            echo "\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 89, $this->source), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 92
        echo "\t</header>
\t";
        // line 93
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 93, $this->source), "html", null, true);
        echo "
\t<div class=\"float-right mx-2\">
\t\t<a class=\"btn btn-primary\" href='";
        // line 95
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 95, $this->source), "html", null, true);
        echo "'>Czytaj więcej</a>
\t</div>
</article>
";
    }

    // line 81
    public function block_submitted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "\t\t\t\t\t<em";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 82, $this->source), "html", null, true);
        echo ">
\t\t\t\t\t\t";
        // line 83
        echo t("Submitted by
\t\t\t\t\t\t@author_name
\t\t\t\t\t\ton
\t\t\t\t\t\t@date", array("@author_name" =>         // line 84
($context["author_name"] ?? null), "@date" =>         // line 86
($context["date"] ?? null), ));
        // line 87
        echo "\t\t\t\t\t</em>
\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "themes/custom/barrio_custom/templates/node--view--blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 87,  113 => 86,  112 => 84,  108 => 83,  103 => 82,  99 => 81,  91 => 95,  86 => 93,  83 => 92,  76 => 89,  74 => 81,  70 => 80,  67 => 79,  65 => 78,  61 => 77,  57 => 76,  51 => 74,  49 => 70,  48 => 69,  47 => 68,  46 => 67,  45 => 65,  40 => 62,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/barrio_custom/templates/node--view--blog.html.twig", "/var/www/html/famatech-drupal/themes/custom/barrio_custom/templates/node--view--blog.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 65, "if" => 78, "block" => 81, "trans" => 83);
        static $filters = array("escape" => 62, "clean_class" => 67);
        static $functions = array("attach_library" => 62);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'trans'],
                ['escape', 'clean_class'],
                ['attach_library']
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
