<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message", indexes={@ORM\Index(name="FK_Message_id_pers", columns={"id_pers"}), @ORM\Index(name="FK_Message_id_msgrie", columns={"id_msgrie"})})
 * @ORM\Entity
 */
class Message
{
    /**
     * @var string
     *
     * @ORM\Column(name="Tel", type="string", length=14, nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=50, nullable=false)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=25, nullable=true)
     */
    private $statut;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_msg", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMsg;

    /**
     * @var \AppBundle\Entity\Personnel
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Personnel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pers", referencedColumnName="id_pers")
     * })
     */
    private $idPers;

    /**
     * @var \AppBundle\Entity\Messagerie
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Messagerie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_msgrie", referencedColumnName="id_msgrie")
     * })
     */
    private $idMsgrie;


}

