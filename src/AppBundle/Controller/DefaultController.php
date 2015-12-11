<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        // replace this example code with whatever you need
        return $this->render('default/homepage.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }

     /**
     * @Route("/food", name="food")
     */
    public function foodAction(Request $request)
    {

        // replace this example code with whatever you need
        return $this->render('default/food.html.twig', array(
            
        ));
  
    }
 

    /**
     * @Route("/beer", name="beer")
     */
    public function beerAction(Request $request)
    {

        // replace this example code with whatever you need
        return $this->render('default/beer.html.twig', array(
            
        ));
  
    }

    /**
     * @Route("/reservation", name="reservation")
     */
    public function reservationAction(Request $request)
    {

        // replace this example code with whatever you need
        return $this->render('default/reservation.html.twig', array(
            
        ));
  
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {

        // replace this example code with whatever you need
        return $this->render('default/contact.html.twig', array(
            
        ));
  
    }

    /**
     * @Route("/blog", name="blog")
     */
    public function blogAction(Request $request)
    {

        // replace this example code with whatever you need
        return $this->render('default/blog.html.twig', array(
            
        ));
  
    }
}
