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
 * @ORM\Entity(repositoryClass="MainBundle\Repository\SpecialiteRepository")
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
    private $speCode;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $speLibelle;



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
     * Set speCode
     *
     * @param string $speCode
     *
     * @return Specialite
     */
    public function setSpeCode($speCode)
    {
        $this->speCode = $speCode;

        return $this;
    }

    /**
     * Get speCode
     *
     * @return string
     */
    public function getSpeCode()
    {
        return $this->speCode;
    }

    /**
     * Set speLibelle
     *
     * @param string $speLibelle
     *
     * @return Specialite
     */
    public function setSpeLibelle($speLibelle)
    {
        $this->speLibelle = $speLibelle;

        return $this;
    }

    /**
     * Get speLibelle
     *
     * @return string
     */
    public function getSpeLibelle()
    {
        return $this->speLibelle;
    }
}
