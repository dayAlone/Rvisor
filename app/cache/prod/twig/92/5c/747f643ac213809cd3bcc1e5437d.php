<?php

/* NewOrderBundle:First:index.html.twig */
class __TwigTemplate_925c747f643ac213809cd3bcc1e5437d extends Twig_Template
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
                
                <h2>Шаг 1. Воспользуйтесь поиском для выбора необходимой торговой точки</h2>
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
                        <th>Макс. долг</th>
                    </tr>
                    </thead>
                    <tbody>
                        ";
        // line 54
        if (array_key_exists("prev", $context)) {
            // line 55
            echo "                        <tr  class=\"title\">
                            <td colspan=\"4\">Предыдущие клиенты</td>
                        </tr>
                        ";
            // line 58
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["prev"]) ? $context["prev"] : $this->getContext($context, "prev")));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 59
                echo "                            <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "code"), "html", null, true);
                echo "\" class=\"arch ";
                if (($this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "act") == 1)) {
                    echo "active";
                }
                echo "\">
                                <td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "name"), "html", null, true);
                echo "</td>
                                <td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "address"), "html", null, true);
                echo "</td>
                                <td>";
                // line 62
                if (($this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "debt") < 0)) {
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "debt") * (-1)), "html", null, true);
                } else {
                    echo "0";
                }
                echo "</td>
                                <td>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "max_debd"), "html", null, true);
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                        <tr class=\"title\">
                            <td colspan=\"4\">Результаты поска</td>
                        </tr>
                        ";
        }
        // line 70
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customers"]) ? $context["customers"] : $this->getContext($context, "customers")));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 71
            echo "                            <tr data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "code"), "html", null, true);
            echo "\" class=\"";
            if (($this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "act") == 1)) {
                echo "active";
            }
            echo "\">
                                <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "name"), "html", null, true);
            echo "</td>
                                <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "address"), "html", null, true);
            echo "</td>
                                <td>";
            // line 74
            if (($this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "debt") < 0)) {
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "debt") * (-1)), "html", null, true);
            } else {
                echo "0";
            }
            echo "</td>
                                <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "max_debd"), "html", null, true);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "
                    </tbody>
                </table>
            </div>
            <div class=\"col_1\">
                <br />
                <a class=\"icon-chevron-right nav next disable\" href=\"#\"></a>
            </div>
            </div>
        </div>

    </div>
</div>
";
    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        // line 94
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
                
            });
            var order = \$.cookie('order');
            
            if(order){
                if(order.step1&&order.step1!='') \$('.nav.next').removeClass('disable')
            }
            
            \$('#content.first-step tbody tr:not(.title)').live('click tap',function(){
                order = \$.cookie('order');
                
                if(!order) {
                    order = {
                        step1: \$(this).data().id
                    }
                }
                else {
                    order.step1 = \$(this).data().id
                }
                
                \$.cookie('order', order, { expires: 2, path: '/' });
                
                \$('#content.first-step tbody tr').removeClass('active');
                \$(this).toggleClass('active');
                if(\$('#content.first-step tbody tr.active').length>0) \$('.nav.next').removeClass('disable')
                
            });
            var show = 0;
            function check(){
                show=1;
                var id = \$('tr.active').data('id');
                if(\$('tr.active').hasClass('arch')&&confirm('Создать новый заказ на основе предыдущего?')){
                    \$.modal(\"Загружаем информацию о заказах\",{containerId:\"loading\",autoResize: true,onShow:function(){},overlayClose:true,closeClass: '.btn.cancel'});
                    \$.ajax({
                        url: '/orders/'+id,
                        success: function(data){
                            \$.modal.close();
                            \$.modal(data,{containerId:\"info-modal\",autoResize: true,onShow:function(){},overlayClose:true,closeClass: '.btn.cancel,.btn.add'});
                            \$('#orders  input[type=\"radio\"]').iCheck();
                    }});
                    return false;
                }
                else return true;
            }
            \$('#orders input[type=\"radio\"]').live('ifChecked', function(event){
                \$('#orders .go').show();
            });
            
            \$('#orders input[type=\"radio\"]').live('ifUnchecked', function(event){
                if(\$('.iradio.checked').length==0) \$('#orders .go').hide();
            });
            \$('#orders tbody tr').live('click',function(){
                \$(this).find('input[type=\"radio\"]').iCheck('check');
            })
            
            \$('#orders .btn.go').live('click',function(){
                if(\$('#orders .checked').parents('tr').data('id')) {
                    \$.get(\"/step2/\"+\$('#orders .checked').parents('tr').data('id'),function(data){
                       if(data) {
                        id = \$('#content.first-step table tr.active').data('id')
                        order = \$.cookie('order');
                        data = JSON.parse(data);
                        
                        if(!order) order = {}
                        order.step1 = id
                        
                        order.step2 = data;
                        //console.log(order);
                        \$.cookie('order', order, { expires: 2, path: '/' });
                        window.location.href=\"";
        // line 185
        echo $this->env->getExtension('routing')->getUrl("step2");
        echo "\"
                        //order = \$.cookie('order');
                        //console.log(order);
                       }
                    });
                    
                }
            });


            \$('#content.first-step tbody tr:not(.title)').live('dblclick ',function(x){
                if(show!=1&& check()){
                    
                    order = \$.cookie('order');
                    if(order.step1 != \"\") window.location.href = \"";
        // line 199
        echo $this->env->getExtension('routing')->getUrl("step2");
        echo "\";
                }
                x.preventDefault();
            })
            \$('#content.first-step tbody tr:not(.title)').live('doubletap',function(x){
                if(show!=1&& check()){
                    
                    order = \$.cookie('order');
                    if(order.step1 != \"\") window.location.href = \"";
        // line 207
        echo $this->env->getExtension('routing')->getUrl("step2");
        echo "\";
                }
                x.preventDefault();
            })
            \$('.nav.next').click(function(x){
                if(check()){
                    
                    if(!\$(this).hasClass('disable')) {
                        
                        order = \$.cookie('order');
                        console.log(order);
                        if(order.step1 != \"\") window.location.href = \"";
        // line 218
        echo $this->env->getExtension('routing')->getUrl("step2");
        echo "\"
                    }
                }
                x.preventDefault();
            });
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
        return array (  343 => 218,  329 => 207,  318 => 199,  301 => 185,  206 => 94,  203 => 93,  186 => 78,  177 => 75,  169 => 74,  165 => 73,  161 => 72,  152 => 71,  147 => 70,  141 => 66,  132 => 63,  124 => 62,  120 => 61,  116 => 60,  107 => 59,  103 => 58,  98 => 55,  96 => 54,  48 => 8,  45 => 7,  39 => 5,  31 => 3,);
    }
}
