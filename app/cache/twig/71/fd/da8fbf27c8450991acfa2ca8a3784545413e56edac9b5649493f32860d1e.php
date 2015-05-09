<?php

/* addUser.html.twig */
class __TwigTemplate_71fdda8fbf27c8450991acfa2ca8a3784545413e56edac9b5649493f32860d1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_addUser.html.twig", "addUser.html.twig", 1);
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
        echo "<div>HII USER CALLED : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", []), "html", null, true);
        echo " HAVE BEEN CREATED IN BASE
</div>
";
    }

    public function getTemplateName()
    {
        return "addUser.html.twig";
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
