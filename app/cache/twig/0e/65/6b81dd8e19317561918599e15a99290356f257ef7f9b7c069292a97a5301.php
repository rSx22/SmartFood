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

\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "card", []));
        foreach ($context['_seq'] as $context["sub"] => $context["info"]) {
            // line 7
            echo "
\t\t\t<div class=\"\">
\t\t\t<div class=\"card row\">
\t\t\t<div class=\"col-md-3 col-md-offset-1 col-xs-4 col-xs-offset-1\">


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
            echo "\t\t\t";
            if ( !twig_test_empty($context["info"])) {
                // line 20
                echo "
\t\t\t\t";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "subscription", []), "name", []), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "subscription", []), "price", []), "html", null, true);
                echo "€
\t\t\t</div>

\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-xs-3\" > 
\t\t\t";
                // line 27
                if (twig_test_empty($this->getAttribute($context["info"], "days", []))) {
                    // line 28
                    echo "
\t     \t<div class=\"littletext top-buffer2\">Aucun jours ne sont sélectionnés</div>
\t     \t";
                } else {
                    // line 31
                    echo "

\t     \t";
                }
                // line 34
                echo "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["info"], "days", []));
                foreach ($context['_seq'] as $context["day"] => $context["hour"]) {
                    // line 35
                    echo "\t\t\t<div class=\"littletext dayz\" style=\"min-width:95px;\"> ";
                    echo twig_escape_filter($this->env, $context["day"], "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $context["hour"], "html", null, true);
                    echo "
\t\t\t</div>

\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['day'], $context['hour'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-xs-4 top-buffer\">

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
\t\t\t\t<input type=\"submit\" value=\"Modifier les jours de livraison\" class=\"btnprofil top-buffery3\">
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
\t\t\t\t<input type=\"submit\" value=\"Supprimer du panier\" class=\"btnprofil top-buffery3\">
\t\t\t</form>


\t\t\t<br>
\t\t\t";
            }
            // line 58
            echo "
\t\t\t</div>
</div>
\t\t     
</div>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['sub'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "\t\t\t";
        if (twig_test_empty($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "card", []))) {
            // line 66
            echo "
\t\t\t<div class=\"emptycard\">Le panier est vide</div>
\t\t\t<div class=\"panier\"></div>

\t\t\t";
        } else {
            // line 71
            echo "
\t\t\t<form method=\"POST\" action=\"index.php?p=setcalendar\">
\t\t\t<input type=\"submit\" value=\"Souscrire\" class=\"btnupdate top-buffer1\">
\t\t\t</form>

\t\t\t";
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
        return array (  171 => 77,  163 => 71,  156 => 66,  153 => 65,  141 => 58,  131 => 51,  127 => 50,  119 => 45,  115 => 44,  108 => 39,  95 => 35,  90 => 34,  85 => 31,  80 => 28,  78 => 27,  67 => 21,  64 => 20,  61 => 19,  53 => 16,  50 => 15,  48 => 14,  39 => 7,  35 => 6,  30 => 4,  26 => 2,  20 => 1,);
    }
}
