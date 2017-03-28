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
 * @ORM\Entity(repositoryClass="MainBundle\Repository\RapportEchantRepository")
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
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\RapportVisite", inversedBy="rapEchantillons")
     */
    private $rapEchantRapport;

    /**
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Medicament")
     */
    private $rapEchantMedicament;

    /**
     * @ORM\Column(type="integer")
     */
    private $rapEchantQuantite;


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
     * Set rapEchantQuantite
     *
     * @param integer $rapEchantQuantite
     *
     * @return RappportEchant
     */
    public function setRapEchantQuantite($rapEchantQuantite)
    {
        $this->rapEchantQuantite = $rapEchantQuantite;

        return $this;
    }

    /**
     * Get rapEchantQuantite
     *
     * @return integer
     */
    public function getRapEchantQuantite()
    {
        return $this->rapEchantQuantite;
    }

    /**
     * Set rapEchantRapport
     *
     * @param \MainBundle\Entity\RapportVisite $rapEchantRapport
     *
     * @return RappportEchant
     */
    public function setRapEchantRapport(\MainBundle\Entity\RapportVisite $rapEchantRapport = null)
    {
        $this->rapEchantRapport = $rapEchantRapport;

        return $this;
    }

    /**
     * Get rapEchantRapport
     *
     * @return \MainBundle\Entity\RapportVisite
     */
    public function getRapEchantRapport()
    {
        return $this->rapEchantRapport;
    }

    /**
     * Set rapEchantMedicament
     *
     * @param \MainBundle\Entity\Medicament $rapEchantMedicament
     *
     * @return RappportEchant
     */
    public function setRapEchantMedicament(\MainBundle\Entity\Medicament $rapEchantMedicament = null)
    {
        $this->rapEchantMedicament = $rapEchantMedicament;

        return $this;
    }

    /**
     * Get rapEchantMedicament
     *
     * @return \MainBundle\Entity\Medicament
     */
    public function getRapEchantMedicament()
    {
        return $this->rapEchantMedicament;
    }
}
