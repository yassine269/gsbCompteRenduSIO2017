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
 * @ORM\Entity
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
      * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Medicament")
      */
    private $constMEDICAMENT;
    /**
      * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Composant")
     */
    private $constCOMPOSANT;

    /**
     * @ORM\Column(type="integer")
     */
    private $constQUANTITE;

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
     * Set constQUANTITE
     *
     * @param integer $constQUANTITE
     *
     * @return MedConstitution
     */
    public function setConstQUANTITE($constQUANTITE)
    {
        $this->constQUANTITE = $constQUANTITE;

        return $this;
    }

    /**
     * Get constQUANTITE
     *
     * @return integer
     */
    public function getConstQUANTITE()
    {
        return $this->constQUANTITE;
    }

    /**
     * Set constMEDICAMENT
     *
     * @param \MainBundle\Entity\Medicament $constMEDICAMENT
     *
     * @return MedConstitution
     */
    public function setConstMEDICAMENT(\MainBundle\Entity\Medicament $constMEDICAMENT = null)
    {
        $this->constMEDICAMENT = $constMEDICAMENT;

        return $this;
    }

    /**
     * Get constMEDICAMENT
     *
     * @return \MainBundle\Entity\Medicament
     */
    public function getConstMEDICAMENT()
    {
        return $this->constMEDICAMENT;
    }

    /**
     * Set constCOMPOSANT
     *
     * @param \MainBundle\Entity\Composant $constCOMPOSANT
     *
     * @return MedConstitution
     */
    public function setConstCOMPOSANT(\MainBundle\Entity\Composant $constCOMPOSANT = null)
    {
        $this->constCOMPOSANT = $constCOMPOSANT;

        return $this;
    }

    /**
     * Get constCOMPOSANT
     *
     * @return \MainBundle\Entity\Composant
     */
    public function getConstCOMPOSANT()
    {
        return $this->constCOMPOSANT;
    }
}
