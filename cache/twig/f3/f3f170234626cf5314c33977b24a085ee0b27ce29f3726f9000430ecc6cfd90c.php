<?php

/* modular/header.html.twig */
class __TwigTemplate_11b7cba4e571acf3aef065c3df81dcb1ecfd4fdcb520fe972729ad2066fdc8fd extends Twig_Template
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
        echo "<header id=\"header\">
    ";
        // line 2
        echo $this->getAttribute($this->getAttribute(($context["shortcode"] ?? null), "g-jumbotron", array(), "array"), "jumbotron1", array());
        echo "
    ";
        // line 3
        echo $this->getAttribute($this->getAttribute(($context["shortcode"] ?? null), "g-navbar", array(), "array"), "navbar2", array());
        echo "
</header>
";
    }

    public function getTemplateName()
    {
        return "modular/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header id=\"header\">
    {{ shortcode[\"g-jumbotron\"].jumbotron1 }}
    {{ shortcode[\"g-navbar\"].navbar2 }}
</header>
", "modular/header.html.twig", "/Users/brookehopkins/Documents/Development/grav-admin/user/themes/gravstrap-theme/templates/modular/header.html.twig");
    }
}
