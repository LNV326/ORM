<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumForums
 *
 * @ORM\Table(name="forum_forums", indexes={@ORM\Index(name="category", columns={"category"}), @ORM\Index(name="name", columns={"name", "position"})})
 * @ORM\Entity(repositoryClass="Repository\EntityForumForumsRep")
 */
class EntityForumForums
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="topics", type="integer", nullable=true)
     */
    private $topics;

    /**
     * @var integer
     *
     * @ORM\Column(name="posts", type="integer", nullable=true)
     */
    private $posts;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_post", type="integer", nullable=true)
     */
    private $lastPost;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_poster_id", type="integer", nullable=false)
     */
    private $lastPosterId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="last_poster_name", type="string", length=32, nullable=true)
     */
    private $lastPosterName;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="position", type="boolean", nullable=true)
     */
    private $position;

    /**
     * @var boolean
     *
     * @ORM\Column(name="use_ibc", type="boolean", nullable=true)
     */
    private $useIbc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="use_html", type="boolean", nullable=true)
     */
    private $useHtml;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="start_perms", type="string", length=255, nullable=false)
     */
    private $startPerms = '';

    /**
     * @var string
     *
     * @ORM\Column(name="reply_perms", type="string", length=255, nullable=false)
     */
    private $replyPerms = '';

    /**
     * @var string
     *
     * @ORM\Column(name="read_perms", type="string", length=255, nullable=false)
     */
    private $readPerms = '';

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=32, nullable=true)
     */
    private $password;

    /**
     * @var boolean
     *
     * @ORM\Column(name="category", type="boolean", nullable=false)
     */
    private $category = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="last_title", type="string", length=128, nullable=true)
     */
    private $lastTitle;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_id", type="integer", nullable=true)
     */
    private $lastId;

    /**
     * @var string
     *
     * @ORM\Column(name="sort_key", type="string", length=32, nullable=true)
     */
    private $sortKey;

    /**
     * @var string
     *
     * @ORM\Column(name="sort_order", type="string", length=32, nullable=true)
     */
    private $sortOrder;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prune", type="boolean", nullable=true)
     */
    private $prune;

    /**
     * @var boolean
     *
     * @ORM\Column(name="show_rules", type="boolean", nullable=true)
     */
    private $showRules;

    /**
     * @var string
     *
     * @ORM\Column(name="upload_perms", type="string", length=255, nullable=true)
     */
    private $uploadPerms;

    /**
     * @var boolean
     *
     * @ORM\Column(name="preview_posts", type="boolean", nullable=true)
     */
    private $previewPosts;

    /**
     * @var boolean
     *
     * @ORM\Column(name="allow_poll", type="boolean", nullable=false)
     */
    private $allowPoll = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allow_pollbump", type="boolean", nullable=false)
     */
    private $allowPollbump = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="inc_postcount", type="boolean", nullable=false)
     */
    private $incPostcount = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="skin_id", type="integer", nullable=true)
     */
    private $skinId;

    /**
     * @var integer
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=true)
     */
    private $parentId = '-1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="subwrap", type="boolean", nullable=true)
     */
    private $subwrap = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="sub_can_post", type="boolean", nullable=true)
     */
    private $subCanPost = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="quick_reply", type="boolean", nullable=true)
     */
    private $quickReply = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="redirect_url", type="string", length=250, nullable=true)
     */
    private $redirectUrl = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="redirect_on", type="boolean", nullable=false)
     */
    private $redirectOn = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="redirect_hits", type="integer", nullable=false)
     */
    private $redirectHits = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="redirect_loc", type="string", length=250, nullable=true)
     */
    private $redirectLoc = '';

    /**
     * @var string
     *
     * @ORM\Column(name="rules_title", type="string", length=255, nullable=false)
     */
    private $rulesTitle = '';

    /**
     * @var string
     *
     * @ORM\Column(name="rules_text", type="text", length=65535, nullable=false)
     */
    private $rulesText;

    /**
     * @var boolean
     *
     * @ORM\Column(name="has_mod_posts", type="boolean", nullable=false)
     */
    private $hasModPosts = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="topic_mm_id", type="string", length=250, nullable=false)
     */
    private $topicMmId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="notify_modq_emails", type="text", length=65535, nullable=true)
     */
    private $notifyModqEmails;

    /**
     * @var string
     *
     * @ORM\Column(name="forum_icons", type="string", length=128, nullable=true)
     */
    private $forumIcons;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rating", type="boolean", nullable=false)
     */
    private $rating = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="fluder_forum", type="boolean", nullable=true)
     */
    private $fluderForum = '0';



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
     * Set topics
     *
     * @param integer $topics
     *
     * @return EntityForumForums
     */
    public function setTopics($topics)
    {
        $this->topics = $topics;

        return $this;
    }

    /**
     * Get topics
     *
     * @return integer
     */
    public function getTopics()
    {
        return $this->topics;
    }

    /**
     * Set posts
     *
     * @param integer $posts
     *
     * @return EntityForumForums
     */
    public function setPosts($posts)
    {
        $this->posts = $posts;

        return $this;
    }

    /**
     * Get posts
     *
     * @return integer
     */
    public function getPosts()
    {
        return $this->posts;
    }

    /**
     * Set lastPost
     *
     * @param integer $lastPost
     *
     * @return EntityForumForums
     */
    public function setLastPost($lastPost)
    {
        $this->lastPost = $lastPost;

        return $this;
    }

    /**
     * Get lastPost
     *
     * @return integer
     */
    public function getLastPost()
    {
        return $this->lastPost;
    }

    /**
     * Set lastPosterId
     *
     * @param integer $lastPosterId
     *
     * @return EntityForumForums
     */
    public function setLastPosterId($lastPosterId)
    {
        $this->lastPosterId = $lastPosterId;

        return $this;
    }

    /**
     * Get lastPosterId
     *
     * @return integer
     */
    public function getLastPosterId()
    {
        return $this->lastPosterId;
    }

    /**
     * Set lastPosterName
     *
     * @param string $lastPosterName
     *
     * @return EntityForumForums
     */
    public function setLastPosterName($lastPosterName)
    {
        $this->lastPosterName = $lastPosterName;

        return $this;
    }

    /**
     * Get lastPosterName
     *
     * @return string
     */
    public function getLastPosterName()
    {
        return $this->lastPosterName;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return EntityForumForums
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return EntityForumForums
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set position
     *
     * @param boolean $position
     *
     * @return EntityForumForums
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return boolean
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set useIbc
     *
     * @param boolean $useIbc
     *
     * @return EntityForumForums
     */
    public function setUseIbc($useIbc)
    {
        $this->useIbc = $useIbc;

        return $this;
    }

    /**
     * Get useIbc
     *
     * @return boolean
     */
    public function getUseIbc()
    {
        return $this->useIbc;
    }

    /**
     * Set useHtml
     *
     * @param boolean $useHtml
     *
     * @return EntityForumForums
     */
    public function setUseHtml($useHtml)
    {
        $this->useHtml = $useHtml;

        return $this;
    }

    /**
     * Get useHtml
     *
     * @return boolean
     */
    public function getUseHtml()
    {
        return $this->useHtml;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return EntityForumForums
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set startPerms
     *
     * @param string $startPerms
     *
     * @return EntityForumForums
     */
    public function setStartPerms($startPerms)
    {
        $this->startPerms = $startPerms;

        return $this;
    }

    /**
     * Get startPerms
     *
     * @return string
     */
    public function getStartPerms()
    {
        return $this->startPerms;
    }

    /**
     * Set replyPerms
     *
     * @param string $replyPerms
     *
     * @return EntityForumForums
     */
    public function setReplyPerms($replyPerms)
    {
        $this->replyPerms = $replyPerms;

        return $this;
    }

    /**
     * Get replyPerms
     *
     * @return string
     */
    public function getReplyPerms()
    {
        return $this->replyPerms;
    }

    /**
     * Set readPerms
     *
     * @param string $readPerms
     *
     * @return EntityForumForums
     */
    public function setReadPerms($readPerms)
    {
        $this->readPerms = $readPerms;

        return $this;
    }

    /**
     * Get readPerms
     *
     * @return string
     */
    public function getReadPerms()
    {
        return $this->readPerms;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return EntityForumForums
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set category
     *
     * @param boolean $category
     *
     * @return EntityForumForums
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return boolean
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set lastTitle
     *
     * @param string $lastTitle
     *
     * @return EntityForumForums
     */
    public function setLastTitle($lastTitle)
    {
        $this->lastTitle = $lastTitle;

        return $this;
    }

    /**
     * Get lastTitle
     *
     * @return string
     */
    public function getLastTitle()
    {
        return $this->lastTitle;
    }

    /**
     * Set lastId
     *
     * @param integer $lastId
     *
     * @return EntityForumForums
     */
    public function setLastId($lastId)
    {
        $this->lastId = $lastId;

        return $this;
    }

    /**
     * Get lastId
     *
     * @return integer
     */
    public function getLastId()
    {
        return $this->lastId;
    }

    /**
     * Set sortKey
     *
     * @param string $sortKey
     *
     * @return EntityForumForums
     */
    public function setSortKey($sortKey)
    {
        $this->sortKey = $sortKey;

        return $this;
    }

    /**
     * Get sortKey
     *
     * @return string
     */
    public function getSortKey()
    {
        return $this->sortKey;
    }

    /**
     * Set sortOrder
     *
     * @param string $sortOrder
     *
     * @return EntityForumForums
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * Get sortOrder
     *
     * @return string
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Set prune
     *
     * @param boolean $prune
     *
     * @return EntityForumForums
     */
    public function setPrune($prune)
    {
        $this->prune = $prune;

        return $this;
    }

    /**
     * Get prune
     *
     * @return boolean
     */
    public function getPrune()
    {
        return $this->prune;
    }

    /**
     * Set showRules
     *
     * @param boolean $showRules
     *
     * @return EntityForumForums
     */
    public function setShowRules($showRules)
    {
        $this->showRules = $showRules;

        return $this;
    }

    /**
     * Get showRules
     *
     * @return boolean
     */
    public function getShowRules()
    {
        return $this->showRules;
    }

    /**
     * Set uploadPerms
     *
     * @param string $uploadPerms
     *
     * @return EntityForumForums
     */
    public function setUploadPerms($uploadPerms)
    {
        $this->uploadPerms = $uploadPerms;

        return $this;
    }

    /**
     * Get uploadPerms
     *
     * @return string
     */
    public function getUploadPerms()
    {
        return $this->uploadPerms;
    }

    /**
     * Set previewPosts
     *
     * @param boolean $previewPosts
     *
     * @return EntityForumForums
     */
    public function setPreviewPosts($previewPosts)
    {
        $this->previewPosts = $previewPosts;

        return $this;
    }

    /**
     * Get previewPosts
     *
     * @return boolean
     */
    public function getPreviewPosts()
    {
        return $this->previewPosts;
    }

    /**
     * Set allowPoll
     *
     * @param boolean $allowPoll
     *
     * @return EntityForumForums
     */
    public function setAllowPoll($allowPoll)
    {
        $this->allowPoll = $allowPoll;

        return $this;
    }

    /**
     * Get allowPoll
     *
     * @return boolean
     */
    public function getAllowPoll()
    {
        return $this->allowPoll;
    }

    /**
     * Set allowPollbump
     *
     * @param boolean $allowPollbump
     *
     * @return EntityForumForums
     */
    public function setAllowPollbump($allowPollbump)
    {
        $this->allowPollbump = $allowPollbump;

        return $this;
    }

    /**
     * Get allowPollbump
     *
     * @return boolean
     */
    public function getAllowPollbump()
    {
        return $this->allowPollbump;
    }

    /**
     * Set incPostcount
     *
     * @param boolean $incPostcount
     *
     * @return EntityForumForums
     */
    public function setIncPostcount($incPostcount)
    {
        $this->incPostcount = $incPostcount;

        return $this;
    }

    /**
     * Get incPostcount
     *
     * @return boolean
     */
    public function getIncPostcount()
    {
        return $this->incPostcount;
    }

    /**
     * Set skinId
     *
     * @param integer $skinId
     *
     * @return EntityForumForums
     */
    public function setSkinId($skinId)
    {
        $this->skinId = $skinId;

        return $this;
    }

    /**
     * Get skinId
     *
     * @return integer
     */
    public function getSkinId()
    {
        return $this->skinId;
    }

    /**
     * Set parentId
     *
     * @param integer $parentId
     *
     * @return EntityForumForums
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return integer
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set subwrap
     *
     * @param boolean $subwrap
     *
     * @return EntityForumForums
     */
    public function setSubwrap($subwrap)
    {
        $this->subwrap = $subwrap;

        return $this;
    }

    /**
     * Get subwrap
     *
     * @return boolean
     */
    public function getSubwrap()
    {
        return $this->subwrap;
    }

    /**
     * Set subCanPost
     *
     * @param boolean $subCanPost
     *
     * @return EntityForumForums
     */
    public function setSubCanPost($subCanPost)
    {
        $this->subCanPost = $subCanPost;

        return $this;
    }

    /**
     * Get subCanPost
     *
     * @return boolean
     */
    public function getSubCanPost()
    {
        return $this->subCanPost;
    }

    /**
     * Set quickReply
     *
     * @param boolean $quickReply
     *
     * @return EntityForumForums
     */
    public function setQuickReply($quickReply)
    {
        $this->quickReply = $quickReply;

        return $this;
    }

    /**
     * Get quickReply
     *
     * @return boolean
     */
    public function getQuickReply()
    {
        return $this->quickReply;
    }

    /**
     * Set redirectUrl
     *
     * @param string $redirectUrl
     *
     * @return EntityForumForums
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;

        return $this;
    }

    /**
     * Get redirectUrl
     *
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * Set redirectOn
     *
     * @param boolean $redirectOn
     *
     * @return EntityForumForums
     */
    public function setRedirectOn($redirectOn)
    {
        $this->redirectOn = $redirectOn;

        return $this;
    }

    /**
     * Get redirectOn
     *
     * @return boolean
     */
    public function getRedirectOn()
    {
        return $this->redirectOn;
    }

    /**
     * Set redirectHits
     *
     * @param integer $redirectHits
     *
     * @return EntityForumForums
     */
    public function setRedirectHits($redirectHits)
    {
        $this->redirectHits = $redirectHits;

        return $this;
    }

    /**
     * Get redirectHits
     *
     * @return integer
     */
    public function getRedirectHits()
    {
        return $this->redirectHits;
    }

    /**
     * Set redirectLoc
     *
     * @param string $redirectLoc
     *
     * @return EntityForumForums
     */
    public function setRedirectLoc($redirectLoc)
    {
        $this->redirectLoc = $redirectLoc;

        return $this;
    }

    /**
     * Get redirectLoc
     *
     * @return string
     */
    public function getRedirectLoc()
    {
        return $this->redirectLoc;
    }

    /**
     * Set rulesTitle
     *
     * @param string $rulesTitle
     *
     * @return EntityForumForums
     */
    public function setRulesTitle($rulesTitle)
    {
        $this->rulesTitle = $rulesTitle;

        return $this;
    }

    /**
     * Get rulesTitle
     *
     * @return string
     */
    public function getRulesTitle()
    {
        return $this->rulesTitle;
    }

    /**
     * Set rulesText
     *
     * @param string $rulesText
     *
     * @return EntityForumForums
     */
    public function setRulesText($rulesText)
    {
        $this->rulesText = $rulesText;

        return $this;
    }

    /**
     * Get rulesText
     *
     * @return string
     */
    public function getRulesText()
    {
        return $this->rulesText;
    }

    /**
     * Set hasModPosts
     *
     * @param boolean $hasModPosts
     *
     * @return EntityForumForums
     */
    public function setHasModPosts($hasModPosts)
    {
        $this->hasModPosts = $hasModPosts;

        return $this;
    }

    /**
     * Get hasModPosts
     *
     * @return boolean
     */
    public function getHasModPosts()
    {
        return $this->hasModPosts;
    }

    /**
     * Set topicMmId
     *
     * @param string $topicMmId
     *
     * @return EntityForumForums
     */
    public function setTopicMmId($topicMmId)
    {
        $this->topicMmId = $topicMmId;

        return $this;
    }

    /**
     * Get topicMmId
     *
     * @return string
     */
    public function getTopicMmId()
    {
        return $this->topicMmId;
    }

    /**
     * Set notifyModqEmails
     *
     * @param string $notifyModqEmails
     *
     * @return EntityForumForums
     */
    public function setNotifyModqEmails($notifyModqEmails)
    {
        $this->notifyModqEmails = $notifyModqEmails;

        return $this;
    }

    /**
     * Get notifyModqEmails
     *
     * @return string
     */
    public function getNotifyModqEmails()
    {
        return $this->notifyModqEmails;
    }

    /**
     * Set forumIcons
     *
     * @param string $forumIcons
     *
     * @return EntityForumForums
     */
    public function setForumIcons($forumIcons)
    {
        $this->forumIcons = $forumIcons;

        return $this;
    }

    /**
     * Get forumIcons
     *
     * @return string
     */
    public function getForumIcons()
    {
        return $this->forumIcons;
    }

    /**
     * Set rating
     *
     * @param boolean $rating
     *
     * @return EntityForumForums
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return boolean
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set fluderForum
     *
     * @param boolean $fluderForum
     *
     * @return EntityForumForums
     */
    public function setFluderForum($fluderForum)
    {
        $this->fluderForum = $fluderForum;

        return $this;
    }

    /**
     * Get fluderForum
     *
     * @return boolean
     */
    public function getFluderForum()
    {
        return $this->fluderForum;
    }
}
