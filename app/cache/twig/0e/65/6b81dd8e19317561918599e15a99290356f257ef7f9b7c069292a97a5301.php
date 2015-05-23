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
\t<br>

\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "card", []));
        foreach ($context['_seq'] as $context["sub"] => $context["info"]) {
            // line 6
            echo "
\t\t\t<div style=\"border: 1px solid;\">

\t\t\t";
            // line 9
            if (($this->getAttribute($this->getAttribute($context["info"], "subscription", []), "path_image", []) != null)) {
                // line 10
                echo "
\t\t\t\t<img src=\"";
                // line 11
                echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
                echo "/newproject/web/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "subscription", []), "path_image", []), "html", null, true);
                echo "\" style=\"width:80px;height:80px;\"> 

\t\t\t";
            }
            // line 14
            echo "
\t\t     
\t\t\t";
            // line 16
            if (($this->getAttribute($this->getAttribute($context["info"], "subscription", []), "name", []) != null)) {
                // line 17
                echo "
\t\t\t";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "subscription", []), "name", []), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "subscription", []), "price", []), "html", null, true);
                echo "€

\t\t\t
\t


\t\t     <br>
\t\t     <form method=\"POST\" action=\"index.php?p=subscription\">
\t\t \t\t<input type=\"hidden\" name=\"p\" value=\"subscription\">
\t\t \t\t<input type=\"hidden\" name=\"id\" value=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "subscription", []), "id", []), "html", null, true);
                echo "\">
\t\t \t\t<input type=\"hidden\" name=\"remove\" value=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "subscription", []), "id", []), "html", null, true);
                echo "\">
\t\t\t\t<input type=\"submit\" value=\"Modifier les jours de livraison\" class=\"btnupdate btnupdatereplace\">
\t\t\t</form>
\t\t\t<form method=\"POST\" action=\"?p=removeincard\">
\t\t \t\t<input type=\"hidden\" name=\"p\" value=\"subscription\">
\t\t \t\t<input type=\"hidden\" name=\"id\" value=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "subscription", []), "id", []), "html", null, true);
                echo "\">
\t\t \t\t<input type=\"hidden\" name=\"remove\" value=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "subscription", []), "id", []), "html", null, true);
                echo "\">
\t\t\t\t<input type=\"submit\" value=\"Supprimer du panier\" class=\"btnupdate btnupdatereplace\">
\t\t\t</form>


\t\t\t<br>

\t\t\t";
            } else {
                // line 42
                echo "
\t\t\tLe panier est vide

\t\t\t";
            }
            // line 46
            echo "

\t\t     


\t\t";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["info"], "days", []));
            foreach ($context['_seq'] as $context["day"] => $context["hour"]) {
                // line 52
                echo "
\t\t\t";
                // line 53
                if (twig_test_empty($context["day"])) {
                    // line 54
                    echo "
\t     \t\tN'oubliez pas de saisir les jours auxquelles vous desirez etre livrer ";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "subscription", []), "name", []), "html", null, true);
                    echo "'s quantite
\t     \t";
                } else {
                    // line 57
                    echo "

\t     \t";
                }
                // line 60
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['day'], $context['hour'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['sub'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "

</div>




";
    }

    public function getTemplateName()
    {
        return "card/listCard.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  150 => 62,  144 => 61,  138 => 60,  133 => 57,  128 => 55,  125 => 54,  123 => 53,  120 => 52,  116 => 51,  109 => 46,  103 => 42,  92 => 34,  88 => 33,  80 => 28,  76 => 27,  62 => 18,  59 => 17,  57 => 16,  53 => 14,  45 => 11,  42 => 10,  40 => 9,  35 => 6,  31 => 5,  26 => 2,  20 => 1,);
    }
}
