<?php

namespace phnx\VccBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * phnx\VccBundle\Entity\Run
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Run
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
     * @var datetime $date
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var decimal $duration
     *
     * @ORM\Column(name="duration", type="decimal")
     */
    private $duration;

    /**
     * @var decimal $distance
     *
     * @ORM\Column(name="distance", type="decimal")
     */
    private $distance;

    /**
     * @var string $start
     *
     * @ORM\Column(name="start", type="string", length=255)
     */
    private $start;

    /**
     * @var string $end
     *
     * @ORM\Column(name="end", type="string", length=255)
     */
    private $end;


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
     * Set date
     *
     * @param datetime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return datetime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set duration
     *
     * @param decimal $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * Get duration
     *
     * @return decimal 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set distance
     *
     * @param decimal $distance
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
    }

    /**
     * Get distance
     *
     * @return decimal 
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Set start
     *
     * @param string $start
     */
    public function setStart($start)
    {
        $this->start = $start;
    }

    /**
     * Get start
     *
     * @return string 
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set end
     *
     * @param string $end
     */
    public function setEnd($end)
    {
        $this->end = $end;
    }

    /**
     * Get end
     *
     * @return string 
     */
    public function getEnd()
    {
        return $this->end;
    }
}