<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumMembers
 *
 * @ORM\Table(name="forum_members", indexes={@ORM\Index(name="name", columns={"name"}), @ORM\Index(name="mgroup", columns={"mgroup"}), @ORM\Index(name="bday_day", columns={"bday_day"}), @ORM\Index(name="bday_month", columns={"bday_month"}), @ORM\Index(name="ip_address", columns={"ip_address"}), @ORM\Index(name="rep", columns={"rep", "awards"}), @ORM\Index(name="signature", columns={"signature"})})
 * @ORM\Entity(repositoryClass="Repository\EntityForumMembersRep")
 */
class EntityForumMembers
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="mgroup", type="smallint", nullable=false)
     */
    private $mgroup = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=32, nullable=false)
     */
    private $password = '';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=60, nullable=false)
     */
    private $email = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="joined", type="integer", nullable=false)
     */
    private $joined = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_address", type="string", length=16, nullable=false)
     */
    private $ipAddress = '';

    /**
     * @var string
     *
     * @ORM\Column(name="userbar", type="string", length=128, nullable=true)
     */
    private $userbar;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=128, nullable=true)
     */
    private $avatar;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar_size", type="string", length=9, nullable=true)
     */
    private $avatarSize;

    /**
     * @var integer
     *
     * @ORM\Column(name="posts", type="integer", nullable=true)
     */
    private $posts = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="posts_bad", type="integer", nullable=true)
     */
    private $postsBad = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="aim_name", type="string", length=40, nullable=true)
     */
    private $aimName;

    /**
     * @var string
     *
     * @ORM\Column(name="icq_number", type="string", length=40, nullable=true)
     */
    private $icqNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=128, nullable=true)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="signature", type="text", length=65535, nullable=true)
     */
    private $signature;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=70, nullable=true)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="yahoo", type="string", length=32, nullable=true)
     */
    private $yahoo;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=64, nullable=true)
     */
    private $title;

    /**
     * @var boolean
     *
     * @ORM\Column(name="allow_admin_mails", type="boolean", nullable=true)
     */
    private $allowAdminMails;

    /**
     * @var boolean
     *
     * @ORM\Column(name="allow_add_ingal", type="boolean", nullable=true)
     */
    private $allowAddIngal = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allow_add_bar", type="boolean", nullable=true)
     */
    private $allowAddBar = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="time_offset", type="string", length=10, nullable=true)
     */
    private $timeOffset;

    /**
     * @var string
     *
     * @ORM\Column(name="interests", type="text", length=65535, nullable=true)
     */
    private $interests;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hide_email", type="boolean", nullable=false)
     */
    private $hideEmail = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="email_pm", type="boolean", nullable=true)
     */
    private $emailPm;

    /**
     * @var boolean
     *
     * @ORM\Column(name="email_full", type="boolean", nullable=true)
     */
    private $emailFull;

    /**
     * @var integer
     *
     * @ORM\Column(name="skin", type="smallint", nullable=true)
     */
    private $skin;

    /**
     * @var integer
     *
     * @ORM\Column(name="warn_level", type="integer", nullable=true)
     */
    private $warnLevel = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="warn_lastwarn", type="integer", nullable=false)
     */
    private $warnLastwarn = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=32, nullable=true)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="msnname", type="string", length=64, nullable=true)
     */
    private $msnname;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_post", type="integer", nullable=true)
     */
    private $lastPost;

    /**
     * @var string
     *
     * @ORM\Column(name="restrict_post", type="string", length=100, nullable=false)
     */
    private $restrictPost = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="view_sigs", type="boolean", nullable=true)
     */
    private $viewSigs = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="view_winter", type="boolean", nullable=false)
     */
    private $viewWinter = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="view_bar", type="boolean", nullable=true)
     */
    private $viewBar = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="view_img", type="boolean", nullable=true)
     */
    private $viewImg = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="view_avs", type="boolean", nullable=true)
     */
    private $viewAvs = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="view_pop", type="boolean", nullable=true)
     */
    private $viewPop = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="view_quk", type="boolean", nullable=true)
     */
    private $viewQuk = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="view_wlp", type="boolean", nullable=true)
     */
    private $viewWlp = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="bday_day", type="integer", nullable=true)
     */
    private $bdayDay;

    /**
     * @var integer
     *
     * @ORM\Column(name="bday_month", type="integer", nullable=true)
     */
    private $bdayMonth;

    /**
     * @var integer
     *
     * @ORM\Column(name="bday_year", type="integer", nullable=true)
     */
    private $bdayYear;

    /**
     * @var boolean
     *
     * @ORM\Column(name="new_msg", type="boolean", nullable=true)
     */
    private $newMsg;

    /**
     * @var integer
     *
     * @ORM\Column(name="msg_from_id", type="integer", nullable=true)
     */
    private $msgFromId;

    /**
     * @var integer
     *
     * @ORM\Column(name="msg_msg_id", type="integer", nullable=true)
     */
    private $msgMsgId;

    /**
     * @var integer
     *
     * @ORM\Column(name="msg_total", type="smallint", nullable=true)
     */
    private $msgTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="vdirs", type="text", length=65535, nullable=true)
     */
    private $vdirs;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_visit", type="integer", nullable=true)
     */
    private $lastVisit = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="last_activity", type="integer", nullable=true)
     */
    private $lastActivity = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="dst_in_use", type="boolean", nullable=true)
     */
    private $dstInUse = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="view_prefs", type="string", length=64, nullable=true)
     */
    private $viewPrefs = '-1&-1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="coppa_user", type="boolean", nullable=true)
     */
    private $coppaUser = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mod_posts", type="string", length=100, nullable=false)
     */
    private $modPosts = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="auto_track", type="boolean", nullable=true)
     */
    private $autoTrack = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="org_perm_id", type="string", length=255, nullable=true)
     */
    private $orgPermId = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="org_supmod", type="boolean", nullable=true)
     */
    private $orgSupmod = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="integ_msg", type="string", length=250, nullable=true)
     */
    private $integMsg = '';

    /**
     * @var string
     *
     * @ORM\Column(name="temp_ban", type="string", length=100, nullable=true)
     */
    private $tempBan;

    /**
     * @var integer
     *
     * @ORM\Column(name="extra_intrest", type="integer", nullable=false)
     */
    private $extraIntrest = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="favorites", type="text", length=65535, nullable=false)
     */
    private $favorites;

    /**
     * @var integer
     *
     * @ORM\Column(name="rep", type="integer", nullable=false)
     */
    private $rep = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rep_down", type="integer", nullable=false)
     */
    private $repDown = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allow_rep", type="boolean", nullable=false)
     */
    private $allowRep = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allow_anon", type="boolean", nullable=false)
     */
    private $allowAnon = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="rep_do", type="integer", nullable=true)
     */
    private $repDo;

    /**
     * @var integer
     *
     * @ORM\Column(name="rep_do_open", type="integer", nullable=true)
     */
    private $repDoOpen;

    /**
     * @var boolean
     *
     * @ORM\Column(name="awards", type="boolean", nullable=false)
     */
    private $awards = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="name_changed", type="integer", nullable=false)
     */
    private $nameChanged = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="menu_viever", type="text", length=65535, nullable=false)
     */
    private $menuViever;

    /**
     * @var boolean
     *
     * @ORM\Column(name="chat_mod", type="boolean", nullable=false)
     */
    private $chatMod = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="chat_ban", type="integer", nullable=false)
     */
    private $chatBan = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="chat_ban_why", type="text", length=65535, nullable=false)
     */
    private $chatBanWhy;



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
     * Set name
     *
     * @param string $name
     *
     * @return EntityForumMembers
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
     * Set mgroup
     *
     * @param integer $mgroup
     *
     * @return EntityForumMembers
     */
    public function setMgroup($mgroup)
    {
        $this->mgroup = $mgroup;

        return $this;
    }

    /**
     * Get mgroup
     *
     * @return integer
     */
    public function getMgroup()
    {
        return $this->mgroup;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return EntityForumMembers
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return EntityForumMembers
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set joined
     *
     * @param integer $joined
     *
     * @return EntityForumMembers
     */
    public function setJoined($joined)
    {
        $this->joined = $joined;

        return $this;
    }

    /**
     * Get joined
     *
     * @return integer
     */
    public function getJoined()
    {
        return $this->joined;
    }

    /**
     * Set ipAddress
     *
     * @param string $ipAddress
     *
     * @return EntityForumMembers
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Get ipAddress
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set userbar
     *
     * @param string $userbar
     *
     * @return EntityForumMembers
     */
    public function setUserbar($userbar)
    {
        $this->userbar = $userbar;

        return $this;
    }

    /**
     * Get userbar
     *
     * @return string
     */
    public function getUserbar()
    {
        return $this->userbar;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     *
     * @return EntityForumMembers
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set avatarSize
     *
     * @param string $avatarSize
     *
     * @return EntityForumMembers
     */
    public function setAvatarSize($avatarSize)
    {
        $this->avatarSize = $avatarSize;

        return $this;
    }

    /**
     * Get avatarSize
     *
     * @return string
     */
    public function getAvatarSize()
    {
        return $this->avatarSize;
    }

    /**
     * Set posts
     *
     * @param integer $posts
     *
     * @return EntityForumMembers
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
     * Set postsBad
     *
     * @param integer $postsBad
     *
     * @return EntityForumMembers
     */
    public function setPostsBad($postsBad)
    {
        $this->postsBad = $postsBad;

        return $this;
    }

    /**
     * Get postsBad
     *
     * @return integer
     */
    public function getPostsBad()
    {
        return $this->postsBad;
    }

    /**
     * Set aimName
     *
     * @param string $aimName
     *
     * @return EntityForumMembers
     */
    public function setAimName($aimName)
    {
        $this->aimName = $aimName;

        return $this;
    }

    /**
     * Get aimName
     *
     * @return string
     */
    public function getAimName()
    {
        return $this->aimName;
    }

    /**
     * Set icqNumber
     *
     * @param string $icqNumber
     *
     * @return EntityForumMembers
     */
    public function setIcqNumber($icqNumber)
    {
        $this->icqNumber = $icqNumber;

        return $this;
    }

    /**
     * Get icqNumber
     *
     * @return string
     */
    public function getIcqNumber()
    {
        return $this->icqNumber;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return EntityForumMembers
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set signature
     *
     * @param string $signature
     *
     * @return EntityForumMembers
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;

        return $this;
    }

    /**
     * Get signature
     *
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return EntityForumMembers
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set yahoo
     *
     * @param string $yahoo
     *
     * @return EntityForumMembers
     */
    public function setYahoo($yahoo)
    {
        $this->yahoo = $yahoo;

        return $this;
    }

    /**
     * Get yahoo
     *
     * @return string
     */
    public function getYahoo()
    {
        return $this->yahoo;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return EntityForumMembers
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
     * Set allowAdminMails
     *
     * @param boolean $allowAdminMails
     *
     * @return EntityForumMembers
     */
    public function setAllowAdminMails($allowAdminMails)
    {
        $this->allowAdminMails = $allowAdminMails;

        return $this;
    }

    /**
     * Get allowAdminMails
     *
     * @return boolean
     */
    public function getAllowAdminMails()
    {
        return $this->allowAdminMails;
    }

    /**
     * Set allowAddIngal
     *
     * @param boolean $allowAddIngal
     *
     * @return EntityForumMembers
     */
    public function setAllowAddIngal($allowAddIngal)
    {
        $this->allowAddIngal = $allowAddIngal;

        return $this;
    }

    /**
     * Get allowAddIngal
     *
     * @return boolean
     */
    public function getAllowAddIngal()
    {
        return $this->allowAddIngal;
    }

    /**
     * Set allowAddBar
     *
     * @param boolean $allowAddBar
     *
     * @return EntityForumMembers
     */
    public function setAllowAddBar($allowAddBar)
    {
        $this->allowAddBar = $allowAddBar;

        return $this;
    }

    /**
     * Get allowAddBar
     *
     * @return boolean
     */
    public function getAllowAddBar()
    {
        return $this->allowAddBar;
    }

    /**
     * Set timeOffset
     *
     * @param string $timeOffset
     *
     * @return EntityForumMembers
     */
    public function setTimeOffset($timeOffset)
    {
        $this->timeOffset = $timeOffset;

        return $this;
    }

    /**
     * Get timeOffset
     *
     * @return string
     */
    public function getTimeOffset()
    {
        return $this->timeOffset;
    }

    /**
     * Set interests
     *
     * @param string $interests
     *
     * @return EntityForumMembers
     */
    public function setInterests($interests)
    {
        $this->interests = $interests;

        return $this;
    }

    /**
     * Get interests
     *
     * @return string
     */
    public function getInterests()
    {
        return $this->interests;
    }

    /**
     * Set hideEmail
     *
     * @param boolean $hideEmail
     *
     * @return EntityForumMembers
     */
    public function setHideEmail($hideEmail)
    {
        $this->hideEmail = $hideEmail;

        return $this;
    }

    /**
     * Get hideEmail
     *
     * @return boolean
     */
    public function getHideEmail()
    {
        return $this->hideEmail;
    }

    /**
     * Set emailPm
     *
     * @param boolean $emailPm
     *
     * @return EntityForumMembers
     */
    public function setEmailPm($emailPm)
    {
        $this->emailPm = $emailPm;

        return $this;
    }

    /**
     * Get emailPm
     *
     * @return boolean
     */
    public function getEmailPm()
    {
        return $this->emailPm;
    }

    /**
     * Set emailFull
     *
     * @param boolean $emailFull
     *
     * @return EntityForumMembers
     */
    public function setEmailFull($emailFull)
    {
        $this->emailFull = $emailFull;

        return $this;
    }

    /**
     * Get emailFull
     *
     * @return boolean
     */
    public function getEmailFull()
    {
        return $this->emailFull;
    }

    /**
     * Set skin
     *
     * @param integer $skin
     *
     * @return EntityForumMembers
     */
    public function setSkin($skin)
    {
        $this->skin = $skin;

        return $this;
    }

    /**
     * Get skin
     *
     * @return integer
     */
    public function getSkin()
    {
        return $this->skin;
    }

    /**
     * Set warnLevel
     *
     * @param integer $warnLevel
     *
     * @return EntityForumMembers
     */
    public function setWarnLevel($warnLevel)
    {
        $this->warnLevel = $warnLevel;

        return $this;
    }

    /**
     * Get warnLevel
     *
     * @return integer
     */
    public function getWarnLevel()
    {
        return $this->warnLevel;
    }

    /**
     * Set warnLastwarn
     *
     * @param integer $warnLastwarn
     *
     * @return EntityForumMembers
     */
    public function setWarnLastwarn($warnLastwarn)
    {
        $this->warnLastwarn = $warnLastwarn;

        return $this;
    }

    /**
     * Get warnLastwarn
     *
     * @return integer
     */
    public function getWarnLastwarn()
    {
        return $this->warnLastwarn;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return EntityForumMembers
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set msnname
     *
     * @param string $msnname
     *
     * @return EntityForumMembers
     */
    public function setMsnname($msnname)
    {
        $this->msnname = $msnname;

        return $this;
    }

    /**
     * Get msnname
     *
     * @return string
     */
    public function getMsnname()
    {
        return $this->msnname;
    }

    /**
     * Set lastPost
     *
     * @param integer $lastPost
     *
     * @return EntityForumMembers
     */
    public function setLastPost($lastPost)
    {
        $this->lastPost = $lastPost;

        return $this;
    }

    /**
     * Get lastPost
     *
     * @return integer
     */
    public function getLastPost()
    {
        return $this->lastPost;
    }

    /**
     * Set restrictPost
     *
     * @param string $restrictPost
     *
     * @return EntityForumMembers
     */
    public function setRestrictPost($restrictPost)
    {
        $this->restrictPost = $restrictPost;

        return $this;
    }

    /**
     * Get restrictPost
     *
     * @return string
     */
    public function getRestrictPost()
    {
        return $this->restrictPost;
    }

    /**
     * Set viewSigs
     *
     * @param boolean $viewSigs
     *
     * @return EntityForumMembers
     */
    public function setViewSigs($viewSigs)
    {
        $this->viewSigs = $viewSigs;

        return $this;
    }

    /**
     * Get viewSigs
     *
     * @return boolean
     */
    public function getViewSigs()
    {
        return $this->viewSigs;
    }

    /**
     * Set viewWinter
     *
     * @param boolean $viewWinter
     *
     * @return EntityForumMembers
     */
    public function setViewWinter($viewWinter)
    {
        $this->viewWinter = $viewWinter;

        return $this;
    }

    /**
     * Get viewWinter
     *
     * @return boolean
     */
    public function getViewWinter()
    {
        return $this->viewWinter;
    }

    /**
     * Set viewBar
     *
     * @param boolean $viewBar
     *
     * @return EntityForumMembers
     */
    public function setViewBar($viewBar)
    {
        $this->viewBar = $viewBar;

        return $this;
    }

    /**
     * Get viewBar
     *
     * @return boolean
     */
    public function getViewBar()
    {
        return $this->viewBar;
    }

    /**
     * Set viewImg
     *
     * @param boolean $viewImg
     *
     * @return EntityForumMembers
     */
    public function setViewImg($viewImg)
    {
        $this->viewImg = $viewImg;

        return $this;
    }

    /**
     * Get viewImg
     *
     * @return boolean
     */
    public function getViewImg()
    {
        return $this->viewImg;
    }

    /**
     * Set viewAvs
     *
     * @param boolean $viewAvs
     *
     * @return EntityForumMembers
     */
    public function setViewAvs($viewAvs)
    {
        $this->viewAvs = $viewAvs;

        return $this;
    }

    /**
     * Get viewAvs
     *
     * @return boolean
     */
    public function getViewAvs()
    {
        return $this->viewAvs;
    }

    /**
     * Set viewPop
     *
     * @param boolean $viewPop
     *
     * @return EntityForumMembers
     */
    public function setViewPop($viewPop)
    {
        $this->viewPop = $viewPop;

        return $this;
    }

    /**
     * Get viewPop
     *
     * @return boolean
     */
    public function getViewPop()
    {
        return $this->viewPop;
    }

    /**
     * Set viewQuk
     *
     * @param boolean $viewQuk
     *
     * @return EntityForumMembers
     */
    public function setViewQuk($viewQuk)
    {
        $this->viewQuk = $viewQuk;

        return $this;
    }

    /**
     * Get viewQuk
     *
     * @return boolean
     */
    public function getViewQuk()
    {
        return $this->viewQuk;
    }

    /**
     * Set viewWlp
     *
     * @param boolean $viewWlp
     *
     * @return EntityForumMembers
     */
    public function setViewWlp($viewWlp)
    {
        $this->viewWlp = $viewWlp;

        return $this;
    }

    /**
     * Get viewWlp
     *
     * @return boolean
     */
    public function getViewWlp()
    {
        return $this->viewWlp;
    }

    /**
     * Set bdayDay
     *
     * @param integer $bdayDay
     *
     * @return EntityForumMembers
     */
    public function setBdayDay($bdayDay)
    {
        $this->bdayDay = $bdayDay;

        return $this;
    }

    /**
     * Get bdayDay
     *
     * @return integer
     */
    public function getBdayDay()
    {
        return $this->bdayDay;
    }

    /**
     * Set bdayMonth
     *
     * @param integer $bdayMonth
     *
     * @return EntityForumMembers
     */
    public function setBdayMonth($bdayMonth)
    {
        $this->bdayMonth = $bdayMonth;

        return $this;
    }

    /**
     * Get bdayMonth
     *
     * @return integer
     */
    public function getBdayMonth()
    {
        return $this->bdayMonth;
    }

    /**
     * Set bdayYear
     *
     * @param integer $bdayYear
     *
     * @return EntityForumMembers
     */
    public function setBdayYear($bdayYear)
    {
        $this->bdayYear = $bdayYear;

        return $this;
    }

    /**
     * Get bdayYear
     *
     * @return integer
     */
    public function getBdayYear()
    {
        return $this->bdayYear;
    }

    /**
     * Set newMsg
     *
     * @param boolean $newMsg
     *
     * @return EntityForumMembers
     */
    public function setNewMsg($newMsg)
    {
        $this->newMsg = $newMsg;

        return $this;
    }

    /**
     * Get newMsg
     *
     * @return boolean
     */
    public function getNewMsg()
    {
        return $this->newMsg;
    }

    /**
     * Set msgFromId
     *
     * @param integer $msgFromId
     *
     * @return EntityForumMembers
     */
    public function setMsgFromId($msgFromId)
    {
        $this->msgFromId = $msgFromId;

        return $this;
    }

    /**
     * Get msgFromId
     *
     * @return integer
     */
    public function getMsgFromId()
    {
        return $this->msgFromId;
    }

    /**
     * Set msgMsgId
     *
     * @param integer $msgMsgId
     *
     * @return EntityForumMembers
     */
    public function setMsgMsgId($msgMsgId)
    {
        $this->msgMsgId = $msgMsgId;

        return $this;
    }

    /**
     * Get msgMsgId
     *
     * @return integer
     */
    public function getMsgMsgId()
    {
        return $this->msgMsgId;
    }

    /**
     * Set msgTotal
     *
     * @param integer $msgTotal
     *
     * @return EntityForumMembers
     */
    public function setMsgTotal($msgTotal)
    {
        $this->msgTotal = $msgTotal;

        return $this;
    }

    /**
     * Get msgTotal
     *
     * @return integer
     */
    public function getMsgTotal()
    {
        return $this->msgTotal;
    }

    /**
     * Set vdirs
     *
     * @param string $vdirs
     *
     * @return EntityForumMembers
     */
    public function setVdirs($vdirs)
    {
        $this->vdirs = $vdirs;

        return $this;
    }

    /**
     * Get vdirs
     *
     * @return string
     */
    public function getVdirs()
    {
        return $this->vdirs;
    }

    /**
     * Set lastVisit
     *
     * @param integer $lastVisit
     *
     * @return EntityForumMembers
     */
    public function setLastVisit($lastVisit)
    {
        $this->lastVisit = $lastVisit;

        return $this;
    }

    /**
     * Get lastVisit
     *
     * @return integer
     */
    public function getLastVisit()
    {
        return $this->lastVisit;
    }

    /**
     * Set lastActivity
     *
     * @param integer $lastActivity
     *
     * @return EntityForumMembers
     */
    public function setLastActivity($lastActivity)
    {
        $this->lastActivity = $lastActivity;

        return $this;
    }

    /**
     * Get lastActivity
     *
     * @return integer
     */
    public function getLastActivity()
    {
        return $this->lastActivity;
    }

    /**
     * Set dstInUse
     *
     * @param boolean $dstInUse
     *
     * @return EntityForumMembers
     */
    public function setDstInUse($dstInUse)
    {
        $this->dstInUse = $dstInUse;

        return $this;
    }

    /**
     * Get dstInUse
     *
     * @return boolean
     */
    public function getDstInUse()
    {
        return $this->dstInUse;
    }

    /**
     * Set viewPrefs
     *
     * @param string $viewPrefs
     *
     * @return EntityForumMembers
     */
    public function setViewPrefs($viewPrefs)
    {
        $this->viewPrefs = $viewPrefs;

        return $this;
    }

    /**
     * Get viewPrefs
     *
     * @return string
     */
    public function getViewPrefs()
    {
        return $this->viewPrefs;
    }

    /**
     * Set coppaUser
     *
     * @param boolean $coppaUser
     *
     * @return EntityForumMembers
     */
    public function setCoppaUser($coppaUser)
    {
        $this->coppaUser = $coppaUser;

        return $this;
    }

    /**
     * Get coppaUser
     *
     * @return boolean
     */
    public function getCoppaUser()
    {
        return $this->coppaUser;
    }

    /**
     * Set modPosts
     *
     * @param string $modPosts
     *
     * @return EntityForumMembers
     */
    public function setModPosts($modPosts)
    {
        $this->modPosts = $modPosts;

        return $this;
    }

    /**
     * Get modPosts
     *
     * @return string
     */
    public function getModPosts()
    {
        return $this->modPosts;
    }

    /**
     * Set autoTrack
     *
     * @param boolean $autoTrack
     *
     * @return EntityForumMembers
     */
    public function setAutoTrack($autoTrack)
    {
        $this->autoTrack = $autoTrack;

        return $this;
    }

    /**
     * Get autoTrack
     *
     * @return boolean
     */
    public function getAutoTrack()
    {
        return $this->autoTrack;
    }

    /**
     * Set orgPermId
     *
     * @param string $orgPermId
     *
     * @return EntityForumMembers
     */
    public function setOrgPermId($orgPermId)
    {
        $this->orgPermId = $orgPermId;

        return $this;
    }

    /**
     * Get orgPermId
     *
     * @return string
     */
    public function getOrgPermId()
    {
        return $this->orgPermId;
    }

    /**
     * Set orgSupmod
     *
     * @param boolean $orgSupmod
     *
     * @return EntityForumMembers
     */
    public function setOrgSupmod($orgSupmod)
    {
        $this->orgSupmod = $orgSupmod;

        return $this;
    }

    /**
     * Get orgSupmod
     *
     * @return boolean
     */
    public function getOrgSupmod()
    {
        return $this->orgSupmod;
    }

    /**
     * Set integMsg
     *
     * @param string $integMsg
     *
     * @return EntityForumMembers
     */
    public function setIntegMsg($integMsg)
    {
        $this->integMsg = $integMsg;

        return $this;
    }

    /**
     * Get integMsg
     *
     * @return string
     */
    public function getIntegMsg()
    {
        return $this->integMsg;
    }

    /**
     * Set tempBan
     *
     * @param string $tempBan
     *
     * @return EntityForumMembers
     */
    public function setTempBan($tempBan)
    {
        $this->tempBan = $tempBan;

        return $this;
    }

    /**
     * Get tempBan
     *
     * @return string
     */
    public function getTempBan()
    {
        return $this->tempBan;
    }

    /**
     * Set extraIntrest
     *
     * @param integer $extraIntrest
     *
     * @return EntityForumMembers
     */
    public function setExtraIntrest($extraIntrest)
    {
        $this->extraIntrest = $extraIntrest;

        return $this;
    }

    /**
     * Get extraIntrest
     *
     * @return integer
     */
    public function getExtraIntrest()
    {
        return $this->extraIntrest;
    }

    /**
     * Set favorites
     *
     * @param string $favorites
     *
     * @return EntityForumMembers
     */
    public function setFavorites($favorites)
    {
        $this->favorites = $favorites;

        return $this;
    }

    /**
     * Get favorites
     *
     * @return string
     */
    public function getFavorites()
    {
        return $this->favorites;
    }

    /**
     * Set rep
     *
     * @param integer $rep
     *
     * @return EntityForumMembers
     */
    public function setRep($rep)
    {
        $this->rep = $rep;

        return $this;
    }

    /**
     * Get rep
     *
     * @return integer
     */
    public function getRep()
    {
        return $this->rep;
    }

    /**
     * Set repDown
     *
     * @param integer $repDown
     *
     * @return EntityForumMembers
     */
    public function setRepDown($repDown)
    {
        $this->repDown = $repDown;

        return $this;
    }

    /**
     * Get repDown
     *
     * @return integer
     */
    public function getRepDown()
    {
        return $this->repDown;
    }

    /**
     * Set allowRep
     *
     * @param boolean $allowRep
     *
     * @return EntityForumMembers
     */
    public function setAllowRep($allowRep)
    {
        $this->allowRep = $allowRep;

        return $this;
    }

    /**
     * Get allowRep
     *
     * @return boolean
     */
    public function getAllowRep()
    {
        return $this->allowRep;
    }

    /**
     * Set allowAnon
     *
     * @param boolean $allowAnon
     *
     * @return EntityForumMembers
     */
    public function setAllowAnon($allowAnon)
    {
        $this->allowAnon = $allowAnon;

        return $this;
    }

    /**
     * Get allowAnon
     *
     * @return boolean
     */
    public function getAllowAnon()
    {
        return $this->allowAnon;
    }

    /**
     * Set repDo
     *
     * @param integer $repDo
     *
     * @return EntityForumMembers
     */
    public function setRepDo($repDo)
    {
        $this->repDo = $repDo;

        return $this;
    }

    /**
     * Get repDo
     *
     * @return integer
     */
    public function getRepDo()
    {
        return $this->repDo;
    }

    /**
     * Set repDoOpen
     *
     * @param integer $repDoOpen
     *
     * @return EntityForumMembers
     */
    public function setRepDoOpen($repDoOpen)
    {
        $this->repDoOpen = $repDoOpen;

        return $this;
    }

    /**
     * Get repDoOpen
     *
     * @return integer
     */
    public function getRepDoOpen()
    {
        return $this->repDoOpen;
    }

    /**
     * Set awards
     *
     * @param boolean $awards
     *
     * @return EntityForumMembers
     */
    public function setAwards($awards)
    {
        $this->awards = $awards;

        return $this;
    }

    /**
     * Get awards
     *
     * @return boolean
     */
    public function getAwards()
    {
        return $this->awards;
    }

    /**
     * Set nameChanged
     *
     * @param integer $nameChanged
     *
     * @return EntityForumMembers
     */
    public function setNameChanged($nameChanged)
    {
        $this->nameChanged = $nameChanged;

        return $this;
    }

    /**
     * Get nameChanged
     *
     * @return integer
     */
    public function getNameChanged()
    {
        return $this->nameChanged;
    }

    /**
     * Set menuViever
     *
     * @param string $menuViever
     *
     * @return EntityForumMembers
     */
    public function setMenuViever($menuViever)
    {
        $this->menuViever = $menuViever;

        return $this;
    }

    /**
     * Get menuViever
     *
     * @return string
     */
    public function getMenuViever()
    {
        return $this->menuViever;
    }

    /**
     * Set chatMod
     *
     * @param boolean $chatMod
     *
     * @return EntityForumMembers
     */
    public function setChatMod($chatMod)
    {
        $this->chatMod = $chatMod;

        return $this;
    }

    /**
     * Get chatMod
     *
     * @return boolean
     */
    public function getChatMod()
    {
        return $this->chatMod;
    }

    /**
     * Set chatBan
     *
     * @param integer $chatBan
     *
     * @return EntityForumMembers
     */
    public function setChatBan($chatBan)
    {
        $this->chatBan = $chatBan;

        return $this;
    }

    /**
     * Get chatBan
     *
     * @return integer
     */
    public function getChatBan()
    {
        return $this->chatBan;
    }

    /**
     * Set chatBanWhy
     *
     * @param string $chatBanWhy
     *
     * @return EntityForumMembers
     */
    public function setChatBanWhy($chatBanWhy)
    {
        $this->chatBanWhy = $chatBanWhy;

        return $this;
    }

    /**
     * Get chatBanWhy
     *
     * @return string
     */
    public function getChatBanWhy()
    {
        return $this->chatBanWhy;
    }
}
