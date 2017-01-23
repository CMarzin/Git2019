<?php

namespace HeticBundle\Controller;

use HeticBundle\Entity\chevalier;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Chevalier controller.
 *
 * @Route("chevalier")
 */
class chevalierController extends Controller
{
    /**
     * Lists all chevalier entities.
     *
     * @Route("/", name="chevalier_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $chevaliers = $em->getRepository('HeticBundle:chevalier')->findAll();

        return $this->render('chevalier/index.html.twig', array(
            'chevaliers' => $chevaliers,
        ));
    }

    /**
     * Creates a new chevalier entity.
     *
     * @Route("/new", name="chevalier_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $chevalier = new Chevalier();
        $form = $this->createForm('HeticBundle\Form\chevalierType', $chevalier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($chevalier);
            $em->flush($chevalier);

            return $this->redirectToRoute('chevalier_show', array('id' => $chevalier->getId()));
        }

        return $this->render('chevalier/new.html.twig', array(
            'chevalier' => $chevalier,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a chevalier entity.
     *
     * @Route("/{id}", name="chevalier_show")
     * @Method("GET")
     */
    public function showAction(chevalier $chevalier)
    {
        $deleteForm = $this->createDeleteForm($chevalier);

        return $this->render('chevalier/show.html.twig', array(
            'chevalier' => $chevalier,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing chevalier entity.
     *
     * @Route("/{id}/edit", name="chevalier_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, chevalier $chevalier)
    {
        $deleteForm = $this->createDeleteForm($chevalier);
        $editForm = $this->createForm('HeticBundle\Form\chevalierType', $chevalier);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('chevalier_edit', array('id' => $chevalier->getId()));
        }

        return $this->render('chevalier/edit.html.twig', array(
            'chevalier' => $chevalier,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a chevalier entity.
     *
     * @Route("/{id}", name="chevalier_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, chevalier $chevalier)
    {
        $form = $this->createDeleteForm($chevalier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($chevalier);
            $em->flush($chevalier);
        }

        return $this->redirectToRoute('chevalier_index');
    }

    /**
     * Creates a form to delete a chevalier entity.
     *
     * @param chevalier $chevalier The chevalier entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(chevalier $chevalier)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('chevalier_delete', array('id' => $chevalier->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
