<?php
function b_easyweb_show( $options )
{
	global $xoopsDB, $xoopsConfig;
	$block = array();
	$block['title'] = _EASYWEB_TITLE;
	$block['content'] = ""; 	
  $sublinks = array();	

  $result1 = $xoopsDB->query("select easyid,easyname,content from ".$xoopsDB->prefix("easyweb")." WHERE isactive=1 ORDER BY weight ASC");
	while ( list($easyid,$easyname,$text_x203)  = $xoopsDB->fetchRow($result1) ) {


  if ( !$text_x203 )
  {
  $block['content'] .= "<a class=\"menuMain\"><b>$easyname</b></a>";
  }
  else
  {
  $block['content'] .= "<a class=\"menuMain\" href=\"".$xoopsConfig['xoops_url'] . "/modules/page/?easyid=$easyid\">$easyname</a>";
  }


   	
	$result2 = $xoopsDB->query("select artid,url_title from ".$xoopsDB->prefix("eascont")." WHERE isactive=1 AND easyid=$easyid ORDER BY weight ASC"); 	
  while ( list($artid,$url_title)  = $xoopsDB->fetchRow($result2) )
  {   	
  $block['content'] .= "<a class=\"menuSub\" href=\"" . $xoopsConfig['xoops_url'] . "/modules/page/?artid=$artid\"><LI>$url_title</LI></a>\n";
  }
  
  }
return $block;
}
?>
