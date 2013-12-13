<?php

namespace IAgent\NewOrderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgentCustomer
 *
 * @ORM\Table(name="agent_customer")
 * @ORM\Entity
 */
class AgentCustomer
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
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false)
     */
    private $lastUpdate;

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
     * Set deleted
     *
     * @param boolean $deleted
     * @return AgentCustomer
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
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     * @return AgentCustomer
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
     * Set customerCode
     *
     * @param \IAgent\NewOrderBundle\Entity\Customer $customerCode
     * @return AgentCustomer
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
     * @return AgentCustomer
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