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
        echo "\t<div class=\"phrase\">Vos abonnements
\t</div>
\t<br>
\t";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "

\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "card", []));
        foreach ($context['_seq'] as $context["sub"] => $context["info"]) {
            // line 8
            echo "
\t\t<div class=\"\">
\t\t\t<div class=\"card row\">
\t\t\t\t<div class=\"col-md-3 col-md-offset-1 col-xs-4 col-xs-offset-1\">
\t\t\t\t\t<div class=\"littletext\">

\t\t\t\t\t";
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

\t\t\t\t\t";
            }
            // line 19
            echo "\t\t\t
\t\t\t\t\t";
            // line 20
            if ( !twig_test_empty($context["info"])) {
                // line 21
                echo "
\t\t\t\t\t";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "subscription", []), "name", []), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "subscription", []), "price", []), "html", null, true);
                echo "€
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-xs-3\"> 

\t\t\t\t\t";
                // line 28
                if (twig_test_empty($this->getAttribute($context["info"], "days", []))) {
                    // line 29
                    echo "
\t     \t\t\t<div class=\"littletext top-buffer2\">Aucun jours ne sont sélectionnés
\t     \t\t\t</div>


\t     \t\t\t";
                }
                // line 35
                echo "
\t\t\t\t\t";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["info"], "days", []));
                foreach ($context['_seq'] as $context["day"] => $context["hour"]) {
                    // line 37
                    echo "
\t\t\t\t\t<div class=\"littletext sizeday\"> ";
                    // line 38
                    echo twig_escape_filter($this->env, $context["day"], "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $context["hour"], "html", null, true);
                    echo "
\t\t\t\t\t</div>

\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['day'], $context['hour'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-xs-4 top-buffer\">

\t\t\t\t     <form method=\"POST\" action=\"index.php?p=subscription\">
\t\t\t\t \t\t<input type=\"hidden\" name=\"p\" value=\"subscription\">
\t\t\t\t \t\t<input type=\"hidden\" name=\"id\" value=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "subscription", []), "id", []), "html", null, true);
                echo "\">
\t\t\t\t \t\t<input type=\"hidden\" name=\"remove\" value=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "subscription", []), "id", []), "html", null, true);
                echo "\">
\t\t\t\t\t\t<input type=\"submit\" value=\"Modifier les jours de livraison\" class=\"btnprofil top-buffery3\">
\t\t\t\t\t</form>
\t\t\t\t\t<form method=\"POST\" action=\"?p=removeincard\">
\t\t\t\t \t\t<input type=\"hidden\" name=\"p\" value=\"subscription\">
\t\t\t\t \t\t<input type=\"hidden\" name=\"id\" value=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "subscription", []), "id", []), "html", null, true);
                echo "\">
\t\t\t\t \t\t<input type=\"hidden\" name=\"remove\" value=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "subscription", []), "id", []), "html", null, true);
                echo "\">
\t\t\t\t\t\t<input type=\"submit\" value=\"Supprimer du panier\" class=\"btnprofil top-buffery3\">
\t\t\t\t\t</form>
\t\t\t\t\t<br>
\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 60
            echo "\t\t\t</div>   
\t\t</div>
\t\t\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['sub'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "\t\t";
        if (twig_test_empty($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "card", []))) {
            // line 65
            echo "

\t\t<div class=\"emptycard\">Le panier est vide</div>
\t\t<div class=\"panier\"></div>

\t\t";
        } else {
            // line 71
            echo "
\t\t<form method=\"POST\" action=\"index.php?p=setcalendar\">
\t\t<input type=\"submit\" value=\"Souscrire\" class=\"btnupdate btnupdatereplace\">
\t\t</form>

\t\t";
        }
        // line 77
        echo "
";
    }

    public function getTemplateName()
    {
        return "card/listCard.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  172 => 77,  164 => 71,  156 => 65,  153 => 64,  144 => 60,  135 => 54,  131 => 53,  123 => 48,  119 => 47,  112 => 42,  100 => 38,  97 => 37,  93 => 36,  90 => 35,  82 => 29,  80 => 28,  69 => 22,  66 => 21,  64 => 20,  61 => 19,  53 => 16,  50 => 15,  48 => 14,  40 => 8,  36 => 7,  31 => 5,  26 => 2,  20 => 1,);
    }
}
