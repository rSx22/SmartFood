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
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/js/weekline/styles/jquery.weekLine.css\"/>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/js/weekline/styles/cleanslate.css\"/>
<link rel=\"Stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/js/weekline/timepicker/jquery.timepicker.css\" />


    <div>Nom : ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", []), "html", null, true);
        echo "</div>
    <div>Price : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", []), "html", null, true);
        echo "</div>
    <div>Description : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description", []), "html", null, true);
        echo "</div>
    <div>Indice Calorique : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "kcal_ind", []), "html", null, true);
        echo "</div>

    ";
        // line 12
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "path_image", []) != null)) {
            // line 13
            echo "\t\t <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "path_image", []), "html", null, true);
            echo "\" style=\"width:80px;height:80px;\"> 
\t";
        }
        // line 15
        echo "

";
        // line 17
        if (((isset($context["methode"]) ? $context["methode"] : null) == "showProductPage")) {
            // line 18
            echo "

<div class=\"weekselec\">Selectionner les jours de livraison<span id=\"weekCal\"></span></div>  <button data-id=\"";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" id=\"btnSelect\">Valider</button>  <br>



<form method=\"POST\" action=\"index.php?p=addtocard\" name=\"calendar\">  
<input type=\"hidden\" name=\"daychoice\" value=\"0\" />
<div id=\"time0\"> <div id=\"timename0\"></div><input type=\"text\" id=\"timepicker0\" name=\"timepikr0\"><span id=\"daytimechoice0\"></span></div><br>
<div id=\"time1\"> <div id=\"timename1\"></div><input type=\"text\" id=\"timepicker1\" name=\"timepikr1\"><span id=\"daytimechoice1\"></span></div><br>
<div id=\"time2\"> <div id=\"timename2\"></div><input type=\"text\" id=\"timepicker2\" name=\"timepikr2\"><span id=\"daytimechoice2\"></span></div><br>
<div id=\"time3\"> <div id=\"timename3\"></div><input type=\"text\" id=\"timepicker3\" name=\"timepikr3\"><span id=\"daytimechoice3\"></span></div><br>
<div id=\"time4\"> <div id=\"timename4\"></div><input type=\"text\" id=\"timepicker4\" name=\"timepikr4\"><span id=\"daytimechoice4\"></span></div><br>
<input type=\"submit\" value=\"Envoyer\" name=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"btnform\"><span id=\"return\"></span>
</form>

";
        } elseif ((        // line 34
(isset($context["methode"]) ? $context["methode"] : null) == "showDelProductPage")) {
            // line 35
            echo "
\t<form method=\"POST\" action=\"index.php?p=del_item\"> 
\tHow much<input type=\"number\" name=\"nbrproduct\" min=\"0\">
\t<input type=\"submit\" value=\"remove from card\">
\t</form>

";
        }
        // line 42
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "product/product_page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  109 => 42,  100 => 35,  98 => 34,  92 => 31,  78 => 20,  74 => 18,  72 => 17,  68 => 15,  60 => 13,  58 => 12,  53 => 10,  49 => 9,  45 => 8,  41 => 7,  35 => 4,  31 => 3,  26 => 2,  20 => 1,);
    }
}
