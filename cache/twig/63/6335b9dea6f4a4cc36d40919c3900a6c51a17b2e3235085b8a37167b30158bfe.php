<?php

/* partials/base.html.twig */
class __TwigTemplate_dac0c699488e2df64aa9a8e19504fa92e56126ecc0867a0e09bc34dfd566e16c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
";
        // line 4
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 30
        echo "</head>
<body class=\"";
        // line 31
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">
    ";
        // line 32
        $this->displayBlock('header', $context, $blocks);
        // line 37
        echo "
    ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "
    ";
        // line 45
        $this->displayBlock('footer', $context, $blocks);
        // line 49
        echo "
</body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 8
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>
    ";
        // line 9
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 9)->display($context);
        // line 10
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png", true);
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 12
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "
";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://vendor/bootstrap/css/bootstrap.min.css", 1 => 103), "method");
        // line 16
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/gravstraptheme.css", 1 =>  -100), "method");
        // line 17
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/slideme.css", 1 => 100), "method");
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 100), "method");
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css", 1 =>  -100), "method");
        // line 20
        echo "    ";
    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        // line 24
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://vendor/bootstrap/js/bootstrap.min.js", 1 => 100), "method");
        // line 26
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.slideme2.js"), "method");
        // line 27
        echo "    ";
    }

    // line 32
    public function block_header($context, array $blocks = array())
    {
        // line 33
        echo "    <header id=\"header\" class=\"header\">
        ";
        // line 34
        echo ($context["navbar1"] ?? null);
        echo "
    </header>
    ";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        // line 39
        echo "    <section id=\"body\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
        ";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "    </section>
    ";
    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        // line 41
        echo "        ";
    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        // line 46
        echo "    ";
        echo ($context["footer"] ?? null);
        echo "
    </footer>
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 46,  182 => 45,  178 => 41,  175 => 40,  170 => 42,  168 => 40,  163 => 39,  160 => 38,  153 => 34,  150 => 33,  147 => 32,  143 => 27,  140 => 26,  137 => 25,  134 => 24,  131 => 23,  127 => 20,  124 => 19,  121 => 18,  118 => 17,  115 => 16,  112 => 15,  109 => 14,  102 => 28,  100 => 23,  94 => 21,  92 => 14,  87 => 12,  83 => 11,  80 => 10,  78 => 9,  70 => 8,  67 => 7,  64 => 6,  57 => 49,  55 => 45,  52 => 44,  50 => 38,  47 => 37,  45 => 32,  41 => 31,  38 => 30,  36 => 6,  33 => 5,  31 => 4,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
{% set theme_config = attribute(config.themes, config.system.pages.theme) %}

{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png', true) }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('theme://vendor/bootstrap/css/bootstrap.min.css', 103) %}
        {% do assets.addCss('theme://css/gravstraptheme.css',-100) %}
        {% do assets.addCss('theme://css/slideme.css',100) %}
        {% do assets.addCss('theme://css/font-awesome.min.css',100) %}
        {% do assets.addCss('theme://css/custom.css',-100) %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.add('jquery',101) %}
        {% do assets.addJs('theme://vendor/bootstrap/js/bootstrap.min.js', 100) %}
        {% do assets.addJs('theme://js/jquery.slideme2.js') %}
    {% endblock %}
    {{ assets.js() }}
{% endblock head%}
</head>
<body class=\"{{ page.header.body_classes }}\">
    {% block header %}
    <header id=\"header\" class=\"header\">
        {{ navbar1 }}
    </header>
    {% endblock %}

    {% block body %}
    <section id=\"body\" class=\"{{ class }}\">
        {% block content %}
        {% endblock %}
    </section>
    {% endblock %}

    {% block footer %}
    {{ footer }}
    </footer>
    {% endblock %}

</body>
</html>
", "partials/base.html.twig", "/Users/meganmoore/Documents/weSTEM/westem-site/user/themes/gravstrap-theme/templates/partials/base.html.twig");
    }
}
