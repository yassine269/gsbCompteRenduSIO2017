<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Dosage")
 */
class Dosage
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
    private $dosCODE;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $dosQUANTITE;

    /**
     * @ORM\Column(type="string",length=40)
     */
    private $dosUNITE;

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
     * Set dosCODE
     *
     * @param string $dosCODE
     *
     * @return Dosage
     */
    public function setDosCODE($dosCODE)
    {
        $this->dosCODE = $dosCODE;

        return $this;
    }

    /**
     * Get dosCODE
     *
     * @return string
     */
    public function getDosCODE()
    {
        return $this->dosCODE;
    }

    /**
     * Set dosQUANTITE
     *
     * @param string $dosQUANTITE
     *
     * @return Dosage
     */
    public function setDosQUANTITE($dosQUANTITE)
    {
        $this->dosQUANTITE = $dosQUANTITE;

        return $this;
    }

    /**
     * Get dosQUANTITE
     *
     * @return string
     */
    public function getDosQUANTITE()
    {
        return $this->dosQUANTITE;
    }

    /**
     * Set dosUNITE
     *
     * @param string $dosUNITE
     *
     * @return Dosage
     */
    public function setDosUNITE($dosUNITE)
    {
        $this->dosUNITE = $dosUNITE;

        return $this;
    }

    /**
     * Get dosUNITE
     *
     * @return string
     */
    public function getDosUNITE()
    {
        return $this->dosUNITE;
    }
}
