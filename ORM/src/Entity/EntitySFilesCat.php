<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntitySFilesCat
 *
 * @ORM\Table(name="s_files_cat")
 * @ORM\Entity(repositoryClass="Repository\EntitySFilesCatRep")
 */
class EntitySFilesCat
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
     * @var integer
     *
     * @ORM\Column(name="poz", type="integer", nullable=false)
     */
    private $poz = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text", length=65535, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="text", length=65535, nullable=false)
     */
    private $info;

    /**
     * @var string
     *
     * @ORM\Column(name="default_path", type="string", length=255, nullable=false)
     */
    private $defaultPath = '';



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
     * @param integer $poz
     *
     * @return EntitySFilesCat
     */
    public function setPoz($poz)
    {
        $this->poz = $poz;

        return $this;
    }

    /**
     * Get poz
     *
     * @return integer
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
     * @return EntitySFilesCat
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

    /**
     * Set info
     *
     * @param string $info
     *
     * @return EntitySFilesCat
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set defaultPath
     *
     * @param string $defaultPath
     *
     * @return EntitySFilesCat
     */
    public function setDefaultPath($defaultPath)
    {
        $this->defaultPath = $defaultPath;

        return $this;
    }

    /**
     * Get defaultPath
     *
     * @return string
     */
    public function getDefaultPath()
    {
        return $this->defaultPath;
    }
}
