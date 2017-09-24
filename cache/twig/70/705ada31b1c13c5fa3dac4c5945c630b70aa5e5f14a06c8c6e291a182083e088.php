<?php

/* footer/footer_two.html.twig */
class __TwigTemplate_b47c5d7f9a9f57f12e4cf97dd3b338930f52494aba9eedea7b1af70bc442594e extends Twig_Template
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
        $this->loadTemplate("footer/footer_one.html.twig", "footer/footer_two.html.twig", 1)->display(array_merge($context, array("footer_one" => ($context["footer_two"] ?? null))));
        // line 2
        echo "<footer class=\"footer-license\">
    <div class=\"container \">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12\">
                ";
        // line 6
        echo $this->getAttribute(($context["sections"] ?? null), "license", array());
        echo "
            </div>
        </div>
    </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "footer/footer_two.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 6,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'footer/footer_one.html.twig' with {'footer_one': footer_two} %}
<footer class=\"footer-license\">
    <div class=\"container \">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12\">
                {{ sections.license }}
            </div>
        </div>
    </div>
</footer>
", "footer/footer_two.html.twig", "/Users/brookehopkins/Documents/Development/westem-site/user/plugins/gravstrap/templates/footer/footer_two.html.twig");
    }
}
