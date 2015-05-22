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
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 2
        echo "\tVos abonnements
\t<div> Total card price : ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["total_price"]) ? $context["total_price"] : null), "html", null, true);
        echo "€
\t</div>
\t<br>
\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["product"]) {
            // line 7
            echo "\t\t<div style=\"border: 1px solid;\">
\t\t";
            // line 8
            if (($this->getAttribute($context["product"], "path_image", []) != null)) {
                // line 9
                echo "\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
                echo "/newproject/web/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "path_image", []), "html", null, true);
                echo "\" style=\"width:80px;height:80px;\"> 
\t\t";
            }
            // line 11
            echo "\t     ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", []), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", []), "html", null, true);
            echo "€, Quantite : 
\t     \t";
            // line 12
            if ((twig_test_empty($this->getAttribute($context["product"], "quantite", [])) || ($this->getAttribute($context["product"], "quantite", []) == "0"))) {
                // line 13
                echo "\t     \t\tDon't forget to set ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", []), "html", null, true);
                echo "'s quantite
\t     \t";
            } else {
                // line 15
                echo "\t     \t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "quantite", []), "html", null, true);
                echo " 
\t     \t";
            }
            // line 17
            echo "\t     <br>
\t     <a href =\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php?p=addtocard&id=";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">add more to card</a><br> 
\t     <a href =\"";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php?p=removeincard&id=";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">remove from card</a><br> 
\t      <a href =\"";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php?p=del_item&id=";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">lower quantite from card</a><br> 
\t     </div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "card/listCard.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  88 => 20,  82 => 19,  76 => 18,  73 => 17,  67 => 15,  61 => 13,  59 => 12,  52 => 11,  44 => 9,  42 => 8,  39 => 7,  35 => 6,  29 => 3,  26 => 2,  20 => 1,);
    }
}
