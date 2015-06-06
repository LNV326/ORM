<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumForumPerms
 *
 * @ORM\Table(name="forum_forum_perms")
 * @ORM\Entity(repositoryClass="Repository\EntityForumForumPermsRep")
 */
class EntityForumForumPerms
{
    /**
     * @var integer
     *
     * @ORM\Column(name="perm_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $permId;

    /**
     * @var string
     *
     * @ORM\Column(name="perm_name", type="string", length=250, nullable=false)
     */
    private $permName = '';



    /**
     * Get permId
     *
     * @return integer
     */
    public function getPermId()
    {
        return $this->permId;
    }

    /**
     * Set permName
     *
     * @param string $permName
     *
     * @return EntityForumForumPerms
     */
    public function setPermName($permName)
    {
        $this->permName = $permName;

        return $this;
    }

    /**
     * Get permName
     *
     * @return string
     */
    public function getPermName()
    {
        return $this->permName;
    }
}
