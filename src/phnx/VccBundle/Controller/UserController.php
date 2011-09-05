<?php

namespace phnx\VccBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use phnx\VccBundle\Form\RegistrationType;
use phnx\VccBundle\Entity\Registration;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{

	public function logoutAction() {
		return $this->render(
    		'phnxVccBundle:Default:index.html.twig', 
    		array()
    	);
	}
    public function viewAction() {//$clubid) {
    	return $this->render(
    		'phnxVccBundle:User:view.html.twig', 
    		array()
    	);
    }
    public function registerAction() {
    
    	$form = $this->createForm(new RegistrationType(), new Registration());
    	return $this->render(
    		'phnxVccBundle:User:register.html.twig',
    		array(
    			'form'=> $form->createView()
    		)
    		
    	);
    }
	public function createAction(Request $request) {
		$reg = new Registration();
		$form = $this->createForm(new RegistrationType(), $reg);
		
		if ($request->getMethod() == "POST") {
			$form->bindRequest($request);
			if ($form->isValid()) {
				$user = $reg->getUser();
				$user->setRegistered(date_create());
				$password = $user->getPassword();
				$user->setPassword(md5($password));
				//var_dump($user);
				$reg->setTimestamp(date_create());
				$em = $this->getDoctrine()->getEntityManager();
				$em->persist($user);
				$em->persist($reg);
				$em->flush();
				echo 'form is valid';
			}
		}	
		return $this->render(
    		'phnxVccBundle:Default:index.html.twig', 
    		array()
    	);
    }
}