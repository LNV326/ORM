<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntitySConfig
 *
 * @ORM\Table(name="s_config")
 * @ORM\Entity(repositoryClass="Repository\EntitySConfigRep")
 */
class EntitySConfig
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=25, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="val", type="text", length=65535, nullable=false)
     */
    private $val;



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
     * Set val
     *
     * @param string $val
     *
     * @return EntitySConfig
     */
    public function setVal($val)
    {
        $this->val = $val;

        return $this;
    }

    /**
     * Get val
     *
     * @return string
     */
    public function getVal()
    {
        return $this->val;
    }
}
