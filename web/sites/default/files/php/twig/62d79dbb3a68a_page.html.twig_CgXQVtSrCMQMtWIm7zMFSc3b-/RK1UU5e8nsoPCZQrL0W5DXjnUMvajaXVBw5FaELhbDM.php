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

/* themes/contrib/zurb_foundation/templates/page.html.twig */
class __TwigTemplate_417b63123e16007d144955130955660f11e56a52335a14687ed88d4cd2501d1f extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "
<div class=\"off-canvas-wrapper\">
  <div class=\"inner-wrap off-canvas-wrapper-inner\" id=\"inner-wrap\" data-off-canvas-wrapper>
    <aside id=\"left-off-canvas-menu\" class=\"off-canvas left-off-canvas-menu position-left\" role=\"complementary\" data-off-canvas>
      ";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "left_off_canvas", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "
    </aside>

    <aside id=\"right-off-canvas-menu\" class=\"off-canvas right-off-canvas-menu position-right\" role=\"complementary\" data-off-canvas>
      ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "right_off_canvas", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "
    </aside>

    <div class=\"off-canvas-content\" data-off-canvas-content>
      ";
        // line 60
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "meta_header", [], "any", false, false, true, 60)) {
            // line 61
            echo "        ";
            if (($context["meta_header_grid"] ?? null)) {
                // line 62
                echo "          <div class=\"grid-container\">
        ";
            }
            // line 64
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "meta_header", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "
        ";
            // line 65
            if (($context["meta_header_grid"] ?? null)) {
                // line 66
                echo "          </div>
        ";
            }
            // line 68
            echo "      ";
        }
        // line 69
        echo "
      <header class=\"header\" role=\"banner\" aria-label=\"";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
        ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 71)) {
            // line 72
            echo "          <div class=\"grid-container\">
            ";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 76
        echo "      </header>

      ";
        // line 78
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 78)) {
            // line 79
            echo "        <div class=\"l-help grid-container\">
          ";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 83
        echo "
      <div class=\"grid-container\">
        <main id=\"main\" class=\"grid-x grid-margin-x\" role=\"main\">
          <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 87
        echo "
          ";
        // line 88
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 88)) {
            // line 89
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 91
        echo "
          ";
        // line 92
        if (($context["breadcrumb"] ?? null)) {
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 92, $this->source), "html", null, true);
            echo " ";
        }
        // line 93
        echo "
          <div class=\"";
        // line 94
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_grid"] ?? null), 94, $this->source), "html", null, true);
        echo "\">
            ";
        // line 95
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
        echo "
          </div>
          ";
        // line 97
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 97)) {
            // line 98
            echo "            <div id=\"sidebar-first\" class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_grid"] ?? null), 98, $this->source), "html", null, true);
            echo " sidebar\" role=\"complementary\">
              ";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 102
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 102)) {
            // line 103
            echo "            <div id=\"sidebar-second\" class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_sec_grid"] ?? null), 103, $this->source), "html", null, true);
            echo " sidebar\" role=\"complementary\">
              ";
            // line 104
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 107
        echo "
        </main>
      </div>

      ";
        // line 111
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 111) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle", [], "any", false, false, true, 111)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_last", [], "any", false, false, true, 111))) {
            // line 112
            echo "        <footer class=\"grid-container footer\" id=\"footer\">
          <div class=\"grid-x grid-margin-x\">

            ";
            // line 115
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 115)) {
                // line 116
                echo "              <div id=\"footer-first\" class=\"cell large-4\">
                ";
                // line 117
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 120
            echo "
            ";
            // line 121
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle", [], "any", false, false, true, 121)) {
                // line 122
                echo "              <div id=\"footer-middle\" class=\"cell large-4\">
                ";
                // line 123
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 126
            echo "
            ";
            // line 127
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_last", [], "any", false, false, true, 127)) {
                // line 128
                echo "              <div id=\"footer-last\" class=\"cell large-4\">
                ";
                // line 129
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_last", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 132
            echo "
          </div>
        </footer>
      ";
        }
        // line 136
        echo "
      ";
        // line 137
        if (($context["block_copyright_show"] ?? null)) {
            // line 138
            echo "        <div class=\"bottom-bar callout secondary grid-x\">

          ";
            // line 140
            if ( !($context["block_copyright_custom_text"] ?? null)) {
                // line 141
                echo "            <p>&copy; ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 141, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("All rights reserved."));
                echo "</p>
          ";
            } else {
                // line 143
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_copyright"] ?? null), 143, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 145
            echo "
        </div>
      ";
        }
        // line 148
        echo "
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/zurb_foundation/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 148,  264 => 145,  258 => 143,  248 => 141,  246 => 140,  242 => 138,  240 => 137,  237 => 136,  231 => 132,  225 => 129,  222 => 128,  220 => 127,  217 => 126,  211 => 123,  208 => 122,  206 => 121,  203 => 120,  197 => 117,  194 => 116,  192 => 115,  187 => 112,  185 => 111,  179 => 107,  173 => 104,  168 => 103,  165 => 102,  159 => 99,  154 => 98,  152 => 97,  147 => 95,  143 => 94,  140 => 93,  134 => 92,  131 => 91,  125 => 89,  123 => 88,  120 => 87,  115 => 83,  109 => 80,  106 => 79,  104 => 78,  100 => 76,  94 => 73,  91 => 72,  89 => 71,  85 => 70,  82 => 69,  79 => 68,  75 => 66,  73 => 65,  68 => 64,  64 => 62,  61 => 61,  59 => 60,  52 => 56,  45 => 52,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/zurb_foundation/templates/page.html.twig", "/var/www/html/web/themes/contrib/zurb_foundation/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 60);
        static $filters = array("escape" => 52, "t" => 70, "date" => 141);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't', 'date'],
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
