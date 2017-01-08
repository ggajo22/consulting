<?php
  require("view/header.php");
 ?>
<style media="screen">
  #qwrap{width:1120px; height:845px; margin:0 auto; background:url('res/img/index_bg.jpg'); no-repeat center top;}
</style>


 <div class="container">
   <form action="add_process/period_add.php" method="post">
     <div id="qwrap">
       <!-- 시작 주, 몇 주 수강 입력 -->
       <div id="start_week_input" class="form-group test_object">
         <label for="start_week">시작 가능일</label>
         <input type="text" class="form-control" id="start_week" name="start_week" placeholder="시작 가능일을 입력하세요">
       </div>
       <div id="class_week_input" class="form-group test_object">
         <label for="class_week">수강 기간</label>
         <input type="text" class="form-control" id="class_week" name="class_week" placeholder="수강 기간을 입력하세요">
       </div>
       <input type="submit" id="submit_btn" name="" value="제출" class="btn btn-success">
     </div>   
   </form>
 </div>
