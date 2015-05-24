<?php

/* user/form_logUser.html.twig */
class __TwigTemplate_f1b61d2d0e488fb74bcf2822eac3a8ce9c0495cb9bb0b529abe01e05e3f4febc extends Twig_Template
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
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"col-md-8 col-md-offset-2 top-buffer3\">
\t<form method=\"POST\" action=\"index.php?p=login\"> 
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-7\">

\t\t\t\t <input type=\"text\" class=\"form-control top-bufferinputxt\" placeholder=\"nom@email.com\" name=\"email_address\">
\t\t\t\t <input type=\"password\" class=\"form-control top-bufferinputxt\" placeholder=\"Mot de passe\" name=\"password\"></div>
\t\t\t<div class=\"col-md-5 text-center\">
\t\t\t\t<input class=\"btnlog top-buffer3\" type=\"submit\" value=\"Se connecter\">
\t\t\t</div>

\t\t<div class=\"littletext notifyform evenmorelittle\">
\t\t\t\t";
        // line 14
        if (((isset($context["methode"]) ? $context["methode"] : null) == "loggedUser")) {
            // line 15
            echo "
\t\t\t\t ";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "
\t\t\t\t
\t\t\t\t";
        }
        // line 19
        echo "\t\t\t</div>
\t\t</div>
\t</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "user/form_logUser.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  45 => 16,  42 => 15,  40 => 14,  26 => 2,  20 => 1,);
    }
}
