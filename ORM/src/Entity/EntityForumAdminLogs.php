<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumAdminLogs
 *
 * @ORM\Table(name="forum_admin_logs")
 * @ORM\Entity
 */
class EntityForumAdminLogs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="act", type="string", length=255, nullable=true)
     */
    private $act;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255, nullable=true)
     */
    private $code;

    /**
     * @var integer
     *
     * @ORM\Column(name="member_id", type="integer", nullable=true)
     */
    private $memberId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ctime", type="integer", nullable=true)
     */
    private $ctime;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_address", type="string", length=255, nullable=true)
     */
    private $ipAddress;



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
     * Set act
     *
     * @param string $act
     *
     * @return EntityForumAdminLogs
     */
    public function setAct($act)
    {
        $this->act = $act;

        return $this;
    }

    /**
     * Get act
     *
     * @return string
     */
    public function getAct()
    {
        return $this->act;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return EntityForumAdminLogs
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
     * Set memberId
     *
     * @param integer $memberId
     *
     * @return EntityForumAdminLogs
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
     * Set ctime
     *
     * @param integer $ctime
     *
     * @return EntityForumAdminLogs
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
     * Set note
     *
     * @param string $note
     *
     * @return EntityForumAdminLogs
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set ipAddress
     *
     * @param string $ipAddress
     *
     * @return EntityForumAdminLogs
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
}
