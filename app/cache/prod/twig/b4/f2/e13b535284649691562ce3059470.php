<?php

/* ::macro.html.twig */
class __TwigTemplate_b4f2e13b535284649691562ce3059470 extends Twig_Template
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
        $context["macro"] = $this->env->loadTemplate("::macro.html.twig");
    }

    // line 2
    public function getlist($_items = null)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $_items,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            echo "\t<ul>
    ";
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 5
                echo "        <li data-code=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "code"), "html", null, true);
                echo "\"><a data-code=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "code"), "html", null, true);
                echo "\" href=\"#\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
                echo "</a>
        ";
                // line 6
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "child", array(), "any", true, true)) {
                    // line 7
                    echo "                ";
                    echo $this->getAttribute($this, "list", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "child")), "method");
                    echo "
        ";
                }
                // line 9
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    </li>
    </ul>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "::macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  58 => 9,  52 => 7,  37 => 4,  34 => 3,  23 => 2,  19 => 1,  223 => 124,  220 => 123,  208 => 114,  195 => 104,  162 => 73,  153 => 70,  149 => 68,  130 => 66,  126 => 65,  120 => 62,  116 => 61,  109 => 60,  105 => 59,  77 => 34,  50 => 6,  47 => 8,  41 => 5,  33 => 4,  28 => 2,);
    }
}
