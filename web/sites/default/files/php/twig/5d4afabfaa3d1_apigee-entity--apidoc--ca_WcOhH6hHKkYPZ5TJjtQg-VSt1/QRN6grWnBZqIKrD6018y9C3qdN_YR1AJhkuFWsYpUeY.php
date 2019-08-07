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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--apidoc--card.html.twig */
class __TwigTemplate_bbb785d920bb57056004ec81d6f921cc8ba0b04184ed1ef4cea5d0dca10896ce extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 17, "include" => 21];
        $filters = ["escape" => 18, "without" => 26];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
                ['escape', 'without'],
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
        // line 14
        return "apigee-entity.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("apigee-entity.html.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--apidoc--card.html.twig", 14);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        // line 16
        echo "
  ";
        // line 17
        ob_start(function () { return ''; });
        // line 18
        echo "    <h2 class=\"card-title\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["entity"] ?? null), "label", [])), "html", null, true);
        echo "</h2>
  ";
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 20
        echo "
  ";
        // line 21
        $this->loadTemplate("@apigee-kickstart/card/card.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--apidoc--card.html.twig", 21)->display(twig_array_merge($context, ["classes" => [0 => "api-card"], "url" => $this->getAttribute($this->getAttribute(        // line 23
($context["content"] ?? null), "field_link", []), "#url", [], "array"), "title" =>         // line 24
($context["title"] ?? null), "image" => $this->getAttribute(        // line 25
($context["content"] ?? null), "field_image", []), "body" => $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter(        // line 26
($context["content"] ?? null), "name", "field_image", "field_link", "spec"), "footer" => $this->getAttribute($this->getAttribute(        // line 27
($context["content"] ?? null), "field_link", []), "#title", [], "array"), "hover_shadow" => true]));
    }

    public function getTemplateName()
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--apidoc--card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 27,  85 => 26,  84 => 25,  83 => 24,  82 => 23,  81 => 21,  78 => 20,  72 => 18,  70 => 17,  67 => 16,  64 => 15,  54 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--apidoc--card.html.twig", "/app/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--apidoc--card.html.twig");
    }
}
