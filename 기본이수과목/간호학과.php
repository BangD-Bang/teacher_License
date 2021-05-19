<script>
function area_c() {
  var a = "2영역";
  var b = "3영역";
  var c = "5영역";
  var d = "8영역";
  var e = "9영역";
  var f = "10영역";
  var g = "11영역";
  const ary = [a,b,c,d,e,f,g];
  var n = 0;
  function aryDelete(theV) {
    for(var i = 0; i < ary.length; i++) {
      if(ary[i] === theV) {
        ary.splice(i, 1);
        i--;
      }
    }
  }
  if(mES2_1.checked == true || mES2_4.checked == true || (mES2_2.checked == true && mES2_3.checked == true)) {aryDelete(a); n = n + 1;}
  if((mES3_1.checked == true && (mES3_2.checked == true || mES3_3.checked == true || mES3_4.checked == true)) || (mES3_4.checked == true && (mES3_1.checked == true || mES3_2.checked == true || mES3_3.checked == true))) {aryDelete(b); n = n + 1;}

  if(mES5_1.checked == true && (mES5_2.checked == true || mES5_4.checked == true || mES5_5.checked == true || mES5_6.checked == true)) {
    const mES5_1Check = true;
  } else { const mES5_1Check = false; }
  if(mES5_2.checked == true && (mES5_1.checked == true || mES5_4.checked == true || mES5_5.checked == true || mES5_6.checked == true)) {
    const mES5_2Check = true;
  } else { const mES5_2Check = false; }
  if(mES5_4.checked == true && (mES5_1.checked == true || mES5_2.checked == true || mES5_5.checked == true || mES5_6.checked == true)) {
    const mES5_4Check = true;
  } else { const mES5_4Check = false; }

  if(mES5_3.checked == true || mES5_1Check == true || mES5_2Check == true || mES5_4Check == true) {aryDelete(c); n = n + 1;}
  if(mES8_1.checked == true || mES8_2.checked == true || mES8_5.checked == true || (mES8_3.checked == true && mES8_4.checked == true)) {aryDelete(d); n = n + 1;}
  if(mES9_1.checked == true) {aryDelete(e); n = n + 1;}
  if(mES10_1.checked == true || mES10_2.checked == true || mES10_5.checked == true || (mES10_3.checked == true && mES10_4.checked == true)) {aryDelete(f); n = n + 1;}
  if(mES11_1.checked == true || mES11_2.checked == true || mES11_5.checked == true || (mES11_3.checked == true && mES11_4.checked == true)) {aryDelete(g); n = n + 1;}
  if(n >= 7) {
    document.getElementById('area_result').value = "이수완료";
  } else if(n == 0) {
    document.getElementById('area_result').value = "7개 영역 <font color='red'><b>미이수</b></font>";
  } else if(n >= 1) {
    document.getElementById('area_result').value = ary+" <font color='red'><b>미이수</b></font>";
  } else {
    document.getElementById('area_result').value = "";
  }
}
</script>

<form name="form">
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2영역 간호관리학 - 3학점 이상</b>
    <br>(구), (신)과목 중복인정 불가
  <tr>
    <td height="25">&nbsp;<input name="chkbox" id="area2_1" type="checkbox" value="3" onClick="mES2();itemSum(this.form);">
      <label for="area2_1">&nbsp;[NRSG481] 간호관리학(구) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" id="area2_2" type="checkbox" value="2" onClick="mES2();itemSum(this.form);">
      <label for="area2_2">&nbsp;[NRSG490] 간호관리학실습I(구) - 2학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" id="area2_3" type="checkbox" value="1" onClick="mES2();itemSum(this.form);">
      <label for="area2_3">&nbsp;[NRSG492] 간호관리학실습II(구) - 1학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" id="area2_4" type="checkbox" value="3" onClick="mES2_();itemSum(this.form);">
      <label for="area2_4">&nbsp;[NRSG496] 간호관리학실습(신) - 3학점</label></td>
  </tr>
</table><br>
<script>
  const mES2_1 = document.querySelector('#area2_1');
  const mES2_2 = document.querySelector('#area2_2');
  const mES2_3 = document.querySelector('#area2_3');
  const mES2_4 = document.querySelector('#area2_4');

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
    <td height="25">&nbsp;<input name="chkbox" id="area3_1" type="checkbox" value="2" onClick="itemSum(this.form);">
      <label for="area3_1">&nbsp;[NRSG261] 기본간호학I - 2학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" id="area3_2" type="checkbox" value="1" onClick="itemSum(this.form);">
      <label for="area3_2">&nbsp;[NRSG262] 기본간호학II - 1학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" id="area3_3" type="checkbox" value="1" onClick="itemSum(this.form);">
      <label for="area3_3">&nbsp;[NRSG265] 기본간호학실습I - 1학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" id="area3_4" type="checkbox" value="2" onClick="itemSum(this.form);">
      <label for="area3_4">&nbsp;[NRSG266] 기본간호학실습II - 2학점</label></td>
  </tr>
</table><br>
<script>
  const mES3_1 = document.querySelector('#area3_1');
  const mES3_2 = document.querySelector('#area3_2');
  const mES3_3 = document.querySelector('#area3_3');
  const mES3_4 = document.querySelector('#area3_4');
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>4영역 상담이론과실제 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_1" value="3" onClick="mES4();itemSum(this.form);">
      <label for="area4_1">&nbsp;[NRSG155] 인간행동과의사소통(구) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_2" value="2" onClick="mES4_();itemSum(this.form);">
      <label for="area4_2">&nbsp;[NRSG159] 건강의사소통(신) - 2학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_3" value="2" onClick="mES4__();itemSum(this.form);">
      <label for="area4_3">&nbsp;[NRSG156] 인간심리와행동(신) - 2학점</label></td>
  </tr>
</table><br>
<script>
const mES4_1 = document.querySelector('#area4_1');
const mES4_2 = document.querySelector('#area4_2');
const mES4_3 = document.querySelector('#area4_3');

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
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_1" value="2" onClick="itemSum(this.form);">
      <label for="area5_1">&nbsp;[NRSG240] 기초간호과학I - 2학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_2" value="2" onClick="itemSum(this.form);">
      <label for="area5_2">&nbsp;[NRSG241] 기초간호과학II - 2학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_3" value="3" onClick="itemSum(this.form);">
      <label for="area5_3">&nbsp;[NRSG243] 기초간호과학III - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_4" value="2" onClick="itemSum(this.form);">
      <label for="area5_4">&nbsp;[NRSG244] 기초간호과학IV - 2학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_5" value="1" onClick="itemSum(this.form);">
      <label for="area5_5">&nbsp;[NRSG250] 기초간호과학실습I - 1학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_6" value="1" onClick="itemSum(this.form);">
      <label for="area5_6">&nbsp;[NRSG251] 기초간호과학실습II - 1학점</label></td>
  </tr>
</table><br>
<script>
  const mES5_1 = document.querySelector('#area5_1');
  const mES5_2 = document.querySelector('#area5_2');
  const mES5_3 = document.querySelector('#area5_3');
  const mES5_4 = document.querySelector('#area5_4');
  const mES5_5 = document.querySelector('#area5_5');
  const mES5_6 = document.querySelector('#area5_6');
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>6영역 건강사정및실습</b>
    <br>(구), (신)과목 중복인정 불가
  <tr>
    <td height="25">&nbsp;<input name="chkbox" id="area6_1" type="checkbox" value="2" onClick="mES6();itemSum(this.form);">
      <label for="area6_1">&nbsp;[NRSG270] 건강사정(구) - 2학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" id="area6_2" type="checkbox" value="1" onClick="mES6_();itemSum(this.form);">
      <label for="area6_2">&nbsp;[NRSG271] 건강사정(신) - 1학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" id="area6_3" type="checkbox" value="1" onClick="mES6_();itemSum(this.form);">
      <label for="area6_3">&nbsp;[NRSG273] 건강사정실습(신) - 1학점</label></td>
  </tr>
</table><br>
<script>
  const mES6_1 = document.querySelector('#area6_1');
  const mES6_2 = document.querySelector('#area6_2');
  const mES6_3 = document.querySelector('#area6_3');

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
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area7_1" value="1" onClick="mES7();itemSum(this.form);">
      <label for="area7_1">&nbsp;[NRSG472] 지역사회간호학실습II(구) - 1학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area7_2" value="3" onClick="mES7_();itemSum(this.form);">
      <label for="area7_2">&nbsp;[NRSG474] 지역사회간호학실습(신) - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES7_1 = document.querySelector('#area7_1');
const mES7_2 = document.querySelector('#area7_2');

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
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_1" value="3" onClick="itemSum(this.form);">
      <label for="area8_1">&nbsp;[NRSG341] 아동간호학I - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_2" value="3" onClick="itemSum(this.form);">
      <label for="area8_2">&nbsp;[NRSG342] 아동간호학II - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_3" value="2" onClick="itemSum(this.form);">
      <label for="area8_3">&nbsp;[NRSG351] 아동간호학실습I - 2학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_4" value="1" onClick="itemSum(this.form);">
      <label for="area8_4">&nbsp;[NRSG353] 아동간호학실습II - 1학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_5" value="3" onClick="itemSum(this.form);">
      <label for="area8_5">&nbsp;[NRSG435] 아동간호학실습및실습 - 3학점</label></td>
  </tr>
</table><br>
<script>
  const mES8_1 = document.querySelector('#area8_1');
  const mES8_2 = document.querySelector('#area8_2');
  const mES8_3 = document.querySelector('#area8_3');
  const mES8_4 = document.querySelector('#area8_4');
  const mES8_5 = document.querySelector('#area8_5');
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>9영역 성인간호학및실습 - 3학점 이상</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area9_1" value="3" onClick="itemSum(this.form);">
      <label for="area9_1">&nbsp;[NRSG280] 성인간호학V - 3학점</label></td>
  </tr>
</table><br>
<script>
  const mES9_1 = document.querySelector('#area9_1');
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>10영역 정신간호학및실습 - 3학점 이상</b>
    <br>(구), (신)과목 중복인정 불가
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area10_1" value="3" onClick="mES10();itemSum(this.form);">
      <label for="area10_1">&nbsp;[NRSG440] 정신간호학I(구) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area10_2" value="3" onClick="mES10();itemSum(this.form);">
      <label for="area10_2">&nbsp;[NRSG441] 정신간호학II(구) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area10_3" value="2" onClick="mES10();itemSum(this.form);">
      <label for="area10_3">&nbsp;[NRSG450] 정신간호학실습I(구) - 2학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area10_4" value="1" onClick="mES10();itemSum(this.form);">
      <label for="area10_4">&nbsp;[NRSG452] 정신간호학실습II(구) - 1학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area10_5" value="3" onClick="mES10_();itemSum(this.form);">
      <label for="area10_5">&nbsp;[NRSG454] 정신간호학실습(신) - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES10_1 = document.querySelector('#area10_1');
const mES10_2 = document.querySelector('#area10_2');
const mES10_3 = document.querySelector('#area10_3');
const mES10_4 = document.querySelector('#area10_4');
const mES10_5 = document.querySelector('#area10_5');

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
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area11_1" value="3" onClick="mES11();itemSum(this.form);">
      <label for="area11_1">&nbsp;[NRSG460] 지역사회간호학I(구) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area11_2" value="3" onClick="mES11();itemSum(this.form);">
      <label for="area11_2">&nbsp;[NRSG461] 지역사회간호학II(구) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area11_3" value="2" onClick="mES11();itemSum(this.form);">
      <label for="area11_3">&nbsp;[NRSG464] 지역사회간호학개론(구) - 2학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area11_4" value="2" onClick="mES11();itemSum(this.form);">
      <label for="area11_4">&nbsp;[NRSG471] 지역사회간호학실습I(구) - 2학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area11_5" value="3" onClick="mES11_();itemSum(this.form);">
      <label for="area11_5">&nbsp;[NRSG465] 지역간호학실습I(신) - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES11_1 = document.querySelector('#area11_1');
const mES11_2 = document.querySelector('#area11_2');
const mES11_3 = document.querySelector('#area11_3');
const mES11_4 = document.querySelector('#area11_4');
const mES11_5 = document.querySelector('#area11_5');

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
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area12_1" value="1" onClick="itemSum(this.form);">
      <label for="area12_1">&nbsp;[NRSG287] 성인간호학실습III - 1학점</label></td>
  </tr>
</table><br>

<table>
  <tr>
    <td height="25">&nbsp;합계:&nbsp;<input id="total_sum" name="total_sum" type="text" size="20"></td>
    <input type="hidden" id="area_result" name="area_result" value="">
    <input type="hidden" id="majorEduOverlap" name="majorEduOverlap" value="0">
  </tr>
  <tr>
    <td height="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" id="popUpSubmit" value="확인" onclick="area_c();setParentText();"></td>
  </tr>
</table>
</form>
