<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="MainBundle\Repository\ActReaRepository")
 * @ORM\Table(name="ActRea")
 */
class ActRea
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="OCUserBundle\Entity\User")
     */
    private $actReaVisiteur;

    /**
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\ActCompl", inversedBy="acActReal")
     */
    private $actReaActCompl;

    /**
     * @ORM\Column(type="decimal", scale=3)
     */
    private $actReaBudget;


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
        $this->acPRATICIEN = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set acLieu
     *
     * @param string $acLIEU
     *
     * @return ActRea
     */
    public function setAcLIEU($acLIEU)
    {
        $this->acLIEU = $acLIEU;

        return $this;
    }

    /**
     * Get acLieu
     *
     * @return string
     */
    public function getAcLIEU()
    {
        return $this->acLIEU;
    }


    /**
     * Set acTheme
     *
     * @param string $acTHEME
     *
     * @return ActRea
     */
    public function setAcTHEME($acTHEME)
    {
        $this->acTHEME = $acTHEME;

        return $this;
    }

    /**
     * Get acTheme
     *
     * @return string
     */
    public function getAcTHEME()
    {
        return $this->acTHEME;
    }

    /**
     * Set actReaVisiteur
     *
     * @param \OCUserBundle\Entity\User $actReaVisiteur
     *
     * @return ActRea
     */
    public function setActReaVisiteur(\OCUserBundle\Entity\User $actReaVisiteur = null)
    {
        $this->actReaVisiteur = $actReaVisiteur;

        return $this;
    }

    /**
     * Get actReaVisiteur
     *
     * @return \OCUserBundle\Entity\User
     */
    public function getActReaVisiteur()
    {
        return $this->actReaVisiteur;
    }

    /**
     * Set actReaActCompl
     *
     * @param \MainBundle\Entity\ActCompl $actReaActCompl
     *
     * @return ActRea
     */
    public function setActReaActCompl(\MainBundle\Entity\ActCompl $actReaActCompl = null)
    {
        $this->actReaActCompl = $actReaActCompl;

        return $this;
    }

    /**
     * Get actReaActCompl
     *
     * @return \MainBundle\Entity\ActCompl
     */
    public function getActReaActCompl()
    {
        return $this->actReaActCompl;
    }

    /**
     * Add acPraticien
     *
     * @param \MainBundle\Entity\Praticien $acPRATICIEN
     *
     * @return ActRea
     */
    public function addAcPRATICIEN(\MainBundle\Entity\Praticien $acPRATICIEN)
    {
        $this->acPRATICIEN[] = $acPRATICIEN;

        return $this;
    }

    /**
     * Remove acPraticien
     *
     * @param \MainBundle\Entity\Praticien $acPRATICIEN
     */
    public function removeAcPRATICIEN(\MainBundle\Entity\Praticien $acPRATICIEN)
    {
        $this->acPRATICIEN->removeElement($acPRATICIEN);
    }

    /**
     * Get acPraticien
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAcPRATICIEN()
    {
        return $this->acPRATICIEN;
    }

    /**
     * Set actReaBudget
     *
     * @param string $actReaBudget
     *
     * @return ActRea
     */
    public function setActReaBudget($actReaBudget)
    {
        $this->actReaBudget = $actReaBudget;

        return $this;
    }

    /**
     * Get actReaBudget
     *
     * @return string
     */
    public function getActReaBudget()
    {
        return $this->actReaBudget;
    }
}
