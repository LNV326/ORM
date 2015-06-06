<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumCategories
 *
 * @ORM\Table(name="forum_categories", indexes={@ORM\Index(name="name", columns={"name"})})
 * @ORM\Entity
 */
class EntityForumCategories
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="position", type="boolean", nullable=true)
     */
    private $position;

    /**
     * @var boolean
     *
     * @ORM\Column(name="state", type="boolean", nullable=false)
     */
    private $state = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=128, nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=128, nullable=true)
     */
    private $url;



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
     * Set position
     *
     * @param boolean $position
     *
     * @return EntityForumCategories
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return boolean
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set state
     *
     * @param boolean $state
     *
     * @return EntityForumCategories
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return boolean
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return EntityForumCategories
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
     * @return EntityForumCategories
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
     * Set image
     *
     * @param string $image
     *
     * @return EntityForumCategories
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return EntityForumCategories
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
}
