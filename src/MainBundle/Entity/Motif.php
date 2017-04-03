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
 * @ORM\Entity(repositoryClass="MainBundle\Repository\MotifRepository")
 * @ORM\Table(name="Motif")
 */
class Motif
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
    private $motifLibelle;
    /**
     * Get id
     *
     * @return integer
     */


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
     * Set motifLibelle
     *
     * @param string $motifLibelle
     *
     * @return Motif
     */
    public function setMotifLibelle($motifLibelle)
    {
        $this->motifLibelle = $motifLibelle;

        return $this;
    }

    /**
     * Get motifLibelle
     *
     * @return string
     */
    public function getMotifLibelle()
    {
        return $this->motifLibelle;
    }

    public function __toString()
    {
        return(string) $this->getMotifLibelle();
    }
}
