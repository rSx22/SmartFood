<?php

/* product/form_delProduct.html.twig */
class __TwigTemplate_1c60638498efe68d51e035bc32b1191f721f1c684ff69d78c44924f09ded613b extends Twig_Template
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
        $this->loadTemplate("index.html.twig", "product/form_delProduct.html.twig", 1)->display($context);
        // line 2
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div>write product u want to delete
</div>
<div style=\"border:1px solid; width:300px;\">
\t<form method=\"POST\" action=\"index.php?p=del_product\"> 
\t\tName product to del: <input type=\"text\" name=\"name\"><br>
\t\t<input type=\"submit\">
\t</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "product/form_delProduct.html.twig";
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