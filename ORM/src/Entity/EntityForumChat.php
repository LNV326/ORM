<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumChat
 *
 * @ORM\Table(name="forum_chat")
 * @ORM\Entity(repositoryClass="Repository\EntityForumChatRep")
 */
class EntityForumChat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="time", type="integer", nullable=true)
     */
    private $time;

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
     * @ORM\Column(name="only", type="text", length=65535, nullable=true)
     */
    private $only;

    /**
     * @var string
     *
     * @ORM\Column(name="txt", type="text", length=65535, nullable=true)
     */
    private $txt;

    /**
     * @var string
     *
     * @ORM\Column(name="tclass", type="text", length=65535, nullable=true)
     */
    private $tclass;



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
     * Set time
     *
     * @param integer $time
     *
     * @return EntityForumChat
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
     * Set uid
     *
     * @param integer $uid
     *
     * @return EntityForumChat
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
     * @return EntityForumChat
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
     * @return EntityForumChat
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
     * Set only
     *
     * @param string $only
     *
     * @return EntityForumChat
     */
    public function setOnly($only)
    {
        $this->only = $only;

        return $this;
    }

    /**
     * Get only
     *
     * @return string
     */
    public function getOnly()
    {
        return $this->only;
    }

    /**
     * Set txt
     *
     * @param string $txt
     *
     * @return EntityForumChat
     */
    public function setTxt($txt)
    {
        $this->txt = $txt;

        return $this;
    }

    /**
     * Get txt
     *
     * @return string
     */
    public function getTxt()
    {
        return $this->txt;
    }

    /**
     * Set tclass
     *
     * @param string $tclass
     *
     * @return EntityForumChat
     */
    public function setTclass($tclass)
    {
        $this->tclass = $tclass;

        return $this;
    }

    /**
     * Get tclass
     *
     * @return string
     */
    public function getTclass()
    {
        return $this->tclass;
    }
}
