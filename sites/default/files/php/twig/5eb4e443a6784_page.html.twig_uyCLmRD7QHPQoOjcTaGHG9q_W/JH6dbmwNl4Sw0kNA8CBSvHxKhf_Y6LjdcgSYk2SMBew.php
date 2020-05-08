<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/mytheme/templates/page/page.html.twig */
class __TwigTemplate_2097e51715306d273db17ddd562da63b629c75a366611fe40f83f55708f5706a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 5];
        $filters = ["escape" => 6, "t" => 6];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"page\">
<a name=\"Top\" id=\"Top\"></a>
<header id=\"header\" class=\"header\" role=\"header\">
  <div class=\"container\">
    ";
        // line 5
        if (($context["logo"] ?? null)) {
            // line 6
            echo "      <a id=\"logo\" href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
            echo "\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\" rel=\"home\">
        <img src=\"";
            // line 7
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null)), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\"/>
      </a>
    ";
        }
        // line 10
        echo "
    ";
        // line 11
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 12
            echo "      <div class=\"name-and-slogan\">

        ";
            // line 15
            echo "        ";
            if (($context["title"] ?? null)) {
                // line 16
                echo "          <strong class=\"site-name\">
            <a href=\"";
                // line 17
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
                echo "</a>
          </strong>
        ";
            } else {
                // line 20
                echo "          <h1 class=\"site-name\">
            <a href=\"";
                // line 21
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
                echo "</a>
          </h1>
        ";
            }
            // line 24
            echo "
        ";
            // line 25
            if (($context["site_slogan"] ?? null)) {
                // line 26
                echo "          <div class=\"site-slogan\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
                echo "</div>
        ";
            }
            // line 28
            echo "      </div>
   ";
        }
        // line 30
        echo "   <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-menu-inner\">
      <span class=\"sr-only\">Toggle navigation</span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
    </button>

    ";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
    
  </div>
</header>

  ";
        // line 42
        if ($this->getAttribute(($context["page"] ?? null), "main_menu", [])) {
            // line 43
            echo "    <nav id=\"main-menu\" class=\"navbar navbar-default\" role=\"navigation\">\t
  \t\t  <div class=\"collapse navbar-collapse\" id=\"main-menu-inner\">
          <div class=\"container\">
            ";
            // line 46
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_menu", [])), "html", null, true);
            echo "\t\t\t\t\t\t
          </div>
        </div>
    </nav>
  ";
        }
        // line 51
        echo "
  <section id=\"main\" class=\"main\" role=\"main\">
    <a id=\"main-content\"></a>
    <div class=\"container\">
      <div class=\"row\">
        
        ";
        // line 57
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 58
            echo "          <aside class=\"sidebar-first sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
            ";
            // line 59
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 62
        echo "\t\t
        <div class=\"content col-lg-";
        // line 63
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_content_width", [])), "html", null, true);
        echo " col-md-";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_content_width", [])), "html", null, true);
        echo " col-sm-12 col-xs-12\">
          ";
        // line 64
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "

          ";
        // line 66
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
          ";
        // line 67
        if (($context["title"] ?? null)) {
            // line 68
            echo "            <h1>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h1>
          ";
        }
        // line 70
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "

          ";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null)), "html", null, true);
        echo "

          ";
        // line 74
        if (($context["action_links"] ?? null)) {
            // line 75
            echo "            <nav class=\"action-links\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null)), "html", null, true);
            echo "</nav>
          ";
        }
        // line 77
        echo "
          ";
        // line 78
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "

          <!--";
        // line 80
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null)), "html", null, true);
        echo "-->
        </div>

        ";
        // line 83
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 84
            echo "          <aside class=\"sidebar-second sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
            ";
            // line 85
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 88
        echo "      </div>
    </div>
  </section>

  ";
        // line 92
        if ($this->getAttribute(($context["page"] ?? null), "panel_first_1", [])) {
            // line 93
            echo "    <section id=\"panel_first\" class=\"panel_first\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            ";
            // line 97
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "panel_first_1", [])), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </section>
  ";
        }
        // line 103
        echo "
  ";
        // line 104
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 105
            echo "    <footer id=\"footer\" class=\"footer\" role=\"contentinfo\">
      <div class=\"container\">
        ";
            // line 107
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
      </div>
    </footer>
  ";
        }
        // line 111
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 111,  284 => 107,  280 => 105,  278 => 104,  275 => 103,  266 => 97,  260 => 93,  258 => 92,  252 => 88,  246 => 85,  243 => 84,  241 => 83,  235 => 80,  230 => 78,  227 => 77,  221 => 75,  219 => 74,  214 => 72,  208 => 70,  202 => 68,  200 => 67,  196 => 66,  191 => 64,  185 => 63,  182 => 62,  176 => 59,  173 => 58,  171 => 57,  163 => 51,  155 => 46,  150 => 43,  148 => 42,  140 => 37,  131 => 30,  127 => 28,  121 => 26,  119 => 25,  116 => 24,  106 => 21,  103 => 20,  93 => 17,  90 => 16,  87 => 15,  83 => 12,  81 => 11,  78 => 10,  70 => 7,  63 => 6,  61 => 5,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"page\">
<a name=\"Top\" id=\"Top\"></a>
<header id=\"header\" class=\"header\" role=\"header\">
  <div class=\"container\">
    {% if logo %}
      <a id=\"logo\" href=\"{{ front_page }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">
        <img src=\"{{ logo }}\" alt=\"{{ 'Home'|t }}\"/>
      </a>
    {% endif %}

    {% if site_name or site_slogan %}
      <div class=\"name-and-slogan\">

        {# Use h1 when the content title is empty #}
        {% if title %}
          <strong class=\"site-name\">
            <a href=\"{{ front_page }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">{{ site_name }}</a>
          </strong>
        {% else %}
          <h1 class=\"site-name\">
            <a href=\"{{ front_page }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">{{ site_name }}</a>
          </h1>
        {% endif %}

        {% if site_slogan %}
          <div class=\"site-slogan\">{{ site_slogan }}</div>
        {% endif %}
      </div>
   {% endif %}
   <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-menu-inner\">
      <span class=\"sr-only\">Toggle navigation</span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
    </button>

    {{ page.header }}
    
  </div>
</header>

  {% if page.main_menu %}
    <nav id=\"main-menu\" class=\"navbar navbar-default\" role=\"navigation\">\t
  \t\t  <div class=\"collapse navbar-collapse\" id=\"main-menu-inner\">
          <div class=\"container\">
            {{ page.main_menu }}\t\t\t\t\t\t
          </div>
        </div>
    </nav>
  {% endif %}

  <section id=\"main\" class=\"main\" role=\"main\">
    <a id=\"main-content\"></a>
    <div class=\"container\">
      <div class=\"row\">
        
        {% if page.sidebar_first %}
          <aside class=\"sidebar-first sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
            {{ page.sidebar_first }}
          </aside>
        {% endif %}
\t\t
        <div class=\"content col-lg-{{ page.main_content_width }} col-md-{{ page.main_content_width }} col-sm-12 col-xs-12\">
          {{ page.highlighted }}

          {{ title_prefix }}
          {% if title %}
            <h1>{{ title }}</h1>
          {% endif %}
          {{ title_suffix }}

          {{ tabs }}

          {% if action_links %}
            <nav class=\"action-links\">{{ action_links }}</nav>
          {% endif %}

          {{ page.content }}

          <!--{{ feed_icons }}-->
        </div>

        {% if page.sidebar_second %}
          <aside class=\"sidebar-second sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
            {{ page.sidebar_second }}
          </aside>
        {% endif %}
      </div>
    </div>
  </section>

  {% if page.panel_first_1 %}
    <section id=\"panel_first\" class=\"panel_first\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            {{ page.panel_first_1 }}
          </div>
        </div>
      </div>
    </section>
  {% endif %}

  {% if page.footer %}
    <footer id=\"footer\" class=\"footer\" role=\"contentinfo\">
      <div class=\"container\">
        {{ page.footer }}
      </div>
    </footer>
  {% endif %}

</div>
", "themes/custom/mytheme/templates/page/page.html.twig", "C:\\Users\\99sda\\Sites\\devdesktop\\drupal-test-2\\themes\\custom\\mytheme\\templates\\page\\page.html.twig");
    }
}
