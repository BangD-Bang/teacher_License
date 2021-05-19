<?php
if($_GET['institutionCheck'] != "일반대학 교직과정" and $_GET['institutionCheck'] != "교육대학원") {?>
  <script>
  alert('정확한 소속기관이 아닙니다.\n처음 페이지로 돌아갑니다.');
  location.href='/index.php';
  </script>
  <?php
} else if($_GET['entryYearCheck'] != "2009~2012년" and $_GET['entryYearCheck'] != "2013~2015년" and $_GET['entryYearCheck'] != "2016~2017년" and $_GET['entryYearCheck'] != "2018~2020년" and $_GET['entryYearCheck'] != "2021년 이후") { ?>
  <script>
  alert('정확한 입학년도가 아닙니다.\n처음 페이지로 돌아갑니다.');
  location.href='/index.php';
  </script>
  <?php } ?>

<?php
if($_GET['institutionCheck'] == "일반대학 교직과정") {
  if($_GET['departmentCheck'] != "간호학과" and $_GET['departmentCheck'] != "경제학과" and $_GET['departmentCheck'] != "국어국문학과" and $_GET['departmentCheck'] != "노어노문학과" and $_GET['departmentCheck'] != "독어독문학과" and $_GET['departmentCheck'] != "물리학과") {
    if($_GET['departmentCheck'] != "불어불문학과" and $_GET['departmentCheck'] != "사회학과" and $_GET['departmentCheck'] != "생명과학부" and $_GET['departmentCheck'] != "수학과" and $_GET['departmentCheck'] != "심리학과(심리학부)" and $_GET['departmentCheck'] != "영어영문학과") {
      if($_GET['departmentCheck'] != "일어일문학과" and $_GET['departmentCheck'] != "정치외교학과" and $_GET['departmentCheck'] != "중어중문학과" and $_GET['departmentCheck'] != "지구환경과학과" and $_GET['departmentCheck'] != "철학과") {
        if($_GET['departmentCheck'] != "통계학과" and $_GET['departmentCheck'] != "한문학과" and $_GET['departmentCheck'] != "행정학과" and $_GET['departmentCheck'] != "화학과") {?>
        <script>
        alert('정확한 학과가 아닙니다.\n처음 페이지로 돌아갑니다.');
        location.href='/index.php';
        </script>
        <?php
        }
      }
    }
  }
} else if ($_GET['institutionCheck'] == "교육대학원") {
  if($_GET['departmentCheck'] != "가정교육전공" and $_GET['departmentCheck'] != "국어교육전공" and $_GET['departmentCheck'] != "도덕윤리교육전공" and $_GET['departmentCheck'] != "미술교육전공" and $_GET['departmentCheck'] != "상담심리교육전공" and $_GET['departmentCheck'] != "생물교육전공") {
    if($_GET['departmentCheck'] != "수학교육전공" and $_GET['departmentCheck'] != "역사교육전공" and $_GET['departmentCheck'] != "영어교육전공" and $_GET['departmentCheck'] != "일반사회교육전공" and $_GET['departmentCheck'] != "일어교육전공") {
      if($_GET['departmentCheck'] != "지리교육전공" and $_GET['departmentCheck'] != "체육교육전공" and $_GET['departmentCheck'] != "컴퓨터교육전공") {?>
      <script>
      alert('정확한 전공이 아닙니다.\n처음 페이지로 돌아갑니다.');
      location.href='/index.php';
      </script>
      <?php
      }
    }
  }
}
  ?>

<?php
 ?>
