<?php

/* basic/list.html.twig */
class __TwigTemplate_4d18b3c76f30f539ce840c2d85e9f0ed93ca78ee8af667e97d654e243486e0d1 extends Twig_Template
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
        $context["attributes"] = $this->env->getExtension('Gravstrap\Twig\GravstrapTwigExtension')->parseAttributes(($context["list_attributes"] ?? null));
        // line 2
        echo "<";
        echo ($context["tag"] ?? null);
        echo " ";
        $this->loadTemplate("partials/_attributes.html.twig", "basic/list.html.twig", 2)->display($context);
        echo ">
    ";
        // line 3
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
            // line 4
            echo "    ";
            $context["values"] = $context["item"];
            // line 5
            echo "    ";
            if ($this->env->getExtension('Gravstrap\Twig\GravstrapTwigExtension')->instance_of(($context["values"] ?? null), "\\Thunder\\Shortcode\\Shortcode\\ProcessedShortcode")) {
                // line 6
                echo "        ";
                $context["values"] = array("attributes" => $this->env->getExtension('Gravstrap\Twig\GravstrapTwigExtension')->parseAttributes($this->getAttribute(                // line 7
$context["item"], "getParameter", array(0 => "attributes"), "method")), "content" => twig_trim_filter($this->getAttribute(                // line 8
$context["item"], "content", array())));
                // line 9
                echo " 
    ";
            }
            // line 11
            echo "    <li ";
            $this->loadTemplate("partials/_attributes.html.twig", "basic/list.html.twig", 11)->display(array_merge($context, array("attributes" => $this->getAttribute(($context["values"] ?? null), "attributes", array()))));
            echo ">";
            echo $this->getAttribute(($context["values"] ?? null), "content", array());
            echo "</li>
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
        // line 13
        echo "</";
        echo ($context["tag"] ?? null);
        echo ">";
    }

    public function getTemplateName()
    {
        return "basic/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 13,  60 => 11,  56 => 9,  54 => 8,  53 => 7,  51 => 6,  48 => 5,  45 => 4,  28 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set attributes = parse_attributes(list_attributes) %}
<{{ tag }} {% include 'partials/_attributes.html.twig' %}>
    {% for item in items %}
    {% set values = item %}
    {% if(instanceof(values, '\\\\Thunder\\\\Shortcode\\\\Shortcode\\\\ProcessedShortcode')) %}
        {% set values = {
          'attributes': parse_attributes(item.getParameter('attributes')),
          'content': item.content|trim,
        } %} 
    {% endif %}
    <li {% include 'partials/_attributes.html.twig' with {'attributes': values.attributes} %}>{{ values.content }}</li>
    {% endfor %}
</{{ tag }}>", "basic/list.html.twig", "/Users/brookehopkins/Documents/Development/grav-admin/user/plugins/gravstrap/templates/basic/list.html.twig");
    }
}
