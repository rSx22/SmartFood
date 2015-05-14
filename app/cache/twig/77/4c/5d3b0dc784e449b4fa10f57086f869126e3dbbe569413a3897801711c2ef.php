<?php

/* index.html.twig */
class __TwigTemplate_774c5d3b0dc784e449b4fa10f57086f869126e3dbbe569413a3897801711c2ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sidebar' => [$this, 'block_sidebar'],
            'body' => [$this, 'block_body'],
            'notif' => [$this, 'block_notif'],
            'confirm' => [$this, 'block_confirm'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"./../web/css/style_index.css\">
\t<title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<body>
\t\t<h1> WELCOME GOLEFOY </h1><br>
\t\t";
        // line 7
        $this->displayBlock('sidebar', $context, $blocks);
        // line 23
        echo "\t\t";
        echo twig_var_dump($this->env, $context, (isset($context["session"]) ? $context["session"] : null));
        echo "
\t\t<div>User:";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "user", []), "html", null, true);
        echo " 
\t\t";
        // line 25
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "path", []) != null)) {
            // line 26
            echo "\t\t <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "path", []), "html", null, true);
            echo "\" style=\"width:80px;height:80px;\"> <a href =\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php?p=card_list\">list products in your card</a><br>

\t\t ";
        }
        // line 29
        echo "\t\t</div>
\t\t<div id=\"content\">
\t            ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "\t    </div>
\t\t<div id=\"notif\">
\t            ";
        // line 34
        $this->displayBlock('notif', $context, $blocks);
        // line 35
        echo "\t    </div>
\t    <div id=\"confirm\">
\t            ";
        // line 37
        $this->displayBlock('confirm', $context, $blocks);
        // line 38
        echo "\t    </div>
\t</body>

";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Test Application";
    }

    // line 7
    public function block_sidebar($context, array $blocks = array())
    {
        // line 8
        echo "\t\t\t<a href =\"";
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=user\">show user</a><br>
\t\t\t<a href =\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=users_list\">List user in users</a><br>
\t\t\t<a href =\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=add_user \">Form for add user in users</a><br>
\t\t\t<a href =\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=add_userinfo \">Form for add user info</a><br>
\t\t\t<a href =\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=add_avatar \">Form for add user avatar</a><br>
\t\t\t<a href =\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=del_user \">Form for del user in users</a><br>
\t\t\t<a href =\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=log_user \">Form for log user in users</a><br>
\t\t\t<a href =\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=logout \">Clic for logout. q+</a><br><br>

\t\t\t<a href =\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=products_list\">list products</a><br>
\t\t\t<a href =\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=product\">show product</a><br>
\t\t\t<a href =\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=add_product\">add product</a><br>
\t\t\t<a href =\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=del_product\">del product</a><br>

\t\t";
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
    }

    // line 34
    public function block_notif($context, array $blocks = array())
    {
    }

    // line 37
    public function block_confirm($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 37,  151 => 34,  146 => 31,  139 => 20,  135 => 19,  131 => 18,  127 => 17,  122 => 15,  118 => 14,  114 => 13,  110 => 12,  106 => 11,  102 => 10,  98 => 9,  93 => 8,  90 => 7,  84 => 4,  77 => 38,  75 => 37,  71 => 35,  69 => 34,  65 => 32,  63 => 31,  59 => 29,  48 => 26,  46 => 25,  42 => 24,  37 => 23,  35 => 7,  29 => 4,  24 => 1,);
    }
}
