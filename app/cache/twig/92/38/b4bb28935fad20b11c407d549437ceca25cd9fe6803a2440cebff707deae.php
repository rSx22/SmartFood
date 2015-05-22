<?php

/* product/listProducts.html.twig */
class __TwigTemplate_9238b4bb28935fad20b11c407d549437ceca25cd9fe6803a2440cebff707deae extends Twig_Template
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
        $this->loadTemplate("index.html.twig", "product/listProducts.html.twig", 1)->display($context);
        // line 2
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "\tList of products in DB :<br>
\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["product"]) {
            // line 5
            echo "\t<div style=\"border: 1px solid;\">
\t";
            // line 6
            if (($this->getAttribute($context["product"], "path_image", []) != null)) {
                // line 7
                echo "\t<img src=\"";
                echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
                echo "/newproject/web/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "path_image", []), "html", null, true);
                echo "\" style=\"width:80px;height:80px;\"> 
\t";
            }
            // line 9
            echo "     ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", []), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", []), "html", null, true);
            echo "€, Indice Calorique : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "kcal_ind", []), "html", null, true);
            echo " <br>
     ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", []), "html", null, true);
            echo "<a href =\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php?p=addtocard&id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", []), "html", null, true);
            echo "\">add to card</a><br> 
     </div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t";
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "product/listProducts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 13,  57 => 10,  48 => 9,  40 => 7,  38 => 6,  35 => 5,  31 => 4,  28 => 3,  22 => 2,  20 => 1,);
    }
}
