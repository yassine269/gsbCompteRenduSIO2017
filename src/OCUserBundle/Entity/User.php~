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
    private $usrMatricule;

    /**
     * @ORM\Column(type="string",length=40)
     */
    private $usrNom;

    /**
     * @ORM\Column(type="string",length=40)
     */
    private $usrPrenom;

    /**
     * @ORM\Column(type="string", length=100)
     */

    private $usrAdresse;

    /**
     * @ORM\Column(type="integer")
     */

    private $usrCp;

    /**
     * @ORM\Column(type="string", length=20)
     */

    private $usrVille;

    /**
     * @ORM\Column(type="date")
     */

    private $usrDateEmbauche;

    /**
     * @ORM\ManyToOne(targetEntity="Fonction")
     *@ORM\JoinColumn(nullable=false)
     */
    private $usrFonction;

    /**
     * @ORM\ManyToOne(targetEntity="Departement")
     *@ORM\JoinColumn(nullable=true)
     */
    private $usrDepartement;

    /**
     * @ORM\ManyToOne(targetEntity="Region")
     * @ORM\JoinColumn(nullable=true)
     */
    private $usrRegion;

    /**
     * @ORM\ManyToOne(targetEntity="Secteur")
     * @ORM\JoinColumn(nullable=true)
     */
    private $usrSecteur;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(nullable=true)
     */
    private $usrSupp;

    public function __construct()
    {
        parent::__construct();
    }



    /**
     * Set usrMatricule
     *
     * @param string $usrMatricule
     *
     * @return User
     */
    public function setUsrMatricule($usrMatricule)
    {
        $this->usrMatricule = $usrMatricule;

        return $this;
    }

    /**
     * Get usrMatricule
     *
     * @return string
     */
    public function getUsrMatricule()
    {
        return $this->usrMatricule;
    }

    /**
     * Set usrNom
     *
     * @param string $usrNom
     *
     * @return User
     */
    public function setUsrNom($usrNom)
    {
        $this->usrNom = $usrNom;

        return $this;
    }

    /**
     * Get usrNom
     *
     * @return string
     */
    public function getUsrNom()
    {
        return $this->usrNom;
    }

    /**
     * Set usrPrenom
     *
     * @param string $usrPrenom
     *
     * @return User
     */
    public function setUsrPrenom($usrPrenom)
    {
        $this->usrPrenom = $usrPrenom;

        return $this;
    }

    /**
     * Get usrPrenom
     *
     * @return string
     */
    public function getUsrPrenom()
    {
        return $this->usrPrenom;
    }

    /**
     * Set usrAdresse
     *
     * @param string $usrAdresse
     *
     * @return User
     */
    public function setUsrAdresse($usrAdresse)
    {
        $this->usrAdresse = $usrAdresse;

        return $this;
    }

    /**
     * Get usrAdresse
     *
     * @return string
     */
    public function getUsrAdresse()
    {
        return $this->usrAdresse;
    }

    /**
     * Set usrCp
     *
     * @param integer $usrCp
     *
     * @return User
     */
    public function setUsrCp($usrCp)
    {
        $this->usrCp = $usrCp;

        return $this;
    }

    /**
     * Get usrCp
     *
     * @return integer
     */
    public function getUsrCp()
    {
        return $this->usrCp;
    }

    /**
     * Set usrVille
     *
     * @param string $usrVille
     *
     * @return User
     */
    public function setUsrVille($usrVille)
    {
        $this->usrVille = $usrVille;

        return $this;
    }

    /**
     * Get usrVille
     *
     * @return string
     */
    public function getUsrVille()
    {
        return $this->usrVille;
    }

    /**
     * Set usrDateEmbauche
     *
     * @param \DateTime $usrDateEmbauche
     *
     * @return User
     */
    public function setUsrDateEmbauche($usrDateEmbauche)
    {
        $this->usrDateEmbauche = $usrDateEmbauche;

        return $this;
    }

    /**
     * Get usrDateEmbauche
     *
     * @return \DateTime
     */
    public function getUsrDateEmbauche()
    {
        return $this->usrDateEmbauche;
    }

    /**
     * Set usrFonction
     *
     * @param \OCUserBundle\Entity\Fonction $usrFonction
     *
     * @return User
     */
    public function setUsrFonction(\OCUserBundle\Entity\Fonction $usrFonction)
    {
        $this->usrFonction = $usrFonction;

        return $this;
    }

    /**
     * Get usrFonction
     *
     * @return \OCUserBundle\Entity\Fonction
     */
    public function getUsrFonction()
    {
        return $this->usrFonction;
    }

    /**
     * Set usrDepartement
     *
     * @param \OCUserBundle\Entity\Departement $usrDepartement
     *
     * @return User
     */
    public function setUsrDepartement(\OCUserBundle\Entity\Departement $usrDepartement = null)
    {
        $this->usrDepartement = $usrDepartement;

        return $this;
    }

    /**
     * Get usrDepartement
     *
     * @return \OCUserBundle\Entity\Departement
     */
    public function getUsrDepartement()
    {
        return $this->usrDepartement;
    }

    /**
     * Set usrRegion
     *
     * @param \OCUserBundle\Entity\Region $usrRegion
     *
     * @return User
     */
    public function setUsrRegion(\OCUserBundle\Entity\Region $usrRegion = null)
    {
        $this->usrRegion = $usrRegion;

        return $this;
    }

    /**
     * Get usrRegion
     *
     * @return \OCUserBundle\Entity\Region
     */
    public function getUsrRegion()
    {
        return $this->usrRegion;
    }

    /**
     * Set usrSecteur
     *
     * @param \OCUserBundle\Entity\Secteur $usrSecteur
     *
     * @return User
     */
    public function setUsrSecteur(\OCUserBundle\Entity\Secteur $usrSecteur = null)
    {
        $this->usrSecteur = $usrSecteur;

        return $this;
    }

    /**
     * Get usrSecteur
     *
     * @return \OCUserBundle\Entity\Secteur
     */
    public function getUsrSecteur()
    {
        return $this->usrSecteur;
    }

    /**
     * Set usrSupp
     *
     * @param \OCUserBundle\Entity\User $usrSupp
     *
     * @return User
     */
    public function setUsrSupp(\OCUserBundle\Entity\User $usrSupp = null)
    {
        $this->usrSupp = $usrSupp;

        return $this;
    }

    /**
     * Get usrSupp
     *
     * @return \OCUserBundle\Entity\User
     */
    public function getUsrSupp()
    {
        return $this->usrSupp;
    }
}
