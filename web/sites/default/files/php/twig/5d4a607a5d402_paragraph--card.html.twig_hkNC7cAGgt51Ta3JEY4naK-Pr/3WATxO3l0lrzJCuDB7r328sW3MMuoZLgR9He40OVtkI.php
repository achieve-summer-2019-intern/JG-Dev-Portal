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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph--card.html.twig */
class __TwigTemplate_015eca36c0f2832ec7655ff02414c820ff78de9016a22c7ffed9656a2872a1f2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 10];
        $filters = ["without" => 15];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['without'],
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
        // line 7
        return "paragraph.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("paragraph.html.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph--card.html.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_paragraph($context, array $blocks = [])
    {
        // line 9
        echo "
  ";
        // line 10
        $this->loadTemplate("@apigee-kickstart/card/card.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph--card.html.twig", 10)->display(twig_array_merge($context, ["print_attributes" => true, "classes" =>         // line 12
($context["classes"] ?? null), "image" => $this->getAttribute(        // line 13
($context["content"] ?? null), "field_image", []), "title" => $this->getAttribute(        // line 14
($context["content"] ?? null), "field_title", []), "body" => $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter(        // line 15
($context["content"] ?? null), "field_image", "field_link", "field_title"), "footer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 16
($context["content"] ?? null), "field_link", []), 0, []), "#title", [], "array"), "url" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 17
($context["content"] ?? null), "field_link", []), 0, []), "#url", [], "array"), "hover_shadow" => true]));
        // line 20
        echo "
";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph--card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  76 => 17,  75 => 16,  74 => 15,  73 => 14,  72 => 13,  71 => 12,  70 => 10,  67 => 9,  64 => 8,  54 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph--card.html.twig", "/app/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph--card.html.twig");
    }
}
