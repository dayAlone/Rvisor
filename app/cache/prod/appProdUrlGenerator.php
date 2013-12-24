<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'manager' => array (  0 =>   array (  ),  1 =>   array (    'month' => NULL,    '_controller' => 'IAgent\\ManagerBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/manager/',    ),  ),  4 =>   array (  ),),
        'iagent_manager_default_index' => array (  0 =>   array (    0 => 'month',  ),  1 =>   array (    'month' => NULL,    '_controller' => 'IAgent\\ManagerBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'month',    ),    2 =>     array (      0 => 'text',      1 => '/manager',    ),  ),  4 =>   array (  ),),
        'index' => array (  0 =>   array (  ),  1 =>   array (    'query' => NULL,    '_controller' => 'IAgent\\NewOrderBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'iagent_neworder_default_index' => array (  0 =>   array (    0 => 'query',  ),  1 =>   array (    'query' => NULL,    '_controller' => 'IAgent\\NewOrderBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'query',    ),    1 =>     array (      0 => 'text',      1 => '/search',    ),  ),  4 =>   array (  ),),
        'iagent_neworder_default_orderslist' => array (  0 =>   array (    0 => 'query',  ),  1 =>   array (    'query' => NULL,    '_controller' => 'IAgent\\NewOrderBundle\\Controller\\DefaultController::orderslistAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'query',    ),    2 =>     array (      0 => 'text',      1 => '/orders',    ),  ),  4 =>   array (  ),),
        'iagent_neworder_default_warehousestate' => array (  0 =>   array (    0 => 'code',  ),  1 =>   array (    'code' => NULL,    '_controller' => 'IAgent\\NewOrderBundle\\Controller\\DefaultController::warehouseState',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/state',    ),  ),  4 =>   array (  ),),
        'iagent_neworder_default_step1next' => array (  0 =>   array (    0 => 'order_id',  ),  1 =>   array (    'order_id' => NULL,    '_controller' => 'IAgent\\NewOrderBundle\\Controller\\DefaultController::step1Next',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'order_id',    ),    1 =>     array (      0 => 'text',      1 => '/step2',    ),  ),  4 =>   array (  ),),
        'step2' => array (  0 =>   array (  ),  1 =>   array (    'query' => NULL,    'order_id' => NULL,    '_controller' => 'IAgent\\NewOrderBundle\\Controller\\DefaultController::step2Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/step2/',    ),  ),  4 =>   array (  ),),
        'iagent_neworder_default_step2' => array (  0 =>   array (    0 => 'query',  ),  1 =>   array (    'query' => NULL,    'order_id' => NULL,    '_controller' => 'IAgent\\NewOrderBundle\\Controller\\DefaultController::step2Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'query',    ),    1 =>     array (      0 => 'text',      1 => '/step2/search',    ),  ),  4 =>   array (  ),),
        'step3' => array (  0 =>   array (  ),  1 =>   array (    'query' => NULL,    '_controller' => 'IAgent\\NewOrderBundle\\Controller\\DefaultController::step3Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/step3/',    ),  ),  4 =>   array (  ),),
        'step4' => array (  0 =>   array (  ),  1 =>   array (    'query' => NULL,    '_controller' => 'IAgent\\NewOrderBundle\\Controller\\DefaultController::step4Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/step4/',    ),  ),  4 =>   array (  ),),
        'finish' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IAgent\\NewOrderBundle\\Controller\\DefaultController::finishAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/finish/',    ),  ),  4 =>   array (  ),),
        'history' => array (  0 =>   array (  ),  1 =>   array (    'query' => NULL,    '_controller' => 'IAgent\\NewOrderBundle\\Controller\\DefaultController::historyAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/history/',    ),  ),  4 =>   array (  ),),
        'iagent_neworder_default_historydetail' => array (  0 =>   array (    0 => 'query',  ),  1 =>   array (    'query' => NULL,    '_controller' => 'IAgent\\NewOrderBundle\\Controller\\DefaultController::historydetailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'query',    ),    2 =>     array (      0 => 'text',      1 => '/history',    ),  ),  4 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IAgent\\UserBundle\\Controller\\LoginController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IAgent\\UserBundle\\Controller\\LoginController::loginCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IAgent\\UserBundle\\Controller\\LoginController::logoutkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
