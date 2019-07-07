<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityForumGroups
 *
 * @ORM\Table(name="forum_groups")
 * @ORM\Entity(repositoryClass="Repository\EntityForumGroupsRep")
 */
class EntityForumGroups
{
    /**
     * @var integer
     *
     * @ORM\Column(name="g_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_view_board", type="boolean", nullable=true)
     */
    private $gViewBoard;

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_mem_info", type="boolean", nullable=true)
     */
    private $gMemInfo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_other_topics", type="boolean", nullable=true)
     */
    private $gOtherTopics;

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_use_search", type="boolean", nullable=true)
     */
    private $gUseSearch;

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_email_friend", type="boolean", nullable=true)
     */
    private $gEmailFriend;

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_invite_friend", type="boolean", nullable=true)
     */
    private $gInviteFriend;

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_edit_profile", type="boolean", nullable=true)
     */
    private $gEditProfile;

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_post_new_topics", type="boolean", nullable=true)
     */
    private $gPostNewTopics;

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_reply_own_topics", type="boolean", nullable=true)
     */
    private $gReplyOwnTopics;

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_reply_other_topics", type="boolean", nullable=true)
     */
    private $gReplyOtherTopics;

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_edit_posts", type="boolean", nullable=true)
     */
    private $gEditPosts;

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_delete_own_posts", type="boolean", nullable=true)
     */
    private $gDeleteOwnPosts;

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_open_close_posts", type="boolean", nullable=true)
     */
    private $gOpenClosePosts;

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_delete_own_topics", type="boolean", nullable=true)
     */
    private $gDeleteOwnTopics;

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_post_polls", type="boolean", nullable=true)
     */
    private $gPostPolls;

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_vote_polls", type="boolean", nullable=true)
     */
    private $gVotePolls;

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_use_pm", type="boolean", nullable=true)
     */
    private $gUsePm;

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_is_supmod", type="boolean", nullable=true)
     */
    private $gIsSupmod;

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_access_cp", type="boolean", nullable=true)
     */
    private $gAccessCp;

    /**
     * @var string
     *
     * @ORM\Column(name="g_title", type="string", length=32, nullable=false)
     */
    private $gTitle = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_can_remove", type="boolean", nullable=true)
     */
    private $gCanRemove;

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_append_edit", type="boolean", nullable=true)
     */
    private $gAppendEdit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_access_offline", type="boolean", nullable=true)
     */
    private $gAccessOffline;

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_avoid_q", type="boolean", nullable=true)
     */
    private $gAvoidQ;

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_avoid_flood", type="boolean", nullable=true)
     */
    private $gAvoidFlood;

    /**
     * @var string
     *
     * @ORM\Column(name="g_icon", type="string", length=64, nullable=true)
     */
    private $gIcon;

    /**
     * @var integer
     *
     * @ORM\Column(name="g_attach_max", type="bigint", nullable=true)
     */
    private $gAttachMax;

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_avatar_upload", type="boolean", nullable=true)
     */
    private $gAvatarUpload = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_calendar_post", type="boolean", nullable=true)
     */
    private $gCalendarPost = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_d_add_files", type="boolean", nullable=true)
     */
    private $gDAddFiles = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_d_ibcode_files", type="boolean", nullable=true)
     */
    private $gDIbcodeFiles = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_d_html_files", type="boolean", nullable=true)
     */
    private $gDHtmlFiles = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_do_download", type="boolean", nullable=true)
     */
    private $gDoDownload = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_d_edit_files", type="boolean", nullable=true)
     */
    private $gDEditFiles = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_d_manage_files", type="boolean", nullable=true)
     */
    private $gDManageFiles = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_d_allow_dl_offline", type="boolean", nullable=true)
     */
    private $gDAllowDlOffline = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_d_post_comments", type="boolean", nullable=true)
     */
    private $gDPostComments = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_d_approve_down", type="boolean", nullable=true)
     */
    private $gDApproveDown = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_d_eofs", type="boolean", nullable=true)
     */
    private $gDEofs = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_d_optimize_db", type="boolean", nullable=true)
     */
    private $gDOptimizeDb = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_d_check_links", type="boolean", nullable=true)
     */
    private $gDCheckLinks = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_d_check_topics", type="boolean", nullable=true)
     */
    private $gDCheckTopics = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_d_max_dls", type="boolean", nullable=false)
     */
    private $gDMaxDls = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="prefix", type="string", length=250, nullable=true)
     */
    private $prefix;

    /**
     * @var string
     *
     * @ORM\Column(name="suffix", type="string", length=250, nullable=true)
     */
    private $suffix;

    /**
     * @var integer
     *
     * @ORM\Column(name="g_max_messages", type="integer", nullable=true)
     */
    private $gMaxMessages = '50';

    /**
     * @var integer
     *
     * @ORM\Column(name="g_max_mass_pm", type="integer", nullable=true)
     */
    private $gMaxMassPm = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="g_search_flood", type="integer", nullable=true)
     */
    private $gSearchFlood = '20';

    /**
     * @var integer
     *
     * @ORM\Column(name="g_edit_cutoff", type="integer", nullable=true)
     */
    private $gEditCutoff = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="g_promotion", type="string", length=10, nullable=true)
     */
    private $gPromotion = '-1&-1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_hide_from_list", type="boolean", nullable=true)
     */
    private $gHideFromList = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_post_closed", type="boolean", nullable=true)
     */
    private $gPostClosed = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="g_perm_id", type="string", length=255, nullable=false)
     */
    private $gPermId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="g_photo_max_vars", type="string", length=200, nullable=true)
     */
    private $gPhotoMaxVars = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_dohtml", type="boolean", nullable=false)
     */
    private $gDohtml = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_edit_topic", type="boolean", nullable=false)
     */
    private $gEditTopic = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="g_email_limit", type="string", length=15, nullable=false)
     */
    private $gEmailLimit = '10:15';

    /**
     * @var string
     *
     * @ORM\Column(name="g_display", type="string", length=3, nullable=false)
     */
    private $gDisplay = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_fine_edit", type="boolean", nullable=false)
     */
    private $gFineEdit = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_allow_inventoryedit", type="boolean", nullable=false)
     */
    private $gAllowInventoryedit = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="g_discount", type="integer", nullable=false)
     */
    private $gDiscount = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_view_shoutbox", type="boolean", nullable=true)
     */
    private $gViewShoutbox = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_post_shoutbox", type="boolean", nullable=true)
     */
    private $gPostShoutbox = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="g_glow", type="string", length=20, nullable=false)
     */
    private $gGlow = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="g_change_rep", type="boolean", nullable=true)
     */
    private $gChangeRep = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="g_exclude_rep", type="string", length=255, nullable=true)
     */
    private $gExcludeRep;



    /**
     * Get gId
     *
     * @return integer
     */
    public function getGId()
    {
        return $this->gId;
    }

    /**
     * Set gViewBoard
     *
     * @param boolean $gViewBoard
     *
     * @return EntityForumGroups
     */
    public function setGViewBoard($gViewBoard)
    {
        $this->gViewBoard = $gViewBoard;

        return $this;
    }

    /**
     * Get gViewBoard
     *
     * @return boolean
     */
    public function getGViewBoard()
    {
        return $this->gViewBoard;
    }

    /**
     * Set gMemInfo
     *
     * @param boolean $gMemInfo
     *
     * @return EntityForumGroups
     */
    public function setGMemInfo($gMemInfo)
    {
        $this->gMemInfo = $gMemInfo;

        return $this;
    }

    /**
     * Get gMemInfo
     *
     * @return boolean
     */
    public function getGMemInfo()
    {
        return $this->gMemInfo;
    }

    /**
     * Set gOtherTopics
     *
     * @param boolean $gOtherTopics
     *
     * @return EntityForumGroups
     */
    public function setGOtherTopics($gOtherTopics)
    {
        $this->gOtherTopics = $gOtherTopics;

        return $this;
    }

    /**
     * Get gOtherTopics
     *
     * @return boolean
     */
    public function getGOtherTopics()
    {
        return $this->gOtherTopics;
    }

    /**
     * Set gUseSearch
     *
     * @param boolean $gUseSearch
     *
     * @return EntityForumGroups
     */
    public function setGUseSearch($gUseSearch)
    {
        $this->gUseSearch = $gUseSearch;

        return $this;
    }

    /**
     * Get gUseSearch
     *
     * @return boolean
     */
    public function getGUseSearch()
    {
        return $this->gUseSearch;
    }

    /**
     * Set gEmailFriend
     *
     * @param boolean $gEmailFriend
     *
     * @return EntityForumGroups
     */
    public function setGEmailFriend($gEmailFriend)
    {
        $this->gEmailFriend = $gEmailFriend;

        return $this;
    }

    /**
     * Get gEmailFriend
     *
     * @return boolean
     */
    public function getGEmailFriend()
    {
        return $this->gEmailFriend;
    }

    /**
     * Set gInviteFriend
     *
     * @param boolean $gInviteFriend
     *
     * @return EntityForumGroups
     */
    public function setGInviteFriend($gInviteFriend)
    {
        $this->gInviteFriend = $gInviteFriend;

        return $this;
    }

    /**
     * Get gInviteFriend
     *
     * @return boolean
     */
    public function getGInviteFriend()
    {
        return $this->gInviteFriend;
    }

    /**
     * Set gEditProfile
     *
     * @param boolean $gEditProfile
     *
     * @return EntityForumGroups
     */
    public function setGEditProfile($gEditProfile)
    {
        $this->gEditProfile = $gEditProfile;

        return $this;
    }

    /**
     * Get gEditProfile
     *
     * @return boolean
     */
    public function getGEditProfile()
    {
        return $this->gEditProfile;
    }

    /**
     * Set gPostNewTopics
     *
     * @param boolean $gPostNewTopics
     *
     * @return EntityForumGroups
     */
    public function setGPostNewTopics($gPostNewTopics)
    {
        $this->gPostNewTopics = $gPostNewTopics;

        return $this;
    }

    /**
     * Get gPostNewTopics
     *
     * @return boolean
     */
    public function getGPostNewTopics()
    {
        return $this->gPostNewTopics;
    }

    /**
     * Set gReplyOwnTopics
     *
     * @param boolean $gReplyOwnTopics
     *
     * @return EntityForumGroups
     */
    public function setGReplyOwnTopics($gReplyOwnTopics)
    {
        $this->gReplyOwnTopics = $gReplyOwnTopics;

        return $this;
    }

    /**
     * Get gReplyOwnTopics
     *
     * @return boolean
     */
    public function getGReplyOwnTopics()
    {
        return $this->gReplyOwnTopics;
    }

    /**
     * Set gReplyOtherTopics
     *
     * @param boolean $gReplyOtherTopics
     *
     * @return EntityForumGroups
     */
    public function setGReplyOtherTopics($gReplyOtherTopics)
    {
        $this->gReplyOtherTopics = $gReplyOtherTopics;

        return $this;
    }

    /**
     * Get gReplyOtherTopics
     *
     * @return boolean
     */
    public function getGReplyOtherTopics()
    {
        return $this->gReplyOtherTopics;
    }

    /**
     * Set gEditPosts
     *
     * @param boolean $gEditPosts
     *
     * @return EntityForumGroups
     */
    public function setGEditPosts($gEditPosts)
    {
        $this->gEditPosts = $gEditPosts;

        return $this;
    }

    /**
     * Get gEditPosts
     *
     * @return boolean
     */
    public function getGEditPosts()
    {
        return $this->gEditPosts;
    }

    /**
     * Set gDeleteOwnPosts
     *
     * @param boolean $gDeleteOwnPosts
     *
     * @return EntityForumGroups
     */
    public function setGDeleteOwnPosts($gDeleteOwnPosts)
    {
        $this->gDeleteOwnPosts = $gDeleteOwnPosts;

        return $this;
    }

    /**
     * Get gDeleteOwnPosts
     *
     * @return boolean
     */
    public function getGDeleteOwnPosts()
    {
        return $this->gDeleteOwnPosts;
    }

    /**
     * Set gOpenClosePosts
     *
     * @param boolean $gOpenClosePosts
     *
     * @return EntityForumGroups
     */
    public function setGOpenClosePosts($gOpenClosePosts)
    {
        $this->gOpenClosePosts = $gOpenClosePosts;

        return $this;
    }

    /**
     * Get gOpenClosePosts
     *
     * @return boolean
     */
    public function getGOpenClosePosts()
    {
        return $this->gOpenClosePosts;
    }

    /**
     * Set gDeleteOwnTopics
     *
     * @param boolean $gDeleteOwnTopics
     *
     * @return EntityForumGroups
     */
    public function setGDeleteOwnTopics($gDeleteOwnTopics)
    {
        $this->gDeleteOwnTopics = $gDeleteOwnTopics;

        return $this;
    }

    /**
     * Get gDeleteOwnTopics
     *
     * @return boolean
     */
    public function getGDeleteOwnTopics()
    {
        return $this->gDeleteOwnTopics;
    }

    /**
     * Set gPostPolls
     *
     * @param boolean $gPostPolls
     *
     * @return EntityForumGroups
     */
    public function setGPostPolls($gPostPolls)
    {
        $this->gPostPolls = $gPostPolls;

        return $this;
    }

    /**
     * Get gPostPolls
     *
     * @return boolean
     */
    public function getGPostPolls()
    {
        return $this->gPostPolls;
    }

    /**
     * Set gVotePolls
     *
     * @param boolean $gVotePolls
     *
     * @return EntityForumGroups
     */
    public function setGVotePolls($gVotePolls)
    {
        $this->gVotePolls = $gVotePolls;

        return $this;
    }

    /**
     * Get gVotePolls
     *
     * @return boolean
     */
    public function getGVotePolls()
    {
        return $this->gVotePolls;
    }

    /**
     * Set gUsePm
     *
     * @param boolean $gUsePm
     *
     * @return EntityForumGroups
     */
    public function setGUsePm($gUsePm)
    {
        $this->gUsePm = $gUsePm;

        return $this;
    }

    /**
     * Get gUsePm
     *
     * @return boolean
     */
    public function getGUsePm()
    {
        return $this->gUsePm;
    }

    /**
     * Set gIsSupmod
     *
     * @param boolean $gIsSupmod
     *
     * @return EntityForumGroups
     */
    public function setGIsSupmod($gIsSupmod)
    {
        $this->gIsSupmod = $gIsSupmod;

        return $this;
    }

    /**
     * Get gIsSupmod
     *
     * @return boolean
     */
    public function getGIsSupmod()
    {
        return $this->gIsSupmod;
    }

    /**
     * Set gAccessCp
     *
     * @param boolean $gAccessCp
     *
     * @return EntityForumGroups
     */
    public function setGAccessCp($gAccessCp)
    {
        $this->gAccessCp = $gAccessCp;

        return $this;
    }

    /**
     * Get gAccessCp
     *
     * @return boolean
     */
    public function getGAccessCp()
    {
        return $this->gAccessCp;
    }

    /**
     * Set gTitle
     *
     * @param string $gTitle
     *
     * @return EntityForumGroups
     */
    public function setGTitle($gTitle)
    {
        $this->gTitle = $gTitle;

        return $this;
    }

    /**
     * Get gTitle
     *
     * @return string
     */
    public function getGTitle()
    {
        return $this->gTitle;
    }

    /**
     * Set gCanRemove
     *
     * @param boolean $gCanRemove
     *
     * @return EntityForumGroups
     */
    public function setGCanRemove($gCanRemove)
    {
        $this->gCanRemove = $gCanRemove;

        return $this;
    }

    /**
     * Get gCanRemove
     *
     * @return boolean
     */
    public function getGCanRemove()
    {
        return $this->gCanRemove;
    }

    /**
     * Set gAppendEdit
     *
     * @param boolean $gAppendEdit
     *
     * @return EntityForumGroups
     */
    public function setGAppendEdit($gAppendEdit)
    {
        $this->gAppendEdit = $gAppendEdit;

        return $this;
    }

    /**
     * Get gAppendEdit
     *
     * @return boolean
     */
    public function getGAppendEdit()
    {
        return $this->gAppendEdit;
    }

    /**
     * Set gAccessOffline
     *
     * @param boolean $gAccessOffline
     *
     * @return EntityForumGroups
     */
    public function setGAccessOffline($gAccessOffline)
    {
        $this->gAccessOffline = $gAccessOffline;

        return $this;
    }

    /**
     * Get gAccessOffline
     *
     * @return boolean
     */
    public function getGAccessOffline()
    {
        return $this->gAccessOffline;
    }

    /**
     * Set gAvoidQ
     *
     * @param boolean $gAvoidQ
     *
     * @return EntityForumGroups
     */
    public function setGAvoidQ($gAvoidQ)
    {
        $this->gAvoidQ = $gAvoidQ;

        return $this;
    }

    /**
     * Get gAvoidQ
     *
     * @return boolean
     */
    public function getGAvoidQ()
    {
        return $this->gAvoidQ;
    }

    /**
     * Set gAvoidFlood
     *
     * @param boolean $gAvoidFlood
     *
     * @return EntityForumGroups
     */
    public function setGAvoidFlood($gAvoidFlood)
    {
        $this->gAvoidFlood = $gAvoidFlood;

        return $this;
    }

    /**
     * Get gAvoidFlood
     *
     * @return boolean
     */
    public function getGAvoidFlood()
    {
        return $this->gAvoidFlood;
    }

    /**
     * Set gIcon
     *
     * @param string $gIcon
     *
     * @return EntityForumGroups
     */
    public function setGIcon($gIcon)
    {
        $this->gIcon = $gIcon;

        return $this;
    }

    /**
     * Get gIcon
     *
     * @return string
     */
    public function getGIcon()
    {
        return $this->gIcon;
    }

    /**
     * Set gAttachMax
     *
     * @param integer $gAttachMax
     *
     * @return EntityForumGroups
     */
    public function setGAttachMax($gAttachMax)
    {
        $this->gAttachMax = $gAttachMax;

        return $this;
    }

    /**
     * Get gAttachMax
     *
     * @return integer
     */
    public function getGAttachMax()
    {
        return $this->gAttachMax;
    }

    /**
     * Set gAvatarUpload
     *
     * @param boolean $gAvatarUpload
     *
     * @return EntityForumGroups
     */
    public function setGAvatarUpload($gAvatarUpload)
    {
        $this->gAvatarUpload = $gAvatarUpload;

        return $this;
    }

    /**
     * Get gAvatarUpload
     *
     * @return boolean
     */
    public function getGAvatarUpload()
    {
        return $this->gAvatarUpload;
    }

    /**
     * Set gCalendarPost
     *
     * @param boolean $gCalendarPost
     *
     * @return EntityForumGroups
     */
    public function setGCalendarPost($gCalendarPost)
    {
        $this->gCalendarPost = $gCalendarPost;

        return $this;
    }

    /**
     * Get gCalendarPost
     *
     * @return boolean
     */
    public function getGCalendarPost()
    {
        return $this->gCalendarPost;
    }

    /**
     * Set gDAddFiles
     *
     * @param boolean $gDAddFiles
     *
     * @return EntityForumGroups
     */
    public function setGDAddFiles($gDAddFiles)
    {
        $this->gDAddFiles = $gDAddFiles;

        return $this;
    }

    /**
     * Get gDAddFiles
     *
     * @return boolean
     */
    public function getGDAddFiles()
    {
        return $this->gDAddFiles;
    }

    /**
     * Set gDIbcodeFiles
     *
     * @param boolean $gDIbcodeFiles
     *
     * @return EntityForumGroups
     */
    public function setGDIbcodeFiles($gDIbcodeFiles)
    {
        $this->gDIbcodeFiles = $gDIbcodeFiles;

        return $this;
    }

    /**
     * Get gDIbcodeFiles
     *
     * @return boolean
     */
    public function getGDIbcodeFiles()
    {
        return $this->gDIbcodeFiles;
    }

    /**
     * Set gDHtmlFiles
     *
     * @param boolean $gDHtmlFiles
     *
     * @return EntityForumGroups
     */
    public function setGDHtmlFiles($gDHtmlFiles)
    {
        $this->gDHtmlFiles = $gDHtmlFiles;

        return $this;
    }

    /**
     * Get gDHtmlFiles
     *
     * @return boolean
     */
    public function getGDHtmlFiles()
    {
        return $this->gDHtmlFiles;
    }

    /**
     * Set gDoDownload
     *
     * @param boolean $gDoDownload
     *
     * @return EntityForumGroups
     */
    public function setGDoDownload($gDoDownload)
    {
        $this->gDoDownload = $gDoDownload;

        return $this;
    }

    /**
     * Get gDoDownload
     *
     * @return boolean
     */
    public function getGDoDownload()
    {
        return $this->gDoDownload;
    }

    /**
     * Set gDEditFiles
     *
     * @param boolean $gDEditFiles
     *
     * @return EntityForumGroups
     */
    public function setGDEditFiles($gDEditFiles)
    {
        $this->gDEditFiles = $gDEditFiles;

        return $this;
    }

    /**
     * Get gDEditFiles
     *
     * @return boolean
     */
    public function getGDEditFiles()
    {
        return $this->gDEditFiles;
    }

    /**
     * Set gDManageFiles
     *
     * @param boolean $gDManageFiles
     *
     * @return EntityForumGroups
     */
    public function setGDManageFiles($gDManageFiles)
    {
        $this->gDManageFiles = $gDManageFiles;

        return $this;
    }

    /**
     * Get gDManageFiles
     *
     * @return boolean
     */
    public function getGDManageFiles()
    {
        return $this->gDManageFiles;
    }

    /**
     * Set gDAllowDlOffline
     *
     * @param boolean $gDAllowDlOffline
     *
     * @return EntityForumGroups
     */
    public function setGDAllowDlOffline($gDAllowDlOffline)
    {
        $this->gDAllowDlOffline = $gDAllowDlOffline;

        return $this;
    }

    /**
     * Get gDAllowDlOffline
     *
     * @return boolean
     */
    public function getGDAllowDlOffline()
    {
        return $this->gDAllowDlOffline;
    }

    /**
     * Set gDPostComments
     *
     * @param boolean $gDPostComments
     *
     * @return EntityForumGroups
     */
    public function setGDPostComments($gDPostComments)
    {
        $this->gDPostComments = $gDPostComments;

        return $this;
    }

    /**
     * Get gDPostComments
     *
     * @return boolean
     */
    public function getGDPostComments()
    {
        return $this->gDPostComments;
    }

    /**
     * Set gDApproveDown
     *
     * @param boolean $gDApproveDown
     *
     * @return EntityForumGroups
     */
    public function setGDApproveDown($gDApproveDown)
    {
        $this->gDApproveDown = $gDApproveDown;

        return $this;
    }

    /**
     * Get gDApproveDown
     *
     * @return boolean
     */
    public function getGDApproveDown()
    {
        return $this->gDApproveDown;
    }

    /**
     * Set gDEofs
     *
     * @param boolean $gDEofs
     *
     * @return EntityForumGroups
     */
    public function setGDEofs($gDEofs)
    {
        $this->gDEofs = $gDEofs;

        return $this;
    }

    /**
     * Get gDEofs
     *
     * @return boolean
     */
    public function getGDEofs()
    {
        return $this->gDEofs;
    }

    /**
     * Set gDOptimizeDb
     *
     * @param boolean $gDOptimizeDb
     *
     * @return EntityForumGroups
     */
    public function setGDOptimizeDb($gDOptimizeDb)
    {
        $this->gDOptimizeDb = $gDOptimizeDb;

        return $this;
    }

    /**
     * Get gDOptimizeDb
     *
     * @return boolean
     */
    public function getGDOptimizeDb()
    {
        return $this->gDOptimizeDb;
    }

    /**
     * Set gDCheckLinks
     *
     * @param boolean $gDCheckLinks
     *
     * @return EntityForumGroups
     */
    public function setGDCheckLinks($gDCheckLinks)
    {
        $this->gDCheckLinks = $gDCheckLinks;

        return $this;
    }

    /**
     * Get gDCheckLinks
     *
     * @return boolean
     */
    public function getGDCheckLinks()
    {
        return $this->gDCheckLinks;
    }

    /**
     * Set gDCheckTopics
     *
     * @param boolean $gDCheckTopics
     *
     * @return EntityForumGroups
     */
    public function setGDCheckTopics($gDCheckTopics)
    {
        $this->gDCheckTopics = $gDCheckTopics;

        return $this;
    }

    /**
     * Get gDCheckTopics
     *
     * @return boolean
     */
    public function getGDCheckTopics()
    {
        return $this->gDCheckTopics;
    }

    /**
     * Set gDMaxDls
     *
     * @param boolean $gDMaxDls
     *
     * @return EntityForumGroups
     */
    public function setGDMaxDls($gDMaxDls)
    {
        $this->gDMaxDls = $gDMaxDls;

        return $this;
    }

    /**
     * Get gDMaxDls
     *
     * @return boolean
     */
    public function getGDMaxDls()
    {
        return $this->gDMaxDls;
    }

    /**
     * Set prefix
     *
     * @param string $prefix
     *
     * @return EntityForumGroups
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;

        return $this;
    }

    /**
     * Get prefix
     *
     * @return string
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * Set suffix
     *
     * @param string $suffix
     *
     * @return EntityForumGroups
     */
    public function setSuffix($suffix)
    {
        $this->suffix = $suffix;

        return $this;
    }

    /**
     * Get suffix
     *
     * @return string
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * Set gMaxMessages
     *
     * @param integer $gMaxMessages
     *
     * @return EntityForumGroups
     */
    public function setGMaxMessages($gMaxMessages)
    {
        $this->gMaxMessages = $gMaxMessages;

        return $this;
    }

    /**
     * Get gMaxMessages
     *
     * @return integer
     */
    public function getGMaxMessages()
    {
        return $this->gMaxMessages;
    }

    /**
     * Set gMaxMassPm
     *
     * @param integer $gMaxMassPm
     *
     * @return EntityForumGroups
     */
    public function setGMaxMassPm($gMaxMassPm)
    {
        $this->gMaxMassPm = $gMaxMassPm;

        return $this;
    }

    /**
     * Get gMaxMassPm
     *
     * @return integer
     */
    public function getGMaxMassPm()
    {
        return $this->gMaxMassPm;
    }

    /**
     * Set gSearchFlood
     *
     * @param integer $gSearchFlood
     *
     * @return EntityForumGroups
     */
    public function setGSearchFlood($gSearchFlood)
    {
        $this->gSearchFlood = $gSearchFlood;

        return $this;
    }

    /**
     * Get gSearchFlood
     *
     * @return integer
     */
    public function getGSearchFlood()
    {
        return $this->gSearchFlood;
    }

    /**
     * Set gEditCutoff
     *
     * @param integer $gEditCutoff
     *
     * @return EntityForumGroups
     */
    public function setGEditCutoff($gEditCutoff)
    {
        $this->gEditCutoff = $gEditCutoff;

        return $this;
    }

    /**
     * Get gEditCutoff
     *
     * @return integer
     */
    public function getGEditCutoff()
    {
        return $this->gEditCutoff;
    }

    /**
     * Set gPromotion
     *
     * @param string $gPromotion
     *
     * @return EntityForumGroups
     */
    public function setGPromotion($gPromotion)
    {
        $this->gPromotion = $gPromotion;

        return $this;
    }

    /**
     * Get gPromotion
     *
     * @return string
     */
    public function getGPromotion()
    {
        return $this->gPromotion;
    }

    /**
     * Set gHideFromList
     *
     * @param boolean $gHideFromList
     *
     * @return EntityForumGroups
     */
    public function setGHideFromList($gHideFromList)
    {
        $this->gHideFromList = $gHideFromList;

        return $this;
    }

    /**
     * Get gHideFromList
     *
     * @return boolean
     */
    public function getGHideFromList()
    {
        return $this->gHideFromList;
    }

    /**
     * Set gPostClosed
     *
     * @param boolean $gPostClosed
     *
     * @return EntityForumGroups
     */
    public function setGPostClosed($gPostClosed)
    {
        $this->gPostClosed = $gPostClosed;

        return $this;
    }

    /**
     * Get gPostClosed
     *
     * @return boolean
     */
    public function getGPostClosed()
    {
        return $this->gPostClosed;
    }

    /**
     * Set gPermId
     *
     * @param string $gPermId
     *
     * @return EntityForumGroups
     */
    public function setGPermId($gPermId)
    {
        $this->gPermId = $gPermId;

        return $this;
    }

    /**
     * Get gPermId
     *
     * @return string
     */
    public function getGPermId()
    {
        return $this->gPermId;
    }

    /**
     * Set gPhotoMaxVars
     *
     * @param string $gPhotoMaxVars
     *
     * @return EntityForumGroups
     */
    public function setGPhotoMaxVars($gPhotoMaxVars)
    {
        $this->gPhotoMaxVars = $gPhotoMaxVars;

        return $this;
    }

    /**
     * Get gPhotoMaxVars
     *
     * @return string
     */
    public function getGPhotoMaxVars()
    {
        return $this->gPhotoMaxVars;
    }

    /**
     * Set gDohtml
     *
     * @param boolean $gDohtml
     *
     * @return EntityForumGroups
     */
    public function setGDohtml($gDohtml)
    {
        $this->gDohtml = $gDohtml;

        return $this;
    }

    /**
     * Get gDohtml
     *
     * @return boolean
     */
    public function getGDohtml()
    {
        return $this->gDohtml;
    }

    /**
     * Set gEditTopic
     *
     * @param boolean $gEditTopic
     *
     * @return EntityForumGroups
     */
    public function setGEditTopic($gEditTopic)
    {
        $this->gEditTopic = $gEditTopic;

        return $this;
    }

    /**
     * Get gEditTopic
     *
     * @return boolean
     */
    public function getGEditTopic()
    {
        return $this->gEditTopic;
    }

    /**
     * Set gEmailLimit
     *
     * @param string $gEmailLimit
     *
     * @return EntityForumGroups
     */
    public function setGEmailLimit($gEmailLimit)
    {
        $this->gEmailLimit = $gEmailLimit;

        return $this;
    }

    /**
     * Get gEmailLimit
     *
     * @return string
     */
    public function getGEmailLimit()
    {
        return $this->gEmailLimit;
    }

    /**
     * Set gDisplay
     *
     * @param string $gDisplay
     *
     * @return EntityForumGroups
     */
    public function setGDisplay($gDisplay)
    {
        $this->gDisplay = $gDisplay;

        return $this;
    }

    /**
     * Get gDisplay
     *
     * @return string
     */
    public function getGDisplay()
    {
        return $this->gDisplay;
    }

    /**
     * Set gFineEdit
     *
     * @param boolean $gFineEdit
     *
     * @return EntityForumGroups
     */
    public function setGFineEdit($gFineEdit)
    {
        $this->gFineEdit = $gFineEdit;

        return $this;
    }

    /**
     * Get gFineEdit
     *
     * @return boolean
     */
    public function getGFineEdit()
    {
        return $this->gFineEdit;
    }

    /**
     * Set gAllowInventoryedit
     *
     * @param boolean $gAllowInventoryedit
     *
     * @return EntityForumGroups
     */
    public function setGAllowInventoryedit($gAllowInventoryedit)
    {
        $this->gAllowInventoryedit = $gAllowInventoryedit;

        return $this;
    }

    /**
     * Get gAllowInventoryedit
     *
     * @return boolean
     */
    public function getGAllowInventoryedit()
    {
        return $this->gAllowInventoryedit;
    }

    /**
     * Set gDiscount
     *
     * @param integer $gDiscount
     *
     * @return EntityForumGroups
     */
    public function setGDiscount($gDiscount)
    {
        $this->gDiscount = $gDiscount;

        return $this;
    }

    /**
     * Get gDiscount
     *
     * @return integer
     */
    public function getGDiscount()
    {
        return $this->gDiscount;
    }

    /**
     * Set gViewShoutbox
     *
     * @param boolean $gViewShoutbox
     *
     * @return EntityForumGroups
     */
    public function setGViewShoutbox($gViewShoutbox)
    {
        $this->gViewShoutbox = $gViewShoutbox;

        return $this;
    }

    /**
     * Get gViewShoutbox
     *
     * @return boolean
     */
    public function getGViewShoutbox()
    {
        return $this->gViewShoutbox;
    }

    /**
     * Set gPostShoutbox
     *
     * @param boolean $gPostShoutbox
     *
     * @return EntityForumGroups
     */
    public function setGPostShoutbox($gPostShoutbox)
    {
        $this->gPostShoutbox = $gPostShoutbox;

        return $this;
    }

    /**
     * Get gPostShoutbox
     *
     * @return boolean
     */
    public function getGPostShoutbox()
    {
        return $this->gPostShoutbox;
    }

    /**
     * Set gGlow
     *
     * @param string $gGlow
     *
     * @return EntityForumGroups
     */
    public function setGGlow($gGlow)
    {
        $this->gGlow = $gGlow;

        return $this;
    }

    /**
     * Get gGlow
     *
     * @return string
     */
    public function getGGlow()
    {
        return $this->gGlow;
    }

    /**
     * Set gChangeRep
     *
     * @param boolean $gChangeRep
     *
     * @return EntityForumGroups
     */
    public function setGChangeRep($gChangeRep)
    {
        $this->gChangeRep = $gChangeRep;

        return $this;
    }

    /**
     * Get gChangeRep
     *
     * @return boolean
     */
    public function getGChangeRep()
    {
        return $this->gChangeRep;
    }

    /**
     * Set gExcludeRep
     *
     * @param string $gExcludeRep
     *
     * @return EntityForumGroups
     */
    public function setGExcludeRep($gExcludeRep)
    {
        $this->gExcludeRep = $gExcludeRep;

        return $this;
    }

    /**
     * Get gExcludeRep
     *
     * @return string
     */
    public function getGExcludeRep()
    {
        return $this->gExcludeRep;
    }
}
