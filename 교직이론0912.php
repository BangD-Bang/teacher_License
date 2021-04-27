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
    <h3>이수한 교직이론 과목</h3>
    <form name="form">
    <table width="500" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="2" onClick="itemSum(this.form);">&nbsp;교육과정(2학점)</td>
      </tr>
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="2" onClick="itemSum(this.form);">&nbsp;교육방법및교육공학(2학점)</td>
      </tr>
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="2" onClick="itemSum(this.form);">&nbsp;교육사회(2학점)</td>
      </tr>
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="2" onClick="itemSum(this.form);">&nbsp;교육심리(2학점)</td>
      </tr>
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="2" onClick="itemSum(this.form);">&nbsp;교육철학및교육사회(2학점)</td>
      </tr>
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="2" onClick="itemSum(this.form);">&nbsp;교육평가(2학점)</td>
      </tr>
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="2" onClick="itemSum(this.form);">&nbsp;교육학개론(2학점)</td>
      </tr>
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="2" onClick="itemSum(this.form);">&nbsp;교육행정및교육경영(2학점)</td>
      </tr>
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="2" onClick="itemSum(this.form);">&nbsp;생활지도및상담(2학점)</td>
      </tr>
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="2" onClick="itemSum(this.form);">&nbsp;학교폭력예방및학생의이해(2학점)</td>
      </tr>
      <tr>
        <td height="25">&nbsp;합계:&nbsp;<input id="total_sum" name="total_sum" type="text" size="20"></td>
      </tr>
      <tr>
        <td height="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="확인" onclick="setParentText()"></td>
      </tr>
    </table>
    </form>
  </body>
</html>
