<?php

/* basic/section.html.twig */
class __TwigTemplate_3d380171fe33542cf7a3682078c8e1443cbeaf55ae6333a3ae0bbecbb70a7791 extends Twig_Template
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
        $context["attributes"] = $this->env->getExtension('Gravstrap\Twig\GravstrapTwigExtension')->parseAttributes(($context["attributes"] ?? null));
        // line 2
        if ((twig_length_filter($this->env, ($context["attributes"] ?? null)) > 0)) {
            // line 3
            echo "<div ";
            $this->loadTemplate("partials/_attributes.html.twig", "basic/section.html.twig", 3)->display(array_merge($context, array("attributes" => ($context["attributes"] ?? null))));
            echo ">
    ";
            // line 4
            echo ($context["content"] ?? null);
            echo "
</div>
";
        } else {
            // line 7
            echo ($context["content"] ?? null);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "basic/section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  28 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set attributes = parse_attributes(attributes) %}
{% if attributes|length > 0 %}
<div {% include 'partials/_attributes.html.twig' with {'attributes': attributes } %}>
    {{ content }}
</div>
{% else %}
{{ content }}
{% endif %}
", "basic/section.html.twig", "/Users/brookehopkins/Documents/Development/grav-admin/user/plugins/gravstrap/templates/basic/section.html.twig");
    }
}
