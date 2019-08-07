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

/* paragraph.html.twig */
class __TwigTemplate_e147772ee20d508e4456ac22584a20a74fc00385b0ba191fc33e7861a14802cb extends \Twig\Template
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
        $tags = ["set" => 43, "if" => 54, "block" => 62];
        $filters = ["merge" => 48, "clean_class" => 46, "default" => 48, "escape" => 63];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['merge', 'clean_class', 'default', 'escape'],
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
        // line 41
        echo "
";
        // line 43
        $context["classes"] = twig_array_merge([0 => "paragraph", 1 => (( !$this->getAttribute(        // line 45
($context["paragraph"] ?? null), "isPublished", [], "method")) ? ("paragraph--unpublished") : ("")), 2 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 46
($context["paragraph"] ?? null), "bundle", []))), 3 => ((\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 47
($context["paragraph"] ?? null), "bundle", []))) . "--") . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))], ((        // line 48
(isset($context["classes"]) || array_key_exists("classes", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), [])) : ([])));
        // line 49
        echo "
";
        // line 53
        $context["background_style"] = (($context["background_style"]) ?? ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_background_style", [], "any", false, true), 0, [], "any", false, true), "value", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_background_style", [], "any", false, true), 0, [], "any", false, true), "value", [])), null)) : (null))));
        // line 54
        if (($context["background_style"] ?? null)) {
            // line 55
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), [0 => ("bg-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["background_style"] ?? null))))]);
            // line 56
            echo "
  ";
            // line 57
            if ((($context["background_style"] ?? null) == "dark")) {
                // line 58
                echo "    ";
                $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), [0 => "text-light"]);
                // line 59
                echo "  ";
            }
        }
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 63
        echo "  <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
    ";
        // line 64
        $this->displayBlock('content', $context, $blocks);
        // line 67
        echo "  </div>
";
    }

    // line 64
    public function block_content($context, array $blocks = [])
    {
        // line 65
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "paragraph.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 65,  109 => 64,  104 => 67,  102 => 64,  97 => 63,  91 => 62,  88 => 61,  84 => 59,  81 => 58,  79 => 57,  76 => 56,  73 => 55,  71 => 54,  69 => 53,  66 => 49,  64 => 48,  63 => 47,  62 => 46,  61 => 45,  60 => 43,  57 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "paragraph.html.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph.html.twig");
    }
}
