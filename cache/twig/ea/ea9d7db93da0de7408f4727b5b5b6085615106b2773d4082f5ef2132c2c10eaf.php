<?php

/* partials/_attributes.html.twig */
class __TwigTemplate_1e1f7bc0515bfaa8e2d44d283e4427083c2b7656f277f47dd350d3cf375ff9a3 extends Twig_Template
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
        $context["ignore"] = ((array_key_exists("ignore", $context)) ? (_twig_default_filter(($context["ignore"] ?? null), array())) : (array()));
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
        foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
            echo " ";
            if ((twig_in_filter($context["attribute"], ($context["ignore"] ?? null)) == false)) {
                echo $context["attribute"];
                echo "=\"";
                echo $context["value"];
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "partials/_attributes.html.twig";
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
        return new Twig_Source("{% set ignore = ignore|default([]) %}
{% for attribute, value in attributes %} {% if attribute in ignore == false %}{{ attribute }}=\"{{ value }}\"{% endif %}{% endfor %}", "partials/_attributes.html.twig", "/Users/meganmoore/Documents/weSTEM/westem-site/user/plugins/gravstrap/templates/partials/_attributes.html.twig");
    }
}