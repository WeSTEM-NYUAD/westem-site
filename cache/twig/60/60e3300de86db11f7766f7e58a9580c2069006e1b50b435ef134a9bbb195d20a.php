<?php

/* modules/team.html.twig */
class __TwigTemplate_9dcfba8f7a1c52f84fa3b1bea69022db1158e1147b318b8fd6ec27f1f516e479 extends Twig_Template
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
        $this->loadTemplate("modules/team.html.twig", "modules/team.html.twig", 1, "2031607521")->display($context);
    }

    public function getTemplateName()
    {
        return "modules/team.html.twig";
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
        return new Twig_Source("{% embed 'modules/partials/base_module.html.twig' %}
    {% block module_content %}
        <div class=\"row\">
        {% for item in items %}
            {% set values = item %}
            {% if(instanceof(values, '\\\\Thunder\\\\Shortcode\\\\Shortcode\\\\ProcessedShortcode')) %}
                {% set values = {
                  'image': item.getParameter('image'),
                  'content': item.content|trim,
                  'attributes': parse_attributes(item.getParameter('attributes')),
                } %}
            {% endif %}

            <div {% include 'partials/_attributes.html.twig' with { 'attributes': values.attributes } %}>
                <div class=\"item-image\">
                    {{ grav.page.find('/images').media.images[values.image].cropZoom(150, 150) }}
                </div>
                {% if content != \"\" %}
                <div class=\"item-text\">{{ values.content }}</div>
                {% endif %}
            </div>
        {% endfor %}
        </div>
    {% endblock %}
{% endembed %}
", "modules/team.html.twig", "/Users/meganmoore/Documents/weSTEM/westem-site/user/plugins/gravstrap/templates/modules/team.html.twig");
    }
}


/* modules/team.html.twig */
class __TwigTemplate_9dcfba8f7a1c52f84fa3b1bea69022db1158e1147b318b8fd6ec27f1f516e479_2031607521 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("modules/partials/base_module.html.twig", "modules/team.html.twig", 1);
        $this->blocks = array(
            'module_content' => array($this, 'block_module_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "modules/partials/base_module.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_module_content($context, array $blocks = array())
    {
        // line 3
        echo "        <div class=\"row\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "            ";
            $context["values"] = $context["item"];
            // line 6
            echo "            ";
            if ($this->env->getExtension('Gravstrap\Twig\GravstrapTwigExtension')->instance_of(($context["values"] ?? null), "\\Thunder\\Shortcode\\Shortcode\\ProcessedShortcode")) {
                // line 7
                echo "                ";
                $context["values"] = array("image" => $this->getAttribute(                // line 8
$context["item"], "getParameter", array(0 => "image"), "method"), "content" => twig_trim_filter($this->getAttribute(                // line 9
$context["item"], "content", array())), "attributes" => $this->env->getExtension('Gravstrap\Twig\GravstrapTwigExtension')->parseAttributes($this->getAttribute(                // line 10
$context["item"], "getParameter", array(0 => "attributes"), "method")));
                // line 12
                echo "            ";
            }
            // line 13
            echo "
            <div ";
            // line 14
            $this->loadTemplate("partials/_attributes.html.twig", "modules/team.html.twig", 14)->display(array_merge($context, array("attributes" => $this->getAttribute(($context["values"] ?? null), "attributes", array()))));
            echo ">
                <div class=\"item-image\">
                    ";
            // line 16
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "page", array()), "find", array(0 => "/images"), "method"), "media", array()), "images", array()), $this->getAttribute(($context["values"] ?? null), "image", array()), array(), "array"), "cropZoom", array(0 => 150, 1 => 150), "method");
            echo "
                </div>
                ";
            // line 18
            if ((($context["content"] ?? null) != "")) {
                // line 19
                echo "                <div class=\"item-text\">";
                echo $this->getAttribute(($context["values"] ?? null), "content", array());
                echo "</div>
                ";
            }
            // line 21
            echo "            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </div>
    ";
    }

    public function getTemplateName()
    {
        return "modules/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 23,  155 => 21,  149 => 19,  147 => 18,  142 => 16,  137 => 14,  134 => 13,  131 => 12,  129 => 10,  128 => 9,  127 => 8,  125 => 7,  122 => 6,  119 => 5,  102 => 4,  99 => 3,  96 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'modules/partials/base_module.html.twig' %}
    {% block module_content %}
        <div class=\"row\">
        {% for item in items %}
            {% set values = item %}
            {% if(instanceof(values, '\\\\Thunder\\\\Shortcode\\\\Shortcode\\\\ProcessedShortcode')) %}
                {% set values = {
                  'image': item.getParameter('image'),
                  'content': item.content|trim,
                  'attributes': parse_attributes(item.getParameter('attributes')),
                } %}
            {% endif %}

            <div {% include 'partials/_attributes.html.twig' with { 'attributes': values.attributes } %}>
                <div class=\"item-image\">
                    {{ grav.page.find('/images').media.images[values.image].cropZoom(150, 150) }}
                </div>
                {% if content != \"\" %}
                <div class=\"item-text\">{{ values.content }}</div>
                {% endif %}
            </div>
        {% endfor %}
        </div>
    {% endblock %}
{% endembed %}
", "modules/team.html.twig", "/Users/meganmoore/Documents/weSTEM/westem-site/user/plugins/gravstrap/templates/modules/team.html.twig");
    }
}
