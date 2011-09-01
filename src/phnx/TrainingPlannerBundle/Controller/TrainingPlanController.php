<?php

namespace phnx\TrainingPlannerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class TrainingPlanController extends Controller
{
    /**
     * @Route("/user/training")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
    
	/**
     * @Route("/user/training/{planid}")
     * @Template()
     */
    public function viewAction($planid)
    {
        return array();
    }
}
