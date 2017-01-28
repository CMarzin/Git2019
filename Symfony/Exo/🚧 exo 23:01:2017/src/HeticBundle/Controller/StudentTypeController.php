<?php

namespace HeticBundle\Controller;

use HeticBundle\Entity\StudentType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Studenttype controller.
 *
 * @Route("studenttype")
 */
class StudentTypeController extends Controller
{
    /**
     * Lists all studentType entities.
     *
     * @Route("/", name="studenttype_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $studentTypes = $em->getRepository('HeticBundle:StudentType')->findAll();

        return $this->render('studenttype/index.html.twig', array(
            'studentTypes' => $studentTypes,
        ));
    }

    /**
     * Creates a new studentType entity.
     *
     * @Route("/new", name="studenttype_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $studentType = new Studenttype();
        $form = $this->createForm('HeticBundle\Form\StudentTypeType', $studentType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($studentType);
            $em->flush($studentType);

            return $this->redirectToRoute('studenttype_show', array('id' => $studentType->getId()));
        }

        return $this->render('studenttype/new.html.twig', array(
            'studentType' => $studentType,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a studentType entity.
     *
     * @Route("/{id}", name="studenttype_show")
     * @Method("GET")
     */
    public function showAction(StudentType $studentType)
    {
        $deleteForm = $this->createDeleteForm($studentType);

        return $this->render('studenttype/show.html.twig', array(
            'studentType' => $studentType,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing studentType entity.
     *
     * @Route("/{id}/edit", name="studenttype_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, StudentType $studentType)
    {
        $deleteForm = $this->createDeleteForm($studentType);
        $editForm = $this->createForm('HeticBundle\Form\StudentTypeType', $studentType);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('studenttype_edit', array('id' => $studentType->getId()));
        }

        return $this->render('studenttype/edit.html.twig', array(
            'studentType' => $studentType,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a studentType entity.
     *
     * @Route("/{id}", name="studenttype_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, StudentType $studentType)
    {
        $form = $this->createDeleteForm($studentType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($studentType);
            $em->flush($studentType);
        }

        return $this->redirectToRoute('studenttype_index');
    }

    /**
     * Creates a form to delete a studentType entity.
     *
     * @param StudentType $studentType The studentType entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(StudentType $studentType)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('studenttype_delete', array('id' => $studentType->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
