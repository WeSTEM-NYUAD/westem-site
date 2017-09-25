<?php

/* bootstrap/progressbar.html.twig */
class __TwigTemplate_98d78a09eca52edd1c2238f504b9d50c1cc376a34cf63262328d5ac0c5876560 extends Twig_Template
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
        if (array_key_exists("label", $context)) {
            // line 2
            echo "<div class=\"progress-label";
            if (($context["fixed"] ?? null)) {
                echo " fixed";
            }
            if (($context["right"] ?? null)) {
                echo " right";
            }
            echo "\">";
            echo ($context["label"] ?? null);
            echo "</div>
";
        }
        // line 4
        echo "
";
        // line 5
        $context["attributes"] = $this->env->getExtension('Gravstrap\Twig\GravstrapTwigExtension')->parseAttributes(($context["attributes"] ?? null));
        // line 6
        echo "<div class=\"progress\">
    <div class=\"progress-bar progress-bar-";
        // line 7
        echo ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "default")) : ("default"));
        if (($context["striped"] ?? null)) {
            echo " progress-bar-striped";
        }
        if (($context["animated"] ?? null)) {
            echo " active";
        }
        echo " ";
        echo $this->getAttribute(($context["attributes"] ?? null), "class", array(), "array");
        echo "\" role=\"progressbar\" aria-valuenow=\"";
        echo ($context["value"] ?? null);
        echo "\" aria-valuemin=\"";
        echo ($context["min"] ?? null);
        echo "\" aria-valuemax=\"";
        echo ($context["max"] ?? null);
        echo "\" style=\"";
        if (($context["show_label"] ?? null)) {
            echo "min-width: 2em; ";
        }
        echo "width: ";
        echo ($context["value"] ?? null);
        echo "%\" ";
        $this->loadTemplate("partials/_attributes.html.twig", "bootstrap/progressbar.html.twig", 7)->display(array_merge($context, array("ignore" => array(0 => "class"))));
        echo ">";
        if (($context["show_label"] ?? null)) {
            echo ($context["value"] ?? null);
            echo "%";
        }
        // line 8
        echo "    <span class=\"sr-only\">";
        echo ($context["value"] ?? null);
        echo "% Complete</span>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "bootstrap/progressbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 8,  42 => 7,  39 => 6,  37 => 5,  34 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if label is defined %}
<div class=\"progress-label{% if fixed %} fixed{% endif %}{% if right %} right{% endif %}\">{{ label }}</div>
{% endif %}

{% set attributes = parse_attributes(attributes) %}
<div class=\"progress\">
    <div class=\"progress-bar progress-bar-{{ type|default('default') }}{% if striped %} progress-bar-striped{% endif %}{% if animated %} active{% endif %} {{ attributes['class'] }}\" role=\"progressbar\" aria-valuenow=\"{{ value }}\" aria-valuemin=\"{{ min }}\" aria-valuemax=\"{{ max }}\" style=\"{% if show_label %}min-width: 2em; {% endif %}width: {{ value }}%\" {% include 'partials/_attributes.html.twig' with {'ignore': ['class']} %}>{% if show_label %}{{ value }}%{% endif %}
    <span class=\"sr-only\">{{ value }}% Complete</span>
  </div>
</div>", "bootstrap/progressbar.html.twig", "/Users/meganmoore/Documents/weSTEM/westem-site/user/plugins/gravstrap/templates/bootstrap/progressbar.html.twig");
    }
}
