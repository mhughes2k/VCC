<?php

namespace phnx\VccBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ActivityController extends Controller
{
    /*
    public function indexAction($name)
    {
        return $this->render('phnxVccBundle:Default:index.html.twig', array('name' => $name));
    }
    */
    public function indexAction() {//$clubid) {
		echo "user list";
    	return $this->render(
    		'phnxVccBundle:Default:index.html.twig', 
    		array()
    	);
    }
}