<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntitySGalleryImages
 *
 * @ORM\Table(name="s_gallery_images")
 * @ORM\Entity(repositoryClass="Repository\EntitySGalleryImagesRep")
 */
class EntitySGalleryImages
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
     * @ORM\Column(name="mid", type="integer", nullable=false)
     */
    private $mid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mname", type="string", length=255, nullable=false)
     */
    private $mname = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="subcat", type="integer", nullable=false)
     */
    private $subcat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="text", length=65535, nullable=false)
     */
    private $filename;

    /**
     * @var boolean
     *
     * @ORM\Column(name="allow_add", type="boolean", nullable=false)
     */
    private $allowAdd = '0';



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
     * @return EntitySGalleryImages
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
     * Set mname
     *
     * @param string $mname
     *
     * @return EntitySGalleryImages
     */
    public function setMname($mname)
    {
        $this->mname = $mname;

        return $this;
    }

    /**
     * Get mname
     *
     * @return string
     */
    public function getMname()
    {
        return $this->mname;
    }

    /**
     * Set subcat
     *
     * @param integer $subcat
     *
     * @return EntitySGalleryImages
     */
    public function setSubcat($subcat)
    {
        $this->subcat = $subcat;

        return $this;
    }

    /**
     * Get subcat
     *
     * @return integer
     */
    public function getSubcat()
    {
        return $this->subcat;
    }

    /**
     * Set filename
     *
     * @param string $filename
     *
     * @return EntitySGalleryImages
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set allowAdd
     *
     * @param boolean $allowAdd
     *
     * @return EntitySGalleryImages
     */
    public function setAllowAdd($allowAdd)
    {
        $this->allowAdd = $allowAdd;

        return $this;
    }

    /**
     * Get allowAdd
     *
     * @return boolean
     */
    public function getAllowAdd()
    {
        return $this->allowAdd;
    }
}
