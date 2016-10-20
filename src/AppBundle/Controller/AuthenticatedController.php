<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Authenticated controller.
 */
class AuthenticatedController extends Controller
{
	
	/**
	 * Show the user
	 * @Route("/manage/mon_profil", name="profile_show")
	 * 
	 * @Method("GET")
	 */
	public function showProfil()
	{
		$user = $this->getUser();
	
		return $this->render('authenticated/profil.html.twig', array(
				'user' => $user
		));
	}
	
	/**
	 * Edit the user
	 * @Route("manage/mon_profil_edit", name="profile_edit")
	 * 
	 * @Method("GET")
	 */
	public function editProfil(Request $request)
	{
		$user = $this->getUser();
	
		/** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
		$dispatcher = $this->get('event_dispatcher');
	
		$event = new GetResponseUserEvent($user, $request);
		$dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_INITIALIZE, $event);
	
		if (null !== $event->getResponse()) {
			return $event->getResponse();
		}
	
		/** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
		$formFactory = $this->get('fos_user.profile.form.factory');
	
		$form = $formFactory->createForm();
		$form->setData($user);
	
		$form->handleRequest($request);
	
		if ($form->isValid()) {
			/** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
			$userManager = $this->get('fos_user.user_manager');
	
			$event = new FormEvent($form, $request);
			$dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_SUCCESS, $event);
	
			$userManager->updateUser($user);
	
			if (null === $response = $event->getResponse()) {
				$url = $this->generateUrl('fos_user_profile_show');
				$response = new RedirectResponse($url);
			}
	
			$dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_COMPLETED, new FilterUserResponseEvent($user, $request, $response));
	
			return $response;
		}
	//TODO : CREATE A VIEW TO EDIT PROFILE
		return $this->render('authenticated/edit.html.twig', array(
				'form' => $form->createView(), 'user' => $user
		));
	}
  

	/**
	 * Lists all Circuit entities.
	 *
	 * @Route("/manage/circuit", name="collaborateurs_circuit_index")
	 * @Method("GET")
	 *
	 */
	public function showAllCircuits()
	{
		$em = $this->getDoctrine()->getManager();
		$user = $this->getUser();
	
		//you're a client who needs to see only circuits which have programmations or an authenticated user who wants to see the application from the client side
		$circuits = $em->getRepository('AppBundle:Circuit')->findAll();
		
		
		//showButtons -> boolean which is true : we want to see buttons that allows edition of the circuits
		return $this->render('circuit/index.html.twig', array(
				'circuits' => $circuits, 'user' => $user, 'showButtons'=> true
		));
	}
	
	
}
