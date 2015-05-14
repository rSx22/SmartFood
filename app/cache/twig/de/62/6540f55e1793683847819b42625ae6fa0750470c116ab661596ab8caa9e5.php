<?php

/* product/notify.html.twig */
class __TwigTemplate_de626540f55e1793683847819b42625ae6fa0750470c116ab661596ab8caa9e5 extends Twig_Template
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
        if (((isset($context["methode"]) ? $context["methode"] : null) == "addProduct")) {
            // line 2
            echo "
    ";
            // line 3
            $this->loadTemplate("product/form_addProduct.html.twig", "product/notify.html.twig", 3)->display($context);
            // line 4
            echo "
";
        } elseif ((        // line 5
(isset($context["methode"]) ? $context["methode"] : null) == "showProduct")) {
            // line 6
            echo "
    ";
            // line 7
            $this->loadTemplate("product/form_showProduct.html.twig", "product/notify.html.twig", 7)->display($context);
            // line 8
            echo "
";
        } elseif ((        // line 9
(isset($context["methode"]) ? $context["methode"] : null) == "delProduct")) {
            // line 10
            echo "
    ";
            // line 11
            $this->loadTemplate("product/form_delProduct.html.twig", "product/notify.html.twig", 11)->display($context);
            // line 12
            echo "
";
        } elseif ((        // line 13
(isset($context["methode"]) ? $context["methode"] : null) == "addToCard")) {
            // line 14
            echo "
    ";
            // line 15
            $this->loadTemplate("user/form_logUser.html.twig", "product/notify.html.twig", 15)->display($context);
            // line 16
            echo "
";
        } elseif ((        // line 17
(isset($context["methode"]) ? $context["methode"] : null) == "showProductPage")) {
            // line 18
            echo "
    ";
            // line 19
            $this->loadTemplate("product/product_page.html.twig", "product/notify.html.twig", 19)->display($context);
            // line 20
            echo "
";
        }
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('notif', $context, $blocks);
    }

    public function block_notif($context, array $blocks = array())
    {
        // line 24
        echo "
";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "product/notify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 25,  80 => 24,  74 => 23,  71 => 22,  67 => 20,  65 => 19,  62 => 18,  60 => 17,  57 => 16,  55 => 15,  52 => 14,  50 => 13,  47 => 12,  45 => 11,  42 => 10,  40 => 9,  37 => 8,  35 => 7,  32 => 6,  30 => 5,  27 => 4,  25 => 3,  22 => 2,  20 => 1,);
    }
}
