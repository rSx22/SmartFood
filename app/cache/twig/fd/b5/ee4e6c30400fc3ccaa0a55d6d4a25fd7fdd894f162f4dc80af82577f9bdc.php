<?php

/* index.html.twig */
class __TwigTemplate_fdb5ee4e6c30400fc3ccaa0a55d6d4a25fd7fdd894f162f4dc80af82577f9bdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<h1> WELCOME GOLEFOY </h1><br>
<a href =\"http://localhost:8888/newproject/web/index.php?p=user\">show user</a><br>
<a href =\"http://localhost:8888/newproject/web/index.php?p=user_list\">List user in users</a><br>
<a href =\"http://localhost:8888/newproject/web/index.php?p=adduser \">Form for add user in users</a><br>";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
