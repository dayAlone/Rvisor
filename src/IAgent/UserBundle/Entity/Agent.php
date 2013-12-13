<?php

namespace IAgent\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Agent
 *
 * @ORM\Table(name="agent")
 * @ORM\Entity
 */
class Agent implements UserInterface
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
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    protected $active;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=200, nullable=true)
     */
    protected $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=20, nullable=false)
     */
    protected $username;


    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=false)
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=64, nullable=false)
     */
    protected $password;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=200, nullable=false)
     */
    protected $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    protected $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false)
     */
    protected $lastUpdate;

    /**
     * @var \IAgent\UserBundle\Entity\Manager
     *
     * @ORM\ManyToOne(targetEntity="IAgent\UserBundle\Entity\Manager")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_user_fk", referencedColumnName="id")
     * })
     */
    protected $parentUserFk;

    /**
     * @var \IAgent\UserBundle\Entity\WorkingTime
     *
     * @ORM\ManyToOne(targetEntity="IAgent\UserBundle\Entity\WorkingTime")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="working_time_fk", referencedColumnName="id")
     * })
     */
    protected $workingTimeFk;

    /**
     * @var \IAgent\UserBundle\Entity\Device
     *
     * @ORM\ManyToOne(targetEntity="IAgent\UserBundle\Entity\Device")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="device_id", referencedColumnName="id")
     * })
     */
    protected $device;



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
        $this->username = $login;
    
        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return '';
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
     * @param \IAgent\UserBundle\Entity\Manager $parentUserFk
     * @return Agent
     */
    public function setParentUserFk(\IAgent\UserBundle\Entity\Manager $parentUserFk = null)
    {
        $this->parentUserFk = $parentUserFk;
    
        return $this;
    }

    /**
     * Get parentUserFk
     *
     * @return \IAgent\UserBundle\Entity\Manager 
     */
    public function getParentUserFk()
    {
        return $this->parentUserFk;
    }

    /**
     * Set workingTimeFk
     *
     * @param \IAgent\UserBundle\Entity\WorkingTime $workingTimeFk
     * @return Agent
     */
    public function setWorkingTimeFk(\IAgent\UserBundle\Entity\WorkingTime $workingTimeFk = null)
    {
        $this->workingTimeFk = $workingTimeFk;
    
        return $this;
    }

    /**
     * Get workingTimeFk
     *
     * @return \IAgent\UserBundle\Entity\WorkingTime 
     */
    public function getWorkingTimeFk()
    {
        return $this->workingTimeFk;
    }

    /**
     * Set device
     *
     * @param \IAgent\UserBundle\Entity\Device $device
     * @return Agent
     */
    public function setDevice(\IAgent\UserBundle\Entity\Device $device = null)
    {
        $this->device = $device;
    
        return $this;
    }

    /**
     * Get device
     *
     * @return \IAgent\UserBundle\Entity\Device 
     */
    public function getDevice()
    {
        return $this->device;
    }

    public function getRoles()
    {
        return array('ROLE_USER');
    }
    public function eraseCredentials() {}
    public function serialize()
    {
        return serialize($this->username);
    }

    public function unserialize($data)
    {
        $this->username = unserialize($data);
    }
}