<?php

/* user/form_addUserInfo.html.twig */
class __TwigTemplate_ea4a7b4220902da609041e55bd242da9c19fa96ac34abfa02bc3ea391ff7ec9f extends Twig_Template
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
\t<form method=\"POST\" action=\"index.php?p=add_userinfo\" enctype=\"multipart/form-data\"> 
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-5\">
\t\t\t\t <input type=\"text\" class=\"form-control\" placeholder=\"Votre adresse\" name=\"address\">
\t\t\t\t <input type=\"text\" class=\"form-control top-bufferinputxt\" placeholder=\"Votre ville\" name=\"city\">
 \t\t\t\t <input type=\"text\" class=\"form-control top-bufferinputxt\" placeholder=\"Numéro de téléphone\" name=\"phone_number\">
 \t\t\t\t <input type=\"text\" class=\"form-control top-bufferinputxt\" placeholder=\"Votre age\" name=\"age\">
 \t\t\t\t <div class=\"row\">
 \t\t\t\t \t<div class=\"col-md-4\">
\t\t \t\t\t\t<div class=\"onoffswitch top-buffery5 widthresize\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"malefemaleswitch\" class=\"onoffswitch-checkbox\" id=\"myonoffswitch\">
\t\t\t\t\t\t\t\t<label class=\"onoffswitch-label\" for=\"myonoffswitch\">
\t\t\t\t\t\t\t\t<span class=\"onoffswitch-inner\"></span>
\t\t\t\t\t\t\t\t<span class=\"onoffswitch-switch\"></span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-md-offset-2 littletext top-buffer1y5 topunbuff\">Sexe
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"col-md-7 text-center littletext\">
\t\t\tAjouter une image de profil
\t\t\t<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"2097152\"\">    
\t\t\t <input type=\"file\" name=\"avatar\" class=\"btn custom-upload btnupdate top-buffery5 widthresize\">
\t\t\t<div class=\"row\">

\t\t\t";
        // line 31
        if (((isset($context["exist"]) ? $context["exist"] : null) == "true")) {
            // line 32
            echo "
\t\t\t\t<div class=\"col-md-4\">\t
\t\t\t\t\t<div class=\"confirmswitch top-buffer1 widthresize\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"confirmswitch\" class=\"confirmswitch-checkbox\" id=\"myconfirmswitch\">
\t\t\t\t\t\t<label class=\"confirmswitch-label\" for=\"myconfirmswitch\">
\t\t\t\t\t\t<span class=\"confirmswitch-inner\"></span>
\t\t\t\t\t\t<span class=\"confirmswitch-switch\"></span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div> 
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-7 col-md-offset-1 littletext top-buffer1y5\">
\t\t\t\tRemplacer l'image existante ?
\t\t\t\t</div>

\t\t\t";
        }
        // line 47
        echo "
\t\t\t</div>
\t\t\t\t<input class=\"btnupdate btnupdatereplace top-buffer2\" type=\"submit\" value=\"Mettre à jour\">
\t\t\t\t\t\t\t<div class=\"littletext notifyform top-buffer1\"> ";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "user/form_addUserInfo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 50,  76 => 47,  59 => 32,  57 => 31,  26 => 2,  20 => 1,);
    }
}
