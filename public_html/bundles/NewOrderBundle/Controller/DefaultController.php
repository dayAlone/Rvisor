<?php

namespace IAgent\NewOrderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;


class DefaultController extends Controller
{
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
        
        foreach ($repository as $customer) {
            if($customer->getCode() !=$order->step1) {
                $customers[] = array(
                    'act' => 0,
                    'code' => $customer->getCode(),
                    'name' => $customer->getName(),
                    'address' => $customer->getAddress(),
                    'debt' => $customer->getCurrentDebt(),
                );
            }
        }
        
        if($order->step1!="") {
            $product = $this->getDoctrine()->getRepository('NewOrderBundle:Customer')->findByCode($order->step1);
            $item = array(
                'act' => 1,
                'code' => $product[0]->getCode(),
                'name' => $product[0]->getName(),
                'address' => $product[0]->getAddress(),
                'debt' => $product[0]->getCurrentDebt(),
            );
            if(count($customers)>0)array_unshift($customers, $item);
            else $customers[] = $item;
        }
        return array('customers'=>$customers, 'name'=>$user->getName(), 'query' => $query);
    }
    /**
     * @Route ("/step2/", name="step2")
     * @Route ("/step2/search/{query}")
     */
    public function step2Action($query=NULL)
    {
        $order = json_decode($_COOKIE['order']);
        if($order->step1!="") {
            header("Location: /");
        }
        $user = $this->get('security.context')->getToken()->getUser();
        $session = $this->get("session");

        if(!$query) {

            if($order->step2!="") {
                $items = array();
                foreach ($order->step2 as $key => $item) {
                    //$item = json_decode($item);
                    if(!$item->count) $item->count = 1;
                    $items[] = array(
                        'id' => $key,
                        'name' => $item->name,
                        'price' => $item->price,
                        'type' => $item->type,
                        'count' => $item->count
                    );
                }
            }

            return $this->render('NewOrderBundle:Second:index.html.twig',array('items'=>$items,'name'=>$user->getName()));
        }
        else {
            $repository = $this->getDoctrine()->getRepository('NewOrderBundle:Product')->findAllOrderedLikeName($query,40);
            foreach ($repository as $product) {
                $products[] = array(
                    'text' => $product->getName(),
                    'id' => $product->getCode()
                );
            }
            $data = array(
                'q' => $query,
                'results'=>$products
            );
            return $this->render('json.twig', array('data'=>json_encode($data,JSON_UNESCAPED_UNICODE)));
            
        }
        
    }
    /**
     * @Route ("/step3/", name="step3")
     * @Template ("NewOrderBundle:Third:index.html.twig")
     */
    public function step3Action($query=NULL) {
        $user = $this->get('security.context')->getToken()->getUser();
        $order = json_decode($_COOKIE['order']);
        if($order->step2!="") {
            header("Location: /");
        }
        return array('name'=>$user->getName());
    }
    /**
     * @Route ("/step4/", name="step4")
     * @Template ("NewOrderBundle:Four:index.html.twig")
     */
    public function step4Action($query=NULL) {
        $order = json_decode($_COOKIE['order']);
        if($order->step3!="") {
            header("Location: /");
        }
        $items = array();
                foreach ($order->step2 as $key => $item) {
                    //$item = json_decode($item);
                    if(!$item->count) $item->count = 1;
                    $items[] = array(
                        'id' => $key,
                        'name' => $item->name,
                        'price' => $item->price,
                        'type' => $item->type,
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
        return array('name'=>$user->getName(),'items'=>$items, 'info'=>$order->step3, 'company'=>$item);
    }
    /**
     * @Route ("/step2/info/{query}",name="step2_info")
     * @Template ("json.twig")
     */
    public function step2info($query=NULL) {

        
        $item = $this->getDoctrine()->getRepository('NewOrderBundle:Product')->findOneByCode($query);
        $type = $this->getDoctrine()->getRepository('NewOrderBundle:ProductUnit')->findOneByProductCode($query);
        $data = array(
            'name' => $item->getName(),
            'price' => $item->getPrice().' руб.',
            'type' => $type->getFullName(),
            'count'=>1
        );
        return array('data'=>json_encode($data,JSON_UNESCAPED_UNICODE));
    }
}
