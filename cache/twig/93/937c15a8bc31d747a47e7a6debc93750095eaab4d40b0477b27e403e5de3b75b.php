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

/* docs.html.twig */
class __TwigTemplate_75a38cf7669b6243ce549bdfa7f0e008f34112cec41a0756c1eaf193cffb0432 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'navigation' => [$this, 'block_navigation'],
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
        // line 2
        $context["tags"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", []);
        // line 3
        if (($context["tags"] ?? null)) {
            // line 4
            $context["progress"] = $this->getAttribute(($context["page"] ?? null), "collection", [0 => ["items" => ["@taxonomy" => ["category" => "docs", "tag" => ($context["tags"] ?? null)]], "order" => ["by" => "default", "dir" => "asc"]]], "method");
        } else {
            // line 6
            $context["progress"] = $this->getAttribute(($context["page"] ?? null), "collection", [0 => ["items" => ["@taxonomy" => ["category" => "docs"]], "order" => ["by" => "default", "dir" => "asc"]]], "method");
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "docs.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_navigation($context, array $blocks = [])
    {
        // line 10
        echo "\t<div id=\"navigation\">
\t";
        // line 11
        if (( !$this->getAttribute(($context["progress"] ?? null), "isFirst", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method") &&  !($this->getAttribute($this->getAttribute(($context["progress"] ?? null), "nextSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "url", []) == $this->getAttribute($this->getAttribute(($context["progress"] ?? null), "prevSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "url", [])))) {
            // line 12
            echo "\t    <a class=\"nav nav-prev\" href=\"";
            echo $this->getAttribute($this->getAttribute(($context["progress"] ?? null), "nextSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "url", []);
            echo "\"> <i class=\"fa fa-chevron-left\"></i></a>
\t";
        }
        // line 14
        echo "
\t";
        // line 15
        if (( !$this->getAttribute(($context["progress"] ?? null), "isLast", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method") &&  !($this->getAttribute($this->getAttribute(($context["progress"] ?? null), "nextSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "url", []) == $this->getAttribute($this->getAttribute(($context["progress"] ?? null), "prevSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "url", [])))) {
            // line 16
            echo "\t    <a class=\"nav nav-next\" href=\"";
            echo $this->getAttribute($this->getAttribute(($context["progress"] ?? null), "prevSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "url", []);
            echo "\"><i class=\"fa fa-chevron-right\"></i></a>
\t";
        }
        // line 18
        echo "\t</div>
";
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        // line 22
        echo "    ";
        $this->loadTemplate("partials/page.html.twig", "docs.html.twig", 22)->display($context);
    }

    public function getTemplateName()
    {
        return "docs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 22,  81 => 21,  76 => 18,  70 => 16,  68 => 15,  65 => 14,  59 => 12,  57 => 11,  54 => 10,  51 => 9,  46 => 1,  43 => 6,  40 => 4,  38 => 3,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "docs.html.twig", "/home/tanertemel/web/t4.bolton365.net/public_html/user/themes/learn2-git-sync/templates/docs.html.twig");
    }
}
