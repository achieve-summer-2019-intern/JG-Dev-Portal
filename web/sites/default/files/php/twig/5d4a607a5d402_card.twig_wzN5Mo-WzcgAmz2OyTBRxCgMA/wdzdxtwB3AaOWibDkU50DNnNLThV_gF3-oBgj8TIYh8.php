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

/* @apigee-kickstart/card/card.twig */
class __TwigTemplate_d53ca6a12c45b29835ac6941df097b5e3f229198ca19cb2b7afdcaba1d28705b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 35, "if" => 41, "block" => 60];
        $filters = ["default" => 35, "merge" => 39, "escape" => 43, "trim" => 45, "join" => 45];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['default', 'merge', 'escape', 'trim', 'join'],
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
        // line 34
        echo "
";
        // line 35
        $context["hover_shadow"] = (((isset($context["hover_shadow"]) || array_key_exists("hover_shadow", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["hover_shadow"] ?? null)), false)) : (false));
        // line 36
        $context["classes"] = twig_array_merge([0 => "card", 1 => ((        // line 38
($context["hover_shadow"] ?? null)) ? ("has-hover-shadow") : (""))], ((        // line 39
(isset($context["classes"]) || array_key_exists("classes", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), [])) : ([])));
        // line 40
        echo "
";
        // line 41
        if ((($context["print_attributes"] ?? null) && ($context["attributes"] ?? null))) {
            // line 42
            echo "  ";
            // line 43
            echo "  <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">
";
        } else {
            // line 45
            echo "  <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(twig_join_filter($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), " ")), "html", null, true);
            echo "\">
";
        }
        // line 47
        echo "
  ";
        // line 48
        if (($context["url"] ?? null)) {
            // line 49
            echo "    <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\">
  ";
        }
        // line 51
        echo "
    ";
        // line 52
        if (($context["image"] ?? null)) {
            // line 53
            echo "      <div class=\"card-img-top\">
        ";
            // line 54
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null)), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 57
        echo "
    ";
        // line 58
        if ((($context["title"] ?? null) || ($context["body"] ?? null))) {
            // line 59
            echo "      <div class=\"card-body\">
        ";
            // line 60
            $this->displayBlock('body', $context, $blocks);
            // line 64
            echo "      </div>
    ";
        }
        // line 66
        echo "
    ";
        // line 67
        if (($context["footer"] ?? null)) {
            // line 68
            echo "      <div class=\"card-footer\">
        ";
            // line 69
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null)), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 72
        echo "
  ";
        // line 73
        if (($context["url"] ?? null)) {
            // line 74
            echo "    </a>
  ";
        }
        // line 76
        echo "</div>
";
    }

    // line 60
    public function block_body($context, array $blocks = [])
    {
        // line 61
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "
          ";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null)), "html", null, true);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@apigee-kickstart/card/card.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 62,  154 => 61,  151 => 60,  146 => 76,  142 => 74,  140 => 73,  137 => 72,  131 => 69,  128 => 68,  126 => 67,  123 => 66,  119 => 64,  117 => 60,  114 => 59,  112 => 58,  109 => 57,  103 => 54,  100 => 53,  98 => 52,  95 => 51,  89 => 49,  87 => 48,  84 => 47,  78 => 45,  72 => 43,  70 => 42,  68 => 41,  65 => 40,  63 => 39,  62 => 38,  61 => 36,  59 => 35,  56 => 34,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@apigee-kickstart/card/card.twig", "/app/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/src/components/card/card.twig");
    }
}
