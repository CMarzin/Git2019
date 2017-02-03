<?php

namespace HeticBundle\Controller;

use HeticBundle\Entity\CreatureFantastique;
use HeticBundle\Form\CreatureFantisqueType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/creaturefantastique")
 */
class CreatureFantastiqueController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $creatureFantastiques = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository("HeticBundle:CreatureFantastique")
            ->findAll();
        return $this->render('CreatureFantisque/indec.html.twig', array(
            'creatureFantastiques' => $creatureFantastiques
        ));
    }

    /**
     * @Route("/show/{id}")
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     * @internal param CreatureFantastique $creatureFantastique
     */
    public function showAction($id)
    {
        $creatureFantastique = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository("HeticBundle:CreatureFantastique")
            ->find($id);
        if(!$creatureFantastique){
            return $this->redirectToRoute('hetic_creaturefantastique_index');
        }
//        $uppercase = $this->get("app.service.uppercase_service");
//        die($uppercase->ucase($creatureFantastique->getName()));
        return $this->render('CreatureFantisque/show.html.twig', array(
            'creatureFantastique' => $creatureFantastique
        ));
    }

//    /**
//     * @Route("/show/{id}")
//     * @param CreatureFantastique $creatureFantastique
//     * @return \Symfony\Component\HttpFoundation\Response
//     */
//    public function showAction(CreatureFantastique $creatureFantastique)
//    {
//        return $this->render('CreatureFantastique/show.html.twig', array(
//            'creatureFantastique' => $creatureFantastique
//        ));
//    }
//
    /**
     * @param Request $request
     * @Route("/new")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function newAction(Request $request)
    {
        $creatureFantastique = new CreatureFantastique();
        $form = $this->createForm(
            'HeticBundle\Form\CreatureFantastiqueType',
            $creatureFantastique
        );
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
//            dump($form);die();
            $em = $this->getDoctrine()->getManager();
            $em->persist($creatureFantastique);
            $em->flush();
//            dump($creatureFantastique);die();
            return $this->redirectToRoute("hetic_creaturefantastique_show", ['id'=>$creatureFantastique->getId()]);
        }
        $response = $this->render("CreatureFantisque/new.html.twig",
            [
                'creaturefantastique' => $creatureFantastique,
                'form' => $form->createView(),
            ]);
//        dump($response);die();
        return $response;
    }

}