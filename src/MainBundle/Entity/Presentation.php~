<?php

/**
 * Created by PhpStorm.
 * User: TI-tygangsta
 * Date: 20/02/2017
 * Time: 14:21
 */
namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Presentation")
 */
class Presentation
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
    private $preCODE;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $preLIBELLE;



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
     * Set preCODE
     *
     * @param string $preCODE
     *
     * @return Presentation
     */
    public function setPreCODE($preCODE)
    {
        $this->preCODE = $preCODE;

        return $this;
    }

    /**
     * Get preCODE
     *
     * @return string
     */
    public function getPreCODE()
    {
        return $this->preCODE;
    }

    /**
     * Set preLIBELLE
     *
     * @param string $preLIBELLE
     *
     * @return Presentation
     */
    public function setPreLIBELLE($preLIBELLE)
    {
        $this->preLIBELLE = $preLIBELLE;

        return $this;
    }

    /**
     * Get preLIBELLE
     *
     * @return string
     */
    public function getPreLIBELLE()
    {
        return $this->preLIBELLE;
    }
}
