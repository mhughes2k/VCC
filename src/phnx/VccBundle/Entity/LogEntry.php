<?php

namespace phnx\VccBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * phnx\VccBundle\Entity\LogEntry
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class LogEntry
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
     * @var string $action
     *
     * @ORM\Column(name="action", type="string", length=255)
     */
    private $action;

    /**
     * @var text $details
     *
     * @ORM\Column(name="details", type="text")
     */
    private $details;

    /**
     * @var datetime $timestamp
     *
     * @ORM\Column(name="timestamp", type="datetime")
     */
    private $timestamp;

    /**
     * Assocates a log with a club.
     *
     * @ORM\ManyToOne(targetEntity="Club", inversedBy="logs")
     */
    private $club;
    
    /**
     * Associates a log with a user
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="logs")
     */
    private $user;    

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
     * Set action
     *
     * @param string $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * Get action
     *
     * @return string 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set details
     *
     * @param text $details
     */
    public function setDetails($details)
    {
        $this->details = $details;
    }

    /**
     * Get details
     *
     * @return text 
     */
    public function getDetails()
    {
        return $this->details;
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
     * Set club
     *
     * @param phnx\VccBundle\Entity\Club $club
     */
    public function setClub(\phnx\VccBundle\Entity\Club $club)
    {
        $this->club = $club;
    }

    /**
     * Get club
     *
     * @return phnx\VccBundle\Entity\Club 
     */
    public function getClub()
    {
        return $this->club;
    }

    /**
     * Set user
     *
     * @param phnx\VccBundle\Entity\User $user
     */
    public function setUser(\phnx\VccBundle\Entity\User $user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return phnx\VccBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}