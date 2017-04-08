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
     * @ORM\Column(type="string", length=20)
     */
    private $secLibelle;


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
     * Set secLibelle
     *
     * @param string $secLibelle
     *
     * @return Secteur
     */
    public function setSecLibelle($secLibelle)
    {
        $this->secLibelle = $secLibelle;

        return $this;
    }

    /**
     * Get secLibelle
     *
     * @return string
     */
    public function getSecLibelle()
    {
        return $this->secLibelle;
    }
    public function __toString()
    {
        return $this->secLibelle;
    }
}
