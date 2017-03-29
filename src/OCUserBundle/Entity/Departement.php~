<?php
/**
 * Created by PhpStorm.
 * User: charles.daud
 * Date: 15/02/2017
 * Time: 15:38
 */

namespace OCUserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="OCUserBundle\Repository\DepartementRepository")
 * @ORM\Table(name="Departement")
 */
class Departement
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $depCode;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $depLibelle;

    /**
     * @ORM\ManyToOne(targetEntity="Region")
     * @ORM\JoinColumn(nullable=false)
     */
    private $depRegion;

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
     * Set depCode
     *
     * @param string $depCode
     *
     * @return Departement
     */
    public function setDepCode($depCode)
    {
        $this->depCode = $depCode;

        return $this;
    }

    /**
     * Get depCode
     *
     * @return string
     */
    public function getDepCode()
    {
        return $this->depCode;
    }

    /**
     * Set depLibelle
     *
     * @param string $depLibelle
     *
     * @return Departement
     */
    public function setDepLibelle($depLibelle)
    {
        $this->depLibelle = $depLibelle;

        return $this;
    }

    /**
     * Get depLibelle
     *
     * @return string
     */
    public function getDepLibelle()
    {
        return $this->depLibelle;
    }

    /**
     * Set depRegion
     *
     * @param \OCUserBundle\Entity\Region $depRegion
     *
     * @return Departement
     */
    public function setDepRegion(\OCUserBundle\Entity\Region $depRegion)
    {
        $this->depRegion = $depRegion;

        return $this;
    }

    /**
     * Get depRegion
     *
     * @return \OCUserBundle\Entity\Region
     */
    public function getDepRegion()
    {
        return $this->depRegion;
    }
    public function __toString()
    {
        return $this->depLibelle;
    }
}
