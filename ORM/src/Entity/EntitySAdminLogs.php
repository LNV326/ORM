<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntitySAdminLogs
 *
 * @ORM\Table(name="s_admin_logs")
 * @ORM\Entity
 */
class EntitySAdminLogs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="objid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $objid;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="mid", type="integer", nullable=false)
     */
    private $mid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mname", type="text", length=65535, nullable=false)
     */
    private $mname;

    /**
     * @var string
     *
     * @ORM\Column(name="log", type="text", length=65535, nullable=false)
     */
    private $log;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="text", length=65535, nullable=false)
     */
    private $date;



    /**
     * Get objid
     *
     * @return integer
     */
    public function getObjid()
    {
        return $this->objid;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return EntitySAdminLogs
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Set mid
     *
     * @param integer $mid
     *
     * @return EntitySAdminLogs
     */
    public function setMid($mid)
    {
        $this->mid = $mid;

        return $this;
    }

    /**
     * Get mid
     *
     * @return integer
     */
    public function getMid()
    {
        return $this->mid;
    }

    /**
     * Set mname
     *
     * @param string $mname
     *
     * @return EntitySAdminLogs
     */
    public function setMname($mname)
    {
        $this->mname = $mname;

        return $this;
    }

    /**
     * Get mname
     *
     * @return string
     */
    public function getMname()
    {
        return $this->mname;
    }

    /**
     * Set log
     *
     * @param string $log
     *
     * @return EntitySAdminLogs
     */
    public function setLog($log)
    {
        $this->log = $log;

        return $this;
    }

    /**
     * Get log
     *
     * @return string
     */
    public function getLog()
    {
        return $this->log;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return EntitySAdminLogs
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }
}
