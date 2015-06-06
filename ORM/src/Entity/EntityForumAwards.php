<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumAwards
 *
 * @ORM\Table(name="forum_awards", indexes={@ORM\Index(name="id", columns={"id", "mid"})})
 * @ORM\Entity
 */
class EntityForumAwards
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="mid", type="bigint", nullable=false)
     */
    private $mid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="awardtitle", type="string", length=100, nullable=false)
     */
    private $awardtitle = '';

    /**
     * @var string
     *
     * @ORM\Column(name="awardimg", type="string", length=100, nullable=false)
     */
    private $awardimg = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="text", length=65535, nullable=false)
     */
    private $date;



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
     * Set mid
     *
     * @param integer $mid
     *
     * @return EntityForumAwards
     */
    public function setMid($mid)
    {
        $this->mid = $mid;

        return $this;
    }

    /**
     * Get mid
     *
     * @return integer
     */
    public function getMid()
    {
        return $this->mid;
    }

    /**
     * Set awardtitle
     *
     * @param string $awardtitle
     *
     * @return EntityForumAwards
     */
    public function setAwardtitle($awardtitle)
    {
        $this->awardtitle = $awardtitle;

        return $this;
    }

    /**
     * Get awardtitle
     *
     * @return string
     */
    public function getAwardtitle()
    {
        return $this->awardtitle;
    }

    /**
     * Set awardimg
     *
     * @param string $awardimg
     *
     * @return EntityForumAwards
     */
    public function setAwardimg($awardimg)
    {
        $this->awardimg = $awardimg;

        return $this;
    }

    /**
     * Get awardimg
     *
     * @return string
     */
    public function getAwardimg()
    {
        return $this->awardimg;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return EntityForumAwards
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
     * Set date
     *
     * @param string $date
     *
     * @return EntityForumAwards
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }
}
