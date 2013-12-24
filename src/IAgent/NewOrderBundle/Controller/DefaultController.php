<?php

namespace IAgent\NewOrderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Symfony\Component\HttpFoundation\RedirectResponse;
use IAgent\NewOrderBundle\Entity\AgentOrder;
use IAgent\NewOrderBundle\Entity\Agent;
use IAgent\NewOrderBundle\Entity\Customer;
use IAgent\NewOrderBundle\Entity\OrderItem;


class DefaultController extends Controller
{
    public function get_nav() {
        $user = $this->get('security.context')->getToken()->getUser();
        $p = $this->getDoctrine()->getRepository('NewOrderBundle:Agent')->findByParentUserFk($user->getCode());
        $nav = array();
        $nav['seller'] = array('active'=>'Y', 'enabled'=>'Y');
        $nav['merch'] = array('active'=>'N', 'enabled'=>'N');
        if($user->getParentUserFk()==NULL && count($p)>0) {
            $nav['merch']['active']='Y';
        }
        return $nav;
    }

    public function tr($string)
    {
        $converter = array('а' => 'a',   'б' => 'b',   'в' => 'v','г' => 'g',   'д' => 'd',   'е' => 'e','ё' => 'e',   'ж' => 'zh',  'з' => 'z','и' => 'i',   'й' => 'y',   'к' => 'k','л' => 'l',   'м' => 'm',   'н' => 'n','о' => 'o',   'п' => 'p',   'р' => 'r','с' => 's',   'т' => 't',   'у' => 'u','ф' => 'f',   'х' => 'h',   'ц' => 'c','ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch','ь' => '\'',  'ы' => 'y',   'ъ' => '\'','э' => 'e',   'ю' => 'yu',  'я' => 'ya','А' => 'A',   'Б' => 'B',   'В' => 'V','Г' => 'G',   'Д' => 'D',   'Е' => 'E','Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z','И' => 'I',   'Й' => 'Y',   'К' => 'K','Л' => 'L',   'М' => 'M',   'Н' => 'N','О' => 'O',   'П' => 'P',   'Р' => 'R','С' => 'S',   'Т' => 'T',   'У' => 'U','Ф' => 'F',   'Х' => 'H',   'Ц' => 'C','Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch','Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'','Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',);
        return strtolower(strtr($string, $converter)); 
    }
    public function getPrice($code) {
        $user = $this->get('security.context')->getToken()->getUser();
        $order = json_decode($_COOKIE['order']);
        
        $p = $this->getDoctrine()->getRepository('NewOrderBundle:Product')->findOneByCode($code);
        $tmp = $this->getDoctrine()->getRepository('NewOrderBundle:Price')->findOneBy(array('productCode'=>$code,'agentCode'=>$user->getCode(),'customerCode'=>$order->step1));
        
        if(count($tmp)>0) $price = $tmp->getPrice();
        else $price = $p->getPrice();

        return $price;
    }
    /**
     * @Route ("/", name="index")
     * @Route ("/search/{query}")
     * @Template ("NewOrderBundle:First:index.html.twig")
     */
    public function indexAction($query=NULL)
    {

        $user = $this->get('security.context')->getToken()->getUser();
        $session = $this->get("session");
        $order = json_decode($_COOKIE['order']);

        /*
        if(!$session->has("customersCount")) {
            $session->set("customersCount",count($this->getDoctrine()->getRepository('NewOrderBundle:Customer')->findAllOrderedByName()));
        }
        $count = $session->get("customersCount");
        */
        
        if(!$query) $repository = $this->getDoctrine()->getRepository('NewOrderBundle:Customer')->findAllOrderedByName(30);
        else {
            $repository = $this->getDoctrine()->getRepository('NewOrderBundle:Customer')->findAllOrderedLikeName($query,30);
        }
        $user = $this->get('security.context')->getToken()->getUser();
        $orders = $this->getDoctrine()->getRepository('NewOrderBundle:AgentOrder')->findByAgentCode($user->getCode(),array(),15);
        $prev = array();
        $global_act = false;
        if(count($orders)>0) {
            foreach ($orders as $o) {
                $customer=$o->getCustomerCode();
                

                if($customer) {
                    $id =$this->tr($customer->getCode());
                    if(!array_key_exists($id,$prev)) {
                        $prev[$id] = array(
                            'act' => 0,
                            'code' => $customer->getCode(),
                            'name' => $customer->getName(),
                            'address' => $customer->getAddress(),
                            'debt' => $customer->getCurrentDebt(),
                            'max_debd' => ceil($customer->getMaximumDebt())
                        );
                        if($order->step1 == $customer->getCode()) {
                            $prev[$id]['act']=1;
                            $global_act=true;
                        }
                    }
                }
            }
        }
        if(count($prev)>0) {
            uasort($prev, function($a,$b){
                return strcasecmp($a['name'],$b['name']);
            });
        }
        foreach ($repository as $customer) {
            if($customer->getCode() !=$order->step1) {
                $id =$this->tr($customer->getCode());
                if(!array_key_exists($id,$prev)) {
                    if($order->step1 == $customer->getCode()) {
                        $act=1;
                        $global_act=true;
                    }
                    else $act=0;
                    $customers[] = array(
                        'act' => $act,
                        'code' => $customer->getCode(),
                        'name' => $customer->getName(),
                        'address' => $customer->getAddress(),
                        'debt' => $customer->getCurrentDebt(),
                        'max_debd' => ceil($customer->getMaximumDebt())
                    );

                }
            }
        }
        if($order->step1!=""&&!$global_act) {
            $product = $this->getDoctrine()->getRepository('NewOrderBundle:Customer')->findOneByCode($order->step1);
            if(is_object($product)) {
                $item = array(
                    'act' => 1,
                    'code' => $product->getCode(),
                    'name' => $product->getName(),
                    'address' => $product->getAddress(),
                    'debt' => $product->getCurrentDebt(),
                    'max_debd' => ceil($product->getMaximumDebt())
                );
                if(count($customers)>0)array_unshift($customers, $item);
                else $customers[] = $item;
            }
            else {
                $_COOKIE["order"]==null;
            }
        }

        
        
        return array('customers'=>$customers, 'name'=>$user->getName(), 'query' => $query, 'url' => 'new_order', 'prev'=>$prev, 'nav' => $this->get_nav());
    }
    /**
     * @Route ("/orders/{query}/")
     * @Template ("NewOrderBundle:First:orders.html.twig")
     */
    public function orderslistAction($query=NULL) {
        $c = $this->getDoctrine()->getRepository('NewOrderBundle:Customer')->findOneByCode($query);
        $client = $c->getName();
        $user = $this->get('security.context')->getToken()->getUser();
        $orders = $this->getDoctrine()->getRepository('NewOrderBundle:AgentOrder')->findBy(array('customerCode'=>$query, 'agentCode'=>$user->getCode()),array('id'=>'DESC'),5);
        $data = array();
        foreach ($orders as $order) {
            $data[] = array(
                'id' => $order->getID(),
                'date' => $order->getLastUpdate()->format('d.m.Y H:i'),
                'comment' => $order->getAgentComment()
            );
        }
        return array('client'=>$client,'data'=>$data);
    }
    /**
     * @Route ("/state/{code}/")
     * @Template ("NewOrderBundle:Second:state.html.twig")
     */
    public function warehouseState($code=NULL) {
        $w = $this->getDoctrine()->getRepository('NewOrderBundle:WarehouseList')->findAll();
        $n = $this->getDoctrine()->getRepository('NewOrderBundle:Product')->findOneByCode($code);
        $name = $n->getName();
        $items = array();
        foreach ($w as $witem) {
            $item = $this->getDoctrine()->getRepository('NewOrderBundle:WarehouseQuantity')->findOneBy(array('productCode'=>$code, 'warehouseCode'=>$witem->getCode()));
            if(count($item)) $count = $item->getQuantity();
            else $count=0;
            $items[] = array(
                    'id' =>$witem->getID(),
                    'name' =>$witem->getName(), 
                    'count' => $count
                );
           
        }
        return array('items'=>$items, 'name'=>$name);
    }
    public function check (&$item, $key, &$child_list=NULL)
    {
        $f = $item;
        
        $childrens = $this->getDoctrine()->getRepository('NewOrderBundle:ProductGroup')->findByParentGroupCode($f->getCode());
        $item = array(
                'name'=> ltrim(preg_replace("/\d*/", '',preg_replace("/[^\w ]/ui", '',$f->getName()))),
                'code'=>$f->getCode(),
            );
        global $child_list;
        if(count($childrens)>0) {
            $item['child'] = $childrens;
            array_walk($item['child'], array($this,'check'));
        }
        else if(isset($child_list)) {
            
            $child_list[] = $f->getCode();
            
        }
        
    }
    public function sort(&$a, &$b) {
        if(isset($a['child'])) uasort($a['child'], array($this,'sort'));
        if(isset($b['child'])) uasort($b['child'], array($this,'sort'));
        return strcasecmp($a['name'],$b['name']);
    }
    /**
     * @Route ("/step2/{order_id}")
     * @Template ("json.twig")
     */
    public function step1Next($order_id=NULL) {
        if(isset($order_id)) {
            $items = array();
            $f = $this->getDoctrine()->getRepository('NewOrderBundle:OrderItem')->findByOrder(array($order_id),array('id'=>'ASC'));
            if(count($f>0)) {
                foreach ($f as $product) {
                    $item = $product->getProductCode();
                    $types_raw = $this->getDoctrine()->getRepository('NewOrderBundle:ProductUnit')->findByProductCode($item->getCode());
                    $types = array();
                    $i=1;
                    $id = "item-".$this->tr($item->getCode());
                    $current_type = 0;
                    foreach ($types_raw as $type) {
                        if($type->getCode()==$product->getProductUnitCode()) $current_type = $i;
                        $types[$i] = array(
                            'id' => $i,
                            'code' => $type->getCode(),
                            'name' => $type->getFullName(),
                            'factor' => $type->getFactor()
                        );
                        $i--;
                    }

                    $tmp = array(
                        'id' => "item-".$this->tr($item->getCode()),
                        'name' => $item->getName(),
                        'code' => $item->getCode(),
                        'price' => $this->getPrice($item->getCode()),
                        'currency' => 'руб.',
                        'current_type' => $current_type,
                        'types' => $types,
                        'count'=>$product->getRequestedQuantity(),
                    );
                    $items[$id] = $tmp;
                }
                return array('data'=>json_encode($items,JSON_UNESCAPED_UNICODE));
            }
            
        }
    }
    /**
     * @Route ("/step2/", name="step2")
     * @Route ("/step2/search/{query}")
     */
    public function step2Action($query=NULL,$order_id=NULL)
    {
        $order = json_decode($_COOKIE['order']);
        if(!is_object($order)||!isset($order->step1)) {
            return new RedirectResponse('/');
        }
        $user = $this->get('security.context')->getToken()->getUser();
        $session = $this->get("session");
        global $cat;
        $cats = [];
        
        function x($x) {
            echo "<pre style='margin-top:300px;float:left'>";
            var_dump($x);
            echo "</pre>";
        }
        

        
        if($order->step2!="") {
            $items = array();
            foreach ($order->step2 as $key => $item) {
                if(!$item->count) $item->count = 1;
                $items[$key] = array(
                    'id' => $key,
                    'code' => $item->code,
                    'name' => $item->name,
                    'price' => $this->getPrice($item->code),
                    'currency' => $item->currency,
                    'current_type' => $item->current_type,
                    'types' => (array)$item->types,
                    'count' => $item->count
                );
            }
        }
        if(!$query) {
            $fs = $this->getDoctrine()->getRepository('NewOrderBundle:ProductGroup')->findByParentGroupCode(null,array('name'=>'ASC'));
            foreach ($fs as $f) {
               
            
            $code = $f->getCode();
            $cats[$f->getCode()] = array(
                        'name'=>preg_replace("/[^\w\d ]/ui", '',$f->getName()),
                        'code'=>$f->getCode(),
                        'child'=>$childrens = $this->getDoctrine()->getRepository('NewOrderBundle:ProductGroup')->findByParentGroupCode($f->getCode())
                    );
            
            array_walk($cats[$f->getCode()]['child'], array($this,'check'));
            }
            uasort($cats[$f->getCode()]['child'], array($this,'sort'));
            return $this->render('NewOrderBundle:Second:index.html.twig',array('items'=>$items,'name'=>$user->getName(), 'cats'=> $cats, 'url' => 'new_order', 'nav' => $this->get_nav()));
        }
        else {
            
            $f = $this->getDoctrine()->getRepository('NewOrderBundle:ProductGroup')->findOneByCode($query);
            if($f) {
                $code = $f->getCode();
                $childrens = $this->getDoctrine()->getRepository('NewOrderBundle:ProductGroup')->findByParentGroupCode($f->getCode());
                
                $cats[$f->getCode()] = array(
                            'name'=>preg_replace("/[^\w\d ]/ui", '',$f->getName()),
                            'code'=>$f->getCode(),
                            'child'=>$childrens
                        );
                global $child_list;
                $child_list = array();
                
                array_walk($cats[$f->getCode()]['child'], array($this,'check'));
                
                if(count($child_list)==0) 
                    $child_list = array($query);$items_list = $this->getDoctrine()->getRepository('NewOrderBundle:Product')->findByProductGroupCode($child_list, array('name' => 'ASC'));
                    foreach ($items_list as $item) {
                    $types_raw = $this->getDoctrine()->getRepository('NewOrderBundle:ProductUnit')->findByProductCode($item->getCode());
                    $types = array();
                    $i=1;
                    $id = "item-".$this->tr($item->getCode());
                    
                    if($items[$id]) $check=1;
                    else $check=0;

                    foreach ($types_raw as $type) {
                        $types[$i] = array(
                            'id' => $i,
                            'code' => $type->getCode(),
                            'name' => $type->getFullName(),
                            'factor' => $type->getFactor()
                        );
                        $i--;
                    }
                    $tmp = array(
                        'name' => $item->getName(),
                        'code' => $item->getCode(),
                        'price' => $this->getPrice($item->getCode()),
                        'currency' => 'руб.',
                        'current_type' => 0,
                        'types' => (object)$types,
                        'count'=>1,
                    );
                    $data[] = array_merge($tmp, array('data'=>json_encode($tmp,JSON_UNESCAPED_UNICODE)), array('check'=>$check));
                }    
            }
            
            
            return $this->render('NewOrderBundle:Second:info.html.twig', array('items'=>$data));
            
        }       
    }
    /**
     * @Route ("/step3/", name="step3")
     * @Template ("NewOrderBundle:Third:index.html.twig")
     */
    public function step3Action($query=NULL) {
        $user = $this->get('security.context')->getToken()->getUser();
        $order = json_decode($_COOKIE['order']);
        
        if(!is_object($order)||$order->step1==""||!is_object($order->step2)) {
            return new RedirectResponse('/');
        }
        return array('name'=>$user->getName(),'info'=>$order->step3, 'url' => 'new_order', 'nav' => $this->get_nav());
    }
    /**
     * @Route ("/step4/", name="step4")
     * @Template ("NewOrderBundle:Four:index.html.twig")
     */
    public function step4Action($query=NULL) {
        $order = json_decode($_COOKIE['order']);
        
        if(!is_object($order)||$order->step1==""||!is_object($order->step2)||!is_object($order->step3)) {
            return new RedirectResponse('/');
        }
        $items = array();
                foreach ($order->step2 as $key => $item) {
                    //$item = json_decode($item);
                    if(!$item->count) $item->count = 1;
                    $types = $item->types;
                    $current_type = (int)$item->current_type;
                    //die(var_dump($types->$current_type->name));
                    $items[] = array(
                        'id' => $key,
                        'name' => $item->name,
                        'price' => $item->price,
                        'currency' => "руб.",
                        'type' => $types->$current_type->name,
                        'factor' => $types->$current_type->factor,
                        'count' => $item->count
                    );
                }
        $product = $this->getDoctrine()->getRepository('NewOrderBundle:Customer')->findByCode($order->step1);
        $item = array(
            'act' => 1,
            'code' => $product[0]->getCode(),
            'name' => $product[0]->getName(),
            'address' => $product[0]->getAddress(),
            'debt' => $product[0]->getCurrentDebt(),
        );
        $user = $this->get('security.context')->getToken()->getUser();
        return array('name'=>$user->getName(),'items'=>$items, 'info'=>$order->step3, 'company'=>$item, 'url'=>'new_order', 'nav' => $this->get_nav());
    }

    /**
     * @Route ("/finish/", name="finish")
     * @Template ("json.twig")
     */
    public function finishAction() {
        $order = json_decode($_COOKIE['order']);
        if(!is_object($order)) {
            return new RedirectResponse('/');
        }
        
        $user = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $agent = $em->find('NewOrderBundle:Agent', $user->getCode());
        //var_dump($agent->getCode());
        $customer = $em->find('NewOrderBundle:Customer',$order->step1);
        
        $order_db = new AgentOrder();
        $order_db->setAgentComment($order->step3->comment);
        $order_db->setStatus(0);
        $order_db->setFrontendNum(0);
        $order_db->setBackendNum(0);
        $order_db->setDeleted(0);
        $order_db->setPaymentType($order->step3->money);
        $order_db->setDeliveryType($order->step3->dev);
        $order_db->setCustomerCode($customer);
        $order_db->setAgentCode($agent);
        $order_db->setDaysOwed(0);
        $order_db->setRequestedDeliveryTimestamp(new \DateTime($order->step3->time));
        $order_db->setLastUpdate(new \DateTime("now"));
        $order_db->setOriginTimestamp(new \DateTime("now"));

        $em->persist($order_db);
        $em->flush();

        
        foreach ($order->step2 as $item) {
            $types = $item->types;
            $current_type = (int)$item->current_type;
            
            $row = new OrderItem();
            $row->setApprovedQuantity(0);
            $row->setProductName($item->name);
            $row->setProductUnitFactor($types->$current_type->factor);
            $row->setProductUnitFullName($types->$current_type->name);
            $row->setProductUnitShortName($types->$current_type->name);
            $row->setRequestedQuantity($item->count);
            $row->setOrder($em->find('NewOrderBundle:AgentOrder',$order_db->getId()));
            $row->setRequestedPrice(0);
            $row->setProductCode($em->find('NewOrderBundle:Product',$item->code));
            $row->setProductUnitCode($em->find('NewOrderBundle:ProductUnit', $types->$current_type->code));
            $em->persist($row);
            $em->flush();
        }
        unset($_COOKIE['order']);
        setcookie('order', "", time() - 36000, '/');
        
        return array('data'=>$order_db->getId());
        
        //return array('data'=>1);
    }
    /**
     * @Route ("/history/", name="history")
     * @Template ("NewOrderBundle:History:index.html.twig")
     */
    public function historyAction($query=NULL) {
        $user = $this->get('security.context')->getToken()->getUser();
        $orders = $this->getDoctrine()->getRepository('NewOrderBundle:AgentOrder')->findByAgentCode($user->getCode());
        $list = array();
        foreach ($orders as $order) {
            $client = $orders = $this->getDoctrine()->getRepository('NewOrderBundle:Customer')->findOneByCode($order->getCustomerCode());
            $time = $order->getOriginTimestamp();
            $list[] = array(
                'id' => $order->getId(),
                'client' => $client->getName(),
                'address'=> $client->getAddress(),
                'comment' => $order->getAgentComment(),
                'date' => $time->format('d.m.Y H:i')
            );
        }
        usort($list, function($a, $b) {
            return (int)$b['id'] - (int)$a['id'];
        });
        
        return array('name'=>$user->getName(), 'list'=>$list, 'url' => 'order_history', 'nav' => $this->get_nav());
    }

    /**
     * @Route ("/history/{query}/")
     * @Template ("NewOrderBundle:History:detail.html.twig")
     */
    public function historydetailAction($query=NULL) {
        $user = $this->get('security.context')->getToken()->getUser();
        $order_raw = $this->getDoctrine()->getRepository('NewOrderBundle:AgentOrder')->findOneById($query);
        
        $company_raw = $this->getDoctrine()->getRepository('NewOrderBundle:Customer')->findOneByCode($order_raw->getCustomerCode());
        $items_raw = $this->getDoctrine()->getRepository('NewOrderBundle:OrderItem')->findByOrder($query);

        $company = array(
            'name' => $company_raw->getName(),
            'address' => $company_raw->getAddress(),
            'debt' => $company_raw->getCurrentDebt()
        );
        $time = $order_raw->getRequestedDeliveryTimestamp();
        
        $info = array(
            'time' => $time->format('d.m.Y H:i'),
            'comment'=> $order_raw->getAgentComment()
        );

        $items = array();
        foreach ($items_raw as $item) {
            $price = $this->getDoctrine()->getRepository('NewOrderBundle:Product')->findOneByCode($item->getProductCode());
            $items[] = array(
                'name' => $item->getProductName(),
                'price' => $this->getPrice($price->getCode()),
                'type' => $item->getProductUnitFullName(),
                'count' => $item->getRequestedQuantity()
            );
        }
        return array('name'=>$user->getName(), 'info'=>$info, 'items'=>$items, 'company'=>$company, 'url' => 'order_history', 'nav' => $this->get_nav());
    }
}
