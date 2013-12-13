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
        if ($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "time", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "time"), "html", null, true);
        }
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
                        <th>Количество</th>
                        <th width=\"12%\">Итого   </th>
                    </tr>
                    </thead>
                    <tbody>
                        ";
        // line 96
        $context["total"] = 0;
        // line 97
        echo "                        ";
        $context["currency"] = 0;
        // line 98
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 99
            echo "                            <tr data-id = \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), "html", null, true);
            echo "\">
                                <td>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "</td>
                                <td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "price"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "currency"), "html", null, true);
            echo "</td>
                                <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type"), "html", null, true);
            echo "</td>
                                <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "count"), "html", null, true);
            echo "</td>
                                <td>";
            // line 104
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "price") * $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "count")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "currency"), "html", null, true);
            echo "</td>
                            </tr>
                            ";
            // line 106
            $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "price") * $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "count")));
            // line 107
            echo "                            ";
            $context["currency"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "currency");
            // line 108
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                    </tbody>
                </table>
                <div id=\"total\" style=\"width: 20%; text-align: right; margin-right: 15px \">
                    ";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["currency"]) ? $context["currency"] : $this->getContext($context, "currency")), "html", null, true);
        echo "
                </div>
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
<div id=\"notifications\" class=\"margin\"></div>
";
    }

    // line 130
    public function block_javascripts($context, array $blocks = array())
    {
        // line 131
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"/static/scripts/app.js\"></script>
    <script src=\"/static/scripts/chosen.js\"></script>
    <script src=\"/static/scripts/chosen.ajaxaddition.js\"></script>
    <script>
        (function (\$) {
    \$.notification = function (settings) {
        var con, notification, hide, image, right, left, inner;
        
        settings = \$.extend({
            title: undefined,
            content: undefined,
            timeout: 0,
            img: undefined,
            border: true,
            fill: false,
            showTime: false,
            click: undefined,
            icon: undefined,
            color: undefined,
            error: false
        }, settings);
        
        con = \$(\"#notifications\");
        if (!con.length) {
            con = \$(\"<div>\", { id: \"notifications\" }).appendTo(\$(\"#overlays\"))
        };
        
        notification = \$(\"<div>\");
        notification.addClass(\"notification animated fadeInLeftMiddle fast\");
        
        if(settings.error == true) {
            notification.addClass(\"error\");
        }
        
        if( \$(\"#notifications .notification\").length > 0 ) {
            notification.addClass(\"more\");
        } else {
            con.addClass(\"animated flipInX\").delay(1000).queue(function(){ 
                con.removeClass(\"animated flipInX\");
                    con.clearQueue();
            });
        }
        
        hide = \$(\"<div>\", {
            click: function () {
                 
                
                if(\$(this).parent().is(':last-child')) {
                    \$(this).parent().remove();
                    \$('#notifications .notification:last-child').removeClass(\"more\");
                } else {
                    \$(this).parent().remove();
                }
            }
        });
        
        hide.addClass(\"hide\");

        left = \$(\"<div class='left'>\");
        right = \$(\"<div class='right'>\");
        
        if(settings.title != undefined) {
            var htmlTitle = \"<h2>\" + settings.title + \"</h2>\";
        } else {
            var htmlTitle = \"\";
        }
        
        if(settings.content != undefined) {
            var htmlContent = settings.content;
        } else {
            var htmlContent = \"\";
        }
        
        inner = \$(\"<div>\", { html: htmlTitle + htmlContent });
        inner.addClass(\"inner\");
        
        inner.appendTo(right);
        
        if (settings.img != undefined) {
            image = \$(\"<div>\", {
                style: \"background-image: url('\"+settings.img+\"')\"
            });
        
            image.addClass(\"img\");
            image.appendTo(left);
            
            if(settings.border==false) {
                image.addClass(\"border\")
            }
            
            if(settings.fill==true) {
                image.addClass(\"fill\");
            }
            
        } else {
            if (settings.icon != undefined) {
                var iconType = settings.icon;
            } else {
                if(settings.error!=true) {
                    var iconType = '\"';
                } else {
                    var iconType = '!';
                }
            }   
            icon = \$('<div class=\"icon\">').html(iconType);
            
            if (settings.color != undefined) {
                icon.css(\"color\", settings.color);
            }
            
            icon.appendTo(left);
        }

        left.appendTo(notification);
        right.appendTo(notification);
        
        hide.appendTo(notification);
        
        function timeSince(time){
            var time_formats = [
              [2, \"One second\", \"1 second from now\"], // 60*2
              [60, \"seconds\", 1], // 60
              [120, \"One minute\", \"1 minute from now\"], // 60*2
              [3600, \"minutes\", 60], // 60*60, 60
              [7200, \"One hour\", \"1 hour from now\"], // 60*60*2
              [86400, \"hours\", 3600], // 60*60*24, 60*60
              [172800, \"One day\", \"tomorrow\"], // 60*60*24*2
              [604800, \"days\", 86400], // 60*60*24*7, 60*60*24
              [1209600, \"One week\", \"next week\"], // 60*60*24*7*4*2
              [2419200, \"weeks\", 604800], // 60*60*24*7*4, 60*60*24*7
              [4838400, \"One month\", \"next month\"], // 60*60*24*7*4*2
              [29030400, \"months\", 2419200], // 60*60*24*7*4*12, 60*60*24*7*4
              [58060800, \"One year\", \"next year\"], // 60*60*24*7*4*12*2
              [2903040000, \"years\", 29030400], // 60*60*24*7*4*12*100, 60*60*24*7*4*12
              [5806080000, \"One century\", \"next century\"], // 60*60*24*7*4*12*100*2
              [58060800000, \"centuries\", 2903040000] // 60*60*24*7*4*12*100*20, 60*60*24*7*4*12*100
            ];
            
            var seconds = (new Date - time) / 1000;
            var token = \"ago\", list_choice = 1;
            if (seconds < 0) {
                seconds = Math.abs(seconds);
                token = \"from now\";
                list_choice = 1;
            }
            var i = 0, format;
            
            while (format = time_formats[i++]) if (seconds < format[0]) {
                if (typeof format[2] == \"string\")
                    return format[list_choice];
                else
                    return Math.floor(seconds / format[2]) + \" \" + format[1];
            }
            return time;
        };
        
        if(settings.showTime != false) {
            var timestamp = Number(new Date());
            
            timeHTML = \$(\"<div>\", { html: \"<strong>\" + timeSince(timestamp) + \"</strong> ago\" });
            timeHTML.addClass(\"time\").attr(\"title\", timestamp);
            timeHTML.appendTo(right);
            
            setInterval(
                function() {
                    \$(\".time\").each(function () {
                        var timing = \$(this).attr(\"title\");
                        \$(this).html(\"<strong>\" + timeSince(timing) + \"</strong> ago\");
                    });
                }, 4000)
            
        }

        notification.hover(
            function () {
                hide.show();
            }, 
            function () {
                hide.hide();
            }
        );
        
        notification.prependTo(con);
        
        notification.show();

        if (settings.timeout) {
            setTimeout(function () {
                var prev = notification.prev();
                if(prev.hasClass(\"more\")) {
                    if(prev.is(\":first-child\") || notification.is(\":last-child\")) {
                        prev.removeClass(\"more\");
                    }
                }
                notification.remove();
            }, settings.timeout)
        }
        
        if (settings.click != undefined) {
            notification.addClass(\"click\");
            notification.bind(\"click\", function (event) {
                var target = \$(event.target);
                if(!target.is(\".hide\") ) {
                    settings.click.call(this)
                }
            })
        }
        return this
    }
})(jQuery);
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

                

            \$('#finish').click(function(e){
                e.preventDefault();
                
                \$.ajax({
                    url: '";
        // line 369
        echo $this->env->getExtension('routing')->getUrl("finish");
        echo "',
                    success: function(data) {
                        \$.notification( 
                            {
                                title: \"Зазказ \"+data,
                                content: \"Ваш заказ успешно оформлен!\",
                                img: \"/static/images/logo-sm.png\",
                                border: false,
                            }
                        );
                        setTimeout(function(){
                            window.location.href = '/';
                        },3000)
                    }
                })
            });
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
        return array (  502 => 369,  260 => 131,  257 => 130,  234 => 112,  229 => 109,  223 => 108,  220 => 107,  218 => 106,  211 => 104,  207 => 103,  203 => 102,  197 => 101,  193 => 100,  188 => 99,  183 => 98,  180 => 97,  178 => 96,  159 => 80,  155 => 78,  151 => 76,  147 => 74,  145 => 73,  138 => 68,  134 => 66,  130 => 64,  126 => 62,  124 => 61,  116 => 58,  104 => 53,  99 => 51,  93 => 48,  75 => 33,  48 => 8,  45 => 7,  39 => 5,  31 => 3,);
    }
}
