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
 * @ORM\Entity(repositoryClass="MainBundle\Repository\PresentationRepository")
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
    private $preCode;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $preLibelle;


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
     * Set preCode
     *
     * @param string $preCode
     *
     * @return Presentation
     */
    public function setPreCode($preCode)
    {
        $this->preCode = $preCode;

        return $this;
    }
    public function __toString()
    {
        return $this->preLibelle;
    }

    /**
     * Get preCode
     *
     * @return string
     */
    public function getPreCode()
    {
        return $this->preCode;
    }

    /**
     * Set preLibelle
     *
     * @param string $preLibelle
     *
     * @return Presentation
     */
    public function setPreLibelle($preLibelle)
    {
        $this->preLibelle = $preLibelle;

        return $this;
    }

    /**
     * Get preLibelle
     *
     * @return string
     */
    public function getPreLibelle()
    {
        return $this->preLibelle;
    }
}
