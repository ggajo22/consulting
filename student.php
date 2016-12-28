<?php
  require("view/header.php");
 ?>
 <div class="container">
   <form action="result.php" method="post">
     <div id="stud_name_input" class="form-group">
       <label for="stud_name">학생이름</label>
       <input type="text" class="form-control" id="stud_name" name="stud_name" placeholder="학생이름을 입력하세요">
     </div>
     <div id="stud_name_eng_input" class="form-group">
       <label for="stud_name_eng">학생이름(영문)</label>
       <input type="text" class="form-control" id="stud_name_eng" name="stud_name_eng" placeholder="학생이름(영문)을 입력하세요">
     </div>
     <div id="stud_phone_number_input" class="form-group">
       <label for="stud_phone_number">학생연락처</label>
       <input type="text" class="form-control" id="stud_phone_number" name="stud_phone_number" placeholder="학생 연락처를 입력하세요">
     </div>
     <div id="stud_email_input" class="form-group">
       <label for="stud_email">학생이메일</label>
       <input type="email" class="form-control" id="stud_email" name="stud_email" placeholder="학생이메일을 입력하세요">
     </div>
     <div id="stud_school_input" class="form-group">
       <label for="stud_school">학생학교</label>
       <input type="text" class="form-control" id="stud_school" name="stud_school" placeholder="학교를 입력하세요">
     </div>
     <div id="stud_grade_input" class="form-group">
       <label for="stud_grade">학생학년</label>
       <input type="text" class="form-control" id="stud_grade" name="stud_grade" placeholder="학년을 입력하세요">
     </div>
     <div id="pare_name_input" class="form-group">
       <label for="pare_name">부모님이름</label>
       <input type="text" class="form-control" id="pare_name" name="pare_name" placeholder="부모님이름을 입력하세요">
     </div>
     <div id="pare_phone_number_input" class="form-group">
       <label for="pare_phone_number">부모님연락처</label>
       <input type="text" class="form-control" id="pare_phone_number" name="pare_phone_number" placeholder="부모님연락처를 입력하세요">
     </div>
     <div id="pare_email_input" class="form-group">
       <label for="pare_email">부모님이메일</label>
       <input type="email" class="form-control" id="pare_email" name="pare_email" placeholder="부모님이메일을 입력하세요">
     </div>
     <input type="submit" id="submit_btn" name="" value="제출" class="btn btn-success">
   </form>
 </div>
