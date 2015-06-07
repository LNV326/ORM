<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntitySPages
 *
 * @ORM\Table(name="s_pages", indexes={@ORM\Index(name="id", columns={"id"}), @ORM\Index(name="html_page", columns={"html_page"}), @ORM\Index(name="title", columns={"title"})})
 * @ORM\Entity(repositoryClass="Repository\EntitySPagesRep")
 */
class EntitySPages
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $name = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="html_page", type="text", length=65535, nullable=false)
     */
    private $htmlPage;

    /**
     * @var string
     *
     * @ORM\Column(name="editor", type="text", length=255, nullable=true)
     */
    private $editor;

    /**
     * @var integer
     *
     * @ORM\Column(name="counts", type="integer", nullable=false)
     */
    private $counts = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="page_info", type="text", length=255, nullable=false)
     */
    private $pageInfo;

    /**
     * @var string
     *
     * @ORM\Column(name="root_page", type="text", length=255, nullable=false)
     */
    private $rootPage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var integer
     *
     * @ORM\Column(name="created_by", type="integer", nullable=true)
     */
    private $createdBy = '0';

    /**
     * @ORM\ManyToOne(targetEntity="EntitySPages")
     * @ORM\JoinColumn(name="root_page", referencedColumnName="name")
     **/
    private $rootPageVal;
    
    /**
     * @ORM\ManyToOne(targetEntity="EntityForumMembers")
     * @ORM\JoinColumn(name="created_by", referencedColumnName="id")
     **/
    private $createdByVal;


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
     * Set id
     *
     * @param integer $id
     *
     * @return EntitySPages
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set title
     *
     * @param string $title
     *
     * @return EntitySPages
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

    /**
     * Set htmlPage
     *
     * @param string $htmlPage
     *
     * @return EntitySPages
     */
    public function setHtmlPage($htmlPage)
    {
        $this->htmlPage = $htmlPage;

        return $this;
    }

    /**
     * Get htmlPage
     *
     * @return string
     */
    public function getHtmlPage()
    {
        return $this->htmlPage;
    }

    /**
     * Set editor
     *
     * @param string $editor
     *
     * @return EntitySPages
     */
    public function setEditor($editor)
    {
        $this->editor = $editor;

        return $this;
    }

    /**
     * Get editor
     *
     * @return string
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * Set counts
     *
     * @param integer $counts
     *
     * @return EntitySPages
     */
    public function setCounts($counts)
    {
        $this->counts = $counts;

        return $this;
    }

    /**
     * Get counts
     *
     * @return integer
     */
    public function getCounts()
    {
        return $this->counts;
    }

    /**
     * Set pageInfo
     *
     * @param string $pageInfo
     *
     * @return EntitySPages
     */
    public function setPageInfo($pageInfo)
    {
        $this->pageInfo = $pageInfo;

        return $this;
    }

    /**
     * Get pageInfo
     *
     * @return string
     */
    public function getPageInfo()
    {
        return $this->pageInfo;
    }

    /**
     * Set rootPage
     *
     * @param string $rootPage
     *
     * @return EntitySPages
     */
    public function setRootPage($rootPage)
    {
        $this->rootPage = $rootPage;

        return $this;
    }

    /**
     * Get rootPage
     *
     * @return string
     */
    public function getRootPage()
    {
        return $this->rootPage;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return EntitySPages
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
     * @return EntitySPages
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
    
	public function getRootPageVal() {
		return $this->rootPageVal;
	}
	
	public function setRootPageVal($rootPageVal) {
		$this->rootPageVal = $rootPageVal;
		return $this;
	}
	

    /**
     * Set createdByVal
     *
     * @param \Entity\EntityForumMembers $createdByVal
     *
     * @return EntitySPages
     */
    public function setCreatedByVal(\Entity\EntityForumMembers $createdByVal = null)
    {
        $this->createdByVal = $createdByVal;

        return $this;
    }

    /**
     * Get createdByVal
     *
     * @return \Entity\EntityForumMembers
     */
    public function getCreatedByVal()
    {
        return $this->createdByVal;
    }
}
