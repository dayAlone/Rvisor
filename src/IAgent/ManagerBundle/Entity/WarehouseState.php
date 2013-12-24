<?php

namespace IAgent\NewOrderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WarehouseState
 *
 * @ORM\Table(name="warehouse_state")
 * @ORM\Entity
 */
class WarehouseState
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
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="agent_code", type="string", length=20, nullable=false)
     */
    private $agentCode;

    /**
     * @var \Product
     *
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_code", referencedColumnName="code")
     * })
     */
    private $productCode;



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
     * @return WarehouseState
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
     * @return WarehouseState
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
     * Set quantity
     *
     * @param integer $quantity
     * @return WarehouseState
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    
        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set agentCode
     *
     * @param string $agentCode
     * @return WarehouseState
     */
    public function setAgentCode($agentCode)
    {
        $this->agentCode = $agentCode;
    
        return $this;
    }

    /**
     * Get agentCode
     *
     * @return string 
     */
    public function getAgentCode()
    {
        return $this->agentCode;
    }

    /**
     * Set productCode
     *
     * @param \IAgent\NewOrderBundle\Entity\Product $productCode
     * @return WarehouseState
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
}