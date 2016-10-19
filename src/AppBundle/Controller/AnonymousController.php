<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Circuit;


/**
 * Anonymous controller.
 */
class AnonymousController extends Controller
{

	/**
	 * Lists all Circuit entities that have programmation (we suppose that these programmations are not in the past)
	 *
	 * @Route("/circuit/", name="circuit_index")
	 * @Method("GET")
	 *
	 */
	public function showCircuits()
	{
		$em = $this->getDoctrine()->getManager();
		$user = $this->getUser();
	
		//you're a client who needs to see only circuits which have programmations or an authenticated user who wants to see the application from the client side
		$circuits = $em->getRepository('AppBundle:Circuit')->findCircuitsWithProgrammation();
	

		//showButtons -> boolean which is false : we do want to see buttons that allows edition of the circuits
		return $this->render('circuit/index.html.twig', array(
				'circuits' => $circuits, 'user' => $user, 'showButtons'=> false
		));
	}
	
    /**
     * Accueil
     * @Route("/", name="homepage")
     * @Route("/accueil/", name="accueil_show")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
		$user = $this -> getUser();
        $circuits = $em->getRepository('AppBundle:Circuit')->findAll();
		
        return $this->render('anonymous/accueil.html.twig', array(
            'circuits' => $circuits, 'user' => $user, 
        		'presentation' => array('nom'=>'La meilleure Agence Ever', 'telephone'=> '0474544800', 'adresse'=>"9 Rue Charles Fourier 91011 Evry CEDEX")
        ));
    }


    /**
     * Contact
     *
     * @Route("/contact/", name="contact_show")
     * @Method("GET")
     */
    public function showAction()
    {
    	
    	$user = $this -> getUser();   	
    	return $this->render('anonymous/contact.html.twig',  array('user' => $user,  
    			'presentation' => array('nom'=>'La meilleure Agence Ever', 'telephone'=> '0474544800', 'adresse'=>"9 Rue Charles Fourier 91011 Evry CEDEX")
    			
    	));
    }
    
    /**
     * Contact
     *
     * @Route("/presentation/", name="presentation_show")
     * @Method("GET")
     */
    public function showPresentation()
    {
    	 
    	$user = $this -> getUser();
    	return $this->render('anonymous/apropos.html.twig',  array('user' => $user, 
    			'presentation' => array('nom'=>'La meilleure Agence Ever', 'telephone'=> '0474544800', 'adresse'=>"9 Rue Charles Fourier 91011 Evry CEDEX")
    	));
    }
    
 

}
