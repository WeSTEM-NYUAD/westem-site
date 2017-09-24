<?php

/* vendor/simple_form.html.twig */
class __TwigTemplate_98d551d6ff26fa87a49708a4ad8f5021ea72e653bdd3e520156ca5615f4598d1 extends Twig_Template
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
        echo "<form name=\"simple_form\" id=\"simple_form\" class=\"form-horizontal\" action=\"https://getsimpleform.com/messages?form_api_token=";
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html_attr");
        echo "\" method=\"post\">

    ";
        // line 4
        echo "    <input type=\"hidden\" name=\"redirect_to\" value=\"";
        echo ($context["redirect_to"] ?? null);
        echo "\" />

    ";
        // line 6
        $context["column_width"] = 12;
        // line 7
        echo "    ";
        if (($context["show_form_labels"] ?? null)) {
            // line 8
            echo "        ";
            $context["column_width"] = 10;
            // line 9
            echo "    ";
        }
        // line 10
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->dump($this->env, $context, ($context["show_form_labels"] ?? null));
        echo "
    <div class=\"form-group\">
        ";
        // line 12
        if (($context["show_form_labels"] ?? null)) {
            // line 13
            echo "        <label for=\"name\" class=\"col-md-2 control-label\">Name</label>
        ";
        }
        // line 15
        echo "        <div class=\"col-md-";
        echo ($context["column_width"] ?? null);
        echo "\">
            <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Your name\" />
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 20
        if (($context["show_form_labels"] ?? null)) {
            // line 21
            echo "        <label for=\"email\" class=\"col-md-2 control-label\">Email</label>
        ";
        }
        // line 23
        echo "        <div class=\"col-md-";
        echo ($context["column_width"] ?? null);
        echo "\">
            <input type=\"email\" name=\"email\" class=\"form-control\" id=\"email\" placeholder=\"name@example.com\">
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 28
        if (($context["show_form_labels"] ?? null)) {
            // line 29
            echo "        <label for=\"message\" class=\"col-md-2 control-label\">Message</label>
        ";
        }
        // line 31
        echo "        <div class=\"col-md-";
        echo ($context["column_width"] ?? null);
        echo "\">
            <textarea name=\"message\" class=\"col-md-12 form-control\" rows=\"6\" id=\"message\" placeholder=\"Your message here\" required></textarea>
        </div>
    </div>
    <div class=\"form-group\">
        <div class=\"";
        // line 36
        if (($context["show_form_labels"] ?? null)) {
            echo "col-md-offset-2 ";
        }
        echo "col-md-";
        echo ($context["column_width"] ?? null);
        echo "\">
            <button type=\"submit\" class=\"btn btn-default\">Submit</button>
        </div>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "vendor/simple_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 36,  83 => 31,  79 => 29,  77 => 28,  68 => 23,  64 => 21,  62 => 20,  53 => 15,  49 => 13,  47 => 12,  42 => 10,  39 => 9,  36 => 8,  33 => 7,  31 => 6,  25 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form name=\"simple_form\" id=\"simple_form\" class=\"form-horizontal\" action=\"https://getsimpleform.com/messages?form_api_token={{ token | e('html_attr') }}\" method=\"post\">

    {# Redirect URL after submit #}
    <input type=\"hidden\" name=\"redirect_to\" value=\"{{ redirect_to | raw }}\" />

    {% set column_width = 12 %}
    {% if show_form_labels %}
        {% set column_width = 10 %}
    {% endif %}
{{ dump(show_form_labels) }}
    <div class=\"form-group\">
        {% if show_form_labels %}
        <label for=\"name\" class=\"col-md-2 control-label\">Name</label>
        {% endif %}
        <div class=\"col-md-{{ column_width }}\">
            <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Your name\" />
        </div>
    </div>
    <div class=\"form-group\">
        {% if show_form_labels %}
        <label for=\"email\" class=\"col-md-2 control-label\">Email</label>
        {% endif %}
        <div class=\"col-md-{{ column_width }}\">
            <input type=\"email\" name=\"email\" class=\"form-control\" id=\"email\" placeholder=\"name@example.com\">
        </div>
    </div>
    <div class=\"form-group\">
        {% if show_form_labels %}
        <label for=\"message\" class=\"col-md-2 control-label\">Message</label>
        {% endif %}
        <div class=\"col-md-{{ column_width }}\">
            <textarea name=\"message\" class=\"col-md-12 form-control\" rows=\"6\" id=\"message\" placeholder=\"Your message here\" required></textarea>
        </div>
    </div>
    <div class=\"form-group\">
        <div class=\"{% if show_form_labels %}col-md-offset-2 {% endif %}col-md-{{ column_width }}\">
            <button type=\"submit\" class=\"btn btn-default\">Submit</button>
        </div>
    </div>
</form>
", "vendor/simple_form.html.twig", "/Users/brookehopkins/Documents/Development/westem-site/user/plugins/gravstrap/templates/vendor/simple_form.html.twig");
    }
}
