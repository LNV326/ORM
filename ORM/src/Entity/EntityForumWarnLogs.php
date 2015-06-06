<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumWarnLogs
 *
 * @ORM\Table(name="forum_warn_logs")
 * @ORM\Entity
 */
class EntityForumWarnLogs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="wlog_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $wlogId;

    /**
     * @var integer
     *
     * @ORM\Column(name="wlog_mid", type="integer", nullable=false)
     */
    private $wlogMid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="wlog_notes", type="text", length=65535, nullable=false)
     */
    private $wlogNotes;

    /**
     * @var string
     *
     * @ORM\Column(name="wlog_contact", type="string", length=250, nullable=false)
     */
    private $wlogContact = 'none';

    /**
     * @var string
     *
     * @ORM\Column(name="wlog_contact_content", type="text", length=65535, nullable=false)
     */
    private $wlogContactContent;

    /**
     * @var integer
     *
     * @ORM\Column(name="wlog_date", type="integer", nullable=false)
     */
    private $wlogDate = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="wlog_type", type="string", length=6, nullable=false)
     */
    private $wlogType = 'pos';

    /**
     * @var integer
     *
     * @ORM\Column(name="wlog_addedby", type="integer", nullable=false)
     */
    private $wlogAddedby = '0';



    /**
     * Get wlogId
     *
     * @return integer
     */
    public function getWlogId()
    {
        return $this->wlogId;
    }

    /**
     * Set wlogMid
     *
     * @param integer $wlogMid
     *
     * @return EntityForumWarnLogs
     */
    public function setWlogMid($wlogMid)
    {
        $this->wlogMid = $wlogMid;

        return $this;
    }

    /**
     * Get wlogMid
     *
     * @return integer
     */
    public function getWlogMid()
    {
        return $this->wlogMid;
    }

    /**
     * Set wlogNotes
     *
     * @param string $wlogNotes
     *
     * @return EntityForumWarnLogs
     */
    public function setWlogNotes($wlogNotes)
    {
        $this->wlogNotes = $wlogNotes;

        return $this;
    }

    /**
     * Get wlogNotes
     *
     * @return string
     */
    public function getWlogNotes()
    {
        return $this->wlogNotes;
    }

    /**
     * Set wlogContact
     *
     * @param string $wlogContact
     *
     * @return EntityForumWarnLogs
     */
    public function setWlogContact($wlogContact)
    {
        $this->wlogContact = $wlogContact;

        return $this;
    }

    /**
     * Get wlogContact
     *
     * @return string
     */
    public function getWlogContact()
    {
        return $this->wlogContact;
    }

    /**
     * Set wlogContactContent
     *
     * @param string $wlogContactContent
     *
     * @return EntityForumWarnLogs
     */
    public function setWlogContactContent($wlogContactContent)
    {
        $this->wlogContactContent = $wlogContactContent;

        return $this;
    }

    /**
     * Get wlogContactContent
     *
     * @return string
     */
    public function getWlogContactContent()
    {
        return $this->wlogContactContent;
    }

    /**
     * Set wlogDate
     *
     * @param integer $wlogDate
     *
     * @return EntityForumWarnLogs
     */
    public function setWlogDate($wlogDate)
    {
        $this->wlogDate = $wlogDate;

        return $this;
    }

    /**
     * Get wlogDate
     *
     * @return integer
     */
    public function getWlogDate()
    {
        return $this->wlogDate;
    }

    /**
     * Set wlogType
     *
     * @param string $wlogType
     *
     * @return EntityForumWarnLogs
     */
    public function setWlogType($wlogType)
    {
        $this->wlogType = $wlogType;

        return $this;
    }

    /**
     * Get wlogType
     *
     * @return string
     */
    public function getWlogType()
    {
        return $this->wlogType;
    }

    /**
     * Set wlogAddedby
     *
     * @param integer $wlogAddedby
     *
     * @return EntityForumWarnLogs
     */
    public function setWlogAddedby($wlogAddedby)
    {
        $this->wlogAddedby = $wlogAddedby;

        return $this;
    }

    /**
     * Get wlogAddedby
     *
     * @return integer
     */
    public function getWlogAddedby()
    {
        return $this->wlogAddedby;
    }
}
