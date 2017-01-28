<?php

namespace HeticBundle\Controller;

use HeticBundle\Entity\Chevalier;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Chevalier controller.
 *
 */
class ChevalierController extends Controller
{
    /**
     * Lists all chevalier entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $chevaliers = $em->getRepository('HeticBundle:Chevalier')->findAll();

        return $this->render('chevalier/index.html.twig', array(
            'chevaliers' => $chevaliers,
        ));
    }

    /**
     * Creates a new chevalier entity.
     *
     */
    public function newAction(Request $request)
    {
        $chevalier = new Chevalier();
        $form = $this->createForm('HeticBundle\Form\ChevalierType', $chevalier);
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
     */
    public function showAction(Chevalier $chevalier)
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
     */
    public function editAction(Request $request, Chevalier $chevalier)
    {
        $deleteForm = $this->createDeleteForm($chevalier);
        $editForm = $this->createForm('HeticBundle\Form\ChevalierType', $chevalier);
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
     */
    public function deleteAction(Request $request, Chevalier $chevalier)
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
     * @param Chevalier $chevalier The chevalier entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Chevalier $chevalier)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('chevalier_delete', array('id' => $chevalier->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
