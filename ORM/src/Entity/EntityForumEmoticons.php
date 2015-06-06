<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumEmoticons
 *
 * @ORM\Table(name="forum_emoticons", indexes={@ORM\Index(name="clickable", columns={"clickable"})})
 * @ORM\Entity
 */
class EntityForumEmoticons
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="typed", type="string", length=32, nullable=false)
     */
    private $typed = '';

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=128, nullable=false)
     */
    private $image = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="clickable", type="smallint", nullable=false)
     */
    private $clickable = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="emo_category", type="boolean", nullable=false)
     */
    private $emoCategory = '1';



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
     * Set typed
     *
     * @param string $typed
     *
     * @return EntityForumEmoticons
     */
    public function setTyped($typed)
    {
        $this->typed = $typed;

        return $this;
    }

    /**
     * Get typed
     *
     * @return string
     */
    public function getTyped()
    {
        return $this->typed;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return EntityForumEmoticons
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
     * Set clickable
     *
     * @param integer $clickable
     *
     * @return EntityForumEmoticons
     */
    public function setClickable($clickable)
    {
        $this->clickable = $clickable;

        return $this;
    }

    /**
     * Get clickable
     *
     * @return integer
     */
    public function getClickable()
    {
        return $this->clickable;
    }

    /**
     * Set emoCategory
     *
     * @param boolean $emoCategory
     *
     * @return EntityForumEmoticons
     */
    public function setEmoCategory($emoCategory)
    {
        $this->emoCategory = $emoCategory;

        return $this;
    }

    /**
     * Get emoCategory
     *
     * @return boolean
     */
    public function getEmoCategory()
    {
        return $this->emoCategory;
    }
}
