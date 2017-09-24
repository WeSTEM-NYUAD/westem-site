<?php

/* bootstrap/splitbutton.html.twig */
class __TwigTemplate_db6eeeefc01a9714f134fa10404fa5f9f3ab028af2c9d798f4e80f34a5e80266 extends Twig_Template
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
        $context["attributes"] = $this->env->getExtension('Gravstrap\Twig\GravstrapTwigExtension')->parseAttributes(($context["attributes"] ?? null));
        // line 2
        $context["splitbutton_type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "default")) : ("default"));
        // line 3
        echo "<div class=\"btn-group\">
  <button type=\"button\" class=\"btn btn-";
        // line 4
        echo ($context["splitbutton_type"] ?? null);
        echo " ";
        echo $this->getAttribute(($context["attributes"] ?? null), "class", array(), "array");
        echo "\">";
        echo ($context["label"] ?? null);
        echo "</button>
  <button type=\"button\" class=\"btn btn-";
        // line 5
        echo ($context["splitbutton_type"] ?? null);
        echo " dropdown-toggle ";
        echo $this->getAttribute(($context["attributes"] ?? null), "class", array(), "array");
        echo "\" data-toggle=\"dropdown\"";
        $this->loadTemplate("partials/_attributes.html.twig", "bootstrap/splitbutton.html.twig", 5)->display(array_merge($context, array("attributes" => ($context["attributes"] ?? null), "ignore" => array(0 => "class"))));
        echo ">
    <span class=\"caret\"></span>
    <span class=\"sr-only\">";
        // line 7
        echo ($context["label"] ?? null);
        echo "</span>
  </button>
  ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "    ";
            echo $context["item"];
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "bootstrap/splitbutton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 12,  52 => 10,  48 => 9,  43 => 7,  34 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set attributes = parse_attributes(attributes) %}
{% set splitbutton_type = type|default('default') %}
<div class=\"btn-group\">
  <button type=\"button\" class=\"btn btn-{{ splitbutton_type }} {{ attributes['class'] }}\">{{ label }}</button>
  <button type=\"button\" class=\"btn btn-{{ splitbutton_type }} dropdown-toggle {{ attributes['class'] }}\" data-toggle=\"dropdown\"{% include 'partials/_attributes.html.twig' with {'attributes': attributes, 'ignore': ['class']} %}>
    <span class=\"caret\"></span>
    <span class=\"sr-only\">{{ label }}</span>
  </button>
  {% for item in items %}
    {{ item }}
  {% endfor %}
</div>
", "bootstrap/splitbutton.html.twig", "/Users/brookehopkins/Documents/Development/grav-admin/user/plugins/gravstrap/templates/bootstrap/splitbutton.html.twig");
    }
}
