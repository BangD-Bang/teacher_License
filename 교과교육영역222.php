<?php
require_once('lib/print.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>교과교육영역</title>
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
             opener.document.getElementById("majorEdu").value = document.getElementById("total_sum").value;
             window.close();
        }
    </script>

  </head>
  <body>
    <h3>이수한 교과교육영역 과목</h3>
    <form name="form">
    <table width="500" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="2" onClick="itemSum(this.form);">&nbsp;교과교육론(2학점)</td>
      </tr>
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="2" onClick="itemSum(this.form);">&nbsp;교과교재연구및지도법(2학점)</td>
      </tr>
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="2" onClick="itemSum(this.form);">&nbsp;교과논리및논술(2학점)</td>
      </tr>
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" value="6" onClick="itemSum(this.form);">&nbsp;해당없음(전문상담교사-기본값 6 부여)</td>
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
