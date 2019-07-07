<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * EntitySFaqCat
 *
 * @ORM\Table(name="s_faq_cat")
 * @ORM\Entity(repositoryClass="Repository\EntitySFaqCatRep")
 */
class EntitySFaqCat
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
     * @var integer
     *
     * @ORM\Column(name="count", type="integer", nullable=false)
     */
    private $count = '0';

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
     * @var unknown
     *
     * @ORM\OneToMany(targetEntity="EntitySFaqDb", mappedBy="categoryVal")
     */
    private $itemsVal;
    
    
    public function __construct() {
    	$this->itemsVal = new ArrayCollection();
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
     * Set poz
     *
     * @param integer $poz
     *
     * @return EntitySFaqCat
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
     * Set count
     *
     * @param integer $count
     *
     * @return EntitySFaqCat
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return EntitySFaqCat
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
     * @return EntitySFaqCat
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
     * Add itemsVal
     *
     * @param \Entity\EntitySFaqDb $itemsVal
     *
     * @return EntitySFaqCat
     */
    public function addItemsVal(\Entity\EntitySFaqDb $itemsVal)
    {
        $this->itemsVal[] = $itemsVal;

        return $this;
    }

    /**
     * Remove itemsVal
     *
     * @param \Entity\EntitySFaqDb $itemsVal
     */
    public function removeItemsVal(\Entity\EntitySFaqDb $itemsVal)
    {
        $this->itemsVal->removeElement($itemsVal);
    }

    /**
     * Get itemsVal
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getItemsVal()
    {
        return $this->itemsVal;
    }
}
