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
        if ($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "time", array(), "any", true, true)) {
            echo "  value=\"";
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
        if ($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "dev", array(), "any", true, true)) {
            if ((($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "dev") == 1) || (null === $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "dev")))) {
                echo "checked=\"\"";
            }
        } else {
            echo "checked=\"\"";
        }
        echo " name=\"dev\" value=1 id=\"dev1\"/><label for=\"dev1\">Белая</label><br />
                                <input type=\"radio\" ";
        // line 61
        if ($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "dev", array(), "any", true, true)) {
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
        if ($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "time", array(), "any", true, true)) {
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
        if ($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "time", array(), "any", true, true)) {
            if (($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "money") == 2)) {
                echo "checked=\"\"";
            }
        }
        echo " name=\"money\" value=2 id=\"m2\"/><label for=\"m2\">Предоплата</label><br />
                                <input type=\"radio\"";
        // line 71
        if ($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "time", array(), "any", true, true)) {
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
        if ($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "comment", array(), "any", true, true)) {
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
        return array (  198 => 95,  195 => 94,  183 => 85,  170 => 77,  156 => 71,  148 => 70,  137 => 69,  122 => 61,  112 => 60,  93 => 48,  75 => 33,  48 => 8,  45 => 7,  39 => 5,  31 => 3,);
    }
}
