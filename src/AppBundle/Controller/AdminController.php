<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

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
	
	/** 
	 * Delete a comment
	 * @Route("/admin/circuit/{id}/delete_comment/{comment_id}", name="admin_delete_comment", requirements={
	 *              "id": "\d+", "comment_id": "\d+"})
	 */
	public function deleteComment($id = null, $comment_id = null, Request $request)
	{
		
		if (!$id || !$comment_id) {
			// cause the 404 page not found to be displayed
			throw $this->createNotFoundException();
		}
		$user = $this->getUser();
		$circuit = $this->getDoctrine()->getRepository('AppBundle:Circuit')->find($id);
		if (!$circuit) {
			// cause the 404 page not found to be displayed
			throw $this->createNotFoundException();
		}
		$comment = $this->getDoctrine()
		->getRepository('AppBundle:Commentaire')
		->find($comment_id);
		if (!$comment) {
			// cause the 404 page not found to be displayed
			throw $this->createNotFoundException();
		}
		
		$commentform = $this->createFormBuilder($comment)
		->add('Supprimer', SubmitType::class, array('label' => 'Supprimer'))
		->getForm();
		$commentform->handleRequest($request);
		 
		if ($commentform->isSubmitted() && $commentform->isValid()){
			$entityManager = $this->getDoctrine()->getManager();
			$circuit->removeComment($comment);
			$entityManager->remove($comment);
			$entityManager->persist($circuit);
			 
			$entityManager->flush();
			 
			$this->addFlash('success', 'Commentaire supprimé avec succès');
			return $this->redirectToRoute('circuit_show', ['id' => $circuit->getId()]);
			 
		}
		$em = $this->getDoctrine()->getManager();
		$comments = $em->getRepository('AppBundle:Commentaire')->findComments($circuit->getId());
		return $this->render('circuit/new.html.twig', array('title'=>'Etes-vous sûr de vouloir supprimer ce commentaire ?',
				'circuit' => $circuit, 'form'=> $commentform->createView(), 'comments' => $comments, 'user' => $user, 'circuit_id'=>$circuit->getId()
		
		));
	}
	

}
