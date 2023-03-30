<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livre
 *
 * @ORM\Table(name="livre")
 * @ORM\Entity
 */
class Livre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="livre_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titrelivre", type="string", length=100, nullable=true)
     */
    private $titrelivre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="auteurlivre", type="string", length=50, nullable=true)
     */
    private $auteurlivre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="editeurlivre", type="string", length=50, nullable=true)
     */
    private $editeurlivre;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateparution", type="date", nullable=true)
     */
    private $dateparution;


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
     * Get the value of titrelivre
     *
     * @return  string|null
     */ 
    public function getTitrelivre()
    {
        return $this->titrelivre;
    }

    /**
     * Set the value of titrelivre
     *
     * @param  string|null  $titrelivre
     *
     * @return  self
     */ 
    public function setTitrelivre($titrelivre)
    {
        $this->titrelivre = $titrelivre;

        return $this;
    }

    /**
     * Get the value of auteurlivre
     *
     * @return  string|null
     */ 
    public function getAuteurlivre()
    {
        return $this->auteurlivre;
    }

    /**
     * Set the value of auteurlivre
     *
     * @param  string|null  $auteurlivre
     *
     * @return  self
     */ 
    public function setAuteurlivre($auteurlivre)
    {
        $this->auteurlivre = $auteurlivre;

        return $this;
    }

    /**
     * Get the value of editeurlivre
     *
     * @return  string|null
     */ 
    public function getEditeurlivre()
    {
        return $this->editeurlivre;
    }

    /**
     * Set the value of editeurlivre
     *
     * @param  string|null  $editeurlivre
     *
     * @return  self
     */ 
    public function setEditeurlivre($editeurlivre)
    {
        $this->editeurlivre = $editeurlivre;

        return $this;
    }

    /**
     * Get the value of dateparution
     *
     * @return  \DateTime|null
     */ 
    public function getDateparution()
    {
        return $this->dateparution;
    }

    /**
     * Set the value of dateparution
     *
     * @param  \DateTime|null  $dateparution
     *
     * @return  self
     */ 
    public function setDateparution($dateparution)
    {
        $this->dateparution = $dateparution;

        return $this;
    }
}
