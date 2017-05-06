<?php
/**
 * Created by PhpStorm.
 * User: TI-tygangsta
 * Date: 06/05/2017
 * Time: 15:50
 */

namespace ApiBundle\Object;


class ActComplPost
{
    private $id;
    private $acLieu;
    private $acDate;
    private $acTheme;
    private $acPraticien;
    private $acActReal;
    private $acStates;

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
    public function getAcLieu()
    {
        return $this->acLieu;
    }

    /**
     * @param mixed $acLieu
     */
    public function setAcLieu($acLieu)
    {
        $this->acLieu = $acLieu;
    }

    /**
     * @return mixed
     */
    public function getAcDate()
    {
        return $this->acDate;
    }

    /**
     * @param mixed $acDate
     */
    public function setAcDate($acDate)
    {
        $this->acDate = $acDate;
    }

    /**
     * @return mixed
     */
    public function getAcTheme()
    {
        return $this->acTheme;
    }

    /**
     * @param mixed $acTheme
     */
    public function setAcTheme($acTheme)
    {
        $this->acTheme = $acTheme;
    }


    public function addAcPraticien( $acPraticien)
    {
        $this->acPraticien[] = $acPraticien;

        return $this;
    }


    public function removeAcPraticien( $acPraticien)
    {
        $this->acPraticien->removeElement($acPraticien);
    }


    public function getAcPraticien()
    {
        return $this->acPraticien;
    }

    public function addAcActReal($acActReal)
    {
        $this->acActReal[] = $acActReal;

        return $this;
    }


    public function removeAcActReal($acActReal)
    {
        $this->acActReal->removeElement($acActReal);
    }

    public function getAcActReal()
    {
        return $this->acActReal;
    }
    /**
     * @return mixed
     */
    public function getAcStates()
    {
        return $this->acStates;
    }

    /**
     * @param mixed $acStates
     */
    public function setAcStates($acStates)
    {
        $this->acStates = $acStates;
    }



}