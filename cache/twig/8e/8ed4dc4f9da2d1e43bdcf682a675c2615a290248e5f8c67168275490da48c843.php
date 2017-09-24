<?php

/* modules/contacts_map.html.twig */
class __TwigTemplate_843da5a6b63add3eeb5a7eef11985c28f430c4310ae1a4196f23882822f9cb34 extends Twig_Template
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
        $this->loadTemplate("modules/contacts_map.html.twig", "modules/contacts_map.html.twig", 1, "1024508413")->display($context);
    }

    public function getTemplateName()
    {
        return "modules/contacts_map.html.twig";
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
        {% set map_attributes = parse_attributes(map_attributes) %}
        {% set info_attributes = parse_attributes(info_attributes) %}
        <div class=\"row contacts {{ container_class }}\">
            {% if (map_position|default('left') == 'left') %}
            {% block map %}
            <div {% include 'partials/_attributes.html.twig' with {'attributes': map_attributes} %}>
                {{ sections.map }}
            </div>
            {% endblock %}
            {% block info %}
            <div {% include 'partials/_attributes.html.twig' with {'attributes': info_attributes} %}>
                {{ sections.info }}
            </div>
            {% endblock %}
            {% else %}
            {{ block('info') }}
            {{ block('map') }}
            {% endif %}
        </div>
    {% endblock %}
{% endembed %}", "modules/contacts_map.html.twig", "/Users/brookehopkins/Documents/Development/grav-admin/user/plugins/gravstrap/templates/modules/contacts_map.html.twig");
    }
}


/* modules/contacts_map.html.twig */
class __TwigTemplate_843da5a6b63add3eeb5a7eef11985c28f430c4310ae1a4196f23882822f9cb34_1024508413 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("modules/partials/base_module.html.twig", "modules/contacts_map.html.twig", 1);
        $this->blocks = array(
            'module_content' => array($this, 'block_module_content'),
            'map' => array($this, 'block_map'),
            'info' => array($this, 'block_info'),
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
        echo "        ";
        $context["map_attributes"] = $this->env->getExtension('Gravstrap\Twig\GravstrapTwigExtension')->parseAttributes(($context["map_attributes"] ?? null));
        // line 4
        echo "        ";
        $context["info_attributes"] = $this->env->getExtension('Gravstrap\Twig\GravstrapTwigExtension')->parseAttributes(($context["info_attributes"] ?? null));
        // line 5
        echo "        <div class=\"row contacts ";
        echo ($context["container_class"] ?? null);
        echo "\">
            ";
        // line 6
        if ((((array_key_exists("map_position", $context)) ? (_twig_default_filter(($context["map_position"] ?? null), "left")) : ("left")) == "left")) {
            // line 7
            echo "            ";
            $this->displayBlock('map', $context, $blocks);
            // line 12
            echo "            ";
            $this->displayBlock('info', $context, $blocks);
            // line 17
            echo "            ";
        } else {
            // line 18
            echo "            ";
            $this->displayBlock("info", $context, $blocks);
            echo "
            ";
            // line 19
            $this->displayBlock("map", $context, $blocks);
            echo "
            ";
        }
        // line 21
        echo "        </div>
    ";
    }

    // line 7
    public function block_map($context, array $blocks = array())
    {
        // line 8
        echo "            <div ";
        $this->loadTemplate("partials/_attributes.html.twig", "modules/contacts_map.html.twig", 8)->display(array_merge($context, array("attributes" => ($context["map_attributes"] ?? null))));
        echo ">
                ";
        // line 9
        echo $this->getAttribute(($context["sections"] ?? null), "map", array());
        echo "
            </div>
            ";
    }

    // line 12
    public function block_info($context, array $blocks = array())
    {
        // line 13
        echo "            <div ";
        $this->loadTemplate("partials/_attributes.html.twig", "modules/contacts_map.html.twig", 13)->display(array_merge($context, array("attributes" => ($context["info_attributes"] ?? null))));
        echo ">
                ";
        // line 14
        echo $this->getAttribute(($context["sections"] ?? null), "info", array());
        echo "
            </div>
            ";
    }

    public function getTemplateName()
    {
        return "modules/contacts_map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 14,  153 => 13,  150 => 12,  143 => 9,  138 => 8,  135 => 7,  130 => 21,  125 => 19,  120 => 18,  117 => 17,  114 => 12,  111 => 7,  109 => 6,  104 => 5,  101 => 4,  98 => 3,  95 => 2,  19 => 1,);
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
        {% set map_attributes = parse_attributes(map_attributes) %}
        {% set info_attributes = parse_attributes(info_attributes) %}
        <div class=\"row contacts {{ container_class }}\">
            {% if (map_position|default('left') == 'left') %}
            {% block map %}
            <div {% include 'partials/_attributes.html.twig' with {'attributes': map_attributes} %}>
                {{ sections.map }}
            </div>
            {% endblock %}
            {% block info %}
            <div {% include 'partials/_attributes.html.twig' with {'attributes': info_attributes} %}>
                {{ sections.info }}
            </div>
            {% endblock %}
            {% else %}
            {{ block('info') }}
            {{ block('map') }}
            {% endif %}
        </div>
    {% endblock %}
{% endembed %}", "modules/contacts_map.html.twig", "/Users/brookehopkins/Documents/Development/grav-admin/user/plugins/gravstrap/templates/modules/contacts_map.html.twig");
    }
}
