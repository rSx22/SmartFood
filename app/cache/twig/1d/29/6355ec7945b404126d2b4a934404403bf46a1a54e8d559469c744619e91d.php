<?php

/* user/notify.html.twig */
class __TwigTemplate_1d296355ec7945b404126d2b4a934404403bf46a1a54e8d559469c744619e91d extends Twig_Template
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
        if (((isset($context["methode"]) ? $context["methode"] : null) == "logUser")) {
            // line 2
            echo "
    ";
            // line 3
            $this->loadTemplate("user/form_logUser.html.twig", "user/notify.html.twig", 3)->display($context);
            // line 4
            echo "
";
        } elseif ((        // line 5
(isset($context["methode"]) ? $context["methode"] : null) == "delUser")) {
            // line 6
            echo "
    ";
            // line 7
            $this->loadTemplate("user/form_delUser.html.twig", "user/notify.html.twig", 7)->display($context);
            // line 8
            echo "
";
        } elseif ((        // line 9
(isset($context["methode"]) ? $context["methode"] : null) == "addUser")) {
            // line 10
            echo "
    ";
            // line 11
            $this->loadTemplate("user/form_addUser.html.twig", "user/notify.html.twig", 11)->display($context);
            // line 12
            echo "
";
        } elseif ((        // line 13
(isset($context["methode"]) ? $context["methode"] : null) == "showUser")) {
            // line 14
            echo "
    ";
            // line 15
            $this->loadTemplate("user/form_showUser.html.twig", "user/notify.html.twig", 15)->display($context);
            // line 16
            echo "
";
        } elseif ((        // line 17
(isset($context["methode"]) ? $context["methode"] : null) == "addUserInfo")) {
            // line 18
            echo "
    ";
            // line 19
            $this->loadTemplate("user/form_addUserInfo.html.twig", "user/notify.html.twig", 19)->display($context);
            // line 20
            echo "
";
        } elseif ((        // line 21
(isset($context["methode"]) ? $context["methode"] : null) == "addAvatar")) {
            // line 22
            echo "
    ";
            // line 23
            $this->loadTemplate("user/form_addAvatar.html.twig", "user/notify.html.twig", 23)->display($context);
            // line 24
            echo "
";
        }
        // line 26
        echo "


";
        // line 29
        $this->displayBlock('notif', $context, $blocks);
    }

    public function block_notif($context, array $blocks = array())
    {
        // line 30
        echo "<br>";
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "user/notify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 30,  86 => 29,  81 => 26,  77 => 24,  75 => 23,  72 => 22,  70 => 21,  67 => 20,  65 => 19,  62 => 18,  60 => 17,  57 => 16,  55 => 15,  52 => 14,  50 => 13,  47 => 12,  45 => 11,  42 => 10,  40 => 9,  37 => 8,  35 => 7,  32 => 6,  30 => 5,  27 => 4,  25 => 3,  22 => 2,  20 => 1,);
    }
}
