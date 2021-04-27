<form name="form">
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1영역 일본어교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="2" onClick="itemSum(this.form);">&nbsp;일본어교과교육론</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2영역 일본어학개론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="2" onClick="itemSum(this.form);">&nbsp;일본어학개론</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>3영역 일본문학개론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_1" value="2" onClick="mES3();itemSum(this.form);">&nbsp;일본문학교육론</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_2" value="2" onClick="mES3_();itemSum(this.form);">&nbsp;일본문학지도</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_3" value="2" onClick="mES3__();itemSum(this.form);">&nbsp;일본문학개론</td>
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
  <b>4영역 일본어문법</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="2" onClick="itemSum(this.form);">&nbsp;일본어문법교육</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>5영역 일본어회화</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="2" onClick="itemSum(this.form);">&nbsp;일본어회화지도</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>6영역 일본어작문</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="2" onClick="itemSum(this.form);">&nbsp;일본어작문지도</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>7영역 일본어강독</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="2" onClick="itemSum(this.form);">&nbsp;일본어독해지도</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>8영역 일본문화</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_1" value="2" onClick="mES8();itemSum(this.form);">&nbsp;일본문화교육론</td>
  </tr>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_2" value="2" onClick="mES8_();itemSum(this.form);">&nbsp;일본문화지도</td>
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

<table>
  <tr>
    <td height="25">&nbsp;합계:&nbsp;<input id="total_sum" name="total_sum" type="text" size="20"></td>
  </tr>
  <tr>
    <td height="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="확인" onclick="setParentText()"></td>
  </tr>
</table>
</form>
