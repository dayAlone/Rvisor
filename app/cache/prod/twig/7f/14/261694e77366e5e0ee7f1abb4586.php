<?php

/* ::base.html.twig */
class __TwigTemplate_7f14261694e77366e5e0ee7f1abb4586 extends Twig_Template
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
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
    <body class=\"";
        // line 11
        $this->displayBlock('bodyclass', $context, $blocks);
        echo "\">
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Rvisor";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "            <link rel=\"stylesheet\" href=\"/static/stylesheets/app.css\">
        ";
    }

    // line 11
    public function block_bodyclass($context, array $blocks = array())
    {
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "            <script src=\"/static/scripts/library.js\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  82 => 14,  79 => 13,  74 => 12,  69 => 11,  64 => 8,  61 => 7,  55 => 6,  49 => 16,  46 => 13,  44 => 12,  40 => 11,  37 => 10,  35 => 7,  31 => 6,  24 => 1,);
    }
}
