<?php
include( "admin_header.php" );

?>

<html>
<head>
<meta name=vs_targetSchema content="HTML 4.0">
<meta name="GENERATOR" content="Dev-PHP 1.9.3">
<LINK rel="stylesheet" type="text/css" href="style/dialog.css">
<title>Insert Table</title>
<script language="JavaScript">
function attr(name, value) {
        if (!value || value == "") return "";
        return ' ' + name + '="' + value + '"';
}

   function explore(obj, pnt) {
      var i;
      for (i in obj) {
         alert(i +"="+obj[i]);
      }
   }

function insertTable() {


   // use DOM functions to create the table in the dlg_ins_table window
   // and then return the innerHTML of the DIV containing the table

        var nRows = rows.value ? parseInt(rows.value) : 2;
        var nCols = cols.value ? parseInt(cols.value) : 2;

   // create the div that will contain the table
   var d = document.body.appendChild( document.createElement("DIV") );

   // create the table in the div
   var t = d.appendChild( document.createElement("TABLE") );
   var tb = t.appendChild( document.createElement("TBODY") );

        for (var i = 0; i < nRows; i++) {
      var tr = tb.appendChild( document.createElement("TR") );
                for (var j = 0; j < nCols; j++) {
            var td = tr.appendChild( document.createElement("TD") );
            td.style.height = rowHeight.value;
            td.style.width = colWidth.value;
                }
        }

   // set table properties
   t.border = borderWidth.value;
   t.bordercolor = borderColor.value;
   t.cellspacing = cellSpacing.value;
   t.cellpadding = cellPadding.value;
   t.bgcolor = backgroundColor.value;

   window.returnValue = d.innerHTML;
   window.close();
}

function cancel() {
        window.returnValue = null;
        window.close();
}
</script>
</head>

<body topmargin="0" leftmargin="0" style="border: 0; margin: 0;" scroll="no">
<table class="dlg" cellpadding="0" cellspacing="2" width="100%" height="100%">
<tr><td colspan="5"><table width="100%"><tr><td>Layout</td><td valign="middle" width="90%"><hr width="100%"></td></tr></table></td></tr>
<tr>
 <td width="10">&nbsp;</td>
 <td width="70">Rows:</td><td valign="middle"><input type="text" name="rows" value="2" size="5"></td>
 <td width="70">Cell Padding:</td><td valign="middle"><input type="text" name="cellPadding" value="0" size="5"></td>
</tr>
<tr>
 <td>&nbsp;</td>
 <td>Cols:</td><td valign="middle"><input type="text" name="cols" value="2" size="5"></td>
 <td>Cell Spacing:</td><td valign="middle"><input type="text" name="cellSpacing" value="0" size="5"></td>
</tr>
<tr>
 <td>&nbsp;</td>
 <td>Rows Height:</td><td valign="middle"><input type="text" name="rowHeight" value="20" size="5"></td>
</tr>
<tr>
 <td>&nbsp;</td>
 <td>Column Width:</td><td valign="middle"><input type="text" name="colWidth" value="100" size="5"></td>
</tr>
<tr><td colspan="5"><table width="100%"><tr><td>Borders</td><td valign="middle" width="90%"><hr width="100%"></td></tr></table></td></tr>
<tr>
 <td>&nbsp;</td>
 <td>Width:</td><td valign="middle"><input type="text" name="borderWidth" value="1" size="5"></td>
 <td>Color:</td><td valign="middle"><input type="text" name="borderColor" value="black" size="10"></td>
</tr>
<tr><td colspan="5"><table width="100%"><tr><td>Background</td><td valign="middle" width="90%"><hr width="100%"></td></tr></table></td></tr>
<tr>
 <td>&nbsp;</td>
 <td>Color:</td><td valign="middle"><input type="text" name="backgroundColor" value="" size="15"></td>
</tr>
<tr><td colspan="5"><table width="100%"><tr><td valign="middle" width="100%" colspan="2"><hr width="100%"></td></tr></table></td></tr>
<tr>
 <td>&nbsp;</td>
 <td><td colspan="4" align="right"><input class="button" type="button" value="Insert" title="Insert Table" onclick="insertTable()">
<input class="button" type="button" value="Cancel" title="Cancel Dialog" onclick="cancel()"></td>
</tr>
</table>
</body>
</html>
