기본이수과목 : <?php if($_GET['majorBasic'] >= 21) { ?>
  이수완료
<?php } else if($_GET['majorBasic'] == "") { ?>
  21학점 미이수
<?php } else {
echo 21 - $_GET['majorBasic']."학점 미이수";
} ?><br>

<?php if($_GET['departmentCheck'] == "국어국문학과") { ?>
  <?php echo $_GET['area_check']; ?>
<?php } ?>

<?php if($_GET['departmentCheck'] == "심리학과(심리학부)" or $_GET['departmentCheck'] == "간호학과") { ?>

<?php } else { ?>
교과교육영역 : <?php if($_GET['majorEdu'] >= 8) { ?>
  이수완료
<?php } else if($_GET['majorEdu'] == "") { ?>
  8학점 미이수
<?php } else {
echo 8 - $_GET['majorEdu']."학점 미이수";
} ?><br>
<?php } ?>
