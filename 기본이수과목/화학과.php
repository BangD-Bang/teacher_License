<form name="form">
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1영역 화학교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area1_1" value="3" onClick="itemSum(this.form);">
      <label for="area1_1">&nbsp;[CHEM391]화학교과교육론 - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES1_1 = document.querySelector('#area1_1');
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2영역 물리화학 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_1" value="3" onClick="mES2();itemSum(this.form);">
      <label for="area2_1">&nbsp;[CHEM201]물리화학I - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_2" value="3" onClick="mES2_();itemSum(this.form);">
      <label for="area2_2">&nbsp;[CHEM202]물리화학II - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES2_1 = document.querySelector('#area2_1');
const mES2_2 = document.querySelector('#area2_2');

function mES2() {
  if(mES2_1.checked == true) {
    mES2_2.checked = false;
  } }
function mES2_() {
  if(mES2_2.checked == true) {
    mES2_1.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>3영역 물리화학실험</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_1" value="2" onClick="itemSum(this.form);">
      <label for="area3_1">&nbsp;[CHEM313]물리화학실험 - 2학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>4영역 유기화학 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_1" value="3" onClick="mES4();itemSum(this.form);">
      <label for="area4_1">&nbsp;[CHEM205]유기화학I - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_2" value="3" onClick="mES4_();itemSum(this.form);">
      <label for="area4_2">&nbsp;[CHEM206]유기화학II - 3학점</label></td>
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
  <b>5영역 유기화학실험</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_1" value="2" onClick="itemSum(this.form);">
      <label for="area5_1">&nbsp;[CHEM214]유기화학실험 - 2학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>6영역 무기화학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area6_1" value="3" onClick="itemSum(this.form);">
      <label for="area6_1">&nbsp;[CHEM305]무기화학I - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>7영역 무기화학실험</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area7_1" value="2" onClick="itemSum(this.form);">
      <label for="area7_1">&nbsp;[CHEM411]무기화학실험 - 2학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>8영역 분석화학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_1" value="3" onClick="itemSum(this.form);">
      <label for="area8_1">&nbsp;[CHEM203]분석화학 - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>9영역 분석화학실험 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area9_1" value="3" onClick="mES9();itemSum(this.form);">
      <label for="area9_1">&nbsp;[CHEM211]화학실험I(구) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area9_2" value="3" onClick="mES9_();itemSum(this.form);">
      <label for="area9_2">&nbsp;[CHEM326]기기분석(신) - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES9_1 = document.querySelector('#area9_1');
const mES9_2 = document.querySelector('#area9_2');

function mES9() {
  if(mES9_1.checked == true) {
    mES9_2.checked = false;
  } }
function mES9_() {
  if(mES9_2.checked == true) {
    mES9_1.checked = false;
  } }
</script>

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
