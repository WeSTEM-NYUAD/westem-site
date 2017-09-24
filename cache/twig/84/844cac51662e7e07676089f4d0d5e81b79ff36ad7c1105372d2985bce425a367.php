<?php

/* modular/showcase.html.twig */
class __TwigTemplate_e48b08d63597b43627ddbcc981cb83f1c0181de29e14079a91f262c5b4141a71 extends Twig_Template
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

<div id=\"";
        // line 3
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "slideme", array()), "id", array());
        echo "\"";
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "fullwidth", array(), "any", true, true) && ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "fullwidth", array()) == false))) {
            echo " class=\"container\"";
        }
        echo ">
  <div class=\"slideme\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "slides", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 6
            echo "       <div class=\"modular-row showcase flush-top\" ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["slide"], "image", array()), array(), "array")) {
                echo "style=\"background-image: url(";
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["slide"], "image", array()), array(), "array"), "url", array());
                echo ");\"";
            }
            echo ">
          <h1>";
            // line 7
            echo $this->getAttribute($context["slide"], "heading", array());
            echo "</h1>
          <h2>";
            // line 8
            echo $this->getAttribute($context["slide"], "subheading", array());
            echo "</h2>
          <a class=\"button\" href=\"";
            // line 9
            echo $this->getAttribute($context["slide"], "button_url", array());
            echo "\">";
            echo $this->getAttribute($context["slide"], "button_text", array());
            echo "</a>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </div>
</div>

<script type=\"text/javascript\">
\$(document).ready(function() {
    \$('#";
        // line 17
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "slideme", array()), "id", array());
        echo "').slideme({
      arrows: ";
        // line 18
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "slideme", array()), "arrows", array());
        echo ",
      autoslide: ";
        // line 19
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "slideme", array()), "autoslide", array());
        echo ",
      autoslideHoverStop: ";
        // line 20
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "slideme", array()), "autoslideHoverStop", array());
        echo ",
      interval: ";
        // line 21
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "slideme", array()), "interval", array());
        echo ",
      loop: ";
        // line 22
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "slideme", array()), "loop", array());
        echo ",
      pagination: \"numbers\",
      transition : '";
        // line 24
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "slideme", array()), "transition", array());
        echo "',
      itemsForSlide: ";
        // line 25
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "slideme", array()), "itemsForSlide", array());
        echo ",
      touch: ";
        // line 26
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "slideme", array()), "touch", array());
        echo ",
      swipe: ";
        // line 27
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "slideme", array()), "swipe", array());
        echo ",
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "modular/showcase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 27,  105 => 26,  101 => 25,  97 => 24,  92 => 22,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  65 => 12,  54 => 9,  50 => 8,  46 => 7,  37 => 6,  33 => 5,  24 => 3,  19 => 1,);
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

<div id=\"{{ page.header.slideme.id }}\"{% if page.header.fullwidth is defined and page.header.fullwidth == false %} class=\"container\"{% endif %}>
  <div class=\"slideme\">
    {% for slide in page.header.slides %}
       <div class=\"modular-row showcase flush-top\" {% if page.media[slide.image] %}style=\"background-image: url({{ page.media[slide.image].url }});\"{% endif %}>
          <h1>{{ slide.heading }}</h1>
          <h2>{{ slide.subheading }}</h2>
          <a class=\"button\" href=\"{{ slide.button_url }}\">{{ slide.button_text }}</a>
      </div>
    {% endfor %}
    </div>
</div>

<script type=\"text/javascript\">
\$(document).ready(function() {
    \$('#{{ page.header.slideme.id }}').slideme({
      arrows: {{ page.header.slideme.arrows }},
      autoslide: {{ page.header.slideme.autoslide }},
      autoslideHoverStop: {{ page.header.slideme.autoslideHoverStop }},
      interval: {{ page.header.slideme.interval }},
      loop: {{ page.header.slideme.loop }},
      pagination: \"numbers\",
      transition : '{{ page.header.slideme.transition }}',
      itemsForSlide: {{ page.header.slideme.itemsForSlide }},
      touch: {{ page.header.slideme.touch }},
      swipe: {{ page.header.slideme.swipe }},
    });
});
</script>
", "modular/showcase.html.twig", "/Users/brookehopkins/Documents/Development/grav-admin/user/themes/gravstrap-theme/templates/modular/showcase.html.twig");
    }
}
