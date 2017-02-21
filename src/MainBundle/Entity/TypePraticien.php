<?php
/**
 * Created by PhpStorm.
 * User: TI-tygangsta
 * Date: 20/02/2017
 * Time: 15:45
 */

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="MainBundle\Repository\MedicamentRepository")
 * @ORM\Table(name="TypePraticien")
 */


class TypePraticien
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
    private $typeCODE;
    /**
     * @ORM\Column(type="string", length=40)
     */
    private $typeLIBELLE;
    /**
     * @ORM\Column(type="string", length=40)
     */
    private $typeLIEU;


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
     * Set typeCODE
     *
     * @param string $typeCODE
     *
     * @return TypePraticien
     */
    public function setTypeCODE($typeCODE)
    {
        $this->typeCODE = $typeCODE;

        return $this;
    }

    /**
     * Get typeCODE
     *
     * @return string
     */
    public function getTypeCODE()
    {
        return $this->typeCODE;
    }

    /**
     * Set typeLIBELLE
     *
     * @param string $typeLIBELLE
     *
     * @return TypePraticien
     */
    public function setTypeLIBELLE($typeLIBELLE)
    {
        $this->typeLIBELLE = $typeLIBELLE;

        return $this;
    }

    /**
     * Get typeLIBELLE
     *
     * @return string
     */
    public function getTypeLIBELLE()
    {
        return $this->typeLIBELLE;
    }

    /**
     * Set typeLIEU
     *
     * @param string $typeLIEU
     *
     * @return TypePraticien
     */
    public function setTypeLIEU($typeLIEU)
    {
        $this->typeLIEU = $typeLIEU;

        return $this;
    }

    /**
     * Get typeLIEU
     *
     * @return string
     */
    public function getTypeLIEU()
    {
        return $this->typeLIEU;
    }
}
