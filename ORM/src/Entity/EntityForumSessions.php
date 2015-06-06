<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumSessions
 *
 * @ORM\Table(name="forum_sessions", indexes={@ORM\Index(name="in_topic", columns={"in_topic"}), @ORM\Index(name="in_forum", columns={"in_forum"}), @ORM\Index(name="running_time", columns={"running_time", "member_id"})})
 * @ORM\Entity
 */
class EntityForumSessions
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="member_name", type="string", length=64, nullable=true)
     */
    private $memberName;

    /**
     * @var integer
     *
     * @ORM\Column(name="member_id", type="integer", nullable=false)
     */
    private $memberId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_address", type="string", length=16, nullable=true)
     */
    private $ipAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="browser", type="string", length=64, nullable=true)
     */
    private $browser;

    /**
     * @var integer
     *
     * @ORM\Column(name="running_time", type="integer", nullable=true)
     */
    private $runningTime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="login_type", type="boolean", nullable=true)
     */
    private $loginType;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="text", length=65535, nullable=true)
     */
    private $location;

    /**
     * @var integer
     *
     * @ORM\Column(name="member_group", type="smallint", nullable=true)
     */
    private $memberGroup;

    /**
     * @var integer
     *
     * @ORM\Column(name="in_forum", type="smallint", nullable=false)
     */
    private $inForum = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="in_topic", type="integer", nullable=true)
     */
    private $inTopic;



    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set memberName
     *
     * @param string $memberName
     *
     * @return EntityForumSessions
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
     * Set memberId
     *
     * @param integer $memberId
     *
     * @return EntityForumSessions
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
     * Set ipAddress
     *
     * @param string $ipAddress
     *
     * @return EntityForumSessions
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
     * Set browser
     *
     * @param string $browser
     *
     * @return EntityForumSessions
     */
    public function setBrowser($browser)
    {
        $this->browser = $browser;

        return $this;
    }

    /**
     * Get browser
     *
     * @return string
     */
    public function getBrowser()
    {
        return $this->browser;
    }

    /**
     * Set runningTime
     *
     * @param integer $runningTime
     *
     * @return EntityForumSessions
     */
    public function setRunningTime($runningTime)
    {
        $this->runningTime = $runningTime;

        return $this;
    }

    /**
     * Get runningTime
     *
     * @return integer
     */
    public function getRunningTime()
    {
        return $this->runningTime;
    }

    /**
     * Set loginType
     *
     * @param boolean $loginType
     *
     * @return EntityForumSessions
     */
    public function setLoginType($loginType)
    {
        $this->loginType = $loginType;

        return $this;
    }

    /**
     * Get loginType
     *
     * @return boolean
     */
    public function getLoginType()
    {
        return $this->loginType;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return EntityForumSessions
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set memberGroup
     *
     * @param integer $memberGroup
     *
     * @return EntityForumSessions
     */
    public function setMemberGroup($memberGroup)
    {
        $this->memberGroup = $memberGroup;

        return $this;
    }

    /**
     * Get memberGroup
     *
     * @return integer
     */
    public function getMemberGroup()
    {
        return $this->memberGroup;
    }

    /**
     * Set inForum
     *
     * @param integer $inForum
     *
     * @return EntityForumSessions
     */
    public function setInForum($inForum)
    {
        $this->inForum = $inForum;

        return $this;
    }

    /**
     * Get inForum
     *
     * @return integer
     */
    public function getInForum()
    {
        return $this->inForum;
    }

    /**
     * Set inTopic
     *
     * @param integer $inTopic
     *
     * @return EntityForumSessions
     */
    public function setInTopic($inTopic)
    {
        $this->inTopic = $inTopic;

        return $this;
    }

    /**
     * Get inTopic
     *
     * @return integer
     */
    public function getInTopic()
    {
        return $this->inTopic;
    }
}
