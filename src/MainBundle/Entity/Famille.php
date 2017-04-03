<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Created by PhpStorm.
 * User: TI-tygangsta
 * Date: 20/02/2017
 * Time: 14:20
 */

/**
 * @ORM\Entity(repositoryClass="MainBundle\Repository\FamilleRepository")
 * @ORM\Table(name="Famille")
 */
class Famille
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\Column(type="string",length=40)
     */
    private $famLibelle;


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
     * Set famLibelle
     *
     * @param string $famLibelle
     *
     * @return Famille
     */
    public function setFamLibelle($famLibelle)
    {
        $this->famLibelle = $famLibelle;

        return $this;
    }

    /**
     * Get famLibelle
     *
     * @return string
     */
    public function getFamLibelle()
    {
        return $this->famLibelle;
    }
    public function __toString()
    {
        return (string) $this->getFamLibelle();
    }
}
