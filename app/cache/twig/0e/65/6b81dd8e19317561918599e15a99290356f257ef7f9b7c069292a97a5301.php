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
        echo "\tList of products in Card :<br>
\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["product"]) {
            // line 5
            echo "\t\t<div style=\"border: 1px solid;\">
\t\t";
            // line 6
            if (($this->getAttribute($context["product"], "path_image", []) != null)) {
                // line 7
                echo "\t\t\t<img src=\"./../../newproject/web/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "path_image", []), "html", null, true);
                echo "\" style=\"width:80px;height:80px;\"> 
\t\t";
            }
            // line 9
            echo "\t     ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", []), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", []), "html", null, true);
            echo "€, Quantite : 
\t     \t";
            // line 10
            if (twig_test_empty($this->getAttribute($context["product"], "quantite", []))) {
                // line 11
                echo "\t     \t\tDon't forget to set ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", []), "html", null, true);
                echo "'s quantite
\t     \t";
            } else {
                // line 13
                echo "\t     \t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "quantite", []), "html", null, true);
                echo " 
\t     \t";
            }
            // line 15
            echo "\t     <br>
\t     <a href =\"http://localhost:8888/newproject/web/index.php?p=addtocard&id=";
            // line 16
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">add more to card</a><br> 
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

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 16,  67 => 15,  61 => 13,  55 => 11,  53 => 10,  46 => 9,  40 => 7,  38 => 6,  35 => 5,  31 => 4,  28 => 3,  22 => 2,  20 => 1,);
    }
}
