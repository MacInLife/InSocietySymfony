<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Table(name="service")
 * @ORM\Entity
 */
class Service
{
    /**
     * @var string
     *
     * @ORM\Column(name="type_service", type="string", length=50, nullable=false)
     */
    private $typeService;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_service", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idService;



    /**
     * Set typeService
     *
     * @param string $typeService
     *
     * @return Service
     */
    public function setTypeService($typeService)
    {
        $this->typeService = $typeService;
    
        return $this;
    }

    /**
     * Get typeService
     *
     * @return string
     */
    public function getTypeService()
    {
        return $this->typeService;
    }

    /**
     * Get idService
     *
     * @return integer
     */
    public function getIdService()
    {
        return $this->idService;
    }
}
