<?php

/**
 * Created by PhpStorm.
 * User: TI-tygangsta
 * Date: 20/02/2017
 * Time: 14:22
 */
namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="MainBundle\Repository\MedConstitutionRepository")
 * @ORM\Table(name="MedConstitution")
 */
class MedConstitution
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
     /**
      * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Medicament", inversedBy="medCompositions", cascade={"persist"})
      */
    private $constMedicament ;
    /**
      * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Composant",inversedBy="medCompositions",cascade={"persist"})
     */
    private $constComposant;

    /**
     * @ORM\Column(type="integer")
     */
    private $constQuantite;

    private $constCompLibelle;



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
     * Set constQuantite
     *
     * @param integer $constQuantite
     *
     * @return MedConstitution
     */
    public function setConstQuantite($constQuantite)
    {
        $this->constQuantite = $constQuantite;

        return $this;
    }

    /**
     * Get constQuantite
     *
     * @return integer
     */
    public function getConstQuantite()
    {
        return $this->constQuantite;
    }

    /**
     * Set constMedicament
     *
     * @param \MainBundle\Entity\Medicament $constMedicament
     *
     * @return MedConstitution
     */
    public function setConstMedicament(\MainBundle\Entity\Medicament $constMedicament = null)
    {
        $this->constMedicament = $constMedicament;

        return $this;
    }

    /**
     * Get constMedicament
     *
     * @return \MainBundle\Entity\Medicament
     */
    public function getConstMedicament()
    {
        return $this->constMedicament;
    }

    /**
     * Set constComposant
     *
     * @param \MainBundle\Entity\Composant $constComposant
     *
     * @return MedConstitution
     */
    public function setConstComposant(\MainBundle\Entity\Composant $constComposant = null)
    {
        $this->constComposant = $constComposant;

        return $this;
    }

    /**
     * Get constComposant
     *
     * @return \MainBundle\Entity\Composant
     */
    public function getConstComposant()
    {
        return $this->constComposant;
    }

    public function __toString()
    {
        return (string) $this->getConstComposant();
    }
}
