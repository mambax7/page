<!-- Editor Layer -------------------------------------->
   <table id="editor" unselectable="on" height="100%" cellspacing="0" cellpadding="0" width="100%" bgcolor="buttonface" border="0">
   <tr ondragstart="handleDrag(0)" onmouseup="press(false)" onmousedown="press(true)" onmouseover="hover(true)" onmouseout="hover(false)">
   <td class="rebar"><nobr><span class="toolbar">
    <img class="spacer" src="images/spacer.gif" width="2"><span class="start"></span>
    <img id="btnPost" onclick="post()" alt="<?=_MD_PostTopic ?>" src="<?=_MD_icon_post ?>" align="absMiddle" width="50" height="20">
    <img class="spacer" src="images/spacer.gif" width="2"><span class="sep"></span>
    <img id="btnCut" onclick="doStyle('Cut')" alt="<?=_MD_Cut ?>" src="images/icon_cut.gif" align="absMiddle" width="20" height="20">
    <img id="btnCopy" onclick="doStyle('Copy')" alt="<?=_MD_Copy ?>" src="images/icon_copy.gif" align="absMiddle" width="20" height="20">
    <img id="btnPaste" onclick="doStyle('Paste')" alt="<?=_MD_Paste ?>" src="images/icon_paste.gif" align="absMiddle" width="20" height="20">
    <img class="spacer" src="images/spacer.gif" width="2"><span class="sep"></span>
    <img id="btnSelect" onclick="doStyle('SelectAll')" alt="<?=_MD_SelectAll ?>" src="images/icon_select_all.gif" align="absMiddle" width="20" height="20">
    <img id="btnRemove" onclick="doStyle('RemoveFormat')" alt="<?=_MD_RemoveFormatting ?>" src="images/icon_rem_formatting.gif" align="absMiddle" width="20" height="20">
    <img class="spacer" src="images/spacer.gif" width="2"><span class="sep"></span>
    <img id="btnLink"   onclick="link(true)" alt="<?=_MD_InsertLink ?>" src="images/icon_ins_link.gif" align="absMiddle" width="20" height="20">
    <img id="btnRemLink" onclick="link(false)" alt="<?=_MD_RemoveLink ?>" src="images/icon_rem_link.gif" align="absMiddle" width="20" height="20">
    <img class="spacer" src="images/spacer.gif" width="2"><span class="sep"></span>
    <img id="btnTable"  onclick="insert('table')" alt="<?=_MD_InsertTable ?>" src="images/icon_ins_table.gif" align="absMiddle" width="20" height="20">
    <img id="btnTable"  onclick="document.getElementById('tblCtrl').style.visibility = 'visible';" alt="<?=_MD_EditTable ?>" src="images/icon_edt_table.gif" align="absMiddle" width="20" height="20">
    <img class="spacer" src="images/spacer.gif" width="2"><span class="sep"></span>
    <img id="btnRule"   onclick="doStyle('InsertHorizontalRule')" alt="<?=_MD_InsertLine ?>" src="images/icon_rule.gif" align="absMiddle" width="20" height="20">
    <img id="btnSmile"  onclick="insert('smile')" alt="<?=_MD_InsertSmily ?>" src="images/em.icon.smile.gif" align="absMiddle" width="15" height="15">
    <img id="btnChar"   onclick="insert('char')" alt="<?=_MD_InsertCharacter ?>" src="images/icon_ins_char.gif" align="absMiddle" width="20" height="20" border="0">


   <img class="spacer" src="images/spacer.gif" width="2"><span class="sep"></span>
   <img id="btnImage"  onclick="insert('image')" alt="<?=_MD_InsertImage ?>" src="images/icon_ins_image.gif" align="absMiddle" width="20" height="20">

   <img id="btnImage"  onclick="insert('gallery')" alt="<?=_MD_Insertgallery ?>" src="images/icon_gallery.png" align="absMiddle" width="20" height="20">
   <img id="btnImage"  onclick="insert('upload')" alt="<?=_MD_uploadImage ?>" src="images/icon_upload.png" align="absMiddle" width="20" height="20">

   <?php
   global $newpage;
   if ( $npage == "no" ){
   }else{
	?>
	<img class="spacer" src="images/spacer.gif" width="2"><span class="sep"></span>
  <img id="btnImage" onclick="insertHtml('<br /><br />[pagebreak]')" alt="<?=_MD_Insertnewpage ?>" src="images/icon_ins_newpage.png" align="absMiddle" width="20" height="20" border="0">
  <?php
  }
  ?>
  

  
 </span>

  </nobr></td></tr>
  <tr ondragstart="handleDrag(0)" onmouseup="press(false)" onmousedown="press(true)" onmouseover="hover(true)" onmouseout="hover(false)">
  <td class="rebar"><nobr><span class="toolbar">
   <img class="spacer" src="images/spacer.gif" width="2"><span class="start"></span>
   <img id="btnBold" onclick="doStyle('bold')" alt="<?=_MD_Bold ?>" src="images/icon_bold.gif" align="absMiddle" width="20" height="20">
   <img id="btnItalic" onclick="doStyle('italic')" alt="<?=_MD_Italic ?>" src="images/icon_italic.gif" align="absMiddle" width="20" height="20">
   <img id="btnUnderline" onclick="doStyle('underline')" alt="<?=_MD_Underline ?>" src="images/icon_underline.gif" align="absMiddle" width="20" height="20">
   <img id="btnStrikethrough" onclick="doStyle('strikethrough')" alt="<?=_MD_Strikethrough ?>" src="images/icon_strikethrough.gif" align="absMiddle" width="20" height="20">
   <img class="spacer" src="images/spacer.gif" width="2"><span class="sep"></span>
   <img id="btnLeftJustify" onclick="doStyle('JustifyLeft')" alt="<?=_MD_AlignLeft ?>" src="images/icon_left.gif" align="absMiddle" width="20" height="20">
   <img id="btnCenter" onclick="doStyle('JustifyCenter')" alt="<?=_MD_Center ?>" src="images/icon_center.gif" align="absMiddle" width="20" height="20">
   <img id="btnRightJustify"  onclick="doStyle('JustifyRight')" alt="<?=_MD_AlignRight ?>" src="images/icon_right.gif" align="absMiddle" width="20" height="20">
   <img id="btnFullJustify" onclick="doStyle('JustifyFull')" alt="<?=_MD_AlignBlock ?>" src="images/icon_block.gif" align="absMiddle" width="20" height="20">
   <img class="spacer" src="images/spacer.gif" width="2"><span class="sep"></span>
   <img id="btnNumList"  onclick="doStyle('InsertOrderedList')" alt="<?=_MD_NumberedList ?>" src="images/icon_numlist.gif" align="absMiddle" width="20" height="20">
   <img id="btnBulList"  onclick="doStyle('InsertUnorderedList')" alt="<?=_MD_BulettedList ?>" src="images/icon_bullist.gif" align="absMiddle" width="20" height="20">
   <img class="spacer" src="images/spacer.gif" width="2"><span class="sep"></span>
   <img id="btnOutdent"  onmousedown="doStyle('Outdent')" alt="<?=_MD_DecreaseIndent ?>" src="images/icon_outdent.gif" align="absMiddle" width="20" height="20">
   <img id="btnIndent"   onmousedown="doStyle('Indent')" alt="<?=_MD_IncreaseIndent ?>" src="images/icon_indent.gif" align="absMiddle" width="20" height="20">
  <span id="featureHistory">
   <img class="spacer" src="images/spacer.gif" width="2"><span class="sep"></span>
   <img id="btnPrev" onmousedown="document.execCommand('Undo')" alt="<?=_MD_HistoryBack ?>"    src="images/icon_undo.gif" align="absMiddle" width="20" height="20">
   <img id="btnNext" onmousedown="document.execCommand('Redo')"  alt="<?=_MD_HistoryForward ?>" src="images/icon_redo.gif" align="absMiddle" width="20" height="20">

  </span>
  </span>
  </nobr></td></tr>

  <tr id="featureStyleBar" ondragstart="handleDrag(0)" onmouseup="press(false)" onmousedown="press(true)" onmouseover="hover(true)" onmouseout="hover(false)">
  <td class="rebar"><nobr><span class="toolbar">
  <img class="spacer" src="images/spacer.gif" width="2"><span class="start"></span>&nbsp;

  <span id="featureStyle">
  <span class="label"><?=_MD_Style ?></span>
  <select name="" id="ctlStyle" class="button" onchange="addTag(this)">
  </select>
  <span class="sep"></span>
  </span>
  
  <span id="featureFont">
  <span class="label"><?=_MD_Font ?></span>
  <select hidefocus class="fontselect" id="ctlFont"  onchange="sel(this)">
  <option selected></option>
  <option id="Arial" value="Arial, Helvetica, sans-serif">Arial, Helvetica, sans-serif</option>
  <option id="Times New Roman" value="Times New Roman, Times, serif">Times New Roman, Times, serif</option>
  <option id="Courier New" value="Courier New, Courier, mono">Courier New, Courier, mono</option>
  <option id="Georgia" value="Georgia, Times New Roman, Times, serif">Georgia, Times New Roman, Times, serif</option>
  <option id="Verdana" value="Verdana, Arial, Helvetica, sans-serif">Verdana, Arial, Helvetica, sans-serif</option>
  <option id="Geneva" value="Geneva, Arial, Helvetica, sans-serif">Geneva, Arial, Helvetica, sans-serif</option>
  </select>
  </span>
  
  <span id="featureFontSize">
  <span class="sep"></span>
  <span class="label"><?=_MD_Size ?></span>
  <select hidefocus class="button" id="ctlSize"  onchange="sel(this)">
  <option selected></option>
  <option value="1">xx-small</option>
  <option value="2">x-small</option>
  <option value="3">small</option>
  <option value="4">medium</option>
  <option value="5">large</option>
  <option value="6">x-large</option>
  <option value="7">xx-large</option>
  </select>
  </span>
  <span id="featureColour">
  <span class="sep"></span>
  <img id="btnText"  onclick="pickColor('ForeColor')" alt="<?=_MD_TextColor ?>" src="images/icon_color_text.gif" align="absMiddle" width="36" height="20">
  <img id="btnFill"  onclick="pickColor('BackColor')" alt="<?=_MD_BackgroundColor ?>" src="images/icon_color_fill.gif" align="absMiddle" width="36" height="20">
   </span>
  
  <span id="featureSource">
  <img class="spacer" src="images/spacer.gif" width="2"><span class="start"></span>&nbsp;
  <span class="label"><?=_MD_Source ?></span>
  <input title="<?=_MD_SourceTitle ?>" class="checkbox" hidefocus type="checkbox" name="switchMode" onclick="tEdit.stopCellResize(true); tEdit.unSetTableElements(); setEditMode(switchMode)">
  </span>
  </span></nobr></td>
  </tr>
  
   <!-- Fields are inserted here -->

   <tr id="rebarBottom">
   <td class="spacer" height="1"><img height="2" src="images/spacer.gif" align="left"></td>
   </tr>

   <!-- Textedit start here -->
   <tr>
   <td height="100%">
    <table border="0" height="100%" cellspacing="0" cellpadding="0" width="100%">
			<tr>
				<td width="50%"><img class="spacer" src="images/spacer.gif" width="2"></td> 				
				<td class="textedit" id="textedit" valign="top" height="100%">
        <div class="document" id="doc" onkeyup="reset(); markSelectedElement(); tEdit.setTableElements(); tEdit.repositionArrows();" contenteditable="false" style="OVERFLOW: auto; WIDTH: 640; HEIGHT: 100%" onclick="reset(); markSelectedElement()"  onmouseup="markSelectedElement(); tEdit.setTableElements(); tEdit.stopCellResize(false);" onscroll="tEdit.repositionArrows()" height="100%" width="640"></div>
        </td>
				<td width="50%"><img class="spacer" src="images/spacer.gif" width="2"></td>
			</tr>
		</table>
   </td>
   </tr>
   </table>

