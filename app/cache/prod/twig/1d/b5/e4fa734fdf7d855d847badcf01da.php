<?php

/* json.twig */
class __TwigTemplate_1db5e4fa734fdf7d855d847badcf01da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"));
    }

    public function getTemplateName()
    {
        return "json.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
