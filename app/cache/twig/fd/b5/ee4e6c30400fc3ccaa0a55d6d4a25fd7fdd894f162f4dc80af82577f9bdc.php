<?php

/* index.html.twig */
class __TwigTemplate_fdb5ee4e6c30400fc3ccaa0a55d6d4a25fd7fdd894f162f4dc80af82577f9bdc extends Twig_Template
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
        // line 14
        echo "\t<div>User:";
        echo twig_escape_filter($this->env, (isset($context["session"]) ? $context["session"] : null), "html", null, true);
        echo "</div>
\t<div id=\"content\">
            ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "    </div>
\t<div id=\"notif\">
            ";
        // line 19
        $this->displayBlock('notif', $context, $blocks);
        // line 20
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
\t\t<a href =\"http://localhost:8888/newproject/web/index.php?p=user_list\">List user in users</a><br>
\t\t<a href =\"http://localhost:8888/newproject/web/index.php?p=adduser \">Form for add user in users</a><br>
\t\t<a href =\"http://localhost:8888/newproject/web/index.php?p=deluser \">Form for del user in users</a><br>
\t\t<a href =\"http://localhost:8888/newproject/web/index.php?p=loguser \">Form for log user in users</a><br>
\t\t<a href =\"http://localhost:8888/newproject/web/index.php?p=logout \">Clic for logout. q+</a><br>
\t";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
    }

    // line 19
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
        return array (  78 => 19,  73 => 16,  63 => 7,  60 => 6,  54 => 4,  49 => 20,  47 => 19,  43 => 17,  41 => 16,  35 => 14,  33 => 6,  28 => 4,  23 => 1,);
    }
}
