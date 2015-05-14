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
            echo "\t\t <img src=\"./../../newproject/web/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "path", []), "html", null, true);
            echo "\" style=\"width:80px;height:80px;\"> <a href =\"http://localhost:8888/newproject/web/index.php?p=card_list\">list products in your card</a><br>

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
        echo "\t\t\t<a href =\"http://localhost:8888/newproject/web/index.php?p=user\">show user</a><br>
\t\t\t<a href =\"http://localhost:8888/newproject/web/index.php?p=users_list\">List user in users</a><br>
\t\t\t<a href =\"http://localhost:8888/newproject/web/index.php?p=add_user \">Form for add user in users</a><br>
\t\t\t<a href =\"http://localhost:8888/newproject/web/index.php?p=add_userinfo \">Form for add user info</a><br>
\t\t\t<a href =\"http://localhost:8888/newproject/web/index.php?p=add_avatar \">Form for add user avatar</a><br>
\t\t\t<a href =\"http://localhost:8888/newproject/web/index.php?p=del_user \">Form for del user in users</a><br>
\t\t\t<a href =\"http://localhost:8888/newproject/web/index.php?p=log_user \">Form for log user in users</a><br>
\t\t\t<a href =\"http://localhost:8888/newproject/web/index.php?p=logout \">Clic for logout. q+</a><br><br>

\t\t\t<a href =\"http://localhost:8888/newproject/web/index.php?p=products_list\">list products</a><br>
\t\t\t<a href =\"http://localhost:8888/newproject/web/index.php?p=product\">show product</a><br>
\t\t\t<a href =\"http://localhost:8888/newproject/web/index.php?p=add_product\">add product</a><br>
\t\t\t<a href =\"http://localhost:8888/newproject/web/index.php?p=del_product\">del product</a><br>

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
        return array (  117 => 37,  112 => 34,  107 => 31,  89 => 8,  86 => 7,  80 => 4,  73 => 38,  71 => 37,  67 => 35,  65 => 34,  61 => 32,  59 => 31,  55 => 29,  48 => 26,  46 => 25,  42 => 24,  37 => 23,  35 => 7,  29 => 4,  24 => 1,);
    }
}
