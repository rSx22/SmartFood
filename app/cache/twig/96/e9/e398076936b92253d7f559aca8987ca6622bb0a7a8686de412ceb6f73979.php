<?php

/* user/user_page.html.twig */
class __TwigTemplate_96e9e398076936b92253d7f559aca8987ca6622bb0a7a8686de412ceb6f73979 extends Twig_Template
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
        echo "
<div class=\"row undertitle endbar\">
\t<div class=\"col-md-6\">
\t    <div>Adresse e-mail: ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email_address", []), "html", null, true);
        echo "</div>
\t    <div>Adresse: ";
        // line 6
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "address", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "address", []), "\"...\"")) : ("\"...\"")), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "city", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "city", []), "\"Ville\"")) : ("\"Ville\"")), "html", null, true);
        echo "</div>
\t    <div>Code Postal Régional: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "postal_code", []), "html", null, true);
        echo "</div>
\t</div>
\t<div class=\"col-md-6\">
\t\t<div>Age : ";
        // line 10
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "age", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "age", []), "\"...\"")) : ("\"...\"")), "html", null, true);
        echo "</div>
\t    <div>Sexe : ";
        // line 11
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "gender", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "gender", []), "\"...\"")) : ("\"...\"")), "html", null, true);
        echo "</div>
\t    <div>Numéro de Téléphone : ";
        // line 12
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "phone_number", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "phone_number", []), "\"...\"")) : ("\"...\"")), "html", null, true);
        echo "</div>

\t</div>
</div>
<div class=\"row\">
\t<div class=\"col-md-4 col-md-offset-1 top-buffer3\">
\t\t<form method=\"GET\" action=\"index.php\">
\t\t \t<input type=\"hidden\" name=\"p\" value=\"del_user\">
\t\t\t<input type=\"submit\" value=\"Supprimer le compte\" class=\"btnupdate btnupdatereplace\">
\t\t</form>
\t</div>
\t<div class=\"col-md-4 col-md-offset-2 top-buffer3\">
\t\t<form method=\"GET\" action=\"index.php\">
\t\t \t<input type=\"hidden\" name=\"p\" value=\"add_userinfo\">
\t\t\t<input type=\"submit\" value=\"Mettre à jour\" class=\"btnupdate btnupdatereplace\">
\t\t</form>
\t</div>

";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "user/user_page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  76 => 30,  55 => 12,  51 => 11,  47 => 10,  41 => 7,  35 => 6,  31 => 5,  26 => 2,  20 => 1,);
    }
}
