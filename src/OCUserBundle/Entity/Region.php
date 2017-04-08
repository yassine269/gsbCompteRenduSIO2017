<?php
/**
 * Created by PhpStorm.
 * User: charles.daud
 * Date: 15/02/2017
 * Time: 15:38
 */

namespace OCUserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="OCUserBundle\Repository\RegionRepository")
 * @ORM\Table(name="Region")
 */

class Region
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @ORM\Column(type="string", length=50)
     */
    private $regLibelle;

    /**
     * @ORM\ManyToOne(targetEntity="Secteur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $regSecteur;


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
     * Set regLibelle
     *
     * @param string $regLibelle
     *
     * @return Region
     */
    public function setRegLibelle($regLibelle)
    {
        $this->regLibelle = $regLibelle;

        return $this;
    }

    /**
     * Get regLibelle
     *
     * @return string
     */
    public function getRegLibelle()
    {
        return $this->regLibelle;
    }

    /**
     * Set regSecteur
     *
     * @param \OCUserBundle\Entity\Secteur $regSecteur
     *
     * @return Region
     */
    public function setRegSecteur(\OCUserBundle\Entity\Secteur $regSecteur)
    {
        $this->regSecteur = $regSecteur;

        return $this;
    }

    /**
     * Get regSecteur
     *
     * @return \OCUserBundle\Entity\Secteur
     */
    public function getRegSecteur()
    {
        return $this->regSecteur;
    }
    public function __toString()
    {
        return $this->regLibelle;
    }
}
