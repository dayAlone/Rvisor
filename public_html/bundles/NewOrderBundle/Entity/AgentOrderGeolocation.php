<?php

namespace IAgent\NewOrderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgentOrderGeolocation
 *
 * @ORM\Table(name="agent_order_geolocation")
 * @ORM\Entity
 */
class AgentOrderGeolocation
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
     * @return AgentOrderGeolocation
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
     * @return AgentOrderGeolocation
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
     * @return AgentOrderGeolocation
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
}