<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumNamesHistory
 *
 * @ORM\Table(name="forum_names_history", indexes={@ORM\Index(name="mid", columns={"mid"})})
 * @ORM\Entity(repositoryClass="Repository\EntityForumNamesHistoryRep")
 */
class EntityForumNamesHistory
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
     * @ORM\Column(name="mid", type="integer", nullable=false)
     */
    private $mid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mname_last", type="string", length=255, nullable=false)
     */
    private $mnameLast = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mname_now", type="string", length=255, nullable=false)
     */
    private $mnameNow = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="date", type="integer", nullable=false)
     */
    private $date = '0';



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
     * Set mid
     *
     * @param integer $mid
     *
     * @return EntityForumNamesHistory
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
     * Set mnameLast
     *
     * @param string $mnameLast
     *
     * @return EntityForumNamesHistory
     */
    public function setMnameLast($mnameLast)
    {
        $this->mnameLast = $mnameLast;

        return $this;
    }

    /**
     * Get mnameLast
     *
     * @return string
     */
    public function getMnameLast()
    {
        return $this->mnameLast;
    }

    /**
     * Set mnameNow
     *
     * @param string $mnameNow
     *
     * @return EntityForumNamesHistory
     */
    public function setMnameNow($mnameNow)
    {
        $this->mnameNow = $mnameNow;

        return $this;
    }

    /**
     * Get mnameNow
     *
     * @return string
     */
    public function getMnameNow()
    {
        return $this->mnameNow;
    }

    /**
     * Set date
     *
     * @param integer $date
     *
     * @return EntityForumNamesHistory
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return integer
     */
    public function getDate()
    {
        return $this->date;
    }
}
