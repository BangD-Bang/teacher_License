<form name="form">
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1영역 지리교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area1_1" value="2" onClick="itemSum(this.form);">
      <label for="area1_1">&nbsp;지리교과교육론</label></td>
  </tr>
</table><br>
<script>
const mES1_1 = document.querySelector('#area1_1');
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2영역 자연지리학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_1" value="2" onClick="itemSum(this.form);">
      <label for="area2_1">&nbsp;자연지리특강</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>3영역 인문지리학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_1" value="2" onClick="itemSum(this.form);">
      <label for="area3_1">&nbsp;인문지리특강</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>4영역 도시지리학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_1" value="2" onClick="itemSum(this.form);">
      <label for="area4_1">&nbsp;도시지리교육론</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>5영역 경제지리학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_1" value="2" onClick="itemSum(this.form);">
      <label for="area5_1">&nbsp;경제지리교육론</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>6영역 문화지리학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area6_1" value="2" onClick="itemSum(this.form);">
      <label for="area6_1">&nbsp;문화지리교육론</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>7영역 지형학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area7_1" value="2" onClick="itemSum(this.form);">
      <label for="area7_1">&nbsp;지형학교수론</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>9영역 환경지리학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area9_1" value="2" onClick="itemSum(this.form);">
      <label for="area9_1">&nbsp;환경지리교육론</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>10영역 한국지리</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area10_1" value="2" onClick="itemSum(this.form);">
      <label for="area10_1">&nbsp;한국지리교육론</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>11영역 세계지리</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area11_1" value="2" onClick="itemSum(this.form);">
      <label for="area11_1">&nbsp;세계지리교육론</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>12영역 지도학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area12_1" value="2" onClick="itemSum(this.form);">
      <label for="area12_1">&nbsp;지도학및GIS특강</label></td>
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
