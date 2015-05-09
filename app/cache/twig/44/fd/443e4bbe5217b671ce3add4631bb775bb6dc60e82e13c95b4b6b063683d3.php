<?php

/* errorUserExist.html.twig */
class __TwigTemplate_44fd443e4bbe5217b671ce3add4631bb775bb6dc60e82e13c95b4b6b063683d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_addUser.html.twig", "errorUserExist.html.twig", 1);
        $this->blocks = [
            'notif' => [$this, 'block_notif'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "form_addUser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_notif($context, array $blocks = array())
    {
        // line 3
        echo "<div>USER CALLED : ";
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
        echo " ALREADY EXIST
</div>
";
    }

    public function getTemplateName()
    {
        return "errorUserExist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
