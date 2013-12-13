<?php

/* NewOrderBundle:Third:index.html.twig */
class __TwigTemplate_67b1ff3f0b61b751cb3daa5697b36439 extends Twig_Template
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
                        <div class=\"col_3 active\"><span class=\"number\">3.</span> <span class=\"text\">Свойства<br /> заказа</span></div>
                        <div class=\"col_3\"><span class=\"number\">4.</span> <span class=\"text\">Подтверждение<br /> и отправка заказа</span></div>
                    </div>
                    <span class=\"progress-bar stripes\">
                        <span class=\"green\" style=\"width: 75%\"></span>
                    </span>
                </div>
            </div>
        </div>
        <div class=\"container first-step\" id=\"content\">
            <div class=\"col_1\">
                <br />
                <a class=\"icon-chevron-left nav prev\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getUrl("step2");
        echo "\"></a>
            </div>
            <div class=\"col_10\">
                
                <h2>Шаг 3. Пожалуйста отметьте атрибуты заказа</h2>
                <table>
                    <colgroup>
                        <col width=\"150\">
                        <col width=\"300\">
                    </colgroup>
                    <tbody>
                        <tr>
                            <td>Доставка</td>
                            <td>
                                <div id=\"datetimepicker1\" class=\"input-append\">
                                    <input data-format=\"dd/MM/yyyy hh:mm:ss\" ";
        // line 48
        if ((!array_key_exists("info", $context))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "time"), "html", null, true);
            echo "\"";
        }
        echo " type=\"text\"></input>
                                    <span class=\"add-on\">
                                      <i data-time-icon=\"icon-time\" data-date-icon=\"icon-calendar\">
                                      </i>
                                    </span>
                                  </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Тип отгрузки</td>
                            <td class=\"radio\">
                                <input type=\"radio\" ";
        // line 60
        if ((!array_key_exists("info", $context))) {
            if ((($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "dev") == 1) || (null === $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "dev")))) {
                echo "checked=\"\"";
            }
        } else {
            echo "checked=\"\"";
        }
        echo " name=\"dev\" value=1 id=\"dev1\"/><label for=\"dev1\">Белая</label><br />
                                <input type=\"radio\" ";
        // line 61
        if ((!array_key_exists("info", $context))) {
            if (($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "dev") == 2)) {
                echo "checked=\"\"";
            }
        }
        echo " name=\"dev\" value=2 id=\"dev2\"/><label for=\"dev2\">Черная</label>
                                
                            </td>
                        </tr>

                        <tr>
                            <td>Оплата</td>
                            <td class=\"radio\">
                                <input type=\"radio\"";
        // line 69
        if ((!array_key_exists("info", $context))) {
            echo " ";
            if ((($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "money") == 1) || (null === $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "money")))) {
                echo "checked=\"\"";
            }
        } else {
            echo "checked=\"\" ";
        }
        echo "name=\"money\" value=1 id=\"m1\"/><label for=\"m1\">Наличными водителю</label><br />
                                <input type=\"radio\" ";
        // line 70
        if ((!array_key_exists("info", $context))) {
            if (($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "money") == 2)) {
                echo "checked=\"\"";
            }
        }
        echo " name=\"money\" value=2 id=\"m2\"/><label for=\"m2\">Предоплата</label><br />
                                <input type=\"radio\"";
        // line 71
        if ((!array_key_exists("info", $context))) {
            echo " ";
            if (($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "money") == 3)) {
                echo "checked=\"\"";
            }
        }
        echo " name=\"money\" value=3 id=\"m3\"/><label for=\"m3\">Безналичный расчет</label><br />
                            </td>
                        </tr>

                        <tr>
                            <td>Комментарий</td>
                            <td><textarea id=\"comments\">";
        // line 77
        if ((!array_key_exists("info", $context))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "comment"), "html", null, true);
        }
        echo "</textarea></td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
            <div class=\"col_1\">
                <br />
                <a class=\"icon-chevron-right nav next\" href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getUrl("step4");
        echo "\"></a>
            </div>
            </div>
        </div>

    </div>
</div>
";
    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        // line 95
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"/static/scripts/app.js\"></script>
    <script src=\"/static/scripts/chosen.js\"></script>
    <script src=\"/static/scripts/chosen.ajaxaddition.js\"></script>
    <script>
        \$(document).ready(function(){
            
            
            \$('a.nav.next, a.nav.prev').click(function(e){
                if(\$(this).hasClass('disable')) {
                    e.preventDefault();
                }
                else {
                    var order = \$.cookie('order');
                    order.step3 = {
                        time : \$('#datetimepicker1 input').val(),
                        dev : \$('input[name=\"dev\"]:checked').val(),
                        money : \$('input[name=\"money\"]:checked').val(),
                        comment : \$('#comments').val()
                    }
                    //console.log(order.step3);
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
        return "NewOrderBundle:Third:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 95,  195 => 94,  170 => 77,  148 => 70,  137 => 69,  150 => 77,  113 => 57,  100 => 55,  226 => 148,  126 => 8,  228 => 122,  225 => 121,  206 => 104,  197 => 101,  185 => 98,  180 => 97,  153 => 78,  124 => 62,  104 => 53,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 65,  128 => 64,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 73,  135 => 53,  119 => 61,  102 => 57,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  94 => 28,  89 => 20,  85 => 25,  75 => 33,  68 => 14,  56 => 9,  201 => 92,  196 => 90,  183 => 85,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 71,  151 => 79,  142 => 59,  138 => 54,  136 => 71,  121 => 46,  117 => 58,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  28 => 3,  38 => 6,  26 => 6,  24 => 1,  87 => 55,  31 => 3,  25 => 3,  21 => 2,  19 => 1,  93 => 48,  88 => 6,  78 => 21,  46 => 7,  44 => 12,  27 => 4,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 11,  37 => 10,  22 => 2,  246 => 90,  157 => 80,  145 => 74,  139 => 70,  131 => 11,  123 => 62,  120 => 40,  115 => 60,  111 => 59,  108 => 72,  101 => 32,  98 => 31,  96 => 54,  83 => 25,  74 => 14,  66 => 24,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 7,  32 => 4,  29 => 3,  209 => 132,  203 => 78,  199 => 67,  193 => 100,  189 => 99,  187 => 84,  182 => 66,  176 => 96,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 80,  149 => 76,  147 => 76,  144 => 73,  141 => 72,  133 => 55,  130 => 61,  125 => 44,  122 => 61,  116 => 58,  112 => 60,  109 => 56,  106 => 58,  103 => 32,  99 => 51,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 7,  42 => 7,  39 => 5,  36 => 5,  33 => 4,  30 => 7,);
    }
}
