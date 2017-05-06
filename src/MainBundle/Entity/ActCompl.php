<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;



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
     * @JMS\Type("ArrayCollection<MainBundle\Entity\ActRea>")
     */
    private $acActReal;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $acStates;

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
     * Constructor
     */
    public function __construct()
    {
        $this->acPraticien = new \Doctrine\Common\Collections\ArrayCollection();
        $this->acActReal = new \Doctrine\Common\Collections\ArrayCollection();

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
     * @param \MainBundle\Entity\Praticien $acPraticien
     *
     * @return ActCompl
     */
    public function addAcPraticien(\MainBundle\Entity\Praticien $acPraticien)
    {
        $this->acPraticien[] = $acPraticien;

        return $this;
    }

    /**
     * Remove acPraticien
     *
     * @param \MainBundle\Entity\Praticien $acPraticien
     */
    public function removeAcPraticien(\MainBundle\Entity\Praticien $acPraticien)
    {
        $this->acPraticien->removeElement($acPraticien);
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
     * Add acActReal
     *
     * @param \MainBundle\Entity\ActRea $acActReal
     *
     * @return ActCompl
     */
    public function addAcActReal(\MainBundle\Entity\ActRea $acActReal)
    {
        $this->acActReal[] = $acActReal;

        return $this;
    }

    /**
     * Remove acActReal
     *
     * @param \MainBundle\Entity\ActRea $acActReal
     */
    public function removeAcActReal(\MainBundle\Entity\ActRea $acActReal)
    {
        $this->acActReal->removeElement($acActReal);
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
     * Set acStates
     *
     * @param string $acStates
     *
     * @return ActCompl
     */
    public function setAcStates($acStates)
    {
        $this->acStates = $acStates;

        return $this;
    }

    /**
     * Get acStates
     *
     * @return string
     */
    public function getAcStates()
    {
        return $this->acStates;
    }
    public function __toString()
    {
        return (string) $this->getId();
    }
}