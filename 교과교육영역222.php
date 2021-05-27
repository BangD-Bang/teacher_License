<?php
ini_set('display_errors','0');
$department = $_GET['department'];
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

function overlap_5_3_c() {
  if(mES3_1.checked == true) {
    document.getElementById('korean5_3').value = "1";
  }
  if(mES3_1.checked == false) {
    document.getElementById('korean5_3').value = "0";
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
             <?php if($department == "국어교육전공") { ?>
             opener.document.getElementById("korean5_3Check").value = document.getElementById("korean5_3").value;
             <?php } ?>
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
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area1_1" value="2" onClick=
          <?php if($_GET['department'] == "상담심리교육전공") { ?>
          "mES1();itemSum(this.form);"
        <?php } else { ?>
          "itemSum(this.form);"
        <?php } ?>
          >
          <label for="area1_1">&nbsp;교과교육론(2학점)</label></td>
      </tr>
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area2_1" value="2" onClick=
          <?php if($_GET['department'] == "상담심리교육전공") { ?>
            "mES1();itemSum(this.form);"
          <?php } else { ?>
            "itemSum(this.form);"
          <?php } ?>
            >
          <label for="area2_1">&nbsp;교과교재연구및지도법(2학점)</label></td>
      </tr>
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area3_1" value="2" onClick=
        <?php if($_GET['department'] == "상담심리교육전공") { ?>
          "mES1();itemSum(this.form);"
        <?php } else { ?>
          "itemSum(this.form);"
        <?php } ?>
          >
          <label for="area3_1">&nbsp;교과논리및논술(2학점)</label></td>
      </tr>
      <?php if($_GET['department'] == "상담심리교육전공") { ?>
      <tr>
        <td height="25">&nbsp;<input name="chkbox" type="checkbox" id="area4_1" value="6" onClick="mES4();itemSum(this.form);">
          <label for="area4_1">&nbsp;해당없음(전문상담교사-기본값 6 부여)</label></td>
      </tr>
      <?php } ?>
      <script>
        const mES1_1 = document.querySelector('#area1_1');
        const mES2_1 = document.querySelector('#area2_1');
        const mES3_1 = document.querySelector('#area3_1');
        const mES4_1 = document.querySelector('#area4_1');

        function mES1() {
          if(mES1_1.checked == true || mES2_1.checked == true || mES3_1.checked == true) {
            mES4_1.checked = false;
        } }
        function mES4() {
          if(mES4_1.checked == true) {
            mES1_1.checked = false;
            mES2_1.checked = false;
            mES3_1.checked = false;
        } }
      </script>
      <tr>
        <td height="25">&nbsp;합계:&nbsp;<input id="total_sum" name="total_sum" type="text" size="20"></td>
      </tr>
      <tr>
        <td height="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" id="popUpSubmit" value="확인" onclick=
          <?php
          if($department == "가정교육전공" or $department == "도덕윤리교육전공" or $department == "미술교육전공" or $department == "생물교육전공" or $department == "역사교육전공" or $department == "일반사회교육전공" or $department == "일어교육전공" or $department == "지리교육전공") {
            if($department == "체육교육전공" or $department == "컴퓨터교육전공") {
           ?>
          "overlap_c();setParentText();"
        <?php } } else if($department == "국어교육전공") { ?>
          "overlap_c();overlap_5_3_c();setParentText();"
        <?php } else { ?>
          "setParentText()"
        <?php } ?>
        ></td>
        <input type="hidden" id="majorEduOverlap" name="majorEduOverlap" value="0">
        <?php if($department == "국어교육전공") { ?>
        <input type="hidden" id="korean5_3" name="korean5_3" value="0">
        <?php } ?>
      </tr>
      <script>
      function setCheck() {
        document.getElementById("majorEduOverlap").value = opener.document.getElementById("majorEduCheck").value;
        if(document.getElementById("majorEduOverlap").value == "1") {
          document.querySelector("#area1_1").click();
        }
      }
      setCheck();
      </script>

      <?php if($department == "국어교육전공") { ?>
        <script type="text/javascript">
        function setCheck2() {
          document.getElementById("korean5_3").value = opener.document.getElementById("korean5_3Check").value;
          if(document.getElementById("korean5_3").value == "1") {
            document.querySelector("#area3_1").click();
          }
        }
        setCheck2();
        </script>
      <?php } ?>

    </table>
    </form>
  </div>
  </body>
</html>
