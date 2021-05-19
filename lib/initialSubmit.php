<script type="text/javascript">
function institutionAutoCheck() {
  if(document.querySelector('input[value="일반대학 교직과정"]').checked == false && document.querySelector('input[value="교육대학원"]').checked == false) {
    alert('소속기관을 선택해주세요.');
  } else if(document.querySelector('input[value="일반대학 교직과정"]').checked == true || document.querySelector('input[value="교육대학원"]').checked == true) {
    departmentAutoCheck();
  }
}
function departmentAutoCheck() {
  if(document.querySelector('input[value="일반대학 교직과정"]').checked == true) {
    if(document.querySelector('select[name="department2"]').value == "null") {
      alert('학과를 선택해주세요.');
    } else if(document.querySelector('select[name="department2"]').value != "null") {
      yearAutoCheck();
    }
  } else if(document.querySelector('input[value="교육대학원"]').checked == true) {
    if(document.querySelector('select[name="department3"]').value == "null") {
      alert('전공을 선택해주세요.');
    } else if(document.querySelector('select[name="department3"]').value != "null") {
      yearAutoCheck();
    }
  }
}
function yearAutoCheck() {
  if(document.querySelector('input[value="2009~2012년"]').checked == true || document.querySelector('input[value="2013~2015년"]').checked == true || document.querySelector('input[value="2016~2017년"]').checked == true || document.querySelector('input[value="2018~2020년"]').checked == true || document.querySelector('input[value="2021년 이후"]').checked == true) {
    if(document.querySelector('input[value="일반대학 교직과정"]').checked == true && document.querySelector('input[value="2009~2012년"]').checked == true) {
      pageConfirm1_1();
    } else if(document.querySelector('input[value="일반대학 교직과정"]').checked == true && document.querySelector('input[value="2013~2015년"]').checked == true) {
      pageConfirm1_2();
    } else if(document.querySelector('input[value="일반대학 교직과정"]').checked == true && document.querySelector('input[value="2016~2017년"]').checked == true) {
      pageConfirm1_3();
    } else if(document.querySelector('input[value="일반대학 교직과정"]').checked == true && document.querySelector('input[value="2018~2020년"]').checked == true) {
      pageConfirm1_4();
    } else if(document.querySelector('input[value="일반대학 교직과정"]').checked == true && document.querySelector('input[value="2021년 이후"]').checked == true) {
      pageConfirm1_5();
    } else if(document.querySelector('input[value="교육대학원"]').checked == true && document.querySelector('input[value="2009~2012년"]').checked == true) {
      pageConfirm2_1();
    } else if(document.querySelector('input[value="교육대학원"]').checked == true && document.querySelector('input[value="2013~2015년"]').checked == true) {
      pageConfirm2_2();
    } else if(document.querySelector('input[value="교육대학원"]').checked == true && document.querySelector('input[value="2016~2017년"]').checked == true) {
      pageConfirm2_3();
    } else if(document.querySelector('input[value="교육대학원"]').checked == true && document.querySelector('input[value="2018~2020년"]').checked == true) {
      pageConfirm2_4();
    } else if(document.querySelector('input[value="교육대학원"]').checked == true && document.querySelector('input[value="2021년 이후"]').checked == true) {
      pageConfirm2_5();
    }
  } else {
    alert('입학년도를 선택해주세요.');
  }
}

function pageConfirm1_1() {
  const instCheck = "일반대학 교직과정"
  const deptCheck = document.querySelector('select[name="department2"]').value;
  const yearCheck = "2009~2012년"
  if(confirm("선택하신 내용이 맞습니까?\n\n소속기관: "+instCheck+"\n학과: "+deptCheck+"\n입학년도: "+yearCheck)) {
    document.basic.submit();
  } else {
    return;
  }
}
function pageConfirm1_2() {
  const instCheck = "일반대학 교직과정"
  const deptCheck = document.querySelector('select[name="department2"]').value;
  const yearCheck = "2013~2015년"
  if(confirm("선택하신 내용이 맞습니까?\n\n소속기관: "+instCheck+"\n학과: "+deptCheck+"\n입학년도: "+yearCheck)) {
    document.basic.submit();
  } else {
    return;
  }
}
function pageConfirm1_3() {
  const instCheck = "일반대학 교직과정"
  const deptCheck = document.querySelector('select[name="department2"]').value;
  const yearCheck = "2016~2017년"
  if(confirm("선택하신 내용이 맞습니까?\n\n소속기관: "+instCheck+"\n학과: "+deptCheck+"\n입학년도: "+yearCheck)) {
    document.basic.submit();
  } else {
    return;
  }
}
function pageConfirm1_4() {
  const instCheck = "일반대학 교직과정"
  const deptCheck = document.querySelector('select[name="department2"]').value;
  const yearCheck = "2018~2020년"
  if(confirm("선택하신 내용이 맞습니까?\n\n소속기관: "+instCheck+"\n학과: "+deptCheck+"\n입학년도: "+yearCheck)) {
    document.basic.submit();
  } else {
    return;
  }
}
function pageConfirm1_5() {
  const instCheck = "일반대학 교직과정"
  const deptCheck = document.querySelector('select[name="department2"]').value;
  const yearCheck = "2021년 이후"
  if(confirm("선택하신 내용이 맞습니까?\n\n소속기관: "+instCheck+"\n학과: "+deptCheck+"\n입학년도: "+yearCheck)) {
    document.basic.submit();
  } else {
    return;
  }
}
function pageConfirm2_1() {
  const instCheck = "교육대학원"
  const deptCheck = document.querySelector('select[name="department3"]').value;
  const yearCheck = "2009~2012년"
  if(confirm("선택하신 내용이 맞습니까?\n\n소속기관: "+instCheck+"\n전공: "+deptCheck+"\n입학년도: "+yearCheck)) {
    document.basic.submit();
  } else {
    return;
  }
}
function pageConfirm2_2() {
  const instCheck = "교육대학원"
  const deptCheck = document.querySelector('select[name="department3"]').value;
  const yearCheck = "2013~2015년"
  if(confirm("선택하신 내용이 맞습니까?\n\n소속기관: "+instCheck+"\n전공: "+deptCheck+"\n입학년도: "+yearCheck)) {
    document.basic.submit();
  } else {
    return;
  }
}
function pageConfirm2_3() {
  const instCheck = "교육대학원"
  const deptCheck = document.querySelector('select[name="department3"]').value;
  const yearCheck = "2016~2017년"
  if(confirm("선택하신 내용이 맞습니까?\n\n소속기관: "+instCheck+"\n전공: "+deptCheck+"\n입학년도: "+yearCheck)) {
    document.basic.submit();
  } else {
    return;
  }
}
function pageConfirm2_4() {
  const instCheck = "교육대학원"
  const deptCheck = document.querySelector('select[name="department3"]').value;
  const yearCheck = "2018~2020년"
  if(confirm("선택하신 내용이 맞습니까?\n\n소속기관: "+instCheck+"\n전공: "+deptCheck+"\n입학년도: "+yearCheck)) {
    document.basic.submit();
  } else {
    return;
  }
}
function pageConfirm2_5() {
  const instCheck = "교육대학원"
  const deptCheck = document.querySelector('select[name="department3"]').value;
  const yearCheck = "2021년 이후"
  if(confirm("선택하신 내용이 맞습니까?\n\n소속기관: "+instCheck+"\n전공: "+deptCheck+"\n입학년도: "+yearCheck)) {
    document.basic.submit();
  } else {
    return;
  }
}
</script>
