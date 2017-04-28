<?php

namespace ApiBundle\Controller;

use ApiBundle\Form\ActComplType;
use DateTime;
use DoctrineExtensions\Query\Mysql\Date;
use FOS\RestBundle\Request\ParamFetcher;
use MainBundle\Admin\RapportVisiteAdmin;
use MainBundle\Entity\ActCompl;
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
class ActComplController extends Controller
{
    /**
     * Lists all ActCompl entities.
     *
     */


    //GET Activité complémentaire with filter and without it

    public function getActivitesAction(Request $request, ParamFetcher $paramFetcher)
    {
        // INIT RESPONSE
        $activites=[];
        // GET QUERY PARAMETERS
        // GET REPOSITORY
        $repo=$this->getDoctrine()->getRepository('MainBundle:ActCompl');
        $activites=$repo->findAll();


        return $activites;
    }

        // GET ONE RAPPORT (VIEW)
    public function getOneactiviteAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $activites = $em->getRepository('MainBundle:ActCompl')->findOneBy(array("id"=>$id));


        return $activites;
    }

     //Creates a new rapportVisite entity POST REQUEST
    public function postActiviteAction(Request $request)
    {
        $activite=new ActCompl();
        $form=$this->createForm(ActComplType::class,$activite);
        $form->submit($request->request->all());
        $acActReals=$activite->getAcActReal();
        foreach ($acActReals as $acActReal){
            $acActReal->setActReaActCompl($activite);
        }
        $date=$activite->getAcDate();
        $activite->setAcDate(new \DateTime($date));
        if ($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($activite);
            $em->flush();
            return $activite;
        }
        else return $form;
    }

    // TOTAL REPLACE RAPPORTVISITE (ID DU RAPPORT EN PARAMETRE URL)
    public function putActiviteAction(Request $request){
        $activite=$this->getDoctrine()->getRepository('MainBundle:ActCompl')->find($request->get('id'));
        if(empty($activite)){
            return new JsonResponse(['message'=>'Activité complémentaire introuvable'], Response::HTTP_NOT_FOUND);
        }
        $form=$this->createForm(ActComplType::class,$activite);
        $form->submit($request->request->all());
        $acActReals=$activite->getAcActReal();
        foreach ($acActReals as $acActReal){
            $acActReal->setActReaActCompl($activite);
        }
        $date=$activite->getAcDate();
        $activite->setAcDate(new \DateTime($date));
        if ($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->merge($activite);
            $em->flush();
            return $activite;
        }
        else return $form;
    }

    // PARTIAL REPLACE RAPPORTVISITE (ID DU RAPPORT EN PARAMETRE URL)
    public function patchActiviteAction(Request $request){
        return $this->updateActivite($request,false);
    }

    public function deleteActiviteAction(Request $request){

    }

    private function updateActivite(Request $request, $clearMissing)
    {
        $activite=$this->getDoctrine()->getRepository('MainBundle:ActCompl')->find($request->get('id'));
        if(empty($activite)){
            return new JsonResponse(['message'=>'Activité complémentaire introuvable'], Response::HTTP_NOT_FOUND);
        }
        $form=$this->createForm(ActComplType::class,$activite);
        $form->submit($request->request->all(),$clearMissing);
        $acActReals=$activite->getAcActReal();
        foreach ($acActReals as $acActReal){
            $acActReal->setActReaActCompl($activite);
        }
        $date=$activite->getAcDate();
        $activite->setAcDate(new \DateTime($date));
        if ($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($activite);
            $em->flush();
            return $activite;
        }
        else return $form;

    }

}
