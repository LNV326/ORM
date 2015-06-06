<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumStats
 *
 * @ORM\Table(name="forum_stats")
 * @ORM\Entity(repositoryClass="Repository\EntityForumStatsRep")
 */
class EntityForumStats
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
     * @var integer
     *
     * @ORM\Column(name="TOTAL_REPLIES", type="integer", nullable=false)
     */
    private $totalReplies = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="TOTAL_TOPICS", type="integer", nullable=false)
     */
    private $totalTopics = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="LAST_MEM_NAME", type="string", length=32, nullable=true)
     */
    private $lastMemName;

    /**
     * @var integer
     *
     * @ORM\Column(name="LAST_MEM_ID", type="integer", nullable=false)
     */
    private $lastMemId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="MOST_DATE", type="integer", nullable=true)
     */
    private $mostDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="MOST_COUNT", type="integer", nullable=true)
     */
    private $mostCount = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="MEM_COUNT", type="integer", nullable=false)
     */
    private $memCount = '0';



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
     * Set totalReplies
     *
     * @param integer $totalReplies
     *
     * @return EntityForumStats
     */
    public function setTotalReplies($totalReplies)
    {
        $this->totalReplies = $totalReplies;

        return $this;
    }

    /**
     * Get totalReplies
     *
     * @return integer
     */
    public function getTotalReplies()
    {
        return $this->totalReplies;
    }

    /**
     * Set totalTopics
     *
     * @param integer $totalTopics
     *
     * @return EntityForumStats
     */
    public function setTotalTopics($totalTopics)
    {
        $this->totalTopics = $totalTopics;

        return $this;
    }

    /**
     * Get totalTopics
     *
     * @return integer
     */
    public function getTotalTopics()
    {
        return $this->totalTopics;
    }

    /**
     * Set lastMemName
     *
     * @param string $lastMemName
     *
     * @return EntityForumStats
     */
    public function setLastMemName($lastMemName)
    {
        $this->lastMemName = $lastMemName;

        return $this;
    }

    /**
     * Get lastMemName
     *
     * @return string
     */
    public function getLastMemName()
    {
        return $this->lastMemName;
    }

    /**
     * Set lastMemId
     *
     * @param integer $lastMemId
     *
     * @return EntityForumStats
     */
    public function setLastMemId($lastMemId)
    {
        $this->lastMemId = $lastMemId;

        return $this;
    }

    /**
     * Get lastMemId
     *
     * @return integer
     */
    public function getLastMemId()
    {
        return $this->lastMemId;
    }

    /**
     * Set mostDate
     *
     * @param integer $mostDate
     *
     * @return EntityForumStats
     */
    public function setMostDate($mostDate)
    {
        $this->mostDate = $mostDate;

        return $this;
    }

    /**
     * Get mostDate
     *
     * @return integer
     */
    public function getMostDate()
    {
        return $this->mostDate;
    }

    /**
     * Set mostCount
     *
     * @param integer $mostCount
     *
     * @return EntityForumStats
     */
    public function setMostCount($mostCount)
    {
        $this->mostCount = $mostCount;

        return $this;
    }

    /**
     * Get mostCount
     *
     * @return integer
     */
    public function getMostCount()
    {
        return $this->mostCount;
    }

    /**
     * Set memCount
     *
     * @param integer $memCount
     *
     * @return EntityForumStats
     */
    public function setMemCount($memCount)
    {
        $this->memCount = $memCount;

        return $this;
    }

    /**
     * Get memCount
     *
     * @return integer
     */
    public function getMemCount()
    {
        return $this->memCount;
    }
}
