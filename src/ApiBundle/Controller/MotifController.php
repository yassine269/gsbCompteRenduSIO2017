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


/**
 * Rapportvisite controller.
 *
 */
class MotifController extends Controller
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


    //GET rapportVisite with filter and without it
    public function getMotifAction(Request $request, ParamFetcher $paramFetcher)
    {
        // INIT RESPONSE
        $repo=$this->getDoctrine()->getRepository('MainBundle:Motif');
        $motif=$repo->findAll();

        return $motif;
    }

        // GET ONE RAPPORT (VIEW)
    public function getOnemotifAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $motif = $em->getRepository('MainBundle:Motif')->findOneBy(array("id"=>$id));


        return $motif;
    }



}
