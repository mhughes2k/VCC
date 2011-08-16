<?php

namespace phnx\VccBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class DefaultController extends Controller
{
    /*
    public function indexAction($name)
    {
        return $this->render('phnxVccBundle:Default:index.html.twig', array('name' => $name));
    }
    */
    public function indexAction() {
    /*
    	if (false === $this->get('security.context')->isGranted('ROLE_USER')) {
    		throw new AccessDeniedException();
    	}*/
		if (false === $this->get('security.context')->isGranted('ROLE_USER')) {
			return $this->render(
				'phnxVccBundle:Default:index.html.twig', 
				array()
			);
    	}
		return $this->render(
				'phnxVccBundle:Default:index_loggedin.html.twig', 
				array()
		);
    }
}
