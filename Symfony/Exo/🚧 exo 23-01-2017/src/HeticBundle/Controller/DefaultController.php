<?php

namespace HeticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        $studentRepo = $this->getDoctrine()->getRepository('HeticBundle:Student');
        return $this->render('student/index.html.twig', [
            'students' => $studentRepo->uneMethode(),
        ]);
    }
}
