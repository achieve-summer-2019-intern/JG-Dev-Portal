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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/node/node--full.html.twig */
class __TwigTemplate_477b9e6607aff4767d13ac8ec0200c5f1343fa839bb7193f42be8eecbf382dbe extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 11];
        $filters = ["render" => 11, "escape" => 12, "without" => 22];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['render', 'escape', 'without'],
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

    protected function doGetParent(array $context)
    {
        // line 8
        return "@apigee-kickstart/node/node.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@apigee-kickstart/node/node.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/node/node--full.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        // line 10
        echo "
  ";
        // line 11
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_header", []))) {
            // line 12
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_header", [])), "html", null, true);
            echo "
    ";
            // line 13
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["tasks"] ?? null))) {
                // line 14
                echo "      <div class=\"page__tasks\">
        <div class=\"container\">
          ";
                // line 16
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tasks"] ?? null)), "html", null, true);
                echo "
        </div>
      </div>
    ";
            }
            // line 20
            echo "  ";
        }
        // line 21
        echo "
  ";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "field_header"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/node/node--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 22,  93 => 21,  90 => 20,  83 => 16,  79 => 14,  77 => 13,  72 => 12,  70 => 11,  67 => 10,  64 => 9,  54 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/node/node--full.html.twig", "/app/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/node/node--full.html.twig");
    }
}
