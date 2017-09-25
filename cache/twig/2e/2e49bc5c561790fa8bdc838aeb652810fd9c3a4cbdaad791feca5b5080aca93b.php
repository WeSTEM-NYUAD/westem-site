<?php

/* basic/icon.html.twig */
class __TwigTemplate_6fda23030e38cfd962490782de86f62bfab0de81666613bfbba4c91d85c507ea extends Twig_Template
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
        $context["attributes"] = $this->env->getExtension('Gravstrap\Twig\GravstrapTwigExtension')->parseAttributes(($context["icon_attributes"] ?? null));
        // line 2
        if ((array_key_exists("icon", $context) && (($context["icon"] ?? null) != ""))) {
            // line 3
            $context["type"] = ((array_key_exists("icon_type", $context)) ? (_twig_default_filter(($context["icon_type"] ?? null), "glyphicon")) : ("glyphicon"));
            // line 4
            if ((($context["type"] ?? null) == "glyphicon")) {
                // line 5
                echo "<span class=\"glyphicon glyphicon-";
                echo ($context["icon"] ?? null);
                echo " ";
                echo $this->getAttribute(($context["attributes"] ?? null), "class", array(), "array");
                echo "\" ";
                $this->loadTemplate("partials/_attributes.html.twig", "basic/icon.html.twig", 5)->display(array_merge($context, array("ignore" => array(0 => "class"))));
                echo "></span>
";
            } elseif ((            // line 6
($context["type"] ?? null) == "fontawesome")) {
                // line 7
                echo "<i class=\"fa fa-";
                echo ($context["icon"] ?? null);
                echo " ";
                echo $this->getAttribute(($context["attributes"] ?? null), "class", array(), "array");
                echo "\" ";
                $this->loadTemplate("partials/_attributes.html.twig", "basic/icon.html.twig", 7)->display(array_merge($context, array("ignore" => array(0 => "class"))));
                echo "></i>
";
            } elseif ((            // line 8
($context["type"] ?? null) == "mdi")) {
                // line 9
                echo "<i class=\"mdi mdi-";
                echo ($context["icon"] ?? null);
                echo " ";
                echo $this->getAttribute(($context["attributes"] ?? null), "class", array(), "array");
                echo "\" ";
                $this->loadTemplate("partials/_attributes.html.twig", "basic/icon.html.twig", 9)->display(array_merge($context, array("ignore" => array(0 => "class"))));
                echo "></i>
";
            } else {
                // line 11
                echo "<p>";
                echo (("icon_type " . ($context["type"] ?? null)) . " is not supported");
                echo "</p>
";
            }
        }
    }

    public function getTemplateName()
    {
        return "basic/icon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 11,  49 => 9,  47 => 8,  38 => 7,  36 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set attributes = parse_attributes(icon_attributes) %}
{% if icon is defined and icon != \"\" %}
{% set type = icon_type|default('glyphicon') %}
{% if type == 'glyphicon' %}
<span class=\"glyphicon glyphicon-{{ icon }} {{ attributes['class'] }}\" {% include 'partials/_attributes.html.twig' with {'ignore': ['class']} %}></span>
{% elseif type == 'fontawesome' %}
<i class=\"fa fa-{{ icon }} {{ attributes['class'] }}\" {% include 'partials/_attributes.html.twig' with {'ignore': ['class']} %}></i>
{% elseif type == 'mdi' %}
<i class=\"mdi mdi-{{ icon }} {{ attributes['class'] }}\" {% include 'partials/_attributes.html.twig' with {'ignore': ['class']} %}></i>
{% else %}
<p>{{ 'icon_type ' ~ type ~ ' is not supported'}}</p>
{% endif %}
{% endif %}
", "basic/icon.html.twig", "/Users/meganmoore/Documents/weSTEM/westem-site/user/plugins/gravstrap/templates/basic/icon.html.twig");
    }
}
