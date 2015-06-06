<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumPolls
 *
 * @ORM\Table(name="forum_polls", indexes={@ORM\Index(name="tid", columns={"tid"})})
 * @ORM\Entity(repositoryClass="Repository\EntityForumPollsRep")
 */
class EntityForumPolls
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="start_date", type="integer", nullable=true)
     */
    private $startDate;

    /**
     * @var string
     *
     * @ORM\Column(name="choices", type="text", length=65535, nullable=true)
     */
    private $choices;

    /**
     * @var integer
     *
     * @ORM\Column(name="starter_id", type="integer", nullable=false)
     */
    private $starterId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="votes", type="smallint", nullable=false)
     */
    private $votes = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="forum_id", type="smallint", nullable=false)
     */
    private $forumId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="poll_question", type="string", length=255, nullable=true)
     */
    private $pollQuestion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_multi_poll", type="boolean", nullable=false)
     */
    private $isMultiPoll = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="multi_poll_min", type="boolean", nullable=false)
     */
    private $multiPollMin = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="multi_poll_max", type="boolean", nullable=false)
     */
    private $multiPollMax = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_weighted_poll", type="boolean", nullable=false)
     */
    private $isWeightedPoll = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="weighted_poll_places", type="boolean", nullable=false)
     */
    private $weightedPollPlaces = '0';



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
     * Set startDate
     *
     * @param integer $startDate
     *
     * @return EntityForumPolls
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
     * Set choices
     *
     * @param string $choices
     *
     * @return EntityForumPolls
     */
    public function setChoices($choices)
    {
        $this->choices = $choices;

        return $this;
    }

    /**
     * Get choices
     *
     * @return string
     */
    public function getChoices()
    {
        return $this->choices;
    }

    /**
     * Set starterId
     *
     * @param integer $starterId
     *
     * @return EntityForumPolls
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
     * Set votes
     *
     * @param integer $votes
     *
     * @return EntityForumPolls
     */
    public function setVotes($votes)
    {
        $this->votes = $votes;

        return $this;
    }

    /**
     * Get votes
     *
     * @return integer
     */
    public function getVotes()
    {
        return $this->votes;
    }

    /**
     * Set forumId
     *
     * @param integer $forumId
     *
     * @return EntityForumPolls
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
     * Set pollQuestion
     *
     * @param string $pollQuestion
     *
     * @return EntityForumPolls
     */
    public function setPollQuestion($pollQuestion)
    {
        $this->pollQuestion = $pollQuestion;

        return $this;
    }

    /**
     * Get pollQuestion
     *
     * @return string
     */
    public function getPollQuestion()
    {
        return $this->pollQuestion;
    }

    /**
     * Set isMultiPoll
     *
     * @param boolean $isMultiPoll
     *
     * @return EntityForumPolls
     */
    public function setIsMultiPoll($isMultiPoll)
    {
        $this->isMultiPoll = $isMultiPoll;

        return $this;
    }

    /**
     * Get isMultiPoll
     *
     * @return boolean
     */
    public function getIsMultiPoll()
    {
        return $this->isMultiPoll;
    }

    /**
     * Set multiPollMin
     *
     * @param boolean $multiPollMin
     *
     * @return EntityForumPolls
     */
    public function setMultiPollMin($multiPollMin)
    {
        $this->multiPollMin = $multiPollMin;

        return $this;
    }

    /**
     * Get multiPollMin
     *
     * @return boolean
     */
    public function getMultiPollMin()
    {
        return $this->multiPollMin;
    }

    /**
     * Set multiPollMax
     *
     * @param boolean $multiPollMax
     *
     * @return EntityForumPolls
     */
    public function setMultiPollMax($multiPollMax)
    {
        $this->multiPollMax = $multiPollMax;

        return $this;
    }

    /**
     * Get multiPollMax
     *
     * @return boolean
     */
    public function getMultiPollMax()
    {
        return $this->multiPollMax;
    }

    /**
     * Set isWeightedPoll
     *
     * @param boolean $isWeightedPoll
     *
     * @return EntityForumPolls
     */
    public function setIsWeightedPoll($isWeightedPoll)
    {
        $this->isWeightedPoll = $isWeightedPoll;

        return $this;
    }

    /**
     * Get isWeightedPoll
     *
     * @return boolean
     */
    public function getIsWeightedPoll()
    {
        return $this->isWeightedPoll;
    }

    /**
     * Set weightedPollPlaces
     *
     * @param boolean $weightedPollPlaces
     *
     * @return EntityForumPolls
     */
    public function setWeightedPollPlaces($weightedPollPlaces)
    {
        $this->weightedPollPlaces = $weightedPollPlaces;

        return $this;
    }

    /**
     * Get weightedPollPlaces
     *
     * @return boolean
     */
    public function getWeightedPollPlaces()
    {
        return $this->weightedPollPlaces;
    }
}
