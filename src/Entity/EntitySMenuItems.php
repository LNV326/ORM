<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntitySMenuItems
 *
 * @ORM\Table(name="s_menu_items", indexes={@ORM\Index(name="id", columns={"id"}), @ORM\Index(name="cat_id", columns={"cat_id"})})
 * @ORM\Entity(repositoryClass="Repository\EntitySMenuItemsRep")
 */
class EntitySMenuItems
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
     * @ORM\Column(name="cat_id", type="integer", nullable=true)
     */
    private $catId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="poz", type="boolean", nullable=false)
     */
    private $poz = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="string", length=20, nullable=false)
     */
    private $info = '';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=10, nullable=false)
     */
    private $type = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="new", type="boolean", nullable=false)
     */
    private $new = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="text", length=255, nullable=false)
     */
    private $url;

    /**
     * @var boolean
     *
     * @ORM\Column(name="open_new", type="boolean", nullable=false)
     */
    private $openNew = '0';

    /**
     * @ORM\ManyToOne(targetEntity="EntitySMenuCat", inversedBy="itemsVal")
     * @ORM\JoinColumn(name="cat_id", referencedColumnName="id")
     **/
    private $categoryVal = null;


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
     * Set catId
     *
     * @param integer $catId
     *
     * @return EntitySMenuItems
     */
    public function setCatId($catId)
    {
        $this->catId = $catId;

        return $this;
    }

    /**
     * Get catId
     *
     * @return integer
     */
    public function getCatId()
    {
        return $this->catId;
    }

    /**
     * Set poz
     *
     * @param boolean $poz
     *
     * @return EntitySMenuItems
     */
    public function setPoz($poz)
    {
        $this->poz = $poz;

        return $this;
    }

    /**
     * Get poz
     *
     * @return boolean
     */
    public function getPoz()
    {
        return $this->poz;
    }

    /**
     * Set info
     *
     * @param string $info
     *
     * @return EntitySMenuItems
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return EntitySMenuItems
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set new
     *
     * @param boolean $new
     *
     * @return EntitySMenuItems
     */
    public function setNew($new)
    {
        $this->new = $new;

        return $this;
    }

    /**
     * Get new
     *
     * @return boolean
     */
    public function getNew()
    {
        return $this->new;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return EntitySMenuItems
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set openNew
     *
     * @param boolean $openNew
     *
     * @return EntitySMenuItems
     */
    public function setOpenNew($openNew)
    {
        $this->openNew = $openNew;

        return $this;
    }

    /**
     * Get openNew
     *
     * @return boolean
     */
    public function getOpenNew()
    {
        return $this->openNew;
    }

    /**
     * Set categoryVal
     *
     * @param \Entity\EntitySMenuCat $categoryVal
     *
     * @return EntitySMenuItems
     */
    public function setCategoryVal(\Entity\EntitySMenuCat $categoryVal = null)
    {
        $this->categoryVal = $categoryVal;

        return $this;
    }

    /**
     * Get categoryVal
     *
     * @return \Entity\EntitySMenuCat
     */
    public function getCategoryVal()
    {
        return $this->categoryVal;
    }
}
