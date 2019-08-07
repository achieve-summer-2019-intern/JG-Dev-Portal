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

/* modules/contrib/better_exposed_filters/templates/bef-checkboxes.html.twig */
class __TwigTemplate_a08d94389977b652acd1c1138e62e0a7e532ba7f25426412b613bf0868989407 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 13, "for" => 22, "if" => 24, "include" => 26];
        $filters = ["escape" => 20];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'include'],
                ['escape'],
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
        // line 13
        $context["classes"] = [0 => "form-checkboxes", 1 => ((        // line 15
($context["isNested"] ?? null)) ? ("bef-nested") : ("")), 2 => ((        // line 16
($context["hasSelectAllNone"] ?? null)) ? ("bef-select-all-none") : ("")), 3 => ((        // line 17
($context["hasSelectAllNoneNested"] ?? null)) ? ("bef-select-all-none-nested") : (""))];
        // line 20
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 21
        $context["current_nesting_level"] = 0;
        // line 22
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["children"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 23
            echo "    ";
            $context["item"] = $this->getAttribute(($context["element"] ?? null), $context["child"]);
            // line 24
            echo "    ";
            if (($context["isNested"] ?? null)) {
                // line 25
                echo "      ";
                $context["new_nesting_level"] = $this->getAttribute(($context["depth"] ?? null), $context["child"]);
                // line 26
                echo "      ";
                $this->loadTemplate("@better_exposed_filters/bef-nested-elements.html.twig", "modules/contrib/better_exposed_filters/templates/bef-checkboxes.html.twig", 26)->display($context);
                // line 27
                echo "      ";
                $context["current_nesting_level"] = ($context["new_nesting_level"] ?? null);
                // line 28
                echo "    ";
            } else {
                // line 29
                echo "      ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item"] ?? null)), "html", null, true);
                echo "
    ";
            }
            // line 31
            echo "  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/better_exposed_filters/templates/bef-checkboxes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 32,  109 => 31,  103 => 29,  100 => 28,  97 => 27,  94 => 26,  91 => 25,  88 => 24,  85 => 23,  67 => 22,  65 => 21,  60 => 20,  58 => 17,  57 => 16,  56 => 15,  55 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/better_exposed_filters/templates/bef-checkboxes.html.twig", "/app/web/modules/contrib/better_exposed_filters/templates/bef-checkboxes.html.twig");
    }
}
