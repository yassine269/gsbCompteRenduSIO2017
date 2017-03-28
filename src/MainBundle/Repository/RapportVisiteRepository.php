<?php

namespace MainBundle\Repository;

/**
 * RapportVisiteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
use Doctrine\ORM\EntityRepository;
class RapportVisiteRepository extends EntityRepository
{
    // Requête pour statistiques annuel sur dashboard visiteur
    public function findByUserYearToNow($date,$user,$debut = 0){
        $dateExplode=explode("-",$date);
        $annee=$dateExplode[0];
        if ($debut == 0){
            $debut=$annee-1;
        }
        $query=$this->_em->createQuery(
            'SELECT rap 
              FROM MainBundle:RapportVisite rap 
              WHERE YEAR(rap.rapDate) <= :anne AND YEAR(rap.rapDate) >= :debut
              AND rap.rapVisiteur = :user'
        )->setParameters(array(
            'anne'=>$annee,
            'debut'=>$debut,
            'user' =>$user
        ));
        return $query->getResult();

    }
    // Requête pour statistiques annuel sur dashboard Delegue
    public function findByRegionYearToNow($date,$region,$debut = 0){
        $dateExplode=explode("-",$date);
        $annee=$dateExplode[0];
        if ($debut == 0){
            $debut=$annee-1;
        }
        $query=$this->_em->createQuery(
            'SELECT rap 
              FROM MainBundle:RapportVisite rap
              JOIN rap.rapVisiteur u 
              WHERE u.usrRegion = :region
              AND YEAR(rap.rapDate) <= :anne AND YEAR(rap.rapDate) >= :debut 
              '
        )->setParameters(array(
            'region' => $region,
            'anne'=>$annee,
            'debut'=>$debut,
        ));
        return $query->getResult();

    }
    // Requête pour statistiques annuel sur dashboard Responsable
    public function findBySecteurYearToNow($date,$secteur,$debut = 0){
        $dateExplode=explode("-",$date);
        $annee=$dateExplode[0];
        if ($debut == 0){
            $debut=$annee-1;
        }
        $query=$this->_em->createQuery(
            'SELECT rap 
              FROM MainBundle:RapportVisite rap
              JOIN rap.rapVisiteur u 
              WHERE u.usrSecteur = :secteur
              AND YEAR(rap.rapDate) <= :anne AND YEAR(rap.rapDate) >= :debut 
              '
        )->setParameters(array(
            'secteur' => $secteur,
            'anne'=>$annee,
            'debut'=>$debut,
        ));
        return $query->getResult();

    }


}
