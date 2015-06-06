<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntitySGalleryCat
 *
 * @ORM\Table(name="s_gallery_cat", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class EntitySGalleryCat
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
     * @var string
     *
     * @ORM\Column(name="info", type="text", length=65535, nullable=false)
     */
    private $info;

    /**
     * @var integer
     *
     * @ORM\Column(name="poz", type="integer", nullable=false)
     */
    private $poz = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="dir_name", type="string", length=25, nullable=false)
     */
    private $dirName = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="default_img", type="integer", nullable=false)
     */
    private $defaultImg;



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
     * @return EntitySGalleryCat
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
     * @return EntitySGalleryCat
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
     * Set poz
     *
     * @param integer $poz
     *
     * @return EntitySGalleryCat
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
     * Set dirName
     *
     * @param string $dirName
     *
     * @return EntitySGalleryCat
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
     * Set defaultImg
     *
     * @param integer $defaultImg
     *
     * @return EntitySGalleryCat
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
}
