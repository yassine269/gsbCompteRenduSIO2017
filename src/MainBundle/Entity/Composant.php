<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="MainBundle\Repository\ComposantRepository")
 * @ORM\Table(name="Composant")
 */
class Composant
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
    private $compLibelle;

    /**
     * @ORM\OneToMany(targetEntity="MainBundle\Entity\MedConstitution", mappedBy="constComposant",cascade={"all"}))
     */
    private $medCompositions;

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
     * @param string $compCode
     *
     * @return Composant
     */
    public function setCompCode($compCode)
    {
        $this->compCode = $compCode;

        return $this;
    }

    /**
     * Get compCode
     *
     * @return string
     */
    public function getCompCode()
    {
        return $this->compCode;
    }

    /**
     * Set compLibelle
     *
     * @param string $compLibelle
     *
     * @return Composant
     */
    public function setCompLibelle($compLibelle)
    {
        $this->compLibelle = $compLibelle;

        return $this;
    }

    /**
     * Get compLibelle
     *
     * @return string
     */
    public function getCompLibelle()
    {
        return $this->compLibelle;
    }
    public function __construct()
    {

        $this->compMEDCONST = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add compMEDCONST
     *
     * @param \MainBundle\Entity\MedConstitution $compMEDCONST
     *
     * @return Composant
     */
    public function addCompMEDCONST(\MainBundle\Entity\MedConstitution $compMEDCONST)
    {
        $this->compMEDCONST[] = $compMEDCONST;

        return $this;
    }

    /**
     * Remove compMEDCONST
     *
     * @param \MainBundle\Entity\MedConstitution $compMEDCONST
     */
    public function removeCompMEDCONST(\MainBundle\Entity\MedConstitution $compMEDCONST)
    {
        $this->compMEDCONST->removeElement($compMEDCONST);
    }

    /**
     * Get compMEDCONST
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCompMEDCONST()
    {
        return $this->compMEDCONST;
    }

    /**
     * Add medCONSTITUTION
     *
     * @param \MainBundle\Entity\MedConstitution $medCONSTITUTION
     *
     * @return Composant
     */
    public function addMedCONSTITUTION(\MainBundle\Entity\MedConstitution $medCONSTITUTION)
    {
        $this->medCONSTITUTIONS[] = $medCONSTITUTION;

        return $this;
    }

    /**
     * Remove medCONSTITUTION
     *
     * @param \MainBundle\Entity\MedConstitution $medCONSTITUTION
     */
    public function removeMedCONSTITUTION(\MainBundle\Entity\MedConstitution $medCONSTITUTION)
    {
        $this->medCONSTITUTIONS->removeElement($medCONSTITUTION);
    }

    /**
     * Get medCONSTITUTIONS
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMedCONSTITUTIONS()
    {
        return $this->medCONSTITUTIONS;
    }

    /**
     * Add medCOMPOSITION
     *
     * @param \MainBundle\Entity\MedConstitution $medCOMPOSITION
     *
     * @return Composant
     */
    public function addMedCOMPOSITION(\MainBundle\Entity\MedConstitution $medCOMPOSITION)
    {
        $this->medCompositions[] = $medCOMPOSITION;

        return $this;
    }

    /**
     * Remove medCOMPOSITION
     *
     * @param \MainBundle\Entity\MedConstitution $medCOMPOSITION
     */
    public function removeMedCOMPOSITION(\MainBundle\Entity\MedConstitution $medCOMPOSITION)
    {
        $this->medCompositions->removeElement($medCOMPOSITION);
    }

    /**
     * Get medCompositions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMedCompositions()
    {
        return $this->medCompositions;
    }
    public function __toString()
    {
        return $this->getCompLibelle();
    }
}
