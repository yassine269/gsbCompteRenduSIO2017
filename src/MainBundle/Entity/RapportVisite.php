<?php

namespace MainBundle\Entity;

use Doctrine\DBAL\Types\DateType;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;




/**
 * @ORM\Entity(repositoryClass="MainBundle\Repository\RapportVisiteRepository")
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
     * @ORM\OneToMany(targetEntity="MainBundle\Entity\RapportEchant", mappedBy="rapEchantRapport", cascade={ "persist", "remove"}, orphanRemoval=true)
     * @JMS\Type("ArrayCollection<MainBundle\Entity\RapportEchant>")
     */
    private $rapEchantillons;
    /**
     * @ORM\ManyToOne(targetEntity="OCUserBundle\Entity\User")
     */
    private $rapVisiteur;

    /**
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Praticien")
     */
    private $rapPraticien;

    /**
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Motif")
     */
    private $rapMotif;
    /**
     * @ORM\Column(type="date")
     */
    private $rapDate;
    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $rapSaisieDate = NULL;

    /**
     * @ORM\Column(type="string", length=500)

     */
    private $rapBilan;
    /**
     * @ORM\Column(type="integer")
     */
    private $rapCoefImpact;



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
     * Set rapDate
     *
     * @param DateType $rapDate
     *
     * @return RapportVisite
     */
    public function setRapDate($rapDate)
    {
        $this->rapDate = $rapDate;

        return $this;
    }

    /**
     * Get rapDate
     *
     * @return DateType
     */
    public function getRapDate()
    {
        return $this->rapDate;
    }

    /**
     * Set rapSaisieDate
     *
     * @param \DateTime $rapSaisieDate
     *
     * @return RapportVisite
     */
    public function setRapSaisieDate($rapSaisieDate)
    {
        $this->rapSaisieDate = $rapSaisieDate;

        return $this;
    }

    /**
     * Get rapSaisieDate
     *
     * @return \DateTime
     */
    public function getRapSaisieDate()
    {
        return $this->rapSaisieDate;
    }

    /**
     * Set rapBilan
     *
     * @param string $rapBilan
     *
     * @return RapportVisite
     */
    public function setRapBilan($rapBilan)
    {
        $this->rapBilan = $rapBilan;

        return $this;
    }

    /**
     * Get rapBilan
     *
     * @return string
     */
    public function getRapBilan()
    {
        return $this->rapBilan;
    }

    /**
     * Set rapCoefImpact
     *
     * @param integer $rapCoefImpact
     *
     * @return RapportVisite
     */
    public function setRapCoefImpact($rapCoefImpact)
    {
        $this->rapCoefImpact = $rapCoefImpact;

        return $this;
    }

    /**
     * Get rapCoefImpact
     *
     * @return integer
     */
    public function getRapCoefImpact()
    {
        return $this->rapCoefImpact;
    }

    /**
     * Set rapVisiteur
     *
     * @param \OCUserBundle\Entity\User $rapVisiteur
     *
     * @return RapportVisite
     */
    public function setRapVisiteur(\OCUserBundle\Entity\User $rapVisiteur = null)
    {
        $this->rapVisiteur = $rapVisiteur;

        return $this;
    }

    /**
     * Get rapVisiteur
     *
     * @return \OCUserBundle\Entity\User
     */
    public function getRapVisiteur()
    {
        return $this->rapVisiteur;
    }

    /**
     * Set rapPraticien
     *
     * @param \MainBundle\Entity\Praticien $rapPraticien
     *
     * @return RapportVisite
     */
    public function setRapPraticien(\MainBundle\Entity\Praticien $rapPraticien = null)
    {
        $this->rapPraticien = $rapPraticien;

        return $this;
    }

    /**
     * Get rapPraticien
     *
     * @return \MainBundle\Entity\Praticien
     */
    public function getRapPraticien()
    {
        return $this->rapPraticien;
    }

    /**
     * Set rapMotif
     *
     * @param \MainBundle\Entity\Motif $rapMotif
     *
     * @return RapportVisite
     */
    public function setRapMotif(\MainBundle\Entity\Motif $rapMotif = null)
    {
        $this->rapMotif = $rapMotif;

        return $this;
    }

    /**
     * Get rapMotif
     *
     * @return \MainBundle\Entity\Motif
     */
    public function getRapMotif()
    {
        return $this->rapMotif;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->rapEchantillons = new \Doctrine\Common\Collections\ArrayCollection();
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
        $this->rapEchantillons[] = $rapECHANTILLON;

        return $this;
    }

    /**
     * Remove rapECHANTILLON
     *
     * @param \MainBundle\Entity\RapportEchant $rapECHANTILLON
     */
    public function removeRapECHANTILLON(\MainBundle\Entity\RapportEchant $rapECHANTILLON)
    {
        $this->rapEchantillons->removeElement($rapECHANTILLON);
    }

    /**
     * Get rapEchantillons
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRapEchantillons()
    {
        return $this->rapEchantillons;
    }
    public function __toString()
{
    return (string)$this->getId();
}
}
