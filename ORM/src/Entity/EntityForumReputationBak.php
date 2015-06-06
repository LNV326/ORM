<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumReputationBak
 *
 * @ORM\Table(name="forum_reputation_bak", indexes={@ORM\Index(name="member_id", columns={"member_id"})})
 * @ORM\Entity
 */
class EntityForumReputationBak
{
    /**
     * @var integer
     *
     * @ORM\Column(name="msg_id", type="bigint", nullable=false)
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
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=true)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="from_id", type="string", length=32, nullable=true)
     */
    private $fromId;

    /**
     * @var string
     *
     * @ORM\Column(name="member_id", type="string", length=32, nullable=false)
     */
    private $memberId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="forum_id", type="smallint", nullable=false)
     */
    private $forumId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="topic_id", type="string", length=20, nullable=false)
     */
    private $topicId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="post", type="bigint", nullable=false)
     */
    private $post = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CODE", type="string", length=2, nullable=false)
     */
    private $code = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="vis", type="boolean", nullable=false)
     */
    private $vis = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;



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
     * @return EntityForumReputationBak
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
     * Set message
     *
     * @param string $message
     *
     * @return EntityForumReputationBak
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
     * @param string $fromId
     *
     * @return EntityForumReputationBak
     */
    public function setFromId($fromId)
    {
        $this->fromId = $fromId;

        return $this;
    }

    /**
     * Get fromId
     *
     * @return string
     */
    public function getFromId()
    {
        return $this->fromId;
    }

    /**
     * Set memberId
     *
     * @param string $memberId
     *
     * @return EntityForumReputationBak
     */
    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;

        return $this;
    }

    /**
     * Get memberId
     *
     * @return string
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * Set forumId
     *
     * @param integer $forumId
     *
     * @return EntityForumReputationBak
     */
    public function setForumId($forumId)
    {
        $this->forumId = $forumId;

        return $this;
    }

    /**
     * Get forumId
     *
     * @return integer
     */
    public function getForumId()
    {
        return $this->forumId;
    }

    /**
     * Set topicId
     *
     * @param string $topicId
     *
     * @return EntityForumReputationBak
     */
    public function setTopicId($topicId)
    {
        $this->topicId = $topicId;

        return $this;
    }

    /**
     * Get topicId
     *
     * @return string
     */
    public function getTopicId()
    {
        return $this->topicId;
    }

    /**
     * Set post
     *
     * @param integer $post
     *
     * @return EntityForumReputationBak
     */
    public function setPost($post)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return integer
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return EntityForumReputationBak
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set vis
     *
     * @param boolean $vis
     *
     * @return EntityForumReputationBak
     */
    public function setVis($vis)
    {
        $this->vis = $vis;

        return $this;
    }

    /**
     * Get vis
     *
     * @return boolean
     */
    public function getVis()
    {
        return $this->vis;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return EntityForumReputationBak
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }
}
