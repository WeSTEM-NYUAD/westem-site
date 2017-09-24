<?php

/* bootstrap/partials/_navbar_item_alignment.html.twig */
class __TwigTemplate_bf961f3d11137a74f0c48ba51b738d995ccaf995a21c8109412bdbde31e51a67 extends Twig_Template
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
        $context["align"] = ((array_key_exists("alignment", $context)) ? (_twig_default_filter(($context["alignment"] ?? null), "left")) : ("left"));
        // line 2
        echo "navbar-";
        echo ($context["align"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "bootstrap/partials/_navbar_item_alignment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set align = alignment|default('left') %}
navbar-{{ align }}
", "bootstrap/partials/_navbar_item_alignment.html.twig", "/Users/brookehopkins/Documents/Development/grav-admin/user/plugins/gravstrap/templates/bootstrap/partials/_navbar_item_alignment.html.twig");
    }
}
