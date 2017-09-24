<?php

/* basic/icon_stacked.html.twig */
class __TwigTemplate_9dbadb5b1a3234e8dd1931c2b95d40116b34ab410f89c0718cc17594d5de1a0f extends Twig_Template
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
        if (array_key_exists("icon", $context)) {
            // line 2
            echo "<span class=\"fa-stack";
            if ((((array_key_exists("large_icon", $context)) ? (_twig_default_filter(($context["large_icon"] ?? null), false)) : (false)) == true)) {
                echo " fa-lg";
            }
            echo "\">
  <i class=\"fa fa-stack-2x fa-";
            // line 3
            echo ((array_key_exists("icon_container", $context)) ? (_twig_default_filter(($context["icon_container"] ?? null), "circle-thin")) : ("circle-thin"));
            echo "\"></i>
  <i class=\"fa fa-stack-1x fa-";
            // line 4
            echo ($context["icon"] ?? null);
            echo "\"></i>
</span>
";
        }
    }

    public function getTemplateName()
    {
        return "basic/icon_stacked.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  28 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if icon is defined %}
<span class=\"fa-stack{% if large_icon|default(false) == true %} fa-lg{% endif %}\">
  <i class=\"fa fa-stack-2x fa-{{ icon_container|default('circle-thin') }}\"></i>
  <i class=\"fa fa-stack-1x fa-{{ icon }}\"></i>
</span>
{% endif %}
", "basic/icon_stacked.html.twig", "/Users/brookehopkins/Documents/Development/westem-site/user/plugins/gravstrap/templates/basic/icon_stacked.html.twig");
    }
}
