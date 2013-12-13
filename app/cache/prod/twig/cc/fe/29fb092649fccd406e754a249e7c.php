<?php

/* NewOrderBundle:History:detail.html.twig */
class __TwigTemplate_ccfe29fb092649fccd406e754a249e7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::main.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bodyclass' => array($this, 'block_bodyclass'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " | Новый заказ | Шаг 2";
    }

    // line 5
    public function block_bodyclass($context, array $blocks = array())
    {
        echo "dashboard";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<div id=\"dashboard\">
    <div class=\"scroll con\">
        <div class=\"container\" id=\"title\">
            <div class=\"col_12\">
                <div class=\"content\">
                    <h1>История заказов</h1>
                </div>
            </div>
        </div>
        <div class=\"container first-step\" id=\"content\">
            <div class=\"col_1\">
                <br />
                <a class=\"icon-chevron-left nav prev\" href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getUrl("history");
        echo "\"></a>
            </div>
            <div class=\"col_10\">
                <table id=\"history\">
                    <colgroup>
                        <col width=\"150\">
                        <col width=\"300\">
                         <col width=\"150\">
                        <col width=\"300\">
                    </colgroup>
                    <tbody>
                        <tr>
                            <td>Название компании</td>
                            <td colspan=\"3\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "name"), "html", null, true);
        echo "</td>
                        <tr>
                            <td>Адрес</td>
                            <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "address"), "html", null, true);
        echo "</td>
                            <td>Долг</td>
                            <td>";
        // line 38
        if (($this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "debt") < 0)) {
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "debt") * (-1)), "html", null, true);
        } else {
            echo "0";
        }
        echo "</td>
                        </tr>

                        <tr>
                            <td>Доставка</td>
                            <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "time"), "html", null, true);
        echo "</td>
                            <td>Комментарий</td>
                            <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "comment"), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>
                <br />
                <table>
                    <thead>
                    <tr>
                        <th style=\"width: 340px\">Товарная позиция</th>
                        <th>Цена за единицу</th>
                        <th>Единица</th>
                        <th>Колличество</th>
                    </tr>
                    </thead>
                    <tbody>
                        
                        ";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 62
            echo "                            <tr>
                                <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "</td>
                                <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "price"), "html", null, true);
            echo "</td>
                                <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type"), "html", null, true);
            echo "</td>
                                <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "count"), "html", null, true);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                    </tbody>
                </table>
                <br /><br />
                
                <br /><br /><br /><br />
            </div>
            <div class=\"col_1\">
                <br />
                
            </div>
            </div>
        </div>

    </div>
</div>
<div id=\"notifications\" class=\"margin\"></div>
";
    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        // line 88
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"/static/scripts/app.js\"></script>
    
";
    }

    public function getTemplateName()
    {
        return "NewOrderBundle:History:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 88,  173 => 87,  153 => 69,  144 => 66,  140 => 65,  136 => 64,  132 => 63,  129 => 62,  125 => 61,  106 => 45,  101 => 43,  89 => 38,  84 => 36,  78 => 33,  62 => 20,  48 => 8,  45 => 7,  39 => 5,  31 => 3,);
    }
}
