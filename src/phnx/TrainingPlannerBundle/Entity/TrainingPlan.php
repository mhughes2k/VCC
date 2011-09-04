<?php

namespace phnx\TrainingPlannerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * phnx\TrainingPlannerBundle\Entity\TrainingPlan
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TrainingPlan
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
     * @var date $startdate
     *
     * @ORM\Column(name="startdate", type="date")
     */
    private $startdate;


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
     * Set startdate
     *
     * @param date $startdate
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;
    }

    /**
     * Get startdate
     *
     * @return date 
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

	/**
	*@ORM\ManyToOne(targetEntity="phnx\VccBundle\Entity\User",inversedBy="trainingplans")
	*
	*/
    protected $user;

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
    
    /**
     *@ORM\OneToMany(targetEntity="phnx\TrainingPlannerBundle\Entity\Entry",mappedBy="TrainingPlan")
     */
    protected $Entries;
    public function __construct()
    {
        $this->Entries = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add Entries
     *
     * @param phnx\TrainingPlannerBundle\Entity\Entry $entries
     */
    public function addEntries(\phnx\TrainingPlannerBundle\Entity\Entry $entries)
    {
        $this->Entries[] = $entries;
    }

    /**
     * Get Entries
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getEntries()
    {
        return $this->Entries;
    }
}