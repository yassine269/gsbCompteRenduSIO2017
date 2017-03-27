<?php
/**
 * Created by PhpStorm.
 * User: TI-tygangsta
 * Date: 20/02/2017
 * Time: 15:27
 */


namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="MainBundle\Repository\MedicamentRepository")
 * @ORM\Table(name="Medicament")
 */

class Medicament
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
    private $medDEPOTLEGAL;

    public function __toString() {
        return $this->medDEPOTLEGAL;
    }

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $medNOMCOMMERCIAL;

    /**
     * @ORM\OneToMany(targetEntity="MainBundle\Entity\MedConstitution", mappedBy="constMEDICAMENT", cascade={ "persist", "remove"}, orphanRemoval=true)
     */
    private $medCOMPOSITIONS;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $medEFFETS;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $medCONTREINDIC;

    /**
     * @ORM\Column(type="integer", length=40)
     */
    private $medPRIXECHANT;
    /**
     * @ORM\ManyToMany(targetEntity="MainBundle\Entity\Medicament",cascade={"persist"})
     * @ORM\joinTable(name="medPreturbe")
     */
    private $medPerturbe;

    /**
     * @ORM\ManyToMany(targetEntity="MainBundle\Entity\Medicament",cascade={"persist"})
     * @ORM\joinTable(name="medPreturbateur")
     */
    private $medPerturbateur;
    /**
     * @ORM\ManyToMany(targetEntity="MainBundle\Entity\Presentation",cascade={"persist"})
     */
    private $medPRESENTATION;

    /**
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Famille")
     */
    private $medFAMILLE;

    /**
     * @ORM\OneToMany(targetEntity="MainBundle\Entity\Prescrire", mappedBy="presMED", cascade={ "persist", "remove"}, orphanRemoval=true)
     */
    private $medPRESCRIPTIONS;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->medCOMPOSITIONS = new \Doctrine\Common\Collections\ArrayCollection();
        $this->medPerturbe = new \Doctrine\Common\Collections\ArrayCollection();
        $this->medPerturbateur = new \Doctrine\Common\Collections\ArrayCollection();
        $this->medPRESENTATION = new \Doctrine\Common\Collections\ArrayCollection();
        $this->medPRESCRIPTIONS = new \Doctrine\Common\Collections\ArrayCollection();

    }

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
     * Set medDEPOTLEGAL
     *
     * @param string $medDEPOTLEGAL
     *
     * @return Medicament
     */
    public function setMedDEPOTLEGAL($medDEPOTLEGAL)
    {
        $this->medDEPOTLEGAL = $medDEPOTLEGAL;

        return $this;
    }

    /**
     * Get medDEPOTLEGAL
     *
     * @return string
     */
    public function getMedDEPOTLEGAL()
    {
        return $this->medDEPOTLEGAL;
    }

    /**
     * Set medNOMCOMMERCIAL
     *
     * @param string $medNOMCOMMERCIAL
     *
     * @return Medicament
     */
    public function setMedNOMCOMMERCIAL($medNOMCOMMERCIAL)
    {
        $this->medNOMCOMMERCIAL = $medNOMCOMMERCIAL;

        return $this;
    }

    /**
     * Get medNOMCOMMERCIAL
     *
     * @return string
     */
    public function getMedNOMCOMMERCIAL()
    {
        return $this->medNOMCOMMERCIAL;
    }

    /**
     * Set medEFFETS
     *
     * @param string $medEFFETS
     *
     * @return Medicament
     */
    public function setMedEFFETS($medEFFETS)
    {
        $this->medEFFETS = $medEFFETS;

        return $this;
    }

    /**
     * Get medEFFETS
     *
     * @return string
     */
    public function getMedEFFETS()
    {
        return $this->medEFFETS;
    }

    /**
     * Set medCONTREINDIC
     *
     * @param string $medCONTREINDIC
     *
     * @return Medicament
     */
    public function setMedCONTREINDIC($medCONTREINDIC)
    {
        $this->medCONTREINDIC = $medCONTREINDIC;

        return $this;
    }

    /**
     * Get medCONTREINDIC
     *
     * @return string
     */
    public function getMedCONTREINDIC()
    {
        return $this->medCONTREINDIC;
    }

    /**
     * Set medPRIXECHANT
     *
     * @param integer $medPRIXECHANT
     *
     * @return Medicament
     */
    public function setMedPRIXECHANT($medPRIXECHANT)
    {
        $this->medPRIXECHANT = $medPRIXECHANT;

        return $this;
    }

    /**
     * Get medPRIXECHANT
     *
     * @return integer
     */
    public function getMedPRIXECHANT()
    {
        return $this->medPRIXECHANT;
    }

    /**
     * Add medCOMPOSITION
     *
     * @param \MainBundle\Entity\MedConstitution $medCOMPOSITION
     *
     * @return Medicament
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

    /**
     * Add medPerturbe
     *
     * @param \MainBundle\Entity\Medicament $medPerturbe
     *
     * @return Medicament
     */
    public function addMedPerturbe(\MainBundle\Entity\Medicament $medPerturbe)
    {
        $this->medPerturbe[] = $medPerturbe;

        return $this;
    }

    /**
     * Remove medPerturbe
     *
     * @param \MainBundle\Entity\Medicament $medPerturbe
     */
    public function removeMedPerturbe(\MainBundle\Entity\Medicament $medPerturbe)
    {
        $this->medPerturbe->removeElement($medPerturbe);
    }

    /**
     * Get medPerturbe
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMedPerturbe()
    {
        return $this->medPerturbe;
    }

    /**
     * Add medPerturbateur
     *
     * @param \MainBundle\Entity\Medicament $medPerturbateur
     *
     * @return Medicament
     */
    public function addMedPerturbateur(\MainBundle\Entity\Medicament $medPerturbateur)
    {
        $this->medPerturbateur[] = $medPerturbateur;

        return $this;
    }

    /**
     * Remove medPerturbateur
     *
     * @param \MainBundle\Entity\Medicament $medPerturbateur
     */
    public function removeMedPerturbateur(\MainBundle\Entity\Medicament $medPerturbateur)
    {
        $this->medPerturbateur->removeElement($medPerturbateur);
    }

    /**
     * Get medPerturbateur
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMedPerturbateur()
    {
        return $this->medPerturbateur;
    }

    /**
     * Add medPRESENTATION
     *
     * @param \MainBundle\Entity\Presentation $medPRESENTATION
     *
     * @return Medicament
     */
    public function addMedPRESENTATION(\MainBundle\Entity\Presentation $medPRESENTATION)
    {
        $this->medPRESENTATION[] = $medPRESENTATION;

        return $this;
    }

    /**
     * Remove medPRESENTATION
     *
     * @param \MainBundle\Entity\Presentation $medPRESENTATION
     */
    public function removeMedPRESENTATION(\MainBundle\Entity\Presentation $medPRESENTATION)
    {
        $this->medPRESENTATION->removeElement($medPRESENTATION);
    }

    /**
     * Get medPRESENTATION
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMedPRESENTATION()
    {
        return $this->medPRESENTATION;
    }

    /**
     * Set medFAMILLE
     *
     * @param \MainBundle\Entity\Famille $medFAMILLE
     *
     * @return Medicament
     */
    public function setMedFAMILLE(\MainBundle\Entity\Famille $medFAMILLE = null)
    {
        $this->medFAMILLE = $medFAMILLE;

        return $this;
    }

    /**
     * Get medFAMILLE
     *
     * @return \MainBundle\Entity\Famille
     */
    public function getMedFAMILLE()
    {
        return $this->medFAMILLE;
    }

    /**
     * Add medPRESCRIPTION
     *
     * @param \MainBundle\Entity\Prescrire $medPRESCRIPTION
     *
     * @return Medicament
     */
    public function addMedPRESCRIPTION(\MainBundle\Entity\Prescrire $medPRESCRIPTION)
    {
        $this->medPRESCRIPTIONS[] = $medPRESCRIPTION;

        return $this;
    }

    /**
     * Remove medPRESCRIPTION
     *
     * @param \MainBundle\Entity\Prescrire $medPRESCRIPTION
     */
    public function removeMedPRESCRIPTION(\MainBundle\Entity\Prescrire $medPRESCRIPTION)
    {
        $this->medPRESCRIPTIONS->removeElement($medPRESCRIPTION);
    }

    /**
     * Get medPRESCRIPTIONS
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMedPRESCRIPTIONS()
    {
        return $this->medPRESCRIPTIONS;
    }
}
