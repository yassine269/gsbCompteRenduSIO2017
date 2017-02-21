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

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $medNOMCOMMERCIAL;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $medCOMPOSITION;

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
     * @ORM\ManyToMany(targetEntity="MainBundle\Entity\Medicament")
     * @ORM\joinTable(name="medPreturbe")
     */
    private $medPerturbe;

    /**
     * @ORM\ManyToMany(targetEntity="MainBundle\Entity\Medicament")
     * @ORM\joinTable(name="medPreturbateur")
     */
    private $medPerturbateur;
    /**
     * @ORM\ManyToMany(targetEntity="MainBundle\Entity\Presentation")
     */
    private $medPRESENTATION;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->medINTERRACTION = new \Doctrine\Common\Collections\ArrayCollection();
        $this->medPRESENTATION = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set medCOMPOSITION
     *
     * @param string $medCOMPOSITION
     *
     * @return Medicament
     */
    public function setMedCOMPOSITION($medCOMPOSITION)
    {
        $this->medCOMPOSITION = $medCOMPOSITION;

        return $this;
    }

    /**
     * Get medCOMPOSITION
     *
     * @return string
     */
    public function getMedCOMPOSITION()
    {
        return $this->medCOMPOSITION;
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
     * Add medINTERRACTION
     *
     * @param \MainBundle\Entity\Medicament $medINTERRACTION
     *
     * @return Medicament
     */
    public function addMedINTERRACTION(\MainBundle\Entity\Medicament $medINTERRACTION)
    {
        $this->medINTERRACTION[] = $medINTERRACTION;

        return $this;
    }

    /**
     * Remove medINTERRACTION
     *
     * @param \MainBundle\Entity\Medicament $medINTERRACTION
     */
    public function removeMedINTERRACTION(\MainBundle\Entity\Medicament $medINTERRACTION)
    {
        $this->medINTERRACTION->removeElement($medINTERRACTION);
    }

    /**
     * Get medINTERRACTION
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMedINTERRACTION()
    {
        return $this->medINTERRACTION;
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
}
