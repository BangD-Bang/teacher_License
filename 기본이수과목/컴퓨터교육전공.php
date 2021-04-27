<script type="text/javascript">
function area_c() {
  var a = "1-1영역";
  var a_a = "1-2영역";
  var b = "2영역";
  var c = "3영역";
  var d = "4영역";
  var e = "5영역";
  var f = "6영역";
  const ary = [a,a_a,b,c,d,e,f];
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
  if(mES1_2.checked == true) {aryDelete(a_a); n = n + 1;}
  if(mES2_1.checked == true || mES2_2.checked == true || mES2_3.checked == true) {aryDelete(b); n = n + 1;}
  if(mES3_1.checked == true || mES3_2.checked == true) {aryDelete(c); n = n + 1;}
  if(mES4_1.checked == true || mES4_2.checked == true) {aryDelete(d); n = n + 1;}
  if(mES5_1.checked == true || mES5_2.checked == true) {aryDelete(e); n = n + 1;}
  if(mES6_1.checked == true || mES6_2.checked == true) {aryDelete(f); n = n + 1;}
  if(n >= 7) {
    document.getElementById('area_result').value = "(영역조건: 이수완료)<br>";
  } else if(n == 0) {
    document.getElementById('area_result').value = "(영역조건: 6개 영역 미이수)<br>";
  } else if(n >= 1) {
    document.getElementById('area_result').value = "(영역조건: "+ary+" 미이수)<br>";
  } else {
    document.getElementById('area_result').value = "";
  }
}
</script>

<form name="form">
  <b><font color="red">1영역 필수, 2~6영역 각 1과목 이상 이수</font></b>
  <br><br>
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1-1영역 컴퓨터(정보)교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area1_1" value="2" onClick="itemSum(this.form);">&nbsp;정보&middot;컴퓨터교과교육론</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1-2영역 프로그래밍</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area1_2" value="2" onClick="itemSum(this.form);">&nbsp;고급프로그래밍</td>
  </tr>
</table><br>
<script type="text/javascript">
  const mES1_1 = document.querySelector('#area1_1');
  const mES1_2 = document.querySelector('#area1_2');
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2영역 알고리즘, 이산수학, 인공지능 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_1" value="2" onClick="mES2();itemSum(this.form);">&nbsp;알고리즘특론</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_2" value="2" onClick="mES2_();itemSum(this.form);">&nbsp;이산구조특론</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_3" value="2" onClick="mES2__();itemSum(this.form);">&nbsp;인공지능특론</td>
  </tr>
</table><br>
<script>
const mES2_1 = document.querySelector('#area2_1');
const mES2_2 = document.querySelector('#area2_2');
const mES2_3 = document.querySelector('#area2_3');

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
  <b>3영역 자료구조, 데이터베이스 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_1" value="2" onClick="mES3();itemSum(this.form);">&nbsp;고급데이터구조</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_2" value="2" onClick="mES3_();itemSum(this.form);">&nbsp;데이터베이스특론</td>
  </tr>
</table><br>
<script>
const mES3_1 = document.querySelector('#area3_1');
const mES3_2 = document.querySelector('#area3_2');

function mES3() {
  if(mES3_1.checked == true) {
    mES3_2.checked = false;
  } }
function mES3_() {
  if(mES3_2.checked == true) {
    mES3_1.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>4영역 운영체제, 네트워크 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_1" value="2" onClick="mES4();itemSum(this.form);">&nbsp;오퍼에리팅시스템특론</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_2" value="2" onClick="mES4_();itemSum(this.form);">&nbsp;컴퓨터네트워크특론</td>
  </tr>
</table><br>
<script>
const mES4_1 = document.querySelector('#area4_1');
const mES4_2 = document.querySelector('#area4_2');

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
  <b>5영역 컴퓨터구조, 논리회로 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_1" value="2" onClick="mES5();itemSum(this.form);">&nbsp;고급컴퓨터구조</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_2" value="2" onClick="mES5_();itemSum(this.form);">&nbsp;컴퓨터디자인특론</td>
  </tr>
</table><br>
<script>
const mES5_1 = document.querySelector('#area5_1');
const mES5_2 = document.querySelector('#area5_2');

function mES5() {
  if(mES5_1.checked == true) {
    mES5_2.checked = false;
  } }
function mES5_() {
  if(mES5_2.checked == true) {
    mES5_1.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>6영역 정보통신윤리, 소프트웨어공학 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area6_1" value="2" onClick="mES6();itemSum(this.form);">&nbsp;정보윤리와보안</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area6_2" value="2" onClick="mES6_();itemSum(this.form);">&nbsp;소프트웨어공학특론</td>
  </tr>
</table><br>
<script>
const mES6_1 = document.querySelector('#area6_1');
const mES6_2 = document.querySelector('#area6_2');

function mES6() {
  if(mES6_1.checked == true) {
    mES6_2.checked = false;
  } }
function mES6_() {
  if(mES6_2.checked == true) {
    mES6_1.checked = false;
  } }
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
