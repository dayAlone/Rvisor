<?php

namespace IAgent\NewOrderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnknownDeviceConnection
 *
 * @ORM\Table(name="unknown_device_connection")
 * @ORM\Entity
 */
class UnknownDeviceConnection
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
     * @var \DateTime
     *
     * @ORM\Column(name="last_attempt_timestamp", type="datetime", nullable=false)
     */
    private $lastAttemptTimestamp;

    /**
     * @var string
     *
     * @ORM\Column(name="udid", type="string", length=40, nullable=false)
     */
    private $udid;

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
     * Set lastAttemptTimestamp
     *
     * @param \DateTime $lastAttemptTimestamp
     * @return UnknownDeviceConnection
     */
    public function setLastAttemptTimestamp($lastAttemptTimestamp)
    {
        $this->lastAttemptTimestamp = $lastAttemptTimestamp;
    
        return $this;
    }

    /**
     * Get lastAttemptTimestamp
     *
     * @return \DateTime 
     */
    public function getLastAttemptTimestamp()
    {
        return $this->lastAttemptTimestamp;
    }

    /**
     * Set udid
     *
     * @param string $udid
     * @return UnknownDeviceConnection
     */
    public function setUdid($udid)
    {
        $this->udid = $udid;
    
        return $this;
    }

    /**
     * Get udid
     *
     * @return string 
     */
    public function getUdid()
    {
        return $this->udid;
    }

    /**
     * Set agentCode
     *
     * @param \IAgent\NewOrderBundle\Entity\Agent $agentCode
     * @return UnknownDeviceConnection
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