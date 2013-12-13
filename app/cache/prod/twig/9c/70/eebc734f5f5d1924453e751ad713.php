<?php

/* NewOrderBundle:Second:info.html.twig */
class __TwigTemplate_9c70eebc734f5f5d1924453e751ad713 extends Twig_Template
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
\t<table width=\"100%\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th width=\"2%\"></th>
\t\t\t\t<th>Товарная позиция</th>
\t\t\t\t<th>Цена за еденицу</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "\t            <tr data-json = \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "data"), "html", null, true);
            echo "\">
\t            \t<td style=\"text-align: center\">
\t            \t\t<input type=\"checkbox\" ";
            // line 14
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "check") == 1)) {
                echo "checked ";
            }
            echo " />
\t            \t</td>
\t                <td width=\"50%\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "</td>
\t                <td  width=\"15%\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "price"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "currency"), "html", null, true);
            echo "</td>                
\t            </tr>
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t</tbody>
\t</table>
</div>";
    }

    public function getTemplateName()
    {
        return "NewOrderBundle:Second:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 20,  52 => 17,  48 => 16,  41 => 14,  35 => 12,  31 => 11,  19 => 1,);
    }
}
