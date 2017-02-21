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
    private $typeIndCODE;

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
     * Set typeIndCODE
     *
     * @param string $typeIndCODE
     *
     * @return TypeIndividu
     */
    public function setTypeIndCODE($typeIndCODE)
    {
        $this->typeIndCODE = $typeIndCODE;

        return $this;
    }

    /**
     * Get typeIndCODE
     *
     * @return string
     */
    public function getTypeIndCODE()
    {
        return $this->typeIndCODE;
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
}
