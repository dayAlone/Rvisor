<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_d6b46c300340988e40b300baac9fac50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"content\">
        ";
        // line 5
        $this->env->loadTemplate("@WebProfiler/Profiler/header.html.twig")->display(array());
        // line 6
        echo "
        <div id=\"main\">
            <div class=\"clear-fix\">
                <div id=\"collector-wrapper\">
                    <div id=\"collector-content\">
                        ";
        // line 11
        $this->displayBlock('panel', $context, $blocks);
        // line 34
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 37
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_search_bar"));
        echo "
                    ";
        // line 38
        $this->env->loadTemplate("@WebProfiler/Profiler/admin.html.twig")->display(array("token" => ""));
        // line 39
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 11
    public function block_panel($context, array $blocks = array())
    {
        // line 12
        echo "                            ";
        if (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "purge")) {
            // line 13
            echo "                                <h2>The profiler database was purged successfully</h2>
                                <p>
                                    <em>Now you need to browse some pages with the Symfony Profiler enabled to collect data.</em>
                                </p>
                            ";
        } elseif (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "upload_error")) {
            // line 18
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>No file given or the file was not uploaded successfully.</em>
                                </p>
                            ";
        } elseif (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "already_exists")) {
            // line 23
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>The token already exists in the database.</em>
                                </p>
                            ";
        } elseif (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "no_token")) {
            // line 28
            echo "                                <h2>Token not found</h2>
                                <p>
                                    <em>Token \"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" was not found in the database.</em>
                                </p>
                            ";
        }
        // line 33
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 328,  339 => 316,  295 => 275,  20 => 1,  77 => 28,  65 => 11,  357 => 123,  344 => 318,  332 => 116,  327 => 114,  324 => 113,  318 => 111,  306 => 107,  297 => 276,  291 => 102,  263 => 95,  231 => 83,  212 => 78,  202 => 77,  190 => 76,  174 => 65,  389 => 160,  386 => 159,  378 => 157,  371 => 156,  367 => 155,  363 => 126,  358 => 151,  353 => 121,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  321 => 112,  307 => 128,  302 => 125,  296 => 121,  293 => 120,  290 => 119,  288 => 101,  281 => 114,  276 => 111,  274 => 97,  265 => 96,  259 => 103,  255 => 93,  253 => 100,  232 => 88,  222 => 83,  210 => 77,  184 => 63,  155 => 47,  152 => 46,  127 => 35,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 158,  373 => 156,  361 => 152,  351 => 120,  348 => 140,  342 => 317,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 110,  303 => 106,  300 => 105,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 97,  233 => 87,  216 => 79,  213 => 78,  207 => 75,  200 => 72,  194 => 68,  181 => 65,  81 => 29,  70 => 24,  53 => 15,  806 => 488,  803 => 487,  792 => 485,  788 => 484,  784 => 482,  771 => 481,  745 => 476,  742 => 475,  723 => 473,  706 => 472,  702 => 470,  698 => 469,  694 => 468,  690 => 467,  686 => 466,  682 => 465,  678 => 464,  675 => 463,  673 => 462,  656 => 461,  645 => 460,  630 => 455,  625 => 453,  621 => 452,  618 => 451,  616 => 450,  602 => 449,  565 => 414,  547 => 411,  530 => 410,  527 => 409,  525 => 408,  520 => 406,  515 => 404,  244 => 136,  188 => 90,  165 => 60,  90 => 20,  84 => 35,  58 => 18,  191 => 67,  178 => 59,  175 => 58,  172 => 57,  161 => 63,  134 => 39,  118 => 49,  34 => 5,  76 => 27,  198 => 95,  195 => 94,  170 => 56,  148 => 70,  137 => 69,  150 => 55,  113 => 40,  100 => 36,  226 => 84,  126 => 8,  228 => 122,  225 => 121,  206 => 104,  197 => 69,  185 => 74,  180 => 97,  153 => 56,  124 => 62,  104 => 37,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 150,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 109,  309 => 108,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 100,  278 => 98,  268 => 85,  264 => 84,  258 => 94,  252 => 80,  247 => 78,  241 => 93,  229 => 87,  220 => 81,  214 => 69,  177 => 65,  169 => 60,  140 => 58,  132 => 65,  128 => 64,  107 => 36,  61 => 15,  273 => 96,  269 => 107,  254 => 92,  243 => 92,  240 => 86,  238 => 85,  235 => 85,  230 => 82,  227 => 86,  224 => 81,  221 => 77,  219 => 76,  217 => 75,  208 => 76,  204 => 72,  179 => 69,  159 => 61,  143 => 51,  135 => 53,  119 => 40,  102 => 33,  71 => 13,  67 => 22,  63 => 21,  59 => 14,  94 => 38,  89 => 30,  85 => 23,  75 => 28,  68 => 12,  56 => 11,  201 => 92,  196 => 92,  183 => 85,  171 => 61,  166 => 54,  163 => 53,  158 => 80,  156 => 62,  151 => 59,  142 => 59,  138 => 54,  136 => 48,  121 => 50,  117 => 39,  105 => 25,  91 => 35,  62 => 24,  49 => 14,  28 => 3,  38 => 12,  26 => 6,  24 => 2,  87 => 32,  31 => 8,  25 => 3,  21 => 2,  19 => 1,  93 => 48,  88 => 25,  78 => 18,  46 => 34,  44 => 11,  27 => 4,  79 => 29,  72 => 18,  69 => 17,  47 => 15,  40 => 8,  37 => 6,  22 => 2,  246 => 96,  157 => 80,  145 => 52,  139 => 49,  131 => 45,  123 => 42,  120 => 31,  115 => 60,  111 => 47,  108 => 72,  101 => 31,  98 => 34,  96 => 30,  83 => 31,  74 => 12,  66 => 25,  55 => 38,  52 => 12,  50 => 15,  43 => 11,  41 => 8,  35 => 5,  32 => 4,  29 => 3,  209 => 132,  203 => 73,  199 => 93,  193 => 100,  189 => 66,  187 => 75,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 76,  147 => 43,  144 => 42,  141 => 51,  133 => 55,  130 => 46,  125 => 42,  122 => 41,  116 => 39,  112 => 36,  109 => 47,  106 => 51,  103 => 32,  99 => 23,  95 => 34,  92 => 28,  86 => 28,  82 => 19,  80 => 32,  73 => 27,  64 => 21,  60 => 20,  57 => 39,  54 => 19,  51 => 37,  48 => 8,  45 => 14,  42 => 13,  39 => 10,  36 => 7,  33 => 6,  30 => 5,);
    }
}
