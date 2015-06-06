<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumEmailLogs
 *
 * @ORM\Table(name="forum_email_logs", indexes={@ORM\Index(name="from_member_id", columns={"from_member_id"}), @ORM\Index(name="email_date", columns={"email_date"})})
 * @ORM\Entity
 */
class EntityForumEmailLogs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="email_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $emailId;

    /**
     * @var string
     *
     * @ORM\Column(name="email_subject", type="string", length=255, nullable=false)
     */
    private $emailSubject = '';

    /**
     * @var string
     *
     * @ORM\Column(name="email_content", type="text", length=65535, nullable=false)
     */
    private $emailContent;

    /**
     * @var integer
     *
     * @ORM\Column(name="email_date", type="integer", nullable=false)
     */
    private $emailDate = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="from_member_id", type="integer", nullable=false)
     */
    private $fromMemberId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="from_email_address", type="string", length=250, nullable=false)
     */
    private $fromEmailAddress = '';

    /**
     * @var string
     *
     * @ORM\Column(name="from_ip_address", type="string", length=16, nullable=false)
     */
    private $fromIpAddress = '127.0.0.1';

    /**
     * @var integer
     *
     * @ORM\Column(name="to_member_id", type="integer", nullable=false)
     */
    private $toMemberId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="to_email_address", type="string", length=250, nullable=false)
     */
    private $toEmailAddress = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="topic_id", type="integer", nullable=false)
     */
    private $topicId = '0';



    /**
     * Get emailId
     *
     * @return integer
     */
    public function getEmailId()
    {
        return $this->emailId;
    }

    /**
     * Set emailSubject
     *
     * @param string $emailSubject
     *
     * @return EntityForumEmailLogs
     */
    public function setEmailSubject($emailSubject)
    {
        $this->emailSubject = $emailSubject;

        return $this;
    }

    /**
     * Get emailSubject
     *
     * @return string
     */
    public function getEmailSubject()
    {
        return $this->emailSubject;
    }

    /**
     * Set emailContent
     *
     * @param string $emailContent
     *
     * @return EntityForumEmailLogs
     */
    public function setEmailContent($emailContent)
    {
        $this->emailContent = $emailContent;

        return $this;
    }

    /**
     * Get emailContent
     *
     * @return string
     */
    public function getEmailContent()
    {
        return $this->emailContent;
    }

    /**
     * Set emailDate
     *
     * @param integer $emailDate
     *
     * @return EntityForumEmailLogs
     */
    public function setEmailDate($emailDate)
    {
        $this->emailDate = $emailDate;

        return $this;
    }

    /**
     * Get emailDate
     *
     * @return integer
     */
    public function getEmailDate()
    {
        return $this->emailDate;
    }

    /**
     * Set fromMemberId
     *
     * @param integer $fromMemberId
     *
     * @return EntityForumEmailLogs
     */
    public function setFromMemberId($fromMemberId)
    {
        $this->fromMemberId = $fromMemberId;

        return $this;
    }

    /**
     * Get fromMemberId
     *
     * @return integer
     */
    public function getFromMemberId()
    {
        return $this->fromMemberId;
    }

    /**
     * Set fromEmailAddress
     *
     * @param string $fromEmailAddress
     *
     * @return EntityForumEmailLogs
     */
    public function setFromEmailAddress($fromEmailAddress)
    {
        $this->fromEmailAddress = $fromEmailAddress;

        return $this;
    }

    /**
     * Get fromEmailAddress
     *
     * @return string
     */
    public function getFromEmailAddress()
    {
        return $this->fromEmailAddress;
    }

    /**
     * Set fromIpAddress
     *
     * @param string $fromIpAddress
     *
     * @return EntityForumEmailLogs
     */
    public function setFromIpAddress($fromIpAddress)
    {
        $this->fromIpAddress = $fromIpAddress;

        return $this;
    }

    /**
     * Get fromIpAddress
     *
     * @return string
     */
    public function getFromIpAddress()
    {
        return $this->fromIpAddress;
    }

    /**
     * Set toMemberId
     *
     * @param integer $toMemberId
     *
     * @return EntityForumEmailLogs
     */
    public function setToMemberId($toMemberId)
    {
        $this->toMemberId = $toMemberId;

        return $this;
    }

    /**
     * Get toMemberId
     *
     * @return integer
     */
    public function getToMemberId()
    {
        return $this->toMemberId;
    }

    /**
     * Set toEmailAddress
     *
     * @param string $toEmailAddress
     *
     * @return EntityForumEmailLogs
     */
    public function setToEmailAddress($toEmailAddress)
    {
        $this->toEmailAddress = $toEmailAddress;

        return $this;
    }

    /**
     * Get toEmailAddress
     *
     * @return string
     */
    public function getToEmailAddress()
    {
        return $this->toEmailAddress;
    }

    /**
     * Set topicId
     *
     * @param integer $topicId
     *
     * @return EntityForumEmailLogs
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
}
