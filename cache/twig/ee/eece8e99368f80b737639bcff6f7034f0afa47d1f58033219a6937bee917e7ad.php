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

/* partials/search.html.twig */
class __TwigTemplate_2ea70890e7e3d7fe0ba51f778572d5b86f01f81e6c59a03dd24a812c21295e3b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"searchbox\">
    <label for=\"search-by\"><i class=\"fa fa-search\"></i></label>
    <input id=\"search-by\" type=\"text\" placeholder=\"";
        // line 3
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_LEARN2_SEARCH_DOCUMENTATION");
        echo "\"
           data-search-input=\"";
        // line 4
        echo ($context["base_url_relative"] ?? null);
        echo "/search.json/query\"/>
    <span data-search-clear><i class=\"fa fa-close\"></i></span>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"searchbox\">
    <label for=\"search-by\"><i class=\"fa fa-search\"></i></label>
    <input id=\"search-by\" type=\"text\" placeholder=\"{{ 'THEME_LEARN2_SEARCH_DOCUMENTATION'|t }}\"
           data-search-input=\"{{ base_url_relative }}/search.json/query\"/>
    <span data-search-clear><i class=\"fa fa-close\"></i></span>
</div>
", "partials/search.html.twig", "/home/quaswcgk/lilhelper.quashera.xyz/user/themes/learn2/templates/partials/search.html.twig");
    }
}
