<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumMacroName
 *
 * @ORM\Table(name="forum_macro_name")
 * @ORM\Entity
 */
class EntityForumMacroName
{
    /**
     * @var integer
     *
     * @ORM\Column(name="set_id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $setId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="set_name", type="string", length=200, nullable=true)
     */
    private $setName;



    /**
     * Get setId
     *
     * @return integer
     */
    public function getSetId()
    {
        return $this->setId;
    }

    /**
     * Set setName
     *
     * @param string $setName
     *
     * @return EntityForumMacroName
     */
    public function setSetName($setName)
    {
        $this->setName = $setName;

        return $this;
    }

    /**
     * Get setName
     *
     * @return string
     */
    public function getSetName()
    {
        return $this->setName;
    }
}
