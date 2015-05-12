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
        // line 22
        echo "\t\t";
        echo twig_var_dump($this->env, $context, (isset($context["session"]) ? $context["session"] : null));
        echo "
\t\t<div>User:";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "user", []), "html", null, true);
        echo " 
\t\t";
        // line 24
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "path", []) != null)) {
            // line 25
            echo "\t\t <img src=\"./../../newproject/web/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "path", []), "html", null, true);
            echo "\" style=\"width:80px;height:80px;\"> 
\t\t ";
        }
        // line 27
        echo "\t\t</div>
\t\t<div id=\"content\">
\t            ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "\t    </div>
\t\t<div id=\"notif\">
\t            ";
        // line 32
        $this->displayBlock('notif', $context, $blocks);
        // line 33
        echo "\t    </div>
\t    <div id=\"confirm\">
\t            ";
        // line 35
        $this->displayBlock('confirm', $context, $blocks);
        // line 36
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

    // line 29
    public function block_body($context, array $blocks = array())
    {
    }

    // line 32
    public function block_notif($context, array $blocks = array())
    {
    }

    // line 35
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
        return array (  115 => 35,  110 => 32,  105 => 29,  88 => 8,  85 => 7,  79 => 4,  72 => 36,  70 => 35,  66 => 33,  64 => 32,  60 => 30,  58 => 29,  54 => 27,  48 => 25,  46 => 24,  42 => 23,  37 => 22,  35 => 7,  29 => 4,  24 => 1,);
    }
}
