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


}

