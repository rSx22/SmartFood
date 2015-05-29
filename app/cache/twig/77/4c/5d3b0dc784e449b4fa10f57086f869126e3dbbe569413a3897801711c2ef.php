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

  <div class=\"zob\" role=\"progressbar\" aria-valuenow=\"70\"
  aria-valuemin=\"0\" aria-valuemax=\"100\">
    <span class=\"sr-only\">70% Complete</span>
  </div>
<div class=\"container\">
\t<div class=\"row text-center topbarr\">
\t\t<div class=\"col-md-5 col-md-offset-1 barsize\">
\t\t\t<div class=\"col-md-6 barsize top-buffer1\"><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=contact\">Nous contacter</a></div>
\t\t\t<div class=\"col-md-1 barsize top-buffer1\"><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=fb_page\"><div class=\"linkfb\" style=\"margin:auto;\"></div></a></div>
\t\t</div>
\t\t<div class=\"col-md-3 col-md-offset-2 barsize top-buffer1\"><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php?p=help\">Besoin d'aide ?</a></div>
\t</div>

\t\t<div class=\"row bar1\">
\t\t  \t<div class=\"row top-buffer2\">
\t\t\t  <div class=\"col-md-3 col-md-offset-2 top-buffer1 text-center\" >
\t\t\t  \t\t<a href =\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/index.php\">
\t\t\t  <div class=\"logo\" style =\"width:200px;\"></div></a>
\t\t\t</div>


\t\t\t  <div class=\"col-md-5 col-md-offset-1 loglink text-center\">
\t\t\t\t<div class=\"col-md-5 text-right itemloglink barloglink\">

\t\t\t\t\t";
        // line 62
        if (array_key_exists("email_address", $context)) {
            // line 63
            echo "\t\t\t\t\t\t";
            if ((twig_length_filter($this->env, (isset($context["email_address"]) ? $context["email_address"] : null)) < 16)) {
                // line 64
                echo "\t\t\t\t\t\t<a href =\"";
                echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
                echo "/newproject/web/index.php?p=user_page\">";
                echo twig_escape_filter($this->env, (isset($context["email_address"]) ? $context["email_address"] : null), "html", null, true);
                echo "</a>
\t\t\t\t\t\t";
            } elseif ((twig_length_filter($this->env,             // line 65
(isset($context["email_address"]) ? $context["email_address"] : null)) > 16)) {
                // line 66
                echo "\t\t\t\t\t\t<a href =\"";
                echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
                echo "/newproject/web/index.php?p=user_page\">";
                echo twig_escape_filter($this->env, (isset($context["email_address_shortened"]) ? $context["email_address_shortened"] : null), "html", null, true);
                echo "</a>
\t\t\t\t\t\t";
            }
            // line 68
            echo "\t\t\t\t\t";
        } else {
            // line 69
            echo "\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php?p=login\">Se connecter</a>
\t\t\t\t\t";
        }
        // line 71
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-7 itemloglink otherlink left text-left\">
\t\t\t\t\t";
        // line 73
        if (array_key_exists("email_address", $context)) {
            // line 74
            echo "\t\t\t\t\t\t";
            if (array_key_exists("path", $context)) {
                // line 75
                echo "\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, (isset($context["root_path"]) ? $context["root_path"] : null), "html", null, true);
                echo "/newproject/web/";
                echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
                echo "\" class=\"img\" alt=\"Your profile picture suddenly disapeared ?!\"> 
\t\t\t\t\t\t";
            } else {
                // line 77
                echo "\t\t\t\t\t\t<img class=\"img\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["root_path"]) ? $context["root_path"] : null), "html", null, true);
                echo "/newproject/web/images/avatar/default_pic.jpg\">
\t\t\t\t\t\t";
            }
            // line 79
            echo "\t\t\t\t\t";
        } else {
            // line 80
            echo "\t\t\t\t\t<a href =\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php\">S'inscrire &nbsp;&nbsp;&nbsp;</a>
\t\t\t\t\t";
        }
        // line 82
        echo "\t\t\t\t\t<div class=\"col-md-offset-2 littletext logoutlink\" style=\"position:absolute;top:0;right:-20px;\">
\t\t\t\t\t";
        // line 83
        if (array_key_exists("email_address", $context)) {
            // line 84
            echo "\t\t\t\t\t\t<a href =\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
            echo "/newproject/web/index.php?p=logout \">Fermer la session</a>
\t\t\t\t\t";
        }
        // line 86
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t  </div>
\t\t\t  \t\t\t\t
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row text-center\">
\t\t\t";
        // line 96
        if ((((isset($context["methode"]) ? $context["methode"] : null) == "indexConnected") || ((isset($context["methode"]) ? $context["methode"] : null) == "showProductPage"))) {
            // line 97
            echo "\t\t\t<div class=\"bar2\">
\t\t\t\t<div class=\"barimg ";
            // line 98
            echo twig_escape_filter($this->env, (isset($context["methode"]) ? $context["methode"] : null), "html", null, true);
            echo "\" style=\"height:430px;width:100%;\">
\t\t\t\t\t<div class=\"middd\" style=\"width:100%;\">
\t\t\t\t\t\t";
            // line 100
            $this->loadTemplate("card/listCard.html.twig", "index.html.twig", 100)->display($context);
            // line 101
            echo "\t\t        \t</div>
\t        \t</div>
\t\t\t\t<div class=\"barimg2 ";
            // line 103
            echo twig_escape_filter($this->env, (isset($context["methode"]) ? $context["methode"] : null), "html", null, true);
            echo "\" style=\"height:430px;\">
\t\t\t\t\t<div class=\"phrase top-buffer12\">Goutez à la variété et à la simplicité
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"barimg3 ";
            // line 107
            echo twig_escape_filter($this->env, (isset($context["methode"]) ? $context["methode"] : null), "html", null, true);
            echo "\" style=\"height:430px;background-color: #edede7;\">
\t\t\t\t\t<div class=\"phrase\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\" top-buffer col-md-10 col-md-offset-1 middd\">
\t\t\t\t\t\t\t";
            // line 111
            $this->loadTemplate("user/help.html.twig", "index.html.twig", 111)->display($context);
            // line 112
            echo "\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t<div class=\"top-buffer col-md-10 col-md-offset-1 middd\">
\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t\t";
        } else {
            // line 120
            echo "

\t\t\t<div class=\"barimg ";
            // line 122
            echo twig_escape_filter($this->env, (isset($context["methode"]) ? $context["methode"] : null), "html", null, true);
            echo "\">
                <h2 class=\"phrase top-buffer3\">Phrase d'accroche<h2>
                <div class=\"undertitle\">Livraison à emporter / Temps de livraison / Nb Restaurants partenaires / Nombre de spécialtés
                </div>        
\t                <div class=\"row top-buffer col-md-10 col-md-offset-1 middd\">

\t                    ";
            // line 128
            if (((isset($context["methode"]) ? $context["methode"] : null) == "logUser")) {
                // line 129
                echo "\t                    ";
                $this->loadTemplate("user/form_logUser.html.twig", "index.html.twig", 129)->display($context);
                // line 130
                echo "
\t                    ";
            } elseif ((            // line 131
(isset($context["methode"]) ? $context["methode"] : null) == "loggedUser")) {
                // line 132
                echo "\t                    ";
                $this->loadTemplate("user/form_logUser.html.twig", "index.html.twig", 132)->display($context);
                // line 133
                echo "
\t                    ";
            } elseif ((            // line 134
(isset($context["methode"]) ? $context["methode"] : null) == "showUser")) {
                // line 135
                echo "\t                    ";
                $this->loadTemplate("user/user_page.html.twig", "index.html.twig", 135)->display($context);
                // line 136
                echo "
\t                    ";
            } elseif ((            // line 137
(isset($context["methode"]) ? $context["methode"] : null) == "addUserInfo")) {
                // line 138
                echo "\t                    ";
                $this->loadTemplate("user/form_addUserInfo.html.twig", "index.html.twig", 138)->display($context);
                // line 139
                echo "
\t                    ";
            } elseif (((            // line 140
(isset($context["methode"]) ? $context["methode"] : null) == "indexConnected") || ((isset($context["methode"]) ? $context["methode"] : null) == "showProductPage"))) {
                // line 141
                echo "\t                    ";
                $this->loadTemplate("card/listCard.html.twig", "index.html.twig", 141)->display($context);
                // line 142
                echo " 
\t\t\t\t\t\t";
            } elseif ((            // line 143
(isset($context["methode"]) ? $context["methode"] : null) == "addUserStep2")) {
                // line 144
                echo "\t\t\t\t\t\t";
                $this->loadTemplate("user/form_addUserStep2.html.twig", "index.html.twig", 144)->display($context);
                // line 145
                echo "
\t                    ";
            } else {
                // line 147
                echo "\t                    ";
                $this->loadTemplate("user/form_addUser.html.twig", "index.html.twig", 147)->display($context);
                // line 148
                echo "\t                    ";
            }
            // line 149
            echo "
\t                </div>
            \t</div>
\t\t\t";
        }
        // line 153
        echo "\t\t</div>

\t\t";
        // line 156
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
        // line 182
        if (((isset($context["methode"]) ? $context["methode"] : null) == "showProductPage")) {
            // line 183
            echo "
\t<div class=\"pdctpage row\">
\t
\t";
            // line 186
            $this->loadTemplate("product/product_page.html.twig", "index.html.twig", 186)->display($context);
            // line 187
            echo "
\t</div>

\t";
        } elseif ((        // line 190
(isset($context["methode"]) ? $context["methode"] : null) != "showUser")) {
            // line 191
            echo "
\t";
            // line 193
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
        // line 232
        echo "
\t";
        // line 233
        if (((isset($context["methode"]) ? $context["methode"] : null) != "showUser")) {
            // line 234
            echo "
\t";
            // line 236
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
        } elseif ((        // line 260
(isset($context["methode"]) ? $context["methode"] : null) == "showUser")) {
            // line 261
            echo "
\t";
            // line 263
            echo "\t<div class=\"row big-user-bloc text-center\">

\t\t\t";
            // line 266
            echo "
\t\t<div class=\"row last-meal-bloc\">
\t\t\t<div class=\"row title-last-meal\">MON DERNIER REPAS:</div>
\t\t\t<form method=\"POST\" action=\"index.php?p=user_page\" class=\"last-meal-quality\">
\t\t\t\t<div class=\"row last-meal-lines\">
\t\t\t\t\t<div class=\"col-md-1 col-md-offset-2 col-xs-1 col-xs-offset-1 last-meal-titles-like\">Qualité:</div>
\t\t\t\t\t<div class=\"col-md-2 col-xs-2 col-xs-1 col-xs-offset-1 last-meal-choices-like slash\"><input type=\"radio\" name=\"like\" value=\"j'aime pas\" ";
            // line 272
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
            // line 297
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
            // line 315
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
            // line 335
            echo "
\t\t";
            // line 336
            $context["foo"] = "bar";
            // line 337
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
        // line 386
        echo "

\t";
        // line 389
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
        // line 400
        echo twig_escape_filter($this->env, (isset($context["root_path"]) ? $context["root_path"] : null), "html", null, true);
        echo "/newproject/web/images/asset/logo-iphone.png\">
\t\t\t\t<img class=\"footer-logo\" src=\"";
        // line 401
        echo twig_escape_filter($this->env, (isset($context["root_path"]) ? $context["root_path"] : null), "html", null, true);
        echo "/newproject/web/images/asset/logo-android.png\">
\t\t\t\t<img class=\"footer-logo\" src=\"";
        // line 402
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
        // line 426
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/js/modernizr.custom.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 427
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/vendor/components/jquery/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"//code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 431
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/js/weekline/scripts/jquery.weekLine.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 432
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/js/weekline/timepicker/jquery.timepicker.min.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 434
        echo twig_escape_filter($this->env, (isset($context["url_path"]) ? $context["url_path"] : null), "html", null, true);
        echo "/newproject/web/js/slick/slick.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 435
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
        return array (  665 => 35,  656 => 435,  652 => 434,  647 => 432,  643 => 431,  636 => 427,  632 => 426,  605 => 402,  601 => 401,  597 => 400,  584 => 389,  580 => 386,  529 => 337,  527 => 336,  524 => 335,  503 => 315,  484 => 297,  458 => 272,  450 => 266,  446 => 263,  443 => 261,  441 => 260,  415 => 236,  412 => 234,  410 => 233,  407 => 232,  366 => 193,  363 => 191,  361 => 190,  356 => 187,  354 => 186,  349 => 183,  347 => 182,  319 => 156,  315 => 153,  309 => 149,  306 => 148,  303 => 147,  299 => 145,  296 => 144,  294 => 143,  291 => 142,  288 => 141,  286 => 140,  283 => 139,  280 => 138,  278 => 137,  275 => 136,  272 => 135,  270 => 134,  267 => 133,  264 => 132,  262 => 131,  259 => 130,  256 => 129,  254 => 128,  245 => 122,  241 => 120,  231 => 112,  229 => 111,  222 => 107,  215 => 103,  211 => 101,  209 => 100,  204 => 98,  201 => 97,  199 => 96,  187 => 86,  181 => 84,  179 => 83,  176 => 82,  170 => 80,  167 => 79,  161 => 77,  153 => 75,  150 => 74,  148 => 73,  144 => 71,  138 => 69,  135 => 68,  127 => 66,  125 => 65,  118 => 64,  115 => 63,  113 => 62,  102 => 54,  93 => 48,  88 => 46,  84 => 45,  71 => 35,  63 => 30,  59 => 29,  54 => 27,  50 => 26,  45 => 24,  20 => 1,);
    }
}
