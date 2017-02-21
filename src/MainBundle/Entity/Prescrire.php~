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
 * @ORM\Table(name="Prescrire")
 */

class Prescrire
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Medicament")
     */
    private $presMED;
    /**
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Dosage")
     */
    private $presDOSAGE;
    /**
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\TypeIndividu")
     */
    private $presTYPEINDIV;



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
     * Set presMED
     *
     * @param \MainBundle\Entity\Medicament $presMED
     *
     * @return Prescrire
     */
    public function setPresMED(\MainBundle\Entity\Medicament $presMED = null)
    {
        $this->presMED = $presMED;

        return $this;
    }

    /**
     * Get presMED
     *
     * @return \MainBundle\Entity\Medicament
     */
    public function getPresMED()
    {
        return $this->presMED;
    }

    /**
     * Set presDOSAGE
     *
     * @param \MainBundle\Entity\Dosage $presDOSAGE
     *
     * @return Prescrire
     */
    public function setPresDOSAGE(\MainBundle\Entity\Dosage $presDOSAGE = null)
    {
        $this->presDOSAGE = $presDOSAGE;

        return $this;
    }

    /**
     * Get presDOSAGE
     *
     * @return \MainBundle\Entity\Dosage
     */
    public function getPresDOSAGE()
    {
        return $this->presDOSAGE;
    }

    /**
     * Set presTYPEINDIV
     *
     * @param \MainBundle\Entity\TypeIndividu $presTYPEINDIV
     *
     * @return Prescrire
     */
    public function setPresTYPEINDIV(\MainBundle\Entity\TypeIndividu $presTYPEINDIV = null)
    {
        $this->presTYPEINDIV = $presTYPEINDIV;

        return $this;
    }

    /**
     * Get presTYPEINDIV
     *
     * @return \MainBundle\Entity\TypeIndividu
     */
    public function getPresTYPEINDIV()
    {
        return $this->presTYPEINDIV;
    }
}
