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
 * @ORM\Entity
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
    private $famCODE;
    /**
     * @ORM\Column(type="string",length=40)
     */
    private $famLIBELLE;


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
     * Set famCODE
     *
     * @param string $famCODE
     *
     * @return Famille
     */
    public function setFamCODE($famCODE)
    {
        $this->famCODE = $famCODE;

        return $this;
    }

    /**
     * Get famCODE
     *
     * @return string
     */
    public function getFamCODE()
    {
        return $this->famCODE;
    }

    /**
     * Set famLIBELLE
     *
     * @param string $famLIBELLE
     *
     * @return Famille
     */
    public function setFamLIBELLE($famLIBELLE)
    {
        $this->famLIBELLE = $famLIBELLE;

        return $this;
    }

    /**
     * Get famLIBELLE
     *
     * @return string
     */
    public function getFamLIBELLE()
    {
        return $this->famLIBELLE;
    }
}
