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
        echo "\t<div class=\"phrase\">Vos abonnements</div>
\t<br>
\t";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "
\t<br>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "card", []));
        foreach ($context['_seq'] as $context["sub"] => $context["info"]) {
            // line 7
            echo "
\t\t\t<div class=\"\">
\t\t\t<div class=\"card row\">
\t\t\t<div class=\"col-md-4\">


\t\t\t<div class=\"littletext\">
\t\t\t\t";
            // line 14
            if (($this->getAttribute($this->getAttribute($context["info"], "subscription", []), "path_image", []) != null)) {
                // line 15
                echo "
\t\t\t\t\t<img src=\"";
                // line 16
                echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
                echo "/newproject/web/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "subscription", []), "path_image", []), "html", null, true);
                echo "\" style=\"width:80px;height:80px;\"> 

\t\t\t\t";
            }
            // line 19
            echo "\t\t\t     
\t\t\t";
            // line 20
            if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["info"], "subscription", []), "name", []))) {
                // line 21
                echo "
\t\t\t\t";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "subscription", []), "name", []), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "subscription", []), "price", []), "html", null, true);
                echo "€
\t\t\t</div>

\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-md-4\"> 
\t\t\t";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["info"], "days", []));
                foreach ($context['_seq'] as $context["day"] => $context["hour"]) {
                    // line 29
                    echo "\t\t\t<div class=\"littletext\"> ";
                    echo twig_escape_filter($this->env, $context["day"], "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $context["hour"], "html", null, true);
                    echo "
\t\t\t</div>
\t\t\t";
                    // line 31
                    if (twig_test_empty($context["day"])) {
                        // line 32
                        echo "
\t     \t\tN'oubliez pas de saisir les jours auxquelles vous desirez etre livrer ";
                        // line 33
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "subscription", []), "name", []), "html", null, true);
                        echo "
\t     \t";
                    } else {
                        // line 35
                        echo "

\t     \t";
                    }
                    // line 38
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['day'], $context['hour'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "\t\t\t</div>
\t\t\t<div class=\"col-md-4\">

\t\t     <form method=\"POST\" action=\"index.php?p=subscription\">
\t\t \t\t<input type=\"hidden\" name=\"p\" value=\"subscription\">
\t\t \t\t<input type=\"hidden\" name=\"id\" value=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "subscription", []), "id", []), "html", null, true);
                echo "\">
\t\t \t\t<input type=\"hidden\" name=\"remove\" value=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "subscription", []), "id", []), "html", null, true);
                echo "\">
\t\t\t\t<input type=\"submit\" value=\"Modifier les jours de livraison\" class=\"btnupdate top-buffery3\">
\t\t\t</form>
\t\t\t<form method=\"POST\" action=\"?p=removeincard\">
\t\t \t\t<input type=\"hidden\" name=\"p\" value=\"subscription\">
\t\t \t\t<input type=\"hidden\" name=\"id\" value=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "subscription", []), "id", []), "html", null, true);
                echo "\">
\t\t \t\t<input type=\"hidden\" name=\"remove\" value=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "subscription", []), "id", []), "html", null, true);
                echo "\">
\t\t\t\t<input type=\"submit\" value=\"Supprimer du panier\" class=\"btnupdate top-buffery3\">
\t\t\t</form>


\t\t\t<br>

\t\t\t";
            } else {
                // line 59
                echo "
\t\t\tLe panier est vide

\t\t\t";
            }
            // line 63
            echo "\t\t\t</div>
</div>
\t\t     
</div>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['sub'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
\t\t<form method=\"POST\" action=\"index.php?p=setcalendar\">
\t\t\t<input type=\"submit\" value=\"Souscrire\" class=\"btnupdate btnupdatereplace\">
\t\t</form>







";
    }

    public function getTemplateName()
    {
        return "card/listCard.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  164 => 69,  153 => 63,  147 => 59,  136 => 51,  132 => 50,  124 => 45,  120 => 44,  113 => 39,  107 => 38,  102 => 35,  97 => 33,  94 => 32,  92 => 31,  84 => 29,  80 => 28,  69 => 22,  66 => 21,  64 => 20,  61 => 19,  53 => 16,  50 => 15,  48 => 14,  39 => 7,  35 => 6,  30 => 4,  26 => 2,  20 => 1,);
    }
}
