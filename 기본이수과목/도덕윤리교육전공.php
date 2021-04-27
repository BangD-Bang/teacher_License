<script>
function area_c() {
  var a = "1영역";
  var b = "2영역";
  var c = "3영역";
  const ary = [a,b,c];
  const ary1 = [];
  const ary2 = [];
  const ary3 = [];
  var n = 0;
  function aryDelete(theV) {
    for(var i = 0; i < ary.length; i++) {
      if(ary[i] === theV) {
        ary.splice(i, 1);
        i--;
      }
    }
  }
  if(mES1_1.checked == true) {ary1.push(1); aryDelete(a); n = n + 1;}
  if(mES2_1.checked == true) {ary2.push(1);}
  if(mES2_2.checked == true) {ary2.push(2);}
  if(mES2_3.checked == true) {ary2.push(3);}
  if(mES2_4.checked == true) {ary2.push(4);}
  if(mES2_5.checked == true) {ary2.push(5);}
  if(mES2_6.checked == true) {ary2.push(6);}
  if(mES2_7.checked == true) {ary2.push(7);}
  if(ary2.length >= 3) {aryDelete(b); n = n + 1;}
  if(mES3_1.checked == true) {ary3.push(1);}
  if(mES3_2.checked == true) {ary3.push(2);}
  if(mES3_3.checked == true) {ary3.push(3);}
  if(mES3_4.checked == true) {ary3.push(4);}
  if(ary3.length >= 3) {aryDelete(c); n = n + 1;}
  if(n >= 3) {
    document.getElementById('area_result').value = "(영역조건: 이수완료)<br>";
  } else if(ary.includes(a) == true && ary.includes(b) == true && ary.includes(c) == true) {
    document.getElementById('area_result').value = "(영역조건: 1영역 1과목, 2영역 "+(3-ary2.length)+"과목, 3영역 "+(3-ary3.length)+"과목 미이수)<br>";
  } else if(ary.includes(a) == false && ary.includes(b) == true && ary.includes(c) == true) {
    document.getElementById('area_result').value = "(영역조건: 2영역 "+(3-ary2.length)+"과목, 3영역 "+(3-ary3.length)+"과목 미이수)<br>";
  } else if(ary.includes(a) == true && ary.includes(b) == false && ary.includes(c) == true) {
    document.getElementById('area_result').value = "(영역조건: 1영역 1과목, 3영역 "+(3-ary3.length)+"과목 미이수)<br>";
  } else if(ary.includes(a) == true && ary.includes(b) == true && ary.includes(c) == false) {
    document.getElementById('area_result').value = "(영역조건: 1영역 1과목, 2영역 "+(3-ary2.length)+"과목 미이수)<br>";
  } else if(ary.includes(a) == false && ary.includes(b) == false && ary.includes(c) == true) {
    document.getElementById('area_result').value = "(영역조건: 3영역 "+(3-ary3.length)+"과목 미이수)<br>";
  } else if(ary.includes(a) == false && ary.includes(b) == true && ary.includes(c) == false) {
    document.getElementById('area_result').value = "(영역조건: 2영역 "+(3-ary2.length)+"과목 미이수)<br>";
  } else if(ary.includes(a) == true && ary.includes(b) == false && ary.includes(c) == false) {
    document.getElementById('area_result').value = "(영역조건: 1영역 1과목 미이수)<br>";
  } else {
    document.getElementById('area_result').value = "";
  }
}
</script>

<form name="form">
<b><font color="red">
  1영역 중 1과목 이상 이수<br>
  2영역 중 3과목 이상 이수<br>
  3영역 중 3과목 이상 이수</font></b>
<br><br>
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>1영역 도덕&middot;윤리교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area1_1" value="2" onClick="itemSum(this.form);">&nbsp;도덕윤리교과교육론</td>
  </tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2-1영역 윤리학개론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_1" value="2" onClick="itemSum(this.form);">&nbsp;윤리학개론</td>
  </tr>
  <tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2-2영역 동양윤리사상</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_2" value="2" onClick="itemSum(this.form);">&nbsp;동양윤리사상</td>
  </tr>
  <tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2-3영역 서양윤리사상</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_3" value="2" onClick="itemSum(this.form);">&nbsp;서양윤리사상</td>
  </tr>
  <tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2-4영역 한국윤리사상</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_4" value="2" onClick="itemSum(this.form);">&nbsp;한국의윤리사상</td>
  </tr>
  <tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2-5영역 윤리고전강독</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_5" value="2" onClick="itemSum(this.form);">&nbsp;윤리고전강독</td>
  </tr>
  <tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2-6영역 응용윤리(사회윤리)</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_6" value="2" onClick="itemSum(this.form);">&nbsp;사회윤리</td>
  </tr>
  <tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>2-7영역 윤리와논술</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_7" value="2" onClick="itemSum(this.form);">&nbsp;윤리와논술</td>
  </tr>
  <tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>3-1영역 민주주의론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_1" value="2" onClick="itemSum(this.form);">&nbsp;민주주의론</td>
  </tr>
  <tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>3-2영역 통일교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_2" value="2" onClick="itemSum(this.form);">&nbsp;통일교육론</td>
  </tr>
  <tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>3-3영역 시민교육론</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_3" value="2" onClick="itemSum(this.form);">&nbsp;시민교육론</td>
  </tr>
  <tr>
</table><br>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <b>3-4영역 도덕심리학(또는 발달심리학)</b>
  <tr>
    <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_4" value="2" onClick="itemSum(this.form);">&nbsp;도덕심리학와윤리교육</td>
  </tr>
  <tr>
</table><br>
<script type="text/javascript">
  const mES1_1 = document.querySelector('#area1_1');
  const mES2_1 = document.querySelector('#area2_1');
  const mES2_2 = document.querySelector('#area2_2');
  const mES2_3 = document.querySelector('#area2_3');
  const mES2_4 = document.querySelector('#area2_4');
  const mES2_5 = document.querySelector('#area2_5');
  const mES2_6 = document.querySelector('#area2_6');
  const mES2_7 = document.querySelector('#area2_7');
  const mES3_1 = document.querySelector('#area3_1');
  const mES3_2 = document.querySelector('#area3_2');
  const mES3_3 = document.querySelector('#area3_3');
  const mES3_4 = document.querySelector('#area3_4');
</script>

<table>
  <tr>
    <td height="25">&nbsp;합계:&nbsp;<input id="total_sum" name="total_sum" type="text" size="20"></td>
    <input type="hidden" id="area_result" name="area_result" value="">
  </tr>
  <tr>
    <td height="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="확인" onclick="area_c();setParentText();"></td>
  </tr>
</table>
</form>
