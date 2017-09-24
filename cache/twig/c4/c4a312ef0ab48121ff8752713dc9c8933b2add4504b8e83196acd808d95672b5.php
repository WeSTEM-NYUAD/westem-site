<?php

/* bootstrap/listgroup.html.twig */
class __TwigTemplate_44956e4b71e858c4693814acbd0c63291987af6ab4a6ad85e58fc66a002191bc extends Twig_Template
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
        echo "<div class=\"list-group\">
    ";
        // line 2
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
            // line 3
            echo "        ";
            $context["values"] = $context["item"];
            // line 4
            echo "        ";
            if ($this->env->getExtension('Gravstrap\Twig\GravstrapTwigExtension')->instance_of(($context["values"] ?? null), "\\Thunder\\Shortcode\\Shortcode\\ProcessedShortcode")) {
                // line 5
                echo "            ";
                $context["values"] = array("url" => $this->getAttribute(                // line 6
$context["item"], "getParameter", array(0 => "url"), "method"), "type" => $this->getAttribute(                // line 7
$context["item"], "getParameter", array(0 => "type"), "method"), "disabled" => $this->getAttribute(                // line 8
$context["item"], "getParameter", array(0 => "disabled"), "method"), "badge" => $this->getAttribute(                // line 9
$context["item"], "getParameter", array(0 => "badge"), "method"), "active" => $this->getAttribute(                // line 10
$context["item"], "getParameter", array(0 => "active"), "method"), "attributes" => $this->env->getExtension('Gravstrap\Twig\GravstrapTwigExtension')->parseAttributes($this->getAttribute(                // line 11
$context["item"], "getParameter", array(0 => "attributes"), "method")), "content" => twig_trim_filter($this->getAttribute(                // line 12
$context["item"], "content", array())));
                // line 13
                echo " 
        ";
            }
            // line 15
            echo "        <a href=\"";
            echo $this->getAttribute(($context["values"] ?? null), "url", array());
            echo "\" class=\"list-group-item";
            if ($this->getAttribute(($context["values"] ?? null), "type", array(), "any", true, true)) {
                echo " list-group-item-";
                echo $this->getAttribute(($context["values"] ?? null), "type", array());
            }
            if ($this->getAttribute(($context["values"] ?? null), "active", array())) {
                echo " active";
            }
            if ($this->getAttribute(($context["values"] ?? null), "disabled", array())) {
                echo " disabled";
            }
            echo " ";
            echo $this->getAttribute($this->getAttribute(($context["values"] ?? null), "attributes", array()), "class", array(), "array");
            echo "\" ";
            $this->loadTemplate("partials/_attributes.html.twig", "bootstrap/listgroup.html.twig", 15)->display(array_merge($context, array("attributes" => $this->getAttribute(($context["values"] ?? null), "attributes", array()), "ignore" => array(0 => "class"))));
            echo ">
            ";
            // line 16
            if ($this->getAttribute(($context["values"] ?? null), "badge", array(), "any", true, true)) {
                // line 17
                echo "            <span class=\"badge\">";
                echo $this->getAttribute(($context["values"] ?? null), "badge", array());
                echo "</span>
            ";
            }
            // line 19
            echo "            ";
            echo $this->getAttribute(($context["values"] ?? null), "content", array());
            echo "
        </a>
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
        // line 22
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "bootstrap/listgroup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 22,  87 => 19,  81 => 17,  79 => 16,  59 => 15,  55 => 13,  53 => 12,  52 => 11,  51 => 10,  50 => 9,  49 => 8,  48 => 7,  47 => 6,  45 => 5,  42 => 4,  39 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"list-group\">
    {% for item in items %}
        {% set values = item %}
        {% if(instanceof(values, '\\\\Thunder\\\\Shortcode\\\\Shortcode\\\\ProcessedShortcode')) %}
            {% set values = {
              'url': item.getParameter('url'),
              'type': item.getParameter('type'),
              'disabled': item.getParameter('disabled'),
              'badge': item.getParameter('badge'),
              'active': item.getParameter('active'),
              'attributes': parse_attributes(item.getParameter('attributes')),
              'content': item.content|trim,
            } %} 
        {% endif %}
        <a href=\"{{ values.url }}\" class=\"list-group-item{% if values.type is defined %} list-group-item-{{ values.type }}{% endif %}{% if values.active %} active{% endif %}{% if values.disabled %} disabled{% endif %} {{ values.attributes['class'] }}\" {% include 'partials/_attributes.html.twig' with {'attributes': values.attributes, 'ignore': ['class']} %}>
            {% if(values.badge is defined) %}
            <span class=\"badge\">{{ values.badge }}</span>
            {% endif %}
            {{ values.content }}
        </a>
    {% endfor %}
</div>
", "bootstrap/listgroup.html.twig", "/Users/brookehopkins/Documents/Development/grav-admin/user/plugins/gravstrap/templates/bootstrap/listgroup.html.twig");
    }
}
