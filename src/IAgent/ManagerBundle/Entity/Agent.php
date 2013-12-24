<?php

namespace IAgent\NewOrderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agent
 *
 * @ORM\Table(name="agent")
 * @ORM\Entity
 */
class Agent
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
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=200, nullable=true)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=20, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=64, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=200, nullable=false)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false)
     */
    private $lastUpdate;

    /**
     * @var \IAgent\NewOrderBundle\Entity\Manager
     *
     * @ORM\ManyToOne(targetEntity="IAgent\NewOrderBundle\Entity\Manager")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_user_fk", referencedColumnName="id")
     * })
     */
    private $parentUserFk;

    /**
     * @var \IAgent\NewOrderBundle\Entity\WorkingTime
     *
     * @ORM\ManyToOne(targetEntity="IAgent\NewOrderBundle\Entity\WorkingTime")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="working_time_fk", referencedColumnName="id")
     * })
     */
    private $workingTimeFk;

    /**
     * @var \IAgent\NewOrderBundle\Entity\Device
     *
     * @ORM\ManyToOne(targetEntity="IAgent\NewOrderBundle\Entity\Device")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="device_id", referencedColumnName="id")
     * })
     */
    private $device;



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
     * Set active
     *
     * @param boolean $active
     * @return Agent
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Agent
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    
        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Agent
     */
    public function setLogin($login)
    {
        $this->login = $login;
    
        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Agent
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
     * Set password
     *
     * @param string $password
     * @return Agent
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Agent
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    
        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Agent
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     * @return Agent
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
     * Set parentUserFk
     *
     * @param \IAgent\NewOrderBundle\Entity\Manager $parentUserFk
     * @return Agent
     */
    public function setParentUserFk(\IAgent\NewOrderBundle\Entity\Manager $parentUserFk = null)
    {
        $this->parentUserFk = $parentUserFk;
    
        return $this;
    }

    /**
     * Get parentUserFk
     *
     * @return \IAgent\NewOrderBundle\Entity\Manager
     */
    public function getParentUserFk()
    {
        return $this->parentUserFk;
    }

    /**
     * Set workingTimeFk
     *
     * @param \IAgent\NewOrderBundle\Entity\WorkingTime $workingTimeFk
     * @return Agent
     */
    public function setWorkingTimeFk(\IAgent\NewOrderBundle\Entity\WorkingTime $workingTimeFk = null)
    {
        $this->workingTimeFk = $workingTimeFk;
    
        return $this;
    }

    /**
     * Get workingTimeFk
     *
     * @return \IAgent\NewOrderBundle\Entity\WorkingTime
     */
    public function getWorkingTimeFk()
    {
        return $this->workingTimeFk;
    }

    /**
     * Set device
     *
     * @param \IAgent\NewOrderBundle\Entity\Device $device
     * @return Agent
     */
    public function setDevice(\IAgent\NewOrderBundle\Entity\Device $device = null)
    {
        $this->device = $device;
    
        return $this;
    }

    /**
     * Get device
     *
     * @return \IAgent\NewOrderBundle\Entity\Device
     */
    public function getDevice()
    {
        return $this->device;
    }
}