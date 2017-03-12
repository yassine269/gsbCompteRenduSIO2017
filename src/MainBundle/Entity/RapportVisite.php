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
     * @ORM\OneToMany(targetEntity="MainBundle\Entity\RapportEchant", mappedBy="rapEchantRAPPORT", cascade={ "persist", "remove"}, orphanRemoval=true)
     */
    private $rapECHANTILLONS;
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
     * Set rapDATE
     *
     * @param \DateTime $rapDATE
     *
     * @return RapportVisite
     */
    public function setRapDATE($rapDATE)
    {
        $this->rapDATE = $rapDATE;

        return $this;
    }

    /**
     * Get rapDATE
     *
     * @return \DateTime
     */
    public function getRapDATE()
    {
        return $this->rapDATE;
    }

    /**
     * Set rapSAISIEDATE
     *
     * @param \DateTime $rapSAISIEDATE
     *
     * @return RapportVisite
     */
    public function setRapSAISIEDATE($rapSAISIEDATE)
    {
        $this->rapSAISIEDATE = $rapSAISIEDATE;

        return $this;
    }

    /**
     * Get rapSAISIEDATE
     *
     * @return \DateTime
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->rapECHANTILLONS = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add rapECHANTILLON
     *
     * @param \MainBundle\Entity\RapportEchant $rapECHANTILLON
     *
     * @return RapportVisite
     */
    public function addRapECHANTILLON(\MainBundle\Entity\RapportEchant $rapECHANTILLON)
    {
        $this->rapECHANTILLONS[] = $rapECHANTILLON;

        return $this;
    }

    /**
     * Remove rapECHANTILLON
     *
     * @param \MainBundle\Entity\RapportEchant $rapECHANTILLON
     */
    public function removeRapECHANTILLON(\MainBundle\Entity\RapportEchant $rapECHANTILLON)
    {
        $this->rapECHANTILLONS->removeElement($rapECHANTILLON);
    }

    /**
     * Get rapECHANTILLONS
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRapECHANTILLONS()
    {
        return $this->rapECHANTILLONS;
    }
}
