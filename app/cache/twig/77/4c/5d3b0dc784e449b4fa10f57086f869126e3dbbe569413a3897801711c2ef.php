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



<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\"/>
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css\"/>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/css/normalize.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"./../web/css/style_index.css\"/>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/js/slick/slick.css\"/>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/js/slick/slick-theme.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"./../web/css/fonts.css\"/>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/css/demo.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/css/component.css\" />




<title>";
        // line 35
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<body style=\"background-color:#f5f5ef;\">
<div class=\"container\">
\t<div class=\"row text-center topbarr\">
\t\t<div class=\"col-md-5 col-md-offset-1 barsize\">
\t\t\t<div class=\"col-md-6 barsize top-buffer1\"><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=contact\">Nous contacter</a></div>
\t\t\t<div class=\"col-md-1 barsize top-buffer1\"><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=fb_page\"><div class=\"linkfb\" style=\"margin:auto;\"></div></a></div>
\t\t</div>
\t\t<div class=\"col-md-3 col-md-offset-2 barsize top-buffer1\"><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=help\">Besoin d'aide ?</a></div>
\t</div>

\t\t<div class=\"row bar1\">
\t\t  \t<div class=\"row top-buffer2\">
\t\t\t  <div class=\"col-md-3 col-md-offset-2 top-buffer1 text-center\" >
\t\t\t  \t\t<a href =\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php\">
\t\t\t  <div class=\"logo\" style =\"width:200px;\"></div></a>
\t\t\t</div>


\t\t\t  <div class=\"col-md-5 col-md-offset-1 loglink text-center\">
\t\t\t\t<div class=\"col-md-5 text-right itemloglink barloglink\">

\t\t\t\t\t";
        // line 57
        if (array_key_exists("email_address", $context)) {
            // line 58
            echo "\t\t\t\t\t\t";
            if ((twig_length_filter($this->env, (isset($context["email_address"]) ? $context["email_address"] : null)) < 16)) {
                // line 59
                echo "\t\t\t\t\t\t<a href =\"";
                echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
                echo "/newproject/web/index.php?p=user_page\">";
                echo twig_escape_filter($this->env, (isset($context["email_address"]) ? $context["email_address"] : null), "html", null, true);
                echo "</a>
\t\t\t\t\t\t";
            } elseif ((twig_length_filter($this->env,             // line 60
(isset($context["email_address"]) ? $context["email_address"] : null)) > 16)) {
                // line 61
                echo "\t\t\t\t\t\t<a href =\"";
                echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
                echo "/newproject/web/index.php?p=user_page\">";
                echo twig_escape_filter($this->env, (isset($context["email_address_shortened"]) ? $context["email_address_shortened"] : null), "html", null, true);
                echo "</a>
\t\t\t\t\t\t";
            }
            // line 63
            echo "\t\t\t\t\t";
        } else {
            // line 64
            echo "\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php?p=login\">Se connecter</a>
\t\t\t\t\t";
        }
        // line 66
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-7 itemloglink otherlink left text-left\">
\t\t\t\t\t";
        // line 68
        if (array_key_exists("email_address", $context)) {
            // line 69
            echo "\t\t\t\t\t\t";
            if (array_key_exists("path", $context)) {
                // line 70
                echo "\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, (isset($context["root_path"]) ? $context["root_path"] : null), "html", null, true);
                echo "/newproject/web/";
                echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
                echo "\" class=\"img\" alt=\"Your profile picture suddenly disapeared ?!\"> 
\t\t\t\t\t\t";
            } else {
                // line 72
                echo "\t\t\t\t\t\t<img class=\"img\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["root_path"]) ? $context["root_path"] : null), "html", null, true);
                echo "/newproject/web/images/avatar/default_pic.jpg\">
\t\t\t\t\t\t";
            }
            // line 74
            echo "\t\t\t\t\t";
        } else {
            // line 75
            echo "\t\t\t\t\t<a href =\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php\">S'inscrire &nbsp;&nbsp;&nbsp;</a>
\t\t\t\t\t";
        }
        // line 77
        echo "\t\t\t\t\t<div class=\"col-md-offset-2 littletext logoutlink\" style=\"position:absolute;top:0;right:-20px;\">
\t\t\t\t\t";
        // line 78
        if (array_key_exists("email_address", $context)) {
            // line 79
            echo "\t\t\t\t\t\t<a href =\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php?p=logout \">Fermer la session</a>
\t\t\t\t\t";
        }
        // line 81
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t  </div>
\t\t\t  \t\t\t\t
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row text-center\">
\t\t\t";
        // line 91
        if ((((isset($context["methode"]) ? $context["methode"] : null) == "indexConnected") || ((isset($context["methode"]) ? $context["methode"] : null) == "showProductPage"))) {
            // line 92
            echo "\t\t\t<div class=\"bar2\">
\t\t\t\t<div class=\"barimg ";
            // line 93
            echo twig_escape_filter($this->env, (isset($context["methode"]) ? $context["methode"] : null), "html", null, true);
            echo "\" style=\"height:430px;width:100%;\">
\t\t\t\t\t<div class=\"middd\" style=\"width:100%;\">
\t\t\t\t\t\t";
            // line 95
            $this->loadTemplate("card/listCard.html.twig", "index.html.twig", 95)->display($context);
            // line 96
            echo "\t\t        \t</div>
\t        \t</div>
\t\t\t\t<div class=\"barimg2 ";
            // line 98
            echo twig_escape_filter($this->env, (isset($context["methode"]) ? $context["methode"] : null), "html", null, true);
            echo "\" style=\"height:430px;\">
\t\t\t\t\t<div class=\"phrase top-buffer12\">Goutez à la variété et à la simplicité
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"barimg3 ";
            // line 102
            echo twig_escape_filter($this->env, (isset($context["methode"]) ? $context["methode"] : null), "html", null, true);
            echo "\" style=\"height:430px;background-color: #edede7;\">
\t\t\t\t\t<div class=\"phrase\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\" top-buffer col-md-10 col-md-offset-1 middd\">
\t\t\t\t\t\t\t";
            // line 106
            $this->loadTemplate("user/help.html.twig", "index.html.twig", 106)->display($context);
            // line 107
            echo "\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t<div class=\"top-buffer col-md-10 col-md-offset-1 middd\">
\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t\t";
        } else {
            // line 115
            echo "

\t\t\t<div class=\"barimg ";
            // line 117
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
                echo "
\t                    ";
            } elseif ((            // line 126
(isset($context["methode"]) ? $context["methode"] : null) == "loggedUser")) {
                // line 127
                echo "\t                    ";
                $this->loadTemplate("user/form_logUser.html.twig", "index.html.twig", 127)->display($context);
                // line 128
                echo "
\t                    ";
            } elseif ((            // line 129
(isset($context["methode"]) ? $context["methode"] : null) == "showUser")) {
                // line 130
                echo "\t                    ";
                $this->loadTemplate("user/user_page.html.twig", "index.html.twig", 130)->display($context);
                // line 131
                echo "
\t                    ";
            } elseif ((            // line 132
(isset($context["methode"]) ? $context["methode"] : null) == "addUserInfo")) {
                // line 133
                echo "\t                    ";
                $this->loadTemplate("user/form_addUserInfo.html.twig", "index.html.twig", 133)->display($context);
                // line 134
                echo "
\t                    ";
            } elseif (((            // line 135
(isset($context["methode"]) ? $context["methode"] : null) == "indexConnected") || ((isset($context["methode"]) ? $context["methode"] : null) == "showProductPage"))) {
                // line 136
                echo "\t                    ";
                $this->loadTemplate("card/listCard.html.twig", "index.html.twig", 136)->display($context);
                // line 137
                echo " 
\t\t\t\t\t\t";
            } elseif ((            // line 138
(isset($context["methode"]) ? $context["methode"] : null) == "addUserStep2")) {
                // line 139
                echo "\t\t\t\t\t\t";
                $this->loadTemplate("user/form_addUserStep2.html.twig", "index.html.twig", 139)->display($context);
                // line 140
                echo "
\t                    ";
            } else {
                // line 142
                echo "\t                    ";
                $this->loadTemplate("user/form_addUser.html.twig", "index.html.twig", 142)->display($context);
                // line 143
                echo "\t                    ";
            }
            // line 144
            echo "
\t                </div>
            \t</div>
\t\t\t";
        }
        // line 148
        echo "\t\t</div>

\t\t";
        // line 151
        echo "
\t<div class=\"row etap-bloc overflow\">\t
\t\t<div class=\"col-md-12 text-center\">\t
\t\t\t<div class=\"xxs\" style=\"margin-left:-30px;width:100%;\">\t
\t\t\t<div class=\"x1 firstetap\">\t
\t\t\t\t<div class=\"x2\">\t
\t\t\t\t\t\t</div>\t
\t\t\t\t</div>\t
\t\t\t\t<div class=\"x1 secondetap\">\t
\t\t\t\t\t<div class=\"x2\">\t
\t\t\t\t\t \t</div>\t
\t\t\t\t</div>\t
\t\t\t<div class=\"x1 thirdetap\">\t
\t\t\t\t<div class=\"x2\">
\t\t\t\t \t</div>\t
\t\t\t\t</div>\t
\t\t\t<div class=\"x1 fourthetap\">\t
\t\t\t\t<div class=\"x2\">\t
\t\t\t\t\t</div>\t
\t\t\t</div>\t
\t\t\t</div>\t
\t\t</div>\t
\t</div>\t



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
        } elseif ((        // line 181
(isset($context["methode"]) ? $context["methode"] : null) != "showUser")) {
            // line 182
            echo "
\t";
            // line 184
            echo "
\t<div class=\"row abon-bloc text-center\">
\t\t<div class=\"abon-bloc-img\">
\t\t\t<div class=\"row abon-bloc-desc\">
\t\t\t\t<div class=\"col-md-2 col-md-offset-2 col-xs-1 col-xs-offset-2\">
\t\t\t\t\t<div class=\"row abon-title\">UN JOUR</div>
\t\t\t\t\t<div class=\"row abon-desc\">1 jour par semaine sauf week-end Midi/Soir</div>
\t\t\t\t\t<div class=\"row\"><form method=\"POST\" action=\"index.php?p=subscription&id=1\">
\t\t\t\t\t\t\t\t\t \t<input type=\"hidden\" name=\"p\" value=\"subscription\">
\t\t\t\t\t\t\t\t\t \t<input type=\"hidden\" name=\"id\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Découvrir\" class=\"abon-btn large subscribereplace\">
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2 col-md-offset-1 col-xs-1 col-xs-offset-2\">
\t\t\t\t\t<div class=\"row abon-title\">WEEK-END</div>
\t\t\t\t\t<div class=\"row abon-desc\">Le week-end midi/soir</div>
\t\t\t\t\t<div class=\"row\"><form method=\"POST\" action=\"index.php?p=subscription&id=2\">
\t\t\t\t\t\t\t\t\t \t<input type=\"hidden\" name=\"p\" value=\"subscription\">
\t\t\t\t\t\t\t\t\t \t<input type=\"hidden\" name=\"id\" value=\"2\">
\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Découvrir\" class=\"abon-btn large subscribereplace\">
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2 col-md-offset-1 col-xs-1 col-xs-offset-2\">
\t\t\t\t\t<div class=\"row abon-title\">SEMAINE</div>
\t\t\t\t\t<div class=\"row abon-desc\">5 jours par semaine Midi/soir</div>
\t\t\t\t\t<div class=\"row\">\t<form method=\"POST\" action=\"index.php?p=subscription&id=3\">
\t\t\t\t\t\t\t\t\t\t \t<input type=\"hidden\" name=\"p\" value=\"subscription\">
\t\t\t\t\t\t\t\t\t\t \t<input type=\"hidden\" name=\"id\" value=\"3\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Découvrir\" class=\"abon-btn large subscribereplace\">
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t";
        }
        // line 223
        echo "
\t";
        // line 224
        if (((isset($context["methode"]) ? $context["methode"] : null) != "showUser")) {
            // line 225
            echo "
\t";
            // line 227
            echo "\t<div class=\"row\">
\t\t<div class=\"col-md-12 description-bloc\">
\t\t\t<div class=\"row col-md-8 col-md-offset-2 db-center-bloc\">
\t\t\t\t<div >
\t\t\t\t\t<div class=\" db-title\">EN CE MOMENT</div>
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
        } elseif ((        // line 251
(isset($context["methode"]) ? $context["methode"] : null) == "showUser")) {
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
\t\t\t<form method=\"POST\" action=\"index.php?p=rateLastMeal\" class=\"last-meal-quality\">
\t\t\t\t<div class=\"row last-meal-lines\">
\t\t\t\t\t<div class=\"col-md-1 col-md-offset-2 col-xs-1 col-xs-offset-1 last-meal-titles-like\">Qualité:</div>
\t\t\t\t\t<div class=\"col-md-2 col-xs-2 col-xs-1 col-xs-offset-1 last-meal-choices-like slash\"><input type=\"radio\" name=\"like\" value=\"j'aime pas\" ";
            // line 263
            echo " id=\"sel1\"><label for=\"sel1\" class=\"label-like\"> J'aime pas</label><img src=\"./../web/images/asset/smiley-sad.png\" alt=\"smiley\" class=\"smileys\"></div>
\t\t\t\t\t<div class=\"col-md-2 col-xs-1 last-meal-choices-like slash\"><input type=\"radio\" name=\"like\" value=\"moyen\" class=\"radio-btn-like\" id=\"sel2\"><label for=\"sel2\" class=\"label-like\"> Moyen</label><img src=\"./../web/images/asset/smiley-soso.png\" alt=\"smiley\" class=\"smileys\"></div>
\t\t\t\t\t<div class=\"col-md-2 col-xs-1 last-meal-choices-like slash\"><input type=\"radio\" name=\"like\" value=\"j'aime\" class=\"radio-btn-like\" id=\"sel3\"><label for=\"sel3\" class=\"label-like\"> J'aime</label><img src=\"./../web/images/asset/smiley-happy.png\" alt=\"smiley\" class=\"smileys\"></div>
\t\t\t\t\t<div class=\"col-md-2 col-xs-1 last-meal-choices-like slash\"><input type=\"radio\" name=\"like\" value=\"j'aime beaucoup\" class=\"radio-btn-like\" id=\"sel4\"><label for=\"sel4\" class=\"label-like\"> J'aime beaucoup</label><img src=\"./../web/images/asset/smiley-happy.png\" alt=\"smiley\" class=\"smileys\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row last-meal-lines\">
\t\t\t\t\t<div class=\"col-md-1 col-md-offset-2 col-xs-1 col-xs-offset-1 last-meal-titles-like\">Nourrissant:</div>
\t\t\t\t\t<div class=\"col-md-2 col-xs-1 col-xs-1 col-xs-offset-1 last-meal-choices-like slash\"><input type=\"radio\" name=\"quantity\" value=\"pas assez\" class=\"radio-btn-like\" id=\"sel5\"><label for=\"sel5\" class=\"label-like\"> Pas assez</label><img src=\"./../web/images/asset/smiley-sad.png\" alt=\"smiley\" class=\"smileys\"></div>
\t\t\t\t\t<div class=\"col-md-2 col-xs-1 last-meal-choices-like slash\"><input type=\"radio\" name=\"quantity\" value=\"parfait\" class=\"radio-btn-like\" id=\"sel6\"><label for=\"sel6\" class=\"label-like\"> Parfait</label><img src=\"./../web/images/asset/smiley-happy.png\" alt=\"smiley\" class=\"smileys\"></div>
\t\t\t\t\t<div class=\"col-md-2 col-xs-1 last-meal-choices-like slash\"><input type=\"radio\" name=\"quantity\" value=\"trop\" class=\"radio-btn-like\" id=\"sel7\"><label for=\"sel7\" class=\"label-like\"> Trop consistant</label><img src=\"./../web/images/asset/smiley-soso.png\" alt=\"smiley\" class=\"smileys\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row last-meal-lines\">
\t\t\t\t\t<div class=\"col-md-1 col-md-offset-2 col-xs-1 col-xs-offset-1 last-meal-titles-like\">Varié:</div>
\t\t\t\t\t<div class=\"col-md-2 col-xs-2 col-xs-1 col-xs-offset-1 last-meal-choices-like slash\"><input type=\"radio\" name=\"variety\" value=\"pas assez\" class=\"radio-btn-like\"  id=\"sel8\"><label for=\"sel8\" class=\"label-like\"> Pas assez</label><img src=\"./../web/images/asset/smiley-sad.png\" alt=\"smiley\" class=\"smileys\"></div>
\t\t\t\t\t<div class=\"col-md-2 col-xs-1 last-meal-choices-like slash\"><input type=\"radio\" name=\"variety\" value=\"assez\" class=\"radio-btn-like\"  id=\"sel9\"><label for=\"sel9\" class=\"label-like\"> Assez</label><img src=\"./../web/images/asset/smiley-soso.png\" alt=\"smiley\" class=\"smileys\"></div>
\t\t\t\t\t<div class=\"col-md-2 col-xs-1 last-meal-choices-like slash\"><input type=\"radio\" name=\"variety\" value=\"parfait\" class=\"radio-btn-like\" id=\"sel10\"><label for=\"sel10\" class=\"label-like\"> Parfait</label><img src=\"./../web/images/asset/smiley-happy.png\" alt=\"smiley\" class=\"smileys\"></div>
\t\t\t\t\t<div class=\"col-md-2 col-xs-1 last-meal-choices-like slash\"><input type=\"radio\" name=\"variety\" value=\"trop\" class=\"radio-btn-like\" id=\"sel11\"><label for=\"sel11\" class=\"label-like\"> Trop varié</label><img src=\"./../web/images/asset/smiley-soso.png\" alt=\"smiley\" class=\"smileys\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<input class=\"btn-like\" type=\"submit\" value=\"Valider\">
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>

\t\t\t";
            // line 288
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
            // line 306
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
            // line 326
            echo "
\t\t";
            // line 327
            $context["foo"] = "bar";
            // line 328
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

\t";
        }
        // line 377
        echo "

\t";
        // line 380
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
        // line 391
        echo twig_escape_filter($this->env, (isset($context["root_path"]) ? $context["root_path"] : null), "html", null, true);
        echo "/newproject/web/images/asset/logo-iphone.png\">
\t\t\t\t<img class=\"footer-logo\" src=\"";
        // line 392
        echo twig_escape_filter($this->env, (isset($context["root_path"]) ? $context["root_path"] : null), "html", null, true);
        echo "/newproject/web/images/asset/logo-android.png\">
\t\t\t\t<img class=\"footer-logo\" src=\"";
        // line 393
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


\t</div>
</div>

<script type=\"text/javascript\" src=\"";
        // line 417
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/js/modernizr.custom.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 418
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/vendor/components/jquery/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"//code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 422
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/js/weekline/scripts/jquery.weekLine.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 423
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/js/weekline/timepicker/jquery.timepicker.min.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 425
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/js/slick/slick.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 426
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/js/subscription.js\"></script>

<script type=\"text/javascript\" src=\"./../web/js/refreshMeal.js\"></script>
<script type=\"text/javascript\" src=\"./../web/js/doYouLikeThis.js\"></script>
</body>";
    }

    // line 35
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
        return array (  656 => 35,  647 => 426,  643 => 425,  638 => 423,  634 => 422,  627 => 418,  623 => 417,  596 => 393,  592 => 392,  588 => 391,  575 => 380,  571 => 377,  520 => 328,  518 => 327,  515 => 326,  494 => 306,  475 => 288,  449 => 263,  441 => 257,  437 => 254,  434 => 252,  432 => 251,  406 => 227,  403 => 225,  401 => 224,  398 => 223,  357 => 184,  354 => 182,  352 => 181,  349 => 180,  347 => 179,  344 => 178,  342 => 177,  314 => 151,  310 => 148,  304 => 144,  301 => 143,  298 => 142,  294 => 140,  291 => 139,  289 => 138,  286 => 137,  283 => 136,  281 => 135,  278 => 134,  275 => 133,  273 => 132,  270 => 131,  267 => 130,  265 => 129,  262 => 128,  259 => 127,  257 => 126,  254 => 125,  251 => 124,  249 => 123,  240 => 117,  236 => 115,  226 => 107,  224 => 106,  217 => 102,  210 => 98,  206 => 96,  204 => 95,  199 => 93,  196 => 92,  194 => 91,  182 => 81,  176 => 79,  174 => 78,  171 => 77,  165 => 75,  162 => 74,  156 => 72,  148 => 70,  145 => 69,  143 => 68,  139 => 66,  133 => 64,  130 => 63,  122 => 61,  120 => 60,  113 => 59,  110 => 58,  108 => 57,  97 => 49,  88 => 43,  83 => 41,  79 => 40,  71 => 35,  63 => 30,  59 => 29,  54 => 27,  50 => 26,  45 => 24,  20 => 1,);
    }
}
