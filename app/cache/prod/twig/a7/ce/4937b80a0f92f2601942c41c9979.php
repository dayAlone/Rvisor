<?php

/* NewOrderBundle:First:orders.html.twig */
class __TwigTemplate_a7ce4937b80a0f92f2601942c41c9979 extends Twig_Template
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
        echo "<div id=\"orders\">
\t<h3>Заказы для ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "html", null, true);
        echo "</h3>
\t<p> Выберите необходимый</p>
\t<table>
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th width=\"3%\"></th>
\t\t\t\t<th>Номер заказа</th>
\t\t\t\t<th>Дата</th>
\t\t\t\t<th>Комментарий</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "                <tr data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), "html", null, true);
            echo "\">
                   <td>
                   \t<input type=\"radio\" name=\"order\">
                   </td>
                   <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), "html", null, true);
            echo "</td>
                   <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "date"), "html", null, true);
            echo "</td>
                   <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "comment"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t</tbody>
\t</table>
\t<a class=\"btn cancel\">Отмена</a>
\t<a class=\"btn go\">Продолжить</a>
</div>";
    }

    public function getTemplateName()
    {
        return "NewOrderBundle:First:orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 24,  57 => 21,  53 => 20,  49 => 19,  41 => 15,  37 => 14,  22 => 2,  19 => 1,);
    }
}
