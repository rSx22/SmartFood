<?php

/* index.html.twig */
class __TwigTemplate_6ff62057cd13aea45ed44bb7a6f264add9cdedff3906823242b5892c55a5557e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sidebar' => [$this, 'block_sidebar'],
            'body' => [$this, 'block_body'],
            'notif' => [$this, 'block_notif'],
            'confirm' => [$this, 'block_confirm'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"./../web/css/style_index.css\">
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\">

<!-- Optional theme -->
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css\">

<!-- Latest compiled and minified JavaScript -->
\t<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/vendor/components/jquery/jquery.min.js\"></script>
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\"></script>

\t<title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<body>
\t<div class=\"container\">
\t\t<div class=\"row text-center topbarr\">
\t\t  \t<div class=\"col-md-5 col-md-offset-1 barsize\">
\t\t\t  <div class=\"col-md-6 barsize top-buffer1\">Nous contacter</div>
\t\t\t  <div class=\"col-md-6 barsize top-buffer1\">F</div>
\t\t\t</div>
\t\t  <div class=\"col-md-3 col-md-offset-2 barsize top-buffer1\">Besoin d'aide ?</div>
\t\t</div>

\t\t<div class=\"container row bar1\">
\t\t  \t<div class=\"row top-buffer\">
\t\t\t  <div class=\"col-md-3 col-md-offset-2 text-center\"><a href =\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php\">LOGO</a></div>
\t\t\t  <div class=\"col-md-3 col-md-offset-2\">
\t\t\t\t<div class=\"col-md-6 text-right\">se connec</div>
\t\t\t\t<div class=\"col-md-6 text-left\">s'inscrire</div>
\t\t\t  </div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container row bar2 text-center\">
\t\t\t<h2 class=\"phrase top-buffer3\">Phrase d'accroche<h2><br>
\t\t\t<div class=\"undertitle\">Livraison à emporter / Temps de livraison / Nb Restaurants part</div>
\t\t\t<div class=\"row top-buffer col-md-10 col-md-offset-1 middd\">

        \t\t";
        // line 38
        $this->loadTemplate("user/form_addUser.html.twig", "index.html.twig", 38)->display($context);
        // line 39
        echo "        \t</div>
\t\t</div>
\t</div>




\t\t<div class=\"container\">
\t\t\t<h1> WELCOME GOLEFOY </h1><br>
\t\t\t<div class =\"sidebar\">
\t\t\t\t";
        // line 49
        $this->displayBlock('sidebar', $context, $blocks);
        // line 66
        echo "\t\t\t\t";
        echo twig_var_dump($this->env, $context, (isset($context["session"]) ? $context["session"] : null));
        echo "
\t\t\t\t<div>User:";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "user", []), "html", null, true);
        echo " 
\t\t\t\t";
        // line 68
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "path", []) != null)) {
            // line 69
            echo "\t\t\t\t <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "path", []), "html", null, true);
            echo "\" style=\"width:80px;height:80px;\" alt=\"Your profile picture suddenly disapeared ?!\"> <a href =\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php?p=card_list\">list products in your card</a> 
\t\t\t\t <a href =\"";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php?p=user_page\">show profile</a><br>

\t\t\t\t ";
        }
        // line 73
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"content\">
\t\t            ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "\t\t    </div>
\t\t\t<div id=\"notif\">
\t\t            ";
        // line 79
        $this->displayBlock('notif', $context, $blocks);
        // line 80
        echo "\t\t    </div>
\t\t    <div id=\"confirm\">
\t\t            ";
        // line 82
        $this->displayBlock('confirm', $context, $blocks);
        // line 83
        echo "\t\t    </div>
\t\t
\t</body>

";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        echo "Test Application";
    }

    // line 49
    public function block_sidebar($context, array $blocks = array())
    {
        // line 50
        echo "\t\t\t\t\t<a href =\"";
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=user\">show user</a><br>
\t\t\t\t\t<a href =\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=users_list\">List user in users</a><br>
\t\t\t\t\t<a href =\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=add_user \">Form for add user in users</a><br>
\t\t\t\t\t<a href =\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=add_userinfo \">Form for add user info</a><br>
\t\t\t\t\t<a href =\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=add_avatar \">Form for add user avatar</a><br>
\t\t\t\t\t<a href =\"";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=del_user \">Form for del user in users</a><br>
\t\t\t\t\t<a href =\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=log_user \">Form for log user in users</a><br>
\t\t\t\t\t<a href =\"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=logout \">Clic for logout. q+</a><br><br>

\t\t\t\t\t<a href =\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=products_list\">list products</a><br>
\t\t\t\t\t<a href =\"";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=product\">show product</a><br>
\t\t\t\t\t<a href =\"";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=add_product\">add product</a><br>
\t\t\t\t\t<a href =\"";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=del_product\">del product</a><br>


\t\t\t\t";
    }

    // line 76
    public function block_body($context, array $blocks = array())
    {
    }

    // line 79
    public function block_notif($context, array $blocks = array())
    {
    }

    // line 82
    public function block_confirm($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 82,  209 => 79,  204 => 76,  196 => 62,  192 => 61,  188 => 60,  184 => 59,  179 => 57,  175 => 56,  171 => 55,  167 => 54,  163 => 53,  159 => 52,  155 => 51,  150 => 50,  147 => 49,  141 => 13,  133 => 83,  131 => 82,  127 => 80,  125 => 79,  121 => 77,  119 => 76,  114 => 73,  108 => 70,  99 => 69,  97 => 68,  93 => 67,  88 => 66,  86 => 49,  74 => 39,  72 => 38,  57 => 26,  41 => 13,  35 => 10,  24 => 1,);
    }
}
