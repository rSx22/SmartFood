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
<meta name='pagename' content='Page Commercial de la marque restoklm'>
<meta name='author' content='TheophaneCusenza, theo.cusenza@free.fr'>
<meta name='target' content='all'>
<meta name='HandheldFriendly' content='True'>
<meta name='MobileOptimized' content='320'>
<meta http-equiv='Cache-Control' content='no-cache'>
<meta http-equiv='imagetoolbar' content='no'>
<meta http-equiv='x-dns-prefetch-control' content='off'>


<link rel=\"stylesheet\" type=\"text/css\" href=\"./../web/css/style_index.css\"/>
<link rel=\"stylesheet\" type=\"text/css\" href=\"./../web/css/fonts.css\"/>
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\"/>
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css\"/>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/js/slick/slick.css\"/>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/js/slick/slick-theme.css\">





<title>";
        // line 32
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<body style=\"background-color:#f5f5ef;\">
<div class=\"container\">
\t<div class=\"row text-center topbarr\">
\t\t<div class=\"col-md-5 col-md-offset-1 barsize\">
\t\t\t<div class=\"col-md-6 barsize top-buffer1\"><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=contact\">Nous contacter</a></div>
\t\t\t<div class=\"col-md-1 barsize top-buffer1\"><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=fb_page\"><div class=\"linkfb\" style=\"margin:auto;\"></div></a></div>
\t\t</div>
\t\t<div class=\"col-md-3 col-md-offset-2 barsize top-buffer1\"><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=help\">Besoin d'aide ?</a></div>
\t</div>

\t\t<div class=\"row bar1\">
\t\t  \t<div class=\"row top-buffer2\">
\t\t\t  <div class=\"col-md-3 col-md-offset-2 top-buffer1 text-center\" ><a href =\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php\"><div class=\"logo\" style =\"width:200px;\"></div></a>
\t\t\t\t





\t\t\t</div>


\t\t\t  <div class=\"col-md-5 col-md-offset-1 loglink text-center\">
\t\t\t\t<div class=\"col-md-5 text-right itemloglink barloglink\">

\t\t\t\t\t";
        // line 58
        if (array_key_exists("email_address", $context)) {
            // line 59
            echo "\t\t\t\t\t\t";
            if ((twig_length_filter($this->env, (isset($context["email_address"]) ? $context["email_address"] : null)) < 16)) {
                // line 60
                echo "\t\t\t\t\t\t<a href =\"";
                echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
                echo "/newproject/web/index.php?p=user_page\">";
                echo twig_escape_filter($this->env, (isset($context["email_address"]) ? $context["email_address"] : null), "html", null, true);
                echo "</a>
\t\t\t\t\t\t";
            } elseif ((twig_length_filter($this->env,             // line 61
(isset($context["email_address"]) ? $context["email_address"] : null)) > 16)) {
                // line 62
                echo "\t\t\t\t\t\t<a href =\"";
                echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
                echo "/newproject/web/index.php?p=user_page\">";
                echo twig_escape_filter($this->env, (isset($context["email_address_shortened"]) ? $context["email_address_shortened"] : null), "html", null, true);
                echo "</a>
\t\t\t\t\t\t";
            }
            // line 64
            echo "\t\t\t\t\t";
        } else {
            // line 65
            echo "\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php?p=login\">Se connecter</a>
\t\t\t\t\t";
        }
        // line 67
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-7 itemloglink otherlink left text-left\">
\t\t\t\t\t";
        // line 69
        if (array_key_exists("email_address", $context)) {
            // line 70
            echo "\t\t\t\t\t\t";
            if (array_key_exists("path", $context)) {
                // line 71
                echo "\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, (isset($context["root_path"]) ? $context["root_path"] : null), "html", null, true);
                echo "/newproject/web/";
                echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
                echo "\" class=\"img\" alt=\"Your profile picture suddenly disapeared ?!\"> 
\t\t\t\t\t\t";
            } else {
                // line 73
                echo "\t\t\t\t\t\t<img class=\"img\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["root_path"]) ? $context["root_path"] : null), "html", null, true);
                echo "/newproject/web/images/avatar/default_pic.jpg\">
\t\t\t\t\t\t";
            }
            // line 75
            echo "\t\t\t\t\t";
        } else {
            // line 76
            echo "\t\t\t\t\t<a href =\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php\">S'inscrire &nbsp;&nbsp;&nbsp;</a>
\t\t\t\t\t";
        }
        // line 78
        echo "\t\t\t\t\t<div class=\"col-md-offset-2 littletext logoutlink\" style=\"position:absolute;top:0;right:-20px;\">
\t\t\t\t\t";
        // line 79
        if (array_key_exists("email_address", $context)) {
            // line 80
            echo "\t\t\t\t\t\t<a href =\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php?p=logout \">Fermer la session</a>
\t\t\t\t\t";
        }
        // line 82
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t  </div>
\t\t\t  \t\t\t\t
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row text-center\">
\t\t\t";
        // line 92
        if ((((isset($context["methode"]) ? $context["methode"] : null) == "indexConnected") || ((isset($context["methode"]) ? $context["methode"] : null) == "showProductPage"))) {
            // line 93
            echo "\t\t\t<div class=\"bar2\">
\t\t\t\t<div class=\"barimg ";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["methode"]) ? $context["methode"] : null), "html", null, true);
            echo "\" style=\"height:430px;width:100%;\">
\t\t\t\t\t<div class=\"middd\" style=\"width:100%;\">
\t\t\t\t\t\t";
            // line 96
            $this->loadTemplate("card/listCard.html.twig", "index.html.twig", 96)->display($context);
            // line 97
            echo "\t\t        \t</div>
\t        \t</div>
\t\t\t\t<div class=\"barimg2 ";
            // line 99
            echo twig_escape_filter($this->env, (isset($context["methode"]) ? $context["methode"] : null), "html", null, true);
            echo "\" style=\"height:430px;\">
\t\t\t\t\t<div class=\"phrase top-buffer12\">Goutez à la variété et à la simplicité
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"barimg3 ";
            // line 103
            echo twig_escape_filter($this->env, (isset($context["methode"]) ? $context["methode"] : null), "html", null, true);
            echo "\" style=\"height:430px;background-color: #edede7;\">
\t\t\t\t\t<div class=\"phrase\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\" top-buffer col-md-10 col-md-offset-1 middd\">
\t\t\t\t\t\t\t";
            // line 107
            $this->loadTemplate("user/help.html.twig", "index.html.twig", 107)->display($context);
            // line 108
            echo "\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t<div class=\"top-buffer col-md-10 col-md-offset-1 middd\">
\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t\t";
        } else {
            // line 116
            echo "

\t\t\t<div class=\"barimg ";
            // line 118
            echo twig_escape_filter($this->env, (isset($context["methode"]) ? $context["methode"] : null), "html", null, true);
            echo "\">
                <h2 class=\"phrase top-buffer3\">Phrase d'accroche<h2>
                <div class=\"undertitle\">Livraison à emporter / Temps de livraison / Nb Restaurants partenaires / Nombre de spécialtés
                </div>        
\t                <div class=\"row top-buffer col-md-10 col-md-offset-1 middd\">
\t                    ";
            // line 123
            if (((isset($context["methode"]) ? $context["methode"] : null) == "logUser")) {
                // line 124
                echo "\t                    ";
                $this->loadTemplate("user/form_logUser.html.twig", "index.html.twig", 124)->display($context);
                // line 125
                echo "\t                    ";
            } elseif (((isset($context["methode"]) ? $context["methode"] : null) == "loggedUser")) {
                // line 126
                echo "\t                    ";
                $this->loadTemplate("user/form_logUser.html.twig", "index.html.twig", 126)->display($context);
                // line 127
                echo "\t                    ";
            } elseif (((isset($context["methode"]) ? $context["methode"] : null) == "showUser")) {
                // line 128
                echo "\t                    ";
                $this->loadTemplate("user/user_page.html.twig", "index.html.twig", 128)->display($context);
                // line 129
                echo "\t                    ";
            } elseif (((isset($context["methode"]) ? $context["methode"] : null) == "addUserInfo")) {
                // line 130
                echo "\t                    ";
                $this->loadTemplate("user/form_addUserInfo.html.twig", "index.html.twig", 130)->display($context);
                // line 131
                echo "\t                    ";
            } elseif ((((isset($context["methode"]) ? $context["methode"] : null) == "indexConnected") || ((isset($context["methode"]) ? $context["methode"] : null) == "showProductPage"))) {
                // line 132
                echo "\t                    ";
                $this->loadTemplate("card/listCard.html.twig", "index.html.twig", 132)->display($context);
                // line 133
                echo "\t                    
\t                    ";
            } else {
                // line 135
                echo "\t                    ";
                $this->loadTemplate("user/form_addUser.html.twig", "index.html.twig", 135)->display($context);
                // line 136
                echo "\t                    ";
            }
            // line 137
            echo "
\t                </div>
            \t</div>
\t\t\t";
        }
        // line 141
        echo "\t\t</div>
\t\t

\t\t<div class=\"\">
\t\t</div>
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
        // line 175
        echo "

\t";
        // line 177
        if (((isset($context["methode"]) ? $context["methode"] : null) == "showProductPage")) {
            // line 178
            echo "
\t";
            // line 179
            $this->loadTemplate("product/product_page.html.twig", "index.html.twig", 179)->display($context);
            // line 180
            echo "
\t";
        } else {
            // line 182
            echo "


";
            // line 185
            if (((isset($context["methode"]) ? $context["methode"] : null) != "showUser")) {
                // line 186
                echo "
\t";
                // line 188
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
                // line 227
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
            } else {
                // line 252
                echo "
\t";
                // line 254
                echo "\t<div class=\"row big-user-bloc text-center\">

\t\t\t";
                // line 257
                echo "
\t\t<div class=\"row last-meal-bloc\">
\t\t\t<div class=\"row title-last-meal\">MON DERNIER REPAS:</div>
\t\t\t<div class=\"row last-meal-lines\">
\t\t\t\t<div class=\"col-md-1 col-md-offset-2 col-xs-1 col-xs-offset-1 last-meal-titles-like\">Qualité:</div>
\t\t\t\t<div class=\"col-md-2 col-xs-2 col-xs-1 col-xs-offset-1 last-meal-choices-like slash\"><img src=\"./../web/images/asset/smiley-sad.png\" alt=\"smiley\"> J'aime pas</div>
\t\t\t\t<div class=\"col-md-2 col-xs-1 last-meal-choices-like slash\"><img src=\"./../web/images/asset/smiley-soso.png\" alt=\"smiley\"> Moyen</div>
\t\t\t\t<div class=\"col-md-2 col-xs-1 last-meal-choices-like slash\"><img src=\"./../web/images/asset/smiley-happy.png\" alt=\"smiley\"> J'aime</div>
\t\t\t\t<div class=\"col-md-2 col-xs-1 last-meal-choices-like slash\"><img src=\"./../web/images/asset/smiley-happy.png\" alt=\"smiley\"> J'aime beaucoup</div>
\t\t\t</div>
\t\t\t<div class=\"row last-meal-lines\">
\t\t\t\t<div class=\"col-md-1 col-md-offset-2 col-xs-1 col-xs-offset-1 last-meal-titles-like\">Nourrissant:</div>
\t\t\t\t<div class=\"col-md-2 col-xs-1 col-xs-1 col-xs-offset-1 last-meal-choices-like slash\"><img src=\"./../web/images/asset/smiley-sad.png\" alt=\"smiley\"> Pas assez</div>
\t\t\t\t<div class=\"col-md-2 col-xs-1 last-meal-choices-like slash\"><img src=\"./../web/images/asset/smiley-happy.png\" alt=\"smiley\"> Parfait</div>
\t\t\t\t<div class=\"col-md-2 col-xs-1 last-meal-choices-like slash\"><img src=\"./../web/images/asset/smiley-soso.png\" alt=\"smiley\"> Trop consistant</div>
\t\t\t</div>
\t\t\t<div class=\"row last-meal-lines\">
\t\t\t\t<div class=\"col-md-1 col-md-offset-2 col-xs-1 col-xs-offset-1 last-meal-titles-like\">Varié:</div>
\t\t\t\t<div class=\"col-md-2 col-xs-2 col-xs-1 col-xs-offset-1 last-meal-choices-like slash\"><img src=\"./../web/images/asset/smiley-sad.png\" alt=\"smiley\"> Pas assez</div>
\t\t\t\t<div class=\"col-md-2 col-xs-1 last-meal-choices-like slash\"><img src=\"./../web/images/asset/smiley-soso.png\" alt=\"smiley\"> Assez</div>
\t\t\t\t<div class=\"col-md-2 col-xs-1 last-meal-choices-like slash\"><img src=\"./../web/images/asset/smiley-happy.png\" alt=\"smiley\"> Parfait</div>
\t\t\t\t<div class=\"col-md-2 col-xs-1 last-meal-choices-like slash\"><img src=\"./../web/images/asset/smiley-soso.png\" alt=\"smiley\"> Trop varié</div>
\t\t\t</div>

\t\t</div>

\t\t\t";
                // line 284
                echo "\t\t<div class=\" proposition-day\">
\t\t\t<div class=\"col-md-3 col-xs-3 proposition-title\">
\t\t\t\tAujourd'hui nous vous proposons:
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-xs-3  proposition-polaroid plat1\">
\t\t\t\t<img class=\"row tape\"  src=\"../web/images/asset/tape.png\" alt=\"tape\">
\t\t\t\t<div class=\"row meal-desc plat1desc\">Plat 1</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-1 col-xs-1 \">
\t\t\t\t<div class=\"proposition-btn\">&nbsp;<div class=\"rotate\"><span class=\"glyphicon glyphicon-refresh\"></span></div></div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-xs-3  proposition-polaroid plat2\">
\t\t\t\t<img class=\"row tape\" src=\"../web/images/asset/tape.png\" alt=\"tape\">
\t\t\t\t<div class=\"row meal-desc plat2desc\">Plat 2</div>
\t\t\t</div>
\t\t</div>

\t\t\t";
                // line 302
                echo "
\t\t<div class=\"\">
\t\t\t<div class=\"row col-md-10 col-xs-10 col-md-offset-2 col-xs-offset-2 like-title text-left\">Aimez vous manger?</div>
\t\t\t<div class=\" like-bloc\">
\t\t\t\t<div class=\"img-like col-md-5 col-xs-5 col-md-offset-1 col-xs-offset-1\"></div>
\t\t\t\t<div class=\"row like-rate col-md-5 col-xs-5 text-left\">
\t\t\t\t\t<div class=\"row rate-item col-md-offset-1 col-xs-offset-1\" data-like=\"j'adore\">J'adore</div>
\t\t\t\t\t<div class=\"row rate-item col-md-offset-1 col-xs-offset-1\" data-like=\"j'aime\">J'aime</div>
\t\t\t\t\t<div class=\"row rate-item col-md-offset-1 col-xs-offset-1\" data-like=\"j'aime pas\">J'aime pas</div>
\t\t\t\t\t<div class=\"row rate-item col-md-offset-1 col-xs-offset-1\" data-like=\"allergique\">Allergique</div>
\t\t\t\t\t<div class=\"row rate-item col-md-offset-1 col-xs-offset-1\" data-like=\"sans avis\">Sans Avis</div>

\t\t\t\t</div>
\t\t\t\t<div class=\" meal-name text-left col-md-3 col-xs-offset-4\">Hamburger Maison</div>
\t\t\t</div>
\t\t\t
\t\t</div>


\t\t\t";
                // line 322
                echo "
\t\t";
                // line 323
                $context["foo"] = "bar";
                // line 324
                echo "
\t\t<div class=\"calendar-bloc col-md-12 col-xs-12\">
\t\t\t<div class=\"row calendar-title text-left col-md-offset-2 col-md-offset-12\">Mes repas</div>
\t\t\t<div class=\"row calendar table\">
\t\t\t\t<div class=\"table-responsive\">
  \t\t\t\t\t<table class=\"table\">
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
\t\t\t</div>
\t\t\t<div class=\"row calendar table\">
\t\t\t\t<div class=\"table-responsive\">
  \t\t\t\t\t<table class=\"table\">
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
\t\t\t</div>

\t\t</div>

\t</div>

";
            }
            // line 373
            echo "

\t";
            // line 376
            echo "
\t<div class=\"text-center bottombarr\">
\t\t<div class=\"col-md-12 col-xs-12\">
\t\t\t<div class=\"col-md-3 col-xs-4\">
\t\t\t\t<p class=\"nous-contact\">
\t\t\t\t\t<span class=\"footer-titles\">Nous contacter</span><br>
\t                <span class=\"footer-text\"> Mail: smart@food.fr<br>
\t                Adresse: 95 rue Parmentier<br>
\t                75013 PARIS FRANCE</span></p></div>
\t\t\t<div class=\"col-md-5 col-xs-4\">
\t\t\t\t<p class=\"footer-titles\">Restez connectés</p>
\t\t\t\t<img class=\"footer-logo\" src=\"";
            // line 387
            echo twig_escape_filter($this->env, (isset($context["root_path"]) ? $context["root_path"] : null), "html", null, true);
            echo "/newproject/web/images/asset/logo-iphone.png\">
\t\t\t\t<img class=\"footer-logo\" src=\"";
            // line 388
            echo twig_escape_filter($this->env, (isset($context["root_path"]) ? $context["root_path"] : null), "html", null, true);
            echo "/newproject/web/images/asset/logo-android.png\">
\t\t\t\t<img class=\"footer-logo\" src=\"";
            // line 389
            echo twig_escape_filter($this->env, (isset($context["root_path"]) ? $context["root_path"] : null), "html", null, true);
            echo "/newproject/web/images/asset/FACEBOOK-bottom.png\">
\t\t\t\t<p class=\"download-app\">TÉLÉCHARGER L’APPLICATION</p>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-xs-4\">
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
\t
\t";
        }
        // line 409
        echo "
\t</div>
</div>

<script type=\"text/javascript\" src=\"";
        // line 413
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/vendor/components/jquery/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"//code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 417
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/js/weekline/scripts/jquery.weekLine.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 418
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/js/weekline/timepicker/jquery.timepicker.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 419
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/js/weekline/scripts/wl.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 421
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/js/slick/slick.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 422
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/js/onrefresh.js\"></script>

<script type=\"text/javascript\" src=\"./../web/js/refreshMeal.js\"></script>
<script type=\"text/javascript\" src=\"./../web/js/doYouLikeThis.js\"></script>
</body>";
    }

    // line 32
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
        return array (  630 => 32,  621 => 422,  617 => 421,  612 => 419,  608 => 418,  604 => 417,  597 => 413,  591 => 409,  568 => 389,  564 => 388,  560 => 387,  547 => 376,  543 => 373,  492 => 324,  490 => 323,  487 => 322,  466 => 302,  447 => 284,  419 => 257,  415 => 254,  412 => 252,  385 => 227,  345 => 188,  342 => 186,  340 => 185,  335 => 182,  331 => 180,  329 => 179,  326 => 178,  324 => 177,  320 => 175,  285 => 141,  279 => 137,  276 => 136,  273 => 135,  269 => 133,  266 => 132,  263 => 131,  260 => 130,  257 => 129,  254 => 128,  251 => 127,  248 => 126,  245 => 125,  242 => 124,  240 => 123,  232 => 118,  228 => 116,  218 => 108,  216 => 107,  209 => 103,  202 => 99,  198 => 97,  196 => 96,  191 => 94,  188 => 93,  186 => 92,  174 => 82,  168 => 80,  166 => 79,  163 => 78,  157 => 76,  154 => 75,  148 => 73,  140 => 71,  137 => 70,  135 => 69,  131 => 67,  125 => 65,  122 => 64,  114 => 62,  112 => 61,  105 => 60,  102 => 59,  100 => 58,  84 => 45,  76 => 40,  71 => 38,  67 => 37,  59 => 32,  50 => 26,  46 => 25,  20 => 1,);
    }
}
