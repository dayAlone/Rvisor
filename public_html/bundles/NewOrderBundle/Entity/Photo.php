<?php

namespace IAgent\NewOrderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photo
 *
 * @ORM\Table(name="photo")
 * @ORM\Entity
 */
class Photo
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
     * @ORM\Column(name="accuracy", type="decimal", nullable=true)
     */
    private $accuracy;

    /**
     * @var string
     *
     * @ORM\Column(name="file_name", type="string", length=200, nullable=false)
     */
    private $fileName;

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
     * @ORM\Column(name="origin_timestamp", type="datetime", nullable=false)
     */
    private $originTimestamp;

    /**
     * @var \IAgent\NewOrderBundle\Entity\Customer
     *
     * @ORM\ManyToOne(targetEntity="IAgent\NewOrderBundle\Entity\Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_code", referencedColumnName="code")
     * })
     */
    private $customerCode;

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
     * @return Photo
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
     * Set fileName
     *
     * @param string $fileName
     * @return Photo
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    
        return $this;
    }

    /**
     * Get fileName
     *
     * @return string 
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return Photo
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
     * @return Photo
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
     * Set originTimestamp
     *
     * @param \DateTime $originTimestamp
     * @return Photo
     */
    public function setOriginTimestamp($originTimestamp)
    {
        $this->originTimestamp = $originTimestamp;
    
        return $this;
    }

    /**
     * Get originTimestamp
     *
     * @return \DateTime 
     */
    public function getOriginTimestamp()
    {
        return $this->originTimestamp;
    }

    /**
     * Set customerCode
     *
     * @param \IAgent\NewOrderBundle\Entity\Customer $customerCode
     * @return Photo
     */
    public function setCustomerCode(\IAgent\NewOrderBundle\Entity\Customer $customerCode = null)
    {
        $this->customerCode = $customerCode;
    
        return $this;
    }

    /**
     * Get customerCode
     *
     * @return \IAgent\NewOrderBundle\Entity\Customer
     */
    public function getCustomerCode()
    {
        return $this->customerCode;
    }

    /**
     * Set agentCode
     *
     * @param \IAgent\NewOrderBundle\Entity\Agent $agentCode
     * @return Photo
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