<?php
require_once('lib/print.php');
$department = $_GET['department'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
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
             <?php if($department == "국어국문학과" || $department == "가정교육전공" || $department == "국어교육전공" || $department == "도덕윤리교육전공" || $department == "역사교육전공" || $department == "컴퓨터교육전공") { ?>
             opener.document.getElementById("area_check").value = document.getElementById("area_result").value;
             <?php } ?>
             window.close();
        }
    </script>

  </head>
  <body>
    <h3>이수한 기본이수과목</h3>
    <?php
      require_once('기본이수과목/'.$department.'.php');
     ?>
  </body>
</html>
