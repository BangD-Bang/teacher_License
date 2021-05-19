<form name="form">
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1영역 물리교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area1_1" value="3" onClick="itemSum(this.form);">
      <label for="area1_1">&nbsp;[PHYS391] 물리교과교육론 - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES1_1 = document.querySelector('#area1_1');
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2영역 역학 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_1" value="3" onClick="mES2();itemSum(this.form);">
      <label for="area2_1">&nbsp;[PHYS211] 일반역학I(구) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_2" value="3" onClick="mES2_();itemSum(this.form);">
      <label for="area2_2">&nbsp;[PHYS210] 일반역학(구) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_3" value="3" onClick="mES2__();itemSum(this.form);">
      <label for="area2_3">&nbsp;[PHYS220] 고전역학(신) - 3학점</label></td>
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
  <b>3영역 양자역학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_1" value="3" onClick="itemSum(this.form);">
      <label for="area3_1">&nbsp;[PHYS361] 양자역학I - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>4영역 전자기학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_1" value="3" onClick="itemSum(this.form);">
      <label for="area4_1">&nbsp;[PHYS224] 전자기학I - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>5영역 열및통계물리</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_1" value="3" onClick="itemSum(this.form);">
      <label for="area5_1">&nbsp;[PHYS421 / PHYS344] 통계물리학I - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>6영역 파동및광학 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area6_1" value="3" onClick="mES6();itemSum(this.form);">
      <label for="area6_1">&nbsp;[PHYS472] 현대광학(구) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area6_2" value="3" onClick="mES6_();itemSum(this.form);">
      <label for="area6_2">&nbsp;[PHYS481] 광학(신) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area6_3" value="3" onClick="mES6__();itemSum(this.form);">
      <label for="area6_3">&nbsp;[PHYS262] 파동물리학(구) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area6_4" value="3" onClick="mES6___();itemSum(this.form);">
      <label for="area6_4">&nbsp;[PHYS462] 원자물리학(신) - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES6_1 = document.querySelector('#area6_1');
const mES6_2 = document.querySelector('#area6_2');
const mES6_3 = document.querySelector('#area6_3');
const mES6_4 = document.querySelector('#area6_4');

function mES6() {
  if(mES6_1.checked == true) {
    mES6_2.checked = false;
    mES6_3.checked = false;
    mES6_4.checked = false;
  } }
function mES6_() {
  if(mES6_2.checked == true) {
    mES6_1.checked = false;
    mES6_3.checked = false;
    mES6_4.checked = false;
  } }
function mES6__() {
  if(mES6_3.checked == true) {
    mES6_1.checked = false;
    mES6_2.checked = false;
    mES6_4.checked = false;
  } }
function mES6___() {
  if(mES6_4.checked == true) {
    mES6_1.checked = false;
    mES6_2.checked = false;
    mES6_3.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>7영역 전산물리</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area7_1" value="3" onClick="itemSum(this.form);">
      <label for="area7_1">&nbsp;[PHYS461] 전산물리학및실습 - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>8영역 현대물리학 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_1" value="4" onClick="mES8();itemSum(this.form);">
      <label for="area8_1">&nbsp;[PHYS301] 현대물리학및실험(구) - 4학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_2" value="2" onClick="mES8_();itemSum(this.form);">
      <label for="area8_2">&nbsp;[PHYS462] 현대물리학실험(신) - 2학점</label></td>
  </tr>
</table><br>
<script>
const mES8_1 = document.querySelector('#area8_1');
const mES8_2 = document.querySelector('#area8_2');

function mES8() {
  if(mES8_1.checked == true) {
    mES8_2.checked = false;
  } }
function mES8_() {
  if(mES8_2.checked == true) {
    mES8_1.checked = false;
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
