<?php

/* home_carousel.html.twig */
class __TwigTemplate_456a03ba86b5a4b69ad9ad983180bea28b10532d5a0700255ae464bf447aaae4 extends Twig_Template
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
        $this->loadTemplate("home_carousel.html.twig", "home_carousel.html.twig", 1, "653266378")->display($context);
    }

    public function getTemplateName()
    {
        return "home_carousel.html.twig";
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
    {{ navbar1 }}
    {% endblock %}

    {% block content %}
    {% for module in page.collection() %}
        {{ module.content }}
    {% endfor %}

    {% endblock %}
{% endembed %}
", "home_carousel.html.twig", "/Users/brookehopkins/Documents/Development/grav-admin/user/themes/gravstrap-theme/templates/home_carousel.html.twig");
    }
}


/* home_carousel.html.twig */
class __TwigTemplate_456a03ba86b5a4b69ad9ad983180bea28b10532d5a0700255ae464bf447aaae4_653266378 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "home_carousel.html.twig", 1);
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
        echo "    ";
        echo ($context["navbar1"] ?? null);
        echo "
    ";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 8
            echo "        ";
            echo $this->getAttribute($context["module"], "content", array());
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "home_carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 10,  102 => 8,  97 => 7,  94 => 6,  87 => 3,  84 => 2,  19 => 1,);
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
    {{ navbar1 }}
    {% endblock %}

    {% block content %}
    {% for module in page.collection() %}
        {{ module.content }}
    {% endfor %}

    {% endblock %}
{% endembed %}
", "home_carousel.html.twig", "/Users/brookehopkins/Documents/Development/grav-admin/user/themes/gravstrap-theme/templates/home_carousel.html.twig");
    }
}
