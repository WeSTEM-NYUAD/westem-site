<?php

/* modules/portfolio.html.twig */
class __TwigTemplate_3bbacecd5ec363cf85d92368b5ee1745b85b57a3a8a621cb4ee27699b1feb574 extends Twig_Template
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
        $this->loadTemplate("modules/portfolio.html.twig", "modules/portfolio.html.twig", 1, "979552392")->display($context);
    }

    public function getTemplateName()
    {
        return "modules/portfolio.html.twig";
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
        return new Twig_Source("{% embed 'modules/partials/base_module.html.twig' %}       
    {% block module_content %}
    {% for item in items %}
        {{ item }}
    {% endfor %}
    {% endblock %}
{% endembed %}", "modules/portfolio.html.twig", "/Users/meganmoore/Documents/weSTEM/westem-site/user/plugins/gravstrap/templates/modules/portfolio.html.twig");
    }
}


/* modules/portfolio.html.twig */
class __TwigTemplate_3bbacecd5ec363cf85d92368b5ee1745b85b57a3a8a621cb4ee27699b1feb574_979552392 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("modules/partials/base_module.html.twig", "modules/portfolio.html.twig", 1);
        $this->blocks = array(
            'module_content' => array($this, 'block_module_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "modules/partials/base_module.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_module_content($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "        ";
            echo $context["item"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    ";
    }

    public function getTemplateName()
    {
        return "modules/portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 6,  85 => 4,  80 => 3,  77 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'modules/partials/base_module.html.twig' %}       
    {% block module_content %}
    {% for item in items %}
        {{ item }}
    {% endfor %}
    {% endblock %}
{% endembed %}", "modules/portfolio.html.twig", "/Users/meganmoore/Documents/weSTEM/westem-site/user/plugins/gravstrap/templates/modules/portfolio.html.twig");
    }
}
