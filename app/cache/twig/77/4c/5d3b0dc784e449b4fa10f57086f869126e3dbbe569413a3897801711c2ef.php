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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
\t
<title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<h1> WELCOME GOLEFOY </h1><br>
\t";
        // line 6
        $this->displayBlock('sidebar', $context, $blocks);
        // line 19
        echo "\t<div>User:";
        echo twig_escape_filter($this->env, (isset($context["session"]) ? $context["session"] : null), "html", null, true);
        echo "</div>
\t<div id=\"content\">
            ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "    </div>
\t<div id=\"notif\">
            ";
        // line 24
        $this->displayBlock('notif', $context, $blocks);
        // line 25
        echo "    </div>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Test Application";
    }

    // line 6
    public function block_sidebar($context, array $blocks = array())
    {
        // line 7
        echo "\t\t<a href =\"http://localhost:8888/newproject/web/index.php?p=user\">show user</a><br>
\t\t<a href =\"http://localhost:8888/newproject/web/index.php?p=users_list\">List user in users</a><br>
\t\t<a href =\"http://localhost:8888/newproject/web/index.php?p=add_user \">Form for add user in users</a><br>
\t\t<a href =\"http://localhost:8888/newproject/web/index.php?p=del_user \">Form for del user in users</a><br>
\t\t<a href =\"http://localhost:8888/newproject/web/index.php?p=log_user \">Form for log user in users</a><br>
\t\t<a href =\"http://localhost:8888/newproject/web/index.php?p=logout \">Clic for logout. q+</a><br><br>

\t\t<a href =\"http://localhost:8888/newproject/web/index.php?p=products_list\">list products</a><br>
\t\t<a href =\"http://localhost:8888/newproject/web/index.php?p=product\">show product</a><br>
\t\t<a href =\"http://localhost:8888/newproject/web/index.php?p=add_product\">add product</a><br>
\t\t<a href =\"http://localhost:8888/newproject/web/index.php?p=del_product\">del product</a><br>
\t";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
    }

    // line 24
    public function block_notif($context, array $blocks = array())
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
        return array (  83 => 24,  78 => 21,  63 => 7,  60 => 6,  54 => 4,  49 => 25,  47 => 24,  43 => 22,  41 => 21,  35 => 19,  33 => 6,  28 => 4,  23 => 1,);
    }
}
