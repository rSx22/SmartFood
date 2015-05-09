<?php

/* showUser.html.twig */
class __TwigTemplate_58dfbcfd451481b11e23d9be0e31cd7b304a53ba4ca49e3dee190ffa47fcd536 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_showUser.html.twig", "showUser.html.twig", 1);
        $this->blocks = [
            'notif' => [$this, 'block_notif'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "form_showUser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_notif($context, array $blocks = array())
    {
        // line 3
        echo "<div>
    HII USER WITH ID : ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", []), "html", null, true);
        echo " = ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", []), "html", null, true);
        echo "
</div>
";
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
        return array (  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
