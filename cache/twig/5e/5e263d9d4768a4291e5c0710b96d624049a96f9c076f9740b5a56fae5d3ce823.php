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

/* forms/fields/git-wizard/git-wizard.html.twig */
class __TwigTemplate_b33545e3c5bd8eabf987c552f846b85775e567a458aa97f0cd0c3cb6d28539aa extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'label' => [$this, 'block_label'],
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/default/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/default/field.html.twig", "forms/fields/git-wizard/git-wizard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_label($context, array $blocks = [])
    {
    }

    // line 5
    public function block_input($context, array $blocks = [])
    {
        // line 6
        echo "    <script type=\"text/javascript\">
        GitSync = {
            'first_time': ";
        // line 8
        echo twig_jsonencode_filter($this->getAttribute(($context["git_sync"] ?? null), "first_time", []));
        echo ",
            'git_installed': ";
        // line 9
        echo twig_jsonencode_filter($this->getAttribute(($context["git_sync"] ?? null), "git_installed", []));
        echo "
        };
    </script>
    <a href=\"#\" data-gitsync-useraction=\"wizard\" class=\"button button-primary\"><i class=\"fa fa-fw fa-magic\"></i> Wizard</a>
    <a href=\"#\" data-gitsync-useraction=\"sync\" class=\"button button-primary\"><i class=\"fa fa-fw fa-cloud\"></i> Synchronize</a>
    <span class=\"danger button-bar\"><a href=\"#\" data-gitsync-useraction=\"reset\" class=\"button danger\"><i class=\"fa fa-fw fa-history\"></i> Reset Local Copy</a></span>
    ";
        // line 15
        $this->loadTemplate("partials/modal-wizard.html.twig", "forms/fields/git-wizard/git-wizard.html.twig", 15)->display($context);
        // line 16
        echo "    ";
        $this->loadTemplate("partials/modal-reset.html.twig", "forms/fields/git-wizard/git-wizard.html.twig", 16)->display($context);
    }

    public function getTemplateName()
    {
        return "forms/fields/git-wizard/git-wizard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  65 => 15,  56 => 9,  52 => 8,  48 => 6,  45 => 5,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/fields/git-wizard/git-wizard.html.twig", "/home/tanertemel/web/t4.bolton365.net/public_html/user/plugins/git-sync/templates/forms/fields/git-wizard/git-wizard.html.twig");
    }
}
