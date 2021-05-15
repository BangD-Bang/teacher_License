<?php
require_once('lib/print.php');
require_once('view/top.php');
 ?>


    <?php
      if(isset($_GET['institution']) and isset($_GET['entryYear'])) { ?>
        <br><br>
        <b><font color="blue" size="4px">
          아래 각 요건의 취득내역을 기입해주세요.</font><font  color="blue" size="3.5 px"> (직접입력 또는 우측 "과목별로 보기" 사용)</font></b><br><br>


  <?php echo "<h3>소속기관 = ".$_GET['institution']."</h3>";
        //if($_GET['institution'] == "사범대학") {
        //  echo "<h3>소속학과 = ".$_GET['department1']."<h3>";
        //  $department = $_GET['department1'];
        //} else
        if($_GET['institution'] == "일반대학 교직과정") {
          echo "<h3>소속학과 = ".$_GET['department2']."<h3>";
          $department = $_GET['department2'];
          if($department == "null") {
            header('Location: /교원자격증/index.php');
          }
        } else if ($_GET['institution'] == "교육대학원") {
          echo "<h3>소속학과 = ".$_GET['department3']."<h3>";
          $department = $_GET['department3'];
          if($department == "null") {
            header('Location: /교원자격증/index.php');
          }
        }
        echo "<h3>입학년도 = ".$_GET['entryYear']."</h3>";
     ?>

    <script>
    var open_major_basic;
    function openMajorBasic() {
      window.name = "교원자격 자가점검";
      open_major_basic = window.open("기본이수과목.php"+"?department=<?php echo $department; ?>","기본이수과목 과목별로 보기","width=570, height=400, resizable=no");
    }
    var open_major_edu332;
    function openMajorEdu332() {
      window.name = "교원자격 자가점검";
      open_major_edu332 = window.open("교과교육영역332.php","교과교육영역 과목별로 보기","width=570, height=400, resizable=no");
    }
    var open_major_edu323;
    function openMajorEdu323() {
      window.name = "교원자격 자가점검";
      open_major_edu323 = window.open("교과교육영역323.php","교과교육영역 과목별로 보기","width=570, height=400, resizable=no");
    }
    var open_major_edu333;
    function openMajorEdu333() {
      window.name = "교원자격 자가점검";
      open_major_edu333 = window.open("교과교육영역333.php","교과교육영역 과목별로 보기","width=570, height=400, resizable=no");
    }
    var open_major_edu222;
    function openMajorEdu222() {
      window.name = "교원자격 자가점검";
      open_major_edu222 = window.open("교과교육영역222.php","교과교육영역 과목별로 보기","width=570, height=400, resizable=no");
    }
    var open_major_edu_none;
    function openMajorEduNone() {
      window.name = "교원자격 자가점검";
      open_major_edu_none = window.open("교과교육영역(해당없음).php","교과교육영역 과목별로 보기","width=570, height=400, resizable=no");
    }
    var open_edu_theory;
    function openEduTheory() {
      window.name = "교원자격 자가점검";
      open_edu_theory = window.open("교직이론.php","교직이론 과목별로 보기","width=570, height=400, resizable=no");
    }
    var open_edu_theory0912;
    function openEduTheory0912() {
      window.name = "교원자격 자가점검";
      open_edu_theory0912 = window.open("교직이론0912.php","교직이론 과목별로 보기","width=570, height=400, resizable=no");
    }

    var open_edu_refine;
    function openEduRefine() {
      window.name = "교원자격 자가점검";
      open_edu_refine = window.open("교직소양.php","교직소양 과목별로 보기","width=570, height=400, resizable=no");
    }
    var open_edu_refine0912;
    function openEduRefine0912() {
      window.name = "교원자격 자가점검";
      open_edu_refine0912 = window.open("교직소양0912.php","교직소양 과목별로 보기","width=570, height=400, resizable=no");
    }
    var open_edu_practice;
    function openEduPractice() {
      window.name = "교원자격 자가점검";
      open_edu_practice = window.open("교육실습.php","교육실습 과목별로 보기","width=570, height=400, resizable=no");
    }

    function departmentAlert() {
      alert('올바른 학과가 아닙니다.');
    }
    </script>



    <form action="result.php">
      <input type="hidden" name="institutionCheck" value="<?php echo $_GET['institution']; ?>">
      <input type="hidden" name="departmentCheck" value="<?php echo $department; ?>">
      <input type="hidden" name="entryYearCheck" value="<?php echo $_GET['entryYear']; ?>">
      <input type="hidden" id="area_check" name="area_check" value="(영역조건 이수여부 확인불가)<br>">
      <p>
        기본이수과목
        <input type="number" min="0" id="majorBasic" name="majorBasic" placeholder="기본이수과목">학점
        <input type="button" value="<?php echo $department; ?>&nbsp;기본이수과목 과목별로 보기" onclick="
        <?php
        $filename = './기본이수과목/'.$department.'.php';
        if(file_exists($filename)) { ?>
        openMajorBasic()
      <?php } else { ?>
        departmentAlert()
      <?php } ?>
        ">
        <br>
        <b><font color="blue" size="3.3px">&#42; 기본이수과목은 정확한 결과를 위해 "과목별로 보기" 사용</font></b>
      </p>
      <?php if($department == "심리학과(심리학부)" or $department == "간호학과") { ?>

      <?php } else { ?>
      <p>
        교과교육영역
        <input type="number" min="0" id="majorEdu" name="majorEdu" placeholder="교과교육영역">학점
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
        교직이론
        <input type="number" min="0" id="eduTheory" name="eduTheory" placeholder="교직이론">학점
        <input type="button" value="과목별로 보기" onclick=
        <?php if ($_GET['entryYear'] == "2009~2012년") { ?>
        "openEduTheory0912()"
        <?php } else { ?>
        "openEduTheory()"
        <?php } ?>
        >
      </p>
      <p>
        교직소양
        <input type="number" min="0" id="eduRefine" name="eduRefine" placeholder="교직소양">학점
        <input type="button" value="과목별로 보기" onclick=
        <?php if ($_GET['entryYear'] == "2009~2012년") { ?>
        "openEduRefine0912()"
        <?php } else { ?>
        "openEduRefine()"
        <?php } ?>
         >
      </p>
      <p>
        교육실습
        <input type="number" min="0" id="eduPractice" name="eduPractice" placeholder="교육실습">학점
        <input type="button" value="과목별로 보기" onclick="openEduPractice()">
      </p>
      <p>
        교직 적성 및 인성검사
        <input type="number" min="0" name="eduTest" placeholder="적합횟수">회 적합
      </p>
      <p>
        응급처치 및 심폐소생술 교육
        <input type="number" min="0" name="cpr" placeholder="이수횟수">회 이수
      </p>
      <p>
        전공/교직 평점평균(4.5만점)
        <input type="number" step="0.01" min="0" name="majorAvr" placeholder="전공평점">점
        <input type="number" step="0.01" min="0" name="eduAvr" placeholder="교직평점">점
      </p>
    <?php if($_GET['entryYear'] == "2016~2020년" or $_GET['entryYear'] == "2021년 이후") { ?>
      <p>
        성인지교육
        <input type="number" min="0" name="gender" placeholder="이수횟수">회 이수
      </p>
    <?php } else {} ?>

      <p>
        <input type="submit">
      </p>
      <br><br><br><br><br><br>
    </form>
    <?php
  } else {
     ?>
     <br>
     <b><font color="blue" size="4px">소속과 학과, 입학년도를 선택해주세요.</font></b>

     <form action="index.php" name="basic">
       <h3>소속구분</h3>
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
       <input type="radio" name="institution" value="일반대학 교직과정">
       <label for="일반대학 교직과정">일반대학 교직과정</label>
       <select type=radio name="department2">
         <option value=null></option>
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
       <input type="radio" name="institution" value="교육대학원">
       <label for="교육대학원">교육대학원</label>
       <select type=radio name="department3">
         <option value=null></option>
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
        <h3>입학년도</h3>
       <input type="radio" name="entryYear" value="2009~2012년">
       <label for="2009~2012년">2009~2012년</label><br>
       <input type="radio" name="entryYear" value="2013~2015년">
       <label for="2013~2015년">2013~2015년</label><br>
       <input type="radio" name="entryYear" value="2016~2020년">
       <label for="2016~2020년">2016~2020년</label><br>
       <input type="radio" name="entryYear" value="2021년 이후">
       <label for="2021년 이후">2021년 이후</label><br><br>
       <input type="submit" value="다음"><br><br><br><br><br><br><br>
     </form>
   <?php
  }
  require_once('view/bottom.php')
   ?>
