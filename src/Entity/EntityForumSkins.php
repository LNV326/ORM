<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumSkins
 *
 * @ORM\Table(name="forum_skins", indexes={@ORM\Index(name="tmpl_id", columns={"tmpl_id"}), @ORM\Index(name="css_id", columns={"css_id"})})
 * @ORM\Entity(repositoryClass="Repository\EntityForumSkinsRep")
 */
class EntityForumSkins
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid;

    /**
     * @var string
     *
     * @ORM\Column(name="sname", type="string", length=100, nullable=false)
     */
    private $sname = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="sid", type="integer", nullable=false)
     */
    private $sid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="set_id", type="integer", nullable=false)
     */
    private $setId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tmpl_id", type="integer", nullable=false)
     */
    private $tmplId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="macro_id", type="integer", nullable=false)
     */
    private $macroId = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="css_id", type="integer", nullable=false)
     */
    private $cssId = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="img_dir", type="string", length=200, nullable=true)
     */
    private $imgDir = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="tbl_width", type="string", length=250, nullable=true)
     */
    private $tblWidth;

    /**
     * @var string
     *
     * @ORM\Column(name="tbl_border", type="string", length=250, nullable=true)
     */
    private $tblBorder;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hidden", type="boolean", nullable=false)
     */
    private $hidden = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="default_set", type="boolean", nullable=false)
     */
    private $defaultSet = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="css_method", type="string", length=100, nullable=true)
     */
    private $cssMethod = 'inline';



    /**
     * Get uid
     *
     * @return integer
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set sname
     *
     * @param string $sname
     *
     * @return EntityForumSkins
     */
    public function setSname($sname)
    {
        $this->sname = $sname;

        return $this;
    }

    /**
     * Get sname
     *
     * @return string
     */
    public function getSname()
    {
        return $this->sname;
    }

    /**
     * Set sid
     *
     * @param integer $sid
     *
     * @return EntityForumSkins
     */
    public function setSid($sid)
    {
        $this->sid = $sid;

        return $this;
    }

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
     * Set setId
     *
     * @param integer $setId
     *
     * @return EntityForumSkins
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
     * Set tmplId
     *
     * @param integer $tmplId
     *
     * @return EntityForumSkins
     */
    public function setTmplId($tmplId)
    {
        $this->tmplId = $tmplId;

        return $this;
    }

    /**
     * Get tmplId
     *
     * @return integer
     */
    public function getTmplId()
    {
        return $this->tmplId;
    }

    /**
     * Set macroId
     *
     * @param integer $macroId
     *
     * @return EntityForumSkins
     */
    public function setMacroId($macroId)
    {
        $this->macroId = $macroId;

        return $this;
    }

    /**
     * Get macroId
     *
     * @return integer
     */
    public function getMacroId()
    {
        return $this->macroId;
    }

    /**
     * Set cssId
     *
     * @param integer $cssId
     *
     * @return EntityForumSkins
     */
    public function setCssId($cssId)
    {
        $this->cssId = $cssId;

        return $this;
    }

    /**
     * Get cssId
     *
     * @return integer
     */
    public function getCssId()
    {
        return $this->cssId;
    }

    /**
     * Set imgDir
     *
     * @param string $imgDir
     *
     * @return EntityForumSkins
     */
    public function setImgDir($imgDir)
    {
        $this->imgDir = $imgDir;

        return $this;
    }

    /**
     * Get imgDir
     *
     * @return string
     */
    public function getImgDir()
    {
        return $this->imgDir;
    }

    /**
     * Set tblWidth
     *
     * @param string $tblWidth
     *
     * @return EntityForumSkins
     */
    public function setTblWidth($tblWidth)
    {
        $this->tblWidth = $tblWidth;

        return $this;
    }

    /**
     * Get tblWidth
     *
     * @return string
     */
    public function getTblWidth()
    {
        return $this->tblWidth;
    }

    /**
     * Set tblBorder
     *
     * @param string $tblBorder
     *
     * @return EntityForumSkins
     */
    public function setTblBorder($tblBorder)
    {
        $this->tblBorder = $tblBorder;

        return $this;
    }

    /**
     * Get tblBorder
     *
     * @return string
     */
    public function getTblBorder()
    {
        return $this->tblBorder;
    }

    /**
     * Set hidden
     *
     * @param boolean $hidden
     *
     * @return EntityForumSkins
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;

        return $this;
    }

    /**
     * Get hidden
     *
     * @return boolean
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * Set defaultSet
     *
     * @param boolean $defaultSet
     *
     * @return EntityForumSkins
     */
    public function setDefaultSet($defaultSet)
    {
        $this->defaultSet = $defaultSet;

        return $this;
    }

    /**
     * Get defaultSet
     *
     * @return boolean
     */
    public function getDefaultSet()
    {
        return $this->defaultSet;
    }

    /**
     * Set cssMethod
     *
     * @param string $cssMethod
     *
     * @return EntityForumSkins
     */
    public function setCssMethod($cssMethod)
    {
        $this->cssMethod = $cssMethod;

        return $this;
    }

    /**
     * Get cssMethod
     *
     * @return string
     */
    public function getCssMethod()
    {
        return $this->cssMethod;
    }
}
