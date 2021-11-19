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

/* modular/pricing.html.twig */
class __TwigTemplate_567988bf430304819523820e2e59aa9f286b50883b9970cff19e246d0611b638 extends \Twig\Template
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
        echo "<section id=\"pricing\">

  <div class=\"row section-head\">
    ";
        // line 4
        echo ($context["content"] ?? null);
        echo "
  </div>

  <div class=\"row\">
    <div class=\"pricing-tables bgrid-quarters s-bgrid-halves\">
      ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "columns", []));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 10
            echo "        <div class=\"column\">
          <div class=\"price-block\">
            <h3 class=\"plan-title\"><i class=\"fa fa-";
            // line 12
            echo $this->getAttribute($context["column"], "icon", []);
            echo "\"></i>";
            echo $this->getAttribute($context["column"], "title", []);
            echo "</h3>
            <p class=\"plan-price\">";
            // line 13
            echo $this->getAttribute($context["column"], "price1", []);
            echo " <span>";
            echo $this->getAttribute($context["column"], "price2", []);
            echo "</span></p>

            <ul class=\"features\">
              ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "features", []));
            foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                // line 17
                echo "               <li>";
                echo $this->getAttribute($context["feature"], "name", []);
                echo "</li> 
             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "            </ul>

            <footer class=\"plan-sign-up\">
              ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "buttons", []));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 23
                echo "               <a class=\"button\" href=\"";
                echo $this->getAttribute($context["button"], "url", []);
                echo "\">";
                echo $this->getAttribute($context["button"], "text", []);
                echo "</a>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "            </footer>
       </div> 
     </div>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo " </div>
</div>

</section> ";
    }

    public function getTemplateName()
    {
        return "modular/pricing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 29,  98 => 25,  87 => 23,  83 => 22,  78 => 19,  69 => 17,  65 => 16,  57 => 13,  51 => 12,  47 => 10,  43 => 9,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"pricing\">

  <div class=\"row section-head\">
    {{ content }}
  </div>

  <div class=\"row\">
    <div class=\"pricing-tables bgrid-quarters s-bgrid-halves\">
      {% for column in page.header.columns %}
        <div class=\"column\">
          <div class=\"price-block\">
            <h3 class=\"plan-title\"><i class=\"fa fa-{{ column.icon }}\"></i>{{ column.title }}</h3>
            <p class=\"plan-price\">{{ column.price1 }} <span>{{ column.price2 }}</span></p>

            <ul class=\"features\">
              {% for feature in column.features %}
               <li>{{ feature.name }}</li> 
             {% endfor %}
            </ul>

            <footer class=\"plan-sign-up\">
              {% for button in column.buttons %}
               <a class=\"button\" href=\"{{ button.url }}\">{{ button.text }}</a>
              {% endfor %}
            </footer>
       </div> 
     </div>
   {% endfor %}
 </div>
</div>

</section> ", "modular/pricing.html.twig", "/home/quaswcgk/lilhelper.quashera.xyz/user/themes/woo/templates/modular/pricing.html.twig");
    }
}
