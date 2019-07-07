<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumModeratorLogs
 *
 * @ORM\Table(name="forum_moderator_logs")
 * @ORM\Entity(repositoryClass="Repository\EntityForumModeratorLogsRep")
 */
class EntityForumModeratorLogs
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
     * @ORM\Column(name="forum_id", type="integer", nullable=true)
     */
    private $forumId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="topic_id", type="integer", nullable=false)
     */
    private $topicId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="post_id", type="integer", nullable=true)
     */
    private $postId;

    /**
     * @var integer
     *
     * @ORM\Column(name="member_id", type="integer", nullable=false)
     */
    private $memberId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="member_name", type="string", length=32, nullable=false)
     */
    private $memberName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_address", type="string", length=16, nullable=false)
     */
    private $ipAddress = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="http_referer", type="string", length=255, nullable=true)
     */
    private $httpReferer;

    /**
     * @var integer
     *
     * @ORM\Column(name="ctime", type="integer", nullable=true)
     */
    private $ctime;

    /**
     * @var string
     *
     * @ORM\Column(name="topic_title", type="string", length=128, nullable=true)
     */
    private $topicTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=128, nullable=true)
     */
    private $action;

    /**
     * @var string
     *
     * @ORM\Column(name="query_string", type="string", length=128, nullable=true)
     */
    private $queryString;



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
     * Set forumId
     *
     * @param integer $forumId
     *
     * @return EntityForumModeratorLogs
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
     * @param integer $topicId
     *
     * @return EntityForumModeratorLogs
     */
    public function setTopicId($topicId)
    {
        $this->topicId = $topicId;

        return $this;
    }

    /**
     * Get topicId
     *
     * @return integer
     */
    public function getTopicId()
    {
        return $this->topicId;
    }

    /**
     * Set postId
     *
     * @param integer $postId
     *
     * @return EntityForumModeratorLogs
     */
    public function setPostId($postId)
    {
        $this->postId = $postId;

        return $this;
    }

    /**
     * Get postId
     *
     * @return integer
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * Set memberId
     *
     * @param integer $memberId
     *
     * @return EntityForumModeratorLogs
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
     * Set memberName
     *
     * @param string $memberName
     *
     * @return EntityForumModeratorLogs
     */
    public function setMemberName($memberName)
    {
        $this->memberName = $memberName;

        return $this;
    }

    /**
     * Get memberName
     *
     * @return string
     */
    public function getMemberName()
    {
        return $this->memberName;
    }

    /**
     * Set ipAddress
     *
     * @param string $ipAddress
     *
     * @return EntityForumModeratorLogs
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Get ipAddress
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set httpReferer
     *
     * @param string $httpReferer
     *
     * @return EntityForumModeratorLogs
     */
    public function setHttpReferer($httpReferer)
    {
        $this->httpReferer = $httpReferer;

        return $this;
    }

    /**
     * Get httpReferer
     *
     * @return string
     */
    public function getHttpReferer()
    {
        return $this->httpReferer;
    }

    /**
     * Set ctime
     *
     * @param integer $ctime
     *
     * @return EntityForumModeratorLogs
     */
    public function setCtime($ctime)
    {
        $this->ctime = $ctime;

        return $this;
    }

    /**
     * Get ctime
     *
     * @return integer
     */
    public function getCtime()
    {
        return $this->ctime;
    }

    /**
     * Set topicTitle
     *
     * @param string $topicTitle
     *
     * @return EntityForumModeratorLogs
     */
    public function setTopicTitle($topicTitle)
    {
        $this->topicTitle = $topicTitle;

        return $this;
    }

    /**
     * Get topicTitle
     *
     * @return string
     */
    public function getTopicTitle()
    {
        return $this->topicTitle;
    }

    /**
     * Set action
     *
     * @param string $action
     *
     * @return EntityForumModeratorLogs
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set queryString
     *
     * @param string $queryString
     *
     * @return EntityForumModeratorLogs
     */
    public function setQueryString($queryString)
    {
        $this->queryString = $queryString;

        return $this;
    }

    /**
     * Get queryString
     *
     * @return string
     */
    public function getQueryString()
    {
        return $this->queryString;
    }
}
