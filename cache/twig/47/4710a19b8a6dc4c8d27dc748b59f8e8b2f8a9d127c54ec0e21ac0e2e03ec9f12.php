<?php

/* bootstrap/well.html.twig */
class __TwigTemplate_544a63c8aab14ad16d33fdec1bf41de728d1db91bb63d58f068a762db38bd929 extends Twig_Template
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
        echo "<div class=\"well";
        if ( !(null === ($context["size"] ?? null))) {
            echo " well-";
            echo ($context["size"] ?? null);
        }
        echo " ";
        echo $this->getAttribute(($context["attributes"] ?? null), "class", array(), "array");
        echo "\" ";
        $this->loadTemplate("partials/_attributes.html.twig", "bootstrap/well.html.twig", 1)->display(array_merge($context, array("ignore" => array(0 => "class"))));
        echo ">
    ";
        // line 2
        echo ($context["content"] ?? null);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "bootstrap/well.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"well{% if size is not null %} well-{{ size }}{% endif %} {{ attributes['class'] }}\" {% include 'partials/_attributes.html.twig' with {'ignore': ['class']} %}>
    {{ content }}
</div>", "bootstrap/well.html.twig", "/Users/brookehopkins/Documents/Development/grav-admin/user/plugins/gravstrap/templates/bootstrap/well.html.twig");
    }
}
