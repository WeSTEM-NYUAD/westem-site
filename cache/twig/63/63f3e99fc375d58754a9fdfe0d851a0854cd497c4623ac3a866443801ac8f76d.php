<?php

/* basic/button.html.twig */
class __TwigTemplate_89c65be6f522a9e9db9c7bdf152867f22b535a480f752ab5accfbc118dfc6140 extends Twig_Template
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
        $context["button_attributes"] = $this->env->getExtension('Gravstrap\Twig\GravstrapTwigExtension')->parseAttributes(($context["button_attributes"] ?? null));
        // line 2
        if ((null === ($context["button_url"] ?? null))) {
            // line 3
            echo "<button type=\"button\" class=\"btn btn-";
            echo ((array_key_exists("button_type", $context)) ? (_twig_default_filter(($context["button_type"] ?? null), "default")) : ("default"));
            echo " ";
            echo $this->getAttribute(($context["button_attributes"] ?? null), "class", array());
            echo "\"";
            $this->loadTemplate("partials/_attributes.html.twig", "basic/button.html.twig", 3)->display(array_merge($context, array("attributes" => ($context["button_attributes"] ?? null), "ignore" => array(0 => "class"))));
            echo ">";
            echo ($context["button_label"] ?? null);
            echo "</button>
";
        } else {
            // line 5
            echo "    ";
            $context["link_attributes"] = ("class:btn btn-" . ((array_key_exists("button_type", $context)) ? (_twig_default_filter(($context["button_type"] ?? null), "default")) : ("default")));
            // line 6
            echo "    ";
            $this->loadTemplate("basic/link.html.twig", "basic/button.html.twig", 6)->display(array_merge($context, array("url" => ($context["button_url"] ?? null), "menu" => ($context["button_label"] ?? null), "link_attributes" => ($context["link_attributes"] ?? null))));
        }
    }

    public function getTemplateName()
    {
        return "basic/button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set button_attributes = parse_attributes(button_attributes) %}
{% if button_url is null %}
<button type=\"button\" class=\"btn btn-{{ button_type|default('default') }} {{ button_attributes.class }}\"{% include 'partials/_attributes.html.twig' with {'attributes': button_attributes, 'ignore': ['class']} %}>{{ button_label }}</button>
{% else %}
    {% set link_attributes = 'class:btn btn-' ~ button_type|default('default') %}
    {% include 'basic/link.html.twig' with{'url': button_url, 'menu': button_label, 'link_attributes': link_attributes } %}
{% endif %}
", "basic/button.html.twig", "/Users/brookehopkins/Documents/Development/grav-admin/user/plugins/gravstrap/templates/basic/button.html.twig");
    }
}
