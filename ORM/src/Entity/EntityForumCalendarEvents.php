<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumCalendarEvents
 *
 * @ORM\Table(name="forum_calendar_events", indexes={@ORM\Index(name="unix_stamp", columns={"unix_stamp"})})
 * @ORM\Entity(repositoryClass="Repository\EntityForumCalendarEventsRep")
 */
class EntityForumCalendarEvents
{
    /**
     * @var integer
     *
     * @ORM\Column(name="eventid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eventid;

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="integer", nullable=false)
     */
    private $userid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="year", type="integer", nullable=false)
     */
    private $year = '2002';

    /**
     * @var integer
     *
     * @ORM\Column(name="month", type="integer", nullable=false)
     */
    private $month = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="mday", type="integer", nullable=false)
     */
    private $mday = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=254, nullable=false)
     */
    private $title = 'no title';

    /**
     * @var string
     *
     * @ORM\Column(name="event_text", type="text", length=65535, nullable=false)
     */
    private $eventText;

    /**
     * @var string
     *
     * @ORM\Column(name="read_perms", type="string", length=254, nullable=false)
     */
    private $readPerms = '*';

    /**
     * @var integer
     *
     * @ORM\Column(name="unix_stamp", type="integer", nullable=false)
     */
    private $unixStamp = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="priv_event", type="boolean", nullable=false)
     */
    private $privEvent = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="show_emoticons", type="boolean", nullable=false)
     */
    private $showEmoticons = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="rating", type="smallint", nullable=false)
     */
    private $rating = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="event_ranged", type="boolean", nullable=false)
     */
    private $eventRanged = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="event_repeat", type="boolean", nullable=false)
     */
    private $eventRepeat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="repeat_unit", type="string", length=2, nullable=false)
     */
    private $repeatUnit = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="end_day", type="integer", nullable=true)
     */
    private $endDay;

    /**
     * @var integer
     *
     * @ORM\Column(name="end_month", type="integer", nullable=true)
     */
    private $endMonth;

    /**
     * @var integer
     *
     * @ORM\Column(name="end_year", type="integer", nullable=true)
     */
    private $endYear;

    /**
     * @var integer
     *
     * @ORM\Column(name="end_unix_stamp", type="integer", nullable=true)
     */
    private $endUnixStamp;

    /**
     * @var string
     *
     * @ORM\Column(name="event_bgcolor", type="string", length=32, nullable=false)
     */
    private $eventBgcolor = '';

    /**
     * @var string
     *
     * @ORM\Column(name="event_color", type="string", length=32, nullable=false)
     */
    private $eventColor = '';



    /**
     * Get eventid
     *
     * @return integer
     */
    public function getEventid()
    {
        return $this->eventid;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     *
     * @return EntityForumCalendarEvents
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return integer
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set year
     *
     * @param integer $year
     *
     * @return EntityForumCalendarEvents
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set month
     *
     * @param integer $month
     *
     * @return EntityForumCalendarEvents
     */
    public function setMonth($month)
    {
        $this->month = $month;

        return $this;
    }

    /**
     * Get month
     *
     * @return integer
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Set mday
     *
     * @param integer $mday
     *
     * @return EntityForumCalendarEvents
     */
    public function setMday($mday)
    {
        $this->mday = $mday;

        return $this;
    }

    /**
     * Get mday
     *
     * @return integer
     */
    public function getMday()
    {
        return $this->mday;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return EntityForumCalendarEvents
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
     * Set eventText
     *
     * @param string $eventText
     *
     * @return EntityForumCalendarEvents
     */
    public function setEventText($eventText)
    {
        $this->eventText = $eventText;

        return $this;
    }

    /**
     * Get eventText
     *
     * @return string
     */
    public function getEventText()
    {
        return $this->eventText;
    }

    /**
     * Set readPerms
     *
     * @param string $readPerms
     *
     * @return EntityForumCalendarEvents
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
     * Set unixStamp
     *
     * @param integer $unixStamp
     *
     * @return EntityForumCalendarEvents
     */
    public function setUnixStamp($unixStamp)
    {
        $this->unixStamp = $unixStamp;

        return $this;
    }

    /**
     * Get unixStamp
     *
     * @return integer
     */
    public function getUnixStamp()
    {
        return $this->unixStamp;
    }

    /**
     * Set privEvent
     *
     * @param boolean $privEvent
     *
     * @return EntityForumCalendarEvents
     */
    public function setPrivEvent($privEvent)
    {
        $this->privEvent = $privEvent;

        return $this;
    }

    /**
     * Get privEvent
     *
     * @return boolean
     */
    public function getPrivEvent()
    {
        return $this->privEvent;
    }

    /**
     * Set showEmoticons
     *
     * @param boolean $showEmoticons
     *
     * @return EntityForumCalendarEvents
     */
    public function setShowEmoticons($showEmoticons)
    {
        $this->showEmoticons = $showEmoticons;

        return $this;
    }

    /**
     * Get showEmoticons
     *
     * @return boolean
     */
    public function getShowEmoticons()
    {
        return $this->showEmoticons;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     *
     * @return EntityForumCalendarEvents
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set eventRanged
     *
     * @param boolean $eventRanged
     *
     * @return EntityForumCalendarEvents
     */
    public function setEventRanged($eventRanged)
    {
        $this->eventRanged = $eventRanged;

        return $this;
    }

    /**
     * Get eventRanged
     *
     * @return boolean
     */
    public function getEventRanged()
    {
        return $this->eventRanged;
    }

    /**
     * Set eventRepeat
     *
     * @param boolean $eventRepeat
     *
     * @return EntityForumCalendarEvents
     */
    public function setEventRepeat($eventRepeat)
    {
        $this->eventRepeat = $eventRepeat;

        return $this;
    }

    /**
     * Get eventRepeat
     *
     * @return boolean
     */
    public function getEventRepeat()
    {
        return $this->eventRepeat;
    }

    /**
     * Set repeatUnit
     *
     * @param string $repeatUnit
     *
     * @return EntityForumCalendarEvents
     */
    public function setRepeatUnit($repeatUnit)
    {
        $this->repeatUnit = $repeatUnit;

        return $this;
    }

    /**
     * Get repeatUnit
     *
     * @return string
     */
    public function getRepeatUnit()
    {
        return $this->repeatUnit;
    }

    /**
     * Set endDay
     *
     * @param integer $endDay
     *
     * @return EntityForumCalendarEvents
     */
    public function setEndDay($endDay)
    {
        $this->endDay = $endDay;

        return $this;
    }

    /**
     * Get endDay
     *
     * @return integer
     */
    public function getEndDay()
    {
        return $this->endDay;
    }

    /**
     * Set endMonth
     *
     * @param integer $endMonth
     *
     * @return EntityForumCalendarEvents
     */
    public function setEndMonth($endMonth)
    {
        $this->endMonth = $endMonth;

        return $this;
    }

    /**
     * Get endMonth
     *
     * @return integer
     */
    public function getEndMonth()
    {
        return $this->endMonth;
    }

    /**
     * Set endYear
     *
     * @param integer $endYear
     *
     * @return EntityForumCalendarEvents
     */
    public function setEndYear($endYear)
    {
        $this->endYear = $endYear;

        return $this;
    }

    /**
     * Get endYear
     *
     * @return integer
     */
    public function getEndYear()
    {
        return $this->endYear;
    }

    /**
     * Set endUnixStamp
     *
     * @param integer $endUnixStamp
     *
     * @return EntityForumCalendarEvents
     */
    public function setEndUnixStamp($endUnixStamp)
    {
        $this->endUnixStamp = $endUnixStamp;

        return $this;
    }

    /**
     * Get endUnixStamp
     *
     * @return integer
     */
    public function getEndUnixStamp()
    {
        return $this->endUnixStamp;
    }

    /**
     * Set eventBgcolor
     *
     * @param string $eventBgcolor
     *
     * @return EntityForumCalendarEvents
     */
    public function setEventBgcolor($eventBgcolor)
    {
        $this->eventBgcolor = $eventBgcolor;

        return $this;
    }

    /**
     * Get eventBgcolor
     *
     * @return string
     */
    public function getEventBgcolor()
    {
        return $this->eventBgcolor;
    }

    /**
     * Set eventColor
     *
     * @param string $eventColor
     *
     * @return EntityForumCalendarEvents
     */
    public function setEventColor($eventColor)
    {
        $this->eventColor = $eventColor;

        return $this;
    }

    /**
     * Get eventColor
     *
     * @return string
     */
    public function getEventColor()
    {
        return $this->eventColor;
    }
}
