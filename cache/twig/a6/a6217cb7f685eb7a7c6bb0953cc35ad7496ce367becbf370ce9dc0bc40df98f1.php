<?php

/* bootstrap/navbar.html.twig */
class __TwigTemplate_ea9438a4c436253437c7a492b9156bf1966cf7cd7153436a993e0d1f0e6786f4 extends Twig_Template
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
        $context["attributes"] = $this->env->getExtension('Gravstrap\Twig\GravstrapTwigExtension')->parseAttributes(($context["attributes"] ?? null));
        // line 2
        echo "<nav class=\"navbar navbar-default";
        if ((((array_key_exists("fixed", $context)) ? (_twig_default_filter(($context["fixed"] ?? null), "none")) : ("none")) != "none")) {
            echo " navbar-fixed-";
            echo ($context["fixed"] ?? null);
        }
        if (($context["inverse"] ?? null)) {
            echo " navbar-inverse";
        }
        echo " ";
        echo $this->getAttribute(($context["attributes"] ?? null), "class", array(), "array");
        echo "\"  ";
        $this->loadTemplate("partials/_attributes.html.twig", "bootstrap/navbar.html.twig", 2)->display(array_merge($context, array("ignore" => array(0 => "class"))));
        echo ">
  <div class=\"";
        // line 3
        if (($context["container"] ?? null)) {
            echo " container";
        } else {
            echo " container-fluid";
        }
        echo "\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#";
        // line 5
        echo ($context["id"] ?? null);
        echo "\" aria-expanded=\"false\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">";
        // line 11
        if ( !(null === ($context["brand_image"] ?? null))) {
            echo " ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "page", array()), "media", array()), ($context["brand_image"] ?? null), array(), "array"), "resize", array(0 => 20, 1 => 20), "method");
            echo " ";
        } else {
            echo " ";
            echo ($context["brand_text"] ?? null);
            echo " ";
        }
        echo "</a>
    </div>

    <div class=\"collapse navbar-collapse\" id=\"";
        // line 14
        echo ($context["id"] ?? null);
        echo "\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "            ";
            echo $context["item"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </div>
  </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "bootstrap/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 18,  76 => 16,  72 => 15,  68 => 14,  54 => 11,  45 => 5,  36 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set attributes = parse_attributes(attributes) %}
<nav class=\"navbar navbar-default{% if fixed|default('none') != 'none' %} navbar-fixed-{{ fixed }}{% endif %}{% if inverse %} navbar-inverse{% endif %} {{ attributes['class'] }}\"  {% include 'partials/_attributes.html.twig' with {'ignore': ['class']} %}>
  <div class=\"{% if container %} container{% else %} container-fluid{% endif %}\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#{{ id }}\" aria-expanded=\"false\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">{% if brand_image is not null %} {{ grav.page.media[brand_image].resize(20, 20) }} {% else %} {{ brand_text }} {% endif %}</a>
    </div>

    <div class=\"collapse navbar-collapse\" id=\"{{ id }}\">
        {% for item in items %}
            {{ item }}
        {% endfor %}
    </div>
  </div>
</nav>
", "bootstrap/navbar.html.twig", "/Users/brookehopkins/Documents/Development/westem-site/user/plugins/gravstrap/templates/bootstrap/navbar.html.twig");
    }
}
