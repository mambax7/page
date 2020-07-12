<?php
include( "admin_header.php" );

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<LINK rel="stylesheet" type="text/css" href="style/dialog.css">
<head>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
<!--
var chars = ["!","&quot;","#","$","%","&","'","(",")","*","+","-",".","/","0","1","2","3","4","5","6","7","8","9",":",";","&lt;","=","&gt;","?","@","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","[","]","^","_","`","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","{","|","}","~","&euro;","ƒ","„","…","†","‡","ˆ","\‰","Š","‹","Œ","&lsquo;","&rsquo;","&rsquo;","&ldquo;","&rdquo;","•","&ndash;","&mdash;","˜","™","š","›","œ","Ÿ","&iexcl;","&cent;","&pound;","&pound;","&curren;","&yen;","&brvbar;","&sect;","&uml;","&copy;","&ordf;","&laquo;","&not;","­","&reg;","&macr;","&deg;","&plusmn;","&sup2;","&sup3;","&acute;","&micro;","&para;","&middot;","&cedil;","&sup1;","&ordm;","&raquo;","&frac14;","&frac12;","&frac34;","&iquest;","&Agrave;","&Aacute;","&Acirc;","&Atilde;","&Auml;","&Aring;","&AElig;","&Ccedil;","&Egrave;","&Eacute;","&Ecirc;","&Euml;","&Igrave;","&Iacute;","&Icirc;","&Iuml;","&ETH;","&Ntilde;","&Ograve;","&Oacute;","&Ocirc;","&Otilde;","&Ouml;","&times;","&Oslash;","&Ugrave;","&Uacute;","&Ucirc;","&Uuml;","&Yacute;","&THORN;","&szlig;","&agrave;","&aacute;","&acirc;","&atilde;","&auml;","&aring;","&aelig;","&ccedil;","&egrave;","&eacute;","&ecirc;","&euml;","&igrave;","&iacute;","&icirc;","&iuml;","&eth;","&ntilde;","&ograve;","&oacute;","&ocirc;","&otilde;","&ouml;","&divide;","&oslash;","&ugrave;","&uacute;","&ucirc;","&uuml;","&uuml;","&yacute;","&thorn;","&yuml;"]

function tab(w,h) {
        var strtab = ["<TABLE border='1' cellspacing='0' cellpadding='0' align='center' bordercolor='#dcdcdc' bgcolor='#C0C0C0'>"]
        var k = 0;
        for(var i = 0; i < w; i++) {
                strtab[strtab.length] = "<TR>";
                for(var j = 0; j < h; j++) {
                        strtab[strtab.length] = "<TD width='14' align='center' onClick='getchar(this)' onMouseOver='hover(this,true)' onMouseOut='hover(this,false)'>"+(chars[k]||'')+"</TD>";
                        k++;
                }
                strtab[strtab.length]="</TR>";
        }
        strtab[strtab.length] = "</TABLE>";
        return strtab.join("\n");
}

function hover(obj,val) {
        if (!obj.innerHTML) {
                obj.style.cursor = "default";
                return;
        }
        obj.style.border = val ? "1px solid black" : "1px solid #dcdcdc";
        //obj.style.backgroundColor = val ? "black" : "#C0C0C0"
        //obj.style.color = val ? "white" : "black";
}
function getchar(obj) {
        if(!obj.innerHTML) return;
        window.returnValue = obj.innerHTML || "";
        window.close();
}
function cancel() {
        window.returnValue = null;
        window.close();
}
//-->
<?php
echo"</SCRIPT>\n";
echo"<title>Insert Character</title>\n";
echo"</head>\n";
echo"<body>\n";
echo"<table class=\"dlg\" cellpadding=\"0\" cellspacing=\"2\" width=\"100%\" height=\"100%\">\n";
echo"<tr><td><table width=\"100%\"><tr><td nowrap>Choose Character</td><td valign=\"middle\" width=\"100%\"><hr width=\"100%\"></td></tr></table></td></tr>\n";
echo"<tr>\n";
echo"<td>\n";
echo"<table border=\"0\" align=\"center\" cellpadding=\"5\">\n";
echo"<tr valign=\"top\">\n";
echo"<td>\n";
echo"<SCRIPT LANGUAGE=\"JavaScript\" TYPE=\"text/javascript\">\n";
echo"<!--\n";
echo"document.write(tab(7,32))\n";
echo"//-->\n";
echo"</SCRIPT>\n";
echo"</td>\n";
echo"</tr>\n";
echo"</table>\n";
echo"</td>\n";
echo"</tr>\n";
echo"<tr><td><table width=\"100%\"><tr><td valign=\"middle\" width=\"90%\"><hr width=\"100%\"></td></tr></table></td></tr>\n";
echo"<tr><td align=\"right\">\n";
echo"<input type=\"button\" value=\"Close\" onclick=\"cancel()\"></td></tr>\n";
echo"</table>\n";
echo"</body>\n";
echo"</html>\n";
?>
