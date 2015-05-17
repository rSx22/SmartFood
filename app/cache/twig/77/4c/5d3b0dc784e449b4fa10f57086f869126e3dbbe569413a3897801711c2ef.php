<?php

/* index.html.twig */
class __TwigTemplate_774c5d3b0dc784e449b4fa10f57086f869126e3dbbe569413a3897801711c2ef extends Twig_Template
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
\t<meta http-equiv=\"content-language\" content=\"fr-FR\" />
\t<meta name='language' content='fr-FR'>
\t<meta name='revised' content='Saturday, May 16th, 2015, 5:15 pm'>
\t<meta name='category' content=''>
\t<meta name='coverage' content='Worldwide'>
\t<meta name='distribution' content='Global'>
\t<meta name='rating' content='General'>
\t<meta name='revisit-after' content='7 days'>
\t<meta name='designer' content='Clara Koscielniak, Amaury Vallot'>
\t<meta name='pagename' content='Page Commercial de la marque restoklm'>
\t<meta name='author' content='TheophaneCusenza, theo.cusenza@free.fr'>
\t<meta name='target' content='all'>
\t<meta name='HandheldFriendly' content='True'>
\t<meta name='MobileOptimized' content='320'>
\t<meta http-equiv='Cache-Control' content='no-cache'>
\t<meta http-equiv='imagetoolbar' content='no'>
\t<meta http-equiv='x-dns-prefetch-control' content='off'>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"./../web/css/style_index.css\">
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\">

<!-- Optional theme -->
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css\">

<!-- Latest compiled and minified JavaScript -->
\t<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/vendor/components/jquery/jquery.min.js\"></script>
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\"></script>

\t<title>";
        // line 30
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<body>
\t<div class=\"container\">
\t\t<div class=\"row text-center topbarr\">
\t\t  \t<div class=\"col-md-5 col-md-offset-1 barsize\">
\t\t\t  <div class=\"col-md-6 barsize top-buffer1\"><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=contact\">Nous contacter</a></div>
\t\t\t  <div class=\"col-md-1 barsize top-buffer1\"><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=fb_page\"><div class=\"linkfb\" style=\"margin:auto;\"></div></a></div>
\t\t\t</div>
\t\t  <div class=\"col-md-3 col-md-offset-2 barsize top-buffer1\"><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=help\">Besoin d'aide ?</a></div>
\t\t</div>

\t\t<div class=\"container row bar1\">
\t\t  \t<div class=\"row top-buffer2\">
\t\t\t  <div class=\"col-md-4 col-md-offset-1 top-buffer1 text-center\"><a href =\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php\">LOGO</a></div>
\t\t\t  <div class=\"col-md-5 col-md-offset-1 loglink text-center\">
\t\t\t\t<div class=\"col-md-5 text-right itemloglink barloglink\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 47
        if (array_key_exists("email_address", $context)) {
            // line 48
            echo "\t\t\t\t\t\t";
            if ((twig_length_filter($this->env, (isset($context["email_address"]) ? $context["email_address"] : null)) < 16)) {
                // line 49
                echo "\t\t\t\t\t\t<a href =\"";
                echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
                echo "/newproject/web/index.php?p=user_page\">";
                echo twig_escape_filter($this->env, (isset($context["email_address"]) ? $context["email_address"] : null), "html", null, true);
                echo "</a>
\t\t\t\t\t\t";
            } elseif ((twig_length_filter($this->env,             // line 50
(isset($context["email_address"]) ? $context["email_address"] : null)) > 16)) {
                // line 51
                echo "\t\t\t\t\t\t<a href =\"";
                echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
                echo "/newproject/web/index.php?p=user_page\">";
                echo twig_escape_filter($this->env, (isset($context["email_address_shortened"]) ? $context["email_address_shortened"] : null), "html", null, true);
                echo "</a>
\t\t\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t\t";
        } else {
            // line 54
            echo "\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php?p=login\">Se connecter</a>
\t\t\t\t\t";
        }
        // line 56
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-7 text-left itemloglink otherlink\">
\t\t\t\t\t";
        // line 58
        if (array_key_exists("email_address", $context)) {
            // line 59
            echo "\t\t\t\t\t\t";
            if (array_key_exists("path", $context)) {
                // line 60
                echo "\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, (isset($context["root_path"]) ? $context["root_path"] : null), "html", null, true);
                echo "/newproject/web/";
                echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
                echo "\" class=\"img\" alt=\"Your profile picture suddenly disapeared ?!\"> 
\t\t\t\t\t\t";
            } else {
                // line 62
                echo "\t\t\t\t\t\t<img class=\"img\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["root_path"]) ? $context["root_path"] : null), "html", null, true);
                echo "/newproject/web/images/avatar/default_pic.jpg\">
\t\t\t\t\t\t";
            }
            // line 64
            echo "\t\t\t\t\t";
        } else {
            // line 65
            echo "\t\t\t\t\t<a href =\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php\">S'inscrire &nbsp;&nbsp;&nbsp;</a>
\t\t\t\t\t";
        }
        // line 67
        echo "\t\t\t\t\t<div class=\"col-md-offset-2 littletext logoutlink\" style=\"position:absolute;top:0;right:-20px;\">
\t\t\t\t\t";
        // line 68
        if (array_key_exists("email_address", $context)) {
            // line 69
            echo "\t\t\t\t\t\t<a href =\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php?p=logout \">Fermer la session</a>
\t\t\t\t\t";
        }
        // line 71
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t  </div>
\t\t\t  \t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container row bar2 text-center\">
\t\t\t<h2 class=\"phrase top-buffer3\">Phrase d'accroche<h2><br>
\t\t\t<div class=\"undertitle\">Livraison à emporter / Temps de livraison / Nb Restaurants partenaires / Nombre de spécialtés</div>
\t\t\t<div class=\"row top-buffer col-md-10 col-md-offset-1 middd\">
\t\t\t\t";
        // line 83
        if (((isset($context["methode"]) ? $context["methode"] : null) == "logUser")) {
            // line 84
            echo "
\t\t\t\t";
            // line 85
            $this->loadTemplate("user/form_logUser.html.twig", "index.html.twig", 85)->display($context);
            // line 86
            echo "
\t\t\t\t";
        } elseif ((        // line 87
(isset($context["methode"]) ? $context["methode"] : null) == "loggedUser")) {
            // line 88
            echo "
\t\t\t\t";
            // line 89
            $this->loadTemplate("user/form_logUser.html.twig", "index.html.twig", 89)->display($context);
            // line 90
            echo "
\t\t\t\t";
        } elseif ((        // line 91
(isset($context["methode"]) ? $context["methode"] : null) == "showUser")) {
            // line 92
            echo "
\t\t\t\t";
            // line 93
            $this->loadTemplate("user/user_page.html.twig", "index.html.twig", 93)->display($context);
            // line 94
            echo "
\t\t\t\t";
        } elseif ((        // line 95
(isset($context["methode"]) ? $context["methode"] : null) == "addUserInfo")) {
            // line 96
            echo "
\t\t\t\t";
            // line 97
            $this->loadTemplate("user/form_addUserInfo.html.twig", "index.html.twig", 97)->display($context);
            // line 98
            echo "        \t\t
        \t\t";
        } else {
            // line 100
            echo "
        \t\t";
            // line 101
            $this->loadTemplate("user/form_addUser.html.twig", "index.html.twig", 101)->display($context);
            // line 102
            echo "
        \t\t";
        }
        // line 104
        echo "        \t</div>
\t\t</div>
\t</div>




\t\t<div class=\"container\">
\t\t\t<h1> WELCOME</h1><br>
\t\t\t<div class =\"sidebar\">
\t\t\t\t";
        // line 114
        $this->displayBlock('sidebar', $context, $blocks);
        // line 131
        echo "\t\t\t\t";
        echo twig_var_dump($this->env, $context, (isset($context["session"]) ? $context["session"] : null));
        echo "
\t\t\t\t<div>User:";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "user", []), "html", null, true);
        echo " 
\t\t\t\t";
        // line 133
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "path", []) != null)) {
            // line 134
            echo "\t\t\t\t <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "path", []), "html", null, true);
            echo "\" style=\"width:80px;height:80px;\" alt=\"Your profile picture suddenly disapeared ?!\"> <a href =\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php?p=card_list\">list products in your card</a> 
\t\t\t\t <a href =\"";
            // line 135
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php?p=user_page\">show profile</a><br>

\t\t\t\t ";
        }
        // line 138
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"content\">
\t\t            ";
        // line 141
        $this->displayBlock('body', $context, $blocks);
        // line 142
        echo "\t\t    </div>
\t\t\t<div id=\"notif\">
\t\t            ";
        // line 144
        $this->displayBlock('notif', $context, $blocks);
        // line 145
        echo "\t\t    </div>
\t\t    <div id=\"confirm\">
\t\t            ";
        // line 147
        $this->displayBlock('confirm', $context, $blocks);
        // line 148
        echo "\t\t    </div>
\t\t
\t</body>

";
    }

    // line 30
    public function block_title($context, array $blocks = array())
    {
        echo "Test Application";
    }

    // line 114
    public function block_sidebar($context, array $blocks = array())
    {
        // line 115
        echo "\t\t\t\t\t<a href =\"";
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=user\">show user</a><br>
\t\t\t\t\t<a href =\"";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=users_list\">List user in users</a><br>
\t\t\t\t\t<a href =\"";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=add_user \">Form for add user in users</a><br>
\t\t\t\t\t<a href =\"";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=add_userinfo \">Form for add user info</a><br>
\t\t\t\t\t<a href =\"";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=add_avatar \">Form for add user avatar</a><br>
\t\t\t\t\t<a href =\"";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=del_user \">Form for del user in users</a><br>
\t\t\t\t\t<a href =\"";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=log_user \">Form for log user in users</a><br>
\t\t\t\t\t<a href =\"";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=logout \">Clic for logout. q+</a><br><br>

\t\t\t\t\t<a href =\"";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=products_list\">list products</a><br>
\t\t\t\t\t<a href =\"";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=product\">show product</a><br>
\t\t\t\t\t<a href =\"";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=add_product\">add product</a><br>
\t\t\t\t\t<a href =\"";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=del_product\">del product</a><br>


\t\t\t\t";
    }

    // line 141
    public function block_body($context, array $blocks = array())
    {
    }

    // line 144
    public function block_notif($context, array $blocks = array())
    {
    }

    // line 147
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
        return array (  368 => 147,  363 => 144,  358 => 141,  350 => 127,  346 => 126,  342 => 125,  338 => 124,  333 => 122,  329 => 121,  325 => 120,  321 => 119,  317 => 118,  313 => 117,  309 => 116,  304 => 115,  301 => 114,  295 => 30,  287 => 148,  285 => 147,  281 => 145,  279 => 144,  275 => 142,  273 => 141,  268 => 138,  262 => 135,  253 => 134,  251 => 133,  247 => 132,  242 => 131,  240 => 114,  228 => 104,  224 => 102,  222 => 101,  219 => 100,  215 => 98,  213 => 97,  210 => 96,  208 => 95,  205 => 94,  203 => 93,  200 => 92,  198 => 91,  195 => 90,  193 => 89,  190 => 88,  188 => 87,  185 => 86,  183 => 85,  180 => 84,  178 => 83,  164 => 71,  158 => 69,  156 => 68,  153 => 67,  147 => 65,  144 => 64,  138 => 62,  130 => 60,  127 => 59,  125 => 58,  121 => 56,  115 => 54,  112 => 53,  104 => 51,  102 => 50,  95 => 49,  92 => 48,  90 => 47,  83 => 43,  75 => 38,  70 => 36,  66 => 35,  58 => 30,  52 => 27,  24 => 1,);
    }
}
