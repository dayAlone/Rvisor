<?php

/* ::main.html.twig */
class __TwigTemplate_db12ac283a52afcc7d56fe8ee6a90057 extends Twig_Template
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
    <div id=\"header\">
        <ul class=\"con\">
            <li class=\"dashboard active\">
                <a href=\"#\"><i class=\"icon-user \"></i> Торговый представитель</a>
            </li>
            <li class=\"dashboard innactive\">
                <a href=\"#\"><i class=\"icon-group \"></i> Супервайзер</a>
            </li>
            <a href=\"/\" id=\"logo\"><img src=\"/static/images/logo.png\"></a>
        </ul>
    </div>
    <div id=\"stream\">
        <div class=\"con\">
            <a class=\"tile innactive\" href=\"#\" id=\"recent\">
                <span class=\"vector icon-camera\"></span>
                <span class=\"title\"><strong>Фотоотчет</strong></span>

            </a>
            <a class=\"tile innactive\" href=\"#\" id=\"mobile\">
                <span class=\"vector icon-bar-chart\"></span>
                <span class=\"title\"><strong>План</strong></span>

            </a>

            <a class=\"tile innactive\" id=\"comment\">
                <span class=\"vector icon-book\"></span>
                <span class=\"title\"><strong>Отчеты</strong> </span>

            </a>
            <a class=\"tile innactive\" href=\"#\" id=\"elements\">
                <span class=\"vector icon-file-text\"></span>
                <span class=\"title\"><strong>Заказы</strong> </span>

            </a>
            <a class=\"tile active\" href=\"/\" id=\"article\">
                <span class=\"vector icon-shopping-cart\"></span>
                <span class=\"title\"><strong>Новый</strong> заказ</span>

            </a>



            <div class=\"tile\" id=\"hello\">
                <h2><span>Здравствуйте,<br /></span> ";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</h2>
                <ul class=\"nav\">
                    <li class=\"hidden\">
                        <a href=\"#home\" class=\"icon-cogs\"></a>
                    </li>
                    <li>
                        <a href=\"/logout\" class=\"icon-signout\"></a>
                    </li>
                    <li>

                    </li>
                </ul>
            </div>

        </div>
    </div>
        ";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 75
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

    // line 71
    public function block_body($context, array $blocks = array())
    {
    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        // line 73
        echo "            <script src=\"/static/scripts/library.js\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 73,  141 => 72,  136 => 71,  131 => 11,  126 => 8,  123 => 7,  117 => 6,  111 => 75,  108 => 72,  106 => 71,  87 => 55,  40 => 11,  37 => 10,  35 => 7,  31 => 6,  24 => 1,);
    }
}
