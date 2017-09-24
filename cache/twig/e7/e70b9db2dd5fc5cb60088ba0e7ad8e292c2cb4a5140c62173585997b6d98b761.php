<?php

/* modular/what_we_do.html.twig */
class __TwigTemplate_e9dd4f93fe288da47c4f50910c060a0378e1388dd28e4f0e5197c2c35273b080 extends Twig_Template
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
        echo ($context["content"] ?? null);
        echo "

";
    }

    public function getTemplateName()
    {
        return "modular/what_we_do.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ content }}

{#
{% embed 'partials/base_module.html.twig' %}
    {% set section_class = \"what-we-do\" %}

    {% block module_content %}
        
        {% set item = elements.item %}
        {% set item_column = item.column|default(4) %}
        {% set item_row_class = item.classes.row %}
        {% set item_column_class = item.classes.column %}
        {% set item_icon_class = item.classes.icon %}
        {% set item_text_class = item.classes.text %}

        <div class=\"row {{ item_row_class }}\">
            {% for item in page.header.items %}
                <div class=\"col-md-{{ item_column }} {{ item_column_class }}\">
                    <div class=\"item-icon {{ item_icon_class }}\">{% include \"basic/icon.html.twig\" %}</div>
                    <div class=\"item-text {{ item_text_class }}\">
                        {{ page_sections[item.section] }}
                    </div>
                </div>
            {% endfor %}
            </div>
        </div>
    {% endblock %}
{% endembed %}
#}", "modular/what_we_do.html.twig", "/Users/brookehopkins/Documents/Development/grav-admin/user/themes/gravstrap-theme/templates/modular/what_we_do.html.twig");
    }
}
