<?php

/* partials/archives.html.twig */
class __TwigTemplate_fbc0fa8ed3076a06a67cc84187090ee7e3b46282081e7837b42b1d575422d5b8 extends Twig_Template
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
        echo "<ul class=\"archives\">

";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["archives_data"] ?? null));
        foreach ($context['_seq'] as $context["month"] => $context["items"]) {
            // line 4
            echo "    <li>
    \t<a href=\"";
            // line 5
            echo ($context["base_url"] ?? null);
            echo "/";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "archives", array()), "taxonomy_names", array()), "month", array());
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_date_format_filter($this->env, $context["month"], "M_Y")), "url");
            echo "\">
        ";
            // line 6
            if (($context["archives_show_count"] ?? null)) {
                // line 7
                echo "        <span class=\"label\">";
                echo twig_length_filter($this->env, $context["items"]);
                echo "</span>
        ";
            }
            // line 9
            echo "        <span class=\"archive_date\">";
            echo $context["month"];
            echo "</span>
        </a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['month'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "partials/archives.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  46 => 9,  40 => 7,  38 => 6,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"archives\">

{% for month,items in archives_data %}
    <li>
    \t<a href=\"{{ base_url }}/{{ config.plugins.archives.taxonomy_names.month }}{{ config.system.param_sep }}{{ month|date('M_Y')|lower|e('url') }}\">
        {% if archives_show_count %}
        <span class=\"label\">{{ items|length }}</span>
        {% endif %}
        <span class=\"archive_date\">{{ month }}</span>
        </a>
    </li>
{% endfor %}
</ul>
", "partials/archives.html.twig", "/Users/brookehopkins/Documents/Development/westem-site/user/plugins/archives/templates/partials/archives.html.twig");
    }
}
