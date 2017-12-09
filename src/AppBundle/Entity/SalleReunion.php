<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SalleReunion
 *
 * @ORM\Table(name="salle_reunion", indexes={@ORM\Index(name="FK_Salle_Reunion_id_statut", columns={"id_statut"})})
 * @ORM\Entity
 */
class SalleReunion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nb_place", type="integer", nullable=true)
     */
    private $nbPlace;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaire", type="time", nullable=true)
     */
    private $horaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="jour", type="date", nullable=true)
     */
    private $jour;

    /**
     * @var string
     *
     * @ORM\Column(name="nomSR", type="string", length=50, nullable=true)
     */
    private $nomsr;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=25, nullable=true)
     */
    private $lieu;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_SR", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSr;

    /**
     * @var \AppBundle\Entity\Statut
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Statut")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_statut", referencedColumnName="id_statut")
     * })
     */
    private $idStatut;


}

