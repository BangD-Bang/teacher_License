<?php
ini_set('display_errors','0');
require_once('lib/print.php');
?>
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
          <label for="area1_1">&nbsp;교육봉사(2학점)</label></td>
      </tr>
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_1" value="2" onClick="itemSum(this.form);">
          <label for="area2_1">&nbsp;학교현장실습(2학점)</label></td>
      </tr>
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_1" value="2" onClick="itemSum(this.form);">
          <label for="area3_1">&nbsp;학교현장실습-해외한국학교(2학점)</label></td>
      </tr>
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_1" value="3" onClick="itemSum(this.form);">
          <label for="area4_1">&nbsp;학교현장실습-해외인턴십(3학점)</label></td>
      </tr>
      <tr>
        <td height="25">&nbsp;합계:&nbsp;<input id="total_sum" name="total_sum" type="text" size="20"></td>
      </tr>
      <tr>
        <td height="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" id="popUpSubmit" value="확인" onclick="setParentText()"></td>
      </tr>
    </table>
    </form>
  </div>
  </body>
</html>
