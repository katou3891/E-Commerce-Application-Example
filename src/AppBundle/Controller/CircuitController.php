<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
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


/**
 * Circuit controller.
 */
class CircuitController extends Controller
{
    /**
     * Lists all Circuit entities.
     *
     * @Route("/circuit/", name="circuit_index")
     * @Method("GET")
     * 
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
		$user = $this->getUser();
        $circuits = $em->getRepository('AppBundle:Circuit')->findAll();
        
        return $this->render('circuit/index.html.twig', array(
            'circuits' => $circuits, 'user' => $user
        ));
    }

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
    	
    		$this->addFlash('success', 'Commentaire '. $newcomment->getId() .' créé avec succès');
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
    	$formBuilder = $this->createFormBuilder($circuit)
    	->add('description', TextType::class)
    	->add('dureeCircuit', IntegerType::class)
    	->add('paysDepart', TextType::class)
    	->add('VilleDepart', TextType::class)
    	->add('VilleArrivee', TextType::class);
       
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
    
    			$entityManager->flush();
    				
    			// We may have created a new circuit of edidting an existing one
    			if($id) {
    				$message = 'Circuit'. $circuit->getId() .' modifié avec succès';
    			} else {
    				$message = 'Circuit '. $circuit->getId() .' créé avec succès';
    			}
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
     * Creates a new Etape for a given Circuit, or modify an existing one.
     *
     * Create a new etape
     * @Route("/manage/circuit/{id}/etapes/new", name="etapes_new")
     *
     * Or edit an etape of an existing circuit
     * @Route("/manage/circuit/{id}/etapes/{etape_id}/edit", name="etapes_edit")
     * 
     * 
     *
     */
    public function editEtapes($id = null, Request $request, $etape_id = null)
    {
    	$user=$this->getUser();
    	
    	//TODO if route = new $titile = Création d'une étape else modification
    	$title="Edition";	
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
    		$etape=new Etape();
    	}
    	
    	// Construct the form
    	$formBuilder = $this->createFormBuilder($etape)
    	->add('numeroEtape', IntegerType::class)
    	->add('villeEtape', TextType::class)
    	->add('nombreJours', IntegerType::class);
    	
    	$form = $formBuilder->add('save', SubmitType::class, array('label' => 'Envoyer'))
    	->getForm();
    
    	$form->handleRequest($request);
    
    	if ($form->isSubmitted() && $form->isValid()) {
    
    		
    		
    		
    		     			// Persist for good in the DB
    			$entityManager = $this->getDoctrine()->getManager();
    			$entityManager->persist($etape);
    
    			$entityManager->flush();
    
    			// We may have created a new etape of edidting an existing one
    			if($id) {
    				$message = 'Etape '. $etape->getId() .' modifié avec succès';
    			} else {
    				$message = 'Etape '. $etape->getId() .' créé avec succès';
    			}
    			$this->addFlash('success', $message);
    
    			// either way, display the circuit
    			return $this->redirectToRoute('circuit_show', ['id' => $circuit->getId(), 'user' => $user]);
    		}
    	
    	return $this->render('circuit/new.html.twig', [
    			'form' => $form->createView(), 'user' => $user, 'title'=>$title, 'circuit_id' => $id
    	]);
    }
    
    /**
     * Delete an etape
     *
     
     * @Route("/manage/circuit/{id}/etapes/{etape_id}/remove", name="etapes_remove")
     *
     *
     *
     */
    public function removeEtape($id = null, Request $request, $etape_id = null)
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
    		throw $this->createNotFoundException();
    	}
    	 
    	// Construct the form
    	$formBuilder = $this->createFormBuilder($etape);
    	$form = $formBuilder->add('Supprimer', SubmitType::class, array('label' => 'Supprimer'))
    	->getForm();
    
    	$form->handleRequest($request);
    
    	if ($form->isSubmitted() && $form->isValid()) {
    
    
    
    
    		// Persist for good in the DB
    		$entityManager = $this->getDoctrine()->getManager();
    		$entityManager->persist($etape);
    		//TODO Supprimer
    		$entityManager->flush();
    
    		// We may have created a new etape of edidting an existing one
    		
    		$message = 'Etape '. $etape->getNumeroEtape() .' supprimée avec succès';
    	
    		$this->addFlash('success', $message);
    
    		// either way, display the circuit
    		return $this->redirectToRoute('circuit_show', ['id' => $circuit->getId(), 'user' => $user]);
    	}
    	 
    	return $this->render('circuit/new.html.twig', [
    			'form' => $form->createView(), 'user' => $user, 'title'=>"Etes-vous sûr de vouloir supprimer cette étape ?"
    	, 'circuit_id' => $id
    			
    	]);
    }
    
    
}
