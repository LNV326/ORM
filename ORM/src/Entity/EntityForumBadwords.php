<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumBadwords
 *
 * @ORM\Table(name="forum_badwords")
 * @ORM\Entity
 */
class EntityForumBadwords
{
    /**
     * @var integer
     *
     * @ORM\Column(name="wid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $wid;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=250, nullable=false)
     */
    private $type = '';

    /**
     * @var string
     *
     * @ORM\Column(name="swop", type="string", length=250, nullable=true)
     */
    private $swop;

    /**
     * @var boolean
     *
     * @ORM\Column(name="m_exact", type="boolean", nullable=true)
     */
    private $mExact = '0';



    /**
     * Get wid
     *
     * @return integer
     */
    public function getWid()
    {
        return $this->wid;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return EntityForumBadwords
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set swop
     *
     * @param string $swop
     *
     * @return EntityForumBadwords
     */
    public function setSwop($swop)
    {
        $this->swop = $swop;

        return $this;
    }

    /**
     * Get swop
     *
     * @return string
     */
    public function getSwop()
    {
        return $this->swop;
    }

    /**
     * Set mExact
     *
     * @param boolean $mExact
     *
     * @return EntityForumBadwords
     */
    public function setMExact($mExact)
    {
        $this->mExact = $mExact;

        return $this;
    }

    /**
     * Get mExact
     *
     * @return boolean
     */
    public function getMExact()
    {
        return $this->mExact;
    }
}
