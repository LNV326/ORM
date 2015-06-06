<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumForumTracker
 *
 * @ORM\Table(name="forum_forum_tracker", indexes={@ORM\Index(name="member_id", columns={"member_id"}), @ORM\Index(name="forum_id", columns={"forum_id"})})
 * @ORM\Entity
 */
class EntityForumForumTracker
{
    /**
     * @var integer
     *
     * @ORM\Column(name="frid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $frid;

    /**
     * @var integer
     *
     * @ORM\Column(name="member_id", type="integer", nullable=false)
     */
    private $memberId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="forum_id", type="smallint", nullable=false)
     */
    private $forumId = '0';

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
     * Get frid
     *
     * @return integer
     */
    public function getFrid()
    {
        return $this->frid;
    }

    /**
     * Set memberId
     *
     * @param integer $memberId
     *
     * @return EntityForumForumTracker
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
     * Set forumId
     *
     * @param integer $forumId
     *
     * @return EntityForumForumTracker
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
     * Set startDate
     *
     * @param integer $startDate
     *
     * @return EntityForumForumTracker
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
     * @return EntityForumForumTracker
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
