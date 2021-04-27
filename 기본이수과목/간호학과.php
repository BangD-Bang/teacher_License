<form name="form">
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2영역 간호관리학 - 3학점 이상</b>
    <br>(구), (신)과목 중복인정 불가
  <tr>
    <td height="25">&nbsp;<input name="chkbox" id="NRSG481" type="checkbox" value="3" onClick="mES2();itemSum(this.form);">&nbsp;[NRSG481]간호관리학(구) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" id="NRSG490" type="checkbox" value="2" onClick="mES2();itemSum(this.form);">&nbsp;[NRSG490]간호관리학실습I(구) - 2학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" id="NRSG492" type="checkbox" value="1" onClick="mES2();itemSum(this.form);">&nbsp;[NRSG492]간호관리학실습II(구) - 1학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" id="NRSG496" type="checkbox" value="3" onClick="mES2_();itemSum(this.form);">&nbsp;[NRSG496]간호관리학실습(신) - 3학점</td>
  </tr>
</table><br>
<script>
  const mES2_1 = document.querySelector('#NRSG481');
  const mES2_2 = document.querySelector('#NRSG490');
  const mES2_3 = document.querySelector('#NRSG492');
  const mES2_4 = document.querySelector('#NRSG496');

  function mES2() {
    if(mES2_1.checked == true || mES2_2.checked == true || mES2_3.checked == true) {
      mES2_4.checked = false;
    } }
  function mES2_() {
    if(mES2_4.checked == true) {
      mES2_1.checked = false;
      mES2_2.checked = false;
      mES2_3.checked = false;
    } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>3영역 기본간호학 - 3학점 이상</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="2" onClick="itemSum(this.form);">&nbsp;[NRSG261]기본간호학I - 2학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="1" onClick="itemSum(this.form);">&nbsp;[NRSG262]기본간호학II - 1학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="1" onClick="itemSum(this.form);">&nbsp;[NRSG265]기본간호학실습I - 1학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="2" onClick="itemSum(this.form);">&nbsp;[NRSG266]기본간호학실습II - 2학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>4영역 상담이론과실제 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="NRSG155" value="3" onClick="mES4();itemSum(this.form);">&nbsp;[NRSG155]인간행동과의사소통(구) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="NRSG159" value="2" onClick="mES4_();itemSum(this.form);">&nbsp;[NRSG159]건강의사소통(신) - 2학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="NRSG156" value="2" onClick="mES4__();itemSum(this.form);">&nbsp;[NRSG156]인간심리와행동(신) - 2학점</td>
  </tr>
</table><br>
<script>
const mES4_1 = document.querySelector('#NRSG155');
const mES4_2 = document.querySelector('#NRSG159');
const mES4_3 = document.querySelector('#NRSG156');

function mES4() {
  if(mES4_1.checked == true) {
    mES4_2.checked = false;
    mES4_3.checked = false;
  } }
function mES4_() {
  if(mES4_2.checked == true) {
    mES4_1.checked = false;
    mES4_3.checked = false;
  } }
function mES4__() {
  if(mES4_3.checked == true) {
    mES4_1.checked = false;
    mES4_2.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>5영역 기초건강과학 - 3학점 이상</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox"value="2" onClick="itemSum(this.form);">&nbsp;[NRSG240]기초간호과학I - 2학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox"value="2" onClick="itemSum(this.form);">&nbsp;[NRSG241]기초간호과학II - 2학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox"value="3" onClick="itemSum(this.form);">&nbsp;[NRSG243]기초간호과학III - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox"value="2" onClick="itemSum(this.form);">&nbsp;[NRSG244]기초간호과학IV - 2학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox"value="1" onClick="itemSum(this.form);">&nbsp;[NRSG250]기초간호과학실습I - 1학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox"value="1" onClick="itemSum(this.form);">&nbsp;[NRSG251]기초간호과학실습II - 1학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>6영역 건강사정및실습</b>
    <br>(구), (신)과목 중복인정 불가
  <tr>
    <td height="25">&nbsp;<input name="chkbox" id="NRSG270" type="checkbox" value="2" onClick="mES6();itemSum(this.form);">&nbsp;[NRSG270]건강사정(구) - 2학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" id="NRSG271" type="checkbox" value="1" onClick="mES6_();itemSum(this.form);">&nbsp;[NRSG271]건강사정(신) - 1학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" id="NRSG273" type="checkbox" value="1" onClick="mES6_();itemSum(this.form);">&nbsp;[NRSG273]건강사정실습(신) - 1학점</td>
  </tr>
</table><br>
<script>
  const mES6_1 = document.querySelector('#NRSG270');
  const mES6_2 = document.querySelector('#NRSG271');
  const mES6_3 = document.querySelector('#NRSG273');

  function mES6() {
    if(mES6_1.checked == true) {
      mES6_2.checked = false;
      mES6_3.checked = false;
    } }
  function mES6_() {
    if(mES6_2.checked == true || mES6_3.checked == true) {
      mES6_1.checked = false;
    } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>7영역 학교보건및실습 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="NRSG472" value="1" onClick="mES7();itemSum(this.form);">&nbsp;[NRSG472]지역사회간호학실습II(구) - 1학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="NRSG474" value="3" onClick="mES7_();itemSum(this.form);">&nbsp;[NRSG474]지역사회간호학실습(신) - 3학점</td>
  </tr>
</table><br>
<script>
const mES7_1 = document.querySelector('#NRSG472');
const mES7_2 = document.querySelector('#NRSG474');

function mES7() {
  if(mES7_1.checked == true) {
    mES7_2.checked = false;
  } }
function mES7_() {
  if(mES7_2.checked == true) {
    mES7_1.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>8영역 아동간호학및실습 - 3학점 이상</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[NRSG341]아동간호학I - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[NRSG342]아동간호학II - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="2" onClick="itemSum(this.form);">&nbsp;[NRSG351]아동간호학실습I - 2학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="1" onClick="itemSum(this.form);">&nbsp;[NRSG353]아동간호학실습II - 1학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[NRSG435]아동간호학실습및실습 - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>9영역 성인간호학및실습 - 3학점 이상</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[NRSG280]성인간호학V - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>10영역 정신간호학및실습 - 3학점 이상</b>
    <br>(구), (신)과목 중복인정 불가
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="NRSG440" value="3" onClick="mES10();itemSum(this.form);">&nbsp;[NRSG440]정신간호학I(구) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="NRSG441" value="3" onClick="mES10();itemSum(this.form);">&nbsp;[NRSG441]정신간호학II(구) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="NRSG450" value="2" onClick="mES10();itemSum(this.form);">&nbsp;[NRSG450]정신간호학실습I(구) - 2학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="NRSG452" value="1" onClick="mES10();itemSum(this.form);">&nbsp;[NRSG452]정신간호학실습II(구) - 1학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="NRSG454" value="3" onClick="mES10_();itemSum(this.form);">&nbsp;[NRSG454]정신간호학실습(신) - 3학점</td>
  </tr>
</table><br>
<script>
const mES10_1 = document.querySelector('#NRSG440');
const mES10_2 = document.querySelector('#NRSG441');
const mES10_3 = document.querySelector('#NRSG450');
const mES10_4 = document.querySelector('#NRSG452');
const mES10_5 = document.querySelector('#NRSG454');

function mES10() {
  if(mES10_1.checked == true || mES10_2.checked == true || mES10_3.checked == true || mES10_4.checked == true) {
    mES10_5.checked = false;
  } }
function mES10_() {
  if(mES10_5.checked == true) {
    mES10_1.checked = false;
    mES10_2.checked = false;
    mES10_3.checked = false;
    mES10_4.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>11영역 지역사회간호학및실습 - 3학점 이상</b>
    <br>(구), (신)과목 중복인정 불가
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="NRSG460" value="3" onClick="mES11();itemSum(this.form);">&nbsp;[NRSG460]지역사회간호학I(구) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="NRSG461" value="3" onClick="mES11();itemSum(this.form);">&nbsp;[NRSG461]지역사회간호학II(구) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="NRSG464" value="2" onClick="mES11();itemSum(this.form);">&nbsp;[NRSG464]지역사회간호학개론(구) - 2학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="NRSG471" value="2" onClick="mES11();itemSum(this.form);">&nbsp;[NRSG471]지역사회간호학실습I(구) - 2학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="NRSG465" value="3" onClick="mES11_();itemSum(this.form);">&nbsp;[NRSG465]지역간호학실습I(신) - 3학점</td>
  </tr>
</table><br>
<script>
const mES11_1 = document.querySelector('#NRSG460');
const mES11_2 = document.querySelector('#NRSG461');
const mES11_3 = document.querySelector('#NRSG464');
const mES11_4 = document.querySelector('#NRSG471');
const mES11_5 = document.querySelector('#NRSG465');

function mES11() {
  if(mES11_1.checked == true || mES11_2.checked == true || mES11_3.checked == true || mES11_4.checked == true) {
    mES11_5.checked = false;
  } }
function mES11_() {
  if(mES11_5.checked == true) {
    mES11_1.checked = false;
    mES11_2.checked = false;
    mES11_3.checked = false;
    mES11_4.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>12영역 응급간호학및실습</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="1" onClick="itemSum(this.form);">&nbsp;[NRSG287]성인간호학실습III - 1학점</td>
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
