<?php

namespace IAgent\NewOrderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgentOrder
 *
 * @ORM\Table(name="agent_order")
 * @ORM\Entity
 */
class AgentOrder
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
     * @var string
     *
     * @ORM\Column(name="agent_comment", type="string", length=200, nullable=true)
     */
    private $agentComment;

    /**
     * @var string
     *
     * @ORM\Column(name="backend_num", type="string", length=20, nullable=true)
     */
    private $backendNum;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="delivery_timestamp", type="datetime", nullable=true)
     */
    private $deliveryTimestamp;

    /**
     * @var string
     *
     * @ORM\Column(name="frontend_num", type="string", length=20, nullable=false)
     */
    private $frontendNum;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false)
     */
    private $lastUpdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="origin_timestamp", type="datetime", nullable=false)
     */
    private $originTimestamp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="requested_delivery_timestamp", type="datetime", nullable=false)
     */
    private $requestedDeliveryTimestamp;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="status_comment", type="string", length=200, nullable=true)
     */
    private $statusComment;

    /**
     * @var float
     *
     * @ORM\Column(name="amount_owed", type="decimal", nullable=true)
     */
    private $amountOwed;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cleared_timestamp", type="datetime", nullable=true)
     */
    private $clearedTimestamp;

    /**
     * @var integer
     *
     * @ORM\Column(name="days_owed", type="integer", nullable=false)
     */
    private $daysOwed;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="due_timestamp", type="datetime", nullable=true)
     */
    private $dueTimestamp;

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
     * @var \IAgent\NewOrderBundle\Entity\AgentOrderGeolocation
     *
     * @ORM\ManyToOne(targetEntity="IAgent\NewOrderBundle\Entity\AgentOrderGeolocation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="geolocation_fk", referencedColumnName="id")
     * })
     */
    private $geolocationFk;



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
     * Set agentComment
     *
     * @param string $agentComment
     * @return AgentOrder
     */
    public function setAgentComment($agentComment)
    {
        $this->agentComment = $agentComment;
    
        return $this;
    }

    /**
     * Get agentComment
     *
     * @return string 
     */
    public function getAgentComment()
    {
        return $this->agentComment;
    }

    /**
     * Set backendNum
     *
     * @param string $backendNum
     * @return AgentOrder
     */
    public function setBackendNum($backendNum)
    {
        $this->backendNum = $backendNum;
    
        return $this;
    }

    /**
     * Get backendNum
     *
     * @return string 
     */
    public function getBackendNum()
    {
        return $this->backendNum;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return AgentOrder
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
     * Set deliveryTimestamp
     *
     * @param \DateTime $deliveryTimestamp
     * @return AgentOrder
     */
    public function setDeliveryTimestamp($deliveryTimestamp)
    {
        $this->deliveryTimestamp = $deliveryTimestamp;
    
        return $this;
    }

    /**
     * Get deliveryTimestamp
     *
     * @return \DateTime 
     */
    public function getDeliveryTimestamp()
    {
        return $this->deliveryTimestamp;
    }

    /**
     * Set frontendNum
     *
     * @param string $frontendNum
     * @return AgentOrder
     */
    public function setFrontendNum($frontendNum)
    {
        $this->frontendNum = $frontendNum;
    
        return $this;
    }

    /**
     * Get frontendNum
     *
     * @return string 
     */
    public function getFrontendNum()
    {
        return $this->frontendNum;
    }

    /**
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     * @return AgentOrder
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
     * Set originTimestamp
     *
     * @param \DateTime $originTimestamp
     * @return AgentOrder
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
     * Set requestedDeliveryTimestamp
     *
     * @param \DateTime $requestedDeliveryTimestamp
     * @return AgentOrder
     */
    public function setRequestedDeliveryTimestamp($requestedDeliveryTimestamp)
    {
        $this->requestedDeliveryTimestamp = $requestedDeliveryTimestamp;
    
        return $this;
    }

    /**
     * Get requestedDeliveryTimestamp
     *
     * @return \DateTime 
     */
    public function getRequestedDeliveryTimestamp()
    {
        return $this->requestedDeliveryTimestamp;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return AgentOrder
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set statusComment
     *
     * @param string $statusComment
     * @return AgentOrder
     */
    public function setStatusComment($statusComment)
    {
        $this->statusComment = $statusComment;
    
        return $this;
    }

    /**
     * Get statusComment
     *
     * @return string 
     */
    public function getStatusComment()
    {
        return $this->statusComment;
    }

    /**
     * Set amountOwed
     *
     * @param float $amountOwed
     * @return AgentOrder
     */
    public function setAmountOwed($amountOwed)
    {
        $this->amountOwed = $amountOwed;
    
        return $this;
    }

    /**
     * Get amountOwed
     *
     * @return float 
     */
    public function getAmountOwed()
    {
        return $this->amountOwed;
    }

    /**
     * Set clearedTimestamp
     *
     * @param \DateTime $clearedTimestamp
     * @return AgentOrder
     */
    public function setClearedTimestamp($clearedTimestamp)
    {
        $this->clearedTimestamp = $clearedTimestamp;
    
        return $this;
    }

    /**
     * Get clearedTimestamp
     *
     * @return \DateTime 
     */
    public function getClearedTimestamp()
    {
        return $this->clearedTimestamp;
    }

    /**
     * Set daysOwed
     *
     * @param integer $daysOwed
     * @return AgentOrder
     */
    public function setDaysOwed($daysOwed)
    {
        $this->daysOwed = $daysOwed;
    
        return $this;
    }

    /**
     * Get daysOwed
     *
     * @return integer 
     */
    public function getDaysOwed()
    {
        return $this->daysOwed;
    }

    /**
     * Set dueTimestamp
     *
     * @param \DateTime $dueTimestamp
     * @return AgentOrder
     */
    public function setDueTimestamp($dueTimestamp)
    {
        $this->dueTimestamp = $dueTimestamp;
    
        return $this;
    }

    /**
     * Get dueTimestamp
     *
     * @return \DateTime 
     */
    public function getDueTimestamp()
    {
        return $this->dueTimestamp;
    }

    /**
     * Set customerCode
     *
     * @param \IAgent\NewOrderBundle\Entity\Customer $customerCode
     * @return AgentOrder
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
     * @return AgentOrder
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

    /**
     * Set geolocationFk
     *
     * @param \IAgent\NewOrderBundle\Entity\AgentOrderGeolocation $geolocationFk
     * @return AgentOrder
     */
    public function setGeolocationFk(\IAgent\NewOrderBundle\Entity\AgentOrderGeolocation $geolocationFk = null)
    {
        $this->geolocationFk = $geolocationFk;
    
        return $this;
    }

    /**
     * Get geolocationFk
     *
     * @return \IAgent\NewOrderBundle\Entity\AgentOrderGeolocation
     */
    public function getGeolocationFk()
    {
        return $this->geolocationFk;
    }
}