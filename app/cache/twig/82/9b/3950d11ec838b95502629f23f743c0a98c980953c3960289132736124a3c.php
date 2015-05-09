<?php

/* form_addUser.html.twig */
class __TwigTemplate_829b3950d11ec838b95502629f23f743c0a98c980953c3960289132736124a3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "form_addUser.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div>Add user</div>
<div style=\"border:1px solid; width:300px;\">
\t<form method=\"POST\" action=\"index.php?p=adduser\"> 
\t\tName : <input type=\"text\" name=\"name\"><br>
\t\tPassword : <input type=\"password\" name=\"password\"><br>
\t\t<input type=\"submit\">
\t</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "form_addUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
