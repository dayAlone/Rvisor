<?php

namespace IAgent\NewOrderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Price
 *
 * @ORM\Table(name="price")
 * @ORM\Entity
 */
class Price
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
     * @var float
     *
     * @ORM\Column(name="price", type="decimal", nullable=false)
     */
    private $price;

    /**
     * @var \IAgent\NewOrderBundle\Entity\Product
     *
     * @ORM\ManyToOne(targetEntity="IAgent\NewOrderBundle\Entity\Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_code", referencedColumnName="code")
     * })
     */
    private $productCode;

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
     * @return Price
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
     * @return Price
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
     * Set price
     *
     * @param float $price
     * @return Price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set productCode
     *
     * @param \IAgent\NewOrderBundle\Entity\Product $productCode
     * @return Price
     */
    public function setProductCode(\IAgent\NewOrderBundle\Entity\Product $productCode = null)
    {
        $this->productCode = $productCode;
    
        return $this;
    }

    /**
     * Get productCode
     *
     * @return \IAgent\NewOrderBundle\Entity\Product
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * Set customerCode
     *
     * @param \IAgent\NewOrderBundle\Entity\Customer $customerCode
     * @return Price
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
     * @return Price
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