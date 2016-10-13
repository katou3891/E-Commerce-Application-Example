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
     * Accueil
     *@Route("/", name="homepage")
     * @Route("/accueil/", name="accueil_show")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $circuits = $em->getRepository('AppBundle:Circuit')->findAll();

        return $this->render('anonymous/accueil.html.twig', array(
            'circuits' => $circuits,
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
    	
    
    	return $this->render('anonymous/contact.html.twig');
    }
    
    /**
     * Contact
     *
     * @Route("/presentation/", name="presentation_show")
     * @Method("GET")
     */
    public function showPresentation()
    {
    	 
    
    	return $this->render('anonymous/apropos.html.twig');
    }
    

}
