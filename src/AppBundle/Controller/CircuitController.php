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

        $circuits = $em->getRepository('AppBundle:Circuit')->findAll();
        
        return $this->render('circuit/index.html.twig', array(
            'circuits' => $circuits,
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
            'circuit' => $circuit, 'commentform'=> $commentform->createView(), 'comments' => $comments
        		
        ));
    }
  
    /**
     * @Route("/circuit/{id}/comments/{comment_id}", name="circuit_show_comment")
     * @ParamConverter("comment", options={"id" = "comment_id"})
     */
    public function showCommentAction(Circuit $circuit, Commentaire $comment)
    {
    	 return $this->render('circuit/show_comment.html.twig', array('comment' => $comment, 'circuit' => $circuit));
    
    }
}
