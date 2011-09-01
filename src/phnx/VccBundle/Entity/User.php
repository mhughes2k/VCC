<?php

namespace phnx\VccBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * phnx\VccBundle\Entity\User
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User implements UserInterface
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
     * @var string $firstname
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string $lastname
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var string $nickname
     *
     * @ORM\Column(name="nickname", type="string", length=255)
     */
    private $nickname;

    /**
     * @var string $emailaddress
     *
     * @ORM\Column(name="emailaddress", type="string", length=255,unique="true")
     */
    private $emailaddress;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var datetime $registered
     *
     * @ORM\Column(name="registered", type="datetime")
     */
    private $registered;


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
     * Set firstname
     *
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set nickname
     *
     * @param string $nickname
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    }
	public function getDisplayname() {
		$name = $this->nickname;	
		if ($name == "") {
			$name = "{$this->firstname} {$this->lastname}";
	
		}
		if ($name == "") {
			$name = $this->emailaddress;			
		}
		if ($name == "") {
			$name = "User $this->id";
		}
		return $name;
	}
    /**
     * Get nickname
     *
     * @return string 
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set emailaddress
     *
     * @param string $emailaddress
     */
    public function setEmailaddress($emailaddress)
    {
        $this->emailaddress = $emailaddress;
    }

    /**
     * Get emailaddress
     *
     * @return string 
     */
    public function getEmailaddress()
    {
        return $this->emailaddress;
    }
    

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
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
     * Set registered
     *
     * @param datetime $registered
     */
    public function setRegistered($registered)
    {
        $this->registered = $registered;
    }

    /**
     * Get registered
     *
     * @return datetime 
     */
    public function getRegistered()
    {
        return $this->registered;
    }
    
    /**
     * @ORM\ManyToMany(targetEntity="Club", inversedBy="members")
     */
    private $clubs;
    
	/**
    * @ORM\OneToMany(targetEntity="phnx\TrainingPlannerBundle\Entity\TrainingPlan", mappedBy="user")
    */
    private $trainingplans;
    
    public function __construct() {
    	$this->clubs = new ArrayCollection();
    }

    /**
     * Add clubs
     *
     * @param phnx\VccBundle\Entity\Club $clubs
     */
    public function addClubs(\phnx\VccBundle\Entity\Club $clubs)
    {
        $this->clubs[] = $clubs;
    }

    /**
     * Get clubs
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getClubs()
    {
        return $this->clubs;
    }
    
    /**
     * @ORM\OneToMany(targetEntity="LogEntry",mappedBy="user")
     */
    private $log;

    /**
     * Add log
     *
     * @param phnx\VccBundle\Entity\UserLog $log
     */
    public function addLog(\phnx\VccBundle\Entity\UserLog $log)
    {
        $this->log[] = $log;
    }

    /**
     * Get log
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getLog()
    {
        return $this->log;
    }
    /**
      * UserInterface interface
      */
    public function getUsername() {
    	//$this->get('logger')->err('getting username from user entity');
		return $this->emailaddress;
	}
	public function equals(UserInterface $user) {
		return true;
	}
	public function eraseCredentials() {
	
	}
	public function getRoles() {
		return array('ROLE_USER','ROLE_CLUB_ADMIN');
	}
	public function getSalt() {
		return "";
	}
}