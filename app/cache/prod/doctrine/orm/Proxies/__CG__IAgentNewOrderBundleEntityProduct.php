<?php

namespace Proxies\__CG__\IAgent\NewOrderBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Product extends \IAgent\NewOrderBundle\Entity\Product implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getCode()
    {
        if ($this->__isInitialized__ === false) {
            return $this->_identifier["code"];
        }
        $this->__load();
        return parent::getCode();
    }

    public function setDeleted($deleted)
    {
        $this->__load();
        return parent::setDeleted($deleted);
    }

    public function getDeleted()
    {
        $this->__load();
        return parent::getDeleted();
    }

    public function setLastUpdate($lastUpdate)
    {
        $this->__load();
        return parent::setLastUpdate($lastUpdate);
    }

    public function getLastUpdate()
    {
        $this->__load();
        return parent::getLastUpdate();
    }

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setPrice($price)
    {
        $this->__load();
        return parent::setPrice($price);
    }

    public function getPrice()
    {
        $this->__load();
        return parent::getPrice();
    }

    public function setProductGroupCode(\IAgent\NewOrderBundle\Entity\ProductGroup $productGroupCode = NULL)
    {
        $this->__load();
        return parent::setProductGroupCode($productGroupCode);
    }

    public function getProductGroupCode()
    {
        $this->__load();
        return parent::getProductGroupCode();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'code', 'deleted', 'lastUpdate', 'name', 'price', 'productGroupCode');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}