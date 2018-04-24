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
     * @ORM\Column(name="jour_d", type="date", nullable=false)
     */
    private $jourD;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="jour_f", type="date", nullable=false)
     */
    private $jourF;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="h_debut", type="time", nullable=false)
     */
    private $hDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="h_fin", type="time", nullable=false)
     */
    private $hFin;

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


    /**
     * Set nomevt
     *
     * @param string $nomevt
     *
     * @return Evenement
     */
    public function setNomevt($nomevt)
    {
        $this->nomevt = $nomevt;
    
        return $this;
    }

    /**
     * Get nomevt
     *
     * @return string
     */
    public function getNomevt()
    {
        return $this->nomevt;
    }

    /**
     * Set jourD
     *
     * @param \DateTime $jourD
     *
     * @return Evenement
     */
    public function setJourD($jourD)
    {
        $this->jourD = $jourD;
    
        return $this;
    }

    /**
     * Get jourD
     *
     * @return \DateTime
     */
    public function getJourD()
    {
        return $this->jourD;
    }

    /**
     * Set jourF
     *
     * @param \DateTime $jourF
     *
     * @return Evenement
     */
    public function setJourF($jourF)
    {
        $this->jourF = $jourF;
    
        return $this;
    }

    /**
     * Get jourF
     *
     * @return \DateTime
     */
    public function getJourF()
    {
        return $this->jourF;
    }

    /**
     * Set hDebut
     *
     * @param \DateTime $hDebut
     *
     * @return Evenement
     */
    public function setHDebut($hDebut)
    {
        $this->hDebut = $hDebut;
    
        return $this;
    }

    /**
     * Get hDebut
     *
     * @return \DateTime
     */
    public function getHDebut()
    {
        return $this->hDebut;
    }

    /**
     * Set hFin
     *
     * @param \DateTime $hFin
     *
     * @return Evenement
     */
    public function setHFin($hFin)
    {
        $this->hFin = $hFin;
    
        return $this;
    }

    /**
     * Get hFin
     *
     * @return \DateTime
     */
    public function getHFin()
    {
        return $this->hFin;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Evenement
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     *
     * @return Evenement
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
    
        return $this;
    }

    /**
     * Get lieu
     *
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Get idEvent
     *
     * @return integer
     */
    public function getIdEvent()
    {
        return $this->idEvent;
    }

    /**
     * Set idSr
     *
     * @param \AppBundle\Entity\SalleReunion $idSr
     *
     * @return Evenement
     */
    public function setIdSr(\AppBundle\Entity\SalleReunion $idSr = null)
    {
        $this->idSr = $idSr;
    
        return $this;
    }

    /**
     * Get idSr
     *
     * @return \AppBundle\Entity\SalleReunion
     */
    public function getIdSr()
    {
        return $this->idSr;
    }

    /**
     * Add idPer
     *
     * @param \AppBundle\Entity\Personnel $idPer
     *
     * @return Evenement
     */
    public function addIdPer(\AppBundle\Entity\Personnel $idPer)
    {
        $this->idPers[] = $idPer;
    
        return $this;
    }

    /**
     * Remove idPer
     *
     * @param \AppBundle\Entity\Personnel $idPer
     */
    public function removeIdPer(\AppBundle\Entity\Personnel $idPer)
    {
        $this->idPers->removeElement($idPer);
    }

    /**
     * Get idPers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdPers()
    {
        return $this->idPers;
    }
}
