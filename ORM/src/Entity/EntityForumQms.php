<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumQms
 *
 * @ORM\Table(name="forum_qms")
 * @ORM\Entity
 */
class EntityForumQms
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
     * @var integer
     *
     * @ORM\Column(name="only", type="integer", nullable=true)
     */
    private $only;

    /**
     * @var string
     *
     * @ORM\Column(name="txt", type="text", length=65535, nullable=true)
     */
    private $txt;

    /**
     * @var integer
     *
     * @ORM\Column(name="reed", type="integer", nullable=true)
     */
    private $reed;



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
     * Set time
     *
     * @param integer $time
     *
     * @return EntityForumQms
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
     * @return EntityForumQms
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
     * Set only
     *
     * @param integer $only
     *
     * @return EntityForumQms
     */
    public function setOnly($only)
    {
        $this->only = $only;

        return $this;
    }

    /**
     * Get only
     *
     * @return integer
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
     * @return EntityForumQms
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
     * Set reed
     *
     * @param integer $reed
     *
     * @return EntityForumQms
     */
    public function setReed($reed)
    {
        $this->reed = $reed;

        return $this;
    }

    /**
     * Get reed
     *
     * @return integer
     */
    public function getReed()
    {
        return $this->reed;
    }
}
