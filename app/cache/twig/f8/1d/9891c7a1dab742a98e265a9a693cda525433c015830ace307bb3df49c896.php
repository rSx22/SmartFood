<?php

/* card/notify.html.twig */
class __TwigTemplate_f81d9891c7a1dab742a98e265a9a693cda525433c015830ace307bb3df49c896 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'notif' => [$this, 'block_notif'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if (((isset($context["methode"]) ? $context["methode"] : null) == "listCard")) {
            // line 2
            echo "
    ";
            // line 3
            $this->loadTemplate("index.html.twig", "card/notify.html.twig", 3)->display($context);
            // line 4
            echo "
";
        }
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('notif', $context, $blocks);
    }

    public function block_notif($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "card/notify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  40 => 8,  34 => 7,  31 => 6,  27 => 4,  25 => 3,  22 => 2,  20 => 1,);
    }
}
