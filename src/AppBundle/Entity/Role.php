<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="role")
 * @ORM\Entity
 */
class Role
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_role", type="string", length=50, nullable=false)
     */
    private $nomRole;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_role", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRole;


}

