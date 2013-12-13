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
        // line 2
        $context["macro"] = $this->env->loadTemplate("::macro.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " | Новый заказ | Шаг 2";
    }

    // line 6
    public function block_bodyclass($context, array $blocks = array())
    {
        echo "dashboard";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
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
        // line 34
        echo $this->env->getExtension('routing')->getUrl("index");
        echo "\"></a>
            </div>
            <div class=\"col_10\">
                
                <h2>Шаг 2. Воспользуйтесь поиском для выбора необходимого товарного ассортимента</h2>
                <!--<form id=\"search\" class=\"content\">
                    <p>
                        <i class=\"icon-search\"></i>
                        <select data-placeholder=\" \" style=\"width:350px;\" multiple=\"\" tabindex=\"3\">
                            <option value=\"\"></option>
                        </select>
                    </p>
                </form>-->
                <a href=\"#\" class=\"btn modal-trigger\">Добавить товар</a>
                <a href=\"#\" class=\"btn clear\">Очистить заказ</a>
                <table id=\"order\">
                    <thead>
                    <tr>
                        <th  width=\"45%\">Товарная позиция</th>
                        <th width=\"10%\">Цена за единицу</th>
                        <th  width=\"10%\">Единица</th>
                        <th  width=\"20%\">Количество</th>
                        <th width=\"13%\">Итого</th>
                        <th width=\"2%\"></th>
                    </tr>
                    </thead>
                    <tbody>
                        ";
        // line 61
        $context["total"] = 0;
        // line 62
        echo "                        ";
        $context["currency"] = 0;
        // line 63
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 64
            echo "                            <tr data-id = \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), "html", null, true);
            echo "\" class = \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), "html", null, true);
            echo "\">
                                <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "</td>
                                <td> <span class=\"price\">";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "price"), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "currency"), "html", null, true);
            echo "</td>
                                <td>

                                    <select name=\"\" class=\"type\">

                                        ";
            // line 71
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "types"));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 72
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "id"), "html", null, true);
                echo "\" ";
                if (($this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "id") == $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current_type"))) {
                    echo "selected";
                }
                echo " data-code=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "code"), "html", null, true);
                echo "\" data-factor=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "factor"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "name"), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                                    </select>
                                </td>
                                <td class=\"action\"><a href=\"#\" class=\"minus\">–</a><input type=\"text\" value=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "count"), "html", null, true);
            echo "\"><a href=\"#\" class=\"plus\">+</a><a class=\"del\">&#215;</a></td>
                                <td> <span class=\"total\">";
            // line 77
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "price") * $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "count")), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "currency"), "html", null, true);
            echo "</td>
                                <td><a href=\"#\" class=\"warehouse\"><i class=\"icon-truck\"></i></a></td>
                                ";
            // line 79
            $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "price") * $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "count")));
            // line 80
            echo "                                ";
            $context["currency"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "currency");
            // line 81
            echo "                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                    </tbody>
                </table>
                <div id=\"total\">
                    <span>";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "</span> руб.
                </div>
                <div id=\"tree-block\">
                    <div class=\"header\">
                        <div class=\"col_2\">
                            <br />
                        </div>
                        <div class=\"col_8\">
                            <h3>Добавление товара</h3>
                        </div>
                        <div class=\"col_2 right\">
                            <br />
                        </div>
                    </div>
                    <div class=\"actions\">
                        <div class=\"col_2\">
                            <a href=\"#\" class=\"btn cancel\">ОТМЕНА</a>
                            <a href=\"#\" class=\"btn back\"> <i class=\"icon-chevron-left\"></i>&nbsp;&nbsp;Назад</a>
                        </div>
                        <div class=\"col_8\">
                            <form id=\"search\" class=\"content list\">
                                <i class=\"icon-search\"></i>
                                <input id=\"find\" type=\"text\" placeholder=\"Введите ваш запрос\"  autocomplete=\"off\"/>
                            </form>
                        </div>
                        <div class=\"col_2 right\">
                            <a href=\"#\" class=\"btn add\">Готово</a>
                        </div>
                    </div>

                    <div id=\"tree\">
                        ";
        // line 117
        echo $context["macro"]->getlist((isset($context["cats"]) ? $context["cats"] : $this->getContext($context, "cats")));
        echo "
                        <div class=\"fade\">
                            
                        </div>   
                    </div>
                </div>
                
            </div>
            <div class=\"col_1\">
                <br />
                <a class=\"icon-chevron-right nav next disable\" href=\"";
        // line 127
        echo $this->env->getExtension('routing')->getUrl("step3");
        echo "\"></a>
            </div>
            </div>
        </div>

    </div>
</div>
";
    }

    // line 136
    public function block_javascripts($context, array $blocks = array())
    {
        // line 137
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"/static/scripts/app.js\"></script>
    <script src=\"/static/scripts/chosen.js\"></script>
    <script src=\"/static/scripts/chosen.ajaxaddition.js\"></script>
    <script>
         
        \$(document).ready(function(){
            jQuery.expr[\":\"].contains = function( elem, i, match, array ) {
                return (elem.textContent || elem.innerText || jQuery.text( elem ) || \"\").toLowerCase().indexOf(match[3].toLowerCase()) >= 0;
            }


            function trim(string) {
              string = string.replace(/'|\"|<|>|\\!|\\||@|#|\$|%|^|\\^|\\\$|\\\\|\\/|&|\\*|\\(\\)|-|\\|\\/|;|\\+|№|,|\\?|_|:|{|}|\\[|\\]/g, \"\");
              string = string.replace(/(^\\s+)|(\\s+\$)/g, \"\");
              return string;
            };
            function get_trans(nameVal) {
                  en_to_ru = {
                    'а': 'a',
                    'б': 'b',
                    'в': 'v',
                    'г': 'g',
                    'д': 'd',
                    'е': 'e',
                    'ё': 'jo',
                    'ж': 'zh',
                    'з': 'z',
                    'и': 'i',
                    'й': 'j',
                    'к': 'k',
                    'л': 'l',
                    'м': 'm',
                    'н': 'n',
                    'о': 'o',
                    'п': 'p',
                    'р': 'r',
                    'с': 's',
                    'т': 't',
                    'у': 'u',
                    'ф': 'f',
                    'х': 'h',
                    'ц': 'c',
                    'ч': 'ch',
                    'ш': 'sh',
                    'щ': 'sch',
                    'ъ': '#',
                    'ы': 'y',
                    'ь': '',
                    'э': 'je',
                    'ю': 'ju',
                    'я': 'ja',
                    ' ': '-',
                    'і': 'i',
                    'ї': 'i'
                  };
                  nameVal = nameVal.toLowerCase();
                  nameVal = trim(nameVal);
                  nameVal = nameVal.split(\"\");
                  var trans = new String();
                  for (i = 0; i < nameVal.length; i++) {
                    for (key in en_to_ru) {
                      val = en_to_ru[key];
                      if (key == nameVal[i]) {
                        trans += val;
                        break;
                      } else if (key == \"ї\") {
                        trans += nameVal[i];
                      };
                    };
                  };
                  return trans;
                };
            var timer;
            
            \$('a.modal-trigger').click(function(){\$(\"#tree-block\").modal({autoResize: true,onShow:function(){},overlayClose:true,closeClass: '.btn.cancel,.btn.add'});});

            /*\$('#search select').ajaxChosen({
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
            });*/
            \$('#order a.warehouse').live('click',function(){
                var order = \$.cookie('order');
                
                var id = order.step2[\$(this).parents('tr').data('id')].code;

                if(id) {
                    \$.modal(\"Загружаем состояние складов\",{containerId:\"loading\",autoResize: true,onShow:function(){},overlayClose:true,closeClass: '.btn.cancel'});
                    \$.get(\"/state/\"+id,function(data){
                       if(data) {
                        id = \$('#content.first-step table tr.active').data('id')
                        \$.modal.close();
                        
                        \$.modal(data,{containerId:\"info-modal\",autoResize: true,onShow:function(){},overlayClose:true,closeClass: '.btn.cancel'});
                        
                       }
                    });
                    
                }
                return false;
            });
            function check() {
                var total = 0;
                \$('#order tbody tr .total').each(function(){
                    total += parseFloat(\$(this).text());
                })
                \$('#total span').text(total.toFixed(2));
            }
            function search(x, y) {
                setTimeout(function(){
                    val = x.val()
                    console.log(val);
                    y.show();
                    y.not(\":contains('\"+val+\"')\").hide();
                },100);
            }

            \$('#find').keydown(function(e){
                if (e.keyCode == 46 || e.keyCode == 8){
                    if(!\$('#tree-block').hasClass('step2')) search(\$(this),\$('#tree li'));
                    else search(\$(this),\$('#tree-detail tbody tr'));
                }
            });
            \$('#find').keyup(function(e){
                if (e.keyCode != 46 && e.keyCode != 8) {
                    if(!\$('#tree-block').hasClass('step2')) search(\$(this),\$('#tree li'));
                    else search(\$(this),\$('#tree-detail tbody tr'));
                }
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
            var order = \$.cookie('order');
            console.log(order.step2)
            function change(x, action) {
                var order = \$.cookie('order');
                var id = x.data('id');
                var input = x.find('td.action').find('input');
                var total = x.find('span.total');
                console.log(total);
                var price = x.find('span.price').text();
                var val = parseInt(input.val());
                if(order.step2[id].substring) order.step2[id] = JSON.parse(order.step2[id]);
                
                if(action==\"minus\"){
                    if(val==1&&confirm('Удалить из заказа?')) {
                        delete order.step2[id];
                        x.remove();
                    }
                    order.step2[id].count = val-1;
                    if(val!=1) { input.val(val-1);
                        total.text(((val-1)*price).toFixed(2));                        
                    }
                }
                else if(action==\"plus\") {
                    order.step2[id].count = val+1;
                    input.val(val+1);
                    total.text(((val+1)*price).toFixed(2));
                }
                else if (confirm('Удалить из заказа?')) {
                        delete order.step2[id];
                        x.remove();
                }
                check();
                \$.cookie('order', order, { expires: 2, path: '/' });
            }

            \$('td.action a').live('click',function(){
               change(\$(this).parents('tr'),\$(this).attr('class'));
                return false;
            });
            \$('.type').live('change',function(){
                var order = \$.cookie('order');
                var id = \$(this).parents('tr').data('id');
                var val = \$(this).find('option:selected').val();
                if(order.step2[id].substring) order.step2[id] = JSON.parse(order.step2[id]);
                order.step2[id].current_type = val;
                \$.cookie('order', order, { expires: 2, path: '/' });
            })
            \$('.btn.clear').click(function(){
                if(confirm('Вы уверены, что хотите удалить все товары из заказа?')){
                    var order = \$.cookie('order');
                    delete order.step2;
                    \$.cookie('order', order, { expires: 2, path: '/' });
                    \$('#order tbody tr').remove();
                    \$('.nav.next').addClass('disable');
                }
            })
            function add_item(data) {
                var order = \$.cookie('order');
                if(!order.step2) order.step2 = {}
                var id = 'item-'+get_trans(data.code);
                if(!order.step2[id]) {
                    order.step2[id] = data;
                    \$('.nav.next').removeClass('disable');
                    
                    \$.cookie('order', order, { expires: 2, path: '/' });
                    
                    types = \"\";
                    \$.each(data.types, function(){
                        types += '<option value=\"'+this.id+'\" data-code=\"'+this.code+'\" data-factor=\"'+this.factor+'\" ';
                        if(data.current_type == this.id) types += 'selected';
                        types += '>'+this.name+'</option>';
                    });
                    if(!id) id = 'item1';
                    tr = '<tr data-id=\"'+id+'\" class=\"'+id+'\"><td>'+data.name+'</td><td><span class=\"price\">'+data.price+'</span> '+data.currency+'</td><td><select class=\"type\">'+types+'</select></td><td class=\"action\"><a href=\"#\" class=\"minus\">–</a><input type=\"text\" value=\"1\"><a href=\"#\" class=\"plus\">+</a><a class=\"del\">&#215;</a></td><td><span class=\"total\">'+data.price+'</span> '+data.currency+'</td><td><a href=\"#\" class=\"warehouse\"><i class=\"icon-truck\"></i></a></td></tr>';
                    \$('#order').append(tr);
                }
                else \$('tr.'+id+' .action .plus').trigger('click');
                console.log(order.step2);
                check();
            }

            \$('#tree a').on('click', function(e) {
                var id = \$(this).data('code');
                \$('#tree').addClass('loading');
                \$('#tree .fade').css('top',\$('#tree').scrollTop())
                \$.ajax({
                  url: '/step2/search/'+id,
                  success: function(data){
                    \$('#tree-block').addClass('step2');
                    \$('#tree').removeClass('loading').hide();

                    \$('#tree-block.simplemodal-data').append(data);
                    \$('input[type=\"checkbox\"]').iCheck();
                  }});
                
                e.preventDefault();
            });
            
            \$('#tree-detail tbody tr').live('click',function(){
                \$(this).find('input[type=\"checkbox\"]').iCheck('check');
            });

            \$('#tree-detail input[type=\"checkbox\"]').live('ifChecked', function(event){
                add_item(\$(this).parents('tr').data('json'));
            });
            
            \$('#tree-detail input[type=\"checkbox\"]').live('ifUnchecked', function(event){
                var data = \$(this).parents('tr').data('json');
                var id = 'item-'+get_trans(data.code);
                change(\$('#order .'+id), 'delete');
            });

            \$('#tree-block .btn.back').on('click',function(e){
                \$('#tree-block').removeClass('step2');
                \$('#tree-detail').remove();
                \$('#tree').show();
            });

             /*\$('#search select').on('change', function(evt, params) {
                add_item(\$(this).val());    
                \$('.search-choice').remove();
                \$('#search select option').removeAttr('selected');
              });*/
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
        return array (  255 => 137,  252 => 136,  240 => 127,  227 => 117,  193 => 86,  188 => 83,  181 => 81,  178 => 80,  176 => 79,  169 => 77,  165 => 76,  161 => 74,  142 => 72,  138 => 71,  128 => 66,  124 => 65,  117 => 64,  112 => 63,  109 => 62,  107 => 61,  77 => 34,  50 => 9,  47 => 8,  41 => 6,  33 => 4,  28 => 2,);
    }
}
