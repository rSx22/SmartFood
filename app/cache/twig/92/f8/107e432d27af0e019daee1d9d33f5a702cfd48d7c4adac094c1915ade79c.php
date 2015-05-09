<?php

/* form_delUser.html.twig */
class __TwigTemplate_92f8107e432d27af0e019daee1d9d33f5a702cfd48d7c4adac094c1915ade79c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "form_delUser.html.twig", 1);
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
        echo "<div>write user u want to delete
</div>
<div style=\"border:1px solid; width:300px;\">
\t<form method=\"POST\" action=\"index.php?p=deluser\"> 
\t\tName user to del: <input type=\"text\" name=\"name\"><br>
\t\t<input type=\"submit\">
\t</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "form_delUser.html.twig";
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
