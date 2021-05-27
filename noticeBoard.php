<?php
ini_set('display_errors','0');
require_once('lib/print.php');
require_once('view/top.php');
 ?>

 <script type="text/javascript" src="https://cdn.emailjs.com/sdk/2.3.2/email.min.js"></script>
 <script type="text/javascript">
 (function(){
   emailjs.init("user_64eWEvQ4QrPv2mLeqqgE5");
  })();
</script>

<script type="text/javascript"> window.onload = function() {
  document.getElementById('contact-form').addEventListener('submit', function(event) {
     event.preventDefault();
     this.contact_number.value = Math.random() * 100000 | 0;
     emailjs.sendForm('service_green', 'template_hj2j67e', this);
   });
 }

 function emailConfirm() {
   alert('전송되었습니다.');
 }
 </script>
<br>
 <b><font color="blue" size="4px">
   &squ; 문의는 아래 양식을 통해 가능합니다.
 </font></b><br>
 <br><br>

 <form id="contact-form" style="margin-left: 20px;">
   <input type="hidden" name="contact_number">
   <label>&rtrif; 이름(익명)</label>
   <input type="text" name="user_name" style="width:100px; text-align:center;"><br><br>
   <label>&rtrif; 이메일</label>
   <input type="text" name="user_email"><br>
   <b><font size="2px" color="red">&nbsp;&nbsp;* 회신이 필요한 경우에만 입력</font></b><br><br>
   <label>&rtrif; 문의내용</label><br>
   <textarea name="message" style="height:120px; width:500px;"></textarea><br><br>
   <input type="submit" id="전송" value="전송" onClick="emailConfirm();">
 </form>

<?php
require_once('view/bottom.php');
  ?>
