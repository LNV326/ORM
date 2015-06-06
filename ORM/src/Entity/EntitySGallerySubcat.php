<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntitySGallerySubcat
 *
 * @ORM\Table(name="s_gallery_subcat")
 * @ORM\Entity
 */
class EntitySGallerySubcat
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
     * @var string
     *
     * @ORM\Column(name="name", type="text", length=65535, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="cat_id", type="integer", nullable=false)
     */
    private $catId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="in_sub_id", type="integer", nullable=false)
     */
    private $inSubId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="sub", type="integer", nullable=false)
     */
    private $sub = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_sub", type="boolean", nullable=false)
     */
    private $inSub = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="text", length=65535, nullable=false)
     */
    private $info;

    /**
     * @var boolean
     *
     * @ORM\Column(name="add_files", type="boolean", nullable=false)
     */
    private $addFiles = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="files_cnt", type="integer", nullable=false)
     */
    private $filesCnt = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="dir_name", type="string", length=255, nullable=false)
     */
    private $dirName = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="img_w", type="integer", nullable=false)
     */
    private $imgW = '800';

    /**
     * @var integer
     *
     * @ORM\Column(name="img_h", type="integer", nullable=false)
     */
    private $imgH = '600';

    /**
     * @var integer
     *
     * @ORM\Column(name="poz", type="integer", nullable=false)
     */
    private $poz = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="sub_cnt", type="integer", nullable=false)
     */
    private $subCnt = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="default_img", type="integer", nullable=false)
     */
    private $defaultImg;

    /**
     * @var integer
     *
     * @ORM\Column(name="album2dir_elm", type="integer", nullable=false)
     */
    private $album2dirElm = '0';



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
     * Set name
     *
     * @param string $name
     *
     * @return EntitySGallerySubcat
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
     * Set catId
     *
     * @param integer $catId
     *
     * @return EntitySGallerySubcat
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
     * Set inSubId
     *
     * @param integer $inSubId
     *
     * @return EntitySGallerySubcat
     */
    public function setInSubId($inSubId)
    {
        $this->inSubId = $inSubId;

        return $this;
    }

    /**
     * Get inSubId
     *
     * @return integer
     */
    public function getInSubId()
    {
        return $this->inSubId;
    }

    /**
     * Set sub
     *
     * @param integer $sub
     *
     * @return EntitySGallerySubcat
     */
    public function setSub($sub)
    {
        $this->sub = $sub;

        return $this;
    }

    /**
     * Get sub
     *
     * @return integer
     */
    public function getSub()
    {
        return $this->sub;
    }

    /**
     * Set inSub
     *
     * @param boolean $inSub
     *
     * @return EntitySGallerySubcat
     */
    public function setInSub($inSub)
    {
        $this->inSub = $inSub;

        return $this;
    }

    /**
     * Get inSub
     *
     * @return boolean
     */
    public function getInSub()
    {
        return $this->inSub;
    }

    /**
     * Set info
     *
     * @param string $info
     *
     * @return EntitySGallerySubcat
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
     * Set addFiles
     *
     * @param boolean $addFiles
     *
     * @return EntitySGallerySubcat
     */
    public function setAddFiles($addFiles)
    {
        $this->addFiles = $addFiles;

        return $this;
    }

    /**
     * Get addFiles
     *
     * @return boolean
     */
    public function getAddFiles()
    {
        return $this->addFiles;
    }

    /**
     * Set filesCnt
     *
     * @param integer $filesCnt
     *
     * @return EntitySGallerySubcat
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
     * Set dirName
     *
     * @param string $dirName
     *
     * @return EntitySGallerySubcat
     */
    public function setDirName($dirName)
    {
        $this->dirName = $dirName;

        return $this;
    }

    /**
     * Get dirName
     *
     * @return string
     */
    public function getDirName()
    {
        return $this->dirName;
    }

    /**
     * Set imgW
     *
     * @param integer $imgW
     *
     * @return EntitySGallerySubcat
     */
    public function setImgW($imgW)
    {
        $this->imgW = $imgW;

        return $this;
    }

    /**
     * Get imgW
     *
     * @return integer
     */
    public function getImgW()
    {
        return $this->imgW;
    }

    /**
     * Set imgH
     *
     * @param integer $imgH
     *
     * @return EntitySGallerySubcat
     */
    public function setImgH($imgH)
    {
        $this->imgH = $imgH;

        return $this;
    }

    /**
     * Get imgH
     *
     * @return integer
     */
    public function getImgH()
    {
        return $this->imgH;
    }

    /**
     * Set poz
     *
     * @param integer $poz
     *
     * @return EntitySGallerySubcat
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
     * Set subCnt
     *
     * @param integer $subCnt
     *
     * @return EntitySGallerySubcat
     */
    public function setSubCnt($subCnt)
    {
        $this->subCnt = $subCnt;

        return $this;
    }

    /**
     * Get subCnt
     *
     * @return integer
     */
    public function getSubCnt()
    {
        return $this->subCnt;
    }

    /**
     * Set defaultImg
     *
     * @param integer $defaultImg
     *
     * @return EntitySGallerySubcat
     */
    public function setDefaultImg($defaultImg)
    {
        $this->defaultImg = $defaultImg;

        return $this;
    }

    /**
     * Get defaultImg
     *
     * @return integer
     */
    public function getDefaultImg()
    {
        return $this->defaultImg;
    }

    /**
     * Set album2dirElm
     *
     * @param integer $album2dirElm
     *
     * @return EntitySGallerySubcat
     */
    public function setAlbum2dirElm($album2dirElm)
    {
        $this->album2dirElm = $album2dirElm;

        return $this;
    }

    /**
     * Get album2dirElm
     *
     * @return integer
     */
    public function getAlbum2dirElm()
    {
        return $this->album2dirElm;
    }
}
