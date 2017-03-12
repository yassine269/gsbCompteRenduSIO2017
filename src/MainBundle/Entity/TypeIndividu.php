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
 * @ORM\Entity
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
    private $typeIndLIBELLE;





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
     * Set typeIndLIBELLE
     *
     * @param string $typeIndLIBELLE
     *
     * @return TypeIndividu
     */
    public function setTypeIndLIBELLE($typeIndLIBELLE)
    {
        $this->typeIndLIBELLE = $typeIndLIBELLE;

        return $this;
    }

    /**
     * Get typeIndLIBELLE
     *
     * @return string
     */
    public function getTypeIndLIBELLE()
    {
        return $this->typeIndLIBELLE;
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
}
