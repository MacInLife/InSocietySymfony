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
     * @ORM\Column(name="NbPlaceTotal", type="integer", nullable=true)
     */
    private $nbplacetotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbPers", type="integer", nullable=false)
     */
    private $nbpers;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_d", type="datetime", nullable=true)
     */
    private $dateD;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_f", type="datetime", nullable=true)
     */
    private $dateF;

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



    /**
     * Set nbplacetotal
     *
     * @param integer $nbplacetotal
     *
     * @return SalleReunion
     */
    public function setNbplacetotal($nbplacetotal)
    {
        $this->nbplacetotal = $nbplacetotal;

        return $this;
    }

    /**
     * Get nbplacetotal
     *
     * @return integer
     */
    public function getNbplacetotal()
    {
        return $this->nbplacetotal;
    }

    /**
     * Set nbpers
     *
     * @param integer $nbpers
     *
     * @return SalleReunion
     */
    public function setNbpers($nbpers)
    {
        $this->nbpers = $nbpers;

        return $this;
    }

    /**
     * Get nbpers
     *
     * @return integer
     */
    public function getNbpers()
    {
        return $this->nbpers;
    }

    /**
     * Set dateD
     *
     * @param \DateTime $dateD
     *
     * @return SalleReunion
     */
    public function setDateD($dateD)
    {
        $this->dateD = $dateD;

        return $this;
    }

    /**
     * Get dateD
     *
     * @return \DateTime
     */
    public function getDateD()
    {
        return $this->dateD;
    }

    /**
     * Set dateF
     *
     * @param \DateTime $dateF
     *
     * @return SalleReunion
     */
    public function setDateF($dateF)
    {
        $this->dateF = $dateF;

        return $this;
    }

    /**
     * Get dateF
     *
     * @return \DateTime
     */
    public function getDateF()
    {
        return $this->dateF;
    }

    /**
     * Set nomsr
     *
     * @param string $nomsr
     *
     * @return SalleReunion
     */
    public function setNomsr($nomsr)
    {
        $this->nomsr = $nomsr;

        return $this;
    }

    /**
     * Get nomsr
     *
     * @return string
     */
    public function getNomsr()
    {
        return $this->nomsr;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     *
     * @return SalleReunion
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
     * Get idSr
     *
     * @return integer
     */
    public function getIdSr()
    {
        return $this->idSr;
    }

    /**
     * Set idStatut
     *
     * @param \AppBundle\Entity\Statut $idStatut
     *
     * @return SalleReunion
     */
    public function setIdStatut(\AppBundle\Entity\Statut $idStatut = null)
    {
        $this->idStatut = $idStatut;

        return $this;
    }

    /**
     * Get idStatut
     *
     * @return \AppBundle\Entity\Statut
     */
    public function getIdStatut()
    {
        return $this->idStatut;
    }
}
