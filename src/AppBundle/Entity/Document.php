<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @ORM\Column(name="file", type="string", length=100, nullable=false)
     */
    private $fileDoc;

    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="Please, upload the bestiaire brochure as a PDF file.")
     * @Assert\File(mimeTypes={ "application/pdf" })
     */
    private $typeDoc;

 

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDoc;



    /**
     * Set file
     *
     * @param string $file
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
     * Set typeDdoc
     *
     * @param string $type
     *
     * @return Document
     */
    public function setTypeDoc($typeDoc)
    {
        $this->typeDoc = $typeDoc;

        return $this;
    }

    /**
     * Get type_doc
     *
     * @return string
     */
    public function getTypeDoc()
    {
        return $this->typeDoc;
    }


    /**
     * Get id_doc
     *
     * @return integer
     */
    public function getIdDoc()
    {
        return $this->idDoc;
    }
}
