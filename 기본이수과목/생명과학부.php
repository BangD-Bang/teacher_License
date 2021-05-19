<form name="form">
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1영역 생명과학교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area1_1" value="3" onClick="itemSum(this.form);">
      <label for="area1_1">&nbsp;[LIBS393] 생물교과교육론 - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES1_1 = document.querySelector('#area1_1');
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2영역 세포학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_1" value="3" onClick="itemSum(this.form);">
      <label for="area2_1">&nbsp;[LIST201] 세포생물학I - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>3영역 발생학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_1" value="3" onClick="itemSum(this.form);">
      <label for="area3_1">&nbsp;[LIBS451] 발생생물학 - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>4영역 생리학 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_1" value="3" onClick="mES4();itemSum(this.form);">
      <label for="area4_1">&nbsp;[LIBS357] 생리학I - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_2" value="3" onClick="mES4_();itemSum(this.form);">
      <label for="area4_2">&nbsp;[LIBS358] 생리학II - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES4_1 = document.querySelector('#area4_1');
const mES4_2 = document.querySelector('#area4_2');

function mES4() {
  if(mES4_1.checked == true) {
    mES4_2.checked = false;
  } }
function mES4_() {
  if(mES4_2.checked == true) {
    mES4_1.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>5영역 유전학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_1" value="3" onClick="itemSum(this.form);">
      <label for="area5_1">&nbsp;[LIST303] 유전학I - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>6영역 분류학 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area6_1" value="3" onClick="mES6();itemSum(this.form);">
      <label for="area6_1">&nbsp;[LIBS215] 식물계통분류학 - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area6_2" value="3" onClick="mES6_();itemSum(this.form);">
      <label for="area6_2">&nbsp;[LIBS217] 동물계통분류학 - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES6_1 = document.querySelector('#area6_1');
const mES6_2 = document.querySelector('#area6_2');

function mES6() {
  if(mES6_1.checked == true) {
    mES6_2.checked = false;
  } }
function mES6_() {
  if(mES6_2.checked == true) {
    mES6_1.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>7영역 생태학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area7_1" value="3" onClick="itemSum(this.form);">
      <label for="area7_1">&nbsp;[LIET201] 생태학 - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>8영역 분자생물학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_1" value="3" onClick="itemSum(this.form);">
      <label for="area8_1">&nbsp;[LIST301] 분자생물학I - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>9영역 미생물학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area9_1" value="3" onClick="itemSum(this.form);">
      <label for="area9_1">&nbsp;[LIST203] 미생물학I - 3학점</label></td>
  </tr>
</table><br>

<table>
  <tr>
    <td height="25">&nbsp;합계:&nbsp;<input id="total_sum" name="total_sum" type="text" size="20"></td>
    <input type="hidden" id="majorEduOverlap" name="majorEduOverlap" value="0">
  </tr>
  <tr>
    <td height="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" id="popUpSubmit" value="확인" onclick="overlap_c();setParentText();"></td>
  </tr>
</table>
</form>
