<?php
include( "admin_header.php" );

?>
<html>
<head>
<meta name=vs_targetSchema content="HTML 4.0">
<meta name="GENERATOR" content="Dev-PHP 1.9.3">
<meta name="expires" content="15 September 2015">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="expires" content="0">
<meta http-equiv="Pragma" content="no-cache">
<LINK rel="stylesheet" type="text/css" href="style/dialog.css">
<title>Gallery</title>
<script language="JavaScript">
function attr(name, value) {
        if (!value || value == "") return "";
        return ' ' + name + '="' + value + '"';
}
function insert() {
        var img = window.event.srcElement;
        if (img) {
                        var src = img.src.replace(/^[a-z]*:[/][/][^/]*/, "");
                        var src = img.src.replace("x_thumbs_x", "pics");
                        window.returnValue = '<IMG border="0" align="absmiddle" src="' + src + '">';
                        window.close();
        }
}
function cancel() {
        window.returnValue = null;
        window.close();
}





</script>
</head>

<body topmargin="0" leftmargin="0" style="border: 0; margin: 0;" scroll="yes">
<table class="dlg" cellpadding="0" cellspacing="2" width="100%" height="100%">
<tr><td><table width="100%"><tr><td nowrap>Choose Images</td><td valign="middle" width="100%"><hr width="100%"></td></tr></table></td></tr>
<tr>
<td>
<?php
switch ( $op )
{
	default:
		$mappe                                     = "../cache/x_thumbs_x/";
		$columns                                   = 5;
		 echo"<table border='0' width='100%'><tr>";
		$i                                   =0;
		$handle                              =opendir("../$mappe");
		while (false!==($file                = readdir($handle))) {
		 if ( $file != "." && $file != ".." )
		{
			print "<td>";
			echo"<table border='0' cellpadding='0' cellspacing='0' width='100%'><tr><td align=\"center\" valign=\"middle\">";
			echo"<b><kbd>$file</kbd></b><br /><img border=\"1\" hspace=\"2\" src=\"../$mappe$file\" onclick=\"insert()\">";
			echo"</td></tr>";
			echo "<form method='post' onclick=\"cancel()\">\n";
			echo"<td align=\"center\" valign=\"middle\">";
			echo "<input type=\"submit\" name=\"submit\" value=\"" . _MD_DELETE . "\"> \n";
			echo "<input type='hidden' name='op' value='deleteimage'>";
			$mappe1                                                                                                   = "cache/x_thumbs_x/";
			$mappe2                                                                                                   = "cache/pics/";
			 echo "<input type='hidden' name='deleteimage1' value='" . XOOPS_ROOT_PATH . "/modules/page/$mappe1$file'>";
			echo "<input type='hidden' name='deleteimage2' value='" . XOOPS_ROOT_PATH . "/modules/page/$mappe2$file'>";
			echo "<input type='hidden' name='file' value='$file'>";
			echo"</td>";
			echo "</form>\n";
			echo"</tr><tr></table>";
			++$i;
			if ( $i == $columns )
			{
				print "</tr><tr>";
				$i = 0;
				 } 
		} 
} 
closedir( $handle );
echo"</tr></table>";
break;

case "deleteimage":
global $deleteimage;
if ( file_exists( "$deleteimage1" ) )
{
	unlink( "$deleteimage1" );
} 
if ( file_exists( "$deleteimage2" ) )
{
	unlink( "$deleteimage2" );
} 

if ( file_exists( "$deleteimage1" ) )
{
	echo "<h1>" . _MD_IMGDELERROR . "</h1>";
	exit();
} 
else
{
	echo"<script>";
	echo"window.close();";
	echo"</script>";
	exit();
} 

if ( file_exists( "$deleteimage2" ) )
{
	echo "<h1>" . _MD_IMGDELERROR . "</h1>";
	exit();
} 
else
{
	echo"<script>";
	echo"window.close();";
	echo"</script>";
	exit();
} 

break;
} 

?>
</td>
</tr>
<tr><td><table width="100%"><tr><td valign="middle" width="90%"><hr width="100%"></td></tr></table></td></tr>
<tr><td align="right">
        <input type="button" value="Close" onclick="cancel()"></td></tr>
</table>

</html>
