<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntitySFilesDb
 *
 * @ORM\Table(name="s_files_db")
 * @ORM\Entity(repositoryClass="Repository\EntitySFilesDbRep")
 */
class EntitySFilesDb
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
     * @ORM\Column(name="subcat_id", type="integer", nullable=false)
     */
    private $subcatId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="subcat_info", type="text", length=65535, nullable=false)
     */
    private $subcatInfo;

    /**
     * @var integer
     *
     * @ORM\Column(name="count", type="integer", nullable=false)
     */
    private $count = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="text", length=65535, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text", length=65535, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="text", length=65535, nullable=false)
     */
    private $img;

    /**
     * @var string
     *
     * @ORM\Column(name="img_big", type="text", length=65535, nullable=false)
     */
    private $imgBig;

    /**
     * @var string
     *
     * @ORM\Column(name="autor", type="text", length=65535, nullable=false)
     */
    private $autor;

    /**
     * @var integer
     *
     * @ORM\Column(name="link", type="integer", nullable=false)
     */
    private $link = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="created_by", type="integer", nullable=false)
     */
    private $createdBy = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="moderated", type="datetime", nullable=true)
     */
    private $moderated;

    /**
     * @var integer
     *
     * @ORM\Column(name="moderated_by", type="integer", nullable=false)
     */
    private $moderatedBy = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="show", type="string", nullable=false)
     */
    private $show = 'N';
    
    /**
     * @var unknown
     * 
     * @ORM\ManyToOne(targetEntity="EntitySFilesSubcat", inversedBy="filesVal")
     * @ORM\JoinColumn(name="subcat_id", referencedColumnName="id")
     */
    private $subcatVal = null;



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
     * Set subcatId
     *
     * @param integer $subcatId
     *
     * @return EntitySFilesDb
     */
    public function setSubcatId($subcatId)
    {
        $this->subcatId = $subcatId;

        return $this;
    }

    /**
     * Get subcatId
     *
     * @return integer
     */
    public function getSubcatId()
    {
        return $this->subcatId;
    }

    /**
     * Set subcatInfo
     *
     * @param string $subcatInfo
     *
     * @return EntitySFilesDb
     */
    public function setSubcatInfo($subcatInfo)
    {
        $this->subcatInfo = $subcatInfo;

        return $this;
    }

    /**
     * Get subcatInfo
     *
     * @return string
     */
    public function getSubcatInfo()
    {
        return $this->subcatInfo;
    }

    /**
     * Set count
     *
     * @param integer $count
     *
     * @return EntitySFilesDb
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return EntitySFilesDb
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
     * Set name
     *
     * @param string $name
     *
     * @return EntitySFilesDb
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return EntitySFilesDb
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set img
     *
     * @param string $img
     *
     * @return EntitySFilesDb
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set imgBig
     *
     * @param string $imgBig
     *
     * @return EntitySFilesDb
     */
    public function setImgBig($imgBig)
    {
        $this->imgBig = $imgBig;

        return $this;
    }

    /**
     * Get imgBig
     *
     * @return string
     */
    public function getImgBig()
    {
        return $this->imgBig;
    }

    /**
     * Set autor
     *
     * @param string $autor
     *
     * @return EntitySFilesDb
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get autor
     *
     * @return string
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set link
     *
     * @param integer $link
     *
     * @return EntitySFilesDb
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return integer
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return EntitySFilesDb
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return EntitySFilesDb
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return integer
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set moderated
     *
     * @param \DateTime $moderated
     *
     * @return EntitySFilesDb
     */
    public function setModerated($moderated)
    {
        $this->moderated = $moderated;

        return $this;
    }

    /**
     * Get moderated
     *
     * @return \DateTime
     */
    public function getModerated()
    {
        return $this->moderated;
    }

    /**
     * Set moderatedBy
     *
     * @param integer $moderatedBy
     *
     * @return EntitySFilesDb
     */
    public function setModeratedBy($moderatedBy)
    {
        $this->moderatedBy = $moderatedBy;

        return $this;
    }

    /**
     * Get moderatedBy
     *
     * @return integer
     */
    public function getModeratedBy()
    {
        return $this->moderatedBy;
    }

    /**
     * Set show
     *
     * @param string $show
     *
     * @return EntitySFilesDb
     */
    public function setShow($show)
    {
        $this->show = $show;

        return $this;
    }

    /**
     * Get show
     *
     * @return string
     */
    public function getShow()
    {
        return $this->show;
    }

    /**
     * Set subcatVal
     *
     * @param \Entity\EntitySFilesSubcat $subcatVal
     * @return EntitySFilesDb
     */
    public function setSubcatVal(\Entity\EntitySFilesSubcat $subcatVal = null)
    {
        $this->subcatVal = $subcatVal;

        return $this;
    }

    /**
     * Get subcatVal
     *
     * @return \Entity\EntitySFilesSubcat 
     */
    public function getSubcatVal()
    {
        return $this->subcatVal;
    }
}
