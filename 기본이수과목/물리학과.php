<form name="form">
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1영역 물리교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[PHYS391]물리교과교육론 - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2영역 역학 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="PHYS211" value="3" onClick="mES2();itemSum(this.form);">&nbsp;[PHYS211]일반역학I(구) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="PHYS210" value="3" onClick="mES2_();itemSum(this.form);">&nbsp;[PHYS210]일반역학(구) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="PHYS220" value="3" onClick="mES2__();itemSum(this.form);">&nbsp;[PHYS220]고전역학(신) - 3학점</td>
  </tr>
</table><br>
<script>
const mES2_1 = document.querySelector('#PHYS211');
const mES2_2 = document.querySelector('#PHYS210');
const mES2_3 = document.querySelector('#PHYS220');

function mES2() {
  if(mES2_1.checked == true) {
    mES2_2.checked = false;
    mES2_3.checked = false;
  } }
function mES2_() {
  if(mES2_2.checked == true) {
    mES2_1.checked = false;
    mES2_3.checked = false;
  } }
function mES2__() {
  if(mES2_3.checked == true) {
    mES2_1.checked = false;
    mES2_2.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>3영역 양자역학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[PHYS361]양자역학I - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>4영역 전자기학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[PHYS224]전자기학I - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>5영역 열및통계물리</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[PHYS421 / PHYS344]통계물리학I - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>6영역 파동및광학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="PHYS472" value="3" onClick="mES6();itemSum(this.form);">&nbsp;[PHYS472]현대광학(구) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="PHYS481" value="3" onClick="mES6_();itemSum(this.form);">&nbsp;[PHYS481]광학(신) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="PHYS262" value="3" onClick="mES6__();itemSum(this.form);">&nbsp;[PHYS262]파동물리학(구) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="PHYS462" value="3" onClick="mES6___();itemSum(this.form);">&nbsp;[PHYS462]원자물리학(신) - 3학점</td>
  </tr>
</table><br>
<script>
const mES6_1 = document.querySelector('#PHYS472');
const mES6_2 = document.querySelector('#PHYS481');
const mES6_3 = document.querySelector('#PHYS262');
const mES6_4 = document.querySelector('#PHYS462');

function mES6() {
  if(mES6_1.checked == true) {
    mES6_2.checked = false;
    mES6_3.checked = false;
    mES6_4.checked = false;
  } }
function mES6_() {
  if(mES6_2.checked == true) {
    mES6_1.checked = false;
    mES6_3.checked = false;
    mES6_4.checked = false;
  } }
function mES6__() {
  if(mES6_3.checked == true) {
    mES6_1.checked = false;
    mES6_2.checked = false;
    mES6_4.checked = false;
  } }
function mES6___() {
  if(mES6_4.checked == true) {
    mES6_1.checked = false;
    mES6_2.checked = false;
    mES6_3.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>7영역 전산물리</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[PHYS461]전산물리학및실습 - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>8영역 현대물리학</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="PHYS301" value="4" onClick="mES8();itemSum(this.form);">&nbsp;[PHYS301]현대물리학및실험(구) - 4학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="PHYS304" value="2" onClick="mES8_();itemSum(this.form);">&nbsp;[PHYS462]현대물리학실험(신) - 2학점</td>
  </tr>
</table><br>
<script>
const mES8_1 = document.querySelector('#PHYS301');
const mES8_2 = document.querySelector('#PHYS304');

function mES8() {
  if(mES8_1.checked == true) {
    mES8_2.checked = false;
  } }
function mES8_() {
  if(mES8_2.checked == true) {
    mES8_1.checked = false;
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
