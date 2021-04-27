<form name="form">
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1영역 일본어교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[JAPN451]일본어교과교육론 - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2영역 일본어학개론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="3" onClick="itemSum(this.form);">&nbsp;[JAPN217]일본어학의이해I - 3학점</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>3영역 일본문학개론 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="JAPN219" value="3" onClick="mES3();itemSum(this.form);">&nbsp;[JAPN219]일본근현대문학의이해1(구) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="JAPN213" value="3" onClick="mES3_();itemSum(this.form);">&nbsp;[JAPN213]일본근현대문학의이해(신) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="JAPN223" value="3" onClick="mES3__();itemSum(this.form);">&nbsp;[JAPN223]일본고전문학의이해1(구) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="JAPN200" value="3" onClick="mES3___();itemSum(this.form);">&nbsp;[JAPN200]일본고전문학의이해(신) - 3학점</td>
  </tr>
</table><br>
<script>
const mES3_1 = document.querySelector('#JAPN219');
const mES3_2 = document.querySelector('#JAPN213');
const mES3_3 = document.querySelector('#JAPN223');
const mES3_4 = document.querySelector('#JAPN200');

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
  <b>4영역 일본어문법 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="JAPN212" value="3" onClick="mES4();itemSum(this.form);">&nbsp;[JAPN212]현대일본어문법 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="JAPN318" value="3" onClick="mES4_();itemSum(this.form);">&nbsp;[JAPN318 / JAPN419]일본어학응용연구 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="JAPN416" value="3" onClick="mES4__();itemSum(this.form);">&nbsp;[JAPN416]일본어화용론 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="JAPN497" value="3" onClick="mES4___();itemSum(this.form);">&nbsp;[JAPN497 / JAPN350]일본어구문론(폐지) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="JAPN452" value="3" onClick="mES4____();itemSum(this.form);">&nbsp;[JAPN452]일본어의미론 - 3학점</td>
  </tr>
</table><br>
<script>
const mES4_1 = document.querySelector('#JAPN212');
const mES4_2 = document.querySelector('#JAPN318');
const mES4_3 = document.querySelector('#JAPN416');
const mES4_4 = document.querySelector('#JAPN497');
const mES4_5 = document.querySelector('#JAPN452');

function mES4() {
  if(mES4_1.checked == true) {
    mES4_2.checked = false;
    mES4_3.checked = false;
    mES4_4.checked = false;
    mES4_5.checked = false;
  } }
function mES4_() {
  if(mES4_2.checked == true) {
    mES4_1.checked = false;
    mES4_3.checked = false;
    mES4_4.checked = false;
    mES4_5.checked = false;
  } }
function mES4__() {
  if(mES4_3.checked == true) {
    mES4_1.checked = false;
    mES4_2.checked = false;
    mES4_4.checked = false;
    mES4_5.checked = false;
  } }
function mES4___() {
  if(mES4_4.checked == true) {
    mES4_1.checked = false;
    mES4_2.checked = false;
    mES4_3.checked = false;
    mES4_5.checked = false;
  } }
function mES4____() {
  if(mES4_5.checked == true) {
    mES4_1.checked = false;
    mES4_2.checked = false;
    mES4_3.checked = false;
    mES4_4.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>5영역 일본어회화</b>
  <br>(구), (신)과목 중복인정 불가
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="JAPN209" value="1" onClick="mES5();itemSum(this.form);">&nbsp;[JAPN209]일본어회화1(구) - 1학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="JAPN247" value="2" onClick="mES5_();itemSum(this.form);">&nbsp;[JAPN247]초급일본어회화(신) - 2학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="JAPN210" value="2" onClick="mES5__();itemSum(this.form);">&nbsp;[JAPN210]일본어회화2(구) - 2학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="JAPN248" value="2" onClick="mES5___();itemSum(this.form);">&nbsp;[JAPN248]중급일본어회화(신) - 2학점</td>
  </tr>
</table><br>
<script>
const mES5_1 = document.querySelector('#JAPN209');
const mES5_2 = document.querySelector('#JAPN247');
const mES5_3 = document.querySelector('#JAPN210');
const mES5_4 = document.querySelector('#JAPN248');

function mES5() {
  if(mES5_1.checked == true) {
    mES5_2.checked = false;
  } }
function mES5_() {
  if(mES5_2.checked == true) {
    mES5_1.checked = false;
  } }
function mES5__() {
  if(mES5_3.checked == true) {
    mES5_4.checked = false;
  } }
function mES5___() {
  if(mES5_4.checked == true) {
    mES5_3.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>6영역 일본어작문</b>
  <br>(구), (신)과목 중복인정 불가
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="JAPN205" value="1" onClick="mES6();itemSum(this.form);">&nbsp;[JAPN205]일본어작문1(구) - 1학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="JAPN243" value="2" onClick="mES6_();itemSum(this.form);">&nbsp;[JAPN243]초급일본어작문(신) - 2학점</td>
  </tr>
</table><br>
<script>
const mES6_1 = document.querySelector('#JAPN205');
const mES6_2 = document.querySelector('#JAPN243');

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
  <b>7영역 일본어강독</b>
  <br>(구), (신)과목 중복인정 불가
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="JAPN207" value="1" onClick="mES7();itemSum(this.form);">&nbsp;[JAPN207]일문독해1(구) - 1학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="JAPN245" value="2" onClick="mES7_();itemSum(this.form);">&nbsp;[JAPN245]초급일본어독해(신) - 2학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="JAPN208" value="2" onClick="mES7__();itemSum(this.form);">&nbsp;[JAPN208]일문독해2(구) - 2학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="JAPN246" value="2" onClick="mES7___();itemSum(this.form);">&nbsp;[JAPN246]중급일본어독해(신) - 2학점</td>
  </tr>
</table><br>
<script>
const mES7_1 = document.querySelector('#JAPN207');
const mES7_2 = document.querySelector('#JAPN245');
const mES7_3 = document.querySelector('#JAPN208');
const mES7_4 = document.querySelector('#JAPN246');

function mES7() {
  if(mES7_1.checked == true) {
    mES7_2.checked = false;
  } }
function mES7_() {
  if(mES7_2.checked == true) {
    mES7_1.checked = false;
  } }
function mES7__() {
  if(mES7_3.checked == true) {
    mES7_4.checked = false;
  } }
function mES7___() {
  if(mES7_4.checked == true) {
    mES7_3.checked = false;
  } }
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>8영역 일본문화 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="JAPN214" value="3" onClick="mES8();itemSum(this.form);">&nbsp;[JAPN214]일본문화사개론(폐지) - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="JAPN385" value="3" onClick="mES8_();itemSum(this.form);">&nbsp;[JAPN385 / JAPN102]일본문화의이해 - 3학점</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="JAPN442" value="3" onClick="mES8__();itemSum(this.form);">&nbsp;[JAPN442]동아시아문화교류사 - 3학점</td>
  </tr>
</table><br>
<script>
const mES8_1 = document.querySelector('#JAPN214');
const mES8_2 = document.querySelector('#JAPN385');
const mES8_3 = document.querySelector('#JAPN442');

function mES8() {
  if(mES8_1.checked == true) {
    mES8_2.checked = false;
    mES8_3.checked = false;
  } }
function mES8_() {
  if(mES8_2.checked == true) {
    mES8_1.checked = false;
    mES8_3.checked = false;
  } }
function mES8__() {
  if(mES8_3.checked == true) {
    mES8_1.checked = false;
    mES8_2.checked = false;
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
