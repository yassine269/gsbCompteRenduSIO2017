<?php

namespace ApiBundle\Object;
/**
 * Created by PhpStorm.
 * User: TI-tygangsta
 * Date: 22/04/2017
 * Time: 16:55
 */
class RapportVisitePost
{
    private $id;

    /**
     * @JMS\Type("ArrayCollection<MainBundle\Entity\RapportEchant>")
     */
    private $rapEchantillons;

    private $rapVisiteur;

    private $rapPraticien;

    private $rapMotif;

    private $rapDate;

    private $rapSaisieDate = NULL;

    private $rapBilan;

    private $rapCoefImpact;

}