<?php

namespace ApiBundle\Controller;

use DateTime;
use DoctrineExtensions\Query\Mysql\Date;
use FOS\RestBundle\Request\ParamFetcher;
use MainBundle\Admin\RapportVisiteAdmin;
use MainBundle\Entity\RapportVisite;
use ApiBundle\Form\RapportVisiteType;
use Sonata\AdminBundle\Admin\AdminInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations\View;



/**
 * Rapportvisite controller.
 *
 */
class MedicamentController extends Controller
{

    /**
     *@View(serializerEnableMaxDepthChecks=true)
     */
    public function getMedicamentAction(Request $request, ParamFetcher $paramFetcher)
    {
        // INIT RESPONSE
        $repo=$this->getDoctrine()->getRepository('MainBundle:Medicament');
        $medicament=$repo->findAll();
        /* GET QUERY PARAMETERS
        $redacteur=$paramFetcher->get('redacteur');
        $dateVisite=$paramFetcher->get('datevisite');
        $praticien=$paramFetcher->get('praticien');
        $motif=$paramFetcher->get('motif');
        $coef=$paramFetcher->get('coef');
        // GET REPOSITORY
        // TEST EXISTANCE FILTRES
            //FILTRE VISITEUR
        if($redacteur!=""){
            $user=$this->getDoctrine()->getRepository('OCUserBundle:User')->find($redacteur);
            $rapportVisites=$repo->findBy(array('rapVisiteur'=>$user));
        }
            //FILTRE DATE VISITE
        if ($dateVisite!=""){
            $dateVisite= new \DateTime($dateVisite);
            $rapportVisites=$repo->findBy(array('rapDate'=>$dateVisite));
        }
            //FILTRE PRATICIEN
        if ($praticien!=""){
            $praticien=$this->getDoctrine()->getRepository('MainBundle:Praticien')->find($praticien);
            $rapportVisites=$repo->findBy(array('rapPraticien'=>$praticien));
        }
            // FILTRE MOTIF
        if ($motif!=""){
            $motif=$this->getDoctrine()->getRepository('MainBundle:Motif')->find($motif);
            $rapportVisites=$repo->findBy(array('rapMotif'=>$motif));
        }
            // FILTRE COEF
        if ($coef!=""){
            $rapportVisites=$repo->findBy(array('rapCoefImpact'=>$coef));
        }
        */
        return $medicament;
    }

        // GET ONE RAPPORT (VIEW)
    public function getOnemedicamentAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $medicament = $em->getRepository('MainBundle:Medicament')->findOneBy(array("id"=>$id));


        return $medicament;
    }

}
