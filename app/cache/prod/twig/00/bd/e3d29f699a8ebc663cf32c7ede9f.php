<?php

/* ::base.html.twig */
class __TwigTemplate_00bde3d29f699a8ebc663cf32c7ede9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'bodyclass' => array($this, 'block_bodyclass'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"user-scalable=no, initial-scale = 1, minimum-scale = 1, maximum-scale = 1, width=device-width\" />
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    </head>
    <body class=\"";
        // line 12
        $this->displayBlock('bodyclass', $context, $blocks);
        echo "\">
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Rvisor";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "            <link rel=\"stylesheet\" href=\"/static/stylesheets/app.css\">
        ";
    }

    // line 12
    public function block_bodyclass($context, array $blocks = array())
    {
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        // line 15
        echo "            <script src=\"/static/scripts/library.js\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 15,  80 => 14,  75 => 13,  70 => 12,  65 => 9,  62 => 8,  50 => 17,  47 => 14,  41 => 12,  38 => 11,  36 => 8,  32 => 7,  24 => 1,  71 => 21,  68 => 20,  56 => 7,  52 => 10,  48 => 8,  45 => 13,  39 => 5,  31 => 3,);
    }
}
