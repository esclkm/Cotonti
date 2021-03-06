<?php
/* ====================
[BEGIN_COT_EXT]
Name=Forums
Description=Cotonti Bulletin Board Module
Version=0.9.2
Date=2011-05-12
Author=Neocrome & Cotonti Team
Copyright=(c) Cotonti Team 2008-2011
Notes=BSD License
Auth_guests=R
Lock_guests=A
Auth_members=RW
Lock_members=
Recommends_modules=pm,polls
Recommends_plugins=forumstats,tags
Admin_icon=img/adminmenu_forums.png
[END_COT_EXT]

[BEGIN_COT_EXT_CONFIG]
markup=01:radio:0,1:1:
hideprivateforums=02:radio::0:
hottopictrigger=03:select:5,10,15,20,25,30,35,40,50:20:
maxtopicsperpage=04:string::30:
antibumpforums=05:radio::0:
mergeforumposts=06:radio::1:
mergetimeout=07:select:0,1,2,3,6,12,24,36,48,72:0:
maxpostsperpage=08:string::15:
mintitlelength=09:string::5:
minpostlength=10:string::2:
title_posts=31:string::{TITLE} - {SECTION} - {FORUM}:
title_topics=32:string::{SECTION} - {FORUM}:
[END_COT_EXT_CONFIG]

[BEGIN_COT_EXT_CONFIG_STRUCTURE]
allowusertext=01:radio::1:
allowbbcodes=02:radio::1:
allowsmilies=04:radio::1:
allowprvtopics=05:radio::1:
allowviewers=06:radio::1:
countposts=07:radio::1:
allowpolls=08:radio::1:
autoprune=09:string::0:
defstate=10:select:0,1:1:
[END_COT_EXT_CONFIG_STRUCTURE]
==================== */

/**
 * Forums module setup file
 *
 * @package forums
 * @version 0.9.0
 * @author Neocrome, Cotonti Team
 * @copyright Copyright (c) Cotonti Team 2008-2011
 * @license BSD
 */

?>
