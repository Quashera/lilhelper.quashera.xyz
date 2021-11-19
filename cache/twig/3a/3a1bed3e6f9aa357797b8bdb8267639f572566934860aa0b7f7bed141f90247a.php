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

/* modular/showcase.html.twig */
class __TwigTemplate_e30eecd6995c720530ae755dca375e7fcabaed8cd685fd20cbef4a92636091d7 extends \Twig\Template
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
        echo "<section id=\"hero\">
 <div class=\"row\">
   <div class=\"twelve columns\">
     <div class=\"hero-text\">
      <h1 class=\"responsive-headline\">";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "</h1>
      ";
        // line 6
        echo ($context["content"] ?? null);
        echo "
    </div>

    ";
        // line 9
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "buttons", [])) {
            // line 10
            echo "     <div class=\"buttons\">
       ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "buttons", []));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 12
                echo "         <a class=\"";
                echo $this->getAttribute($context["button"], "class", []);
                echo "\" href=\"";
                echo $this->getAttribute($context["button"], "url", []);
                echo "\">";
                echo $this->getAttribute($context["button"], "text", []);
                echo "</a>
       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "     </div>
   ";
        }
        // line 16
        echo "
   <div class=\"hero-image\">
    ";
        // line 18
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "showcase_image", []), [], "array"), "html", [], "method");
        echo "
  </div>
</div>
</div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/showcase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 18,  72 => 16,  68 => 14,  55 => 12,  51 => 11,  48 => 10,  46 => 9,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"hero\">
 <div class=\"row\">
   <div class=\"twelve columns\">
     <div class=\"hero-text\">
      <h1 class=\"responsive-headline\">{{ page.header.title }}</h1>
      {{ content }}
    </div>

    {% if page.header.buttons %}
     <div class=\"buttons\">
       {% for button in page.header.buttons %}
         <a class=\"{{ button.class }}\" href=\"{{ button.url }}\">{{ button.text }}</a>
       {% endfor %}
     </div>
   {% endif %}

   <div class=\"hero-image\">
    {{ page.media[page.header.showcase_image].html() }}
  </div>
</div>
</div>
</section>", "modular/showcase.html.twig", "/home/quaswcgk/lilhelper.quashera.xyz/user/themes/woo/templates/modular/showcase.html.twig");
    }
}
