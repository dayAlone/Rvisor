<?php

namespace IAgent\NewOrderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 *
 * @ORM\Table(name="company")
 * @ORM\Entity
 */
class Company
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="check_warehouse_state", type="boolean", nullable=false)
     */
    private $checkWarehouseState;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=false)
     */
    private $name;

    /**
     * @var boolean
     *
     * @ORM\Column(name="use_base_price", type="boolean", nullable=false)
     */
    private $useBasePrice;

    /**
     * @var boolean
     *
     * @ORM\Column(name="use_base_unit", type="boolean", nullable=false)
     */
    private $useBaseUnit;

    /**
     * @var integer
     *
     * @ORM\Column(name="geolocation_policy", type="integer", nullable=false)
     */
    private $geolocationPolicy;

    /**
     * @var integer
     *
     * @ORM\Column(name="geolocation_update_period", type="integer", nullable=false)
     */
    private $geolocationUpdatePeriod;

    /**
     * @var \IAgent\NewOrderBundle\Entity\WorkingTime
     *
     * @ORM\ManyToOne(targetEntity="IAgent\NewOrderBundle\Entity\WorkingTime")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="working_time_fk", referencedColumnName="id")
     * })
     */
    private $workingTimeFk;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set checkWarehouseState
     *
     * @param boolean $checkWarehouseState
     * @return Company
     */
    public function setCheckWarehouseState($checkWarehouseState)
    {
        $this->checkWarehouseState = $checkWarehouseState;
    
        return $this;
    }

    /**
     * Get checkWarehouseState
     *
     * @return boolean 
     */
    public function getCheckWarehouseState()
    {
        return $this->checkWarehouseState;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Company
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
     * Set useBasePrice
     *
     * @param boolean $useBasePrice
     * @return Company
     */
    public function setUseBasePrice($useBasePrice)
    {
        $this->useBasePrice = $useBasePrice;
    
        return $this;
    }

    /**
     * Get useBasePrice
     *
     * @return boolean 
     */
    public function getUseBasePrice()
    {
        return $this->useBasePrice;
    }

    /**
     * Set useBaseUnit
     *
     * @param boolean $useBaseUnit
     * @return Company
     */
    public function setUseBaseUnit($useBaseUnit)
    {
        $this->useBaseUnit = $useBaseUnit;
    
        return $this;
    }

    /**
     * Get useBaseUnit
     *
     * @return boolean 
     */
    public function getUseBaseUnit()
    {
        return $this->useBaseUnit;
    }

    /**
     * Set geolocationPolicy
     *
     * @param integer $geolocationPolicy
     * @return Company
     */
    public function setGeolocationPolicy($geolocationPolicy)
    {
        $this->geolocationPolicy = $geolocationPolicy;
    
        return $this;
    }

    /**
     * Get geolocationPolicy
     *
     * @return integer 
     */
    public function getGeolocationPolicy()
    {
        return $this->geolocationPolicy;
    }

    /**
     * Set geolocationUpdatePeriod
     *
     * @param integer $geolocationUpdatePeriod
     * @return Company
     */
    public function setGeolocationUpdatePeriod($geolocationUpdatePeriod)
    {
        $this->geolocationUpdatePeriod = $geolocationUpdatePeriod;
    
        return $this;
    }

    /**
     * Get geolocationUpdatePeriod
     *
     * @return integer 
     */
    public function getGeolocationUpdatePeriod()
    {
        return $this->geolocationUpdatePeriod;
    }

    /**
     * Set workingTimeFk
     *
     * @param \IAgent\NewOrderBundle\Entity\WorkingTime $workingTimeFk
     * @return Company
     */
    public function setWorkingTimeFk(\IAgent\NewOrderBundle\Entity\WorkingTime $workingTimeFk = null)
    {
        $this->workingTimeFk = $workingTimeFk;
    
        return $this;
    }

    /**
     * Get workingTimeFk
     *
     * @return \IAgent\NewOrderBundle\Entity\WorkingTime
     */
    public function getWorkingTimeFk()
    {
        return $this->workingTimeFk;
    }
}