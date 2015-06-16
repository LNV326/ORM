<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * EntitySFilesSubcat
 *
 * @ORM\Table(name="s_files_subcat")
 * @ORM\Entity(repositoryClass="Repository\EntitySFilesSubcatRep")
 */
class EntitySFilesSubcat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="cat_id", type="integer", nullable=false)
     */
    private $catId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="poz", type="integer", nullable=false)
     */
    private $poz = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text", length=65535, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="text", length=65535, nullable=false)
     */
    private $info;

    /**
     * @var string
     *
     * @ORM\Column(name="default_path", type="string", length=255, nullable=false)
     */
    private $defaultPath = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="files_cnt", type="integer", nullable=false)
     */
    private $filesCnt = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type = '0';
    
    /**
     * @var unknown
     *
     * @ORM\ManyToOne(targetEntity="EntitySFilesCat", inversedBy="subcatVal")
     * @ORM\JoinColumn(name="cat_id", referencedColumnName="id")
     */
    private $categoryVal = null;
    
    /**
     * @var unknown
     * 
     * @ORM\OneToMany(targetEntity="EntitySFilesDb", mappedBy="subcatVal")
     */
    private $filesVal;

	public function __construct() {
		$this->filesVal = new ArrayCollection();
	}

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
     * @return EntitySFilesSubcat
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
     * @param integer $poz
     *
     * @return EntitySFilesSubcat
     */
    public function setPoz($poz)
    {
        $this->poz = $poz;

        return $this;
    }

    /**
     * Get poz
     *
     * @return integer
     */
    public function getPoz()
    {
        return $this->poz;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return EntitySFilesSubcat
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
     * Set info
     *
     * @param string $info
     *
     * @return EntitySFilesSubcat
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
     * Set defaultPath
     *
     * @param string $defaultPath
     *
     * @return EntitySFilesSubcat
     */
    public function setDefaultPath($defaultPath)
    {
        $this->defaultPath = $defaultPath;

        return $this;
    }

    /**
     * Get defaultPath
     *
     * @return string
     */
    public function getDefaultPath()
    {
        return $this->defaultPath;
    }

    /**
     * Set filesCnt
     *
     * @param integer $filesCnt
     *
     * @return EntitySFilesSubcat
     */
    public function setFilesCnt($filesCnt)
    {
        $this->filesCnt = $filesCnt;

        return $this;
    }

    /**
     * Get filesCnt
     *
     * @return integer
     */
    public function getFilesCnt()
    {
        return $this->filesCnt;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return EntitySFilesSubcat
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set categoryVal
     *
     * @param \Entity\EntitySFilesCat $categoryVal
     * @return EntitySFilesSubcat
     */
    public function setCategoryVal(\Entity\EntitySFilesCat $categoryVal = null)
    {
        $this->categoryVal = $categoryVal;

        return $this;
    }

    /**
     * Get categoryVal
     *
     * @return \Entity\EntitySFilesCat 
     */
    public function getCategoryVal()
    {
        return $this->categoryVal;
    }

    /**
     * Add filesVal
     *
     * @param \Entity\EntitySFilesDb $filesVal
     * @return EntitySFilesSubcat
     */
    public function addFilesVal(\Entity\EntitySFilesDb $filesVal)
    {
        $this->filesVal[] = $filesVal;

        return $this;
    }

    /**
     * Remove filesVal
     *
     * @param \Entity\EntitySFilesDb $filesVal
     */
    public function removeFilesVal(\Entity\EntitySFilesDb $filesVal)
    {
        $this->filesVal->removeElement($filesVal);
    }

    /**
     * Get filesVal
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFilesVal()
    {
        return $this->filesVal;
    }
}
