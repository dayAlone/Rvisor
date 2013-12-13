<?php

/* NewOrderBundle:History:index.html.twig */
class __TwigTemplate_b0680d3dbb0f6db6373be5c4958cf8cf extends Twig_Template
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
        echo " | История заказов";
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
                
            </div>
            <div class=\"col_10\">
                <table id=\"history\">
                    <thead>
                    <tr>
                        <th style=\"width: 60px\">Номер</th>
                        <th style=\"width: 400px\">Клиент</th>
                        <th style=\"width: 200px\">Комментарий</th>
                        <th style=\"width: 120px\">Дата создания</th>
                        <th style=\"width: 20px\"></th>
                    </tr>
                    </thead>
                    <tbody>
                        ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 35
            echo "                            <tr data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), "html", null, true);
            echo "\">
                                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), "html", null, true);
            echo "</td>
                                <td><strong>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "client"), "html", null, true);
            echo "</strong><br /><small>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "address"), "html", null, true);
            echo "</small></td>
                                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "comment"), "html", null, true);
            echo "</td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "date"), "html", null, true);
            echo "</td>
                                <td class=\"next\"><a class=\"icon-chevron-right next\" href=\"/history/";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), "html", null, true);
            echo "/\"></a></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
                    </tbody>
                </table>
            </div>
            <div class=\"col_1\">
                <br />
                
            </div>
            </div>
        </div>

    </div>
</div>
";
    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        // line 59
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"/static/scripts/app.js\"></script>
    <script>
        \$(document).ready(function(){
           
           \$('#history tr').on('dblclick',function(x){
                x.preventDefault();
                window.location.href = \$(this).find('a').attr('href')
            })
            \$('#history tr').on('doubletap',function(x){
                x.preventDefault();
                window.location.href = \$(this).find('a').attr('href')
            })
        })
    </script>
";
    }

    public function getTemplateName()
    {
        return "NewOrderBundle:History:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 59,  129 => 58,  112 => 43,  103 => 40,  99 => 39,  95 => 38,  89 => 37,  85 => 36,  80 => 35,  76 => 34,  48 => 8,  45 => 7,  39 => 5,  31 => 3,);
    }
}
