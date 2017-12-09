<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statut
 *
 * @ORM\Table(name="statut")
 * @ORM\Entity
 */
class Statut
{
    /**
     * @var string
     *
     * @ORM\Column(name="libeller", type="string", length=13, nullable=true)
     */
    private $libeller;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_statut", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStatut;


}

