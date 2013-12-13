<?php

namespace IAgent\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class UserBundle extends Bundle
{
	public function boot()
    {
    	$em = $this->container->get('doctrine.orm.entity_manager');
    	$em->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('bit', 'boolean');
		
    }   
}
