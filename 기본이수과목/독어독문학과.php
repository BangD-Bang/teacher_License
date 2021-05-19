<form name="form">
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1영역 독일어교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area1_1" value="3" onClick="itemSum(this.form);">
      <label for="area1_1">&nbsp;[GERM417] 독일어교과교육론 - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES1_1 = document.querySelector('#area1_1');
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2영역 독일어학개론 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_1" value="3" onClick="mES2();itemSum(this.form);">
      <label for="area2_1">&nbsp;[GERM203] 독어학개론 - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_2" value="3" onClick="mES2_();itemSum(this.form);">
      <label for="area2_2">&nbsp;[GERM359] 독어학연습 - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES2_1 = document.querySelector('#area2_1');
const mES2_2 = document.querySelector('#area2_2');

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
  <b>3영역 독일어권문학개론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_1" value="3" onClick="itemSum(this.form);">
      <label for="area3_1">&nbsp;[GERM205] 독문학개론 - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>4영역 독일어문법 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_1" value="3" onClick="mES4();itemSum(this.form);">
      <label for="area4_1">&nbsp;[GERM223] 독문법의이해 - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_2" value="3" onClick="mES4_();itemSum(this.form);">
      <label for="area4_2">&nbsp;[GERM224] 독문법연습 - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_3" value="3" onClick="mES4__();itemSum(this.form);">
      <label for="area4_3">&nbsp;[GERM349] 독해와문법I - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_4" value="3" onClick="mES4___();itemSum(this.form);">
      <label for="area4_4">&nbsp;[GERM350] 독해와문법II - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES4_1 = document.querySelector('#area4_1');
const mES4_2 = document.querySelector('#area4_2');
const mES4_3 = document.querySelector('#area4_3');
const mES4_4 = document.querySelector('#area4_4');

function mES4() {
  if(mES4_1.checked == true) {
    mES4_2.checked = false;
    mES4_3.checked = false;
    mES4_4.checked = false;
  } }
function mES4_() {
  if(mES4_2.checked == true) {
    mES4_1.checked = false;
    mES4_3.checked = false;
    mES4_4.checked = false;
  } }
function mES4__() {
  if(mES4_3.checked == true) {
    mES4_1.checked = false;
    mES4_2.checked = false;
    mES4_4.checked = false;
  } }
function mES4___() {
  if(mES4_4.checked == true) {
    mES4_1.checked = false;
    mES4_2.checked = false;
    mES4_3.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>5영역 독일어회화</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_1" value="3" onClick="itemSum(this.form);">
      <label for="area5_1">&nbsp;[GERM363] ZD회화연습B1 - 3학점</label></td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>6영역 독일어강독 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area6_1" value="3" onClick="mES6();itemSum(this.form);">
      <label for="area6_1">&nbsp;[GERM219] 독해와구조(폐지) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area6_2" value="3" onClick="mES6_();itemSum(this.form);">
      <label for="area6_2">&nbsp;[GERM306] 독산문강독 - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area6_3" value="3" onClick="mES6__();itemSum(this.form);">
      <label for="area6_3">&nbsp;[GERM322] 독해연습(폐지) - 3학점</label></td>
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
  <b>7영역 독일어작문 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area7_1" value="3" onClick="mES7();itemSum(this.form);">
      <label for="area7_1">&nbsp;[GERM237] 독어어휘연습I - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area7_2" value="3" onClick="mES7_();itemSum(this.form);">
      <label for="area7_2">&nbsp;[GERM238] 독어어휘연습II - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area7_3" value="3" onClick="mES7__();itemSum(this.form);">
      <label for="area7_3">&nbsp;[GERM438] 한독번역연습(폐지) - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES7_1 = document.querySelector('#area7_1');
const mES7_2 = document.querySelector('#area7_2');
const mES7_3 = document.querySelector('#area7_3');

function mES7() {
  if(mES7_1.checked == true) {
    mES7_2.checked = false;
    mES7_3.checked = false;
  } }
function mES7_() {
  if(mES7_2.checked == true) {
    mES7_1.checked = false;
    mES7_3.checked = false;
  } }
function mES7__() {
  if(mES7_3.checked == true) {
    mES7_1.checked = false;
    mES7_2.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>8영역 독일문학사 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_1" value="3" onClick="mES8();itemSum(this.form);">
      <label for="area8_1">&nbsp;[GERM232] 독일문학사 - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_2" value="3" onClick="mES8_();itemSum(this.form);">
      <label for="area8_2">&nbsp;[GERM210] 독일명작의고향 - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES8_1 = document.querySelector('#area8_1');
const mES8_2 = document.querySelector('#area8_2');

function mES8() {
  if(mES8_1.checked == true) {
    mES8_2.checked = false;
  } }
function mES8_() {
  if(mES8_2.checked == true) {
    mES8_1.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>9영역 독일어권문화 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area9_1" value="3" onClick="mES9();itemSum(this.form);">
      <label for="area9_1">&nbsp;[GERM225] 독일의생활문화 - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area9_2" value="3" onClick="mES9_();itemSum(this.form);">
      <label for="area9_2">&nbsp;[GERM226] 독일의대중문화 - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area9_3" value="3" onClick="mES9__();itemSum(this.form);">
      <label for="area9_3">&nbsp;[GERM323] 독일어권문화와예술 - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area9_4" value="3" onClick="mES9___();itemSum(this.form);">
      <label for="area9_4">&nbsp;[GERM348] 독일학 - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area9_5" value="3" onClick="mES9____();itemSum(this.form);">
      <label for="area9_5">&nbsp;[GERM355] 독일어권역사와민속문화 - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area9_6" value="3" onClick="mES9_____();itemSum(this.form);">
      <label for="area9_6">&nbsp;[GERM421] 독일사상과문화의흐름 - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area9_7" value="3" onClick="mES9______();itemSum(this.form);">
      <label for="area9_7">&nbsp;[GERM422] 문화이론(폐지) - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES9_1 = document.querySelector('#area9_1');
const mES9_2 = document.querySelector('#area9_2');
const mES9_3 = document.querySelector('#area9_3');
const mES9_4 = document.querySelector('#area9_4');
const mES9_5 = document.querySelector('#area9_5');
const mES9_6 = document.querySelector('#area9_6');
const mES9_7 = document.querySelector('#area9_7');

function mES9() {
  if(mES9_1.checked == true) {
    mES9_2.checked = false;
    mES9_3.checked = false;
    mES9_4.checked = false;
    mES9_5.checked = false;
    mES9_6.checked = false;
    mES9_7.checked = false;
  } }
function mES9_() {
  if(mES9_2.checked == true) {
    mES9_1.checked = false;
    mES9_3.checked = false;
    mES9_4.checked = false;
    mES9_5.checked = false;
    mES9_6.checked = false;
    mES9_7.checked = false;
  } }
function mES9__() {
  if(mES9_3.checked == true) {
    mES9_1.checked = false;
    mES9_2.checked = false;
    mES9_4.checked = false;
    mES9_5.checked = false;
    mES9_6.checked = false;
    mES9_7.checked = false;
  } }
function mES9___() {
  if(mES9_4.checked == true) {
    mES9_1.checked = false;
    mES9_2.checked = false;
    mES9_3.checked = false;
    mES9_5.checked = false;
    mES9_6.checked = false;
    mES9_7.checked = false;
  } }
function mES9____() {
  if(mES9_5.checked == true) {
    mES9_1.checked = false;
    mES9_2.checked = false;
    mES9_3.checked = false;
    mES9_4.checked = false;
    mES9_6.checked = false;
    mES9_7.checked = false;
  } }
function mES9_____() {
  if(mES9_6.checked == true) {
    mES9_1.checked = false;
    mES9_2.checked = false;
    mES9_3.checked = false;
    mES9_4.checked = false;
    mES9_5.checked = false;
    mES9_7.checked = false;
  } }
function mES9______() {
  if(mES9_7.checked == true) {
    mES9_1.checked = false;
    mES9_2.checked = false;
    mES9_3.checked = false;
    mES9_4.checked = false;
    mES9_5.checked = false;
    mES9_6.checked = false;
  } }
</script>

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
