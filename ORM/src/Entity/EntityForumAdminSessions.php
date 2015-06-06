<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumAdminSessions
 *
 * @ORM\Table(name="forum_admin_sessions")
 * @ORM\Entity
 */
class EntityForumAdminSessions
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id = '';

    /**
     * @var string
     *
     * @ORM\Column(name="IP_ADDRESS", type="string", length=32, nullable=false)
     */
    private $ipAddress = '';

    /**
     * @var string
     *
     * @ORM\Column(name="MEMBER_NAME", type="string", length=32, nullable=false)
     */
    private $memberName = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="MEMBER_ID", type="integer", nullable=false)
     */
    private $memberId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SESSION_KEY", type="string", length=32, nullable=false)
     */
    private $sessionKey = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LOCATION", type="string", length=64, nullable=true)
     */
    private $location = 'index';

    /**
     * @var integer
     *
     * @ORM\Column(name="LOG_IN_TIME", type="integer", nullable=false)
     */
    private $logInTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RUNNING_TIME", type="integer", nullable=false)
     */
    private $runningTime = '0';



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
     * Set ipAddress
     *
     * @param string $ipAddress
     *
     * @return EntityForumAdminSessions
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
     * Set memberName
     *
     * @param string $memberName
     *
     * @return EntityForumAdminSessions
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
     * @return EntityForumAdminSessions
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
     * Set sessionKey
     *
     * @param string $sessionKey
     *
     * @return EntityForumAdminSessions
     */
    public function setSessionKey($sessionKey)
    {
        $this->sessionKey = $sessionKey;

        return $this;
    }

    /**
     * Get sessionKey
     *
     * @return string
     */
    public function getSessionKey()
    {
        return $this->sessionKey;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return EntityForumAdminSessions
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
     * Set logInTime
     *
     * @param integer $logInTime
     *
     * @return EntityForumAdminSessions
     */
    public function setLogInTime($logInTime)
    {
        $this->logInTime = $logInTime;

        return $this;
    }

    /**
     * Get logInTime
     *
     * @return integer
     */
    public function getLogInTime()
    {
        return $this->logInTime;
    }

    /**
     * Set runningTime
     *
     * @param integer $runningTime
     *
     * @return EntityForumAdminSessions
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
}
