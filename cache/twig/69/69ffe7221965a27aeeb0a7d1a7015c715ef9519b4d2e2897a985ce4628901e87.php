<?php

/* modular/contacts.html.twig */
class __TwigTemplate_a77ab10cecd4c10ece38ca5985310f2dc0a505ad4a5209af8489bd55c8a9912f extends Twig_Template
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
        echo "
";
    }

    public function getTemplateName()
    {
        return "modular/contacts.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ content }}
", "modular/contacts.html.twig", "/Users/brookehopkins/Documents/Development/grav-admin/user/themes/gravstrap-theme/templates/modular/contacts.html.twig");
    }
}
