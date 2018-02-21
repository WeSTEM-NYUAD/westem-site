<?php

/* basic/link.html.twig */
class __TwigTemplate_5bbd169a7893e72c66de23903ff3ae5faaf0ac177a439409e511db593e3a5e7e extends Twig_Template
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
        $context["attributes"] = $this->env->getExtension('Gravstrap\Twig\GravstrapTwigExtension')->parseAttributes(($context["link_attributes"] ?? null));
        // line 2
        $context["icon_stacked"] = (((((array_key_exists("stacked", $context)) ? (_twig_default_filter(($context["stacked"] ?? null), false)) : (false)) == true)) ? ("_stacked") : (""));
        // line 3
        echo "<a href=\"";
        echo ($context["url"] ?? null);
        echo "\"";
        $this->loadTemplate("partials/_attributes.html.twig", "basic/link.html.twig", 3)->display($context);
        echo ">";
        $this->loadTemplate((("basic/icon" . ($context["icon_stacked"] ?? null)) . ".html.twig"), "basic/link.html.twig", 3)->display($context);
        echo ($context["menu"] ?? null);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "basic/link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set attributes = parse_attributes(link_attributes) %}
{% set icon_stacked = stacked|default(false) == true ? '_stacked' : '' %}
<a href=\"{{ url }}\"{% include 'partials/_attributes.html.twig' %}>{% include 'basic/icon' ~ icon_stacked ~ '.html.twig'%}{{ menu }}</a>
", "basic/link.html.twig", "/Users/simranparwani/Documents/weSTEM/westem-site/user/plugins/gravstrap/templates/basic/link.html.twig");
    }
}
