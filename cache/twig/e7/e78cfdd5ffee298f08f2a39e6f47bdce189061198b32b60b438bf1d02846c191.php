<?php

/* bootstrap/dropdown.html.twig */
class __TwigTemplate_4e9a0efaebfd63dc55bebbf71b83600d18b5fb491b9679963c1a45c49bf7c4a5 extends Twig_Template
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
        echo "<div class=\"";
        if (((array_key_exists("dropup", $context)) ? (_twig_default_filter(($context["dropup"] ?? null), false)) : (false))) {
            echo "dropup";
        } else {
            echo "dropdown";
        }
        echo "\">
  <button class=\"btn btn-";
        // line 2
        echo ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "default")) : ("default"));
        echo " dropdown-toggle ";
        echo $this->getAttribute(($context["attributes"] ?? null), "class", array(), "array");
        echo "\" type=\"button\" data-toggle=\"dropdown\"";
        $this->loadTemplate("partials/_attributes.html.twig", "bootstrap/dropdown.html.twig", 2)->display(array_merge($context, array("ignore" => array(0 => "class"))));
        echo ">
    ";
        // line 3
        echo ($context["label"] ?? null);
        echo "
    <span class=\"caret\"></span>
  </button>
  ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "    ";
            echo $context["item"];
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "bootstrap/dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  46 => 7,  42 => 6,  36 => 3,  28 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"{% if dropup|default(false) %}dropup{% else %}dropdown{% endif %}\">
  <button class=\"btn btn-{{ type|default('default') }} dropdown-toggle {{ attributes['class'] }}\" type=\"button\" data-toggle=\"dropdown\"{% include 'partials/_attributes.html.twig' with {'ignore': ['class']} %}>
    {{ label }}
    <span class=\"caret\"></span>
  </button>
  {% for item in items %}
    {{ item }}
  {% endfor %}
</div>", "bootstrap/dropdown.html.twig", "/Users/brookehopkins/Documents/Development/grav-admin/user/plugins/gravstrap/templates/bootstrap/dropdown.html.twig");
    }
}
