<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="id_SR", columns={"id_SR"}), @ORM\Index(name="id_pers", columns={"id_pers"})})
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nbPers", type="integer", nullable=false)
     */
    private $nbpers;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_d", type="datetime", nullable=false)
     */
    private $dateD;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_f", type="datetime", nullable=false)
     */
    private $dateF;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_Res", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRes;

    /**
     * @var \AppBundle\Entity\Personnel
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Personnel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pers", referencedColumnName="id_pers")
     * })
     */
    private $idPers;

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
     * Set nbpers
     *
     * @param integer $nbpers
     *
     * @return Reservation
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
     * @return Reservation
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
     * @return Reservation
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
     * Get idRes
     *
     * @return integer
     */
    public function getIdRes()
    {
        return $this->idRes;
    }

    /**
     * Set idPers
     *
     * @param \AppBundle\Entity\Personnel $idPers
     *
     * @return Reservation
     */
    public function setIdPers(\AppBundle\Entity\Personnel $idPers = null)
    {
        $this->idPers = $idPers;
    
        return $this;
    }

    /**
     * Get idPers
     *
     * @return \AppBundle\Entity\Personnel
     */
    public function getIdPers()
    {
        return $this->idPers;
    }

    /**
     * Set idSr
     *
     * @param \AppBundle\Entity\SalleReunion $idSr
     *
     * @return Reservation
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
}
