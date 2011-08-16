<?php

namespace phnx\VccBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class RunController extends Controller
{
    /*
    public function indexAction($name)
    {
        return $this->render('phnxVccBundle:Default:index.html.twig', array('name' => $name));
    }
    */
    public function indexAction() {//$clubid) {
    	echo 'Runs List';
    	return $this->render(
    		'phnxVccBundle:Default:index.html.twig', 
    		array()
    	);
    }
}