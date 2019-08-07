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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/field/field--paragraph--field-link--button.html.twig */
class __TwigTemplate_96d1c2888924ccdee1cd6f07373e648c42c4a00f58d923c3888360c1d91f6a1e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 7, "set" => 9, "if" => 12];
        $filters = ["default" => 10, "merge" => 13, "escape" => 25];
        $functions = ["create_attribute" => 20];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['default', 'merge', 'escape'],
                ['create_attribute']
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
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "
  ";
            // line 9
            $context["classes"] = [0 => "btn"];
            // line 10
            echo "  ";
            $context["button_style"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["element"] ?? null), "#object", [], "array", false, true), "field_button_style", [], "any", false, true), "value", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["element"] ?? null), "#object", [], "array", false, true), "field_button_style", [], "any", false, true), "value", [])), "primary")) : ("primary"));
            // line 11
            echo "
  ";
            // line 12
            if ((($context["button_style"] ?? null) == "primary")) {
                // line 13
                echo "    ";
                $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), [0 => "btn-primary"]);
                // line 14
                echo "  ";
            } elseif ((($context["button_style"] ?? null) == "secondary")) {
                // line 15
                echo "    ";
                $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), [0 => "btn-outline-primary"]);
                // line 16
                echo "  ";
            }
            // line 17
            echo "
  ";
            // line 19
            echo "  ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", []), "#options", [], "array"), "attributes", [])) {
                // line 20
                echo "    ";
                $context["link_attributes"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", []), "#options", [], "array"), "attributes", [])));
                // line 21
                echo "  ";
            } else {
                // line 22
                echo "    ";
                $context["link_attributes"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute();
                // line 23
                echo "  ";
            }
            // line 24
            echo "
  <a";
            // line 25
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["link_attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo " href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", []), "#url", [], "array"), "toString", [])), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "content", []), "#title", [], "array")), "html", null, true);
            echo "</a>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/field/field--paragraph--field-link--button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 25,  102 => 24,  99 => 23,  96 => 22,  93 => 21,  90 => 20,  87 => 19,  84 => 17,  81 => 16,  78 => 15,  75 => 14,  72 => 13,  70 => 12,  67 => 11,  64 => 10,  62 => 9,  59 => 8,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/field/field--paragraph--field-link--button.html.twig", "/app/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/field/field--paragraph--field-link--button.html.twig");
    }
}
