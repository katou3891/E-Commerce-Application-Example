<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Circuit;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\Commentaire;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use AppBundle\Entity\Etape;
use AppBundle\Entity\ProgrammationCircuit;
use Symfony\Component\Form\Extension\Core\Type\DateType;


/**
 * Circuit controller.
 */
class CircuitController extends Controller
{
  

    /**
     * Finds and displays a Circuit entity.
     *
     * @Route("/circuit/{id}", name="circuit_show", requirements={
	 *              "id": "\d+"
	 *     })
     * 
     */
    public function showAction(Circuit $circuit, Request $request)
    {
    	if (!$circuit) {
    		// cause the 404 page not found to be displayed
    		throw $this->createNotFoundException();
    	}
    	$user = $this->getUser();
    	$newcomment = new Commentaire();
    	$newcomment-> setCircuit($circuit);
    	
    	$commentform = $this->createFormBuilder($newcomment)
    	->add('authorEmail', EmailType::class)
    	->add('note',IntegerType::class)
    	->add('content', TextareaType::class)
    	->add('save', SubmitType::class, array('label' => 'Commenter'))
    	->getForm();
    	$commentform->handleRequest($request);
    	
    	if ($commentform->isSubmitted() && $commentform->isValid()){
    		$entityManager = $this->getDoctrine()->getManager();   
    		$circuit->addComment($newcomment);
    		$entityManager->persist($newcomment);
    		$entityManager->persist($circuit);
    	
    		$entityManager->flush();
    	
    		$this->addFlash('success', 'Commentaire créé avec succès');
    		return $this->redirectToRoute('circuit_show', ['id' => $circuit->getId()]);
    	
    	}
    	$em = $this->getDoctrine()->getManager();
    	$comments = $em->getRepository('AppBundle:Commentaire')->findComments($circuit->getId());
    	return $this->render('circuit/show.html.twig', array(
            'circuit' => $circuit, 'commentform'=> $commentform->createView(), 'comments' => $comments, 'user' => $user
        		
        ));
    }
  
    /**
     * @Route("/circuit/{id}/comments/{comment_id}", name="circuit_show_comment")
     * @ParamConverter("comment", options={"id" = "comment_id"})
     */
    public function showCommentAction(Circuit $circuit, Commentaire $comment)
    {
    	$user = $this->getUser();
    	 return $this->render('circuit/show_comment.html.twig', array('comment' => $comment, 'circuit' => $circuit, 'user' => $user));
    
    }
    
    
 
    
    /**
     * Creates a new Circuit, or modify an existing one.
     *
     * Create a new circuit
     * @Route("/manage/circuit/new", name="circuit_new")
     *
     * Or edit contents of an existing circuit
     * @Route("/manage/circuit/{id}/edit", name="circuit_edit")
     *
     * Or edit a draft previously saved in the session
     * @Route("/manage/circuit/editdraft", name="circuit_editdraft")
     * 
     * Or remove a circuit
     * @Route("/manage/circuit/{id}/remove", name="circuit_remove")
     */
    public function editCircuit($id = null, Request $request)
    {
    	$user=$this->getUser();
    	// If called for edition, load the circuit from the DB
    	if ($id) {
    		$circuit = $this->getDoctrine()
    		->getRepository('AppBundle:Circuit')
    		->find($id);
    			
    		dump($circuit);
    			
    		if (!$circuit) {
    			// cause the 404 page not found to be displayed
    			throw $this->createNotFoundException();
    		}
    			
    	}
    	else {
    		   			
    		$circuit = new Circuit();
    			
    		// If invoked through the draft editing route
    		if ($request->attributes->get('_route') == "circuit_editdraft") {
    			$session = $this->get('session');
    			$saveddraft = $session->get('saveddraft');
    			$circuit->setDescription($saveddraft['description']);
    			$circuit->setPaysDepart($saveddraft['paysDepart']);
    			$circuit->setVilleDepart($saveddraft['villeDepart']);
    			$circuit->setVilleArrivee($saveddraft['villeArrivee']);
    			$circuit->setDureeCircuit($saveddraft['dureeCircuit']);
    			$session->remove('saveddraft');
    		}
    	}
    
    	// Construct the form
    	$formBuilder = $this->createFormBuilder($circuit);
    	if ($request->attributes->get('_route') == "etapes_remove"){
    		/* Can have the possibility to put a textarea to explain a short comment on the reason of the deletion :
    		 $formBuilder->add('Commentaires', TextareaType::class); */
    		$formBuilder->add('Supprimer', SubmitType::class, array('label' => 'Supprimer'));
    	} else { // otherwise, we want to change or add an etape
    		$formBuilder->add('description', TextType::class)
    		->add('dureeCircuit', IntegerType::class)
    		->add('paysDepart', TextType::class)
    		->add('VilleDepart', TextType::class)
    		->add('VilleArrivee', TextType::class)
    		->add('save', SubmitType::class, array('label' => 'Envoyer'));
    	}
    	
       
    	// If in new circuit creation, add a button to allow saving a draft
    	if (!$id) {
    		$formBuilder->add('saveDraft', SubmitType::class, array('label' => 'Sauver brouillon'));
    	}
    
    	$form = $formBuilder->add('save', SubmitType::class, array('label' => 'Envoyer'))
    	->getForm();
    
    	$form->handleRequest($request);
    
    	if ($form->isSubmitted() && $form->isValid()) {
    
    	
    
    		// If the save draft button was clicked, save the draft to the session instead fo the DB
    		if((!$id) && $form->get('saveDraft')->isClicked()) {
    
    			$session = $this->get('session');
    
    			// We don't store the Circuit instance directly as Doctrine entities don't match so well with the session, it seems
    			$session->set('saveddraft', [
    					'description' => $circuit->getDescription(), 
    					'paysDepart' => $circuit->getPaysDepart(), 
    					'villeDepart' => $circuit->getVilleDepart(),
    					'villeArrivee' => $circuit->getVilleArrivee(),
    					'dureeCircuit' => $circuit->getDureeCircuit()    					
    			]);
    			
    
    			$this->addFlash('success', 'Brouillon de circuit sauvegardé');
    
    			// Go back to the circuit list
    			return $this->redirectToRoute('circuit_index', ['user' => $user]);
    		}
    		else {
    
    			// Persist for good in the DB
    			$entityManager = $this->getDoctrine()->getManager();
    			$entityManager->persist($circuit);
    			if ($request->attributes->get('_route') == "circuit_remove"){
    				$entityManager->remove($circuit);
    			} else {
    				$entityManager->persist($circuit);
    			}
    			$entityManager->flush();
    				
    			switch ($request->attributes->get('_route')){
    				case "circuit_new" :
    					$message = 'Circuit '. $circuit->getId() .' ajouté avec succès';
    					break;
    				case "circuit_remove" :
    					$message = 'Circuit '. $circuit->getId() .' supprimé avec succès';
    					break;
    				default:
    					$message = 'Circuit '. $circuit->getId() .' modifié avec succès';
    					break;
    			};
    			$this->addFlash('success', $message);
    
    			// either way, display the circuit
    			return $this->redirectToRoute('circuit_show', ['id' => $circuit->getId(), 'user' => $user]);
    		}
    	}
    	return $this->render('circuit/new.html.twig', [
    			'form' => $form->createView(), 'user' => $user, 'title'=>"Modifier le circuit",  'circuit_id' => $id
    	]);
    }
    
    
    /**
     * Creates a new Etape for a given Circuit, or modify or remove an existing one.
     *
     * Create a new etape
     * @Route("/manage/circuit/{id}/etapes/new", name="etapes_new")
     *
     * Or edit an etape of an existing circuit
	 * @Route("/manage/circuit/{id}/etapes/{etape_id}/edit", name="etapes_edit")
	 * 
	 * Or remove an etape
     * @Route("/manage/circuit/{id}/etapes/{etape_id}/remove", name="etapes_remove")
     *
     */
    public function editEtapes($id = null, Request $request, $etape_id = null)
    {
    	$user=$this->getUser();
    	
    	// Set title depending on the name of the route
    	switch ($request->attributes->get('_route')){
    		case "etapes_new" :
    			$title = "Ajout d'une étape";
    			break;
    		case "etapes_remove" :
    			$title = "Etes-vous sûr de vouloir supprimer cette étape ?";
    			break;
    		default:
    			$title = "Edition d'une étape";
    			break;
    	};
    	
    	// If called for edition, load the circuit from the DB
    	if ($id) {
    		$circuit = $this->getDoctrine()
    		->getRepository('AppBundle:Circuit')
    		->find($id);
    		 
    		dump($circuit);
    		 
    		if (!$circuit) {
    			// cause the 404 page not found to be displayed
    			throw $this->createNotFoundException();
    		}
    		 
    	}
    	else {
    		throw $this->createNotFoundException();	 
    	}
    
    	if ($etape_id) {
    		$etape = $this->getDoctrine()
    		->getRepository('AppBundle:Etape')
    		->find($etape_id);
    		 
    		dump($etape);
    		 
    		if (!$etape) {
    			// cause the 404 page not found to be displayed
    			throw $this->createNotFoundException();
    		}
    		 
    	}
    	else {
    		if ($request->attributes->get('_route') == "etapes_new"){
    			$etape=new Etape();}
    		else {
    			// cause the 404 page not found to be displayed
    			throw $this->createNotFoundException();
    		}
    	}
    	
    	// Construct the form
    	$formBuilder = $this->createFormBuilder($etape);
    	
    	//If we want to remove an etape
    	if ($request->attributes->get('_route') == "etapes_remove"){
    		/* Can have the possibility to put a textarea to explain a short comment on the reason of the deletion :
    		$formBuilder->add('Commentaires', TextareaType::class); */
    		$formBuilder->add('Supprimer', SubmitType::class, array('label' => 'Supprimer'));
    	} else { // otherwise, we want to change or add an etape
    		$formBuilder->add('numeroEtape', IntegerType::class)
				    	->add('villeEtape', TextType::class)
				    	->add('nombreJours', IntegerType::class)
    					->add('save', SubmitType::class, array('label' => 'Envoyer'));
    	}
    	
    	$form = $formBuilder->getForm();
    
    	$form->handleRequest($request);
    
    	if ($form->isSubmitted() && $form->isValid()) {
    		//TODO : Add and Record the name of the person who erase/add/change an etape in the database EtapeChanges (not created yet) -> in order to have some log about the changes of the circuits
    		
    		
    		
    		    // Persist for good in the DB
    			$entityManager = $this->getDoctrine()->getManager();
    			//If we want to remove an etape
    			if ($request->attributes->get('_route') == "etapes_remove"){
    			$entityManager->remove($etape);
		    	} else {
		    		$entityManager->persist($etape);
		    	}
    			$entityManager->flush();
    
    			// We may have created a new etape of edidting an existing one
    			
    			switch ($request->attributes->get('_route')){
    				case "etapes_new" :
    					$message = 'Etape '. $etape->getId() .' ajoutée avec succès';
    					break;
    				case "etapes_remove" :
    					$message = 'Etape '. $etape->getId() .' supprimée avec succès';
    					break;
    				default:
    					$message = 'Etape '. $etape->getId() .' modifiée avec succès';
    					break;
    			};
    			$this->addFlash('success', $message);
    
    			// either way, display the circuit
    			return $this->redirectToRoute('circuit_show', ['id' => $circuit->getId(), 'user' => $user]);
    		}
    	
    	return $this->render('circuit/new.html.twig', [
    			'form' => $form->createView(), 'user' => $user, 'title'=>$title, 'circuit_id' => $id
    	]);
    }
    
    
    /**
     * Creates a new Programmation for a given Circuit, or modify or remove an existing one.
     *
     * Create a new programmation
     * @Route("/manage/circuit/{id}/programmation/new", name="programmations_new")
     *
     * Or edit an etape of an existing circuit
     * @Route("/manage/circuit/{id}/programmation/{programmation_id}/edit", name="programmations_edit")
     *
     * Or remove an etape
     * @Route("/manage/circuit/{id}/programmation/{programmation_id}/remove", name="programmations_remove")
     *
     */
    public function editProgrammation($id = null, Request $request, $programmation_id = null)
    {
    	$user=$this->getUser();
    	 
    	// Set title depending on the name of the route
    	switch ($request->attributes->get('_route')){
    		case "programmations_new" :
    			$title = "Ajout d'une programmation";
    			break;
    		case "programmations_remove" :
    			$title = "Etes-vous sûr de vouloir supprimer cette programmation ?";
    			break;
    		default:
    			$title = "Edition d'une programmation";
    			break;
    	};
    	 
    	// If called for edition, load the circuit from the DB
    	if ($id) {
    		$circuit = $this->getDoctrine()
    		->getRepository('AppBundle:Circuit')
    		->find($id);
    		 
    		dump($circuit);
    		 
    		if (!$circuit) {
    			// cause the 404 page not found to be displayed
    			throw $this->createNotFoundException();
    		}
    		 
    	}
    	else {
    		throw $this->createNotFoundException();
    	}
    
    	if ($programmation_id) {
    		$programmation = $this->getDoctrine()
    		->getRepository('AppBundle:ProgrammationCircuit')
    		->find($programmation_id);
    		 
    		dump($programmation);
    		 
    		if (!$programmation) {
    			// cause the 404 page not found to be displayed
    			throw $this->createNotFoundException();
    		}
    		 
    	}
    	else {
    		if ($request->attributes->get('_route') == "programmations_new"){
    			$programmation=new ProgrammationCircuit();
    		} else {
    			// cause the 404 page not found to be displayed
    			throw $this->createNotFoundException();
    		}
    	}
    	 
    	// Construct the form
    	$formBuilder = $this->createFormBuilder($programmation);
    	 
    	//If we want to remove an etape
    	if ($request->attributes->get('_route') == "programmations_remove"){
    		/* Can have the possibility to put a textarea to explain a short comment on the reason of the deletion :
    		 $formBuilder->add('Commentaires', TextareaType::class); */
    		$formBuilder->add('Supprimer', SubmitType::class, array('label' => 'Supprimer'));
    	} else { // otherwise, we want to change or add an etape
    		$formBuilder->add('dateDepart', DateType::class)
    		->add('nombrePersonnes', IntegerType::class)
    		->add('prix', IntegerType::class)
    		->add('save', SubmitType::class, array('label' => 'Envoyer'));
    	}
    	 
    	$form = $formBuilder->getForm();
    
    	$form->handleRequest($request);
    
    	if ($form->isSubmitted() && $form->isValid()) {
    		//TODO : Add and Record the name of the person who erase/add/change an etape in the database ProgrammationChanges (not created yet) -> in order to have some log about the changes of the circuits
    
    
    
    		// Persist for good in the DB
    		$entityManager = $this->getDoctrine()->getManager();
    		//If we want to remove an etape
    		if ($request->attributes->get('_route') == "programmations_remove"){
    			$entityManager->remove($programmation);
    		} else {
    			$entityManager->persist($programmation);
    		}
    		$entityManager->flush();
    
    		// We may have created a new etape of edidting an existing one
    		 
    		switch ($request->attributes->get('_route')){
    			case "programmations_new" :
    				$message = 'Programmation '. $programmation->getId() .' ajoutée avec succès';
    				break;
    			case "programmations_remove" :
    				$message = 'Programation '. $programmation->getId() .' supprimée avec succès';
    				break;
    			default:
    				$message = 'Programmation '. $programmation->getId() .' modifiée avec succès';
    				break;
    		};
    		$this->addFlash('success', $message);
    
    		// either way, display the circuit
    		return $this->redirectToRoute('circuit_show', ['id' => $circuit->getId(), 'user' => $user]);
    	}
    	 
    	return $this->render('circuit/new.html.twig', [
    			'form' => $form->createView(), 'user' => $user, 'title'=>$title, 'circuit_id' => $id
    	]);
    }
    
  
    
}
