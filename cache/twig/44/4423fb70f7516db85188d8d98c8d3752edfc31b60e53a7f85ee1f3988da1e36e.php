<?php

/* bootstrap/partials/_dropdown_items.html.twig */
class __TwigTemplate_ab0b1607ddbf06c2e4f60cad512e9f1142f2e0aa39966aa34c61f9d851738ba2 extends Twig_Template
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
        echo "<ul class=\"dropdown-menu ";
        echo $this->getAttribute(($context["attributes"] ?? null), "class", array(), "array");
        echo "\"";
        $this->loadTemplate("partials/_attributes.html.twig", "bootstrap/partials/_dropdown_items.html.twig", 2)->display(array_merge($context, array("ignore" => array(0 => "class"))));
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
            if (twig_test_iterable($context["item"])) {
                // line 5
                echo "    <li>";
                $this->loadTemplate("basic/link.html.twig", "bootstrap/partials/_dropdown_items.html.twig", 5)->display(array_merge($context, array("menu" => $this->getAttribute($context["item"], "menu", array()), "url" => $this->getAttribute($context["item"], "url", array()))));
                echo "</li>
    ";
            } else {
                // line 7
                echo "    <li>";
                echo $context["item"];
                echo "</li>
    ";
            }
            // line 9
            echo "  ";
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
        // line 10
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "bootstrap/partials/_dropdown_items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 10,  60 => 9,  54 => 7,  48 => 5,  45 => 4,  28 => 3,  21 => 2,  19 => 1,);
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
<ul class=\"dropdown-menu {{ attributes['class'] }}\"{% include 'partials/_attributes.html.twig' with {'ignore': ['class']} %}>
  {% for item in items %}
    {% if item is iterable %}
    <li>{% include 'basic/link.html.twig' with {'menu': item.menu, 'url': item.url} %}</li>
    {% else %}
    <li>{{ item }}</li>
    {% endif %}
  {% endfor %}
</ul>
", "bootstrap/partials/_dropdown_items.html.twig", "/Users/brookehopkins/Documents/Development/westem-site/user/plugins/gravstrap/templates/bootstrap/partials/_dropdown_items.html.twig");
    }
}
