<?php

/* bootstrap/partials/_navbar_dropdown.html.twig */
class __TwigTemplate_7e3dd2de19e0633d857683e100ba6697bfe4750c838558d5eef023435bc3a3af extends Twig_Template
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
", "bootstrap/partials/_navbar_dropdown.html.twig", "/Users/brookehopkins/Documents/Development/westem-site/user/plugins/gravstrap/templates/bootstrap/partials/_navbar_dropdown.html.twig");
    }
}
