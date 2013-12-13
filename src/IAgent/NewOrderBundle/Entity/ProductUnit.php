<?php

namespace IAgent\NewOrderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductUnit
 *
 * @ORM\Table(name="product_unit")
 * @ORM\Entity
 */
class ProductUnit
{
    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $code;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted;

    /**
     * @var integer
     *
     * @ORM\Column(name="factor", type="integer", nullable=false)
     */
    private $factor;

    /**
     * @var string
     *
     * @ORM\Column(name="full_name", type="string", length=200, nullable=false)
     */
    private $fullName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false)
     */
    private $lastUpdate;

    /**
     * @var string
     *
     * @ORM\Column(name="short_name", type="string", length=200, nullable=false)
     */
    private $shortName;

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
     * @return ProductUnit
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
     * Set factor
     *
     * @param integer $factor
     * @return ProductUnit
     */
    public function setFactor($factor)
    {
        $this->factor = $factor;
    
        return $this;
    }

    /**
     * Get factor
     *
     * @return integer 
     */
    public function getFactor()
    {
        return $this->factor;
    }

    /**
     * Set fullName
     *
     * @param string $fullName
     * @return ProductUnit
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    
        return $this;
    }

    /**
     * Get fullName
     *
     * @return string 
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     * @return ProductUnit
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
     * Set shortName
     *
     * @param string $shortName
     * @return ProductUnit
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;
    
        return $this;
    }

    /**
     * Get shortName
     *
     * @return string 
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Set productCode
     *
     * @param \IAgent\NewOrderBundle\Entity\Product $productCode
     * @return ProductUnit
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