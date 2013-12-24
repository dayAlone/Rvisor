<?php

namespace IAgent\NewOrderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WarehouseQuantity
 *
 * @ORM\Table(name="warehouse_quantity")
 * @ORM\Entity
 */
class WarehouseQuantity
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
     * @ORM\Column(name="warehouse_code", type="string", length=20, nullable=false)
     */
    private $warehouseCode;

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
     * @return WarehouseQuantity
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
     * @return WarehouseQuantity
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
     * @return WarehouseQuantity
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
     * Set warehouseCode
     *
     * @param string $warehouseCode
     * @return WarehouseQuantity
     */
    public function setWarehouseCode($warehouseCode)
    {
        $this->warehouseCode = $warehouseCode;
    
        return $this;
    }

    /**
     * Get warehouseCode
     *
     * @return string 
     */
    public function getWarehouseCode()
    {
        return $this->warehouseCode;
    }

    /**
     * Set productCode
     *
     * @param \IAgent\NewOrderBundle\Entity\Product $productCode
     * @return WarehouseQuantity
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