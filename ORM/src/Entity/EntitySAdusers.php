<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntitySAdusers
 *
 * @ORM\Table(name="s_adusers")
 * @ORM\Entity
 */
class EntitySAdusers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="mid", type="integer", nullable=false)
     */
    private $mid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="allow", type="string", length=10, nullable=false)
     */
    private $allow = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="view_off", type="boolean", nullable=false)
     */
    private $viewOff = '0';



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
     * @return EntitySAdusers
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
     * Set allow
     *
     * @param string $allow
     *
     * @return EntitySAdusers
     */
    public function setAllow($allow)
    {
        $this->allow = $allow;

        return $this;
    }

    /**
     * Get allow
     *
     * @return string
     */
    public function getAllow()
    {
        return $this->allow;
    }

    /**
     * Set viewOff
     *
     * @param boolean $viewOff
     *
     * @return EntitySAdusers
     */
    public function setViewOff($viewOff)
    {
        $this->viewOff = $viewOff;

        return $this;
    }

    /**
     * Get viewOff
     *
     * @return boolean
     */
    public function getViewOff()
    {
        return $this->viewOff;
    }
}
