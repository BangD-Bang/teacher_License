<form name="form">
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1영역 생명과학교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area1_1" value="2" onClick="itemSum(this.form);">
      <label for="area1_1">&nbsp;생물교과교육론</label></td>
  </tr>
</table><br>
<script>
const mES1_1 = document.querySelector('#area1_1');
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2영역 세포학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_1" value="2" onClick="itemSum(this.form);">
      <label for="area2_1">&nbsp;세포생물학과교육</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>3영역 발생학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_1" value="2" onClick="itemSum(this.form);">
      <label for="area3_1">&nbsp;발생학과교육</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>4영역 식물생리학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_1" value="2" onClick="itemSum(this.form);">
      <label for="area4_1">&nbsp;식물생리학</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>5영역 동물생리학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_1" value="2" onClick="itemSum(this.form);">
      <label for="area5_1">&nbsp;생리학</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>6영역 유전학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area6_1" value="2" onClick="itemSum(this.form);">
      <label for="area6_1">&nbsp;유전학과교육</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>7영역 분류학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area7_1" value="2" onClick="itemSum(this.form);">
      <label for="area7_1">&nbsp;분류학</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>8영역 생태학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_1" value="2" onClick="itemSum(this.form);">
      <label for="area8_1">&nbsp;생태학</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>9영역 분자생물학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area9_1" value="2" onClick="itemSum(this.form);">
      <label for="area9_1">&nbsp;분자생물학과교육</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>10영역 미생물학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area10_1" value="2" onClick="itemSum(this.form);">
      <label for="area10_1">&nbsp;미생물학</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>11영역 생물화학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area11_1" value="2" onClick="itemSum(this.form);">
      <label for="area11_1">&nbsp;생화학</label></td>
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
