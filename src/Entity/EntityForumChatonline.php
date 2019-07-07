<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumChatonline
 *
 * @ORM\Table(name="forum_chatonline")
 * @ORM\Entity(repositoryClass="Repository\EntityForumChatonlineRep")
 */
class EntityForumChatonline
{
    /**
     * @var integer
     *
     * @ORM\Column(name="hid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $hid;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=true)
     */
    private $uid;

    /**
     * @var string
     *
     * @ORM\Column(name="uname", type="text", length=65535, nullable=true)
     */
    private $uname;

    /**
     * @var string
     *
     * @ORM\Column(name="cname", type="text", length=65535, nullable=true)
     */
    private $cname;

    /**
     * @var string
     *
     * @ORM\Column(name="now", type="string", length=64, nullable=true)
     */
    private $now;

    /**
     * @var integer
     *
     * @ORM\Column(name="time", type="integer", nullable=true)
     */
    private $time;

    /**
     * @var integer
     *
     * @ORM\Column(name="timein", type="integer", nullable=true)
     */
    private $timein;



    /**
     * Get hid
     *
     * @return integer
     */
    public function getHid()
    {
        return $this->hid;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     *
     * @return EntityForumChatonline
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Get uid
     *
     * @return integer
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set uname
     *
     * @param string $uname
     *
     * @return EntityForumChatonline
     */
    public function setUname($uname)
    {
        $this->uname = $uname;

        return $this;
    }

    /**
     * Get uname
     *
     * @return string
     */
    public function getUname()
    {
        return $this->uname;
    }

    /**
     * Set cname
     *
     * @param string $cname
     *
     * @return EntityForumChatonline
     */
    public function setCname($cname)
    {
        $this->cname = $cname;

        return $this;
    }

    /**
     * Get cname
     *
     * @return string
     */
    public function getCname()
    {
        return $this->cname;
    }

    /**
     * Set now
     *
     * @param string $now
     *
     * @return EntityForumChatonline
     */
    public function setNow($now)
    {
        $this->now = $now;

        return $this;
    }

    /**
     * Get now
     *
     * @return string
     */
    public function getNow()
    {
        return $this->now;
    }

    /**
     * Set time
     *
     * @param integer $time
     *
     * @return EntityForumChatonline
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return integer
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set timein
     *
     * @param integer $timein
     *
     * @return EntityForumChatonline
     */
    public function setTimein($timein)
    {
        $this->timein = $timein;

        return $this;
    }

    /**
     * Get timein
     *
     * @return integer
     */
    public function getTimein()
    {
        return $this->timein;
    }
}
