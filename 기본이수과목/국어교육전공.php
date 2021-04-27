<script>
function area_c() {
  var a = "1영역";
  var b = "2영역";
  var c = "3영역";
  var d = "4영역";
  var e = "5영역";
  const ary = [a,b,c,d,e];
  var n = 0;
  function aryDelete(theV) {
    for(var i = 0; i < ary.length; i++) {
      if(ary[i] === theV) {
        ary.splice(i, 1);
        i--;
      }
    }
  }
  if(mES1_1.checked == true) {aryDelete(a); n = n + 1;}
  if(mES2_1_1.checked == true || mES2_2_1.checked == true || mES2_2_2.checked == true || mES2_3_1.checked == true) {aryDelete(b); n = n + 1;}
  if(mES3_1_1.checked == true || mES3_2_1.checked == true) {aryDelete(c); n = n + 1;}
  if(mES4_1_1.checked == true || mES4_2_1.checked == true || mES4_2_2.checked == true || mES4_2_3.checked == true || mES4_2_4.checked == true || mES4_3_1.checked == true || mES4_3_2.checked == true) {aryDelete(d); n = n + 1;}
  if(mES5_2_1.checked == true || mES5_3_1.checked == true) {aryDelete(e); n = n + 1;}
  if(n >= 5) {
    document.getElementById('area_result').value = "(영역조건: 이수완료)<br>";
  } else if(n == 0) {
    document.getElementById('area_result').value = "(영역조건: 5개 영역 미이수)<br>";
  } else if(n >= 1) {
    document.getElementById('area_result').value = "(영역조건: "+ary+" 미이수)<br>";
  } else {
    document.getElementById('area_result').value = "";
  }
}
</script>

<form name="form">
<b><font color="red">1~5영역 각 1과목 이상, 모든영역 이수</font></b>
<br><br>
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1영역 국어교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area1_1" value="2" onClick="itemSum(this.form);">&nbsp;국어교과교육론</td>
  </tr>
</table><br>
<script type="text/javascript">
  const mES1_1 = document.querySelector('#area1_1');
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2-1영역 국어학개론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_1_1" value="2" onClick="itemSum(this.form);">&nbsp;국어학의일반이론</td>
  </tr>
</table><br>
<script type="text/javascript">
  const mES2_1_1 = document.querySelector('#area2_1_1');
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2-2영역 국어문법론 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_2_1" value="2" onClick="mES2_2();itemSum(this.form);">&nbsp;국어음운론</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_2_2" value="2" onClick="mES2_2_();itemSum(this.form);">&nbsp;문법교육론</td>
  </tr>
</table><br>
<script>
const mES2_2_1 = document.querySelector('#area2_2_1');
const mES2_2_2 = document.querySelector('#area2_2_2');

function mES2_2() {
  if(mES2_2_1.checked == true) {
    mES2_2_2.checked = false;
  } }
function mES2_2_() {
  if(mES2_2_2.checked == true) {
    mES2_2_1.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2-3영역 국어사</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_3_1" value="2" onClick="itemSum(this.form);">&nbsp;국어발달사연구</td>
  </tr>
</table><br>
<script type="text/javascript">
  const mES2_3_1 = document.querySelector('#area2_3_1');
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>3-1영역 국문학개론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_1_1" value="2" onClick="itemSum(this.form);">&nbsp;국문학의일반이론</td>
  </tr>
</table><br>
<script type="text/javascript">
  const mES3_1_1 = document.querySelector('#area3_1_1');
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>3-2영역 국문학사</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_2_1" value="2" onClick="itemSum(this.form);">&nbsp;한국현대문학사연구</td>
  </tr>
</table><br>
<script type="text/javascript">
  const mES3_2_1 = document.querySelector('#area3_2_1');
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>4-1영역 문학교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_1_1" value="2" onClick="itemSum(this.form);">&nbsp;독서교육론</td>
  </tr>
</table><br>
<script type="text/javascript">
  const mES4_1_1 = document.querySelector('#area4_1_1');
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>4-2영역 소설교육론 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_2_1" value="2" onClick="mES4_2();itemSum(this.form);">&nbsp;한국현대소설론</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_2_2" value="2" onClick="mES4_2_();itemSum(this.form);">&nbsp;고전소설론</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_2_3" value="2" onClick="mES4_2__();itemSum(this.form);">&nbsp;현대소설교육론</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_2_4" value="2" onClick="mES4_2___();itemSum(this.form);">&nbsp;고전소설교육론</td>
  </tr>
</table><br>
<script>
const mES4_2_1 = document.querySelector('#area4_2_1');
const mES4_2_2 = document.querySelector('#area4_2_2');
const mES4_2_3 = document.querySelector('#area4_2_3');
const mES4_2_4 = document.querySelector('#area4_2_4');

function mES4_2() {
  if(mES4_2_1.checked == true) {
    mES4_2_2.checked = false;
    mES4_2_3.checked = false;
    mES4_2_4.checked = false;
  } }
function mES4_2_() {
  if(mES4_2_2.checked == true) {
    mES4_2_1.checked = false;
    mES4_2_3.checked = false;
    mES4_2_4.checked = false;
  } }
function mES4_2__() {
  if(mES4_2_3.checked == true) {
    mES4_2_1.checked = false;
    mES4_2_2.checked = false;
    mES4_2_4.checked = false;
  } }
function mES4_2___() {
  if(mES4_2_4.checked == true) {
    mES4_2_1.checked = false;
    mES4_2_2.checked = false;
    mES4_2_3.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>4-3영역 시가교육론, 희곡교육론, 수필교육론 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_3_1" value="2" onClick="mES4_3();itemSum(this.form);">&nbsp;고전시가교육론</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_3_2" value="2" onClick="mES4_3_();itemSum(this.form);">&nbsp;현대시교육론</td>
  </tr>
</table><br>
<script>
const mES4_3_1 = document.querySelector('#area4_3_1');
const mES4_3_2 = document.querySelector('#area4_3_2');

function mES4_3() {
  if(mES4_3_1.checked == true) {
    mES4_3_2.checked = false;
  } }
function mES4_3_() {
  if(mES4_3_2.checked == true) {
    mES4_3_1.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>5-2영역 표현교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_2_1" value="2" onClick="itemSum(this.form);">&nbsp;표현교육론</td>
  </tr>
</table><br>
<script type="text/javascript">
  const mES5_2_1 = document.querySelector('#area5_2_1');
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>5-3영역 이해교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_3_1" value="2" onClick="itemSum(this.form);">&nbsp;국어교과논리및논술</td>
  </tr>
</table><br>
<script type="text/javascript">
  const mES5_3_1 = document.querySelector('#area5_3_1');
</script>

<table>
  <tr>
    <td height="25">&nbsp;합계:&nbsp;<input id="total_sum" name="total_sum" type="text" size="20"></td>
    <input type="hidden" id="area_result" name="area_result" value="">
  </tr>
  <tr>
    <td height="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="확인" onclick="area_c();setParentText();"></td>
  </tr>
</table>
</form>
