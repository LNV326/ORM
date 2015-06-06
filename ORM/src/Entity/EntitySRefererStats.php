<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntitySRefererStats
 *
 * @ORM\Table(name="s_referer_stats", indexes={@ORM\Index(name="ip_agent_md5", columns={"ip_agent_md5"})})
 * @ORM\Entity
 */
class EntitySRefererStats
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
     * @var string
     *
     * @ORM\Column(name="ip_agent_md5", type="string", length=255, nullable=false)
     */
    private $ipAgentMd5;

    /**
     * @var string
     *
     * @ORM\Column(name="referer", type="string", length=255, nullable=false)
     */
    private $referer;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=255, nullable=false)
     */
    private $ip;

    /**
     * @var integer
     *
     * @ORM\Column(name="u_id", type="integer", nullable=false)
     */
    private $uId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
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
     * Set ipAgentMd5
     *
     * @param string $ipAgentMd5
     *
     * @return EntitySRefererStats
     */
    public function setIpAgentMd5($ipAgentMd5)
    {
        $this->ipAgentMd5 = $ipAgentMd5;

        return $this;
    }

    /**
     * Get ipAgentMd5
     *
     * @return string
     */
    public function getIpAgentMd5()
    {
        return $this->ipAgentMd5;
    }

    /**
     * Set referer
     *
     * @param string $referer
     *
     * @return EntitySRefererStats
     */
    public function setReferer($referer)
    {
        $this->referer = $referer;

        return $this;
    }

    /**
     * Get referer
     *
     * @return string
     */
    public function getReferer()
    {
        return $this->referer;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return EntitySRefererStats
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
     * Set uId
     *
     * @param integer $uId
     *
     * @return EntitySRefererStats
     */
    public function setUId($uId)
    {
        $this->uId = $uId;

        return $this;
    }

    /**
     * Get uId
     *
     * @return integer
     */
    public function getUId()
    {
        return $this->uId;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return EntitySRefererStats
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
}
