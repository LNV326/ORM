<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntitySMenuCat
 *
 * @ORM\Table(name="s_menu_cat", indexes={@ORM\Index(name="poz", columns={"poz"})})
 * @ORM\Entity
 */
class EntitySMenuCat
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
     * @var boolean
     *
     * @ORM\Column(name="poz", type="boolean", nullable=true)
     */
    private $poz = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=20, nullable=false)
     */
    private $name = '';



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
     * Set poz
     *
     * @param boolean $poz
     *
     * @return EntitySMenuCat
     */
    public function setPoz($poz)
    {
        $this->poz = $poz;

        return $this;
    }

    /**
     * Get poz
     *
     * @return boolean
     */
    public function getPoz()
    {
        return $this->poz;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return EntitySMenuCat
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
