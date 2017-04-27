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
 * @ORM\Entity(repositoryClass="OCUserBundle\Repository\FonctionRepository")
 * @ORM\Table(name="Fonction")
 */
class Fonction
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
    private $fonctLibelle;
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
     * Set lIBELLE
     *
     * @param string $lIBELLE
     *
     * @return Fonction
     */
    public function setFonctLibelle($lIBELLE)
    {
        $thicos->fonctLibelle = $lIBELLE;

        return $this;
    }

    /**
     * Get lIBELLE
     *
     * @return string
     */
    public function getFonctLibelle()
    {
        return $this->fonctLibelle;
    }
    public function __toString()
    {
        return (string) $this->getFonctLibelle();
    }
}
