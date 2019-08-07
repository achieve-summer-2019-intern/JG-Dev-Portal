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

/* @apigee-kickstart/page/sidebar-bottom.twig */
class __TwigTemplate_92d7d3459f6b44a3650c1ddc1b5459bc56c5e82de846ce9903c07c16d114eabf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 24, "if" => 31];
        $filters = ["merge" => 28, "default" => 28, "escape" => 37, "trim" => 55, "join" => 55];
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
        // line 23
        echo "
";
        // line 24
        $context["sidebar_classes"] = twig_array_merge([0 => (((        // line 25
($context["sidebar_first"] ?? null) && ($context["sidebar_second"] ?? null))) ? ("col-md-auto") : ("")), 1 => (((        // line 26
($context["sidebar_first"] ?? null) &&  !($context["sidebar_second"] ?? null))) ? ("col-md d-md-flex justify-content-around") : ("")), 2 => ((( !        // line 27
($context["sidebar_first"] ?? null) && ($context["sidebar_second"] ?? null))) ? ("col-md d-md-flex justify-content-around") : (""))], ((        // line 28
(isset($context["sidebar_classes"]) || array_key_exists("sidebar_classes", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["sidebar_classes"] ?? null)), [])) : ([])));
        // line 29
        echo "
";
        // line 30
        ob_start(function () { return ''; });
        // line 31
        echo "  ";
        if (($context["content"] ?? null)) {
            // line 32
            echo "    <div class=\"page-layout-sidebar-bottom__top\">
      ";
            // line 33
            if (($context["container"] ?? null)) {
                // line 34
                echo "        <div class=\"container py-5\">
          <div class=\"row\">
            <div class=\"page__content col\">
              ";
                // line 37
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
                echo "
            </div>
          </div>
        </div>

      ";
            } else {
                // line 43
                echo "        <div class=\"page__content\">
          ";
                // line 44
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 47
            echo "    </div>
  ";
        }
        // line 49
        echo "
  ";
        // line 50
        if ((($context["sidebar_first"] ?? null) || ($context["sidebar_second"] ?? null))) {
            // line 51
            echo "    <div class=\"page-layout-sidebar-bottom__bottom border-top\">
      <div class=\"container py-5\">
        <div class=\"row justify-content-around pt-7\">
          ";
            // line 54
            if (($context["sidebar_first"] ?? null)) {
                // line 55
                echo "            <aside class=\"sidebar sidebar-first ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(twig_join_filter($this->sandbox->ensureToStringAllowed(($context["sidebar_classes"] ?? null)), " ")), "html", null, true);
                echo "\">
              ";
                // line 56
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first"] ?? null)), "html", null, true);
                echo "
            </aside>
          ";
            }
            // line 59
            echo "
          ";
            // line 60
            if (($context["sidebar_second"] ?? null)) {
                // line 61
                echo "            <aside class=\"sidebar sidebar-second ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(twig_join_filter($this->sandbox->ensureToStringAllowed(($context["sidebar_classes"] ?? null)), " ")), "html", null, true);
                echo "\">
              ";
                // line 62
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second"] ?? null)), "html", null, true);
                echo "
            </aside>
          ";
            }
            // line 65
            echo "        </div>
      </div>
    </div>
  ";
        }
        $context["sidebar_bottom_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 70
        echo "
<div class=\"page-layout-sidebar-bottom\">
  ";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_bottom_content"] ?? null)), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@apigee-kickstart/page/sidebar-bottom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 72,  150 => 70,  143 => 65,  137 => 62,  132 => 61,  130 => 60,  127 => 59,  121 => 56,  116 => 55,  114 => 54,  109 => 51,  107 => 50,  104 => 49,  100 => 47,  94 => 44,  91 => 43,  82 => 37,  77 => 34,  75 => 33,  72 => 32,  69 => 31,  67 => 30,  64 => 29,  62 => 28,  61 => 27,  60 => 26,  59 => 25,  58 => 24,  55 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@apigee-kickstart/page/sidebar-bottom.twig", "/app/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/src/components/page/sidebar-bottom.twig");
    }
}
