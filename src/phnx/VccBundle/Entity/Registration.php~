<?php

namespace phnx\VccBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use phnx\VccBundle\Entity\User;
/**
 * phnx\VccBundle\Entity\Registration
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Registration
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var boolean $termsagreed
     *
     * @ORM\Column(name="termsagreed", type="boolean")
     */
    private $termsagreed;

    /**
     * @var datetime $timestamp
     *
     * @ORM\Column(name="timestamp", type="datetime")
     */
    private $timestamp;


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
     * Set termsagreed
     *
     * @param boolean $termsagreed
     */
    public function setTermsagreed($termsagreed)
    {
        $this->termsagreed = $termsagreed;
    }

    /**
     * Get termsagreed
     *
     * @return boolean 
     */
    public function getTermsagreed()
    {
        return $this->termsagreed;
    }

    /**
     * Set timestamp
     *
     * @param datetime $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }

    /**
     * Get timestamp
     *
     * @return datetime 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
    
    /** 
     * @Assert\Type(type="phnx\VccBundle\Entity\User")
     */
    protected $user;
    
    public function getUser()
    {
        return $this->user;
    }

    public function setUser(User $user = null)
    {
        $this->user = $user;
    }
}