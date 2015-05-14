<?php

/* card/listCard.html.twig */
class __TwigTemplate_0e656b81dd8e19317561918599e15a99290356f257ef7f9b7c069292a97a5301 extends Twig_Template
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
        $this->loadTemplate("index.html.twig", "card/listCard.html.twig", 1)->display($context);
        // line 2
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "\tList of products in Card : 
\t<div> Total card price : ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["total_price"]) ? $context["total_price"] : null), "html", null, true);
        echo "€
\t</div>
\t<br>
\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["product"]) {
            // line 8
            echo "\t\t<div style=\"border: 1px solid;\">
\t\t";
            // line 9
            if (($this->getAttribute($context["product"], "path_image", []) != null)) {
                // line 10
                echo "\t\t\t<img src=\"./../../newproject/web/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "path_image", []), "html", null, true);
                echo "\" style=\"width:80px;height:80px;\"> 
\t\t";
            }
            // line 12
            echo "\t     ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", []), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", []), "html", null, true);
            echo "€, Quantite : 
\t     \t";
            // line 13
            if ((twig_test_empty($this->getAttribute($context["product"], "quantite", [])) || ($this->getAttribute($context["product"], "quantite", []) == "0"))) {
                // line 14
                echo "\t     \t\tDon't forget to set ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", []), "html", null, true);
                echo "'s quantite
\t     \t";
            } else {
                // line 16
                echo "\t     \t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "quantite", []), "html", null, true);
                echo " 
\t     \t";
            }
            // line 18
            echo "\t     <br>
\t     <a href =\"http://localhost:8888/newproject/web/index.php?p=addtocard&id=";
            // line 19
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">add more to card</a><br> 
\t     <a href =\"http://localhost:8888/newproject/web/index.php?p=removeincard&id=";
            // line 20
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">remove from card</a><br> 
\t      <a href =\"http://localhost:8888/newproject/web/index.php?p=del_item&id=";
            // line 21
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">lower quantite from card</a><br> 
\t     </div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t";
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "card/listCard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 24,  84 => 21,  80 => 20,  76 => 19,  73 => 18,  67 => 16,  61 => 14,  59 => 13,  52 => 12,  46 => 10,  44 => 9,  41 => 8,  37 => 7,  31 => 4,  28 => 3,  22 => 2,  20 => 1,);
    }
}
