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



    /**
     * Set libeller
     *
     * @param string $libeller
     *
     * @return Statut
     */
    public function setLibeller($libeller)
    {
        $this->libeller = $libeller;

        return $this;
    }

    /**
     * Get libeller
     *
     * @return string
     */
    public function getLibeller()
    {
        return $this->libeller;
    }

    /**
     * Get idStatut
     *
     * @return integer
     */
    public function getIdStatut()
    {
        return $this->idStatut;
    }
}
