<?php

/* modular/author.html.twig */
class __TwigTemplate_3fa4d199b6bf3452dae647f565b1ccf13a6cc206b1a2680ae796d68500b7f582 extends Twig_Template
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
        echo "<section id=\"author\">
    <div class=\"container author\"> 
        <div class=\"row\">
            <div class=\"author-image col-md-3 col-sm-12\">
                ";
        // line 5
        echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array())), "cropZoom", array(0 => 200, 1 => 200), "method");
        echo "
            </div>

            <div class=\"author-about col-md-9 col-sm-12\">
                ";
        // line 9
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
            </div>

            ";
        // line 12
        if ( !(null === ($context["education"] ?? null))) {
            // line 13
            echo "            <div class=\"author-lists author-education col-md-4 col-sm-12\">
                ";
            // line 14
            echo ($context["education"] ?? null);
            echo "
            </div>
            ";
        }
        // line 17
        echo "
            ";
        // line 18
        if ( !(null === ($context["experience"] ?? null))) {
            // line 19
            echo "            <div class=\"author-lists author-experience col-md-4 col-sm-12\">
                ";
            // line 20
            echo ($context["experience"] ?? null);
            echo "
            </div>
            ";
        }
        // line 23
        echo "
            ";
        // line 24
        if ( !(null === ($context["skills"] ?? null))) {
            echo "                
            <div class=\"author-skills col-md-4 col-sm-12\">
                ";
            // line 26
            echo ($context["skills"] ?? null);
            echo "
            </div>
            ";
        }
        // line 29
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/author.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 29,  71 => 26,  66 => 24,  63 => 23,  57 => 20,  54 => 19,  52 => 18,  49 => 17,  43 => 14,  40 => 13,  38 => 12,  32 => 9,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"author\">
    <div class=\"container author\"> 
        <div class=\"row\">
            <div class=\"author-image col-md-3 col-sm-12\">
                {{ page.media.images|first.cropZoom(200, 200) }}
            </div>

            <div class=\"author-about col-md-9 col-sm-12\">
                {{ page.content }}
            </div>

            {% if education is not null %}
            <div class=\"author-lists author-education col-md-4 col-sm-12\">
                {{ education }}
            </div>
            {% endif %}

            {% if experience is not null %}
            <div class=\"author-lists author-experience col-md-4 col-sm-12\">
                {{ experience }}
            </div>
            {% endif %}

            {% if skills is not null%}                
            <div class=\"author-skills col-md-4 col-sm-12\">
                {{ skills }}
            </div>
            {% endif %}
        </div>
    </div>
</section>", "modular/author.html.twig", "/Users/brookehopkins/Documents/Development/grav-admin/user/themes/gravstrap-theme/templates/modular/author.html.twig");
    }
}
