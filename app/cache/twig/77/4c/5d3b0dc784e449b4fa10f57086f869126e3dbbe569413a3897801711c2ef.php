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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
<meta http-equiv=\"content-language\" content=\"fr-FR\" />
<meta name='language' content='fr-FR'>
<meta name='revised' content='Saturday, May 16th, 2015, 5:15 pm'>
<meta name='category' content=''>
<meta name='coverage' content='Worldwide'>
<meta name='distribution' content='Global'>
<meta name='rating' content='General'>
<meta name='revisit-after' content='7 days'>
<meta name='designer' content='Clara Koscielniak, Amaury Vallot'>
<meta name='pagename' content='Page Commercial de la marque restoklm'>
<meta name='author' content='TheophaneCusenza, theo.cusenza@free.fr'>
<meta name='target' content='all'>
<meta name='HandheldFriendly' content='True'>
<meta name='MobileOptimized' content='320'>
<meta http-equiv='Cache-Control' content='no-cache'>
<meta http-equiv='imagetoolbar' content='no'>
<meta http-equiv='x-dns-prefetch-control' content='off'>
<link rel=\"stylesheet\" type=\"text/css\" href=\"./../web/css/style_index.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"./../web/css/fonts.css\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\">

<!-- Optional theme -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css\">

<!-- Latest compiled and minified JavaScript -->
<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/vendor/components/jquery/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\"></script>

<title>";
        // line 31
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<body>
<div class=\"container\">
\t<div class=\"row text-center topbarr\">
\t\t<div class=\"col-md-5 col-md-offset-1 barsize\">
\t\t\t<div class=\"col-md-6 barsize top-buffer1\"><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=contact\">Nous contacter</a></div>
\t\t\t<div class=\"col-md-1 barsize top-buffer1\"><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=fb_page\"><div class=\"linkfb\" style=\"margin:auto;\"></div></a></div>
\t\t</div>
\t\t<div class=\"col-md-3 col-md-offset-2 barsize top-buffer1\"><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=help\">Besoin d'aide ?</a></div>
\t</div>

\t\t<div class=\"container row bar1\">
\t\t  \t<div class=\"row top-buffer2\">
\t\t\t  <div class=\"col-md-3 col-md-offset-2 top-buffer1 text-center\" ><a href =\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php\"><div class=\"logo\" style =\"width:200px;\"></div></a>
\t\t\t\t

\t\t\t\t<form method=\"POST\" action=\"?p=statsdump\">
\t\t\t\t\t<input type=\"submit\" value=\"dump session request\" class=\"btnupdate btnupdatereplace\">
\t\t\t\t</form>



\t\t\t</div>


\t\t\t  <div class=\"col-md-5 col-md-offset-2 loglink text-center\">
\t\t\t\t<div class=\"col-md-5 text-right itemloglink barloglink\">

\t\t\t\t\t";
        // line 59
        if (array_key_exists("email_address", $context)) {
            // line 60
            echo "\t\t\t\t\t\t";
            if ((twig_length_filter($this->env, (isset($context["email_address"]) ? $context["email_address"] : null)) < 16)) {
                // line 61
                echo "\t\t\t\t\t\t<a href =\"";
                echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
                echo "/newproject/web/index.php?p=user_page\">";
                echo twig_escape_filter($this->env, (isset($context["email_address"]) ? $context["email_address"] : null), "html", null, true);
                echo "</a>
\t\t\t\t\t\t";
            } elseif ((twig_length_filter($this->env,             // line 62
(isset($context["email_address"]) ? $context["email_address"] : null)) > 16)) {
                // line 63
                echo "\t\t\t\t\t\t<a href =\"";
                echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
                echo "/newproject/web/index.php?p=user_page\">";
                echo twig_escape_filter($this->env, (isset($context["email_address_shortened"]) ? $context["email_address_shortened"] : null), "html", null, true);
                echo "</a>
\t\t\t\t\t\t";
            }
            // line 65
            echo "\t\t\t\t\t";
        } else {
            // line 66
            echo "\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php?p=login\">Se connecter</a>
\t\t\t\t\t";
        }
        // line 68
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-7 itemloglink otherlink left text-left\">
\t\t\t\t\t";
        // line 70
        if (array_key_exists("email_address", $context)) {
            // line 71
            echo "\t\t\t\t\t\t";
            if (array_key_exists("path", $context)) {
                // line 72
                echo "\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, (isset($context["root_path"]) ? $context["root_path"] : null), "html", null, true);
                echo "/newproject/web/";
                echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
                echo "\" class=\"img\" alt=\"Your profile picture suddenly disapeared ?!\"> 
\t\t\t\t\t\t";
            } else {
                // line 74
                echo "\t\t\t\t\t\t<img class=\"img\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["root_path"]) ? $context["root_path"] : null), "html", null, true);
                echo "/newproject/web/images/avatar/default_pic.jpg\">
\t\t\t\t\t\t";
            }
            // line 76
            echo "\t\t\t\t\t";
        } else {
            // line 77
            echo "\t\t\t\t\t<a href =\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php\">S'inscrire &nbsp;&nbsp;&nbsp;</a>
\t\t\t\t\t";
        }
        // line 79
        echo "\t\t\t\t\t<div class=\"col-md-offset-2 littletext logoutlink\" style=\"position:absolute;top:0;right:-20px;\">
\t\t\t\t\t";
        // line 80
        if (array_key_exists("email_address", $context)) {
            // line 81
            echo "\t\t\t\t\t\t<a href =\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php?p=logout \">Fermer la session</a>
\t\t\t\t\t";
        }
        // line 83
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t  </div>
\t\t\t  \t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row bar2 text-center ";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["methode"]) ? $context["methode"] : null), "html", null, true);
        echo "\">

\t\t\t";
        // line 93
        if ((((isset($context["methode"]) ? $context["methode"] : null) != "indexConnected") && ((isset($context["methode"]) ? $context["methode"] : null) != "showProductPage"))) {
            // line 94
            echo "
\t\t\t<h2 class=\"phrase top-buffer3\">Phrase d'accroche<h2><br>
\t\t\t<div class=\"undertitle\">Livraison à emporter / Temps de livraison / Nb Restaurants partenaires / Nombre de spécialtés</div>
        \t\t
        \t";
        }
        // line 99
        echo "

\t\t\t<div class=\"row top-buffer col-md-10 col-md-offset-1 middd\">
\t\t\t\t";
        // line 102
        if (((isset($context["methode"]) ? $context["methode"] : null) == "logUser")) {
            // line 103
            echo "
\t\t\t\t";
            // line 104
            $this->loadTemplate("user/form_logUser.html.twig", "index.html.twig", 104)->display($context);
            // line 105
            echo "
\t\t\t\t";
        } elseif ((        // line 106
(isset($context["methode"]) ? $context["methode"] : null) == "loggedUser")) {
            // line 107
            echo "
\t\t\t\t";
            // line 108
            $this->loadTemplate("user/form_logUser.html.twig", "index.html.twig", 108)->display($context);
            // line 109
            echo "
\t\t\t\t";
        } elseif ((        // line 110
(isset($context["methode"]) ? $context["methode"] : null) == "showUser")) {
            // line 111
            echo "
\t\t\t\t";
            // line 112
            $this->loadTemplate("user/user_page.html.twig", "index.html.twig", 112)->display($context);
            // line 113
            echo "
\t\t\t\t";
        } elseif ((        // line 114
(isset($context["methode"]) ? $context["methode"] : null) == "addUserInfo")) {
            // line 115
            echo "
\t\t\t\t";
            // line 116
            $this->loadTemplate("user/form_addUserInfo.html.twig", "index.html.twig", 116)->display($context);
            // line 117
            echo "
\t\t\t\t";
        } elseif (((        // line 118
(isset($context["methode"]) ? $context["methode"] : null) == "indexConnected") || ((isset($context["methode"]) ? $context["methode"] : null) == "showProductPage"))) {
            // line 119
            echo "
\t\t\t\t";
            // line 120
            $this->loadTemplate("card/listCard.html.twig", "index.html.twig", 120)->display($context);
            // line 121
            echo "        \t\t
        \t\t";
        } else {
            // line 123
            echo "
        \t\t";
            // line 124
            $this->loadTemplate("user/form_addUser.html.twig", "index.html.twig", 124)->display($context);
            // line 125
            echo "
        \t\t";
        }
        // line 127
        echo "        \t</div>
\t\t</div>

\t<div class=\"\">

\t<div class=\"row etap-bloc overflow\">
\t\t<div class=\"col-md-12 text-center\">
\t\t\t<div class=\"row xxs\">
\t\t\t<div class=\"x1 posx1 col-xs-2 col-xs-offset-2\">    
\t\t\t\t<div class=\"x2\">
    \t\t\t\t<span>lol dude</span>
\t\t\t\t\t </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"x1 posx1 col-xs-2\">    
\t\t\t\t\t<div class=\"x2\">
    \t\t\t\t\t<span>lol dude</span>
\t\t\t\t\t \t</div>
\t\t\t\t\t</div>
\t\t\t<div class=\"x1 posx1 col-xs-2\">    
\t\t\t\t<div class=\"x2\">
    \t\t\t\t<span>lol dude</span>
\t\t\t\t \t</div>
\t\t\t\t</div>
\t\t\t<div class=\"x1 posx1 col-xs-2\">    
\t\t\t\t<div class=\"x2\">
    \t\t\t\t<span>lol dude</span>
\t\t\t\t </div>
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


\t";
        // line 161
        echo "

\t";
        // line 163
        if (((isset($context["methode"]) ? $context["methode"] : null) == "showProductPage")) {
            // line 164
            echo "
\t";
            // line 165
            $this->loadTemplate("product/product_page.html.twig", "index.html.twig", 165)->display($context);
            // line 166
            echo "
\t";
        } else {
            // line 168
            echo "



\t";
            // line 173
            echo "
\t<div class=\"row abon-bloc text-center\">
\t\t<div class=\"abon-bloc-img\">
\t\t\t<div class=\"row abon-bloc-desc\">
\t\t\t\t<div class=\"col-md-1 col-md-offset-2 col-xs-1 col-xs-offset-2\">
\t\t\t\t\t<div class=\"row abon-title\">ABONNEMENT 1</div>
\t\t\t\t\t<div class=\"row abon-desc\">Description blablbalba</div>
\t\t\t\t\t<div class=\"row\"><form method=\"POST\" action=\"index.php?p=subscription&id=1\">
\t\t\t\t\t\t\t\t\t \t<input type=\"hidden\" name=\"p\" value=\"subscription\">
\t\t\t\t\t\t\t\t\t \t<input type=\"hidden\" name=\"id\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Découvrir\" class=\"btnupdate large subscribereplace\">
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-1 col-md-offset-2 col-xs-1 col-xs-offset-2\">
\t\t\t\t\t<div class=\"row abon-title\">ABONNEMENT 2</div>
\t\t\t\t\t<div class=\"row abon-desc\">Description blablbalba</div>
\t\t\t\t\t<div class=\"row\"><form method=\"POST\" action=\"index.php?p=subscription&id=2\">
\t\t\t\t\t\t\t\t\t \t<input type=\"hidden\" name=\"p\" value=\"subscription\">
\t\t\t\t\t\t\t\t\t \t<input type=\"hidden\" name=\"id\" value=\"2\">
\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Découvrir\" class=\"btnupdate large subscribereplace\">
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-1 col-md-offset-2 col-xs-1 col-xs-offset-2\">
\t\t\t\t\t<div class=\"row abon-title\">ABONNEMENT 3</div>
\t\t\t\t\t<div class=\"row abon-desc\">Description blablbalba</div>
\t\t\t\t\t<div class=\"row\">\t<form method=\"POST\" action=\"index.php?p=subscription&id=3\">
\t\t\t\t\t\t\t\t\t\t \t<input type=\"hidden\" name=\"p\" value=\"subscription\">
\t\t\t\t\t\t\t\t\t\t \t<input type=\"hidden\" name=\"id\" value=\"3\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Découvrir\" class=\"btnupdate large subscribereplace\">
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t";
            // line 212
            echo "\t<div class=\"row\">
\t\t<div class=\"col-md-12 description-bloc\">
\t\t\t<div class=\"row col-md-8 col-md-offset-2 db-center-bloc\">
\t\t\t\t<div >
\t\t\t\t\t<div class=\"row  db-title\">EN CE MOMENT</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"row imgmiam\">
\t\t\t\t\t\t\t<div class=\"col-md-3 col-xs-3\">
\t\t\t\t\t\t\t\t\t\t<p class=\"article-title\">Article 1</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"article-desc\">Ardeo, mihi credite, Patres conscripti (id quod vosmet de me existimatis et facitis ipsi) incredibili cum dimicatione quodam...</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3 col-md-offset-6 col-xs-3 col-xs-offset-6\">
\t\t\t\t\t\t\t\t\t\t<p class=\"article-title\">Article 1</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"article-desc\">Ardeo, mihi credite, Patres conscripti (id quod vosmet de me existimatis et facitis ipsi) incredibili quodam dimicatione quodam...</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row col-md-12 text-center quote\">\"Cette application est on ne peut plus extraordinaire,<br> j’en pleure de Joie rien qu'à y penser!\"</div>

\t\t</div>
\t</div>

\t";
            // line 237
            echo "\t<div class=\"row big-user-bloc text-center\">

\t\t\t";
            // line 240
            echo "
\t\t<div class=\"row last-meal-bloc\">
\t\t\t<div class=\"row title-last-meal\">MON DERNIER REPAS:</div>
\t\t\t<div class=\"row last-meal-lines\">
\t\t\t\t<div class=\"col-md-1 col-md-offset-2 last-meal-titles-like\">Qualité:</div>
\t\t\t\t<div class=\"col-md-2 last-meal-choices-like\"><img src=\"./../web/images/asset/smiley-sad.png\" alt=\"smiley\"> J'aime pas</div>
\t\t\t\t<div class=\"col-md-2 last-meal-choices-like\"><img src=\"./../web/images/asset/smiley-soso.png\" alt=\"smiley\"> Moyen</div>
\t\t\t\t<div class=\"col-md-2 last-meal-choices-like\"><img src=\"./../web/images/asset/smiley-happy.png\" alt=\"smiley\"> J'aime</div>
\t\t\t\t<div class=\"col-md-2 last-meal-choices-like\"><img src=\"./../web/images/asset/smiley-happy.png\" alt=\"smiley\"> J'aime beaucoup</div>
\t\t\t</div>
\t\t\t<div class=\"row last-meal-lines\">
\t\t\t\t<div class=\"col-md-1 col-md-offset-2 last-meal-titles-like\">Nourrissant:</div>
\t\t\t\t<div class=\"col-md-2 last-meal-choices-like\"><img src=\"./../web/images/asset/smiley-sad.png\" alt=\"smiley\"> Pas assez</div>
\t\t\t\t<div class=\"col-md-2 last-meal-choices-like\"><img src=\"./../web/images/asset/smiley-happy.png\" alt=\"smiley\"> Parfait</div>
\t\t\t\t<div class=\"col-md-2 last-meal-choices-like\"><img src=\"./../web/images/asset/smiley-soso.png\" alt=\"smiley\"> Trop consistant</div>
\t\t\t</div>
\t\t\t<div class=\"row last-meal-lines\">
\t\t\t\t<div class=\"col-md-1 col-md-offset-2 last-meal-titles-like\">Varié:</div>
\t\t\t\t<div class=\"col-md-2 last-meal-choices-like\"><img src=\"./../web/images/asset/smiley-sad.png\" alt=\"smiley\"> Pas assez</div>
\t\t\t\t<div class=\"col-md-2 last-meal-choices-like\"><img src=\"./../web/images/asset/smiley-soso.png\" alt=\"smiley\"> Assez</div>
\t\t\t\t<div class=\"col-md-2 last-meal-choices-like\"><img src=\"./../web/images/asset/smiley-happy.png\" alt=\"smiley\"> Parfait</div>
\t\t\t\t<div class=\"col-md-2 last-meal-choices-like\"><img src=\"./../web/images/asset/smiley-soso.png\" alt=\"smiley\"> Trop varié</div>
\t\t\t</div>

\t\t</div>

\t\t\t";
            // line 267
            echo "\t\t<div class=\"row proposition-day\">
\t\t\t<div class=\"col-md-3 proposition-title\">
\t\t\t\tAujourd'hui nous vous proposons:
\t\t\t</div>
\t\t\t<div class=\"col-md-3 proposition-polaroid\">
\t\t\t\t<img class=\"row tape\"  src=\"../web/images/asset/tape.png\" alt=\"tape\">
\t\t\t\t<div class=\"row meal-desc\">Salade</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-1 \">
\t\t\t\t<div class=\"proposition-btn\">&nbsp;<div class=\"rotate\"><span class=\"glyphicon glyphicon-refresh\"></span></div></div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 proposition-polaroid\">
\t\t\t\t<img class=\"row tape\" src=\"../web/images/asset/tape.png\" alt=\"tape\">
\t\t\t\t<div class=\"row meal-desc\">Salade</div>
\t\t\t</div>
\t\t</div>

\t\t\t";
            // line 285
            echo "
\t\t<div class=\"row\">
\t\t\t<div class=\"row col-md-10 col-md-offset-2 like-title text-left\">Aimez vous manger?</div>
\t\t\t<div class=\"row like-bloc\">
\t\t\t\t<div class=\"img-like col-md-4 col-md-offset-2\"></div>
\t\t\t\t<div class=\"like-rate col-md-4 text-left\">
\t\t\t\t\t<div class=\"row rate-item col-md-offset-1\">J'adore</div>
\t\t\t\t\t<div class=\"row rate-item col-md-offset-1\">J'aime pas</div>
\t\t\t\t\t<div class=\"row rate-item col-md-offset-1\">J'aime pas</div>
\t\t\t\t\t<div class=\"row rate-item col-md-offset-1\">Allergique</div>
\t\t\t\t\t<div class=\"row rate-item col-md-offset-1\">Sans Avis</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row meal-name text-left col-md-offset-2\">Hamburger Maison</div>
\t\t</div>


\t\t\t";
            // line 303
            echo "
\t\t";
            // line 304
            $context["foo"] = "bar";
            // line 305
            echo "
\t\t<div class=\"row calendar-bloc col-md-12\">
\t\t\t<div class=\"row calendar-title text-left col-md-offset-2\">Mes repas</div>
\t\t\t<div class=\"row calendar\">
\t\t\t\t<table>
\t\t\t\t\t<tr class=\"month\">
\t\t\t\t\t\t<td colspan=\"7\" class=\"month\">
\t\t\t\t\t\t\tCette semaine
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"day\"><div class=\"day-letter\">L</div></td>
\t\t\t\t\t\t<td class=\"day\"><div class=\"day-letter\">M</div></td>
\t\t\t\t\t\t<td class=\"day\"><div class=\"day-letter\">M</div></td>
\t\t\t\t\t\t<td class=\"day\"><div class=\"day-letter\">J</div></td>
\t\t\t\t\t\t<td class=\"day\"><div class=\"day-letter\">V</div></td>
\t\t\t\t\t\t<td class=\"day week-end\"><div class=\"day-letter\">S</div></td>
\t\t\t\t\t\t<td class=\"day week-end\"><div class=\"day-letter sunday\">D</div></td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"row calendar\">
\t\t\t\t<table>
\t\t\t\t\t<tr class=\"month\">
\t\t\t\t\t\t<td colspan=\"7\" class=\"month\">
\t\t\t\t\t\t\tSemaine prochaine
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"day\"><div class=\"day-letter\">L</div></td>
\t\t\t\t\t\t<td class=\"day\"><div class=\"day-letter\">M</div></td>
\t\t\t\t\t\t<td class=\"day\"><div class=\"day-letter\">M</div></td>
\t\t\t\t\t\t<td class=\"day\"><div class=\"day-letter\">J</div></td>
\t\t\t\t\t\t<td class=\"day\"><div class=\"day-letter\">V</div></td>
\t\t\t\t\t\t<td class=\"day week-end\"><div class=\"day-letter\">S</div></td>
\t\t\t\t\t\t<td class=\"day week-end\"><div class=\"day-letter sunday\">D</div></td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>

\t\t</div>

\t</div>




\t";
            // line 353
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
            // line 364
            echo twig_escape_filter($this->env, (isset($context["root_path"]) ? $context["root_path"] : null), "html", null, true);
            echo "/newproject/web/images/asset/logo-iphone.png\">
\t\t\t\t<img class=\"footer-logo\" src=\"";
            // line 365
            echo twig_escape_filter($this->env, (isset($context["root_path"]) ? $context["root_path"] : null), "html", null, true);
            echo "/newproject/web/images/asset/logo-android.png\">
\t\t\t\t<img class=\"footer-logo\" src=\"";
            // line 366
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


</div>

\t";
        }
        // line 386
        echo "
\t</div>
</div>

</body>";
    }

    // line 31
    public function block_title($context, array $blocks = array())
    {
        echo "Test Application";
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
        return array (  559 => 31,  551 => 386,  528 => 366,  524 => 365,  520 => 364,  507 => 353,  458 => 305,  456 => 304,  453 => 303,  434 => 285,  415 => 267,  387 => 240,  383 => 237,  357 => 212,  317 => 173,  311 => 168,  307 => 166,  305 => 165,  302 => 164,  300 => 163,  296 => 161,  261 => 127,  257 => 125,  255 => 124,  252 => 123,  248 => 121,  246 => 120,  243 => 119,  241 => 118,  238 => 117,  236 => 116,  233 => 115,  231 => 114,  228 => 113,  226 => 112,  223 => 111,  221 => 110,  218 => 109,  216 => 108,  213 => 107,  211 => 106,  208 => 105,  206 => 104,  203 => 103,  201 => 102,  196 => 99,  189 => 94,  187 => 93,  182 => 91,  172 => 83,  166 => 81,  164 => 80,  161 => 79,  155 => 77,  152 => 76,  146 => 74,  138 => 72,  135 => 71,  133 => 70,  129 => 68,  123 => 66,  120 => 65,  112 => 63,  110 => 62,  103 => 61,  100 => 60,  98 => 59,  80 => 44,  72 => 39,  67 => 37,  63 => 36,  55 => 31,  49 => 28,  20 => 1,);
    }
}
