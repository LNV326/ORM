<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumModerators
 *
 * @ORM\Table(name="forum_moderators", indexes={@ORM\Index(name="forum_id", columns={"forum_id"}), @ORM\Index(name="group_id", columns={"group_id"}), @ORM\Index(name="member_id", columns={"member_id"})})
 * @ORM\Entity
 */
class EntityForumModerators
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mid;

    /**
     * @var integer
     *
     * @ORM\Column(name="forum_id", type="integer", nullable=false)
     */
    private $forumId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="member_name", type="string", length=32, nullable=false)
     */
    private $memberName = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="member_id", type="integer", nullable=false)
     */
    private $memberId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="edit_post", type="boolean", nullable=true)
     */
    private $editPost;

    /**
     * @var boolean
     *
     * @ORM\Column(name="edit_topic", type="boolean", nullable=true)
     */
    private $editTopic;

    /**
     * @var boolean
     *
     * @ORM\Column(name="delete_post", type="boolean", nullable=true)
     */
    private $deletePost;

    /**
     * @var boolean
     *
     * @ORM\Column(name="delete_topic", type="boolean", nullable=true)
     */
    private $deleteTopic;

    /**
     * @var boolean
     *
     * @ORM\Column(name="view_ip", type="boolean", nullable=true)
     */
    private $viewIp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="open_topic", type="boolean", nullable=true)
     */
    private $openTopic;

    /**
     * @var boolean
     *
     * @ORM\Column(name="close_topic", type="boolean", nullable=true)
     */
    private $closeTopic;

    /**
     * @var boolean
     *
     * @ORM\Column(name="mass_move", type="boolean", nullable=true)
     */
    private $massMove;

    /**
     * @var boolean
     *
     * @ORM\Column(name="mass_prune", type="boolean", nullable=true)
     */
    private $massPrune;

    /**
     * @var boolean
     *
     * @ORM\Column(name="move_topic", type="boolean", nullable=true)
     */
    private $moveTopic;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pin_topic", type="boolean", nullable=true)
     */
    private $pinTopic;

    /**
     * @var boolean
     *
     * @ORM\Column(name="unpin_topic", type="boolean", nullable=true)
     */
    private $unpinTopic;

    /**
     * @var boolean
     *
     * @ORM\Column(name="post_q", type="boolean", nullable=true)
     */
    private $postQ;

    /**
     * @var boolean
     *
     * @ORM\Column(name="topic_q", type="boolean", nullable=true)
     */
    private $topicQ;

    /**
     * @var boolean
     *
     * @ORM\Column(name="allow_warn", type="boolean", nullable=true)
     */
    private $allowWarn;

    /**
     * @var boolean
     *
     * @ORM\Column(name="edit_user", type="boolean", nullable=false)
     */
    private $editUser = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_group", type="boolean", nullable=true)
     */
    private $isGroup = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="group_id", type="smallint", nullable=true)
     */
    private $groupId;

    /**
     * @var string
     *
     * @ORM\Column(name="group_name", type="string", length=200, nullable=true)
     */
    private $groupName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="split_merge", type="boolean", nullable=true)
     */
    private $splitMerge = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="can_mm", type="boolean", nullable=false)
     */
    private $canMm = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="pin_first_post_topic", type="boolean", nullable=false)
     */
    private $pinFirstPostTopic = '0';



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
     * Set forumId
     *
     * @param integer $forumId
     *
     * @return EntityForumModerators
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
     * Set memberName
     *
     * @param string $memberName
     *
     * @return EntityForumModerators
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
     * @return EntityForumModerators
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
     * Set editPost
     *
     * @param boolean $editPost
     *
     * @return EntityForumModerators
     */
    public function setEditPost($editPost)
    {
        $this->editPost = $editPost;

        return $this;
    }

    /**
     * Get editPost
     *
     * @return boolean
     */
    public function getEditPost()
    {
        return $this->editPost;
    }

    /**
     * Set editTopic
     *
     * @param boolean $editTopic
     *
     * @return EntityForumModerators
     */
    public function setEditTopic($editTopic)
    {
        $this->editTopic = $editTopic;

        return $this;
    }

    /**
     * Get editTopic
     *
     * @return boolean
     */
    public function getEditTopic()
    {
        return $this->editTopic;
    }

    /**
     * Set deletePost
     *
     * @param boolean $deletePost
     *
     * @return EntityForumModerators
     */
    public function setDeletePost($deletePost)
    {
        $this->deletePost = $deletePost;

        return $this;
    }

    /**
     * Get deletePost
     *
     * @return boolean
     */
    public function getDeletePost()
    {
        return $this->deletePost;
    }

    /**
     * Set deleteTopic
     *
     * @param boolean $deleteTopic
     *
     * @return EntityForumModerators
     */
    public function setDeleteTopic($deleteTopic)
    {
        $this->deleteTopic = $deleteTopic;

        return $this;
    }

    /**
     * Get deleteTopic
     *
     * @return boolean
     */
    public function getDeleteTopic()
    {
        return $this->deleteTopic;
    }

    /**
     * Set viewIp
     *
     * @param boolean $viewIp
     *
     * @return EntityForumModerators
     */
    public function setViewIp($viewIp)
    {
        $this->viewIp = $viewIp;

        return $this;
    }

    /**
     * Get viewIp
     *
     * @return boolean
     */
    public function getViewIp()
    {
        return $this->viewIp;
    }

    /**
     * Set openTopic
     *
     * @param boolean $openTopic
     *
     * @return EntityForumModerators
     */
    public function setOpenTopic($openTopic)
    {
        $this->openTopic = $openTopic;

        return $this;
    }

    /**
     * Get openTopic
     *
     * @return boolean
     */
    public function getOpenTopic()
    {
        return $this->openTopic;
    }

    /**
     * Set closeTopic
     *
     * @param boolean $closeTopic
     *
     * @return EntityForumModerators
     */
    public function setCloseTopic($closeTopic)
    {
        $this->closeTopic = $closeTopic;

        return $this;
    }

    /**
     * Get closeTopic
     *
     * @return boolean
     */
    public function getCloseTopic()
    {
        return $this->closeTopic;
    }

    /**
     * Set massMove
     *
     * @param boolean $massMove
     *
     * @return EntityForumModerators
     */
    public function setMassMove($massMove)
    {
        $this->massMove = $massMove;

        return $this;
    }

    /**
     * Get massMove
     *
     * @return boolean
     */
    public function getMassMove()
    {
        return $this->massMove;
    }

    /**
     * Set massPrune
     *
     * @param boolean $massPrune
     *
     * @return EntityForumModerators
     */
    public function setMassPrune($massPrune)
    {
        $this->massPrune = $massPrune;

        return $this;
    }

    /**
     * Get massPrune
     *
     * @return boolean
     */
    public function getMassPrune()
    {
        return $this->massPrune;
    }

    /**
     * Set moveTopic
     *
     * @param boolean $moveTopic
     *
     * @return EntityForumModerators
     */
    public function setMoveTopic($moveTopic)
    {
        $this->moveTopic = $moveTopic;

        return $this;
    }

    /**
     * Get moveTopic
     *
     * @return boolean
     */
    public function getMoveTopic()
    {
        return $this->moveTopic;
    }

    /**
     * Set pinTopic
     *
     * @param boolean $pinTopic
     *
     * @return EntityForumModerators
     */
    public function setPinTopic($pinTopic)
    {
        $this->pinTopic = $pinTopic;

        return $this;
    }

    /**
     * Get pinTopic
     *
     * @return boolean
     */
    public function getPinTopic()
    {
        return $this->pinTopic;
    }

    /**
     * Set unpinTopic
     *
     * @param boolean $unpinTopic
     *
     * @return EntityForumModerators
     */
    public function setUnpinTopic($unpinTopic)
    {
        $this->unpinTopic = $unpinTopic;

        return $this;
    }

    /**
     * Get unpinTopic
     *
     * @return boolean
     */
    public function getUnpinTopic()
    {
        return $this->unpinTopic;
    }

    /**
     * Set postQ
     *
     * @param boolean $postQ
     *
     * @return EntityForumModerators
     */
    public function setPostQ($postQ)
    {
        $this->postQ = $postQ;

        return $this;
    }

    /**
     * Get postQ
     *
     * @return boolean
     */
    public function getPostQ()
    {
        return $this->postQ;
    }

    /**
     * Set topicQ
     *
     * @param boolean $topicQ
     *
     * @return EntityForumModerators
     */
    public function setTopicQ($topicQ)
    {
        $this->topicQ = $topicQ;

        return $this;
    }

    /**
     * Get topicQ
     *
     * @return boolean
     */
    public function getTopicQ()
    {
        return $this->topicQ;
    }

    /**
     * Set allowWarn
     *
     * @param boolean $allowWarn
     *
     * @return EntityForumModerators
     */
    public function setAllowWarn($allowWarn)
    {
        $this->allowWarn = $allowWarn;

        return $this;
    }

    /**
     * Get allowWarn
     *
     * @return boolean
     */
    public function getAllowWarn()
    {
        return $this->allowWarn;
    }

    /**
     * Set editUser
     *
     * @param boolean $editUser
     *
     * @return EntityForumModerators
     */
    public function setEditUser($editUser)
    {
        $this->editUser = $editUser;

        return $this;
    }

    /**
     * Get editUser
     *
     * @return boolean
     */
    public function getEditUser()
    {
        return $this->editUser;
    }

    /**
     * Set isGroup
     *
     * @param boolean $isGroup
     *
     * @return EntityForumModerators
     */
    public function setIsGroup($isGroup)
    {
        $this->isGroup = $isGroup;

        return $this;
    }

    /**
     * Get isGroup
     *
     * @return boolean
     */
    public function getIsGroup()
    {
        return $this->isGroup;
    }

    /**
     * Set groupId
     *
     * @param integer $groupId
     *
     * @return EntityForumModerators
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * Get groupId
     *
     * @return integer
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Set groupName
     *
     * @param string $groupName
     *
     * @return EntityForumModerators
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;

        return $this;
    }

    /**
     * Get groupName
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * Set splitMerge
     *
     * @param boolean $splitMerge
     *
     * @return EntityForumModerators
     */
    public function setSplitMerge($splitMerge)
    {
        $this->splitMerge = $splitMerge;

        return $this;
    }

    /**
     * Get splitMerge
     *
     * @return boolean
     */
    public function getSplitMerge()
    {
        return $this->splitMerge;
    }

    /**
     * Set canMm
     *
     * @param boolean $canMm
     *
     * @return EntityForumModerators
     */
    public function setCanMm($canMm)
    {
        $this->canMm = $canMm;

        return $this;
    }

    /**
     * Get canMm
     *
     * @return boolean
     */
    public function getCanMm()
    {
        return $this->canMm;
    }

    /**
     * Set pinFirstPostTopic
     *
     * @param boolean $pinFirstPostTopic
     *
     * @return EntityForumModerators
     */
    public function setPinFirstPostTopic($pinFirstPostTopic)
    {
        $this->pinFirstPostTopic = $pinFirstPostTopic;

        return $this;
    }

    /**
     * Get pinFirstPostTopic
     *
     * @return boolean
     */
    public function getPinFirstPostTopic()
    {
        return $this->pinFirstPostTopic;
    }
}
