<?php
 

echo"<HTML>\n";
 echo"<HEAD>\n";
 echo"<TITLE>EasyWeb</TITLE>\n";
 echo"<META content=\"HTML 4.0\" name=vs_targetSchema>\n";
 echo"<META content=\"Easyweb for XooPs\" name=GENERATOR></HEAD>\n";
 echo"<BODY leftMargin=\"0\" topMargin=\"0\" scroll=\"no\" style=\"border:0\">\n";

include( "admin_header.php" );

//Load Editor
function startpage(){
echo"$op";
  global $xoopsDB;
	$result = $xoopsDB->query("select id,content from ".$xoopsDB->prefix("easyweb_startpage")." where id='1'");
	list($id,$content)= $xoopsDB->fetchRow($result);		
	echo"<object id=\"richedit\" style=\"BACKGROUND-COLOR: buttonface\" data=\"rte/richedit.php?npage=no\" width=\"100%\" height=\"100%\" type=\"text/x-scriptlet\" VIEWASTEXT></object>\n";
	echo"<form id=\"theForm\" action=\"startpage.php\" method=\"post\">\n";
	echo"<textarea name=\"text\" style=\"display:none\" rows=\"1\" cols=\"20\">$content</textarea>\n";
	echo"<textarea name=\"xhtml\" style=\"display:none\" rows=\"1\" cols=\"20\"></textarea>\n";
	echo"<input type='hidden' name='op' value='save'>\n";
	echo"<input type='hidden' name='id' value='$id'>\n";
	echo"</form>\n";
	echo"<SCRIPT language=\"JavaScript\" event=\"onload\" for=\"window\">\n";
	echo"richedit.options = \"history=yes;source=yes\";\n";
	echo"richedit.docHtml = theForm.text.innerText;\n";
	echo"</SCRIPT>\n";
	echo"<SCRIPT language=\"JavaScript\" event=\"onscriptletevent(name, eventData)\" for=\"richedit\">\n";
	echo"if (name == \"post\") {\n";
	echo"theForm.text.value = eventData;\n";
	echo"theForm.xhtml.value = richedit.docXHtml;\n";
	echo"theForm.submit();\n";
	echo"}\n";
	echo" </SCRIPT>\n";
} 


//Save Startpage, and take a look if exist.
function save( $id, $text ){
global $id, $xoopsDB, $HTTP_POST_VARS;
	
  $id = $HTTP_POST_VARS['id'];
  $text = $HTTP_POST_VARS['text'];


  if ( !$id ){
	make( $text );
	exit();
	} else {
	$xoopsDB->query( "update " . $xoopsDB->prefix( "easyweb_startpage" ) . " set content='$text' where id='1'" );
	} 
	redirect_header( "/", 2, _MD_DBUPDATED );
	exit();
}


//Create DB table if not exist..
function make( $text ){
global $xoopsDB, $HTTP_POST_VARS;
	$text = $HTTP_POST_VARS['text'];
	$xoopsDB->query( "INSERT INTO " . $xoopsDB->prefix( "easyweb_startpage" ) . " set id='1',content='$text'" );
	redirect_header( "/", 2, _MD_DBUPDATED );
	exit();
} 


 if (isset($HTTP_GET_VARS['op'])) $op=$HTTP_GET_VARS['op'];
 if (isset($HTTP_POST_VARS['op'])) $op=$HTTP_POST_VARS['op'];


switch ( $op )
{
	default: 	
		startpage();
		break;

	case "save":		
		save( $id, $text );
		break;
} 


echo"</BODY>\n";
echo"</HTML>\n";
?>
