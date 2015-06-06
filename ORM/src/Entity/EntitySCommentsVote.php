<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntitySCommentsVote
 *
 * @ORM\Table(name="s_comments_vote", indexes={@ORM\Index(name="comment_id", columns={"comment_id"}), @ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class EntitySCommentsVote
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
     * @var integer
     *
     * @ORM\Column(name="comment_id", type="integer", nullable=true)
     */
    private $commentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="comment_user", type="integer", nullable=false)
     */
    private $commentUser = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=31, nullable=false)
     */
    private $module = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="module_id", type="integer", nullable=false)
     */
    private $moduleId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", nullable=false)
     */
    private $value = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date = '0000-00-00 00:00:00';



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
     * Set commentId
     *
     * @param integer $commentId
     *
     * @return EntitySCommentsVote
     */
    public function setCommentId($commentId)
    {
        $this->commentId = $commentId;

        return $this;
    }

    /**
     * Get commentId
     *
     * @return integer
     */
    public function getCommentId()
    {
        return $this->commentId;
    }

    /**
     * Set commentUser
     *
     * @param integer $commentUser
     *
     * @return EntitySCommentsVote
     */
    public function setCommentUser($commentUser)
    {
        $this->commentUser = $commentUser;

        return $this;
    }

    /**
     * Get commentUser
     *
     * @return integer
     */
    public function getCommentUser()
    {
        return $this->commentUser;
    }

    /**
     * Set module
     *
     * @param string $module
     *
     * @return EntitySCommentsVote
     */
    public function setModule($module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return string
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set moduleId
     *
     * @param integer $moduleId
     *
     * @return EntitySCommentsVote
     */
    public function setModuleId($moduleId)
    {
        $this->moduleId = $moduleId;

        return $this;
    }

    /**
     * Get moduleId
     *
     * @return integer
     */
    public function getModuleId()
    {
        return $this->moduleId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return EntitySCommentsVote
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return EntitySCommentsVote
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return EntitySCommentsVote
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
}
