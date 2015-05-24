<?php

/* user/help.html.twig */
class __TwigTemplate_1af1f9eeefb76fb4fcdf7b05e5a40a9380f758236a004de96345caa84be9a846 extends Twig_Template
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
        echo "\t<div class=\"text-center>>
\t\t\t";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "
\t\t<div class=\"phrase \">
\t\t\t<span class=\"black\">Un problème ? Smartfood </span>
\t\t\t<span class=\"yolo glow\">à l'écoute de vos besoins</span>
\t\t\t<div class=\"col-md-6 col-xs-6\">     

\t\t\t\tVous trouverez, ci-dessous, les réponses aux questions que vous posez le plus fréquemment à notre hotline ou au service client. Nous souhaitons vous apporter des éléments de réponse simple.
\t\t\t\t 
\t\t\t\tLes 10 questions les plus fréquentes
\t\t\t\t<div class=\"question text-left\">Comment savoir si ma commande est confirmée?</div>
\t\t\t\t<div class=\"question text-left\">Je voudrais modifier ma commande ou ajouter des plats. Comment puis-je le faire?</div>
\t\t\t\t<div class=\"question text-left\">J'ai faim ! Où en est ma commande?</div>
\t\t\t\t<div class=\"question text-left\">Comment formuler une demande spéciale avant ma commande ?</div>
\t\t\t\t<div class=\"question text-left\">Je souhaite annuler ma commande. Comment puis-je faire?</div>
\t\t\t\t<div class=\"question text-left\">Comment donner votre avis sur la commande / le restaurant ?</div>
\t\t\t\t<div class=\"question text-left\">J'ai reçu un code de réduction. Comment en profiter?</div>
\t\t\t\t<div class=\"question text-left\">Je ne suis pas satisfait de ma commande. Comment faire?</div>
\t\t\t\t<div class=\"question text-left\">Est-ce que je peux commander ou payer par téléphone ?</div>
\t\t\t</div
\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "user/help.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  26 => 2,  20 => 1,);
    }
}
