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



    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Message
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    
        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Message
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    
        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return Message
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    
        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Get idMsg
     *
     * @return integer
     */
    public function getIdMsg()
    {
        return $this->idMsg;
    }

    /**
     * Set idPers
     *
     * @param \AppBundle\Entity\Personnel $idPers
     *
     * @return Message
     */
    public function setIdPers(\AppBundle\Entity\Personnel $idPers = null)
    {
        $this->idPers = $idPers;
    
        return $this;
    }

    /**
     * Get idPers
     *
     * @return \AppBundle\Entity\Personnel
     */
    public function getIdPers()
    {
        return $this->idPers;
    }

    /**
     * Set idMsgrie
     *
     * @param \AppBundle\Entity\Messagerie $idMsgrie
     *
     * @return Message
     */
    public function setIdMsgrie(\AppBundle\Entity\Messagerie $idMsgrie = null)
    {
        $this->idMsgrie = $idMsgrie;
    
        return $this;
    }

    /**
     * Get idMsgrie
     *
     * @return \AppBundle\Entity\Messagerie
     */
    public function getIdMsgrie()
    {
        return $this->idMsgrie;
    }
}
