<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumTopicMmod
 *
 * @ORM\Table(name="forum_topic_mmod")
 * @ORM\Entity(repositoryClass="Repository\EntityForumTopicMmodRep")
 */
class EntityForumTopicMmod
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mm_id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mmId;

    /**
     * @var string
     *
     * @ORM\Column(name="mm_title", type="string", length=250, nullable=false)
     */
    private $mmTitle = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="mm_enabled", type="boolean", nullable=false)
     */
    private $mmEnabled = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="topic_state", type="string", length=10, nullable=false)
     */
    private $topicState = 'leave';

    /**
     * @var string
     *
     * @ORM\Column(name="topic_pin", type="string", length=10, nullable=false)
     */
    private $topicPin = 'leave';

    /**
     * @var integer
     *
     * @ORM\Column(name="topic_move", type="smallint", nullable=false)
     */
    private $topicMove = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="topic_move_link", type="boolean", nullable=false)
     */
    private $topicMoveLink = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="topic_title_st", type="string", length=250, nullable=false)
     */
    private $topicTitleSt = '';

    /**
     * @var string
     *
     * @ORM\Column(name="topic_title_end", type="string", length=250, nullable=false)
     */
    private $topicTitleEnd = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="topic_reply", type="boolean", nullable=false)
     */
    private $topicReply = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="topic_reply_content", type="text", length=65535, nullable=false)
     */
    private $topicReplyContent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="topic_reply_postcount", type="boolean", nullable=false)
     */
    private $topicReplyPostcount = '0';



    /**
     * Get mmId
     *
     * @return integer
     */
    public function getMmId()
    {
        return $this->mmId;
    }

    /**
     * Set mmTitle
     *
     * @param string $mmTitle
     *
     * @return EntityForumTopicMmod
     */
    public function setMmTitle($mmTitle)
    {
        $this->mmTitle = $mmTitle;

        return $this;
    }

    /**
     * Get mmTitle
     *
     * @return string
     */
    public function getMmTitle()
    {
        return $this->mmTitle;
    }

    /**
     * Set mmEnabled
     *
     * @param boolean $mmEnabled
     *
     * @return EntityForumTopicMmod
     */
    public function setMmEnabled($mmEnabled)
    {
        $this->mmEnabled = $mmEnabled;

        return $this;
    }

    /**
     * Get mmEnabled
     *
     * @return boolean
     */
    public function getMmEnabled()
    {
        return $this->mmEnabled;
    }

    /**
     * Set topicState
     *
     * @param string $topicState
     *
     * @return EntityForumTopicMmod
     */
    public function setTopicState($topicState)
    {
        $this->topicState = $topicState;

        return $this;
    }

    /**
     * Get topicState
     *
     * @return string
     */
    public function getTopicState()
    {
        return $this->topicState;
    }

    /**
     * Set topicPin
     *
     * @param string $topicPin
     *
     * @return EntityForumTopicMmod
     */
    public function setTopicPin($topicPin)
    {
        $this->topicPin = $topicPin;

        return $this;
    }

    /**
     * Get topicPin
     *
     * @return string
     */
    public function getTopicPin()
    {
        return $this->topicPin;
    }

    /**
     * Set topicMove
     *
     * @param integer $topicMove
     *
     * @return EntityForumTopicMmod
     */
    public function setTopicMove($topicMove)
    {
        $this->topicMove = $topicMove;

        return $this;
    }

    /**
     * Get topicMove
     *
     * @return integer
     */
    public function getTopicMove()
    {
        return $this->topicMove;
    }

    /**
     * Set topicMoveLink
     *
     * @param boolean $topicMoveLink
     *
     * @return EntityForumTopicMmod
     */
    public function setTopicMoveLink($topicMoveLink)
    {
        $this->topicMoveLink = $topicMoveLink;

        return $this;
    }

    /**
     * Get topicMoveLink
     *
     * @return boolean
     */
    public function getTopicMoveLink()
    {
        return $this->topicMoveLink;
    }

    /**
     * Set topicTitleSt
     *
     * @param string $topicTitleSt
     *
     * @return EntityForumTopicMmod
     */
    public function setTopicTitleSt($topicTitleSt)
    {
        $this->topicTitleSt = $topicTitleSt;

        return $this;
    }

    /**
     * Get topicTitleSt
     *
     * @return string
     */
    public function getTopicTitleSt()
    {
        return $this->topicTitleSt;
    }

    /**
     * Set topicTitleEnd
     *
     * @param string $topicTitleEnd
     *
     * @return EntityForumTopicMmod
     */
    public function setTopicTitleEnd($topicTitleEnd)
    {
        $this->topicTitleEnd = $topicTitleEnd;

        return $this;
    }

    /**
     * Get topicTitleEnd
     *
     * @return string
     */
    public function getTopicTitleEnd()
    {
        return $this->topicTitleEnd;
    }

    /**
     * Set topicReply
     *
     * @param boolean $topicReply
     *
     * @return EntityForumTopicMmod
     */
    public function setTopicReply($topicReply)
    {
        $this->topicReply = $topicReply;

        return $this;
    }

    /**
     * Get topicReply
     *
     * @return boolean
     */
    public function getTopicReply()
    {
        return $this->topicReply;
    }

    /**
     * Set topicReplyContent
     *
     * @param string $topicReplyContent
     *
     * @return EntityForumTopicMmod
     */
    public function setTopicReplyContent($topicReplyContent)
    {
        $this->topicReplyContent = $topicReplyContent;

        return $this;
    }

    /**
     * Get topicReplyContent
     *
     * @return string
     */
    public function getTopicReplyContent()
    {
        return $this->topicReplyContent;
    }

    /**
     * Set topicReplyPostcount
     *
     * @param boolean $topicReplyPostcount
     *
     * @return EntityForumTopicMmod
     */
    public function setTopicReplyPostcount($topicReplyPostcount)
    {
        $this->topicReplyPostcount = $topicReplyPostcount;

        return $this;
    }

    /**
     * Get topicReplyPostcount
     *
     * @return boolean
     */
    public function getTopicReplyPostcount()
    {
        return $this->topicReplyPostcount;
    }
}
