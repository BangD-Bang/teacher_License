<?php if($_GET['departmentCheck'] == "가정교육전공" || $_GET['departmentCheck'] == "국어교육전공" || $_GET['departmentCheck'] == "도덕윤리교육전공" || $_GET['departmentCheck'] == "역사교육전공" || $_GET['departmentCheck'] == "컴퓨터교육전공") { ?>

  &#9657; 기본이수과목 : <?php if($_GET['majorBasic'] >= 14 and $_GET['area_check'] == "이수완료") { ?>
    <font color='blue'><b>이수완료</b></font>
  <?php } else if($_GET['majorBasic'] >= 14 and $_GET['area_check'] != "이수완료") {
      echo $_GET['area_check'];
    } else if($_GET['majorBasic'] < 14 and $_GET['area_check'] == "이수완료") {
      echo 14 - $_GET['majorBasic']."학점 <font color='red'><b>미이수</b></font>";
    } else if($_GET['majorBasic'] < 14 and $_GET['area_check'] != "이수완료") {
      echo 14 - $_GET['majorBasic']."학점 <font color='red'><b>미이수</b></font>";
      echo " (영역조건: ".$_GET['area_check'].")";
    } else if($_GET['majorBasic'] == "") { ?>
      14학점 <font color='red'><b>미이수</b></font><br>
  <?php echo "(영역조건: ".$_GET['area_check'].")";
    } else {
      echo 14 - $_GET['majorBasic']."학점 <font color='red'><b>미이수</b></font>";
    } ?><br>

<?php } else { ?>

  &#9657; 기본이수과목 : <?php if($_GET['majorBasic'] >= 14) { ?>
    <font color='blue'><b>이수완료</b></font>
  <?php } else if($_GET['majorBasic'] == "") { ?>
    14학점 <font color='red'><b>미이수</b></font>
  <?php } else {
  echo 14 - $_GET['majorBasic']."학점 <font color='red'><b>미이수</b></font>";
  } ?><br>

<?php } ?>

&#9657; 교과교육영역 : <?php if($_GET['majorEdu'] >= 6) { ?>
  <font color='blue'><b>이수완료</b></font>
<?php } else if($_GET['majorEdu'] == "") { ?>
  6학점 <font color='red'><b>미이수</b></font>
<?php } else {
echo 6 - $_GET['majorEdu']."학점 <font color='red'><b>미이수</b></font>";
} ?><br>
