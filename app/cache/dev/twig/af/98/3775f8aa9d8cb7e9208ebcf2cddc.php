<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_af983775f8aa9d8cb7e9208ebcf2cddc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\">
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " / ";
        echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit") == (-1))) ? ("&infin;") : (twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit") / 1024) / 1024)))));
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  76 => 25,  198 => 95,  195 => 94,  170 => 77,  148 => 70,  137 => 69,  150 => 77,  113 => 57,  100 => 55,  226 => 148,  126 => 8,  228 => 122,  225 => 121,  206 => 104,  197 => 101,  185 => 98,  180 => 97,  153 => 78,  124 => 62,  104 => 53,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 65,  128 => 64,  107 => 36,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 73,  135 => 53,  119 => 61,  102 => 57,  71 => 21,  67 => 20,  63 => 18,  59 => 16,  94 => 28,  89 => 20,  85 => 25,  75 => 33,  68 => 20,  56 => 11,  201 => 92,  196 => 90,  183 => 85,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 71,  151 => 79,  142 => 59,  138 => 54,  136 => 71,  121 => 46,  117 => 58,  105 => 40,  91 => 33,  62 => 23,  49 => 16,  28 => 3,  38 => 7,  26 => 6,  24 => 1,  87 => 55,  31 => 4,  25 => 3,  21 => 2,  19 => 1,  93 => 48,  88 => 32,  78 => 21,  46 => 13,  44 => 10,  27 => 4,  79 => 13,  72 => 16,  69 => 11,  47 => 11,  40 => 11,  37 => 10,  22 => 2,  246 => 90,  157 => 80,  145 => 74,  139 => 70,  131 => 11,  123 => 62,  120 => 40,  115 => 60,  111 => 59,  108 => 72,  101 => 32,  98 => 31,  96 => 54,  83 => 25,  74 => 12,  66 => 24,  55 => 13,  52 => 12,  50 => 10,  43 => 8,  41 => 7,  35 => 7,  32 => 4,  29 => 3,  209 => 132,  203 => 78,  199 => 67,  193 => 100,  189 => 99,  187 => 84,  182 => 66,  176 => 96,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 80,  149 => 76,  147 => 76,  144 => 73,  141 => 72,  133 => 55,  130 => 61,  125 => 44,  122 => 61,  116 => 58,  112 => 60,  109 => 56,  106 => 58,  103 => 32,  99 => 51,  95 => 28,  92 => 21,  86 => 28,  82 => 28,  80 => 27,  73 => 24,  64 => 8,  60 => 6,  57 => 11,  54 => 10,  51 => 13,  48 => 8,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
