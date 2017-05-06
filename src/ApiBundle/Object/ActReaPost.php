<?php
/**
 * Created by PhpStorm.
 * User: TI-tygangsta
 * Date: 06/05/2017
 * Time: 15:52
 */

namespace ApiBundle\Object;


class ActReaPost
{
    private $id;
    private $actReaVisiteur;
    private $actReaActCompl;
    private $actReaBudget;

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
    public function getActReaVisiteur()
    {
        return $this->actReaVisiteur;
    }

    /**
     * @param mixed $actReaVisiteur
     */
    public function setActReaVisiteur($actReaVisiteur)
    {
        $this->actReaVisiteur = $actReaVisiteur;
    }

    /**
     * @return mixed
     */
    public function getActReaActCompl()
    {
        return $this->actReaActCompl;
    }

    /**
     * @param mixed $actReaActCompl
     */
    public function setActReaActCompl($actReaActCompl)
    {
        $this->actReaActCompl = $actReaActCompl;
    }

    /**
     * @return mixed
     */
    public function getActReaBudget()
    {
        return $this->actReaBudget;
    }

    /**
     * @param mixed $actReaBudget
     */
    public function setActReaBudget($actReaBudget)
    {
        $this->actReaBudget = $actReaBudget;
    }



}