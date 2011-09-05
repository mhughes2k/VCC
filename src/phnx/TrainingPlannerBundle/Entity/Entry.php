<?php

namespace phnx\TrainingPlannerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * phnx\TrainingPlannerBundle\Entity\Entry
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Entry
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
     * @var date $date
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var decimal $sleep
     *
     * @ORM\Column(name="sleep", type="decimal", nullable="true")
     */
    private $sleep;

    /**
     * @var boolean $fatigue
     *
     * @ORM\Column(name="fatigue", type="boolean", nullable="true")
     */
    private $fatigue;

    /**
     * @var boolean $stress
     *
     * @ORM\Column(name="stress", type="boolean", nullable="true")
     */
    private $stress;

    /**
     * @var boolean $Soreness
     *
     * @ORM\Column(name="Soreness", type="boolean", nullable="true")
     */
    private $Soreness;

    /**
     * @var integer $RestingHeartRate
     *
     * @ORM\Column(name="RestingHeartRate", type="integer", nullable="true")
     */
    private $RestingHeartRate;

    /**
     * @var decimal $Weight
     *
     * @ORM\Column(name="Weight", type="decimal", nullable="true")
     */
    private $Weight;

    /**
     * @var text $PlannedWorkout
     *
     * @ORM\Column(name="PlannedWorkout", type="text", nullable="true")
     */
    private $PlannedWorkout;

    /**
     * @var text $Weather
     *
     * @ORM\Column(name="Weather", type="text", nullable="true")
     */
    private $Weather;

    /**
     * @var text $Route
     *
     * @ORM\Column(name="Route", type="text", nullable="true")
     */
    private $Route;

    /**
     * @var decimal $Distance
     *
     * @ORM\Column(name="Distance", type="decimal", nullable="true")
     */
    private $Distance;

    /**
     * @var decimal $Duration
     *
     * @ORM\Column(name="Duration", type="decimal", nullable="true")
     */
    private $Duration;

    /**
     * @var integer $AverageHeartRate
     *
     * @ORM\Column(name="AverageHeartRate", type="integer", nullable="true")
     */
    private $AverageHeartRate;

    /**
     * @var string $Zone1
     *
     * @ORM\Column(name="Zone1", type="string", length=255, nullable="true")
     */
    private $Zone1;

    /**
     * @var string $Zone2
     *
     * @ORM\Column(name="Zone2", type="string", length=255, nullable="true")
     */
    private $Zone2;

    /**
     * @var string $Zone3
     *
     * @ORM\Column(name="Zone3", type="string", length=255, nullable="true")
     */
    private $Zone3;

    /**
     * @var string $Zone4
     *
     * @ORM\Column(name="Zone4", type="string", length=255, nullable="true")
     */
    private $Zone4;

    /**
     * @var string $Zone5
     *
     * @ORM\Column(name="Zone5", type="string", length=255, nullable="true")
     */
    private $Zone5;

    /**
     * @var integer $WorkoutRating
     *
     * @ORM\Column(name="WorkoutRating", type="integer", nullable="true")
     */
    private $WorkoutRating;

    /**
     * @var text $Notes
     *
     * @ORM\Column(name="Notes", type="text", nullable="true")
     */
    private $Notes;

    /**
     * @var text $Nutrition
     *
     * @ORM\Column(name="Nutrition", type="text", nullable="true")
     */
    private $Nutrition;


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
     * @param date $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return date 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set sleep
     *
     * @param decimal $sleep
     */
    public function setSleep($sleep)
    {
        $this->sleep = $sleep;
    }

    /**
     * Get sleep
     *
     * @return decimal 
     */
    public function getSleep()
    {
        return $this->sleep;
    }

    /**
     * Set fatigue
     *
     * @param boolean $fatigue
     */
    public function setFatigue($fatigue)
    {
        $this->fatigue = $fatigue;
    }

    /**
     * Get fatigue
     *
     * @return boolean 
     */
    public function getFatigue()
    {
        return $this->fatigue;
    }

    /**
     * Set stress
     *
     * @param boolean $stress
     */
    public function setStress($stress)
    {
        $this->stress = $stress;
    }

    /**
     * Get stress
     *
     * @return boolean 
     */
    public function getStress()
    {
        return $this->stress;
    }

    /**
     * Set Soreness
     *
     * @param boolean $soreness
     */
    public function setSoreness($soreness)
    {
        $this->Soreness = $soreness;
    }

    /**
     * Get Soreness
     *
     * @return boolean 
     */
    public function getSoreness()
    {
        return $this->Soreness;
    }

    /**
     * Set RestingHeartRate
     *
     * @param integer $restingHeartRate
     */
    public function setRestingHeartRate($restingHeartRate)
    {
        $this->RestingHeartRate = $restingHeartRate;
    }

    /**
     * Get RestingHeartRate
     *
     * @return integer 
     */
    public function getRestingHeartRate()
    {
        return $this->RestingHeartRate;
    }

    /**
     * Set Weight
     *
     * @param decimal $weight
     */
    public function setWeight($weight)
    {
        $this->Weight = $weight;
    }

    /**
     * Get Weight
     *
     * @return decimal 
     */
    public function getWeight()
    {
        return $this->Weight;
    }

    /**
     * Set PlannedWorkout
     *
     * @param text $plannedWorkout
     */
    public function setPlannedWorkout($plannedWorkout)
    {
        $this->PlannedWorkout = $plannedWorkout;
    }

    /**
     * Get PlannedWorkout
     *
     * @return text 
     */
    public function getPlannedWorkout()
    {
        return $this->PlannedWorkout;
    }

    /**
     * Set Weather
     *
     * @param text $weather
     */
    public function setWeather($weather)
    {
        $this->Weather = $weather;
    }

    /**
     * Get Weather
     *
     * @return text 
     */
    public function getWeather()
    {
        return $this->Weather;
    }

    /**
     * Set Route
     *
     * @param text $route
     */
    public function setRoute($route)
    {
        $this->Route = $route;
    }

    /**
     * Get Route
     *
     * @return text 
     */
    public function getRoute()
    {
        return $this->Route;
    }

    /**
     * Set Distance
     *
     * @param decimal $distance
     */
    public function setDistance($distance)
    {
        $this->Distance = $distance;
    }

    /**
     * Get Distance
     *
     * @return decimal 
     */
    public function getDistance()
    {
        return $this->Distance;
    }

    /**
     * Set Duration
     *
     * @param decimal $duration
     */
    public function setDuration($duration)
    {
        $this->Duration = $duration;
    }

    /**
     * Get Duration
     *
     * @return decimal 
     */
    public function getDuration()
    {
        return $this->Duration;
    }

    /**
     * Set AverageHeartRate
     *
     * @param integer $averageHeartRate
     */
    public function setAverageHeartRate($averageHeartRate)
    {
        $this->AverageHeartRate = $averageHeartRate;
    }

    /**
     * Get AverageHeartRate
     *
     * @return integer 
     */
    public function getAverageHeartRate()
    {
        return $this->AverageHeartRate;
    }

    /**
     * Set Zone1
     *
     * @param string $zone1
     */
    public function setZone1($zone1)
    {
        $this->Zone1 = $zone1;
    }

    /**
     * Get Zone1
     *
     * @return string 
     */
    public function getZone1()
    {
        return $this->Zone1;
    }

    /**
     * Set Zone2
     *
     * @param string $zone2
     */
    public function setZone2($zone2)
    {
        $this->Zone2 = $zone2;
    }

    /**
     * Get Zone2
     *
     * @return string 
     */
    public function getZone2()
    {
        return $this->Zone2;
    }

    /**
     * Set Zone3
     *
     * @param string $zone3
     */
    public function setZone3($zone3)
    {
        $this->Zone3 = $zone3;
    }

    /**
     * Get Zone3
     *
     * @return string 
     */
    public function getZone3()
    {
        return $this->Zone3;
    }

    /**
     * Set Zone4
     *
     * @param string $zone4
     */
    public function setZone4($zone4)
    {
        $this->Zone4 = $zone4;
    }

    /**
     * Get Zone4
     *
     * @return string 
     */
    public function getZone4()
    {
        return $this->Zone4;
    }

    /**
     * Set Zone5
     *
     * @param string $zone5
     */
    public function setZone5($zone5)
    {
        $this->Zone5 = $zone5;
    }

    /**
     * Get Zone5
     *
     * @return string 
     */
    public function getZone5()
    {
        return $this->Zone5;
    }

    /**
     * Set WorkoutRating
     *
     * @param integer $workoutRating
     */
    public function setWorkoutRating($workoutRating)
    {
        $this->WorkoutRating = $workoutRating;
    }

    /**
     * Get WorkoutRating
     *
     * @return integer 
     */
    public function getWorkoutRating()
    {
        return $this->WorkoutRating;
    }

    /**
     * Set Notes
     *
     * @param text $notes
     */
    public function setNotes($notes)
    {
        $this->Notes = $notes;
    }

    /**
     * Get Notes
     *
     * @return text 
     */
    public function getNotes()
    {
        return $this->Notes;
    }

    /**
     * Set Nutrition
     *
     * @param text $nutrition
     */
    public function setNutrition($nutrition)
    {
        $this->Nutrition = $nutrition;
    }

    /**
     * Get Nutrition
     *
     * @return text 
     */
    public function getNutrition()
    {
        return $this->Nutrition;
    }
    
    /**
     *@ORM\ManyToOne(targetEntity="phnx\TrainingPlannerBundle\Entity\TrainingPlan",inversedBy="Entries")
     */
    protected $TrainingPlan;



    /**
     * Set TrainingPlan
     *
     * @param phnx\TrainingPlannerBundle\Entity\TrainingPlan $trainingPlan
     */
    public function setTrainingPlan(\phnx\TrainingPlannerBundle\Entity\TrainingPlan $trainingPlan)
    {
        $this->TrainingPlan = $trainingPlan;
    }

    /**
     * Get TrainingPlan
     *
     * @return phnx\TrainingPlannerBundle\Entity\TrainingPlan 
     */
    public function getTrainingPlan()
    {
        return $this->TrainingPlan;
    }
}