<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntitySImages
 *
 * @ORM\Table(name="s_images")
 * @ORM\Entity(repositoryClass="Repository\EntitySImagesRep")
 */
class EntitySImages
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
     * @var string
     *
     * @ORM\Column(name="path", type="text", length=255, nullable=false)
     */
    private $path;



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
     * Set path
     *
     * @param string $path
     *
     * @return EntitySImages
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }
}
