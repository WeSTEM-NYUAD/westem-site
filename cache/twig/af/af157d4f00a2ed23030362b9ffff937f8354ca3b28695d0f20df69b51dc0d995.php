<?php

/* footer/footer_one.html.twig */
class __TwigTemplate_4c2a2b076b603f83cda02ebb374cce857dac46d54563d5af4a2fc56d8cdaf19e extends Twig_Template
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
        echo "<footer class=\"footer footer-one\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 inline-navigation\">
                ";
        // line 5
        $this->loadTemplate("partials/footer_navigation.html.twig", "footer/footer_one.html.twig", 5)->display($context);
        // line 6
        echo "            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12\">
                ";
        // line 10
        echo $this->getAttribute(($context["sections"] ?? null), "credits", array());
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12\">
                &copy; ";
        // line 15
        echo twig_date_format_filter($this->env, "now", "Y");
        echo " ";
        echo $this->getAttribute(($context["sections"] ?? null), "copyright", array());
        echo "
            </div>
        </div>
    </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "footer/footer_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 15,  33 => 10,  27 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer class=\"footer footer-one\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 inline-navigation\">
                {% include 'partials/footer_navigation.html.twig' %}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12\">
                {{ sections.credits }}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12\">
                &copy; {{ \"now\"|date(\"Y\") }} {{ sections.copyright }}
            </div>
        </div>
    </div>
</footer>
", "footer/footer_one.html.twig", "/Users/meganmoore/Documents/weSTEM/westem-site/user/plugins/gravstrap/templates/footer/footer_one.html.twig");
    }
}
