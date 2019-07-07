<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * EntitySFaqDb
 *
 * @ORM\Table(name="s_faq_db", indexes={@ORM\Index(name="id", columns={"id", "cat_id"})})
 * @ORM\Entity(repositoryClass="Repository\EntitySFaqDbRep")
 */
class EntitySFaqDb
{
    /**
     * @var integer
     *
     * @ORM\Column(name="objid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $objid;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="cat_id", type="integer", nullable=false)
     */
    private $catId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="question", type="text", length=65535, nullable=false)
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="answer", type="text", length=65535, nullable=false)
     */
    private $answer;
    
    /**
     * @var unknown
     * 
     * @ORM\ManyToOne(targetEntity="EntitySFaqCat", inversedBy="itemsVal")
     * @ORM\JoinColumn(name="cat_id", referencedColumnName="id")
     */
    private $categoryVal = null;
    
    /**
     * Get objid
     *
     * @return integer
     */
    public function getObjid()
    {
        return $this->objid;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return EntitySFaqDb
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
     * Set catId
     *
     * @param integer $catId
     *
     * @return EntitySFaqDb
     */
    public function setCatId($catId)
    {
        $this->catId = $catId;

        return $this;
    }

    /**
     * Get catId
     *
     * @return integer
     */
    public function getCatId()
    {
        return $this->catId;
    }

    /**
     * Set question
     *
     * @param string $question
     *
     * @return EntitySFaqDb
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set answer
     *
     * @param string $answer
     *
     * @return EntitySFaqDb
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set categoryVal
     *
     * @param \Entity\EntitySFaqDb $categoryVal
     *
     * @return EntitySFaqDb
     */
    public function setCategoryVal(\Entity\EntitySFaqDb $categoryVal = null)
    {
        $this->categoryVal = $categoryVal;

        return $this;
    }

    /**
     * Get categoryVal
     *
     * @return \Entity\EntitySFaqDb
     */
    public function getCategoryVal()
    {
        return $this->categoryVal;
    }
}
