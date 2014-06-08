<?php

/* base.html.twig */
class __TwigTemplate_0aeb01e27d2bfa6466b47589428033aa6ab4b53e9df8ce3c9d94b78f0bd4a5cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "</head>
<body>
<div id=\"main-wrapper\">
    <div id=\"header\">
        ";
        // line 15
        $this->displayBlock('header', $context, $blocks);
        // line 16
        echo "    </div>

    <div id=\"content\">";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
    <div id=\"footer\">
        ";
        // line 20
        $this->displayBlock('footer', $context, $blocks);
        // line 23
        echo "    </div>
</div>

";
        // line 26
        $this->displayBlock('script', $context, $blocks);
        // line 30
        echo "
</body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo " - Twig Test</title>

        ";
        // line 7
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 10
        echo "    ";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 7
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 8
        echo "            <link rel=\"stylesheet\" href=\"http://twigtest.local/views/public/css/style.css\" />
        ";
    }

    // line 15
    public function block_header($context, array $blocks = array())
    {
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        // line 21
        echo "            &copy; Copyright 2014 by <a href=\"http://wneeds.com/\">WNeeds Ltd.</a>.
        ";
    }

    // line 26
    public function block_script($context, array $blocks = array())
    {
        // line 27
        echo "    <script type=\"text/javascript\" language=\"javascript\" src=\"http://twigtest.local/views/public/js/jquery_1.5.2.js\"></script>
    <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 27,  111 => 26,  106 => 21,  103 => 20,  98 => 18,  93 => 15,  88 => 8,  85 => 7,  76 => 10,  59 => 30,  57 => 26,  52 => 23,  50 => 20,  45 => 18,  39 => 15,  33 => 11,  31 => 4,  26 => 1,  156 => 66,  152 => 64,  149 => 63,  143 => 59,  137 => 55,  129 => 49,  120 => 46,  116 => 45,  112 => 44,  108 => 43,  104 => 42,  101 => 41,  97 => 40,  82 => 27,  80 => 5,  77 => 25,  74 => 7,  72 => 22,  70 => 21,  68 => 5,  65 => 4,  62 => 17,  56 => 13,  53 => 12,  44 => 6,  41 => 16,  38 => 4,  32 => 3,);
    }
}
