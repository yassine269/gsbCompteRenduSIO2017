<?php
/**
 * Created by PhpStorm.
 * User: TI-tygangsta
 * Date: 20/02/2017
 * Time: 15:27
 */


namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\MaxDepth;


/**
 * @ExclusionPolicy("all")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\MedicamentRepository")
 * @ORM\Table(name="Medicament")
 */

class Medicament
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Expose
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=40)
     * @Expose
     */
    private $medDepotLegal;



    /**
     * @ORM\Column(type="string", length=40)
     * @Expose
     */
    private $medNomCommercial;

    /**
     * @Expose
     * @ORM\OneToMany(targetEntity="MainBundle\Entity\MedConstitution", mappedBy="constMedicament", cascade={ "persist", "remove"}, orphanRemoval=true)
     */
    private $medCompositions;

    /**
     * @Expose
     * @ORM\Column(type="string", length=40)
     */
    private $medEffets;

    /**
     * @Expose
     * @ORM\Column(type="string", length=40)
     */
    private $medContreIndic;

    /**
     * @Expose
     * @ORM\Column(type="integer", length=40)
     */
    private $medPrixEchant;
    /**
     * @Expose
     * @MaxDepth(2)
     * @Expose
     * @ORM\ManyToMany(targetEntity="MainBundle\Entity\Medicament",cascade={"persist"})
     * @ORM\JoinTable(name="medPreturbe")
     *
     */

    private $medPerturbe;

    /**
     *
     * @MaxDepth(2)
     * @Expose
     * @ORM\ManyToMany(targetEntity="MainBundle\Entity\Medicament",cascade={"persist"})
     * @ORM\JoinTable(name="medPreturbateur")
     */

    private $medPerturbateur;
    /**
     * @Expose
     * @ORM\ManyToMany(targetEntity="MainBundle\Entity\Presentation",cascade={"persist"})
     */
    private $medPresentation;

    /**
     * @Expose
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Famille")
     */
    private $medFamille;

    /**
     * @ORM\OneToMany(targetEntity="MainBundle\Entity\Prescrire", mappedBy="presMed", cascade={ "persist", "remove"}, orphanRemoval=true)
     */
    private $medPrescriptions;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->medCompositions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->medPerturbe = new \Doctrine\Common\Collections\ArrayCollection();
        $this->medPerturbateur = new \Doctrine\Common\Collections\ArrayCollection();
        $this->medPresentation = new \Doctrine\Common\Collections\ArrayCollection();
        $this->medPrescriptions = new \Doctrine\Common\Collections\ArrayCollection();

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
     * Set medDepotLegal
     *
     * @param string $medDepotLegal
     *
     * @return Medicament
     */
    public function setMedDepotLegal($medDepotLegal)
    {
        $this->medDepotLegal = $medDepotLegal;

        return $this;
    }

    /**
     * Get medDepotLegal
     *
     * @return string
     */
    public function getMedDepotLegal()
    {
        return $this->medDepotLegal;
    }

    /**
     * Set medNomCommercial
     *
     * @param string $medNomCommercial
     *
     * @return Medicament
     */
    public function setMedNomCommercial($medNomCommercial)
    {
        $this->medNomCommercial = $medNomCommercial;

        return $this;
    }

    /**
     * Get medNomCommercial
     *
     * @return string
     */
    public function getMedNomCommercial()
    {
        return $this->medNomCommercial;
    }

    /**
     * Set medEffets
     *
     * @param string $medEffets
     *
     * @return Medicament
     */
    public function setMedEffets($medEffets)
    {
        $this->medEffets = $medEffets;

        return $this;
    }

    /**
     * Get medEffets
     *
     * @return string
     */
    public function getMedEffets()
    {
        return $this->medEffets;
    }

    /**
     * Set medContreIndic
     *
     * @param string $medContreIndic
     *
     * @return Medicament
     */
    public function setMedContreIndic($medContreIndic)
    {
        $this->medContreIndic = $medContreIndic;

        return $this;
    }

    /**
     * Get medContreIndic
     *
     * @return string
     */
    public function getMedContreIndic()
    {
        return $this->medContreIndic;
    }

    /**
     * Set medPrixEchant
     *
     * @param integer $medPrixEchant
     *
     * @return Medicament
     */
    public function setMedPrixEchant($medPrixEchant)
    {
        $this->medPrixEchant = $medPrixEchant;

        return $this;
    }

    /**
     * Get medPrixEchant
     *
     * @return integer
     */
    public function getMedPrixEchant()
    {
        return $this->medPrixEchant;
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
     * Add medPresentation
     *
     * @param \MainBundle\Entity\Presentation $medPRESENTATION
     *
     * @return Medicament
     */
    public function addMedPRESENTATION(\MainBundle\Entity\Presentation $medPRESENTATION)
    {
        $this->medPresentation[] = $medPRESENTATION;

        return $this;
    }

    /**
     * Remove medPresentation
     *
     * @param \MainBundle\Entity\Presentation $medPRESENTATION
     */
    public function removeMedPRESENTATION(\MainBundle\Entity\Presentation $medPRESENTATION)
    {
        $this->medPresentation->removeElement($medPRESENTATION);
    }

    /**
     * Get medPresentation
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMedPresentation()
    {
        return $this->medPresentation;
    }

    /**
     * Set medFamille
     *
     * @param \MainBundle\Entity\Famille $medFamille
     *
     * @return Medicament
     */
    public function setMedFamille(\MainBundle\Entity\Famille $medFamille = null)
    {
        $this->medFamille = $medFamille;

        return $this;
    }

    /**
     * Get medFamille
     *
     * @return \MainBundle\Entity\Famille
     */
    public function getMedFamille()
    {
        return $this->medFamille;
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
        $this->medPrescriptions[] = $medPRESCRIPTION;

        return $this;
    }

    /**
     * Remove medPRESCRIPTION
     *
     * @param \MainBundle\Entity\Prescrire $medPRESCRIPTION
     */
    public function removeMedPRESCRIPTION(\MainBundle\Entity\Prescrire $medPRESCRIPTION)
    {
        $this->medPrescriptions->removeElement($medPRESCRIPTION);
    }

    /**
     * Get medPrescriptions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMedPrescriptions()
    {
        return $this->medPrescriptions;
    }
    public function __toString() {
        return (string) $this->getMedNomCommercial();
    }
}
