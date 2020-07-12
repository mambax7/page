<?php
include( "admin_header.php" );
$picdir                                                           = "../../cache/pics/";
$thumbdir                                                         = "../../cache/x_thumbs_x/";
$size                                                             = 500000;
$nameaddon                                                        = "";
 $gdversion = 1;
function imgresize( $sourcefile, $extension, $newx, $newy )
{
	global $extension;
	global $quality;
	gdcheck( &$chk );
	if ( $extension == jpe || $extension == jpg || $extension == jpeg )
	{
		if ( function_exists( imagejpeg ) && $chk[1] == 1 )
		{
			$imgptr    = imagecreatefromjpeg("$sourcefile");
			 if ( $imgptr )
			{
				imggetsize( $imgptr, &$x, &$y );
				imgnewsize( $x, $y, &$newx, &$newy );
				if ( function_exists( imagecreatetruecolor ) && $gdversion == 2 )
				{
					$destptr = imagecreatetruecolor($newx, $newy);
					 } 
				else
				{
					$destptr = imagecreate($newx, $newy);
					 } 
				imagecopyresized( $destptr, $imgptr, 0, 0, 0, 0, $newx, $newy, $x, $y );
				imagejpeg( $destptr, $sourcefile, $quality );
				imagedestroy( $imgptr );
				imagedestroy( $destptr );
			} 
			else
			{
				echo"<script language=\"JavaScript\">";
				echo"function mess53_1() {";
				echo" alert(' " . _MD_53 . " $sourcefile. ')";
				echo"}";
				echo"mess53_1();";
				echo"window.close();";
				echo"</script>";
			} 
		} 
		else
		{
			echo"<script language=\"JavaScript\">";
			echo"function mess54() {";
			echo" alert(' " . _MD_54 . " ')";
			echo"}";
			echo"mess54();";
			echo"window.close();";
			echo"</script>";
		} 
	} 
	else
	{
		if ( $extension == png )
		{
			if ( function_exists( imagepng ) && $chk[2] == 1 )
			{
				$imgptr   = imagecreatefrompng("$sourcefile");
				 if ( $imgptr )
				{
					imggetsize( $imgptr, &$x, &$y );
					imgnewsize( $x, $y, &$newx, &$newy );
					if ( function_exists( imagecreatetruecolor ) && $gdversion == 2 )
					{
						$destptr = imagecreatetruecolor($newx, $newy);
						 } 
					else
					{
						$destptr = imagecreate($newx, $newy);
						 } 
					imagecopyresized( $destptr, $imgptr, 0, 0, 0, 0, $newx, $newy, $x, $y );
					imagepng( $destptr, $sourcefile, $quality );
					imagedestroy( $imgptr );
					imagedestroy( $destptr );
				} 
				else
				{
					echo"<script language=\"JavaScript\">";
					echo"function mess53_2() {";
					echo" alert(' " . _MD_53 . " $sourcefile. ')";
					echo"}";
					echo"mess53()_2;";
					echo"window.close();";
					echo"</script>";
				} 
			} 
			else
			{
				echo"<script language=\"JavaScript\">";
				echo"function mess55() {";
				echo" alert(' " . _MD_55 . "')";
				echo"}";
				echo"mess55();";
				echo"window.close();";
				echo"</script>";
			} 
		} 
		else
		{
			if ( $extension == gif )
			{
				if ( function_exists( imagegif ) && $chk[3] == 1 )
				{
					$imgptr  = imagecreatefromgif("$sourcefile");
					 if ( $imgptr )
					{
						imggetsize( $imgptr, &$x, &$y );
						imgnewsize( $x, $y, &$newx, &$newy );
						if ( function_exists( imagecreatetruecolor ) && $gdversion == 2 )
						{
							$destptr = imagecreatetruecolor($newx, $newy);
							 } 
						else
						{
							$destptr = imagecreate($newx, $newy);
							 } 
						imagecopyresized( $destptr, $imgptr, 0, 0, 0, 0, $newx, $newy, $x, $y );
						imagegif( $destptr, $sourcefile, $quality );
						imagedestroy( $imgptr );
						imagedestroy( $destptr );
					} 
					else
					{
						echo"<script language=\"JavaScript\">";
						echo"function mess53_3() {";
						echo" alert(' " . _MD_53 . " $sourcefile. ')";
						echo"}";
						echo"mess53_3();";
						echo"window.close();";
						echo"</script>";
					} 
				} 
				else
				{
					echo"<script language=\"JavaScript\">";
					echo"function mess56() {";
					echo" alert(' " . _MD_56 . "')";
					echo"}";
					echo"mess56();";
					echo"window.close();";
					echo"</script>";
				} 
			} 
			else
			{
				echo"<script language=\"JavaScript\">";
				echo"function mess57() {";
				echo" alert(' " . _MD_57 . "')";
				echo"}";
				echo"mess57();";
				echo"window.close();";
				echo"</script>";
			} 
		} 
	} 
} 

function imggetsize( $imgptr, $x, $y )
{
	$x  = imagesx($imgptr);
	$y  = imagesy($imgptr);
	 } 

function imgnewsize( $x, $y, $newx, $newy )
{
	global $resizemode;
	if ( $resizemode == 1 )
	{
		if ( $x > $y )
		{
			$verh = $x / $y;
			$newy = $newx / $verh;
			 } 
		else
		{
			$verh = $y / $x;
			$newy = $newx * $verh;
			 } 
	} elseif ( $resizemode == 2 )
	{
		if ( $x > $y )
		{
			$verh = $x / $y;
			$newx = $newy * $verh;
			 } 
		else
		{
			$verh = $y / $x;
			$newx = $newy / $verh;
			 } 
	} 
} 

function gdcheck( $chk )
{
	global $gdversion;
	if ( extension_loaded( "gd" ) )
	{
		$chk[0]                    = 1;
		 if ( ImageTypes() &IMG_JPG )
		{
			$chk[1] = 1;
			$itypes = "*.jpe, *.jgeg, *.jpg";
			 } 
		else
		{
			$chk[1] = 0;
			 } 
		if ( ImageTypes() &IMG_PNG )
		{
			$chk[2]             = 1;
			 $itypes .= ", *.png";
		} 
		else
		{
			$chk[2] = 0;
			 } 
		if ( ImageTypes() &IMG_GIF )
		{
			$chk[3]             = 1;
			 $itypes .= ", *.gif";
		} 
		else
		{
			$chk[3]                                                                                                      = 1;
			 } 
		if ( function_exists( imagecreatetruecolor ) && $gdversion == 2 )
		{
			$chk[4] = 1;
			 } 
		else
		{
			$chk[4] = 0;
			 } 
	} 
	else
	{
		$chk[0] = 0;
		$chk[1] = 0;
		$chk[2] = 0;
		$chk[3] = 0;
		$chk[4] = 0;
		 } 
	return( $itypes );
} 

echo"<html>";
echo"<head>";
echo"<meta name=vs_targetSchema content=\"HTML 4.0\">";
echo"<meta name=\"GENERATOR\" content=\"Microsoft Visual Studio 7.0\">";
echo"<meta name=\"expires\" content=\"15 September 2015\">";
echo"<meta http-equiv=\"Cache-Control\" content=\"no-cache\">";
echo"<meta http-equiv=\"expires\" content=\"0\">";
echo"<meta http-equiv=\"Pragma\" content=\"no-cache\">";
echo"<LINK rel=\"stylesheet\" type=\"text/css\" href=\"style/dialog.css\">";
echo"<title>" . _MD_UPLOAD . "</title>";
echo"<script language=\"JavaScript\">";
echo"function attr(name, value) {";
echo"        if (!value || value == \"\") return \"\";";
echo"        return ' ' + name + '=\"' + value + '\"';";
echo"}";
echo"function insert() {";
echo"      var img = window.event.srcElement;";
echo"      if (img) {";
echo"                      var src = img.src.replace(/^[a-z]*:[/][/][^/]*/, \"\");";
echo"                      var src = img.src.replace(\"x_thumbs_x\", \"pics\");";
echo"                      window.returnValue = '<IMG border=\"0\" align=\"absmiddle\" src=\"' + src + '\">';";
echo"                      window.close();";
echo"      }";
echo" }";

echo"function cancel() {";
echo"        window.returnValue = null;";
echo"        window.close();";
echo"}";
echo"</script>";
echo"</head>";
echo"<body topmargin=\"5\" leftmargin=\"5\" style=\"border: 0; margin: 0;\" scroll=\"no\">";
echo"<table class=\"dlg\" cellpadding=\"0\" cellspacing=\"2\" width=\"100%\" height=\"100%\">";
echo"<tr>";
echo"<td>";
$itypes        = gdcheck(&$chk);
 if ( !$itypes )
{
	$scriptaction  = "info";
	 } 
if ( $scriptaction == "modulinfo" )
{
	phpinfo( 8 );
	$scriptaction  = "info";
	 } 
if ( $gdversion == 0 )
{
	$scriptaction  = "info";
	 } 
$servermaxsize                             = get_cfg_var("upload_max_filesize");
 if ( !isset( $thumbdir ) || $thumbdir == "" )
{
	$thumbdir  = "$picdir";
	 } 
$tempfile                 = "$picdir"."upl_file.tmp.";
$tempthumb                = "$thumbdir"."upl_file.tmp"."$nameaddon".".";
 if ( $scriptaction == "" )
{
	echo"<font class=\"scriptmainfont\">";
	echo"<form method=\"POST\" action=\"$PHP_SELF\" enctype=\"multipart/form-data\">";
	echo"</font>";
	echo"<p><font class=\"scriptmainfont\">";
	echo"<fieldset>";
	echo"<legend><b>" . _MD_CONNOTN . "</b></legend><br>";
	echo"&nbsp;&nbsp;<select name=\"quality\" size=\"1\">";
	echo"<option value=\"100\">100%";
	echo"<option value=\"98\">98%";
	echo"<option value=\"96\">96%";
	echo"<option value=\"94\">94%";
	echo"<option value=\"92\">92%";
	echo"<option value=\"90\">90%";
	echo"<option value=\"88\">88%";
	echo"<option value=\"86\">86%";
	echo"<option value=\"84\">84%";
	echo"<option value=\"82\">82%";
	echo"<option value=\"80\">80%";
	echo"<option value=\"78\">78%";
	echo"<option value=\"76\">76%";
	echo"<option value=\"74\">74%";
	echo"<option value=\"72\">72%";
	echo"<option value=\"70\">70%";
	echo"<option value=\"68\">68%";
	echo"<option value=\"66\">66%";
	echo"<option value=\"64\">64%";
	echo"<option value=\"62\">62%";
	echo"<option value=\"60\" selected>60%";
	echo"<option value=\"58\">58%";
	echo"<option value=\"56\">56%";
	echo"<option value=\"54\">54%";
	echo"<option value=\"52\">52%";
	echo"<option value=\"50\">50%";
	echo"<option value=\"48\">48%";
	echo"<option value=\"46\">46%";
	echo"<option value=\"44\">44%";
	echo"<option value=\"42\">42%";
	echo"<option value=\"40\">40%";
	echo"<option value=\"38\">38%";
	echo"<option value=\"36\">36%";
	echo"<option value=\"34\">34%";
	echo"<option value=\"32\">32%";
	echo"<option value=\"30\">30%";
	echo"<option value=\"28\">28%";
	echo"<option value=\"26\">26%";
	echo"<option value=\"24\">24%";
	echo"<option value=\"22\">22%";
	echo"<option value=\"20\">20%";
	echo"<option value=\"18\">18%";
	echo"<option value=\"16\">16%";
	echo"<option value=\"14\">14%";
	echo"<option value=\"12\">12%";
	echo"<option value=\"10\">10%";
	echo"</select> <b>" . _MD_IMAGEQ . "</b><font class=\"scriptsmallfont\">(" . _MD_23 . " $itypes)</font><br><br><hr>";
	echo"&nbsp;&nbsp;<b>" . _MD_RESIZEMODE . "</b>";
	echo"<p>&nbsp;&nbsp;<input type=\"radio\" value=\"1\" name=\"resize\" checked> " . _MD_THUMB . "<br>";
	echo"&nbsp;&nbsp;<input type=\"radio\" value=\"2\" name=\"resize\"> " . _MD_THUMANDORG . "<br>";
	echo"<hr>";
	echo"&nbsp;&nbsp;<input type=\"radio\" value=\"1\" name=\"resizemode\" checked> " . _MD_WITDTHCH . "<br>";
	echo"&nbsp;&nbsp;<input type=\"radio\" value=\"2\" name=\"resizemode\"> " . _MD_HEIGHTCH . "<br>";
	echo"&nbsp;&nbsp;<input type=\"radio\" value=\"3\" name=\"resizemode\"> " . _MD_WITDTHCH . " <b>+</b> " . _MD_HEIGHTCH . "<br><hr><br>";
	echo"&nbsp;&nbsp;" . _MD_HEIGHTCH . " <input type=\"text\" value=\"100\" name=\"thumbheight\" size=\"4\" maxlength=\"4\">  " . _MD_WITDTHCH . " <input type=\"text\" value=\"100\" name=\"thumbwidth\" size=\"4\" maxlength=\"4\"> " . _MD_THUMB . "<br><br>";
	echo"&nbsp;&nbsp;" . _MD_HEIGHTCH . " <input type=\"text\" value=\"468\" name=\"picheight\" size=\"4\" maxlength=\"4\">  " . _MD_WITDTHCH . " <input type=\"text\" value=\"468\" name=\"picwidth\" size=\"4\" maxlength=\"4\"> " . _MD_ORGGRA . "<br><br>";
	echo"</fieldset></font></p><p><font class=\"scriptmainfont\">";
	echo"<fieldset>";
	echo"<legend><font class=\"scriptmainfont\"><b>" . _MD_0 . "</b></font></legend><br>";
	echo"<font class=\"scriptmainfont\">&nbsp;&nbsp;<input type=\"file\" name=\"uplfile\" size=\"25\"><br><br>";
	echo"&nbsp;&nbsp;<input type=\"text\" name=\"newname\" size=\"20\"> <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"$size\"> <input type=\"hidden\" name=\"scriptaction\" value=\"upload\"> " . _MD_2 . " </font><font class=\"scriptsmallfont\">(" . _MD_3 . " !!!)<br><br>";
	echo"&nbsp;&nbsp;<button name=\"upload\" type=\"submit\">" . _MD_UPLOAD . "</button></font><br><br></fieldset></font></p>";
	echo"<p><font class=\"scriptsmallfont\"></form></font>";
} 
else
{
	if ( $scriptaction == "upload" )
	{
		if ( $uplfile_name != "" )
		{
			$f_name                                                                                                                                                     = explode(".",$uplfile_name);
			$filename                                                                                                                                                   = "$f_name[0]";
			$extension                                                                                                                                                  = strtolower($f_name[1]);
			 if ( ( $extension == jpe || $extension == jpg || $extension == jpeg ) && $chk[1] == 1 || $extension == png && $chk[2] == 1 || $extension == gif && $chk[3] == 1 )
			{
				if ( ( $extension == jpe || $extension == jpg || $extension == jpeg ) )
				{
					$extension = "jpg";
					 } 
				if ( $newname != "" )
				{
					$filename = "$newname";
					 } 
				if ( $uplfile_size < $size )
				{
					$original                = "$picdir$filename"."."."$extension";
					$thumbnail               = "$thumbdir$filename$nameaddon"."."."$extension";
					 if ( !file_exists( $original ) )
					{
						copy( $uplfile, "$original" );
						copy( $uplfile, "$thumbnail" );
						imgresize( "$thumbnail", $extension, $thumbwidth, $thumbheight );
						if ( $resize == 2 )
						{
							imgresize( "$original", $extension, $picwidth, $picheight );
						} 
						echo"<script language=\"JavaScript\">";
						echo"window.close();";
						echo"</script>";
					} 
					else
					{
						echo"<script language=\"JavaScript\">";
						echo"function mess() {";
						echo" alert(' " . _MD_ERROR1_1 . " \"$filename.$extension\" " . _MD_ERROR1_2 . "')";
						echo"}";
						echo"mess();";
						echo"window.close();";
						echo"</script>";
					} 
				} 
				else
				{
					echo"<script language=\"JavaScript\">";
					echo"function mess2() {";
					echo" alert(' " . _MD_ERROR2_1 . "$file_size" . _MD_ERROR2_2 . "$size" . _MD_ERROR2_3 . "')";
					echo"}";
					echo"mess2();";
					echo"window.close();";
					echo"</script>";
				} 
			} 
			else
			{
				echo"<script language=\"JavaScript\">";
				echo"function mess3() {";
				echo" alert(' " . _MD_ERROR3 . " ')";
				echo"}";
				echo"mess3();";
				echo"window.close();";
				echo"</script>";
			} 
		} 
		else
		{
			echo"<script language=\"JavaScript\">";
			echo"function mess4() {";
			echo" alert(' " . _MD_ERROR4 . " ')";
			echo"}";
			echo"mess4();";
			echo"window.close();";
			echo"</script>";
		} 
	} 
	else
	{
	} 
	if ( $scriptaction == "overwrite" )
	{
		$f_name                                                            = explode(".",$uplfile_name);
		$filename                                                          = "$f_name[0]";
		$extension                                                         = strtolower($f_name[1]);
		 if ( ( $extension == jpe || $extension == jpg || $extension == jpeg ) )
		{
			$extension = "jpg";
			 } 
		if ( $new_name != "" )
		{
			$filename = "$new_name";
			 } 
		$original               = "$picdir$filename"."."."$extension";
		$thumbnail              = "$thumbdir$filename$nameaddon"."."."$extension";
		
		$tempfile .= $extension;
		$tempthumb .= $extension;

		copy( $tempfile, "$original" );

		if ( file_exists( $tempfile ) )
		{
			unlink( $tempfile );
		} 
		copy( $tempthumb, "$thumbnail" );
		if ( file_exists( $tempthumb ) )
		{
			unlink( $tempthumb );
		} 
		imgresize( "$thumbnail", $extension, $thumbwidth, $thumbheight );
		if ( $resize == 2 )
		{
			imgresize( "$original", $extension, $picwidth, $picheight );
		} 
		echo"<script language=\"JavaScript\">";
		echo"function mess5() {";
		echo" alert(' " . _MD_ERROR5_1 . " \"$filename.$extension\" " . _MD_ERROR5_2 . "')";
		echo"}";
		echo"mess5();";
		echo"window.close();";
		echo"</script>";
	} 
	if ( $scriptaction == "rename" )
	{
		if ( $newname != "" )
		{
			$f_name                                                           = explode(".",$uplfile_name);
			$filename                                                         = "$f_name[0]";
			$extension                                                        = strtolower($f_name[1]);
			
			if ( ( $extension == jpe || $extension == jpg || $extension == jpeg ) )
			{
				$extension = "jpg";
				 } 
			$tempfile .= $extension;
			$tempthumb .= $extension;
			if ( $newname != "" )
			{
				$filename = "$newname";
				 } 
			$original                  = "$picdir$filename"."."."$extension";
			$thumbnail                 = "$thumbdir$filename$nameaddon"."."."$extension";
			 if ( !file_exists( $original ) )
			{
				rename( $tempfile, $original );
				rename( $tempthumb, $thumbnail );
				imgresize( "$thumbnail", $extension, $thumbwidth, $thumbheight );
				if ( $resize == 2 )
				{
					imgresize( "$original", $extension, $picwidth, $picheight );
				} 
				echo"<script language=\"JavaScript\">";
				echo"function mess6() {";
				echo" alert(' " . _MD_ERROR6_1 . " \"$uplfile_name\" " . _MD_ERROR6_2 . " \"$filename.$extension\".')";
				echo"}";
				echo"mess6();";
				echo"window.close();";
				echo"</script>";
			} 
			else
			{
				echo"<script language=\"JavaScript\">";
				echo"function mess7() {";
				echo" alert(' " . _MD_ERROR1_1 . " \"$filename.$extension\" " . _MD_ERROR1_2 . "')";
				echo"}";
				echo"mess7();";
				echo"window.close();";
				echo"</script>";
			} 
		} 
		else
		{
			$f_name                                                           = explode(".",$uplfile_name);
			$filename                                                         = "$f_name[0]";
			$extension                                                        = strtolower($f_name[1]);
			 if ( ( $extension == jpe || $extension == jpg || $extension == jpeg ) )
			{
				$extension = "jpg";
				 } 
			echo"<script language=\"JavaScript\">";
			echo"function mess8() {";
			echo" alert(' " . _MD_ERROR8 . " ')";
			echo"}";
			echo"mess8();";
			echo"window.close();";
			echo"</script>";
		} 
	} 
	if ( $scriptaction == "leave" )
	{
		$f_name                                                            = explode(".",$uplfile_name);
		$filename                                                          = "$f_name[0]";
		$extension                                                         = strtolower($f_name[1]);
		 if ( ( $extension == jpe || $extension == jpg || $extension == jpeg ) )
		{
			$extension = "jpg";
			 } 
		$tempfile .= $extension;
		$tempthumb .= $extension;
		if ( file_exists( $tempfile ) )
		{
			unlink( $tempfile );
		} 
		if ( file_exists( $tempthumb ) )
		{
			unlink( $tempthumb );
		} 
		echo"<script language=\"JavaScript\">";
		echo"function mess9() {";
		echo" alert(' " . _MD_ERROR9 . " ')";
		echo"}";
		echo"mess9();";
		echo"window.close();";
		echo"</script>";
	} 
} 
echo"</td>";
echo"</tr>";
echo"<tr><td align=\"right\"><input type=\"button\" value=\"" . _MD_CLOSE . "\" onclick=\"cancel()\"></td></tr>";
echo"</table>";
echo"</html>";

?>
