<?php

namespace ApiBundle\Controller;

use DateTime;
use DoctrineExtensions\Query\Mysql\Date;
use MainBundle\Admin\RapportVisiteAdmin;
use MainBundle\Entity\RapportVisite;
use ApiBundle\Form\RapportVisiteType;
use Sonata\AdminBundle\Admin\AdminInterface;
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
     * {
    "mainbundle_rapportvisite":
    {
    "rapEchantillons": [],
    "rapVisiteur": 28,
    "rapPraticien": 1,
    "rapMotif": 1,
    "rapDate": "2017-01-27T00:00:00+0000",
    "rapBilan": "okok",
    "rapCoefImpact": 6
    }
    }
     *
     */

    /**
     * The related Admin class.
     *
     * @var AdminInterface
     */
    protected $admin;

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
    public function postRapportAction(Request $request)
    {
        $rapport=new RapportVisite();
        $form=$this->createForm(RapportVisiteType::class,$rapport);
        $form->handleRequest($request);
        $rapEchants=$rapport->getRapEchantillons();
        foreach ($rapEchants as $rapEchant){
            $rapEchant->setRapEchantRapport($rapport);
        }
        $date=$rapport->getRapDate();
        $rapport->setRapDate(new \DateTime($date));
        dump($rapport);
        if ($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($rapport);
            $em->flush();
            return $rapport;
        }
        else return $form;
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
