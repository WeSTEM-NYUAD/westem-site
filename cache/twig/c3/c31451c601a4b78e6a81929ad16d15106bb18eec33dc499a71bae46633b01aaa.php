<?php

/* modules/contacts.html.twig */
class __TwigTemplate_5a3c499f561fc2ba0e12fae67127fab8ae543d84a43249e37ef267e7723ed201 extends Twig_Template
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
        $this->loadTemplate("modules/contacts.html.twig", "modules/contacts.html.twig", 1, "625460328")->display($context);
    }

    public function getTemplateName()
    {
        return "modules/contacts.html.twig";
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
        {% set form_attributes = parse_attributes(form_attributes) %}
        {% set info_attributes = parse_attributes(info_attributes) %}
        <div class=\"row contacts-text {{ container_class }}\">
            {% if (form_position|default('right') == 'right') %}
            {% block info %}
            <div {% include 'partials/_attributes.html.twig' with {'attributes': info_attributes} %}>
                {{ sections.info }}
            </div>
            {% endblock %}
            {% block form %}
            <div {% include 'partials/_attributes.html.twig' with {'attributes': form_attributes} %}>
                {{ sections.form }}
            </div>
            {% endblock %}
            {% else %}
            {{ block('form') }}
            {{ block('info') }}
            {% endif %}
        </div>
    {% endblock %}
{% endembed %}", "modules/contacts.html.twig", "/Users/meganmoore/Documents/weSTEM/westem-site/user/plugins/gravstrap/templates/modules/contacts.html.twig");
    }
}


/* modules/contacts.html.twig */
class __TwigTemplate_5a3c499f561fc2ba0e12fae67127fab8ae543d84a43249e37ef267e7723ed201_625460328 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("modules/partials/base_module.html.twig", "modules/contacts.html.twig", 1);
        $this->blocks = array(
            'module_content' => array($this, 'block_module_content'),
            'info' => array($this, 'block_info'),
            'form' => array($this, 'block_form'),
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
        $context["form_attributes"] = $this->env->getExtension('Gravstrap\Twig\GravstrapTwigExtension')->parseAttributes(($context["form_attributes"] ?? null));
        // line 4
        echo "        ";
        $context["info_attributes"] = $this->env->getExtension('Gravstrap\Twig\GravstrapTwigExtension')->parseAttributes(($context["info_attributes"] ?? null));
        // line 5
        echo "        <div class=\"row contacts-text ";
        echo ($context["container_class"] ?? null);
        echo "\">
            ";
        // line 6
        if ((((array_key_exists("form_position", $context)) ? (_twig_default_filter(($context["form_position"] ?? null), "right")) : ("right")) == "right")) {
            // line 7
            echo "            ";
            $this->displayBlock('info', $context, $blocks);
            // line 12
            echo "            ";
            $this->displayBlock('form', $context, $blocks);
            // line 17
            echo "            ";
        } else {
            // line 18
            echo "            ";
            $this->displayBlock("form", $context, $blocks);
            echo "
            ";
            // line 19
            $this->displayBlock("info", $context, $blocks);
            echo "
            ";
        }
        // line 21
        echo "        </div>
    ";
    }

    // line 7
    public function block_info($context, array $blocks = array())
    {
        // line 8
        echo "            <div ";
        $this->loadTemplate("partials/_attributes.html.twig", "modules/contacts.html.twig", 8)->display(array_merge($context, array("attributes" => ($context["info_attributes"] ?? null))));
        echo ">
                ";
        // line 9
        echo $this->getAttribute(($context["sections"] ?? null), "info", array());
        echo "
            </div>
            ";
    }

    // line 12
    public function block_form($context, array $blocks = array())
    {
        // line 13
        echo "            <div ";
        $this->loadTemplate("partials/_attributes.html.twig", "modules/contacts.html.twig", 13)->display(array_merge($context, array("attributes" => ($context["form_attributes"] ?? null))));
        echo ">
                ";
        // line 14
        echo $this->getAttribute(($context["sections"] ?? null), "form", array());
        echo "
            </div>
            ";
    }

    public function getTemplateName()
    {
        return "modules/contacts.html.twig";
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
        {% set form_attributes = parse_attributes(form_attributes) %}
        {% set info_attributes = parse_attributes(info_attributes) %}
        <div class=\"row contacts-text {{ container_class }}\">
            {% if (form_position|default('right') == 'right') %}
            {% block info %}
            <div {% include 'partials/_attributes.html.twig' with {'attributes': info_attributes} %}>
                {{ sections.info }}
            </div>
            {% endblock %}
            {% block form %}
            <div {% include 'partials/_attributes.html.twig' with {'attributes': form_attributes} %}>
                {{ sections.form }}
            </div>
            {% endblock %}
            {% else %}
            {{ block('form') }}
            {{ block('info') }}
            {% endif %}
        </div>
    {% endblock %}
{% endembed %}", "modules/contacts.html.twig", "/Users/meganmoore/Documents/weSTEM/westem-site/user/plugins/gravstrap/templates/modules/contacts.html.twig");
    }
}
