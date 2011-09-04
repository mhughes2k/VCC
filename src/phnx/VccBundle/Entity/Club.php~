<?php

namespace phnx\VccBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * phnx\VccBundle\Entity\Club
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Club
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
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @ORM\ManyToMany(targetEntity="User",mappedBy="clubs")
     */
    protected $members;
    
    /**
     * We can have a userlog assocated with a club
     *
     * @ORM\OneToMany(targetEntity="LogEntry",mappedBy="club")
     */
    private $logs;

	/**
     * @ORM\OneToMany(targetEntity="ClubOfficer",mappedBy="club")
     */
    private $officers;


    
    public function __construct() {
    	$this->members = new ArrayCollection();
    	$this->officers = new ArrayCollection();
    }
    /*
    public function findOneByIdJoinedToMembers($id) {
    	$q = $this->getEntityManager()->createQuery(
    		'SELECT c, u FROM phnxVccBundle:Club c 
    		JOIN c.members u 
    		WHERE c.id=:id'
    	)->setParameter('id',$id);
    	try {
    		return $query->getSingleResult();
    	}
    	catch(\Doctrine\ORM\NoResultException $e) {
    		return null;
    	}
    }*/

    /**
     * Add members
     *
     * @param phnx\VccBundle\Entity\User $members
     */
    public function addMembers(\phnx\VccBundle\Entity\User $members)
    {
        $this->members[] = $members;
    }

    /**
     * Get members
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * Add logs
     *
     * @param phnx\VccBundle\Entity\Log $logs
     */
    public function addLogs(\phnx\VccBundle\Entity\Log $logs)
    {
        $this->logs[] = $logs;
    }

    /**
     * Get logs
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getLogs()
    {
        return $this->logs;
    }

    /**
     * Add officers
     *
     * @param phnx\VccBundle\Entity\ClubOfficer $officers
     */
    public function addOfficers(\phnx\VccBundle\Entity\ClubOfficer $officers)
    {
        $this->officers[] = $officers;
    }

    /**
     * Get officers
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getOfficers()
    {
        return $this->officers;
    }
}