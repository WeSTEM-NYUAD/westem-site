<?php

/* bootstrap/alert.html.twig */
class __TwigTemplate_b284f138da2950c79e423a0ac171fa38534b840be6c893ab7e4218db48d88ecf extends Twig_Template
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
        echo "<div class=\"alert alert-";
        echo ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "danger")) : ("danger"));
        echo " ";
        echo $this->getAttribute(($context["attributes"] ?? null), "class", array(), "array");
        echo "\" role=\"alert\" ";
        $this->loadTemplate("partials/_attributes.html.twig", "bootstrap/alert.html.twig", 2)->display(array_merge($context, array("ignore" => array(0 => "class"))));
        echo ">
    ";
        // line 3
        echo ($context["content"] ?? null);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "bootstrap/alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  21 => 2,  19 => 1,);
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
<div class=\"alert alert-{{ type|default('danger') }} {{ attributes['class'] }}\" role=\"alert\" {% include 'partials/_attributes.html.twig' with {'ignore': ['class']} %}>
    {{ content }}
</div>", "bootstrap/alert.html.twig", "/Users/brookehopkins/Documents/Development/grav-admin/user/plugins/gravstrap/templates/bootstrap/alert.html.twig");
    }
}
