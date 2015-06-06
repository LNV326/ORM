<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumLogs
 *
 * @ORM\Table(name="forum_logs")
 * @ORM\Entity(repositoryClass="Repository\EntityForumLogsRep")
 */
class EntityForumLogs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="lid", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $lid;

    /**
     * @var integer
     *
     * @ORM\Column(name="member_id", type="integer", nullable=true)
     */
    private $memberId;

    /**
     * @var string
     *
     * @ORM\Column(name="attack_ip", type="string", length=255, nullable=true)
     */
    private $attackIp;

    /**
     * @var integer
     *
     * @ORM\Column(name="first_time", type="integer", nullable=true)
     */
    private $firstTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="trials", type="integer", nullable=true)
     */
    private $trials = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="logincode", type="string", length=8, nullable=false)
     */
    private $logincode = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="emailed", type="boolean", nullable=true)
     */
    private $emailed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="admin", type="boolean", nullable=true)
     */
    private $admin;



    /**
     * Get lid
     *
     * @return integer
     */
    public function getLid()
    {
        return $this->lid;
    }

    /**
     * Set memberId
     *
     * @param integer $memberId
     *
     * @return EntityForumLogs
     */
    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;

        return $this;
    }

    /**
     * Get memberId
     *
     * @return integer
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * Set attackIp
     *
     * @param string $attackIp
     *
     * @return EntityForumLogs
     */
    public function setAttackIp($attackIp)
    {
        $this->attackIp = $attackIp;

        return $this;
    }

    /**
     * Get attackIp
     *
     * @return string
     */
    public function getAttackIp()
    {
        return $this->attackIp;
    }

    /**
     * Set firstTime
     *
     * @param integer $firstTime
     *
     * @return EntityForumLogs
     */
    public function setFirstTime($firstTime)
    {
        $this->firstTime = $firstTime;

        return $this;
    }

    /**
     * Get firstTime
     *
     * @return integer
     */
    public function getFirstTime()
    {
        return $this->firstTime;
    }

    /**
     * Set trials
     *
     * @param integer $trials
     *
     * @return EntityForumLogs
     */
    public function setTrials($trials)
    {
        $this->trials = $trials;

        return $this;
    }

    /**
     * Get trials
     *
     * @return integer
     */
    public function getTrials()
    {
        return $this->trials;
    }

    /**
     * Set logincode
     *
     * @param string $logincode
     *
     * @return EntityForumLogs
     */
    public function setLogincode($logincode)
    {
        $this->logincode = $logincode;

        return $this;
    }

    /**
     * Get logincode
     *
     * @return string
     */
    public function getLogincode()
    {
        return $this->logincode;
    }

    /**
     * Set emailed
     *
     * @param boolean $emailed
     *
     * @return EntityForumLogs
     */
    public function setEmailed($emailed)
    {
        $this->emailed = $emailed;

        return $this;
    }

    /**
     * Get emailed
     *
     * @return boolean
     */
    public function getEmailed()
    {
        return $this->emailed;
    }

    /**
     * Set admin
     *
     * @param boolean $admin
     *
     * @return EntityForumLogs
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * Get admin
     *
     * @return boolean
     */
    public function getAdmin()
    {
        return $this->admin;
    }
}
