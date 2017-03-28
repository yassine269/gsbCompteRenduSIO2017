<?php

/**
 * Created by PhpStorm.
 * User: TI-tygangsta
 * Date: 20/02/2017
 * Time: 14:21
 */

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="MainBundle\Repository\PrescrireRepository")
 * @ORM\Table(name="Prescrire")
 */

class Prescrire
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Medicament", inversedBy="medPrescriptions", cascade={"persist"})
     */
    private $presMed;
    /**
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Dosage")
     */
    private $presDosage;
    /**
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\TypeIndividu")
     */
    private $presTypeIndiv;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $presPosologie;



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
     * Set presMed
     *
     * @param \MainBundle\Entity\Medicament $presMed
     *
     * @return Prescrire
     */
    public function setPresMed(\MainBundle\Entity\Medicament $presMed = null)
    {
        $this->presMed = $presMed;

        return $this;
    }

    /**
     * Get presMed
     *
     * @return \MainBundle\Entity\Medicament
     */
    public function getPresMed()
    {
        return $this->presMed;
    }

    /**
     * Set presDosage
     *
     * @param \MainBundle\Entity\Dosage $presDosage
     *
     * @return Prescrire
     */
    public function setPresDosage(\MainBundle\Entity\Dosage $presDosage = null)
    {
        $this->presDosage = $presDosage;

        return $this;
    }

    /**
     * Get presDosage
     *
     * @return \MainBundle\Entity\Dosage
     */
    public function getPresDosage()
    {
        return $this->presDosage;
    }

    /**
     * Set presTypeIndiv
     *
     * @param \MainBundle\Entity\TypeIndividu $presTypeIndiv
     *
     * @return Prescrire
     */
    public function setPresTypeIndiv(\MainBundle\Entity\TypeIndividu $presTypeIndiv = null)
    {
        $this->presTypeIndiv = $presTypeIndiv;

        return $this;
    }

    /**
     * Get presTypeIndiv
     *
     * @return \MainBundle\Entity\TypeIndividu
     */
    public function getPresTypeIndiv()
    {
        return $this->presTypeIndiv;
    }

    /**
     * Set presPosologie
     *
     * @param string $presPosologie
     *
     * @return Prescrire
     */
    public function setPresPosologie($presPosologie)
    {
        $this->presPosologie = $presPosologie;

        return $this;
    }

    /**
     * Get presPosologie
     *
     * @return string
     */
    public function getPresPosologie()
    {
        return $this->presPosologie;
    }
}
