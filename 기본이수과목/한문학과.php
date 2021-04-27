<form name="form">
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1영역 한문교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[HANM458 / HANM360]한문교과교육론 - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2영역 한문학개론 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="HANM202" value="3" onClick="mES2();itemSum(this.form);">&nbsp;[HANM202]한문학통론(구) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="HANM264" value="3" onClick="mES2_();itemSum(this.form);">&nbsp;[HANM264]한문학입문(신) - 3학점</td>
  </tr>
</table><br>
<script>
const mES2_1 = document.querySelector('#HANM202');
const mES2_2 = document.querySelector('#HANM264');

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
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="HANM320" value="3" onClick="mES3();itemSum(this.form);">&nbsp;[HANM320]한문문법론(구) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="HANM480" value="3" onClick="mES3_();itemSum(this.form);">&nbsp;[HANM480]한문문법과문체(신) - 3학점</td>
  </tr>
</table><br>
<script>
const mES3_1 = document.querySelector('#HANM320');
const mES3_2 = document.querySelector('#HANM480');

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
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[HANM302]한국한문학사 - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>5영역 경서강독</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[HANM201]맹자읽기I - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>6영역 한문국역연습 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="HANM317" value="3" onClick="mES6();itemSum(this.form);">&nbsp;[HANM317]한국한문학명작강해(구) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="HANM250" value="3" onClick="mES6_();itemSum(this.form);">&nbsp;[HANM250]한문독해의첫걸음(신) - 3학점</td>
  </tr>
</table><br>
<script>
const mES6_1 = document.querySelector('#HANM317');
const mES6_2 = document.querySelector('#HANM250');

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
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="HANM311" value="3" onClick="mES7();itemSum(this.form);">&nbsp;[HANM311]한국한시읽기(구) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="HANM262" value="3" onClick="mES7_();itemSum(this.form);">&nbsp;[HANM262]한국한시명작감상(신) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="HANM314" value="3" onClick="mES7__();itemSum(this.form);">&nbsp;[HANM314]당송시읽기 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="HANM259" value="3" onClick="mES7___();itemSum(this.form);">&nbsp;[HANM259]한시의시계 - 3학점</td>
  </tr>
</table><br>
<script>
const mES7_1 = document.querySelector('#HANM311');
const mES7_2 = document.querySelector('#HANM262');
const mES7_3 = document.querySelector('#HANM314');
const mES7_4 = document.querySelector('#HANM259');

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
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="HANM212" value="3" onClick="mES8();itemSum(this.form);">&nbsp;[HANM212]한문소설읽기(구) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="HANM254" value="3" onClick="mES8_();itemSum(this.form);">&nbsp;[HANM254]한국한문소설명작감상(신) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="HANM261" value="3" onClick="mES8__();itemSum(this.form);">&nbsp;[HANM261]한문소설의세계 - 3학점</td>
  </tr>
</table><br>
<script>
const mES8_1 = document.querySelector('#HANM212');
const mES8_2 = document.querySelector('#HANM254');
const mES8_3 = document.querySelector('#HANM261');

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
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="HANM312" value="3" onClick="mES9();itemSum(this.form);">&nbsp;[HANM312]한국한문산문읽기(구) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="HANM354" value="3" onClick="mES9_();itemSum(this.form);">&nbsp;[HANM354]한국한문산문명작감상(신) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="HANM365" value="3" onClick="mES9__();itemSum(this.form);">&nbsp;[HANM365]한국산문의세계 - 3학점</td>
  </tr>
</table><br>
<script>
const mES9_1 = document.querySelector('#HANM312');
const mES9_2 = document.querySelector('#HANM354');
const mES9_3 = document.querySelector('#HANM365');

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
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="HANM213" value="3" onClick="mES10();itemSum(this.form);">&nbsp;[HANM213]한자학의이해(구) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="HANM253" value="3" onClick="mES10_();itemSum(this.form);">&nbsp;[HANM253]한자의이해(신) - 3학점</td>
  </tr>
</table><br>
<script>
const mES10_1 = document.querySelector('#HANM213');
const mES10_2 = document.querySelector('#HANM253');

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
  </tr>
  <tr>
    <td height="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="확인" onclick="setParentText()"></td>
  </tr>
</table>
</form>
