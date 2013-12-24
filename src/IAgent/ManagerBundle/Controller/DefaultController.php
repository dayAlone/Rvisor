<?php

namespace IAgent\ManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends Controller
{
	public function get_nav() {
		
		$user          = $this->get('security.context')->getToken()->getUser();
		$p             = $this->getDoctrine()->getRepository('NewOrderBundle:Agent')->findByParentUserFk($user->getCode());
		$nav           = array();
		$nav['seller'] = array('active'=>'Y', 'enabled'=>'N');
		$nav['merch']  = array('active'=>'N', 'enabled'=>'Y');

        if($user->getParentUserFk()==NULL && count($p)>0) $nav['merch']['active']='Y';
       
        return $nav;
    }
    public function getOrder($order) {
    	$o_r = $this->getDoctrine()->getRepository('NewOrderBundle:AgentOrder')->findOneById($order);
    	$o_i = $this->getDoctrine()->getRepository('NewOrderBundle:OrderItem')->findByOrder($o_r->getID());
    	foreach ($o_i as $item) {
    		var_dump($item->getID());

			try { 
				var_dump($item->getProductCode()->getPrice());
			}
			catch(\Exception $e) { 

			}
		}
    }
    public function get_month($m) {
    	switch ($m){
			case 1: $m  ='Январь'; break;
			case 2: $m  ='Февраль'; break;
			case 3: $m  ='Март'; break;
			case 4: $m  ='Апрель'; break;
			case 5: $m  ='Май'; break;
			case 6: $m  ='Июнь'; break;
			case 7: $m  ='Июль'; break;
			case 8: $m  ='Август'; break;
			case 9: $m  ='Сентябрь'; break;
			case 10: $m ='Октябрь'; break;
			case 11: $m ='Ноябрь'; break;
			case 12: $m ='Декабрь'; break;
		}
		return $m;
    }
	/**
     * @Route ("/manager/", name="manager")
     * @Route ("/manager/{month}/")
     * @Template ("ManagerBundle:Default:index.html.twig")
     */
    public function indexAction($month=NULL)
    {

        $user = $this->get('security.context')->getToken()->getUser();

        // Получаем список сотрудников
		$stuff_raw = $this->getDoctrine()->getRepository('NewOrderBundle:Agent')->findByParentUserFk($user->getCode());
		$stuff     = array();
		$s         = array();
        foreach ($stuff_raw as $item) {
			$s[]     = $item->getCode();
			$stuff[] = array(
	    		  'name' => $item->getName(),
	    		  'code' => $item->getCode()
        		);
        }

        $query = $this
                  ->getDoctrine()
			      ->getRepository('NewOrderBundle:AgentOrder')
			      ->createQueryBuilder('p')
			      ->where('p.agentCode IN(:agents)')
			      ->setParameter('agents', $s);

        // Получаем список заказов за необходимый месяц
        if(!isset($month)) $month = $m_l;

        $o_q = $query
        		  ->andWhere('p.lastUpdate >= :begin')
				  ->andWhere('p.lastUpdate < :end')
				  ->setParameter('begin', new \DateTime(date('d.m.Y', $month)))
			      ->setParameter('end', new \DateTime(date('d.m.Y', $month).' +1 month'))
			      ->orderBy('p.lastUpdate', 'DESC')
			      ->getQuery()
			      ->execute();
		$orders = array();
		foreach ($o_q as $order) {
			$date = $order->getLastUpdate()->format('d.m.Y');
			if(!is_array($orders[$date])) $orders[$date] = array();
			$orders[$date][] = array(
				  'id' => $order->getID(),
				  'client' => $order->getCustomerCode()->getName(),
				  'price' => ''
				);
			$this->getOrder($order->getID());
		}

        $m_f = $query
			      ->setMaxResults(1)
			      ->orderBy('p.lastUpdate', 'ASC')
			      ->getQuery()
			      ->execute();
        $m_f = $m_f[0]->getLastUpdate();
        $m_f = strtotime($m_f->format('Y-m'));

        $m_l = $query
                  ->setMaxResults(1)
                  ->orderBy('p.lastUpdate', 'DESC')
                  ->getQuery()
                  ->execute();
        $m_l = $m_l[0]->getLastUpdate();
        $m_l = strtotime($m_l->format('Y-m'));
        
        $months = array();

        while ($m_l>=$m_f) {
        	$months[] = array(
	        	  'name' => $this->get_month(date('m', $m_l))." ".date('Y', $m_l),
	        	  'time' => $m_l
        		);
        	//echo date('M Y', $m_l)."<br />";
        	$m_l = strtotime("-1 month", $m_l);        	
        }
        

			        
        return array(
			'name'          => $user->getName(), 
			'current_month' => $month, 
			'url'           => 'manager', 
			'nav'           => $this->get_nav(), 
			'months'        => $months, 
			'stuff'         => $stuff
        );
    }
}
