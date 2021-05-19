<?php if($_GET['departmentCheck'] == "국어국문학과") { ?>

  &#9657; 기본이수과목 : <?php if($_GET['majorBasic'] >= 21 and $_GET['area_check'] == "이수완료") { ?>
    <font color='blue'><b>이수완료</b></font>
  <?php } else if($_GET['majorBasic'] >= 21 and $_GET['area_check'] != "이수완료") {
      echo $_GET['area_check'];
    } else if($_GET['majorBasic'] < 21 and $_GET['area_check'] == "이수완료") {
      echo 21 - $_GET['majorBasic']."학점 <font color='red'><b>미이수</b></font>";
    } else if($_GET['majorBasic'] < 21 and $_GET['area_check'] != "이수완료") {
      echo 21 - $_GET['majorBasic']."학점 <font color='red'><b>미이수</b></font>";
      echo " (영역조건: ".$_GET['area_check'].")";
    } else if($_GET['majorBasic'] == "0") { ?>
      21학점 <font color='red'><b>미이수</b></font><br>
  <?php echo "(영역조건: ".$_GET['area_check'].")";
    } else {
      echo 21 - $_GET['majorBasic']."학점 <font color='red'><b>미이수</b></font>";
    } ?><br>

<?php } else { ?>

  &#9657; 기본이수과목 : <?php if($_GET['majorBasic'] >= 21) { ?>
    <font color='blue'><b>이수완료</b></font>
  <?php } else if($_GET['majorBasic'] == "") { ?>
    21학점 <font color='red'><b>미이수</b></font>
  <?php } else {
  echo 21 - $_GET['majorBasic']."학점 <font color='red'><b>미이수</b></font>";
  } ?><br>

<?php } ?>

<?php if($_GET['departmentCheck'] == "심리학과(심리학부)" or $_GET['departmentCheck'] == "간호학과") { ?>

<?php } else { ?>
&#9657; 교과교육영역 : <?php if($_GET['majorEdu'] >= 8) { ?>
  <font color='blue'><b>이수완료</b></font>
<?php } else if($_GET['majorEdu'] == "") { ?>
  8학점 <font color='red'><b>미이수</b></font>
<?php } else {
echo 8 - $_GET['majorEdu']."학점 <font color='red'><b>미이수</b></font>";
} ?><br>
<?php } ?>
