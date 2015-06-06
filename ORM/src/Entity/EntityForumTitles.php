<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumTitles
 *
 * @ORM\Table(name="forum_titles")
 * @ORM\Entity(repositoryClass="Repository\EntityForumTitlesRep")
 */
class EntityForumTitles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="posts", type="integer", nullable=true)
     */
    private $posts;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=128, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="pips", type="string", length=128, nullable=true)
     */
    private $pips;



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
     * Set posts
     *
     * @param integer $posts
     *
     * @return EntityForumTitles
     */
    public function setPosts($posts)
    {
        $this->posts = $posts;

        return $this;
    }

    /**
     * Get posts
     *
     * @return integer
     */
    public function getPosts()
    {
        return $this->posts;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return EntityForumTitles
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
     * Set pips
     *
     * @param string $pips
     *
     * @return EntityForumTitles
     */
    public function setPips($pips)
    {
        $this->pips = $pips;

        return $this;
    }

    /**
     * Get pips
     *
     * @return string
     */
    public function getPips()
    {
        return $this->pips;
    }
}
