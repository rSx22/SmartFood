<?php

/* form_logUser.html.twig */
class __TwigTemplate_f1b61d2d0e488fb74bcf2822eac3a8ce9c0495cb9bb0b529abe01e05e3f4febc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "form_logUser.html.twig", 1);
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
        echo "<div>login
</div>
<div style=\"border:1px solid; width:300px;\">
\t<form method=\"POST\" action=\"index.php?p=loguser\"> 
\t\tName : <input type=\"text\" name=\"name\"><br>
\t\tPassword : <input type=\"password\" name=\"password\"><br>
\t\t<input type=\"submit\">
\t</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "form_logUser.html.twig";
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
