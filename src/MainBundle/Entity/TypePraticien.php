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
 * @ORM\Entity(repositoryClass="MainBundle\Repository\TypePraticienRepository")
 * @ORM\Table(name="TypePraticien")
 */


class TypePraticien
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
    private $typeLibelle;
    /**
     * @ORM\Column(type="string", length=40)
     */
    private $typeLieu;


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
     * Set typeLibelle
     *
     * @param string $typeLibelle
     *
     * @return TypePraticien
     */
    public function setTypeLibelle($typeLibelle)
    {
        $this->typeLibelle = $typeLibelle;

        return $this;
    }

    /**
     * Get typeLibelle
     *
     * @return string
     */
    public function getTypeLibelle()
    {
        return $this->typeLibelle;
    }

    /**
     * Set typeLieu
     *
     * @param string $typeLieu
     *
     * @return TypePraticien
     */
    public function setTypeLieu($typeLieu)
    {
        $this->typeLieu = $typeLieu;

        return $this;
    }

    /**
     * Get typeLieu
     *
     * @return string
     */
    public function getTypeLieu()
    {
        return $this->typeLieu;
    }
    public function __toString()
    {
        return (string) $this->getTypeLibelle();
    }
}
