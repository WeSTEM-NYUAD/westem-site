<?php

/* pages.html.twig */
class __TwigTemplate_c0c7f02a7b48c4966d72ed348e7b67c533826111fcc587f29f51ddb3aefd0d39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "pages.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'titlebar' => array($this, 'block_titlebar'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        if ($this->getAttribute(($context["admin"] ?? null), "route", array())) {
            // line 8
            $context["context"] = $this->getAttribute(($context["admin"] ?? null), "page", array(0 => true), "method");
        }
        // line 11
        if ($this->getAttribute(($context["uri"] ?? null), "param", array(0 => "new"), "method")) {
            // line 12
            $context["mode"] = "new";
        } elseif (        // line 13
($context["context"] ?? null)) {
            // line 14
            $context["mode"] = "edit";
            // line 15
            if ($this->getAttribute(($context["context"] ?? null), "exists", array())) {
                // line 16
                $context["page_url"] = ((($context["base_url"] ?? null) . "/pages") . (($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array()), "routes", array()), "default", array())) : ($this->getAttribute(($context["context"] ?? null), "rawRoute", array()))));
                // line 17
                $context["exists"] = true;
                // line 18
                $context["title"] = (((($this->getAttribute(($context["context"] ?? null), "exists", array())) ? ($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EDIT")) : ($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CREATE"))) . " ") . (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array()), "title", array())) ? ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array()), "title", array())) : ($this->getAttribute(($context["context"] ?? null), "title", array()))));
            } else {
                // line 20
                $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE");
            }
        } else {
            // line 23
            $context["mode"] = "list";
            // line 24
            $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGES");
        }
        // line 27
        $context["modular"] = (($this->getAttribute(($context["context"] ?? null), "modular", array())) ? ("modular_") : (""));
        // line 28
        $context["warn"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "warnings", array()), "delete_page", array());
        // line 29
        $context["admin_lang"] = (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", array()), "admin_lang", array())) ? ($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", array()), "admin_lang", array())) : ("en"));
        // line 30
        $context["page_lang"] = $this->getAttribute(($context["context"] ?? null), "language", array());
        // line 31
        $context["type"] = "page";
        // line 44
        $context["preview_html"] = ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url_relative_frontend"] ?? null), "/") . (($this->getAttribute(($context["context"] ?? null), "home", array())) ? ("") : ($this->getAttribute(($context["context"] ?? null), "route", array()))))) ? (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url_relative_frontend"] ?? null), "/") . (($this->getAttribute(($context["context"] ?? null), "home", array())) ? ("") : ($this->getAttribute(($context["context"] ?? null), "route", array()))))) : ("/"));
        // line 45
        $context["preview_target"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "frontend_pages_target", array());
        // line 46
        $context["preview_link"] = (($this->getAttribute(($context["context"] ?? null), "routable", array())) ? ((((((("<a class=\"button\" target=\"" . ($context["preview_target"] ?? null)) . "\" href=\"") . ($context["preview_html"] ?? null)) . "\" title=\"") . $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIEW")) . "\"> <i class=\"fa fa-fw fa-eye\" style=\"font-size:18px;margin-right:0;\"></i></a>")) : (""));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        if ((($context["mode"] ?? null) == "edit")) {
            // line 35
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => (($context["theme_url"] ?? null) . "/css/codemirror/codemirror.css")), "method");
            // line 36
            echo "    ";
        }
        // line 37
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 116
    public function block_titlebar($context, array $blocks = array())
    {
        // line 117
        echo "    <div class=\"button-bar\">
        ";
        // line 118
        if ((($context["mode"] ?? null) == "list")) {
            // line 119
            echo "            <a class=\"button\" href=\"";
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>

            ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "add_modals", array()));
            foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
                // line 122
                echo "                ";
                if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "show_in", array()), "bar") == "bar")) {
                    // line 123
                    echo "                    <a class=\"button ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["add_modal"], "link_classes", array()), "html", null, true);
                    echo "\" href=\"#modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" data-remodal-target=\"modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"><i class=\"fa fa-plus\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["add_modal"], "label", array()), "html", null, true);
                    echo "</a>
                ";
                }
                // line 125
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "
            <div class=\"button-group\">
                <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                    <i class=\"fa fa-plus\"></i> ";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
            echo "
                </button>
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
            echo "</a></li>
                    <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FOLDER"), "html", null, true);
            echo "</a></li>
                    ";
            // line 137
            if ( !twig_test_empty($this->getAttribute(($context["admin"] ?? null), "modularTypes", array()))) {
                // line 138
                echo "                        <li><a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_MODULAR"), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 140
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "add_modals", array()));
            foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
                // line 141
                echo "                        ";
                if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "show_in", array()), "bar") == "dropdown")) {
                    // line 142
                    echo "                            <li><a class=\"button ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["add_modal"], "link_classes", array()), "html", null, true);
                    echo "\" href=\"#modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" data-remodal-target=\"modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["add_modal"], "label", array()), "html", null, true);
                    echo "</a></li>
                        ";
                }
                // line 144
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "                </ul>
            </div>

            ";
            // line 148
            if ($this->getAttribute(($context["admin"] ?? null), "multilang", array())) {
                // line 149
                echo "                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\">
                        <i class=\"fa fa-flag-o\"></i>
                        ";
                // line 152
                $context["langName"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "siteLanguages", array()), ($context["admin_lang"] ?? null), array(), "array");
                // line 153
                echo "                        ";
                echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, ($context["langName"] ?? null), 0, 1)) . twig_slice($this->env, ($context["langName"] ?? null), 1, null)), "html", null, true);
                echo "
                    </button>
                    ";
                // line 155
                if ((twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "languages_enabled", array())) > 1)) {
                    // line 156
                    echo "                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu language-switcher\">
                        ";
                    // line 160
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? null), "languages_enabled", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["langCode"]) {
                        // line 161
                        echo "                            ";
                        $context["langName"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "siteLanguages", array()), $context["langCode"], array(), "array");
                        // line 162
                        echo "                            ";
                        if (($context["langCode"] != ($context["admin_lang"] ?? null))) {
                            // line 163
                            echo "                                <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => ((((((($context["base_url_relative"] ?? null) . $this->getAttribute(($context["theme"] ?? null), "slug", array())) . "/pages/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "switchlanguage/lang") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . $context["langCode"]), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, ($context["langName"] ?? null), 0, 1)) . twig_slice($this->env, ($context["langName"] ?? null), 1, null)), "html", null, true);
                            echo "</a></li>
                            ";
                        }
                        // line 165
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langCode'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 166
                    echo "                    </ul>
                    ";
                }
                // line 168
                echo "                </div>
            ";
            }
            // line 170
            echo "
        ";
        } elseif ((        // line 171
($context["mode"] ?? null) == "edit")) {
            // line 172
            echo "
            ";
            // line 173
            echo ($context["preview_link"] ?? null);
            echo "

            <a class=\"button\" href=\"";
            // line 175
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/pages\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i></a>

            ";
            // line 177
            $context["siblings"] = $this->getAttribute($this->getAttribute(($context["context"] ?? null), "parent", array(), "method"), "children", array(), "method");
            // line 178
            echo "
            ";
            // line 179
            if ( !$this->getAttribute(($context["siblings"] ?? null), "isFirst", array(0 => $this->getAttribute(($context["context"] ?? null), "path", array())), "method")) {
                // line 180
                echo "                ";
                $context["sib"] = $this->getAttribute(($context["siblings"] ?? null), "nextSibling", array(0 => $this->getAttribute(($context["context"] ?? null), "path", array())), "method");
                // line 181
                echo "                ";
                $context["sib_url"] = ((($context["base_url"] ?? null) . "/pages") . (($this->getAttribute($this->getAttribute($this->getAttribute(($context["sib"] ?? null), "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sib"] ?? null), "header", array()), "routes", array()), "default", array())) : ($this->getAttribute(($context["sib"] ?? null), "rawRoute", array()))));
                // line 182
                echo "                <a class=\"button hidden-mobile\" href=\"";
                echo twig_escape_filter($this->env, ($context["sib_url"] ?? null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIOUS"), "html", null, true);
                echo "\"><i class=\"fa fa-chevron-left\"></i></a>
            ";
            }
            // line 184
            echo "
            ";
            // line 185
            if ( !$this->getAttribute(($context["siblings"] ?? null), "isLast", array(0 => $this->getAttribute(($context["context"] ?? null), "path", array())), "method")) {
                // line 186
                echo "                ";
                $context["sib"] = $this->getAttribute(($context["siblings"] ?? null), "prevSibling", array(0 => $this->getAttribute(($context["context"] ?? null), "path", array())), "method");
                // line 187
                echo "                ";
                $context["sib_url"] = ((($context["base_url"] ?? null) . "/pages") . (($this->getAttribute($this->getAttribute($this->getAttribute(($context["sib"] ?? null), "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sib"] ?? null), "header", array()), "routes", array()), "default", array())) : ($this->getAttribute(($context["sib"] ?? null), "rawRoute", array()))));
                // line 188
                echo "                <a class=\"button hidden-mobile\" href=\"";
                echo twig_escape_filter($this->env, ($context["sib_url"] ?? null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NEXT"), "html", null, true);
                echo "\"><i class=\"fa fa-chevron-right\"></i></a>
            ";
            }
            // line 190
            echo "
            ";
            // line 191
            if (($context["exists"] ?? null)) {
                // line 192
                echo "                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                        <i class=\"fa fa-plus\"></i> ";
                // line 194
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
                echo "
                    </button>
                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu\">
                        <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">";
                // line 200
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
                echo "</a></li>
                        <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">";
                // line 201
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FOLDER"), "html", null, true);
                echo "</a></li>
                        ";
                // line 202
                if ( !twig_test_empty($this->getAttribute(($context["admin"] ?? null), "modularTypes", array()))) {
                    // line 203
                    echo "                            <li><a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_MODULAR"), "html", null, true);
                    echo "</a></li>
                        ";
                }
                // line 205
                echo "                    </ul>
                </div>

                <a class=\"button disable-after-click\" href=\"";
                // line 208
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["page_url"] ?? null) . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "copy"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                echo "\" class=\"page-copy\" ><i class=\"fa fa-copy\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.COPY"), "html", null, true);
                echo "</a>
                <a class=\"button\" href=\"#\" data-remodal-target=\"move\"><i class=\"fa fa-arrows\"></i> ";
                // line 209
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MOVE"), "html", null, true);
                echo "</a>
                ";
                // line 210
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin-pro", array(), "array"), "enabled", array())) {
                    // line 211
                    echo "                    <a class=\"button\" href=\"#\" data-remodal-target=\"revisions\"><i class=\"fa fa-history\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_PRO.REVISIONS"), "html", null, true);
                    echo "</a>
                ";
                }
                // line 213
                echo "                ";
                if (($context["warn"] ?? null)) {
                    // line 214
                    echo "                    <a class=\"button\" href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["page_url"] ?? null) . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-close\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DELETE"), "html", null, true);
                    echo "</a>
                ";
                } else {
                    // line 216
                    echo "                    <a class=\"button disable-after-click\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => ((($this->getAttribute(($context["uri"] ?? null), "route", array(0 => true), "method") . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                ";
                }
                // line 218
                echo "            ";
            }
            // line 219
            echo "
            <div class=\"button-group\">
                <button class=\"button\" name=\"task\" value=\"save\" form=\"blueprints\" type=\"submit\"><i class=\"fa fa-check\"></i> ";
            // line 221
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
            echo "</button>
                ";
            // line 222
            if ((($context["exists"] ?? null) && $this->getAttribute(($context["admin"] ?? null), "multilang", array()))) {
                // line 223
                echo "                    ";
                if ($this->getAttribute(($context["context"] ?? null), "untranslatedLanguages", array())) {
                    // line 224
                    echo "                        <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu lang-switcher\">
                            ";
                    // line 228
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "untranslatedLanguages", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["langCode"]) {
                        // line 229
                        echo "                                ";
                        $context["langName"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "siteLanguages", array()), $context["langCode"], array(), "array");
                        // line 230
                        echo "                                ";
                        if (($context["langCode"] != ($context["page_lang"] ?? null))) {
                            // line 231
                            echo "                                    <li><button class=\"button task\" name=\"task\" value=\"saveas\" lang=\"";
                            echo twig_escape_filter($this->env, $context["langCode"], "html", null, true);
                            echo "\" form=\"blueprints\" type=\"submit\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_AS"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, ($context["langName"] ?? null), 0, 1)) . twig_slice($this->env, ($context["langName"] ?? null), 1, null)), "html", null, true);
                            echo "</button>
                                ";
                        }
                        // line 233
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langCode'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 234
                    echo "                        </ul>
                    ";
                }
                // line 236
                echo "                ";
            }
            // line 237
            echo "            </div>


        ";
        }
        // line 241
        echo "    </div>
    ";
        // line 242
        if ((($context["mode"] ?? null) == "new")) {
            // line 243
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
            echo "</h1>
    ";
        } elseif ((        // line 244
($context["mode"] ?? null) == "edit")) {
            // line 245
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i>
            ";
            // line 246
            echo twig_escape_filter($this->env, $this->getAttribute(($context["context"] ?? null), "menu", array()), "html", null, true);
            echo "
        </h1>
    ";
        } else {
            // line 249
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MANAGE_PAGES"), "html", null, true);
            echo "</h1>
    ";
        }
    }

    // line 253
    public function block_content($context, array $blocks = array())
    {
        // line 254
        echo "    <div class=\"clear admin-pages\">
    ";
        // line 255
        if ((($context["mode"] ?? null) == "new")) {
            // line 256
            echo "        ";
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 256)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => "pages/page"), "method"), "data" => ($context["context"] ?? null))));
            // line 257
            echo "    ";
        } elseif ((($context["mode"] ?? null) == "edit")) {
            // line 258
            echo "        <div class=\"admin-form-wrapper\">
            <div id=\"admin-topbar\">

                ";
            // line 261
            if (($this->getAttribute(($context["admin"] ?? null), "multilang", array()) && ($context["page_lang"] ?? null))) {
                // line 262
                echo "                    <div id=\"admin-lang-toggle\" class=\"button-group\">
                        <button type=\"button\" class=\"button disabled\">
                            ";
                // line 264
                if (($context["exists"] ?? null)) {
                    // line 265
                    echo "                                ";
                    echo twig_escape_filter($this->env, ($context["page_lang"] ?? null), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 267
                    echo "                                ";
                    echo twig_escape_filter($this->env, ($context["admin_lang"] ?? null), "html", null, true);
                    echo "
                            ";
                }
                // line 269
                echo "                        </button>
                        ";
                // line 270
                if ((($context["exists"] ?? null) && (twig_length_filter($this->env, $this->getAttribute(($context["context"] ?? null), "translatedLanguages", array())) > 1))) {
                    // line 271
                    echo "                            <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-caret-down\"></i>
                            </button>
                            <ul class=\"dropdown-menu language-switcher\">
                                ";
                    // line 275
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "translatedLanguages", array()));
                    foreach ($context['_seq'] as $context["language"] => $context["route"]) {
                        // line 276
                        echo "                                    ";
                        if (($context["language"] != ($context["page_lang"] ?? null))) {
                            // line 277
                            echo "                                    <li><button class=\"task\" name=\"task\" value=\"switchlanguage\" lang=\"";
                            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
                            echo "\" redirect=\"";
                            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["context"] ?? null), "rawRoute", array()), "/"), "html", null, true);
                            echo "\" form=\"blueprints\">";
                            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
                            echo "</button>
                                    ";
                        }
                        // line 279
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['language'], $context['route'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 280
                    echo "                            </ul>
                        ";
                }
                // line 282
                echo "                    </div>
                ";
            }
            // line 284
            echo "
                ";
            // line 285
            if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "blueprints", array()), "fields", array())) {
                // line 286
                echo "                ";
                $context["normalText"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NORMAL");
                // line 287
                echo "                ";
                $context["expertText"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPERT");
                // line 288
                echo "                ";
                $context["maxLen"] = max(array(0 => twig_length_filter($this->env, ($context["normalText"] ?? null)), 1 => twig_length_filter($this->env, ($context["expertText"] ?? null))));
                // line 289
                echo "                ";
                $context["normalText"] = $this->getAttribute($this, "spanToggle", array(0 => ($context["normalText"] ?? null), 1 => ($context["maxLen"] ?? null)), "method");
                // line 290
                echo "                ";
                $context["expertText"] = $this->getAttribute($this, "spanToggle", array(0 => ($context["expertText"] ?? null), 1 => ($context["maxLen"] ?? null)), "method");
                // line 291
                echo "                <form id=\"admin-mode-toggle\">
                    <div class=\"switch-toggle switch-grav\">
                        <input type=\"radio\" value=\"normal\" data-leave-url=\"";
                // line 293
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "/pages/";
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["admin"] ?? null), "route", array()), "/"), "html", null, true);
                echo "/mode";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array()), "html", null, true);
                echo "normal\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" ";
                if (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", array()), "expert", array()) == "0")) {
                    echo " checked=\"checked\"";
                }
                echo ">
                        <label for=\"normal\">";
                // line 294
                echo ($context["normalText"] ?? null);
                echo "</label>
                        <input type=\"radio\" value=\"expert\" data-leave-url=\"";
                // line 295
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "/pages/";
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["admin"] ?? null), "route", array()), "/"), "html", null, true);
                echo "/mode";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array()), "html", null, true);
                echo "expert\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" ";
                if (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", array()), "expert", array()) == "1")) {
                    echo " checked=\"checked\"";
                }
                echo ">
                        <label for=\"expert\">";
                // line 296
                echo ($context["expertText"] ?? null);
                echo "</label>
                        <a></a>
                    </div>
                </form>
                ";
            }
            // line 301
            echo "
            </div>

            ";
            // line 304
            if (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "blueprints", array()), "fields", array()) && ($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", array()), "expert", array()) == "0"))) {
                // line 305
                echo "                ";
                $this->loadTemplate("partials/blueprints.html.twig", "pages.html.twig", 305)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["context"] ?? null), "blueprints", array()), "data" => ($context["context"] ?? null))));
                // line 306
                echo "            ";
            } else {
                // line 307
                echo "                ";
                $this->loadTemplate("partials/blueprints-raw.html.twig", "pages.html.twig", 307)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => (("admin/pages/" . ($context["modular"] ?? null)) . "raw")), "method"), "data" => ($context["context"] ?? null))));
                // line 308
                echo "            ";
            }
            // line 309
            echo "        </div>
    ";
        } else {
            // line 311
            echo "        <form id=\"page-filtering\">
            <div class=\"page-filters\">
                <input type=\"text\" data-filter-labels=\"";
            // line 313
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array(0 => array("id" => "mode", "name" => $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE_MODES")), 1 => array("id" => "type", "name" => $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE_TYPES")), 2 => array("id" => "access", "name" => $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ACCESS_LEVELS")))), "html_attr");
            echo "\" data-filter-types=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge($this->getAttribute(($context["admin"] ?? null), "types", array()), $this->getAttribute(($context["admin"] ?? null), "modularTypes", array()))), "html_attr");
            echo "\" data-filter-access-levels=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["admin"] ?? null), "accessLevels", array())), "html_attr");
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FILTERS"), "html", null, true);
            echo "\" class=\"page-filter\" name=\"page-filter\" />
            </div>
            <div class=\"page-search\">
                <input type=\"text\" placeholder=\"";
            // line 316
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SEARCH_PAGES"), "html", null, true);
            echo "\" name=\"page-search\" />
            </div>
            <div class=\"page-shortcuts\">
                <span class=\"button button-x-small\" data-page-toggleall=\"expand\"><i class=\"fa fa-fw fa-plus-circle\"></i> ";
            // line 319
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPAND_ALL"), "html", null, true);
            echo "</span>
                <span class=\"button button-x-small\" data-page-toggleall=\"collapse\"><i class=\"fa fa-fw fa-minus-circle\"></i> ";
            // line 320
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.COLLAPSE_ALL"), "html", null, true);
            echo "</span>
            </div>
        </form>
        <div class=\"pages-list\">
            <ul class=\"depth-0\">
                ";
            // line 325
            echo $this->getAttribute($this, "loop", array(0 => ($context["pages"] ?? null), 1 => 0, 2 => $context), "method");
            echo "
            </ul>
            ";
            // line 327
            $this->loadTemplate("partials/page-legend.html.twig", "pages.html.twig", 327)->display($context);
            // line 328
            echo "        </div>
    ";
        }
        // line 330
        echo "    </div>

    ";
        // line 332
        if (($context["context"] ?? null)) {
            // line 333
            echo "        ";
            $context["obj_data"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->cloneFunc(($context["context"] ?? null));
            // line 334
            echo "
        ";
            // line 335
            if ((($context["mode"] ?? null) == "edit")) {
                // line 336
                echo "            ";
                $this->getAttribute(($context["obj_data"] ?? null), "folder", array(0 => ""), "method");
                // line 337
                echo "        ";
            }
            // line 338
            echo "    ";
        }
        // line 339
        echo "
    ";
        // line 340
        if (((($context["mode"] ?? null) == "list") || (($context["mode"] ?? null) == "edit"))) {
            // line 341
            echo "    <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 342
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 342)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => "admin/pages/new"), "method"), "data" => ($context["obj_data"] ?? null))));
            // line 343
            echo "    </div>

    <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 346
            $this->loadTemplate("partials/blueprints-new-folder.html.twig", "pages.html.twig", 346)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => "admin/pages/new_folder"), "method"), "data" => ($context["obj_data"] ?? null))));
            // line 347
            echo "    </div>

    <div class=\"remodal\" data-remodal-id=\"modular\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 350
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 350)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => "admin/pages/modular_new"), "method"), "data" => ($context["obj_data"] ?? null))));
            // line 351
            echo "    </div>

    ";
            // line 353
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "add_modals", array()));
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
            foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
                // line 354
                echo "        <div class=\"remodal ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "modal_classes", array()), ""), "html", null, true);
                echo "\" data-remodal-id=\"modal-add_modal-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" data-remodal-options=\"hashTracking: false\">
            ";
                // line 355
                $this->loadTemplate($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "template", array()), "partials/blueprints-new.html.twig"), "pages.html.twig", 355)->display(array_merge($context, twig_array_merge(array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => $this->getAttribute($context["add_modal"], "blueprint", array())), "method"), "data" => ($context["context"] ?? null)), $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "with", array()), array()))));
                // line 356
                echo "        </div>
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 358
            echo "    ";
        }
        // line 359
        echo "

    ";
        // line 361
        if ((($context["mode"] ?? null) == "edit")) {
            // line 362
            echo "    <div class=\"remodal\" data-remodal-id=\"move\" data-remodal-options=\"hashTracking: false\">

        ";
            // line 364
            $this->loadTemplate("partials/page-move.html.twig", "pages.html.twig", 364)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => "admin/pages/move"), "method"), "data" => ($context["context"] ?? null))));
            // line 365
            echo "    </div>
    <div class=\"remodal\" data-remodal-id=\"revisions\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 367
            $this->loadTemplate(array(0 => "partials/page-revisions.html.twig", 1 => "empty.html.twig"), "pages.html.twig", 367)->display(array_merge($context, array("data" => ($context["context"] ?? null))));
            // line 368
            echo "    </div>
    ";
        }
        // line 370
        echo "
    ";
        // line 371
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "pages.html.twig", 371)->display($context);
        // line 372
        echo "
    <div class=\"remodal\" data-remodal-id=\"delete\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE"), "html", null, true);
        echo "</h1>
            <p class=\"bigger\">
                ";
        // line 377
        if (($context["context"] ?? null)) {
            // line 378
            echo "                    <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["context"] ?? null), "title", array()), "html", null, true);
            echo "</strong>
                ";
        }
        // line 380
        echo "            </p>
            <p class=\"bigger\">
              ";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_DESC"), "html", null, true);
        echo "
            </p>
            <br>
            <div class=\"button-bar\">
            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
            <a class=\"button disable-after-click\" data-delete-action href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</a>
            </div>
        </form>
    </div>

    ";
        // line 392
        try {
            $this->loadTemplate("partials/admin-pro-pages-addons.html.twig", "pages.html.twig", 392)->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 393
        echo "
";
    }

    // line 396
    public function block_bottom($context, array $blocks = array())
    {
        // line 397
        echo "<script>
    \$('.admin-pages .form-tabs .tabs-nav').css('margin-right', (\$('#admin-topbar').width() + 20) + 'px');
</script>
";
    }

    // line 3
    public function getspanToggle($__input__ = null, $__length__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "input" => $__input__,
            "length" => $__length__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    ";
            echo (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2)) . ($context["input"] ?? null)) . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2)));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 48
    public function getloop($__page__ = null, $__depth__ = null, $__twig_vars__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "depth" => $__depth__,
            "twig_vars" => $__twig_vars__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 49
            echo "    ";
            $context["separator"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["twig_vars"] ?? null), "config", array(), "array"), "system", array()), "param_sep", array());
            // line 50
            echo "    ";
            $context["base_url"] = $this->getAttribute(($context["twig_vars"] ?? null), "base_url_relative", array(), "array");
            // line 51
            echo "    ";
            $context["base_url_simple"] = $this->getAttribute(($context["twig_vars"] ?? null), "base_url_simple", array(), "array");
            // line 52
            echo "    ";
            $context["admin_route"] = $this->getAttribute(($context["twig_vars"] ?? null), "admin_route", array(), "array");
            // line 53
            echo "    ";
            $context["admin_lang"] = $this->getAttribute(($context["twig_vars"] ?? null), "admin_lang", array(), "array");
            // line 54
            echo "    ";
            $context["warn"] = $this->getAttribute(($context["twig_vars"] ?? null), "warn", array(), "array");
            // line 55
            echo "    ";
            $context["uri"] = $this->getAttribute(($context["twig_vars"] ?? null), "uri", array(), "array");
            // line 56
            echo "
    ";
            // line 57
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "admin", array()), "children_display_order", array()) == "collection") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "content", array()), "order", array()), "by", array()))) {
                // line 58
                echo "        ";
                $context["pcol"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", array(), "method"), "order", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "content", array()), "order", array()), "by", array()), 1 => (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "content", array(), "any", false, true), "order", array(), "any", false, true), "dir", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "content", array(), "any", false, true), "order", array(), "any", false, true), "dir", array()), "asc")) : ("asc"))), "method");
                // line 59
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->dump($this->env, $context, ($context["pcol"] ?? null)), "html", null, true);
                echo "
    ";
            } else {
                // line 61
                echo "        ";
                $context["pcol"] = $this->getAttribute(($context["page"] ?? null), "children", array(), "method");
                // line 62
                echo "    ";
            }
            // line 63
            echo "
    ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pcol"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 65
                echo "        ";
                $context["description"] = (((((( !$this->getAttribute($context["p"], "page", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.FOLDER") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE") . " &bull; "))) . (($this->getAttribute(                // line 66
$context["p"], "modular", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODULAR") . " &bull; ")) : (""))) . (($this->getAttribute(                // line 67
$context["p"], "routable", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ROUTABLE") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_ROUTABLE") . " &bull; ")))) . (($this->getAttribute(                // line 68
$context["p"], "visible", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.VISIBLE") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_VISIBLE") . " &bull; ")))) . (($this->getAttribute(                // line 69
$context["p"], "published", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PUBLISHED") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_PUBLISHED") . " &bull; "))));
                // line 70
                echo "        ";
                // line 71
                echo "        ";
                // line 72
                echo "            ";
                // line 73
                echo "        ";
                // line 74
                echo "            ";
                // line 75
                echo "        ";
                // line 76
                echo "
        ";
                // line 77
                $context["page_url"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->getPageUrl($context, $context["p"]);
                // line 78
                echo "
        <li class=\"page-item\" data-nav-id=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "route", array()), "html", null, true);
                echo "\">
            <div class=\"row page-item__row\">
                <span class=\"page-item__toggle\" ";
                // line 81
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", array(0 => 0), "method"), "count", array()) > 0)) ? ("data-toggle=\"children\"") : (""));
                echo ">
                    <i class=\"page-icon fa fa-fw fa-circle-o ";
                // line 82
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", array(0 => 0), "method"), "count", array()) > 0)) ? ("children-closed") : (""));
                echo " ";
                echo (($this->getAttribute($context["p"], "modular", array())) ? ("modular") : ((( !$this->getAttribute($context["p"], "routable", array())) ? ("not-routable") : ((( !$this->getAttribute($context["p"], "visible", array())) ? ("not-visible") : ((( !$this->getAttribute($context["p"], "page", array())) ? ("folder") : (""))))))));
                echo "\"></i>
                </span>
                <div class=\"page-item__content\">
                    <div class=\"page-item__content-name\">
                        <span data-hint=\"";
                // line 86
                echo twig_trim_filter(($context["description"] ?? null), " &bull; ");
                echo "\" class=\"hint--top page-item__content-hint\">
                            <a href=\"";
                // line 87
                echo twig_escape_filter($this->env, ($context["page_url"] ?? null), "html", null, true);
                echo "\" class=\"page-edit\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", array()));
                echo "</a>
                        </span>
                        ";
                // line 89
                if ($this->getAttribute($context["p"], "language", array())) {
                    // line 90
                    echo "                            <span class=\"badge lang ";
                    if (($this->getAttribute($context["p"], "language", array()) == ($context["admin_lang"] ?? null))) {
                        echo "info";
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "language", array()), "html", null, true);
                    echo "</span>
                        ";
                }
                // line 92
                echo "                        ";
                if ($this->getAttribute($context["p"], "home", array())) {
                    // line 93
                    echo "                            <span class=\"page-home\"><i class=\"fa fa-home\"></i></span>
                        ";
                }
                // line 95
                echo "                    </div>
                    <p class=\"page-route\">";
                // line 96
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", array()), "routes", array()), "default", array())) : ($this->getAttribute($context["p"], "route", array()))), "html", null, true);
                echo " <span class=\"spacer\"><i class=\"fa fa-long-arrow-right\"></i></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "template", array(), "method"), "html", null, true);
                echo "</p>
                </div>
                <span class=\"page-item__tools\">
                    ";
                // line 99
                if (($context["warn"] ?? null)) {
                    // line 100
                    echo "                        <a href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["page_url"] ?? null) . "/task") . ($context["separator"] ?? null)) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    ";
                } else {
                    // line 102
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["page_url"] ?? null) . "/task") . ($context["separator"] ?? null)) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    ";
                }
                // line 104
                echo "                </span>
            </div>
            ";
                // line 106
                if (($this->getAttribute($this->getAttribute($context["p"], "children", array(), "method"), "count", array()) > 0)) {
                    // line 107
                    echo "                <ul class=\"depth-";
                    echo twig_escape_filter($this->env, (($context["depth"] ?? null) + 1), "html", null, true);
                    echo "\" style=\"display:none;\">
                    ";
                    // line 108
                    echo $this->getAttribute($this, "loop", array(0 => $context["p"], 1 => (($context["depth"] ?? null) + 1), 2 => ($context["twig_vars"] ?? null)), "method");
                    echo "
                </ul>
            ";
                }
                // line 111
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
        return "pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1096 => 111,  1090 => 108,  1085 => 107,  1083 => 106,  1079 => 104,  1073 => 102,  1067 => 100,  1065 => 99,  1057 => 96,  1054 => 95,  1050 => 93,  1047 => 92,  1037 => 90,  1035 => 89,  1028 => 87,  1024 => 86,  1015 => 82,  1011 => 81,  1006 => 79,  1003 => 78,  1001 => 77,  998 => 76,  996 => 75,  994 => 74,  992 => 73,  990 => 72,  988 => 71,  986 => 70,  984 => 69,  983 => 68,  982 => 67,  981 => 66,  979 => 65,  975 => 64,  972 => 63,  969 => 62,  966 => 61,  960 => 59,  957 => 58,  955 => 57,  952 => 56,  949 => 55,  946 => 54,  943 => 53,  940 => 52,  937 => 51,  934 => 50,  931 => 49,  917 => 48,  899 => 4,  886 => 3,  879 => 397,  876 => 396,  871 => 393,  864 => 392,  856 => 387,  852 => 386,  845 => 382,  841 => 380,  833 => 378,  831 => 377,  826 => 375,  821 => 372,  819 => 371,  816 => 370,  812 => 368,  810 => 367,  806 => 365,  804 => 364,  800 => 362,  798 => 361,  794 => 359,  791 => 358,  776 => 356,  774 => 355,  767 => 354,  750 => 353,  746 => 351,  744 => 350,  739 => 347,  737 => 346,  732 => 343,  730 => 342,  727 => 341,  725 => 340,  722 => 339,  719 => 338,  716 => 337,  713 => 336,  711 => 335,  708 => 334,  705 => 333,  703 => 332,  699 => 330,  695 => 328,  693 => 327,  688 => 325,  680 => 320,  676 => 319,  670 => 316,  658 => 313,  654 => 311,  650 => 309,  647 => 308,  644 => 307,  641 => 306,  638 => 305,  636 => 304,  631 => 301,  623 => 296,  611 => 295,  607 => 294,  595 => 293,  591 => 291,  588 => 290,  585 => 289,  582 => 288,  579 => 287,  576 => 286,  574 => 285,  571 => 284,  567 => 282,  563 => 280,  557 => 279,  547 => 277,  544 => 276,  540 => 275,  534 => 271,  532 => 270,  529 => 269,  523 => 267,  517 => 265,  515 => 264,  511 => 262,  509 => 261,  504 => 258,  501 => 257,  498 => 256,  496 => 255,  493 => 254,  490 => 253,  482 => 249,  476 => 246,  473 => 245,  471 => 244,  466 => 243,  464 => 242,  461 => 241,  455 => 237,  452 => 236,  448 => 234,  442 => 233,  432 => 231,  429 => 230,  426 => 229,  422 => 228,  416 => 224,  413 => 223,  411 => 222,  407 => 221,  403 => 219,  400 => 218,  394 => 216,  386 => 214,  383 => 213,  377 => 211,  375 => 210,  371 => 209,  365 => 208,  360 => 205,  354 => 203,  352 => 202,  348 => 201,  344 => 200,  335 => 194,  331 => 192,  329 => 191,  326 => 190,  318 => 188,  315 => 187,  312 => 186,  310 => 185,  307 => 184,  299 => 182,  296 => 181,  293 => 180,  291 => 179,  288 => 178,  286 => 177,  279 => 175,  274 => 173,  271 => 172,  269 => 171,  266 => 170,  262 => 168,  258 => 166,  252 => 165,  244 => 163,  241 => 162,  238 => 161,  234 => 160,  228 => 156,  226 => 155,  220 => 153,  218 => 152,  213 => 149,  211 => 148,  206 => 145,  200 => 144,  188 => 142,  185 => 141,  180 => 140,  174 => 138,  172 => 137,  168 => 136,  164 => 135,  155 => 129,  150 => 126,  144 => 125,  132 => 123,  129 => 122,  125 => 121,  117 => 119,  115 => 118,  112 => 117,  109 => 116,  102 => 41,  99 => 40,  92 => 37,  89 => 36,  86 => 35,  83 => 34,  80 => 33,  76 => 1,  74 => 46,  72 => 45,  70 => 44,  68 => 31,  66 => 30,  64 => 29,  62 => 28,  60 => 27,  57 => 24,  55 => 23,  51 => 20,  48 => 18,  46 => 17,  44 => 16,  42 => 15,  40 => 14,  38 => 13,  36 => 12,  34 => 11,  31 => 8,  29 => 7,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% macro spanToggle(input, length) %}
    {{ (repeat('&nbsp;&nbsp;', (length - input|length) / 2) ~ input ~ repeat('&nbsp;&nbsp;', (length - input|length) / 2))|raw }}
{% endmacro %}

{% if admin.route %}
    {% set context = admin.page(true) %}
{% endif %}

{% if uri.param('new') %}
    {% set mode = 'new' %}
{%  elseif context %}
    {% set mode = 'edit' %}
    {% if context.exists %}
        {% set page_url = base_url ~ '/pages' ~ (context.header.routes.default ?: context.rawRoute) %}
        {% set exists = true %}
        {% set title = (context.exists ? \"PLUGIN_ADMIN.EDIT\"|tu : \"PLUGIN_ADMIN.CREATE\"|tu ) ~ \" \" ~ (context.header.title ?: context.title) %}
    {% else %}
        {% set title = \"PLUGIN_ADMIN.ADD_PAGE\"|tu %}
    {% endif %}
{% else %}
    {% set mode = 'list' %}
    {% set title = \"PLUGIN_ADMIN.PAGES\"|tu %}
{% endif %}

{% set modular = context.modular ? 'modular_' : '' %}
{% set warn = config.plugins.admin.warnings.delete_page %}
{% set admin_lang = admin.session.admin_lang ?: 'en' %}
{% set page_lang = context.language %}
{% set type = 'page' %}

{% block stylesheets %}
    {% if mode == 'edit' %}
        {% do assets.addCss(theme_url~'/css/codemirror/codemirror.css') %}
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}

{% set preview_html = (base_url_relative_frontend|rtrim('/') ~ (context.home ? '' : context.route)) ?: '/' %}
{% set preview_target = config.plugins.admin.frontend_pages_target %}
{% set preview_link = context.routable ? '<a class=\"button\" target=\"' ~ preview_target ~ '\" href=\"' ~ preview_html ~ '\" title=\"' ~ \"PLUGIN_ADMIN.PREVIEW\"|tu ~ '\"> <i class=\"fa fa-fw fa-eye\" style=\"font-size:18px;margin-right:0;\"></i></a>' : '' %}

{% macro loop(page, depth, twig_vars) %}
    {% set separator = twig_vars['config'].system.param_sep %}
    {% set base_url = twig_vars['base_url_relative'] %}
    {% set base_url_simple = twig_vars['base_url_simple'] %}
    {% set admin_route = twig_vars['admin_route'] %}
    {% set admin_lang = twig_vars['admin_lang'] %}
    {% set warn = twig_vars['warn'] %}
    {% set uri = twig_vars['uri'] %}

    {% if page.header.admin.children_display_order == 'collection' and page.header.content.order.by %}
        {% set pcol = page.children().order(page.header.content.order.by, page.header.content.order.dir|default('asc')) %}
        {{ dump(pcol) }}
    {% else %}
        {% set pcol = page.children() %}
    {% endif %}

    {% for p in pcol %}
        {% set description = (not p.page ? \"PLUGIN_ADMIN.FOLDER\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.PAGE\"|tu ~ ' &bull; ') ~
                             (p.modular ? \"PLUGIN_ADMIN.MODULAR\"|tu ~ ' &bull; ' : '') ~
                             (p.routable ? \"PLUGIN_ADMIN.ROUTABLE\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.NON_ROUTABLE\"|tu ~ ' &bull; ') ~
                             (p.visible ? \"PLUGIN_ADMIN.VISIBLE\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.NON_VISIBLE\"|tu ~ ' &bull; ') ~
                             (p.published ? \"PLUGIN_ADMIN.PUBLISHED\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.NON_PUBLISHED\"|tu ~ ' &bull; ') %}
        {#{% set page_route =  p.rawRoute|trim('/') %}#}
        {#{% if p.language and p.language != admin_lang %}#}
            {#{% set page_url = base_url_simple ~ '/' ~ p.language ~ '/' ~ admin_route ~ '/pages/' ~ page_route %}#}
        {#{% else %}#}
            {#{% set page_url = base_url ~ '/pages/' ~ page_route  %}#}
        {#{% endif %}#}

        {% set page_url = getPageUrl(p) %}

        <li class=\"page-item\" data-nav-id=\"{{ p.route }}\">
            <div class=\"row page-item__row\">
                <span class=\"page-item__toggle\" {{ p.children(0).count > 0 ? 'data-toggle=\"children\"' : ''}}>
                    <i class=\"page-icon fa fa-fw fa-circle-o {{ p.children(0).count > 0 ? 'children-closed' : ''}} {{ p.modular ? 'modular' : (not p.routable ? 'not-routable' : (not p.visible ? 'not-visible' : (not p.page ? 'folder' :  ''))) }}\"></i>
                </span>
                <div class=\"page-item__content\">
                    <div class=\"page-item__content-name\">
                        <span data-hint=\"{{ description|trim(' &bull; ')|raw }}\" class=\"hint--top page-item__content-hint\">
                            <a href=\"{{ page_url }}\" class=\"page-edit\">{{ p.title|e }}</a>
                        </span>
                        {% if p.language %}
                            <span class=\"badge lang {% if p.language == admin_lang %}info{% endif %}\">{{p.language}}</span>
                        {% endif %}
                        {% if p.home %}
                            <span class=\"page-home\"><i class=\"fa fa-home\"></i></span>
                        {% endif %}
                    </div>
                    <p class=\"page-route\">{{ p.header.routes.default ?: p.route }} <span class=\"spacer\"><i class=\"fa fa-long-arrow-right\"></i></span> {{ p.template() }}</p>
                </div>
                <span class=\"page-item__tools\">
                    {% if warn %}
                        <a href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"{{ uri.addNonce(page_url ~ '/task' ~ separator ~ 'delete', 'admin-form', 'admin-nonce') }}\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    {% else %}
                        <a href=\"{{ uri.addNonce(page_url ~ '/task' ~ separator ~ 'delete', 'admin-form', 'admin-nonce') }}\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    {% endif %}
                </span>
            </div>
            {% if p.children().count > 0 %}
                <ul class=\"depth-{{ depth + 1 }}\" style=\"display:none;\">
                    {{ _self.loop(p, depth + 1, twig_vars) }}
                </ul>
            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}


{% block titlebar %}
    <div class=\"button-bar\">
        {% if mode == 'list' %}
            <a class=\"button\" href=\"{{ base_url }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>

            {% for key, add_modal in config.plugins.admin.add_modals %}
                {% if add_modal.show_in|defined('bar') == 'bar' %}
                    <a class=\"button {{ add_modal.link_classes }}\" href=\"#modal-add_modal-{{ key }}\" data-remodal-target=\"modal-add_modal-{{ key }}\"><i class=\"fa fa-plus\"></i> {{ add_modal.label }}</a>
                {% endif %}
            {% endfor %}

            <div class=\"button-group\">
                <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                    <i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|tu }}
                </button>
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">{{ \"PLUGIN_ADMIN.ADD_PAGE\"|tu }}</a></li>
                    <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">{{ \"PLUGIN_ADMIN.ADD_FOLDER\"|tu }}</a></li>
                    {% if admin.modularTypes is not empty %}
                        <li><a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\">{{ \"PLUGIN_ADMIN.ADD_MODULAR\"|tu }}</a></li>
                    {% endif %}
                    {% for key, add_modal in config.plugins.admin.add_modals %}
                        {% if add_modal.show_in|defined('bar') == 'dropdown' %}
                            <li><a class=\"button {{ add_modal.link_classes }}\" href=\"#modal-add_modal-{{ key }}\" data-remodal-target=\"modal-add_modal-{{ key }}\">{{ add_modal.label }}</a></li>
                        {% endif %}
                    {% endfor %}
                </ul>
            </div>

            {% if admin.multilang %}
                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\">
                        <i class=\"fa fa-flag-o\"></i>
                        {% set langName = admin.siteLanguages[admin_lang] %}
                        {{ langName[:1]|upper ~ langName[1:] }}
                    </button>
                    {%  if admin.languages_enabled|length > 1 %}
                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu language-switcher\">
                        {% for langCode in admin.languages_enabled %}
                            {% set langName = admin.siteLanguages[langCode] %}
                            {% if langCode != admin_lang %}
                                <li><a href=\"{{ uri.addNonce(base_url_relative ~ theme.slug ~ '/pages/task' ~ config.system.param_sep ~ 'switchlanguage/lang' ~ config.system.param_sep ~ langCode, 'admin-form', 'admin-nonce') }}\">{{ langName[:1]|upper ~ langName[1:] }}</a></li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                    {% endif %}
                </div>
            {% endif %}

        {% elseif mode == 'edit' %}

            {{ preview_link|raw }}

            <a class=\"button\" href=\"{{ base_url }}/pages\" title=\"{{ \"PLUGIN_ADMIN.BACK\"|tu }}\"><i class=\"fa fa-reply\"></i></a>

            {% set siblings = context.parent().children() %}

            {% if not siblings.isFirst(context.path) %}
                {% set sib = siblings.nextSibling(context.path) %}
                {% set sib_url = base_url ~ '/pages' ~ (sib.header.routes.default ?: sib.rawRoute) %}
                <a class=\"button hidden-mobile\" href=\"{{ sib_url }}\" title=\"{{ \"PLUGIN_ADMIN.PREVIOUS\"|tu }}\"><i class=\"fa fa-chevron-left\"></i></a>
            {% endif %}

            {% if not siblings.isLast(context.path) %}
                {% set sib = siblings.prevSibling(context.path) %}
                {% set sib_url = base_url ~ '/pages' ~ (sib.header.routes.default ?: sib.rawRoute) %}
                <a class=\"button hidden-mobile\" href=\"{{ sib_url }}\" title=\"{{ \"PLUGIN_ADMIN.NEXT\"|tu }}\"><i class=\"fa fa-chevron-right\"></i></a>
            {% endif %}

            {% if exists %}
                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                        <i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|tu }}
                    </button>
                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu\">
                        <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">{{ \"PLUGIN_ADMIN.ADD_PAGE\"|tu }}</a></li>
                        <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">{{ \"PLUGIN_ADMIN.ADD_FOLDER\"|tu }}</a></li>
                        {% if admin.modularTypes is not empty %}
                            <li><a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\">{{ \"PLUGIN_ADMIN.ADD_MODULAR\"|tu }}</a></li>
                        {% endif %}
                    </ul>
                </div>

                <a class=\"button disable-after-click\" href=\"{{ uri.addNonce(page_url ~ '/task' ~ config.system.param_sep ~ 'copy', 'admin-form', 'admin-nonce') }}\" class=\"page-copy\" ><i class=\"fa fa-copy\"></i> {{ \"PLUGIN_ADMIN.COPY\"|tu }}</a>
                <a class=\"button\" href=\"#\" data-remodal-target=\"move\"><i class=\"fa fa-arrows\"></i> {{ \"PLUGIN_ADMIN.MOVE\"|tu }}</a>
                {% if config.plugins['admin-pro'].enabled %}
                    <a class=\"button\" href=\"#\" data-remodal-target=\"revisions\"><i class=\"fa fa-history\"></i> {{ \"PLUGIN_ADMIN_PRO.REVISIONS\"|tu }}</a>
                {% endif %}
                {% if warn %}
                    <a class=\"button\" href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"{{ uri.addNonce(page_url ~ '/task' ~ config.system.param_sep ~ 'delete', 'admin-form', 'admin-nonce') }}\"><i class=\"fa fa-close\"></i> {{ \"PLUGIN_ADMIN.DELETE\"|tu }}</a>
                {% else %}
                    <a class=\"button disable-after-click\" href=\"{{ uri.addNonce(uri.route(true) ~ '/task' ~ config.system.param_sep ~ 'delete', 'admin-form', 'admin-nonce') }}\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                {% endif %}
            {% endif %}

            <div class=\"button-group\">
                <button class=\"button\" name=\"task\" value=\"save\" form=\"blueprints\" type=\"submit\"><i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|tu }}</button>
                {% if exists and admin.multilang %}
                    {% if context.untranslatedLanguages %}
                        <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu lang-switcher\">
                            {% for langCode in context.untranslatedLanguages %}
                                {% set langName = admin.siteLanguages[langCode] %}
                                {% if langCode != page_lang %}
                                    <li><button class=\"button task\" name=\"task\" value=\"saveas\" lang=\"{{langCode}}\" form=\"blueprints\" type=\"submit\">{{ \"PLUGIN_ADMIN.SAVE_AS\"|tu }} {{ langName[:1]|upper ~ langName[1:] }}</button>
                                {% endif %}
                            {% endfor %}
                        </ul>
                    {% endif %}
                {% endif %}
            </div>


        {% endif %}
    </div>
    {% if mode == 'new' %}
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> {{ \"PLUGIN_ADMIN.ADD_PAGE\"|tu }}</h1>
    {% elseif mode == 'edit' %}
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i>
            {{ context.menu }}
        </h1>
    {% else %}
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> {{ \"PLUGIN_ADMIN.MANAGE_PAGES\"|tu }}</h1>
    {% endif %}
{% endblock %}

{% block content %}
    <div class=\"clear admin-pages\">
    {% if mode == 'new' %}
        {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('pages/page'), data: context } %}
    {% elseif mode == 'edit' %}
        <div class=\"admin-form-wrapper\">
            <div id=\"admin-topbar\">

                {% if admin.multilang and page_lang %}
                    <div id=\"admin-lang-toggle\" class=\"button-group\">
                        <button type=\"button\" class=\"button disabled\">
                            {% if exists %}
                                {{ page_lang }}
                            {% else %}
                                {{ admin_lang }}
                            {% endif %}
                        </button>
                        {% if exists and context.translatedLanguages|length > 1 %}
                            <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-caret-down\"></i>
                            </button>
                            <ul class=\"dropdown-menu language-switcher\">
                                {% for language, route in context.translatedLanguages %}
                                    {% if language != page_lang %}
                                    <li><button class=\"task\" name=\"task\" value=\"switchlanguage\" lang=\"{{language}}\" redirect=\"{{context.rawRoute|trim('/')}}\" form=\"blueprints\">{{ language }}</button>
                                    {% endif %}
                                {% endfor %}
                            </ul>
                        {% endif %}
                    </div>
                {% endif %}

                {% if context.blueprints.fields %}
                {% set normalText = \"PLUGIN_ADMIN.NORMAL\"|tu %}
                {% set expertText = \"PLUGIN_ADMIN.EXPERT\"|tu %}
                {% set maxLen = max([normalText|length, expertText|length]) %}
                {% set normalText = _self.spanToggle(normalText, maxLen) %}
                {% set expertText = _self.spanToggle(expertText, maxLen) %}
                <form id=\"admin-mode-toggle\">
                    <div class=\"switch-toggle switch-grav\">
                        <input type=\"radio\" value=\"normal\" data-leave-url=\"{{ base_url }}/pages/{{ admin.route|trim('/') }}/mode{{ config.system.param_sep }}normal\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" {% if admin.session.expert == '0' %} checked=\"checked\"{% endif %}>
                        <label for=\"normal\">{{ normalText|raw }}</label>
                        <input type=\"radio\" value=\"expert\" data-leave-url=\"{{ base_url }}/pages/{{ admin.route|trim('/') }}/mode{{ config.system.param_sep }}expert\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" {% if admin.session.expert == '1' %} checked=\"checked\"{% endif %}>
                        <label for=\"expert\">{{ expertText|raw }}</label>
                        <a></a>
                    </div>
                </form>
                {% endif %}

            </div>

            {% if context.blueprints.fields and admin.session.expert == '0' %}
                {% include 'partials/blueprints.html.twig' with { blueprints: context.blueprints, data: context } %}
            {% else %}
                {% include 'partials/blueprints-raw.html.twig' with { blueprints: admin.blueprints('admin/pages/'~modular~'raw'), data: context } %}
            {% endif %}
        </div>
    {% else %}
        <form id=\"page-filtering\">
            <div class=\"page-filters\">
                <input type=\"text\" data-filter-labels=\"{{ [{'id': 'mode', 'name': 'PLUGIN_ADMIN.PAGE_MODES'|tu}, {'id': 'type', 'name': 'PLUGIN_ADMIN.PAGE_TYPES'|tu}, {'id': 'access', 'name': 'PLUGIN_ADMIN.ACCESS_LEVELS'|tu}] |json_encode|e('html_attr')}}\" data-filter-types=\"{{ admin.types|merge(admin.modularTypes)|json_encode|e('html_attr') }}\" data-filter-access-levels=\"{{ admin.accessLevels|json_encode|e('html_attr') }}\" placeholder=\"{{ \"PLUGIN_ADMIN.ADD_FILTERS\"|tu }}\" class=\"page-filter\" name=\"page-filter\" />
            </div>
            <div class=\"page-search\">
                <input type=\"text\" placeholder=\"{{ \"PLUGIN_ADMIN.SEARCH_PAGES\"|tu }}\" name=\"page-search\" />
            </div>
            <div class=\"page-shortcuts\">
                <span class=\"button button-x-small\" data-page-toggleall=\"expand\"><i class=\"fa fa-fw fa-plus-circle\"></i> {{ \"PLUGIN_ADMIN.EXPAND_ALL\"|tu }}</span>
                <span class=\"button button-x-small\" data-page-toggleall=\"collapse\"><i class=\"fa fa-fw fa-minus-circle\"></i> {{ \"PLUGIN_ADMIN.COLLAPSE_ALL\"|tu }}</span>
            </div>
        </form>
        <div class=\"pages-list\">
            <ul class=\"depth-0\">
                {{ _self.loop(pages, 0, _context) }}
            </ul>
            {% include 'partials/page-legend.html.twig' %}
        </div>
    {% endif %}
    </div>

    {% if context %}
        {% set obj_data = clone(context) %}

        {% if mode == 'edit' %}
            {% do obj_data.folder('') %}
        {% endif %}
    {% endif %}

    {% if mode == 'list' or mode == 'edit' %}
    <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
        {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('admin/pages/new'), data: obj_data } %}
    </div>

    <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
        {% include 'partials/blueprints-new-folder.html.twig' with { blueprints: admin.blueprints('admin/pages/new_folder'), data: obj_data } %}
    </div>

    <div class=\"remodal\" data-remodal-id=\"modular\" data-remodal-options=\"hashTracking: false\">
        {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('admin/pages/modular_new'), data: obj_data } %}
    </div>

    {% for key, add_modal in config.plugins.admin.add_modals %}
        <div class=\"remodal {{ add_modal.modal_classes|defined('') }}\" data-remodal-id=\"modal-add_modal-{{ key }}\" data-remodal-options=\"hashTracking: false\">
            {% include add_modal.template|defined('partials/blueprints-new.html.twig') with { blueprints: admin.blueprints(add_modal.blueprint), data: context }|merge(add_modal.with|defined({})) %}
        </div>
    {% endfor %}
    {% endif %}


    {% if mode == 'edit' %}
    <div class=\"remodal\" data-remodal-id=\"move\" data-remodal-options=\"hashTracking: false\">

        {% include 'partials/page-move.html.twig' with { blueprints: admin.blueprints('admin/pages/move'), data: context } %}
    </div>
    <div class=\"remodal\" data-remodal-id=\"revisions\" data-remodal-options=\"hashTracking: false\">
        {% include ['partials/page-revisions.html.twig', 'empty.html.twig'] with { data: context } %}
    </div>
    {% endif %}

    {% include 'partials/modal-changes-detected.html.twig' %}

    <div class=\"remodal\" data-remodal-id=\"delete\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>{{ \"PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE\"|tu }}</h1>
            <p class=\"bigger\">
                {% if context %}
                    <strong>{{ \"PLUGIN_ADMIN.PAGE\"|tu }}: {{ context.title }}</strong>
                {% endif %}
            </p>
            <p class=\"bigger\">
              {{ \"PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_DESC\"|tu }}
            </p>
            <br>
            <div class=\"button-bar\">
            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</button>
            <a class=\"button disable-after-click\" data-delete-action href=\"#\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</a>
            </div>
        </form>
    </div>

    {% include 'partials/admin-pro-pages-addons.html.twig' ignore missing %}

{% endblock %}

{% block bottom %}
<script>
    \$('.admin-pages .form-tabs .tabs-nav').css('margin-right', (\$('#admin-topbar').width() + 20) + 'px');
</script>
{% endblock %}
", "pages.html.twig", "/Users/brookehopkins/Documents/Development/grav-admin/user/plugins/admin/themes/grav/templates/pages.html.twig");
    }
}
