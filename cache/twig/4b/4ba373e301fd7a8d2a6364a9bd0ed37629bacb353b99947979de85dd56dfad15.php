<?php

/* bootstrap/pageheader.html.twig */
class __TwigTemplate_f8856f16e51f4f2e752e8eaefb3229b20b13955a6a401b6569ddc74a0000322c extends Twig_Template
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
        echo "<div class=\"page-header ";
        echo $this->getAttribute(($context["attributes"] ?? null), "class", array(), "array");
        echo "\" ";
        $this->loadTemplate("partials/_attributes.html.twig", "bootstrap/pageheader.html.twig", 1)->display(array_merge($context, array("ignore" => array(0 => "class"))));
        echo ">
    <h1>";
        // line 2
        echo ($context["title"] ?? null);
        echo " <small>";
        echo ($context["subtitle"] ?? null);
        echo "</small></h1>
</div>";
    }

    public function getTemplateName()
    {
        return "bootstrap/pageheader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"page-header {{ attributes['class'] }}\" {% include 'partials/_attributes.html.twig' with {'ignore': ['class']} %}>
    <h1>{{ title }} <small>{{ subtitle }}</small></h1>
</div>", "bootstrap/pageheader.html.twig", "/Users/brookehopkins/Documents/Development/grav-admin/user/plugins/gravstrap/templates/bootstrap/pageheader.html.twig");
    }
}
