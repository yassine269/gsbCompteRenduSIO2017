<?php

namespace MainBundle\Controller;

use MainBundle\Entity\Famille;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\FOSRestController;


/**
 * Famille controller.
 *
 */
class FamilleController extends FOSRestController
{
    /**
     * Lists all famille entities.
     *
     */
    public function getFamilleAction()
    {
        $em = $this->getDoctrine()->getManager();

        $familles = $em->getRepository('MainBundle:Famille')->findAll();

        return $familles;
    }

    /**
     * Creates a new famille entity.
     *
     */
    public function newFamilleAction(Request $request)
    {
        $famille = new Famille();
        $form = $this->createForm('MainBundle\Form\FamilleType', $famille);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($famille);
            $em->flush();

            return $this->redirectToRoute('famille_show', array('id' => $famille->getId()));
        }

        return $this->render('famille/new.html.twig', array(
            'famille' => $famille,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a famille entity.
     *
     */
    public function showAction(Famille $famille)
    {
        $deleteForm = $this->createDeleteForm($famille);

        return $this->render('famille/show.html.twig', array(
            'famille' => $famille,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing famille entity.
     *
     */
    public function editAction(Request $request, Famille $famille)
    {
        $deleteForm = $this->createDeleteForm($famille);
        $editForm = $this->createForm('MainBundle\Form\FamilleType', $famille);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('famille_edit', array('id' => $famille->getId()));
        }

        return $this->render('famille/edit.html.twig', array(
            'famille' => $famille,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a famille entity.
     *
     */
    public function deleteAction(Request $request, Famille $famille)
    {
        $form = $this->createDeleteForm($famille);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($famille);
            $em->flush();
        }

        return $this->redirectToRoute('famille_index');
    }

    /**
     * Creates a form to delete a famille entity.
     *
     * @param Famille $famille The famille entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Famille $famille)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('famille_delete', array('id' => $famille->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
