<?php

/* user/user_page.html.twig */
class __TwigTemplate_384937dc4c6958a216892b027591057281b7c35913e971cd2b515b08db113495 extends Twig_Template
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
        echo " en ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "country", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "country", []), "\"Pays\"")) : ("\"Pays\"")), "html", null, true);
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
<div class=\"col-md-4 col-md-offset-6 top-buffer3\">
\t<form action=\"index.php?p=add_userinfo\">
\t\t<input type=\"submit\" value=\"Mettre à jour\" class=\"btnupdate\">
\t</form>
</div>

";
        // line 22
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
        return array (  70 => 22,  57 => 12,  53 => 11,  49 => 10,  43 => 7,  35 => 6,  31 => 5,  26 => 2,  20 => 1,);
    }
}
