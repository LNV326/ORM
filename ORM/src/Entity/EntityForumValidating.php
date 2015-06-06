<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumValidating
 *
 * @ORM\Table(name="forum_validating", indexes={@ORM\Index(name="new_reg", columns={"new_reg"})})
 * @ORM\Entity(repositoryClass="Repository\EntityForumValidatingRep")
 */
class EntityForumValidating
{
    /**
     * @var string
     *
     * @ORM\Column(name="vid", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $vid = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="member_id", type="integer", nullable=false)
     */
    private $memberId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="real_group", type="smallint", nullable=false)
     */
    private $realGroup = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="temp_group", type="smallint", nullable=false)
     */
    private $tempGroup = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="entry_date", type="integer", nullable=false)
     */
    private $entryDate = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="coppa_user", type="boolean", nullable=false)
     */
    private $coppaUser = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="lost_pass", type="boolean", nullable=false)
     */
    private $lostPass = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="new_reg", type="boolean", nullable=false)
     */
    private $newReg = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="email_chg", type="boolean", nullable=false)
     */
    private $emailChg = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_address", type="string", length=16, nullable=false)
     */
    private $ipAddress = '0';



    /**
     * Get vid
     *
     * @return string
     */
    public function getVid()
    {
        return $this->vid;
    }

    /**
     * Set memberId
     *
     * @param integer $memberId
     *
     * @return EntityForumValidating
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
     * Set realGroup
     *
     * @param integer $realGroup
     *
     * @return EntityForumValidating
     */
    public function setRealGroup($realGroup)
    {
        $this->realGroup = $realGroup;

        return $this;
    }

    /**
     * Get realGroup
     *
     * @return integer
     */
    public function getRealGroup()
    {
        return $this->realGroup;
    }

    /**
     * Set tempGroup
     *
     * @param integer $tempGroup
     *
     * @return EntityForumValidating
     */
    public function setTempGroup($tempGroup)
    {
        $this->tempGroup = $tempGroup;

        return $this;
    }

    /**
     * Get tempGroup
     *
     * @return integer
     */
    public function getTempGroup()
    {
        return $this->tempGroup;
    }

    /**
     * Set entryDate
     *
     * @param integer $entryDate
     *
     * @return EntityForumValidating
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
     * Set coppaUser
     *
     * @param boolean $coppaUser
     *
     * @return EntityForumValidating
     */
    public function setCoppaUser($coppaUser)
    {
        $this->coppaUser = $coppaUser;

        return $this;
    }

    /**
     * Get coppaUser
     *
     * @return boolean
     */
    public function getCoppaUser()
    {
        return $this->coppaUser;
    }

    /**
     * Set lostPass
     *
     * @param boolean $lostPass
     *
     * @return EntityForumValidating
     */
    public function setLostPass($lostPass)
    {
        $this->lostPass = $lostPass;

        return $this;
    }

    /**
     * Get lostPass
     *
     * @return boolean
     */
    public function getLostPass()
    {
        return $this->lostPass;
    }

    /**
     * Set newReg
     *
     * @param boolean $newReg
     *
     * @return EntityForumValidating
     */
    public function setNewReg($newReg)
    {
        $this->newReg = $newReg;

        return $this;
    }

    /**
     * Get newReg
     *
     * @return boolean
     */
    public function getNewReg()
    {
        return $this->newReg;
    }

    /**
     * Set emailChg
     *
     * @param boolean $emailChg
     *
     * @return EntityForumValidating
     */
    public function setEmailChg($emailChg)
    {
        $this->emailChg = $emailChg;

        return $this;
    }

    /**
     * Get emailChg
     *
     * @return boolean
     */
    public function getEmailChg()
    {
        return $this->emailChg;
    }

    /**
     * Set ipAddress
     *
     * @param string $ipAddress
     *
     * @return EntityForumValidating
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
