<?php
ini_set('display_errors','0');
require_once('lib/print.php');
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
</script>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styler.css">
    <title>기본이수과목</title>
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
             opener.document.getElementById("majorBasic").value = document.getElementById("total_sum").value;
             opener.document.getElementById("majorEduCheck").value = document.getElementById("majorEduOverlap").value;
             <?php if($department == "국어교육전공") { ?>
             opener.document.getElementById("korean5_3Check").value = document.getElementById("korean5_3").value;
             <?php } ?>
             <?php if($department == "간호학과" || $department == "국어국문학과" || $department == "가정교육전공" || $department == "국어교육전공" || $department == "도덕윤리교육전공" || $department == "역사교육전공" || $department == "컴퓨터교육전공") { ?>
             opener.document.getElementById("area_check").value = document.getElementById("area_result").value;
             <?php } ?>
             window.close();
        }
    </script>

  </head>
  <body>
    <h3 id="popUpTitle">기본이수과목</h3>
    <div id="popUpBody">
    <?php
      require_once('기본이수과목/'.$department.'.php');
     ?>

     <script type="text/javascript">
     function setCheck() {
       document.getElementById("majorEduOverlap").value = opener.document.getElementById("majorEduCheck").value;
       if(document.getElementById("majorEduOverlap").value == "1") {
         document.querySelector("#area1_1").click();
       }
     }
     setCheck();
     </script>
   </div>
  </body>
</html>
