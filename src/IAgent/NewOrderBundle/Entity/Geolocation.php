<?php

namespace IAgent\NewOrderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Geolocation
 *
 * @ORM\Table(name="geolocation")
 * @ORM\Entity
 */
class Geolocation
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
     * @var float
     *
     * @ORM\Column(name="accuracy", type="decimal", nullable=false)
     */
    private $accuracy;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="decimal", nullable=false)
     */
    private $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="decimal", nullable=false)
     */
    private $longitude;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="measurement_timestamp", type="datetime", nullable=false)
     */
    private $measurementTimestamp;

    /**
     * @var \IAgent\NewOrderBundle\Entity\Agent
     *
     * @ORM\ManyToOne(targetEntity="IAgent\NewOrderBundle\Entity\Agent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="agent_code", referencedColumnName="code")
     * })
     */
    private $agentCode;



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
     * Set accuracy
     *
     * @param float $accuracy
     * @return Geolocation
     */
    public function setAccuracy($accuracy)
    {
        $this->accuracy = $accuracy;
    
        return $this;
    }

    /**
     * Get accuracy
     *
     * @return float 
     */
    public function getAccuracy()
    {
        return $this->accuracy;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return Geolocation
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    
        return $this;
    }

    /**
     * Get latitude
     *
     * @return float 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     * @return Geolocation
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    
        return $this;
    }

    /**
     * Get longitude
     *
     * @return float 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set measurementTimestamp
     *
     * @param \DateTime $measurementTimestamp
     * @return Geolocation
     */
    public function setMeasurementTimestamp($measurementTimestamp)
    {
        $this->measurementTimestamp = $measurementTimestamp;
    
        return $this;
    }

    /**
     * Get measurementTimestamp
     *
     * @return \DateTime 
     */
    public function getMeasurementTimestamp()
    {
        return $this->measurementTimestamp;
    }

    /**
     * Set agentCode
     *
     * @param \IAgent\NewOrderBundle\Entity\Agent $agentCode
     * @return Geolocation
     */
    public function setAgentCode(\IAgent\NewOrderBundle\Entity\Agent $agentCode = null)
    {
        $this->agentCode = $agentCode;
    
        return $this;
    }

    /**
     * Get agentCode
     *
     * @return \IAgent\NewOrderBundle\Entity\Agent
     */
    public function getAgentCode()
    {
        return $this->agentCode;
    }
}