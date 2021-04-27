<form name="form">
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1영역 미술교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="2" onClick="itemSum(this.form);">&nbsp;미술교과교육론</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2영역 현대미술론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="2" onClick="itemSum(this.form);">&nbsp;현대미술론</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>4영역 색채학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="2" onClick="itemSum(this.form);">&nbsp;색채심리연구론</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>5영역 한국화</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="2" onClick="itemSum(this.form);">&nbsp;한국화표현기법</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>6영역 서양화</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="2" onClick="itemSum(this.form);">&nbsp;전통회화기법연구</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>7영역 조소</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="2" onClick="itemSum(this.form);">&nbsp;조소재료실습</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>14영역 미술사(한국, 동양, 서양미술사포함) - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area14_1" value="2" onClick="mES14();itemSum(this.form);">&nbsp;서양미술사</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area14_2" value="2" onClick="mES14_();itemSum(this.form);">&nbsp;동양미술사</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area14_3" value="2" onClick="mES14__();itemSum(this.form);">&nbsp;한국미술사</td>
  </tr>
</table><br>
<script>
const mES14_1 = document.querySelector('#area14_1');
const mES14_2 = document.querySelector('#area14_2');
const mES14_3 = document.querySelector('#area14_3');

function mES14() {
  if(mES14_1.checked == true) {
    mES14_2.checked = false;
    mES14_3.checked = false;
  } }
function mES14_() {
  if(mES14_2.checked == true) {
    mES14_1.checked = false;
    mES14_3.checked = false;
  } }
function mES14__() {
  if(mES14_3.checked == true) {
    mES14_1.checked = false;
    mES14_2.checked = false;
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
