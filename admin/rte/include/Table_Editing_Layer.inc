<!-- Table Editing Layer ----------------------------------->
   <div id="tblCtrl" style="position:absolute; visibility:hidden; left:200; top:200; z-index: 5">
   <table border="0" cellpadding="0" cellspacing="0" width="68" bgcolor="buttonface">
   <tr ondragstart="handleDrag(0)">
   <td><img src="images/spacer.gif" width="8" height="1" border="0"></td>
   <td><img src="images/spacer.gif" width="5" height="1" border="0"></td>
   <td><img src="images/spacer.gif" width="18" height="1" border="0"></td>
   <td><img src="images/spacer.gif" width="2" height="1" border="0"></td>
   <td><img src="images/spacer.gif" width="22" height="1" border="0"></td>
   <td><img src="images/spacer.gif" width="4" height="1" border="0"></td>
   <td><img src="images/spacer.gif" width="9" height="1" border="0"></td>
   <td><img src="images/spacer.gif" width="1" height="1" border="0"></td>
  </tr>

  <tr ondragstart="handleDrag(0)">
   <td colspan="2" onClick="document.getElementById('tblCtrl').style.visibility = 'hidden';"><img name="CloseWindow" src="images/CloseWindow.gif" width="13" height="16" border="0"></td>
   <td colspan="3" onmousedown="tEdit.setDrag( document.getElementById('tblCtrl') )" onmouseup="tEdit.setDrag( document.getElementById('tblCtrl') )"><img name="toolbar" src="images/toolbar.gif" width="42" height="16" border="0"></td>
   <td colspan="2"><img name="minimize" src="images/minimize.gif" width="13" height="16" border="0"></td>
   <td><img src="images/spacer.gif" width="1" height="16" border="0"></td>
  </tr>
  <tr ondragstart="handleDrag(0)">
          <td colspan="7"><img name="hdr_tables" src="<?=_MD_hdr_tables ?>" width="68" height="15" border="0"></td>
   <td><img src="images/spacer.gif" width="1" height="15" border="0"></td>
  </tr>
  <tr ondragstart="handleDrag(0)">
   <td colspan="7"><img name="plt_hdr" src="images/plt_hdr.gif" width="68" height="9" border="0"></td>
   <td><img src="images/spacer.gif" width="1" height="9" border="0"></td>
  </tr>

  <tr ondragstart="handleDrag(0)" onmouseup="press(false)" onmousedown="press(true)" onmouseover="hover(true)" onmouseout="hover(false)">
   <td rowspan="8"><img class="spacer" name="Editor_r4_c1" src="images/Editor_r4_c1.gif" width="8" height="112" border="0"></td>
   <td colspan="2" class="tbl"><img name="rmv_colspan"  onclick="tEdit.splitCell();" src="images/rmv_colspan.gif" width="21" height="24" alt="<?=_MD_RemoveColspan ?>"></td>
   <td rowspan="8"><img class="spacer" name="Editor_r4_c4" src="images/Editor_r4_c4.gif" width="2" height="112" border="0"></td>
   <td colspan="2" class="tbl"><img name="rmv_rowspan"  onclick="tEdit.unMergeDown();" src="images/rmv_rowspan.gif" width="24" height="24" alt="<?=_MD_RemoveRowspan ?>"></td>
   <td rowspan="8"><img class="spacer" name="Editor_r4_c7" src="images/Editor_r4_c7.gif" width="9" height="112" border="0"></td>
   <td><img class="spacer" src="images/spacer.gif" width="1" height="26" border="0"></td>
  </tr>

  <tr ondragstart="handleDrag(0)">
   <td colspan="2"><img class="spacer" name="Editor_r5_c2" src="images/Editor_r5_c2.gif" width="23" height="2" border="0"></td>
   <td colspan="2"><img class="spacer" name="Editor_r5_c5" src="images/Editor_r5_c5.gif" width="26" height="2" border="0"></td>
   <td><img class="spacer" src="images/spacer.gif" width="1" height="2" border="0"></td>
  </tr>

  <tr ondragstart="handleDrag(0)" onmouseup="press(false)" onmousedown="press(true)" onmouseover="hover(true)" onmouseout="hover(false)">
          <td colspan="2" class="tbl"><img name="incr_colspan"  onclick="tEdit.mergeRight();" src="images/incr_colspan.gif" width="21" height="24" alt="<?=_MD_IncreaseColspan ?>"  border="0"></td>
          <td colspan="2" class="tbl"><img name="incr_rowspan" onclick="tEdit.mergeDown();" src="images/incr_rowspan.gif" width="24" height="24" alt="<?=_MD_IncreaseRowspan ?>"  border="0"></td>
   <td><img class="spacer" src="images/spacer.gif" width="1" height="26" border="0"></td>
  </tr>

  <tr ondragstart="handleDrag(0)">
   <td colspan="2"><img class="spacer"  name="Editor_r7_c2" src="images/Editor_r7_c2.gif" width="23" height="2" border="0"></td>
   <td colspan="2"><img class="spacer" name="Editor_r7_c5" src="images/Editor_r7_c5.gif" width="26" height="2" border="0"></td>
   <td><img class="spacer" src="images/spacer.gif" width="1" height="2" border="0"></td>
  </tr>

  <tr ondragstart="handleDrag(0)" onmouseup="press(false)" onmousedown="press(true)" onmouseover="hover(true)" onmouseout="hover(false)">
          <td colspan="2" class="tbl"><img name="add_col" onclick="tEdit.processColumn('add');"  src="images/add_col.gif" width="21" height="22" alt="<?=_MD_AddColumn ?>" border="0" ></td>
          <td colspan="2" class="tbl"><img name="add_row"  onclick="tEdit.processRow('add');" src="images/add_row.gif" width="24" height="22" alt="<?=_MD_AddRow ?>" border="0" ></td>
   <td><img src="images/spacer.gif" width="1" height="24" border="0"></td>
  </tr>

  <tr ondragstart="handleDrag(0)">
   <td colspan="2"><img class="spacer" name="Editor_r9_c2" src="images/Editor_r9_c2.gif" width="23" height="4" border="0"></td>
   <td colspan="2"><img class="spacer" name="Editor_r9_c5" src="images/Editor_r9_c5.gif" width="26" height="4" border="0"></td>
   <td><img class="spacer" src="images/spacer.gif" width="1" height="4" border="0"></td>
  </tr>

  <tr ondragstart="handleDrag(0)" onmouseup="press(false)" onmousedown="press(true)" onmouseover="hover(true)" onmouseout="hover(false)">
          <td colspan="2" class="tbl"><img name="rmv_col" onclick="tEdit.processColumn('remove');" src="images/rmv_col.gif" width="21" height="22" alt="<?=_MD_RemoveColumn ?>" border="0" ></td>
          <td colspan="2" class="tbl"><img name="rmv_row" onclick="tEdit.processRow('remove');" src="images/rmv_row.gif" width="24" height="22" alt="<?=_MD_RemoveRow ?>" border="0" ></td>
   <td><img src="images/spacer.gif" width="1" height="24" border="0"></td>
  </tr>

  <tr ondragstart="handleDrag(0)">
   <td colspan="2"><img name="Editor_r11_c2" src="images/Editor_r11_c2.gif" width="23" height="4" border="0"></td>
   <td colspan="2"><img name="Editor_r11_c5" src="images/Editor_r11_c5.gif" width="26" height="4" border="0"></td>
   <td><img class="spacer" src="images/spacer.gif" width="1" height="4" border="0"></td>
  </tr>

  <tr ondragstart="handleDrag(0)">
   <td colspan="7"><img name="plt_ftr" src="images/plt_ftr.gif" width="68" height="8" border="0"></td>
   <td><img class="spacer" src="images/spacer.gif" width="1" height="8" border="0"></td>
  </tr>
</table>
</div>

