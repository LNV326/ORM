<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumSpiderLogs
 *
 * @ORM\Table(name="forum_spider_logs")
 * @ORM\Entity(repositoryClass="Repository\EntityForumSpiderLogsRep")
 */
class EntityForumSpiderLogs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sid;

    /**
     * @var string
     *
     * @ORM\Column(name="bot", type="string", length=255, nullable=false)
     */
    private $bot = '';

    /**
     * @var string
     *
     * @ORM\Column(name="query_string", type="text", length=65535, nullable=false)
     */
    private $queryString;

    /**
     * @var integer
     *
     * @ORM\Column(name="entry_date", type="integer", nullable=false)
     */
    private $entryDate = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_address", type="string", length=16, nullable=false)
     */
    private $ipAddress = '';



    /**
     * Get sid
     *
     * @return integer
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * Set bot
     *
     * @param string $bot
     *
     * @return EntityForumSpiderLogs
     */
    public function setBot($bot)
    {
        $this->bot = $bot;

        return $this;
    }

    /**
     * Get bot
     *
     * @return string
     */
    public function getBot()
    {
        return $this->bot;
    }

    /**
     * Set queryString
     *
     * @param string $queryString
     *
     * @return EntityForumSpiderLogs
     */
    public function setQueryString($queryString)
    {
        $this->queryString = $queryString;

        return $this;
    }

    /**
     * Get queryString
     *
     * @return string
     */
    public function getQueryString()
    {
        return $this->queryString;
    }

    /**
     * Set entryDate
     *
     * @param integer $entryDate
     *
     * @return EntityForumSpiderLogs
     */
    public function setEntryDate($entryDate)
    {
        $this->entryDate = $entryDate;

        return $this;
    }

    /**
     * Get entryDate
     *
     * @return integer
     */
    public function getEntryDate()
    {
        return $this->entryDate;
    }

    /**
     * Set ipAddress
     *
     * @param string $ipAddress
     *
     * @return EntityForumSpiderLogs
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
}
