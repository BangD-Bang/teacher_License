<?php
ini_set('display_errors','0');
require_once('lib/print.php');
require_once('view/top.php');
 ?>

    <?php
      if(isset($_GET['institution']) and isset($_GET['entryYear'])) {?>
        <?php require_once('lib/parameterProtection.php'); ?>

        <b><font color="blue" size="4px"><br>
          &squ; 아래 각 요건의 취득내역을 기입해주세요.</font><br>
          <font color="red" size="3px" style="margin-left:0px;">&#42; 정확한 결과를 위해 "과목별로 보기" 사용</font></b><br>

     <!-- 입력페이지 자바스크립트 -->
    <?php require_once('lib/popup.php'); ?>

    <script type="text/javascript">
      function resultConfirm() {
        if(confirm("입력한 내용으로 결과를 확인합니다.")) {
          if(document.getElementById('majorBasic').value == "") {
            document.getElementById('majorBasic').value = 0;
          }
          if(document.getElementById('eduTheory').value == "") {
            document.getElementById('eduTheory').value = 0;
          }
          if(document.getElementById('eduRefine').value == "") {
            document.getElementById('eduRefine').value = 0;
          }
          if(document.getElementById('eduPractice').value == "") {
            document.getElementById('eduPractice').value = 0;
          }
          document.resultForm.submit();
        } else {
          return;
        }
      }
    </script>
    <input type="hidden" id="majorEduCheck" name="majorEduCheck" value="0">
    <input type="hidden" id="korean5_3Check" name="korean5_3Check" value="0">

    <form action="result.php" name="resultForm" style="margin-left: 20px;">
      <input type="hidden" name="institutionCheck" value="<?php echo $_GET['institution']; ?>">
      <input type="hidden" name="departmentCheck" value="<?php echo $department; ?>">
      <input type="hidden" name="entryYearCheck" value="<?php echo $_GET['entryYear']; ?>">
      <input type="hidden" id="area_check" name="area_check" value="이수여부 확인불가">
      <input type="hidden" id="volunteerCheck" name="volunteerCheck" value="<font color='red'><b>이수여부 확인불가</b></font>('과목별로 보기' 사용)">
      <p>
        &#9657;	기본이수과목
        <input type="number" min="0" id="majorBasic" name="majorBasic" value=0 placeholder="기본이수과목">학점
        <input type="button" value="과목별로 보기" onclick="
        <?php
        $filename = './기본이수과목/'.$department.'.php';
        if(file_exists($filename)) { ?>
        openMajorBasic()
      <?php } else { ?>
        departmentAlert()
      <?php } ?>
        ">
      </p>
      <?php if($department == "심리학과(심리학부)" or $department == "간호학과") { ?>

      <?php } else { ?>
      <p>
        &#9657;	교과교육영역
        <input type="number" min="0" id="majorEdu" name="majorEdu" value=0 placeholder="교과교육영역">학점
        <input type="button" value="과목별로 보기" onclick=
        <?php if ($department == "국어국문학과" or $department == "노어노문학과" or $department == "영어영문학과" or $department == "중어중문학과" or $department == "철학과" or $department == "한문학과") { ?>
          "openMajorEdu332()"
        <?php } else if ($department == "물리학과" or $department == "생명과학부" or $department == "지구환경과학과" or $department == "화학과") { ?>
          "openMajorEdu323()"
        <?php } else if ($department == "경제학과" or $department == "사회학과" or $department == "정치외교학과" or $department == "행정학과" or $department == "독어독문학과" or $department == "불어불문학과" or $department == "수학과" or $department == "통계학과" or $department == "일어일문학과") { ?>
          "openMajorEdu333()"
        <?php } else if ($department == "심리학과(심리학부)" or $department == "간호학과") { ?>
          "openMajorEduNone()"
        <?php } else { ?>
          "openMajorEdu222()"
        <?php } ?>
        >
      </p>
      <?php } ?>

      <p>
        &#9657;	교직이론
        <input type="number" min="0" id="eduTheory" name="eduTheory" value=0 placeholder="교직이론">학점
        <input type="button" value="과목별로 보기" onclick=
        <?php if ($_GET['entryYear'] == "2009~2012년") { ?>
        "openEduTheory0912()"
        <?php } else { ?>
        "openEduTheory()"
        <?php } ?>
        >
      </p>
      <p>
        &#9657;	교직소양
        <input type="number" min="0" id="eduRefine" name="eduRefine" value=0 placeholder="교직소양">학점
        <input type="button" value="과목별로 보기" onclick=
        <?php if ($_GET['entryYear'] == "2009~2012년") { ?>
        "openEduRefine0912()"
        <?php } else { ?>
        "openEduRefine()"
        <?php } ?>
         >
      </p>
      <p>
        &#9657;	교육실습
        <input type="number" min="0" id="eduPractice" name="eduPractice" value=0 placeholder="교육실습">학점
        <input type="button" value="과목별로 보기" onclick=
        <?php if ($_GET['entryYear'] == "2018~2020년" or $_GET['entryYear'] == "2021년 이후") {?>
        "openEduPractice18_()"
        <?php } else { ?>
        "openEduPractice()"
        <?php } ?>
        >
      </p>
      <p>
        &#9657;	교직 적성 및 인성검사
        <input type="number" min="0" name="eduTest" value=0 placeholder="적합횟수">회 적합
      </p>
      <p>
        &#9657;	응급처치 및 심폐소생술 교육
        <input type="number" min="0" name="cpr" value=0 placeholder="이수횟수">회 이수
      </p>
      <?php if($_GET['entryYear'] == "2009~2012년") { ?>
        &#9657;	졸업평점(4.5만점)
        <input type="number" step="0.01" min="0" max="4.5" name="graduateAvr" value=0 placeholder="졸업평점">점
      <?php } else { ?>
      <p>
        &#9657;	전공/교직 평점평균(4.5만점)
        <input type="number" step="0.01" min="0" max="4.5" name="majorAvr" value=0 placeholder="전공평점">점
        <input type="number" step="0.01" min="0" max="4.5" name="eduAvr" value=0 placeholder="교직평점">점
      </p>
    <?php } ?>
      <p>
        &#9657;	성인지 교육
        <input type="number" min="0" name="gender" value=0 placeholder="이수횟수">회 이수
      </p>
      <p>
        <input type="button" id="resultSubmit" value="확인" onClick="resultConfirm();">
      </p>
    </form>

    <!-- 메인 페이지, 입력 페이지 구분-->
  <?php
  } else {
     ?>
     <!-- 메인페이지 자바스크립트 -->
     <?php require_once('lib/initialSubmit.php') ?>
     <br>
     <b><font color="blue" size="4px">&squ; 소속과 학과, 입학년도를 선택해주세요.</font></b>

     <form action="index.php" name="basic" style="margin-left: 20px;">
       <h3>&#9654; 소속구분</h3>
       <!--<input type="radio" name="institution" value="사범대학">
       <label for="사범대학">사범대학</label>
       <select type=radio name="department1">
         <option value=null></option>
         <option value="가정교육과">가정교육과</option>
         <option value="교육학과">교육학과</option>
         <option value="국어교육과">국어교육과</option>
         <option value="수학교육과">수학교육과</option>
         <option value="역사교육과">역사교육과</option>
         <option value="영어교육과">영어교육과</option>
         <option value="지리교육과">지리교육과</option>
         <option value="체육교육과">체육교육과</option>
       </select>
      <br>-->
       <input type="radio" name="institution" id="institution2" value="일반대학 교직과정">
       <label for="institution2">일반대학 교직과정</label>
       <select type=radio name="department2" id="department2" onClick="autoDep2()">
         <option value="null"></option>
         <option value="간호학과">간호학과</option>
         <option value="경제학과">경제학과</option>
         <option value="국어국문학과">국어국문학과</option>
         <option value="노어노문학과">노어노문학과</option>
         <option value="독어독문학과">독어독문학과</option>
         <option value="물리학과">물리학과</option>
         <option value="불어불문학과">불어불문학과</option>
         <option value="사회학과">사회학과</option>
         <option value="생명과학부">생명과학부</option>
         <option value="수학과">수학과</option>
         <option value="심리학과(심리학부)">심리학과(심리학부)</option>
         <option value="영어영문학과">영어영문학과</option>
         <option value="일어일문학과">일어일문학과</option>
         <option value="정치외교학과">정치외교학과</option>
         <option value="중어중문학과">중어중문학과</option>
         <option value="지구환경과학과">지구환경과학과</option>
         <option value="철학과">철학과</option>
         <option value="통계학과">통계학과</option>
         <option value="한문학과">한문학과</option>
         <option value="행정학과">행정학과</option>
         <option value="화학과">화학과</option>
       </select><br>
       <input type="radio" name="institution" id="institution3" value="교육대학원">
       <label for="institution3">교육대학원</label>
       <select type=radio name="department3" onClick="autoDep3()">
         <option value="null"></option>
         <option value="가정교육전공">가정교육전공</option>
         <option value="국어교육전공">국어교육전공</option>
         <option value="도덕윤리교육전공">도덕윤리교육전공</option>
         <option value="미술교육전공">미술교육전공</option>
         <option value="상담심리교육전공">상담심리교육전공</option>
         <option value="생물교육전공">생물교육전공</option>
         <option value="수학교육전공">수학교육전공</option>
         <option value="역사교육전공">역사교육전공</option>
         <option value="영어교육전공">영어교육전공</option>
         <option value="일반사회교육전공">일반사회교육전공</option>
         <option value="일어교육전공">일어교육전공</option>
         <option value="지리교육전공">지리교육전공</option>
         <option value="체육교육전공">체육교육전공</option>
         <option value="컴퓨터교육전공">컴퓨터교육전공</option>
       </select><br>
        <h3>&#9654;	입학년도</h3>
       <input type="radio" name="entryYear" id="2009~2012년" value="2009~2012년">
       <label for="2009~2012년">2009~2012년</label><br>
       <input type="radio" name="entryYear" id="2013~2015년" value="2013~2015년">
       <label for="2013~2015년">2013~2015년</label><br>
       <input type="radio" name="entryYear" id="2016~2017년" value="2016~2017년">
       <label for="2016~2017년">2016~2017년</label><br>
       <input type="radio" name="entryYear" id="2018~2020년" value="2018~2020년">
       <label for="2018~2020년">2018~2020년</label><br>
       <input type="radio" name="entryYear" id="2021년 이후" value="2021년 이후">
       <label for="2021년 이후">2021년 이후</label><br><br>
       <input type="button" id="initialSubmit" value="다음" onClick="institutionAutoCheck()">
     </form>

<script type="text/javascript">
  function autoDep2() {
    if(document.querySelector('select[name="department2"]').value != null) {
      document.querySelector('input[value="일반대학 교직과정"]').checked = true;
      document.querySelector('select[name="department3"]').value = null;
    }
  }
  function autoDep3() {
    if(document.querySelector('select[name="department3"]').value != null) {
      document.querySelector('input[value="교육대학원"]').checked = true;
      document.querySelector('select[name="department2"]').value = null;
    }
  }
</script>


   <?php
  }
  require_once('view/bottom.php')
   ?>
