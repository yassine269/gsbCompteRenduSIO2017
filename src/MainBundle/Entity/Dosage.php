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
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $dosCODE;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $dosQUANTITE;

    /**
     * @ORM\Column(type="string",length=40)
     */
    private $dosUNITE;



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
     * Set dosCODE
     *
     * @param string $dosCODE
     *
     * @return Dosage
     */
    public function setDosCODE($dosCODE)
    {
        $this->dosCODE = $dosCODE;

        return $this;
    }

    /**
     * Get dosCODE
     *
     * @return string
     */
    public function getDosCODE()
    {
        return $this->dosCODE;
    }

    /**
     * Set dosQUANTITE
     *
     * @param string $dosQUANTITE
     *
     * @return Dosage
     */
    public function setDosQUANTITE($dosQUANTITE)
    {
        $this->dosQUANTITE = $dosQUANTITE;

        return $this;
    }

    /**
     * Get dosQUANTITE
     *
     * @return string
     */
    public function getDosQUANTITE()
    {
        return $this->dosQUANTITE;
    }

    /**
     * Set dosUNITE
     *
     * @param string $dosUNITE
     *
     * @return Dosage
     */
    public function setDosUNITE($dosUNITE)
    {
        $this->dosUNITE = $dosUNITE;

        return $this;
    }

    /**
     * Get dosUNITE
     *
     * @return string
     */
    public function getDosUNITE()
    {
        return $this->dosUNITE;
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
