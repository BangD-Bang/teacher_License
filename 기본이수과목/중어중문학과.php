<form name="form">
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1영역 중국어교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area1_1" value="3" onClick="itemSum(this.form);">
      <label for="area1_1">&nbsp;[CHIN489] 중국어교과교육론 - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES1_1 = document.querySelector('#area1_1');
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2영역 중국어학개론 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_1" value="3" onClick="mES2();itemSum(this.form);">
      <label for="area2_1">&nbsp;[CHIN311] 중국어의이해1 - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_2" value="3" onClick="mES2_();itemSum(this.form);">
      <label for="area2_2">&nbsp;[CHIN312] 중국어의이해2 - 3학점</label></td>
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
  <b>3영역 중국문학개론 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_1" value="3" onClick="mES3();itemSum(this.form);">
      <label for="area3_1">&nbsp;[CHIN221] 중국문학사I(구) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_2" value="3" onClick="mES3_();itemSum(this.form);">
      <label for="area3_2">&nbsp;[CHIN223] 중국고전문학사I(신) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_3" value="3" onClick="mES3__();itemSum(this.form);">
      <label for="area3_3">&nbsp;[CHIN222] 중국문학사II(구) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_4" value="3" onClick="mES3___();itemSum(this.form);">
      <label for="area3_4">&nbsp;[CHIN224] 중국고전문학사II(신) - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES3_1 = document.querySelector('#area3_1');
const mES3_2 = document.querySelector('#area3_2');
const mES3_3 = document.querySelector('#area3_3');
const mES3_4 = document.querySelector('#area3_4');

function mES3() {
  if(mES3_1.checked == true) {
    mES3_2.checked = false;
    mES3_3.checked = false;
    mES3_4.checked = false;
  } }
function mES3_() {
  if(mES3_2.checked == true) {
    mES3_1.checked = false;
    mES3_3.checked = false;
    mES3_4.checked = false;
  } }
function mES3__() {
  if(mES3_3.checked == true) {
    mES3_1.checked = false;
    mES3_2.checked = false;
    mES3_4.checked = false;
  } }
function mES3___() {
  if(mES3_4.checked == true) {
    mES3_1.checked = false;
    mES3_2.checked = false;
    mES3_3.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>4영역 중국어문법 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_1" value="3" onClick="mES4();itemSum(this.form);">
      <label for="area4_1">&nbsp;[CHIN211] 현대중국어문법1 - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_2" value="3" onClick="mES4_();itemSum(this.form);">
      <label for="area4_2">&nbsp;[CHIN212] 현대중국어문법2 - 3학점</label></td>
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
  <b>5영역 중국어회화 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_1" value="3" onClick="mES5();itemSum(this.form);">
      <label for="area5_1">&nbsp;[CHIN203] 중국어회화1 - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_2" value="3" onClick="mES5_();itemSum(this.form);">
      <label for="area5_2">&nbsp;[CHIN204] 중국어회화2 - 3학점</label></td>
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
  <b>6영역 중국어작문 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area6_1" value="3" onClick="mES6();itemSum(this.form);">
      <label for="area6_1">&nbsp;[CHIN303] 중국어작문1 - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area6_2" value="3" onClick="mES6_();itemSum(this.form);">
      <label for="area6_2">&nbsp;[CHIN304] 중국어작문2 - 3학점</label></td>
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

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>7영역 중국어강독 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area7_1" value="3" onClick="mES7();itemSum(this.form);">
      <label for="area7_1">&nbsp;[CHIN331] 중국현대소설 - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area7_2" value="3" onClick="mES7_();itemSum(this.form);">
      <label for="area7_2">&nbsp;[CHIN482] 중국현대산문 - 3학점</label></td>
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
  <b>8영역 한문강독 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_1" value="3" onClick="mES8();itemSum(this.form);">
      <label for="area8_1">&nbsp;[CHIN321] 중국고전독해연습I(구) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_2" value="3" onClick="mES8_();itemSum(this.form);">
      <label for="area8_2">&nbsp;[CHIN327] 중국고전강독I(신) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_3" value="3" onClick="mES8__();itemSum(this.form);">
      <label for="area8_3">&nbsp;[CHIN322] 중국고전독해연습II(구) - 3학점</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_4" value="3" onClick="mES8___();itemSum(this.form);">
      <label for="area8_4">&nbsp;[CHIN328] 중국고전강독II(신) - 3학점</label></td>
  </tr>
</table><br>
<script>
const mES8_1 = document.querySelector('#area8_1');
const mES8_2 = document.querySelector('#area8_2');
const mES8_3 = document.querySelector('#area8_3');
const mES8_4 = document.querySelector('#area8_4');

function mES8() {
  if(mES8_1.checked == true) {
    mES8_2.checked = false;
    mES8_3.checked = false;
    mES8_4.checked = false;
  } }
function mES8_() {
  if(mES8_2.checked == true) {
    mES8_1.checked = false;
    mES8_3.checked = false;
    mES8_4.checked = false;
  } }
function mES8__() {
  if(mES8_3.checked == true) {
    mES8_1.checked = false;
    mES8_2.checked = false;
    mES8_4.checked = false;
  } }
function mES8___() {
  if(mES8_4.checked == true) {
    mES8_1.checked = false;
    mES8_2.checked = false;
    mES8_3.checked = false;
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
