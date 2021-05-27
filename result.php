<?php
ini_set('display_errors','0');
require_once('lib/print.php');
require_once('view/top.php');
require_once('lib/resultParameterProtection.php');
 ?>
 <script>
 var condition;
 function condition_open() {
   window.name = "취득요건";
   condition = window.open("/취득요건.php"+"?institutionCheck=<?=$_GET['institutionCheck']; ?>"+"&departmentCheck=<?=$_GET['departmentCheck'];?>"+"&entryYearCheck=<?=$_GET['entryYearCheck'];?>","취득요건 보기","width=570, height=450, resizable=no");
 }
 </script>

 <br><b><font color="blue" size="4px">
   &squ; 검정결과 확인</font></b><br><br>

 <div style="margin-left:20px; line-height:30px;">
   <font color="red"><b>&starf; 유의사항</b></font><br>
   - 검정 결과는 미졸업자를 기준으로 계산됩니다.<br>
   - 수료 상태인 경우 수료일자에 따라 결과가 달라질 수 있습니다.<br><br>
   <input type="button" id="conditionButton" value="취득요건 기준 보기" onClick="condition_open()"><br>

    <?php
      require_once('view/result'.$_GET['institutionCheck'].'.php');?>

      <?php if($_GET['entryYearCheck'] == "2009~2012년") { ?>
      &#9657; 교직이론 : <?php if($_GET['eduTheory'] >= 14) { ?>
        <font color='blue'><b>이수완료</b></font>
      <?php } else if($_GET['eduTheory'] == "") { ?>
        14학점 <font color='red'><b>미이수</b></font>
      <?php } else {
      echo 14 - $_GET['eduTheory']."학점 <font color='red'><b>미이수</b></font>";
      } ?>

      <?php } else { ?>

      &#9657; 교직이론 : <?php if($_GET['eduTheory'] >= 12) { ?>
        <font color='blue'><b>이수완료</b></font>
      <?php } else if($_GET['eduTheory'] == "") { ?>
        12학점 <font color='red'><b>미이수</b></font>
      <?php } else {
      echo 12 - $_GET['eduTheory']."학점 <font color='red'><b>미이수</b></font>";
      } }?>
      <br>

      <?php if($_GET['entryYearCheck'] == "2009~2012년") { ?>
      &#9657; 교직소양 : <?php if($_GET['eduRefine'] >= 4) { ?>
        <font color='blue'><b>이수완료</b></font>
      <?php } else if($_GET['eduRefine'] == "") { ?>
        4학점 <font color='red'><b>미이수</b></font>
      <?php } else {
      echo 4 - $_GET['eduRefine']."학점 <font color='red'><b>미이수</b></font>";
      } ?>

      <?php } else { ?>

      &#9657; 교직소양 : <?php if($_GET['eduRefine'] >= 6) { ?>
        <font color='blue'><b>이수완료</b></font>
      <?php } else if($_GET['eduRefine'] == "") { ?>
        6학점 <font color='red'><b>미이수</b></font>
      <?php } else {
      echo 6 - $_GET['eduRefine']."학점 <font color='red'><b>미이수</b></font>";
      } }?>
      <br>

      <!-- 2018학번 이후 교육실습 요건확인-->
      <?php if($_GET['entryYearCheck'] == "2018~2020년" or $_GET['entryYearCheck'] == "2021년 이후") {?>
      &#9657; 교육실습 : <?=$_GET['volunteerCheck']?>

      <!-- 2018학번 이전 교육실습 요건확인-->
      <?php } else { ?>
      &#9657; 교육실습 : <?php if($_GET['eduPractice'] >= 4) { ?>
        <font color='blue'><b>이수완료</b></font>
      <?php } else if($_GET['eduPractice'] == "") { ?>
        4학점 <font color='red'><b>미이수</b></font>
      <?php } else {
      echo 4 - $_GET['eduPractice']."학점 <font color='red'><b>미이수</b></font>";
    } }?><br>

    <?php if($_GET['entryYearCheck'] == "2009~2012년") { ?>

      &#9657; 교직 적성 및 인성검사 : <?php if($_GET['eduTest'] >= 1) { ?>
        <font color='blue'><b>이수완료</b></font>
      <?php } else if($_GET['eduTest'] == "") { ?>
        1회 <font color='red'><b>미이수</b></font>
      <?php } else {
      echo 1 - $_GET['eduTest']."회 <font color='red'><b>미이수</b></font>";
      } ?><br>

    <?php } else { ?>

      &#9657; 교직 적성 및 인성검사 : <?php if($_GET['eduTest'] >= 2) { ?>
        <font color='blue'><b>이수완료</b></font>
      <?php } else if($_GET['eduTest'] == "") { ?>
        2회 <font color='red'><b>미이수</b></font>
      <?php } else {
      echo 2 - $_GET['eduTest']."회 <font color='red'><b>미이수</b></font>";
      } ?><br>

    <?php } ?>

      &#9657; 응급처치 및 심폐소생술 교육 : <?php if($_GET['cpr'] >= 2) { ?>
        <font color='blue'><b>이수완료</b></font>
      <?php } else if($_GET['cpr'] == "") { ?>
        2회 <font color='red'><b>미이수</b></font>
      <?php } else {
      echo 2 - $_GET['cpr']."회 <font color='red'><b>미이수</b></font>";
      } ?><br>

      <?php if($_GET['entryYearCheck'] == "2009~2012년") { ?>

      &#9657; 졸업평점 : <?php if($_GET['graduateAvr'] >= 2.31) { ?>
        <font color='blue'><b>충족</b></font>
      <?php } else if($_GET['graduateAvr'] == "") { ?>
        <font color='red'><b>미입력</b></font>
      <?php } else { ?>
        <font color='red'><b>미충족</b></font> (<?php echo 2.31 - $_GET['graduateAvr']."점 부족)";
      } ?><br>

    <?php } else { ?>

      &#9657; 전공평점 : <?php if($_GET['majorAvr'] >= 2.31) { ?>
        <font color='blue'><b>충족</b></font>
      <?php } else if($_GET['majorAvr'] == "") { ?>
        <font color='red'><b>미입력</b></font>
      <?php } else { ?>
        <font color='red'><b>미충족</b></font> (<?php echo 2.31 - $_GET['majorAvr']."점 부족)";
      } ?><br>

      &#9657; 교직평점 : <?php if($_GET['eduAvr'] >= 2.75) { ?>
        <font color='blue'><b>충족</b></font>
      <?php } else if($_GET['eduAvr'] == "") { ?>
        <font color='red'><b>미입력</b></font>
      <?php } else { ?>
        <font color='red'><b>미충족</b></font> (<?php echo 2.75 - $_GET['eduAvr']."점 부족)";
      } ?><br>

    <?php } ?>

      &#9657; 성인지 교육 : <?php if($_GET['gender'] >= 2) { ?>
          <font color='blue'><b>이수완료</b></font>
        <?php } else if($_GET['gender'] == "") { ?>
          2회 <font color='red'><b>미이수</b></font>
        <?php } else {
        echo 2 - $_GET['gender']."회 <font color='red'><b>미이수</b></font>";
      } ?><br><br><br>
    </div>

<?php
require_once('view/bottom.php')
 ?>
