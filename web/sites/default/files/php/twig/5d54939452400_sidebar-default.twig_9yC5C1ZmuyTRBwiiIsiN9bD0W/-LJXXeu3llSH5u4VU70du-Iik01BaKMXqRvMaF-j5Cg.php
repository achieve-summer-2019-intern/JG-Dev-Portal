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

/* @apigee-kickstart/page/sidebar-default.twig */
class __TwigTemplate_5e76dc72671805cf1557c27a5b1cde59107ad5d0719326b84aa7a1c2904a63ba extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 31, "if" => 42];
        $filters = ["merge" => 36, "default" => 36, "escape" => 44, "trim" => 44, "join" => 44];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['merge', 'default', 'escape', 'trim', 'join'],
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
        // line 30
        echo "
";
        // line 31
        $context["content_classes"] = twig_array_merge([0 => (((        // line 32
($context["sidebar_first"] ?? null) && ($context["sidebar_second"] ?? null))) ? ("col-md-5 offset-md-1") : ("")), 1 => (((        // line 33
($context["sidebar_first"] ?? null) &&  !($context["sidebar_second"] ?? null))) ? ("col-md-8 offset-md-1") : ("")), 2 => ((( !        // line 34
($context["sidebar_first"] ?? null) && ($context["sidebar_second"] ?? null))) ? ("col-md-8") : ("")), 3 => ((( !        // line 35
($context["sidebar_first"] ?? null) &&  !($context["sidebar_second"] ?? null))) ? ("col-lg-7 col-xl-6") : (""))], ((        // line 36
(isset($context["content_classes"]) || array_key_exists("content_classes", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["content_classes"] ?? null)), [])) : ([])));
        // line 37
        echo "
";
        // line 38
        $context["content_no_sidebar_row_classes"] = (((isset($context["content_no_sidebar_row_classes"]) || array_key_exists("content_no_sidebar_row_classes", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["content_no_sidebar_row_classes"] ?? null)), [])) : ([]));
        // line 39
        $context["content_no_sidebar_col_classes"] = twig_array_merge([0 => "col-md"], (((isset($context["content_no_sidebar_col_classes"]) || array_key_exists("content_no_sidebar_col_classes", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["content_no_sidebar_col_classes"] ?? null)), [])) : ([])));
        // line 40
        echo "
";
        // line 41
        ob_start(function () { return ''; });
        // line 42
        echo "  ";
        if (($context["content"] ?? null)) {
            // line 43
            echo "    ";
            if ((($context["sidebar_first"] ?? null) || ($context["sidebar_second"] ?? null))) {
                // line 44
                echo "      <div class=\"page__content ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(twig_join_filter($this->sandbox->ensureToStringAllowed(($context["content_classes"] ?? null)), " ")), "html", null, true);
                echo "\">
        ";
                // line 45
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
                echo "
      </div>
    ";
            } else {
                // line 48
                echo "      ";
                ob_start(function () { return ''; });
                // line 49
                echo "        <div class=\"page__content ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(twig_join_filter($this->sandbox->ensureToStringAllowed(($context["content_no_sidebar_col_classes"] ?? null)), " ")), "html", null, true);
                echo "\">
          ";
                // line 50
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
                echo "
        </div>
      ";
                $context["content_no_sidebar"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 53
                echo "
      ";
                // line 54
                if (($context["content_no_sidebar_row_classes"] ?? null)) {
                    // line 55
                    echo "        <div class=\"row ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(twig_join_filter($this->sandbox->ensureToStringAllowed(($context["content_no_sidebar_row_classes"] ?? null)), " ")), "html", null, true);
                    echo "\">
          ";
                    // line 56
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_no_sidebar"] ?? null)), "html", null, true);
                    echo "
        </div>
      ";
                } else {
                    // line 59
                    echo "        ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_no_sidebar"] ?? null)), "html", null, true);
                    echo "
      ";
                }
                // line 61
                echo "    ";
            }
            // line 62
            echo "  ";
        }
        // line 63
        echo "
  ";
        // line 64
        if (($context["sidebar_first"] ?? null)) {
            // line 65
            echo "    <aside class=\"sidebar sidebar-first col-md order-md-first\">
      ";
            // line 66
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first"] ?? null)), "html", null, true);
            echo "
    </aside>
  ";
        }
        // line 69
        echo "
  ";
        // line 70
        if (($context["sidebar_second"] ?? null)) {
            // line 71
            echo "    <aside class=\"sidebar sidebar-second col-md order-md-last offset-md-1\">
      ";
            // line 72
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second"] ?? null)), "html", null, true);
            echo "
    </aside>
  ";
        }
        $context["sidebar_default_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 76
        echo "
<div class=\"page-layout-sidebar-default\">
  ";
        // line 78
        if (($context["container"] ?? null)) {
            // line 79
            echo "    <div class=\"container py-5\">
      <div class=\"row\">
        ";
            // line 81
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_default_content"] ?? null)), "html", null, true);
            echo "
      </div>
    </div>

  ";
        } else {
            // line 86
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_default_content"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 88
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@apigee-kickstart/page/sidebar-default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 88,  183 => 86,  175 => 81,  171 => 79,  169 => 78,  165 => 76,  158 => 72,  155 => 71,  153 => 70,  150 => 69,  144 => 66,  141 => 65,  139 => 64,  136 => 63,  133 => 62,  130 => 61,  124 => 59,  118 => 56,  113 => 55,  111 => 54,  108 => 53,  102 => 50,  97 => 49,  94 => 48,  88 => 45,  83 => 44,  80 => 43,  77 => 42,  75 => 41,  72 => 40,  70 => 39,  68 => 38,  65 => 37,  63 => 36,  62 => 35,  61 => 34,  60 => 33,  59 => 32,  58 => 31,  55 => 30,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@apigee-kickstart/page/sidebar-default.twig", "/app/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/src/components/page/sidebar-default.twig");
    }
}
