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
        $service = $this->get('hetic.services.time_is_on_my_side');
        $em = $this->getDoctrine()->getEntityManager();
        $students = $em->getRepository('HeticBundle:Student')->displayAges();

//        $students_with_age = array_map(function($student) use ($service){
//            $student->age = $service->getAge($student->getDateOfBirth());
//            return $student;
//        }, $students);

        $ages = [];

        foreach ($students as $student) {
            $age = $service->getAge($student->getDateofBirth());
            dump($age);
            array_push($ages, $age);
        }

        return $this->render('student/index.html.twig', array(
            'students' => $students,
            'ages' => $ages,
        ));
    }

}
