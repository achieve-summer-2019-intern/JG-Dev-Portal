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

/* page.html.twig */
class __TwigTemplate_eb6f08c0b246d9fb1bbec612228e0848106ae82d7912fc30ddceccd78365b6b6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 63, "embed" => 76, "if" => 103, "block" => 143, "include" => 145];
        $filters = ["merge" => 65, "default" => 65, "escape" => 75, "render" => 103, "without" => 117];
        $functions = ["create_attribute" => 68];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'embed', 'if', 'block', 'include'],
                ['merge', 'default', 'escape', 'render', 'without'],
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
        // line 61
        echo "
";
        // line 63
        $context["classes"] = twig_array_merge([0 => "page"], ((        // line 65
(isset($context["classes"]) || array_key_exists("classes", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), [])) : ([])));
        // line 66
        echo "
";
        // line 67
        $context["main_container"] = (($context["main_container"]) ?? (true));
        // line 68
        $context["main_attributes"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute();
        // line 69
        $context["main_classes"] = twig_array_merge([0 => "main"], ((        // line 71
(isset($context["main_classes"]) || array_key_exists("main_classes", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["main_classes"] ?? null)), [])) : ([])));
        // line 72
        echo "
";
        // line 73
        $context["sidebar_placement"] = (((isset($context["sidebar_placement"]) || array_key_exists("sidebar_placement", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["sidebar_placement"] ?? null)), "default")) : ("default"));
        // line 74
        echo "
<div";
        // line 75
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 76
        $this->loadTemplate("page.html.twig", "page.html.twig", 76, "1562417971")->display(twig_array_merge($context, ["placement" => "sticky-top", "container" => "fixed", "color" => false]));
        // line 102
        echo "
  ";
        // line 103
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "breadcrumbs", []))) {
            // line 104
            echo "    <nav aria-label=\"breadcrumb\" class=\"page__breadcrumbs\">
      <div class=\"container\">
        <ol class=\"breadcrumb\">
          ";
            // line 107
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumbs", [])), "html", null, true);
            echo "
        </ol>
      </div>
    </nav>
  ";
        }
        // line 112
        echo "
  ";
        // line 113
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "header", []))) {
            // line 114
            echo "    <header class=\"page__header\">
      ";
            // line 116
            echo "      ";
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_header", []), "value", [])) {
                // line 117
                echo "        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "apigee_kickstart_title"), "html", null, true);
                echo "
      ";
            } else {
                // line 119
                echo "        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
                echo "
      ";
            }
            // line 121
            echo "    </header>
  ";
        }
        // line 123
        echo "
  ";
        // line 125
        echo "  ";
        if (($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "tasks", [])) &&  !$this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_header", []), "value", []))) {
            // line 126
            echo "    <div class=\"page__tasks\">
      <div class=\"container\">
        ";
            // line 128
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "tasks", [])), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 132
        echo "
  ";
        // line 133
        if ($this->getAttribute(($context["page"] ?? null), "content_above", [])) {
            // line 134
            echo "    <div class=\"page__content-above\">
      <div class=\"container-fluid px-0\">
        ";
            // line 136
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_above", [])), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 140
        echo "
  <main";
        // line 141
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["main_attributes"] ?? null), "addClass", [0 => ($context["main_classes"] ?? null)], "method")), "html", null, true);
        echo " role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 143
        echo "    ";
        $this->displayBlock('main', $context, $blocks);
        // line 167
        echo "  </main>

  ";
        // line 169
        if ($this->getAttribute(($context["page"] ?? null), "content_below", [])) {
            // line 170
            echo "    <div class=\"page__content-below\">
      <div class=\"container-fluid px-0\">
        ";
            // line 172
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_below", [])), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 176
        echo "
  ";
        // line 177
        if (($this->getAttribute(($context["page"] ?? null), "footer", []) || $this->getAttribute(($context["page"] ?? null), "copyright", []))) {
            // line 178
            echo "    <footer class=\"page__footer\">
      ";
            // line 179
            if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
                // line 180
                echo "        <div class=\"footer pt-5 pb-4 pb-md-8\">
          <div class=\"container\">
            <div class=\"d-md-flex justify-content-md-between\">
              ";
                // line 183
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
                echo "
            </div>
          </div>
        </div>
      ";
            }
            // line 188
            echo "
      ";
            // line 189
            if ($this->getAttribute(($context["page"] ?? null), "copyright", [])) {
                // line 190
                echo "        <div class=\"copyright py-1\">
          <div class=\"container\">
            <div class=\"d-md-flex justify-content-md-end\">
              ";
                // line 193
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "copyright", [])), "html", null, true);
                echo "
            </div>
          </div>
        </div>
      ";
            }
            // line 198
            echo "    </footer>
  ";
        }
        // line 200
        echo "</div>
";
    }

    // line 143
    public function block_main($context, array $blocks = [])
    {
        // line 144
        echo "      ";
        if ((($context["sidebar_placement"] ?? null) == "bottom")) {
            // line 145
            echo "        ";
            $this->loadTemplate("@apigee-kickstart/page/sidebar-bottom.twig", "page.html.twig", 145)->display(twig_array_merge($context, ["container" =>             // line 146
($context["main_container"] ?? null), "content" => $this->getAttribute(            // line 147
($context["page"] ?? null), "content", []), "sidebar_first" => $this->getAttribute(            // line 148
($context["page"] ?? null), "sidebar_first", []), "sidebar_second" => $this->getAttribute(            // line 149
($context["page"] ?? null), "sidebar_second", [])]));
            // line 151
            echo "
      ";
        } elseif ((        // line 152
($context["sidebar_placement"] ?? null) == "none")) {
            // line 153
            echo "        ";
            $this->loadTemplate("@apigee-kickstart/page/sidebar-none.twig", "page.html.twig", 153)->display(twig_array_merge($context, ["container" =>             // line 154
($context["main_container"] ?? null), "content" => $this->getAttribute(            // line 155
($context["page"] ?? null), "content", [])]));
            // line 157
            echo "
      ";
        } else {
            // line 159
            echo "        ";
            $this->loadTemplate("@apigee-kickstart/page/sidebar-default.twig", "page.html.twig", 159)->display(twig_array_merge($context, ["container" =>             // line 160
($context["main_container"] ?? null), "content" => $this->getAttribute(            // line 161
($context["page"] ?? null), "content", []), "sidebar_first" => $this->getAttribute(            // line 162
($context["page"] ?? null), "sidebar_first", []), "sidebar_second" => $this->getAttribute(            // line 163
($context["page"] ?? null), "sidebar_second", [])]));
            // line 165
            echo "      ";
        }
        // line 166
        echo "    ";
    }

    public function getTemplateName()
    {
        return "page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 166,  275 => 165,  273 => 163,  272 => 162,  271 => 161,  270 => 160,  268 => 159,  264 => 157,  262 => 155,  261 => 154,  259 => 153,  257 => 152,  254 => 151,  252 => 149,  251 => 148,  250 => 147,  249 => 146,  247 => 145,  244 => 144,  241 => 143,  236 => 200,  232 => 198,  224 => 193,  219 => 190,  217 => 189,  214 => 188,  206 => 183,  201 => 180,  199 => 179,  196 => 178,  194 => 177,  191 => 176,  184 => 172,  180 => 170,  178 => 169,  174 => 167,  171 => 143,  167 => 141,  164 => 140,  157 => 136,  153 => 134,  151 => 133,  148 => 132,  141 => 128,  137 => 126,  134 => 125,  131 => 123,  127 => 121,  121 => 119,  115 => 117,  112 => 116,  109 => 114,  107 => 113,  104 => 112,  96 => 107,  91 => 104,  89 => 103,  86 => 102,  84 => 76,  80 => 75,  77 => 74,  75 => 73,  72 => 72,  70 => 71,  69 => 69,  67 => 68,  65 => 67,  62 => 66,  60 => 65,  59 => 63,  56 => 61,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "page.html.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/page/page.html.twig");
    }
}


/* page.html.twig */
class __TwigTemplate_eb6f08c0b246d9fb1bbec612228e0848106ae82d7912fc30ddceccd78365b6b6___1562417971 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'branding' => [$this, 'block_branding'],
            'left' => [$this, 'block_left'],
            'right' => [$this, 'block_right'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 83];
        $filters = ["escape" => 84];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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

    protected function doGetParent(array $context)
    {
        // line 76
        return "@apigee-kickstart/navbar/navbar.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@apigee-kickstart/navbar/navbar.twig", "page.html.twig", 76);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 82
    public function block_branding($context, array $blocks = [])
    {
        // line 83
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navbar_branding", [])) {
            // line 84
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navbar_branding", [])), "html", null, true);
            echo "
      ";
        }
        // line 86
        echo "    ";
    }

    // line 88
    public function block_left($context, array $blocks = [])
    {
        // line 89
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navbar_left", [])) {
            // line 90
            echo "        <div class=\"mr-auto\">
          ";
            // line 91
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navbar_left", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 94
        echo "    ";
    }

    // line 96
    public function block_right($context, array $blocks = [])
    {
        // line 97
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navbar_right", [])) {
            // line 98
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navbar_right", [])), "html", null, true);
            echo "
      ";
        }
        // line 100
        echo "    ";
    }

    public function getTemplateName()
    {
        return "page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 100,  404 => 98,  401 => 97,  398 => 96,  394 => 94,  388 => 91,  385 => 90,  382 => 89,  379 => 88,  375 => 86,  369 => 84,  366 => 83,  363 => 82,  353 => 76,  278 => 166,  275 => 165,  273 => 163,  272 => 162,  271 => 161,  270 => 160,  268 => 159,  264 => 157,  262 => 155,  261 => 154,  259 => 153,  257 => 152,  254 => 151,  252 => 149,  251 => 148,  250 => 147,  249 => 146,  247 => 145,  244 => 144,  241 => 143,  236 => 200,  232 => 198,  224 => 193,  219 => 190,  217 => 189,  214 => 188,  206 => 183,  201 => 180,  199 => 179,  196 => 178,  194 => 177,  191 => 176,  184 => 172,  180 => 170,  178 => 169,  174 => 167,  171 => 143,  167 => 141,  164 => 140,  157 => 136,  153 => 134,  151 => 133,  148 => 132,  141 => 128,  137 => 126,  134 => 125,  131 => 123,  127 => 121,  121 => 119,  115 => 117,  112 => 116,  109 => 114,  107 => 113,  104 => 112,  96 => 107,  91 => 104,  89 => 103,  86 => 102,  84 => 76,  80 => 75,  77 => 74,  75 => 73,  72 => 72,  70 => 71,  69 => 69,  67 => 68,  65 => 67,  62 => 66,  60 => 65,  59 => 63,  56 => 61,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "page.html.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/page/page.html.twig");
    }
}
