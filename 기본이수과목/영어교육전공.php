<form name="form">
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2영역 영어학개론 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_1" value="2" onClick="mES2();itemSum(this.form);">
      <label for="area2_1">&nbsp;현대영어의구조</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_2" value="2" onClick="mES2_();itemSum(this.form);">
      <label for="area2_2">&nbsp;영어의미화용론</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_3" value="2" onClick="mES2__();itemSum(this.form);">
      <label for="area2_3">&nbsp;영어학개론</label></td>
  </tr>
</table><br>
<script>
const mES2_1 = document.querySelector('#area2_1');
const mES2_2 = document.querySelector('#area2_2');
const mES2_3 = document.querySelector('#area2_3');

function mES2() {
  if(mES2_1.checked == true) {
    mES2_2.checked = false;
    mES2_3.checked = false;
  } }
function mES2_() {
  if(mES2_2.checked == true) {
    mES2_1.checked = false;
    mES2_3.checked = false;
  } }
function mES2__() {
  if(mES2_3.checked == true) {
    mES2_1.checked = false;
    mES2_2.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>3영역 영문학개론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_1" value="2" onClick="itemSum(this.form);">
      <label for="area3_1">&nbsp;영미문학교육이론</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>4영역 영어문법</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_1" value="2" onClick="itemSum(this.form);">
      <label for="area4_1">&nbsp;영문법교육론</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>5영역 영어회화</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_1" value="2" onClick="itemSum(this.form);">
      <label for="area5_1">&nbsp;영어청해및회화교육</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>6영역 영어작문</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area6_1" value="2" onClick="itemSum(this.form);">
      <label for="area6_1">&nbsp;영어작문교육</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>7영역 영어독해</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area7_1" value="2" onClick="itemSum(this.form);">
      <label for="area7_1">&nbsp;영어독해교육</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>8영역 영어음성음운론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_1" value="2" onClick="itemSum(this.form);">
      <label for="area8_1">&nbsp;영어발음교육론</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>9영역 영미문화</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area9_1" value="2" onClick="itemSum(this.form);">
      <label for="area9_1">&nbsp;영미문학과문화</label></td>
  </tr>
</table><br>

<table>
  <tr>
    <td height="25">&nbsp;합계:&nbsp;<input id="total_sum" name="total_sum" type="text" size="20"></td>
    <input type="hidden" id="majorEduOverlap" name="majorEduOverlap" value="0">
  </tr>
  <tr>
    <td height="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" id="popUpSubmit" value="확인" onclick="setParentText()"></td>
  </tr>
</table>
</form>
