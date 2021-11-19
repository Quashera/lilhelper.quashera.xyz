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

/* partials/logo.html.twig */
class __TwigTemplate_f2446fb2cf70c600a0fcbec5db3d2531945bfa730e702113fd360b1929b6baad extends \Twig\Template
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
        echo "<style>
@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap');
</style>
<b>LilHelper</b>
";
    }

    public function getTemplateName()
    {
        return "partials/logo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<style>
@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap');
</style>
<b>LilHelper</b>
", "partials/logo.html.twig", "/home/quaswcgk/lilhelper.quashera.xyz/user/themes/learn2/templates/partials/logo.html.twig");
    }
}
