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
	*ORM\ManyToOne(targetEntity="phnx\VccBundle\Entity\User",inversedBy="trainingplans")
	*/
    private $user;
}