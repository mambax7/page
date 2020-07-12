<?php
global $xoopsConfig, $xoopsOption, $xoopsUser, $xoopsDB, $xoopsTheme,$HTTP_GET_VARS;
include( "include/header.php" );

$easyid = $HTTP_GET_VARS['easyid'];
$artid = $HTTP_GET_VARS['artid'];

if ( $easyid )
{
	global $xoopsConfig, $xoopsOption, $xoopsUser, $xoopsDB, $xoopsTheme;
	$xoopsOption['show_rblock']  =1;
	 if ( !$easyid )
	{
		header( "Location: home.php" );
	} 
	$xoopsOption['use_smarty']   = 1;
	 include( "../../header.php" );
	$xoopsOption['template_used'] = array( 'main.html' );
	$xoopsOption['template_main']                                                                          = 'main.html';
	$content_text                                                                                          = array();
	$content_text                                                                                          = "<link rel='stylesheet' type='text/css' media='all' href='include/easyweb.css' />";
	$xoopsDB->queryF( "update " . $xoopsDB->prefix( "eascont" ) . " set counter=counter+1 where artid='$artid'" );
	$result = $xoopsDB->query("select easyid,easyname,content,weight,isactive from ".$xoopsDB->prefix("easyweb")." WHERE easyid=$easyid");
	list($easyid,$easyname,$content,$weight,$isactive)  = $xoopsDB->fetchRow($result);
	if ( !$easyid )
	{
		redirect_header( XOOPS_URL . "/", 3, _MD_NOEXIST );
		exit();
	} 
	$words = sizeof(explode(" ", $content));
	
	$contentpages = explode( "[pagebreak]", $content );
	$pageno = count($contentpages);
	
	if ( $page == "" || $page < 1 )
	{
		$page      = 1;
		 } 
	if ( $page > $pageno )
	{
		$page      = $pageno;
		 } 
	$arrayelement     = (int)$page;
	 $arrayelement --;
	if ( $page >= $pageno )
	{
		$xoopsTpl->assign( "next_link", '' );
		$xoopsTpl->assign( "next_nav", '' );
	} 
	else
	{
		$next_pagenumber                                                                  = $page + 1;
		 $xoopsTpl->assign( "next_link", "?easyid=$easyid&page=$next_pagenumber&sh=$easyid" );
		$xoopsTpl->assign( "next_nav", _MD_NEXTPAGE . " " . sprintf( "(%s/%s)", $next_pagenumber, $pageno ) );
	} 
	if ( $page <= 1 )
	{
		$previous_page = "";
		 $xoopsTpl->assign( "prev_link", '' );
		$xoopsTpl->assign( "prev_nav", '' );
	} 
	else
	{
		$previous_pagenumber = $page -1;
		 $xoopsTpl->assign( "prev_link", "?easyid=$easyid&page=$previous_pagenumber&sh=$easyid" );
		$xoopsTpl->assign( "prev_nav", _MD_PREVPAGE . " " . sprintf( "(%s/%s)", $previous_pagenumber, $pageno ) );
	} 
	if ( $xoopsUser && $xoopsUser->isAdmin( $xoopsModule->mid() ) )
	{
		$xoopsTpl->assign( "admin_link", XOOPS_URL . "/modules/page/admin/?op=easytiontext&easyid=$easyid" );
		$xoopsTpl->assign( 'lang_edit', _EDIT );
	} 
	else
	{
		$xoopsTpl->assign( 'admin_link', '' );
		$xoopsTpl->assign( 'lang_edit', '' );
	} 
	$content_text .= ( $contentpages[$arrayelement] );
	$xoopsTpl->assign( "content_text", $content_text );
	include_once( XOOPS_ROOT_PATH . '/footer.php' );
	exit();
} 
if ( !$artid )
{
	$xoopsOption['use_smarty']    = 1;
	 global $xoopsDB, $xoopsOption;
	$xoopsOption['template_used'] = array( 'startpage.html' );
	$xoopsOption['template_main']     = 'startpage.html';
	 if ( $xoopsConfig['startpage'] == "easyweb" )
	{
		$xoopsOption['show_rblock']            =1;
		 include( XOOPS_ROOT_PATH . "/header.php" );
		//make_cblock();
	} 
	else
	{
		$xoopsOption['show_rblock']            =0;
		 include( XOOPS_ROOT_PATH . "/header.php" );
	} 
	$content_startpage              = array();
	$content_startpage .= "<br />";
	$content_startpage = "<link rel='stylesheet' type='text/css' media='all' href='".XOOPS_URL."/modules/page/include/easyweb.css' />";
	$result = $xoopsDB->query("select content from ".$xoopsDB->prefix("easyweb_startpage")." where id='1'");
	list($content) = $xoopsDB->fetchRow($result);
	$content_startpage .= $content;
	$xoopsTpl->assign( 'content_startpage', $content_startpage );
	include_once( XOOPS_ROOT_PATH . '/footer.php' );
	exit();
} 
include( "include/header.php" );
$xoopsOption['show_rblock']   =1;
$xoopsOption['use_smarty']    = 1;
 include( "../../header.php" );
$xoopsOption['template_used'] = array( 'show.html' );
$xoopsOption['template_main'] = 'show.html';
$content_text  = array();
$content_text  = "<link rel='stylesheet' type='text/css' media='all' href='include/easyweb.css' />";
 $xoopsDB->queryF( "update " . $xoopsDB->prefix( "eascont" ) . " set counter=counter+1 where artid='$artid'" );
if ( $easyid )
{
	$result1 = $xoopsDB->query("select easyid,easyname,content,weight,isactive from ".$xoopsDB->prefix("easyweb")." WHERE easyid=$easyid");
	list($easyid,$easyname,$content,$weight,$isactive)  = $xoopsDB->fetchRow($result1);

	
	 } 
else
{
	$result = $xoopsDB->query("select artid, easyid, title, content, counter from ".$xoopsDB->prefix("eascont")." where artid=$artid");
	list($artid, $easyid, $title, $content, $counter)  = $xoopsDB->fetchRow($result);
	


	 if ( !$artid )
	{
		redirect_header( XOOPS_URL . "/", 3, _MD_NOEXIST );
		exit();
	} 
} 
$result2 = $xoopsDB->query("select easyid, easyname from ".$xoopsDB->prefix("easyweb")." where easyid=$easyid");
list($easyid, $easyname) = $xoopsDB->fetchRow($result2);
$words  = sizeof(explode(" ", $content));

$contentpages = explode( "[pagebreak]", $content );
$pageno = count($contentpages);

if ( $page == "" || $page < 1 )
{
	$page       = 1;
	 } 
if ( $page > $pageno )
{
	$page       = $pageno;
	 } 
$arrayelement      = (int)$page;
 $arrayelement --;
if ( $page >= $pageno )
{
	$xoopsTpl->assign( "next_link", '' );
	$xoopsTpl->assign( "next_nav", '' );
} 
else
{
	$next_pagenumber                                                               = $page + 1;
	 $xoopsTpl->assign( "next_link", "?artid=$artid&page=$next_pagenumber&sh=$easyid" );
	$xoopsTpl->assign( "next_nav", _MD_NEXTPAGE . " " . sprintf( "(%s/%s)", $next_pagenumber, $pageno ) );
} 
if ( $page <= 1 )
{
	$previous_page = "";
	 $xoopsTpl->assign( "prev_link", '' );
	$xoopsTpl->assign( "prev_nav", '' );
} 
else
{
	$previous_pagenumber = $page -1;
	 $xoopsTpl->assign( "prev_link", "?artid=$artid&page=$previous_pagenumber&sh=$easyid" );
	$xoopsTpl->assign( "prev_nav", _MD_PREVPAGE . " " . sprintf( "(%s/%s)", $previous_pagenumber, $pageno ) );
} 
if ( $xoopsUser && $xoopsUser->isAdmin( $xoopsModule->mid() ) )
{
	$xoopsTpl->assign( "admin_link", XOOPS_URL . "/modules/page/admin/?op=easyartedit&artid=$artid" );
	$xoopsTpl->assign( 'lang_edit', _EDIT );
} 
else
{
	$xoopsTpl->assign( 'admin_link', '' );
	$xoopsTpl->assign( 'lang_edit', '' );
} 
$content_text .= ( $contentpages[$arrayelement] );
$xoopsTpl->assign( "content_text", $content_text );
include_once( XOOPS_ROOT_PATH . '/footer.php' );

?>
