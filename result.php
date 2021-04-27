<?php
require_once('lib/print.php');
require_once('view/top.php');
 ?>
    <?php
      echo "<h3>소속기관 = ".$_GET['institutionCheck']."</h3>";
      echo "<h3>소속학과 = ".$_GET['departmentCheck']."</h3>";
      echo "<h3>입학년도 = ".$_GET['entryYearCheck']."</h3>";

      require_once('view/result'.$_GET['institutionCheck'].'.php');?>

      <?php if($_GET['entryYearCheck'] == "2009~2012년") { ?>
      교직이론 : <?php if($_GET['eduTheory'] >= 14) { ?>
        이수완료
      <?php } else if($_GET['eduTheory'] == "") { ?>
        14학점 미이수
      <?php } else {
      echo 14 - $_GET['eduTheory']."학점 미이수";
      } ?>

      <?php } else { ?>

      교직이론 : <?php if($_GET['eduTheory'] >= 12) { ?>
        이수완료
      <?php } else if($_GET['eduTheory'] == "") { ?>
        12학점 미이수
      <?php } else {
      echo 12 - $_GET['eduTheory']."학점 미이수";
      } }?>
      <br>

      <?php if($_GET['entryYearCheck'] == "2009~2012년") { ?>
      교직소양 : <?php if($_GET['eduRefine'] >= 4) { ?>
        이수완료
      <?php } else if($_GET['eduRefine'] == "") { ?>
        4학점 미이수
      <?php } else {
      echo 4 - $_GET['eduRefine']."학점 미이수";
      } ?>

      <?php } else { ?>

      교직소양 : <?php if($_GET['eduRefine'] >= 6) { ?>
        이수완료
      <?php } else if($_GET['eduRefine'] == "") { ?>
        6학점 미이수
      <?php } else {
      echo 6 - $_GET['eduRefine']."학점 미이수";
      } }?>
      <br>

      교육실습 : <?php if($_GET['eduPractice'] >= 4) { ?>
        이수완료
      <?php } else if($_GET['eduPractice'] == "") { ?>
        4학점 미이수
      <?php } else {
      echo 4 - $_GET['eduPractice']."학점 미이수";
      } ?>&nbsp;(2018학번부터는 교육봉사 필수)<br>

      교직 적성 및 인성검사 : <?php if($_GET['eduTest'] >= 2) { ?>
        이수완료
      <?php } else if($_GET['eduTest'] == "") { ?>
        2회 미이수
      <?php } else {
      echo 2 - $_GET['eduTest']."회 미이수";
      } ?><br>

      응급처치 및 심폐소생술 교육 : <?php if($_GET['cpr'] >= 2) { ?>
        이수완료
      <?php } else if($_GET['cpr'] == "") { ?>
        2회 미이수
      <?php } else {
      echo 2 - $_GET['cpr']."회 미이수";
      } ?><br>

      전공평점 : <?php if($_GET['majorAvr'] >= 2.31) { ?>
        충족
      <?php } else if($_GET['majorAvr'] == "") { ?>
        미입력
      <?php } else { ?>
        미충족 (<?php echo 2.31 - $_GET['majorAvr']."점 부족)";
      } ?><br>

      교직평점 : <?php if($_GET['eduAvr'] >= 2.75) { ?>
        충족
      <?php } else if($_GET['eduAvr'] == "") { ?>
        미입력
      <?php } else { ?>
        미충족 (<?php echo 2.75 - $_GET['eduAvr']."점 부족)";
      } ?><br>

      <!-- 연도별 성인지 교육 구분 -->
      <?php if($_GET['entryYearCheck'] == "2009~2012년" or $_GET['entryYearCheck'] == "2013~2015년") { ?>

      <?php } else if($_GET['entryYearCheck'] == "2016~2020년" || $_GET['entryYearCheck'] == "2021년 이후") { ?>

        성인지 교육 : <?php if($_GET['gender'] >= 2) { ?>
          이수완료
        <?php } else if($_GET['gender'] == "") { ?>
          2회 미이수
        <?php } else {
        echo 2 - $_GET['gender']."회 미이수";
        }
      } ?><br>

<?php
require_once('view/bottom.php')
 ?>
