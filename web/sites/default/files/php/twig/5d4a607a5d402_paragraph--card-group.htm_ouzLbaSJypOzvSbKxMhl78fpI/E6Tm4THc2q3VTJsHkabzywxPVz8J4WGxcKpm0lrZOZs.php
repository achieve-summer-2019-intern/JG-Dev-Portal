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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph--card-group.html.twig */
class __TwigTemplate_00de310dd5ec93310f1e5da0eab2ba5d8270589a7922a45f0b80f7199a24c15d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 7, "if" => 15, "block" => 23];
        $filters = ["clean_class" => 10, "default" => 14, "merge" => 16, "escape" => 24, "without" => 29];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'default', 'merge', 'escape', 'without'],
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
        // line 7
        $context["classes"] = [0 => "paragraph", 1 => (( !$this->getAttribute(        // line 9
($context["paragraph"] ?? null), "isPublished", [], "method")) ? ("paragraph--unpublished") : ("")), 2 => ((\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 10
($context["paragraph"] ?? null), "bundle", []))) . "--") . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null)))), 3 => "py-7"];
        // line 13
        echo "
";
        // line 14
        $context["background_style"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_background_style", [], "any", false, true), 0, [], "any", false, true), "value", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_background_style", [], "any", false, true), 0, [], "any", false, true), "value", [])), null)) : (null));
        // line 15
        if (($context["background_style"] ?? null)) {
            // line 16
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), [0 => ("bg-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["background_style"] ?? null))))]);
            // line 17
            echo "
  ";
            // line 18
            if ((($context["background_style"] ?? null) == "dark")) {
                // line 19
                echo "    ";
                $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), [0 => "text-light"]);
                // line 20
                echo "  ";
            }
        }
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 24
        echo "  <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
    ";
        // line 25
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "  </div>
";
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        // line 26
        echo "      <div class=\"container\">
        ";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_title", [])), "html", null, true);
        echo "
        <div class=\"card-deck\">
          ";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "field_title", "field_buttons"), "html", null, true);
        echo "
        </div>
        ";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_buttons", [])), "html", null, true);
        echo "
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph--card-group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 31,  115 => 29,  110 => 27,  107 => 26,  104 => 25,  99 => 34,  97 => 25,  92 => 24,  86 => 23,  83 => 22,  79 => 20,  76 => 19,  74 => 18,  71 => 17,  68 => 16,  66 => 15,  64 => 14,  61 => 13,  59 => 10,  58 => 9,  57 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph--card-group.html.twig", "/app/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph--card-group.html.twig");
    }
}
