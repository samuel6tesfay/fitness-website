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

/* themes/zircon/templates/views/views-view.html.twig */
class __TwigTemplate_00594826c22ce21cf2dcd65bfd5994da7aeefadb5a9c25875800b4537a5fc8ba extends \Twig\Template
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
        // line 40
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 40, $this->source), "html", null, true);
        echo ">
  ";
        // line 41
        if (($context["header"] ?? null)) {
            // line 42
            echo "    <div class=\"view-header\">
      ";
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 43, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 46
        echo "  ";
        if (($context["exposed"] ?? null)) {
            // line 47
            echo "    <div class=\"view-filters\">
      ";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 48, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 51
        echo "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 52
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 53, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 56
        echo "
  ";
        // line 57
        if (($context["rows"] ?? null)) {
            // line 58
            echo "    <div class=\"view-content\">
      ";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 59, $this->source), "html", null, true);
            echo "
    </div>
  ";
        } elseif (        // line 61
($context["empty"] ?? null)) {
            // line 62
            echo "    <div class=\"view-empty\">
      ";
            // line 63
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 63, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 66
        echo "
  ";
        // line 67
        if (($context["pager"] ?? null)) {
            // line 68
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 68, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 70
        echo "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 71
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 72, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 75
        echo "  ";
        if (($context["more"] ?? null)) {
            // line 76
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 76, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 78
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 79
            echo "    <div class=\"view-footer\">
      ";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 80, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 83
        echo "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 84
            echo "    <div class=\"feed-icons\">
      ";
            // line 85
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 85, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 88
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/zircon/templates/views/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 88,  153 => 85,  150 => 84,  147 => 83,  141 => 80,  138 => 79,  135 => 78,  129 => 76,  126 => 75,  120 => 72,  117 => 71,  114 => 70,  108 => 68,  106 => 67,  103 => 66,  97 => 63,  94 => 62,  92 => 61,  87 => 59,  84 => 58,  82 => 57,  79 => 56,  73 => 53,  70 => 52,  67 => 51,  61 => 48,  58 => 47,  55 => 46,  49 => 43,  46 => 42,  44 => 41,  39 => 40,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/zircon/templates/views/views-view.html.twig", "/opt/lampp/htdocs/fitness_website/themes/zircon/templates/views/views-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 41);
        static $filters = array("escape" => 40);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
