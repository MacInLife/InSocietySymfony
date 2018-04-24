<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notes
 *
 * @ORM\Table(name="notes", indexes={@ORM\Index(name="id_admin", columns={"id_admin"})})
 * @ORM\Entity
 */
class Notes
{
    /**
     * @var string
     *
     * @ORM\Column(name="Txt_not", type="text", length=65535, nullable=true)
     */
    private $txtNot;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_notes", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNotes;

    /**
     * @var \AppBundle\Entity\Personnel
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Personnel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_admin", referencedColumnName="id_pers")
     * })
     */
    private $idAdmin;



    /**
     * Set txtNot
     *
     * @param string $txtNot
     *
     * @return Notes
     */
    public function setTxtNot($txtNot)
    {
        $this->txtNot = $txtNot;
    
        return $this;
    }

    /**
     * Get txtNot
     *
     * @return string
     */
    public function getTxtNot()
    {
        return $this->txtNot;
    }

    /**
     * Get idNotes
     *
     * @return integer
     */
    public function getIdNotes()
    {
        return $this->idNotes;
    }

    /**
     * Set idAdmin
     *
     * @param \AppBundle\Entity\Personnel $idAdmin
     *
     * @return Notes
     */
    public function setIdAdmin(\AppBundle\Entity\Personnel $idAdmin = null)
    {
        $this->idAdmin = $idAdmin;
    
        return $this;
    }

    /**
     * Get idAdmin
     *
     * @return \AppBundle\Entity\Personnel
     */
    public function getIdAdmin()
    {
        return $this->idAdmin;
    }
}
