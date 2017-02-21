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
 * @ORM\Entity
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
    private $depCODE;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $depLIBELLE;

    /**
     * @ORM\ManyToOne(targetEntity="Region")
     * @ORM\JoinColumn(nullable=false)
     */
    private $depREGION;

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
     * Set depCODE
     *
     * @param string $depCODE
     *
     * @return Departement
     */
    public function setDepCODE($depCODE)
    {
        $this->depCODE = $depCODE;

        return $this;
    }

    /**
     * Get depCODE
     *
     * @return string
     */
    public function getDepCODE()
    {
        return $this->depCODE;
    }

    /**
     * Set depLIBELLE
     *
     * @param string $depLIBELLE
     *
     * @return Departement
     */
    public function setDepLIBELLE($depLIBELLE)
    {
        $this->depLIBELLE = $depLIBELLE;

        return $this;
    }

    /**
     * Get depLIBELLE
     *
     * @return string
     */
    public function getDepLIBELLE()
    {
        return $this->depLIBELLE;
    }

    /**
     * Set depREGION
     *
     * @param \OCUserBundle\Entity\Region $depREGION
     *
     * @return Departement
     */
    public function setDepREGION(\OCUserBundle\Entity\Region $depREGION)
    {
        $this->depREGION = $depREGION;

        return $this;
    }

    /**
     * Get depREGION
     *
     * @return \OCUserBundle\Entity\Region
     */
    public function getDepREGION()
    {
        return $this->depREGION;
    }
    public function __toString()
    {
        return $this->depLIBELLE;
    }
}
