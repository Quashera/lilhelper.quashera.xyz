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

/* error.html.twig */
class __TwigTemplate_1feb9b9d891c184fb10057720b8417cca3c7cda9f87bc398d94630d245cb4fc9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        // line 3
        echo "<section id=\"error\" style=\"padding: 90px 0 72px; background: #fff;\">
    <div class=\"row section-head\">
        <h1>Error ";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "http_response_code", []);
        echo "</h1>
        ";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  46 => 5,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block content %}
<section id=\"error\" style=\"padding: 90px 0 72px; background: #fff;\">
    <div class=\"row section-head\">
        <h1>Error {{ page.header.http_response_code }}</h1>
        {{ page.content }}
    </div>
</section>
{% endblock %}
    ", "error.html.twig", "/home/quaswcgk/lilhelper.quashera.xyz/user/themes/woo/templates/error.html.twig");
    }
}
