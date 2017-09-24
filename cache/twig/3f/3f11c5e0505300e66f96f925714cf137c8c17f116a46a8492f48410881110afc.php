<?php

/* misc/map.html.twig */
class __TwigTemplate_73552ddfb283d7d3f89b0c5e3965339ca53b6ee722ad4a311da68b2785689c58 extends Twig_Template
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
        echo "<div id=\"";
        echo ($context["id"] ?? null);
        echo "\" class=\"googlemap\">
</div>

<script>
    function initMap() {
        var mapOptions = {
            'center': ";
        // line 7
        echo ($context["center"] ?? null);
        echo ",
            'zoom': ";
        // line 8
        echo ($context["zoom"] ?? null);
        echo "
        };

        var markers = [];
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["markers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["marker"]) {
            // line 13
            echo "        var markerOptions = {
          position: ";
            // line 14
            echo $this->getAttribute($context["marker"], "location", array());
            echo ",
          title: \"";
            // line 15
            echo $this->getAttribute($context["marker"], "title", array());
            echo "\",
          ";
            // line 16
            if (($this->getAttribute($context["marker"], "info", array(), "any", true, true) &&  !(null === $this->getAttribute($context["marker"], "info", array())))) {
                echo "info: \"";
                echo $this->getAttribute($context["marker"], "info", array());
                echo "\"";
            }
            // line 17
            echo "        }
        markers.push(markerOptions);
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marker'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
        var mapDiv = document.getElementById('";
        // line 21
        echo ($context["id"] ?? null);
        echo "');
        var map = new google.maps.Map(mapDiv, mapOptions);

        for (var i = 0; i < markers.length; i++) {
            var markerOptions = markers[i];
            markerOptions.map = map;
            markerOptions.animation = google.maps.Animation.DROP;
            var marker = new google.maps.Marker(markerOptions);

            if (markerOptions.hasOwnProperty('info')) {
                var infowindow = new google.maps.InfoWindow({
                    content: markerOptions.info
                });
                marker.addListener('click', function() {
                    infowindow.open(map, marker);
                });
            }
        }
    }
</script>
<script async defer
    src=\"https://maps.googleapis.com/maps/api/js?key=";
        // line 42
        echo ($context["api_key"] ?? null);
        echo "&callback=initMap\">
</script>
";
    }

    public function getTemplateName()
    {
        return "misc/map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 42,  72 => 21,  69 => 20,  61 => 17,  55 => 16,  51 => 15,  47 => 14,  44 => 13,  40 => 12,  33 => 8,  29 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"{{ id }}\" class=\"googlemap\">
</div>

<script>
    function initMap() {
        var mapOptions = {
            'center': {{ center }},
            'zoom': {{ zoom }}
        };

        var markers = [];
        {% for marker in markers %}
        var markerOptions = {
          position: {{ marker.location }},
          title: \"{{ marker.title }}\",
          {% if (marker.info is defined and marker.info is not null) %}info: \"{{ marker.info }}\"{% endif %}
        }
        markers.push(markerOptions);
        {% endfor %}

        var mapDiv = document.getElementById('{{ id }}');
        var map = new google.maps.Map(mapDiv, mapOptions);

        for (var i = 0; i < markers.length; i++) {
            var markerOptions = markers[i];
            markerOptions.map = map;
            markerOptions.animation = google.maps.Animation.DROP;
            var marker = new google.maps.Marker(markerOptions);

            if (markerOptions.hasOwnProperty('info')) {
                var infowindow = new google.maps.InfoWindow({
                    content: markerOptions.info
                });
                marker.addListener('click', function() {
                    infowindow.open(map, marker);
                });
            }
        }
    }
</script>
<script async defer
    src=\"https://maps.googleapis.com/maps/api/js?key={{ api_key }}&callback=initMap\">
</script>
", "misc/map.html.twig", "/Users/brookehopkins/Documents/Development/grav-admin/user/plugins/gravstrap/templates/misc/map.html.twig");
    }
}
