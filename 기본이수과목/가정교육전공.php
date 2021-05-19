<script>
function area_c() {
  var a = "1영역";
  var b = "2영역";
  var c = "3영역";
  var d = "4영역";
  var e = "5영역";
  var f = "6영역";
  var g = "7영역";
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
  if(mES1_1.checked == true) {aryDelete(a); n = n + 1;}
  if(mES2_1.checked == true || mES2_2.checked == true || mES2_3.checked == true) {aryDelete(b); n = n + 1;}
  if(mES3_1.checked == true || mES3_2.checked == true || mES3_3.checked == true) {aryDelete(c); n = n + 1;}
  if(mES4_1.checked == true) {aryDelete(d); n = n + 1;}
  if(mES5_1.checked == true || mES5_2.checked == true || mES5_3.checked == true) {aryDelete(e); n = n + 1;}
  if(mES6_1.checked == true || mES6_2.checked == true || mES6_3.checked == true) {aryDelete(f); n = n + 1;}
  if(mES7_1.checked == true) {aryDelete(g); n = n + 1;}
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
<b><font color="red">1~7영역 각 1과목 이상, 모든영역 이수</font></b>
<br><br>
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1영역 가정교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" class="area1" type="checkbox" id="area1_1" value="2" onClick="itemSum(this.form);">
      <label for="area1_1">&nbsp;가정교과교육론</label></td>
  </tr>
</table><br>
<script type="text/javascript">
  const mES1_1 = document.querySelector('#area1_1');
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2영역 영양학, 식품과조리 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" class="area2" type="checkbox" id="area2_1" value="2" onClick="mES2();itemSum(this.form);">
      <label for="area2_1">&nbsp;창의인성을위한조리과학</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" class="area2" type="checkbox" id="area2_2" value="2" onClick="mES2_();itemSum(this.form);">
      <label for="area2_2">&nbsp;영양학연구</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" class="area2" type="checkbox" id="area2_3" value="2" onClick="mES2__();itemSum(this.form);">
      <label for="area2_3">&nbsp;중등식품&middot;영양교과연구</label></td>
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
  <b>3영역 의복재료와관리, 의복디자인과구성 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" class="area3" type="checkbox" id="area3_1" value="2" onClick="mES3();itemSum(this.form);">
      <label for="area3_1">&nbsp;의복디자인및구성</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" class="area3" type="checkbox" id="area3_2" value="2" onClick="mES3_();itemSum(this.form);">
      <label for="area3_2">&nbsp;의복소재및관리</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" class="area3" type="checkbox" id="area3_3" value="2" onClick="mES3__();itemSum(this.form);">
      <label for="area3_3">&nbsp;중등의생활교과연구</label></td>
  </tr>
</table><br>
<script>
const mES3_1 = document.querySelector('#area3_1');
const mES3_2 = document.querySelector('#area3_2');
const mES3_3 = document.querySelector('#area3_3');

function mES3() {
  if(mES3_1.checked == true) {
    mES3_2.checked = false;
    mES3_3.checked = false;
  } }
function mES3_() {
  if(mES3_2.checked == true) {
    mES3_1.checked = false;
    mES3_3.checked = false;
  } }
function mES3__() {
  if(mES3_3.checked == true) {
    mES3_1.checked = false;
    mES3_2.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>4영역 주거학, 실내디자인</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" class="area4" type="checkbox" id="area4_1" value="2" onClick="itemSum(this.form);">
      <label for="area4_1">&nbsp;주거학특론</label></td>
  </tr>
</table><br>
<script type="text/javascript">
  const mES4_1 = document.querySelector('#area4_1');
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>5영역 가정경영, 소비자학 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" class="area5" type="checkbox" id="area5_1" value="2" onClick="mES5();itemSum(this.form);">
      <label for="area5_1">&nbsp;가정경영학특론</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" class="area5" type="checkbox" id="area5_2" value="2" onClick="mES5_();itemSum(this.form);">
      <label for="area5_2">&nbsp;소비자교육론세미나</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" class="area5" type="checkbox" id="area5_3" value="2" onClick="mES5__();itemSum(this.form);">
      <label for="area5_3">&nbsp;중등가정자원관리소비자교과연구</label></td>
  </tr>
</table><br>
<script>
const mES5_1 = document.querySelector('#area5_1');
const mES5_2 = document.querySelector('#area5_2');
const mES5_3 = document.querySelector('#area5_3');

function mES5() {
  if(mES5_1.checked == true) {
    mES5_2.checked = false;
    mES5_3.checked = false;
  } }
function mES5_() {
  if(mES5_2.checked == true) {
    mES5_1.checked = false;
    mES5_3.checked = false;
  } }
function mES5__() {
  if(mES5_3.checked == true) {
    mES5_1.checked = false;
    mES5_2.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>6영역 아동학, 가족학 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" class="area6" type="checkbox" id="area6_1" value="2" onClick="mES6();itemSum(this.form);">
      <label for="area6_1">&nbsp;아동발달특론</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" class="area6" type="checkbox" id="area6_2" value="2" onClick="mES6_();itemSum(this.form);">
      <label for="area6_2">&nbsp;청년발달특론</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" class="area6" type="checkbox" id="area6_3" value="2" onClick="mES6__();itemSum(this.form);">
      <label for="area6_3">&nbsp;중등아동&middot;가족교과연구</label></td>
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
  if(mES6_2.checked == true) {
    mES6_1.checked = false;
    mES6_3.checked = false;
  } }
function mES6__() {
  if(mES6_3.checked == true) {
    mES6_1.checked = false;
    mES6_2.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>7영역 가정생활과복지, 가정생활문화, 가정생활과진로</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" class="area7" type="checkbox" id="area7_1" value="2" onClick="itemSum(this.form);">
      <label for="area7_1">&nbsp;가정생활문화</label></td>
  </tr>
</table><br>
<script type="text/javascript">
  const mES7_1 = document.querySelector('#area7_1');
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
