기본이수과목 : <?php if($_GET['majorBasic'] >= 14) { ?>
  이수완료
<?php } else if($_GET['majorBasic'] == "") { ?>
  14학점 미이수
<?php } else {
echo 14 - $_GET['majorBasic']."학점 미이수";
} ?><br>

<?php if($_GET['departmentCheck'] == "가정교육전공" || $_GET['departmentCheck'] == "국어교육전공" || $_GET['departmentCheck'] == "도덕윤리교육전공" || $_GET['departmentCheck'] == "역사교육전공" || $_GET['departmentCheck'] == "컴퓨터교육전공") { ?>
  <?php echo $_GET['area_check']; ?>
<?php } ?>

교과교육영역 : <?php if($_GET['majorEdu'] >= 6) { ?>
  이수완료
<?php } else if($_GET['majorEdu'] == "") { ?>
  6학점 미이수
<?php } else {
echo 6 - $_GET['majorEdu']."학점 미이수";
} ?><br>
