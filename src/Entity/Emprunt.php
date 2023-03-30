<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emprunt
 *
 * @ORM\Table(name="emprunt", indexes={@ORM\Index(name="IDX_364071D7D321ADB7", columns={"exemplaireid"}), @ORM\Index(name="IDX_364071D77354EE1A", columns={"emprunteurid"})})
 * @ORM\Entity
 */
class Emprunt
{
    /**
     * @var int
     *
     * @ORM\Column(name="idemprunt", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idemprunt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateemprunt", type="date", nullable=false)
     */
    private $dateemprunt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateretour", type="date", nullable=false)
     */
    private $dateretour;

    /**
     * @var \Exemplaire
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Exemplaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="exemplaireid", referencedColumnName="id")
     * })
     */
    private $exemplaireid;

    /**
     * @var \Emprunteur
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Emprunteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="emprunteurid", referencedColumnName="id")
     * })
     */
    private $emprunteurid;

    


}
