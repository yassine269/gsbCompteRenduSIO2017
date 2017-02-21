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
    private $LIBELLE;
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
    public function setLIBELLE($lIBELLE)
    {
        $this->LIBELLE = $lIBELLE;

        return $this;
    }

    /**
     * Get lIBELLE
     *
     * @return string
     */
    public function getLIBELLE()
    {
        return $this->LIBELLE;
    }
    public function __toString()
    {
        return $this->LIBELLE;
    }
}
