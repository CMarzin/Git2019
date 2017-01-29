<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TestRIghtController extends Controller
{
    /**
     * @Route("/yolotest")
     */
    public function yolotestAction()
    {
        return $this->render('AppBundle:TestRIght:yolotest.html.twig', array(
            // ...
        ));
    }

}
