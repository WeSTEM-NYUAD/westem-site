<?php

/* internal.html.twig */
class __TwigTemplate_541a42e1da2445d3771da4967091f13cfe3305f09a3e7a18e99f57ec29602e0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "internal.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container internal\">
    <div class=\"row\">
        ";
        // line 6
        $context["attributes"] = $this->env->getExtension('Gravstrap\Twig\GravstrapTwigExtension')->parseAttributes($this->getAttribute($this->getAttribute(($context["left"] ?? null), "object", array()), "attributes", array()));
        // line 7
        echo "        <div ";
        $this->loadTemplate("partials/_attributes.html.twig", "internal.html.twig", 7)->display($context);
        echo ">
        ";
        // line 8
        echo $this->getAttribute($this->getAttribute(($context["left"] ?? null), "object", array()), "content", array());
        echo "
        </div>
        ";
        // line 10
        $context["attributes"] = $this->env->getExtension('Gravstrap\Twig\GravstrapTwigExtension')->parseAttributes($this->getAttribute($this->getAttribute(($context["main"] ?? null), "object", array()), "attributes", array()));
        // line 11
        echo "        <div ";
        $this->loadTemplate("partials/_attributes.html.twig", "internal.html.twig", 11)->display($context);
        echo ">
        ";
        // line 12
        echo $this->getAttribute($this->getAttribute(($context["main"] ?? null), "object", array()), "content", array());
        echo "
        </div>
        ";
        // line 14
        $context["attributes"] = $this->env->getExtension('Gravstrap\Twig\GravstrapTwigExtension')->parseAttributes($this->getAttribute($this->getAttribute(($context["right"] ?? null), "object", array()), "attributes", array()));
        // line 15
        echo "        <div ";
        $this->loadTemplate("partials/_attributes.html.twig", "internal.html.twig", 15)->display($context);
        echo ">
        ";
        // line 16
        echo $this->getAttribute($this->getAttribute(($context["right"] ?? null), "object", array()), "content", array());
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "internal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 16,  61 => 15,  59 => 14,  54 => 12,  49 => 11,  47 => 10,  42 => 8,  37 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}
<div class=\"container internal\">
    <div class=\"row\">
        {% set attributes = parse_attributes(left.object.attributes) %}
        <div {% include 'partials/_attributes.html.twig' %}>
        {{ left.object.content }}
        </div>
        {% set attributes = parse_attributes(main.object.attributes) %}
        <div {% include 'partials/_attributes.html.twig' %}>
        {{ main.object.content }}
        </div>
        {% set attributes = parse_attributes(right.object.attributes) %}
        <div {% include 'partials/_attributes.html.twig' %}>
        {{ right.object.content }}
        </div>
    </div>
</div>
{% endblock %}
", "internal.html.twig", "/Users/meganmoore/Documents/weSTEM/westem-site/user/themes/gravstrap-theme/templates/internal.html.twig");
    }
}
