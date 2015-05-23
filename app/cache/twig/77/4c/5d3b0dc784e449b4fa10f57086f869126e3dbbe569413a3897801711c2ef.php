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
        // line 26
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/vendor/components/jquery/jquery.min.js\"></script>
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\"></script>

\t<title>";
        // line 29
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<body>
\t<div class=\"container\">
\t\t<div class=\"row text-center topbarr\">
\t\t  \t<div class=\"col-md-5 col-md-offset-1 barsize\">
\t\t\t  <div class=\"col-md-6 barsize top-buffer1\"><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=contact\">Nous contacter</a></div>
\t\t\t  <div class=\"col-md-1 barsize top-buffer1 fblink\"><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=fb_page\"><div class=\"linkfb\" style=\"margin:auto;\"></div></a></div>
\t\t\t</div>
\t\t  <div class=\"col-md-3 col-md-offset-2 barsize top-buffer1\"><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=help\">Besoin d'aide ?</a></div>
\t\t</div>

\t\t<div class=\"container row bar1\">
\t\t  \t<div class=\"row top-buffer2\">
\t\t\t  <div class=\"col-md-3 col-md-offset-2 top-buffer1 text-center\" ><a href =\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php\"><div class=\"logo\" style =\"width:200px;\"></div></a></div>
\t\t\t  <div class=\"col-md-5 col-md-offset-2 loglink text-center\">
\t\t\t\t<div class=\"col-md-5 text-right itemloglink barloglink\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 46
        if (array_key_exists("email_address", $context)) {
            // line 47
            echo "\t\t\t\t\t\t";
            if ((twig_length_filter($this->env, (isset($context["email_address"]) ? $context["email_address"] : null)) < 16)) {
                // line 48
                echo "\t\t\t\t\t\t<a href =\"";
                echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
                echo "/newproject/web/index.php?p=user_page\">";
                echo twig_escape_filter($this->env, (isset($context["email_address"]) ? $context["email_address"] : null), "html", null, true);
                echo "</a>
\t\t\t\t\t\t";
            } elseif ((twig_length_filter($this->env,             // line 49
(isset($context["email_address"]) ? $context["email_address"] : null)) > 16)) {
                // line 50
                echo "\t\t\t\t\t\t<a href =\"";
                echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
                echo "/newproject/web/index.php?p=user_page\">";
                echo twig_escape_filter($this->env, (isset($context["email_address_shortened"]) ? $context["email_address_shortened"] : null), "html", null, true);
                echo "</a>
\t\t\t\t\t\t";
            }
            // line 52
            echo "\t\t\t\t\t";
        } else {
            // line 53
            echo "\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php?p=login\">Se connecter</a>
\t\t\t\t\t";
        }
        // line 55
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-7 itemloglink otherlink left text-left\">
\t\t\t\t\t";
        // line 57
        if (array_key_exists("email_address", $context)) {
            // line 58
            echo "\t\t\t\t\t\t";
            if (array_key_exists("path", $context)) {
                // line 59
                echo "\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, (isset($context["root_path"]) ? $context["root_path"] : null), "html", null, true);
                echo "/newproject/web/";
                echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
                echo "\" class=\"img\" alt=\"Your profile picture suddenly disapeared ?!\"> 
\t\t\t\t\t\t";
            } else {
                // line 61
                echo "\t\t\t\t\t\t<img class=\"img\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["root_path"]) ? $context["root_path"] : null), "html", null, true);
                echo "/newproject/web/images/avatar/default_pic.jpg\">
\t\t\t\t\t\t";
            }
            // line 63
            echo "\t\t\t\t\t";
        } else {
            // line 64
            echo "\t\t\t\t\t<a href =\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php\">S'inscrire &nbsp;&nbsp;&nbsp;</a>
\t\t\t\t\t";
        }
        // line 66
        echo "\t\t\t\t\t<div class=\"col-md-offset-2 littletext logoutlink\" style=\"position:absolute;top:0;right:-20px;\">
\t\t\t\t\t";
        // line 67
        if (array_key_exists("email_address", $context)) {
            // line 68
            echo "\t\t\t\t\t\t<a href =\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php?p=logout \">Fermer la session</a>
\t\t\t\t\t";
        }
        // line 70
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t  </div>
\t\t\t  \t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container row bar2 text-center ";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["methode"]) ? $context["methode"] : null), "html", null, true);
        echo "\">
\t\t\t<h2 class=\"phrase top-buffer3\">Phrase d'accroche<h2><br>
\t\t\t<div class=\"undertitle\">Livraison à emporter / Temps de livraison / Nb Restaurants partenaires / Nombre de spécialtés</div>
\t\t\t<div class=\"row top-buffer col-md-10 col-md-offset-1 middd\">
\t\t\t\t";
        // line 82
        if (((isset($context["methode"]) ? $context["methode"] : null) == "logUser")) {
            // line 83
            echo "
\t\t\t\t";
            // line 84
            $this->loadTemplate("user/form_logUser.html.twig", "index.html.twig", 84)->display($context);
            // line 85
            echo "
\t\t\t\t";
        } elseif ((        // line 86
(isset($context["methode"]) ? $context["methode"] : null) == "loggedUser")) {
            // line 87
            echo "
\t\t\t\t";
            // line 88
            $this->loadTemplate("user/form_logUser.html.twig", "index.html.twig", 88)->display($context);
            // line 89
            echo "
\t\t\t\t";
        } elseif ((        // line 90
(isset($context["methode"]) ? $context["methode"] : null) == "showUser")) {
            // line 91
            echo "
\t\t\t\t";
            // line 92
            $this->loadTemplate("user/user_page.html.twig", "index.html.twig", 92)->display($context);
            // line 93
            echo "
\t\t\t\t";
        } elseif ((        // line 94
(isset($context["methode"]) ? $context["methode"] : null) == "addUserInfo")) {
            // line 95
            echo "
\t\t\t\t";
            // line 96
            $this->loadTemplate("user/form_addUserInfo.html.twig", "index.html.twig", 96)->display($context);
            // line 97
            echo "
\t\t\t\t";
        } elseif (((        // line 98
(isset($context["methode"]) ? $context["methode"] : null) == "indexConnected") || ((isset($context["methode"]) ? $context["methode"] : null) == "showProductPage"))) {
            // line 99
            echo "
\t\t\t\t";
            // line 100
            $this->loadTemplate("card/listCard.html.twig", "index.html.twig", 100)->display($context);
            // line 101
            echo "        \t\t
        \t\t";
        } else {
            // line 103
            echo "
        \t\t";
            // line 104
            $this->loadTemplate("user/form_addUser.html.twig", "index.html.twig", 104)->display($context);
            // line 105
            echo "
        \t\t";
        }
        // line 107
        echo "        \t</div>
\t\t</div>
\t</div>

\t<div class=\"container\">
\t<form method=\"POST\" action=\"index.php?p=subscription&id=1\">
\t\t \t<input type=\"hidden\" name=\"p\" value=\"subscription\">
\t\t \t<input type=\"hidden\" name=\"id\" value=\"1\">
\t\t\t<input type=\"submit\" value=\"Abo 1 page\" class=\"btnupdate btnupdatereplace\">
\t</form>
\t<form method=\"POST\" action=\"index.php?p=subscription&id=2\">
\t\t \t<input type=\"hidden\" name=\"p\" value=\"subscription\">
\t\t \t<input type=\"hidden\" name=\"id\" value=\"2\">
\t\t\t<input type=\"submit\" value=\"Abo 2 page\" class=\"btnupdate btnupdatereplace\">
\t</form>
\t<form method=\"POST\" action=\"index.php?p=subscription&id=3\">
\t\t \t<input type=\"hidden\" name=\"p\" value=\"subscription\">
\t\t \t<input type=\"hidden\" name=\"id\" value=\"3\">
\t\t\t<input type=\"submit\" value=\"Abo 3 page\" class=\"btnupdate btnupdatereplace\">
\t</form>
\t\t\t\t<form method=\"POST\" action=\"?p=statsdump\">
\t\t\t\t<input type=\"submit\" value=\"dump session request\" class=\"btnupdate btnupdatereplace\">
\t\t\t</form>



\t";
        // line 134
        echo "

\t";
        // line 136
        if (((isset($context["methode"]) ? $context["methode"] : null) == "showProductPage")) {
            // line 137
            echo "
\t";
            // line 138
            $this->loadTemplate("product/product_page.html.twig", "index.html.twig", 138)->display($context);
            // line 139
            echo "
\t";
        } else {
            // line 141
            echo "

\t<div class=\"row etap-bloc\">
\t\t<div class=\"col-md-12 text-center\">
\t\t\t<div>
\t\t\t\t<div class=\"circle1\"></div>
\t\t\t\t<div class=\"circle\"></div>
\t\t\t\t<div class=\"circle\"></div>
\t\t\t\t<div class=\"circle\"></div>
\t\t\t</div>
\t\t</div>
\t</div>

\t";
            // line 155
            echo "\t<div class=\"row\">
\t\t<div class=\"col-md-12 description-bloc\">
\t\t\t<div class=\"row col-md-8 col-md-offset-2 db-center-bloc\">
\t\t\t\t<div >
\t\t\t\t\t<div class=\"row  db-title\">EN CE MOMENT</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<p class=\"article-title\">Article 1</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<p class=\"article-desc\">Ardeo, mihi credite, Patres conscripti (id quod vosmet de me existimatis et facitis ipsi) incredibili quodam amore patriae, qui me amor et subvenire olim impendentibus periculis maximis cum dimicatione quodam...</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\"><img class=\"img-desc\" src=\"../web/images/asset/crepes.png\" alt=\"crepe\"></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t<img class=\"plat\" src=\"../web/images/asset/plat1.png\" alt=\"plat\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 green-square text-center\">
\t\t\t\t\t\t\t\t\tdéjà
\t\t\t\t\t\t\t\t\t<span class=\"big-number\">20</span>
\t\t\t\t\t\t\t\t\theureux
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12 sand-square text-center\">
\t\t\t\t\t\t\t\t\tplus de
\t\t\t\t\t\t\t\t\t<span class=\"big-number\">400</span>
\t\t\t\t\t\t\t\t\tcombinaisons
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t<img class=\"plat\"  src=\"../web/images/asset/salade.png\" alt=\"plat\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<p class=\"article-title\">Article 1</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<p class=\"article-desc\">Ardeo, mihi credite, Patres conscripti (id quod vosmet de me existimatis et facitis ipsi) incredibili quodam amore patriae, qui me amor et subvenire olim impendentibus periculis maximis cum dimicatione quodam...</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\"><img class=\"img-desc\" src=\"../web/images/asset/crepes.png\" alt=\"crepe\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row col-md-12 text-center quote\">\"Cette application est on ne peut plus extraordinaire,<br> j’en pleure de Joie rien qu'à y penser!\"</div>

\t\t</div>
\t</div>


\t";
            // line 212
            echo "
\t<div class=\"row text-center bottombarr\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<p class=\"nous-contact\">
\t\t\t\t\t<span class=\"footer-titles\">Nous contacter</span><br>
\t                <span class=\"footer-text\"> Mail: smart@food.fr<br>
\t                Adresse: 95 rue Parmentier<br>
\t                75013 PARIS FRANCE</span></p></div>
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<p class=\"footer-titles\">Restez connectés</p>
\t\t\t\t<img class=\"footer-logo\" src=\"";
            // line 223
            echo twig_escape_filter($this->env, (isset($context["root_path"]) ? $context["root_path"] : null), "html", null, true);
            echo "/newproject/web/images/asset/logo-iphone.png\">
\t\t\t\t<img class=\"footer-logo\" src=\"";
            // line 224
            echo twig_escape_filter($this->env, (isset($context["root_path"]) ? $context["root_path"] : null), "html", null, true);
            echo "/newproject/web/images/asset/logo-android.png\">
\t\t\t\t<img class=\"footer-logo\" src=\"";
            // line 225
            echo twig_escape_filter($this->env, (isset($context["root_path"]) ? $context["root_path"] : null), "html", null, true);
            echo "/newproject/web/images/asset/FACEBOOK-bottom.png\">
\t\t\t\t<p class=\"download-app\">TÉLÉCHARGER L’APPLICATION</p>

\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<p class=\"copyright\">
\t\t\t\t\t<span class=\"copyright-title\">COPYRIGHT ®™  SmartFood 2015</span><br>
\t                    <span class=\"footer-text\">Mentions légales<br>
\t                    Conditions générales d’utilisation<br>
\t                    Politique d’annulation</span>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t</div>



\t";
        }
        // line 244
        echo "


\t</div>
</div>






<div class=\"container\">
\t<h1> WELCOME</h1><br>
\t<div class =\"sidebar\">
\t\t";
        // line 258
        $this->displayBlock('sidebar', $context, $blocks);
        // line 275
        echo "\t\t";
        echo twig_var_dump($this->env, $context, (isset($context["session"]) ? $context["session"] : null));
        echo "
\t\t<div>User:";
        // line 276
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "user", []), "html", null, true);
        echo "
\t\t\t";
        // line 277
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "path", []) != null)) {
            // line 278
            echo "\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "path", []), "html", null, true);
            echo "\" style=\"width:80px;height:80px;\" alt=\"Your profile picture suddenly disapeared ?!\"> <a href =\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php?p=card_list\">list products in your card</a>
\t\t\t\t<a href =\"";
            // line 279
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php?p=user_page\">show profile</a><br>

\t\t\t";
        }
        // line 282
        echo "\t\t</div>
\t</div>
\t<div id=\"content\">
\t\t";
        // line 285
        $this->displayBlock('body', $context, $blocks);
        // line 286
        echo "\t</div>
\t<div id=\"notif\">
\t\t";
        // line 288
        $this->displayBlock('notif', $context, $blocks);
        // line 289
        echo "\t</div>
\t<div id=\"confirm\">
\t\t";
        // line 291
        $this->displayBlock('confirm', $context, $blocks);
        // line 292
        echo "\t</div>

</body>";
    }

    // line 29
    public function block_title($context, array $blocks = array())
    {
        echo "Resto posé t'as vu";
    }

    // line 258
    public function block_sidebar($context, array $blocks = array())
    {
        // line 259
        echo "\t\t\t<a href =\"";
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=user\">show user</a><br>
\t\t\t<a href =\"";
        // line 260
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=users_list\">List user in users</a><br>
\t\t\t<a href =\"";
        // line 261
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=add_user \">Form for add user in users</a><br>
\t\t\t<a href =\"";
        // line 262
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=add_userinfo \">Form for add user info</a><br>
\t\t\t<a href =\"";
        // line 263
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=add_avatar \">Form for add user avatar</a><br>
\t\t\t<a href =\"";
        // line 264
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=del_user \">Form for del user in users</a><br>
\t\t\t<a href =\"";
        // line 265
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=log_user \">Form for log user in users</a><br>
\t\t\t<a href =\"";
        // line 266
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=logout \">Clic for logout. q+</a><br><br>

\t\t\t<a href =\"";
        // line 268
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=products_list\">list products</a><br>
\t\t\t<a href =\"";
        // line 269
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=product\">show product</a><br>
\t\t\t<a href =\"";
        // line 270
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=add_product\">add product</a><br>
\t\t\t<a href =\"";
        // line 271
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=del_product\">del product</a><br>


\t\t";
    }

    // line 285
    public function block_body($context, array $blocks = array())
    {
    }

    // line 288
    public function block_notif($context, array $blocks = array())
    {
    }

    // line 291
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
        return array (  541 => 291,  536 => 288,  531 => 285,  523 => 271,  519 => 270,  515 => 269,  511 => 268,  506 => 266,  502 => 265,  498 => 264,  494 => 263,  490 => 262,  486 => 261,  482 => 260,  477 => 259,  474 => 258,  468 => 29,  462 => 292,  460 => 291,  456 => 289,  454 => 288,  450 => 286,  448 => 285,  443 => 282,  437 => 279,  428 => 278,  426 => 277,  422 => 276,  417 => 275,  415 => 258,  399 => 244,  377 => 225,  373 => 224,  369 => 223,  356 => 212,  298 => 155,  283 => 141,  279 => 139,  277 => 138,  274 => 137,  272 => 136,  268 => 134,  240 => 107,  236 => 105,  234 => 104,  231 => 103,  227 => 101,  225 => 100,  222 => 99,  220 => 98,  217 => 97,  215 => 96,  212 => 95,  210 => 94,  207 => 93,  205 => 92,  202 => 91,  200 => 90,  197 => 89,  195 => 88,  192 => 87,  190 => 86,  187 => 85,  185 => 84,  182 => 83,  180 => 82,  173 => 78,  163 => 70,  157 => 68,  155 => 67,  152 => 66,  146 => 64,  143 => 63,  137 => 61,  129 => 59,  126 => 58,  124 => 57,  120 => 55,  114 => 53,  111 => 52,  103 => 50,  101 => 49,  94 => 48,  91 => 47,  89 => 46,  82 => 42,  74 => 37,  69 => 35,  65 => 34,  57 => 29,  51 => 26,  24 => 1,);
    }
}
