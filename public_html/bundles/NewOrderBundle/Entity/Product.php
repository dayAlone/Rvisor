<?php

namespace IAgent\NewOrderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="IAgent\NewOrderBundle\Repository\ProductRepository")
 */
class Product
{
    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $code;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    protected $deleted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false)
     */
    protected $lastUpdate;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=false)
     */
    protected $name;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="decimal", nullable=false)
     */
    protected $price;

    /**
     * @var \IAgent\NewOrderBundle\Entity\ProductGroup
     *
     * @ORM\ManyToOne(targetEntity="IAgent\NewOrderBundle\Entity\ProductGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_group_code", referencedColumnName="code")
     * })
     */
    protected $productGroupCode;



    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return Product
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
     * @return Product
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
     * Set name
     *
     * @param string $name
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Product
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
     * Set productGroupCode
     *
     * @param \IAgent\NewOrderBundle\Entity\ProductGroup $productGroupCode
     * @return Product
     */
    public function setProductGroupCode(\IAgent\NewOrderBundle\Entity\ProductGroup $productGroupCode = null)
    {
        $this->productGroupCode = $productGroupCode;
    
        return $this;
    }

    /**
     * Get productGroupCode
     *
     * @return \IAgent\NewOrderBundle\Entity\ProductGroup
     */
    public function getProductGroupCode()
    {
        return $this->productGroupCode;
    }
}