<?php

namespace BunkerBundle\Controller;

use BunkerBundle\Entity\Monster;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Monster controller.
 *
 * @Route("monster")
 */
class MonsterController extends Controller
{
    /**
     * Lists all monster entities.
     *
     * @Route("/", name="monster_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $monsters = $em->getRepository('BunkerBundle:Monster')->findAll();

        return $this->render('monster/index.html.twig', array(
            'monsters' => $monsters,
        ));
    }

    /**
     * Creates a new monster entity.
     *
     * @Route("/new", name="monster_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $monster = new Monster();
        $form = $this->createForm('BunkerBundle\Form\MonsterType', $monster);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($monster);
            $em->flush($monster);

            return $this->redirectToRoute('monster_show', array('id' => $monster->getId()));
        }

        return $this->render('monster/new.html.twig', array(
            'monster' => $monster,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a monster entity.
     *
     * @Route("/{id}", name="monster_show")
     * @Method("GET")
     */
    public function showAction(Monster $monster)
    {
        $deleteForm = $this->createDeleteForm($monster);

        return $this->render('monster/show.html.twig', array(
            'monster' => $monster,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing monster entity.
     *
     * @Route("/{id}/edit", name="monster_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Monster $monster)
    {
        $deleteForm = $this->createDeleteForm($monster);
        $editForm = $this->createForm('BunkerBundle\Form\MonsterType', $monster);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('monster_edit', array('id' => $monster->getId()));
        }

        return $this->render('monster/edit.html.twig', array(
            'monster' => $monster,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a monster entity.
     *
     * @Route("/{id}", name="monster_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Monster $monster)
    {
        $form = $this->createDeleteForm($monster);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($monster);
            $em->flush($monster);
        }

        return $this->redirectToRoute('monster_index');
    }

    /**
     * Creates a form to delete a monster entity.
     *
     * @param Monster $monster The monster entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Monster $monster)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('monster_delete', array('id' => $monster->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
