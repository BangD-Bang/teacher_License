<?php
function print_title() {
    echo "KU 교원자격증 취득요건 자가검진";
}

function print_institution() {
  if(isset($_GET['institution'])) {
    echo $_GET['institution'];
  }
}
function print_entryYear() {
  if(isset($_GET['entryYear'])) {
    echo $_GET['entryYear'];
  }
}
 ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
