<?php
ini_set('display_errors','0');
require_once('lib/print.php');
?>
<script>
function area_c() {
  var a = "교육봉사";
  var b = "학교현장실습";
  const ary = [a,b];
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
  if(mES2_1.checked == true || mES3_1.checked == true || mES4_1.checked == true) {aryDelete(b); n = n + 1;}
  if(n >= 2) {
    document.getElementById('volunteer').value = "<font color='blue'><b>이수완료</b></font>";
  } else if(n == 0) {
    document.getElementById('volunteer').value = "교육봉사, 학교현장실습 <font color='red'><b>미이수</b></font>";
  } else if(n >= 1) {
    document.getElementById('volunteer').value = ary+" <font color='red'><b>미이수</b></font>";
  } else {
    document.getElementById('volunteer').value = "";
  }
}
</script>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styler.css">
    <title>교직이론</title>
    <script>
    function itemSum(frm)
    {
       var sum = 0;
       var count = frm.chkbox.length;
       for(var i=0; i < count; i++ ){
           if( frm.chkbox[i].checked == true ){
          sum += parseInt(frm.chkbox[i].value);
           }
       }
       frm.total_sum.value = sum;
    }

    function setParentText(){
             opener.document.getElementById("eduPractice").value = document.getElementById("total_sum").value;
             opener.document.getElementById("volunteerCheck").value = document.getElementById("volunteer").value;
             window.close();
        }
    </script>

  </head>
  <body>
    <h3 id="popUpTitle">교육실습</h3>
    <div id="popUpBody">
    <form name="form">
    <table width="500" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area1_1" value="2" onClick="itemSum(this.form);">
          <label for="area1_1">&nbsp;교육봉사(2학점) - <font color="red"><b>필수</b></font></label></td>
      </tr>
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_1" value="2" onClick="mES2();itemSum(this.form);">
          <label for="area2_1">&nbsp;학교현장실습(2학점)</label></td>
      </tr>
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_1" value="2" onClick="mES3();itemSum(this.form);">
          <label for="area3_1">&nbsp;학교현장실습-해외한국학교(2학점)</label></td>
      </tr>
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_1" value="3" onClick="mES4();itemSum(this.form);">
          <label for="area4_1">&nbsp;학교현장실습-해외인턴십(3학점)</label></td>
      </tr>
      <script type="text/javascript">
        const mES1_1 = document.querySelector('#area1_1');
        const mES2_1 = document.querySelector('#area2_1');
        const mES3_1 = document.querySelector('#area3_1');
        const mES4_1 = document.querySelector('#area4_1');
        function mES2() {
          if(mES2_1.checked == true) {
            mES3_1.checked = false;
            mES4_1.checked = false;
          } }
        function mES3() {
          if(mES3_1.checked == true) {
            mES2_1.checked = false;
            mES4_1.checked = false;
          } }
        function mES4() {
          if(mES4_1.checked == true) {
            mES2_1.checked = false;
            mES3_1.checked = false;
          } }
        </script>
      </script>
      <tr>
        <td height="25">&nbsp;합계:&nbsp;<input id="total_sum" name="total_sum" type="text" size="20"></td>
        <input type="hidden" id="volunteer" name="volunteer" value="">
      </tr>
      <tr>
        <td height="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" id="popUpSubmit" value="확인" onclick="area_c();setParentText();"></td>
      </tr>
    </table>
    </form>
  </div>
  </body>
</html>
