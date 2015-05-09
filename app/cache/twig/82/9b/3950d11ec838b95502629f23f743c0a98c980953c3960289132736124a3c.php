<?php

/* form_addUser.html.twig */
class __TwigTemplate_829b3950d11ec838b95502629f23f743c0a98c980953c3960289132736124a3c extends Twig_Template
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
        echo "<div style=\"border:1px solid; width:300px;\">
\t<form method=\"POST\" action=\"index.php?p=adduser\"> 
\t\tName : <input type=\"text\" name=\"name\"><br>
\t\tPassword : <input type=\"password\" name=\"password\"><br>
\t\t<input type=\"submit\">
\t</form>
</div>";
    }

    public function getTemplateName()
    {
        return "form_addUser.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
