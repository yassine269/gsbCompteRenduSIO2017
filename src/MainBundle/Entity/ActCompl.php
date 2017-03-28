<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="MainBundle\Repository\ActComplRepository")
 * @ORM\Table(name="ActCompl")
 */
class ActCompl
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string",length=40)
     */
    private $acLieu;
    /**
     * @ORM\Column(type="date")
     */
    private $acDate;
    /**
     * @ORM\Column(type="string", length=40)
     */
    private $acTheme;

    /**
     * @ORM\ManyToMany(targetEntity="MainBundle\Entity\Praticien")
     */
    private $acPraticien;

    /**
     * @ORM\OneToMany(targetEntity="MainBundle\Entity\ActRea", mappedBy="actReaActCompl", cascade={"persist"})
     */
    private $acActReal;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $states;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set compCode
     *
     * @param string $compCODE
     *
     * @return Composant
     */
    public function setCompCODE($compCODE)
    {
        $this->compCODE = $compCODE;

        return $this;
    }

    /**
     * Get compCode
     *
     * @return string
     */
    public function getCompCODE()
    {
        return $this->compCODE;
    }

    /**
     * Set compLibelle
     *
     * @param string $compLIBELLE
     *
     * @return Composant
     */
    public function setCompLIBELLE($compLIBELLE)
    {
        $this->compLIBELLE = $compLIBELLE;

        return $this;
    }

    /**
     * Get compLibelle
     *
     * @return string
     */
    public function getCompLIBELLE()
    {
        return $this->compLIBELLE;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->acPraticien = new \Doctrine\Common\Collections\ArrayCollection();
        $this->acActReal = new \Doctrine\Common\Collections\ArrayCollection();

    }

    /**
     * Set acNUM
     *
     * @param string $acNUM
     *
     * @return ActCompl
     */
    public function setAcNUM($acNUM)
    {
        $this->acNUM = $acNUM;

        return $this;
    }

    /**
     * Get acNUM
     *
     * @return string
     */
    public function getAcNUM()
    {
        return $this->acNUM;
    }

    /**
     * Set acLieu
     *
     * @param string $acLieu
     *
     * @return ActCompl
     */
    public function setAcLieu($acLieu)
    {
        $this->acLieu = $acLieu;

        return $this;
    }

    /**
     * Get acLieu
     *
     * @return string
     */
    public function getAcLieu()
    {
        return $this->acLieu;
    }

    /**
     * Set acDate
     *
     * @param $acDate
     *
     * @return ActCompl
     */
    public function setAcDate($acDate)
    {
        $this->acDate = $acDate;

        return $this;
    }

    /**
     * Get acDate

     */
    public function getAcDate()
    {
        return $this->acDate;
    }

    /**
     * Set acTheme
     *
     * @param string $acTheme
     *
     * @return ActCompl
     */
    public function setAcTheme($acTheme)
    {
        $this->acTheme = $acTheme;

        return $this;
    }

    /**
     * Get acTheme
     *
     * @return string
     */
    public function getAcTheme()
    {
        return $this->acTheme;
    }

    /**
     * Add acPraticien
     *
     * @param \MainBundle\Entity\Praticien $acPRATICIEN
     *
     * @return ActCompl
     */
    public function addAcPRATICIEN(\MainBundle\Entity\Praticien $acPRATICIEN)
    {
        $this->acPraticien[] = $acPRATICIEN;

        return $this;
    }

    /**
     * Remove acPraticien
     *
     * @param \MainBundle\Entity\Praticien $acPRATICIEN
     */
    public function removeAcPRATICIEN(\MainBundle\Entity\Praticien $acPRATICIEN)
    {
        $this->acPraticien->removeElement($acPRATICIEN);
    }

    /**
     * Get acPraticien
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAcPraticien()
    {
        return $this->acPraticien;
    }

    /**
     * Add acACTREA
     *
     * @param \MainBundle\Entity\ActRea $acACTREA
     *
     * @return ActCompl
     */
    public function addAcACTREA(\MainBundle\Entity\ActRea $acACTREA)
    {
        $this->acActReal[] = $acACTREA;

        return $this;
    }

    /**
     * Remove acACTREA
     *
     * @param \MainBundle\Entity\ActRea $acACTREA
     */
    public function removeAcACTREA(\MainBundle\Entity\ActRea $acACTREA)
    {
        $this->acActReal->removeElement($acACTREA);
    }

    /**
     * Get acActReal
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAcActReal()
    {
        return $this->acActReal;
    }

    /**
     * Set states
     *
     * @param string $states
     *
     * @return ActCompl
     */
    public function setStates($states)
    {
        $this->states = $states;

        return $this;
    }

    /**
     * Get states
     *
     * @return string
     */
    public function getStates()
    {
        return $this->states;
    }
}
