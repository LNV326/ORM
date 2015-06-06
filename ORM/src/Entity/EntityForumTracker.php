<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumTracker
 *
 * @ORM\Table(name="forum_tracker", indexes={@ORM\Index(name="member_id", columns={"member_id"}), @ORM\Index(name="topic_id", columns={"topic_id"})})
 * @ORM\Entity
 */
class EntityForumTracker
{
    /**
     * @var integer
     *
     * @ORM\Column(name="trid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $trid;

    /**
     * @var integer
     *
     * @ORM\Column(name="member_id", type="integer", nullable=false)
     */
    private $memberId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="topic_id", type="bigint", nullable=false)
     */
    private $topicId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="start_date", type="integer", nullable=true)
     */
    private $startDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_sent", type="integer", nullable=false)
     */
    private $lastSent = '0';



    /**
     * Get trid
     *
     * @return integer
     */
    public function getTrid()
    {
        return $this->trid;
    }

    /**
     * Set memberId
     *
     * @param integer $memberId
     *
     * @return EntityForumTracker
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
     * Set topicId
     *
     * @param integer $topicId
     *
     * @return EntityForumTracker
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
     * Set startDate
     *
     * @param integer $startDate
     *
     * @return EntityForumTracker
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return integer
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set lastSent
     *
     * @param integer $lastSent
     *
     * @return EntityForumTracker
     */
    public function setLastSent($lastSent)
    {
        $this->lastSent = $lastSent;

        return $this;
    }

    /**
     * Get lastSent
     *
     * @return integer
     */
    public function getLastSent()
    {
        return $this->lastSent;
    }
}
