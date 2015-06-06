<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumPosts
 *
 * @ORM\Table(name="forum_posts", indexes={@ORM\Index(name="topic_id", columns={"topic_id", "author_id"}), @ORM\Index(name="author_id", columns={"author_id"}), @ORM\Index(name="forum_id", columns={"forum_id", "post_date"}), @ORM\Index(name="post_date", columns={"post_date"}), @ORM\Index(name="ip_address", columns={"ip_address"}), @ORM\Index(name="attach_id", columns={"attach_id"}), @ORM\Index(name="post", columns={"post"})})
 * @ORM\Entity
 */
class EntityForumPosts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="append_edit", type="boolean", nullable=true)
     */
    private $appendEdit = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="edit_time", type="integer", nullable=true)
     */
    private $editTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="author_id", type="integer", nullable=false)
     */
    private $authorId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="author_name", type="string", length=32, nullable=true)
     */
    private $authorName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="use_sig", type="boolean", nullable=false)
     */
    private $useSig = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="use_emo", type="boolean", nullable=false)
     */
    private $useEmo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_address", type="string", length=16, nullable=false)
     */
    private $ipAddress = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="post_date", type="integer", nullable=true)
     */
    private $postDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="icon_id", type="smallint", nullable=true)
     */
    private $iconId;

    /**
     * @var string
     *
     * @ORM\Column(name="post", type="text", length=65535, nullable=true)
     */
    private $post;

    /**
     * @var boolean
     *
     * @ORM\Column(name="queued", type="boolean", nullable=true)
     */
    private $queued;

    /**
     * @var integer
     *
     * @ORM\Column(name="topic_id", type="integer", nullable=false)
     */
    private $topicId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="forum_id", type="smallint", nullable=false)
     */
    private $forumId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="attach_id", type="string", length=64, nullable=true)
     */
    private $attachId;

    /**
     * @var integer
     *
     * @ORM\Column(name="attach_hits", type="integer", nullable=true)
     */
    private $attachHits;

    /**
     * @var string
     *
     * @ORM\Column(name="attach_type", type="string", length=128, nullable=true)
     */
    private $attachType;

    /**
     * @var string
     *
     * @ORM\Column(name="attach_file", type="string", length=255, nullable=true)
     */
    private $attachFile;

    /**
     * @var boolean
     *
     * @ORM\Column(name="new_topic", type="boolean", nullable=true)
     */
    private $newTopic = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="edit_name", type="string", length=255, nullable=true)
     */
    private $editName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="has_modcomment", type="boolean", nullable=true)
     */
    private $hasModcomment = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="MarkDeleted", type="boolean", nullable=true)
     */
    private $markdeleted;



    /**
     * Get pid
     *
     * @return integer
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Set appendEdit
     *
     * @param boolean $appendEdit
     *
     * @return EntityForumPosts
     */
    public function setAppendEdit($appendEdit)
    {
        $this->appendEdit = $appendEdit;

        return $this;
    }

    /**
     * Get appendEdit
     *
     * @return boolean
     */
    public function getAppendEdit()
    {
        return $this->appendEdit;
    }

    /**
     * Set editTime
     *
     * @param integer $editTime
     *
     * @return EntityForumPosts
     */
    public function setEditTime($editTime)
    {
        $this->editTime = $editTime;

        return $this;
    }

    /**
     * Get editTime
     *
     * @return integer
     */
    public function getEditTime()
    {
        return $this->editTime;
    }

    /**
     * Set authorId
     *
     * @param integer $authorId
     *
     * @return EntityForumPosts
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;

        return $this;
    }

    /**
     * Get authorId
     *
     * @return integer
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * Set authorName
     *
     * @param string $authorName
     *
     * @return EntityForumPosts
     */
    public function setAuthorName($authorName)
    {
        $this->authorName = $authorName;

        return $this;
    }

    /**
     * Get authorName
     *
     * @return string
     */
    public function getAuthorName()
    {
        return $this->authorName;
    }

    /**
     * Set useSig
     *
     * @param boolean $useSig
     *
     * @return EntityForumPosts
     */
    public function setUseSig($useSig)
    {
        $this->useSig = $useSig;

        return $this;
    }

    /**
     * Get useSig
     *
     * @return boolean
     */
    public function getUseSig()
    {
        return $this->useSig;
    }

    /**
     * Set useEmo
     *
     * @param boolean $useEmo
     *
     * @return EntityForumPosts
     */
    public function setUseEmo($useEmo)
    {
        $this->useEmo = $useEmo;

        return $this;
    }

    /**
     * Get useEmo
     *
     * @return boolean
     */
    public function getUseEmo()
    {
        return $this->useEmo;
    }

    /**
     * Set ipAddress
     *
     * @param string $ipAddress
     *
     * @return EntityForumPosts
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
     * Set postDate
     *
     * @param integer $postDate
     *
     * @return EntityForumPosts
     */
    public function setPostDate($postDate)
    {
        $this->postDate = $postDate;

        return $this;
    }

    /**
     * Get postDate
     *
     * @return integer
     */
    public function getPostDate()
    {
        return $this->postDate;
    }

    /**
     * Set iconId
     *
     * @param integer $iconId
     *
     * @return EntityForumPosts
     */
    public function setIconId($iconId)
    {
        $this->iconId = $iconId;

        return $this;
    }

    /**
     * Get iconId
     *
     * @return integer
     */
    public function getIconId()
    {
        return $this->iconId;
    }

    /**
     * Set post
     *
     * @param string $post
     *
     * @return EntityForumPosts
     */
    public function setPost($post)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return string
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * Set queued
     *
     * @param boolean $queued
     *
     * @return EntityForumPosts
     */
    public function setQueued($queued)
    {
        $this->queued = $queued;

        return $this;
    }

    /**
     * Get queued
     *
     * @return boolean
     */
    public function getQueued()
    {
        return $this->queued;
    }

    /**
     * Set topicId
     *
     * @param integer $topicId
     *
     * @return EntityForumPosts
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
     * Set forumId
     *
     * @param integer $forumId
     *
     * @return EntityForumPosts
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
     * Set attachId
     *
     * @param string $attachId
     *
     * @return EntityForumPosts
     */
    public function setAttachId($attachId)
    {
        $this->attachId = $attachId;

        return $this;
    }

    /**
     * Get attachId
     *
     * @return string
     */
    public function getAttachId()
    {
        return $this->attachId;
    }

    /**
     * Set attachHits
     *
     * @param integer $attachHits
     *
     * @return EntityForumPosts
     */
    public function setAttachHits($attachHits)
    {
        $this->attachHits = $attachHits;

        return $this;
    }

    /**
     * Get attachHits
     *
     * @return integer
     */
    public function getAttachHits()
    {
        return $this->attachHits;
    }

    /**
     * Set attachType
     *
     * @param string $attachType
     *
     * @return EntityForumPosts
     */
    public function setAttachType($attachType)
    {
        $this->attachType = $attachType;

        return $this;
    }

    /**
     * Get attachType
     *
     * @return string
     */
    public function getAttachType()
    {
        return $this->attachType;
    }

    /**
     * Set attachFile
     *
     * @param string $attachFile
     *
     * @return EntityForumPosts
     */
    public function setAttachFile($attachFile)
    {
        $this->attachFile = $attachFile;

        return $this;
    }

    /**
     * Get attachFile
     *
     * @return string
     */
    public function getAttachFile()
    {
        return $this->attachFile;
    }

    /**
     * Set newTopic
     *
     * @param boolean $newTopic
     *
     * @return EntityForumPosts
     */
    public function setNewTopic($newTopic)
    {
        $this->newTopic = $newTopic;

        return $this;
    }

    /**
     * Get newTopic
     *
     * @return boolean
     */
    public function getNewTopic()
    {
        return $this->newTopic;
    }

    /**
     * Set editName
     *
     * @param string $editName
     *
     * @return EntityForumPosts
     */
    public function setEditName($editName)
    {
        $this->editName = $editName;

        return $this;
    }

    /**
     * Get editName
     *
     * @return string
     */
    public function getEditName()
    {
        return $this->editName;
    }

    /**
     * Set hasModcomment
     *
     * @param boolean $hasModcomment
     *
     * @return EntityForumPosts
     */
    public function setHasModcomment($hasModcomment)
    {
        $this->hasModcomment = $hasModcomment;

        return $this;
    }

    /**
     * Get hasModcomment
     *
     * @return boolean
     */
    public function getHasModcomment()
    {
        return $this->hasModcomment;
    }

    /**
     * Set markdeleted
     *
     * @param boolean $markdeleted
     *
     * @return EntityForumPosts
     */
    public function setMarkdeleted($markdeleted)
    {
        $this->markdeleted = $markdeleted;

        return $this;
    }

    /**
     * Get markdeleted
     *
     * @return boolean
     */
    public function getMarkdeleted()
    {
        return $this->markdeleted;
    }
}
