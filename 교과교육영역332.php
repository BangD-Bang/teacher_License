<?php
ini_set('display_errors','0');
 ?>
<script>
function overlap_c() {
  if(mES1_1.checked == true) {
    document.getElementById('majorEduOverlap').value = "1";
  }
  if(mES1_1.checked == false) {
    document.getElementById('majorEduOverlap').value = "0";
  }
}
</script>
<?php
require_once('lib/print.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styler.css">
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
             opener.document.getElementById("majorEduCheck").value = document.getElementById("majorEduOverlap").value;
             window.close();
        }
    </script>

  </head>
  <body>
    <h3 id="popUpTitle">교과교육영역</h3>
    <div id="popUpBody">
    <form name="form">
    <table width="500" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area1_1" value="3" onClick="itemSum(this.form);">
          <label for="area1_1">&nbsp;교과교육론(3학점)</label></td>
      </tr>
      <script type="text/javascript">
        const mES1_1 = document.querySelector('#area1_1');
      </script>
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_1" value="2" onClick="itemSum(this.form);">
          <label for="area2_1">&nbsp;교과교재연구및지도법(2학점)</label></td>
      </tr>
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_1" value="3" onClick="itemSum(this.form);">
          <label for="area3_1">&nbsp;교과논리및논술(3학점)</label></td>
      </tr>
      <tr>
        <td height="25">&nbsp;합계:&nbsp;<input id="total_sum" name="total_sum" type="text" size="20"></td>
      </tr>
      <tr>
        <td height="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" id="popUpSubmit" value="확인" onclick="overlap_c();setParentText();"></td>
        <input type="hidden" id="majorEduOverlap" name="majorEduOverlap" value="0">
      </tr>
      <script type="text/javascript">
      function setCheck() {
        document.getElementById("majorEduOverlap").value = opener.document.getElementById("majorEduCheck").value;
        if(document.getElementById("majorEduOverlap").value == "1") {
          document.querySelector("#area1_1").click();
        }
      }
      setCheck();
      </script>
    </table>
    </form>
  </div>
  </body>
</html>
