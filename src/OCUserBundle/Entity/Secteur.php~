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
 * @ORM\Entity(repositoryClass="OCUserBundle\Repository\SecteurRepository")
 * @ORM\Table(name="Secteur")
 */

class Secteur
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
    private $secCODE;
    /**
     * @ORM\Column(type="string", length=20)
     */
    private $secLIBELLE;


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
     * Set secCODE
     *
     * @param string $secCODE
     *
     * @return Secteur
     */
    public function setSecCODE($secCODE)
    {
        $this->secCODE = $secCODE;

        return $this;
    }

    /**
     * Get secCODE
     *
     * @return string
     */
    public function getSecCODE()
    {
        return $this->secCODE;
    }

    /**
     * Set secLIBELLE
     *
     * @param string $secLIBELLE
     *
     * @return Secteur
     */
    public function setSecLIBELLE($secLIBELLE)
    {
        $this->secLIBELLE = $secLIBELLE;

        return $this;
    }

    /**
     * Get secLIBELLE
     *
     * @return string
     */
    public function getSecLIBELLE()
    {
        return $this->secLIBELLE;
    }
    public function __toString()
    {
        return $this->secLIBELLE;
    }
}
