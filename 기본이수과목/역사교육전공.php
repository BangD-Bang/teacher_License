<script type="text/javascript">
function area_c() {
  var a = "1영역";
  var b = "2영역";
  var c = "3영역";
  var d = "4영역";
  var e = "5영역";
  var f = "6영역";
  const ary = [a,b,c,d,e,f];
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
  if(mES3_1.checked == true || mES3_2.checked == true || mES3_3.checked == true || mES3_4.checked == true || mES3_5.checked == true) {aryDelete(c); n = n + 1;}
  if(mES4_1.checked == true || mES4_2.checked == true || mES4_3.checked == true || mES4_4.checked == true) {aryDelete(d); n = n + 1;}
  if(mES5_1.checked == true || mES5_2.checked == true || mES5_3.checked == true || mES5_4.checked == true || mES5_5.checked == true || mES5_6.checked == true || mES5_7.checked == true) {aryDelete(e); n = n + 1;}
  if(mES6_1.checked == true || mES6_2.checked == true || mES6_3.checked == true) {aryDelete(f); n = n + 1;}
  if(n >= 6) {
    document.getElementById('area_result').value = "이수완료";
  } else if(n == 0) {
    document.getElementById('area_result').value = "6개 영역 <font color='red'><b>미이수</b></font>";
  } else if(n >= 1) {
    document.getElementById('area_result').value = ary+" <font color='red'><b>미이수</b></font>";
  } else {
    document.getElementById('area_result').value = "";
  }
}
</script>

<form name="form">
<b><font color="red">영역조건: 1~6영역 각 1과목 이상, 모든영역 이수</font></b>
<br><br>
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1영역 역사교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area1_1" value="2" onClick="itemSum(this.form);">
      <label for="area1_1">&nbsp;역사교과교육론</label></td>
  </tr>
</table><br>
<script type="text/javascript">
  const mES1_1 = document.querySelector('#area1_1');
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2영역 역사학방법론 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_1" value="2" onClick="mES2();itemSum(this.form);">
      <label for="area2_1">&nbsp;한국사사료학습론</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_2" value="2" onClick="mES2_();itemSum(this.form);">
      <label for="area2_2">&nbsp;동양사사료학습론</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_3" value="2" onClick="mES2__();itemSum(this.form);">
      <label for="area2_3">&nbsp;서양사사료학습론</label></td>
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
  <b>3영역 분야사<br>
  &#42; 표시된 과목은 1과목만 인정</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_1" value="2" onClick="itemSum(this.form);">
      <label for="area3_1">&nbsp;한국사상사특강</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_2" value="2" onClick="itemSum(this.form);">
      <label for="area3_2">&nbsp;한일관계사특강</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_3" value="2" onClick="mES3();itemSum(this.form);">
      <label for="area3_3">&nbsp;&#42;한국사학사특강</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_4" value="2" onClick="mES3_();itemSum(this.form);">
      <label for="area3_4">&nbsp;&#42;중국사학사특강</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_5" value="2" onClick="mES3__();itemSum(this.form);">
      <label for="area3_5">&nbsp;&#42;서양사학사특강</label></td>
  </tr>
</table><br>
<script>
const mES3_1 = document.querySelector('#area3_1');
const mES3_2 = document.querySelector('#area3_2');
const mES3_3 = document.querySelector('#area3_3');
const mES3_4 = document.querySelector('#area3_4');
const mES3_5 = document.querySelector('#area3_5');

function mES3() {
  if(mES3_3.checked == true) {
    mES3_4.checked = false;
    mES3_5.checked = false;
  } }
function mES3_() {
  if(mES3_4.checked == true) {
    mES3_3.checked = false;
    mES3_5.checked = false;
  } }
function mES3__() {
  if(mES3_5.checked == true) {
    mES3_3.checked = false;
    mES3_4.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>4영역 한국사</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_1" value="2" onClick="itemSum(this.form);">
      <label for="area4_1">&nbsp;한국고대사연구</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_2" value="2" onClick="itemSum(this.form);">
      <label for="area4_2">&nbsp;고려시대사연구</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_3" value="2" onClick="itemSum(this.form);">
      <label for="area4_3">&nbsp;조선시대사연구</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_4" value="2" onClick="itemSum(this.form);">
      <label for="area4_4">&nbsp;개화일제시대사연구</label></td>
  </tr>
</table><br>
<script type="text/javascript">
  const mES4_1 = document.querySelector('#area4_1');
  const mES4_2 = document.querySelector('#area4_2');
  const mES4_3 = document.querySelector('#area4_3');
  const mES4_4 = document.querySelector('#area4_4');
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>5영역 세계사</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_1" value="2" onClick="itemSum(this.form);">
      <label for="area5_1">&nbsp;중국고대사연구</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_2" value="2" onClick="itemSum(this.form);">
      <label for="area5_2">&nbsp;중국중세사연구</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_3" value="2" onClick="itemSum(this.form);">
      <label for="area5_3">&nbsp;중국근대사연구</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_4" value="2" onClick="itemSum(this.form);">
      <label for="area5_4">&nbsp;서양고대사연구</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_5" value="2" onClick="itemSum(this.form);">
      <label for="area5_5">&nbsp;서양중세사연구</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_6" value="2" onClick="itemSum(this.form);">
      <label for="area5_6">&nbsp;서양근대사연구</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_7" value="2" onClick="itemSum(this.form);">
      <label for="area5_7">&nbsp;동아시아사특강</label></td>
  </tr>
</table><br>
<script type="text/javascript">
  const mES5_1 = document.querySelector('#area5_1');
  const mES5_2 = document.querySelector('#area5_2');
  const mES5_3 = document.querySelector('#area5_3');
  const mES5_4 = document.querySelector('#area5_4');
  const mES5_5 = document.querySelector('#area5_5');
  const mES5_6 = document.querySelector('#area5_6');
  const mES5_7 = document.querySelector('#area5_7');
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>6영역 현대사</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area6_1" value="2" onClick="itemSum(this.form);">
      <label for="area6_1">&nbsp;한국현대사연구</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area6_2" value="2" onClick="itemSum(this.form);">
      <label for="area6_2">&nbsp;중국현대사특강</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area6_3" value="2" onClick="itemSum(this.form);">
      <label for="area6_3">&nbsp;서양현대사특강</label></td>
  </tr>
</table><br>
<script type="text/javascript">
const mES6_1 = document.querySelector('#area6_1');
const mES6_2 = document.querySelector('#area6_2');
const mES6_3 = document.querySelector('#area6_3');
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
