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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/menu/menu-local-tasks.html.twig */
class __TwigTemplate_7b0ec0e66452d876971981b57d1e65a012f46915d963fb008ba297c2fdf4a428 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 58];
        $filters = ["escape" => 56, "t" => 59];
        $functions = ["attach_library" => 56];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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
        // line 56
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("seven/drupal.nav-tabs"), "html", null, true);
        echo "

";
        // line 58
        if (($context["primary"] ?? null)) {
            // line 59
            echo "  <h2 class=\"visually-hidden\" id=\"primary-tabs-title\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Primary tabs"));
            echo "</h2>
  <nav aria-labelledby=\"primary-tabs-title\" class=\"is-horizontal is-collapsible mb-3\" data-drupal-nav-tabs role=\"navigation\">
    <button class=\"reset-appearance tabs__trigger\" aria-label=\"";
            // line 61
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Primary tabs display toggle"));
            echo "\" data-drupal-nav-tabs-trigger>&bull;&bull;&bull;</button>
    <ul class=\"tabs nav-tabs nav-tabs--primary clearfix\" data-drupal-nav-tabs-target>";
            // line 62
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["primary"] ?? null)), "html", null, true);
            echo "</ul>
  </nav>
";
        }
        // line 65
        if (($context["secondary"] ?? null)) {
            // line 66
            echo "  <h2 class=\"visually-hidden\" id=\"secondary-tabs-title\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Secondary tabs"));
            echo "</h2>
  <nav aria-labelledby=\"secondary-tabs-title\" class=\"is-horizontal mb-3\" data-drupal-nav-tabs role=\"navigation\">
    <ul class=\"tabs nav nav-tabs--secondary clearfix\">";
            // line 68
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary"] ?? null)), "html", null, true);
            echo "</ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/menu/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 68,  80 => 66,  78 => 65,  72 => 62,  68 => 61,  62 => 59,  60 => 58,  55 => 56,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/menu/menu-local-tasks.html.twig", "/app/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/menu/menu-local-tasks.html.twig");
    }
}
