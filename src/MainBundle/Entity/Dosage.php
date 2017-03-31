<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="MainBundle\Repository\DosageRepository")
 * @ORM\Table(name="Dosage")
 */
class Dosage
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $dosQuantite;

    /**
     * @ORM\Column(type="string",length=40)
     */
    private $dosUnite;



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
     * Set dosCode
     *
     * @param string $dosCode
     *
     * @return Dosage
     */
    public function setDosCode($dosCode)
    {
        $this->dosCode = $dosCode;

        return $this;
    }

    /**
     * Get dosCode
     *
     * @return string
     */
    public function getDosCode()
    {
        return $this->dosCode;
    }

    /**
     * Set dosQuantite
     *
     * @param string $dosQuantite
     *
     * @return Dosage
     */
    public function setDosQuantite($dosQuantite)
    {
        $this->dosQuantite = $dosQuantite;

        return $this;
    }

    /**
     * Get dosQuantite
     *
     * @return string
     */
    public function getDosQuantite()
    {
        return $this->dosQuantite;
    }

    /**
     * Set dosUnite
     *
     * @param string $dosUnite
     *
     * @return Dosage
     */
    public function setDosUnite($dosUnite)
    {
        $this->dosUnite = $dosUnite;

        return $this;
    }

    /**
     * Get dosUnite
     *
     * @return string
     */
    public function getDosUnite()
    {
        return $this->dosUnite;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->dosPRESCRIPTIONS = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add dosPRESCRIPTION
     *
     * @param \MainBundle\Entity\Prescrire $dosPRESCRIPTION
     *
     * @return Dosage
     */
    public function addDosPRESCRIPTION(\MainBundle\Entity\Prescrire $dosPRESCRIPTION)
    {
        $this->dosPRESCRIPTIONS[] = $dosPRESCRIPTION;

        return $this;
    }

    /**
     * Remove dosPRESCRIPTION
     *
     * @param \MainBundle\Entity\Prescrire $dosPRESCRIPTION
     */
    public function removeDosPRESCRIPTION(\MainBundle\Entity\Prescrire $dosPRESCRIPTION)
    {
        $this->dosPRESCRIPTIONS->removeElement($dosPRESCRIPTION);
    }

    /**
     * Get dosPRESCRIPTIONS
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDosPRESCRIPTIONS()
    {
        return $this->dosPRESCRIPTIONS;
    }
}
