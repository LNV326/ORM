<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumMacro
 *
 * @ORM\Table(name="forum_macro", indexes={@ORM\Index(name="macro_set", columns={"macro_set"})})
 * @ORM\Entity
 */
class EntityForumMacro
{
    /**
     * @var integer
     *
     * @ORM\Column(name="macro_id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $macroId;

    /**
     * @var string
     *
     * @ORM\Column(name="macro_value", type="string", length=200, nullable=true)
     */
    private $macroValue;

    /**
     * @var string
     *
     * @ORM\Column(name="macro_replace", type="text", length=65535, nullable=true)
     */
    private $macroReplace;

    /**
     * @var boolean
     *
     * @ORM\Column(name="can_remove", type="boolean", nullable=true)
     */
    private $canRemove = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="macro_set", type="smallint", nullable=false)
     */
    private $macroSet = '0';



    /**
     * Get macroId
     *
     * @return integer
     */
    public function getMacroId()
    {
        return $this->macroId;
    }

    /**
     * Set macroValue
     *
     * @param string $macroValue
     *
     * @return EntityForumMacro
     */
    public function setMacroValue($macroValue)
    {
        $this->macroValue = $macroValue;

        return $this;
    }

    /**
     * Get macroValue
     *
     * @return string
     */
    public function getMacroValue()
    {
        return $this->macroValue;
    }

    /**
     * Set macroReplace
     *
     * @param string $macroReplace
     *
     * @return EntityForumMacro
     */
    public function setMacroReplace($macroReplace)
    {
        $this->macroReplace = $macroReplace;

        return $this;
    }

    /**
     * Get macroReplace
     *
     * @return string
     */
    public function getMacroReplace()
    {
        return $this->macroReplace;
    }

    /**
     * Set canRemove
     *
     * @param boolean $canRemove
     *
     * @return EntityForumMacro
     */
    public function setCanRemove($canRemove)
    {
        $this->canRemove = $canRemove;

        return $this;
    }

    /**
     * Get canRemove
     *
     * @return boolean
     */
    public function getCanRemove()
    {
        return $this->canRemove;
    }

    /**
     * Set macroSet
     *
     * @param integer $macroSet
     *
     * @return EntityForumMacro
     */
    public function setMacroSet($macroSet)
    {
        $this->macroSet = $macroSet;

        return $this;
    }

    /**
     * Get macroSet
     *
     * @return integer
     */
    public function getMacroSet()
    {
        return $this->macroSet;
    }
}
