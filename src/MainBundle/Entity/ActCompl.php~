<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
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
    private $acLIEU;
    /**
     * @ORM\Column(type="date")
     */
    private $acDATE;
    /**
     * @ORM\Column(type="string", length=40)
     */
    private $acTHEME;

    /**
     * @ORM\ManyToMany(targetEntity="MainBundle\Entity\Praticien")
     */
    private $acPRATICIEN;

    /**
     * @ORM\OneToMany(targetEntity="MainBundle\Entity\ActRea", mappedBy="actreaACTCOMPL", cascade={"persist"})
     */
    private $acACTREAS;

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
        $this->acACTREAS = new \Doctrine\Common\Collections\ArrayCollection();

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
     * @param $acDATE
     *
     * @return ActCompl
     */
    public function setAcDATE($acDATE)
    {
        $this->acDATE = $acDATE;

        return $this;
    }

    /**
     * Get acDATE

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
     * Add acACTREA
     *
     * @param \MainBundle\Entity\ActRea $acACTREA
     *
     * @return ActCompl
     */
    public function addAcACTREA(\MainBundle\Entity\ActRea $acACTREA)
    {
        $this->acACTREAS[] = $acACTREA;

        return $this;
    }

    /**
     * Remove acACTREA
     *
     * @param \MainBundle\Entity\ActRea $acACTREA
     */
    public function removeAcACTREA(\MainBundle\Entity\ActRea $acACTREA)
    {
        $this->acACTREAS->removeElement($acACTREA);
    }

    /**
     * Get acACTREAS
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAcACTREAS()
    {
        return $this->acACTREAS;
    }
}
