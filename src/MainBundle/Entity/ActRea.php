<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
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
    private $actreaVISITEUR;

    /**
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\ActCompl")
     */
    private $actreaACTCOMPL;

    /**
     * @ORM\Column(type="string",length=40)
     */
    private $actreaBUDGET;


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
     * Set compCODE
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
     * Get compCODE
     *
     * @return string
     */
    public function getCompCODE()
    {
        return $this->compCODE;
    }

    /**
     * Set compLIBELLE
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
     * Get compLIBELLE
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
     * Set acLIEU
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
     * Get acLIEU
     *
     * @return string
     */
    public function getAcLIEU()
    {
        return $this->acLIEU;
    }

    /**
     * Set acDATE
     *
     * @param \Date $acDATE
     *
     * @return ActRea
     */
    public function setAcDATE(\Date $acDATE)
    {
        $this->acDATE = $acDATE;

        return $this;
    }

    /**
     * Get acDATE
     *
     * @return \Date
     */
    public function getAcDATE()
    {
        return $this->acDATE;
    }

    /**
     * Set acTHEME
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
     * Get acTHEME
     *
     * @return string
     */
    public function getAcTHEME()
    {
        return $this->acTHEME;
    }

    /**
     * Set actreaVISITEUR
     *
     * @param \OCUserBundle\Entity\User $actreaVISITEUR
     *
     * @return ActRea
     */
    public function setActreaVISITEUR(\OCUserBundle\Entity\User $actreaVISITEUR = null)
    {
        $this->actreaVISITEUR = $actreaVISITEUR;

        return $this;
    }

    /**
     * Get actreaVISITEUR
     *
     * @return \OCUserBundle\Entity\User
     */
    public function getActreaVISITEUR()
    {
        return $this->actreaVISITEUR;
    }

    /**
     * Set actreaACTCOMPL
     *
     * @param \MainBundle\Entity\ActCompl $actreaACTCOMPL
     *
     * @return ActRea
     */
    public function setActreaACTCOMPL(\MainBundle\Entity\ActCompl $actreaACTCOMPL = null)
    {
        $this->actreaACTCOMPL = $actreaACTCOMPL;

        return $this;
    }

    /**
     * Get actreaACTCOMPL
     *
     * @return \MainBundle\Entity\ActCompl
     */
    public function getActreaACTCOMPL()
    {
        return $this->actreaACTCOMPL;
    }

    /**
     * Add acPRATICIEN
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
     * Remove acPRATICIEN
     *
     * @param \MainBundle\Entity\Praticien $acPRATICIEN
     */
    public function removeAcPRATICIEN(\MainBundle\Entity\Praticien $acPRATICIEN)
    {
        $this->acPRATICIEN->removeElement($acPRATICIEN);
    }

    /**
     * Get acPRATICIEN
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAcPRATICIEN()
    {
        return $this->acPRATICIEN;
    }

    /**
     * Set actreaBUDGET
     *
     * @param string $actreaBUDGET
     *
     * @return ActRea
     */
    public function setActreaBUDGET($actreaBUDGET)
    {
        $this->actreaBUDGET = $actreaBUDGET;

        return $this;
    }

    /**
     * Get actreaBUDGET
     *
     * @return string
     */
    public function getActreaBUDGET()
    {
        return $this->actreaBUDGET;
    }
}
