<form name="form">
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1영역 철학교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[PHIL459]철학교과교육론 - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2영역 논리학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[PHIL209]기호논리학 - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>3영역 윤리학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[PHIL220]윤리학 - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>4영역 인식론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[PHIL222]인식론 - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>5영역 형이상학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[PHIL207]형이상학 - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>6영역 한국철학사</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[PHIL312]한국철학사 - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>7영역 동양철학사</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="PHIL225" value="3" onClick="mES7();itemSum(this.form);">&nbsp;[PHIL225]도가철학 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="PHIL226" value="3" onClick="mES7_();itemSum(this.form);">&nbsp;[PHIL226]불교철학 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="PHIL331" value="3" onClick="mES7__();itemSum(this.form);">&nbsp;[PHIL331]중국선진철학 - 3학점</td>
  </tr>
</table><br>
<script>
const mES7_1 = document.querySelector('#PHIL225');
const mES7_2 = document.querySelector('#PHIL226');
const mES7_3 = document.querySelector('#PHIL331');

function mES7() {
  if(mES7_1.checked == true) {
    mES7_2.checked = false;
    mES7_3.checked = false;
  } }
function mES7_() {
  if(mES7_2.checked == true) {
    mES7_1.checked = false;
    mES7_3.checked = false;
  } }
function mES7__() {
  if(mES7_3.checked == true) {
    mES7_1.checked = false;
    mES7_2.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>8영역 서양철학사</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="PHIL321" value="3" onClick="mES8();itemSum(this.form);">&nbsp;[PHIL321]서양고대철학 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="PHIL344" value="3" onClick="mES8_();itemSum(this.form);">&nbsp;[PHIL344]서양근세철학 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="PHIL346" value="3" onClick="mES8__();itemSum(this.form);">&nbsp;[PHIL346]현대유럽철학 - 3학점</td>
  </tr>
</table><br>
<script>
const mES8_1 = document.querySelector('#PHIL321');
const mES8_2 = document.querySelector('#PHIL344');
const mES8_3 = document.querySelector('#PHIL346');

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

<table>
  <tr>
    <td height="25">&nbsp;합계:&nbsp;<input id="total_sum" name="total_sum" type="text" size="20"></td>
  </tr>
  <tr>
    <td height="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="확인" onclick="setParentText()"></td>
  </tr>
</table>
</form>
