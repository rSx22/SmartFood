<?php

/* user/listUser.html.twig */
class __TwigTemplate_f55ee4d9358c135653903271a7a6f42c6b8da426021de5abc7b63a99cc5f1c12 extends Twig_Template
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
        $this->loadTemplate("index.html.twig", "user/listUser.html.twig", 1)->display($context);
        // line 2
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "\tList of users in DB :<br>
\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["user"]) {
            // line 5
            echo "
     ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", []), "html", null, true);
            echo "<br>
\t
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "user/listUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  31 => 4,  28 => 3,  22 => 2,  20 => 1,);
    }
}
