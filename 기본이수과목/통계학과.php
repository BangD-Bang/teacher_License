<form name="form">
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1영역 수학교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area1_1" value="3" onClick="itemSum(this.form);">
      <label for="area1_1">&nbsp;[MATE316] 수학교과교육론 - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES1_1 = document.querySelector('#area1_1');
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2영역 정수론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_1" value="3" onClick="itemSum(this.form);">
      <label for="area2_1">&nbsp;[MATH223] 정수론 - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>3영역 복소해석학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_1" value="3" onClick="itemSum(this.form);">
      <label for="area3_1">&nbsp;[MATH315] 복소해석학I - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>4영역 해석학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_1" value="3" onClick="itemSum(this.form);">
      <label for="area4_1">&nbsp;[MATH211] 해석학I및연습 - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>5영역 선형대수</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_1" value="3" onClick="itemSum(this.form);">
      <label for="area5_1">&nbsp;[MATH221] 선형대수I및연습 - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>6영역 현대대수학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area6_1" value="3" onClick="itemSum(this.form);">
      <label for="area6_1">&nbsp;[MATH321] 대수학I - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>7영역 미분기하학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area7_1" value="3" onClick="itemSum(this.form);">
      <label for="area7_1">&nbsp;[MATH331] 미분기하학I - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>8영역 기하학일반</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_1" value="3" onClick="itemSum(this.form);">
      <label for="area8_1">&nbsp;[MATH232] 기하학개론 - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>9영역 위상수학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area9_1" value="3" onClick="itemSum(this.form);">
      <label for="area9_1">&nbsp;[MATH333] 위상수학I - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>10영역 확률및통계 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area10_1" value="3" onClick="mES10();itemSum(this.form);">
      <label for="area10_1">&nbsp;[STAT221] 확률론입문 - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area10_2" value="3" onClick="mES10_();itemSum(this.form);">
      <label for="area10_2">&nbsp;[STAT232] 수리통계학 - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES10_1 = document.querySelector('#area10_1');
const mES10_2 = document.querySelector('#area10_2');

function mES10() {
  if(mES10_1.checked == true) {
    mES10_2.checked = false;
  } }
function mES10_() {
  if(mES10_2.checked == true) {
    mES10_1.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>11영역 조합및그래프이론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area11_1" value="3" onClick="itemSum(this.form);">
      <label for="area11_1">&nbsp;[MATH203] 이산수학 - 3학점</label></td>
  </tr>
</table><br>

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
