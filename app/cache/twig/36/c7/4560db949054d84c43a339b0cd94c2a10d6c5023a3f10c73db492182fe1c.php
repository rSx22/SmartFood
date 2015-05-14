<?php

/* user/form_showUser.html.twig */
class __TwigTemplate_36c74560db949054d84c43a339b0cd94c2a10d6c5023a3f10c73db492182fe1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->loadTemplate("index.html.twig", "user/form_showUser.html.twig", 1)->display($context);
        // line 2
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div>select user to search
</div>
<div style=\"border:1px solid; width:300px;\">
\t<form method=\"POST\" action=\"index.php?p=user\"> 
\t\t<input type=\"number\" name=\"id\" min=\"0\">
\t\t<input type=\"submit\">
\t</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "user/form_showUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 2,  20 => 1,);
    }
}
