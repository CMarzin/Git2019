<?php

namespace HeticBundle\Controller;

use HeticBundle\Entity\Student;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class StudentController extends Controller
{
    /**
     * @Route("/index")
     */
    public function indexAction()
    {
        $service = $this->get('hetic.services.time_is_on_my_side');
        $em = $this->getDoctrine()->getEntityManager();
        $students = $em->getRepository('HeticBundle:Student')->findAll();

         $ages = [];

         foreach ($students as $student) {
             /** @var Student $student */
             $ages[$student->getId()] = $service->getAge($student->getDateOfBirth());
         }

        return $this->render('Student/index.html.twig', array(
            'students' => $students,
            'ages' => $ages,
       ));
    }

}
