<?php
require_once('lib/print.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
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
             opener.document.getElementById("eduTheory").value = document.getElementById("total_sum").value;
             window.close();
        }
    </script>

  </head>
  <body>
    <h3 id="popUpTitle">교직이론 </h3>
    <div id="popUpBody">
    <form name="form">
    <table width="500" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area1_1" value="2" onClick="itemSum(this.form);">
          <label for="area1_1">&nbsp;교육과정(2학점)</label></td>
      </tr>
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_1" value="2" onClick="itemSum(this.form);">
          <label for="area2_1">&nbsp;교육방법및교육공학(2학점)</label></td>
      </tr>
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_1" value="2" onClick="itemSum(this.form);">
          <label for="area3_1">&nbsp;교육사회(2학점)</label></td>
      </tr>
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_1" value="2" onClick="itemSum(this.form);">
          <label for="area4_1">&nbsp;교육심리(2학점)</label></td>
      </tr>
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area5_1" value="2" onClick="itemSum(this.form);">
          <label for="area5_1">&nbsp;교육철학및교육사회(2학점)</label></td>
      </tr>
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area6_1" value="2" onClick="itemSum(this.form);">
          <label for="area6_1">&nbsp;교육평가(2학점)</label></td>
      </tr>
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area7_1" value="2" onClick="itemSum(this.form);">
          <label for="area7_1">&nbsp;교육학개론(2학점)</label></td>
      </tr>
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area8_1" value="2" onClick="itemSum(this.form);">
          <label for="area8_1">&nbsp;교육행정및교육경영(2학점)</label></td>
      </tr>
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area9_1" value="2" onClick="itemSum(this.form);">
          <label for="area9_1">&nbsp;생활지도및상담(2학점)</label></td>
      </tr>
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="rea10_1" value="2" onClick="itemSum(this.form);">
          <label for="area10_1">&nbsp;학교폭력예방및학생의이해(2학점)</label></td>
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
