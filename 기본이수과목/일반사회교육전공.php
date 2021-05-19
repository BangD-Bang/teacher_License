<form name="form">
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1영역 일반사회교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area1_1" value="2" onClick="itemSum(this.form);">
      <label for="area1_1">&nbsp;일반사회교과교육론</label></td>
  </tr>
</table><br>
<script>
const mES1_1 = document.querySelector('#area1_1');
</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2영역 정치와사회 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_1" value="2" onClick="mES2();itemSum(this.form);">
      <label for="area2_1">&nbsp;정치와사회</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_2" value="2" onClick="mES2_();itemSum(this.form);">
      <label for="area2_2">&nbsp;비교정치론</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_3" value="2" onClick="mES2__();itemSum(this.form);">
      <label for="area2_3">&nbsp;국제정치론</label></td>
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
  <b>3영역 경제와사회 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_1" value="2" onClick="mES3();itemSum(this.form);">
      <label for="area3_1">&nbsp;경제와사회</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_2" value="2" onClick="mES3_();itemSum(this.form);">
      <label for="area3_2">&nbsp;미시경제학</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_3" value="2" onClick="mES3__();itemSum(this.form);">
      <label for="area3_3">&nbsp;거시경제학</label></td>
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
  <b>4영역 문화와사회 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_1" value="2" onClick="mES4();itemSum(this.form);">
      <label for="area4_1">&nbsp;문화와사회</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_2" value="2" onClick="mES4_();itemSum(this.form);">
      <label for="area4_2">&nbsp;문화인류학특강</label></td>
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
  <b>5영역 법과사회 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_1" value="2" onClick="mES5();itemSum(this.form);">
      <label for="area5_1">&nbsp;법과사회</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_2" value="2" onClick="mES5_();itemSum(this.form);">
      <label for="area5_2">&nbsp;경제와법</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_3" value="2" onClick="mES5__();itemSum(this.form);">
      <label for="area5_3">&nbsp;환경과법</label></td>
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
  <b>6영역 사회과학방법론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area6_1" value="2" onClick="itemSum(this.form);">
      <label for="area6_1">&nbsp;사회과학방법론</label></td>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>7영역 인간과사회 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area7_1" value="2" onClick="mES7();itemSum(this.form);">
      <label for="area7_1">&nbsp;인간과사회</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area7_2" value="2" onClick="mES7_();itemSum(this.form);">
      <label for="area7_2">&nbsp;성&middot;결혼&middot;가족</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area7_3" value="2" onClick="mES7__();itemSum(this.form);">
      <label for="area7_3">&nbsp;사회변동론</label></td>
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
  <b>8영역 인간과행정 - 택1</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_1" value="2" onClick="mES8();itemSum(this.form);">
      <label for="area8_1">&nbsp;인간과행정</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_2" value="2" onClick="mES8_();itemSum(this.form);">
      <label for="area8_2">&nbsp;한국행정론</label></td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_3" value="2" onClick="mES8__();itemSum(this.form);">
      <label for="area8_3">&nbsp;조직론</label></td>
  </tr>
</table><br>
<script>
const mES8_1 = document.querySelector('#area8_1');
const mES8_2 = document.querySelector('#area8_2');
const mES8_3 = document.querySelector('#area8_3');

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

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>9영역 시민교육과사회윤리</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area9_1" value="2" onClick="itemSum(this.form);">
      <label for="area9_1">&nbsp;시민교육과사회윤리</label></td>
</table><br>

<table>
  <tr>
    <td height="25">&nbsp;합계:&nbsp;<input id="total_sum" name="total_sum" type="text" size="20"></td>
    <input type="hidden" id="majorEduOverlap" name="majorEduOverlap" value="0">
  </tr>
  <tr>
    <td height="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" id="popUpSubmit" value="확인" onclick="overlap_c();;setParentText();"></td>
  </tr>
</table>
</form>
