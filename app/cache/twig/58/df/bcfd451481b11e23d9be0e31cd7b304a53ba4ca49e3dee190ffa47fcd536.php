<?php

/* showUser.html.twig */
class __TwigTemplate_58dfbcfd451481b11e23d9be0e31cd7b304a53ba4ca49e3dee190ffa47fcd536 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<p>
    HII USER WITH ID : ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", []), "html", null, true);
        echo " = ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", []), "html", null, true);
        echo "
</p>";
    }

    public function getTemplateName()
    {
        return "showUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
