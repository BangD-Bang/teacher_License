<?php
if($_GET['institution'] != "일반대학 교직과정" and $_GET['institution'] != "교육대학원") {?>
  <script>
  alert('정확한 소속기관이 아닙니다.\n처음 페이지로 돌아갑니다.');
  location.href='/index.php';
  </script>
  <?php
} else if($_GET['entryYear'] != "2009~2012년" and $_GET['entryYear'] != "2013~2015년" and $_GET['entryYear'] != "2016~2017년" and $_GET['entryYear'] != "2018~2020년" and $_GET['entryYear'] != "2021년 이후") { ?>
  <script>
  alert('정확한 입학년도가 아닙니다.\n처음 페이지로 돌아갑니다.');
  location.href='/index.php';
  </script>
  <?php } ?>
<?php
if($_GET['institution'] == "일반대학 교직과정") {
  $department = $_GET['department2'];
  if($department != "간호학과" and $department != "경제학과" and $department != "국어국문학과" and $department != "노어노문학과" and $department != "독어독문학과" and $department != "물리학과" and $department != "불어불문학과" and $department != "사회학과" and $department != "생명과학부") {
    if($department != "수학과" and $department != "심리학과(심리학부)" and $department != "영어영문학과" and $department != "일어일문학과" and $department != "정치외교학과" and $department != "중어중문학과" and $department != "지구환경과학과" and $department != "철학과" and $department != "통계학과") {
      if($department != "한문학과" and $department != "행정학과" and $department != "화학과") { ?>
        <script>
        alert('정확한 학과가 아닙니다.\n처음 페이지로 돌아갑니다.');
        location.href='/index.php';
        </script>
        <?php
      }
    }
  }
} else if ($_GET['institution'] == "교육대학원") {
  $department = $_GET['department3'];
  if($department != "가정교육전공" and $department != "국어교육전공" and $department != "도덕윤리교육전공" and $department != "미술교육전공" and $department != "상담심리교육전공" and $department != "생물교육전공" and $department != "수학교육전공" and $department != "역사교육전공" and $department != "영어교육전공") {
    if($department != "일반사회교육전공" and $department != "일어교육전공" and $department != "지리교육전공" and $department != "체육교육전공" and $department != "컴퓨터교육전공") { ?>
      <script>
      alert('정확한 전공이 아닙니다.\n처음 페이지로 돌아갑니다.');
      location.href='/index.php';
      </script>
      <?php
    }
  }
}
 ?>
