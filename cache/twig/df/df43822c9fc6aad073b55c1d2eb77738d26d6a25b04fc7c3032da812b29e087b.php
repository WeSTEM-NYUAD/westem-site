<?php

/* partials/footer_navigation.html.twig */
class __TwigTemplate_e6e88eb7ee6f94c29fe403354a2922822eeae7f301717492c8fc7f196dfa2b9e extends Twig_Template
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
        // line 17
        echo "
<div class=\"";
        // line 18
        echo $this->getAttribute(($context["element"] ?? null), "class", array());
        echo " navigation\">    
    ";
        // line 19
        if ($this->getAttribute(($context["element"] ?? null), "title", array(), "any", true, true)) {
            // line 20
            echo "    <h3>";
            echo $this->getAttribute(($context["element"] ?? null), "title", array());
            echo "</h3>
    ";
        }
        // line 22
        echo "    <ul>
        ";
        // line 23
        if ((null === ($context["pages"] ?? null))) {
            // line 24
            echo "        ";
            $context["pages"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "pages", array()), "root", array());
            // line 25
            echo "        ";
        }
        // line 26
        echo "
        ";
        // line 27
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdown", array()), "enabled", array())) {
            // line 28
            echo "            ";
            echo $this->getAttribute($this, "loop", array(0 => ($context["pages"] ?? null)), "method");
            echo "
        ";
        } else {
            // line 30
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 31
                echo "                ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                // line 32
                echo "                <li class=\"";
                echo ($context["current_page"] ?? null);
                echo "\">
                    <a href=\"";
                // line 33
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
                        ";
                // line 34
                if ($this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array())) {
                    echo "<i class=\"fa fa-";
                    echo $this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array());
                    echo "\"></i>";
                }
                // line 35
                echo "                        ";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "        ";
        }
        // line 40
        echo "    </ul>
</div>
";
    }

    // line 1
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("active") : (""));
                // line 4
                echo "        <li class=\"";
                echo ($context["current_page"] ?? null);
                echo "\">
            <a href=\"";
                // line 5
                echo $this->getAttribute($context["p"], "url", array());
                echo "\">
                ";
                // line 6
                if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                    echo "<i class=\"fa fa-";
                    echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                    echo "\"></i>";
                }
                // line 7
                echo "                ";
                echo $this->getAttribute($context["p"], "menu", array());
                echo "
            </a>
            ";
                // line 9
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                    // line 10
                    echo "                <ul>
                    ";
                    // line 11
                    echo $this->getAttribute($this, "loop", array(0 => $context["p"]), "method");
                    echo "
                </ul>
            ";
                }
                // line 14
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/footer_navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 14,  145 => 11,  142 => 10,  140 => 9,  134 => 7,  128 => 6,  124 => 5,  119 => 4,  116 => 3,  111 => 2,  99 => 1,  93 => 40,  90 => 39,  79 => 35,  73 => 34,  69 => 33,  64 => 32,  61 => 31,  56 => 30,  50 => 28,  48 => 27,  45 => 26,  42 => 25,  39 => 24,  37 => 23,  34 => 22,  28 => 20,  26 => 19,  22 => 18,  19 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro loop(page) %}
    {% for p in page.children.visible %}
        {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}
        <li class=\"{{ current_page }}\">
            <a href=\"{{ p.url }}\">
                {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon }}\"></i>{% endif %}
                {{ p.menu }}
            </a>
            {% if p.children.visible.count > 0 %}
                <ul>
                    {{ _self.loop(p) }}
                </ul>
            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}

<div class=\"{{ element.class }} navigation\">    
    {% if element.title is defined %}
    <h3>{{ element.title }}</h3>
    {% endif %}
    <ul>
        {% if pages is null %}
        {% set pages = grav.pages.root %}
        {% endif %}

        {% if theme_config.dropdown.enabled %}
            {{ _self.loop(pages) }}
        {% else %}
            {% for page in pages.children.visible %}
                {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
                <li class=\"{{ current_page }}\">
                    <a href=\"{{ page.url }}\">
                        {% if page.header.icon %}<i class=\"fa fa-{{ page.header.icon }}\"></i>{% endif %}
                        {{ page.menu }}
                    </a>
                </li>
            {% endfor %}
        {% endif %}
    </ul>
</div>
", "partials/footer_navigation.html.twig", "/Users/brookehopkins/Documents/Development/westem-site/user/plugins/gravstrap/templates/modules/partials/footer_navigation.html.twig");
    }
}
