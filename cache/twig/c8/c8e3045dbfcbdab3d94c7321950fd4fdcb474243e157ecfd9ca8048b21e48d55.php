<?php

/* partials/nav-user-avatar.html.twig */
class __TwigTemplate_3fa21823ddd21fdafba408e05c42ec22889f2875dcdecf6adcbef4d356b6f165 extends Twig_Template
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
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "user", array()), "avatarUrl", array(), "method"), "html", null, true);
        echo "?s=47\" />
";
    }

    public function getTemplateName()
    {
        return "partials/nav-user-avatar.html.twig";
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
        return new Twig_Source("<img src=\"{{ admin.user.avatarUrl() }}?s=47\" />
", "partials/nav-user-avatar.html.twig", "/Users/brookehopkins/Documents/Development/grav-admin/user/plugins/admin/themes/grav/templates/partials/nav-user-avatar.html.twig");
    }
}
