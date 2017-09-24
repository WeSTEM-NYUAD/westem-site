<?php

/* home.html.twig */
class __TwigTemplate_288261b00b6167c2224e00806b2f8f77cb125778b3f1f7003fe984fea38f9a0c extends Twig_Template
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
        $this->loadTemplate("home.html.twig", "home.html.twig", 1, "1683368859")->display($context);
    }

    public function getTemplateName()
    {
        return "home.html.twig";
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
        {{ content }}
    {% endblock %}
{% endembed %}
", "home.html.twig", "/Users/brookehopkins/Documents/Development/grav-admin/user/themes/gravstrap-theme/templates/home.html.twig");
    }
}


/* home.html.twig */
class __TwigTemplate_288261b00b6167c2224e00806b2f8f77cb125778b3f1f7003fe984fea38f9a0c_1683368859 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "home.html.twig", 1);
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
        echo "        ";
        echo ($context["content"] ?? null);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 10,  101 => 9,  94 => 5,  90 => 4,  87 => 3,  84 => 2,  19 => 1,);
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
        {{ content }}
    {% endblock %}
{% endembed %}
", "home.html.twig", "/Users/brookehopkins/Documents/Development/grav-admin/user/themes/gravstrap-theme/templates/home.html.twig");
    }
}
