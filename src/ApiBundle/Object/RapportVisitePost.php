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

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getRapEchantillons()
    {
        return $this->rapEchantillons;
    }

    /**
     * @param mixed $rapEchantillons
     */
    public function setRapEchantillons($rapEchantillons)
    {
        $this->rapEchantillons = $rapEchantillons;
    }

    /**
     * @return mixed
     */
    public function getRapVisiteur()
    {
        return $this->rapVisiteur;
    }

    /**
     * @param mixed $rapVisiteur
     */
    public function setRapVisiteur($rapVisiteur)
    {
        $this->rapVisiteur = $rapVisiteur;
    }

    /**
     * @return mixed
     */
    public function getRapPraticien()
    {
        return $this->rapPraticien;
    }

    /**
     * @param mixed $rapPraticien
     */
    public function setRapPraticien($rapPraticien)
    {
        $this->rapPraticien = $rapPraticien;
    }

    /**
     * @return mixed
     */
    public function getRapMotif()
    {
        return $this->rapMotif;
    }

    /**
     * @param mixed $rapMotif
     */
    public function setRapMotif($rapMotif)
    {
        $this->rapMotif = $rapMotif;
    }

    /**
     * @return mixed
     */
    public function getRapDate()
    {
        return $this->rapDate;
    }

    /**
     * @param mixed $rapDate
     */
    public function setRapDate($rapDate)
    {
        $this->rapDate = $rapDate;
    }

    /**
     * @return null
     */
    public function getRapSaisieDate()
    {
        return $this->rapSaisieDate;
    }

    /**
     * @param null $rapSaisieDate
     */
    public function setRapSaisieDate($rapSaisieDate)
    {
        $this->rapSaisieDate = $rapSaisieDate;
    }

    /**
     * @return mixed
     */
    public function getRapBilan()
    {
        return $this->rapBilan;
    }

    /**
     * @param mixed $rapBilan
     */
    public function setRapBilan($rapBilan)
    {
        $this->rapBilan = $rapBilan;
    }

    /**
     * @return mixed
     */
    public function getRapCoefImpact()
    {
        return $this->rapCoefImpact;
    }

    /**
     * @param mixed $rapCoefImpact
     */
    public function setRapCoefImpact($rapCoefImpact)
    {
        $this->rapCoefImpact = $rapCoefImpact;
    }

    private $rapDate;

    private $rapSaisieDate = NULL;

    private $rapBilan;

    private $rapCoefImpact;

}