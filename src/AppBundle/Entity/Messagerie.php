<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messagerie
 *
 * @ORM\Table(name="messagerie")
 * @ORM\Entity
 */
class Messagerie
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="jour", type="date", nullable=true)
     */
    private $jour;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure", type="time", nullable=true)
     */
    private $heure;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=50, nullable=true)
     */
    private $lieu;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_msgrie", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMsgrie;


}

