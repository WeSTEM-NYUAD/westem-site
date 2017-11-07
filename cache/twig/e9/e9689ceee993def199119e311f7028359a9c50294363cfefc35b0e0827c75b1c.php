<?php

/* calendar.html.twig */
class __TwigTemplate_d3154d6de7185cd1e776189e05c4c62f51aae3bfe899dae5f01c1e0b4a21b582 extends Twig_Template
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
        $this->loadTemplate("calendar.html.twig", "calendar.html.twig", 1, "1255048650")->display($context);
        // line 12
        echo "  ";
    }

    public function getTemplateName()
    {
        return "calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 12,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}
    {% block content %}

 <div class=\"calendar\">
  <iframe  style=\"font-family: monserrat;\" src=\"https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=nyu.edu_h2qcukh4q1nism2ds2srdpud1s%40group.calendar.google.com&amp;color=%235F6B02&amp;ctz=Asia%2FDubai\" style=\"border-width:0\" width=\"800\" height=\"600\" frameborder=\"0\" scrolling=\"no\"></iframe>
</div>



    
    {% endblock %}
{% endembed %}  ", "calendar.html.twig", "/Users/meganmoore/Documents/weSTEM/westem-site/user/themes/gravstrap-theme/templates/calendar.html.twig");
    }
}


/* calendar.html.twig */
class __TwigTemplate_d3154d6de7185cd1e776189e05c4c62f51aae3bfe899dae5f01c1e0b4a21b582_1255048650 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "calendar.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
 <div class=\"calendar\">
  <iframe  style=\"font-family: monserrat;\" src=\"https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=nyu.edu_h2qcukh4q1nism2ds2srdpud1s%40group.calendar.google.com&amp;color=%235F6B02&amp;ctz=Asia%2FDubai\" style=\"border-width:0\" width=\"800\" height=\"600\" frameborder=\"0\" scrolling=\"no\"></iframe>
</div>



    
    ";
    }

    public function getTemplateName()
    {
        return "calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 3,  90 => 2,  73 => 1,  21 => 12,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}
    {% block content %}

 <div class=\"calendar\">
  <iframe  style=\"font-family: monserrat;\" src=\"https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=nyu.edu_h2qcukh4q1nism2ds2srdpud1s%40group.calendar.google.com&amp;color=%235F6B02&amp;ctz=Asia%2FDubai\" style=\"border-width:0\" width=\"800\" height=\"600\" frameborder=\"0\" scrolling=\"no\"></iframe>
</div>



    
    {% endblock %}
{% endembed %}  ", "calendar.html.twig", "/Users/meganmoore/Documents/weSTEM/westem-site/user/themes/gravstrap-theme/templates/calendar.html.twig");
    }
}
