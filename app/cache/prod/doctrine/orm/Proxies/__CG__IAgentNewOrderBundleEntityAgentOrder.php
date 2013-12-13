<?php

namespace Proxies\__CG__\IAgent\NewOrderBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class AgentOrder extends \IAgent\NewOrderBundle\Entity\AgentOrder implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setAgentComment($agentComment)
    {
        $this->__load();
        return parent::setAgentComment($agentComment);
    }

    public function getAgentComment()
    {
        $this->__load();
        return parent::getAgentComment();
    }

    public function setBackendNum($backendNum)
    {
        $this->__load();
        return parent::setBackendNum($backendNum);
    }

    public function getBackendNum()
    {
        $this->__load();
        return parent::getBackendNum();
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

    public function setDeliveryTimestamp($deliveryTimestamp)
    {
        $this->__load();
        return parent::setDeliveryTimestamp($deliveryTimestamp);
    }

    public function getDeliveryTimestamp()
    {
        $this->__load();
        return parent::getDeliveryTimestamp();
    }

    public function setFrontendNum($frontendNum)
    {
        $this->__load();
        return parent::setFrontendNum($frontendNum);
    }

    public function getFrontendNum()
    {
        $this->__load();
        return parent::getFrontendNum();
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

    public function setOriginTimestamp($originTimestamp)
    {
        $this->__load();
        return parent::setOriginTimestamp($originTimestamp);
    }

    public function getOriginTimestamp()
    {
        $this->__load();
        return parent::getOriginTimestamp();
    }

    public function setRequestedDeliveryTimestamp($requestedDeliveryTimestamp)
    {
        $this->__load();
        return parent::setRequestedDeliveryTimestamp($requestedDeliveryTimestamp);
    }

    public function getRequestedDeliveryTimestamp()
    {
        $this->__load();
        return parent::getRequestedDeliveryTimestamp();
    }

    public function setStatus($status)
    {
        $this->__load();
        return parent::setStatus($status);
    }

    public function getStatus()
    {
        $this->__load();
        return parent::getStatus();
    }

    public function setDeliveryType($delivery_type)
    {
        $this->__load();
        return parent::setDeliveryType($delivery_type);
    }

    public function getDeliveryType()
    {
        $this->__load();
        return parent::getDeliveryType();
    }

    public function setPaymentType($payment_type)
    {
        $this->__load();
        return parent::setPaymentType($payment_type);
    }

    public function getPaymentType()
    {
        $this->__load();
        return parent::getPaymentType();
    }

    public function setStatusComment($statusComment)
    {
        $this->__load();
        return parent::setStatusComment($statusComment);
    }

    public function getStatusComment()
    {
        $this->__load();
        return parent::getStatusComment();
    }

    public function setAmountOwed($amountOwed)
    {
        $this->__load();
        return parent::setAmountOwed($amountOwed);
    }

    public function getAmountOwed()
    {
        $this->__load();
        return parent::getAmountOwed();
    }

    public function setClearedTimestamp($clearedTimestamp)
    {
        $this->__load();
        return parent::setClearedTimestamp($clearedTimestamp);
    }

    public function getClearedTimestamp()
    {
        $this->__load();
        return parent::getClearedTimestamp();
    }

    public function setDaysOwed($daysOwed)
    {
        $this->__load();
        return parent::setDaysOwed($daysOwed);
    }

    public function getDaysOwed()
    {
        $this->__load();
        return parent::getDaysOwed();
    }

    public function setDueTimestamp($dueTimestamp)
    {
        $this->__load();
        return parent::setDueTimestamp($dueTimestamp);
    }

    public function getDueTimestamp()
    {
        $this->__load();
        return parent::getDueTimestamp();
    }

    public function setCustomerCode(\IAgent\NewOrderBundle\Entity\Customer $customerCode = NULL)
    {
        $this->__load();
        return parent::setCustomerCode($customerCode);
    }

    public function getCustomerCode()
    {
        $this->__load();
        return parent::getCustomerCode();
    }

    public function setAgentCode(\IAgent\NewOrderBundle\Entity\Agent $agentCode = NULL)
    {
        $this->__load();
        return parent::setAgentCode($agentCode);
    }

    public function getAgentCode()
    {
        $this->__load();
        return parent::getAgentCode();
    }

    public function setGeolocationFk(\IAgent\NewOrderBundle\Entity\AgentOrderGeolocation $geolocationFk = NULL)
    {
        $this->__load();
        return parent::setGeolocationFk($geolocationFk);
    }

    public function getGeolocationFk()
    {
        $this->__load();
        return parent::getGeolocationFk();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'delivery_type', 'payment_type', 'agentComment', 'backendNum', 'deleted', 'deliveryTimestamp', 'frontendNum', 'lastUpdate', 'originTimestamp', 'requestedDeliveryTimestamp', 'status', 'statusComment', 'amountOwed', 'clearedTimestamp', 'daysOwed', 'dueTimestamp', 'customerCode', 'agentCode', 'geolocationFk');
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