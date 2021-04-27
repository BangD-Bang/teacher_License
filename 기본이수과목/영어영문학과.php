<form name="form">
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1영역 영어교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[ENGL432]영어교과교육론 - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2영역 영어학개론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[ENGL211]영어학개론 - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>3영역 영문학개론 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="ENGL201" value="3" onClick="mES3();itemSum(this.form);">&nbsp;[ENGL201]영미시개론 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="ENGL202" value="3" onClick="mES3_();itemSum(this.form);">&nbsp;[ENGL202]영미소설개론 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="ENGL203" value="3" onClick="mES3__();itemSum(this.form);">&nbsp;[ENGL203]영미희곡개론 - 3학점</td>
  </tr>
</table><br>
<script>
const mES3_1 = document.querySelector('#ENGL201');
const mES3_2 = document.querySelector('#ENGL202');
const mES3_3 = document.querySelector('#ENGL203');

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
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[ENGL236]영문법 - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>5영역 영어회화</b>
  <br>Advanced 이수자는 I, II 이수불가
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="IFLS003" value="2" onClick="mES5();itemSum(this.form);">&nbsp;[IFLS003]Academic English I - 2학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="IFLS004" value="2" onClick="mES5();itemSum(this.form);">&nbsp;[IFLS004]Academic English II - 2학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="IFLS100" value="2" onClick="mES5_();itemSum(this.form);">&nbsp;[IFLS100]Advanced Academic English - 2학점</td>
  </tr>
</table><br>
<script>
const mES5_1 = document.querySelector('#IFLS003');
const mES5_2 = document.querySelector('#IFLS004');
const mES5_3 = document.querySelector('#IFLS100');

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
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[ENGL220]전공영문글쓰기 - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>8영역 영어음성음운론 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="ENGL238" value="3" onClick="mES8();itemSum(this.form);">&nbsp;[ENGL238]영어음성학 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="ENGL390" value="3" onClick="mES8_();itemSum(this.form);">&nbsp;[ENGL390]영어음운론 - 3학점</td>
  </tr>
</table><br>
<script>
const mES8_1 = document.querySelector('#ENGL238');
const mES8_2 = document.querySelector('#ENGL390');

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
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="ENGL325" value="3" onClick="mES9();itemSum(this.form);">&nbsp;[ENGL325]영어의사회문화배경(구) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="ENGL329" value="3" onClick="mES9_();itemSum(this.form);">&nbsp;[ENGL329]영어의사회언어학(신) - 3학점</td>
  </tr>
</table><br>
<script>
const mES9_1 = document.querySelector('#ENGL325');
const mES9_2 = document.querySelector('#ENGL329');

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
