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

/* tools.html.twig */
class __TwigTemplate_277d66e57627f9a51abc62654ee7fef21be688c4d8169d9f2b335a1b0a2aed20 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'titlebar' => [$this, 'block_titlebar'],
            'content_top' => [$this, 'block_content_top'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["tools_slug"] = twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "basename", []));
        // line 4
        if ((($context["tools_slug"] ?? null) == "tools")) {
            $context["tools_slug"] = "backups";
        }
        // line 5
        $context["title"] = (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.TOOLS") . ": ") . $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(("PLUGIN_ADMIN." . twig_upper_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("underscor", ($context["tools_slug"] ?? null))))));
        // line 6
        $context["tools"] = $this->getAttribute(($context["admin"] ?? null), "tools", [], "method");
        // line 8
        ob_start(function () { return ''; });
        // line 9
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             $this->loadTemplate((("partials/tools-" . ($context["tools_slug"] ?? null)) . "-titlebar.html.twig"), "tools.html.twig", 9);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        $context["titlebar"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "tools.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_titlebar($context, array $blocks = [])
    {
        // line 13
        echo "    ";
        if (($context["titlebar"] ?? null)) {
            // line 14
            echo "        ";
            echo twig_escape_filter($this->env, ($context["titlebar"] ?? null), "html", null, true);
            echo "
    ";
        } else {
            // line 16
            echo "    <div class=\"button-bar\">
        <a class=\"button\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>
    </div>
    <h1><i class=\"fa fa-fw fa-briefcase\"></i> ";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.TOOLS"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(("PLUGIN_ADMIN." . twig_upper_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("underscor", ($context["tools_slug"] ?? null))))), "html", null, true);
            echo "</h1>
    ";
        }
    }

    // line 23
    public function block_content_top($context, array $blocks = [])
    {
        // line 24
        echo "    ";
        if ((twig_length_filter($this->env, ($context["tools"] ?? null)) > 1)) {
            // line 25
            echo "    <div class=\"form-tabs\">
        <div class=\"tabs-nav\">
        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tools"] ?? null));
            foreach ($context['_seq'] as $context["slug"] => $context["tool"]) {
                // line 28
                echo "            ";
                $context["perms"] = twig_first($this->env, $context["tool"]);
                // line 29
                echo "            ";
                $context["name"] = twig_last($this->env, $context["tool"]);
                // line 30
                echo "            ";
                if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(($context["perms"] ?? null))) {
                    // line 31
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
                    echo "/tools/";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $context["slug"]), "html", null, true);
                    echo "\" ";
                    if ((($context["tools_slug"] ?? null) == $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $context["slug"]))) {
                        echo "class=\"active\"";
                    }
                    echo ">
                ";
                    // line 32
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(($context["name"] ?? null))), "html", null, true);
                    echo "
            </a>
            ";
                }
                // line 35
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['slug'], $context['tool'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        </div>
    </div>
    ";
        }
    }

    // line 41
    public function block_content($context, array $blocks = [])
    {
        // line 42
        echo "    ";
        $context["perms"] = twig_first($this->env, $this->getAttribute(($context["tools"] ?? null), ($context["tools_slug"] ?? null), [], "array"));
        // line 43
        echo "
    ";
        // line 44
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(($context["perms"] ?? null))) {
            // line 45
            echo "        ";
            $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = null;
            try {
                $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 =                 $this->loadTemplate((("partials/tools-" . ($context["tools_slug"] ?? null)) . ".html.twig"), "tools.html.twig", 45);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) {
                $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144->display($context);
            }
            // line 46
            echo "    ";
        } else {
            // line 47
            echo "        <h1>Unauthorized</h1>
    ";
        }
    }

    public function getTemplateName()
    {
        return "tools.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 47,  171 => 46,  160 => 45,  158 => 44,  155 => 43,  152 => 42,  149 => 41,  142 => 36,  136 => 35,  130 => 32,  119 => 31,  116 => 30,  113 => 29,  110 => 28,  106 => 27,  102 => 25,  99 => 24,  96 => 23,  87 => 19,  80 => 17,  77 => 16,  71 => 14,  68 => 13,  65 => 12,  60 => 1,  49 => 9,  47 => 8,  45 => 6,  43 => 5,  39 => 4,  37 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "tools.html.twig", "/home/tanertemel/web/t4.bolton365.net/public_html/user/plugins/admin/themes/grav/templates/tools.html.twig");
    }
}
