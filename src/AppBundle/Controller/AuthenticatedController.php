<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Circuit;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
/**
 * Authenticated controller.
 */
class AuthenticatedController extends Controller
{
	
	/**
	 * Show the user
	 * @Route("/mon_profil", name="profile_show")
	 * 
	 * @Method("GET")
	 */
	public function showAction()
	{
		$user = $this->getUser();
		/*
		if (!is_object($user) || !$user instanceof UserInterface) {
			throw new AccessDeniedException('This user does not have access to this section.');
		}
	*/
		return $this->render('authenticated/profil.html.twig', array(
				'user' => $user
		));
	}
	
	/**
	 * Edit the user
	 * @Route("/mon_profil_edit", name="profile_edit")
	 * 
	 * @Method("GET")
	 */
	public function editAction(Request $request)
	{
		$user = $this->getUser();
		if (!is_object($user) || !$user instanceof UserInterface) {
			throw new AccessDeniedException('This user does not have access to this section.');
		}
	
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
	
		return $this->render('FOSUserBundle:Profile:edit.html.twig', array(
				'form' => $form->createView()
		));
	}
  

}
