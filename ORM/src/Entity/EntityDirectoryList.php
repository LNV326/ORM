<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityDirectoryList
 *
 * @ORM\Table(name="directory_list", uniqueConstraints={@ORM\UniqueConstraint(name="refid", columns={"refid"})})
 * @ORM\Entity(repositoryClass="Repository\EntityDirectoryListRep")
 */
class EntityDirectoryList
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
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=15, nullable=false)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="refid", type="string", length=15, nullable=false)
     */
    private $refid;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=30, nullable=false)
     */
    private $title;



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
     * Set category
     *
     * @param string $category
     *
     * @return EntityDirectoryList
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set refid
     *
     * @param string $refid
     *
     * @return EntityDirectoryList
     */
    public function setRefid($refid)
    {
        $this->refid = $refid;

        return $this;
    }

    /**
     * Get refid
     *
     * @return string
     */
    public function getRefid()
    {
        return $this->refid;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return EntityDirectoryList
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
}
