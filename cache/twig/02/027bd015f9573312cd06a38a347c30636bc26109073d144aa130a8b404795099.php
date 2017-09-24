<?php

/* modular/where_we_are.html.twig */
class __TwigTemplate_0e3b3607d4be3d8158d9fd1c22c67031731f125f4df40842953fe4c48a9038d3 extends Twig_Template
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
        echo ($context["content"] ?? null);
    }

    public function getTemplateName()
    {
        return "modular/where_we_are.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ content }}", "modular/where_we_are.html.twig", "/Users/brookehopkins/Documents/Development/grav-admin/user/themes/gravstrap-theme/templates/modular/where_we_are.html.twig");
    }
}
