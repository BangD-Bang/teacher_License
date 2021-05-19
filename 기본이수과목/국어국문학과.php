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
  if(mES2_1_1.checked == true || mES2_1_2.checked == true || mES2_2_1.checked == true || mES2_2_2.checked == true || mES2_3_1.checked == true || mES2_3_2.checked == true) {aryDelete(b); n = n + 1;}
  if(mES3_1_1.checked == true || mES3_2_1.checked == true || mES3_2_2.checked == true) {aryDelete(c); n = n + 1;}
  if(mES4_1_1.checked == true || mES4_2_1.checked == true || mES4_3_1.checked == true || mES4_4_1.checked == true || mES4_4_2.checked == true || mES4_5_1.checked == true || mES4_5_2.checked == true) {aryDelete(d); n = n + 1;}
  if(mES5_1_1.checked == true || mES5_1_2.checked == true || mES5_2_1.checked == true || mES5_2_2.checked == true) {aryDelete(e); n = n + 1;}
  if(n >= 5) {
    document.getElementById('area_result').value = "이수완료";
  } else if(n == 0) {
    document.getElementById('area_result').value = "5개 영역 <font color='red'><b>미이수</b></font>";
  } else if(n >= 1) {
    document.getElementById('area_result').value = ary+" <font color='red'><b>미이수</b></font>";
  } else {
    document.getElementById('area_result').value = "";
  }
}
</script>

<form name="form">
 <b><font color="red">1~5영역별 최소 1과목 이상 이수<br>
 (구), (신)과목 중복인정 불가</font></b><br><br>
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1영역 국어교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area1_1" value="3" onClick="itemSum(this.form);">
      <label for="area1_1">&nbsp;[KORE227] 국어교과교육론 - 3학점</label></td>
  </tr>
</table><br>
<script type="text/javascript">
  const mES1_1 = document.querySelector('#area1_1');
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2-1영역 국어학개론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_1_1" value="3" onClick="mES2_1();itemSum(this.form);">
      <label for="area2_1_1">&nbsp;[KORE202] 국어학의이해(구) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_1_2" value="3" onClick="mES2_1_();itemSum(this.form);">
      <label for="area2_1_2">&nbsp;[KORE230] 한국어학의이해(구) - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES2_1_1 = document.querySelector('#area2_1_1');
const mES2_1_2 = document.querySelector('#area2_1_2');

function mES2_1() {
  if(mES2_1_1.checked == true) {
    mES2_1_2.checked = false;
  } }
function mES2_1_() {
  if(mES2_1_2.checked == true) {
    mES2_1_1.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2-2영역 국어문법론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_2_1" value="3" onClick="mES2_2();itemSum(this.form);">
      <label for="area2_2_1">&nbsp;[KORE206] 국어문법의이해(구) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_2_2" value="3" onClick="mES2_2_();itemSum(this.form);">
      <label for="area2_2_2">&nbsp;[KORE234] 한국어문법의이해(구) - 3학점</label></td>
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
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_3_1" value="3" onClick="mES2_3();itemSum(this.form);">
      <label for="area2_3_1">&nbsp;[KORE205] 국어발달사(구) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_3_2" value="3" onClick="mES2_3_();itemSum(this.form);">
      <label for="area2_3_2">&nbsp;[KORE233] 한국어발달사(구) - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES2_3_1 = document.querySelector('#area2_3_1');
const mES2_3_2 = document.querySelector('#area2_3_2');

function mES2_3() {
  if(mES2_3_1.checked == true) {
    mES2_3_2.checked = false;
  } }
function mES2_3_() {
  if(mES2_3_2.checked == true) {
    mES2_3_1.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>3-1영역 국문학개론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_1_1" rowspan=""value="3" onClick="itemSum(this.form);">
      <label for="area3_1_1">&nbsp;[KORE203] 한국문학의이해 - 3학점</label></td>
  </tr>
</table><br>
<script type="text/javascript">
  const mES3_1_1 = document.querySelector('#area3_1_1');
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>3-2영역 국문학사 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_2_1" value="3" onClick="mES3_2();itemSum(this.form);">
      <label for="area3_2_1">&nbsp;[KORE215] 고전문학사 - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_2_2" value="3" onClick="mES3_2_();itemSum(this.form);">
      <label for="area3_2_2">&nbsp;[KORE213] 현대문학사 - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES3_2_1 = document.querySelector('#area3_2_1');
const mES3_2_2 = document.querySelector('#area3_2_2');

function mES3_2() {
  if(mES3_2_1.checked == true) {
    mES3_2_2.checked = false;
  } }
function mES3_2_() {
  if(mES3_2_2.checked == true) {
    mES3_2_1.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>4-1영역 문학교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_1_1" value="3" onClick="itemSum(this.form);">
      <label for="area4_1_1">&nbsp;[KORE210] 현대비평론 - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>4-2영역 희곡교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_2_1" value="3" onClick="itemSum(this.form);">
      <label for="area4_2_1">&nbsp;[KORE211] 현대희곡론 - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>4-3영역 수필교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_3_1" value="3" onClick="itemSum(this.form);">
      <label for="area4_3_1">&nbsp;[KORE217] 구비문학론 - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>4-4영역 시가교육론 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_4_1" value="3" onClick="mES4_4();itemSum(this.form);">
      <label for="area4_4_1">&nbsp;[KORE218] 근세시가론 - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_4_2" value="3" onClick="mES4_4_();itemSum(this.form);">
      <label for="area4_4_2">&nbsp;[KORE209] 현대시론 - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES4_1_1 = document.querySelector('#area4_1_1');
const mES4_2_1 = document.querySelector('#area4_2_1');
const mES4_3_1 = document.querySelector('#area4_3_1');
const mES4_4_1 = document.querySelector('#area4_4_1');
const mES4_4_2 = document.querySelector('#area4_4_2');

function mES4_4() {
  if(mES4_4_1.checked == true) {
    mES4_4_2.checked = false;
  } }
function mES4_4_() {
  if(mES4_4_2.checked == true) {
    mES4_4_1.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>4-5영역 소설교육론 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_5_1" value="3" onClick="mES4_5();itemSum(this.form);">
      <label for="area4_5_1">&nbsp;[KORE219] 고전소설론 - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_5_2" value="3" onClick="mES4_5_();itemSum(this.form);">
      <label for="area4_5_2">&nbsp;[KORE223] 현대소설론 - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES4_5_1 = document.querySelector('#area4_5_1');
const mES4_5_2 = document.querySelector('#area4_5_2');

function mES4_5() {
  if(mES4_5_1.checked == true) {
    mES4_5_2.checked = false;
  } }
function mES4_5_() {
  if(mES4_5_2.checked == true) {
    mES4_5_1.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>5-1영역 의사소통교육론(표현교육론)</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_1_1" value="3" onClick="mES5_1();itemSum(this.form);">
      <label for="area5_1_1">&nbsp;[KORE225] 국어표현론(구) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_1_2" value="3" onClick="mES5_1_();itemSum(this.form);">
      <label for="area5_1_2">&nbsp;[KORE235] 한국어표현론(신) - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES5_1_1 = document.querySelector('#area5_1_1');
const mES5_1_2 = document.querySelector('#area5_1_2');

function mES5_1() {
  if(mES5_1_1.checked == true) {
    mES5_1_2.checked = false;
  } }
function mES5_1_() {
  if(mES5_1_2.checked == true) {
    mES5_1_1.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>5-2영역 의사소통교육론(이해교육론)</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_2_1" value="3" onClick="mES5_2();itemSum(this.form);">
      <label for="area5_2_1">&nbsp;[KORE414] 국어정책론(구) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_2_2" value="3" onClick="mES5_2_();itemSum(this.form);">
      <label for="area5_2_2">&nbsp;[KORE426] 한국어정책론(신) - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES5_2_1 = document.querySelector('#area5_2_1');
const mES5_2_2 = document.querySelector('#area5_2_2');

function mES5_2() {
  if(mES5_2_1.checked == true) {
    mES5_2_2.checked = false;
  } }
function mES5_2_() {
  if(mES5_2_2.checked == true) {
    mES5_2_1.checked = false;
  } }
</script>

<table>
  <tr>
    <td height="25">&nbsp;합계:&nbsp;<input id="total_sum" name="total_sum" type="text" size="20"></td>
    <input type="hidden" id="area_result" name="area_result" value="">
    <input type="hidden" id="majorEduOverlap" name="majorEduOverlap" value="0">
  </tr>
  <tr>
    <td height="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" id="popUpSubmit" value="확인" onclick="overlap_c();area_c();setParentText();"></td>
  </tr>
</table>
</form>
