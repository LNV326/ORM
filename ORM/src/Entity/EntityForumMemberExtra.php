<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumMemberExtra
 *
 * @ORM\Table(name="forum_member_extra")
 * @ORM\Entity
 */
class EntityForumMemberExtra
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
     * @ORM\Column(name="notes", type="text", length=65535, nullable=true)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="links", type="text", length=65535, nullable=true)
     */
    private $links;

    /**
     * @var string
     *
     * @ORM\Column(name="bio", type="text", length=65535, nullable=true)
     */
    private $bio;

    /**
     * @var string
     *
     * @ORM\Column(name="ta_size", type="string", length=3, nullable=true)
     */
    private $taSize;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_type", type="string", length=10, nullable=true)
     */
    private $photoType = '';

    /**
     * @var string
     *
     * @ORM\Column(name="photo_location", type="string", length=255, nullable=true)
     */
    private $photoLocation = '';

    /**
     * @var string
     *
     * @ORM\Column(name="photo_dimensions", type="string", length=200, nullable=true)
     */
    private $photoDimensions = '';



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
     * Set notes
     *
     * @param string $notes
     *
     * @return EntityForumMemberExtra
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set links
     *
     * @param string $links
     *
     * @return EntityForumMemberExtra
     */
    public function setLinks($links)
    {
        $this->links = $links;

        return $this;
    }

    /**
     * Get links
     *
     * @return string
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Set bio
     *
     * @param string $bio
     *
     * @return EntityForumMemberExtra
     */
    public function setBio($bio)
    {
        $this->bio = $bio;

        return $this;
    }

    /**
     * Get bio
     *
     * @return string
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * Set taSize
     *
     * @param string $taSize
     *
     * @return EntityForumMemberExtra
     */
    public function setTaSize($taSize)
    {
        $this->taSize = $taSize;

        return $this;
    }

    /**
     * Get taSize
     *
     * @return string
     */
    public function getTaSize()
    {
        return $this->taSize;
    }

    /**
     * Set photoType
     *
     * @param string $photoType
     *
     * @return EntityForumMemberExtra
     */
    public function setPhotoType($photoType)
    {
        $this->photoType = $photoType;

        return $this;
    }

    /**
     * Get photoType
     *
     * @return string
     */
    public function getPhotoType()
    {
        return $this->photoType;
    }

    /**
     * Set photoLocation
     *
     * @param string $photoLocation
     *
     * @return EntityForumMemberExtra
     */
    public function setPhotoLocation($photoLocation)
    {
        $this->photoLocation = $photoLocation;

        return $this;
    }

    /**
     * Get photoLocation
     *
     * @return string
     */
    public function getPhotoLocation()
    {
        return $this->photoLocation;
    }

    /**
     * Set photoDimensions
     *
     * @param string $photoDimensions
     *
     * @return EntityForumMemberExtra
     */
    public function setPhotoDimensions($photoDimensions)
    {
        $this->photoDimensions = $photoDimensions;

        return $this;
    }

    /**
     * Get photoDimensions
     *
     * @return string
     */
    public function getPhotoDimensions()
    {
        return $this->photoDimensions;
    }
}
