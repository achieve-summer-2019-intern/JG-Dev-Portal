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

/* apigee-entity.html.twig */
class __TwigTemplate_ea39d3afa440dfae4efc2ad4b5fa4564f5a526497652296cee8ff9165f18f86c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'apigee_entity' => [$this, 'block_apigee_entity'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 49, "block" => 57, "if" => 62];
        $filters = ["merge" => 54, "clean_class" => 51, "default" => 54, "escape" => 58, "without" => 58];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['merge', 'clean_class', 'default', 'escape', 'without'],
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
        // line 47
        echo "
";
        // line 49
        $context["classes"] = twig_array_merge([0 => "apigee-entity", 1 => ((        // line 51
($context["view_mode"] ?? null)) ? (("apigee-entity--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 2 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 52
($context["entity"] ?? null), "getEntityTypeId", []))), 3 => ((        // line 53
($context["view_mode"] ?? null)) ? (((\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["entity"] ?? null), "getEntityTypeId", []))) . "--view-mode-") . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : (""))], ((        // line 54
(isset($context["classes"]) || array_key_exists("classes", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), [])) : ([])));
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('apigee_entity', $context, $blocks);
    }

    public function block_apigee_entity($context, array $blocks = [])
    {
        // line 58
        echo "  <article role=\"article\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "role"), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">

    ";
        // line 60
        $this->displayBlock('content', $context, $blocks);
        // line 73
        echo "
  </article>
";
    }

    // line 60
    public function block_content($context, array $blocks = [])
    {
        // line 61
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
      ";
        // line 62
        if ((($context["label"] ?? null) && (($context["view_mode"] ?? null) != "full"))) {
            // line 63
            echo "        <h2";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 64
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "
        </h2>
      ";
        }
        // line 67
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "

      <div";
        // line 69
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null)), "html", null, true);
        echo ">
        ";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "apigee-entity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 70,  116 => 69,  110 => 67,  104 => 64,  99 => 63,  97 => 62,  92 => 61,  89 => 60,  83 => 73,  81 => 60,  75 => 58,  69 => 57,  66 => 56,  64 => 54,  63 => 53,  62 => 52,  61 => 51,  60 => 49,  57 => 47,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "apigee-entity.html.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity.html.twig");
    }
}
