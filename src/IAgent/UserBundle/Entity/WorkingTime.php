<?php

namespace IAgent\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorkingTime
 *
 * @ORM\Table(name="working_time")
 * @ORM\Entity
 */
class WorkingTime
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
     * @ORM\Column(name="workingHoursFrom", type="time", nullable=true)
     */
    private $workinghoursfrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="workingHoursTo", type="time", nullable=true)
     */
    private $workinghoursto;



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
     * Set workinghoursfrom
     *
     * @param \DateTime $workinghoursfrom
     * @return WorkingTime
     */
    public function setWorkinghoursfrom($workinghoursfrom)
    {
        $this->workinghoursfrom = $workinghoursfrom;
    
        return $this;
    }

    /**
     * Get workinghoursfrom
     *
     * @return \DateTime 
     */
    public function getWorkinghoursfrom()
    {
        return $this->workinghoursfrom;
    }

    /**
     * Set workinghoursto
     *
     * @param \DateTime $workinghoursto
     * @return WorkingTime
     */
    public function setWorkinghoursto($workinghoursto)
    {
        $this->workinghoursto = $workinghoursto;
    
        return $this;
    }

    /**
     * Get workinghoursto
     *
     * @return \DateTime 
     */
    public function getWorkinghoursto()
    {
        return $this->workinghoursto;
    }
}