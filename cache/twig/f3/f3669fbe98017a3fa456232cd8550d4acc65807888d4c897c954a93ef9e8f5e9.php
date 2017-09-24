<?php

/* blog/pure/blog_theme.html.twig */
class __TwigTemplate_dec88d5ee4e7c10bcd3efbbb7d22c702f742e89d359525b74710d59df8c1abbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'pagination' => array($this, 'block_pagination'),
            'blog_content' => array($this, 'block_blog_content'),
            'blog_posts' => array($this, 'block_blog_posts'),
            'posts' => array($this, 'block_posts'),
            'blog_post' => array($this, 'block_blog_post'),
            'post' => array($this, 'block_post'),
            'post_header' => array($this, 'block_post_header'),
            'post_header_title' => array($this, 'block_post_header_title'),
            'post_header_taxonomy' => array($this, 'block_post_header_taxonomy'),
            'post_header_date' => array($this, 'block_post_header_date'),
            'post_header_date_extended' => array($this, 'block_post_header_date_extended'),
            'post_header_image' => array($this, 'block_post_header_image'),
            'post_contents' => array($this, 'block_post_contents'),
            'prev_next_buttons' => array($this, 'block_prev_next_buttons'),
            'sidebar' => array($this, 'block_sidebar'),
            'simple_search' => array($this, 'block_simple_search'),
            'sidebar_taxonomy' => array($this, 'block_sidebar_taxonomy'),
            'sidebar_topictags' => array($this, 'block_sidebar_topictags'),
            'related_pages' => array($this, 'block_related_pages'),
            'random_page' => array($this, 'block_random_page'),
            'archives' => array($this, 'block_archives'),
            'feed' => array($this, 'block_feed'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('pagination', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('blog_content', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('blog_posts', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('posts', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('blog_post', $context, $blocks);
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('post', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('post_header', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('post_header_title', $context, $blocks);
        // line 88
        echo "
";
        // line 89
        $this->displayBlock('post_header_taxonomy', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('post_header_date', $context, $blocks);
        // line 105
        echo "
";
        // line 106
        $this->displayBlock('post_header_date_extended', $context, $blocks);
        // line 111
        echo "
";
        // line 112
        $this->displayBlock('post_header_image', $context, $blocks);
        // line 122
        echo "
";
        // line 123
        $this->displayBlock('post_contents', $context, $blocks);
        // line 147
        echo "
";
        // line 148
        $this->displayBlock('prev_next_buttons', $context, $blocks);
        // line 161
        echo "
";
        // line 162
        $this->displayBlock('sidebar', $context, $blocks);
        // line 173
        echo "
";
        // line 174
        $this->displayBlock('simple_search', $context, $blocks);
        // line 182
        echo "
";
        // line 183
        $this->displayBlock('sidebar_taxonomy', $context, $blocks);
        // line 201
        echo "
";
        // line 202
        $this->displayBlock('sidebar_topictags', $context, $blocks);
        // line 219
        echo "
";
        // line 220
        $this->displayBlock('related_pages', $context, $blocks);
        // line 226
        echo "    
";
        // line 227
        $this->displayBlock('random_page', $context, $blocks);
        // line 235
        echo "    
";
        // line 236
        $this->displayBlock('archives', $context, $blocks);
        // line 244
        echo "    
";
        // line 245
        $this->displayBlock('feed', $context, $blocks);
    }

    // line 2
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 3
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 4
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog/pure/blog_theme.html.twig", 4)->display($context);
        }
    }

    // line 8
    public function block_pagination($context, array $blocks = array())
    {
        // line 9
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))) {
            // line 10
            $this->loadTemplate("partials/pagination.html.twig", "blog/pure/blog_theme.html.twig", 10)->display(array_merge($context, array("base_url" => $this->getAttribute(($context["page"] ?? null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))));
        }
        // line 11
        echo "  
";
    }

    // line 14
    public function block_blog_content($context, array $blocks = array())
    {
        // line 15
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
";
    }

    // line 18
    public function block_blog_posts($context, array $blocks = array())
    {
        // line 19
        echo "<div class=\"blog blog-content-list content-wrapper grid pure-g\">
    <div class=\"block pure-u-2-3\">    
    ";
        // line 21
        $this->displayBlock("posts", $context, $blocks);
        echo "
    ";
        // line 22
        $this->displayBlock("pagination", $context, $blocks);
        echo "
    </div>
    <div class=\"sidebar block size-1-3 pure-u-1-3\">
    ";
        // line 25
        $this->displayBlock("sidebar", $context, $blocks);
        echo "
    </div>
</div>
";
    }

    // line 30
    public function block_posts($context, array $blocks = array())
    {
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            echo " 
";
            // line 32
            $context["blog"] = ($context["page"] ?? null);
            // line 33
            $context["truncate"] = true;
            // line 34
            $context["page"] = $context["child"];
            // line 35
            $this->displayBlock("post", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo " 
";
    }

    // line 39
    public function block_blog_post($context, array $blocks = array())
    {
        // line 40
        $context["blog"] = $this->getAttribute(($context["page"] ?? null), "parent", array());
        // line 41
        $context["truncate"] = false;
        // line 42
        $context["big_header"] = true;
        // line 43
        $this->displayBlock("breadcrumbs", $context, $blocks);
        echo "
<div class=\"blog blog-content-item grid pure-g\">
    <div class=\"block pure-u-2-3\">
        ";
        // line 46
        $this->displayBlock("post", $context, $blocks);
        echo "  
    </div>
    <div class=\"sidebar block size-1-3 pure-u-1-3\">
        ";
        // line 49
        $this->displayBlock("sidebar", $context, $blocks);
        echo "
    </div>
</div>
";
    }

    // line 54
    public function block_post($context, array $blocks = array())
    {
        // line 55
        $this->displayBlock("urls", $context, $blocks);
        echo "
";
        // line 56
        $context["header_image"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image", array()), true);
        // line 57
        $context["header_image_width"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image_width", array()), 900);
        // line 58
        $context["header_image_height"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image_height", array()), 300);
        // line 59
        $context["header_image_file"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image_file", array());
        // line 60
        echo "<div class=\"list-item\">
";
        // line 61
        $this->displayBlock("post_header", $context, $blocks);
        echo "
";
        // line 62
        $this->displayBlock("post_contents", $context, $blocks);
        echo "
</div>
";
    }

    // line 66
    public function block_post_header($context, array $blocks = array())
    {
        // line 67
        echo "<div class=\"list-blog-header\">
    ";
        // line 68
        $this->displayBlock("post_header_date", $context, $blocks);
        echo " 
    ";
        // line 69
        $this->displayBlock("post_header_title", $context, $blocks);
        echo "      
    ";
        // line 70
        $this->displayBlock("post_header_taxonomy", $context, $blocks);
        echo "
    ";
        // line 71
        $this->displayBlock("post_header_image", $context, $blocks);
        echo " 
</div>
";
    }

    // line 75
    public function block_post_header_title($context, array $blocks = array())
    {
        echo "   
";
        // line 76
        $context["title_tag"] = ((array_key_exists("title_tag", $context)) ? (_twig_default_filter(($context["title_tag"] ?? null), "h4")) : ("h4"));
        // line 77
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array())) {
            // line 78
            echo "    <";
            echo ($context["title_tag"] ?? null);
            echo ">
        ";
            // line 79
            if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
                // line 80
                echo "        <a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", array());
                echo "\"><i class=\"fa fa-angle-double-right\"></i></a>
        ";
            }
            // line 82
            echo "        <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array());
            echo "\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</a>
    </";
            // line 83
            echo ($context["title_tag"] ?? null);
            echo ">
";
        } else {
            // line 85
            echo "    <";
            echo ($context["title_tag"] ?? null);
            echo "><a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</a></";
            echo ($context["title_tag"] ?? null);
            echo ">
";
        }
    }

    // line 89
    public function block_post_header_taxonomy($context, array $blocks = array())
    {
        // line 90
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array())) {
            // line 91
            echo "<span class=\"tags\">
    ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 93
                echo "    <a href=\"";
                echo $this->getAttribute(($context["blog"] ?? null), "url", array());
                echo "/tag";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
                echo $context["tag"];
                echo "\">";
                echo $context["tag"];
                echo "</a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "</span>
";
        }
    }

    // line 99
    public function block_post_header_date($context, array $blocks = array())
    {
        // line 100
        echo "<span class=\"list-blog-date\">
    <span>";
        // line 101
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "d");
        echo "</span>
    <em>";
        // line 102
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "M");
        echo "</em>
</span>
";
    }

    // line 106
    public function block_post_header_date_extended($context, array $blocks = array())
    {
        // line 107
        echo "<div class=\"list-blog-date-extended\">
    <i class=\"fa fa-calendar\"></i> <span>";
        // line 108
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "F j, Y, g:i a");
        echo "</span>
</div>
";
    }

    // line 112
    public function block_post_header_image($context, array $blocks = array())
    {
        echo "   
";
        // line 113
        if (($context["header_image"] ?? null)) {
            // line 114
            echo "    ";
            if (($context["header_image_file"] ?? null)) {
                // line 115
                echo "        ";
                $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), ($context["header_image_file"] ?? null), array(), "array");
                // line 116
                echo "    ";
            } else {
                // line 117
                echo "        ";
                $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
                // line 118
                echo "    ";
            }
            // line 119
            echo "    ";
            echo $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "cropZoom", array(0 => ($context["header_image_width"] ?? null), 1 => ($context["header_image_height"] ?? null)), "method"), "html", array());
            echo "
";
        }
    }

    // line 123
    public function block_post_contents($context, array $blocks = array())
    {
        // line 124
        echo "<div class=\"list-blog-padding\">
";
        // line 125
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
            // line 126
            echo "    ";
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "
    ";
            // line 127
            if ( !($context["truncate"] ?? null)) {
                // line 128
                echo "    ";
                $context["show_prev_next"] = true;
                // line 129
                echo "    ";
            }
        } elseif ((        // line 130
($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", array()) != $this->getAttribute(($context["page"] ?? null), "content", array())))) {
            // line 131
            echo "    ";
            echo $this->getAttribute(($context["page"] ?? null), "summary", array());
            echo "
    <p><a href=\"";
            // line 132
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_BLOG_INJECTOR.TEMPLATES.CONTINUE_READING");
            echo "</a></p>
";
        } elseif (        // line 133
($context["truncate"] ?? null)) {
            // line 134
            echo "    ";
            if (($this->getAttribute(($context["page"] ?? null), "summary", array()) != $this->getAttribute(($context["page"] ?? null), "content", array()))) {
                // line 135
                echo "        ";
                echo \Grav\Common\Utils::truncate($this->getAttribute(($context["page"] ?? null), "content", array()), 550);
                echo "
    ";
            } else {
                // line 137
                echo "        ";
                echo $this->getAttribute(($context["page"] ?? null), "content", array());
                echo "
    ";
            }
            // line 139
            echo "    <p><a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_BLOG_INJECTOR.TEMPLATES.CONTINUE_READING");
            echo "</a></p>
";
        } else {
            // line 141
            echo "    ";
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "
    ";
            // line 142
            $context["show_prev_next"] = true;
        }
        // line 144
        echo "    ";
        $this->displayBlock("prev_next_buttons", $context, $blocks);
        echo "  
</div>
";
    }

    // line 148
    public function block_prev_next_buttons($context, array $blocks = array())
    {
        // line 149
        if ((($context["show_prev_next"] ?? null) || ((array_key_exists("force_hide_prev_next", $context)) ? (_twig_default_filter(($context["force_hide_prev_next"] ?? null), false)) : (false)))) {
            // line 150
            echo "<p class=\"prev-next\">
    ";
            // line 151
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", array())) {
                // line 152
                echo "    <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", array()), "url", array());
                echo "\"><i class=\"fa fa-chevron-left\"></i> ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_BLOG_INJECTOR.TEMPLATES.NEXT_POST");
                echo "</a>
    ";
            }
            // line 154
            echo "
    ";
            // line 155
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", array())) {
                // line 156
                echo "    <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", array()), "url", array());
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_BLOG_INJECTOR.TEMPLATES.PREVIOUS_POST");
                echo " <i class=\"fa fa-chevron-right\"></i></a>
    ";
            }
            // line 158
            echo "</p>
";
        }
    }

    // line 162
    public function block_sidebar($context, array $blocks = array())
    {
        echo " 
";
        // line 163
        $context["title_tag"] = ((array_key_exists("title_tag", $context)) ? (_twig_default_filter(($context["title_tag"] ?? null), "h4")) : ("h4"));
        // line 164
        echo "
";
        // line 165
        $this->displayBlock("simple_search", $context, $blocks);
        echo "   
";
        // line 166
        $this->displayBlock("sidebar_taxonomy", $context, $blocks);
        echo "   
";
        // line 167
        $this->displayBlock("sidebar_topictags", $context, $blocks);
        echo "   
";
        // line 168
        $this->displayBlock("related_pages", $context, $blocks);
        echo "   
";
        // line 169
        $this->displayBlock("random_page", $context, $blocks);
        echo "   
";
        // line 170
        $this->displayBlock("archives", $context, $blocks);
        echo "   
";
        // line 171
        $this->displayBlock("feed", $context, $blocks);
        echo "
";
    }

    // line 174
    public function block_simple_search($context, array $blocks = array())
    {
        // line 175
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 176
            echo "<div class=\"sidebar-content\">
    <";
            // line 177
            echo ($context["title_tag"] ?? null);
            echo ">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_BLOG_INJECTOR.TEMPLATES.SEARCH_TITLE");
            echo "</";
            echo ($context["title_tag"] ?? null);
            echo ">
    ";
            // line 178
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "blog/pure/blog_theme.html.twig", 178)->display($context);
            // line 179
            echo "</div>
";
        }
    }

    // line 183
    public function block_sidebar_taxonomy($context, array $blocks = array())
    {
        // line 184
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "taxonomylist", array()), "enabled", array())) {
            // line 185
            echo "<div class=\"sidebar-content\">
    <";
            // line 186
            echo ($context["title_tag"] ?? null);
            echo ">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_BLOG_INJECTOR.TEMPLATES.POPULAR_TAGS");
            echo "</";
            echo ($context["title_tag"] ?? null);
            echo ">
    
    ";
            // line 188
            $context["taxonomy"] = "tag";
            // line 189
            echo "    ";
            $context["taxlist"] = $this->getAttribute(($context["taxonomylist"] ?? null), "get", array(), "method");
            // line 190
            echo "    ";
            if (($context["taxlist"] ?? null)) {
                // line 191
                echo "    <span class=\"tags\">
        ";
                // line 192
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxlist"] ?? null), ($context["taxonomy"] ?? null), array(), "array"));
                foreach ($context['_seq'] as $context["tax"] => $context["value"]) {
                    // line 193
                    echo "            ";
                    $context["active"] = ((($this->getAttribute(($context["uri"] ?? null), "param", array(0 => ($context["taxonomy"] ?? null)), "method") == $context["tax"])) ? (" active") : (""));
                    // line 194
                    echo "            <a class=\"btn btn-primary tags-cloud";
                    echo ($context["active"] ?? null);
                    echo "\" href=\"";
                    echo ($context["blog_base_url"] ?? null);
                    echo "/";
                    echo ($context["taxonomy"] ?? null);
                    echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
                    echo twig_escape_filter($this->env, $context["tax"], "url");
                    echo "\">";
                    echo $context["tax"];
                    echo "</a>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['tax'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 196
                echo "    </span>
    ";
            }
            // line 198
            echo "</div>
";
        }
    }

    // line 202
    public function block_sidebar_topictags($context, array $blocks = array())
    {
        // line 203
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "topicmenu", array()), "enabled", array())) {
            // line 204
            echo "<div class=\"sidebar-content\">
    <";
            // line 205
            echo ($context["title_tag"] ?? null);
            echo ">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_BLOG_INJECTOR.TEMPLATES.TOPIC_TAGS");
            echo "</";
            echo ($context["title_tag"] ?? null);
            echo ">
    
    ";
            // line 207
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["topics_tags"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["taxlist"]) {
                // line 208
                echo "    <span class=\"tags\">
        ";
                // line 209
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["taxlist"]);
                foreach ($context['_seq'] as $context["count"] => $context["value"]) {
                    // line 210
                    echo "            <a class=\"btn btn-primary tags-cloud\" href=\"";
                    echo ($context["blog_base_url"] ?? null);
                    echo "/tag:";
                    echo $context["value"];
                    echo "\">
                ";
                    // line 211
                    echo $context["value"];
                    echo "
            </a>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['count'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 214
                echo "    </span>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxlist'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 216
            echo "</div>
";
        }
    }

    // line 220
    public function block_related_pages($context, array $blocks = array())
    {
        // line 221
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "relatedpages", array()), "enabled", array()) && (twig_length_filter($this->env, ($context["related_pages"] ?? null)) > 0))) {
            // line 222
            echo "    <";
            echo ($context["title_tag"] ?? null);
            echo ">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_BLOG_INJECTOR.TEMPLATES.RELATED_POSTS");
            echo "</";
            echo ($context["title_tag"] ?? null);
            echo ">
    ";
            // line 223
            $this->loadTemplate("partials/relatedpages.html.twig", "blog/pure/blog_theme.html.twig", 223)->display($context);
        }
    }

    // line 227
    public function block_random_page($context, array $blocks = array())
    {
        // line 228
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "random", array()), "enabled", array())) {
            // line 229
            echo "<div class=\"sidebar-content\">
    <";
            // line 230
            echo ($context["title_tag"] ?? null);
            echo ">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_BLOG_INJECTOR.TEMPLATES.RANDOM_ARTICLE");
            echo "</";
            echo ($context["title_tag"] ?? null);
            echo ">
    <a class=\"button\" href=\"";
            // line 231
            echo ($context["base_url_relative"] ?? null);
            echo "/random\"><i class=\"fa fa-retweet\"></i> ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_BLOG_INJECTOR.TEMPLATES.FEEL_LUCKY");
            echo "</a>
</div>
";
        }
    }

    // line 236
    public function block_archives($context, array $blocks = array())
    {
        // line 237
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "archives", array()), "enabled", array())) {
            // line 238
            echo "<div class=\"sidebar-content\">
    <";
            // line 239
            echo ($context["title_tag"] ?? null);
            echo ">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_BLOG_INJECTOR.TEMPLATES.ARCHIVES");
            echo "</";
            echo ($context["title_tag"] ?? null);
            echo ">
\t";
            // line 240
            $this->loadTemplate("partials/archives.html.twig", "blog/pure/blog_theme.html.twig", 240)->display(array_merge($context, array("base_url" => ($context["blog_base_url"] ?? null))));
            // line 241
            echo "</div>
";
        }
    }

    // line 245
    public function block_feed($context, array $blocks = array())
    {
        // line 246
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "feed", array()), "enabled", array())) {
            // line 247
            echo "<div class=\"sidebar-content\">
    <";
            // line 248
            echo ($context["title_tag"] ?? null);
            echo ">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_BLOG_INJECTOR.TEMPLATES.SYNDICATE");
            echo "</";
            echo ($context["title_tag"] ?? null);
            echo ">
    <div class=\"btn-group\">
        <a href=\"";
            // line 250
            echo ($context["blog_feed_url"] ?? null);
            echo ".atom\"><i class=\"fa fa-rss-square\"></i> ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_BLOG_INJECTOR.TEMPLATES.ATOM");
            echo "</a>
        <a href=\"";
            // line 251
            echo ($context["blog_feed_url"] ?? null);
            echo ".rss\"><i class=\"fa fa-rss-square\"></i> ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_BLOG_INJECTOR.TEMPLATES.RSS");
            echo "</a>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "blog/pure/blog_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  875 => 251,  869 => 250,  860 => 248,  857 => 247,  855 => 246,  852 => 245,  846 => 241,  844 => 240,  836 => 239,  833 => 238,  831 => 237,  828 => 236,  818 => 231,  810 => 230,  807 => 229,  805 => 228,  802 => 227,  797 => 223,  788 => 222,  786 => 221,  783 => 220,  777 => 216,  770 => 214,  761 => 211,  754 => 210,  750 => 209,  747 => 208,  743 => 207,  734 => 205,  731 => 204,  729 => 203,  726 => 202,  720 => 198,  716 => 196,  699 => 194,  696 => 193,  692 => 192,  689 => 191,  686 => 190,  683 => 189,  681 => 188,  672 => 186,  669 => 185,  667 => 184,  664 => 183,  658 => 179,  656 => 178,  648 => 177,  645 => 176,  643 => 175,  640 => 174,  634 => 171,  630 => 170,  626 => 169,  622 => 168,  618 => 167,  614 => 166,  610 => 165,  607 => 164,  605 => 163,  600 => 162,  594 => 158,  586 => 156,  584 => 155,  581 => 154,  573 => 152,  571 => 151,  568 => 150,  566 => 149,  563 => 148,  555 => 144,  552 => 142,  547 => 141,  539 => 139,  533 => 137,  527 => 135,  524 => 134,  522 => 133,  516 => 132,  511 => 131,  509 => 130,  506 => 129,  503 => 128,  501 => 127,  496 => 126,  494 => 125,  491 => 124,  488 => 123,  480 => 119,  477 => 118,  474 => 117,  471 => 116,  468 => 115,  465 => 114,  463 => 113,  458 => 112,  451 => 108,  448 => 107,  445 => 106,  438 => 102,  434 => 101,  431 => 100,  428 => 99,  422 => 95,  408 => 93,  404 => 92,  401 => 91,  399 => 90,  396 => 89,  382 => 85,  377 => 83,  370 => 82,  364 => 80,  362 => 79,  357 => 78,  355 => 77,  353 => 76,  348 => 75,  341 => 71,  337 => 70,  333 => 69,  329 => 68,  326 => 67,  323 => 66,  316 => 62,  312 => 61,  309 => 60,  307 => 59,  305 => 58,  303 => 57,  301 => 56,  297 => 55,  294 => 54,  286 => 49,  280 => 46,  274 => 43,  272 => 42,  270 => 41,  268 => 40,  265 => 39,  260 => 36,  244 => 35,  242 => 34,  240 => 33,  238 => 32,  219 => 31,  216 => 30,  208 => 25,  202 => 22,  198 => 21,  194 => 19,  191 => 18,  185 => 15,  182 => 14,  177 => 11,  174 => 10,  172 => 9,  169 => 8,  164 => 4,  162 => 3,  159 => 2,  155 => 245,  152 => 244,  150 => 236,  147 => 235,  145 => 227,  142 => 226,  140 => 220,  137 => 219,  135 => 202,  132 => 201,  130 => 183,  127 => 182,  125 => 174,  122 => 173,  120 => 162,  117 => 161,  115 => 148,  112 => 147,  110 => 123,  107 => 122,  105 => 112,  102 => 111,  100 => 106,  97 => 105,  95 => 99,  92 => 98,  90 => 89,  87 => 88,  85 => 75,  82 => 74,  80 => 66,  77 => 65,  75 => 54,  72 => 53,  70 => 39,  67 => 38,  65 => 30,  62 => 29,  60 => 18,  57 => 17,  55 => 14,  52 => 13,  50 => 8,  47 => 7,  45 => 2,  42 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block breadcrumbs %}
{% if config.plugins.breadcrumbs.enabled %}
{% include 'partials/breadcrumbs.html.twig' %}
{% endif %}
{% endblock %}

{% block pagination %}
{% if config.plugins.pagination.enabled and collection.params.pagination %}
{% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
{% endif %}  
{% endblock %}

{% block blog_content %}
{{ page.content }}
{% endblock %}

{% block blog_posts %}
<div class=\"blog blog-content-list content-wrapper grid pure-g\">
    <div class=\"block pure-u-2-3\">    
    {{ block('posts') }}
    {{ block('pagination') }}
    </div>
    <div class=\"sidebar block size-1-3 pure-u-1-3\">
    {{ block('sidebar') }}
    </div>
</div>
{% endblock %}

{% block posts %}
{% for child in collection %} 
{% set blog = page %}
{% set truncate = true %}
{% set page = child %}
{{ block('post') }}
{% endfor %} 
{% endblock %}

{% block blog_post %}
{% set blog = page.parent %}
{% set truncate = false %}
{% set big_header = true %}
{{ block('breadcrumbs') }}
<div class=\"blog blog-content-item grid pure-g\">
    <div class=\"block pure-u-2-3\">
        {{ block('post') }}  
    </div>
    <div class=\"sidebar block size-1-3 pure-u-1-3\">
        {{ block('sidebar') }}
    </div>
</div>
{% endblock %}

{% block post %}
{{ block('urls') }}
{% set header_image = page.header.header_image|defined(true) %}
{% set header_image_width  = page.header.header_image_width|defined(900) %}
{% set header_image_height = page.header.header_image_height|defined(300) %}
{% set header_image_file = page.header.header_image_file %}
<div class=\"list-item\">
{{ block('post_header') }}
{{ block('post_contents') }}
</div>
{% endblock %}

{% block post_header %}
<div class=\"list-blog-header\">
    {{ block('post_header_date') }} 
    {{ block('post_header_title') }}      
    {{ block('post_header_taxonomy') }}
    {{ block('post_header_image') }} 
</div>
{% endblock %}

{% block post_header_title %}   
{% set title_tag = title_tag|default('h4') %}
{% if page.header.link %}
    <{{ title_tag }}>
        {% if page.header.continue_link is not sameas(false) %}
        <a href=\"{{ page.url }}\"><i class=\"fa fa-angle-double-right\"></i></a>
        {% endif %}
        <a href=\"{{ page.header.link }}\">{{ page.title }}</a>
    </{{ title_tag }}>
{% else %}
    <{{ title_tag }}><a href=\"{{ page.url }}\">{{ page.title }}</a></{{ title_tag }}>
{% endif %}
{% endblock %}

{% block post_header_taxonomy %}
{% if page.taxonomy.tag %}
<span class=\"tags\">
    {% for tag in page.taxonomy.tag %}
    <a href=\"{{ blog.url }}/tag{{ config.system.param_sep }}{{ tag }}\">{{ tag }}</a>
    {% endfor %}
</span>
{% endif %}
{% endblock %}

{% block post_header_date %}
<span class=\"list-blog-date\">
    <span>{{ page.date|date(\"d\") }}</span>
    <em>{{ page.date|date(\"M\") }}</em>
</span>
{% endblock %}

{% block post_header_date_extended %}
<div class=\"list-blog-date-extended\">
    <i class=\"fa fa-calendar\"></i> <span>{{ page.date|date(\"F j, Y, g:i a\") }}</span>
</div>
{% endblock %}

{% block post_header_image %}   
{% if header_image %}
    {% if header_image_file %}
        {% set header_image_media = page.media.images[header_image_file] %}
    {% else %}
        {% set header_image_media = page.media.images|first %}
    {% endif %}
    {{ header_image_media.cropZoom(header_image_width, header_image_height).html }}
{% endif %}
{% endblock %}

{% block post_contents %}
<div class=\"list-blog-padding\">
{% if page.header.continue_link is sameas(false) %}
    {{ page.content }}
    {% if not truncate %}
    {% set show_prev_next = true %}
    {% endif %}
{% elseif truncate and page.summary != page.content %}
    {{ page.summary }}
    <p><a href=\"{{ page.url }}\">{{ \"PLUGIN_BLOG_INJECTOR.TEMPLATES.CONTINUE_READING\"|t }}</a></p>
{% elseif truncate %}
    {% if page.summary != page.content %}
        {{ page.content|truncate(550) }}
    {% else %}
        {{ page.content }}
    {% endif %}
    <p><a href=\"{{ page.url }}\">{{ \"PLUGIN_BLOG_INJECTOR.TEMPLATES.CONTINUE_READING\"|t }}</a></p>
{% else %}
    {{ page.content }}
    {% set show_prev_next = true %}
{% endif %}
    {{ block('prev_next_buttons') }}  
</div>
{% endblock %}

{% block prev_next_buttons %}
{% if show_prev_next or force_hide_prev_next|default(false) %}
<p class=\"prev-next\">
    {% if not page.isFirst %}
    <a class=\"button\" href=\"{{ page.nextSibling.url }}\"><i class=\"fa fa-chevron-left\"></i> {{ \"PLUGIN_BLOG_INJECTOR.TEMPLATES.NEXT_POST\"|t }}</a>
    {% endif %}

    {% if not page.isLast %}
    <a class=\"button\" href=\"{{ page.prevSibling.url }}\">{{ \"PLUGIN_BLOG_INJECTOR.TEMPLATES.PREVIOUS_POST\"|t }} <i class=\"fa fa-chevron-right\"></i></a>
    {% endif %}
</p>
{% endif %}
{% endblock %}

{% block sidebar %} 
{% set title_tag = title_tag|default('h4') %}

{{ block('simple_search') }}   
{{ block('sidebar_taxonomy') }}   
{{ block('sidebar_topictags') }}   
{{ block('related_pages') }}   
{{ block('random_page') }}   
{{ block('archives') }}   
{{ block('feed') }}
{% endblock %}

{% block simple_search %}
{% if config.plugins.simplesearch.enabled %}
<div class=\"sidebar-content\">
    <{{ title_tag }}>{{ \"PLUGIN_BLOG_INJECTOR.TEMPLATES.SEARCH_TITLE\"|t }}</{{ title_tag }}>
    {% include 'partials/simplesearch_searchbox.html.twig' %}
</div>
{% endif %}
{% endblock %}

{% block sidebar_taxonomy %}
{% if config.plugins.taxonomylist.enabled %}
<div class=\"sidebar-content\">
    <{{ title_tag }}>{{ \"PLUGIN_BLOG_INJECTOR.TEMPLATES.POPULAR_TAGS\"|t }}</{{ title_tag }}>
    
    {% set taxonomy = \"tag\" %}
    {% set taxlist = taxonomylist.get() %}
    {% if taxlist %}
    <span class=\"tags\">
        {% for tax,value in taxlist[taxonomy] %}
            {% set active = uri.param(taxonomy) == tax ? ' active' : '' %}
            <a class=\"btn btn-primary tags-cloud{{ active }}\" href=\"{{ blog_base_url }}/{{ taxonomy }}{{ config.system.param_sep }}{{ tax|e('url') }}\">{{ tax }}</a>
        {% endfor %}
    </span>
    {% endif %}
</div>
{% endif %}
{% endblock %}

{% block sidebar_topictags %}
{% if config.plugins.topicmenu.enabled %}
<div class=\"sidebar-content\">
    <{{ title_tag }}>{{ \"PLUGIN_BLOG_INJECTOR.TEMPLATES.TOPIC_TAGS\"|t }}</{{ title_tag }}>
    
    {% for taxlist in topics_tags %}
    <span class=\"tags\">
        {% for count,value in taxlist %}
            <a class=\"btn btn-primary tags-cloud\" href=\"{{ blog_base_url }}/tag:{{ value }}\">
                {{ value }}
            </a>
        {% endfor %}
    </span>
    {% endfor %}
</div>
{% endif %}
{% endblock %}

{% block related_pages %}
{% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}
    <{{ title_tag }}>{{ \"PLUGIN_BLOG_INJECTOR.TEMPLATES.RELATED_POSTS\"|t }}</{{ title_tag }}>
    {% include 'partials/relatedpages.html.twig' %}
{% endif %}
{% endblock %}
    
{% block random_page %}
{% if config.plugins.random.enabled %}
<div class=\"sidebar-content\">
    <{{ title_tag }}>{{ \"PLUGIN_BLOG_INJECTOR.TEMPLATES.RANDOM_ARTICLE\"|t }}</{{ title_tag }}>
    <a class=\"button\" href=\"{{ base_url_relative }}/random\"><i class=\"fa fa-retweet\"></i> {{ \"PLUGIN_BLOG_INJECTOR.TEMPLATES.FEEL_LUCKY\"|t }}</a>
</div>
{% endif %}
{% endblock %}
    
{% block archives %}
{% if config.plugins.archives.enabled %}
<div class=\"sidebar-content\">
    <{{ title_tag }}>{{ \"PLUGIN_BLOG_INJECTOR.TEMPLATES.ARCHIVES\"|t }}</{{ title_tag }}>
\t{% include 'partials/archives.html.twig' with {'base_url':blog_base_url} %}
</div>
{% endif %}
{% endblock %}
    
{% block feed %}
{% if config.plugins.feed.enabled %}
<div class=\"sidebar-content\">
    <{{ title_tag }}>{{ \"PLUGIN_BLOG_INJECTOR.TEMPLATES.SYNDICATE\"|t }}</{{ title_tag }}>
    <div class=\"btn-group\">
        <a href=\"{{ blog_feed_url }}.atom\"><i class=\"fa fa-rss-square\"></i> {{ \"PLUGIN_BLOG_INJECTOR.TEMPLATES.ATOM\"|t }}</a>
        <a href=\"{{ blog_feed_url }}.rss\"><i class=\"fa fa-rss-square\"></i> {{ \"PLUGIN_BLOG_INJECTOR.TEMPLATES.RSS\"|t }}</a>
    </div>
</div>
{% endif %}
{% endblock %}", "blog/pure/blog_theme.html.twig", "/Users/brookehopkins/Documents/Development/westem-site/user/plugins/blog-injector/templates/blog/pure/blog_theme.html.twig");
    }
}
