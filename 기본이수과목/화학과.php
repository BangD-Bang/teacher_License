<form name="form">
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1영역 화학교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[CHEM391]화학교과교육론 - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2영역 물리화학 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="CHEM201" value="3" onClick="mES2();itemSum(this.form);">&nbsp;[CHEM201]물리화학I - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="CHEM202" value="3" onClick="mES2_();itemSum(this.form);">&nbsp;[CHEM202]물리화학II - 3학점</td>
  </tr>
</table><br>
<script>
const mES2_1 = document.querySelector('#CHEM201');
const mES2_2 = document.querySelector('#CHEM202');

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
  <b>3영역 물리화학실험</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="2" onClick="itemSum(this.form);">&nbsp;[CHEM313]물리화학실험 - 2학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>4영역 유기화학 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="CHEM205" value="3" onClick="mES4();itemSum(this.form);">&nbsp;[CHEM205]유기화학I - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="CHEM206" value="3" onClick="mES4_();itemSum(this.form);">&nbsp;[CHEM206]유기화학II - 3학점</td>
  </tr>
</table><br>
<script>
const mES4_1 = document.querySelector('#CHEM205');
const mES4_2 = document.querySelector('#CHEM206');

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
  <b>5영역 유기화학실험</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="2" onClick="itemSum(this.form);">&nbsp;[CHEM214]유기화학실험 - 2학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>6영역 무기화학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[CHEM305]무기화학I - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>7영역 무기화학실험</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="2" onClick="itemSum(this.form);">&nbsp;[CHEM411]무기화학실험 - 2학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>8영역 분석화학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[CHEM203]분석화학 - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>9영역 분석화학실험 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="CHEM211" value="3" onClick="mES9();itemSum(this.form);">&nbsp;[CHEM211]화학실험I(구) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="CHEM326" value="3" onClick="mES9_();itemSum(this.form);">&nbsp;[CHEM326]기기분석(신) - 3학점</td>
  </tr>
</table><br>
<script>
const mES9_1 = document.querySelector('#CHEM211');
const mES9_2 = document.querySelector('#CHEM326');

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
