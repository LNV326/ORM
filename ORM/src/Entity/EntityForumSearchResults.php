<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumSearchResults
 *
 * @ORM\Table(name="forum_search_results")
 * @ORM\Entity(repositoryClass="Repository\EntityForumSearchResultsRep")
 */
class EntityForumSearchResults
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
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=32, nullable=false)
     */
    private $id = '';

    /**
     * @var string
     *
     * @ORM\Column(name="topic_id", type="text", length=65535, nullable=false)
     */
    private $topicId;

    /**
     * @var integer
     *
     * @ORM\Column(name="search_date", type="integer", nullable=false)
     */
    private $searchDate = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="topic_max", type="integer", nullable=false)
     */
    private $topicMax = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sort_key", type="string", length=32, nullable=false)
     */
    private $sortKey = 'last_post';

    /**
     * @var string
     *
     * @ORM\Column(name="sort_order", type="string", length=4, nullable=false)
     */
    private $sortOrder = 'desc';

    /**
     * @var integer
     *
     * @ORM\Column(name="member_id", type="integer", nullable=true)
     */
    private $memberId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_address", type="string", length=64, nullable=true)
     */
    private $ipAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="post_id", type="text", length=65535, nullable=true)
     */
    private $postId;

    /**
     * @var integer
     *
     * @ORM\Column(name="post_max", type="integer", nullable=false)
     */
    private $postMax = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="page_id", type="text", length=65535, nullable=true)
     */
    private $pageId;

    /**
     * @var integer
     *
     * @ORM\Column(name="page_max", type="integer", nullable=false)
     */
    private $pageMax = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="query_cache", type="text", length=65535, nullable=true)
     */
    private $queryCache;



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
     * @param string $id
     *
     * @return EntityForumSearchResults
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set topicId
     *
     * @param string $topicId
     *
     * @return EntityForumSearchResults
     */
    public function setTopicId($topicId)
    {
        $this->topicId = $topicId;

        return $this;
    }

    /**
     * Get topicId
     *
     * @return string
     */
    public function getTopicId()
    {
        return $this->topicId;
    }

    /**
     * Set searchDate
     *
     * @param integer $searchDate
     *
     * @return EntityForumSearchResults
     */
    public function setSearchDate($searchDate)
    {
        $this->searchDate = $searchDate;

        return $this;
    }

    /**
     * Get searchDate
     *
     * @return integer
     */
    public function getSearchDate()
    {
        return $this->searchDate;
    }

    /**
     * Set topicMax
     *
     * @param integer $topicMax
     *
     * @return EntityForumSearchResults
     */
    public function setTopicMax($topicMax)
    {
        $this->topicMax = $topicMax;

        return $this;
    }

    /**
     * Get topicMax
     *
     * @return integer
     */
    public function getTopicMax()
    {
        return $this->topicMax;
    }

    /**
     * Set sortKey
     *
     * @param string $sortKey
     *
     * @return EntityForumSearchResults
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
     * @return EntityForumSearchResults
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
     * Set memberId
     *
     * @param integer $memberId
     *
     * @return EntityForumSearchResults
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
     * Set ipAddress
     *
     * @param string $ipAddress
     *
     * @return EntityForumSearchResults
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
     * Set postId
     *
     * @param string $postId
     *
     * @return EntityForumSearchResults
     */
    public function setPostId($postId)
    {
        $this->postId = $postId;

        return $this;
    }

    /**
     * Get postId
     *
     * @return string
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * Set postMax
     *
     * @param integer $postMax
     *
     * @return EntityForumSearchResults
     */
    public function setPostMax($postMax)
    {
        $this->postMax = $postMax;

        return $this;
    }

    /**
     * Get postMax
     *
     * @return integer
     */
    public function getPostMax()
    {
        return $this->postMax;
    }

    /**
     * Set pageId
     *
     * @param string $pageId
     *
     * @return EntityForumSearchResults
     */
    public function setPageId($pageId)
    {
        $this->pageId = $pageId;

        return $this;
    }

    /**
     * Get pageId
     *
     * @return string
     */
    public function getPageId()
    {
        return $this->pageId;
    }

    /**
     * Set pageMax
     *
     * @param integer $pageMax
     *
     * @return EntityForumSearchResults
     */
    public function setPageMax($pageMax)
    {
        $this->pageMax = $pageMax;

        return $this;
    }

    /**
     * Get pageMax
     *
     * @return integer
     */
    public function getPageMax()
    {
        return $this->pageMax;
    }

    /**
     * Set queryCache
     *
     * @param string $queryCache
     *
     * @return EntityForumSearchResults
     */
    public function setQueryCache($queryCache)
    {
        $this->queryCache = $queryCache;

        return $this;
    }

    /**
     * Get queryCache
     *
     * @return string
     */
    public function getQueryCache()
    {
        return $this->queryCache;
    }
}
