<?php
include( "admin_header.php" );

function easytions(){
	global $xoopsConfig, $xoopsDB, $xoopsModule, $checked, $co;
	$result_1 = $xoopsDB->query("select easyid, easyname from ".$xoopsDB->prefix("easyweb")." order by easyid");
	if ( $xoopsDB->getRowsNum( $result_1 ) > 0 ){
	     $myts =& MyTextSanitizer::getInstance();
		echo"<style>";
		echo".easy { background-color: transparent; border: none 0px }";
		echo"</style>";
		OpenTable();
		echo"<h4>" . _MD_ADDARTICLE . "</h4>\n";
		
		
	echo "<form action='index.php' method='post'>";
	echo "<br />";
	echo "<b>" . _MD_TITLEC . "</b><br />";
	echo "<input class=textbox type='text' name='title' size='35' value='' maxlength=\"31\"><br /><br />\n";
	echo "<b>" . _MD_TITLEC_URL . "</b> " . _MD_MAXCHAR16 . "<br />";
	echo "<input class=textbox type='text' name='url_title' size='17' value='' maxlength=\"16\"><br /><br />\n";
	$checked = 1;
	echo "<b>" . _MD_EASYNAMEC . "</b><br />";
	echo "<select name='easyid' size='4'>";
	$result_2 = $xoopsDB->query("select easyid, easyname,weight,isactive from ".$xoopsDB->prefix("easyweb")." order by weight");
	
while(list($easyid, $easyname,$weight,$isactive)   = $xoopsDB->fetchRow($result_2)) {
	$easyname =$myts->makeTboxData4Show($easyname);
	global $checked;
	if ( $isactive == 1 )
	{
	if ( $checked == 1 )
	{
	echo "<option value='$easyid' selected>$easyname";
	} else {
	echo "<option value='$easyid'>$easyname";
	} 
	$checked  = 0;
	} 
	} 
	echo "</select><br /><br />\n";
	echo "<input type='hidden' name='op' value='easyarticleadd'>";
	echo "<input type='hidden' name='isactive' value='1'>";
	echo "<input type='submit' value='" . _MD_DOADDARTICLE . "'></form>\n";
	CloseTable();

	echo "<br />\n";

	OpenTable();
	echo"<table bgcolor=\"#333333\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">";
	echo"<tr>";
	echo"<td>";
	echo"<table border=\"0\" cellpadding=\"0\" cellspacing=\"1\" width=\"100%\">";
	echo"<tr class='bg3' height=\"32\">";
	echo"<td align=\"center\" width=\"22%\"><b>&nbsp;</b></td>";
	echo"<td align=\"center\" width=\"22%\"><b>" . _MD_MOVE . "</b></td>";
	echo"<td width=\"10%\" align=\"center\"><nobr><b>" . _MD_POSG . "</b></nobr></td>";
	echo"<td width=\"15%\" align=\"center\"><nobr><b>" . _MD_POS . "</b></nobr></td>";
	echo"<td width=\"2%\" align=\"center\"><b>&nbsp;</b></td>";
	echo"<td width=\"2%\" align=\"center\"><b>&nbsp;</b></td>";
	echo"</tr>";
	$result_3 = $xoopsDB->query("select easyid, easyname,weight,isactive from ".$xoopsDB->prefix("easyweb")." order by weight");
	while ( list($easyid, $easyname,$weight,$isactive2)    = $xoopsDB->fetchRow($result_3) ) {
	echo"<tr bgcolor=\"#EBEBEB\">";
	$result_10 = $xoopsDB->query( "select artid from " . $xoopsDB->prefix( "eascont" ) . " where easyid=$easyid" );
	$number = $xoopsDB->getRowsNum($result_10);
	
	
	
	echo "<form action='index.php' method='post'>";
	echo"<td width=\"33%\" bgcolor=\"#CECECE\">";
	echo"<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">";
	echo"<tr>";
	echo"<td align=\"left\" valign=\"middle\">";
	
	if ( $isactive2 == "0" )
	{
	
	echo"<nobr>&nbsp;<img height=\"17\" width=\"18\" src=\"../images/inactiv_bb.gif\" hspace=\"0\" vspace=\"0\" /><b> $easyname</b></nobr>";
	
	} 
	else
	{
	
	echo"<nobr>&nbsp;<img height=\"17\" width=\"18\" src=\"../images/activ_bb.gif\" hspace=\"0\" vspace=\"0\" /><b> $easyname</b></nobr>";
	
	} 
	echo"</td>";
	echo"<td width=\"3%\" align=\"center\"><sup><b><kbd>$number</kbd></b></sup>&nbsp;&nbsp;&nbsp;</td>";
	echo"<td align=\"right\" width=\"3%\">";
	echo "<input type=\"hidden\" name=\"easyid\" value=\"$easyid\">";
	echo "<input type=\"hidden\" name=\"op\" value=\"easytionedit\">";
	echo "<input class='easy' type=\"image\" border=\"0\" name=\"submit\" value=\"submit\" src=\"../images/edit.png\" width=\"22\" height=\"22\" />";
	echo" </td>";
	echo"</tr>";
	echo"</table>";
	echo"</td>";
	echo "</form>\n";	
	echo"<td align=\"center\" width=\"22%\"><b>&nbsp;</b></td>";
	echo"<td width=\"10%\" align=\"center\"><nobr><b>&nbsp;</b></nobr></td>";
	echo"<td width=\"15%\" align=\"center\"><nobr><b>&nbsp;</b></nobr></td>";
	echo"<td width=\"2%\" align=\"center\" bgcolor=\"#CECECE\"><b>&nbsp;</b></td>";
	echo"<td width=\"2%\" align=\"center\" bgcolor=\"#CECECE\"><b>&nbsp;</b></td>";
	echo"</tr>";
	if ( $isactive2 == 1 )
	{
		$result_4 = $xoopsDB->query("select artid, easyid, title,isactive from ".$xoopsDB->prefix("eascont")." where easyid='$easyid' order by weight");
		while (list($artid, $easyid, $title,$isactivexc)   = $xoopsDB->fetchRow($result_4) ) {
		 echo "<tr bgcolor=\"#ffffff\">";
		if ( $isactivexc == 1 )
		{
			echo "<td valign=\"middle\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img height=\"16\" width=\"16\" src=\"../images/activ.gif\" hspace=\"0\" vspace=\"0\" /> <b>$title</b></td>";
		} 
		else
		{
			echo "<td valign=\"middle\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img height=\"16\" width=\"16\" src=\"../images/inactiv.gif\" hspace=\"0\" vspace=\"0\" /> <i>$title</i></td>";
		} 

 echo "<form action='index.php' method='post'>";
	echo "<td valign=\"middle\" align=\"center\" bgcolor=\"#CECECE\"><nobr>&nbsp;&nbsp;";
	echo "<select name='easyid' size='1'>";
	$result_5 = $xoopsDB->query("select easyid, easyname,weight,isactive from ".$xoopsDB->prefix("easyweb")." order by weight");
	while(list($easyid5, $easyname5,$weight3,$isactive3)   = $xoopsDB->fetchRow($result_5)) {
	$easyname = $myts->makeTboxData4Show($easyname);
	if ($easyid5==$easyid) { $che = "selected"; }
	if ( $isactive3 == 1 )
	{
	echo "<option value='$easyid5' $che>$easyname5";
	} 
	$che   = "";
	} 
	echo "</select>";
	$result_6 = $xoopsDB->query("select artid, easyid,url_title,title,content,weight,isactive from ".$xoopsDB->prefix("eascont")." where artid='$artid'");
	list($artid_eascont, $easyid_eascont,$url_title_eascont,$title_eascont,$content_eascont,$weight_eascont,$isactive_eascont) = $xoopsDB->fetchRow($result_6);
	 echo "<input type=\"hidden\" name=\"artid\" value=\"$artid_eascont\">";
	echo "<input type=\"hidden\" name=\"url_title\" value=\"$url_title_eascont\">";
	echo "<input type=\"hidden\" name=\"title\" value=\"$title_eascont\">";
	echo "<input type=\"hidden\" name=\"text\" value=\"non\">";
	echo "<input type=\"hidden\" name=\"weight\" value=\"$weight_eascont\">";
	echo "<input type=\"hidden\" name=\"isactive\" value=\"$isactive_eascont\">";
	echo "<input type=\"hidden\" name=\"op\" value=\"easyartchange\">";
	echo "<input type=\"submit\" value=\"" . _MD_GO . "\">";
	echo"&nbsp;&nbsp;</nobr></td>";
 echo "</form>\n";
	
	
	
 echo "<form action='index.php' method='post'>";
	echo "<td align=\"center\" valign=\"middle\" bgcolor=\"#CECECE\"><nobr>&nbsp;&nbsp;";
	echo "<input class='textbox' type='text' name='weight' size='2' value='$weight'>\n";
	echo "<input type='hidden' name='easyname' value='$easyname'>";
	echo "<input type='hidden' name='text' value='non'>";
	echo "<input type='hidden' name='easyid' value='$easyid'>";
	echo "<input type='hidden' name='op' value='easytionchange'>";
	echo "<input type='hidden' name='isactive' value='$isactive2'>";
	echo "<input type='submit' value='" . _MD_GO . "'>";
	echo"&nbsp;&nbsp;</nobr></td>";
    echo "</form>\n";	
	
	
    echo "<form action='index.php' method='post'>";
	echo "<td align=\"center\" valign=\"middle\" bgcolor=\"#CECECE\"><nobr>&nbsp;&nbsp;";
	echo "<input type='text' name='weight' size='2' value='$weight_eascont'>\n";
	echo "<input type=\"hidden\" name=\"title\" value=\"$title_eascont\">";
	echo "<input type=\"hidden\" name=\"url_title\" value=\"$url_title_eascont\">";
	echo "<input type='hidden' name='artid' value='$artid_eascont'>";
	echo "<input type='hidden' name='text' value='non'>";
	echo "<input type='hidden' name='op' value='easyartchange'>";
	echo "<input type='hidden' name='easyid' value='$easyid_eascont'>";
	echo "<input type='checkbox' value='1' name='isactive'";
	if ( $isactive_eascont == 1 )
	{
		echo "checked";
	} 
	else
	{
	} 
	echo ">\n";
	echo "<input type='submit' value='" . _MD_GO . "'>";
	echo"&nbsp;&nbsp;</nobr></td>";
 echo "</form>\n";
	
	
	
 echo "<form action='index.php' method='post'>";
	echo "<td bgcolor=\"#CECECE\" align=\"center\" valign=\"middle\">";
	echo "<input type='hidden' name='artid' value='$artid'>";
	echo "<input type='hidden' name='op' value='easyartedit'>";
	echo "<input class='easy' type=\"image\" border=\"0\" name=\"submit\" value=\"submit\" src=\"../images/edit.png\" width=\"22\" height=\"22\">";
	echo"</td>";
	echo "</form>\n";
	echo "<form action='index.php' method='post'>";
	echo "<td bgcolor=\"#CECECE\" align=\"center\" valign=\"middle\">";
	echo "<input type='hidden' name='artid' value='$artid'>";
	echo "<input type='hidden' name='op' value='easyartdelete'>";
	echo "<input class='easy' type=\"image\" border=\"0\" name=\"submit\" value=\"submit\" src=\"../images/editdelete.png\" width=\"22\" height=\"22\">";
	echo "</td>";
	echo "</form>\n";	
	echo "</tr>";
} 
} 
} 
echo"</table>";
echo "</td>";
echo "</tr>";
echo"</table>";
CloseTable();
} 

echo "<br />";

OpenTable();
echo "<h4>" . _MD_ADDNEWEASY . "</h4>\n";
echo "<form action='index.php' method='post'>";
echo "<b>" . _MD_EASYNAMEC . "</b>  " . _MD_MAXCHAR16 . "<br />";
echo "<input class='textbox' type='text' name='easyname' size='30' maxlength='16'><br /><br />\n";
echo "<b>" . _MD_POSG . "</b>";
echo "<input class='textbox' type='text' name='weight' size='2' value='0'><br /><br />";
echo "<b>" . _MD_GROUPISACTIVE . "</b><input type='checkbox' value='1' name='isactive' checked><br /><br />\n";
echo "<input type='hidden' name='op' value='easytionmake'>";
echo "<input type='submit' value='" . _MD_GOADDEASYTION . "'></form>";
CloseTable();
} 




function easyarticleadd( $easyid, $url_title, $title, $text, $weight, $isactive )
{
global $xoopsDB;

if ( !$title )
{
$title     = "*----*";
 } 
if ( !$url_title )
{
$url_title     = "*----*";
 } 
$newid  = $xoopsDB->genId($xoopsDB->prefix("eascont")."_artid_seq");
$xoopsDB->query( "INSERT INTO " . $xoopsDB->prefix( "eascont" ) . " (artid, easyid, url_title, title, content, counter,weight,isactive) VALUES ($newid,$easyid,'$url_title','$title','$text','0','$weight','$isactive')" );
$result = $xoopsDB->query("select artid, easyid,url_title,title,content,weight,isactive from ".$xoopsDB->prefix("eascont")." where easyid='$easyid' AND title='$title' AND url_title='$url_title'");
list($artid, $easyid,$url_title,$title,$content,$weight,$isactive) = $xoopsDB->fetchRow($result);
 redirect_header( "index.php?op=easyartedit&artid=$artid", 1, _MD_DBUPDATED );
exit();
} 

function easyartedit( $artid )
{


 echo"<HTML>\n";
 echo"<HEAD>\n";
 echo"<TITLE>EasyWeb</TITLE>\n";
 echo"<META content=\"HTML 4.0\" name=vs_targetSchema>\n";
 echo"<META content=\"Microsoft FrontPage 4.0\" name=GENERATOR></HEAD>\n";
 echo"<BODY leftMargin=\"0\" topMargin=\"0\" scroll=\"no\" style=\"border:0\">\n";
    
global $xoopsDB, $xoopsConfig, $xoopsModule, $conttex;
$result_8  = $xoopsDB->query("select artid, easyid,url_title,title,content,weight,isactive from ".$xoopsDB->prefix("eascont")." where artid='$artid'");
list($artid, $easyid,$url_title,$title,$content,$weight,$isactive) = $xoopsDB->fetchRow($result_8);

echo"<object id=\"richedit\" style=\"BACKGROUND-COLOR: buttonface\" data=\"rte/richedit.php\" width=\"100%\" height=\"100%\" type=\"text/x-scriptlet\" VIEWASTEXT></object>";
echo"<form id=\"theForm\" action=\"index.php\" method=\"post\">";
echo"<textarea name=\"text\" style=\"display:none\" rows=\"1\" cols=\"20\">$content</textarea>";
echo"<textarea name=\"xhtml\" style=\"display:none\" rows=\"1\" cols=\"20\"></textarea>";
echo"<input type=\"hidden\" name=\"title\" value=\"$title\">";
echo"<input type=\"hidden\" name=\"url_title\" value=\"$url_title\">";
echo "<input type='hidden' name='artid' value='$artid'>";
echo "<input type='hidden' name='op' value='easyartchange'>";
echo "<input type='hidden' name='easyid' value='$easyid'>";
echo "<input type='hidden' name='isactive' value='$isactive'>";
echo "<input type='hidden' name='weight' value='$weight'>";
echo"</form>";
echo"<SCRIPT language=\"JavaScript\" event=\"onload\" for=\"window\">";
echo"       richedit.options = \"history=yes;source=yes\";";
echo"       richedit.addField(\"title\", \"Titel\", 80, theForm.title.value);";
echo"       richedit.addField(\"url_title\", \"Url Titel\", 80, theForm.url_title.value);";
echo"        richedit.docHtml = theForm.text.innerText;";
echo"</SCRIPT>";
echo"<SCRIPT language=\"JavaScript\" event=\"onscriptletevent(name, eventData)\" for=\"richedit\">";
echo"if (name == \"post\") {";
echo"    theForm.title.value = richedit.getValue(\"title\");";
echo"    theForm.url_title.value = richedit.getValue(\"url_title\");";
echo"    theForm.text.value = eventData;";
echo"    theForm.xhtml.value = richedit.docXHtml;";
echo"    theForm.submit();";
echo"}";
echo" </SCRIPT>";
echo"</BODY>\n";
echo"</HTML>\n";
   
} 

function easytionmake( $easyname, $weight, $isactive )
{
global $xoopsDB;
if ( !$easyname )
{
$easyname     = "*----*";
 } 
$newid = $xoopsDB->genId($xoopsDB->prefix("easyweb")."_easyid_seq");
 $xoopsDB->query( "INSERT INTO " . $xoopsDB->prefix( "easyweb" ) . " (easyid, easyname,content, weight, isactive) VALUES ($newid,'$easyname','$content','$weight','$isactive')" );
redirect_header( "index.php?op=easytions", 1, _MD_DBUPDATED );
exit();
} 

function easytionedit( $easyid )
{
global $xoopsDB, $xoopsConfig, $xoopsModule;
$myts =& MyTextSanitizer::getInstance();
$result_9  = $xoopsDB->query("select easyid, easyname,content,weight,isactive from ".$xoopsDB->prefix("easyweb")." where easyid=$easyid");
list($easyid, $easyname,$text,$weight,$isactive) = $xoopsDB->fetchRow($result_9);
$easyname  = $myts->makeTboxData4Edit($easyname);
$result_10 = $xoopsDB->query("select artid from ".$xoopsDB->prefix("eascont")." where easyid=$easyid");
$number = $xoopsDB->getRowsNum($result_10);
 OpenTable();
echo "<h4>";
printf( _MD_EDITTHISEASY, $easyname );
echo "</h4><br />";
$help = sprintf(_MD_THISEASYHAS,$number);
 echo "$help";
echo "<br /><br />";
echo "<form action='index.php' method='post'>";
echo "<br />";
echo "<b>" . _MD_EASYNAMEC . "</b> " . _MD_MAXCHAR16 . "<br />\n";
echo "<input class='textbox' type='text' name='easyname' size='30' maxlength='16' value='$easyname'><br /><br />\n";
echo "<b>" . _MD_POSG . "</b>";
echo "<input class='textbox' type='text' name='weight' size='2' value='$weight'><br /><br />\n";
echo "<b>" . _MD_GROUPISACTIVE . "</b><input type='checkbox' value='1' name='isactive'";
if ( $isactive == 1 )
{
echo "checked";
} 
else
{
} 
echo "><br /><br />\n";
echo "<input type='hidden' name='easyid' value='$easyid'>";
echo "<input type='hidden' name='op' value='easytionchange'>";
echo "<input type='hidden' name='text' value='$text'>";
echo "<table border='0'><tr><td>";
echo "<INPUT type='submit' value='" . _MD_SAVECHANGES . "'>";
echo "</form></td><td>";
echo "<form action='index.php' method='post'>";
echo "<input type='hidden' name='easyid' value='$easyid'>";
echo "<input type='hidden' name='op' value='easytiondelete'>";
echo "<INPUT type='submit' value='" . _MD_DELETE . "'>";
echo "</form>";
echo "</td></tr>";
echo "</table>\n";
CloseTable();

echo "<br />";

OpenTable();
echo "<form action='index.php' method='post'>";
echo "<input type='hidden' name='easyid' value='$easyid'>";
echo "<input type='hidden' name='easyname' value='$easyname'>";
echo "<input type='hidden' name='text' value='$text'>";
echo "<input type='hidden' name='isactive' value='$isactive'>";
echo "<input type='hidden' name='weight' value='$weight'>";
echo "<input type='hidden' name='op' value='easytiontext'>";
echo "<input type='submit' value='" . _MD_EDIT . "'>";
echo "</form>\n";
echo "<br />";
echo "$text";
echo "<br />";
CloseTable();
} 

function easytiontext( $easyid )
{

 echo"<HTML>\n";
 echo"<HEAD>\n";
 echo"<TITLE>EasyWeb</TITLE>\n";
 echo"<META content=\"HTML 4.0\" name=vs_targetSchema>\n";
 echo"<META content=\"Microsoft FrontPage 4.0\" name=GENERATOR></HEAD>\n";
 echo"<BODY leftMargin=\"0\" topMargin=\"0\" scroll=\"no\" style=\"border:0\">\n";


global $xoopsDB, $xoopsConfig, $xoopsModule, $conttex;
$result_11 = $xoopsDB->query("select easyid, easyname,content,weight,isactive from ".$xoopsDB->prefix("easyweb")." where easyid=$easyid");
list($easyid, $easyname,$content,$weight,$isactive) = $xoopsDB->fetchRow($result_11);


echo"<object id=\"richedit\" style=\"BACKGROUND-COLOR: buttonface\" data=\"rte/richedit.php\" width=\"100%\" height=\"100%\" type=\"text/x-scriptlet\" VIEWASTEXT></object>";
echo"<form id=\"theForm\" action=\"index.php\" method=\"post\">";
echo"<textarea name=\"text\" style=\"display:none\" rows=\"1\" cols=\"20\">$content</textarea>";
echo"<textarea name=\"xhtml\" style=\"display:none\" rows=\"1\" cols=\"20\"></textarea>";
echo "<input type='hidden' name='easyid' value='$easyid'>";
echo "<input type='hidden' name='easyname' value='$easyname'>";
echo "<input type='hidden' name='isactive' value='$isactive'>";
echo "<input type='hidden' name='weight' value='$weight'>";
echo "<input type='hidden' name='op' value='easytionchange'>";
echo"</form>";
echo"<SCRIPT language=\"JavaScript\" event=\"onload\" for=\"window\">";
echo"       richedit.options = \"history=yes;source=yes\";";
echo"       richedit.addField(\"easyname\", \"Group name\", 80, theForm.easyname.value);";
echo"       richedit.docHtml = theForm.text.innerText;";
echo"</SCRIPT>";
echo"<SCRIPT language=\"JavaScript\" event=\"onscriptletevent(name, eventData)\" for=\"richedit\">";
echo"if (name == \"post\") {";
echo"    theForm.easyname.value = richedit.getValue(\"easyname\");";
echo"    theForm.text.value = eventData;";
echo"    theForm.xhtml.value = richedit.docXHtml;";
echo"    theForm.submit();";
echo"}";
echo" </SCRIPT>";
echo"</BODY>\n";
echo"</HTML>\n";
} 



function easytionchange( $easyid, $easyname, $text, $weight, $isactive )
{

global $xoopsDB;
if ( $text == "non" )
{
$xoopsDB->query( "update " . $xoopsDB->prefix( "easyweb" ) . " set easyname='$easyname', weight='$weight', isactive='$isactive' where easyid=$easyid" );
redirect_header( "index.php?op=easytions", 1, _MD_DBUPDATED );
exit();
}else{
$xoopsDB->query( "update " . $xoopsDB->prefix( "easyweb" ) . " set easyname='$easyname', content='$text', weight='$weight', isactive='$isactive' where easyid=$easyid" );
redirect_header( "index.php?op=easytions", 1, _MD_DBUPDATED );
exit();
}
 

} 

function easyartchange( $artid, $easyid, $url_title, $title, $text, $weight, $isactive )
{

global $xoopsDB;
if ( $text == "non" )
{


$xoopsDB->query( "update " . $xoopsDB->prefix( "eascont" ) . " set easyid='$easyid', url_title='$url_title', title='$title', weight='$weight', isactive='$isactive' where artid=$artid" );
redirect_header( "index.php?op=easytions", 1, _MD_DBUPDATED );
exit();


 } else{
$xoopsDB->query( "update " . $xoopsDB->prefix( "eascont" ) . " set easyid='$easyid', url_title='$url_title', title='$title', content='$text', weight='$weight', isactive='$isactive' where artid=$artid" );
redirect_header( "index.php?op=easytions", 1, _MD_DBUPDATED );
exit();
}
} 

function easytiondelete($easyid, $ok ) {
 global $xoopsDB, $xoopsConfig, $xoopsModule;
if ( $ok == "1" )
{
$xoopsDB->query( "delete from " . $xoopsDB->prefix( "eascont" ) . " where easyid='$easyid'" );
$xoopsDB->query( "delete from " . $xoopsDB->prefix( "easyweb" ) . " where easyid='$easyid'" );
redirect_header( "index.php?op=easytions", 1, _MD_DBUPDATED );
exit();
} 
else
{
$myts               =& MyTextSanitizer::getInstance();
$result_14          =$xoopsDB->query("select easyname from ".$xoopsDB->prefix("easyweb")." where easyid=$easyid");
list($easyname)     = $xoopsDB->fetchRow($result_14);
$easyname          = $myts->makeTboxData4Show($easyname);
xoops_cp_header();
 OpenTable();
echo "<h4 style='color:#ff0000;'>" . sprintf( _MD_DELETETHISEASY, $easyname ) . "</h4><br />
         " . _MD_RUSUREDELEASY . "<br />
         " . _MD_THISDELETESALL . "<br /><br />\n";
echo "<table><tr><form name='FormName' action='index.php' method='post'><td>\n";
		
		echo "<input type='hidden' value='$easyid' name='easyid'>";
		echo "<input type='hidden' value='1' name='ok'>";
		echo "<input type='hidden' value='easytiondelete' name='op'>";
    echo "<input type='submit' name='submitButtonName' value='"._MD_YES."'>";
echo "</td></form><form name='FormName' action='index.php' method='post'><td>\n";


echo "<input type='hidden' value='easytions' name='op'>";
echo "<input type='submit' name='submitButtonName' value='"._MD_NO."'>";

echo "</td></form></tr></table>\n";
CloseTable();
xoops_cp_footer();
} 
} 





function easyartdelete($artid, $ok ) {
 global $xoopsDB, $xoopsConfig, $xoopsModule;
if ( $ok == 1 )
{
$xoopsDB->query( "delete from " . $xoopsDB->prefix( "eascont" ) . " where artid='$artid'" );
redirect_header( "index.php?op=easytions", 1, _MD_DBUPDATED );
exit();
} 
else
{
$myts                 =& MyTextSanitizer::getInstance();
$result_15            = $xoopsDB->query("select title from ".$xoopsDB->prefix("eascont")." where artid=$artid");
list($title)          = $xoopsDB->fetchRow($result_15);
$title                = $myts->makeTboxData4Show($title);
 xoops_cp_header();
OpenTable();
echo "<div><b>" . sprintf( _MD_DELETETHISART, $title ) . "</b><br /><br />
         " . _MD_RUSUREDELART . "<br /><br />\n";
echo "<table><tr><form name='FormName' action='index.php' method='post'><td>\n";
echo "<input type='hidden' value='$artid' name='artid'>";
echo "<input type='hidden' value='1' name='ok'>";
echo "<input type='hidden' value='easyartdelete' name='op'>";
echo "<input type='submit' name='submitButtonName' value='"._MD_YES."'>";

echo "</td></form><form name='FormName' action='index.php' method='post'><td>\n";
echo "<input type='hidden' value='easytions' name='op'>";
echo "<input type='submit' name='submitButtonName' value='"._MD_NO."'>";
echo "</td></form></tr></table>\n";
echo "</div>";
CloseTable();
xoops_cp_footer();
} 
} 

global $HTTP_POST_VARS,$HTTP_GET_VARS;
if (isset($HTTP_GET_VARS['op'])) $op=$HTTP_GET_VARS['op'];
if (isset($HTTP_POST_VARS['op'])) $op=$HTTP_POST_VARS['op'];



switch ( $op )
{
default:
xoops_cp_header();
easytions();
xoops_cp_footer();
break;

case "easytions":
xoops_cp_header();
easytions();
xoops_cp_footer();
break;

case "easytionedit":
xoops_cp_header();
global $HTTP_POST_VARS;
$easyid = $HTTP_POST_VARS['easyid'];
easytionedit( $easyid );
xoops_cp_footer();
break;

case "easytionmake":
global $HTTP_POST_VARS;
$easyname = $HTTP_POST_VARS['easyname'];
$weight = $HTTP_POST_VARS['weight'];
$isactive = $HTTP_POST_VARS['isactive'];
easytionmake( $easyname, $weight, $isactive );
break;

case "easytiondelete":
global $HTTP_POST_VARS;
if (isset($HTTP_POST_VARS['easyid'])) $easyid=$HTTP_POST_VARS['easyid'];
if (isset($HTTP_POST_VARS['ok'])) $ok=$HTTP_POST_VARS['ok'];

easytiondelete( $easyid, $ok );
break;

case "easytionchange":
global $HTTP_POST_VARS;
$easyid = $HTTP_POST_VARS['easyid'];
$url_title = $HTTP_POST_VARS['url_title'];
$text = $HTTP_POST_VARS['text'];
$weight = $HTTP_POST_VARS['weight'];
$isactive = $HTTP_POST_VARS['isactive'];
$easyname = $HTTP_POST_VARS['easyname'];
easytionchange( $easyid, $easyname, $text, $weight, $isactive );
break;

case "easyarticleadd":
global $HTTP_POST_VARS;
$easyid = $HTTP_POST_VARS['easyid'];
$url_title = $HTTP_POST_VARS['url_title'];
$title = $HTTP_POST_VARS['title'];
$text = $HTTP_POST_VARS['text'];
$weight = $HTTP_POST_VARS['weight'];
$isactive = $HTTP_POST_VARS['isactive'];
easyarticleadd( $easyid, $url_title, $title, $text, $weight, $isactive );
break;

case "easyartedit":
global $HTTP_POST_VARS,$HTTP_GET_VARS;
if (isset($HTTP_GET_VARS['artid'])) $artid=$HTTP_GET_VARS['artid'];
if (isset($HTTP_POST_VARS['artid'])) $artid=$HTTP_POST_VARS['artid'];
easyartedit( $artid );
break;

case "easyartchange":
global $HTTP_POST_VARS;
$artid = $HTTP_POST_VARS['artid'];
$easyid = $HTTP_POST_VARS['easyid'];
$url_title = $HTTP_POST_VARS['url_title'];
$title = $HTTP_POST_VARS['title'];
$text = $HTTP_POST_VARS['text'];
$weight = $HTTP_POST_VARS['weight'];
$isactive = $HTTP_POST_VARS['isactive'];
easyartchange( $artid, $easyid, $url_title, $title, $text, $weight, $isactive );
break;

case "easyartdelete":
global $HTTP_POST_VARS;
if (isset($HTTP_POST_VARS['artid'])) $artid=$HTTP_POST_VARS['artid'];
if (isset($HTTP_POST_VARS['ok'])) $ok=$HTTP_POST_VARS['ok'];
easyartdelete( $artid, $ok );
break;

case "upload":
include( "do_upload.php" );
break;

case "easytiontext":
global $HTTP_POST_VARS,$HTTP_GET_VARS;
if (isset($HTTP_GET_VARS['easyid'])) $easyid=$HTTP_GET_VARS['easyid'];
if (isset($HTTP_POST_VARS['easyid'])) $easyid=$HTTP_POST_VARS['easyid'];
easytiontext( $easyid );
break;
} 

?>
