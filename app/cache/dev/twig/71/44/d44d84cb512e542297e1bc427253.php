<?php

/* NewOrderBundle:Second:index.html.twig */
class __TwigTemplate_7144d44d84cb512e542297e1bc427253 extends Twig_Template
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
                        <div class=\"col_3 active\"><span class=\"number\">2.</span> <span class=\"text\">Выбор<br /> ассортимента</span></div>
                        <div class=\"col_3\"><span class=\"number\">3.</span> <span class=\"text\">Свойства<br /> заказа</span></div>
                        <div class=\"col_3\"><span class=\"number\">4.</span> <span class=\"text\">Подтверждение<br /> и отправка заказа</span></div>
                    </div>
                    <span class=\"progress-bar stripes\">
                        <span class=\"green\" style=\"width: 50%\"></span>
                    </span>
                </div>
            </div>
        </div>
        <div class=\"container first-step\" id=\"content\">
            <div class=\"col_1\">
                <br />
                <a class=\"icon-chevron-left nav prev\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getUrl("index");
        echo "\"></a>
            </div>
            <div class=\"col_10\">
                
                <h2>Шаг 2. Воспользуйтесь поиском для выбора необходимого товарного ассортимента</h2>
                <form id=\"search\" class=\"content\">
                    <p>
                        <i class=\"icon-search\"></i>
                        <select data-placeholder=\" \" style=\"width:350px;\" multiple=\"\" tabindex=\"3\">
                            <option value=\"\"></option>
                        </select>
                    </p>
                </form>
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
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 58
            echo "                            <tr data-id = \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), "html", null, true);
            echo "\">
                                <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "</td>
                                <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "price"), "html", null, true);
            echo "</td>
                                <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type"), "html", null, true);
            echo "</td>
                                <td class=\"action\"><a href=\"#\" class=\"minus\">–</a><input type=\"text\" value=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "count"), "html", null, true);
            echo "\"><a href=\"#\" class=\"plus\">+</a><a class=\"del\">&#215;</a></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                    </tbody>
                </table>
            </div>
            <div class=\"col_1\">
                <br />
                <a class=\"icon-chevron-right nav next disable\" href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getUrl("step3");
        echo "\"></a>
            </div>
            </div>
        </div>

    </div>
</div>
";
    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        // line 80
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"/static/scripts/app.js\"></script>
    <script src=\"/static/scripts/chosen.js\"></script>
    <script src=\"/static/scripts/chosen.ajaxaddition.js\"></script>
    <script>
        \$(document).ready(function(){
            
            var timer;
            
            \$('#search select').ajaxChosen({
                dataType: 'json',
                type: 'POST',
                url:'/search',
                data:  {'keyboard':'cat'}, //Or can be [{'name':'keyboard', 'value':'cat'}]. chose your favorite, it handles both.
                success: function(data, textStatus, jqXHR){ 
                    console.log(data);
                }
            },{
                processItems: function(data){ return data.results; },
                generateUrl: function(q){ 
                    return '/step2/search/'+q; 
                    \$('#search input[type=\"text\"]').val(q);
                },
                loadingImg: '/static/images/loading.gif'
            });
            var objLength = function(obj){    
                var key,len=0;
                for(key in obj){
                    len += Number( obj.hasOwnProperty(key) );
                }
                return len;
            };
            \$('a.nav.next').click(function(e){
                if(\$(this).hasClass('disable')) {
                    e.preventDefault();
                }
                else window.location.href = \$(this).attr('href')
            })
            \$('td.action a').live('click',function(){
                var order = \$.cookie('order');
                var id = \$(this).parents('tr').data('id');
                var input = \$(this).parents('td.action').find('input');
                var val = parseInt(input.val());
                
                if(order.step2[id].substring) order.step2[id] = JSON.parse(order.step2[id]);
                
                if(\$(this).hasClass('minus')){
                    if(val==1&&confirm('Удалить из заказа?')) {
                        delete order.step2[id];
                        \$(this).parents('tr').remove();
                    }
                    order.step2[id].count = val-1;
                    input.val(val-1);
                }
                else if(\$(this).hasClass('plus')) {
                    order.step2[id].count = val+1;
                    input.val(val+1);
                }
                else if (confirm('Удалить из заказа?')) {
                        delete order.step2[id];
                        \$(this).parents('tr').remove();
                    
                }
                \$.cookie('order', order, { expires: 2, path: '/' });
                return false;
            });
            function add_item(id) {
                \$.ajax({
                  url: '";
        // line 148
        echo $this->env->getExtension('routing')->getUrl("step2_info");
        echo "/'+id,
                  success: function(data){
                    var order = \$.cookie('order');
                    data.count = 1;
                    console.log(order.step2);
                    if(!order.step2) order.step2 = {}
                    var id = 'item'+parseInt(objLength(order.step2)+1);
                    order.step2[id] = jQuery.parseJSON(data);
                    \$('.nav.next').removeClass('disable');
                    \$.cookie('order', order, { expires: 2, path: '/' });
                    data = JSON.parse(data);
                    if(!id) id = 'item1';
                    tr = '<tr data-id=\"'+id+'\"><td>'+data.name+'</td><td>'+data.price+'</td><td>'+data.type+'</td><td class=\"action\"><a href=\"#\" class=\"minus\">–</a><input type=\"text\" value=\"1\"><a href=\"#\" class=\"plus\">+</a><a class=\"del\">&#215;</a></td></tr>';
                    \$('table').append(tr);
                  }
                });
            }
             \$('#search select').on('change', function(evt, params) {
                add_item(\$(this).val());    
                \$('.search-choice').remove();
                \$('#search select option').removeAttr('selected');
              });
            var order = \$.cookie('order');

            if(order){
                if(order.step2&&order.step2!='') \$('.nav.next').removeClass('disable')
            }
            
        })
    </script>
";
    }

    public function getTemplateName()
    {
        return "NewOrderBundle:Second:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 148,  126 => 8,  228 => 122,  225 => 121,  206 => 104,  197 => 101,  185 => 98,  180 => 97,  153 => 78,  124 => 62,  104 => 53,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 65,  128 => 64,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 73,  135 => 53,  119 => 61,  102 => 57,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  94 => 28,  89 => 20,  85 => 25,  75 => 33,  68 => 14,  56 => 9,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 79,  142 => 59,  138 => 54,  136 => 71,  121 => 46,  117 => 6,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  28 => 3,  38 => 6,  26 => 6,  24 => 1,  87 => 55,  31 => 3,  25 => 3,  21 => 2,  19 => 1,  93 => 48,  88 => 6,  78 => 21,  46 => 7,  44 => 12,  27 => 4,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 11,  37 => 10,  22 => 2,  246 => 90,  157 => 80,  145 => 74,  139 => 70,  131 => 11,  123 => 62,  120 => 40,  115 => 60,  111 => 59,  108 => 72,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 24,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 100,  189 => 99,  187 => 84,  182 => 66,  176 => 96,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 80,  149 => 76,  147 => 58,  144 => 73,  141 => 72,  133 => 55,  130 => 41,  125 => 44,  122 => 61,  116 => 58,  112 => 42,  109 => 34,  106 => 58,  103 => 32,  99 => 51,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 7,  42 => 7,  39 => 5,  36 => 5,  33 => 4,  30 => 7,);
    }
}
