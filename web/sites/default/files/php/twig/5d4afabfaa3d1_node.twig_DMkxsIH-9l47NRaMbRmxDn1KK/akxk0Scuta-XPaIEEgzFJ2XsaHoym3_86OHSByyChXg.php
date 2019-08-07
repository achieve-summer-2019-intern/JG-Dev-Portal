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

/* @apigee-kickstart/node/node.twig */
class __TwigTemplate_5ee5be37281b81a1f355b3a94bf40a460d95c1771fc9e972ce6fe97113017b33 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 8, "block" => 21];
        $filters = ["merge" => 15, "clean_class" => 13, "default" => 15, "escape" => 17];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
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
        // line 7
        echo "
";
        // line 8
        $context["classes"] = twig_array_merge([0 => "node", 1 => (($this->getAttribute(        // line 10
($context["node"] ?? null), "isPromoted", [], "method")) ? ("node--promoted") : ("")), 2 => (($this->getAttribute(        // line 11
($context["node"] ?? null), "isSticky", [], "method")) ? ("node--sticky") : ("")), 3 => (( !$this->getAttribute(        // line 12
($context["node"] ?? null), "isPublished", [], "method")) ? ("node--unpublished") : ("")), 4 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 13
($context["node"] ?? null), "bundle", []))), 5 => ((\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 14
($context["node"] ?? null), "bundle", []))) . "--") . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))], ((        // line 15
(isset($context["classes"]) || array_key_exists("classes", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), [])) : ([])));
        // line 16
        echo "
<article";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "

  ";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 24
        echo "</article>
";
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        // line 22
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@apigee-kickstart/node/node.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 22,  90 => 21,  85 => 24,  83 => 21,  78 => 19,  74 => 18,  70 => 17,  67 => 16,  65 => 15,  64 => 14,  63 => 13,  62 => 12,  61 => 11,  60 => 10,  59 => 8,  56 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@apigee-kickstart/node/node.twig", "/app/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/src/components/node/node.twig");
    }
}
