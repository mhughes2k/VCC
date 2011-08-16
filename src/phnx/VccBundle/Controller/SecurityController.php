<?php

namespace phnx\VccBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{
	public function loginAction() {
		$request = $this->getRequest();
		
		$session = $request->getSession();
		//var_dump($request);
		if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
			$error = $request->attributes(get(SecurityContext::AUTHENTICATION_ERROR));
			
		}
		else {
			$error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
		}
		
		//$error= null;
		
		return $this->render(
			'phnxVccBundle:Security:login.html.twig',
			array(
				'error'=>$error,
				'last_username'=>'',
			)
		);
	}
}