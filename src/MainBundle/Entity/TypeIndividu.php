<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Created by PhpStorm.
 * User: TI-tygangsta
 * Date: 20/02/2017
 * Time: 14:21
 */
/**
 * @ORM\Entity(repositoryClass="MainBundle\Repository\TypeIndividuRepository")
 * @ORM\Table(name="TypeIndividu")
 */
class TypeIndividu
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
    private $TypeIndLibelle;





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
     * Set TypeIndLibelle
     *
     * @param string $TypeIndLibelle
     *
     * @return TypeIndividu
     */
    public function setTypeIndLibelle($TypeIndLibelle)
    {
        $this->TypeIndLibelle = $TypeIndLibelle;

        return $this;
    }

    /**
     * Get TypeIndLibelle
     *
     * @return string
     */
    public function getTypeIndLibelle()
    {
        return $this->TypeIndLibelle;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->typeIndPRESCRIPTIONS = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add typeIndPRESCRIPTION
     *
     * @param \MainBundle\Entity\Prescrire $typeIndPRESCRIPTION
     *
     * @return TypeIndividu
     */
    public function addTypeIndPRESCRIPTION(\MainBundle\Entity\Prescrire $typeIndPRESCRIPTION)
    {
        $this->typeIndPRESCRIPTIONS[] = $typeIndPRESCRIPTION;

        return $this;
    }

    /**
     * Remove typeIndPRESCRIPTION
     *
     * @param \MainBundle\Entity\Prescrire $typeIndPRESCRIPTION
     */
    public function removeTypeIndPRESCRIPTION(\MainBundle\Entity\Prescrire $typeIndPRESCRIPTION)
    {
        $this->typeIndPRESCRIPTIONS->removeElement($typeIndPRESCRIPTION);
    }

    /**
     * Get typeIndPRESCRIPTIONS
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTypeIndPRESCRIPTIONS()
    {
        return $this->typeIndPRESCRIPTIONS;
    }

    public function __toString()
    {
        return(string) $this->getTypeIndLibelle();
    }
}
