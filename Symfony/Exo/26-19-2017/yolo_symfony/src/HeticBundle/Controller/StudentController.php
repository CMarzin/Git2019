<?php

namespace HeticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class StudentController extends Controller
{
    /**
     * @Route("/index")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $data = -$em->getRepository('HeticBundle:Student')->displayAges();
        dump($data);
        die();
        //return $this->render('HeticBundle:StudentController:index.html.twig', array(
            // ...
       // ));
    }

}
