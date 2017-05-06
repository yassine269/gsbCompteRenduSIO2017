<?php

namespace ApiBundle\Object;
/**
 * Created by PhpStorm.
 * User: TI-tygangsta
 * Date: 22/04/2017
 * Time: 16:55
 */
class RapportEchantPost
{
    private $id;

    private $rapEchantRapport;

    private $rapEchantMedicament;

    private $rapEchantQuantite;

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
    public function getRapEchantRapport()
    {
        return $this->rapEchantRapport;
    }

    /**
     * @param mixed $rapEchantRapport
     */
    public function setRapEchantRapport($rapEchantRapport)
    {
        $this->rapEchantRapport = $rapEchantRapport;
    }

    /**
     * @return mixed
     */
    public function getRapEchantMedicament()
    {
        return $this->rapEchantMedicament;
    }

    /**
     * @param mixed $rapEchantMedicament
     */
    public function setRapEchantMedicament($rapEchantMedicament)
    {
        $this->rapEchantMedicament = $rapEchantMedicament;
    }

    /**
     * @return mixed
     */
    public function getRapEchantQuantite()
    {
        return $this->rapEchantQuantite;
    }

    /**
     * @param mixed $rapEchantQuantite
     */
    public function setRapEchantQuantite($rapEchantQuantite)
    {
        $this->rapEchantQuantite = $rapEchantQuantite;
    }

}