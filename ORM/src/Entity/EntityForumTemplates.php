<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumTemplates
 *
 * @ORM\Table(name="forum_templates")
 * @ORM\Entity
 */
class EntityForumTemplates
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tmid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tmid;

    /**
     * @var string
     *
     * @ORM\Column(name="template", type="text", length=16777215, nullable=true)
     */
    private $template;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=true)
     */
    private $name;



    /**
     * Get tmid
     *
     * @return integer
     */
    public function getTmid()
    {
        return $this->tmid;
    }

    /**
     * Set template
     *
     * @param string $template
     *
     * @return EntityForumTemplates
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Get template
     *
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return EntityForumTemplates
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
}
