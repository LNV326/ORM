<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntitySComments
 *
 * @ORM\Table(name="s_comments", indexes={@ORM\Index(name="I_module", columns={"module", "deleted"})})
 * @ORM\Entity
 */
class EntitySComments
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
     * @ORM\Column(name="top", type="integer", nullable=false)
     */
    private $top = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="user", type="integer", nullable=false)
     */
    private $user = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="rate", type="smallint", nullable=true)
     */
    private $rate;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", length=65535, nullable=false)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=31, nullable=false)
     */
    private $module = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="module_id", type="integer", nullable=false)
     */
    private $moduleId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=15, nullable=false)
     */
    private $ip = '';

    /**
     * @var string
     *
     * @ORM\Column(name="deleted", type="string", nullable=false)
     */
    private $deleted = 'N';



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
     * Set top
     *
     * @param integer $top
     *
     * @return EntitySComments
     */
    public function setTop($top)
    {
        $this->top = $top;

        return $this;
    }

    /**
     * Get top
     *
     * @return integer
     */
    public function getTop()
    {
        return $this->top;
    }

    /**
     * Set user
     *
     * @param integer $user
     *
     * @return EntitySComments
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return integer
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return EntitySComments
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set rate
     *
     * @param integer $rate
     *
     * @return EntitySComments
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return integer
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return EntitySComments
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set module
     *
     * @param string $module
     *
     * @return EntitySComments
     */
    public function setModule($module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return string
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set moduleId
     *
     * @param integer $moduleId
     *
     * @return EntitySComments
     */
    public function setModuleId($moduleId)
    {
        $this->moduleId = $moduleId;

        return $this;
    }

    /**
     * Get moduleId
     *
     * @return integer
     */
    public function getModuleId()
    {
        return $this->moduleId;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return EntitySComments
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set deleted
     *
     * @param string $deleted
     *
     * @return EntitySComments
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return string
     */
    public function getDeleted()
    {
        return $this->deleted;
    }
}
