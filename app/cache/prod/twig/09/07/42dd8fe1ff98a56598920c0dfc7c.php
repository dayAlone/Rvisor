<?php

/* NewOrderBundle:Second:state.html.twig */
class __TwigTemplate_090742dd8fe1ff98a56598920c0dfc7c extends Twig_Template
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
        echo "<div id=\"tree-detail\">
\t<h3>Наличие на складах</h3>
\t<p>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " </p>
\t<table width=\"100%\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th width=\"3%\">Код</th>
\t\t\t\t<th>Склад</th>
\t\t\t\t<th>Колличество товара</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "\t            <tr>
\t            \t<td>
\t            \t\t";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), "html", null, true);
            echo "
\t            \t</td>
\t                <td width=\"50%\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "</td>
\t                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "count"), "html", null, true);
            echo "</td>
\t            </tr>
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t        
\t\t</tbody>
\t</table>
\t<a href=\"#\" style=\"float: right\" class=\"btn cancel\">Продолжить</a>
</div>";
    }

    public function getTemplateName()
    {
        return "NewOrderBundle:Second:state.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 22,  53 => 19,  49 => 18,  44 => 16,  40 => 14,  36 => 13,  23 => 3,  19 => 1,);
    }
}
