<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumRegAntispam
 *
 * @ORM\Table(name="forum_reg_antispam")
 * @ORM\Entity
 */
class EntityForumRegAntispam
{
    /**
     * @var string
     *
     * @ORM\Column(name="regid", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $regid = '';

    /**
     * @var string
     *
     * @ORM\Column(name="regcode", type="string", length=8, nullable=false)
     */
    private $regcode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_address", type="string", length=32, nullable=true)
     */
    private $ipAddress;

    /**
     * @var integer
     *
     * @ORM\Column(name="ctime", type="integer", nullable=true)
     */
    private $ctime;



    /**
     * Get regid
     *
     * @return string
     */
    public function getRegid()
    {
        return $this->regid;
    }

    /**
     * Set regcode
     *
     * @param string $regcode
     *
     * @return EntityForumRegAntispam
     */
    public function setRegcode($regcode)
    {
        $this->regcode = $regcode;

        return $this;
    }

    /**
     * Get regcode
     *
     * @return string
     */
    public function getRegcode()
    {
        return $this->regcode;
    }

    /**
     * Set ipAddress
     *
     * @param string $ipAddress
     *
     * @return EntityForumRegAntispam
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
     * Set ctime
     *
     * @param integer $ctime
     *
     * @return EntityForumRegAntispam
     */
    public function setCtime($ctime)
    {
        $this->ctime = $ctime;

        return $this;
    }

    /**
     * Get ctime
     *
     * @return integer
     */
    public function getCtime()
    {
        return $this->ctime;
    }
}
