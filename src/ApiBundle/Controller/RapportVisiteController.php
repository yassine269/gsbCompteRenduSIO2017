<?php

namespace ApiBundle\Controller;

use ApiBundle\Object\RapportEchantPost;
use ApiBundle\Object\RapportVisitePost;
use DateTime;
use DoctrineExtensions\Query\Mysql\Date;
use FOS\RestBundle\Request\ParamFetcher;
use MainBundle\Admin\RapportVisiteAdmin;
use MainBundle\Entity\Praticien;
use MainBundle\Entity\RapportVisite;
use ApiBundle\Form\RapportVisiteType;
use Sonata\AdminBundle\Admin\AdminInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Ldap\Adapter\ExtLdap\Collection;


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


    //GET rapportVisite with filter and without it
    /**
     * @QueryParam(name="datevisite", requirements="\d+", default="", description="Filtre par Date de visite")
     * @QueryParam(name="redacteur", requirements="\d+", default="", description="Filtre par rédacteur")
     * @QueryParam(name="praticien", requirements="\d+", default="", description="Filtre par Praticien")
     * @QueryParam(name="motif", requirements="\d+", default="", description="Filtre par Motif")
     * @QueryParam(name="coef", requirements="\d+", default="", description="Filtre par Coef")
     * @QueryParam(name="template", default="", description="type de template")
     * @QueryParam(name="region", default="", description="region")
     * @QueryParam(name="secteur", default="", description="secteur")
     */
    public function getRapportsAction(Request $request, ParamFetcher $paramFetcher)
    {
        // INIT RESPONSE
        $repo=$this->getDoctrine()->getRepository('MainBundle:RapportVisite');
        $rapportVisites=$repo->findAll();
        // GET QUERY PARAMETERS
        $redacteur=$paramFetcher->get('redacteur');
        $dateVisite=$paramFetcher->get('datevisite');
        $praticien=$paramFetcher->get('praticien');
        $motif=$paramFetcher->get('motif');
        $coef=$paramFetcher->get('coef');
        $template=$paramFetcher->get('template');
        $region=$paramFetcher->get('region');
        $secteur=$paramFetcher->get('secteur');
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
        if ($template=="edit"){
            $user=$this->getDoctrine()->getRepository('OCUserBundle:User')->find($redacteur);
            $rapportVisites=$repo->findByDateForEdit($user);
        }
        if ($region==1){
            $user=$this->getDoctrine()->getRepository('OCUserBundle:User')->find($redacteur);
            $rapportVisites=$repo->findByRegion($user->getUsrRegion());
        }
        if ($secteur==1){
            $user=$this->getDoctrine()->getRepository('OCUserBundle:User')->find($redacteur);
            $rapportVisites=$repo->findBySecteur($user->getUsrSecteur());
        }
        return $rapportVisites;
    }

        // GET ONE RAPPORT (VIEW)
    public function getOnerapportAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $rapportVisites = $em->getRepository('MainBundle:RapportVisite')->findOneBy(array("id"=>$id));


        return $rapportVisites;
    }

    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED)
     */
     //Creates a new rapportVisite entity POST REQUEST
    public function postRapportAction(Request $request)
    {
        $rapport=new RapportVisite();
        $form=$this->createForm(RapportVisiteType::class,$rapport);
        $form->submit($request->request->all());
        $rapEchants=$rapport->getRapEchantillons();
        foreach ($rapEchants as $rapEchant){
            $rapEchant->setRapEchantRapport($rapport);
        }
        #$date=$rapport->getRapDate();
        #$rapport->setRapDate(new \DateTime($date));
        if ($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($rapport);
            $em->flush();
            $rapportPost=new RapportVisitePost();
            $rapportPost->setRapPraticien($rapport->getRapPraticien()->getId());
            $rapportPost->setRapVisiteur($rapport->getRapVisiteur()->getId());
            $rapportPost->setRapMotif($rapport->getRapMotif()->getId());
            $rapportPost->setId($rapport->getId());
            $rapportPost->setRapBilan($rapport->getRapBilan());
            $rapportPost->setRapDate($rapport->getRapDate());
            $rapportPost->setRapCoefImpact($rapport->getRapCoefImpact());
            $rapportPost->setRapSaisieDate($rapport->getRapSaisieDate());
            foreach ($rapEchants as $rapEchant){
                $rapEchantPost=new RapportEchantPost();
                $rapEchantPost->setRapEchantMedicament($rapEchant->getRapEchantMedicament()->getId());
                $rapEchantPost->setRapEchantRapport($rapport->getId());
                $rapEchantPost->setRapEchantQuantite($rapEchant->getRapEchantQuantite());
                $rapportPost->addRapECHANTILLON($rapEchantPost);
            }
            return $rapportPost;
        }
        else return $form;
    }

    // TOTAL REPLACE RAPPORTVISITE (ID DU RAPPORT EN PARAMETRE URL)
    public function putRapportAction(Request $request){
        $rapport=$this->getDoctrine()->getRepository('MainBundle:RapportVisite')->find($request->get('id'));
        if(empty($rapport)){
            return new JsonResponse(['message'=>'Rapport introuvable'], Response::HTTP_NOT_FOUND);
        }
        $form=$this->createForm(RapportVisiteType::class,$rapport);
        $form->submit($request->request->all());
        $rapEchants=$rapport->getRapEchantillons();
        foreach ($rapEchants as $rapEchant){
            $rapEchant->setRapEchantRapport($rapport);
        }
        dump($rapport);
        if ($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->merge($rapport);
            $em->flush();
            return $rapport;
        }
        else return $form;
    }

    // PARTIAL REPLACE RAPPORTVISITE (ID DU RAPPORT EN PARAMETRE URL)
    public function patchUpdaterapportAction(Request $request){
        return $this->updateRapport($request,false);
    }

    public function deleteRapportAction(Request $request){

    }

    private function updateRapport(Request $request, $clearMissing)
    {
        $rapport=$this->getDoctrine()->getRepository('MainBundle:RapportVisite')->find($request->get('id'));
        if(empty($rapport)){
            return new JsonResponse(['message'=>'Rapport introuvable'], Response::HTTP_NOT_FOUND);
        }
        $form=$this->createForm(RapportVisiteType::class,$rapport);
        $form->submit($request->request->all(),$clearMissing);
        $rapEchants=$rapport->getRapEchantillons();
        foreach ($rapEchants as $rapEchant){
            $rapEchant->setRapEchantRapport($rapport);
        }
        if ($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($rapport);
            $em->flush();
            $rapportPost=new RapportVisitePost();
            $rapportPost->setRapPraticien($rapport->getRapPraticien()->getId());
            $rapportPost->setRapVisiteur($rapport->getRapVisiteur()->getId());
            $rapportPost->setRapMotif($rapport->getRapMotif()->getId());
            $rapportPost->setId($rapport->getId());
            $rapportPost->setRapBilan($rapport->getRapBilan());
            $rapportPost->setRapDate($rapport->getRapDate());
            $rapportPost->setRapCoefImpact($rapport->getRapCoefImpact());
            $rapportPost->setRapSaisieDate($rapport->getRapSaisieDate());
            foreach ($rapEchants as $rapEchant){
                $rapEchantPost=new RapportEchantPost();
                $rapEchantPost->setRapEchantMedicament($rapEchant->getRapEchantMedicament()->getId());
                $rapEchantPost->setRapEchantRapport($rapport->getId());
                $rapEchantPost->setRapEchantQuantite($rapEchant->getRapEchantQuantite());
                $rapportPost->addRapECHANTILLON($rapEchantPost);
            }
            return $rapportPost;
        }
        else return $form;

    }

}
