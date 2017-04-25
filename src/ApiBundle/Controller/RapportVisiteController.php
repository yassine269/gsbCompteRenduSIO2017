<?php

namespace ApiBundle\Controller;

use MainBundle\Entity\RapportVisite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;




/**
 * Rapportvisite controller.
 *
 */
class RapportVisiteController extends Controller
{
    /**
     * Lists all rapportVisite entities.
     *
     */
    public function getRapportsAction()
    {
        $em = $this->getDoctrine()->getManager();

        $rapportVisites = $em->getRepository('MainBundle:RapportVisite')->findAll();

        return $rapportVisites;
    }
    public function getOnerapportAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $rapportVisites = $em->getRepository('MainBundle:RapportVisite')->findOneBy(array("id"=>$id));


        return $rapportVisites;
    }

    /**
     * Creates a new rapportVisite entity.
     *
     */
    public function newAction(Request $request)
    {
        $rapportVisite = new Rapportvisite();
        $form = $this->createForm('MainBundle\Form\RapportVisiteType', $rapportVisite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rapportVisite);
            $em->flush();

            return $this->redirectToRoute('rapportvisite_show', array('id' => $rapportVisite->getId()));
        }

        return $this->render('rapportvisite/new.html.twig', array(
            'rapportVisite' => $rapportVisite,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a rapportVisite entity.
     *
     */
    public function showAction(RapportVisite $rapportVisite)
    {
        $deleteForm = $this->createDeleteForm($rapportVisite);

        return $this->render('rapportvisite/show.html.twig', array(
            'rapportVisite' => $rapportVisite,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing rapportVisite entity.
     *
     */
    public function editAction(Request $request, RapportVisite $rapportVisite)
    {
        $deleteForm = $this->createDeleteForm($rapportVisite);
        $editForm = $this->createForm('MainBundle\Form\RapportVisiteType', $rapportVisite);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('rapportvisite_edit', array('id' => $rapportVisite->getId()));
        }

        return $this->render('rapportvisite/edit.html.twig', array(
            'rapportVisite' => $rapportVisite,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a rapportVisite entity.
     *
     */
    public function deleteAction(Request $request, RapportVisite $rapportVisite)
    {
        $form = $this->createDeleteForm($rapportVisite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($rapportVisite);
            $em->flush();
        }

        return $this->redirectToRoute('rapportvisite_index');
    }

    /**
     * Creates a form to delete a rapportVisite entity.
     *
     * @param RapportVisite $rapportVisite The rapportVisite entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(RapportVisite $rapportVisite)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rapportvisite_delete', array('id' => $rapportVisite->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
