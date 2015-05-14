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
        $this->loadTemplate("index.html.twig", "product/product_page.html.twig", 1)->display($context);
        // line 2
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "

    <div>Nom : ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", []), "html", null, true);
        echo "</div>
    <div>Price : ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", []), "html", null, true);
        echo "</div>
    <div>Description : ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description", []), "html", null, true);
        echo "</div>
    <div>Indice Calorique : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "kcal_ind", []), "html", null, true);
        echo "</div>

    ";
        // line 10
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "path_image", []) != null)) {
            // line 11
            echo "\t\t <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "path_image", []), "html", null, true);
            echo "\" style=\"width:80px;height:80px;\"> 
\t";
        }
        // line 13
        echo "

";
        // line 15
        if (((isset($context["methode"]) ? $context["methode"] : null) == "showProductPage")) {
            // line 16
            echo "
\t<form method=\"POST\" action=\"index.php?p=addtocard\"> 
\tHow much<input type=\"number\" name=\"nbrproduct\">
\t<input type=\"submit\" value=\"add to card\">
\t</form>

";
        } elseif ((        // line 22
(isset($context["methode"]) ? $context["methode"] : null) == "showDelProductPage")) {
            // line 23
            echo "
\t<form method=\"POST\" action=\"index.php?p=del_item\"> 
\tHow much<input type=\"number\" name=\"nbrproduct\">
\t<input type=\"submit\" value=\"remove from card\">
\t</form>

";
        }
        // line 30
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
        return array (  84 => 30,  75 => 23,  73 => 22,  65 => 16,  63 => 15,  59 => 13,  51 => 11,  49 => 10,  44 => 8,  40 => 7,  36 => 6,  32 => 5,  28 => 3,  22 => 2,  20 => 1,);
    }
}
