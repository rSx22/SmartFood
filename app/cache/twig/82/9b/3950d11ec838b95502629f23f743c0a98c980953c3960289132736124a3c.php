<?php

/* user/form_addUser.html.twig */
class __TwigTemplate_829b3950d11ec838b95502629f23f743c0a98c980953c3960289132736124a3c extends Twig_Template
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
\t<form method=\"POST\" action=\"index.php?p=add_user\"> 
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-7\">
\t\t\t\t <input type=\"text\" class=\"form-control\" placeholder=\"Code postal régional - Ex : 75200\" name=\"codepost\">
\t\t\t\t <input type=\"text\" class=\"form-control top-bufferinputxt\" placeholder=\"nom@email.com\" name=\"email\">
\t\t\t\t <div class=\"row\">
\t\t\t\t\t  <div class=\"col-xs-6\">
\t\t\t\t\t    <input type=\"password\" class=\"form-control top-bufferinputxt\" placeholder=\"Mot de passe\" name=\"password\"></div>
\t\t\t\t\t  <div class=\"col-xs-6\">
\t\t\t\t\t    <input type=\"password\" class=\"form-control top-bufferinputxt\" placeholder=\"Confirmer\" name=\"password_check\"></div>
\t\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"confirmswitch top-buffer1\">
\t\t\t\t\t<input type=\"checkbox\" name=\"confirmswitch\" class=\"confirmswitch-checkbox\" id=\"myconfirmswitch\">
\t\t\t\t\t<label class=\"confirmswitch-label\" for=\"myconfirmswitch\">
\t\t\t\t\t<span class=\"confirmswitch-inner\"></span>
\t\t\t\t\t<span class=\"confirmswitch-switch\"></span>
\t\t\t\t\t</label>
\t\t\t\t\t</div> 
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 littletext col-md-offset-2\" style=\"position:absolute;width:240px;bottom:5px;left:80px\">
\t\t\t\t\t J'accepte les conditions générales d'utilisation et l'utilisation de cookies
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-5 text-center\">
\t\t\t<div class=\"littletext notifyform\"> ";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t\t<input class=\"btninscript btninscript1\" type=\"submit\" value=\"S'inscrire\">
\t\t\t</div>
\t\t</div>
\t</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "user/form_addUser.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  56 => 30,  26 => 2,  20 => 1,);
    }
}
