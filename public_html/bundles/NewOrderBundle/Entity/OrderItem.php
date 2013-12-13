<?php

namespace IAgent\NewOrderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderItem
 *
 * @ORM\Table(name="order_item")
 * @ORM\Entity
 */
class OrderItem
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
     * @ORM\Column(name="approved_price", type="decimal", nullable=true)
     */
    private $approvedPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="approved_quantity", type="integer", nullable=true)
     */
    private $approvedQuantity;

    /**
     * @var string
     *
     * @ORM\Column(name="product_name", type="string", length=200, nullable=false)
     */
    private $productName;

    /**
     * @var integer
     *
     * @ORM\Column(name="product_unit_factor", type="integer", nullable=false)
     */
    private $productUnitFactor;

    /**
     * @var string
     *
     * @ORM\Column(name="product_unit_full_name", type="string", length=200, nullable=false)
     */
    private $productUnitFullName;

    /**
     * @var string
     *
     * @ORM\Column(name="product_unit_short_name", type="string", length=200, nullable=false)
     */
    private $productUnitShortName;

    /**
     * @var float
     *
     * @ORM\Column(name="requested_price", type="decimal", nullable=false)
     */
    private $requestedPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="requested_quantity", type="integer", nullable=false)
     */
    private $requestedQuantity;

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
     * @var \IAgent\NewOrderBundle\Entity\ProductUnit
     *
     * @ORM\ManyToOne(targetEntity="IAgent\NewOrderBundle\Entity\ProductUnit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_unit_code", referencedColumnName="code")
     * })
     */
    private $productUnitCode;

    /**
     * @var \IAgent\NewOrderBundle\Entity\AgentOrder
     *
     * @ORM\ManyToOne(targetEntity="IAgent\NewOrderBundle\Entity\AgentOrder")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_id", referencedColumnName="id")
     * })
     */
    private $order;



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
     * Set approvedPrice
     *
     * @param float $approvedPrice
     * @return OrderItem
     */
    public function setApprovedPrice($approvedPrice)
    {
        $this->approvedPrice = $approvedPrice;
    
        return $this;
    }

    /**
     * Get approvedPrice
     *
     * @return float 
     */
    public function getApprovedPrice()
    {
        return $this->approvedPrice;
    }

    /**
     * Set approvedQuantity
     *
     * @param integer $approvedQuantity
     * @return OrderItem
     */
    public function setApprovedQuantity($approvedQuantity)
    {
        $this->approvedQuantity = $approvedQuantity;
    
        return $this;
    }

    /**
     * Get approvedQuantity
     *
     * @return integer 
     */
    public function getApprovedQuantity()
    {
        return $this->approvedQuantity;
    }

    /**
     * Set productName
     *
     * @param string $productName
     * @return OrderItem
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
    
        return $this;
    }

    /**
     * Get productName
     *
     * @return string 
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set productUnitFactor
     *
     * @param integer $productUnitFactor
     * @return OrderItem
     */
    public function setProductUnitFactor($productUnitFactor)
    {
        $this->productUnitFactor = $productUnitFactor;
    
        return $this;
    }

    /**
     * Get productUnitFactor
     *
     * @return integer 
     */
    public function getProductUnitFactor()
    {
        return $this->productUnitFactor;
    }

    /**
     * Set productUnitFullName
     *
     * @param string $productUnitFullName
     * @return OrderItem
     */
    public function setProductUnitFullName($productUnitFullName)
    {
        $this->productUnitFullName = $productUnitFullName;
    
        return $this;
    }

    /**
     * Get productUnitFullName
     *
     * @return string 
     */
    public function getProductUnitFullName()
    {
        return $this->productUnitFullName;
    }

    /**
     * Set productUnitShortName
     *
     * @param string $productUnitShortName
     * @return OrderItem
     */
    public function setProductUnitShortName($productUnitShortName)
    {
        $this->productUnitShortName = $productUnitShortName;
    
        return $this;
    }

    /**
     * Get productUnitShortName
     *
     * @return string 
     */
    public function getProductUnitShortName()
    {
        return $this->productUnitShortName;
    }

    /**
     * Set requestedPrice
     *
     * @param float $requestedPrice
     * @return OrderItem
     */
    public function setRequestedPrice($requestedPrice)
    {
        $this->requestedPrice = $requestedPrice;
    
        return $this;
    }

    /**
     * Get requestedPrice
     *
     * @return float 
     */
    public function getRequestedPrice()
    {
        return $this->requestedPrice;
    }

    /**
     * Set requestedQuantity
     *
     * @param integer $requestedQuantity
     * @return OrderItem
     */
    public function setRequestedQuantity($requestedQuantity)
    {
        $this->requestedQuantity = $requestedQuantity;
    
        return $this;
    }

    /**
     * Get requestedQuantity
     *
     * @return integer 
     */
    public function getRequestedQuantity()
    {
        return $this->requestedQuantity;
    }

    /**
     * Set productCode
     *
     * @param \IAgent\NewOrderBundle\Entity\Product $productCode
     * @return OrderItem
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
     * Set productUnitCode
     *
     * @param \IAgent\NewOrderBundle\Entity\ProductUnit $productUnitCode
     * @return OrderItem
     */
    public function setProductUnitCode(\IAgent\NewOrderBundle\Entity\ProductUnit $productUnitCode = null)
    {
        $this->productUnitCode = $productUnitCode;
    
        return $this;
    }

    /**
     * Get productUnitCode
     *
     * @return \IAgent\NewOrderBundle\Entity\ProductUnit
     */
    public function getProductUnitCode()
    {
        return $this->productUnitCode;
    }

    /**
     * Set order
     *
     * @param \IAgent\NewOrderBundle\Entity\AgentOrder $order
     * @return OrderItem
     */
    public function setOrder(\IAgent\NewOrderBundle\Entity\AgentOrder $order = null)
    {
        $this->order = $order;
    
        return $this;
    }

    /**
     * Get order
     *
     * @return \IAgent\NewOrderBundle\Entity\AgentOrder
     */
    public function getOrder()
    {
        return $this->order;
    }
}