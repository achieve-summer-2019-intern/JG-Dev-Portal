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

/* profiles/contrib/apigee_devportal_kickstart/modules/custom/apigee_kickstart_enhancement/templates/pseudo-field.html.twig */
class __TwigTemplate_aa8f3c1eaf53c2b2c4ffb77f13185ab54d38efa46f136672f52e0d7df12ae2fc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 9];
        $filters = ["escape" => 10, "clean_class" => 10];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'clean_class'],
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
        // line 9
        if ($this->getAttribute(($context["field"] ?? null), "value", [])) {
            // line 10
            echo "  <div class=\"field field-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
            echo "\">
    ";
            // line 11
            if ($this->getAttribute(($context["field"] ?? null), "label", [])) {
                // line 12
                echo "      <div class=\"field__label\">
        ";
                // line 13
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["field"] ?? null), "label", [])), "html", null, true);
                echo ":
      </div>
    ";
            }
            // line 16
            echo "
    <div>
      ";
            // line 18
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["field"] ?? null), "value", [])), "html", null, true);
            echo "
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "profiles/contrib/apigee_devportal_kickstart/modules/custom/apigee_kickstart_enhancement/templates/pseudo-field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 18,  73 => 16,  67 => 13,  64 => 12,  62 => 11,  57 => 10,  55 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/modules/custom/apigee_kickstart_enhancement/templates/pseudo-field.html.twig", "/app/web/profiles/contrib/apigee_devportal_kickstart/modules/custom/apigee_kickstart_enhancement/templates/pseudo-field.html.twig");
    }
}
