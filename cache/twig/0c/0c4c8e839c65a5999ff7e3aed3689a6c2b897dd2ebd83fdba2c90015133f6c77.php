<?php

/* partials/pagination.html.twig */
class __TwigTemplate_bb9b421c0d973ded52c36912531e5fc28f679825beece8c4bbf31474c8d8cabb extends Twig_Template
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
        $context["pagination"] = ((array_key_exists("pagination", $context)) ? (_twig_default_filter(($context["pagination"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", array()), "params", array()), "pagination", array()))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", array()), "params", array()), "pagination", array())));
        // line 2
        $context["base_url"] = ((array_key_exists("base_url", $context)) ? (_twig_default_filter(($context["base_url"] ?? null), $this->getAttribute(($context["page"] ?? null), "url", array()))) : ($this->getAttribute(($context["page"] ?? null), "url", array())));
        // line 3
        echo "
";
        // line 4
        if ((twig_length_filter($this->env, ($context["pagination"] ?? null)) > 1)) {
            // line 5
            echo "
<ul class=\"pagination\">
    ";
            // line 7
            if ($this->getAttribute(($context["pagination"] ?? null), "hasPrev", array())) {
                // line 8
                echo "        ";
                $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", array())) . $this->getAttribute(($context["pagination"] ?? null), "prevUrl", array())), array("//" => "/"));
                // line 9
                echo "        <li><a rel=\"prev\" href=\"";
                echo ($context["url"] ?? null);
                echo "\">&laquo;</a></li>
    ";
            } else {
                // line 11
                echo "        <li><span>&laquo;</span></li>
    ";
            }
            // line 13
            echo "
    ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["paginate"]) {
                // line 15
                echo "
        ";
                // line 16
                if ($this->getAttribute($context["paginate"], "isCurrent", array())) {
                    // line 17
                    echo "            <li><span>";
                    echo $this->getAttribute($context["paginate"], "number", array());
                    echo "</span></li>
        ";
                } elseif ($this->getAttribute(                // line 18
$context["paginate"], "isInDelta", array())) {
                    // line 19
                    echo "            ";
                    $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", array())) . $this->getAttribute($context["paginate"], "url", array())), array("//" => "/"));
                    // line 20
                    echo "            <li><a href=\"";
                    echo ($context["url"] ?? null);
                    echo "\">";
                    echo $this->getAttribute($context["paginate"], "number", array());
                    echo "</a></li>
        ";
                } elseif ($this->getAttribute(                // line 21
$context["paginate"], "isDeltaBorder", array())) {
                    // line 22
                    echo "            <li class=\"gap\"><span>&hellip;</span></li>
        ";
                }
                // line 24
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paginate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    ";
            if ($this->getAttribute(($context["pagination"] ?? null), "hasNext", array())) {
                // line 27
                echo "        ";
                $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", array())) . $this->getAttribute(($context["pagination"] ?? null), "nextUrl", array())), array("//" => "/"));
                // line 28
                echo "        <li><a rel=\"next\" href=\"";
                echo ($context["url"] ?? null);
                echo "\">&raquo;</a></li>
    ";
            } else {
                // line 30
                echo "        <li><span>&raquo;</span></li>
    ";
            }
            // line 32
            echo "</ul>

";
        }
    }

    public function getTemplateName()
    {
        return "partials/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 32,  101 => 30,  95 => 28,  92 => 27,  89 => 26,  82 => 24,  78 => 22,  76 => 21,  69 => 20,  66 => 19,  64 => 18,  59 => 17,  57 => 16,  54 => 15,  50 => 14,  47 => 13,  43 => 11,  37 => 9,  34 => 8,  32 => 7,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set pagination = pagination|default(page.collection.params.pagination) %}
{% set base_url = base_url|default(page.url) %}

{% if pagination|length > 1 %}

<ul class=\"pagination\">
    {% if pagination.hasPrev %}
        {% set url =  (base_url ~ pagination.params ~ pagination.prevUrl)|replace({'//':'/'}) %}
        <li><a rel=\"prev\" href=\"{{ url }}\">&laquo;</a></li>
    {% else %}
        <li><span>&laquo;</span></li>
    {% endif %}

    {% for paginate in pagination %}

        {% if paginate.isCurrent %}
            <li><span>{{ paginate.number }}</span></li>
        {% elseif paginate.isInDelta %}
            {% set url = (base_url ~ pagination.params ~ paginate.url)|replace({'//':'/'}) %}
            <li><a href=\"{{ url }}\">{{ paginate.number }}</a></li>
        {% elseif paginate.isDeltaBorder %}
            <li class=\"gap\"><span>&hellip;</span></li>
        {% endif %}

    {% endfor %}
    {% if pagination.hasNext %}
        {% set url = (base_url ~ pagination.params ~ pagination.nextUrl)|replace({'//':'/'}) %}
        <li><a rel=\"next\" href=\"{{ url }}\">&raquo;</a></li>
    {% else %}
        <li><span>&raquo;</span></li>
    {% endif %}
</ul>

{% endif %}
", "partials/pagination.html.twig", "/Users/brookehopkins/Documents/Development/grav-admin/user/plugins/pagination/templates/partials/pagination.html.twig");
    }
}
