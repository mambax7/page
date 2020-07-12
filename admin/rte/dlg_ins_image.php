<?php
include( "admin_header.php" );

?>

<html>

        <head>
                <meta http-equiv="content-type" content="text/html;charset=iso-8859-1">
                <meta name="generator" content="Dev-PHP 1.9.3">
                <meta name="vs_targetSchema" content="HTML 4.0">
                <script language="JavaScript"><!--
function attr(name, value) {
        if (!value || value == "") return "";
        return ' ' + name + '="' + value + '"';
}
function insertImage() {
        window.returnValue = '<IMG' + attr("alt", alt.value) + attr("src", url.value)
                                                        + attr("align", align[align.selectedIndex].value)
                                                        + ((width.value)?attr("width", width.value):"")
                                                        + ((height.value)?attr("height", height.value):"")
                                                        + ((vspace.value)?attr("vspace", vspace.value):"")
                                                        + ((hspace.value)?attr("hspace", hspace.value):"")
                                                        + ((border.value)?attr("border", border.value):attr("border",0))
                                                        + '/>';
        window.close();
}
function cancel() {
        window.returnValue = null;
        window.close();
}


function setDefaults() {
   if (dialogArguments.RichEditor.selectedImage != null) {
      image = dialogArguments.RichEditor.selectedImage;
      editmode = true;
      fm = document.forms[0];
      if (image.src)
                   url.value = image.src
          if  (image.alt)
                   alt.value = image.alt
          if (image.width)
         width.value = image.width
      if (image.height)
         height.value = image.height
      if (image.vspace)
         vspace.value = image.vspace
      if (image.hspace)
         hspace.value = image.hspace
      if (image.border)
         border.value = image.border
      if (image.align) {
         for (var i = 0; i < align.options.length; i++) {
            if (align.options[i].value == image.align) {
               align.options[i].selected = true;
               break;
            }
         }
      }
   }
}

function updateImage() {
   image.width = width.value;
   image.height = height.value;
   image.vspace = vspace.value;
   image.hspace = hspace.value;
   image.border = border.value;
   image.align = align.options[ align.selectedIndex ].value;
   window.returnValue = null
   window.close();
}

var image = null     // selected image if there is one

// we need to set
var editmode = false // are we editing an image?
if (dialogArguments.RichEditor.selectedImage != null) {
   editmode = true;
   document.write("<title>Edit Image</title>");
} else {
   document.write("<title>Insert Image</title>");

}
// -->
                </script>
                <LINK rel="stylesheet" type="text/css" href="style/dialog.css">
        </head>

        <body topmargin="0" leftmargin="0" style="border: 0; margin: 0;" scroll="no" onload="setDefaults()">
                <table class="dlg" cellpadding="0" cellspacing="2" width="100%" height="100%">
                        <tr>
                                <td colspan="5">
                                        <table width="100%">
                                                <tr>
                                                        <td nowrap>Picture Info&nbsp;</td>
                                                        <td valign="middle" width="100%">
                                                                <hr width="100%">
                                                        </td>
                                                </tr>
                                        </table>
                                </td>
                                <td></td>
                        </tr>
                        <tr>
                                <td width="10">&nbsp;</td>
                                <td width="70">Url:</td>
                                <td valign="middle" colspan="3"><input type="text" name="url" value="images/em.icon.smile.gif" size="60"></td>
                                <td></td>
                        </tr>
                        <tr height="10">
                                <td height="10" width="10">&nbsp;</td>
                                <td width="70" height="10">Alt Text:</td>
                                <td valign="middle" height="10"><input type="text" name="alt" size="25"></td>
                                <td width="70" height="10">Align:</td>
                                <td valign="middle" height="10"><select name="align" size="1">
                                                <option value="left">Left
                                                <option value="absBottom">Abs Bottom
                                                <option value="absMiddle">Abs Middle
                                                <option value="baseline">Baseline
                                                <option value="bottom">Bottom
                                                <option value="middle">Middle
                                                <option value="right">Right
                                                <option value="textTop">Text Top
                                                <option value="top">Top
                                        </select></td>
                                <td height="10"></td>
                        </tr>
                        <tr>
                                <td width="10">&nbsp;</td>
                                <td colspan="4" align="center" valign="top">
                                        <table width="300" border="0" align="left">
                                                <tr>
                                                        <td width="70">Border:</td>
                                                        <td><input type="text" name="border" value="0" size="2"></td>
                                                        <td width="70">Width:</td>
                                                        <td valign="middle"><input type="text" name="width" size="3"></td>
                                                        <td width="70">Height:</td>
                                                        <td valign="middle"><input type="text" name="height" size="3"></td>
                                                        <td width="70">Vspace:</td>
                                                        <td valign="middle"><input type="text" name="vspace" value="0" size="2"></td>
                                                        <td width="70">Hspace:</td>
                                                        <td valign="middle"><input type="text" name="hspace" value="0" size="2"></td>
                                                </tr>
                                        </table>
                                </td>
                                <td></td>
                        </tr>
                        <tr></tr>
                                <td width="10"></td>
                                <td width="70"></td>
                                <td colspan="3" align="left" valign="top"></td>
                                <td></td>
                        </tr>

                        <tr>
                                <td width="10">&nbsp;</td>
                                <td width="70">&nbsp;</td>
<td colspan="4" align="right">

<script language="JavaScript"><!--
if (editmode) {
   document.write("<input class=\"button\" type=\"button\" value=\"Update\" title=\"Update Image\" onclick=\"updateImage()\">");
} else {
   document.write("<input class=\"button\" type=\"button\" value=\"Insert\" title=\"Insert Image\" onclick=\"insertImage()\">");
}
// -->
</script>
<input class="button" type="button" value="Cancel" title="Cancel Dialog" onclick="cancel()"></td>
</tr>
                </table>
        </body>

</html>
