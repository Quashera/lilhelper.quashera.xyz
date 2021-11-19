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

/* partials/footer.html.twig */
class __TwigTemplate_2d828ae4c6d9723195c3fb7330d70ceff4712202d1035be8dd988cf317a4af45 extends \Twig\Template
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
        echo "<footer>
    <div class=\"row\">         
        <div class=\"six columns info\">
            <div class=\"footer-logo\">
                <a href=\"";
        // line 5
        echo ($context["base_url_absolute"] ?? null);
        echo "\">
                    <img src=\"";
        // line 6
        echo ($context["theme_url"] ?? null);
        echo "/images/footer-logo.png\" alt=\"\" />
                </a>
            </div>
            <p>
                ";
        // line 10
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "text", []);
        echo "
            </p>
        </div>
        <div class=\"six columns right-cols\">
            <div class=\"row\">
                <div class=\"columns\">
                    <ul>
                    </ul>
                </div>
                <div class=\"columns last\">
                    <h3 class=\"social\">";
        // line 20
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "social_title", []);
        echo "</h3>
                    <ul>
                        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "contact", []), "lines", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "                            <li><a href=\"";
            echo $this->getAttribute($context["item"], "url", []);
            echo "\">";
            echo $this->getAttribute($context["item"], "text", []);
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                    </ul>
                </div>
            </div>
        </div>
        <p class=\"copyright\">&copy; 2014 Woo | Design by <a title=\"Styleshout\" href=\"http://www.styleshout.com/\">Styleshout</a> | Converted to GRAV by <a title=\"Grav\" href=\"http://www.getgrav.org/\">Grav Team</a> <3 </p>
        <div id=\"go-top\">
            <a class=\"smoothscroll\" title=\"Back to Top\" href=\"#hero\"><i class=\"icon-up-open\"></i></a>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 25,  69 => 23,  65 => 22,  60 => 20,  47 => 10,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<footer>
    <div class=\"row\">         
        <div class=\"six columns info\">
            <div class=\"footer-logo\">
                <a href=\"{{ base_url_absolute }}\">
                    <img src=\"{{ theme_url }}/images/footer-logo.png\" alt=\"\" />
                </a>
            </div>
            <p>
                {{ site.footer.text }}
            </p>
        </div>
        <div class=\"six columns right-cols\">
            <div class=\"row\">
                <div class=\"columns\">
                    <ul>
                    </ul>
                </div>
                <div class=\"columns last\">
                    <h3 class=\"social\">{{ site.footer.social_title }}</h3>
                    <ul>
                        {% for item in site.footer.contact.lines %}
                            <li><a href=\"{{ item.url }}\">{{ item.text }}</a></li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
        <p class=\"copyright\">&copy; 2014 Woo | Design by <a title=\"Styleshout\" href=\"http://www.styleshout.com/\">Styleshout</a> | Converted to GRAV by <a title=\"Grav\" href=\"http://www.getgrav.org/\">Grav Team</a> <3 </p>
        <div id=\"go-top\">
            <a class=\"smoothscroll\" title=\"Back to Top\" href=\"#hero\"><i class=\"icon-up-open\"></i></a>
        </div>
    </div>
</footer>", "partials/footer.html.twig", "/home/quaswcgk/lilhelper.quashera.xyz/user/themes/woo/templates/partials/footer.html.twig");
    }
}
