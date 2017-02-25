<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="RapportVisite")
 */
class RapportVisite
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
    private $rapVISITEUR;

    /**
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Praticien")
     */
    private $rapPRATICIEN;

    /**
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Motif")
     */
    private $rapMOTIF;
    /**
     * @ORM\Column(type="date")
     */
    private $rapDATE;

    /**
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")

     */
    private $rapNUM;
    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $rapSAISIEDATE = NULL;

    /**
     * @ORM\Column(type="string", length=500)

     */
    private $rapBILAN;
    /**
     * @ORM\Column(type="integer")
     */
    private $rapCOEFIMPACT;


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
     * Set acLIEU
     *
     * @param string $acLIEU
     *
     * @return ActCompl
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
     * @return ActCompl
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
     * @return ActCompl
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
     * Add acPRATICIEN
     *
     * @param \MainBundle\Entity\Praticien $acPRATICIEN
     *
     * @return ActCompl
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
     * Set rapDATE
     *
     * @param \Date $rapDATE
     *
     * @return RapportVisite
     */
    public function setRapDATE(\Date $rapDATE)
    {
        $this->rapDATE = $rapDATE;

        return $this;
    }

    /**
     * Get rapDATE
     *
     * @return \Date
     */
    public function getRapDATE()
    {
        return $this->rapDATE;
    }

    /**
     * Set rapNUM
     *
     * @param integer $rapNUM
     *
     * @return RapportVisite
     */
    public function setRapNUM($rapNUM)
    {
        $this->rapNUM = $rapNUM;

        return $this;
    }

    /**
     * Get rapNUM
     *
     * @return integer
     */
    public function getRapNUM()
    {
        return $this->rapNUM;
    }

    /**
     * Set rapSAISIEDATE
     *
     * @param \Date $rapSAISIEDATE
     *
     * @return RapportVisite
     */
    public function setRapSAISIEDATE(\Date $rapSAISIEDATE)
    {
        $this->rapSAISIEDATE = $rapSAISIEDATE;

        return $this;
    }

    /**
     * Get rapSAISIEDATE
     *
     * @return \Date
     */
    public function getRapSAISIEDATE()
    {
        return $this->rapSAISIEDATE;
    }

    /**
     * Set rapBILAN
     *
     * @param string $rapBILAN
     *
     * @return RapportVisite
     */
    public function setRapBILAN($rapBILAN)
    {
        $this->rapBILAN = $rapBILAN;

        return $this;
    }

    /**
     * Get rapBILAN
     *
     * @return string
     */
    public function getRapBILAN()
    {
        return $this->rapBILAN;
    }

    /**
     * Set rapCOEFIMPACT
     *
     * @param integer $rapCOEFIMPACT
     *
     * @return RapportVisite
     */
    public function setRapCOEFIMPACT($rapCOEFIMPACT)
    {
        $this->rapCOEFIMPACT = $rapCOEFIMPACT;

        return $this;
    }

    /**
     * Get rapCOEFIMPACT
     *
     * @return integer
     */
    public function getRapCOEFIMPACT()
    {
        return $this->rapCOEFIMPACT;
    }

    /**
     * Set rapVISITEUR
     *
     * @param \OCUserBundle\Entity\User $rapVISITEUR
     *
     * @return RapportVisite
     */
    public function setRapVISITEUR(\OCUserBundle\Entity\User $rapVISITEUR = null)
    {
        $this->rapVISITEUR = $rapVISITEUR;

        return $this;
    }

    /**
     * Get rapVISITEUR
     *
     * @return \OCUserBundle\Entity\User
     */
    public function getRapVISITEUR()
    {
        return $this->rapVISITEUR;
    }

    /**
     * Set rapPRATICIEN
     *
     * @param \MainBundle\Entity\Praticien $rapPRATICIEN
     *
     * @return RapportVisite
     */
    public function setRapPRATICIEN(\MainBundle\Entity\Praticien $rapPRATICIEN = null)
    {
        $this->rapPRATICIEN = $rapPRATICIEN;

        return $this;
    }

    /**
     * Get rapPRATICIEN
     *
     * @return \MainBundle\Entity\Praticien
     */
    public function getRapPRATICIEN()
    {
        return $this->rapPRATICIEN;
    }

    /**
     * Set rapMOTIF
     *
     * @param \MainBundle\Entity\Motif $rapMOTIF
     *
     * @return RapportVisite
     */
    public function setRapMOTIF(\MainBundle\Entity\Motif $rapMOTIF = null)
    {
        $this->rapMOTIF = $rapMOTIF;

        return $this;
    }

    /**
     * Get rapMOTIF
     *
     * @return \MainBundle\Entity\Motif
     */
    public function getRapMOTIF()
    {
        return $this->rapMOTIF;
    }
}
