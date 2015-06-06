<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumMessages
 *
 * @ORM\Table(name="forum_messages", indexes={@ORM\Index(name="member_id", columns={"member_id"}), @ORM\Index(name="vid", columns={"vid"}), @ORM\Index(name="from_id", columns={"from_id"})})
 * @ORM\Entity
 */
class EntityForumMessages
{
    /**
     * @var integer
     *
     * @ORM\Column(name="msg_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $msgId;

    /**
     * @var integer
     *
     * @ORM\Column(name="msg_date", type="integer", nullable=true)
     */
    private $msgDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="read_state", type="boolean", nullable=true)
     */
    private $readState;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=128, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=true)
     */
    private $message;

    /**
     * @var integer
     *
     * @ORM\Column(name="from_id", type="integer", nullable=false)
     */
    private $fromId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="vid", type="string", length=32, nullable=true)
     */
    private $vid;

    /**
     * @var integer
     *
     * @ORM\Column(name="member_id", type="integer", nullable=false)
     */
    private $memberId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="recipient_id", type="integer", nullable=false)
     */
    private $recipientId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="attach_type", type="boolean", nullable=true)
     */
    private $attachType;

    /**
     * @var boolean
     *
     * @ORM\Column(name="attach_file", type="boolean", nullable=true)
     */
    private $attachFile;

    /**
     * @var string
     *
     * @ORM\Column(name="cc_users", type="text", length=65535, nullable=true)
     */
    private $ccUsers;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tracking", type="boolean", nullable=true)
     */
    private $tracking = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="read_date", type="integer", nullable=true)
     */
    private $readDate;



    /**
     * Get msgId
     *
     * @return integer
     */
    public function getMsgId()
    {
        return $this->msgId;
    }

    /**
     * Set msgDate
     *
     * @param integer $msgDate
     *
     * @return EntityForumMessages
     */
    public function setMsgDate($msgDate)
    {
        $this->msgDate = $msgDate;

        return $this;
    }

    /**
     * Get msgDate
     *
     * @return integer
     */
    public function getMsgDate()
    {
        return $this->msgDate;
    }

    /**
     * Set readState
     *
     * @param boolean $readState
     *
     * @return EntityForumMessages
     */
    public function setReadState($readState)
    {
        $this->readState = $readState;

        return $this;
    }

    /**
     * Get readState
     *
     * @return boolean
     */
    public function getReadState()
    {
        return $this->readState;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return EntityForumMessages
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return EntityForumMessages
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set fromId
     *
     * @param integer $fromId
     *
     * @return EntityForumMessages
     */
    public function setFromId($fromId)
    {
        $this->fromId = $fromId;

        return $this;
    }

    /**
     * Get fromId
     *
     * @return integer
     */
    public function getFromId()
    {
        return $this->fromId;
    }

    /**
     * Set vid
     *
     * @param string $vid
     *
     * @return EntityForumMessages
     */
    public function setVid($vid)
    {
        $this->vid = $vid;

        return $this;
    }

    /**
     * Get vid
     *
     * @return string
     */
    public function getVid()
    {
        return $this->vid;
    }

    /**
     * Set memberId
     *
     * @param integer $memberId
     *
     * @return EntityForumMessages
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
     * Set recipientId
     *
     * @param integer $recipientId
     *
     * @return EntityForumMessages
     */
    public function setRecipientId($recipientId)
    {
        $this->recipientId = $recipientId;

        return $this;
    }

    /**
     * Get recipientId
     *
     * @return integer
     */
    public function getRecipientId()
    {
        return $this->recipientId;
    }

    /**
     * Set attachType
     *
     * @param boolean $attachType
     *
     * @return EntityForumMessages
     */
    public function setAttachType($attachType)
    {
        $this->attachType = $attachType;

        return $this;
    }

    /**
     * Get attachType
     *
     * @return boolean
     */
    public function getAttachType()
    {
        return $this->attachType;
    }

    /**
     * Set attachFile
     *
     * @param boolean $attachFile
     *
     * @return EntityForumMessages
     */
    public function setAttachFile($attachFile)
    {
        $this->attachFile = $attachFile;

        return $this;
    }

    /**
     * Get attachFile
     *
     * @return boolean
     */
    public function getAttachFile()
    {
        return $this->attachFile;
    }

    /**
     * Set ccUsers
     *
     * @param string $ccUsers
     *
     * @return EntityForumMessages
     */
    public function setCcUsers($ccUsers)
    {
        $this->ccUsers = $ccUsers;

        return $this;
    }

    /**
     * Get ccUsers
     *
     * @return string
     */
    public function getCcUsers()
    {
        return $this->ccUsers;
    }

    /**
     * Set tracking
     *
     * @param boolean $tracking
     *
     * @return EntityForumMessages
     */
    public function setTracking($tracking)
    {
        $this->tracking = $tracking;

        return $this;
    }

    /**
     * Get tracking
     *
     * @return boolean
     */
    public function getTracking()
    {
        return $this->tracking;
    }

    /**
     * Set readDate
     *
     * @param integer $readDate
     *
     * @return EntityForumMessages
     */
    public function setReadDate($readDate)
    {
        $this->readDate = $readDate;

        return $this;
    }

    /**
     * Get readDate
     *
     * @return integer
     */
    public function getReadDate()
    {
        return $this->readDate;
    }
}
