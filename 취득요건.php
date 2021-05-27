<?php
ini_set('display_errors','0');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styler.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>취득요건</title>
  </head>
  <body>
    <h3 id="popUpTitle">교원자격 취득요건</h3>
    <div id="popUpBody">

       <!-- 일반대학 교직과정 -->
      <?php if($_GET['institutionCheck'] == "일반대학 교직과정") { ?>
        <?php
        echo "<b>소속기관: <font color='blue'>일반대학 교직과정</font><br>";
        echo "소속학과: <font color='blue'>".$_GET['departmentCheck']."</font><br>";
        echo "입학년도: <font color='blue'>".$_GET['entryYearCheck']."</font></b><br><br>";
         ?>

        &#9657; 전공: <font color='red'><b>50학점</b></font> 이상 <br>
        &#9657; 기본이수과목: <font color='red'><b>21학점</b></font> 이상<br>

        <?php if($_GET['departmentCheck'] != "간호학과" and $_GET['departmentCheck'] != "심리학과(심리학부)") { ?>
        &#9657; 교과교육영역: <font color='red'><b>8학점</b></font> 이상<br>
        <?php } ?>

        &#9657; 교직이론:
        <?php if($_GET['entryYearCheck'] == "2009~2012년") { ?>
          <font color='red'><b>14학점</b></font> 이상<br>
        <?php } else { ?>
          <font color='red'><b>12학점</b></font> 이상<br>
        <?php } ?>

        &#9657; 교직소양:
        <?php if($_GET['entryYearCheck'] == "2009~2012년") { ?>
          <font color='red'><b>4학점</b></font> 이상<br>
        <?php } else { ?>
          <font color='red'><b>6학점</b></font> 이상<br>
        <?php } ?>

        &#9657; 교육실습:
        <?php if($_GET['entryYearCheck'] == "2018~2020년" || $_GET['entryYearCheck'] == "2021년 이후") { ?>
          <font color='red'><b>4학점</b></font> 이상(교육봉사 필수)<br>
        <?php } else { ?>
          <font color='red'><b>4학점</b></font> 이상<br>
        <?php } ?>

        &#9657; 교직 적성 및 인성검사:
        <?php if($_GET['entryYearCheck'] == "2009~2012년") { ?>
          <font color='red'><b>1회</b></font> 이상 적합<br>
        <?php } else { ?>
          <font color='red'><b>2회</b></font> 이상 적합<br>
        <?php } ?>

        &#9657; 응급처치 및 심폐소생술: <font color='red'><b>2회</b></font> 이상 이수<br>

        <?php if($_GET['entryYearCheck'] == "2009~2012년") { ?>
          &#9657; 졸업평점: <font color='red'><b>2.31점</b></font> 이상<br>
        <?php } else { ?>
          &#9657; 전공평점: <font color='red'><b>2.31점</b></font> 이상<br>
          &#9657; 교직평점: <font color='red'><b>2.75점</b></font> 이상<br>
        <?php } ?>

        &#9657; 성인지교육: <font color='red'><b>2회</b></font> 이상 이수<br>

        <!-- 교육대학원 -->
      <?php } else if($_GET['institutionCheck'] == "교육대학원") { ?>
        <?php
        echo "<b>소속기관: <font color='blue'>교육대학원</font><br>";
        echo "소속학과: <font color='blue'>".$_GET['departmentCheck']."</font><br>";
        echo "입학년도: <font color='blue'>".$_GET['entryYearCheck']."</font></b><br><br>";
         ?>

        &#9657; 전공: <font color='red'><b>50학점</b></font> 이상 (학부인정 36 + 교육대학원 이수 14)<br>
        &#9657; 기본이수과목: <font color='red'><b>14학점</b></font> 이상<br>

        <?php if($_GET['departmentCheck'] == "상담심리교육전공") { ?>
        &#9657; 교과교육영역<br>
        &nbsp;&nbsp; - 중등2급 상담: <font color='red'><b>6학점</b></font> 이상<br>
        &nbsp;&nbsp; - 전문상담교사 2급: <font color="red"><b>해당없음</b></font><br>
        <?php } else { ?>
        &#9657; 교과교육영역: <font color='red'><b>6학점</b></font> 이상<br>
        <?php } ?>

        &#9657; 교직이론:
        <?php if($_GET['entryYearCheck'] == "2009~2012년") { ?>
          <font color='red'><b>14학점</b></font> 이상<br>
        <?php } else { ?>
          <font color='red'><b>12학점</b></font> 이상<br>
        <?php } ?>

        &#9657; 교직소양:
        <?php if($_GET['entryYearCheck'] == "2009~2012년") { ?>
          <font color='red'><b>4학점</b></font> 이상<br>
        <?php } else { ?>
          <font color='red'><b>6학점</b></font> 이상<br>
        <?php } ?>

        &#9657; 교육실습:
        <?php if($_GET['entryYearCheck'] == "2018~2020년" || $_GET['entryYearCheck'] == "2021년 이후") { ?>
          <font color='red'><b>4학점</b></font> 이상(<font color="red"><b>교육봉사</b></font> 필수)<br>
        <?php } else { ?>
          <font color='red'><b>4학점</b></font> 이상<br>
        <?php } ?>

        &#9657; 교직 적성 및 인성검사:
        <?php if($_GET['entryYearCheck'] == "2009~2012년") { ?>
          <font color='red'><b>1회</b></font> 이상 적합<br>
        <?php } else { ?>
          <font color='red'><b>2회</b></font> 이상 적합<br>
        <?php } ?>

        &#9657; 응급처치 및 심폐소생술: <font color='red'><b>2회</b></font> 이상 이수<br>

        <?php if($_GET['entryYearCheck'] == "2009~2012년") { ?>
          &#9657; 졸업평점: <font color='red'><b>2.31점</b></font> 이상<br>
        <?php } else { ?>
          &#9657; 전공평점: <font color='red'><b>2.31점</b></font> 이상<br>
          &#9657; 교직평점: <font color='red'><b>2.75점</b></font> 이상<br>
        <?php } ?>

        &#9657; 성인지교육: <font color='red'><b>2회</b></font> 이상 이수<br>

      <?php } ?>
    </div>
  </body>
</html>
