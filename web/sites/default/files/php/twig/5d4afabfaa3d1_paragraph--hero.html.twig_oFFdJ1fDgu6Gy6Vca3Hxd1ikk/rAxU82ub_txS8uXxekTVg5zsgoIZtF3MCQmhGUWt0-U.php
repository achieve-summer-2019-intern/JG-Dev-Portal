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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph--hero.html.twig */
class __TwigTemplate_67d1d735c060a8c39646b1646d51a75464acab0352a6eae7e9ad10052afe2c59 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 9, "set" => 10, "embed" => 13];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'embed'],
                [],
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
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_background_style", []), 0, []), "value", [])) {
            // line 10
            echo "  ";
            $context["background_style"] = "dark";
        }
        // line 12
        echo "
";
        // line 13
        $this->loadTemplate("profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph--hero.html.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph--hero.html.twig", 13, "948629275")->display($context);
    }

    public function getTemplateName()
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph--hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 13,  61 => 12,  57 => 10,  55 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph--hero.html.twig", "/app/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph--hero.html.twig");
    }
}


/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph--hero.html.twig */
class __TwigTemplate_67d1d735c060a8c39646b1646d51a75464acab0352a6eae7e9ad10052afe2c59___948629275 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 20];
        $filters = ["escape" => 18, "render" => 20, "without" => 25];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'render', 'without'],
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
        return "paragraph.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("paragraph.html.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph--hero.html.twig", 13);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        // line 15
        echo "    <div class=\"hero__wrapper\">
      <div class=\"hero__content text-center py-9 py-md-0\">
        <div class=\"container\">
          ";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_title", [])), "html", null, true);
        echo "
          ";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_text", [])), "html", null, true);
        echo "
          ";
        // line 20
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_buttons", []))) {
            // line 21
            echo "            <div class=\"hero__buttons mt-5\">
              ";
            // line 22
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_buttons", [])), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 25
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "field_buttons", "field_media", "field_text", "field_title"), "html", null, true);
        echo "
        </div>
      </div>
      <div class=\"hero__media d-none d-md-block\">";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_media", [])), "html", null, true);
        // line 30
        echo "</div>
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph--hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 30,  180 => 29,  173 => 25,  167 => 22,  164 => 21,  162 => 20,  158 => 19,  154 => 18,  149 => 15,  146 => 14,  64 => 13,  61 => 12,  57 => 10,  55 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph--hero.html.twig", "/app/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph--hero.html.twig");
    }
}
