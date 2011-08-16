<?php

namespace phnx\VccBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;


class ClubController extends Controller
{
	function multiClubsEnabled() {
		return true;		
	}
	function RespondSingleClubOnly() {
		return $this->render(
    		'phnxVccBundle::nomulticlub.html.twig', 
		array()
		);
	}
    public function indexAction() {//$clubid) {
    /*
		if (false === $this->get('security.context')->isGranted('ROLE_USER')) {
    		Redirect()
    	}*/
		if (!$this->multiClubsEnabled()) {return $this->RespondSingleClubOnly();}
		
		$clubs = $this->getDoctrine()->getRepository('phnxVccBundle:Club')->findAll();
		
		//var_dump($clubs);
		
    	return $this->render(
    		'phnxVccBundle:Club:index.html.twig', 
    		array('clubs'=>$clubs)
    	);
    }
    public function addAction() {
		if (!$this->multiClubsEnabled()) {
			return $this->RespondSingleClubOnly();
		}
        echo "Add Action";
    	return $this->render(
    		'phnxVccBundle:Default:index.html.twig', 
    		array()
    	);
    }
    public function deleteAction() {
	   	echo $a;
    	return $this->render(
    		'phnxVccBundle:Default:index.html.twig', 
    		array()
    	);
    }
    public function editAction($clubid) {
		echo "Edit $clubid";
    	return $this->render(
    		'phnxVccBundle:Default:index.html.twig', 
    		array()
    	);
    }
    public function viewAction($clubid) {
    	if (!$this->multiClubsEnabled()) {
			return $this->RespondSingleClubOnly();
		}
		$d = $this->getDoctrine();
		$d_c = $d->getRepository('phnxVccBundle:Club');
		$club = $d_c->find($clubid);
		$members = $club->getMembers();

        return $this->render(
    		'phnxVccBundle:Club:viewclub.html.twig', 
    		array(
    			'club'=>$club,
    			'members'=>$members,
    		)
    	);
    }
}
