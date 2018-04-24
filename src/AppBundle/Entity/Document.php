<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 *
 * @ORM\Table(name="document")
 * @ORM\Entity
 */
class Document
{
    /**
     * @var string
     *
     * @ORM\Column(name="file_doc", type="string", length=100, nullable=false)
     */
    private $fileDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="type_doc", type="string", length=30, nullable=false)
     */
    private $typeDoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_doc", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDoc;



    /**
     * Set fileDoc
     *
     * @param string $fileDoc
     *
     * @return Document
     */
    public function setFileDoc($fileDoc)
    {
        $this->fileDoc = $fileDoc;
    
        return $this;
    }

    /**
     * Get fileDoc
     *
     * @return string
     */
    public function getFileDoc()
    {
        return $this->fileDoc;
    }

    /**
     * Set typeDoc
     *
     * @param string $typeDoc
     *
     * @return Document
     */
    public function setTypeDoc($typeDoc)
    {
        $this->typeDoc = $typeDoc;
    
        return $this;
    }

    /**
     * Get typeDoc
     *
     * @return string
     */
    public function getTypeDoc()
    {
        return $this->typeDoc;
    }

    /**
     * Get idDoc
     *
     * @return integer
     */
    public function getIdDoc()
    {
        return $this->idDoc;
    }
}
