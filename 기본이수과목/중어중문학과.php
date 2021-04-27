<form name="form">
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1영역 중국어교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[CHIN489]중국어교과교육론 - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2영역 중국어학개론 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="CHIN311" value="3" onClick="mES2();itemSum(this.form);">&nbsp;[CHIN311]중국어의이해1 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="CHIN312" value="3" onClick="mES2_();itemSum(this.form);">&nbsp;[CHIN312]중국어의이해2 - 3학점</td>
  </tr>
</table><br>
<script>
const mES2_1 = document.querySelector('#CHIN311');
const mES2_2 = document.querySelector('#CHIN312');

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
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="CHIN221" value="3" onClick="mES3();itemSum(this.form);">&nbsp;[CHIN221]중국문학사I(구) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="CHIN223" value="3" onClick="mES3_();itemSum(this.form);">&nbsp;[CHIN223]중국고전문학사I(신) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="CHIN222" value="3" onClick="mES3__();itemSum(this.form);">&nbsp;[CHIN222]중국문학사II(구) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="CHIN224" value="3" onClick="mES3___();itemSum(this.form);">&nbsp;[CHIN224]중국고전문학사II(신) - 3학점</td>
  </tr>
</table><br>
<script>
const mES3_1 = document.querySelector('#CHIN221');
const mES3_2 = document.querySelector('#CHIN223');
const mES3_3 = document.querySelector('#CHIN222');
const mES3_4 = document.querySelector('#CHIN224');

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
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="CHIN211" value="3" onClick="mES4();itemSum(this.form);">&nbsp;[CHIN211]현대중국어문법1 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="CHIN212" value="3" onClick="mES4_();itemSum(this.form);">&nbsp;[CHIN212]현대중국어문법2 - 3학점</td>
  </tr>
</table><br>
<script>
const mES4_1 = document.querySelector('#CHIN211');
const mES4_2 = document.querySelector('#CHIN212');

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
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="CHIN203" value="3" onClick="mES5();itemSum(this.form);">&nbsp;[CHIN203]중국어회화1 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="CHIN204" value="3" onClick="mES5_();itemSum(this.form);">&nbsp;[CHIN204]중국어회화2 - 3학점</td>
  </tr>
</table><br>
<script>
const mES5_1 = document.querySelector('#CHIN203');
const mES5_2 = document.querySelector('#CHIN204');

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
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="CHIN303" value="3" onClick="mES6();itemSum(this.form);">&nbsp;[CHIN303]중국어작문1 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="CHIN304" value="3" onClick="mES6_();itemSum(this.form);">&nbsp;[CHIN304]중국어작문2 - 3학점</td>
  </tr>
</table><br>
<script>
const mES6_1 = document.querySelector('#CHIN303');
const mES6_2 = document.querySelector('#CHIN304');

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
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="CHIN331" value="3" onClick="mES7();itemSum(this.form);">&nbsp;[CHIN331]중국현대소설 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="CHIN482" value="3" onClick="mES7_();itemSum(this.form);">&nbsp;[CHIN482]중국현대산문 - 3학점</td>
  </tr>
</table><br>
<script>
const mES7_1 = document.querySelector('#CHIN331');
const mES7_2 = document.querySelector('#CHIN482');

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
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="CHIN321" value="3" onClick="mES8();itemSum(this.form);">&nbsp;[CHIN321]중국고전독해연습I(구) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="CHIN327" value="3" onClick="mES8_();itemSum(this.form);">&nbsp;[CHIN327]중국고전강독I(신) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="CHIN322" value="3" onClick="mES8__();itemSum(this.form);">&nbsp;[CHIN322]중국고전독해연습II(구) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="CHIN328" value="3" onClick="mES8___();itemSum(this.form);">&nbsp;[CHIN328]중국고전강독II(신) - 3학점</td>
  </tr>
</table><br>
<script>
const mES8_1 = document.querySelector('#CHIN321');
const mES8_2 = document.querySelector('#CHIN327');
const mES8_3 = document.querySelector('#CHIN322');
const mES8_4 = document.querySelector('#CHIN328');

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
  </tr>
  <tr>
    <td height="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="확인" onclick="setParentText()"></td>
  </tr>
</table>
</form>
