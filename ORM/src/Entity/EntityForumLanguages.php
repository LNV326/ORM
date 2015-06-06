<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumLanguages
 *
 * @ORM\Table(name="forum_languages", indexes={@ORM\Index(name="ldir", columns={"ldir"})})
 * @ORM\Entity
 */
class EntityForumLanguages
{
    /**
     * @var integer
     *
     * @ORM\Column(name="lid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $lid;

    /**
     * @var string
     *
     * @ORM\Column(name="ldir", type="string", length=64, nullable=false)
     */
    private $ldir = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lname", type="string", length=250, nullable=false)
     */
    private $lname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lauthor", type="string", length=250, nullable=true)
     */
    private $lauthor;

    /**
     * @var string
     *
     * @ORM\Column(name="lemail", type="string", length=250, nullable=true)
     */
    private $lemail;



    /**
     * Get lid
     *
     * @return integer
     */
    public function getLid()
    {
        return $this->lid;
    }

    /**
     * Set ldir
     *
     * @param string $ldir
     *
     * @return EntityForumLanguages
     */
    public function setLdir($ldir)
    {
        $this->ldir = $ldir;

        return $this;
    }

    /**
     * Get ldir
     *
     * @return string
     */
    public function getLdir()
    {
        return $this->ldir;
    }

    /**
     * Set lname
     *
     * @param string $lname
     *
     * @return EntityForumLanguages
     */
    public function setLname($lname)
    {
        $this->lname = $lname;

        return $this;
    }

    /**
     * Get lname
     *
     * @return string
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * Set lauthor
     *
     * @param string $lauthor
     *
     * @return EntityForumLanguages
     */
    public function setLauthor($lauthor)
    {
        $this->lauthor = $lauthor;

        return $this;
    }

    /**
     * Get lauthor
     *
     * @return string
     */
    public function getLauthor()
    {
        return $this->lauthor;
    }

    /**
     * Set lemail
     *
     * @param string $lemail
     *
     * @return EntityForumLanguages
     */
    public function setLemail($lemail)
    {
        $this->lemail = $lemail;

        return $this;
    }

    /**
     * Get lemail
     *
     * @return string
     */
    public function getLemail()
    {
        return $this->lemail;
    }
}
