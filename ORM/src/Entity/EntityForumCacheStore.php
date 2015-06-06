<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumCacheStore
 *
 * @ORM\Table(name="forum_cache_store")
 * @ORM\Entity
 */
class EntityForumCacheStore
{
    /**
     * @var string
     *
     * @ORM\Column(name="cs_key", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $csKey = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cs_value", type="text", length=65535, nullable=false)
     */
    private $csValue;

    /**
     * @var string
     *
     * @ORM\Column(name="cs_extra", type="string", length=255, nullable=false)
     */
    private $csExtra = '';



    /**
     * Get csKey
     *
     * @return string
     */
    public function getCsKey()
    {
        return $this->csKey;
    }

    /**
     * Set csValue
     *
     * @param string $csValue
     *
     * @return EntityForumCacheStore
     */
    public function setCsValue($csValue)
    {
        $this->csValue = $csValue;

        return $this;
    }

    /**
     * Get csValue
     *
     * @return string
     */
    public function getCsValue()
    {
        return $this->csValue;
    }

    /**
     * Set csExtra
     *
     * @param string $csExtra
     *
     * @return EntityForumCacheStore
     */
    public function setCsExtra($csExtra)
    {
        $this->csExtra = $csExtra;

        return $this;
    }

    /**
     * Get csExtra
     *
     * @return string
     */
    public function getCsExtra()
    {
        return $this->csExtra;
    }
}
