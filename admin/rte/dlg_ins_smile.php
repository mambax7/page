<?php
include( "admin_header.php" );

?>

<html>
<head>
<meta name=vs_targetSchema content="HTML 4.0">
<meta name="GENERATOR" content="Dev-PHP 1.9.3">
<LINK rel="stylesheet" type="text/css" href="style/dialog.css">
<title>Insert Smily</title>
<script language="JavaScript">
function attr(name, value) {
        if (!value || value == "") return "";
        return ' ' + name + '="' + value + '"';
}
function insert() {
        var img = window.event.srcElement;
        if (img) {
                        var src = img.src.replace(/^[a-z]*:[/][/][^/]*/, "");
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

<body topmargin="0" leftmargin="0" style="border: 0; margin: 0;" scroll="no">
<table class="dlg" cellpadding="0" cellspacing="2" width="100%" height="100%">
<tr><td><table width="100%"><tr><td nowrap>Choose Smily</td><td valign="middle" width="100%"><hr width="100%"></td></tr></table></td></tr>
<tr>
<td>
    <table border="0" align="center" cellpadding="5">
      <tr valign="top">
        <td>
        <table border="0" align="center">
          <tr>
            <td><img border="0" hspace="10" src="images/em.icon.smile.gif" onclick="insert()" width="15" height="15"></td>
            <td>smile</td>
            <td>[:)]</td>
          </tr>
          <tr>
            <td><img alt border="0" hspace="10" src="images/em.icon.bigsmile.gif" onclick="insert()" width="15" height="15"></td>
            <td>big smile</td>
            <td>[:D]</td>
          </tr>
          <tr>
            <td><img alt border="0" hspace="10" src="images/em.icon.cool.gif" onclick="insert()" width="15" height="15"></td>
            <td>cool</td>
            <td>[8D]</td>
          </tr>
          <tr>
            <td><img alt border="0" hspace="10" src="images/em.icon.blush.gif" onclick="insert()" width="15" height="15"></td>
            <td>blush</td>
            <td>[:I]</td>
          </tr>
          <tr>
            <td><img alt border="0" hspace="10" src="images/em.icon.tongue.gif" onclick="insert()" width="15" height="15"></td>
            <td>tongue</td>
            <td>[:P]</td>
         </tr>
          <tr>
            <td><img alt border="0" hspace="10" src="images/em.icon.evil.gif" onclick="insert()" width="15" height="15"></td>
            <td>evil</td>
            <td>[}:)]</td>
          </tr>
          <tr>
            <td><img alt border="0" hspace="10" src="images/em.icon.wink.gif" onclick="insert()" width="15" height="15"></td>
            <td>wink</td>
            <td>[;)]</td>
          </tr>
          <tr>
            <td><img alt border="0" hspace="10" src="images/em.icon.clown.gif" onclick="insert()" width="15" height="15"></td>
            <td>clown</td>
            <td>[:o)]</td>
          </tr>
          <tr>
            <td><img alt border="0" hspace="10" src="images/em.icon.blackeye.gif" onclick="insert()" width="15" height="15"></td>
            <td>black eye</td>
            <td>[B)]</td>
          </tr>
          <tr>
            <td><img alt border="0" hspace="10" src="images/em.icon.eightball.gif" onclick="insert()" width="15" height="15"></td>
            <td>eightball</td>
            <td>[8]</td>
          </tr>
        </table>
        </td>
        <td>
        <table border="0" align="center">
            <tr>
              <td><img alt border="0" hspace="10" src="images/em.icon.sad.gif" onclick="insert()" width="15" height="15"></td>
              <td>frown</td>
              <td>[:(]</td>
            </tr>
            <tr>
              <td><img alt border="0" hspace="10" src="images/em.icon.shy.gif" onclick="insert()" width="15" height="15"></td>
              <td>shy</td>
              <td>[8)]</td>
            </tr>
            <tr>
              <td><img alt border="0" hspace="10" src="images/em.icon.shocked.gif" onclick="insert()" width="15" height="15"></td>
              <td>shocked</td>
              <td>[:O]</td>
            </tr>
            <tr>
              <td><img alt border="0" hspace="10" src="images/em.icon.angry.gif" onclick="insert()" width="15" height="15"></td>
              <td>angry</td>
              <td>[:(!]</td>
            </tr>
            <tr>
              <td><img alt border="0" hspace="10" src="images/em.icon.dead.gif" onclick="insert()" width="15" height="15"></td>
              <td>dead</td>
              <td>[xx(]</td>
            </tr>
            <tr>
              <td><img alt border="0" hspace="10" src="images/em.icon.sleepy.gif" onclick="insert()" width="15" height="15"></td>
              <td>sleepy</td>
              <td>[|)]</td>
            </tr>
            <tr>
              <td><img alt border="0" hspace="10" src="images/em.icon.kiss.gif" onclick="insert()" width="15" height="15"></td>
              <td>kisses</td>
              <td>[:X]</td>
            </tr>
            <tr>
              <td><img alt border="0" hspace="10" src="images/em.icon.approve.gif" onclick="insert()" width="15" height="15"></td>
              <td>approve</td>
              <td>[^]</td>
           </tr>
            <tr>
              <td><img alt border="0" hspace="10" src="images/em.icon.dissapprove.gif" onclick="insert()" width="15" height="15"></td>
              <td>disapprove</td>
              <td>[V]</td>
           </tr>
          <tr>
            <td><img alt border="0" hspace="10" src="images/em.icon.question.gif" onclick="insert()" width="15" height="15"></td>
            <td>question</td>
            <td>[?]</td>
          </tr>
        </table>
        </td>
      </tr>
    </table>

    </td>
  </tr>
<tr><td><table width="100%"><tr><td valign="middle" width="90%"><hr width="100%"></td></tr></table></td></tr>
<tr><td align="right">
        <input type="button" value="Close" onclick="cancel()"></td></tr>
</table>

</html>
