<?php

/* modules/where_we_are.html.twig */
class __TwigTemplate_36e8ba20ebc13bb02e0c22792bda1e815c8f78a40804a3b7f8a3e6d4495e8e6b extends Twig_Template
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
        echo "<section>
    <div class=\"";
        // line 3
        if ((($context["fullwidth"] ?? null) == false)) {
            echo "container ";
        }
        echo " ";
        echo $this->getAttribute(($context["attributes"] ?? null), "class", array(), "array");
        echo "\" ";
        $this->loadTemplate("partials/_attributes.html.twig", "modules/where_we_are.html.twig", 3)->display(array_merge($context, array("ignore" => array(0 => "class"))));
        echo ">
        ";
        // line 4
        echo ($context["content"] ?? null);
        echo "
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modules/where_we_are.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  24 => 3,  21 => 2,  19 => 1,);
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
<section>
    <div class=\"{% if fullwidth == false %}container {% endif %} {{ attributes['class'] }}\" {% include 'partials/_attributes.html.twig' with {'ignore': ['class']} %}>
        {{ content }}
    </div>
</section>
", "modules/where_we_are.html.twig", "/Users/brookehopkins/Documents/Development/grav-admin/user/plugins/gravstrap/templates/modules/where_we_are.html.twig");
    }
}
