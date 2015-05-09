<?php

/* form_showUser.html.twig */
class __TwigTemplate_36c74560db949054d84c43a339b0cd94c2a10d6c5023a3f10c73db492182fe1c extends Twig_Template
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
\t<form method=\"POST\" action=\"index.php?p=user\"> 
\t\t<input type=\"number\" name=\"id\" min=\"0\">
\t\t<input type=\"submit\">
\t</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "form_showUser.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
