<form name="form">
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1영역 일반사회교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[SOCI379]일반사회교과교육론 - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2영역 정치와사회</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[POLI234]비교정치개설 - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>3영역 경제와사회 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="ECON151" value="3" onClick="mES3();itemSum(this.form);">&nbsp;[ECON151]세계와한국경제(폐지) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="ECON171" value="3" onClick="mES3_();itemSum(this.form);">&nbsp;[ECON171]경제원론I - 3학점</td>
  </tr>
</table><br>
<script>
const mES3_1 = document.querySelector('#ECON151');
const mES3_2 = document.querySelector('#ECON171');

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
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="SOCI251" value="3" onClick="mES4();itemSum(this.form);">&nbsp;[SOCI251]사회인류학 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="SOCI446" value="3" onClick="mES4_();itemSum(this.form);">&nbsp;[SOCI446]문화사회학 - 3학점</td>
  </tr>
</table><br>
<script>
const mES4_1 = document.querySelector('#SOCI251');
const mES4_2 = document.querySelector('#SOCI446');

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
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[SOCI464]법과사회 - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>6영역 사회과학방법론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[SOCI294]사회조사방법 - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>7영역 인간과사회</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[SOCI232 / SOCI291]사회학적상상력 - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>8영역 인간과행정 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="PAPP150" value="3" onClick="mES8();itemSum(this.form);">&nbsp;[PAPP150]행정학원론 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="PAPP110" value="3" onClick="mES8_();itemSum(this.form);">&nbsp;[PAPP110]행정학개론(폐지) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="PAPP111" value="3" onClick="mES8__();itemSum(this.form);">&nbsp;[PAPP111]정부와나 - 3학점</td>
  </tr>
</table><br>
<script>
const mES8_1 = document.querySelector('#PAPP150');
const mES8_2 = document.querySelector('#PAPP110');
const mES8_3 = document.querySelector('#PAPP111');

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
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="SOCI115" value="3" onClick="mES9();itemSum(this.form);">&nbsp;[SOCI115]현대사회와NGO - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="SOCI264" value="3" onClick="mES9_();itemSum(this.form);">&nbsp;[SOCI264]복지사회학 - 3학점</td>
  </tr>
</table><br>
<script>
const mES9_1 = document.querySelector('#SOCI115');
const mES9_2 = document.querySelector('#SOCI264');

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
  </tr>
  <tr>
    <td height="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="확인" onclick="setParentText()"></td>
  </tr>
</table>
</form>
