<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;

/**
 * Admin controller.
 */
class AdminController extends Controller
{
	
	/**
	 * Show all existing accounts
	 * @Route("/admin/accounts", name="admin_accounts_show")
	 * 
	 * Or show one specific account
	 * @Route("/admin/account/{id}", name="admin_specific_account_show", requirements={
	 *              "id": "\d+"})
	 * 
	 * @Method("GET")
	 */
	public function showAction($id = null)
	{
		//TODO
		$user = $this->getUser();
	
		// If id, load the specific account
		if ($id) {
		}
		
		
		return $this->render('admin/accounts.html.twig', array(
				'user' => $user
		));
	}
	
	
	
	
	/** Create or edit an account
	 * create a new account
	 * @Route("/admin/account/new", name="admin_account_create")
	 * 
	 * or edit an existant account
	 * @Route("/admin/account/{id}/edit", name="admin_account_edit", requirements={
	 *              "id": "\d+"})
	 * 
	 * or edit a draft previously saved in the session
	 * @Route("/admin/account/edit_draft", name="admin_account_editdraft")
	 *
	 * @Method("GET")
	 */
	public function newAction($id = null, Request $request)
	{
		$user = $this->getUser();
		// TODO : CHECK THE USER IS THE ADMIN
		
		
		//TODO 
		// If called for edition, load the circuit from the DB
	/*	if ($id) {
		} */
		
		
		// If invoked through the draft editing route
	/*	if ($request->attributes->get('_route') == "blog_editdraft") {
			//TODO : to change
			$session = $this->get('session');
		$saveddraft = $session->get('saveddraft');
			$session->remove('saveddraft');
		} */
		
		return $this->render('admin/accounts.html.twig', array(
				'user' => $user
		));
	}
	
	

}
