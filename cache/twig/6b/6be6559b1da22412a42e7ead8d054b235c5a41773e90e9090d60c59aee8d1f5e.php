<?php

/* partials/simplesearch_searchbox.html.twig */
class __TwigTemplate_5cfce7261eedbc320753489be8eeed5c89472059a493247a12b69c8268d6eed3 extends Twig_Template
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
        $context["min_chars"] = $this->getAttribute(($context["config"] ?? null), "get", array(0 => "plugins.simplesearch.min_query_length", 1 => 3), "method");
        // line 2
        echo "<div class=\"search-wrapper\">
    <form name=\"search\" onSubmit=\"return validateSearch(event);\">
        <input
            name=\"searchfield\"
            class=\"search-input\"
            type=\"text\"
            pattern=\".{";
        // line 8
        echo ($context["min_chars"] ?? null);
        echo ",}\"
            required
            oninvalid=\"this.setCustomValidity('";
        // line 10
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_SIMPLESEARCH.SEARCH_FIELD_MINIUMUM_CHARACTERS", ($context["min_chars"] ?? null));
        echo "')\" onchange=\"try{setCustomValidity('')}catch(e){}\"
            placeholder=\"";
        // line 11
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_SIMPLESEARCH.SEARCH_PLACEHOLDER");
        echo "\"
            value=\"";
        // line 12
        echo ($context["query"] ?? null);
        echo "\"
            data-search-input=\"";
        // line 13
        echo ($context["base_url"] ?? null);
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "route", array()) == "@self")) ? ("") : (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "route", array()) == "/")) ? ("") : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "route", array())))));
        echo "/query\"
        />
        ";
        // line 15
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "display_button", array())) {
            // line 16
            echo "            <button type=\"submit\" class=\"search-submit\">
                <img src=\"";
            // line 17
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("plugin://simplesearch/assets/search.svg");
            echo "\" />
            </button>
        ";
        }
        // line 20
        echo "    </form>
    <script>
    function validateSearch(event) {
        var input = document.forms[\"search\"][\"searchfield\"];
        var target = input.getAttribute('data-search-input');
        if (input.value.length >= ";
        // line 25
        echo ($context["min_chars"] ?? null);
        echo ") {
            event.preventDefault();
            window.location.href = target + '";
        // line 27
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
        echo "' + input.value;
        } else {
            event.preventDefault();
        }
    }
    </script>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/simplesearch_searchbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 27,  70 => 25,  63 => 20,  57 => 17,  54 => 16,  52 => 15,  46 => 13,  42 => 12,  38 => 11,  34 => 10,  29 => 8,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set min_chars = config.get('plugins.simplesearch.min_query_length', 3) %}
<div class=\"search-wrapper\">
    <form name=\"search\" onSubmit=\"return validateSearch(event);\">
        <input
            name=\"searchfield\"
            class=\"search-input\"
            type=\"text\"
            pattern=\".{ {{- min_chars -}} ,}\"
            required
            oninvalid=\"this.setCustomValidity('{{ \"PLUGIN_SIMPLESEARCH.SEARCH_FIELD_MINIUMUM_CHARACTERS\"|t(min_chars)|raw }}')\" onchange=\"try{setCustomValidity('')}catch(e){}\"
            placeholder=\"{{\"PLUGIN_SIMPLESEARCH.SEARCH_PLACEHOLDER\"|t}}\"
            value=\"{{ query }}\"
            data-search-input=\"{{ base_url }}{{ config.plugins.simplesearch.route == '@self' ? '' : (config.plugins.simplesearch.route == '/' ? '' : config.plugins.simplesearch.route) }}/query\"
        />
        {% if config.plugins.simplesearch.display_button %}
            <button type=\"submit\" class=\"search-submit\">
                <img src=\"{{ url('plugin://simplesearch/assets/search.svg') }}\" />
            </button>
        {% endif %}
    </form>
    <script>
    function validateSearch(event) {
        var input = document.forms[\"search\"][\"searchfield\"];
        var target = input.getAttribute('data-search-input');
        if (input.value.length >= {{ min_chars }}) {
            event.preventDefault();
            window.location.href = target + '{{ config.system.param_sep }}' + input.value;
        } else {
            event.preventDefault();
        }
    }
    </script>
</div>
", "partials/simplesearch_searchbox.html.twig", "/Users/brookehopkins/Documents/Development/grav-admin/user/plugins/simplesearch/templates/partials/simplesearch_searchbox.html.twig");
    }
}
