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
 * @ORM\Table(name="Region")
 */

class Region
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
    private $regCODE;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $regLIBELLE;

    /**
     * @ORM\ManyToOne(targetEntity="Secteur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $regSECTEUR;


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
     * Set regCODE
     *
     * @param string $regCODE
     *
     * @return Region
     */
    public function setRegCODE($regCODE)
    {
        $this->regCODE = $regCODE;

        return $this;
    }

    /**
     * Get regCODE
     *
     * @return string
     */
    public function getRegCODE()
    {
        return $this->regCODE;
    }

    /**
     * Set regLIBELLE
     *
     * @param string $regLIBELLE
     *
     * @return Region
     */
    public function setRegLIBELLE($regLIBELLE)
    {
        $this->regLIBELLE = $regLIBELLE;

        return $this;
    }

    /**
     * Get regLIBELLE
     *
     * @return string
     */
    public function getRegLIBELLE()
    {
        return $this->regLIBELLE;
    }

    /**
     * Set regSECTEUR
     *
     * @param \OCUserBundle\Entity\Secteur $regSECTEUR
     *
     * @return Region
     */
    public function setRegSECTEUR(\OCUserBundle\Entity\Secteur $regSECTEUR)
    {
        $this->regSECTEUR = $regSECTEUR;

        return $this;
    }

    /**
     * Get regSECTEUR
     *
     * @return \OCUserBundle\Entity\Secteur
     */
    public function getRegSECTEUR()
    {
        return $this->regSECTEUR;
    }
    public function __toString()
    {
        return $this->regLIBELLE;
    }
}
