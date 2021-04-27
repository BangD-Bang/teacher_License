<form name="form">
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1영역 생명과학교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[LIBS393]생물교과교육론 - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2영역 세포학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[LIST201]세포생물학I - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>3영역 발생학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[LIBS451]발생생물학 - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>4영역 생리학 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="LIBS357" value="3" onClick="mES4();itemSum(this.form);">&nbsp;[LIBS357]생리학I - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="LIBS358" value="3" onClick="mES4_();itemSum(this.form);">&nbsp;[LIBS358]생리학II - 3학점</td>
  </tr>
</table><br>
<script>
const mES4_1 = document.querySelector('#LIBS357');
const mES4_2 = document.querySelector('#LIBS358');

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
  <b>5영역 유전학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[LIST303]유전학I - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>6영역 분류학 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="LIBS215" value="3" onClick="mES6();itemSum(this.form);">&nbsp;[LIBS215]식물계통분류학 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="LIBS217" value="3" onClick="mES6_();itemSum(this.form);">&nbsp;[LIBS217]동물계통분류학 - 3학점</td>
  </tr>
</table><br>
<script>
const mES6_1 = document.querySelector('#LIBS215');
const mES6_2 = document.querySelector('#LIBS217');

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
  <b>7영역 생태학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[LIET201]생태학 - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>8영역 분자생물학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[LIST301]분자생물학I - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>9영역 미생물학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[LIST203]미생물학I - 3학점</td>
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
