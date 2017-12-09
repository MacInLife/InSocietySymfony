<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement", indexes={@ORM\Index(name="FK_Evenement_id_SR", columns={"id_SR"})})
 * @ORM\Entity
 */
class Evenement
{
    /**
     * @var string
     *
     * @ORM\Column(name="nomEvt", type="string", length=50, nullable=false)
     */
    private $nomevt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="jour", type="date", nullable=false)
     */
    private $jour;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=150, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=50, nullable=true)
     */
    private $lieu;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_event", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEvent;

    /**
     * @var \AppBundle\Entity\SalleReunion
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\SalleReunion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_SR", referencedColumnName="id_SR")
     * })
     */
    private $idSr;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Personnel", inversedBy="idEvent")
     * @ORM\JoinTable(name="participer",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_event", referencedColumnName="id_event")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_pers", referencedColumnName="id_pers")
     *   }
     * )
     */
    private $idPers;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idPers = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

