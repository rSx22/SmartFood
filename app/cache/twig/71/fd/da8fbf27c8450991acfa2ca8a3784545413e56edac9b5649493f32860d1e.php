<?php

/* addUser.html.twig */
class __TwigTemplate_71fdda8fbf27c8450991acfa2ca8a3784545413e56edac9b5649493f32860d1e extends Twig_Template
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
        echo "<p>HII USER CALLED : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", []), "html", null, true);
        echo " HAVE BEEN CREATED IN BASE</p>
<a href =\"http://localhost:8888/newproject/web/index.php\">index</a><br> ";
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
        return array (  19 => 1,);
    }
}
