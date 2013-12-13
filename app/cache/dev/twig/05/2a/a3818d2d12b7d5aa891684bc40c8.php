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
        return array (  126 => 8,  228 => 122,  225 => 121,  206 => 104,  197 => 101,  185 => 98,  180 => 97,  153 => 78,  124 => 62,  104 => 53,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 66,  128 => 64,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 73,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  94 => 28,  89 => 20,  85 => 25,  75 => 33,  68 => 14,  56 => 9,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 71,  121 => 46,  117 => 6,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  28 => 3,  38 => 6,  26 => 6,  24 => 1,  87 => 55,  31 => 6,  25 => 3,  21 => 2,  19 => 1,  93 => 48,  88 => 6,  78 => 21,  46 => 7,  44 => 12,  27 => 4,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 11,  37 => 10,  22 => 2,  246 => 90,  157 => 80,  145 => 74,  139 => 45,  131 => 11,  123 => 7,  120 => 40,  115 => 43,  111 => 75,  108 => 72,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 24,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 100,  189 => 99,  187 => 84,  182 => 66,  176 => 96,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 76,  147 => 58,  144 => 73,  141 => 72,  133 => 55,  130 => 41,  125 => 44,  122 => 61,  116 => 58,  112 => 42,  109 => 34,  106 => 71,  103 => 32,  99 => 51,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 7,  42 => 7,  39 => 5,  36 => 5,  33 => 4,  30 => 7,);
    }
}
