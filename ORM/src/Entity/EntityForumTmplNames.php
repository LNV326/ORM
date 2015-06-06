<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumTmplNames
 *
 * @ORM\Table(name="forum_tmpl_names")
 * @ORM\Entity
 */
class EntityForumTmplNames
{
    /**
     * @var integer
     *
     * @ORM\Column(name="skid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $skid;

    /**
     * @var string
     *
     * @ORM\Column(name="skname", type="string", length=60, nullable=false)
     */
    private $skname = 'Invision Board';

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=250, nullable=true)
     */
    private $author = '';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=250, nullable=true)
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=250, nullable=true)
     */
    private $url = '';



    /**
     * Get skid
     *
     * @return integer
     */
    public function getSkid()
    {
        return $this->skid;
    }

    /**
     * Set skname
     *
     * @param string $skname
     *
     * @return EntityForumTmplNames
     */
    public function setSkname($skname)
    {
        $this->skname = $skname;

        return $this;
    }

    /**
     * Get skname
     *
     * @return string
     */
    public function getSkname()
    {
        return $this->skname;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return EntityForumTmplNames
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return EntityForumTmplNames
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return EntityForumTmplNames
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
