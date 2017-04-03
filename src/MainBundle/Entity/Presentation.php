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

    public function __toString()
    {
        return (string) $this->getPreLibelle();
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
