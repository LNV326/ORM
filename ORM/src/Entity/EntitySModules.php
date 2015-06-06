<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntitySModules
 *
 * @ORM\Table(name="s_modules", uniqueConstraints={@ORM\UniqueConstraint(name="id_2", columns={"id"})}, indexes={@ORM\Index(name="title", columns={"title"})})
 * @ORM\Entity(repositoryClass="Repository\EntitySModulesRep")
 */
class EntitySModules
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="module_path", type="string", length=255, nullable=false)
     */
    private $modulePath;



    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return EntitySModules
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Set title
     *
     * @param string $title
     *
     * @return EntitySModules
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set modulePath
     *
     * @param string $modulePath
     *
     * @return EntitySModules
     */
    public function setModulePath($modulePath)
    {
        $this->modulePath = $modulePath;

        return $this;
    }

    /**
     * Get modulePath
     *
     * @return string
     */
    public function getModulePath()
    {
        return $this->modulePath;
    }
}
