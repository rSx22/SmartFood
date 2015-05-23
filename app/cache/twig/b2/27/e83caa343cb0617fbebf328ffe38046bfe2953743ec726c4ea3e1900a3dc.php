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
        // line 48
        echo "
 <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/weekline/scripts/wl.js\"></script>";
    }

    // line 1
    public function block_body($context, array $blocks = array())
    {
        // line 2
        echo " <link rel=\"Stylesheet\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/weekline/styles/cleanslate.css\" />
 <link rel=\"Stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/weekline/styles/jquery.weekLine.css\" />
 <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/weekline/scripts/jquery.weekLine.js\"></script>



 <link rel=\"Stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/weekline/timepicker/jquery.timepicker.css\" />
 <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/weekline/timepicker/jquery.timepicker.min.js\"></script>

    <div>Nom : ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", []), "html", null, true);
        echo "</div>
    <div>Price : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", []), "html", null, true);
        echo "</div>
    <div>Description : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description", []), "html", null, true);
        echo "</div>
    <div>Indice Calorique : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "kcal_ind", []), "html", null, true);
        echo "</div>

    ";
        // line 16
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "path_image", []) != null)) {
            // line 17
            echo "\t\t <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "path_image", []), "html", null, true);
            echo "\" style=\"width:80px;height:80px;\"> 
\t";
        }
        // line 19
        echo "

";
        // line 21
        if (((isset($context["methode"]) ? $context["methode"] : null) == "showProductPage")) {
            // line 22
            echo "

<div class=\"weekselec\">Selectionner les jours de livraison<span id=\"weekCal\"></span></div>  <button data-id=\"";
            // line 24
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
            // line 35
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"btnform\"><span id=\"return\"></span>
</form>

";
        } elseif ((        // line 38
(isset($context["methode"]) ? $context["methode"] : null) == "showDelProductPage")) {
            // line 39
            echo "
\t<form method=\"POST\" action=\"index.php?p=del_item\"> 
\tHow much<input type=\"number\" name=\"nbrproduct\" min=\"0\">
\t<input type=\"submit\" value=\"remove from card\">
\t</form>

";
        }
        // line 46
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "product/product_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 46,  117 => 39,  115 => 38,  109 => 35,  95 => 24,  91 => 22,  89 => 21,  85 => 19,  77 => 17,  75 => 16,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  53 => 9,  49 => 8,  42 => 4,  38 => 3,  33 => 2,  30 => 1,  25 => 49,  22 => 48,  20 => 1,);
    }
}
