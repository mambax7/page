<?php
include( "admin_header.php" );
   echo"<html><head>\n";
   echo"<meta content=\"HTML 4.0\" name=\"vs_targetSchema\">\n";
   echo"<meta content=\"Microsoft FrontPage 5.0\" name=\"GENERATOR\">\n";
   echo"<link rel=\"StyleSheet\" type=\"text/css\" href=\"style/richedit.css\">\n";
   echo"<link rel=\"StyleSheet\" type=\"text/css\" href=\"style/syntax.css\">\n";
   echo"<link rel=\"StyleSheet\" type=\"text/css\" href=\"style/custom.css\">\n";
   echo"<script language=\"JavaScript\" src=\"rte_xhtml.js\"></script>\n";
   echo"<script language=\"JavaScript\" src=\"rte_interface.js\"></script>\n";
   echo"<script language=\"JavaScript\" src=\"rte_debug.js\"></script>\n";
   echo"<script language=\"JavaScript\" src=\"rte.js\"></script>\n";
   echo"<script language=\"JavaScript\" src=\"rte_codesweep.js\"></script>\n";
   echo"<script language=\"JavaScript\" src=\"rte_editmode.js\"></script>\n";
   echo"<script language=\"JavaScript\" src=\"rte_history.js\"></script>\n";
   echo"<SCRIPT language=\"JavaScript\" src=\"tableEditor.js\"></SCRIPT>\n";
include( "include/Loading_interface.inc" );
   echo"</head><body style=\"border:2 solid buttonface\" leftMargin=\"0\" topMargin=\"0\" scroll=\"no\" unselectable=\"on\" onload=\"tEdit = new tableEditor('doc', 'textedit');\" onMouseMove=\"if (tEdit) { tEdit.changePos(); tEdit.resizeCell() }\" >\n";
include( "include/Loading_Layer.inc" );
include( "include/Editor_Layer.inc" );
include( "include/Table_Editing_Layer.inc" );
include( "include/Loading_colorchooser.inc" );
   echo"</body></html>\n";
?>
