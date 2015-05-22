<?php

/* product/form_addProduct.html.twig */
class __TwigTemplate_6f126dc22016bc314811369b70bd5b1fd80659687c8b4938a14023ef42336827 extends Twig_Template
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
        $this->loadTemplate("index.html.twig", "product/form_addProduct.html.twig", 1)->display($context);
        // line 2
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div>Add product</div>
<div style=\"border:1px solid; width:300px;\">
\t<form method=\"POST\" action=\"index.php?p=add_product\" enctype=\"multipart/form-data\"> 
\tid : <input type=\"text\" name=\"id\"><br>
\t\tName : <input type=\"text\" name=\"name\"><br>
\t\tPrice : <input type=\"text\" name=\"price\">€<br>
\t\tDescription : <input type=\"text\" name=\"desc\"><br>
\t\tNumber of Kcal : <input type=\"number\" name=\"cal\"><br><br>
\t\t<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"2097152\"\">
\t\tPicture : <input type=\"file\" name=\"picture\"><br>
\t\t<input type=\"submit\">
\t</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "product/form_addProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 2,  20 => 1,);
    }
}
