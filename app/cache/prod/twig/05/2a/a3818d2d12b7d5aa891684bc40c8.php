<?php

/* ::main.html.twig */
class __TwigTemplate_052aa3818d2d12b7d5aa891684bc40c8 extends Twig_Template
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
            <a class=\"tile ";
        // line 42
        if (((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")) == "order_history")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getUrl("history");
        echo "\" id=\"elements\">
                <span class=\"vector icon-file-text\"></span>
                <span class=\"title\"><strong>Заказы</strong> </span>

            </a>
            <a class=\"tile ";
        // line 47
        if (((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")) == "new_order")) {
            echo "active";
        }
        echo "\" href=\"/\" id=\"article\">
                <span class=\"vector icon-shopping-cart\"></span>
                <span class=\"title\"><strong>Новый</strong> заказ</span>

            </a>



            <div class=\"tile\" id=\"hello\">
                <h2><span>Здравствуйте,<br /></span> ";
        // line 56
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
        // line 73
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 77
        echo "        <div id=\"footer\">Rvisor © 2013. Система управления современной торговлей.</div>
    </body>
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

    // line 73
    public function block_body($context, array $blocks = array())
    {
    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        // line 75
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
        return array (  159 => 75,  156 => 74,  151 => 73,  146 => 12,  141 => 9,  138 => 8,  132 => 7,  125 => 77,  122 => 74,  120 => 73,  86 => 47,  74 => 42,  41 => 12,  38 => 11,  36 => 8,  32 => 7,  24 => 1,  225 => 142,  214 => 134,  206 => 129,  150 => 77,  147 => 76,  130 => 61,  117 => 58,  113 => 57,  109 => 56,  100 => 56,  96 => 54,  48 => 8,  45 => 7,  39 => 5,  31 => 3,);
    }
}
