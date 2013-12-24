<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/manager')) {
            // manager
            if (rtrim($pathinfo, '/') === '/manager') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'manager');
                }

                return array (  'month' => NULL,  '_controller' => 'IAgent\\ManagerBundle\\Controller\\DefaultController::indexAction',  '_route' => 'manager',);
            }

            // iagent_manager_default_index
            if (preg_match('#^/manager/(?P<month>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'iagent_manager_default_index');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'iagent_manager_default_index')), array (  'month' => NULL,  '_controller' => 'IAgent\\ManagerBundle\\Controller\\DefaultController::indexAction',));
            }

            // iagent_manager_default_order
            if (0 === strpos($pathinfo, '/manager/order') && preg_match('#^/manager/order/(?P<order>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'iagent_manager_default_order');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'iagent_manager_default_order')), array (  'order' => NULL,  '_controller' => 'IAgent\\ManagerBundle\\Controller\\DefaultController::orderAction',));
            }

        }

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  'query' => NULL,  '_controller' => 'IAgent\\NewOrderBundle\\Controller\\DefaultController::indexAction',  '_route' => 'index',);
        }

        // iagent_neworder_default_index
        if (0 === strpos($pathinfo, '/search') && preg_match('#^/search(?:/(?P<query>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'iagent_neworder_default_index')), array (  'query' => NULL,  '_controller' => 'IAgent\\NewOrderBundle\\Controller\\DefaultController::indexAction',));
        }

        // iagent_neworder_default_orderslist
        if (0 === strpos($pathinfo, '/orders') && preg_match('#^/orders/(?P<query>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'iagent_neworder_default_orderslist');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'iagent_neworder_default_orderslist')), array (  'query' => NULL,  '_controller' => 'IAgent\\NewOrderBundle\\Controller\\DefaultController::orderslistAction',));
        }

        if (0 === strpos($pathinfo, '/st')) {
            // iagent_neworder_default_warehousestate
            if (0 === strpos($pathinfo, '/state') && preg_match('#^/state/(?P<code>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'iagent_neworder_default_warehousestate');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'iagent_neworder_default_warehousestate')), array (  'code' => NULL,  '_controller' => 'IAgent\\NewOrderBundle\\Controller\\DefaultController::warehouseState',));
            }

            if (0 === strpos($pathinfo, '/step')) {
                if (0 === strpos($pathinfo, '/step2')) {
                    // iagent_neworder_default_step1next
                    if (preg_match('#^/step2(?:/(?P<order_id>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'iagent_neworder_default_step1next')), array (  'order_id' => NULL,  '_controller' => 'IAgent\\NewOrderBundle\\Controller\\DefaultController::step1Next',));
                    }

                    // step2
                    if (rtrim($pathinfo, '/') === '/step2') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'step2');
                        }

                        return array (  'query' => NULL,  'order_id' => NULL,  '_controller' => 'IAgent\\NewOrderBundle\\Controller\\DefaultController::step2Action',  '_route' => 'step2',);
                    }

                    // iagent_neworder_default_step2
                    if (0 === strpos($pathinfo, '/step2/search') && preg_match('#^/step2/search(?:/(?P<query>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'iagent_neworder_default_step2')), array (  'query' => NULL,  'order_id' => NULL,  '_controller' => 'IAgent\\NewOrderBundle\\Controller\\DefaultController::step2Action',));
                    }

                }

                // step3
                if (rtrim($pathinfo, '/') === '/step3') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'step3');
                    }

                    return array (  'query' => NULL,  '_controller' => 'IAgent\\NewOrderBundle\\Controller\\DefaultController::step3Action',  '_route' => 'step3',);
                }

                // step4
                if (rtrim($pathinfo, '/') === '/step4') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'step4');
                    }

                    return array (  'query' => NULL,  '_controller' => 'IAgent\\NewOrderBundle\\Controller\\DefaultController::step4Action',  '_route' => 'step4',);
                }

            }

        }

        // finish
        if (rtrim($pathinfo, '/') === '/finish') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'finish');
            }

            return array (  '_controller' => 'IAgent\\NewOrderBundle\\Controller\\DefaultController::finishAction',  '_route' => 'finish',);
        }

        if (0 === strpos($pathinfo, '/history')) {
            // history
            if (rtrim($pathinfo, '/') === '/history') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'history');
                }

                return array (  'query' => NULL,  '_controller' => 'IAgent\\NewOrderBundle\\Controller\\DefaultController::historyAction',  '_route' => 'history',);
            }

            // iagent_neworder_default_historydetail
            if (preg_match('#^/history/(?P<query>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'iagent_neworder_default_historydetail');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'iagent_neworder_default_historydetail')), array (  'query' => NULL,  '_controller' => 'IAgent\\NewOrderBundle\\Controller\\DefaultController::historydetailAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'IAgent\\UserBundle\\Controller\\LoginController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'IAgent\\UserBundle\\Controller\\LoginController::loginCheckAction',  '_route' => 'login_check',);
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'IAgent\\UserBundle\\Controller\\LoginController::logoutkAction',  '_route' => 'logout',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
