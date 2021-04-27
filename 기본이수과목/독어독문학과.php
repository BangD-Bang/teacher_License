<form name="form">
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1영역 독일어교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[GERM417]독일어교과교육론 - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2영역 독일어학개론 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="GERM203" value="3" onClick="mES2();itemSum(this.form);">&nbsp;[GERM203]독어학개론 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="GERM359" value="3" onClick="mES2_();itemSum(this.form);">&nbsp;[GERM359]독어학연습 - 3학점</td>
  </tr>
</table><br>
<script>
const mES2_1 = document.querySelector('#GERM203');
const mES2_2 = document.querySelector('#GERM359');

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
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[GERM205]독문학개론 - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>4영역 독일어문법 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="GERM223" value="3" onClick="mES4();itemSum(this.form);">&nbsp;[GERM223]독문법의이해 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="GERM224" value="3" onClick="mES4_();itemSum(this.form);">&nbsp;[GERM224]독문법연습 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="GERM349" value="3" onClick="mES4__();itemSum(this.form);">&nbsp;[GERM349]독해와문법I - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="GERM350" value="3" onClick="mES4___();itemSum(this.form);">&nbsp;[GERM350]독해와문법II - 3학점</td>
  </tr>
</table><br>
<script>
const mES4_1 = document.querySelector('#GERM223');
const mES4_2 = document.querySelector('#GERM224');
const mES4_3 = document.querySelector('#GERM349');
const mES4_4 = document.querySelector('#GERM350');

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
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[GERM363]ZD회화연습B1 - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>6영역 독일어강독 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="GERM219" value="3" onClick="mES6();itemSum(this.form);">&nbsp;[GERM219]독해와구조(폐지) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="GERM306" value="3" onClick="mES6_();itemSum(this.form);">&nbsp;[GERM306]독산문강독 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="GERM322" value="3" onClick="mES6__();itemSum(this.form);">&nbsp;[GERM322]독해연습(폐지) - 3학점</td>
  </tr>
</table><br>
<script>
const mES6_1 = document.querySelector('#GERM219');
const mES6_2 = document.querySelector('#GERM306');
const mES6_3 = document.querySelector('#GERM322');

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
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="GERM237" value="3" onClick="mES7();itemSum(this.form);">&nbsp;[GERM237]독어어휘연습I - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="GERM238" value="3" onClick="mES7_();itemSum(this.form);">&nbsp;[GERM238]독어어휘연습II - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="GERM438" value="3" onClick="mES7__();itemSum(this.form);">&nbsp;[GERM438]한독번역연습(폐지) - 3학점</td>
  </tr>
</table><br>
<script>
const mES7_1 = document.querySelector('#GERM237');
const mES7_2 = document.querySelector('#GERM238');
const mES7_3 = document.querySelector('#GERM438');

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
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="GERM232" value="3" onClick="mES8();itemSum(this.form);">&nbsp;[GERM232]독일문학사 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="GERM210" value="3" onClick="mES8_();itemSum(this.form);">&nbsp;[GERM210]독일명작의고향 - 3학점</td>
  </tr>
</table><br>
<script>
const mES8_1 = document.querySelector('#GERM232');
const mES8_2 = document.querySelector('#GERM210');

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
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="GERM225" value="3" onClick="mES9();itemSum(this.form);">&nbsp;[GERM225]독일의생활문화 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="GERM226" value="3" onClick="mES9_();itemSum(this.form);">&nbsp;[GERM226]독일의대중문화 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="GERM323" value="3" onClick="mES9__();itemSum(this.form);">&nbsp;[GERM323]독일어권문화와예술 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="GERM348" value="3" onClick="mES9___();itemSum(this.form);">&nbsp;[GERM348]독일학 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="GERM355" value="3" onClick="mES9____();itemSum(this.form);">&nbsp;[GERM355]독일어권역사와민속문화 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="GERM421" value="3" onClick="mES9_____();itemSum(this.form);">&nbsp;[GERM421]독일사상과문화의흐름 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="GERM422" value="3" onClick="mES9______();itemSum(this.form);">&nbsp;[GERM422]문화이론(폐지) - 3학점</td>
  </tr>
</table><br>
<script>
const mES9_1 = document.querySelector('#GERM225');
const mES9_2 = document.querySelector('#GERM226');
const mES9_3 = document.querySelector('#GERM323');
const mES9_4 = document.querySelector('#GERM348');
const mES9_5 = document.querySelector('#GERM355');
const mES9_6 = document.querySelector('#GERM421');
const mES9_7 = document.querySelector('#GERM422');

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
  </tr>
  <tr>
    <td height="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="확인" onclick="setParentText()"></td>
  </tr>
</table>
</form>
