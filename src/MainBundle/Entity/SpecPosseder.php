<?php
/**
 * Created by PhpStorm.
 * User: TI-tygangsta
 * Date: 20/02/2017
 * Time: 15:52
 */

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="MainBundle\Repository\MedicamentRepository")
 * @ORM\Table(name="SpecPosseder")
 */

class SpecPosseder
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
    private $specPosDiplome;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $specPosCoefprescription;



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
     * Set specPosDiplome
     *
     * @param string $specPosDiplome
     *
     * @return SpecPosseder
     */
    public function setSpecPosDiplome($specPosDiplome)
    {
        $this->specPosDiplome = $specPosDiplome;

        return $this;
    }

    /**
     * Get specPosDiplome
     *
     * @return string
     */
    public function getSpecPosDiplome()
    {
        return $this->specPosDiplome;
    }

    /**
     * Set specPosCoefprescription
     *
     * @param string $specPosCoefprescription
     *
     * @return SpecPosseder
     */
    public function setSpecPosCoefprescription($specPosCoefprescription)
    {
        $this->specPosCoefprescription = $specPosCoefprescription;

        return $this;
    }

    /**
     * Get specPosCoefprescription
     *
     * @return string
     */
    public function getSpecPosCoefprescription()
    {
        return $this->specPosCoefprescription;
    }
}
