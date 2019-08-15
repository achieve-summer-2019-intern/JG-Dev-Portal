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

/* @apigee-kickstart/navbar/navbar.twig */
class __TwigTemplate_c9c1c021b656cad2a2cfe4e1035f647359177b453a07ea8edc74025f759bf890 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'branding' => [$this, 'block_branding'],
            'left' => [$this, 'block_left'],
            'right' => [$this, 'block_right'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 20, "if" => 25, "block" => 29, "include" => 36];
        $filters = ["escape" => 18, "join" => 24];
        $functions = ["attach_library" => 18];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'include'],
                ['escape', 'join'],
                ['attach_library']
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
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("radix/navbar"), "html", null, true);
        echo "

";
        // line 20
        $context["container"] = (((($context["container"] ?? null) == "fixed")) ? ("container") : (false));
        // line 21
        $context["placement"] = (($context["placement"]) ?? (""));
        // line 22
        $context["color"] = (($context["color"]) ?? ("light"));
        // line 23
        echo "
<nav class=\"navbar navbar-expand-lg justify-content-between navbar-";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color"] ?? null)), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placement"] ?? null)), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["utility_classes"] ?? null)), " "), "html", null, true);
        echo "\">
  ";
        // line 25
        if (($context["container"] ?? null)) {
            // line 26
            echo "    <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo "\">
  ";
        }
        // line 28
        echo "
  ";
        // line 29
        $this->displayBlock('branding', $context, $blocks);
        // line 32
        echo "
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\".navbar-collapse\" aria-controls=\"navbar-collapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\">
      ";
        // line 35
        if ( !($context["color"] ?? null)) {
            // line 36
            echo "        ";
            $this->loadTemplate("@apigee-kickstart/icons/navbar-toggle.svg", "@apigee-kickstart/navbar/navbar.twig", 36)->display($context);
            // line 37
            echo "      ";
        }
        // line 38
        echo "    </span>
  </button>

  <div class=\"collapse navbar-collapse\">
    ";
        // line 42
        $this->displayBlock('left', $context, $blocks);
        // line 45
        echo "
    ";
        // line 46
        $this->displayBlock('right', $context, $blocks);
        // line 49
        echo "  </div>

  ";
        // line 51
        if (($context["container"] ?? null)) {
            // line 52
            echo "    </div>
  ";
        }
        // line 54
        echo "</nav>
";
    }

    // line 29
    public function block_branding($context, array $blocks = [])
    {
        // line 30
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["branding"] ?? null)), "html", null, true);
        echo "
  ";
    }

    // line 42
    public function block_left($context, array $blocks = [])
    {
        // line 43
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["left"] ?? null)), "html", null, true);
        echo "
    ";
    }

    // line 46
    public function block_right($context, array $blocks = [])
    {
        // line 47
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["right"] ?? null)), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "@apigee-kickstart/navbar/navbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 47,  154 => 46,  147 => 43,  144 => 42,  137 => 30,  134 => 29,  129 => 54,  125 => 52,  123 => 51,  119 => 49,  117 => 46,  114 => 45,  112 => 42,  106 => 38,  103 => 37,  100 => 36,  98 => 35,  93 => 32,  91 => 29,  88 => 28,  82 => 26,  80 => 25,  72 => 24,  69 => 23,  67 => 22,  65 => 21,  63 => 20,  58 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@apigee-kickstart/navbar/navbar.twig", "/app/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/src/components/navbar/navbar.twig");
    }
}
