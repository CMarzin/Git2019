<?php

namespace HeticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $studentRepo = $this->getDoctrine()->getRepository('HeticBundle:Student');
        return $this->render('student/unemethode.html.twig', [
            'students' => $studentRepo->uneMethode(),
        ]);



    }
}
