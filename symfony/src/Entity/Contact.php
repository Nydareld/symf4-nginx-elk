<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

use Doctrine\ORM\Mapping as ORM;

/**
 * Un Contact ( une persone phyique chez le comtpe )
 *
 * @ApiResource
 * @ORM\Entity
 */
class Contact {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Security("is_granted('ROLE_ADMIN')")
     * @ORM\Column(type="string", length=100)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nom;

    /**
     * @ORM\ManyToOne(targetEntity="Compte", inversedBy="contacts")
     */
    private $compte;

    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of Prenom
     *
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of Prenom
     *
     * @param mixed prenom
     *
     * @return self
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of Nom
     *
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of Nom
     *
     * @param mixed nom
     *
     * @return self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of Compte
     *
     * @return mixed
     */
    public function getCompte()
    {
        return $this->compte;
    }

    /**
     * Set the value of Compte
     *
     * @param mixed compte
     *
     * @return self
     */
    public function setCompte($compte)
    {
        $this->compte = $compte;

        return $this;
    }

}
