<?php

/* NewOrderBundle:First:index.html.twig */
class __TwigTemplate_9358c850e75bd401c255a69c51af14e3 extends Twig_Template
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
        echo " | Новый заказ | Шаг 1";
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
            <div class=\"col_3\">
                <div class=\"content\">
                    <h1>Новый заказ</h1>
                </div>
            </div>
            <div class=\"col_7 omega\">
                <div class=\"content\">
                    <div class=\"container\" id=\"description\">
                        <div class=\"col_3 active\"><span class=\"number\">1.</span> <span class=\"text\">Выбор <br />торговой точки</span></div>
                        <div class=\"col_3\"><span class=\"number\">2.</span> <span class=\"text\">Выбор<br /> ассортимента</span></div>
                        <div class=\"col_3\"><span class=\"number\">3.</span> <span class=\"text\">Свойства<br /> заказа</span></div>
                        <div class=\"col_3\"><span class=\"number\">4.</span> <span class=\"text\">Подтверждение<br /> и отправка заказа</span></div>
                    </div>
                    <span class=\"progress-bar stripes\">
                        <span class=\"green\" style=\"width: 25%\"></span>
                    </span>
                </div>
            </div>
        </div>
        <div class=\"container first-step\" id=\"content\">
            <div class=\"col_1\">
                <br />
                <a class=\"icon-chevron-left nav prev disable\" href=\"#\"></a>
            </div>
            <div class=\"col_10\">
                <div id=\"query\">";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "html", null, true);
        echo "</div>
                <h2>Шаг 1. Пожалуйста выберите торговую точку</h2>
                <form id=\"search\" class=\"content\">
                    <p>
                        <i class=\"icon-search\"></i>
                        <input type=\"text\" placeholder=\"быстрый поиск\">
                    </p>
                </form>
                <table>
                    <thead>
                    <tr>
                        <th>Название торговой точки</th>
                        <th style=\"width: 500px\">Адрес</th>
                        <th>Долг</th>

                    </tr>
                    </thead>
                    <tbody>
                        ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customers"]) ? $context["customers"] : $this->getContext($context, "customers")));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 55
            echo "                            <tr id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "code"), "html", null, true);
            echo "\">
                                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "name"), "html", null, true);
            echo "</td>
                                <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "address"), "html", null, true);
            echo "</td>
                                <td>";
            // line 58
            if (($this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "debt") < 0)) {
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "debt") * (-1)), "html", null, true);
            } else {
                echo "0";
            }
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
                    </tbody>
                </table>
            </div>
            <div class=\"col_1\">
                <br />
                <a class=\"icon-chevron-right nav\" href=\"#\"></a>
            </div>
            </div>
        </div>

    </div>
</div>
";
    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        // line 77
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"/static/scripts/app.js\"></script>
    <script>
        \$(document).ready(function(){
            \$('#search input').focus();

            var timer;
            \$('#search input').keyup(function(){

                var url = \"\"
                if(\$(this).val()) url ='/search/'+\$(this).val();
                else '/';
                clearTimeout(timer);
                timer = setTimeout(function(){
                    \$.ajax({
                        url: url,
                        success: function(data){
                            \$('#content table tbody').html(\$('#content table tbody',data).html());
                        }
                    });
                },300);
                console.log(\$(this).val()+' '+url);
            });
            \$('#content.first-step tbody tr').click(function(){
                
            })
        })
    </script>
";
    }

    public function getTemplateName()
    {
        return "NewOrderBundle:First:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 77,  146 => 76,  129 => 61,  116 => 58,  112 => 57,  108 => 56,  103 => 55,  99 => 54,  78 => 36,  48 => 8,  45 => 7,  39 => 5,  31 => 3,);
    }
}
