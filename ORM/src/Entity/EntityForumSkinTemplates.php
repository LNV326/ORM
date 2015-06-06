<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumSkinTemplates
 *
 * @ORM\Table(name="forum_skin_templates", indexes={@ORM\Index(name="group_name", columns={"group_name"})})
 * @ORM\Entity(repositoryClass="Repository\EntityForumSkinTemplatesRep")
 */
class EntityForumSkinTemplates
{
    /**
     * @var integer
     *
     * @ORM\Column(name="suid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $suid;

    /**
     * @var integer
     *
     * @ORM\Column(name="set_id", type="integer", nullable=false)
     */
    private $setId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="group_name", type="string", length=255, nullable=false)
     */
    private $groupName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="section_content", type="text", length=16777215, nullable=true)
     */
    private $sectionContent;

    /**
     * @var string
     *
     * @ORM\Column(name="func_name", type="string", length=255, nullable=true)
     */
    private $funcName;

    /**
     * @var string
     *
     * @ORM\Column(name="func_data", type="text", length=65535, nullable=true)
     */
    private $funcData;

    /**
     * @var integer
     *
     * @ORM\Column(name="updated", type="integer", nullable=true)
     */
    private $updated;

    /**
     * @var boolean
     *
     * @ORM\Column(name="can_remove", type="boolean", nullable=true)
     */
    private $canRemove = '0';



    /**
     * Get suid
     *
     * @return integer
     */
    public function getSuid()
    {
        return $this->suid;
    }

    /**
     * Set setId
     *
     * @param integer $setId
     *
     * @return EntityForumSkinTemplates
     */
    public function setSetId($setId)
    {
        $this->setId = $setId;

        return $this;
    }

    /**
     * Get setId
     *
     * @return integer
     */
    public function getSetId()
    {
        return $this->setId;
    }

    /**
     * Set groupName
     *
     * @param string $groupName
     *
     * @return EntityForumSkinTemplates
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;

        return $this;
    }

    /**
     * Get groupName
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * Set sectionContent
     *
     * @param string $sectionContent
     *
     * @return EntityForumSkinTemplates
     */
    public function setSectionContent($sectionContent)
    {
        $this->sectionContent = $sectionContent;

        return $this;
    }

    /**
     * Get sectionContent
     *
     * @return string
     */
    public function getSectionContent()
    {
        return $this->sectionContent;
    }

    /**
     * Set funcName
     *
     * @param string $funcName
     *
     * @return EntityForumSkinTemplates
     */
    public function setFuncName($funcName)
    {
        $this->funcName = $funcName;

        return $this;
    }

    /**
     * Get funcName
     *
     * @return string
     */
    public function getFuncName()
    {
        return $this->funcName;
    }

    /**
     * Set funcData
     *
     * @param string $funcData
     *
     * @return EntityForumSkinTemplates
     */
    public function setFuncData($funcData)
    {
        $this->funcData = $funcData;

        return $this;
    }

    /**
     * Get funcData
     *
     * @return string
     */
    public function getFuncData()
    {
        return $this->funcData;
    }

    /**
     * Set updated
     *
     * @param integer $updated
     *
     * @return EntityForumSkinTemplates
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return integer
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set canRemove
     *
     * @param boolean $canRemove
     *
     * @return EntityForumSkinTemplates
     */
    public function setCanRemove($canRemove)
    {
        $this->canRemove = $canRemove;

        return $this;
    }

    /**
     * Get canRemove
     *
     * @return boolean
     */
    public function getCanRemove()
    {
        return $this->canRemove;
    }
}
