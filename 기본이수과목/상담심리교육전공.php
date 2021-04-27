<div>
<a href=#none id="show1" onclick="if(hide1.style.display=='none') {hide1.style.display='';show1.innerText='▲접기'} else {hide1.style.display='none';show1.innerText='▶중등2급 상담'}">▶중등2급 상담</a>
<div id="hide1" style="display: none">

  <form name="form">
  <table width="500" border="0" cellspacing="0" cellpadding="0">
    <b>1영역 상담이론</b>
    <tr>
      <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area1_1" value="2" onClick="mES1();itemSum(this.form);">&nbsp;상담의이론과실제</td>
    </tr>
  </table><br>

  <table width="500" border="0" cellspacing="0" cellpadding="0">
    <b>3영역 심리검사</b>
    <tr>
      <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_1" value="2" onClick="mES1();itemSum(this.form);">&nbsp;심리검사</td>
    </tr>
  </table><br>

  <table width="500" border="0" cellspacing="0" cellpadding="0">
    <b>5영역 집단상담</b>
    <tr>
      <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_1" value="2" onClick="mES1();itemSum(this.form);">&nbsp;집단상담</td>
    </tr>
  </table><br>

  <table width="500" border="0" cellspacing="0" cellpadding="0">
    <b>6영역 진로상담</b>
    <tr>
      <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_1" value="2" onClick="mES1();itemSum(this.form);">&nbsp;진로상담</td>
    </tr>
  </table><br>

  <table width="500" border="0" cellspacing="0" cellpadding="0">
    <b>7영역 심리치료</b>
    <tr>
      <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_1" value="2" onClick="mES1();itemSum(this.form);">&nbsp;상담심리</td>
    </tr>
  </table><br>

  <table width="500" border="0" cellspacing="0" cellpadding="0">
    <b>13영역 학습심리</b>
    <tr>
      <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area6_1" value="2" onClick="mES1();itemSum(this.form);">&nbsp;학습심리학</td>
    </tr>
  </table><br>

  <table width="500" border="0" cellspacing="0" cellpadding="0">
    <b>14영역 성격심리</b>
    <tr>
      <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area7_1" value="2" onClick="mES1();itemSum(this.form);">&nbsp;성격심리</td>
    </tr>
  </table><br>

</div>
</div><br>

<div>
<a href=#none id="show2" onclick="if(hide2.style.display=='none') {hide2.style.display='';show2.innerText='▲접기'} else {hide2.style.display='none';show2.innerText='▶전문상담교사 2급'}">▶전문상담교사 2급</a>
<div id="hide2" style="display: none">

  <form name="form">
  <table width="500" border="0" cellspacing="0" cellpadding="0">
    <b>2영역 심리검사</b>
    <tr>
      <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area1_2" value="2" onClick="mES2();itemSum(this.form);">&nbsp;심리검사</td>
    </tr>
  </table><br>

  <table width="500" border="0" cellspacing="0" cellpadding="0">
    <b>3영역 성격심리학</b>
    <tr>
      <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_2" value="2" onClick="mES2();itemSum(this.form);">&nbsp;성격심리학</td>
    </tr>
  </table><br>

  <table width="500" border="0" cellspacing="0" cellpadding="0">
    <b>4영역 특수아상담</b>
    <tr>
      <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_2" value="2" onClick="mES2();itemSum(this.form);">&nbsp;특수아상담</td>
    </tr>
  </table><br>

  <table width="500" border="0" cellspacing="0" cellpadding="0">
    <b>5영역 집단상담</b>
    <tr>
      <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_2" value="2" onClick="mES2();itemSum(this.form);">&nbsp;집단상담</td>
    </tr>
  </table><br>

  <table width="500" border="0" cellspacing="0" cellpadding="0">
    <b>6영역 가족상담</b>
    <tr>
      <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_2" value="2" onClick="mES2();itemSum(this.form);">&nbsp;가족상담</td>
    </tr>
  </table><br>

  <table width="500" border="0" cellspacing="0" cellpadding="0">
    <b>7영역 진로상담</b>
    <tr>
      <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area6_2" value="2" onClick="mES2();itemSum(this.form);">&nbsp;진로상담</td>
    </tr>
  </table><br>

  <table width="500" border="0" cellspacing="0" cellpadding="0">
    <b>8영역 상담이론과실제</b>
    <tr>
      <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area7_2" value="2" onClick="mES2();itemSum(this.form);">&nbsp;상담의이론과실제</td>
    </tr>
  </table><br>

</div>
</div>

<script>
const mES1_1 = document.querySelector('#area1_1');
const mES2_1 = document.querySelector('#area2_1');
const mES3_1 = document.querySelector('#area3_1');
const mES4_1 = document.querySelector('#area4_1');
const mES5_1 = document.querySelector('#area5_1');
const mES6_1 = document.querySelector('#area6_1');
const mES7_1 = document.querySelector('#area7_1');
const mES1_2 = document.querySelector('#area1_2');
const mES2_2 = document.querySelector('#area2_2');
const mES3_2 = document.querySelector('#area3_2');
const mES4_2 = document.querySelector('#area4_2');
const mES5_2 = document.querySelector('#area5_2');
const mES6_2 = document.querySelector('#area6_2');
const mES7_2 = document.querySelector('#area7_2');

function mES1() {
  if(mES1_1.checked == true || mES2_1.checked == true || mES3_1.checked == true || mES4_1.checked == true || mES5_1.checked == true || mES6_1.checked == true || mES7_1.checked == true) {
    mES1_2.checked = false;
    mES2_2.checked = false;
    mES3_2.checked = false;
    mES4_2.checked = false;
    mES5_2.checked = false;
    mES6_2.checked = false;
    mES7_2.checked = false;
  } }
function mES2() {
  if(mES1_2.checked == true || mES2_2.checked == true || mES3_2.checked == true || mES4_2.checked == true || mES5_2.checked == true || mES6_2.checked == true || mES7_2.checked == true) {
    mES1_1.checked = false;
    mES2_1.checked = false;
    mES3_1.checked = false;
    mES4_1.checked = false;
    mES5_1.checked = false;
    mES6_1.checked = false;
    mES7_1.checked = false;
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
