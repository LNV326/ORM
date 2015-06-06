<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntityDirectoryElm
 *
 * @ORM\Table(name="directory_elm", uniqueConstraints={@ORM\UniqueConstraint(name="refid", columns={"refid"})}, indexes={@ORM\Index(name="dir_elm2dir_list", columns={"dir_elm2dir_list"})})
 * @ORM\Entity
 */
class EntityDirectoryElm
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
     * @var integer
     *
     * @ORM\Column(name="dir_elm2dir_list", type="integer", nullable=false)
     */
    private $dirElm2dirList = '0';

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
     * Set dirElm2dirList
     *
     * @param integer $dirElm2dirList
     *
     * @return EntityDirectoryElm
     */
    public function setDirElm2dirList($dirElm2dirList)
    {
        $this->dirElm2dirList = $dirElm2dirList;

        return $this;
    }

    /**
     * Get dirElm2dirList
     *
     * @return integer
     */
    public function getDirElm2dirList()
    {
        return $this->dirElm2dirList;
    }

    /**
     * Set refid
     *
     * @param string $refid
     *
     * @return EntityDirectoryElm
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
     * @return EntityDirectoryElm
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
