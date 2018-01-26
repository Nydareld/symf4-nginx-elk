<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Un Comtpe / Client
 *
 * @ApiResource
 * @ORM\Entity
 */
class Compte {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */

    private $id;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $denomination;

    /**
     * @ORM\OneToMany(targetEntity="Contact", mappedBy="compte")
     */
    private $contacts;

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
     * Get the value of Denomination
     *
     * @return mixed
     */
    public function getDenomination()
    {
        return $this->denomination;
    }

    /**
     * Set the value of Denomination
     *
     * @param mixed denomination
     *
     * @return self
     */
    public function setDenomination($denomination)
    {
        $this->denomination = $denomination;

        return $this;
    }

    /**
     * Get the value of Contacts
     *
     * @return mixed
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Set the value of Contacts
     *
     * @param mixed contacts
     *
     * @return self
     */
    public function setContacts($contacts)
    {
        $this->contacts = $contacts;

        return $this;
    }

}
