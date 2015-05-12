<?php

/* user/form_addUserInfo.html.twig */
class __TwigTemplate_ea4a7b4220902da609041e55bd242da9c19fa96ac34abfa02bc3ea391ff7ec9f extends Twig_Template
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
        $this->loadTemplate("index.html.twig", "user/form_addUserInfo.html.twig", 1)->display($context);
        // line 2
        $this->displayBlock('body', $context, $blocks);
        // line 25
        $this->loadTemplate("user/form_addAvatar.html.twig", "user/form_addUserInfo.html.twig", 25)->display($context);
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div>Add user</div>
<div style=\"border:1px solid; width:300px;\">
\t<form method=\"POST\" action=\"index.php?p=add_userinfo\"> 
\t\tEmail : <input type=\"text\" name=\"email\"><br>
\t\tAdress : <input type=\"text\" name=\"address\"><br>
\t\tCity : <input type=\"text\" name=\"city\"><br>
\t\tCountry : <input type=\"text\" name=\"country\"><br>
\t\tPhone Number : <input type=\"text\" name=\"phone_number\"><br>
\t\tAge : <input type=\"number\" name=\"age\"><br>
\t\tGender :

\t\t\t\t<div class=\"onoffswitch\">
    \t\t\t<input type=\"checkbox\" name=\"malefemaleswitch\" class=\"onoffswitch-checkbox\" id=\"myonoffswitch\" checked>
    \t\t\t<label class=\"onoffswitch-label\" for=\"myonoffswitch\">
        \t\t<span class=\"onoffswitch-inner\"></span>
        \t\t<span class=\"onoffswitch-switch\"></span>
    \t\t\t</label>
\t\t\t\t</div>
\t\t<input type=\"submit\">
\t</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "user/form_addUserInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  24 => 25,  22 => 2,  20 => 1,);
    }
}
