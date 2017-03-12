<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
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
    private $compCODE;
    /**
     * @ORM\Column(type="string",length=40)
     */
    private $compLIBELLE;

    /**
     * @ORM\OneToMany(targetEntity="MainBundle\Entity\MedConstitution", mappedBy="constCOMPOSANT",cascade={"all"}))
     */
    private $medCOMPOSITIONS;

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
        $this->medCOMPOSITIONS[] = $medCOMPOSITION;

        return $this;
    }

    /**
     * Remove medCOMPOSITION
     *
     * @param \MainBundle\Entity\MedConstitution $medCOMPOSITION
     */
    public function removeMedCOMPOSITION(\MainBundle\Entity\MedConstitution $medCOMPOSITION)
    {
        $this->medCOMPOSITIONS->removeElement($medCOMPOSITION);
    }

    /**
     * Get medCOMPOSITIONS
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMedCOMPOSITIONS()
    {
        return $this->medCOMPOSITIONS;
    }
}
