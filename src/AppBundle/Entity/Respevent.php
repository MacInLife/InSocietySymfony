<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Respevent
 *
 * @ORM\Table(name="respevent", uniqueConstraints={@ORM\UniqueConstraint(name="id_pers", columns={"id_pers", "id_event"})})
 * @ORM\Entity
 */
class Respevent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_pers", type="integer", nullable=false)
     */
    private $idPers;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_event", type="integer", nullable=false)
     */
    private $idEvent;

    /**
     * @var integer
     *
     * @ORM\Column(name="keyp", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $keyp;



    /**
     * Set idPers
     *
     * @param integer $idPers
     *
     * @return Respevent
     */
    public function setIdPers($idPers)
    {
        $this->idPers = $idPers;
    
        return $this;
    }

    /**
     * Get idPers
     *
     * @return integer
     */
    public function getIdPers()
    {
        return $this->idPers;
    }

    /**
     * Set idEvent
     *
     * @param integer $idEvent
     *
     * @return Respevent
     */
    public function setIdEvent($idEvent)
    {
        $this->idEvent = $idEvent;
    
        return $this;
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
     * Get keyp
     *
     * @return integer
     */
    public function getKeyp()
    {
        return $this->keyp;
    }
}
