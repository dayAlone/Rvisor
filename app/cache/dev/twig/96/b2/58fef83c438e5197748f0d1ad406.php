<?php

/* NewOrderBundle:Four:index.html.twig */
class __TwigTemplate_96b258fef83c438e5197748f0d1ad406 extends Twig_Template
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
            <div class=\"col_3\">
                <div class=\"content\">
                    <h1>Новый заказ</h1>
                </div>
            </div>
            <div class=\"col_7 omega\">
                <div class=\"content\">
                    <div class=\"container\" id=\"description\">
                        <div class=\"col_3\"><span class=\"number\">1.</span> <span class=\"text\">Выбор <br />торговой точки</span></div>
                        <div class=\"col_3\"><span class=\"number\">2.</span> <span class=\"text\">Выбор<br /> ассортимента</span></div>
                        <div class=\"col_3\"><span class=\"number\">3.</span> <span class=\"text\">Свойства<br /> заказа</span></div>
                        <div class=\"col_3 active\"><span class=\"number\">4.</span> <span class=\"text\">Подтверждение<br /> и отправка заказа</span></div>
                    </div>
                    <span class=\"progress-bar stripes\">
                        <span class=\"green\" style=\"width: 100%\"></span>
                    </span>
                </div>
            </div>
        </div>
        <div class=\"container first-step\" id=\"content\">
            <div class=\"col_1\">
                <br />
                <a class=\"icon-chevron-left nav prev\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getUrl("step3");
        echo "\"></a>
            </div>
            <div class=\"col_10\">
                
                <h2>Шаг 4. Пожалуйста проверьте заказ перед отправкой</h2>
                <table>
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
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "name"), "html", null, true);
        echo "</td>
                        <tr>
                            <td>Адрес</td>
                            <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "address"), "html", null, true);
        echo "</td>
                            <td>Долг</td>
                            <td>";
        // line 53
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
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "time"), "html", null, true);
        echo "</td>
                            <td>Оплата</td>
                            <td>
                                ";
        // line 61
        if (($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "money") == 1)) {
            // line 62
            echo "                                    Наличными водителю
                                ";
        } elseif (($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "money") == 2)) {
            // line 64
            echo "                                    Предоплата
                                ";
        } elseif (($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "money") == 3)) {
            // line 66
            echo "                                    Безналичный расчет
                                ";
        }
        // line 68
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>Тип отгрузки</td>
                            <td>
                                ";
        // line 73
        if (($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "dev") == 1)) {
            // line 74
            echo "                                    Белая
                                ";
        } elseif (($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "dev") == 2)) {
            // line 76
            echo "                                    Черная
                                ";
        }
        // line 78
        echo "                            </td>
                            <td>Комментарий</td>
                            <td>";
        // line 80
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
        // line 96
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 97
            echo "                            <tr data-id = \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), "html", null, true);
            echo "\">
                                <td>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "</td>
                                <td>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "price"), "html", null, true);
            echo "</td>
                                <td>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type"), "html", null, true);
            echo "</td>
                                <td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "count"), "html", null, true);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                    </tbody>
                </table>
                <br /><br />
                <a href=\"#\" id=\"finish\">Отправить заказ</a>
                <br /><br /><br /><br />
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

    // line 121
    public function block_javascripts($context, array $blocks = array())
    {
        // line 122
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"/static/scripts/app.js\"></script>
    <script src=\"/static/scripts/chosen.js\"></script>
    <script src=\"/static/scripts/chosen.ajaxaddition.js\"></script>
    <script>
        \$(document).ready(function(){
            
            
            \$('a.nav.next').click(function(e){
                if(\$(this).hasClass('disable')) {
                    e.preventDefault();
                }
                else {
                    var order = \$.cookie('order');
                    order.step3 = {
                        time : \$('#datetimepicker1 input').val(),
                        dev : \$('input[name=\"dev\"]:checked').val(),
                        money : \$('input[name=\"dev\"]:checked').val(),
                        comment : \$('#comments').val()
                    }
                    
                    \$.cookie('order', order, { expires: 2, path: '/' });
                    window.location.href = \$(this).attr('href')
                }
                return false;
            })
            var order = \$.cookie('order');

            if(order){
                if(order.step3&&order.step3!='') \$('.nav.next').removeClass('disable')
            }

            \$('#datetimepicker1 input').appendDtpicker({\"locale\": \"ru\",\"firstDayOfWeek\": 1});
        })
    </script>
";
    }

    public function getTemplateName()
    {
        return "NewOrderBundle:Four:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 122,  225 => 121,  206 => 104,  197 => 101,  185 => 98,  180 => 97,  153 => 78,  124 => 62,  104 => 53,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 66,  128 => 64,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 73,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  94 => 28,  89 => 20,  85 => 25,  75 => 33,  68 => 14,  56 => 9,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 68,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  28 => 3,  38 => 6,  26 => 6,  24 => 3,  87 => 25,  31 => 3,  25 => 3,  21 => 2,  19 => 1,  93 => 48,  88 => 6,  78 => 21,  46 => 7,  44 => 12,  27 => 4,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 7,  37 => 10,  22 => 2,  246 => 90,  157 => 80,  145 => 74,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 24,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 100,  189 => 99,  187 => 84,  182 => 66,  176 => 96,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 76,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 61,  116 => 58,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 51,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 7,  42 => 7,  39 => 5,  36 => 5,  33 => 4,  30 => 7,);
    }
}
