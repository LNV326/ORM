<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * EntityForumTopics
 *
 * @ORM\Table(name="forum_topics", indexes={@ORM\Index(name="last_post", columns={"last_post"}), @ORM\Index(name="forum_id", columns={"forum_id", "approved", "pinned"}), @ORM\Index(name="title", columns={"title"})})
 * @ORM\Entity(repositoryClass="Repository\EntityForumTopicsRep")
 */
class EntityForumTopics
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tid;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=250, nullable=false)
     */
    private $title = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=70, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=8, nullable=true)
     */
    private $state;

    /**
     * @var integer
     *
     * @ORM\Column(name="posts", type="integer", nullable=true)
     */
    private $posts;

    /**
     * @var integer
     *
     * @ORM\Column(name="starter_id", type="integer", nullable=false)
     */
    private $starterId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="start_date", type="integer", nullable=true)
     */
    private $startDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_poster_id", type="integer", nullable=false)
     */
    private $lastPosterId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="last_post", type="integer", nullable=true)
     */
    private $lastPost;

    /**
     * @var boolean
     *
     * @ORM\Column(name="icon_id", type="boolean", nullable=true)
     */
    private $iconId;

    /**
     * @var string
     *
     * @ORM\Column(name="starter_name", type="string", length=32, nullable=true)
     */
    private $starterName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_poster_name", type="string", length=32, nullable=true)
     */
    private $lastPosterName;

    /**
     * @var string
     *
     * @ORM\Column(name="poll_state", type="string", length=8, nullable=true)
     */
    private $pollState;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_vote", type="integer", nullable=true)
     */
    private $lastVote;

    /**
     * @var integer
     *
     * @ORM\Column(name="views", type="integer", nullable=true)
     */
    private $views;

    /**
     * @var integer
     *
     * @ORM\Column(name="forum_id", type="smallint", nullable=false)
     */
    private $forumId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="approved", type="boolean", nullable=true)
     */
    private $approved;

    /**
     * @var boolean
     *
     * @ORM\Column(name="author_mode", type="boolean", nullable=true)
     */
    private $authorMode;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pinned", type="boolean", nullable=true)
     */
    private $pinned;

    /**
     * @var string
     *
     * @ORM\Column(name="moved_to", type="string", length=64, nullable=true)
     */
    private $movedTo;

    /**
     * @var integer
     *
     * @ORM\Column(name="rating_total", type="integer", nullable=false)
     */
    private $ratingTotal = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rating_total_voters", type="integer", nullable=false)
     */
    private $ratingTotalVoters = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="firstpost", type="boolean", nullable=false)
     */
    private $firstpost = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="flags", type="text", nullable=false)
     */
    private $flags;

    /**
     * @var string
     *
     * @ORM\Column(name="why_close", type="text", length=255, nullable=true)
     */
    private $whyClose;

    /**
     * @var unknown
     * 
     * @ORM\OneToMany(targetEntity="EntityForumPosts", mappedBy="topicVal")
     */
	private $postsVal;
	
	public function __construct() {
		$this->postsVal = new ArrayCollection();
	}

    /**
     * Get tid
     *
     * @return integer
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return EntityForumTopics
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return EntityForumTopics
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
     * Set state
     *
     * @param string $state
     *
     * @return EntityForumTopics
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set posts
     *
     * @param integer $posts
     *
     * @return EntityForumTopics
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
     * Set starterId
     *
     * @param integer $starterId
     *
     * @return EntityForumTopics
     */
    public function setStarterId($starterId)
    {
        $this->starterId = $starterId;

        return $this;
    }

    /**
     * Get starterId
     *
     * @return integer
     */
    public function getStarterId()
    {
        return $this->starterId;
    }

    /**
     * Set startDate
     *
     * @param integer $startDate
     *
     * @return EntityForumTopics
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
     * Set lastPosterId
     *
     * @param integer $lastPosterId
     *
     * @return EntityForumTopics
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
     * Set lastPost
     *
     * @param integer $lastPost
     *
     * @return EntityForumTopics
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
     * Set iconId
     *
     * @param boolean $iconId
     *
     * @return EntityForumTopics
     */
    public function setIconId($iconId)
    {
        $this->iconId = $iconId;

        return $this;
    }

    /**
     * Get iconId
     *
     * @return boolean
     */
    public function getIconId()
    {
        return $this->iconId;
    }

    /**
     * Set starterName
     *
     * @param string $starterName
     *
     * @return EntityForumTopics
     */
    public function setStarterName($starterName)
    {
        $this->starterName = $starterName;

        return $this;
    }

    /**
     * Get starterName
     *
     * @return string
     */
    public function getStarterName()
    {
        return $this->starterName;
    }

    /**
     * Set lastPosterName
     *
     * @param string $lastPosterName
     *
     * @return EntityForumTopics
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
     * Set pollState
     *
     * @param string $pollState
     *
     * @return EntityForumTopics
     */
    public function setPollState($pollState)
    {
        $this->pollState = $pollState;

        return $this;
    }

    /**
     * Get pollState
     *
     * @return string
     */
    public function getPollState()
    {
        return $this->pollState;
    }

    /**
     * Set lastVote
     *
     * @param integer $lastVote
     *
     * @return EntityForumTopics
     */
    public function setLastVote($lastVote)
    {
        $this->lastVote = $lastVote;

        return $this;
    }

    /**
     * Get lastVote
     *
     * @return integer
     */
    public function getLastVote()
    {
        return $this->lastVote;
    }

    /**
     * Set views
     *
     * @param integer $views
     *
     * @return EntityForumTopics
     */
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Get views
     *
     * @return integer
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Set forumId
     *
     * @param integer $forumId
     *
     * @return EntityForumTopics
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
     * Set approved
     *
     * @param boolean $approved
     *
     * @return EntityForumTopics
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;

        return $this;
    }

    /**
     * Get approved
     *
     * @return boolean
     */
    public function getApproved()
    {
        return $this->approved;
    }

    /**
     * Set authorMode
     *
     * @param boolean $authorMode
     *
     * @return EntityForumTopics
     */
    public function setAuthorMode($authorMode)
    {
        $this->authorMode = $authorMode;

        return $this;
    }

    /**
     * Get authorMode
     *
     * @return boolean
     */
    public function getAuthorMode()
    {
        return $this->authorMode;
    }

    /**
     * Set pinned
     *
     * @param boolean $pinned
     *
     * @return EntityForumTopics
     */
    public function setPinned($pinned)
    {
        $this->pinned = $pinned;

        return $this;
    }

    /**
     * Get pinned
     *
     * @return boolean
     */
    public function getPinned()
    {
        return $this->pinned;
    }

    /**
     * Set movedTo
     *
     * @param string $movedTo
     *
     * @return EntityForumTopics
     */
    public function setMovedTo($movedTo)
    {
        $this->movedTo = $movedTo;

        return $this;
    }

    /**
     * Get movedTo
     *
     * @return string
     */
    public function getMovedTo()
    {
        return $this->movedTo;
    }

    /**
     * Set ratingTotal
     *
     * @param integer $ratingTotal
     *
     * @return EntityForumTopics
     */
    public function setRatingTotal($ratingTotal)
    {
        $this->ratingTotal = $ratingTotal;

        return $this;
    }

    /**
     * Get ratingTotal
     *
     * @return integer
     */
    public function getRatingTotal()
    {
        return $this->ratingTotal;
    }

    /**
     * Set ratingTotalVoters
     *
     * @param integer $ratingTotalVoters
     *
     * @return EntityForumTopics
     */
    public function setRatingTotalVoters($ratingTotalVoters)
    {
        $this->ratingTotalVoters = $ratingTotalVoters;

        return $this;
    }

    /**
     * Get ratingTotalVoters
     *
     * @return integer
     */
    public function getRatingTotalVoters()
    {
        return $this->ratingTotalVoters;
    }

    /**
     * Set firstpost
     *
     * @param boolean $firstpost
     *
     * @return EntityForumTopics
     */
    public function setFirstpost($firstpost)
    {
        $this->firstpost = $firstpost;

        return $this;
    }

    /**
     * Get firstpost
     *
     * @return boolean
     */
    public function getFirstpost()
    {
        return $this->firstpost;
    }

    /**
     * Set flags
     *
     * @param string $flags
     *
     * @return EntityForumTopics
     */
    public function setFlags($flags)
    {
        $this->flags = $flags;

        return $this;
    }

    /**
     * Get flags
     *
     * @return string
     */
    public function getFlags()
    {
        return $this->flags;
    }

    /**
     * Set whyClose
     *
     * @param string $whyClose
     *
     * @return EntityForumTopics
     */
    public function setWhyClose($whyClose)
    {
        $this->whyClose = $whyClose;

        return $this;
    }

    /**
     * Get whyClose
     *
     * @return string
     */
    public function getWhyClose()
    {
        return $this->whyClose;
    }

    /**
     * Add postsVal
     *
     * @param \Entity\EntityForumPosts $postsVal
     *
     * @return EntityForumTopics
     */
    public function addPostsVal(\Entity\EntityForumPosts $postsVal)
    {
        $this->postsVal[] = $postsVal;

        return $this;
    }

    /**
     * Remove postsVal
     *
     * @param \Entity\EntityForumPosts $postsVal
     */
    public function removePostsVal(\Entity\EntityForumPosts $postsVal)
    {
        $this->postsVal->removeElement($postsVal);
    }

    /**
     * Get postsVal
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPostsVal()
    {
        return $this->postsVal;
    }
}
