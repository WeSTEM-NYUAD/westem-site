<?php

/* bootstrap/panel.html.twig */
class __TwigTemplate_418e38c1a5df850804ddab08be12ad293407ff79c6eb30f20e20db39d9d82050 extends Twig_Template
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
        echo "<div class=\"panel panel-";
        echo ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "default")) : ("default"));
        echo "\">
  ";
        // line 2
        if ( !(null === ($context["heading_title"] ?? null))) {
            // line 3
            echo "  <div class=\"panel-heading\">";
            echo ($context["heading_title"] ?? null);
            echo "</div>
  ";
        }
        // line 5
        echo "  <div class=\"panel-body\">
      ";
        // line 6
        echo ($context["content"] ?? null);
        echo "
  </div>
  ";
        // line 8
        if ( !(null === ($context["footer_title"] ?? null))) {
            // line 9
            echo "  <div class=\"panel-footer\">";
            echo ($context["footer_title"] ?? null);
            echo "</div>
  ";
        }
        // line 11
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "bootstrap/panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  42 => 9,  40 => 8,  35 => 6,  32 => 5,  26 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"panel panel-{{ type|default('default') }}\">
  {% if heading_title is not null %}
  <div class=\"panel-heading\">{{ heading_title }}</div>
  {% endif %}
  <div class=\"panel-body\">
      {{ content }}
  </div>
  {% if footer_title is not null %}
  <div class=\"panel-footer\">{{ footer_title }}</div>
  {% endif %}
</div>", "bootstrap/panel.html.twig", "/Users/brookehopkins/Documents/Development/grav-admin/user/plugins/gravstrap/templates/bootstrap/panel.html.twig");
    }
}
