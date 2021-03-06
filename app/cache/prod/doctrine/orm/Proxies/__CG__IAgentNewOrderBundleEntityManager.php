<?php

namespace Proxies\__CG__\IAgent\NewOrderBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Manager extends \IAgent\NewOrderBundle\Entity\Manager implements \Doctrine\ORM\Proxy\Proxy
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

    public function setLogin($login)
    {
        $this->__load();
        return parent::setLogin($login);
    }

    public function getLogin()
    {
        $this->__load();
        return parent::getLogin();
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

    public function setPassword($password)
    {
        $this->__load();
        return parent::setPassword($password);
    }

    public function getPassword()
    {
        $this->__load();
        return parent::getPassword();
    }

    public function setActive($active)
    {
        $this->__load();
        return parent::setActive($active);
    }

    public function getActive()
    {
        $this->__load();
        return parent::getActive();
    }

    public function setComment($comment)
    {
        $this->__load();
        return parent::setComment($comment);
    }

    public function getComment()
    {
        $this->__load();
        return parent::getComment();
    }

    public function setEmail($email)
    {
        $this->__load();
        return parent::setEmail($email);
    }

    public function getEmail()
    {
        $this->__load();
        return parent::getEmail();
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

    public function setPhone($phone)
    {
        $this->__load();
        return parent::setPhone($phone);
    }

    public function getPhone()
    {
        $this->__load();
        return parent::getPhone();
    }

    public function setParentUserFk(\IAgent\NewOrderBundle\Entity\Manager $parentUserFk = NULL)
    {
        $this->__load();
        return parent::setParentUserFk($parentUserFk);
    }

    public function getParentUserFk()
    {
        $this->__load();
        return parent::getParentUserFk();
    }

    public function setWorkingTimeFk(\IAgent\NewOrderBundle\Entity\WorkingTime $workingTimeFk = NULL)
    {
        $this->__load();
        return parent::setWorkingTimeFk($workingTimeFk);
    }

    public function getWorkingTimeFk()
    {
        $this->__load();
        return parent::getWorkingTimeFk();
    }

    public function setDevice(\IAgent\NewOrderBundle\Entity\Device $device = NULL)
    {
        $this->__load();
        return parent::setDevice($device);
    }

    public function getDevice()
    {
        $this->__load();
        return parent::getDevice();
    }

    public function setUserTypeFk(\IAgent\NewOrderBundle\Entity\UserType $userTypeFk = NULL)
    {
        $this->__load();
        return parent::setUserTypeFk($userTypeFk);
    }

    public function getUserTypeFk()
    {
        $this->__load();
        return parent::getUserTypeFk();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'login', 'name', 'password', 'active', 'comment', 'email', 'lastUpdate', 'phone', 'parentUserFk', 'workingTimeFk', 'device', 'userTypeFk');
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