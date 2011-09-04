<?php

namespace phnx\TrainingPlannerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\SecurityContext;
use phnx\TrainingPlannerBundle\Form\TrainingPlanType;
use phnx\TrainingPlannerBundle\Form\EntryType;

use phnx\TrainingPlannerBundle\Entity\TrainingPlan;
use phnx\TrainingPlannerBundle\Entity\Entry;
use Symfony\Component\HttpFoundation\Request;


class TrainingPlanController extends Controller
{
    /**
     * @Route("/user/training")
     * @Template()
     */
    public function indexAction()
    {
    	$plans = array();
    	
		$user = $this->get('security.context')->getToken()->getUser();
		//print_r($user);
    	if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) { 
			$plans = $user->getTrainingPlans();			
		}
		$newPlan = new TrainingPlan();
		$newPlan->setUser($user);
//		print_r($newPlan);
		$form = $this->createForm(new TrainingPlanType(), $newPlan);
    	return $this->render(
    		'phnxTrainingPlannerBundle:TrainingPlan:index.html.twig',
    		array(
    			'form' => $form->createView(),
    			'plans'=>$plans
    		)
    	);
    }
    
	/**
     * @Route("/user/training/{planid}")
     * @Template()
     */
    public function viewAction($planid)
    {
		$plan = $this->getDoctrine()
        ->getRepository('phnxTrainingPlannerBundle:TrainingPlan')
        ->find($planid);

	    if (!$plan) {
    	    throw $this->createNotFoundException('No product found for id '.$planid);
	    }
	
		$entries = $plan->getEntries();
		if (count($entries)==0) {
			$entries = false;
		}
		//add entry form
		$entryform = $this->createForm(new EntryType(), new Entry());
	
        return $this->render(
        	'phnxTrainingPlannerBundle:TrainingPlan:view.html.twig',
        	array(
        		'plan'=>$plan,
        		'newentryform'=>$entryform->createView(),
        		'entries'=> $entries
        	)
        );
    }
    /**
     * Handles the creation of a new training plan for a user.
     */
    public function createAction(Request $request) {
    echo 'adding';
    	$newPlan = new TrainingPlan();
		$form = $this->createForm(new TrainingPlanType(), $newPlan);
		$user =$this->get('security.context')->getToken()->getUser();
    	if ($request->getMethod() == "POST") {
    		$form->bindRequest($request);
    		if ($form->isValid()) {
    			$em = $this->getDoctrine()->getEntityManager();
    			$newPlan->setUser($user);
    			$em->persist($newPlan);
    			$em->flush();
    			echo 'new training plan created';
    			$this->redirect('training_home');
    		}
    		else {
    			echo 'form was not valid';
    		}
    	}
    	else {
    		echo 'new planning not created';
    	}
    	return $this->render(
    		'phnxTrainingPlannerBundle:TrainingPlan:index.html.twig',
    		array(
    			'form'=>$form->createView(),
    			'plans'=>$this->get('security.context')->getToken()->getUser()->getTrainingPlans()	
    		)
    	);
    }
	public function createEntryAction(Request $request,$planid) {
		$plan = $this->getDoctrine()
        ->getRepository('phnxTrainingPlannerBundle:TrainingPlan')
        ->find($planid);
		if (!$plan) {
			throw $this->createNotFoundException('No product found for id '.$planid);
		}
		$entry = new Entry();
		$form = $this->createForm(new EntryType(), $entry);
    	if ($request->getMethod() == "POST") {
    		$form->bindRequest($request);
    		if ($form->isValid()) {
    			$em = $this->getDoctrine()->getEntityManager();
    			$entry->setTrainingPlan($plan);
    			$em->persist($entry);
    			$em->flush();
    			return $this->redirect($this->generateUrl('training_view',array('planid'=>$planid)));
    		}
    		else {
    			echo 'form was not valid';
    		return array();
    		}
    	}
    	else {
    		echo 'new planning not created';
    		return array();
    	}
    	return true;//array('name'=>'a');
	}
}
