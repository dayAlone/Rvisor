<?php

namespace IAgent\NewOrderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 *
 * @ORM\Table(name="customer")
 * @ORM\Entity(repositoryClass="IAgent\NewOrderBundle\Repository\CustomerRepository")
 */
class Customer
{
    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $code;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    protected $deleted;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=false)
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=200, nullable=false)
     */
    protected $address;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=200, nullable=false)
     */
    protected $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=200, nullable=true)
     */
    protected $comment;

    /**
     * @var float
     *
     * @ORM\Column(name="current_debt", type="decimal", nullable=false)
     */
    protected $currentDebt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false)
     */
    protected $lastUpdate;

    /**
     * @var float
     *
     * @ORM\Column(name="maximum_debt", type="decimal", nullable=false)
     */
    protected $maximumDebt;

    /**
     * @var \IAgent\NewOrderBundle\Entity\CustomerGeolocation
     *
     * @ORM\ManyToOne(targetEntity="IAgent\NewOrderBundle\Entity\CustomerGeolocation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="geolocation_fk", referencedColumnName="id")
     * })
     */
    protected $geolocationFk;



    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return Customer
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    
        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Customer
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Customer
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Customer
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    
        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Customer
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    
        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set currentDebt
     *
     * @param float $currentDebt
     * @return Customer
     */
    public function setCurrentDebt($currentDebt)
    {
        $this->currentDebt = $currentDebt;
    
        return $this;
    }

    /**
     * Get currentDebt
     *
     * @return float 
     */
    public function getCurrentDebt()
    {
        return $this->currentDebt;
    }

    /**
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     * @return Customer
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;
    
        return $this;
    }

    /**
     * Get lastUpdate
     *
     * @return \DateTime 
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * Set maximumDebt
     *
     * @param float $maximumDebt
     * @return Customer
     */
    public function setMaximumDebt($maximumDebt)
    {
        $this->maximumDebt = $maximumDebt;
    
        return $this;
    }

    /**
     * Get maximumDebt
     *
     * @return float 
     */
    public function getMaximumDebt()
    {
        return $this->maximumDebt;
    }

    /**
     * Set geolocationFk
     *
     * @param \IAgent\NewOrderBundle\Entity\CustomerGeolocation $geolocationFk
     * @return Customer
     */
    public function setGeolocationFk(\IAgent\NewOrderBundle\Entity\CustomerGeolocation $geolocationFk = null)
    {
        $this->geolocationFk = $geolocationFk;
    
        return $this;
    }

    /**
     * Get geolocationFk
     *
     * @return \IAgent\NewOrderBundle\Entity\CustomerGeolocation
     */
    public function getGeolocationFk()
    {
        return $this->geolocationFk;
    }
}