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

}
