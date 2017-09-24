<?php

/* components.html.twig */
class __TwigTemplate_4ad4d7e8dd9a2689b3df14b290c68cab1f923fa0034d4d88c7976cc7042eec62 extends Twig_Template
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
        $this->loadTemplate("components.html.twig", "components.html.twig", 1, "576962548")->display($context);
    }

    public function getTemplateName()
    {
        return "components.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}
    {% block header %}
    <header id=\"header\">
        {{ jumbotron1 }}
        {{ navbar1 }}
    </header>
    {% endblock %}

    {% block content %}
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                {{ content }}
                </div>
            </div>
        </div>
    {% endblock %}
{% endembed %}", "components.html.twig", "/Users/brookehopkins/Documents/Development/grav-admin/user/themes/gravstrap-theme/templates/components.html.twig");
    }
}


/* components.html.twig */
class __TwigTemplate_4ad4d7e8dd9a2689b3df14b290c68cab1f923fa0034d4d88c7976cc7042eec62_576962548 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "components.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
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

    // line 2
    public function block_header($context, array $blocks = array())
    {
        // line 3
        echo "    <header id=\"header\">
        ";
        // line 4
        echo ($context["jumbotron1"] ?? null);
        echo "
        ";
        // line 5
        echo ($context["navbar1"] ?? null);
        echo "
    </header>
    ";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                ";
        // line 13
        echo ($context["content"] ?? null);
        echo "
                </div>
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "components.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 13,  109 => 10,  106 => 9,  99 => 5,  95 => 4,  92 => 3,  89 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}
    {% block header %}
    <header id=\"header\">
        {{ jumbotron1 }}
        {{ navbar1 }}
    </header>
    {% endblock %}

    {% block content %}
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                {{ content }}
                </div>
            </div>
        </div>
    {% endblock %}
{% endembed %}", "components.html.twig", "/Users/brookehopkins/Documents/Development/grav-admin/user/themes/gravstrap-theme/templates/components.html.twig");
    }
}
