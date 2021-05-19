<form name="form">
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1영역 심리학개론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area1_1" value="3" onClick="itemSum(this.form);">
      <label for="area1_1">&nbsp;[PSYC110] 심리학의이해 - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2영역 심리검사</b>
  <br>(구), (신)과목 중복인정 불가
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_1" value="3" onClick="mES2();itemSum(this.form);">
      <label for="area2_1">&nbsp;[PSYC233] 심리검사(구) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_2" value="3" onClick="mES2_();itemSum(this.form);">
      <label for="area2_2">&nbsp;[PSYC236] 심리검사(신) - 3학점</label></td>
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
  <b>3영역 성격심리학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_1" value="3" onClick="itemSum(this.form);">
      <label for="area3_1">&nbsp;[PSYC231] 성격심리학 - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>5영역 집단상담</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_1" value="3" onClick="itemSum(this.form);">
      <label for="area5_1">&nbsp;[PSYC333] 집단상담 - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>8영역 상담이론과실제</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_1" value="3" onClick="itemSum(this.form);">
      <label for="area8_1">&nbsp;[PSYC234] 상담심리학 - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>9영역 임상심리학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area9_1" value="3" onClick="itemSum(this.form);">
      <label for="area9_1">&nbsp;[PSYC232] 임상심리학 - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>11영역 청소년심리</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area11_1" value="3" onClick="itemSum(this.form);">
      <label for="area11_1">&nbsp;[PSYC432] 학교심리학 - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>16영역 학습심리학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area16_1" value="3" onClick="itemSum(this.form);">
      <label for="area16_1">&nbsp;[PSYC216] 학습심리학 - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>17영역 이상심리학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area17_1" value="3" onClick="itemSum(this.form);">
      <label for="area17_1">&nbsp;[PSYC331] 이상심리학 - 3학점</label></td>
  </tr>
</table><br>

<table>
  <tr>
    <td height="25">&nbsp;합계:&nbsp;<input id="total_sum" name="total_sum" type="text" size="20"></td>
    <input type="hidden" id="majorEduOverlap" name="majorEduOverlap" value="0">
  </tr>
  <tr>
    <td height="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" id="popUpSubmit" value="확인" onclick="setParentText()"></td>
  </tr>
</table>
</form>
