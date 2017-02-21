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
 * @ORM\Entity(repositoryClass="MainBundle\Repository\PraticienRepository")
 * @ORM\Table(name="Praticien")
 */

class Praticien
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
    private $praNUM;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $praCODE;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $praNOM;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $praADRESSE;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $praCP;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $praVILLE;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $praCOEFNOTORIETE;
    /**
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\TypePraticien")
     */
    private $praTYPE;

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
     * Set praNUM
     *
     * @param string $praNUM
     *
     * @return Praticien
     */
    public function setPraNUM($praNUM)
    {
        $this->praNUM = $praNUM;

        return $this;
    }

    /**
     * Get praNUM
     *
     * @return string
     */
    public function getPraNUM()
    {
        return $this->praNUM;
    }

    /**
     * Set praCODE
     *
     * @param string $praCODE
     *
     * @return Praticien
     */
    public function setPraCODE($praCODE)
    {
        $this->praCODE = $praCODE;

        return $this;
    }

    /**
     * Get praCODE
     *
     * @return string
     */
    public function getPraCODE()
    {
        return $this->praCODE;
    }

    /**
     * Set praNOM
     *
     * @param string $praNOM
     *
     * @return Praticien
     */
    public function setPraNOM($praNOM)
    {
        $this->praNOM = $praNOM;

        return $this;
    }

    /**
     * Get praNOM
     *
     * @return string
     */
    public function getPraNOM()
    {
        return $this->praNOM;
    }

    /**
     * Set praADRESSE
     *
     * @param string $praADRESSE
     *
     * @return Praticien
     */
    public function setPraADRESSE($praADRESSE)
    {
        $this->praADRESSE = $praADRESSE;

        return $this;
    }

    /**
     * Get praADRESSE
     *
     * @return string
     */
    public function getPraADRESSE()
    {
        return $this->praADRESSE;
    }

    /**
     * Set praCP
     *
     * @param string $praCP
     *
     * @return Praticien
     */
    public function setPraCP($praCP)
    {
        $this->praCP = $praCP;

        return $this;
    }

    /**
     * Get praCP
     *
     * @return string
     */
    public function getPraCP()
    {
        return $this->praCP;
    }

    /**
     * Set praVILLE
     *
     * @param string $praVILLE
     *
     * @return Praticien
     */
    public function setPraVILLE($praVILLE)
    {
        $this->praVILLE = $praVILLE;

        return $this;
    }

    /**
     * Get praVILLE
     *
     * @return string
     */
    public function getPraVILLE()
    {
        return $this->praVILLE;
    }

    /**
     * Set praCOEFNOTORIETE
     *
     * @param string $praCOEFNOTORIETE
     *
     * @return Praticien
     */
    public function setPraCOEFNOTORIETE($praCOEFNOTORIETE)
    {
        $this->praCOEFNOTORIETE = $praCOEFNOTORIETE;

        return $this;
    }

    /**
     * Get praCOEFNOTORIETE
     *
     * @return string
     */
    public function getPraCOEFNOTORIETE()
    {
        return $this->praCOEFNOTORIETE;
    }

    /**
     * Set praTYPE
     *
     * @param \MainBundle\Entity\TypePraticien $praTYPE
     *
     * @return Praticien
     */
    public function setPraTYPE(\MainBundle\Entity\TypePraticien $praTYPE = null)
    {
        $this->praTYPE = $praTYPE;

        return $this;
    }

    /**
     * Get praTYPE
     *
     * @return \MainBundle\Entity\TypePraticien
     */
    public function getPraTYPE()
    {
        return $this->praTYPE;
    }
}
