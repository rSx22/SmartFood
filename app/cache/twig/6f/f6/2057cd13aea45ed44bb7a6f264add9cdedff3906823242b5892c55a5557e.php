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
\t\t\t  <div class=\"col-md-6 barsize top-buffer1\"><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=contact\">Nous contacter</a></div>
\t\t\t  <div class=\"col-md-1 barsize top-buffer1\"><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=fb_page\"><div class=\"linkfb\" style=\"margin:auto;\"></div></a></div>
\t\t\t</div>
\t\t  <div class=\"col-md-3 col-md-offset-2 barsize top-buffer1\"><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=help\">Besoin d'aide ?</a></div>
\t\t</div>

\t\t<div class=\"container row bar1\">
\t\t  \t<div class=\"row top-buffer2\">
\t\t\t  <div class=\"col-md-4 col-md-offset-1 top-buffer1 text-center\"><a href =\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php\">LOGO</a></div>
\t\t\t  <div class=\"col-md-5 col-md-offset-1 loglink text-center\">
\t\t\t\t<div class=\"col-md-5 text-right itemloglink barloglink\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 30
        if (array_key_exists("email_address", $context)) {
            // line 31
            echo "\t\t\t\t\t<a href =\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php?p=user_page\">";
            echo twig_escape_filter($this->env, (isset($context["email_address"]) ? $context["email_address"] : null), "html", null, true);
            echo "</a>
\t\t\t\t\t";
        } else {
            // line 33
            echo "\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php?p=login\">Se connecter</a>
\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-7 text-left itemloglink otherlink\">
\t\t\t\t\t";
        // line 37
        if (array_key_exists("email_address", $context)) {
            // line 38
            echo "\t\t\t\t\t\t";
            if (array_key_exists("avatar_path", $context)) {
                // line 39
                echo "\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
                echo "/newproject/web/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "path", []), "html", null, true);
                echo "\" style=\"width:80px;height:80px;\" alt=\"Your profile picture suddenly disapeared ?!\"> 
\t\t\t\t\t\t";
            } else {
                // line 41
                echo "\t\t\t\t\t\t<img class=\"col-md-offset-3\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["root_path"]) ? $context["root_path"] : null), "html", null, true);
                echo "/newproject/web/images/avatar/default_pic.jpg\" style=\"width:80px;height:80px;margin-top:-25px;\">
\t\t\t\t\t\t";
            }
            // line 43
            echo "\t\t\t\t\t";
        } else {
            // line 44
            echo "\t\t\t\t\t<a href =\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php\">S'inscrire</a>
\t\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t\t<div class=\"col-md-offset-2 littletext logoutlink\" style=\"position:absolute;top:0;right:-20px;\">
\t\t\t\t\t";
        // line 47
        if (array_key_exists("email_address", $context)) {
            // line 48
            echo "\t\t\t\t\t\t<a href =\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php?p=logout \">Fermer la session</a>
\t\t\t\t\t";
        }
        // line 50
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t  </div>
\t\t\t  \t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container row bar2 text-center\">
\t\t\t<h2 class=\"phrase top-buffer3\">Phrase d'accroche<h2><br>
\t\t\t<div class=\"undertitle\">Livraison à emporter / Temps de livraison / Nb Restaurants part</div>
\t\t\t<div class=\"row top-buffer col-md-10 col-md-offset-1 middd\">
\t\t\t\t";
        // line 62
        if (((isset($context["methode"]) ? $context["methode"] : null) == "logUser")) {
            // line 63
            echo "
\t\t\t\t";
            // line 64
            $this->loadTemplate("user/form_logUser.html.twig", "index.html.twig", 64)->display($context);
            // line 65
            echo "
\t\t\t\t";
        } elseif ((        // line 66
(isset($context["methode"]) ? $context["methode"] : null) == "loggedUser")) {
            // line 67
            echo "
\t\t\t\t";
            // line 68
            $this->loadTemplate("user/form_logUser.html.twig", "index.html.twig", 68)->display($context);
            // line 69
            echo "
\t\t\t\t";
        } elseif ((        // line 70
(isset($context["methode"]) ? $context["methode"] : null) == "showUser")) {
            // line 71
            echo "
\t\t\t\t";
            // line 72
            $this->loadTemplate("user/user_page.html.twig", "index.html.twig", 72)->display($context);
            // line 73
            echo "        \t\t
        \t\t";
        } else {
            // line 75
            echo "
        \t\t";
            // line 76
            $this->loadTemplate("user/form_addUser.html.twig", "index.html.twig", 76)->display($context);
            // line 77
            echo "
        \t\t";
        }
        // line 79
        echo "        \t</div>
\t\t</div>
\t</div>




\t\t<div class=\"container\">
\t\t\t<h1> WELCOME GOLEFOY </h1><br>
\t\t\t<div class =\"sidebar\">
\t\t\t\t";
        // line 89
        $this->displayBlock('sidebar', $context, $blocks);
        // line 106
        echo "\t\t\t\t";
        echo twig_var_dump($this->env, $context, (isset($context["session"]) ? $context["session"] : null));
        echo "
\t\t\t\t<div>User:";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "user", []), "html", null, true);
        echo " 
\t\t\t\t";
        // line 108
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "path", []) != null)) {
            // line 109
            echo "\t\t\t\t <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "path", []), "html", null, true);
            echo "\" style=\"width:80px;height:80px;\" alt=\"Your profile picture suddenly disapeared ?!\"> <a href =\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php?p=card_list\">list products in your card</a> 
\t\t\t\t <a href =\"";
            // line 110
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php?p=user_page\">show profile</a><br>

\t\t\t\t ";
        }
        // line 113
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"content\">
\t\t            ";
        // line 116
        $this->displayBlock('body', $context, $blocks);
        // line 117
        echo "\t\t    </div>
\t\t\t<div id=\"notif\">
\t\t            ";
        // line 119
        $this->displayBlock('notif', $context, $blocks);
        // line 120
        echo "\t\t    </div>
\t\t    <div id=\"confirm\">
\t\t            ";
        // line 122
        $this->displayBlock('confirm', $context, $blocks);
        // line 123
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

    // line 89
    public function block_sidebar($context, array $blocks = array())
    {
        // line 90
        echo "\t\t\t\t\t<a href =\"";
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=user\">show user</a><br>
\t\t\t\t\t<a href =\"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=users_list\">List user in users</a><br>
\t\t\t\t\t<a href =\"";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=add_user \">Form for add user in users</a><br>
\t\t\t\t\t<a href =\"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=add_userinfo \">Form for add user info</a><br>
\t\t\t\t\t<a href =\"";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=add_avatar \">Form for add user avatar</a><br>
\t\t\t\t\t<a href =\"";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=del_user \">Form for del user in users</a><br>
\t\t\t\t\t<a href =\"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=log_user \">Form for log user in users</a><br>
\t\t\t\t\t<a href =\"";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=logout \">Clic for logout. q+</a><br><br>

\t\t\t\t\t<a href =\"";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=products_list\">list products</a><br>
\t\t\t\t\t<a href =\"";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=product\">show product</a><br>
\t\t\t\t\t<a href =\"";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=add_product\">add product</a><br>
\t\t\t\t\t<a href =\"";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=del_product\">del product</a><br>


\t\t\t\t";
    }

    // line 116
    public function block_body($context, array $blocks = array())
    {
    }

    // line 119
    public function block_notif($context, array $blocks = array())
    {
    }

    // line 122
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
        return array (  326 => 122,  321 => 119,  316 => 116,  308 => 102,  304 => 101,  300 => 100,  296 => 99,  291 => 97,  287 => 96,  283 => 95,  279 => 94,  275 => 93,  271 => 92,  267 => 91,  262 => 90,  259 => 89,  253 => 13,  245 => 123,  243 => 122,  239 => 120,  237 => 119,  233 => 117,  231 => 116,  226 => 113,  220 => 110,  211 => 109,  209 => 108,  205 => 107,  200 => 106,  198 => 89,  186 => 79,  182 => 77,  180 => 76,  177 => 75,  173 => 73,  171 => 72,  168 => 71,  166 => 70,  163 => 69,  161 => 68,  158 => 67,  156 => 66,  153 => 65,  151 => 64,  148 => 63,  146 => 62,  132 => 50,  126 => 48,  124 => 47,  121 => 46,  115 => 44,  112 => 43,  106 => 41,  98 => 39,  95 => 38,  93 => 37,  89 => 35,  83 => 33,  75 => 31,  73 => 30,  66 => 26,  58 => 21,  53 => 19,  49 => 18,  41 => 13,  35 => 10,  24 => 1,);
    }
}
