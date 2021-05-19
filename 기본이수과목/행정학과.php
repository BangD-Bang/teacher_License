<form name="form">
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1영역 일반사회교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area1_1" value="3" onClick="itemSum(this.form);">
      <label for="area1_1">&nbsp;[SOCI379] 일반사회교과교육론 - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES1_1 = document.querySelector('#area1_1');
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2영역 정치와사회</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_1" value="3" onClick="itemSum(this.form);">
      <label for="area2_1">&nbsp;[POLI234] 비교정치개설 - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>3영역 경제와사회 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_1" value="3" onClick="mES3();itemSum(this.form);">
      <label for="area3_1">&nbsp;[ECON151] 세계와한국경제(폐지) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_2" value="3" onClick="mES3_();itemSum(this.form);">
      <label for="area3_2">&nbsp;[ECON171] 경제원론I - 3학점</label></td>
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
  <b>4영역 문화와사회 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_1" value="3" onClick="mES4();itemSum(this.form);">
      <label for="area4_1">&nbsp;[SOCI251] 사회인류학 - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_2" value="3" onClick="mES4_();itemSum(this.form);">
      <label for="area4_2">&nbsp;[SOCI446] 문화사회학 - 3학점</label></td>
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
  <b>5영역 법과사회</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_1" value="3" onClick="itemSum(this.form);">
      <label for="area5_1">&nbsp;[SOCI464] 법과사회 - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>6영역 사회과학방법론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area6_1" value="3" onClick="itemSum(this.form);">
      <label for="area6_1">&nbsp;[SOCI294] 사회조사방법 - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>7영역 인간과사회</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area7_1" value="3" onClick="itemSum(this.form);">
      <label for="area7_1">&nbsp;[SOCI232 / SOCI291] 사회학적상상력 - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>8영역 인간과행정 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_1" value="3" onClick="mES8();itemSum(this.form);">
      <label for="area8_1">&nbsp;[PAPP150] 행정학원론 - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_2" value="3" onClick="mES8_();itemSum(this.form);">
      <label for="area8_2">&nbsp;[PAPP110] 행정학개론(폐지) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_3" value="3" onClick="mES8__();itemSum(this.form);">
      <label for="area8_3">&nbsp;[PAPP111] 정부와나 - 3학점</label></td>
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
  <b>9영역 시민교육과사회윤리 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area9_1" value="3" onClick="mES9();itemSum(this.form);">
      <label for="area9_1">&nbsp;[SOCI115] 현대사회와NGO - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area9_2" value="3" onClick="mES9_();itemSum(this.form);">
      <label for="area9_2">&nbsp;[SOCI264] 복지사회학 - 3학점</label></td>
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
