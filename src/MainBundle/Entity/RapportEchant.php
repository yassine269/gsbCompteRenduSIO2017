<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Created by PhpStorm.
 * User: TI-tygangsta
 * Date: 20/02/2017
 * Time: 14:20
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="RapportEchant")
 */
class RapportEchant
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\RapportVisite", inversedBy="rapECHANTILLONS")
     */
    private $rapEchantRAPPORT;

    /**
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Medicament")
     */
    private $rapEchantMEDICAMENT;

    /**
     * @ORM\Column(type="integer")
     */
    private $rapEchantQUANTITE;


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
     * Set rapEchantQUANTITE
     *
     * @param integer $rapEchantQUANTITE
     *
     * @return RappportEchant
     */
    public function setRapEchantQUANTITE($rapEchantQUANTITE)
    {
        $this->rapEchantQUANTITE = $rapEchantQUANTITE;

        return $this;
    }

    /**
     * Get rapEchantQUANTITE
     *
     * @return integer
     */
    public function getRapEchantQUANTITE()
    {
        return $this->rapEchantQUANTITE;
    }

    /**
     * Set rapEchantRAPPORT
     *
     * @param \MainBundle\Entity\RapportVisite $rapEchantRAPPORT
     *
     * @return RappportEchant
     */
    public function setRapEchantRAPPORT(\MainBundle\Entity\RapportVisite $rapEchantRAPPORT = null)
    {
        $this->rapEchantRAPPORT = $rapEchantRAPPORT;

        return $this;
    }

    /**
     * Get rapEchantRAPPORT
     *
     * @return \MainBundle\Entity\RapportVisite
     */
    public function getRapEchantRAPPORT()
    {
        return $this->rapEchantRAPPORT;
    }

    /**
     * Set rapEchantMEDICAMENT
     *
     * @param \MainBundle\Entity\Medicament $rapEchantMEDICAMENT
     *
     * @return RappportEchant
     */
    public function setRapEchantMEDICAMENT(\MainBundle\Entity\Medicament $rapEchantMEDICAMENT = null)
    {
        $this->rapEchantMEDICAMENT = $rapEchantMEDICAMENT;

        return $this;
    }

    /**
     * Get rapEchantMEDICAMENT
     *
     * @return \MainBundle\Entity\Medicament
     */
    public function getRapEchantMEDICAMENT()
    {
        return $this->rapEchantMEDICAMENT;
    }
}