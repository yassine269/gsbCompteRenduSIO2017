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
 * @ORM\Entity
 * @ORM\Table(name="Specialite")
 */

class Specialite
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
    private $speCODE;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $speLIBELLE;


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
     * Set speCODE
     *
     * @param string $speCODE
     *
     * @return Specialite
     */
    public function setSpeCODE($speCODE)
    {
        $this->speCODE = $speCODE;

        return $this;
    }

    /**
     * Get speCODE
     *
     * @return string
     */
    public function getSpeCODE()
    {
        return $this->speCODE;
    }

    /**
     * Set speLIBELLE
     *
     * @param string $speLIBELLE
     *
     * @return Specialite
     */
    public function setSpeLIBELLE($speLIBELLE)
    {
        $this->speLIBELLE = $speLIBELLE;

        return $this;
    }

    /**
     * Get speLIBELLE
     *
     * @return string
     */
    public function getSpeLIBELLE()
    {
        return $this->speLIBELLE;
    }
}
