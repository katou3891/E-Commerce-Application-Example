<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use FOS\UserBundle\Doctrine\UserManager;
use AppBundle\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Doctrine\DBAL\Types\BooleanType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

/**
 * Admin controller.
 */
class AdminController extends Controller
{
	
	/**
	 * Show all existing accounts
	 * @Route("/admin/accounts", name="admin_accounts_index")
	 *
	 * Or show one specific account
	 * @Route("/admin/account/{id}", name="admin_accounts_show", requirements={
	 *              "id": "\d+"})
	 *
	 *
	 */
	public function showAccounts($id = null)
	{
		$user = $this->getUser();
		$em = $this->getDoctrine()->getManager();
		// If id, load the specific account
		if ($id) {
			$account = $em->getRepository('AppBundle:User')->find($id);
			return $this->render('account/account.html.twig', array(
					'user' => $user, 'account' => $account
			));
		}
		else {
			$accounts = $em->getRepository('AppBundle:User')->findAll();
			return $this->render('account/index.html.twig', array(
					'user' => $user, 'accounts' => $accounts
			));
		}
		
	}
	
	
	
	
	/** Create or edit an account
	 * create a new account
	 * @Route("/admin/account/new", name="admin_account_new")
	 *
	 * or edit an existant account
	 * @Route("/admin/account/{id}/edit", name="admin_account_edit", requirements={
	 *              "id": "\d+"})
	 *
	 *
	 * or remove an account
	 * @Route("/admin/account/{id}/remove", name="admin_account_remove", requirements={
	 *              "id": "\d+"})
	 *
	 * 
	 */
	public function editAccounts($id = null, Request $request)
	{
		$user=$this->getUser();
		// If called for edition, load the circuit from the DB
		if ($id) {
			$account = $this->getDoctrine()
			->getRepository('AppBundle:User')
			->find($id);
	
				
	
			if (!$account) {
				// cause the 404 page not found to be displayed
				throw $this->createNotFoundException();
			}
	
		}
		else {
	
			$account = new User();
			
				

		}
		$passwordEncoder = $this->container->get('security.password_encoder');
		if (!$id){
			$title = "Créer un compte";
		} else {
			$title = "Editer le compte n°".$id;
		}
		
		// Construct the form
		$formBuilder = $this->createFormBuilder($account);
		if ($request->attributes->get('_route') == "admin_account_remove"){
			/* Can have the possibility to put a textarea to explain a short comment on the reason of the deletion :
			 $formBuilder->add('Commentaires', TextareaType::class); */
			$formBuilder->add('Supprimer', SubmitType::class, array('label' => 'Supprimer'));
			$title = "Etes-vous sûr de vouloir supprimer le compte n°".$id . " ?";
		} else { // otherwise, we want to change or add an etape
			
			$formBuilder->add('username', TextType::class)
			->add('email', EmailType::class)
			->add('password', PasswordType::class)
			->add('nom', TextType::class)
			->add('prenom', TextType::class)
			->add('adresse', TextType::class)
			->add('save', SubmitType::class, array('label' => 'Envoyer'));
			
		}
		
			
		
	
		$form = $formBuilder->getForm();
	
		$form->handleRequest($request);
	
		if ($form->isSubmitted() && $form->isValid()) {
	
			$encodedPassword = $passwordEncoder->encodePassword($account,$account->getPassword());
			$account->setPassword($encodedPassword);
		
			
				// Persist for good in the DB
				$entityManager = $this->getDoctrine()->getManager();
				$account->setEnabled(true);
				$entityManager->persist($account);
				if ($request->attributes->get('_route') == "admin_account_remove"){
					$entityManager->remove($account);
				} else {
					$entityManager->persist($account);
				}
				$entityManager->flush();
				switch ($request->attributes->get('_route')){
					case "admin_account_new" :
						$message = 'Compte '. $account->getId() .' ajouté avec succès';
						break;
					case "admin_account_remove" :
						$message = 'Compte '. $account->getId() .' supprimé avec succès';
						break;
					case "admin_account_edit" :
						$message = "Compte". $account->getId() .' modifié avec succès';
					default:
						$message = 'Compte '. $account->getId() .' enregistré avec succès dans les brouillons';
						break;
				};
				$this->addFlash('success', $message);
	
				// either way, display the circuit
				return $this->redirectToRoute('admin_accounts_show', ['id' => $account->getId()]);
			
		}
		return $this->render('account/new.html.twig', [
				'form' => $form->createView(), 'user' => $user, 'title'=>$title, 'account'=>$account
		]);
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
		
		// As a comment was deleted, the note of the circuit has change and must be update
		$id=$circuit->getId();
		$em = $this->getDoctrine()->getManager();
		$note = $em->getRepository('AppBundle:Circuit')->getAverage($id);
		$circuit->setNote(round($note[0]['note'],1));
		$em->persist($circuit);
		$em->flush();
		
		// We go loooking for the comments in order to display them
		$comments = $em->getRepository('AppBundle:Commentaire')->findComments($circuit->getId());
		return $this->render('circuit/new.html.twig', array('title'=>'Etes-vous sûr de vouloir supprimer ce commentaire ?',
				'circuit' => $circuit, 'form'=> $commentform->createView(), 'comments' => $comments, 'user' => $user, 'circuit_id'=>$circuit->getId()
	
		));
	}
	
	
	

}
