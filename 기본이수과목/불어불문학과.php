<form name="form">
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1영역 프랑스어교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[FRAN427]프랑스어교과교육론 - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2영역 프랑스어학개론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[FRAN308]프랑스언어학의이해 - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>3영역 프랑스문학개론 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="FRAN335" value="3" onClick="mES3();itemSum(this.form);">&nbsp;[FRAN335]프랑스문학사I - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="FRAN340" value="3" onClick="mES3_();itemSum(this.form);">&nbsp;[FRAN340]프랑스문학사II - 3학점</td>
  </tr>
</table><br>
<script>
const mES3_1 = document.querySelector('#FRAN335');
const mES3_2 = document.querySelector('#FRAN340');

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
  <b>4영역 프랑스어문법 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="FRAN209" value="3" onClick="mES4();itemSum(this.form);">&nbsp;[FRAN209]프랑스어문법 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="FRAN218" value="3" onClick="mES4_();itemSum(this.form);">&nbsp;[FRAN218]불한번역분석(폐지) - 3학점</td>
  </tr>
</table><br>
<script>
const mES4_1 = document.querySelector('#FRAN209');
const mES4_2 = document.querySelector('#FRAN218');

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
  <b>5영역 프랑스어회화 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="FRAN211" value="3" onClick="mES5();itemSum(this.form);">&nbsp;[FRAN211]프랑스어말하기 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="FRAN450" value="3" onClick="mES5_();itemSum(this.form);">&nbsp;[FRAN450]국제관계프랑스어 - 3학점</td>
  </tr>
</table><br>
<script>
const mES5_1 = document.querySelector('#FRAN211');
const mES5_2 = document.querySelector('#FRAN450');

function mES5() {
  if(mES5_1.checked == true) {
    mES5_2.checked = false;
  } }
function mES5_() {
  if(mES5_2.checked == true) {
    mES5_1.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>6영역 프랑스어강독 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="FRAN339" value="3" onClick="mES6();itemSum(this.form);">&nbsp;[FRAN339]프랑스시와번역 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="FRAN342" value="3" onClick="mES6_();itemSum(this.form);">&nbsp;[FRAN342]프랑스문학과번역 - 3학점</td>
  </tr>
</table><br>
<script>
const mES6_1 = document.querySelector('#FRAN339');
const mES6_2 = document.querySelector('#FRAN342');

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
  <b>7영역 프랑스어작문 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="FRAN228" value="3" onClick="mES7();itemSum(this.form);">&nbsp;[FRAN228]프랑스어글쓰기 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="FRAN431" value="3" onClick="mES7_();itemSum(this.form);">&nbsp;[FRAN431]번역과글쓰기 - 3학점</td>
  </tr>
</table><br>
<script>
const mES7_1 = document.querySelector('#FRAN228');
const mES7_2 = document.querySelector('#FRAN431');

function mES7() {
  if(mES7_1.checked == true) {
    mES7_2.checked = false;
  } }
function mES7_() {
  if(mES7_2.checked == true) {
    mES7_1.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>8영역 프랑스어권문화</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[FRAN352]프랑스어권언어와문화(폐지) - 3학점</td>
  </tr>
</table><br>

<table>
  <tr>
    <td height="25">&nbsp;합계:&nbsp;<input id="total_sum" name="total_sum" type="text" size="20"></td>
  </tr>
  <tr>
    <td height="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="확인" onclick="setParentText()"></td>
  </tr>
</table>
</form>
