<?php

/**
 * Created by PhpStorm.
 * User: charles.daud
 * Date: 15/02/2017
 * Time: 15:14
 */

namespace OCUserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
/**
 * @ORM\Entity(repositoryClass="OCUserBundle\Repository\UserRepository")
 * @ORM\Table(name="appUser")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *@ORM\Column(type="string", length=10)
     */
    private $usrMATRICULE;

    /**
     * @ORM\Column(type="string",length=40)
     */
    private $usrNOM;

    /**
     * @ORM\Column(type="string",length=40)
     */
    private $usrPRENOM;

    /**
     * @ORM\Column(type="string", length=100)
     */

    private $usrADRESSE;

    /**
     * @ORM\Column(type="integer")
     */

    private $usrCP;

    /**
     * @ORM\Column(type="string", length=20)
     */

    private $usrVILLE;

    /**
     * @ORM\Column(type="date")
     */

    private $usrDATEEMBAUCHE;

    /**
     * @ORM\ManyToOne(targetEntity="Fonction")
     *@ORM\JoinColumn(nullable=false)
     */
    private $usrFONCTION;

    /**
     * @ORM\ManyToOne(targetEntity="Departement")
     *@ORM\JoinColumn(nullable=true)
     */
    private $usrDEPARTEMENT;

    /**
     * @ORM\ManyToOne(targetEntity="Region")
     * @ORM\JoinColumn(nullable=true)
     */
    private $usrREGION;

    /**
     * @ORM\ManyToOne(targetEntity="Secteur")
     * @ORM\JoinColumn(nullable=true)
     */
    private $usrSECTEUR;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(nullable=true)
     */
    private $usrSUPP;

    public function __construct()
    {
        parent::__construct();
    }



    /**
     * Set usrMATRICULE
     *
     * @param string $usrMATRICULE
     *
     * @return User
     */
    public function setUsrMATRICULE($usrMATRICULE)
    {
        $this->usrMATRICULE = $usrMATRICULE;

        return $this;
    }

    /**
     * Get usrMATRICULE
     *
     * @return string
     */
    public function getUsrMATRICULE()
    {
        return $this->usrMATRICULE;
    }

    /**
     * Set usrNOM
     *
     * @param string $usrNOM
     *
     * @return User
     */
    public function setUsrNOM($usrNOM)
    {
        $this->usrNOM = $usrNOM;

        return $this;
    }

    /**
     * Get usrNOM
     *
     * @return string
     */
    public function getUsrNOM()
    {
        return $this->usrNOM;
    }

    /**
     * Set usrPRENOM
     *
     * @param string $usrPRENOM
     *
     * @return User
     */
    public function setUsrPRENOM($usrPRENOM)
    {
        $this->usrPRENOM = $usrPRENOM;

        return $this;
    }

    /**
     * Get usrPRENOM
     *
     * @return string
     */
    public function getUsrPRENOM()
    {
        return $this->usrPRENOM;
    }

    /**
     * Set usrADRESSE
     *
     * @param string $usrADRESSE
     *
     * @return User
     */
    public function setUsrADRESSE($usrADRESSE)
    {
        $this->usrADRESSE = $usrADRESSE;

        return $this;
    }

    /**
     * Get usrADRESSE
     *
     * @return string
     */
    public function getUsrADRESSE()
    {
        return $this->usrADRESSE;
    }

    /**
     * Set usrCP
     *
     * @param integer $usrCP
     *
     * @return User
     */
    public function setUsrCP($usrCP)
    {
        $this->usrCP = $usrCP;

        return $this;
    }

    /**
     * Get usrCP
     *
     * @return integer
     */
    public function getUsrCP()
    {
        return $this->usrCP;
    }

    /**
     * Set usrVILLE
     *
     * @param string $usrVILLE
     *
     * @return User
     */
    public function setUsrVILLE($usrVILLE)
    {
        $this->usrVILLE = $usrVILLE;

        return $this;
    }

    /**
     * Get usrVILLE
     *
     * @return string
     */
    public function getUsrVILLE()
    {
        return $this->usrVILLE;
    }

    /**
     * Set usrDATEEMBAUCHE
     *
     * @param \DateTime $usrDATEEMBAUCHE
     *
     * @return User
     */
    public function setUsrDATEEMBAUCHE($usrDATEEMBAUCHE)
    {
        $this->usrDATEEMBAUCHE = $usrDATEEMBAUCHE;

        return $this;
    }

    /**
     * Get usrDATEEMBAUCHE
     *
     * @return \DateTime
     */
    public function getUsrDATEEMBAUCHE()
    {
        return $this->usrDATEEMBAUCHE;
    }

    /**
     * Set usrFONCTION
     *
     * @param \OCUserBundle\Entity\Fonction $usrFONCTION
     *
     * @return User
     */
    public function setUsrFONCTION(\OCUserBundle\Entity\Fonction $usrFONCTION)
    {
        $this->usrFONCTION = $usrFONCTION;

        return $this;
    }

    /**
     * Get usrFONCTION
     *
     * @return \OCUserBundle\Entity\Fonction
     */
    public function getUsrFONCTION()
    {
        return $this->usrFONCTION;
    }

    /**
     * Set usrDEPARTEMENT
     *
     * @param \OCUserBundle\Entity\Departement $usrDEPARTEMENT
     *
     * @return User
     */
    public function setUsrDEPARTEMENT(\OCUserBundle\Entity\Departement $usrDEPARTEMENT = null)
    {
        $this->usrDEPARTEMENT = $usrDEPARTEMENT;

        return $this;
    }

    /**
     * Get usrDEPARTEMENT
     *
     * @return \OCUserBundle\Entity\Departement
     */
    public function getUsrDEPARTEMENT()
    {
        return $this->usrDEPARTEMENT;
    }

    /**
     * Set usrREGION
     *
     * @param \OCUserBundle\Entity\Region $usrREGION
     *
     * @return User
     */
    public function setUsrREGION(\OCUserBundle\Entity\Region $usrREGION = null)
    {
        $this->usrREGION = $usrREGION;

        return $this;
    }

    /**
     * Get usrREGION
     *
     * @return \OCUserBundle\Entity\Region
     */
    public function getUsrREGION()
    {
        return $this->usrREGION;
    }

    /**
     * Set usrSECTEUR
     *
     * @param \OCUserBundle\Entity\Secteur $usrSECTEUR
     *
     * @return User
     */
    public function setUsrSECTEUR(\OCUserBundle\Entity\Secteur $usrSECTEUR = null)
    {
        $this->usrSECTEUR = $usrSECTEUR;

        return $this;
    }

    /**
     * Get usrSECTEUR
     *
     * @return \OCUserBundle\Entity\Secteur
     */
    public function getUsrSECTEUR()
    {
        return $this->usrSECTEUR;
    }

    /**
     * Set usrSUPP
     *
     * @param \OCUserBundle\Entity\User $usrSUPP
     *
     * @return User
     */
    public function setUsrSUPP(\OCUserBundle\Entity\User $usrSUPP = null)
    {
        $this->usrSUPP = $usrSUPP;

        return $this;
    }

    /**
     * Get usrSUPP
     *
     * @return \OCUserBundle\Entity\User
     */
    public function getUsrSUPP()
    {
        return $this->usrSUPP;
    }
}
