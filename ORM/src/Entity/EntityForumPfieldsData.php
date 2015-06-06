<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumPfieldsData
 *
 * @ORM\Table(name="forum_pfields_data")
 * @ORM\Entity
 */
class EntityForumPfieldsData
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fid", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fid;

    /**
     * @var string
     *
     * @ORM\Column(name="ftitle", type="string", length=200, nullable=false)
     */
    private $ftitle = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fdesc", type="string", length=250, nullable=true)
     */
    private $fdesc = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fcontent", type="text", length=65535, nullable=true)
     */
    private $fcontent;

    /**
     * @var string
     *
     * @ORM\Column(name="ftype", type="string", length=250, nullable=true)
     */
    private $ftype = 'text';

    /**
     * @var boolean
     *
     * @ORM\Column(name="freq", type="boolean", nullable=true)
     */
    private $freq = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="fhide", type="boolean", nullable=true)
     */
    private $fhide = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="fmaxinput", type="smallint", nullable=true)
     */
    private $fmaxinput = '250';

    /**
     * @var boolean
     *
     * @ORM\Column(name="fedit", type="boolean", nullable=true)
     */
    private $fedit = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="forder", type="smallint", nullable=true)
     */
    private $forder = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="fshowreg", type="boolean", nullable=true)
     */
    private $fshowreg = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ftview", type="boolean", nullable=true)
     */
    private $ftview;



    /**
     * Get fid
     *
     * @return integer
     */
    public function getFid()
    {
        return $this->fid;
    }

    /**
     * Set ftitle
     *
     * @param string $ftitle
     *
     * @return EntityForumPfieldsData
     */
    public function setFtitle($ftitle)
    {
        $this->ftitle = $ftitle;

        return $this;
    }

    /**
     * Get ftitle
     *
     * @return string
     */
    public function getFtitle()
    {
        return $this->ftitle;
    }

    /**
     * Set fdesc
     *
     * @param string $fdesc
     *
     * @return EntityForumPfieldsData
     */
    public function setFdesc($fdesc)
    {
        $this->fdesc = $fdesc;

        return $this;
    }

    /**
     * Get fdesc
     *
     * @return string
     */
    public function getFdesc()
    {
        return $this->fdesc;
    }

    /**
     * Set fcontent
     *
     * @param string $fcontent
     *
     * @return EntityForumPfieldsData
     */
    public function setFcontent($fcontent)
    {
        $this->fcontent = $fcontent;

        return $this;
    }

    /**
     * Get fcontent
     *
     * @return string
     */
    public function getFcontent()
    {
        return $this->fcontent;
    }

    /**
     * Set ftype
     *
     * @param string $ftype
     *
     * @return EntityForumPfieldsData
     */
    public function setFtype($ftype)
    {
        $this->ftype = $ftype;

        return $this;
    }

    /**
     * Get ftype
     *
     * @return string
     */
    public function getFtype()
    {
        return $this->ftype;
    }

    /**
     * Set freq
     *
     * @param boolean $freq
     *
     * @return EntityForumPfieldsData
     */
    public function setFreq($freq)
    {
        $this->freq = $freq;

        return $this;
    }

    /**
     * Get freq
     *
     * @return boolean
     */
    public function getFreq()
    {
        return $this->freq;
    }

    /**
     * Set fhide
     *
     * @param boolean $fhide
     *
     * @return EntityForumPfieldsData
     */
    public function setFhide($fhide)
    {
        $this->fhide = $fhide;

        return $this;
    }

    /**
     * Get fhide
     *
     * @return boolean
     */
    public function getFhide()
    {
        return $this->fhide;
    }

    /**
     * Set fmaxinput
     *
     * @param integer $fmaxinput
     *
     * @return EntityForumPfieldsData
     */
    public function setFmaxinput($fmaxinput)
    {
        $this->fmaxinput = $fmaxinput;

        return $this;
    }

    /**
     * Get fmaxinput
     *
     * @return integer
     */
    public function getFmaxinput()
    {
        return $this->fmaxinput;
    }

    /**
     * Set fedit
     *
     * @param boolean $fedit
     *
     * @return EntityForumPfieldsData
     */
    public function setFedit($fedit)
    {
        $this->fedit = $fedit;

        return $this;
    }

    /**
     * Get fedit
     *
     * @return boolean
     */
    public function getFedit()
    {
        return $this->fedit;
    }

    /**
     * Set forder
     *
     * @param integer $forder
     *
     * @return EntityForumPfieldsData
     */
    public function setForder($forder)
    {
        $this->forder = $forder;

        return $this;
    }

    /**
     * Get forder
     *
     * @return integer
     */
    public function getForder()
    {
        return $this->forder;
    }

    /**
     * Set fshowreg
     *
     * @param boolean $fshowreg
     *
     * @return EntityForumPfieldsData
     */
    public function setFshowreg($fshowreg)
    {
        $this->fshowreg = $fshowreg;

        return $this;
    }

    /**
     * Get fshowreg
     *
     * @return boolean
     */
    public function getFshowreg()
    {
        return $this->fshowreg;
    }

    /**
     * Set ftview
     *
     * @param boolean $ftview
     *
     * @return EntityForumPfieldsData
     */
    public function setFtview($ftview)
    {
        $this->ftview = $ftview;

        return $this;
    }

    /**
     * Get ftview
     *
     * @return boolean
     */
    public function getFtview()
    {
        return $this->ftview;
    }
}
