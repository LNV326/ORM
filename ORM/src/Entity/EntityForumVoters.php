<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumVoters
 *
 * @ORM\Table(name="forum_voters", indexes={@ORM\Index(name="tid", columns={"tid", "member_id"}), @ORM\Index(name="ip_address", columns={"ip_address"})})
 * @ORM\Entity(repositoryClass="Repository\EntityForumVotersRep")
 */
class EntityForumVoters
{
    /**
     * @var integer
     *
     * @ORM\Column(name="vid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $vid;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_address", type="string", length=16, nullable=false)
     */
    private $ipAddress = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="vote_date", type="integer", nullable=false)
     */
    private $voteDate = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tid", type="integer", nullable=false)
     */
    private $tid = '0';

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
     * @var string
     *
     * @ORM\Column(name="vote", type="string", length=50, nullable=true)
     */
    private $vote;



    /**
     * Get vid
     *
     * @return integer
     */
    public function getVid()
    {
        return $this->vid;
    }

    /**
     * Set ipAddress
     *
     * @param string $ipAddress
     *
     * @return EntityForumVoters
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
     * Set voteDate
     *
     * @param integer $voteDate
     *
     * @return EntityForumVoters
     */
    public function setVoteDate($voteDate)
    {
        $this->voteDate = $voteDate;

        return $this;
    }

    /**
     * Get voteDate
     *
     * @return integer
     */
    public function getVoteDate()
    {
        return $this->voteDate;
    }

    /**
     * Set tid
     *
     * @param integer $tid
     *
     * @return EntityForumVoters
     */
    public function setTid($tid)
    {
        $this->tid = $tid;

        return $this;
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
     * Set memberId
     *
     * @param integer $memberId
     *
     * @return EntityForumVoters
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
     * @return EntityForumVoters
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
     * Set vote
     *
     * @param string $vote
     *
     * @return EntityForumVoters
     */
    public function setVote($vote)
    {
        $this->vote = $vote;

        return $this;
    }

    /**
     * Get vote
     *
     * @return string
     */
    public function getVote()
    {
        return $this->vote;
    }
}
