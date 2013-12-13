<?php

namespace IAgent\NewOrderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductGroup
 *
 * @ORM\Table(name="product_group")
 * @ORM\Entity
 */
class ProductGroup
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
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false)
     */
    private $lastUpdate;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=false)
     */
    private $name;

    /**
     * @var \IAgent\NewOrderBundle\Entity\ProductGroup
     *
     * @ORM\ManyToOne(targetEntity="IAgent\NewOrderBundle\Entity\ProductGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_group_code", referencedColumnName="code")
     * })
     */
    private $parentGroupCode;



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
     * @return ProductGroup
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
     * @return ProductGroup
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
     * @return ProductGroup
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
     * Set parentGroupCode
     *
     * @param \IAgent\NewOrderBundle\Entity\ProductGroup $parentGroupCode
     * @return ProductGroup
     */
    public function setParentGroupCode(\IAgent\NewOrderBundle\Entity\ProductGroup $parentGroupCode = null)
    {
        $this->parentGroupCode = $parentGroupCode;
    
        return $this;
    }

    /**
     * Get parentGroupCode
     *
     * @return \IAgent\NewOrderBundle\Entity\ProductGroup
     */
    public function getParentGroupCode()
    {
        return $this->parentGroupCode;
    }
}