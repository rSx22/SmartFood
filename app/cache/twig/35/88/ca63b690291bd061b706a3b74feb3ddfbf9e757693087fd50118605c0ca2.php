<?php

/* user/confirm.html.twig */
class __TwigTemplate_3588ca63b690291bd061b706a3b74feb3ddfbf9e757693087fd50118605c0ca2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'confirm' => [$this, 'block_confirm'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if (((isset($context["methode"]) ? $context["methode"] : null) == "addAvatar")) {
            // line 2
            echo "
    ";
            // line 3
            $this->loadTemplate("user/form_addAvatar.html.twig", "user/confirm.html.twig", 3)->display($context);
            // line 4
            echo "
";
        } else {
            // line 6
            echo "

";
        }
        // line 9
        echo "

";
        // line 11
        $this->displayBlock('confirm', $context, $blocks);
    }

    public function block_confirm($context, array $blocks = array())
    {
        // line 12
        echo "<form method=\"POST\" action=\"index.php?p=add_avatar\"> 

\t<div class=\"confirmswitch\">
\t\t<input type=\"checkbox\" name=\"confirmswitch\" class=\"confirmswitch-checkbox\" id=\"myconfirmswitch\" checked>
\t\t<label class=\"confirmswitch-label\" for=\"myconfirmswitch\">
\t\t<span class=\"confirmswitch-inner\"></span>
\t\t<span class=\"confirmswitch-switch\"></span>
\t\t</label>
\t</div>
\t<input type=\"submit\" value=\"valider\">
</form>
";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "user/confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 23,  46 => 12,  40 => 11,  36 => 9,  31 => 6,  27 => 4,  25 => 3,  22 => 2,  20 => 1,);
    }
}
