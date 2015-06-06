<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumPfieldsContent
 *
 * @ORM\Table(name="forum_pfields_content")
 * @ORM\Entity
 */
class EntityForumPfieldsContent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="member_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $memberId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="updated", type="integer", nullable=true)
     */
    private $updated = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="field_1", type="text", length=65535, nullable=true)
     */
    private $field1;



    /**
     * Get memberId
     *
     * @return integer
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * Set updated
     *
     * @param integer $updated
     *
     * @return EntityForumPfieldsContent
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return integer
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set field1
     *
     * @param string $field1
     *
     * @return EntityForumPfieldsContent
     */
    public function setField1($field1)
    {
        $this->field1 = $field1;

        return $this;
    }

    /**
     * Get field1
     *
     * @return string
     */
    public function getField1()
    {
        return $this->field1;
    }
}
