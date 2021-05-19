<form name="form">
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1영역 영어교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area1_1" value="3" onClick="itemSum(this.form);">
      <label for="area1_1">&nbsp;[ENGL432] 영어교과교육론 - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES1_1 = document.querySelector('#area1_1');
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2영역 영어학개론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_1" value="3" onClick="itemSum(this.form);">
      <label for="area2_1">&nbsp;[ENGL211] 영어학개론 - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>3영역 영문학개론 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_1" value="3" onClick="mES3();itemSum(this.form);">
      <label for="area3_1">&nbsp;[ENGL201] 영미시개론 - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_2" value="3" onClick="mES3_();itemSum(this.form);">
      <label for="area3_2">&nbsp;[ENGL202] 영미소설개론 - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_3" value="3" onClick="mES3__();itemSum(this.form);">
      <label for="area3_3">&nbsp;[ENGL203] 영미희곡개론 - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES3_1 = document.querySelector('#area3_1');
const mES3_2 = document.querySelector('#area3_2');
const mES3_3 = document.querySelector('#area3_3');

function mES3() {
  if(mES3_1.checked == true) {
    mES3_2.checked = false;
    mES3_3.checked = false;
  } }
function mES3_() {
  if(mES3_2.checked == true) {
    mES3_1.checked = false;
    mES3_3.checked = false;
  } }
function mES3__() {
  if(mES3_3.checked == true) {
    mES3_1.checked = false;
    mES3_2.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>4영역 영어문법</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_1" value="3" onClick="itemSum(this.form);">
      <label for="area4_1">&nbsp;[ENGL236] 영문법 - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>5영역 영어회화</b>
  <br>Advanced 이수자는 I, II 이수불가
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_1" value="2" onClick="mES5();itemSum(this.form);">
      <label for="area5_1">&nbsp;[IFLS003] Academic English I - 2학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_2" value="2" onClick="mES5();itemSum(this.form);">
      <label for="area5_2">&nbsp;[IFLS004] Academic English II - 2학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_3" value="2" onClick="mES5_();itemSum(this.form);">
      <label for="area5_3">&nbsp;[IFLS100] Advanced Academic English - 2학점</label></td>
  </tr>
</table><br>
<script>
const mES5_1 = document.querySelector('#area5_1');
const mES5_2 = document.querySelector('#area5_2');
const mES5_3 = document.querySelector('#area5_3');

function mES5() {
  if(mES5_1.checked == true || mES5_2.checked == true) {
    mES5_3.checked = false;
  } }
function mES5_() {
  if(mES5_3.checked == true) {
    mES5_1.checked = false;
    mES5_2.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>6영역 영어작문</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area6_1" value="3" onClick="itemSum(this.form);">
      <label for="area6_1">&nbsp;[ENGL220] 전공영문글쓰기 - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>8영역 영어음성음운론 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_1" value="3" onClick="mES8();itemSum(this.form);">
      <label for="area8_1">&nbsp;[ENGL238] 영어음성학 - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_2" value="3" onClick="mES8_();itemSum(this.form);">
      <label for="area8_2">&nbsp;[ENGL390] 영어음운론 - 3학점</label></td>
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

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>9영역 영미문화 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area9_1" value="3" onClick="mES9();itemSum(this.form);">
      <label for="area9_1">&nbsp;[ENGL325] 영어의사회문화배경(구) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area9_2" value="3" onClick="mES9_();itemSum(this.form);">
      <label for="area9_2">&nbsp;[ENGL329] 영어의사회언어학(신) - 3학점</label></td>
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
