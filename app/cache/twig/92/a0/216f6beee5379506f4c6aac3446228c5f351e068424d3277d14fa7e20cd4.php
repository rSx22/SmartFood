<?php

/* user/form_addAvatar.html.twig */
class __TwigTemplate_92a0216f6beee5379506f4c6aac3446228c5f351e068424d3277d14fa7e20cd4 extends Twig_Template
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
        if (((isset($context["methode"]) ? $context["methode"] : null) == "addAvatar")) {
            // line 2
            echo "
    ";
            // line 3
            $this->loadTemplate("index.html.twig", "user/form_addAvatar.html.twig", 3)->display($context);
            // line 4
            echo "
";
        }
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<div>Add your Avatar picture</div>
<div style=\"border:1px solid; width:300px;\">

\t";
        // line 11
        if (((isset($context["methode"]) ? $context["methode"] : null) == "addAvatar")) {
            // line 12
            echo "
    \t<form method=\"POST\" action=\"index.php?p=add_avatar\" enctype=\"multipart/form-data\">  
    ";
        } elseif ((        // line 14
(isset($context["methode"]) ? $context["methode"] : null) == "addUserInfo")) {
            // line 15
            echo "    \t<form method=\"POST\" action=\"index.php?p=add_userinfo\" enctype=\"multipart/form-data\"> 
\t";
        }
        // line 17
        echo "   
\t<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"2097152\"\">    
\t\tAvatar : <input type=\"file\" name=\"avatar\"><br>
\t\t

</div>
";
        // line 23
        if (((isset($context["confirm"]) ? $context["confirm"] : null) == "true")) {
            // line 24
            echo " 
<div>You already have an avatar, want to remplace it ?</div>
\t<div class=\"confirmswitch\">
\t\t<input type=\"checkbox\" name=\"confirmswitch\" class=\"confirmswitch-checkbox\" id=\"myconfirmswitch\">
\t\t<label class=\"confirmswitch-label\" for=\"myconfirmswitch\">
\t\t<span class=\"confirmswitch-inner\"></span>
\t\t<span class=\"confirmswitch-switch\"></span>
\t\t</label>
\t</div>


";
        }
        // line 36
        echo "<input type=\"submit\"  value=\"Upload picture\">
</form>
</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "user/form_addAvatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 36,  67 => 24,  65 => 23,  57 => 17,  53 => 15,  51 => 14,  47 => 12,  45 => 11,  40 => 8,  34 => 7,  31 => 6,  27 => 4,  25 => 3,  22 => 2,  20 => 1,);
    }
}
