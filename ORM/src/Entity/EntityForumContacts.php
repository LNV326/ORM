<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumContacts
 *
 * @ORM\Table(name="forum_contacts", indexes={@ORM\Index(name="member_id", columns={"member_id", "contact_id"})})
 * @ORM\Entity(repositoryClass="Repository\EntityForumContactsRep")
 */
class EntityForumContacts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="contact_id", type="integer", nullable=false)
     */
    private $contactId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="member_id", type="integer", nullable=false)
     */
    private $memberId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="contact_name", type="string", length=32, nullable=false)
     */
    private $contactName = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allow_msg", type="boolean", nullable=true)
     */
    private $allowMsg;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_desc", type="string", length=50, nullable=true)
     */
    private $contactDesc;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set contactId
     *
     * @param integer $contactId
     *
     * @return EntityForumContacts
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;

        return $this;
    }

    /**
     * Get contactId
     *
     * @return integer
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * Set memberId
     *
     * @param integer $memberId
     *
     * @return EntityForumContacts
     */
    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;

        return $this;
    }

    /**
     * Get memberId
     *
     * @return integer
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * Set contactName
     *
     * @param string $contactName
     *
     * @return EntityForumContacts
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * Get contactName
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Set allowMsg
     *
     * @param boolean $allowMsg
     *
     * @return EntityForumContacts
     */
    public function setAllowMsg($allowMsg)
    {
        $this->allowMsg = $allowMsg;

        return $this;
    }

    /**
     * Get allowMsg
     *
     * @return boolean
     */
    public function getAllowMsg()
    {
        return $this->allowMsg;
    }

    /**
     * Set contactDesc
     *
     * @param string $contactDesc
     *
     * @return EntityForumContacts
     */
    public function setContactDesc($contactDesc)
    {
        $this->contactDesc = $contactDesc;

        return $this;
    }

    /**
     * Get contactDesc
     *
     * @return string
     */
    public function getContactDesc()
    {
        return $this->contactDesc;
    }
}
