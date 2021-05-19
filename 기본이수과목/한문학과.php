<form name="form">
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1영역 한문교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area1_1" value="3" onClick="itemSum(this.form);">
      <label for="area1_1">&nbsp;[HANM458 / HANM360] 한문교과교육론 - 3학점</label></td>
  </tr>
</table><br>
<script type="text/javascript">
  const mES1_1 = document.querySelector('#area1_1');
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2영역 한문학개론 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_1" value="3" onClick="mES2();itemSum(this.form);">
      <label for="area2_1">&nbsp;[HANM202] 한문학통론(구) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_2" value="3" onClick="mES2_();itemSum(this.form);">
      <label for="area2_2">&nbsp;[HANM264] 한문학입문(신) - 3학점</label></td>
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
  <b>3영역 한문문법 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_1" value="3" onClick="mES3();itemSum(this.form);">
      <label for="area3_1">&nbsp;[HANM320] 한문문법론(구) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_2" value="3" onClick="mES3_();itemSum(this.form);">
      <label for="area3_2">&nbsp;[HANM480] 한문문법과문체(신) - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES3_1 = document.querySelector('#area3_1');
const mES3_2 = document.querySelector('#area3_2');

function mES3() {
  if(mES3_1.checked == true) {
    mES3_2.checked = false;
  } }
function mES3_() {
  if(mES3_2.checked == true) {
    mES3_1.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>4영역 한문학사</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_1" value="3" onClick="itemSum(this.form);">
      <label for="area4_1">&nbsp;[HANM302] 한국한문학사 - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>5영역 경서강독</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_1" value="3" onClick="itemSum(this.form);">
      <label for="area5_1">&nbsp;[HANM201] 맹자읽기I - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>6영역 한문국역연습 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area6_1" value="3" onClick="mES6();itemSum(this.form);">
      <label for="area6_1">&nbsp;[HANM317] 한국한문학명작강해(구) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area6_2" value="3" onClick="mES6_();itemSum(this.form);">
      <label for="area6_2">&nbsp;[HANM250] 한문독해의첫걸음(신) - 3학점</label></td>
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
  <b>7영역 한시선독 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area7_1" value="3" onClick="mES7();itemSum(this.form);">
      <label for="area7_1">&nbsp;[HANM311] 한국한시읽기(구) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area7_2" value="3" onClick="mES7_();itemSum(this.form);">
      <label for="area7_2">&nbsp;[HANM262] 한국한시명작감상(신) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area7_3" value="3" onClick="mES7__();itemSum(this.form);">
      <label for="area7_3">&nbsp;[HANM314] 당송시읽기 - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area7_4" value="3" onClick="mES7___();itemSum(this.form);">
      <label for="area7_4">&nbsp;[HANM259] 한시의시계 - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES7_1 = document.querySelector('#area7_1');
const mES7_2 = document.querySelector('#area7_2');
const mES7_3 = document.querySelector('#area7_3');
const mES7_4 = document.querySelector('#area7_4');

function mES7() {
  if(mES7_1.checked == true) {
    mES7_2.checked = false;
    mES7_3.checked = false;
    mES7_4.checked = false;
  } }
function mES7_() {
  if(mES7_2.checked == true) {
    mES7_1.checked = false;
    mES7_3.checked = false;
    mES7_4.checked = false;
  } }
function mES7__() {
  if(mES7_3.checked == true) {
    mES7_1.checked = false;
    mES7_2.checked = false;
    mES7_4.checked = false;
  } }
function mES7___() {
  if(mES7_4.checked == true) {
    mES7_1.checked = false;
    mES7_2.checked = false;
    mES7_3.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>8영역 한문소설선독 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_1" value="3" onClick="mES8();itemSum(this.form);">
      <label for="area8_1">&nbsp;[HANM212] 한문소설읽기(구) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_2" value="3" onClick="mES8_();itemSum(this.form);">
      <label for="area8_2">&nbsp;[HANM254] 한국한문소설명작감상(신) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_3" value="3" onClick="mES8__();itemSum(this.form);">
      <label for="area8_3">&nbsp;[HANM261] 한문소설의세계 - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES8_1 = document.querySelector('#area8_1');
const mES8_2 = document.querySelector('#area8_2');
const mES8_3 = document.querySelector('#area8_3');

function mES8() {
  if(mES8_1.checked == true) {
    mES8_2.checked = false;
    mES8_3.checked = false;
  } }
function mES8_() {
  if(mES8_2.checked == true) {
    mES8_1.checked = false;
    mES8_3.checked = false;
  } }
function mES8__() {
  if(mES8_3.checked == true) {
    mES8_1.checked = false;
    mES8_2.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>9영역 역대산문선독 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area9_1" value="3" onClick="mES9();itemSum(this.form);">
      <label for="area9_1">&nbsp;[HANM312] 한국한문산문읽기(구) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area9_2" value="3" onClick="mES9_();itemSum(this.form);">
      <label for="area9_2">&nbsp;[HANM354] 한국한문산문명작감상(신) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area9_3" value="3" onClick="mES9__();itemSum(this.form);">
      <label for="area9_3">&nbsp;[HANM365] 한국산문의세계 - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES9_1 = document.querySelector('#area9_1');
const mES9_2 = document.querySelector('#area9_2');
const mES9_3 = document.querySelector('#area9_3');

function mES9() {
  if(mES9_1.checked == true) {
    mES9_2.checked = false;
    mES9_3.checked = false;
  } }
function mES9_() {
  if(mES9_2.checked == true) {
    mES9_1.checked = false;
    mES9_3.checked = false;
  } }
function mES9__() {
  if(mES9_3.checked == true) {
    mES9_1.checked = false;
    mES9_2.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>10영역 문자학개론 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area10_1" value="3" onClick="mES10();itemSum(this.form);">
      <label for="area10_1">&nbsp;[HANM213] 한자학의이해(구) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area10_2" value="3" onClick="mES10_();itemSum(this.form);">
      <label for="area10_2">&nbsp;[HANM253] 한자의이해(신) - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES10_1 = document.querySelector('#area10_1');
const mES10_2 = document.querySelector('#area10_2');

function mES10() {
  if(mES10_1.checked == true) {
    mES10_2.checked = false;
  } }
function mES10_() {
  if(mES10_2.checked == true) {
    mES10_1.checked = false;
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
