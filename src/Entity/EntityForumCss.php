<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumCss
 *
 * @ORM\Table(name="forum_css")
 * @ORM\Entity(repositoryClass="Repository\EntityForumCssRep")
 */
class EntityForumCss
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cssid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cssid;

    /**
     * @var string
     *
     * @ORM\Column(name="css_name", type="string", length=128, nullable=false)
     */
    private $cssName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="css_text", type="text", length=65535, nullable=true)
     */
    private $cssText;

    /**
     * @var string
     *
     * @ORM\Column(name="css_comments", type="text", length=65535, nullable=true)
     */
    private $cssComments;

    /**
     * @var integer
     *
     * @ORM\Column(name="updated", type="integer", nullable=true)
     */
    private $updated = '0';



    /**
     * Get cssid
     *
     * @return integer
     */
    public function getCssid()
    {
        return $this->cssid;
    }

    /**
     * Set cssName
     *
     * @param string $cssName
     *
     * @return EntityForumCss
     */
    public function setCssName($cssName)
    {
        $this->cssName = $cssName;

        return $this;
    }

    /**
     * Get cssName
     *
     * @return string
     */
    public function getCssName()
    {
        return $this->cssName;
    }

    /**
     * Set cssText
     *
     * @param string $cssText
     *
     * @return EntityForumCss
     */
    public function setCssText($cssText)
    {
        $this->cssText = $cssText;

        return $this;
    }

    /**
     * Get cssText
     *
     * @return string
     */
    public function getCssText()
    {
        return $this->cssText;
    }

    /**
     * Set cssComments
     *
     * @param string $cssComments
     *
     * @return EntityForumCss
     */
    public function setCssComments($cssComments)
    {
        $this->cssComments = $cssComments;

        return $this;
    }

    /**
     * Get cssComments
     *
     * @return string
     */
    public function getCssComments()
    {
        return $this->cssComments;
    }

    /**
     * Set updated
     *
     * @param integer $updated
     *
     * @return EntityForumCss
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return integer
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}
