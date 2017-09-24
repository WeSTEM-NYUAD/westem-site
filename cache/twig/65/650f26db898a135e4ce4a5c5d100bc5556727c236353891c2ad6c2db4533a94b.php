<?php

/* bootstrap/collapse.html.twig */
class __TwigTemplate_b91fa071bae17eb1286ab31a39d8d74d857f141e9e95331e39356a7ed701a7ea extends Twig_Template
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
        echo "<";
        echo ($context["tag"] ?? null);
        echo " class=\"btn btn-";
        echo ((array_key_exists("button_type", $context)) ? (_twig_default_filter(($context["button_type"] ?? null), "default")) : ("default"));
        echo " ";
        echo $this->getAttribute(($context["attributes"] ?? null), "class", array());
        echo "\" role=\"button\" data-toggle=\"collapse\" ";
        if ((($context["tag"] ?? null) == "a")) {
            echo "href=\"#";
            echo ($context["id"] ?? null);
            echo "\"";
        } elseif ((($context["tag"] ?? null) == "button")) {
            echo "data-target=\"#";
            echo ($context["id"] ?? null);
            echo "\"";
        }
        echo " ";
        $this->loadTemplate("partials/_attributes.html.twig", "bootstrap/collapse.html.twig", 2)->display(array_merge($context, array("ignore" => array(0 => "class"))));
        echo ">
  ";
        // line 3
        echo ($context["button_label"] ?? null);
        echo "
</";
        // line 4
        echo ($context["tag"] ?? null);
        echo ">
<div class=\"collapse\" id=\"";
        // line 5
        echo ($context["id"] ?? null);
        echo "\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "        ";
            echo $context["item"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "bootstrap/collapse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 9,  58 => 7,  54 => 6,  50 => 5,  46 => 4,  42 => 3,  21 => 2,  19 => 1,);
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
<{{ tag }} class=\"btn btn-{{ button_type|default('default') }} {{ attributes.class }}\" role=\"button\" data-toggle=\"collapse\" {% if tag == 'a' %}href=\"#{{ id }}\"{% elseif tag == 'button' %}data-target=\"#{{ id }}\"{% endif %} {% include 'partials/_attributes.html.twig' with {'ignore': ['class']} %}>
  {{ button_label }}
</{{ tag }}>
<div class=\"collapse\" id=\"{{ id }}\">
    {% for item in items %}
        {{ item }}
    {% endfor %}
</div>
", "bootstrap/collapse.html.twig", "/Users/brookehopkins/Documents/Development/grav-admin/user/plugins/gravstrap/templates/bootstrap/collapse.html.twig");
    }
}
