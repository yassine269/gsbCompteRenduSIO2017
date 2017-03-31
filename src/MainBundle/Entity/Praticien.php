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
    private $praNom;
    /**
     * @ORM\Column(type="string", length=40)
     */
    private $praPrenom;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $praAdresse;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $praCp;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $praVille;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $praCoefNotoriete;
    /**
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\TypePraticien")
     */
    private $praType;

    public function __toString()
    {
        return $this->praNom;
    }

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
     * Set praCode
     *
     * @param string $praCode
     *
     * @return Praticien
     */
    public function setPraCode($praCode)
    {
        $this->praCode = $praCode;

        return $this;
    }

    /**
     * Get praCode
     *
     * @return string
     */
    public function getPraCode()
    {
        return $this->praCode;
    }

    /**
     * Set praNom
     *
     * @param string $praNom
     *
     * @return Praticien
     */
    public function setPraNom($praNom)
    {
        $this->praNom = $praNom;

        return $this;
    }

    /**
     * Get praNom
     *
     * @return string
     */
    public function getPraNom()
    {
        return $this->praNom;
    }

    /**
     * Set praAdresse
     *
     * @param string $praAdresse
     *
     * @return Praticien
     */
    public function setPraAdresse($praAdresse)
    {
        $this->praAdresse = $praAdresse;

        return $this;
    }

    /**
     * Get praAdresse
     *
     * @return string
     */
    public function getPraAdresse()
    {
        return $this->praAdresse;
    }

    /**
     * Set praCp
     *
     * @param string $praCp
     *
     * @return Praticien
     */
    public function setPraCp($praCp)
    {
        $this->praCp = $praCp;

        return $this;
    }

    /**
     * Get praCp
     *
     * @return string
     */
    public function getPraCp()
    {
        return $this->praCp;
    }

    /**
     * Set praVille
     *
     * @param string $praVille
     *
     * @return Praticien
     */
    public function setPraVille($praVille)
    {
        $this->praVille = $praVille;

        return $this;
    }

    /**
     * Get praVille
     *
     * @return string
     */
    public function getPraVille()
    {
        return $this->praVille;
    }

    /**
     * Set praCoefNotoriete
     *
     * @param string $praCoefNotoriete
     *
     * @return Praticien
     */
    public function setPraCoefNotoriete($praCoefNotoriete)
    {
        $this->praCoefNotoriete = $praCoefNotoriete;

        return $this;
    }

    /**
     * Get praCoefNotoriete
     *
     * @return string
     */
    public function getPraCoefNotoriete()
    {
        return $this->praCoefNotoriete;
    }

    /**
     * Set praType
     *
     * @param \MainBundle\Entity\TypePraticien $praType
     *
     * @return Praticien
     */
    public function setPraType(\MainBundle\Entity\TypePraticien $praType = null)
    {
        $this->praType = $praType;

        return $this;
    }

    /**
     * Get praType
     *
     * @return \MainBundle\Entity\TypePraticien
     */
    public function getPraType()
    {
        return $this->praType;
    }

    /**
     * Set praPrenom
     *
     * @param string $praPrenom
     *
     * @return Praticien
     */
    public function setPraPrenom($praPrenom)
    {
        $this->praPrenom = $praPrenom;

        return $this;
    }

    /**
     * Get praPrenom
     *
     * @return string
     */
    public function getPraPrenom()
    {
        return $this->praPrenom;
    }
}
