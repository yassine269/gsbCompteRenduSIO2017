<?php

namespace ApiBundle\Controller;

use ApiBundle\Form\ActComplType;
use ApiBundle\Object\ActComplPost;
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
    /**
     * @QueryParam(name="states", requirements="\d+", default="", description="Filtre par status")
     * @QueryParam(name="realisation", requirements="\d+", default="", description="Filtre par realisation")
     * @QueryParam(name="region", requirements="\d+", default="", description="Filtre par region")
     * @QueryParam(name="secteur", requirements="\d+", default="", description="Filtre par secteur")
     * @QueryParam(name="template", default="", description="type de template")
     */
    public function getActcomplAction(Request $request, ParamFetcher $paramFetcher)
    {
        // INIT RESPONSE
        $activites=[];
        // GET QUERY PARAMETERS
        // GET REPOSITORY
        $repo=$this->getDoctrine()->getRepository('MainBundle:ActCompl');
        $realisation=$paramFetcher->get('realisation');
        $states=$paramFetcher->get('states');
        $region=$paramFetcher->get('region');
        $secteur=$paramFetcher->get('secteur');
        $template=$paramFetcher->get('template');
        if($realisation!=""){
            $user=$this->getDoctrine()->getRepository('OCUserBundle:User')->find($realisation);
            $activites=$this->getDoctrine()->getRepository('MainBundle:ActCompl')->findByRealisation($user);
        }
        if ($template=="edit"){
            $user=$this->getDoctrine()->getRepository('OCUserBundle:User')->find($realisation);
            $activites=$repo->findByRealisationForValid($user);
        }
        if ($states!="" && $region!=""){
            $region=$this->getDoctrine()->getRepository('OCUserBundle:Region')->find($region);
            $activites=$this->getDoctrine()->getRepository('MainBundle:ActCompl')->findByRegionForValid($region);
        }
        if ($region!=""){
            $region=$this->getDoctrine()->getRepository('OCUserBundle:Region')->find($region);
            $activites=$this->getDoctrine()->getRepository('MainBundle:ActCompl')->findByRegion($region);
        }
        if ($secteur!=""){
            $secteur=$this->getDoctrine()->getRepository('OCUserBundle:Secteur')->find($secteur);
            $activites=$this->getDoctrine()->getRepository('MainBundle:ActCompl')->findBySecteur($secteur);
        }

        return $activites;
    }

        // GET ONE RAPPORT (VIEW)
    public function getOneactcomplAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $activites = $em->getRepository('MainBundle:ActCompl')->findOneBy(array("id"=>$id));


        return $activites;
    }

     //Creates a new rapportVisite entity POST REQUEST

    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED)
     */
    public function postActcomplAction(Request $request)
    {
        $activite=new ActCompl();
        $form=$this->createForm(ActComplType::class,$activite);
        $form->submit($request->request->all());
        $acActReals=$activite->getAcActReal();
        $activite->setAcStates("VALIDATION_REQUISE");
        foreach ($acActReals as $acActReal){
            $acActReal->setActReaActCompl($activite);
        }
        #$date=$activite->getAcDate();
        #$activite->setAcDate(new \DateTime($date));
        if ($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($activite);
            $em->flush();
            $actPost=new ActComplPost();
            $actPost->setId($activite->getId());
            $actPost->setAcLieu($activite->getAcLieu());
            $actPost->setAcDate($activite->getAcDate());
            $actPost->setAcStates($activite->getAcStates());
            foreach ($activite->getAcPraticien() as $praticien){
                $actPost->addAcPraticien($praticien->getId());
            }
            foreach ($activite->getAcActReal() as $actReal){
                $actPost->addAcActReal($actReal);
            }
            return $activite;
        }
        else return $form;
    }

    // TOTAL REPLACE RAPPORTVISITE (ID DU RAPPORT EN PARAMETRE URL)
    public function putActcomplAction(Request $request){
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
    public function patchUpdateactcomplAction(Request $request){
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
        $activite->setAcStates("VALIDATION_REQUISE");
        foreach ($acActReals as $acActReal){
            $acActReal->setActReaActCompl($activite);
        }
        #$date=$activite->getAcDate();
        #$activite->setAcDate(new \DateTime($date));
        if ($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($activite);
            $em->flush();
            $actPost=new ActComplPost();
            $actPost->setId($activite->getId());
            $actPost->setAcLieu($activite->getAcLieu());
            $actPost->setAcDate($activite->getAcDate());
            $actPost->setAcStates($activite->getAcStates());
            foreach ($activite->getAcPraticien() as $praticien){
                $actPost->addAcPraticien($praticien->getId());
            }
            foreach ($activite->getAcActReal() as $actReal){
                $actPost->addAcActReal($actReal);
            }
            return $activite;
        }
        else return $form;
    }
}
