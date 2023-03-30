<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emprunteur
 *
 * @ORM\Table(name="emprunteur")
 * @ORM\Entity
 */
class Emprunteur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="emprunteur_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomemprunteur", type="string", length=50, nullable=false)
     */
    private $nomemprunteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenomemprunteur", type="string", length=100, nullable=true)
     */
    private $prenomemprunteur;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseemprunteur", type="string", length=255, nullable=false)
     */
    private $adresseemprunteur;

    /**
     * @var string
     *
     * @ORM\Column(name="telephoneemprunteur", type="string", length=15, nullable=false)
     */
    private $telephoneemprunteur;

    /**
     * @var string
     *
     * @ORM\Column(name="emailemprunteur", type="string", length=100, nullable=false)
     */
    private $emailemprunteur;

    



    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  int  $id
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nomemprunteur
     *
     * @return  string
     */ 
    public function getNomemprunteur()
    {
        return $this->nomemprunteur;
    }

    /**
     * Set the value of nomemprunteur
     *
     * @param  string  $nomemprunteur
     *
     * @return  self
     */ 
    public function setNomemprunteur(string $nomemprunteur)
    {
        $this->nomemprunteur = $nomemprunteur;

        return $this;
    }

    /**
     * Get the value of prenomemprunteur
     *
     * @return  string|null
     */ 
    public function getPrenomemprunteur()
    {
        return $this->prenomemprunteur;
    }

    /**
     * Set the value of prenomemprunteur
     *
     * @param  string|null  $prenomemprunteur
     *
     * @return  self
     */ 
    public function setPrenomemprunteur($prenomemprunteur)
    {
        $this->prenomemprunteur = $prenomemprunteur;

        return $this;
    }

    /**
     * Get the value of adresseemprunteur
     *
     * @return  string
     */ 
    public function getAdresseemprunteur()
    {
        return $this->adresseemprunteur;
    }

    /**
     * Set the value of adresseemprunteur
     *
     * @param  string  $adresseemprunteur
     *
     * @return  self
     */ 
    public function setAdresseemprunteur(string $adresseemprunteur)
    {
        $this->adresseemprunteur = $adresseemprunteur;

        return $this;
    }

    /**
     * Get the value of telephoneemprunteur
     *
     * @return  string
     */ 
    public function getTelephoneemprunteur()
    {
        return $this->telephoneemprunteur;
    }

    /**
     * Set the value of telephoneemprunteur
     *
     * @param  string  $telephoneemprunteur
     *
     * @return  self
     */ 
    public function setTelephoneemprunteur(string $telephoneemprunteur)
    {
        $this->telephoneemprunteur = $telephoneemprunteur;

        return $this;
    }

    /**
     * Get the value of emailemprunteur
     *
     * @return  string
     */ 
    public function getEmailemprunteur()
    {
        return $this->emailemprunteur;
    }

    /**
     * Set the value of emailemprunteur
     *
     * @param  string  $emailemprunteur
     *
     * @return  self
     */ 
    public function setEmailemprunteur(string $emailemprunteur)
    {
        $this->emailemprunteur = $emailemprunteur;

        return $this;
    }
}
