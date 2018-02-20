<?php

/* bootstrap/partials/_navbar_dropdown.html.twig */
class __TwigTemplate_101b13284793eed9029be88fe8e6e9c7e359b67c5878d44e06260465faae44b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<li class=\"dropdown\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\">";
        // line 2
        echo ($context["menu"] ?? null);
        echo " <span class=\"caret\"></span></a>
    ";
        // line 3
        $this->loadTemplate("bootstrap/partials/_dropdown_items.html.twig", "bootstrap/partials/_navbar_dropdown.html.twig", 3)->display($context);
        // line 4
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "bootstrap/partials/_navbar_dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li class=\"dropdown\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\">{{ menu }} <span class=\"caret\"></span></a>
    {% include \"bootstrap/partials/_dropdown_items.html.twig\" %}
</li>
", "bootstrap/partials/_navbar_dropdown.html.twig", "/Users/simranparwani/Documents/weSTEM/westem-site/user/plugins/gravstrap/templates/bootstrap/partials/_navbar_dropdown.html.twig");
    }
}
