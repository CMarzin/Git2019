<?php

namespace HeticBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CreatureFantastique
 *
 * @ORM\Table(name="creature_fantastique")
 * @ORM\Entity(repositoryClass="HeticBundle\Repository\CreatureFantastiqueRepository")
 */
class CreatureFantastique
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="superPower", type="string", length=255)
     */
    private $superPower;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return CreatureFantastique
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set superPower
     *
     * @param string $superPower
     *
     * @return CreatureFantastique
     */
    public function setSuperPower($superPower)
    {
        $this->superPower = $superPower;

        return $this;
    }

    /**
     * Get superPower
     *
     * @return string
     */
    public function getSuperPower()
    {
        return $this->superPower;
    }
}
