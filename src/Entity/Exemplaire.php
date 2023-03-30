<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exemplaire
 *
 * @ORM\Table(name="exemplaire", indexes={@ORM\Index(name="IDX_5EF83C92F9D9A661", columns={"livreid"})})
 * @ORM\Entity
 */
class Exemplaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="exemplaire_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="numeroexemplaire", type="integer", nullable=false)
     */
    private $numeroexemplaire;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateachat", type="date", nullable=true)
     */
    private $dateachat;

    /**
     * @var \Livre
     *
     * @ORM\ManyToOne(targetEntity="Livre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="livreid", referencedColumnName="id")
     * })
     */
    private $livreid;


}
