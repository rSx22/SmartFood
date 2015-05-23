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
        echo "/newproject/web/index.php\"><div class=\"logo\" style =\"width:200px;\"></div></a></div>
\t\t\t  <div class=\"col-md-5 col-md-offset-2 loglink text-center\">
\t\t\t\t<div class=\"col-md-5 text-right itemloglink barloglink\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 48
        if (array_key_exists("email_address", $context)) {
            // line 49
            echo "\t\t\t\t\t\t";
            if ((twig_length_filter($this->env, (isset($context["email_address"]) ? $context["email_address"] : null)) < 16)) {
                // line 50
                echo "\t\t\t\t\t\t<a href =\"";
                echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
                echo "/newproject/web/index.php?p=user_page\">";
                echo twig_escape_filter($this->env, (isset($context["email_address"]) ? $context["email_address"] : null), "html", null, true);
                echo "</a>
\t\t\t\t\t\t";
            } elseif ((twig_length_filter($this->env,             // line 51
(isset($context["email_address"]) ? $context["email_address"] : null)) > 16)) {
                // line 52
                echo "\t\t\t\t\t\t<a href =\"";
                echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
                echo "/newproject/web/index.php?p=user_page\">";
                echo twig_escape_filter($this->env, (isset($context["email_address_shortened"]) ? $context["email_address_shortened"] : null), "html", null, true);
                echo "</a>
\t\t\t\t\t\t";
            }
            // line 54
            echo "\t\t\t\t\t";
        } else {
            // line 55
            echo "\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php?p=login\">Se connecter</a>
\t\t\t\t\t";
        }
        // line 57
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-7 itemloglink otherlink left text-left\">
\t\t\t\t\t";
        // line 59
        if (array_key_exists("email_address", $context)) {
            // line 60
            echo "\t\t\t\t\t\t";
            if (array_key_exists("path", $context)) {
                // line 61
                echo "\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, (isset($context["root_path"]) ? $context["root_path"] : null), "html", null, true);
                echo "/newproject/web/";
                echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
                echo "\" class=\"img\" alt=\"Your profile picture suddenly disapeared ?!\"> 
\t\t\t\t\t\t";
            } else {
                // line 63
                echo "\t\t\t\t\t\t<img class=\"img\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["root_path"]) ? $context["root_path"] : null), "html", null, true);
                echo "/newproject/web/images/avatar/default_pic.jpg\">
\t\t\t\t\t\t";
            }
            // line 65
            echo "\t\t\t\t\t";
        } else {
            // line 66
            echo "\t\t\t\t\t<a href =\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php\">S'inscrire &nbsp;&nbsp;&nbsp;</a>
\t\t\t\t\t";
        }
        // line 68
        echo "\t\t\t\t\t<div class=\"col-md-offset-2 littletext logoutlink\" style=\"position:absolute;top:0;right:-20px;\">
\t\t\t\t\t";
        // line 69
        if (array_key_exists("email_address", $context)) {
            // line 70
            echo "\t\t\t\t\t\t<a href =\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php?p=logout \">Fermer la session</a>
\t\t\t\t\t";
        }
        // line 72
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t  </div>
\t\t\t  \t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container row bar2 text-center ";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["methode"]) ? $context["methode"] : null), "html", null, true);
        echo "\">
\t\t\t<h2 class=\"phrase top-buffer3\">Phrase d'accroche<h2><br>
\t\t\t<div class=\"undertitle\">Livraison à emporter / Temps de livraison / Nb Restaurants partenaires / Nombre de spécialtés</div>
\t\t\t<div class=\"row top-buffer col-md-10 col-md-offset-1 middd\">
\t\t\t\t";
        // line 84
        if (((isset($context["methode"]) ? $context["methode"] : null) == "logUser")) {
            // line 85
            echo "
\t\t\t\t";
            // line 86
            $this->loadTemplate("user/form_logUser.html.twig", "index.html.twig", 86)->display($context);
            // line 87
            echo "
\t\t\t\t";
        } elseif ((        // line 88
(isset($context["methode"]) ? $context["methode"] : null) == "loggedUser")) {
            // line 89
            echo "
\t\t\t\t";
            // line 90
            $this->loadTemplate("user/form_logUser.html.twig", "index.html.twig", 90)->display($context);
            // line 91
            echo "
\t\t\t\t";
        } elseif ((        // line 92
(isset($context["methode"]) ? $context["methode"] : null) == "showUser")) {
            // line 93
            echo "
\t\t\t\t";
            // line 94
            $this->loadTemplate("user/user_page.html.twig", "index.html.twig", 94)->display($context);
            // line 95
            echo "
\t\t\t\t";
        } elseif ((        // line 96
(isset($context["methode"]) ? $context["methode"] : null) == "addUserInfo")) {
            // line 97
            echo "
\t\t\t\t";
            // line 98
            $this->loadTemplate("user/form_addUserInfo.html.twig", "index.html.twig", 98)->display($context);
            // line 99
            echo "
\t\t\t\t";
        } elseif (((        // line 100
(isset($context["methode"]) ? $context["methode"] : null) == "indexConnected") || ((isset($context["methode"]) ? $context["methode"] : null) == "showProductPage"))) {
            // line 101
            echo "
\t\t\t\t";
            // line 102
            $this->loadTemplate("card/listCard.html.twig", "index.html.twig", 102)->display($context);
            // line 103
            echo "        \t\t
        \t\t";
        } else {
            // line 105
            echo "
        \t\t";
            // line 106
            $this->loadTemplate("user/form_addUser.html.twig", "index.html.twig", 106)->display($context);
            // line 107
            echo "
        \t\t";
        }
        // line 109
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
        // line 136
        echo "

\t";
        // line 138
        if (((isset($context["methode"]) ? $context["methode"] : null) == "showProductPage")) {
            // line 139
            echo "
\t";
            // line 140
            $this->loadTemplate("product/product_page.html.twig", "index.html.twig", 140)->display($context);
            // line 141
            echo "
\t";
        } else {
            // line 143
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
            // line 157
            echo "
\t<div class=\"row abon-bloc text-center\">
\t\t<div class=\"abon-bloc-img\">
\t\t\t<div class=\"row abon-bloc-desc\">
\t\t\t\t<div class=\"col-md-1 col-md-offset-2\">
\t\t\t\t\t<div class=\"row abon-title\">ABONNEMENT 1</div>
\t\t\t\t\t<div class=\"row abon-desc\">Description blablbalba</div>
\t\t\t\t\t<div class=\"row\"><button class=\"abon-btn\">Découvrir</button></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-1 col-md-offset-2\">
\t\t\t\t\t<div class=\"row abon-title\">ABONNEMENT 2</div>
\t\t\t\t\t<div class=\"row abon-desc\">Description blablbalba</div>
\t\t\t\t\t<div class=\"row\"><button class=\"abon-btn\">Découvrir</button></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-1 col-md-offset-2\">
\t\t\t\t\t<div class=\"row abon-title\">ABONNEMENT 3</div>
\t\t\t\t\t<div class=\"row abon-desc\">Description blablbalba</div>
\t\t\t\t\t<div class=\"row\"><button class=\"abon-btn\">Découvrir</button></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t";
            // line 181
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
\t\t\t\t<button class=\"btn proposition-btn\"><span class=\"glyphicon glyphicon-refresh\"></span></button>
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






<div class=\"container\">
\t<h1> WELCOME</h1><br>
\t<div class =\"sidebar\">
\t\t";
        // line 400
        $this->displayBlock('sidebar', $context, $blocks);
        // line 417
        echo "\t\t";
        echo twig_var_dump($this->env, $context, (isset($context["session"]) ? $context["session"] : null));
        echo "
\t\t<div>User:";
        // line 418
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "user", []), "html", null, true);
        echo "
\t\t\t";
        // line 419
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "path", []) != null)) {
            // line 420
            echo "\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "path", []), "html", null, true);
            echo "\" style=\"width:80px;height:80px;\" alt=\"Your profile picture suddenly disapeared ?!\"> <a href =\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php?p=card_list\">list products in your card</a>
\t\t\t\t<a href =\"";
            // line 421
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php?p=user_page\">show profile</a><br>

\t\t\t";
        }
        // line 424
        echo "\t\t</div>
\t</div>
\t<div id=\"content\">
\t\t";
        // line 427
        $this->displayBlock('body', $context, $blocks);
        // line 428
        echo "\t</div>
\t<div id=\"notif\">
\t\t";
        // line 430
        $this->displayBlock('notif', $context, $blocks);
        // line 431
        echo "\t</div>
\t<div id=\"confirm\">
\t\t";
        // line 433
        $this->displayBlock('confirm', $context, $blocks);
        // line 434
        echo "\t</div>

</body>";
    }

    // line 31
    public function block_title($context, array $blocks = array())
    {
        echo "Test Application";
    }

    // line 400
    public function block_sidebar($context, array $blocks = array())
    {
        // line 401
        echo "\t\t\t<a href =\"";
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=user\">show user</a><br>
\t\t\t<a href =\"";
        // line 402
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=users_list\">List user in users</a><br>
\t\t\t<a href =\"";
        // line 403
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=add_user \">Form for add user in users</a><br>
\t\t\t<a href =\"";
        // line 404
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=add_userinfo \">Form for add user info</a><br>
\t\t\t<a href =\"";
        // line 405
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=add_avatar \">Form for add user avatar</a><br>
\t\t\t<a href =\"";
        // line 406
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=del_user \">Form for del user in users</a><br>
\t\t\t<a href =\"";
        // line 407
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=log_user \">Form for log user in users</a><br>
\t\t\t<a href =\"";
        // line 408
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=logout \">Clic for logout. q+</a><br><br>

\t\t\t<a href =\"";
        // line 410
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=products_list\">list products</a><br>
\t\t\t<a href =\"";
        // line 411
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=product\">show product</a><br>
\t\t\t<a href =\"";
        // line 412
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=add_product\">add product</a><br>
\t\t\t<a href =\"";
        // line 413
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=del_product\">del product</a><br>


\t\t";
    }

    // line 427
    public function block_body($context, array $blocks = array())
    {
    }

    // line 430
    public function block_notif($context, array $blocks = array())
    {
    }

    // line 433
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
        return array (  692 => 433,  687 => 430,  682 => 427,  674 => 413,  670 => 412,  666 => 411,  662 => 410,  657 => 408,  653 => 407,  649 => 406,  645 => 405,  641 => 404,  637 => 403,  633 => 402,  628 => 401,  625 => 400,  619 => 31,  613 => 434,  611 => 433,  607 => 431,  605 => 430,  601 => 428,  599 => 427,  594 => 424,  588 => 421,  579 => 420,  577 => 419,  573 => 418,  568 => 417,  566 => 400,  550 => 386,  527 => 366,  523 => 365,  519 => 364,  506 => 353,  457 => 305,  455 => 304,  452 => 303,  433 => 285,  414 => 267,  386 => 240,  382 => 237,  325 => 181,  300 => 157,  285 => 143,  281 => 141,  279 => 140,  276 => 139,  274 => 138,  270 => 136,  242 => 109,  238 => 107,  236 => 106,  233 => 105,  229 => 103,  227 => 102,  224 => 101,  222 => 100,  219 => 99,  217 => 98,  214 => 97,  212 => 96,  209 => 95,  207 => 94,  204 => 93,  202 => 92,  199 => 91,  197 => 90,  194 => 89,  192 => 88,  189 => 87,  187 => 86,  184 => 85,  182 => 84,  175 => 80,  165 => 72,  159 => 70,  157 => 69,  154 => 68,  148 => 66,  145 => 65,  139 => 63,  131 => 61,  128 => 60,  126 => 59,  122 => 57,  116 => 55,  113 => 54,  105 => 52,  103 => 51,  96 => 50,  93 => 49,  91 => 48,  84 => 44,  76 => 39,  71 => 37,  67 => 36,  59 => 31,  53 => 28,  24 => 1,);
    }
}
