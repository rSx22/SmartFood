<?php

/* product/product_page.html.twig */
class __TwigTemplate_b227e83caa343cb0617fbebf328ffe38046bfe2953743ec726c4ea3e1900a3dc extends Twig_Template
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
        echo "<link rel=\"Stylesheet\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/js/weekline/timepicker/jquery.timepicker.css\"/>

\t\t
<div class=\"subs\">
\t<div class=\"frststep\">
\t\t<form>
\t\t\t<input type=\"button\" class=\"buttonabo1\">
\t\t\t<input type=\"button\" class=\"buttonabo2\">
\t\t\t<input type=\"button\" class=\"buttonabo3\">
\t\t</form>

\t
\t\t<div class=\"scndstep top-buffer3\">

\t\t\t<div class=\"col-md-5 col-xs-4\">

\t\t\t\t";
        // line 18
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "path_image", []) != null)) {
            // line 19
            echo "
\t\t\t\t<img src=\"";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "path_image", []), "html", null, true);
            echo "\" style=\"width:100px;height:100px;\"> 
\t\t\t\t";
        }
        // line 22
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-md-6 col-xs-8\">
\t\t\t\t<div class=\"col-md-6 col-xs-6\">
\t\t\t\t\t<div>Nom : ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", []), "html", null, true);
        echo "</div>
\t\t\t\t\t<div>Price : ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", []), "html", null, true);
        echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 col-xs-6\">
\t\t\t\t\t<div>Description : ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description", []), "html", null, true);
        echo "</div>
\t\t\t\t\t<div>Indice Calorique : ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "kcal_ind", []), "html", null, true);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 34
        if (array_key_exists("email_address", $context)) {
            // line 35
            echo "
\t\t\t<div class=\"row listday\">
\t\t\t\t<div class=\"weekselec text-center\">
\t\t\t\t\t<nav id=\"weekCal\"></nav>
\t\t\t\t</div>
\t\t\t\t<button data-id=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" id=\"btnSelect\">Valider</button>  <br>
\t\t\t</div>

\t\t\t<div class=\"row text-center\">
\t\t\t\t<form method=\"POST\" action=\"index.php?p=addtocard\" name=\"calendar\">  
\t\t\t\t<input type=\"hidden\" name=\"daychoice\" value=\"0\">
\t\t\t\t  <div class=\"form-group form-inline timez\" id='time1'>
\t\t\t\t    <label class=\"sr-only\" for=\"exampleInputAmount\">Hour</label>
\t\t\t\t    <div class=\"input-group\">
\t\t\t\t      <div class=\"input-group-addon\" id=\"timename1\" style=\"padding-right:5px;padding-left:5px;\"></div>
\t\t\t\t      <input type=\"text\" class=\"form-control timezz\" id=\"timepicker1\" name=\"timepikr1\" placeholder=\"Heure\">
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t<div class=\"form-group form-inline timez\" id='time2'>
\t\t\t\t    <label class=\"sr-only\" for=\"exampleInputAmount\">Hour</label>
\t\t\t\t    <div class=\"input-group\">
\t\t\t\t      <div class=\"input-group-addon\" id=\"timename2\" style=\"padding-right:5px;padding-left:5px;\"></div>
\t\t\t\t      <input type=\"text\" class=\"form-control timezz\" id=\"timepicker2\" name=\"timepikr2\" placeholder=\"Heure\">
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t<div class=\"form-group form-inline timez\" id='time3'>
\t\t\t\t    <label class=\"sr-only\" for=\"exampleInputAmount\">Hour</label>
\t\t\t\t    <div class=\"input-group\">
\t\t\t\t      <div class=\"input-group-addon\" id=\"timename3\" style=\"padding-right:5px;padding-left:5px;\"></div>
\t\t\t\t      <input type=\"text\" class=\"form-control timezz\" id=\"timepicker3\" name=\"timepikr3\" placeholder=\"Heure\">
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"form-group form-inline timez\" id='time4'>
\t\t\t\t    <label class=\"sr-only\" for=\"exampleInputAmount\">Hour</label>
\t\t\t\t    <div class=\"input-group\">
\t\t\t\t      <div class=\"input-group-addon\" id=\"timename4\" style=\"padding-right:5px;padding-left:5px;\"></div>
\t\t\t\t      <input type=\"text\" class=\"form-control timezz\" id=\"timepicker4\" name=\"timepikr4\" placeholder=\"Heure\">
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t<div class=\"form-group form-inline timez\" id='time5'>
\t\t\t\t    <label class=\"sr-only\" for=\"exampleInputAmount\">Hour</label>
\t\t\t\t    <div class=\"input-group\">
\t\t\t\t      <div class=\"input-group-addon\" id=\"timename5\" style=\"padding-right:5px;padding-left:5px;\"></div>
\t\t\t\t      <input type=\"text\" class=\"form-control timezz\" id=\"timepicker5\" name=\"timepikr5\" placeholder=\"Heure\">
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t<input type=\"submit\" value=\"Envoyer\" name=\"";
            // line 81
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"btnform\">

\t\t\t\t<span id=\"return\"></span>

\t\t\t\t</form>
\t\t\t</div>
\t\t\t";
        }
        // line 88
        echo "
\t\t\t";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "product/product_page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  152 => 89,  149 => 88,  137 => 81,  93 => 40,  86 => 35,  84 => 34,  78 => 31,  74 => 30,  68 => 27,  64 => 26,  58 => 22,  51 => 20,  48 => 19,  46 => 18,  26 => 2,  20 => 1,);
    }
}
