<?php

/* bootstrap/jumbotron.html.twig */
class __TwigTemplate_1d9a1f150b2b2f5a6d77ffd30f71bc4fe833affb68831557cf3245bdffdf3c92 extends Twig_Template
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
        echo "<div class=\"jumbotron ";
        echo $this->getAttribute(($context["attributes"] ?? null), "class", array(), "array");
        echo "\" ";
        $this->loadTemplate("partials/_attributes.html.twig", "bootstrap/jumbotron.html.twig", 2)->display(array_merge($context, array("ignore" => array(0 => "class"))));
        echo " ";
        if ((array_key_exists("image", $context) && (($context["image"] ?? null) != null))) {
            echo " style=\"background-image: url('";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "page", array()), "find", array(0 => "/images"), "method"), "media", array()), "images", array()), ($context["image"] ?? null), array(), "array"), "url", array());
            echo " ')\"";
        }
        echo ">
    ";
        // line 3
        if ((($context["fullwidth"] ?? null) == true)) {
            // line 4
            echo "    <div class=\"container\">
    ";
            // line 5
            echo ($context["content"] ?? null);
            echo "
    </div>
    ";
        } else {
            // line 8
            echo "    ";
            echo ($context["content"] ?? null);
            echo "
    ";
        }
        // line 10
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "bootstrap/jumbotron.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  45 => 8,  39 => 5,  36 => 4,  34 => 3,  21 => 2,  19 => 1,);
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
<div class=\"jumbotron {{ attributes['class'] }}\" {% include 'partials/_attributes.html.twig' with {'ignore': ['class']} %} {% if(image is defined and image != null) %} style=\"background-image: url('{{ grav.page.find('/images').media.images[image].url }} ')\"{% endif %}>
    {% if fullwidth == true %}
    <div class=\"container\">
    {{ content }}
    </div>
    {% else %}
    {{ content }}
    {% endif %}
</div>
", "bootstrap/jumbotron.html.twig", "/Users/brookehopkins/Documents/Development/westem-site/user/plugins/gravstrap/templates/bootstrap/jumbotron.html.twig");
    }
}
