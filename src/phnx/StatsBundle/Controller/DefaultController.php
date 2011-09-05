<?php

namespace phnx\StatsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/user/stats")
     * @Template()
     */
    public function indexAction()
    {
    	
		$em = $this->getDoctrine()->getEntityManager();
		$query = $em->createQuery(
			"select sum(e.Distance) FROM phnxTrainingPlannerBundle:Entry e" // WHERE e.TrainingPlan = :plan"			
		);

		try {
			$r = $query->getSingleResult();
			$totalDistance = $r[1];
		}
		catch (Exception $e) {
			$totalDistance = 'Not Available';
		}
//		echo "Total distance: ".$totalDistance;
        return array('totaldistance' => $totalDistance );
    }
}
